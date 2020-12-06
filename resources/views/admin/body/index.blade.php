@extends('layouts.admin.dashboard.app', ['title' => 'Content'])
@section('content')

<!-- Main Content -->
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    @if(count($countBody) < 4)
                        <div class="card-header">
                            <button class="btn btn-primary btn-lg" style="margin-left: -10px; border-radius: 0;" data-toggle="modal" data-target="#storeModal"><i class="fa fa-plus-square"></i>  Add Data</button>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Content Title</th>
                                    <th>Content Description</th>
                                    <th>Action</th>
                                </tr>
                                @forelse ($bodys as $body)
                                <tr>
                                    <th>{{ $loop->iteration + $bodys->firstItem() - 1 . '.'}}</th>
                                    <td>{{ $body->body_title }}</td>
                                    <td>{{ Str::limit($body->body_desc, 15, '...') }}</td>
                                    <td>
                                        <form action="{{ route('admin.body.delete', $body->slug) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger mr-2 float-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('are you sure?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <a href="{{ route('admin.body.edit', $body->slug) }}" class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" style="color: red;" align="center">Data Empty!</td>
                                </tr>
                                @endforelse
                            </table>
                        </div>
                    </div>
                    {{ $bodys->links() }}
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
                    <h5 class="modal-title">Content</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.body.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="bt">Title</label>
                            <input type="text" name="body_title" maxlength="25" id="bt" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="bd">Description</label>
                            <textarea name="body_desc" id="bd" class="form-control" style="height: 100px;" required></textarea>
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
