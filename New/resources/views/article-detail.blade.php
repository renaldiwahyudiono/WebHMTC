@extends('layouts.master')

@section('content')
<div>
  <div class="container article-container">
    <div class="bzg">
      <div class="bzg_c" data-col="l8">

        <div class="breadcrumb">
          <ul class="list-nostyle list-inline">
            <li class="breadcrumb-item"><a class="breadcrumb-anchor">Articles</a></li>
            <li class="breadcrumb-item"><a class="breadcrumb-anchor">Kewirausahaan</a></li>
            <li class="breadcrumb-item breadcrumb-item--article"><a class="breadcrumb-anchor">{{str_limit('[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017', 50)}}</a></li>
          </ul>
        </div>

        <h1 class="article-title">[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</h1>
        <p>
          <i class="fa fa-tag text-blue"></i>
          <strong><span>Kewirausahaan</span></strong>
          <span class="space"></span>
          <i class="fa fa-calendar text-blue"></i>
          <strong><span>Wednesday, 20 September 2017</span></strong>
        </p>

        <img class="block" src="{{url('assets/img/artikel.jpg')}}">
        <div class="article-content">
          Competitive Programming sendiri adalah salah satu cabang kompetisi komputer yang cukup populer. Pada bidang ini, kamu akan ditantang untuk menjadi problem solver sejati. Dan menuliskan solusimu sendiri dalam bahasa pemrograman.

          Quadrathlon HMTC tidak hanya menawarkan kompetisi sebagai ajang tempatmu mengasah kemampuan, tetapi kami juga akan mengadakan pelatihan khusus untukmu yang tertarik mendalami bidang ini! Pelatihan: Sabtu, 27 Mei 8.00 Pagi, Laboratorium Pemrograman Kompetisi: Minggu, 28 Mei 8.00 Pagi, Laboratorium Pemrograman

          Data Mining adalah salah satu kompetisi komputer yang sangat menarik untuk diikuti. Kompetisi ini menantangmu untuk melakukan ‘mining’ pada sebuah dataset, dan menampilkan hasilnya dengan tingkat akurasi setinggi mungkin.

          TC adalah salah satu jurusan yang cukup berprestasi dalam bidang ini pada banyak kompetisi. Tentunya kita tidak tinggal diam ketika Gemastik memanggil!

          Tidak hanya mengadakan kompetisi, Quadrathlon HMTC akan mengadakan pelatihan Data Mining pra-kompetisi untuk kamu yang penasaran sama bidang ini!

          Pelatihan: Minggu, 28 Mei 12.00 Siang, Laboratorium Pemrograman
          Kompetisi: Senin, 29 Mei 9.00 Pagi, Launching Dataset
        </div>

      </div>
      <div class="bzg_c" data-col="l4">
        <div class="article-sidebar">
          <h2 class="section-title section-title--white">Latest</h2>
          <ul class="list-nostyle article-sidebar-list">
            <li class="article-sidebar-item">
              <a class="article-sidebar-anchor" href="#">
                <img class="article-sidebar-img" src="{{url('assets/img/artikel.jpg')}}">
                <p class="article-sidebar-title">
                  <span>{{str_limit('[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017', 42)}}</span><br>
                  <small>Wed, 20 Sep 2017</small>
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection