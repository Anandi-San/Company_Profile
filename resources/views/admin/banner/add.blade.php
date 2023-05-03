<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($banner))
                <form action="/admin/banner/{{ $banner->id }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                @else
                <form action="/admin/banner" method="POST" enctype="multipart/form-data">

                @endif

                    @csrf
                    <div class="form-group">
                        <label for="">headline</label>
                        <input type="text" name="headline" class="form-control @error ('headline') is-invalid @enderror" placeholder="Headline" value="{{ isset($galeri) ? $galeri->headline : old('headline') }}">
                        @error('headline')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input type="text" name="Desc" class="form-control @error ('Desc') is-invalid @enderror" placeholder="Deskripsi" value="{{ isset($galeri) ? $galeri->Desc : old('Desc') }}">
                        @error('Desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">gambar</label>
                        <input type="file" name="gambar" class="form-control @error ('gambar') is-invalid @enderror" placeholder="">
                        

                        
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (isset($banner))
                        <img src="/{{$banner->gambar}}" width="100%" class="mt-4" alt="">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </form>
            </div>
        </div>
    </div>
</div>
