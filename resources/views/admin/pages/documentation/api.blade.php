@extends('admin.layouts.app')
@section('content')
<div>
    <div class="card">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">List API</h1>
        </div>
        <div class="card-body">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Keterangan
                            </th>
                            <th scope="col" class="w-96 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Endpoin
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Link
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">1.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data visi</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getVision</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getVision')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">2.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data misi</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getMission</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getMission')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">3.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data Medsos</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getMedsos</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getMedsos')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">4.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data Proker yang Berjalan</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getProkerActive</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getProkerActive')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">5.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data Semua Proker</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getAllProker</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getAllProker')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">6.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data Detail Proker (param: slug)</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getDetailProker/{slug}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api//getDetailProker/{slug}')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">7.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data Galeri Proker (param: slug)</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getGalleryProker/{slug}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getGalleryProker/{slug}')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">8.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data Timeline Proker (param: slug)</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getTimelineProker/{slug}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getTimelineProker/{slug}')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">9.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data Semua Tag</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getTag</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getTag')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">10.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data Semua Role Divisi</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getDivisionRole</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getDivisionRole')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">11.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data Semua Post</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getAllPost</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getAllPost')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">12.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data 3 Post Teratas</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getTopPost</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getTopPost')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">13.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil Data Detail Post (param: slug) </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getDetailPost/{slug}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getDetailPost/{slug}')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">14.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil Data Post Tag (param: slug) </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getPostTag/{slug}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getPostTag/{slug}')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">15.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil Data Top Post Tag (param: slug) </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getTopPostTag/{slug}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getTopPostTag/{slug}')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">16.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil Data Staff </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getStaff</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getStaff')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">17.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil Data Semua Portfolio </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getAllPortfolio</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getAllPortfolio')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">18.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil Data Detail Portfolio (param: slug)</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getDetailPortfolio/{slug}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getDetailPortfolio/{slug}')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">19.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil Data Gallery Portfolio (param: slug)</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getGalleryPortfolio/{slug}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getGalleryPortfolio/{slug}')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">20.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil Data Gallery Post (param: slug)</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getGalleryPost/{slug}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getGalleryPost/{slug}')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">21.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil Semua Data Periode</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/getAllPeriod</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/getAllPeriod')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection