@extends('template.html')

@section('title', 'Order Kasir')
@include('template.nav')
@section('body')

    <div class="mt-28">

        <h1 class="text-4xl font-bold text-center my-10">List Order</h1>
        <table class="mx-auto text-base text-left  text-gray-700 shadow-2xl rounded-md p-7 mb-20">
            <thead class="text-xs text-gray-300 uppercase bg-gray-700">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Code
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status pembayaran
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        qty
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bukti
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Update status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendingOrders as $order)
                    <tr class="">
                        @foreach ($order->detailOrder as $detailOrder)

                                <td class="px-6 py-4">{{ $loop->iteration }}</td>

                            <td scope="row" class="px-6 py-4 ">
                                {{ $detailOrder->event->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->code }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $detailOrder->status_pembayaran }}
                            </td>
                            <td class="px-6 py-4">
                                Rp. {{ number_format($detailOrder->price_total, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $detailOrder->qty }}
                            </td>
                            <td class="px-6 py-4">
                                    <img src="{{ asset($detailOrder->bukti_pembayaran) }}" alt="Bukti Pembayaran" width="150" height="200">
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('orders.update-status', $order->id) }}" method="POST">
                                    @csrf
                                    <select name="status_pembayaran" id="status_pembayaran"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2 ">
                                        <option value="pending" selected>Pending</option>
                                        <option value="completed">Completed</option>
                                        <option value="rejected">Rejected</option>
                                    </select>

                                    <button type="submit"
                                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-2">Update</button>
                                </form>
                            </td>
                        @endforeach
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


@endsection
