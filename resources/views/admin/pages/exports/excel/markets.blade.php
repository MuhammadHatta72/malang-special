<table>
    <tr>
        <td style="position: absolute; left: 100px; padding-left: 250px"><img src="assets/images-admin/logo.png" width="100"></td>
        <th colspan="3" style="text-align: center; vertical-align: middle; font-size: 15px;"><b>APLIKASI MALANG SPECIAL<br>OLEH-OLEH KHAS KOTA MALANG<br>Telp 0851 0001 2696 | e-mail : malangspecial@gmail.com<br>MALANG 62370</b></th>
        <td></td>
    </tr>
    <tr></tr>
    <thead>
        <tr>
            <th colspan="5" style="text-align: center; vertical-align: middle;"><b><u>Daftar Semua Toko</u></b></th>
        </tr>
        <tr></tr>
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
        <tr></tr>
        <tr>
            <td></td>
            <td>Tanggal : <?= date('l, d M Y'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td>Jam : <?= date('H:i a'); ?></td>
        </tr>
    </tbody>
</table>