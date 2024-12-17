@extends('admin.template.master')
@section('title', 'Data Banner | ' . config('app.name'))
@section('banner-active')
    bg-gray-200 text-[#CE0000] font-semibold
@endsection
@section('addCss')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />
@endsection
@section('content')
    <section class="p-4 bg-white rounded-xl lg:p-5 mb-5 shadow-lg">
        <div class="mb-5 flex justify-between items-center">
            <p class="text-xl font-bold">Data Banner</p>
            <a href="{{ route('admin.tambah-banner') }}"
                class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Tambah
                Data</a>
        </div>
        <div class="relative overflow-x-auto">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banners as $banner)
                        <tr>
                            <td>{{ $banner->nama }}</td>
                            <td><img class="w-32" src="{{ Storage::url('images/banner/' . $banner->gambar) }}"
                                    alt="{{ $banner->nama }}"></td>
                            <td class="lg:grid lg:grid-cols-2 lg:gap-5">
                                <a href="{{ route('admin.edit-banner', ['id' => $banner->id]) }}"
                                    class="mb-2 lg:mb-0 block p-4 py-2 bg-sky-600 text-white rounded-lg hover:bg-sky-700 duration-300 ease-in-out text-center">Edit</a>
                                <form id="delete-form-{{ $banner->id }}"
                                    action="{{ route('admin.delete-banner', $banner->id) }}" method="POST"
                                    class="w-full block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete({{ $banner->id }})"
                                        class="mb-2 lg:mb-0 block w-full p-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 duration-300 ease-in-out text-center">
                                        Hapus
                                    </button>
                                </form>
                            </td>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

        function confirmDelete(bannerId) {
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
                    document.getElementById('delete-form-' + bannerId).submit();
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
