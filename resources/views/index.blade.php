@extends('master')

@section('title')
Home Page
@endsection


@section('content')

    <div class="row my-4">
        <div class="col ml-4 mr-4">

            <table class="table table-bordered">
                <thead>
                <tr class="table-active">
                    <th scope="col">SL</th>
                    <th scope="col">Registration ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Information</th>

                </tr>
                </thead>
                <tbody>
                @php
                    $i = 0;
                @endphp
                @foreach ($infos as $info)
                    @php
                        $i++;
                    @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $info->registration_id }}</td>
                        <td>{{ $info->name }}</td>
                        <td>{{ $info->department }}</td>
                        <td>{{ $info->info }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection