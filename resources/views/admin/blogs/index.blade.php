@extends("layoutsadmin.app")
@section("content")
    <h3>Blogs Index</h3>
    <div class="col-12">
        <a href="{{ route("admin.blogs.create") }}" class="btn btn-primary">Yeni Ekle</a>
        <table id="blogstable"  class="table table-hover">
            <thead>
            <tr>
                <td>id</td>
                <td>title</td>
                <td>summary</td>
                <td>photo</td>
                <td>Actions</td>
            </tr>
            </thead>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->summary }}</td>
                    <td>
                        <img src="{{ asset("Blogs/Photos/".$blog->photo) }}" height="35">

                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ route("admin.blogs.edit", $blog->id) }}">Güncelle</a>
                        <a class="btn btn-danger" href="{{ route("admin.blogs.destroy", $blog->id) }}">Sil</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
