@extends("layouts.app")

@section("content")

    <h3 class="text-center">Register</h3>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                <div class="form-group">
                    <label class="col-md-4 control-label">Username</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="username">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-md-4 control-label">Email</label>

                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i> Register
                        </button>
                    </div>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>

@endsection