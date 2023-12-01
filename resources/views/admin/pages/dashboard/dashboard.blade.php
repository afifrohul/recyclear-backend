@extends('admin.layouts.app')
@section('content')
<div>
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 fad fa-users"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5">7 Orang Tim Recyclear</h1>
                        <p>Nurina, Subqi, Raihan, Syafiq, Afif, Januar, Ayu</p>
                    </div>            
                </div>
            </div>
            <div class="footer {{-- @if ($getCountFeedbackUnread != 0) bg-teal-500 @else bg-white @endif --}} p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-podcast"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5">3 Learning Path</h1>
                        <p>Machine Learning, Cloud Computing, dan Mobile Development</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-pink-700 fad fa-calendar"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5">7 Jumlah Jenis Sampah Plastik</h1>
                        <p>PET, HDPE, PVC, LDPE, PP, PS, dan lainnya</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-green-700 fad fa-share-alt"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5"> Jumlah Artikel Bermanfaat</h1>
                        <p>Total Artikel Recyclear</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 fad fa-tags"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5"> Total Tagline Artikel Bermanfaat</h1>
                        <p>Tagline / Pin dari artikel Recyclear</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-sitemap"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5">Jumlah user/pengguna</h1>
                        <p>Total Keseluruhan Pengguna Recyclear</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-600 fad fa-clipboard"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5"> Jumlah pengguna Freemium</h1>
                        <p>Total Pengguna Recyclear Freemium</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-green-700 fad fa-newspaper"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5"> Jumlah pengguna Premium</h1>
                        <p>Total Pengguna Recyclear Premium</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        
    </div>

    <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">
        <div class="card bg-teal-400 border-teal-400 shadow-md text-white">
            <div class="card-body flex flex-row">
                <div class="img-wrapper w-40 h-40 flex justify-center items-center">
                    <img src="{{asset('assets/img-admin/good.png')}}" alt="img title">
                </div>
                <div class="py-2 ml-10">
                    <h1 class="h6">Kerja Bagus, {{Auth::user()->name;}} !</h1>
                    <p class="text-white text-xs">Kinerja kalian membuahkan progres belakangan ini!</p>

                    <ul class="mt-4">
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Semangat</li>
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Kompak</li>
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2"></i> Kuat dan Tangguh</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="alert alert-dark mb-6">
                <span class="normal-case">
                    Recyclear-Backend Page
                </span>
            </div>
            <div class="grid grid-cols-2 gap-6 h-full">

                <div class="card">
                    <div class="py-3 px-4 flex flex-row justify-between">
                        <h1 class="h6">
                            <span class="num-4"></span>k
                            <p>Halaman Dilihat</p>
                        </h1>

                        <div class="bg-teal-200 text-teal-700 border-teal-300 border w-10 h-10 rounded-full flex justify-center items-center">
                            <i class="fad fa-eye"></i>
                        </div>
                    </div>                
                    <div class="analytics_1"></div>
                </div>

                <div class="card">
                    <div class="py-3 px-4 flex flex-row justify-between">                    
                        <h1 class="h6">
                            <span class="num-2"></span>k
                            <p>Pengunjung Baru</p>
                        </h1>

                        <div class="bg-indigo-200 text-indigo-700 border-indigo-300 border w-10 h-10 rounded-full flex justify-center items-center">
                            <i class="fad fa-users-crown"></i>
                        </div>
                    </div>
                    <div class="analytics_1"></div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection