@extends('template.master')
@section('content')
    <section class="px-4 lg:px-0 rounded-3xl mb-5">
        <div class="max-w-[1200px] mx-auto py-10">
            <h2 class="font-bold text-3xl mb-10">Katalog Mobil</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-5 justify-between mb-5">
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
                            <p class="mb-3 text-sm md:text-md font-normal text-gray-700 dark:text-gray-400">
                                Rp{{ number_format($mobil->harga, 0, ',', '.') }}
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
            <div aria-label="Page navigation example">
                <ul class="inline-flex -space-x-px text-base h-10">
                    <!-- Tombol Previous -->
                    @if ($mobils->onFirstPage())
                        <li aria-disabled="true">
                            <span
                                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-gray-200 border border-e-0 border-gray-300 rounded-s-lg cursor-not-allowed">Previous</span>
                        </li>
                    @else
                        <li>
                            <a href="{{ $mobils->previousPageUrl() }}"
                                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                        </li>
                    @endif

                    <!-- Nomor Halaman -->
                    @foreach ($mobils->getUrlRange(1, $mobils->lastPage()) as $page => $url)
                        <li>
                            <a href="{{ $url }}"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 border border-gray-300 {{ $page == $mobils->currentPage() ? 'bg-red-600 text-white' : 'hover:bg-gray-100 hover:text-gray-700' }}">
                                {{ $page }}
                            </a>
                        </li>
                    @endforeach

                    <!-- Tombol Next -->
                    @if ($mobils->hasMorePages())
                        <li>
                            <a href="{{ $mobils->nextPageUrl() }}"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                        </li>
                    @else
                        <li aria-disabled="true">
                            <span
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-gray-200 border border-gray-300 rounded-e-lg cursor-not-allowed">Next</span>
                        </li>
                    @endif
                </ul>
            </div>

        </div>

    </section>
@endsection
