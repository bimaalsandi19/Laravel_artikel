@if (Auth::check())
    <p>Welcome, {{ Auth::user()->name }}</p>
@endif
