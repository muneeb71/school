@extends('layouts.master')
@section('page_title', 'Students By Age')
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

    * {
        font-weight: bold;
    }
</style>

<div class="card" style="border:2px solid black">
    <div class="card-header header-elements-inline" style="display: flex;justify-content: center;">
        <h4 class="card-title" style=" font-size: 20px;">Students By Age</h4>
    </div>
    <div style="width: 90%;margin:auto">
        <button class="print-btn btn btn-primary" onclick="printFunc()" style="margin-left:30px;float:right;width:60px">Print</button>
    </div>
    <div class="card-body">
        <div class="tab-content" style="justify-content: center">
            <div class="tab-pane fade show active" id="all-students">
                <table class="table">
                    <thead style = "display: flex column;justify-content: center;">
                        <tr style="border-bottom: 2px solid black;">
                            <th style=" font-size: 20px;">Age</th>
                            <th style=" font-size: 20px;">No. Of Students</th>
                        </tr>
                    </thead>
                    <tbody style = "display: flex column;justify-content: center;">
                        @foreach($age as $my)
                        <?php
                        $i=0;
                        ?>
                        <tr style="border-bottom: 2px solid black;">
                            <td style=" font-size: 20px;">{{$my->age}}</td>
                            <td style=" font-size: 20px;">
                                @foreach($students as $comb)
                                @if($comb->age == $my->age)
                                <?php
                        $i++;
                        ?>
                                @endif
                                @endforeach
                                {{$i}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="display: flex;justify-content: flex-end;">
                <h5 style="font-weight: bold;">Total Admissions: {{$total}}</h5>
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