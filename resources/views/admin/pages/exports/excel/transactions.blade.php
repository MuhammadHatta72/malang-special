<table>
    <tr>
        <td style="position: absolute; left: 100px; padding-left: 250px">
            @if($market->image == 'not_found')
            <img src="assets/images-admin/default_market.png" width="100">
            @else
            <img src="image_markets/<?= $market->image; ?>" width="120">
            @endif
        </td>
        <th colspan="6" style="text-align: center; vertical-align: middle; font-size: 14px;"><b style="font-size: 16px;">{{$market->name}}<br>TOKO OLEH-OLEH KHAS KOTA MALANG<br>Telp {{$market->phone}} | e-mail : {{$market->email}}<br>{{$market->address}}</b></th>
        <td></td>
    </tr>
    <tr></tr>
    <thead>
        <tr>
            <th colspan="8" style="text-align: center; vertical-align: middle;"><b><u>Daftar Semua Produk</u></b></th>
        </tr>
        <tr></tr>
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