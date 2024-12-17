@extends('admin.template.master')
@section('title')
    Dashboard | {{ config('app.name') }}
@endsection
@section('dashboard-active')
bg-gray-200 text-[#CE0000] font-semibold
@endsection
@section('addCss')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />
@endsection
@section('content')
    <section class="md:grid md:grid-cols-2 md:gap-5 mb-5">
        <div class="mb-5 p-4 md:mb-0 bg-white rounded-xl lg:p-5 font-bold  shadow-lg">
            <p>Data Mobil</p>
            <p class="text-[40px] text-center">{{ $totalMobil }}</p>
        </div>
        <div class="mb-5 p-4 md:mb-0 bg-white rounded-xl lg:p-5 font-bold  shadow-lg">
            <p>Data Pegawai</p>
            <p class="text-[40px] text-center">{{ $totalUser }}</p>
        </div>
    </section>
    <section class="p-4 bg-white rounded-xl lg:p-5 mb-5 shadow-lg">
        <div class="mb-5 flex justify-between items-center">
            <p class="text-xl font-bold">Data Mobil</p>
        </div>
        <div class="relative overflow-x-auto">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mobils as $mobil)
                        <tr>
                            <td>{{ $mobil->nama }}</td>
                            <td>Rp{{ number_format($mobil->harga, 0, ',', '.') }}</td>
                            <td>{{ $mobil->status }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
    <section class="p-4 bg-white rounded-xl lg:p-5 mb-5 shadow-lg">
        <div class="mb-5 flex justify-between items-center">
            <p class="text-xl font-bold">Data Pegawai</p>
        </div>
        <div class="relative overflow-x-auto">
            <table id="example2" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Tanggal Lahir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ \Carbon\Carbon::parse($user->ttl)->translatedFormat('j F Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
@section('addJs')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script type="text/javascript" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
        $('#example2').DataTable();
    });
</script>
@endsection
