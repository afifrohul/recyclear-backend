@extends('admin.layouts.app')
@section('content')
<div>
    <div class="card mb-8">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Edit Tag</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('/tag/update',$getDetailTag->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mt-3">
                    <label class="text-gray-700 ml-1">Nama : </label>
                    <input type="text" name="name" class="form-input w-full block rounded mt-1 p-3 border-2 @error('name') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="Lorem ipsum dolor sit amet" value="{{$getDetailTag->name}}">
                    @error('name')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label class="text-gray-700 ml-1">Kode Warna (hexadesimal): </label>
                    <input type="text" name="color_code" class="form-input w-full block rounded mt-1 p-3 border-2 @error('color_code') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="#ffffff" value="{{$getDetailTag->color_code}}" id="colors">
                    @error('color_code')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mt-3 grid grid-cols-2 gap-6 xl:grid-cols-1 items-center">
                    <div>
                        <label class="text-gray-700 ml-1">Preview : </label>
                        <div class='flex items-center justify-center w-full mt-2'>
                            <label class='flex flex-col border-4 border-dashed w-full h-auto border-teal-500 group bg-gray-300'>
                                    <div class='flex flex-col items-center justify-center py-1'>
                                        <div class="w-16 h-16" style="background-color: {{ $getDetailTag->color_code }}" id="preview"></div>
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
    const color = document.querySelector('#colors');
    const preview = document.querySelector('#preview');

    color.addEventListener('change', function () {
        preview.style.backgroundColor = color.value
        
    })
</script>
@endsection