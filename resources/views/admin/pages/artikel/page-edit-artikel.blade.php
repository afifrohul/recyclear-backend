@extends('admin.layouts.app')
@section('content')
<div>
    <div class="card mb-8">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Edit Artikel</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('/artikel/update',$getDetailArtikel->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div>
                    <label class="text-gray-700 ml-1">Judul : </label>
                    <input type="text" name="title" class="form-input w-full block rounded mt-1 p-3 border-2 @error('title') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="Lorem Ipsum Dolor Sit Amet" value="{{$getDetailArtikel->title}}">
                    @error('title')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label class="text-gray-700 ml-1">Deskripsi : </label>
                    {{-- <input type="text" name="description" class="form-input w-full block rounded mt-1 p-3 border-2 @error('description') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="Lorem ipsum dolor sit amet" value="{{$getDetailArtikel->description}}"> --}}
                    <textarea name="description" id="editor" class="form-input w-full block rounded mt-1 p-3 border-2 @error('description') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="Lorem ipsum dolor sit amet">{{$getDetailArtikel->description}}</textarea>
                    @error('description')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label class="text-gray-700 ml-1">Tag : </label>
                    <select name="tags[]" class="multi_tag form-input mt-1 p-3 border-2 @error('tag') border-red-500 @enderror focus:outline-none focus:border-teal-500 form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0" multiple='multiple'>
                    @foreach ($getAllTag as $itemTag)
                        <option value="{{$itemTag->id}}" 
                            @if (in_array($itemTag->name, $tag_name))
                            selected='selected' 
                            @endif
                            >{{$itemTag->name}}</option>
                    @endforeach
                    </select>
                    @error('tag')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mt-3 grid grid-cols-2 gap-6 xl:grid-cols-1 items-center">
                    <div>
                        <label class="text-gray-700 ml-1">Thumbnail : </label>
                        <div class='flex items-center justify-center w-full mt-2'>
                            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-teal-500 group'>
                                <div class='flex flex-col items-center justify-center pt-7 text-center'>
                                    <svg class="w-10 h-10 mt-8 text-teal-500 group-hover:text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <p class='text-sm text-gray-400 group-hover:text-teal-600 pt-1 tracking-wider' id="fileName">Pilih Gambar</p>
                                </div>
                            <input type='file' class="hidden" name="thumbnail" id="thumbnails" />
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="text-gray-700 ml-1">Preview : </label>
                        <div class='flex items-center justify-center w-full mt-2'>
                            <label class='flex flex-col border-4 border-dashed w-full h-auto border-teal-500 group bg-gray-300'>
                                    <div class='flex flex-col items-center justify-center py-1'>
                                        <img id="preview" src="{{asset('assets/upload/artikel')}}/{{$getDetailArtikel->thumbnail}}" alt="preview" class="object-cover h-32">
                                    </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn-shadow">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    thumbnails.onchange = evt => {
        const [file] = thumbnails.files;
        if (file) {
            preview.src = URL.createObjectURL(file);
            fileName.innerHTML = document.getElementById("thumbnails").value.split("\\").pop();
        }
    },
    $(".multi_tag").select2({
        width: 'resolve',
        tags:true
    });
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
</script>
@endsection