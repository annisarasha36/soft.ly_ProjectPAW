<x-app-layout>
    <div class="col-md-12">
        <img src="{{ url('images/bawah_logo.png') }}" class="rounded mx-auto d-block" width="700" </div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Produk') }}
            </h2>
        </x-slot>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="rounded mx-auto d-block" width="100%" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h2>{{ $barang->nama_barang }}</h2>
                                    <table>
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