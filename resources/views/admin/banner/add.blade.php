<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($banner))
                <form action="/admin/banner/{{ $banner->id }}" method="POST"  enctype="multipart/form-data">
                    @method('PUT')
                @else
                <form action="/admin/banner/" method="POST"  enctype="multipart/form-data">

                @endif

                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control @error ('name') is-invalid @enderror" placeholder="Username" value="{{ isset($banner) ? $banner->name : old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input type="text" name="desc" class="form-control @error ('desc') is-invalid @enderror" placeholder="Email" value="{{ isset($banner) ? $banner->desc : old('desc') }}">
                        @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">gambar</label>
                        <input type="file" name="gambar" class="form-control @error ('gambar') is-invalid @enderror" placeholder="********">
                        

                        
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
