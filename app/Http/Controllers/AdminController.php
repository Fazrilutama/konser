<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\log;
use App\Models\order;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function events(){
        $events = event::all();
        return view('admin', compact('events'));
    }

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

    public function tambah(){
        return view('crud.tambah');
    }

    public function postTambah(Request $request , event $event){
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'deskripsi'=>'required',
            'date'=>'required',
            'stock'=>'required',
            'time'=>'required',
            'location'=>'required',
            'venue'=>'required',
            'price'=>'required',
            'status'=>'required',
        ]);

        event::create([
            'name'=>$request->name,
            'image'=>$request->image->store('img'),
            'deskripsi'=>$request->deskripsi,
            'date'=>$request->date,
            'stock'=>$request->stock,
            'time'=>$request->time,
            'location'=>$request->location,
            'venue'=>$request->venue,
            'price'=>$request->price,
            'status'=>$request->status,
        ]);

        log::create([
            'user_id' => auth()->id(),
            'activity' => Auth::user()->role . ' ' . Auth::user()->name . ' Menambah Event' , $event->name,
        ]);

        return redirect()->route('admin');
        
    }

    public function edit(event $event)
    {
        return view('crud.edit',compact('event'));
        
    }



    public function postEdit(request $request,event $event)
    {
        $data = $request->validate([
            'name'=>'required',
            'image'=>'required',
            'deskripsi'=>'required',
            'date'=>'required',
            'stock'=>'required',
            'time'=>'required',
            'location'=>'required',
            'venue'=>'required',
            'price'=>'required',
        ]);
        if ($request->hasFile('foto')) {
            $data['image'] = $request->image->store('img');
        } else {
            unset($data['image']);
        }

        log::create([
            'user_id' => auth()->id(),
            'activity' => Auth::user()->role  . ' ' . Auth::user()->name  . ' Mengedit Event ' . $event->name,
        ]);

        $event->update($data);
        return redirect()->route('admin')->with('berhasil', 'Event Berhasil Di Edit');
    }

    public function hapus(event $event){
        $event->delete();

        log::create([
            'user_id' => auth()->id(),
            'activity' => Auth::user()->role . ' ' . Auth::user()->role . ' Mengedit Event ' . $event->name,
        ]);

        return redirect()->route('admin');
    }   

    public function printRiwayatTransaksi(Request $request)
    {
        // Menggunakan with() untuk memuat detailOrders dalam kueri utama
        $orders = order::with('detailOrder')->whereHas('detailOrder', function ($query) {
            $query->whereIn('status_pembayaran', ['completed', 'rejected']);
        });
    
        // Mendapatkan rentang tanggal dari input date
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
    
        // Filter orders berdasarkan rentang tanggal
        $orders->whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
    
        // Mengambil data setelah filter
        $orders = $orders->get();
    
        // Membuat instance dari kelas PDF
        $pdf = PDF::loadView('riwayat-pdf', compact('orders'));
    
        // Mengunduh file PDF dengan nama tertentu
        return $pdf->download('Riwayat-Transaksi.pdf');
    }

    public function log()
    {
        $log = log::all();
        return view('log',compact('log'));
    }


}
