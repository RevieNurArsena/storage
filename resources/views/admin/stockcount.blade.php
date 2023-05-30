@extends('sb-admin/app')
@section('title', 'Stock Count')
    
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Stock Count</h1>

    <div class="mt-3">
        <a href="/create-stock" class="btn btn-secondary">Create</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Refrence</th>
            <th>Warehouse</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       {{--  @foreach($users as $user) --}}
        <tr>
            <td>MR1-12/12</td>
            <td>12/12/2023</td>
            <td><button type="submit" class="btn btn-warning text-dark">Waitting Approval</button></td>
            <td>
                <a href= "/view-stock" class="btn btn-info">Detail</a>
                <a href="/edit-stock" class="btn btn-primary">Edit</a>
                <form action="{{-- {{ route('users.destroy', $user->id) }} --}}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
      {{--  @endforeach --}}
    </tbody>
</table>
@endsection