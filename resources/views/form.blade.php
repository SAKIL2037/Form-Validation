@extends('master')

@section('title')
    Add Data Page
@endsection


@section('content')
    <div class="row my-4">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

    </div>
    <div class="row my-4">

        <div class="col">

            <form class="ml-4 mr-4" action="/test" method="post" data-parsley-validate>
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Registration ID</label>
                    <div class="col-sm-10">
                        <input type="number" name="registration_id" class="form-control" id="registration_id" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="name" name="name" maxlength="20" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department Name</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="department_name" name="department_name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">UserName</label>
                    <div class="col-sm-10">

                        <input type="text"  class="form-control" id="username" name="username" required data-parsley-type="alphanum">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">

                        <input type="email"  class="form-control" id="email" name="email" required data-parsley-type="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">URL</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="url" name="url" required data-parsley-type="url">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Number</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="number" name="number" required data-parsley-type="digits">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password"  class="form-control" id="pass" name="pass" required data-parsley-type="alphanum">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password"  class="form-control" id="cpass" name="cpass" required data-parsley-type="alphanum" data-parsley-equalto="#pass">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10 text-center my-4">
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection