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


        <div class="grid grid-cols-2 container mx-auto my-14">
            <div class="border bg-slate-100 shadow-md py-10 mx-20">
                <h1 class="text-center mb-5 text-xl font-bold">cari data</h1>
                <form action="{{ route('riwayat') }}" class="">
                    <div class="flex justify-evenly gap-5">
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
                        class="ml-24 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-5">Search</button>
                </form>
            </div>
            <div class="border shadow-md py-10 bg-slate-100 mx-20">
                <h1 class="text-center mb-5 text-xl font-bold">Print data</h1>

                <form action="{{ route('printRiwayatTransaksi') }}" class="form-group">
                    <div class="flex gap-10 ml-24">
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
                        class="ml-24 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-5">ExportPDf</button>
                </form>
            </div>
        </div>



    </div>
    <div class="bg-neutral-900 pt-5">
        <div class="container mx-auto  grid grid-cols-1 md:grid-cols-3 border-b-2 py-5">
            <div class="flex flex-col items-center justify-center text-center mx-10 text-white">
                <img src="/img/logo.png" alt="" class="w-32">
                <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla et nihil tenetur
                    iusto
                    nesciunt eum ipsa excepturi cumque, eaque dicta!</p>
            </div>

            <div class="flex flex-col items-center">
                <h1 class="text-white text-center text-2xl font-bold">Social Media</h1>
                <div class="flex flex-col justify-center items-start gap-3 mt-10">

                    <a href="https://www.facebook.com/infosmi.id/?locale=id_ID" target="_blank">
                        <div class="flex  justify-center items-center gap-2">
                            <img src="/img/footer/fb.png" alt="">
                            <p class="text-white text-sm ">Infosmi Media</p>
                        </div>
                    </a>
                    <a href="https://twitter.com/infosmi_id" target="_blank">
                        <div class="flex  justify-center items-center gap-2">
                            <img src="/img/footer/x.png" alt="">
                            <p class="text-white text-sm">INFOSMI</p>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/sukabumi_/" target="_blank">
                        <div class="flex  justify-center items-center gap-2">
                            <img src="/img/footer/ig.png" alt="">
                            <p class="text-white text-sm">Sukabumi_</p>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/channel/UCBvylifwSRvo6NzSMNyKHWQ" target="_blank">
                        <div class="flex  justify-center items-center gap-2">
                            <img src="/img/footer/yt.png" alt="">
                            <p class="text-white text-sm">INFOSMI</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <h1 class="text-white text-2xl font-bold">Kontak</h1>
                <div class="flex flex-col justify-items-start items-start gap-3 mt-10">

                    <div class="flex  justify-center items-center gap-2">
                        <img src="/img/footer/email.png" alt="">
                        <p class="text-white text-sm ">infosmi@gmail.com</p>
                    </div>
                    <div class="flex  justify-center items-center gap-2">
                        <img src="/img/footer/phone.png" alt="">
                        <p class="text-white text-sm">0812-2030-2014</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="flex justify-center items-center text-center py-3 text-white">
            <p class="">Copyright By: Fazril Utama</p>
        </div>
    </div>
@endsection
