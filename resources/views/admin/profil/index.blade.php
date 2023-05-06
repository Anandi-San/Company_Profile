<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

<<<<<<< HEAD

                <form action="/admin/profil/update" method="POST" enctype="multipart/form-data">
                    @method('PUT')

                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control @error ('title') is-invalid @enderror" placeholder="title" value="{{ isset($profil) ? $profil->title : old('title') }}">
                        @error('title')
                             <div class="invalid-feedback">
=======
                <form action="/admin/profil/update" method="POST"  enctype="multipart/form-data">
                    @method('PUT')

                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control @error ('name') is-invalid @enderror" value="{{ isset($profil) ? $profil->name : old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
>>>>>>> dev
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

<<<<<<< HEAD
                   

                        <div class="form-group">
                            <label for="">Cover</label>
                            <input type="file" name="cover" class="form-control @error ('cover') is-invalid @enderror" placeholder="">
                        

                        
=======

                    <div class="form-group">
                        <label for="">cover</label>
                        <input type="file" name="cover" class="form-control @error ('cover') is-invalid @enderror">
                    
>>>>>>> dev
                        @error('cover')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (isset($profil))
<<<<<<< HEAD
                        <img src="/{{$profil->cover}}" width="100%" class="mt-4" alt="">
                        @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                             <label for="">Deskripsi</label>
                             <textarea name="desc" id="summernote" cols="30" class="form-control @error ('cover') is-invalid @enderror" rows="10">{{isset($profils)}}</textarea>
                        @error('desc')
                                <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    </div>

                   
=======
                            <img src="/{{$profil->cover}}" width="100%" class="mt-4" alt="">
                        @endif
                    </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="desc" id="" cols="30" rows="10" class="form-control @error ('desc') is-invalid @enderror">{{$profil->desc}}</textarea>
                             @error('desc')
                                <div class="invalid-feedback">
                                     {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    
>>>>>>> dev

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </form>
            </div>
        </div>
    </div>
</div>
