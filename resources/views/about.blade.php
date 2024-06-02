@extends('layouts.app')
@section('content')

<div class="container1 py-4">
    <div class="teks1">
    <h2>Tentang Kami</h2>
    <br>
    <text>Sunshine Shoes Care adalah pilihan utama bagi para pecinta sepatu yang peduli terhadap penampilan dan
        perawatan sepatu mereka. Sebagai pemimpin dalam industri perawatan sepatu, kami menghadirkan rangkaian
        produk berkualitas tinggi yang dirancang khusus untuk menjaga kebersihan, keharuman, dan keindahan sepatu Anda.
        Kami memahami bahwa setiap pasangan sepatu adalah investasi, bukan hanya sebagai penunjang penampilan, tetapi
        juga sebagai cerminan dari kepribadian dan gaya hidup Anda. Itulah mengapa kami berkomitmen untuk menyediakan
        solusi terbaik untuk memastikan bahwa sepatu Anda selalu tampak dan terasa seperti baru, setiap saat.
    </text>
    <text>Banyak ribuan pelanggan kami yang telah mempercayakan perawatan sepatu mereka kepada kami, dan rasakan perbedaan sepatu anda dengan produk Sunshine Shoe Care.</text>
    <br>
    <br>
    <h2>Sejarah</h2>
    <br>
    <text>Sunshine Shoes Care didirikan pada tanggal...</text>
</div>
    @vite(['resources/sass/app.scss',])
</div>
</div>
</div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img src="{{ Vite::asset('/resources/images/shoe-parfume.png') }}" class="d-block w-100 card-img rounded-0 img-fluid" alt="...">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                        </div>
                        </div>
                    </div>
                <div class="card-body">
                    <a href="shop-single.html" class="h3 text-decoration-none">Shoe Parfume</a>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img src="{{ Vite::asset('/resources/images/shoe-parfume.png') }}" class="d-block w-100 card-img rounded-0 img-fluid" alt="...">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                        </div>
                        </div>
                    </div>
                <div class="card-body">
                    <a href="shop-single.html" class="h3 text-decoration-none">Shoe Brush</a>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img src="{{ Vite::asset('/resources/images/shoe-cleaner.png') }}" class="d-block w-100 card-img rounded-0 img-fluid" alt="...">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                        </div>
                        </div>
                    </div>
                <div class="card-body">
                    <a href="shop-single.html" class="h3 text-decoration-none">Shoe Cleaner</a>
                </div>
                </div>
            </div>
        </div>
        <div class="teks1">
            <br>
            <br>
            <h2>Struktur Organisasi</h2>
            </div>
    </div>
</div>
@endsection
