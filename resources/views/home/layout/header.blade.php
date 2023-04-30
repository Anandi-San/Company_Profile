<style>
    .menu-active{
        color: black !important;
        font-weight: bold;
    }
</style>
<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-light  bg-light">
        <div class="container">
        <a class="navbar-brand" href="#">Fixed navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link {{Request:: is('/') ? 'menu.active' : ''}}" href="beranda">beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Potensi">Potensi & Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Kontak">Kontak</a>
            </li>
          </ul>
          <form class= "d-flex">
            <a href="/login" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</a>
          </form>
          </div>
        </div>
      </nav>
    </header>