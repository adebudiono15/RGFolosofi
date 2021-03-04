@extends('layouts.frontend.master')

@section('title', 'Home')

@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="margin-top: -50px;">
        <div class="carousel-inner">
            <div class="container banner">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="text-banner">Home Insdustri <br>
                            Variasi Lengkap & Berkualitas</p>
                        <h3 class="text-banner2">Home Insdustri
                            Variasi Lengkap & Berkualitas
                            Apapun kebutuhan baju anda, bikin di <b>RG FOLOSOFI</b> aja !</h3>
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{ asset('assets/frontend/img/banner1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/frontend/img/banner2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/frontend/img/banner3.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    {{-- content 2 --}}
    <section class="content2">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-2 produk">
                    <img src="{{ asset('assets/frontend/img/1.png') }}" alt="">
                    <p class="text-content2">Variasi Design Produk</p>
                </div>
                <div class="col-lg-2 produk">
                    <img src="{{ asset('assets/frontend/img/2.png') }}" alt="">
                    <p class="text-content2">Free Design</p>
                </div>
                <div class="col-lg-2 produk">
                    <img src="{{ asset('assets/frontend/img/3.png') }}" alt="">
                    <p class="text-content2">Sample Produk</p>
                </div>
                <div class="col-lg-2 produk">
                    <img src="{{ asset('assets/frontend/img/4.png') }}" alt="">
                    <p class="text-content2">Ketepatan Waktu Produksi</p>
                </div>
                <div class="col-lg-2 produk">
                    <img src="{{ asset('assets/frontend/img/5.png') }}" alt="">
                    <p class="text-content2">Jaminan Produk</p>
                </div>
                <div class="col-lg-2 produk">
                    <img src="{{ asset('assets/frontend/img/6.png') }}" alt="">
                    <p class="text-content2">Jaminan Keamanan</p>
                </div>
            </div>
        </div>
    </section>
    {{-- last content 2 --}}

    {{-- content 3 --}}
    <section class="content3 scrollto" id="produksi" tabindex="-1">
        {{-- kaos --}}
        <div class="container">
            <h6 class="text-content">Produk Terbaru</h6>
            <hr class="hrstyle">
            <div class="row" style="margin-top: 70px !important;">
                @foreach ($barang as $item)
                    <div class="col-lg-3">
                        <a href="{{ url('detail/' . $item->nama) }}" style="text-decoration: none;">
                            <img style="border-radius:6px;" class="image-produk shadow"
                                src="{{ asset('storage/images/' . $item->gambar_spesifikasi) }}" alt="">
                            <p class="text-center text-image-produk" style="font-size: 13px;"><b>{{ $item->nama }}</b>
                            </p>
                        </a>
                        <p class="text-center" style="font-size: 13px;">Harga Mulai Rp.
                            {{ number_format($item->harga, 0) }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- last kaos --}}
    </section>
    {{-- last content 3 --}}

    {{-- content 4 --}}
    <section class="content4 scrollto text-content4" style="margin-top: 200px;" id="order" tabindex="-1">
        <div class="container mt-4" data-aos="fade-up">
            <div class="row justify-content-center text-center">
                <h3 class="mt-5">Solusi Kebutuhan Home Insdustri BAJU Anda</h3>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                    <p class="mb-5">Rgfolosofi adalah generasi kedua yang semula bernama ranggaprint, didirikan pada tahun
                        1994 oleh Bpk. Itang S.pd yang merupakan guru, berawal dari hobi screenprinting kemudian menjadi
                        profesi bidang profesi. yang akan bersaing di dunia sablon di era digital selanjutnya yang akan
                        selalu memperkenalkan teknik sablon manual orientasinya secara masif dan efektif.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- last content 4 --}}
    {{-- content5 --}}
    <section class="content5" style="margin-top: 100px;">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-left">
                <div class="col-lg-5 text-right">
                    <h2 class="text-content5">Visualisasi ide anda menjadi sebuah desain</h2>
                    <p>RFolosofi membantu Anda dalam mengolah ide Anda menjadi sebuah desain yang siap untuk ditampilkan ke
                        teman-teman atau rekan kerja Anda sehingga siap untuk diproduksi.</p>
                    <a href="{{ $konsul }}" style="text-decoration: none;" target="_blank">
                        <button class="btn btn-sm btn-hijau shadow">
                            Bantuan Design
                        </button>
                    </a>
                </div>
                <div class="col-lg-5 text-right" data-aos="fade-right">
                    <img src="{{ asset('assets/frontend/img/vdesain.jpg') }}" class="shadow rounded" width="400px"
                        alt="">
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5" data-aos="fade-left">
                    <img src="{{ asset('assets/frontend/img/vjait.jpg') }}" class="shadow rounded" width="400px" alt="">
                </div>
                <div class="col-lg-5 text-left" data-aos="fade-right">
                    <h2 class="text-content5">Produksi Home Insdustri Baju terbaik dari Ahlinya</h2>
                    <p>RFolosofi memiliki jaringan Home Insdustri baju di Indonesia berkomitmen untuk menghasilkan pakaian
                        dengan standart tinggi, dan serius untuk memenuhi kebutuhan pakaian para customer.</p>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5 text-right" data-aos="fade-left">
                    <h2 class="text-content5">Kualitas produk pada setiap Produksi</h2>
                    <p>Customer perlu mengetahui tahap apa saja dalam Home Insdustri baju seperti analisis kebutuhan dan
                        keinginan kemudian menentukan bahan seperti apa yang diperlukan dan yang sesuai. Tahap berikutnya
                        adalah mencari penyedia jasa produksi yang terpercaya.</p>
                    <p>Sebagai brand layanan jasa produksi, Bikin.co menghadirkan kualitas di tiap proses pengerjaan produk.
                    </p>
                </div>
                <div class="col-lg-5 text-right" data-aos="fade-right">
                    <img src="{{ asset('assets/frontend/img/vsablon.jpg') }}" class="shadow rounded" width="400px"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- last content5 --}}
    {{-- content 6 --}}
    <section class="content6" style="margin-top: 100px;">
        <div class="container">
            <div class="row text-center justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <h3>Cara Mudah Order Baju di Home Industri RFolosofi</h3>
                    <p>Kami tahu anda sibuk. RFolosofi siap membantu mempermudah pekerjaan Anda dalam pengadaan pakaian
                        untuk berbagai kebutuhan Anda.</p>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <img style="border-radius: 6px;" src="{{ asset('assets/frontend/img/caraorder.png') }}"
                        class="shadow">
                </div>
            </div>
            <div class="row justify-content-center text-center mt-5">
                <div class="col-lg-12">
                    <img style="border-radius: 6px; max-width:7500px; max-height:500px;"
                        src="{{ asset('assets/frontend/img/faq.png') }}" class="shadow">
                </div>
            </div>
            <div class="row justify-content-center text-center mt-5">
                <div class="col-lg-12">
                    <img style="border-radius: 6px;max-width:7500px; max-height:500px;"
                        src="{{ asset('assets/frontend/img/keterangan_faq.png') }}" class="shadow">
                </div>
            </div>
        </div>
    </section>
    {{-- last content 6 --}}

    {{-- content 7 --}}
    <section class="content7 scrollto" style="margin-top: 100px;" id="portfolio" tabindex="-1">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="text-content7 mt-5">Portfolio</h2>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-3">
                    <img class="shadow" style="border-radius: 6px;width:235px;height:279px;" src="{{ asset('assets/frontend/img/p1.jpg') }}" alt="">
                </div>
                <div class="col-lg-3">
                    <img class="shadow" style="border-radius: 6px;width:235px;height:279px;" src="{{ asset('assets/frontend/img/p2.jpg') }}" alt="">
                </div>
                <div class="col-lg-3">
                    <img class="shadow" style="border-radius: 6px;width:235px;height:279px;" src="{{ asset('assets/frontend/img/p3.jpg') }}" alt="">
                </div>
                <div class="col-lg-3">
                    <img class="shadow" style="border-radius: 6px;width:235px;height:279px;" src="{{ asset('assets/frontend/img/p4.jpg') }}" alt="">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-lg-3">
                    <img class="shadow" style="border-radius: 6px;width:235px;height:279px;" src="{{ asset('assets/frontend/img/p5.jpg') }}" alt="">
                </div>
                <div class="col-lg-3">
                    <img class="shadow" style="border-radius: 6px;width:235px;height:279px;" src="{{ asset('assets/frontend/img/p6.jpg') }}" alt="">
                </div>
                <div class="col-lg-3">
                    <img class="shadow" style="border-radius: 6px;width:235px;height:279px;" src="{{ asset('assets/frontend/img/p7.jpg') }}" alt="">
                </div>
                <div class="col-lg-3">
                    <img class="shadow" style="border-radius: 6px;width:235px;height:279px;" src="{{ asset('assets/frontend/img/p8.jpg') }}" alt="">
                </div>
            </div>
            <div class="row justify-content-center">
                <h2 class="text-content7 mt-5">Yuk bikin BAJU mu disini, <br>
                    RFolosofi siap membantu</h2>
            </div>
            <div class="row justify-content-center">
                <a href="{{ $wa }}" style="text-decoration: none;" target="_blank">
                    <button class="btn btn-sm btn-bikin  mt-5 mb-5 shadow"><b>BIKIN</b></button>
                </a>
            </div>
        </div>
    </section>
    {{-- last content 7 --}}

    {{-- content 8 --}}
    <section class="content6" style="margin-top: 100px;margin-bottom: 100px;">
        <div class="container">
            <div class="row scrollto text-center justify-content-center" id="tentang" tabindex="-1">
                <div class="col-lg-10">
                    <h4>Tentang RG Folosofi</h4>
                    <p style="font-size: 14px;">Rgfolosofi adalah generasi kedua yang semula bernama ranggaprint, didirikan
                        pada tahun 1994 oleh Bpk. Itang S.pd yang merupakan guru, berawal dari hobi screenprinting kemudian
                        menjadi profesi bidang profesi. yang akan bersaing di dunia sablon di era digital selanjutnya yang
                        akan selalu memperkenalkan teknik sablon manual orientasinya secara masif dan efektif.</p>
                </div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-6">
                    <h6>Alamat Kami: </h6> <br>
                    <p style="font-size: 14px;">Jln.swadaya kp.curug RT04/02 desa leuweungkolot , Kec.Cibungbulang Kab.Bogor
                    </p>
                    <a href="https://goo.gl/maps/6H4P9fF7ppcKWjeJ7" style="text-decoration: none;" target="_blank">
                        <button class="btn btn-sm btn-lg btn-hijau shadow">
                            Buka Di Google Map
                        </button>
                    </a>
                </div>
                <div class="col-lg-6">
                    <iframe class="shadow" style="border-radius: 6px; border:none;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6889255663523!2d106.67094681411199!3d-6.5608943952548175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69db9ec5cdb62d%3A0xca818a64ed1492bb!2sJl.%20Swadaya%2C%20Leuweung%20Kolot%2C%20Kec.%20Cibungbulang%2C%20Bogor%2C%20Jawa%20Barat%2016630!5e0!3m2!1sid!2sid!4v1614708865118!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    {{-- last content 8 --}}
@endsection

@push('css')
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
@endpush
