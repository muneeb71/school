@extends('layouts.master')
@section('page_title', 'Total Applicants')
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

         th {
            font-size: 20px;
        } 

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

    * {
        font-weight: bold;
    }
</style>

<div class="card" style="border:2px solid black;">
    <div class="card-header header-elements-inline" style="display: flex;justify-content: center;">
        <h4 class="card-title" style=" font-size: 20px;">Total Applicants</h4>
    </div>
    <div style="width: 90%;margin:auto">
        <button class="print-btn btn btn-primary" onclick="printFunc()" style="margin-left:30px;float:right;width:60px">Print</button>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="all-students">
                <table class="table">
                    <thead>
                        <tr style="border-bottom: 2px solid black;">
                            <th style=" font-size: 20px;">Class</th>
                            <th style=" font-size: 20px;">Combinations</th>
                            <th style=" font-size: 20px;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($my_classes as $my)
                        <tr style="border-bottom: 2px solid black;">
                            <td style=" font-size: 20px;">{{$my['name']}}</td>
                            <td style=" font-size: 20px;">
                                @foreach($combinations as $comb)
                                @if(!strcmp($my['id'],$comb['my_class_id']))
                                {{$comb['name']}}
                                <br>
                                <br>
                                @endif
                                @endforeach
                            </td>
                            <td style=" font-size: 20px;">
                                @foreach($combinations as $comb)
                                <p style="display: none;">{{$totalStudents = 0}}</p>
                                @if(!strcmp($my['id'],$comb['my_class_id']))
                                @foreach($allStu as $as)
                                @if(!strcmp($as['subject_combination'],$comb['name']))
                                <p style="display: none;">{{$totalStudents ++}}</p>
                                @endif
                                @endforeach
                                {{$totalStudents}}
                                <br>
                                <br>
                                @endif
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="display: flex;justify-content: flex-end;">
                <h5 style="font-weight: bold; font-size: 20px;">Total Applicants: {{$total}}</h5>
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