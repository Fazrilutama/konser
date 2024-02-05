@extends('Template.html')

@section('title', 'Bayar')
@include('template.nav')
@section('body')
    <div class="max-w-lg mt-28 shadow-2xl rounded-xl mx-auto">
        <form action="{{ route('postBayar', $detailOrder->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-5">
                <p class="text-xl font-bold">Upload Bukti Transfer</p>
                <div class="">
                    <h1 class="text-sm my-3">Silahkan Upload Bukti Transfer Pembayaran Tiket Event, Bertujuan Agar Memudahkan
                        Kami dalam Memproses Pembayaran</h1>
                    <div class="grid grid-cols-2  font-bold my-4">
                        <div>
                            <h3 class="">Name Event</h3>
                            <p>{{ $event->name }}</p>
                        </div>
                        <div class="">
                            <div class="">
                                <p>Harga : <span>Rp {{ number_format($event->price, 0, ',', '.') }}</span></p>
                            </div>
                            <p>banyak : <span> {{ $detailOrder->qty }}</span></p>
                            
                        </div>
                        <p class="pt-3">Total Harga: <span>Rp {{ number_format($detailOrder->price_total, 0, ',', '.') }}</span></p>
                    </div>
                </div>
                <div>
                    <label class="font-bold">Upload Bukti Pembayaran</label>
                    <input type="file" name="bukti_pembayaran" accept="image/*" required>
                </div>
                <div class="my-5">
                    <p class="font-bold mb-3">Silahkan Lakukan transfer ke</p>
                    <p>DANA <span class="pl-6">:085723664502</span></p>
                    <p>BRI <span class="pl-10" > :972057398150734</span></p>
                    <p>BCA<span class="pl-10">: 963397612794723</span></p>
                    <p class="font-bold mt-3">silahkan tunggu konfirmasi dari kami.</p>
                </div>
                <button type="submit" class=" w-full text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
            </div>
    </div>

    </form>
    </div>
@endsection
