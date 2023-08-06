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
                        <form method="POST" action="{{ route('student.update', $student->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Student Name:</label>
                                        <input type="text" class="form-control" id="email" name="stu_name"
                                            value="{{ $student->stu_name }}">
                                         </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="dob" class="form-label">Student DOB:</label>
                                            <input type="date" class="form-control" id="dob" name="stu_dob"
                                                value="{{ $student->stu_dob }}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="mb-3">
                                            <label for="" class="form-label">Address:</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="stu_address" value="{{ $student->stu_address}}">

                                        </div>
                                    </div>

                                </div>


                                <input type="submit" class="btn btn-primary" value="Update"></input>
                        </form>

                    </div>
                    {{-- <div class="dataTableArea mt-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr>

                            </tbody>
                        </table>
                    </div> --}}
                </div>

                <div class="col-md-2"></div>

            </div>

        </div>
    </div>
@endsection

@push('homecss')
    <style>
        .page-content {
            min-height: 75vh;
        }

        .stu-form-area {
            background-color: #b3e5fc;
            padding: 20px;
            border-radius: 20px;
        }
    </style>
@endpush
