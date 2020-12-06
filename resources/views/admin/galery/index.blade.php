@extends('layouts.admin.dashboard.app', ['title' => 'Gallery'])
@section('content')
<!-- Main Content -->
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary btn-lg" style="margin-left: -10px; border-radius: 0;" data-toggle="modal" data-target="#storeModal"><i class="fa fa-plus-square"></i>  Add Data</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Gallery Image</th>
                                    <th>Action</th>
                                </tr>
                                @forelse ($galerys as $galery)
                                <tr>
                                    <th>{{ $loop->iteration + $galerys->firstItem() - 1 . '.'}}</th>
                                    <td><img src="{{ asset('thumbnail/gallery_image/'.$galery->galery_thumbnail) }}" alt="" srcset="" width="80px"></td>
                                    <td>
                                        <form action="{{ route('admin.galery.delete', $galery->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger mr-2 float-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('are you sure?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <a href="{{ route('admin.galery.edit', $galery->id) }}" class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" style="color: red;" align="center">Data Empty!</td>
                                </tr>
                                @endforelse
                            </table>
                        </div>
                    </div>
                    {{ $galerys->links() }}
                </div>
            </div>
        </div>
    </div>
    </section>
    {{-- modal for store --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="storeModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.galery.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="fil">Gallery Image</label>
                            <input type="file" name="galery_thumbnail" id="fil" class="form-control" required>
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
