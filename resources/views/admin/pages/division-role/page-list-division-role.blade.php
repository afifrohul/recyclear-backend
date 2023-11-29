@extends('admin.layouts.app')
@section('content')
<div>
    <div class="card mb-8">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Tambah Divisi Role</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('division-role/new')}}" enctype="multipart/form-data">
                @csrf
                <div class="mt-3">
                    <label class="text-gray-700 ml-1">Divisi : </label>
                    <select name="role" class="form-input mt-1 p-3 border-2 @error('role') border-red-500 @enderror focus:outline-none focus:border-teal-500 form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0">
                        <option value="Badan Pengurus Inti">Badan Pengurus Inti</option>
                        <option value="Hubungan Masyarakat">Hubungan Masyarakat</option>
                        <option value="Kewirausahaan">Kewirausahaan</option>
                        <option value="Penelitian dan Pengembangan">Penelitian dan Pengembangan</option>
                        <option value="Media dan Teknologi">Media dan Teknologi</option>
                        <option value="Pengembangan Sumber Daya Mahasiswa">Pengembangan Sumber Daya Mahasiswa</option>
                    </select>
                    @error('role')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label class="text-gray-700 ml-1">Jabatan : </label>
                    <select name="name" class="form-input mt-1 p-3 border-2 @error('name') border-red-500 @enderror focus:outline-none focus:border-teal-500 form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0">
                        {{-- <option value="active">Ditampilkan</option>
                        <option value="deactive">Tidak Ditampilkan</option> --}}
                        <option value="Ketua Umum">Ketua Umum</option>
                        <option value="Wakil Ketua Umum">Wakil Ketua Umum</option>
                        <option value="Sekretaris">Sekretaris</option>
                        <option value="Bendahara">Bendahara</option>
                        <option value="Kepala Divisi">Kepala Divisi</option>
                        <option value="Kepala Sub Divisi">Kepala Sub Divisi</option>
                        <option value="Staff Divisi">Staff Divisi</option>
                        <option value="Staff Sub Divisi">Staff Sub Divisi</option>
                    </select>
                    @error('name')
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
            <h1 class="h6">List Divisi Role</h1>
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
                                Divisi
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Jabatan
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Opsi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($getAllDivisionRole as $item)  
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">{{$loop->iteration}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">{{$item->role}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">{{$item->name}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                                <form action="{{url('/division-role/edit',$item->id)}}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="bg-teal-500 h-10 w-10 rounded hover:bg-teal-600"><i class="fa fa-pencil text-white"></i></button>
                                </form><br><br>
                                <form action="{{url('/division-role/destroy',$item->id)}}" method="POST" class="inline">
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