<?php

namespace App\Http\Controllers;

use App\Models\detailOrder;
use App\Models\event;
use App\Models\order;
use Illuminate\Http\Request;

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

        return redirect()->route('admin');
    }

    public function pendingOrders()
    {
        $pendingOrders = order::with('detailOrder')->whereHas('detailOrder', function ($query) {
            $query->where('status_pembayaran', 'pending');
        })->get();

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

    public function completedRejectedOrders()
    {
        $completedRejectedOrders = order::with('detailOrder')->whereHas('detailOrder', function ($query) {
            $query->whereIn('status_pembayaran', ['completed', 'rejected']);
        })->get();

        return view('riwayat', compact('completedRejectedOrders'));
    }

}
