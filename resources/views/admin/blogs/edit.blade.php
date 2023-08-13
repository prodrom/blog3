@extends("layoutsadmin.app")
@section("content")
    <h3>Blog Güncelle</h3>
    <form action="{{ route("admin.blogs.update") }}" enctype="multipart/form-data" method="post">
        @csrf
        <input type="hidden" name="id" id="id" value="{{ $blog->id }}">
        <div class="row">
            <div class="col-12">
                <label>
                    Photo
                    <input type="file" name="photo" id="photo" class="form-control">
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>
                    Title
                    <input type="text" name="title" id="title" class="form-control" value="{{ $blog->title }}">
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>
                    Summary
                    <textarea class="form-control" name="summary" id="summary">{{ $blog->summary }}</textarea>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>
                    Content
                    <textarea class="form-control" name="content" id="content">{{ $blog->content }}</textarea>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </div>
        </div>
    </form>
@endsection
