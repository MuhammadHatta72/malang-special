<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Daftar Produk</title>
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
            <th colspan="5" style="text-align: center; vertical-align: middle; font-size: 15px;"><b>{{$market->name}}<br>TOKO OLEH-OLEH KHAS KOTA MALANG<br>Telp {{$market->phone}} | e-mail : {{$market->email}}<br>{{$market->address}}</b></th>
            <td></td>
        </tr>
    </table>

    <h3 style="text-align: center;">Daftar Semua Produk</h3>

    <table border="1" width="770" style="margin-bottom: 15px;">
        <thead>
            <tr>
                <th width="5"><b>No.</b></th>
                <th width="30"><b>Nama</b></th>
                <th width="20"><b>Kategori</b></th>
                <th width="25"><b>Harga</b></th>
                <th width="15"><b>Deskripsi</b></th>
                <th width="23"><b>Stok</b></th>
                <th width="15"><b>Sisa</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $product->name}}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description}}</td>
                <td>{{ $product->stock}}</td>
                <td>{{ $product->remainder}}</td>
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