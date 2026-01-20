@extends('backend.admin')
@section('content')

@section('site-title')
    Admin | Edit Project
@endsection
@section('page-main-title')
    EDIT PROJECT
@endsection

<style>
.input {
    width: 100%;
    border: 1px solid #ccc;
    padding: 8px;
    border-radius: 6px;
}
.section {
    border: 1px solid #ddd;
    padding: 16px;
    border-radius: 10px;
    background: #f9f9f9;
}
.img-thumb {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 4px;
}
</style>

<div class="container p-6">

    <form method="POST" action="{{ route('project.update', $project->id) }}" x-data="projectForm({{ $project->category ? json_encode($project->category) : '[]' }})"
        class="space-y-8" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- PROJECT INFO -->
        <div class="section space-y-4">
            <h2 class="text-xl font-bold">Project Info</h2>
            <div class="grid grid-cols-3 gap-4">
                <input name="name_en" placeholder="Project Name EN" class="input" value="{{ $project->name_en }}">
                <input name="name_kh" placeholder="Project Name KH" class="input" value="{{ $project->name_kh }}">
                <input name="name_ch" placeholder="Project Name CH" class="input" value="{{ $project->name_ch }}">
            </div>
            <div class="grid grid-cols-3 gap-4">
                <input name="type_en" placeholder="Project Type EN" class="input" value="{{ $project->type_en }}">
                <input name="type_kh" placeholder="Project Type KH" class="input" value="{{ $project->type_kh }}">
                <input name="type_ch" placeholder="Project Type CH" class="input" value="{{ $project->type_ch }}">
            </div>
            <input type="file" name="image"  class="input mt-4"/>
        </div>

        <!-- LOCATION -->
        <div class="section space-y-4">
            <h2 class="text-xl font-bold">Location</h2>
            <div class="grid grid-cols-3 gap-4">
                <input name="locate_text_en" placeholder="Location Text EN" class="input" value="{{ $project->locate_text_en }}">
                <input name="locate_text_kh" placeholder="Location Text KH" class="input" value="{{ $project->locate_text_kh }}">
                <input name="locate_text_ch" placeholder="Location Text CH" class="input" value="{{ $project->locate_text_ch }}">
            </div>
            <input name="locate_link" placeholder="Google Map Link" class="input" value="{{ $project->locate_link }}">
            <div class="mb-4">
                <label for="pdf" class="block text-gray-700 font-medium mt-4">Upload PDF</label>
                @if($project->pdf)
                    <p class="mb-2">
                        Current PDF:
                        <a href="{{ asset('storage/'.$project->pdf) }}" target="_blank" class="text-blue-600 underline">
                            View / Download
                        </a>
                    </p>
                @endif
                <input type="file" name="pdf" id="pdf" accept="application/pdf" class="border p-2 rounded w-full">
            </div>

        </div>

        <!-- CATEGORIES -->
        <div class="section space-y-4">
            <h2 class="text-xl font-bold">Categories</h2>

            <button type="button" @click="addCategory()" class="bg-green-600 text-white px-4 py-2 rounded mb-4">
                + Add Category
            </button>

            <template x-for="(cat, cIndex) in categories" :key="cIndex">
                <div class="border p-4 rounded bg-white space-y-4">

                    <div class="flex justify-between">
                        <h3 class="font-bold">Category</h3>
                        <button type="button" @click="removeCategory(cIndex)" class="text-red-600">✕</button>
                    </div>

                    <!-- CATEGORY NAME -->
                    <div class="grid grid-cols-3 gap-2">
                        <input x-model="cat.name.en" @input="cat.slug = slugify(cat.name.en)" placeholder="Category EN" class="input">
                        <input x-model="cat.name.kh" placeholder="Category KH" class="input">
                        <input x-model="cat.name.ch" placeholder="Category CH" class="input">
                    </div>

                    <input x-model="cat.slug" readonly class="input bg-gray-100 d-none">

                    <!-- TYPES -->
                    <template x-for="(type, tIndex) in cat.cat_type" :key="tIndex">
                        <div class="border p-3 rounded space-y-3">

                            <div class="flex justify-between">
                                <h4 class="font-semibold">Type</h4>
                                <button type="button" @click="removeType(cIndex, tIndex)" class="text-red-600">✕</button>
                            </div>

                            <div class="grid grid-cols-3 gap-2">
                                <input x-model="type.title.en" @input="type.slug = slugify(type.title.en)" placeholder="Title EN" class="input">
                                <input x-model="type.title.kh" placeholder="Title KH" class="input">
                                <input x-model="type.title.ch" placeholder="Title CH" class="input">
                            </div>

                            <input x-model="type.slug" readonly class="input bg-gray-100 d-none">

                            <div class="grid grid-cols-3 gap-2">
                                <textarea x-model="type.des.en" placeholder="Desc EN" class="input"></textarea>
                                <textarea x-model="type.des.kh" placeholder="Desc KH" class="input"></textarea>
                                <textarea x-model="type.des.ch" placeholder="Desc CH" class="input"></textarea>
                            </div>

                            <!-- IMAGES -->
                            <div class="space-y-2">
                                <template x-for="(preview, iIndex) in type.imgPreview" :key="iIndex">
                                    <div class="d-flex align-items-center mb-2">
                                        <input type="file" :name="'category[' + cIndex + '][cat_type][' + tIndex + '][img][]'" @change="previewImage($event, cIndex, tIndex, iIndex)" class="form-control me-2">
                                        <template x-if="type.imgPreview[iIndex]">
                                            <img :src="type.imgPreview[iIndex]" class="img-thumbnail" style="width:80px; height:80px; object-fit:cover;">
                                        </template>
                                        <button type="button" @click="removeImage(cIndex, tIndex, iIndex)" class="btn btn-sm btn-danger">✕</button>
                                    </div>
                                </template>

                                <button type="button" @click="addImage(cIndex, tIndex)" class="btn btn-sm btn-primary">+ Add Image</button>
                            </div>

                        </div>
                    </template>

                    <button type="button" @click="addType(cIndex)" class="bg-blue-600 text-white px-3 py-1 rounded">
                        + Add Type
                    </button>

                </div>
            </template>
        </div>

        <input type="hidden" name="category_json" :value="JSON.stringify(categories)">

        <button class="bg-black text-white px-8 py-3 rounded-xl">
            Update Project
        </button>

    </form>
