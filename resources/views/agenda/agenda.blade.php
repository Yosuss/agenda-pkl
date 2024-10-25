@extends('template')
@section('konten')
    <div class="bg-gray-100 dashboard flex capitalize">
        <!-- Dashboard Menu -->
        <div class="bg-gray-100 w-2/12 h-screen items-center justify-center text-center">
            <a href="{{ url('/') }}">
                {{-- <div class="my-10 mx-6 mt-14 font-bold text-2xl">agenda</div> --}}
                <img src="{{ asset('aset/') }}" alt="" class="my-10 mx-6 mt-16 w-20">
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
        <div class="main-dashboard w-10/12 bg-white rounded-3xl">

            <!-- Navbar -->
            @include('component.navbar')
            <!-- Navbar end -->

            <!-- Dashboard field -->
            @include('component.tambah-agenda')

            <div class="form p-4">
                <table action="" class="agenda text-center border-2 w-full">
                    <thead id="nav-data" class="nav-data">
                        <th class="font-bold border-2 py-1">no</th>
                        <th class="font-bold border-2 py-1">id_agenda</th>
                        <th class="font-bold border-2 py-1">tanggal</th>
                        <th class="font-bold border-2 py-1">kegiatan</th>
                        <th colspan="2" class="font-bold border-2 py-1">Aksi</th>
                    </thead>

                    @foreach ($agenda as $item)
                        <tbody id="data" class="data">
                            <td class="border-2 py-1">{{ $loop->iteration }}</td>
                            <td class="border-2 py-1">{{ $item->id_agenda }}</td>
                            <td class="border-2 py-1">{{ $item->tanggal }}</td>
                            <td class="border-2 py-1">{{ $item->kegiatan }}</td>
                            <td class="flex">
                                <div class="w-1/2">
                                    @include('component.btn-edit-agenda')
                                </div>
                                <div class="w-1/2">
                                    @include('component.btn-hapus-agenda')
                                </div>
                            </td>
                        </tbody>
                    @endforeach
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
