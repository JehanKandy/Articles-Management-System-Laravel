

{{-- @if(Auth::user()->role == 1)
    @extends('layouts.admin_dash')
@elseif (Auth::user()->role == 2)
    @extends('layouts.staff_dash')
@endif --}}


@if (Auth::user()->role == 1)
@extends('layouts.admin_dash')
@else
    @if (Auth::user()->role == 2)
        @extends('layouts.staff_dash')
    @else
        @extends('layouts.client_dash')
    @endif
@endif

@include('layouts.header')

@section('content')
    hi all
@endsection