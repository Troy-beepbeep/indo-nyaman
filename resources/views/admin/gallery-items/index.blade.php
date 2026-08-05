<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Galeri</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 rounded-md bg-green-50 p-4 text-sm text-green-700">{{ session('success') }}</div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex items-center justify-between mb-6">
                    <p class="text-sm text-gray-600">Total: {{ $galleryItems->count() }} item</p>
                    <a href="{{ route('gallery-items.create') }}"
                       class="rounded-md bg-green-700 px-4 py-2 text-sm font-semibold text-white hover:bg-green-800">
                        + Tambah Item
                    </a>
                </div>

                <table class="w-full text-left text-sm">
                    <thead>
                        <tr class="border-b text-gray-500">
                            <th class="pb-2">Foto</th>
                            <th class="pb-2">Label</th>
                            <th class="pb-2">Kategori</th>
                            <th class="pb-2">Status</th>
                            <th class="pb-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($galleryItems as $item)
                            <tr class="border-b">
                                <td class="py-3">
    @if ($item->image)
        <img src="{{ $item->image_url }}" alt="{{ $item->label }}" class="h-12 w-12 rounded-lg object-cover">
    @else
        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-gray-100 text-xs text-gray-400">-</div>
    @endif
</td>
<td class="py-3 font-medium text-gray-800">{{ $item->label }}</td>
                                <td class="py-3 font-medium text-gray-800">{{ $item->label }}</td>
                                <td class="py-3 text-gray-600">{{ $item->tag }}</td>
                                <td class="py-3">
                                    @if ($item->is_active)
                                        <span class="rounded-full bg-green-100 px-2 py-1 text-xs text-green-700">Aktif</span>
                                    @else
                                        <span class="rounded-full bg-gray-100 px-2 py-1 text-xs text-gray-600">Nonaktif</span>
                                    @endif
                                </td>
                                <td class="py-3 space-x-3">
                                    <a href="{{ route('gallery-items.edit', $item) }}" class="text-blue-600 hover:underline">Edit</a>
                                    <form action="{{ route('gallery-items.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirm('Yakin mau hapus item ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="4" class="py-6 text-center text-gray-400">Belum ada item galeri.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>