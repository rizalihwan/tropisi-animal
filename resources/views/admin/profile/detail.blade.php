@extends('layouts.admin.dashboard.app', ['title' => 'Profile'])
@section('content')
<!-- Main Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-12">
            <div class="card" style="background-color: rgb(31, 31, 39); color: #ffffff;">
                <div class="card-header">
                    <a href="{{ route('admin.profile.profile') }}" class="btn btn-info" style="border-radius: 0;">Back</a>
                </div>
                <div class="card-body" style="color: #ffffff;">
                    <label style="color: #ffffff; font-weight: bold;">Company Logo</label>
                    <div class="form-group">
                        <img src="{{ asset('thumbnail/logo_image/'.$profile->logo_thumbnail) }}" alt="" width="200px" srcset="">
                    </div>
                    <div class="form-group">
                        <label for="tc" style="color: #ffffff;">Title Company</label>
                        <input type="text" value="{{ $profile->title_company }}" id="tc" readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dc" style="color: #ffffff;">Description Company</label>
                        <textarea readonly id="dc" class="form-control" style="height: 100px;">{{ $profile->desc_company }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="at" style="color: #ffffff;">About Title</label>
                        <input type="text" value="{{ $profile->about_title }}" id="at" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="ad" style="color: #ffffff;">About Description</label>
                        <textarea id="ad" class="form-control" style="height: 100px;" readonly>{{ $profile->about_desc }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="visi" style="color: #ffffff;">Visi</label>
                        <textarea id="visi" class="form-control" style="height: 100px;" readonly>{{ $profile->about_visi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="misi" style="color: #ffffff;">Misi</label>
                        <textarea id="misi" class="form-control" style="height: 100px;" readonly>{{ $profile->about_misi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="cb" style="color: #ffffff;">Title Body</label>
                        <input value="{{ $profile->company_body }}" id="cb" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="cn" style="color: #ffffff;">Title News</label>
                        <input value="{{ $profile->company_news }}" id="cn" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="cg" style="color: #ffffff;">Title Gallery</label>
                        <input value="{{ $profile->company_galery }}" id="cg" class="form-control" readonly>
                    </div>
                </div>
                <hr>
                <div class="card-footer">
                    Project By &hearts; <a href="https://github.com/rizalihwan" target="_blank"> Rizal Ihwan</a>
                </div>
            </div>
        </div>
    </div>
<!-- end Main Content -->
@endsection
