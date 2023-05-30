@extends('sb-admin/app')
@section('title', 'Material Request')
    
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Material Request</h1>

    <div class="mt-3">
        <a href="/create-material" class="btn btn-secondary">Create</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Create On</th>
            <th>Request By</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody> 
@php
   $no = 1;
@endphp
        @foreach($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->schedule }}</td>
            <td>{{ $row->request }}</td>
            @if ($row->status == 0)
                <td><button type="submit" class="btn btn-warning text-dark">Waitting Approval</button></td>
            @else
                <td><button type="submit" class="btn btn-success text-white">Approval</button></td>
            @endif
            
            <td>
                <a href= "/view-material" class="btn btn-info">Detail</a>
                <a href="/edit-material" class="btn btn-primary">Edit</a>
                <form action="{{-- {{ route('users.destroy', $user->id) }} --}}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        
       @endforeach
    </tbody>
</table>

@endsection