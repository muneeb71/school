@extends('layouts.master')
@section('page_title', 'Merit List')
@section('content')

<style>
    @media print {
        .navbar {
            display: none;
        }

        .sidebar {
            display: none;
        }

        .page-header {
            display: none;
        }

        .print-btn {
            display: none;
        }

        /* th {
            display: none;
        } */

        .datatable-header {
            display: none;
        }

        .datatable-footer {
            display: none;
        }

        .gen-fee {
            display: none;
        }

        .add-stu {
            display: none;
        }
    }
</style>

<div class="card">
    <div class="card-header header-elements-inline">
        <h4 class="card-title">Merit List</h4>
        <button onclick="printTable()" class="btn btn-primary print-btn">Print Merit List</button>
    </div>
    <div class="card-header">
        <h4>Quota - {{ucwords($quota)}}</h4>
        <h4>Group - {{$group}}</h4>
        <h4>Combination - {{$combination}}</h4>
        <h4>No. Of Students - {{$applicants->count()}}</h4>
        <h4>Last Date For Submission Of Dues: {{$due_date}}</h4>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="all-students">
                <table class="table datatable-button-html5-columns">
                    <thead>

                        <tr>
                            <th>S/N</th>
                            <th>Form No.</th>
                            <th>Student Name</th>
                            <th>Father Name</th>
                            <!-- <th>Student CNIC</th> -->
                            <!-- <th>Quota</th>
                           <th>Group</th> -->
                            <th>Obtained Marks</th>
                            <th>Total Marks</th>
                            <th>Percentage</th>
                            <!-- <th>Fee Challan</th> -->
                            <!-- <th>Admit</th> -->


                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @foreach($applicants as $app)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$app->form_no}}</td>
                            <td>{{$app->name}}</td>
                            <td>{{$app->fathers_name}}</td>
                            <!-- <td>{{$app->cnic}}</td> -->
                            <!-- <td>{{$app->qouta_name}}</td>
                           <td>{{$app->group_name}}</td> -->
                            <td>{{$app->marks_obtained}}</td>
                            <td>{{$app->total_marks}}</td>
                            <td>{{$app->percentage}}%</td>
                            <!-- <form method="post" action="{{route('applicants.meritList.fee')}}">
                                @csrf
                                <td>
                                    <button type="submit" class="btn btn-success gen-fee">Generate Fee Challan</button>
                                </td>
                                <input type="hidden" name="id" value="{{$app->id}}">
                            </form>
                            @if($app->status != 'admitted')
                            <form method="post" action="{{route('students.admit')}}">
                                @csrf
                                <div style="display: flex;">
                                    <td><button type="submit" class="btn btn-info add-stu">Admit Student</button></td>
                                </div>
                                <input type="hidden" name="id" value="{{$app->id}}">
                                <input type="hidden" name="no_of_students" value="{{$number}}">
                                <input type="hidden" name="due_date" value="{{$due_date}}">
                            </form>
                            @else
                            <td><button type="submit" class="btn btn-warning add-stu">Admitted</button></td>

                            @endif -->

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<script>
    function printTable() {
        // var div = document.querySelector("table");
        // div.innerHTML = '<iframe src="mypage.aspx" onload="this.contentWindow.print();"></iframe>';
        print();
    }
</script>

@endsection