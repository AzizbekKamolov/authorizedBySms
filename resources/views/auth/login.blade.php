@include('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="card-background p-3">
            <h2 class="text-center">Login</h2>
            <form action="{{ route('user.login') }}" method="post" style="max-width: 480px; margin:auto">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                <a href="/user/register" style="text-decoration: none">Registration</a>
                <a href="/user/forgot" style="text-decoration: none; color: #39516a">Forgot password</a>
            </form>
        </div>
    </div>
@show
