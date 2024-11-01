@extends('master.layout')

@section('title')
List
@endsection

@section('content')
<div class="container mb-4 mt-4">
    <h1 class="col-md-12">This list page</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
        {{ $err }}<br>
        @endforeach
    </div>
    @endif

    @if(Auth::check())
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-dark btn-sm"
                                onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="alert alert-info">
        <p>Please log in to view the user list.</p>
    </div>
    @endif
</div>

<style>
    body {
        background-color: #f8f9fa;
    }

    .table {
        margin-top: 20px;
    }

    .alert {
        margin-bottom: 20px;
    }
</style>
@endsection