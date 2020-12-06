@extends('layouts.admin.dashboard.app', ['title' => 'Profile'])
@section('content')
<!-- Main Content -->
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    @if ($profile == null)
                        <div class="card-header">
                            <button class="btn btn-primary btn-lg" style="margin-left: -10px; border-radius: 0;" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> Add Data</button>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-dark table-hover" style="color: #ffffff;">
                                <tr>
                                    <th>Updated At</th>
                                    <th>Logo</th>
                                    <th>Company Title</th>
                                    <th>Company Description</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Action</th>
                                </tr>
                                @if($profile != null)
                                <tr>
                                    <td>{{ $profile->updated_at->diffForHumans() }}</td>
                                    <td><img src="{{ asset('thumbnail/logo_image/'.$profile->logo_thumbnail) }}" alt="" srcset="" width="80px"></td>
                                    <td>{{ Str::limit($profile->title_company, 7, '...') }}</td>
                                    <td>{{ Str::limit($profile->desc_company, 7, '...') }}</td>
                                    <td>{{ Str::limit($profile->about_visi, 7, '...') }}</td>
                                    <td>{{ Str::limit($profile->about_misi, 7, '...') }}</td>
                                    <td><a href="{{ route('admin.profile.detail', $profile->slug) }}" class="btn btn-icon btn-light mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"><i class="fas fa-eye"></i></a><a href="{{ route('admin.profile.edit', $profile->slug) }}" class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fas fa-edit"></i></a></td>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="7" align="center" style="color: red;">Data Empty!</td>
                                </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.profile.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="logo">Logo Company</label>
                            <input type="file" name="logo_thumbnail" id="logo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tc">Title Company</label>
                            <input type="text" name="title_company" maxlength="25" id="tc" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dc">Description Company</label>
                            <textarea name="desc_company" id="dc" class="form-control" style="height: 100px;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="at">About Title</label>
                            <input type="text" name="about_title" maxlength="25" id="at" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ad">About Description</label>
                            <textarea name="about_desc" id="ad" class="form-control" style="height: 100px;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="visi">Visi</label>
                            <textarea name="about_visi" id="visi" class="form-control" style="height: 100px;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="misi">Misi</label>
                            <textarea name="about_misi" id="misi" class="form-control" style="height: 100px;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cb">Title Body</label>
                            <input type="text" name="company_body" maxlength="25" id="cb" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cn">Title News</label>
                            <input type="text" name="company_news" maxlength="25" id="cn" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cg">Title Gallery</label>
                            <input type="text" name="company_galery" maxlength="25" id="cg" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end Main Content -->
@endsection
