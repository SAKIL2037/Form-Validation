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

            <form class="ml-4 mr-4" action="/store" method="post" data-parsley-validate>
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
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Information</label>
                    <div class="col-sm-10">

                        <textarea class="form-control" id="info" name="info"></textarea>
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