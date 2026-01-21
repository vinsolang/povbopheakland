<?php

namespace App\Http\Controllers\backend;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('backend.projects.view-project', compact('projects'));
    }

    public function create()
    {
        return view('backend.projects.add-project');
    }

    public function store(Request $request)
    {
        $categories = $request->category_json ? json_decode($request->category_json, true) : [];

        foreach ($categories as $cIndex => &$cat) {
            foreach ($cat['cat_type'] as $tIndex => &$type) {
                $newImages = [];

                // Check if files exist for this type
                if ($request->has("category.$cIndex.cat_type.$tIndex.img")) {
                    $files = $request->file("category.$cIndex.cat_type.$tIndex.img");

                    if (is_array($files)) {
                        foreach ($files as $file) {
                            // Store file and get path
                            $newImages[] = $file->store('projects', 'public');
                        }
                    }
                }

                $type['img'] = $newImages; // store actual paths
            }
        }

        $pdfPath = null;
        if ($request->hasFile('pdf')) {
            $request->validate([
                'pdf' => 'mimes:pdf|max:204800',
            ]);

            $pdfPath = $request->file('pdf')->store('projects/pdf', 'public');
        }

        $mainImagePath = null;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240', // max 10MB
            ]);

            $mainImagePath = $request->file('image')->store('projects/images', 'public');
        }

        Project::create([
            'name_en' => $request->name_en,
            'name_kh' => $request->name_kh,
            'name_ch' => $request->name_ch,
            'slug' =>  Str::slug($request->name_en),
            'type_en' => $request->type_en,
            'type_kh' => $request->type_kh,
            'type_ch' => $request->type_ch,
            'category' => $categories,
            'locate_text_en' => $request->locate_text_en,
            'locate_text_kh' => $request->locate_text_kh,
            'locate_text_ch' => $request->locate_text_ch,
            'locate_link' => $request->locate_link,
            'pdf' => $pdfPath,
            'image' => $mainImagePath, // <-- new field

        ]);

        return redirect()->route('project.index')->with('success', 'Project saved successfully');
    }



    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('backend.projects.update-project', compact('project'));
    }

    // Update project
    public function update(Request $request, Project $project)
    {
        $categories = $request->category_json ? json_decode($request->category_json, true) : [];

        foreach ($categories as $cIndex => &$cat) {
            foreach ($cat['cat_type'] as $tIndex => &$type) {
                $newImages = $type['img'] ?? [];

                if ($request->has("category.$cIndex.cat_type.$tIndex.img")) {
                    $files = $request->file("category.$cIndex.cat_type.$tIndex.img");

                    if (is_array($files)) {
                        foreach ($files as $file) {
                            $newImages[] = $file->store('projects', 'public');
                        }
                    }
                }

                $type['img'] = $newImages; // store actual paths
            }
        }

        // Handle PDF update
        $pdfPath = $project->pdf;

        if ($request->hasFile('pdf')) {

            $request->validate([
                'pdf' => 'mimes:pdf|max:204800',
            ]);

            // Delete old PDF
            if ($pdfPath && Storage::disk('public')->exists($pdfPath)) {
                Storage::disk('public')->delete($pdfPath);
            }

            $pdfPath = $request->file('pdf')->store('projects/pdf', 'public');
        }

        $mainImagePath = $project->image ?? null;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            ]);

            // Delete old image
            if ($mainImagePath && Storage::disk('public')->exists($mainImagePath)) {
                Storage::disk('public')->delete($mainImagePath);
            }

            $mainImagePath = $request->file('image')->store('projects/images', 'public');
        }

        $project->update([
            'name_en' => $request->name_en,
            'name_kh' => $request->name_kh,
            'name_ch' => $request->name_ch,
            'slug' =>  Str::slug($request->name_en),
            'type_en' => $request->type_en,
            'type_kh' => $request->type_kh,
            'type_ch' => $request->type_ch,
            'category' => $categories,
            'locate_text_en' => $request->locate_text_en,
            'locate_text_kh' => $request->locate_text_kh,
            'locate_text_ch' => $request->locate_text_ch,
            'locate_link' => $request->locate_link,
            'pdf' => $pdfPath,
            'image' => $mainImagePath,
        ]);

        return redirect()->route('project.index')->with('success', 'Project updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::findOrFail($id)->delete();

        return redirect()
            ->route('project.index')
            ->with('success', 'Project deleted successfully');
    }
}

