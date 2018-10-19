@extends('layouts.master')

@section('content')

<div>
  <section class="hero">
    <div class="container">
      <img class="site-logo" src="{{url('assets/img/logo.png')}}">
      <h1 class="hero-title">himpunan mahasiswa teknik computer-informatika ITS</h1>
      <video class="hero-video" autoplay loop muted>
        <source src="{{url('assets/img/home-vid.mp4')}}" type="video/mp4">
        </video>
        <div class="hero-scroll" href="#!">
          <i class="fa fa-angle-down hero-scroll-arrow"></i>
          <strong>scroll down</strong>
        </div>
      </div>
    </section>

    <section class="home-section article-section" id="article">
      <div class="container">
        <h1 class="section-title">Articles</h1>
        <ul class="media-grid list-nostyle clearfix block">
          <li class="media-grid-item media-grid-item--large">
            <a class="media-grid-anchor" href="/article">
              <img class="media-grid-img" src="{{url('assets/img/artikel.jpg')}}">
              <div class="media-grid-desc">
                <small><span>Wed, 20 Sep 2017</span> - <span>Kewirausahaan</span></small>
                <h3>[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</h3>
              </div>
            </a>
          </li>
          <li class="media-grid-item">
            <a class="media-grid-anchor">
              <img class="media-grid-img" src="{{url('assets/img/artikel.jpg')}}">
              <div class="media-grid-desc">
                <small><span>Wed, 20 Sep 2017</span> - <span>Kewirausahaan</span></small>
                <h3 class="media-grid-title--small">[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</h3>
              </div>
            </a>
          </li>
          <li class="media-grid-item">
            <a class="media-grid-anchor">
              <img class="media-grid-img" src="{{url('assets/img/artikel.jpg')}}">
              <div class="media-grid-desc">
                <small><span>Wed, 20 Sep 2017</span> - <span>Kewirausahaan</span></small>
                <h3 class="media-grid-title--small">[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</h3>
              </div>
            </a>
          </li>
          <li class="media-grid-item">
            <a class="media-grid-anchor">
              <img class="media-grid-img" src="{{url('assets/img/artikel.jpg')}}">
              <div class="media-grid-desc">
                <small><span>Wed, 20 Sep 2017</span> - <span>Kewirausahaan</span></small>
                <h3 class="media-grid-title--small">[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</h3>
              </div>
            </a>
          </li>
          <li class="media-grid-item">
            <a class="media-grid-anchor">
              <img class="media-grid-img" src="{{url('assets/img/artikel.jpg')}}">
              <div class="media-grid-desc">
                <small><span>Wed, 20 Sep 2017</span> - <span>Kewirausahaan</span></small>
                <h3 class="media-grid-title--small">[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</h3>
              </div>
            </a>
          </li>

        </ul>

        <div class="bzg block">
          <div class="bzg_c" data-col="l6">
            <form>
              <label class="form-label form-label--filter" for="articleCategory"><strong>Category</strong></label>
              <select class="form-input form-input--category" id="articleCategory" name="articleCategory">
                <option value="">All Categories</option>
                <option value="">Kaderisasi dan Pemetaan</option>
                <option value="">Media dan Informasi</option>
                <option value="">Kegiatan</option>
                <option value="">Sosial Masyarakat</option>
              </select>
            </form>
          </div>
          <div class="bzg_c text-right" data-col="l6">
            <button class="btn">
              <i class="fa fa-angle-left"></i>
            </button>
            <button class="btn">
              <i class="fa fa-angle-right"></i>
            </button>
          </div>
        </div>

        <ul class="media-list list-nostyle block">
          <li class="media-list-item">
            <a class="media-list-anchor" href="/article">
              <img class="media-list-img block-low" src="{{url('assets/img/artikel.jpg')}}">
              <div class="media-list-desc">
                <h4>[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</h4>
                <small><span>Wednesday, 20 September 2017</span> - <span>Kewirausahaan</span></small>
              </div>
            </a>
          </li>
        </ul>

      </div>
    </section>

    <section class="home-section story-section" id="story">
      <div class="container">
        <h1 class="section-title">Our Story</h1>
        {{-- <h3>Himpunan Mahasiswa Teknik Computer-Informatika ITS</h3> --}}
        
        <div class="bzg text-left">
          <div class="bzg_c" data-col="l2">
            <img class="img-fit block" src="{{url('assets/img/logo.png')}}" alt="hmtc_its" style="display:block">
          </div>
          <div class="bzg_c" data-col="l10">
            <h3>HMTC ITS</h3>  
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident officiis itaque voluptatem nihil placeat sint autem, eaque eveniet necessitatibus dolorum fugit delectus perspiciatis quo ut obcaecati quod. Aliquam odio velit necessitatibus autem qui vero saepe natus porro? Eum, mollitia corporis.</p>
            <a class="btn btn--blue">See more</a>
          </div>
        </div>
        <br>
        <div class="bzg text-right">
          <div class="bzg_c" data-col="l10">
            <h3>Kabinet Inspirasi 2016/2017</h3>
            <p>Lorem, ipsum dolor sit amet adipisicing elit. Quas in deleniti, accusantium nemo dicta nihil reprehenderit modi assumenda, odit. Explicabo tempore hic fugit eos suscipit animi quaerat, veritatis ad facere obcaecati officiis, est error esse architecto dignissimos mollitia neque maiores impedit?</p>
            <a class="btn btn--blue">See more</a>
          </div>
          <div class="bzg_c" data-col="l2">
            <img class="img-fit block" src="{{url('assets/img/logo-inspirasi.png')}}" alt="hmtc_its" style="display:block">
          </div>
        </div>
      </div>
    </section>

    <section class="home-section media-section" id="media">
      <div class="container">
        <h1 class="section-title">Our Media</h1>
        <slick class="media-slider" slides-to-show="1" slides-to-scroll="1" infinite="true" speed="800" dots="true" fade="true">
          <div class="media-slider-wrapper">
            <div class="media-slider-item">
              <img class="media-slider-img" src="{{url('assets/img/media.jpg')}}" alt="media">
              <div class="media-slider-desc">
                <h2>Bluemagz #10</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magni sit exercitationem itaque officia corporis nostrum temporibus maxime? Odio animi facere libero, dignissimos accusantium rem dolores iste doloribus perspiciatis. Dolor?</p>
                <a class="btn btn--white" href="#">See more</a>
              </div>
            </div>
          </div>
          <div class="media-slider-wrapper">
            <div class="media-slider-item">
              <img class="media-slider-img" src="{{url('assets/img/media.jpg')}}" alt="media">
              <div class="media-slider-desc">
                <h2>Bluemagz #10</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magni sit exercitationem itaque officia corporis nostrum temporibus maxime? Odio animi facere libero, dignissimos accusantium rem dolores iste doloribus perspiciatis. Dolor?</p>
                <a class="btn btn--white" href="#">See more</a>
              </div>
            </div>
          </div>      
        </slick>
      </div>
    </section>

  </div>

@endsection