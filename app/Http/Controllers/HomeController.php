<?php

namespace App\Http\Controllers;

use App\Models\detailOrder;
use App\Models\event;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    //
    public function home(){
        $e = event::where('status', 'active')->get();
        return view('home', compact('e'));
    }

    public function detail(event $event) {
        return view('detail', compact('event'));
    }

    public function keranjang(){

        $userId = auth()->user()->id;
        $detailOrder = detailOrder::with('event')->where('user_id', $userId)->get();
        return view('keranjang', compact('detailOrder'));
    }

    public function postKeranjang(Request $request, event $event){
        $request->validate([
            'banyak'=> 'required',
        ]);
        if ($request->banyak > $event->stock) {
            return redirect()->back()->with('error', 'Maaf, Stock Tiket Sudah habis');
        }

        detailOrder::create([
            'qty' => $request->banyak,
            'user_id' => Auth::id(),
            'order_id' => $event->order_id,
            'event_id'=> $event->id,
            'status_pembayaran'=> 'pending',
            'price_total' => $event->price * $request->banyak
        ]);
        return redirect()->route('keranjang');

    }

    public function bayar(Request $request, detailOrder $detailOrder){
        $event = $detailOrder->event;
        return view('bayar', compact('event', 'detailOrder'));
    }

    public function postBayar(Request $request , detailOrder $detailOrder){
        $request->validate([
            'bukti_pembayaran'=>'required',
        ]);

        $order = order::create([
            'user_id'=> auth()->id(),
            'price_total'=>$detailOrder->price_total,
            'code'=>'INV' . Str::random(8)
        ]);

        $detailOrder->update([
            'order_id'=>$order->id,
            'bukti_pembayaran'=> $request->bukti_pembayaran->store('img')
        ]);
        $event = $detailOrder->event;
        $event->stock -= $detailOrder->qty;
        $event->save();

        return redirect()->route('keranjang');
    }


    public function batalkanpesanan($id)
    {
        $detailOrder = detailOrder::find($id);
        $detailOrder->delete();
        return redirect()->route('home')->with('notif','Pesanan berhasil dibatalkan');
    }
}
