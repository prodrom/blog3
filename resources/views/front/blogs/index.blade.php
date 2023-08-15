@extends("layouts.app")
@section("content")
    <div class="container">
    <h3>Blogs</h3>
    @foreach($blogs as $blog)
        <div class="row">
            <div class="col-2">

                <a href="{{ route("front.blogs.show",$blog->id) }}" ><img src="{{ asset("Files/Blogs/Photos/".$blog->photo) }}" height="100" border="0"></a>
            </div>
            <div class="col-10">
                <h2><a href="{{ route("front.blogs.show",$blog->id) }}" class="btn btn-primary">{{ $blog->title }}</a></h2>
                <p>{{ $blog->summary }}</p>
            </div>
        </div>
    @endforeach
    </div>
@endsection
