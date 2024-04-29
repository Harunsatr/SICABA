@extends('layouts.master')


@section('menuHome', 'active')
@section('content')

    {{-- Landing START --}}
    <div class="hero-wrap js-fullheight" style="background-image: url('pacific/img/ftmakanan26.png');">
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">Selamat Datang</span>
                    <h1 class="mb-4">Katering Bu Aini</h1>
                    <p class="caps">Menyediakan Paket Makanan untuk Melengkapi Acara Anda</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Landing END --}}

    {{-- Search Makanan START --}}
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ftco-search d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap">
                                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
                                        href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                                        aria-selected="true">Paket Makanan</a>
                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                        role="tab" aria-controls="v-pills-2" aria-selected="false">Pesan</a>
                                </div>
                            </div>
                            <div class="col-md-12 tab-wrap">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                        aria-labelledby="v-pills-nextgen-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row no-gutters">
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">Lorem ipsum</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <input type="text" class="form-control"
                                                                placeholder="Search place">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Lorem ipsum</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span></div>
                                                            <input type="text" class="form-control checkin_date"
                                                                placeholder="Check In Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Lorem ipsum</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span></div>
                                                            <input type="text" class="form-control checkout_date"
                                                                placeholder="Check Out Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Lorem ipsum</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span>
                                                                </div>
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">$100</option>
                                                                    <option value="">$10,000</option>
                                                                    <option value="">$50,000</option>
                                                                    <option value="">$100,000</option>
                                                                    <option value="">$200,000</option>
                                                                    <option value="">$300,000</option>
                                                                    <option value="">$400,000</option>
                                                                    <option value="">$500,000</option>
                                                                    <option value="">$600,000</option>
                                                                    <option value="">$700,000</option>
                                                                    <option value="">$800,000</option>
                                                                    <option value="">$900,000</option>
                                                                    <option value="">$1,000,000</option>
                                                                    <option value="">$2,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Search"
                                                                class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                        aria-labelledby="v-pills-performance-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row no-gutters">
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">Lorem ipsum</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <input type="text" class="form-control"
                                                                placeholder="Search place">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Lorem ipsum</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span></div>
                                                            <input type="text" class="form-control checkin_date"
                                                                placeholder="Check In Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Lorem ipsum</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span></div>
                                                            <input type="text" class="form-control checkout_date"
                                                                placeholder="Check Out Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Lorem ipsum</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span
                                                                        class="fa fa-chevron-down"></span></div>
                                                                <select name="" id=""
                                                                    class="form-control">
                                                                    <option value="">$100</option>
                                                                    <option value="">$10,000</option>
                                                                    <option value="">$50,000</option>
                                                                    <option value="">$100,000</option>
                                                                    <option value="">$200,000</option>
                                                                    <option value="">$300,000</option>
                                                                    <option value="">$400,000</option>
                                                                    <option value="">$500,000</option>
                                                                    <option value="">$600,000</option>
                                                                    <option value="">$700,000</option>
                                                                    <option value="">$800,000</option>
                                                                    <option value="">$900,000</option>
                                                                    <option value="">$1,000,000</option>
                                                                    <option value="">$2,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Search"
                                                                class="align-self-stretch form-control btn btn-primary p-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- Search Makanan END --}}

    {{-- Paket Makanan START --}}
    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100">
                        <span class="subheading">Katering Bu Aini</span>
                        <h2 class="mb-4">
                            Pesan paket katering anda mulai sekarang</h2>
                        <p>Biarkan kami mengurus segalanya! Dari persiapan hingga pembersihan, kami hadir untuk membuat
                            acara Anda lebih lancar dan lebih berkesan.
                            Percayakan kepada kami untuk menyajikan hidangan terbaik bagi Anda dan tamu-tamu Anda.</p>
                        <p>Kami akan memastikan setiap detail terpenuhi dengan sempurna. Nikmati momen tanpa stres dan
                            biarkan kami
                            menciptakan pengalaman tak terlupakan bagi Anda dan para tamu. Percayakan
                            kepada kami untuk memberikan layanan katering terbaik yang akan membuat setiap orang puas dan
                            ingin kembali lagi untuk acara berikutnya.
                        </p>
                        <p><a href={{url("paketmakanan")}} class="btn btn-primary py-3 px-4">Pesan Sekarang</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1  d-block img"
                                style="background-image: url('{{ asset('gambar_produk/' . $product->gambar) }}');">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span
                                    class="fi fi-tr-cake-birthday">
                                    </span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">{{ $product->nama_produk }}</h3>
                                    <p>Rp {{ $product->harga }} / paket</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        {{-- Icon link  --}}
                        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>

                        {{-- Icon Link --}}
                        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-thin-straight/css/uicons-thin-straight.css'>


                        {{-- Icon link --}}
                        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>



                        {{-- Icon link --}}
                        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-straight/css/uicons-regular-straight.css'>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Paket Makanan END --}}

    {{-- Pilihan Paket START --}}
    <section class="ftco-section img ftco-select-destination" style="background-image: url('pacific/img/ftmakanan9.png');">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Paket Menu Kami</span>
                    <h2 class="mb-4 teks-putih">PILIH SESUAI KEBUTUHAN ANDA</h2>
                </div>
            </div>
        </div>
        <div class="container container-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-destination owl-carousel ftco-animate">
                        @foreach ($products as $product)
                        <div class="item">
                            <div class="project-destination">
                                <a href={{url("paketmakanan")}} class="img"
                                    style="background-image: url('{{ asset('gambar_produk/' . $product->gambar) }}');">
                                    <div class="text">
                                        <h3>{{ $product->nama_produk }}</h3>
                                        <span>Rp {{ $product->harga }} / paket</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        <div class="item">
                            <div class="project-destination">
                                <a href={{url("paketmakanan")}} class="img"
                                    style="background-image: url('pacific/img/ftmakanan15.png');">
                                    <div class="text">
                                        <h3>Lorem Ipsume</h3>
                                        <span>Rp </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Pilihan Paket START --}}

    {{-- Daftar Paket START --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Pilihan Paket</span>
                    <h2 class="mb-4">Paket Makanan</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)                    
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="{{ url("paketmakanan") }}" class="img" style="background-image: url('{{ asset('gambar_produk/' . $product->gambar) }}');">
                            <span class="price">{{$product->nama_produk}}</span>
                        </a>
                        <div class="text p-4">
                            <h3><a href="{{ url("paketmakanan") }}">{{$product->nama_produk}}</a></h3>
                            <p class="location"></span>Rp {{$product->harga}} / Paket</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>            
        </div>
    </section>
    {{-- Daftar Paket END --}}

    {{-- Video START --}}
    <section class="ftco-section ftco-about img"style="background-image: url('pacific/img/ftmakanan23.png');">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
                <div class="col-md d-flex align-items-center justify-content-center">
                </div>
            </div>
        </div>
    </section>
    {{-- Video END --}}

    {{-- Tentang Kami START --}}
    <section class="ftco-section ftco-about ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center"
                                style="background-image:url('pacific/img/ftmakanan24.png');">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">Tentang Kami</span>
                                    <h2 class="mb-4">Kami Ada Untuk
                                        Berbagai Kebutuhan
                                        Acara Anda</h2>
                                    <p>Dengan menu yang beragam dan inovatif, serta layanan yang
                                        terbaik dari awal hingga akhir acara, kami bertekad untuk memenuhi
                                        segala kebutuhan dan keinginan Anda. Jadikan kami bagian dari momen berharga Anda,
                                        dan biarkan kami menghidupkan setiap acara dengan citarasa dan pelayanan yang luar
                                        biasa.</p>
                                    <p><a href={{url("paketmakanan")}} class="btn btn-primary">Lihat Paket Menu</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Tentang Kami END --}}

    {{-- Cara memesan START --}}
    <section>
        <div class="container mt-5">
            <div class="row justify-content-center g-0">
                <div class="col-xl-9 mb-5">
                    <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                        <h5 class="  colornew1 fs-3 fs-lg-5 lh-sm my-6">Bagaimana Caranya Memesan?</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3 mb-6">
                            <div class="text-center"><img class="shadow-icon" src="pacific/img/location.png"
                                    height="112" alt="..." />
                                <h5 class="mt-4 fw-bold">Pilih Lokasi</h5>
                                <p class="mb-md-0">Tentukan lokasi anda untuk tempat menerima pesanan</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-6">
                            <div class="text-center"><img class="shadow-icon" src="pacific/img/order.png" height="112"
                                    alt="..." />
                                <h5 class="mt-4 fw-bold">Pilih Paket</h5>
                                <p class="mb-md-0">Pilih paket makanan anda sesuai kebutuhan anda</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-6">
                            <div class="text-center"><img class="shadow-icon" src="pacific/img/pay.png" height="112"
                                    alt="..." />
                                <h5 class="mt-4 fw-bold">Pembayaran</h5>
                                <p class="mb-md-0">Pilih pembayaran anda sesuai keinginan</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-6">
                            <div class="text-center"><img class="shadow-icon" src="pacific/img/meals.png" height="112"
                                    alt="..." />
                                <h5 class="mt-4 fw-bold">Pesanan Diterima</h5>
                                <p class="mb-md-0">Selamat sekarang kamu dapat menikmati pesananmu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Cara memesan END --}}

    {{-- Testimonial START --}}
    {{-- <section class="ftco-section testimony-section bg-bottom" style="background-image: url('pacific/img/bg_1.jpg');">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">Tourist Feedback</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('pacific/img/person_1.jpg')">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('pacific/img/person_2.jpg')">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('pacific/img/person_3.jpg')">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('pacific/img/person_1.jpg')">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url('pacific/img/person_2.jpg')">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- Testimonial END --}}

    {{-- menu pesanan custom START --}}
    <section class="ftco-intro  ftco-no-pt mt-5">
            <div class="row justify-content-center mt-5">
                <div class="col-md-12 text-center">
                    <div class="img" style="background-image: url('pacific/img/ftmakanan23.png');">
                        {{-- <div class="overlay"></div> --}}
                        <h2>MAU PESAN SESUAI KEINGINAN?</h2>
                        <p>Kami dapat menyesuaikan pesanan dengan keinginan anda</p>
                        <p class="mb-0"><a href={{url("troli")}} class="btn btn-primary px-4 py-3">Request pesanan</a></p>
                    </div>
                </div>
            </div>
    </section>
    {{-- menu pesanan custom END --}}
@stop
