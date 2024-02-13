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
                        Qty
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status
                    </th>


                </tr>
            </thead>
            <tbody>
                @foreach ($completedRejectedOrders as $order)
                    <tr class="">
                        <td scope="row" class="px-6 py-4">
                            {{ $loop->index + 1 }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $order->code }}
                        </td>
                        <td scope="row" class="px-6 py-4 ">
                            @foreach ($order->detailOrder as $detailOrder)
                                {{ $detailOrder->event->name }}
                            @endforeach
                        </td>

                        <td class="px-6 py-4">
                            @foreach ($order->detailOrder as $detailOrder)
                                {{ $detailOrder->qty }}
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                            @foreach ($order->detailOrder as $detailOrder)
                                Rp. {{ number_format($detailOrder->price_total, 0, ',', '.') }}
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                            @foreach ($order->detailOrder as $detailOrder)
                                {{ $detailOrder->status_pembayaran }}
                            @endforeach
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

        @foreach ($order->detailOrder as $detailOrder)
        @endforeach


        <div class="grid grid-cols-2 container mx-auto my-14">
            <div class="border bg-slate-100 shadow-md py-10 mx-20">
                <h1 class="text-center mb-5 text-xl font-bold">cari data</h1>
                <form action="{{ route('riwayat') }}" class="">
                    <div class="flex gap-10 ml-[30%]">
                        <div class="flex flex-col gap-3 ">
                            <label for="start_date">Tanggal Awal</label>
                            <input type="date" id="start_date" name="start_date"
                                class=" border p-2 rounded-lg bg-slate-300">
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="end_date">Tanggal Akhir</label>
                            <input type="date" id="end_date" name="end_date"
                                class=" border p-2 rounded-lg bg-slate-300">
                        </div>
                    </div>
                    <button type="submit"
                        class="ml-[30%] focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-5">Search</button>
                </form>
            </div>
            <div class="border shadow-md py-10 bg-slate-100 mx-20">
                <h1 class="text-center mb-5 text-xl font-bold">Print data</h1>

                <form action="{{ route('printRiwayatTransaksi') }}" class="form-group">
                    <div class="flex gap-10 ml-[30%]">
                        <div class="flex flex-col gap-3">
                            <label for="start_date">Tanggal Awal:</label>
                            <input type="date" id="start_date" name="start_date"
                                class="border p-2 rounded-lg bg-slate-300">
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="end_date">Tanggal Akhir:</label>
                            <input type="date" id="end_date" name="end_date" class="border p-2 rounded-lg bg-slate-300">
                        </div>
                    </div>
                    <button type="submit"
                        class="ml-[30%] focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-5">ExportPDf</button>
                </form>
            </div>
        </div>



    </div>
@endsection
