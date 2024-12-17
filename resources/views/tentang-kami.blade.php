@extends('template.master')
@section('title')
    Tentang Kami - {{ @config('app.name') }}
@endsection
<style>
    #tentang-kami {
        background-image: url('{{ asset('images/tentang.png') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>
@section('content')
    <section id="tentang-kami" class="h-[400px] lg:h-[600px]">
        <div class="max-w-[1200px] h-full mx-auto p-4 lg:p-0 flex flex-wrap items-center">
            <div class=" max-w-[600px]">
                <span class="text-white text-3xl lg:text-[40px] font-bold inline-block mb-5">Tentang Manunggal
                    Mobilindo</span><br>
                <p class="text-white">Merupakan showroom yang menjual mobil dengan kualitas terjamin. mulai dari interior,
                    eksterior hingga mesin. Semua mobil yang tersedia dilengkapi dengan surat-surat dan terjamin
                    keasliannya.</p>
            </div>
        </div>
    </section>
    <section class="px-4 lg:px-0">
        <div class="max-w-[1200px] mx-auto grid grid-cols-1 justify-between items-center md:grid-cols-2 gap-5 py-20 lg:py-40 mb-5">
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
    <section class="bg-[#CE0000] px-4 lg:px-0 py-20 rounded-3xl mb-5">
        <div class="max-w-[1200px] mx-auto">
            <p class="font-bold text-3xl text-white mb-10">Lokasi Showroom Manunggal Mobilindo Cabang 1</p>
            <iframe class="w-full rounded-xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6909702238527!2d101.41587017403715!3d0.4577853637955981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a96f1756b509%3A0x914281d0ee6c9f76!2sShowroom%20Manunggal%20Mobilindo%201!5e0!3m2!1sid!2sid!4v1728211328770!5m2!1sid!2sid"
                height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section class="px-4 lg:px-0 py-20">
        <div class="max-w-[1200px] mx-auto">
            <p class="font-bold text-3xl text-red-600 mb-10">Lokasi Showroom Manunggal Mobilindo Cabang 2</p>
            <iframe class="w-full rounded-xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.681426174593!2d101.41834517403704!3d0.4746295637657565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a9426ad4d219%3A0x68c9267685caa331!2sShowroom%20Manunggal%20Mobilindo%202!5e0!3m2!1sid!2sid!4v1728211803277!5m2!1sid!2sid"
                height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
    <section></section>
@endsection
