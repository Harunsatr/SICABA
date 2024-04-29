@extends('layouts.master')
{{-- @section('menuPaket', 'active') --}}
@section('menuPaket', 'active')
@section('content')

{{-- Konten START --}}
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('pacific/img/ftmakanan26.png');">
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda<i
                                class="fa fa-chevron-right"></i></a></span> <span>Paket Makanan<i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Paket Makanan</h1>
            </div>
        </div>
    </div>
</section>
{{-- Konten START --}}

    {{-- Daftar Paket START --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Piliham Paket</span>
                    <h2 class="mb-4">Paket Makanan</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('{{ asset('gambar_produk/' . $product->gambar) }}');">
                            <span class="price">Rp {{$product->harga}} / Paket</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">Spesial Menu</span>
                            <h3><a href="#">{{$product->nama_produk}}</a></h3>
                            {{-- <p class="location"><span class="fa fa-map-marker"></span> &nbsp; Pilih lokasimu</p> --}}
                            <ul>
                                <li><span class="flaticon-mountains"></span>Order Sekarang</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    {{-- Daftar Paket END --}}

    {{-- menu pesanan custom START --}}
    <section class="ftco-intro  ftco-no-pt mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12 text-center">
                <div class="img" style="background-image: url('pacific/img/ftmakanan23.png');">
                    {{-- <div class="overlay"></div> --}}
                    <h2>MAU PESAN SESUAI KEINGINAN?</h2>
                    <p>Kami dapat menyesuaikan pesanan dengan keinginan anda</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Request pesanan</a></p>
                </div>
            </div>
        </div>
</section>
{{-- menu pesanan custom END --}}
@stop
