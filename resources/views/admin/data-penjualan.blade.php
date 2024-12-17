@extends('admin.template.master')
@section('title', 'Data Penjualan | ' . config('app.name'))
@section('penjualan-active')
    bg-gray-200 text-[#CE0000] font-semibold
@endsection
@section('addCss')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />
@endsection
@section('content')
    <section class="p-4 bg-white rounded-xl lg:p-5 mb-5 shadow-lg">
        <div class="mb-5 flex justify-between items-center">
            <p class="text-xl font-bold">Data Penjualan</p>
        </div>
        <div class="relative overflow-x-auto">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Mobil</th>
                        <th>Pegawai</th>
                        <th>Pembeli</th>
                        <th>Harga</th>
                        <th>Metode Pembayaran</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($penjualans->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data penjualan</td>
                        </tr>
                    @else
                        @foreach ($penjualans as $penjualan)
                            <tr>
                                <td>{{ $penjualan->mobil->nama ?? 'Mobil tidak ditemukan' }}</td>
                                <td>{{ $penjualan->user->nama ?? 'Pegawai tidak ditemukan' }}</td>
                                <td>{{ $penjualan->nama_pembeli }}</td>
                                <td>Rp{{ number_format($penjualan->harga, 0, ',', '.') }}</td>
                                <td>{{ $penjualan->metode_pembayaran }}</td>
                                <td>{{ $penjualan->created_at->translatedFormat('d F Y') }}</td>
                                <td class="">
                                    <a href="{{ route('admin.edit-penjualan', ['id' => $penjualan->id]) }}"
                                        class="mb-2 lg:mb-0 w-full block p-4 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700 duration-300 ease-in-out text-center">Edit</a>
                                    <form id="delete-form-{{ $penjualan->id }}"
                                        action="{{ route('admin.delete-penjualan', $penjualan->id) }}" method="POST"
                                        class="w-full block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete({{ $penjualan->id }})"
                                            class="mb-2 lg:mb-0 block w-full py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 duration-300 ease-in-out text-center">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>

            </table>
        </div>
    </section>
@endsection
@section('addJs')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

        function confirmDelete(penjualanId) {
            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + penjualanId).submit();
                }
            });
        }
    </script>
    @if (session('error'))
        <script>
            Swal.fire({
                title: "Error",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endif
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Sukses",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
@endsection
