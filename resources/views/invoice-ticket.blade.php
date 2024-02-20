<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin: 20px;
        }


        .invoice-details {
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        h2 {
            text-align: center
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <title>Invoice</title>
</head>

<body>
    <h2>Invoice INFOSMI</h2>
    <div  class="invoice-details">
        <div>
            <p>Nama: {{ $detailOrder->user->name }}</p>
            <p>Email: {{ $detailOrder->user->email }}</p>
            <p>Order Code: {{ $detailOrder->order->code }}</p>
        </div>
        <div>

            <p>{{ $detailOrder->event->name }}</p>
            <p>Tanggal : {{ $detailOrder->event->date }}</p>
            <p>Lokasi : {{ $detailOrder->event->venue }}</p>
            <p>Waktu : {{ $detailOrder->event->time }}</p>
        </div>
    </div>

    <hr>

    <table>
        <thead>
            <tr>
                <th>Tiket yang di beli: </th>
                <th>Qty</th>
                {{--  <th>Harga Tiket:</th>  --}}
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $detailOrder->event->name }}</td>
                <td>{{ $detailOrder->qty }}</td>
                {{--  <td>{{ number_format($detailOrder->price_total, 0, ',', '.') }}</td>  --}}
                <!-- Add more columns as needed -->
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>Total Harga :</td>
                <td>Rp.{{ number_format($detailOrder->price_total * $detailOrder->qty, 0, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>

    <hr>

    <footer>

        <h3>-----{{ $detailOrder->status_pembayaran }}-----</h3>
        <h3>-----Terima Kasih Telah Membeli tiket di website kami-----</h3>
    </footer>
</body>

</html>
