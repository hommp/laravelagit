@extends('master.layout')

@section('title', 'Edit')

@section('content')
<div class="container">
    <h1 class="col-md-12">Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="p-4">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name" class="font-weight-bold">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email" class="font-weight-bold">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <button type="submit" class="btn btn-success btn-block" style="margin-top: 10px;">Update</button>
        <a href="/list" class="btn btn-primary btn-block" style="margin-top: 10px;">Cancel</a>
    </form>
</div>
@endsection