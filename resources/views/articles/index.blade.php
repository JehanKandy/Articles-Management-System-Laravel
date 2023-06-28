

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
        <br><br>
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
            <tbody>
                @foreach ($articles as $article)
                  <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $article->article_name }}</td>
                      <td>{{ $article->add_user }}</td>
                      <td>{{ $article->body }}</td>

                  </tr>
                @endforeach
              </tbody>
        </table>
    </div>
@endsection