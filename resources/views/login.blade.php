@extends('template.index')

@section('content')
    <div class="row justify-content-center mt-5 pt-5 ">
        <div class="col col-5 card shadow">
            <div class="card-header">
                <h4 class="text-center">Login</h4>
            </div>
            <div class="card-body">
                <form method="post" autocomplete="off">
                    @csrf
                    @error('pesan')
                        <div class="alert alert-danger alert-dismissible">
                            <strong>{{ $message }}</strong>
                            <div class="btn-close" data-bs-dismiss="alert"></div>
                        </div>
                    @enderror
                    <div class="form-group">
                        <div class="my-3 row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" name="email" id="email"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control form-control-sm" name="password" id="password"
                                required>
                        </div>
                    </div>
            </div>
                   <div class="form-group my-4 d-flex justify-content-center">
                <button class="btn btn-dark px-5">Login</button>
            </div>
           
         
            </form>
        </div>
    </div>
    </div>
@endsection
