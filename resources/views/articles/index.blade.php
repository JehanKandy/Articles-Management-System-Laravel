{{-- @php
    if(Auth::user()->role == 1){
         
    }
    elseif (Auth::user()->role == 2) {
        echo "@extends('layouts.staff_dash')";
    }
    elseif (Auth::user()->role == 3) {
        echo "@extends('layouts.client_dash')";
    }
@endphp --}}

@if (Auth::user()->role == 1)
    @extends('layouts.admin_dash')
@endif

@if (Auth::user()->role == 2)
    @extends('layouts.staff_dash')
@endif

@if (Auth::user()->role == 3)
    @extends('layouts.client_dash')
@endif



@section('content')
    hi all
@endsection