<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($banner))
<<<<<<< HEAD
                <form action="/admin/banner/{{ $banner->id }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                @else
                <form action="/admin/banner" method="POST" enctype="multipart/form-data">
=======
                <form action="/admin/banner/{{ $banner->id }}" method="POST"  enctype="multipart/form-data">
                    @method('PUT')
                @else
                <form action="/admin/banner/" method="POST"  enctype="multipart/form-data">
>>>>>>> dev

                @endif

                    @csrf
                    <div class="form-group">
<<<<<<< HEAD
                        <label for="">headline</label>
                        <input type="text" name="headline" class="form-control @error ('headline') is-invalid @enderror" placeholder="Headline" value="{{ isset($galeri) ? $galeri->headline : old('headline') }}">
                        @error('headline')
=======
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control @error ('name') is-invalid @enderror" placeholder="Username" value="{{ isset($banner) ? $banner->name : old('name') }}">
                        @error('name')
>>>>>>> dev
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
<<<<<<< HEAD
                        <input type="text" name="Desc" class="form-control @error ('Desc') is-invalid @enderror" placeholder="Deskripsi" value="{{ isset($galeri) ? $galeri->Desc : old('Desc') }}">
                        @error('Desc')
=======
                        <input type="text" name="desc" class="form-control @error ('desc') is-invalid @enderror" placeholder="Email" value="{{ isset($banner) ? $banner->desc : old('desc') }}">
                        @error('desc')
>>>>>>> dev
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">gambar</label>
<<<<<<< HEAD
                        <input type="file" name="gambar" class="form-control @error ('gambar') is-invalid @enderror" placeholder="">
=======
                        <input type="file" name="gambar" class="form-control @error ('gambar') is-invalid @enderror" placeholder="********">
>>>>>>> dev
                        

                        
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (isset($banner))
<<<<<<< HEAD
                        <img src="/{{$banner->gambar}}" width="100%" class="mt-4" alt="">
=======
                            <img src="/{{$banner->gambar}}" width="100%" class="mt-4" alt="">
>>>>>>> dev
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </form>
            </div>
        </div>
    </div>
</div>
