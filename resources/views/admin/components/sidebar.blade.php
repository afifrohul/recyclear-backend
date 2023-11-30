<div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    <div class="flex flex-col">
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>

        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">Dashboard</p>
        <a href="{{url('back-dashboard')}}" class="mb-3 @if (Request::segment(1) == 'back-dashboard') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>                
            Dashboard
        </a>

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Master Data</p>
        <a href="{{url('artikel')}}" class="mb-3 @if (Request::segment(1) == 'artikel') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-newspaper text-xs mr-2"></i>
            Artikel
        </a>
        <a href="{{url('tag')}}" class="mb-3 @if (Request::segment(1) == 'tag') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-newspaper text-xs mr-2"></i>
            Tag
        </a>

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Dokumentasi</p>
        <a href="{{url('documentation-api')}}" class="mb-3 @if (Request::segment(1) == 'documentation-api') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-atom text-xs mr-2"></i>
            Dokumentasi API
        </a>
    </div>
</div>