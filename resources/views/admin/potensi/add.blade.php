<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($potensi))
                <form action="/admin/potensi/{{ $potensi->id }}" method="POST">
                    @method('PUT')
                @else
                <form action="/admin/potensi" method="POST">

                @endif

                    @csrf
                    <div class="form-group">
<<<<<<< HEAD
                        <label for="">title</label>
                        <input type="text" name="title" class="form-control @error ('title') is-invalid @enderror" placeholder="masukkan judul" value="{{ isset($potensi) ? $potensi->title : old('title') }}">
=======
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control @error ('title') is-invalid @enderror" placeholder="Username" value="{{ isset($potensi) ? $potensi->title : old('title') }}">
>>>>>>> dev
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
<<<<<<< HEAD
                        <label for="">icon</label>
                        <input type="text" name="icon" class="form-control @error ('icon') is-invalid @enderror" placeholder="masukkan ikom" value="{{ isset($potensi) ? $potensi->icon : old('icon') }}">
                        <a href="https://fontawesome.com/search" target="blank">Klik Untuk mencari Icon</a>
=======
                        <label for="">Icon</label>
                        <input type="text" name="icon" class="form-control @error ('icon') is-invalid @enderror" placeholder="Username" value="{{ isset($potensi) ? $potensi->icon : old('icon') }}">
                        <a href="https://fontawesome.com/search" target="blank">Klik Untuk Mencari Ikon</a>
>>>>>>> dev
                        @error('icon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
<<<<<<< HEAD
                       <textarea name="desc" id="" cols="30" class="form-control" rows="10">{{isset($potensi) ? $potensi->desc : ''}}</textarea>
                        @error('Desc')
=======
                        <textarea name="desc" id="" cols="30" rows="10" class="form-control">{{isset($potensi) ? $potensi->desc : '' }}</textarea>
                        @error('desc')
>>>>>>> dev
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
<<<<<<< HEAD
=======

                    

>>>>>>> dev
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </form>
            </div>
        </div>
    </div>
</div>
