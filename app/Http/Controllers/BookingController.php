<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Simpan booking dari Form Landing Page (Public)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'service_type' => 'required|string|max:100',
            'area' => 'required|string|max:100',
            'notes' => 'nullable|string',
        ]);

        $validated['status'] = 'pending';

        Booking::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Booking berhasil disimpan ke database.'
        ]);
    }

    // Tampilkan daftar pesanan di Admin Panel
    public function index()
    {
        $bookings = Booking::latest()->paginate(10);
        return view('admin.bookings.index', compact('bookings'));
    }

    // Ubah status pesanan (pending / completed / cancelled)
    public function updateStatus(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => 'required|in:pending,completed,cancelled',
        ]);

        $booking->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status pesanan berhasil diperbarui!');
    }

    // Hapus data pesanan
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->back()->with('success', 'Data pesanan berhasil dihapus!');
    }
}