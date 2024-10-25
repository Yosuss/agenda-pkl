@extends('template')
@section('konten')
    <div class="bg-gray-200 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-md ">
            <h2 class="text-2xl font-bold mb-6 text-center capitalize">edit data</h2>
            <form action="{{ route('agenda.update', $agenda->id_agenda) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_agenda" class="block text-xl font-medium text-gray-700">id agenda</label>
                    <div name="id_agenda" id="id_agenda">{{ $agenda->id_agenda }}</div>
                </div>
                <div class="mb-4">
                    <label for="tanggal" class="block text-xl font-medium text-gray-700">tanggal</label>
                    <input type="date" name="tanggal" id="tanggal"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        required value="{{ $agenda->tanggal }}">
                </div>
                <div class="mb-4">
                    <label for="kegiatan" class="block text-xl font-medium text-gray-700">kegiatan</label>
                    <input type="text" name="kegiatan" id="kegiatan"
                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl"
                        required value="{{ $agenda->kegiatan }}">
                </div>
                <div class="btn flex gap-2">
                    <a href="{{ route('agenda') }}"
                        class="w-full flex justify-center items-center shadow-md bg-gray-400 text-white p-2 rounded-md hover:bg-gray-700">
                        <button type="submit">kembali</button>
                    </a>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white p-2 rounded-md shadow-md hover:bg-blue-700">update</button>
                </div>
            </form>
        </div>

    </div>
@endsection
