@extends('template.html')

@section('title', 'Order Kasir')
@include('template.nav')
@section('body')

    <div class="mt-28">

        <h1 class="text-4xl font-bold text-center my-10">Transaksi Selesai</h1>
        <table class="mx-auto text-base text-left  text-gray-700 shadow-2xl rounded-md p-7 mb-20">
            <thead class="text-xs text-gray-300 uppercase bg-gray-700">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Order Code
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name Event
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status 
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Qty
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($completedRejectedOrders as $order)
                <tr class="">
                        @foreach ($order->detailOrder as $detailOrder)
                            <td scope="row" class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->code }}
                            </td>
                            <td scope="row" class="px-6 py-4 ">
                                {{ $detailOrder->event->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $detailOrder->status_pembayaran }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $detailOrder->qty }}
                            </td>
                            <td class="px-6 py-4">
                               Rp. {{ number_format($detailOrder->price_total, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4">
                                <p class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Print</p>
                            </td>
                            @endforeach
                        </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
