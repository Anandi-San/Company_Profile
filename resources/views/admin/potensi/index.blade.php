<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <a href="/admin/potensi/create" class="btn btn-primary mb-3"><i class="fas fa-plus"> Tambah</i></a>
            <table class="table">
                <tr>
                    <td>No</td>
<<<<<<< HEAD
                    <td>title</td>
                    <td>icon</td>
=======
                    <td>Title</td>
                    <td>Icon</td>
>>>>>>> dev
                    <td>Action</td>
                </tr>
                @foreach ($potensi as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->title}}</td>
                    <td>
<<<<<<< HEAD
                    <i class="{{$item->icon}}"></i>
=======
                        <i class="{{$item->icon}} "></i>
>>>>>>> dev
                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="/admin/potensi/{{$item->id}}/edit" class="btn btn-success mx-2">Edit</a>
                            <form action="/admin/potensi/{{ $item->id }}" method="Post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"> Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
