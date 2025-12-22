<x-app-layout>
    <div class="col-md-12 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <a href="{{ url('dashboard') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
                <div class="col-md-12 mt-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ url('uploads') }}/{{ $barang->gambar }}"
                                        class="rounded mx-auto d-block" width="100%" alt="">
                                </div>
                                <div class="col-md-6 mt-4">
                                    <h3 class="text-xl font-semibold mb-3">
                                        {{ $barang->nama_barang }}
                                    </h3>
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>Harga</td>
                                                <td>: </td>
                                                <td>Rp.{{ number_format($barang->harga) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Stok</td>
                                                <td>: </td>
                                                <td>{{ number_format($barang->stok) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Keterangan</td>
                                                <td>: </td>
                                                <td>{{ $barang->keterangan }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Pesan</td>
                                                <td>: </td>
                                                <td>
                                                    <form method="post" action="{{ url('pesan') }}/{{ $barang->id }}">
                                                        @csrf
                                                        <input type="text" name="jumlah_pesan" class="form-control"
                                                            required="">
                                                        <button type="submit" class="btn btn-primary mt-2"><i
                                                            class="fa fa-shopping-cart"></i>Check Out</button>
                                                    </form>
                                                </td>
                                            </tr> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>