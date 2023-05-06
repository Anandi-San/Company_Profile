<!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/"> -->
<style>
    .wrapper-img-banner{
        max-width: 100%;
        max-heigh: 400px
    }

    .img-banner{
        width: 100%
    }
</style>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="wrapper-img-banner">
        <img src="/img/banner1.jpg" class = "img-banner"alt="">
    </div>
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>Example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/banner2.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/banner1.jpg" alt="">
      <div class="container">
        <div class="carousel-caption text-right">
          <h1>One more for good measure.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container mt-5">
    <div class="text-center">
        <h4 class="">Tentang Desa</h4>
    </div>
<div class= "row">
    <div class ="col-md-6">
        <img src="/{{$profil->cover}}" width="100%" class="img-tentang-desa" alt="">
    </div>
    <div class="col-md-6">
        {{ $profil->desc }}
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="text-center">
        <h4 class="">Potensi Kami</h4>
        </div>

<div class="row">
    
    @foreach ($potensi as $item)

    <div class="col-md-3">
        <div class= "text-center">
        <i class="fa-solid fa-tree"></i>
        <h5><b>{{$item->title}}</b></h5>
        <p>{{ $item->desc }}</p>
        </div>
    </div>

    @endforeach
    
  </div>
  <div class="text-center mt-3">
        <a href="/Potensi" class="btn btn-success px-5">Selengkapnya</a>
    </div>
</div>

<div class="container my-2">
    <div class="text-center">
        <h4 class="">Dokumentasi Desa</h4>
    </div>

    <div class="row">

    @foreach ($blog as $item)
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="wrapper-card-blog">
                    <img src="/{{$item->cover}}" class="img-card-blog" alt="">
                </div>
                <div class="p-3">
                <a href=""class="text-decoration-none"><h5>{{$item->title}}</h5></a>
                <p>{!! Illuminate\Support\Str::limit($item->body, 50) !!}</p>
                </div>
                <a href="/blog/show/{{$item->id}}" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="container my-2 mb-5">
    <div class="text-center">
        <h4 class="">Hubungi Kami</h4>
        <a href="" class="btn btn-success px-5 " target="blank"><i class="fas fa-phone"></i>Hubungi Kami di WhatsApp</a>
    </div>
  </div>
