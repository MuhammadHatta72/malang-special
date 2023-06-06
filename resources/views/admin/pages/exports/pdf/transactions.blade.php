<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Daftar Transaksi</title>
</head>

<body>

    <table width="770" style="margin-bottom: 15px;">
        <tr>
            <td>
                @if($market->image == 'not_found')
                <img src="assets/images-admin/default_market.png" width="100">
                @else
                <img src="image_markets/<?= $market->image; ?>" width="120">
                @endif
            </td>
            <th colspan="6" style="text-align: center; vertical-align: middle; font-size: 15px;"><b>{{$market->name}}<br>TOKO OLEH-OLEH KHAS KOTA MALANG<br>Telp {{$market->phone}} | e-mail : {{$market->email}}<br>{{$market->address}}</b></th>
            <td></td>
        </tr>
    </table>

    <h3 style="text-align: center;">Daftar Semua Transaksi</h3>

    <table border="1" width="770" style="margin-bottom: 15px;">
        <thead>
            <tr>
                <th width="5"><b>No.</b></th>
                <th width="30"><b>Nama</b></th>
                <th width="25"><b>Token</b></th>
                <th width="13"><b>Tanggal</b></th>
                <th width="14"><b>Total Bayar</b></th>
                <th width="15"><b>Alamat</b></th>
                <th width="20"><b>Metode Pembayaran</b></th>
                <th width="18"><b>Status Transaksi</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $transaction->user->name}}</td>
                <td>{{ $transaction->token}}</td>
                <td>{{ $transaction->date}}</td>
                <td>{{ $transaction->total_price}}</td>
                <td>{{ $transaction->address}}</td>
                <td>{{ $transaction->method_payment}}</td>
                <td>
                    @if($transaction->status == 'procces_payment')
                    Proses Pembayaran
                    @elseif($transaction->status == 'procces_transaction')
                    Proses Transaksi
                    @elseif($transaction->status == 'procces_send')
                    Proses Kirim
                    @elseif($transaction->status == 'product_received')
                    Barang Diterima
                    @else
                    Selesai
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <table>
        <tr>
            <td></td>
            <td>Tanggal : <?= date('l, d M Y'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td>Jam : <?= date('H:i a'); ?></td>
        </tr>
    </table>

</body>

</html>