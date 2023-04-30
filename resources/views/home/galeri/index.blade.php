<div class="wrapper-hero">
    <img src="/img/banner2.jpg" class="img-hero" alt="">
    <div class="text-hero">
        <h4><b>Galeri</b></b></h4>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        @for ($i = 0; $i < 12; $i++)
        <div class="col-md-3 my-3">
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
        @endfor
    </div>
</div>