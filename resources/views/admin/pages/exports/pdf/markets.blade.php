<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Daftar Toko</title>
</head>

<body>

    <table width="770" style="margin-bottom: 15px;">
        <tr>
            <td><img src="assets/images-admin/logo.png" width="100"></td>
            <th colspan="5" style="text-align: center; vertical-align: middle; font-size: 15px;"><b>APLIKASI MALANG SPECIAL<br>OLEH-OLEH KHAS KOTA MALANG<br>Telp 0851 0001 2696 | e-mail : malangspecial@gmail.com<br>MALANG 62370</b></th>
        </tr>
    </table>

    <h3 style="text-align: center;">Daftar Semua Toko</h3>

    <table border="1" width="770" style="margin-bottom: 15px;">
        <thead>
            <tr>
                <th width="5"><b>No.</b></th>
                <th width="30"><b>Nama</b></th>
                <th width="25"><b>Email</b></th>
                <th width="23"><b>Alamat</b></th>
                <th width="15"><b>Telepon</b></th>
                <th width="30"><b>Nama Admin</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($markets as $market)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $market->name}}</td>
                <td>{{ $market->email }}</td>
                <td>{{ $market->address}}</td>
                <td>{{ $market->phone }}</td>
                <td>{{ $market->user->name }}</td>
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