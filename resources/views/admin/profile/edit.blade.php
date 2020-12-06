@extends('layouts.admin.dashboard.app', ['title' => 'Profile'])
@section('content')
<!-- Main Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-12">
            <div class="card" style="background-color: rgb(31, 31, 39); color: #ffffff;">
                <form action="{{ route('admin.profile.update', $profile->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body" style="color: #ffffff;">
                        <div class="form-group">
                            <img src="{{ asset('thumbnail/logo_image/'.$profile->logo_thumbnail) }}" alt="" width="200px" srcset="">
                        </div>
                        <div class="form-group">
                            <label for="thumb" style="color: #ffffff;">Update Logo</label>
                            <input type="file" name="logo_thumbnail" id="thumb" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tc" style="color: #ffffff;">Title Company</label>
                            <textarea id="tc" name="title_company" class="form-control" style="height: 100px;" required>{{ $profile->title_company }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="dc" style="color: #ffffff;">Description Company</label>
                            <textarea id="dc" name="desc_company" class="form-control" style="height: 100px;" required>{{ $profile->desc_company }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="at" style="color: #ffffff;">About Title</label>
                            <textarea id="at" name="about_title" class="form-control" style="height: 100px;" required>{{ $profile->about_title }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="ad" style="color: #ffffff;">About Description</label>
                            <textarea id="ad" name="about_desc" class="form-control" style="height: 100px;" required>{{ $profile->about_desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="visi" style="color: #ffffff;">Visi</label>
                            <textarea id="visi" name="about_visi" class="form-control" style="height: 100px;" required>{{ $profile->about_visi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="misi" style="color: #ffffff;">Misi</label>
                            <textarea id="misi" name="about_misi" class="form-control" style="height: 100px;" required>{{ $profile->about_misi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="cb" style="color: #ffffff;">Title Body</label>
                            <textarea id="cb" name="company_body" class="form-control" style="height: 100px;" required>{{ $profile->company_body }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="cn" style="color: #ffffff;">Title News</label>
                            <textarea id="cn" name="company_news" class="form-control" style="height: 100px;" required>{{ $profile->company_news }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="cg" style="color: #ffffff;">Title Gallery</label>
                            <textarea id="cg" name="company_galery" class="form-control" style="height: 100px;" required>{{ $profile->company_galery }}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.profile.profile') }}" class="btn btn-danger mr-2" style="border-radius: 0;">Back</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
                <hr>
                <div class="card-footer">
                    Project By &hearts; <a href="https://github.com/rizalihwan" target="_blank"> Rizal Ihwan</a>
                </div>
            </div>
        </div>
    </div>
<!-- end Main Content -->
@endsection
