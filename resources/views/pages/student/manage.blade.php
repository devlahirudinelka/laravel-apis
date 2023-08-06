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
                <div class="col-md-8 mb-3">
                    <div class="stu-form-areas d-flex justify-content-between">
                        <div>
                            <h4>Studnet ID : </h4>
                            <p>{{ $student->id }}</p>
                        </div>
                        <div>
                            <h4>Studnet Name : </h4>
                            <p>{{ $student->stu_name }}</p>
                        </div>
                        <div>
                            <h4>Studnet DOB : </h4>
                            <p>{{ $student->stu_dob }}</p>
                        </div>
                        <div>
                            <h4>Studnet Address : </h4>
                            <p>{{ $student->stu_address }}</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="stu-form-area">
                        <form method="POST" action="{{ route('student.saveRecord') }}">
                            @csrf
                            <input type="hidden" name="stu_id" value="{{$student->id}}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Record Title:</label>
                                        <input type="text" class="form-control" id="email" name="title"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">Record Date:</label>
                                        <input type="date" class="form-control" id="dob" name="date" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="Description" class="form-label">Description:</label>
                                        <input type="text" class="form-control" id="Description" name="description"
                                            value="">
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">Record date:</label>
                                        <input type="date" class="form-control" id="dob" name="stu_dob"
                                            value="">
                                    </div>
                                </div> --}}
                            </div>
                            <input type="submit" class="btn btn-primary" value="Add Record"></input>
                        </form>
                    </div>
                    <div class="dataTableArea mt-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Record Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Record DOB</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stuRecords as $key => $stuRecord)
                                    <tr>
                                        <th scope="col">{{ ++$key }}</th>
                                        <td scope="col">{{ $stuRecord->title }}</td>
                                        <td scope="col">{{ $stuRecord->description }}</td>
                                        <td scope="col">{{ $stuRecord->date }}</td>
                                        <td scope="col">
                                            <a href="{{ route('student.edit', $stuRecord->id) }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <a href="{{ route('student.delete', $stuRecord->id) }}">
                                                <i class="bi bi-trash3"></i>
                                            </a>

                                            <a href="{{ route('student.delete', $stuRecord->id) }}">
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
 .stu-form-areas {
            background-color: #3a3a3a63;
            padding: 20px;
            border-radius: 20px;
            
        }
        .bi-trash3 {
            color: #d14c3a;
        }

        i {

            margin-right: 10px;
        }

        p {
            color: #d14c3a;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 700;
        }
    </style>
@endpush
