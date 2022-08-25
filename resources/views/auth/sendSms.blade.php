@include('layouts.app')
@section('content')
    <div class="container mt-5">
        @if(request()->session()->has('alert'))
            <div ><span class="alert alert-danger">{{request()->session()->get('alert')}}</span></div>
        @endif
        <div class="card-background p-3">
            <h2 class="text-center">Forgot Password</h2>
            <form action="{{ route('sendSms') }}" method="post" style="max-width: 480px; margin:auto">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
    </div>
@show
