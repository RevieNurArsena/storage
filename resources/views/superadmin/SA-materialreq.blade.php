@extends('sb-admin/app')
@section('title', 'Material Request')
    
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Material Request</h1>


    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Refrence</th>
            <th>Create On</th>
            <th>Request By</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       {{--  @foreach($users as $user) --}}
        <tr>
            <td>MR1-12/12</td>
            <td>12/12/2023</td>
            <td>Admin</td>
            <td><button type="submit" class="btn btn-warning ">Waitting Approval</button>
                <button type="submit" class="btn btn-success ">Approval</button>
            </td>
            <td>
                <a href= "/view-material" class="btn btn-info">Detail</a>
            </td>
        </tr>
      {{--  @endforeach --}}
    </tbody>
</table>

@endsection