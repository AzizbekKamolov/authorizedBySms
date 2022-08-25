@include('layouts.app')
@section('content')
      <div class="container mt-5">
        <div class="card-background p-3">
            <h2 class="text-center">Registration</h2>
            <form action="{{ route('user.register') }}" method="post" style="max-width: 480px; margin:auto">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <label for="exampleInputEmail1" class="form-label">Phone number</label>
                <div class="input-group-text">
                    <span class="input-group-text" id="basic-addon1">+998</span>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                <a href="/user/login" style="text-decoration: none">Already registered</a>
            </form>
        </div>
    </div>
@show
