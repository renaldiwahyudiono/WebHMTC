@extends('layouts.master')

@section('content')
    <section class="home-section article-section" id="article">
      <div class="container">
        <h1 class="section-title">Media</h1>
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

@endsection