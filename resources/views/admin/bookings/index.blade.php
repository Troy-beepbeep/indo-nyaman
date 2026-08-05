<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                    Daftar Pesanan (Booking)
                </h2>
                <p class="text-sm text-slate-500 mt-0.5">Kelola riwayat booking yang masuk dari pelanggan.</p>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-2xl text-sm font-medium">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-slate-600">
                        <thead class="bg-slate-50 text-xs uppercase font-semibold text-slate-400 border-b border-slate-100">
                            <tr>
                                <th class="px-6 py-4">Tgl Booking</th>
                                <th class="px-6 py-4">Pelanggan</th>
                                <th class="px-6 py-4">No. HP</th>
                                <th class="px-6 py-4">Layanan & Area</th>
                                <th class="px-6 py-4">Catatan</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($bookings as $booking)
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap text-xs text-slate-500">
                                        {{ $booking->created_at->format('d M Y, H:i') }}
                                    </td>
                                    <td class="px-6 py-4 font-bold text-slate-800">
                                        {{ $booking->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="https://wa.me/{{ $booking->phone }}" target="_blank" class="text-emerald-600 font-medium hover:underline flex items-center gap-1">
                                            <span>💬</span> {{ $booking->phone }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-slate-700 block">{{ $booking->service_type }}</span>
                                        <span class="text-xs text-slate-400">📍 {{ $booking->area }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-xs text-slate-500 max-w-xs truncate">
                                        {{ $booking->notes ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('bookings.update-status', $booking) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('PATCH')
                                            <select name="status" onchange="this.form.submit()" 
                                                    class="text-xs rounded-full font-bold px-3 py-1 border-0 focus:ring-2 focus:ring-emerald-500 cursor-pointer
                                                    {{ $booking->status === 'completed' ? 'bg-emerald-100 text-emerald-800' : '' }}
                                                    {{ $booking->status === 'pending' ? 'bg-amber-100 text-amber-800' : '' }}
                                                    {{ $booking->status === 'cancelled' ? 'bg-rose-100 text-rose-800' : '' }}">
                                                <option value="pending" {{ $booking->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="completed" {{ $booking->status === 'completed' ? 'selected' : '' }}>Selesai</option>
                                                <option value="cancelled" {{ $booking->status === 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <form action="{{ route('bookings.destroy', $booking) }}" method="POST" onsubmit="return confirm('Yakin mau hapus data pesanan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-rose-500 hover:bg-rose-50 rounded-xl transition" title="Hapus Pesanan">
                                                🗑️
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-12 text-center text-slate-400">
                                        Belum ada data pesanan masuk.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($bookings->hasPages())
                    <div class="p-6 border-t border-slate-100">
                        {{ $bookings->links() }}
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>