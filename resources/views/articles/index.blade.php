

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
                      <td>{{ $article->tags }}</td>
                      <td>{{ $article->created_at }}</td>
                      <td>{{ $article->updated_at }}</td>
                      <td>
                        <a href="{{ url('/articles/' . $article->id) }}" title="View Articles"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>

                        @if (auth()->user()->role == 1 || auth()->user()->name == $article->add_user)
                            <a href="{{ url('/articles/' . $article->id . '/edit') }}" title="Edit Articles"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/articles' . '/' . $article->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Articles" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        @endif


                      </td>

                  </tr>
                @endforeach
              </tbody>
        </table>
    </div>
@endsection