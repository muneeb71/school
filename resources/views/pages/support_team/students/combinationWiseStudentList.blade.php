@extends('layouts.master')
@section('page_title', 'Student List')
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
        h4{
            font-size: 20px;
          font-weight: bold;
        }
        .add-stu {
            display: none;
        }
    }

    * {
        font-weight: bold;
    }
</style>

<div class="card" style="border:2px solid black">
    <div style="display: flex;margin-top:20px;align-items: center;margin-left:3vw">
        <img src="{{ asset('global_assets/images/clg-logo.jpeg') }}" alt="asd" height="60vw" style="margin-right: 1vw">
        <h4 style="font-weight:bold">Islamabad Model Postgraduate College H-8 Islamabad</h4>
    </div>
    <hr style="border:3px solid black">
    <div style="width: 90%;margin:auto;">
        <button class="print-btn btn btn-primary" onclick="printFunc()" style="margin-left:30px;float:right;width:60px">Print</button>
    </div>
    <div class="card-header" style="width: 80%;margin:auto">
        <div style="display: flex;justify-content: space-around;">
            <h4 class="card-title" style="font-weight:bold">Class : {{$class}}</h4>
          
            <h4 class="card-title" style="font-weight:bold">Combination : {{$combination}}</h4>
            <h4 class="card-title" style="font-weight:bold">Session: {{$session}}</h4>
        </div>
        <br>
        
        <br>

    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="all-students">
                <table class="table datatable-button-html5-columns">
                    <thead>
                        <tr style="border-bottom: 2px solid black; font-size: 20px">
                            <th>S/N</th>
                            <th>Form No</th>
                            <th>Roll No</th>
                            <th>Name</th>
                            <th>Student Contact</th>
                            <th>Father Name</th>
                            <th>Father Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $s)
                        <tr style="font-size: 15px">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$s->form_no}}</td>
                            <td>{{$s->roll_no}}</td>
                            <td>{{$s->name}}</td>
                            <td>{{$s->phone}}</td>
                           @foreach($parent as $p)
                                @if($p->student_id == $s->id)
                                <td>{{ $p->name}}</td>
                                <td>{{ $p->phone}}</td>
                                @endif
                                @endforeach
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="display: flex;justify-content: flex-end;">
                <h5 style="font-weight: bold;">Total Students: {{$students->count()}}</h5>
            </div>
        </div>
    </div>
</div>

<script>
    function printFunc() {
        print();
    }
</script>
@endsection