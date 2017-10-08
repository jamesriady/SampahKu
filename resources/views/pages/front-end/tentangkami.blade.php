@extends('pages.front-end.layouts.template')
@section('title', 'Tentang Kami')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/tentangkami.css') }}">
@endsection
@section('content')
<div class="ms-content--secondary">

    <section>
            <div class="background">
                <div class="col-md-12">
                    <div class="ms-hero__content ms-container--large u-mx-auto clearfix text-center u-relative">
                        <div class="ms-vertical-center">
                            <h1 class="tentangkami">Tentang Kami</h1>
                            <img src="{{asset('vendor/images/logo.png')}}" alt="Logo SampahKu" width="250">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="container">
        <div class="info-tentangkami-wrap">
			<p class="info-tentangkami">SampahKu adalah layanan pengelola sampah online untuk rumah tangga dan kantor, kini semua orang dapat menjual dan mengelola sampah dengan cepat, mudah dan gratis. Seluruh sampah yang dikelola melalui SampahKu, akan didaur ulang kembali menjadi produk baru atau material lain yang dapat digunakan kembali. dengan menggunakan aplikasi SampahKu, kamu juga bisa mendapatkan bonus berupa cash back ataupun voucher dari hasil pengumpulan sampah, sekaligus memberi kontribusi bagi lingkungan dan social.</p>
			<p class="info-tentangkami">Apa yang kami lakukan ? SampahKu menghubungkan masyarakat dengan pengepul dan pemulung terdekat secara online, sehingga lebih mudah dalam menjual dan mengelola sampah. Kami bermitra dengan pengepul dan pemulung terpercaya, mereka telah berpengelaman dalam bidang tersebut sejak bertahun-tahun, bahkan ada yang sudah puluhan tahun lamanya. Dan SampahKu membantu mereka untuk terhubung dengan masa depan, terkait pekerjaan mereka.</p>
			<p class="info-tentangkami">Visi kami adalah menjadi solusi bagi permasalahan sampah dan daur ulang di Indonesia dan meningkatkan martabat serta kesejahteraan hidup pemulung di Indonesia</p>
        </div>
    </div>
    
</div>
@endsection