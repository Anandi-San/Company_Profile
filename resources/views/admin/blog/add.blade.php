<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                @if (isset($blog))
                <form action="/admin/post/blog/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                @else
                <form action="/admin/posts/blog" method="POST" enctype="multipart/form-data">

                @endif

                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                        <div class="form-group">
                        <label for="">title</label>
                        <input type="text" name="title" class="form-control @error ('title') is-invalid @enderror" placeholder="Headline" value="{{ isset($blog) ? $blog->title : old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    


                    <div class="form-group">
                        <label for="">Cover</label>
                        <input type="file" name="cover" class="form-control @error ('cover') is-invalid @enderror" placeholder="">
                        

                        
                        @error('cover')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if (isset($blog))
                        <img src="/{{$blog->cover}}" width="100%" class="mt-4" alt="">
                        @endif
                    </div>

                        </div>
                    </div>
                    
                    <div class="col-md-7">
                    <div class="form-group">
                        <label for="">Body</label>
                        <textarea type="text" id="summernote" name="body" class="form-control @error('body') is-invalid @enderror" placeholder="body">{{ isset($blog) ? $blog->body : old('body') }}</textarea>
                        @error('Body')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
  
                    </div>
                    
                    

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </form>
            </div>
        </div>
    </div>
</div>