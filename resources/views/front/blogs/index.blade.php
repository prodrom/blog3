@extends("layouts.app")
@section("content")
    <div class="container">
    <h3>Blogs</h3>
    @foreach($blogs as $blog)
        <div class="row">
            <div class="col-2">
                Photo
            </div>
            <div class="col-10">
                <h2>{{ $blog->title }}</h2>
                <p>{{ $blog->summary }}</p>
                <a href="{{ route("front.blogs.show",$blog->id) }}" class="btn btn-primary">Detay</a>
            </div>
        </div>
    @endforeach
    </div>
@endsection
