    {{-- Nav mobile --}}
    <aside id="default-sidebar" aria-label="Sidebar"
        class="fixed  h-screen z-[99] left-0 transition-transform -translate-x-full lg:hidden  top-0 lg:w-[30%] lg:py-6 lg:items-center">
        <div class="bg-white border lg:rounded-xl p-4 h-[100%] w-full shadow-lg">
            <ul>
                <li class="">
                    <a href="{{ route('admin.dashboard') }}" class="p-3 block text-xl font-bold rounded-xl text-[#CE0000]">MANUNGGAL
                        MOBILINDO</a>
                </li>
                <li class="">
                    <a href="{{ route('admin.dashboard') }}"
                        class="@yield('dashboard-active') p-3 block hover:font-semibold rounded-xl  hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Dashboard</a>
                </li>
                <li class="">
                    <a href="{{ route('admin.data-mobil') }}"
                        class="@yield('data-mobil-active') p-3 block hover:font-semibold rounded-xl hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Data
                        Mobil</a>
                </li>
                <li class="">
                    <a href="{{ route('admin.data-banner') }}"
                        class="@yield('banner-active') p-3 block hover:font-semibold rounded-xl hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Banner</a>
                </li>
                <li class="">
                    <a href="{{route('admin.data-pegawai')}}"
                        class="@yield('pegawai-active') p-3 block hover:font-semibold rounded-xl hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Pegawai</a>
                </li>
                <li class="">
                    <a href="{{route('admin.data-penjualan')}}"
                        class="@yield('penjualan-active') p-3 block hover:font-semibold rounded-xl hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Penjualan</a>
                </li>
                <li class="">
                    <a href="{{ route('admin.profil') }}"
                        class="@yield('profil-active') p-3 block hover:font-semibold rounded-xl hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Profil</a>
                </li>
                <li class="">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button
                            class=" p-3 block w-full text-left hover:font-semibold rounded-xl hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>
    {{-- Nav desktop --}}
    <aside class="hidden sticky  h-screen z-[99] top-0 lg:w-[30%] lg:flex lg:py-6 lg:items-center">
        <div class="bg-white border lg:rounded-xl p-4 h-[100%] w-full shadow-lg">
            <ul>
                <li class="">
                    <a href="{{ route('admin.dashboard') }}" class="p-3 block text-xl font-bold rounded-xl text-[#CE0000]">MANUNGGAL
                        MOBILINDO</a>
                </li>
                <li class="">
                    <a href="{{ route('admin.dashboard') }}"
                        class="@yield('dashboard-active') p-3 block hover:font-semibold rounded-xl  hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Dashboard</a>
                </li>
                <li class="">
                    <a href="{{ route('admin.data-mobil') }}"
                        class="@yield('data-mobil-active') p-3 block hover:font-semibold rounded-xl hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Data
                        Mobil</a>
                </li>
                <li class="">
                    <a href="{{ @route('admin.data-banner') }}"
                        class="@yield('banner-active') p-3 block hover:font-semibold rounded-xl hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Banner</a>
                </li>
                <li class="">
                    <a href="{{ route('admin.data-pegawai') }}"
                        class="@yield('pegawai-active') p-3 block hover:font-semibold rounded-xl hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Pegawai</a>
                </li>
                <li class="">
                    <a href="{{ route('admin.data-penjualan') }}"
                        class="@yield('penjualan-active') p-3 block hover:font-semibold rounded-xl hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Penjualan</a>
                </li>
                <li class="">
                    <a href="{{ route('admin.profil') }}"
                        class="@yield('profil-active') p-3 block hover:font-semibold rounded-xl hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Profil</a>
                </li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button
                        class=" p-3 block w-full text-left hover:font-semibold rounded-xl hover:bg-gray-200 duration-300 ease-in-out hover:text-[#CE0000]">Logout</button>
                </form>
            </ul>
        </div>
    </aside>
