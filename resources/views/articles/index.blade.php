@php
    if(Auth::user()->role == 1){
        echo "@extends('layouts.admin_dash')";
    }
    elseif (Auth::user()->role == 2) {
        echo "@extends('layouts.staff_dash')";
    }
    elseif (Auth::user()->role == 3) {
        echo "@extends('layouts.client_dash')";
    }
@endphp

@section('content')
    
@endsection