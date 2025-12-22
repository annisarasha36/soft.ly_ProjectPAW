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
                            <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-12"></div>
            </div>
        </div>
</x-app-layout>