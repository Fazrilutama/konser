<?php

namespace App\Http\Controllers;

use App\Models\detailOrder;
use App\Models\event;
use App\Models\log;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KasirController extends Controller
{
    //
    public function updateEventStatus(event $event, Request $request){
        $request->validate([
            'status'=>'required',
        ]);

        $event->update([
            'status'=> $request->status,
        ]);
        log::create([
            'user_id' => auth()->id(),
            'activity' => Auth::user()->role . ' ' . Auth::user()->name . ' ' . 'Merubah status event menjadi' . ' ' . $event->status,
        ]);

        return redirect()->route('admin');
    }

    public function pendingOrders(event $event)
    {
        $pendingOrders = order::with('detailOrder')->whereHas('detailOrder', function ($query) {
            $query->where('status_pembayaran', 'pending');
        })->get();
        log::create([
            'user_id' => auth()->id(),
            'activity' => Auth::user()->role . ' ' . Auth::user()->name . ' ' . 'Merubah status event menjadi' . ' ' . $event->status,
        ]);

        return view('order', compact('pendingOrders'));
    }

    public function updateOrderStatus(detailOrder $detailOrder, Request $request)
    {
        $request->validate([
            'status_pembayaran' => 'required|in:pending,completed,rejected',
        ]);

        $detailOrder->update([
            'status_pembayaran' => $request->status_pembayaran,
        ]);

        return redirect()->route('orders');
    }

    public function completedRejectedOrders(event $event)
    {
        $completedRejectedOrders = order::with('detailOrder')->whereHas('detailOrder', function ($query) {
            $query->whereIn('status_pembayaran', ['completed', 'rejected']);
        })->get();
        log::create([
            'user_id' => auth()->id(),
            'activity' => Auth::user()->role . ' ' . Auth::user()->name . ' ' . 'Merubah status event menjadi' . ' ' . $event->status,
        ]);

        return view('riwayat', compact('completedRejectedOrders'));
    }

}
