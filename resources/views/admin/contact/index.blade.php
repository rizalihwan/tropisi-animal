@extends('layouts.admin.dashboard.app', ['title' => 'Contact'])
@section('content')
<!-- Main Content -->
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    @if ($contact == null)
                        <div class="card-header">
                            <button class="btn btn-primary btn-lg" style="margin-left: -10px; border-radius: 0;" data-toggle="modal" data-target="#storeModal"><i class="fa fa-plus-square"></i> Add Data</button>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light">
                                <tr>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                @if($contact != null)
                                <tr>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->address }}</td>
                                    <td><a href="{{ route('admin.contact.edit', $contact->slug) }}" class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fas fa-edit"></i></a></td>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="4" align="center" style="color: red;">Data Empty!</td>
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
    {{-- modal for store --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="storeModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.contact.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" maxlength="15" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="addr">Address</label>
                            <textarea id="addr" name="address" class="form-control" style="height: 100px;"></textarea>
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
