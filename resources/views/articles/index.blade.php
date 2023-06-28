

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
        <br>
        <table class="table">
            <thead class="table-primary">
                <tr>
                    
                </tr>
            </thead>
        </table>
    </div>
@endsection