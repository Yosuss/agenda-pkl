@extends('template')
@section('konten')
    <div class="bg-gray-100 dashboard flex capitalize">
        <!-- Dashboard Menu -->
        <div class="bg-gray-100 w-2/12 h-screen max-sm:hidden items-center justify-center text-center">
            <a href="{{ url('/') }}">
                <div class="mt-14 font-bold text-4xl">agenda</div>
                <div class="mt-10 text-start mx-10 text-lg"><span class="font-bold">Nama</span> : Anugrah Lesmana Faturachman</div>
                <div class="mb-10 mt-2 text-start mx-10 text-lg"><span class="font-bold">Kelas</span> : XII RPL B</div>
                {{-- <img src="{{ asset('aset/') }}" alt="" class="my-10 mx-6 mt-16 w-20"> --}}
            </a>
            <div class="list gap-2 justify-center items-center m-6 border-b-2">
                <a href="{{ url('/') }}">
                    <div class="bg-white px-4 py-1 shadow text-left my-4 rounded-lg">
                        <i class="bi bi-journals"></i>
                        agenda
                    </div>
                </a>
            </div>
            <a href="{{ url('/') }}">
                <div class="logout">
                    <button
                        class="bg-red-500 hover:bg-red-600 text-white font-bold px-6 py-1 shadow rounded-lg">logout</button>
                </div>
            </a>
        </div>
        <!-- Dashboard Menu end -->

        <!-- Main Dashboard -->
        <div class="main-dashboard w-10/12 h-screen max-sm:w-full bg-white rounded-3xl">

            <!-- Navbar -->
            @include('component.navbar')
            <!-- Navbar end -->

            <!-- Dashboard field -->
            @include('component.tambah-agenda')

            <div class="form p-4">
                <table action="" class="agenda text-center border-2 w-full">
                    <thead id="nav-data" class="nav-data">
                        <tr>
                            <th class="font-bold border-2 py-1">no</th>
                            <th class="font-bold border-2 py-1">id_agenda</th>
                            <th class="font-bold border-2 py-1">tanggal</th>
                            <th class="font-bold border-2 py-1">kegiatan</th>
                            <th colspan="2" class="font-bold border-2 py-1">Aksi</th>
                        </tr>
                    </thead>

                    <tbody id="data" class="data mt-28">
                        @foreach ($agenda as $item)
                        <tr>
                                <td class="border-2 py-1">{{ $loop->iteration }}</td>
                                <td class="border-2 py-1">{{ $item->id_agenda }}</td>
                                <td class="border-2 py-1">{{ $item->tanggal }}</td>
                                <td class="border-2 py-1">{{ $item->kegiatan }}</td>
                                <td class="flex">
                                    <div class="w-full">
                                        @include('component.btn-edit-agenda')
                                    </div>
                                    <div class="w-full">
                                        @include('component.btn-hapus-agenda')
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                <div class="pagination">
                    {{ $agenda->links('') }}
                </div>
            </div>
            <!-- Dashboard field end -->
        </div>
        <!-- Main Dashboard end -->
    </div>
@endsection
