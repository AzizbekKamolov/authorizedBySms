@include('layouts.app')
@section('content')
    @if(request()->session()->has('success'))
        <div><span class="alert alert-success">{{ request()->session()->get('success') }}</span></div>
    @endif
    <h1>admin panel</h1>
    {{ auth()->user()['name'] }}<a href="/user/logout"> logout</a>
@show










