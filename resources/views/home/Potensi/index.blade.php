<div class="wrapper-hero">
    <img src="/img/banner2.jpg" class="img-hero" alt="">
    <div class="text-hero">
        <h4><b>POTENSI & PRODUK</b></h4>
    </div>
</div>
<!-- <div class="container"> -->
    <div class="row mt-5">
    @foreach ($potensi as $item)
     <div class="col-md-3 my-3">
        <div class= "text-center">
<<<<<<< HEAD
        <i class="fas fa-globe"></i>
        <h5><b>kebun pinus</b></h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius dicta quia voluptatum nesciunt accusamus itaque aperiam asperiores repellendus sunt distinctio? Hic autem qui exercitationem quisquam ullam libero perspiciatis minima atque.</p>
=======
        <i class="{{$item->icon}}"></i>
        <h5><b>{{$item->title}}</b></h5>
        <p>
             {!! Illuminate\Support\Str::limit($item->desc, 50) !!}
        </p>
>>>>>>> dev
        </div>
     </div>
     @endforeach
    </div>
</div>