

{{-- @if(Auth::user()->role == 1)
    @extends('layouts.admin_dash')
@elseif (Auth::user()->role == 2)
    @extends('layouts.staff_dash')
@endif --}}

{{-- @php
    if(Auth::user()->role == 1){
       Blade::include('layouts.admin_dash');
    }
@endphp --}}

@if (Auth::user()->role == 1)
    @extends('layouts.admin_dash')
@endif

@if (Auth::user()->role == 2)
    @extends('layouts.staff_dash')
@endif

@include('layouts.header')

@section('content')
    hi all
@endsection