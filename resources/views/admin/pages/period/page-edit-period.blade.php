@extends('admin.layouts.app')
@section('content')
<div>
    <div class="card mb-8">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Edit Periode</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('/period/update',$getDetailPeriod->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mt-3">
                    <label class="text-gray-700 ml-1">Nama Periode: </label>
                    <input type="text" name="period_name" class="form-input w-full block rounded mt-1 p-3 border-2 @error('period_name') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="Lorem ipsum dolor sit amet" value="{{$getDetailPeriod->period_name}}">
                    @error('period_name')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label class="text-gray-700 ml-1">Tahun Periode (YYYY/YYYY): </label>
                    <input type="text" name="period_year" class="form-input w-full block rounded mt-1 p-3 border-2 @error('period_year') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="2022/2023" value="{{$getDetailPeriod->period_year}}" id="colors">
                    @error('period_year')
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
@endsection