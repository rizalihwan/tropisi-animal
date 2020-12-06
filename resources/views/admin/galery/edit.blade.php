@extends('layouts.admin.dashboard.app', ['title' => 'Gallery'])
@section('content')
<!-- Main Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-12">
            <div class="card">
                <form action="{{ route('admin.galery.update', $galery->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <img src="{{ asset('thumbnail/gallery_image/'.$galery->galery_thumbnail) }}" alt="" width="200px" srcset="">
                        </div>
                        <div class="form-group">
                            <label for="thumb">Update Image</label>
                            <input type="file" name="galery_thumbnail" id="thumb" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.galery.galery') }}" class="btn btn-danger mr-2" style="border-radius: 0;">Back</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- end Main Content -->
@endsection
