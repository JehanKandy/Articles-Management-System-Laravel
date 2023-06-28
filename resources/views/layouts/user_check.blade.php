@if (Auth::user()->role == 1)
    @extends('layouts.admin_dash')
@endif

@if (Auth::user()->role == 2)
    @extends('layouts.staff_dash')
@endif

@if (Auth::user()->role == 3)
    @extends('layouts.staff_dash')
@endif
