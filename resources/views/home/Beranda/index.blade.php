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
    <div class "wrapper-img-banner">
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
        <img src="/img/banner2.jpg" class="img-tentang-desa" alt="">
    </div>
    <div class="col-md-6">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem doloremque inventore, hic molestiae delectus dolorem quam velit, reiciendis neque nulla odit. Temporibus, consequuntur? Officia eius eum voluptas, maxime ab enim maiores placeat molestias ratione quibusdam eveniet voluptatum obcaecati aut magnam minima, minus consequatur perspiciatis sed! Fugit, eaque esse eum dolorem ipsa deleniti, laborum corrupti voluptas fugiat error distinctio autem recusandae nobis cum modi amet. Corporis, unde? Nam aliquid laudantium eaque recusandae voluptas ratione aliquam voluptates pariatur autem animi iste est nesciunt non quo aspernatur fuga, quasi quia maxime magnam eius id blanditiis illo. Inventore, quasi mollitia repellendus impedit repudiandae nobis.
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="text-center">
        <h4 class="">Potensi Kami</h4>
        </div>

<div class="row">
    <!-- @for ($i = 0; $i < 4; $i++) -->
    <div class="col-md-3">
        <div class= "text-center">
        <i class="fa-solid fa-trees"></i>
        <h5><b>kebun pinus</b></h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius dicta quia voluptatum nesciunt accusamus itaque aperiam asperiores repellendus sunt distinctio? Hic autem qui exercitationem quisquam ullam libero perspiciatis minima atque.</p>
        </div>
    </div>

    <!-- @endfor -->
</div>

    <div class="text-center mt-3">
        <a href="" class="btn btn-success px-5">Selengkapnya <i class="fas fa-arrow-right"></a>
    </div>
</div>

<div class="container my-2">
    <div class="text-center">
        <h4 class="">Dokumentasi Desa</h4>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="wrapper-card-blog">
                    <img src="/img/banner1.jpg" class="img-card-blog" alt="">
                </div>
                <div class="p-3">
                <a href=""class="text-decoration-none"><h5>Menanam pohon</h5></a>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, perspiciatis!</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container my-2 mb-5">
    <div class="text-center">
        <h4 class="">Hubungi Kami</h4>
        <a href="" class="btn btn-success px-5 " target="blank"><i class="fas fa-phone"></i>Hubungi Kami di WhatsApp</a>
    </div>
</div>