</div>

<script>
function slugify(text) {
    return text.toLowerCase().trim()
        .replace(/[^\w\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-');
}

function projectForm(initialCategories = []) {
    return {
        categories: initialCategories.map(cat => ({
            ...cat,
            cat_type: cat.cat_type.map(type => ({
                ...type,
                imgPreview: type.img || [] // use existing images
            }))
        })),

        addCategory() {
            this.categories.push({
                name: { en:'', kh:'', ch:'' },
                slug: '',
                cat_type: [this.newType()]
            })
        },

        removeCategory(i) {
            this.categories.splice(i, 1)
        },

        addType(c) {
            this.categories[c].cat_type.push(this.newType())
        },

        removeType(c, t) {
            this.categories[c].cat_type.splice(t, 1)
        },

        addImage(c, t) {
            this.categories[c].cat_type[t].imgPreview = this.categories[c].cat_type[t].imgPreview || []
            this.categories[c].cat_type[t].imgPreview.push(null)
        },

        removeImage(c, t, i) {
            if (this.categories[c].cat_type[t].imgPreview)
                this.categories[c].cat_type[t].imgPreview.splice(i, 1)
        },

        previewImage(event, c, t, i) {
            const file = event.target.files[0]
            if (!file) return
            this.categories[c].cat_type[t].imgPreview = this.categories[c].cat_type[t].imgPreview || []
            this.categories[c].cat_type[t].imgPreview[i] = URL.createObjectURL(file)
        },

        newType() {
            return {
                title: { en:'', kh:'', ch:'' },
                slug: '',
                des: { en:'', kh:'', ch:'' },
                imgPreview: []
            }
        }
    }
}
</script>
@endsection
