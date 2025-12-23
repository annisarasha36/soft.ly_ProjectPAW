<x-app-layout>
    <div class="col-md-12 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
                <div class="col-md-12 mt-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('history') }}">History</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-xl font-semibold mb-3">
                                Sukses Check Out
                            </h3>
                            <h5 class="text-2xl mb-3">
                                Pesanan anda telah dicheck out, untuk pembayaran silakan transfer ke <br> <strong>Bank BSI Nomor Rekening: 7663797</strong> <br>nominal: <strong>Rp.{{ number_format($pesanan->jumlah_harga + $pesanan->kode) }}</strong>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-xl font-semibold mb-3">
                                Detail Pemesanan
                            </h3>
                            @if(!empty($pesanan))
                            <p align="right"> Tanggal Pesan: {{ $pesanan->tanggal }}</p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($pesanan_details as $pesanan_detail)
                                    <tr>
                                        <td>{{ $no++  }}</td>
                                        <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                        <td>{{ $pesanan_detail->jumlah }}</td>
                                        <td align="left">Rp.{{ number_format($pesanan_detail->barang->harga) }}</td>
                                        <td align="left">Rp.{{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                        
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="4" align="right"><strong>Total Harga: </strong></td>
                                        <td><strong>Rp.{{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" align="right"><strong>Kode Unik </strong></td>
                                        <td><strong>Rp.{{ number_format($pesanan->kode) }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" align="right"><strong>Total: </strong></td>
                                        <td><strong>Rp.{{ number_format($pesanan->jumlah_harga + $pesanan->kode) }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>