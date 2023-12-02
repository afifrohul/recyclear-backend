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
                                <div class="text-sm text-gray-900">Validasi Data User (POST)</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/validateUser</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/validateUser')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">1.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Menambahkan Data User (POST)</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/newUser</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/newUser')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">1.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengubah Status User param:id (PUT)</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/changeUserStatus/{id}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/changeUserStatus/{id}')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">1.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil Semua Data Tag (GET)</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/tag</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/tag')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">1.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil Semua Data Artikel (GET)</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/article</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/article')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection