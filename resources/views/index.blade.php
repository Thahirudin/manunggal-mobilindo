@extends('template.master')
@section('content')
    <section class="lg:my-5 relative">
        <div id="default-carousel" class="relative max-w-[1200px] mx-auto" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-36 overflow-hidden lg:rounded-lg md:h-72 lg:h-[550px]">
                @foreach ($banners as $banner)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ Storage::url('images/banner/' . $banner->gambar) }}"
                            class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="{{ $banner->nama }}">
                    </div>
                @endforeach

            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                @php
                    $slide = 1;
                @endphp
                @foreach ($banners as $banner)
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                        aria-label="Slide {{ $slide }}" data-carousel-slide-to="0"></button>
                    @php
                        $slide++;
                    @endphp
                @endforeach
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>
    <section class="bg-[#CE0000] px-4 lg:px-0 py-20 lg:py-40 lg:rounded-3xl mb-5">
        <div class="max-w-[800px] mx-auto">
            <h2 class="font-bold text-3xl text-white text-center mb-5">Kenali Manunggal Mobilindo</h2>
            <p class="text-white text-center">
                Selamat datang di Manunggal Mobilindo, showroom mobil bekas yang siap membantu Anda menemukan mobil impian
                dengan harga terjangkau dan kualitas terbaik. Dengan pengalaman bertahun-tahun dalam industri otomotif, kami
                menyediakan berbagai pilihan mobil dari berbagai merek ternama yang telah melalui proses pengecekan
                menyeluruh untuk menjamin kenyamanan dan keamanan Anda di setiap perjalanan.</p>
            <div class="text-center">
                <a href="{{ route('tentang-kami') }}"
                    class="bg-white font-bold text-[#CE0000] px-5 py-3 rounded-xl text-center mt-5 inline-block hover:bg-red-600 hover:text-white duration-300 ease-in-out">Ketahui
                    Lebih Detail Tentang Kami</a>
            </div>
        </div>
    </section>
    <section class="px-4 lg:px-0">
        <div
            class="max-w-[1200px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-5 justify-between items-center py-20 lg:py-40 mb-5">
            <div>
                <img src="{{ asset('images/car1.png') }}" class="w-full" alt="gambar">
            </div>
            <div>
                <h2 class="font-bold text-3xl text-red-600 mb-5">Mengapa Harus Manunggal Mobilindo?</h2>
                <p class="mb-5">Semua mobil yang kami jual terjamin kualitasnya mulai dari interior, eksterior hingga
                    mesin. proses
                    pembelian cash atau kredit akan diselesaikan dengan cepat dan mudah. Semua mobil dilengkapi dengan
                    surat-surat dan terjamin keasliannya.</p>
                <p class="text-xl font-bold"><span class="text-red-600">Mau Nego?</span> Bisa</p>
                <p class="text-xl font-bold"><span class="text-red-600">Mau Tukar Tambah?</span> Bisa</p>
                <p class="text-xl font-bold text-red-600">SEMUA BISA KITA BICARAKAN</p>
            </div>
        </div>
    </section>
    <section class="bg-[#CE0000] px-4 lg:px-0 rounded-3xl mb-5">
        <div class="max-w-[1200px] mx-auto py-20 lg:py-32">
            <h2 class="font-bold text-3xl text-white mb-10">Katalog Mobil</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-5 justify-between">
                @foreach ($mobils as $mobil)
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="h-[150px] lg:h-[250px] bg-contain rounded-t-lg w-full">
                            <img class="rounded-t-lg w-full h-full object-cover"
                                src="{{ $mobil->gambarMobils->isNotEmpty() ? Storage::url('images/mobil/' . $mobil->gambarMobils->first()->nama_file) : 'path/to/default/image.jpg' }}"
                                alt="{{ $mobil->nama }}" />
                        </div>
                        <div class="p-5">
                            <a href="{{ route('detail-katalog', ['id' => $mobil->id]) }}">
                                <h5
                                    class="mb-2 text-lg lg:text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-[#CE0000] duration-300 ease-in-out">
                                    {{ $mobil->nama }}</h5>
                            </a>
                            <p class="mb-3 text-sm md:text-md font-normal text-gray-700 dark:text-gray-400">Rp{{ number_format($mobil->harga, 0, ',', '.') }}
                            </p>
                            <a href="{{ route('detail-katalog', ['id' => $mobil->id]) }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Lihat Detail
                                <svg class="rtl:rotate-180 w-2 h-2 lg:w-3.5 lg:h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <a href="{{ route('katalog') }}"
                class="inline-flex items-center bg-white font-bold text-[#CE0000] px-5 py-3 rounded-xl text-center mt-5  hover:bg-red-600 hover:text-white duration-300 ease-in-out">Lihat
                Lainnya <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </section>
@endsection
