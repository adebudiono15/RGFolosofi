@extends('layouts.frontend.master')

@section('title', 'Detail')

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 100px">
            <div class="col-md-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" style="border-radius: 6px;">
                        <div class="carousel-item active" style="margin-top: 0px;">
                            <img class="d-block" style="height: 495px; weight:425px;"
                                src="{{ asset('storage/images/' . $barang->carousel) }}" alt="First slide">
                        </div>
                        <div class="carousel-item" style="margin-top: 0px;">
                            <img class="d-block" style="height: 495px; weight:425px;"
                                src="{{ asset('storage/images/' . $barang->carousel2) }}" alt="Second slide">
                        </div>
                        <div class="carousel-item" style="margin-top: 0px;">
                            <img class="d-block" style="height: 495px; weight:425px;"
                                src="{{ asset('storage/images/' . $barang->carousel3) }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="col-md-7">
                <h6 class="text-content" style="font-size: 15px;">{{ $barang->kategori_id }}</h6>
                <div class="row">
                    <div class="col-md-5">
                        <hr class="hrstyle">
                    </div>
                </div>
                <p style="font-size: 13px;">{{ $barang->nama }}</p>
                <p style="font-size: 13px;">Harga Mulai <b>Rp. {{ number_format($barang->harga) }}</b></p>
                <p style="font-size: 13px;">{{ $barang->deskripsi }}</p>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <a href="{{ $order.$barang->nama }}" style="text-decoration: none;" target="_blank">
                            <button class="btn btn-hijau btn-block"><b>ORDER</b></button>
                        </a>
                    </div>
                </div>
                <div class="row mt-2 justify-content-center">
                    <div class="col-md-4">
                        <a href="{{ $spesifikasi.$barang->nama }}" target="_blank" style="text-decoration: none">
                            <button class="btn btn-dark btn-block"><b>Tanya Spesifikasi</b></button>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ $konsul }}" style="text-decoration: none;" target="_blank">
                            <button class="btn btn-secondary btn-block"><b>Konsultasi</b></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <h3>Spesifikasi {{ $barang->kategori_id }}</h3>
                <hr class="hrstyle">
            </div>
        </div>
        <div class="row mt-3 justify-content-center" data-aos="fade-up" data-aos-anchor-placement="center-center">
            <div class="col-md-3">
                <div class="card" style="width: 239px; height:300px; border:none;">
                    <img class="card-img-top" style=" border-radius:6px;" src="{{ asset('storage/images/' . $barang->gambar_spesifikasi) }}"
                        alt="Card image cap">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 239px; height:300px; border:none;">
                    <img class="card-img-top" style=" border-radius:6px;" src="{{ asset('storage/images/' . $barang->gambar_spesifikasi2) }}"
                        alt="Card image cap">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 239px; height:300px; border:none;">
                    <img class="card-img-top" style=" border-radius:6px;" src="{{ asset('storage/images/' . $barang->gambar_spesifikasi3) }}"
                        alt="Card image cap">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 239px; height:300px; border:none;">
                    <img class="card-img-top" style=" border-radius:6px;" src="{{ asset('storage/images/' . $barang->gambar_spesifikasi4) }}"
                        alt="Card image cap">
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <h3>Ukuran {{ $barang->kategori_id }}</h3>
                <hr class="hrstyle">
            </div>
        </div>
        <div class="row mt-3 justify-content-center"  data-aos="fade-up" data-aos-anchor-placement="top-center">
            <div class="col-md-3">
                <div class="card" style="border:none;">
                    <img class="card-img-top" style=" border-radius:6px;" src="{{ asset('storage/images/' . $barang->gambar_ukuran) }}"
                        alt="Card image cap">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border:none;">
                    <img class="card-img-top" style=" border-radius:6px;" src="{{ asset('storage/images/' . $barang->gambar_ukuran2) }}"
                        alt="Card image cap">
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <h3>Bahan {{ $barang->kategori_id }}</h3>
                <hr class="hrstyle">
            </div>
        </div>
        <div class="row mt-3 justify-content-center"  data-aos="fade-down" data-aos-anchor-placement="top-center">
            <div class="col-md-6">
                <div class="card" style="border:none;">
                    <img class="card-img-top" style=" border-radius:6px;" src="{{ asset('storage/images/' . $barang->gambar_bahan) }}"
                        alt="Card image cap">
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <h3>Warna {{ $barang->kategori_id }}</h3>
                <hr class="hrstyle">
            </div>
        </div>
        <div class="row mt-3 mb-5 justify-content-center">
            <div class="col-md-6">
                <div class="card" style="border:none;">
                    <img class="card-img-top" style=" border-radius:6px;" src="{{ asset('storage/images/' . $barang->gambar_warna) }}"
                        alt="Card image cap">
                </div>
            </div>
        </div>
    </div>
@endsection
