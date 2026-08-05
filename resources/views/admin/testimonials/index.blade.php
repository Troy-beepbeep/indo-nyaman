<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Testimoni</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 rounded-md bg-green-50 p-4 text-sm text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex items-center justify-between mb-6">
                    <p class="text-sm text-gray-600">Total: {{ $testimonials->count() }} testimoni</p>
                    <a href="{{ route('testimonials.create') }}"
                       class="rounded-md bg-green-700 px-4 py-2 text-sm font-semibold text-white hover:bg-green-800">
                        + Tambah Testimoni
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead>
                            <tr class="border-b text-gray-500">
                                <th class="pb-2">Nama</th>
                                <th class="pb-2">Role</th>
                                <th class="pb-2">Rating</th>
                                <th class="pb-2">Status</th>
                                <th class="pb-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($testimonials as $testimonial)
                                <tr class="border-b">
                                    <td class="py-3 font-medium text-gray-800">{{ $testimonial->name }}</td>
                                    <td class="py-3 text-gray-600">{{ $testimonial->role }}</td>
                                    <td class="py-3 text-yellow-500">{{ str_repeat('★', $testimonial->rating) }}</td>
                                    <td class="py-3">
                                        @if ($testimonial->is_active)
                                            <span class="rounded-full bg-green-100 px-2 py-1 text-xs text-green-700">Aktif</span>
                                        @else
                                            <span class="rounded-full bg-gray-100 px-2 py-1 text-xs text-gray-600">Nonaktif</span>
                                        @endif
                                    </td>
                                    <td class="py-3 space-x-3">
                                        <a href="{{ route('testimonials.edit', $testimonial) }}" class="text-blue-600 hover:underline">Edit</a>
                                        <form action="{{ route('testimonials.destroy', $testimonial) }}" method="POST" class="inline" onsubmit="return confirm('Yakin mau hapus testimoni ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="5" class="py-6 text-center text-gray-400">Belum ada testimoni.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>