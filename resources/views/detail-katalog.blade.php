@extends('template.master')
@section('title', $mobil->nama)
@section('content')
    <section class="max-w-[1200px] px-4 lg:px-0 mx-auto lg:flex justify-between gap-5 mt-5">
        <div class=" lg:w-[70%]">
            <div class="mb-5 relative">
                <div id="default-carousel" class="relative max-w-[1200px] mx-auto" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-44 overflow-hidden rounded-lg md:h-72 lg:h-[450px]">
                        @foreach ($gambarMobils as $gambarMobil)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ Storage::url('images/mobil/' . $gambarMobil->nama_file) }}"
                                    class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="{{ $mobil->nama }}">
                            </div>
                        @endforeach
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($gambarMobils as $gambar)
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="@if ($i = 1) true @else false @endif" aria-label="Slide 1"
                                data-carousel-slide-to="{{ $i }}"></button>
                            @php
                                $i++;
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
            </div>
            <div class="mb-5">
                <h1 class="text-2xl font-bold">{{ $mobil->nama }}</h1>
            </div>
            <div class="grid grid-cols-2 gap-5 items-center justify-between mb-5">
                <div class="flex gap-3 items-center">
                    <svg class="w-3" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ce0000"
                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                    </svg>
                    <span>{{ $mobil->user->nama }}</span>
                </div>
                <div class="flex gap-3 items-center">
                    <svg class="w-3" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ce0000"
                            d="M96 32l0 32L48 64C21.5 64 0 85.5 0 112l0 48 448 0 0-48c0-26.5-21.5-48-48-48l-48 0 0-32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 32L160 64l0-32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192L0 192 0 464c0 26.5 21.5 48 48 48l352 0c26.5 0 48-21.5 48-48l0-272z" />
                    </svg>
                    <span>{{ \Carbon\Carbon::parse($mobil->created_at)->translatedFormat('j F Y') }}</span>
                </div>
            </div>
            <div class="mb-5">
                {!! nl2br(e($mobil->detail)) !!}
            </div>
        </div>
        <aside class=" lg:w-[30%]">
            <div class="rounded-lg p-5 border bg-[#CE0000] mb-5">
                <p class="text-white text-xl font-bold text-center">Kamu Tertarik?</p>
                <p class="text-white text-xl font-bold text-center">Hubungin Mimin Dong!</p>
                <a href="https://wa.me/6282284911027"
                    class="bg-white text-[#CE0000] px-5 py-3 rounded-xl text-center mt-5  hover:bg-red-600 hover:text-white duration-300 ease-in-out font-semibold block">Klik
                    Disini</a>
            </div>
            <div class="rounded-lg bg-white p-5 border mb-5">
                <div class="mb-3">
                    <span class="text-xl font-bold">Katalog Lainnya</span>
                </div>
                @foreach ($mobilTerbaru as $datamobil)
                    <div class="flex justify-between items-center gap-3 mb-3">
                        <div class="max-w-[20%] h-14 md:h-14 bg-center w-full bg-contain rounded-lg">
                            <img class="rounded-lg w-full h-full object-cover"
                                src="{{ optional($datamobil->gambarMobils->first())->nama_file ? Storage::url('images/mobil/' . $datamobil->gambarMobils->first()->nama_file) : asset('images/default.jpg') }}"
                                alt="{{ $datamobil->nama }}" />
                        </div>
                        <div class="w-[80%]">
                            <a href="{{ route('detail-katalog', ['id' => $datamobil->id]) }}" class="text-lg font-bold hover:text-red-700">
                                {{ $datamobil->nama }}
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </aside>
    </section>
@endsection
