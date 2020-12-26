@extends('layouts.admin.dashboard.app', ['title' => 'Content'])
@section('content')
<!-- Main Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-12">
            <div class="card">
                <form action="{{ route('admin.body.update', $body->slug) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="bt">Title Content</label>
                            <textarea id="bt" name="body_title" class="form-control" style="height: 100px;">{{ $body->body_title }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="db">Description Content</label>
                            <textarea id="db" name="body_desc" class="form-control" style="height: 100px;">{{ $body->body_desc }}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.body.body') }}" class="btn btn-danger mr-2" style="border-radius: 0;">Back</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- end Main Content -->
@endsection
@section('script')
    <script>
        CKEDITOR.replace('body_desc');
    </script>
@stop
