@extends('admin.layouts.app')
@section('content')
<div>
    <div class="card mb-8">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Tambah Portfolio Galeri</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('portfolio-gallery/new')}}" enctype="multipart/form-data">
                @csrf
                <div class="mt-3">
                    <label class="text-gray-700 ml-1">Portfolio : </label>
                    <select name="portfolio" class="form-input mt-1 p-3 border-2 @error('portfolio') border-red-500 @enderror focus:outline-none focus:border-teal-500 form-select appearance-none block w-full px-3
                    py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0">
                    @foreach ($getAllPortfolio as $itemPortfolio)
                        <option value="{{$itemPortfolio->id}}">{{$itemPortfolio->title}}</option>
                    @endforeach
                    </select>
                    @error('portfolio')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mt-3 grid grid-cols-2 gap-6 xl:grid-cols-1 items-center">
                    <div>
                        <label class="text-gray-700 ml-1">Gambar : </label>
                        <div class='flex items-center justify-center w-full mt-2'>
                            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-teal-500 group'>
                                <div class='flex flex-col items-center justify-center pt-7 text-center'>
                                    <svg class="w-10 h-10 mt-8 text-teal-500 group-hover:text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <p class='text-sm text-gray-400 group-hover:text-teal-600 pt-1 tracking-wider' id="fileName">Pilih Gambar</p>
                                </div>
                            <input type='file' class="hidden" name="image" id="logos" />
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="text-gray-700 ml-1">Preview : </label>
                        <div class='flex items-center justify-center w-full mt-2'>
                            <label class='flex flex-col border-4 border-dashed w-full h-auto border-teal-500 group bg-gray-300'>
                                    <div class='flex flex-col items-center justify-center py-1'>
                                        <img id="preview" src="{{asset('assets/upload/portfolio/default.png')}}" alt="preview" class="object-cover h-32">
                                    </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label class="text-gray-700 ml-1">Caption : </label>
                    <input type="text" name="caption" class="form-input w-full block rounded mt-1 p-3 border-2 @error('caption') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="Lorem ipsum dolor sit amet" value="{{old('caption')}}">
                    @error('caption')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn-shadow">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">List Galeri portfolio</h1>
        </div>
        <div class="card-body">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg p-3">
                <table class="min-w-full divide-y divide-gray-200" id="dataTable">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama Portfolio
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Gambar
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Opsi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($getAllPortfolioGallery as $item)  
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">{{$loop->iteration}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">{{$item->judul_portfolio}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">
                                    <div class="text-sm text-gray-900">
                                        <img class="h-16 object-cover m-auto" src="{{asset('assets/upload/portfolio-gallery')}}/{{$item->image}}">
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                                <form action="{{url('/portfolio-gallery/edit',$item->id)}}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="bg-teal-500 h-10 w-10 rounded hover:bg-teal-600"><i class="fa fa-pencil text-white"></i></button>
                                </form>&nbsp;
                                <form action="{{url('/portfolio-gallery/destroy',$item->id)}}" method="POST" class="inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="bg-red-600 h-10 w-10 rounded hover:bg-red-700" onclick="return confirm('Hapus Data ?')"><i class="fa fa-trash text-white"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('extraJS')
<script>
    logos.onchange = evt => {
        const [file] = logos.files;
        if (file) {
            preview.src = URL.createObjectURL(file);
            fileName.innerHTML = document.getElementById("logos").value.split("\\").pop();
        }
    }
</script>
@endsection