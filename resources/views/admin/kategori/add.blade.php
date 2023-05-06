<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset($kategori))
                <form action="/admin/posts/kategori/{{ $kategori->id }}" method="POST">
                    @method('PUT')
                @else
                <form action="/admin/posts/kategori" method="POST">

                @endif

                    @csrf
                    <div class="form-group">
<<<<<<< HEAD
                        <label for="">Nama Kategori</label>
                        <input type="text" name="name" class="form-control @error ('name') is-invalid @enderror" placeholder="masukkan nama kategori" value="{{ isset($kategori) ? $kategori->name : old('name') }}">
=======
                        <label for="">Name Kategori</label>
                        <input type="text" name="name" class="form-control @error ('name') is-invalid @enderror" placeholder="name kategori" value="{{ isset($kategori) ? $kategori->name : old('name') }}">
>>>>>>> dev
                        @error('name')
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
