<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Item Galeri</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('gallery-items.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @include('admin.gallery-items._form')

                    <button type="submit" class="rounded-md bg-green-700 px-4 py-2 text-sm font-semibold text-white hover:bg-green-800">Simpan</button>
                    <a href="{{ route('gallery-items.index') }}" class="ml-2 text-sm text-gray-500 hover:underline">Batal</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>