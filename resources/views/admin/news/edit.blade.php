@extends('layouts.admin.dashboard.app', ['title' => 'News'])
@section('content')
<!-- Main Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-12">
            <div class="card">
                <form action="{{ route('admin.news.update', $news->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <img src="{{ asset('thumbnail/news_image/'.$news->news_thumbnail) }}" alt="" width="200px" srcset="">
                        </div>
                        <div class="form-group">
                            <label for="thumb">Update Image</label>
                            <input type="file" name="news_thumbnail" id="thumb" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nt">Title News</label>
                            <input type="text" name="news_title" maxlength="25" value="{{ $news->news_title }}" id="nt" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nd">Description News</label>
                            <textarea id="nd" name="news_description" class="form-control" style="height: 100px;">{{ $news->news_description }}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.news.news') }}" class="btn btn-danger mr-2" style="border-radius: 0;">Back</a>
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
    CKEDITOR.replace('news_description');
</script>
@stop
