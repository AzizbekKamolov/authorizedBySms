@include('layouts.app')
@section('content')
    <div class="container mt-5">
        @if(request()->session()->has('alert'))
            <div><span class="alert alert-danger">{{request()->session()->get('alert')}}</span></div>
        @endif
        <div class="card-background p-3">
            <h2 class="text-center">Forgot Password</h2>
            <form action="{{ route('forgot.password') }}" method="post" style="max-width: 480px; margin:auto">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <label for="exampleInputEmail1" class="form-label">Phone number</label>
                <div class="input-group-text">
                    <span class="input-group-text" id="basic-addon1">+998</span>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                <a href="/user/login" style="text-decoration: none">Login</a>
            </form>
        </div>
    </div>
@show
