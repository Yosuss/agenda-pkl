            <!-- Tombol untuk memunculkan modal -->
            <div class="tambah mx-4 my-2">
                <button id="openModal-tambah"
                    class="bg-green-400 hover:bg-green-700 shadow font-bold text-white px-4 py-1 rounded-lg">
                    <i class="bi bi-journal-plus"></i>
                    Tambah
                </button>
            </div>
            <!-- Modal -->
            <div id="tambahModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <div class="flex items-center justify-center min-h-screen">
                    <!-- Background overlay -->
                    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>
                    <!-- Modal content -->
                    <div
                        class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                        <div class="bg-white p-6 xl justify-center">
                            <h2 class="font-bold text-3xl mb-4">Tambah Data</h2>
                            <!-- Form dalam modal -->
                            <form action="{{ route('agenda.tambah') }}" method="POST" class="capitalize">
                                @csrf
                                <div class="mb-4">
                                    <label for="tanggal" class="block text-xl font-medium text-gray-700">tanggal</label>
                                    <input type="date" name="tanggal" id="tanggal"
                                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                                </div>
                                <div class="mb-4">
                                    <label for="kegiatan" class="block text-xl font-medium text-gray-700">kegiatan
                                    </label>
                                    <input type="text" name="kegiatan" id="kegiatan"
                                        class="mt-1 block w-full p-2 border-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-xl">
                                </div>
                                <div class="flex justify-end">
                                    <button type="button" id="closeModal-tambah"
                                        class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg mr-2">
                                        Close
                                    </button>
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <script>
                const tambahModal = document.getElementById("tambahModal");
                const openModal_tambah = document.getElementById("openModal-tambah");
                const closeModal_tambah = document.getElementById("closeModal-tambah");
                openModal_tambah.addEventListener("click", function() {
                    tambahModal.classList.remove("hidden");
                });
                closeModal_tambah.addEventListener("click", function() {
                    tambahModal.classList.add("hidden");
                });
                window.onclick = function(event) {
                    if (event.target == modal) {
                        tambahModal.classList.add("hidden");
                    }
                };
            </script>
