<div class="wrapper-hero">
    <img src="/img/banner2.jpg" class="img-hero" alt="">
    <div class="text-hero">
        <h4><b>Profile Desa</b></b></h4>
    </div>
</div>
<div class="container py-3">
    <div class="row">
        <div class="col-md-4">
        <img src="/{{$profil->cover}}"width="100%" alt="">
        </div>
        <div class="col-md-8">
            <!-- belum buka summernote -->
            {!! $profil->desc !! }
        </div>
    </div>
</div>