@extends('layouts.admin.dashboard.app', ['title' => 'News'])
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
                                    <th>News Image</th>
                                    <th>News Title</th>
                                    <th>News Description</th>
                                    <th>Action</th>
                                </tr>
                                @forelse ($newss as $news)
                                <tr>
                                    <th>{{ $loop->iteration + $newss->firstItem() - 1 . '.'}}</th>
                                    <td><img src="{{ asset('thumbnail/news_image/'.$news->news_thumbnail) }}" alt="" srcset="" width="80px"></td>
                                    <td>{{ $news->news_title }}</td>
                                    <td>{!! $news->news_description !!}</td>
                                    <td>
                                        <form action="{{ route('admin.news.delete', $news->slug) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger mr-2 float-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('are you sure?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <a href="{{ route('admin.news.edit', $news->slug) }}" class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" style="color: red;" align="center">Data Empty!</td>
                                </tr>
                                @endforelse
                            </table>
                        </div>
                    </div>
                    {{ $newss->links() }}
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
                    <h5 class="modal-title">News</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="fil">News Image</label>
                            <input type="file" name="news_thumbnail" id="fil" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nt">Title</label>
                            <input type="text" name="news_title" maxlength="25" id="nt" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nd">Description</label>
                            <textarea name="news_description" id="nd" class="form-control" style="height: 100px;" required></textarea>
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
@section('script')
<script>
    CKEDITOR.replace('news_description');
</script>
@stop
