<x-app-layout>

    <div class="col-md-12">
        <img src="{{ url('images/bawah_logo.png') }}" class="rounded mx-auto d-block" width="700" </div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Produk') }}
            </h2>
        </x-slot>>
        <div class="container">
            <div class="row justify-content-center g-4">
                @foreach($barangs as $barang)
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ url('uploads') }}/{{ $barang->gambar }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                                <p class="card-text">
                                    <strong>Harga: </strong>Rp{{ number_format($barang->harga) }} <br>
                                    <strong>Stok: </strong> {{ $barang->stok }} <br>
                                    <hr>
                                    <strong>Keterangan: </strong> <br>
                                    {{ $barang->keterangan }}
                                </p>
                                <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Pesan</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</x-app-layout>