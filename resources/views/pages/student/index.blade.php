@extends('layouts.app')
@section('pageContent')
    <div class="page-content">
        <div class="container">
            <div class="row p-5">
                <div class="col-md-12" align="center">
                    <h2>Studnet Management</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="stu-form-area">
                        <form method="POST" action="{{ route('student.save') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Student Name:</label>
                                        <input type="text" class="form-control" id="email" name="stu_name"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">Student DOB:</label>
                                        <input type="date" class="form-control" id="dob" name="stu_dob"
                                            value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="stu_address" class="form-label">Address:</label>
                                        <input type="text" class="form-control" id="stu_address" name="stu_address"
                                            value="">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Register Now"></input>
                        </form>
                    </div>
                    <div class="dataTableArea mt-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $key => $student)
                                    <tr>
                                        <th scope="col">{{ ++$key }}</th>
                                        <td scope="col">{{ $student->stu_name }}</td>
                                        <td scope="col">{{ $student->stu_dob }}</td>
                                        <td scope="col">{{ $student->stu_address }}</td>
                                        <td scope="col">
                                            <a href="{{ route('student.edit', $student->id) }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <a href="{{ route('student.delete', $student->id) }}">
                                                <i class="bi bi-trash3"></i>
                                            </a>

                                            <a href="{{ route('student.manage', $student->id) }}">
                                                <i class="bi bi-journal-text"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
@endsection

@push('homecss')
    <style>
        a {
            text-decoration: none;
        }

        .page-content {
            min-height: 75vh;
        }

        .stu-form-area {
            background-color: #b3e5fc;
            padding: 20px;
            border-radius: 20px;
        }

        .bi-trash3 {
            color: #d14c3a;
        }

        i {
            
            margin-right: 10px;
        }
    </style>
@endpush
