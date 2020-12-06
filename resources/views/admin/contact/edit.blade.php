@extends('layouts.admin.dashboard.app', ['title' => 'Contact'])
@section('content')
<!-- Main Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-12">
            <div class="card">
                <form action="{{ route('admin.contact.update', $contact->slug) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ $contact->email }}" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" value="{{ $contact->phone }}" maxlength="15" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="addr">Address</label>
                            <textarea id="addr" name="address" class="form-control" style="height: 100px;">{{ $contact->address }}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.contact.contact') }}" class="btn btn-danger mr-2" style="border-radius: 0;">Back</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- end Main Content -->
@endsection
