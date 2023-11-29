@extends('admin.layouts.app')
@section('content')
<div>
    <div class="card mb-8">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Edit Divisi Role</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('/division-role/update',$getDetailDivisionRole->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mt-3">
                    <label class="text-gray-700 ml-1">Divisi : </label>
                    <select name="role" class="form-input mt-1 p-3 border-2 @error('role') border-red-500 @enderror focus:outline-none focus:border-teal-500 form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0">
                        {{-- <option value="active" @if ($getDetailDivisionRole->role == 'active') selected @endif>Ditampilkan</option> --}}
                        <option value="Badan Pengurus Inti" @if ($getDetailDivisionRole->role == 'Badan Pengurus Inti') selected @endif>Badan Pengurus Inti</option>
                        <option value="Hubungan Masyarakat" @if ($getDetailDivisionRole->role == 'Hubungan Masyarakat') selected @endif>Hubungan Masyarakat</option>
                        <option value="Kewirausahaan" @if ($getDetailDivisionRole->role == 'Kewirausahaan') selected @endif>Kewirausahaan</option>
                        <option value="Penelitian dan Pengembangan" @if ($getDetailDivisionRole->role == 'Penelitian dan Pengembangan') selected @endif>Penelitian dan Pengembangan</option>
                        <option value="Media dan Teknologi" @if ($getDetailDivisionRole->role == 'Media dan Teknologi') selected @endif>Media dan Teknologi</option>
                        <option value="Pengembangan Sumber Daya Mahasiswa" @if ($getDetailDivisionRole->role == 'Pengembangan Sumber Daya Mahasiswa') selected @endif>Pengembangan Sumber Daya Mahasiswa</option>
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
                        {{-- <option value="active" @if ($getDetailDivisionRole->name == 'active') selected @endif>Ditampilkan</option> --}}
                        <option value="Ketua Umum" @if ($getDetailDivisionRole->name == 'Ketua Umum') selected @endif>Ketua Umum</option>
                        <option value="Wakil Ketua Umum" @if ($getDetailDivisionRole->name == 'Wakil Ketua Umum') selected @endif>Wakil Ketua Umum</option>
                        <option value="Sekretaris" @if ($getDetailDivisionRole->name == 'Sekretaris') selected @endif>Sekretaris</option>
                        <option value="Bendahara" @if ($getDetailDivisionRole->name == 'Bendahara') selected @endif>Bendahara</option>
                        <option value="Kepala Divisi" @if ($getDetailDivisionRole->name == 'Kepala Divisi') selected @endif>Kepala Divisi</option>
                        <option value="Kepala Sub Divisi" @if ($getDetailDivisionRole->name == 'Kepala Sub Divisi') selected @endif>Kepala Sub Divisi</option>
                        <option value="Staff Divisi" @if ($getDetailDivisionRole->name == 'Staff Divisi') selected @endif>Staff Divisi</option>
                        <option value="Staff Sub Divisi" @if ($getDetailDivisionRole->name == 'Staff Sub Divisi') selected @endif>Staff Sub Divisi</option>
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