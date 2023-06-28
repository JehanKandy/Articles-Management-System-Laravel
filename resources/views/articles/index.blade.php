

{{-- @if(Auth::user()->role == 1)
    @extends('layouts.admin_dash')
@elseif (Auth::user()->role == 2)
    @extends('layouts.staff_dash')
@endif --}}

@extends('layouts.dash')
@include('layouts.header')

@section('content')
    <div class="admin-card">
        <h4>Articles</h4>
        <hr>
        <a href="{{ url('/articles/create') }}" class="btn btn-success" title="Add New Student">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New Article
        </a>
        <br>
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Article Name</th>
                    <th>Owner</th>
                    <th>Article Tags</th>
                    <th>Created Date</th>
                    <th>Last Update</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection