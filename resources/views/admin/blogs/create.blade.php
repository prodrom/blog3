@extends("layoutsadmin.app")
@section("content")
    <h3>Yeni Blog Ekle</h3>
    <form action="{{ route("admin.blogs.store") }}" enctype="multipart/form-data" method="post">
        @csrf
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
                    <input type="text" name="title" id="title" class="form-control">
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>
                    Summary
                    <textarea class="form-control" name="summary" id="summary"></textarea>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>
                    Content
                    <textarea class="form-control" name="content" id="content"></textarea>
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
