@extends('layouts.master')
@section('page_title', 'Attendance Report')
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
    <div class="card-header header-elements-inline" style="display: flex;justify-content: center; ">
        <h4 class="card-title" style=" font-size: 20px;">STUDENT ATTENDANCE REPORT</h4>
    </div>
    <div style="display: flex; justify-content:space-evenly ;align-items: center; padding: 15px; font-size: 14px;">
        <div style="display: flex; flex-direction: column;">
            <label>STUDENT NAME: </label>
            <input type="text" class="data-1" id="name" name="name" value="{{$student->name}}" style="border: 1px solid black !important; border-radius: 8px !important;padding: 8px !important; font-weight: 400 !important;
        font-size: 14px !important;">
        </div>
        <div style="display: flex; flex-direction: column;">
            <label>FATHER NAME: </label>
            <input type="text" class="data-1" id="father_name" name="father_name" value="{{$parent->name}}" style="border: 1px solid black !important; border-radius: 8px !important;padding: 8px !important; font-weight: 400 !important;
        font-size: 14px !important;">
        </div>
        <div style="display: flex; flex-direction: column;">
            <label>ROLL NO: </label>
            <input type="text" class="data-1" id="roll_no" name="roll_no" value="{{$student->roll_no}}" style="border: 1px solid black !important; border-radius: 8px !important;padding: 8px !important; font-weight: 400 !important;
        font-size: 14px !important;">
        </div>
    </div>
    <div style="display: flex; justify-content:space-evenly ;align-items: center; padding: 15px; font-size: 14px">
        <div style="display: flex; flex-direction: column;">
            <label>CONTACT NO: </label>
            <input type="number" class="data-1" id="phone" name="phone" value="{{$student->phone}}" style="border: 1px solid black !important; border-radius: 8px !important;padding: 8px !important; font-weight: 400 !important;
        font-size: 14px !important;">
        </div>
        <div style="display: flex; flex-direction: column;">
            <label>GROUP NAME: </label>
            <input type="text" class="data-1" id="group" name="group" value="{{$student->group_name}}" style="border: 1px solid black !important; border-radius: 8px !important;padding: 8px !important; font-weight: 400 !important;
        font-size: 14px !important;">
        </div>
        <div style="display: flex; flex-direction: column;">
            <label>COMBINATION: </label>
            <input type="text" class="data-1" id="combination" name="combination"
                value="{{$student->subject_combination}}" style="border: 1px solid black !important; border-radius: 8px !important;padding: 8px !important; font-weight: 400 !important;
        font-size: 14px !important;">
        </div>
    </div>
    <div style="display: flex; justify-content:space-evenly ;align-items: center; padding: 15px; font-size: 14px">
        <div style="display: flex; flex-direction: column;">
            <label>FROM: </label>
            <input type="text" class="data-1" id="from" name="from" value="{{$from}}" style="border: 1px solid black !important; border-radius: 8px !important;padding: 8px !important; font-weight: 400 !important;
        font-size: 14px !important;">
        </div>
        <div style="display: flex; flex-direction: column;">
            <label>TO: </label>
            <input type="text" class="data-1" id="to" name="to" value="{{$to}}" style="border: 1px solid black !important; border-radius: 8px !important;padding: 8px !important; font-weight: 400 !important;
        font-size: 14px !important;">
        </div>
    </div>

    <div style="width: 90%;margin:auto">
        <button class="print-btn btn btn-primary" onclick="printFunc()"
            style="margin-left:30px;float:right;width:60px">Print</button>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="all-students">
                <table class="table">
                    <thead>
                        <tr style="border-bottom: 2px solid black;">
                            <th style=" font-size: 20px;">S/N</th>
                            <th style=" font-size: 20px;">Subjects</th>
                            <th style=" font-size: 20px;">Presents</th>
                            <th style=" font-size: 20px;">Absents</th>
                            <th style=" font-size: 20px;">Leaves</th>
                            <th style=" font-size: 20px;">Percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subjects as $my)
                        <tr style="border-bottom: 2px solid black;">
                            <td style=" font-size: 20px;">{{$loop->iteration}}</td>
                            <td style=" font-size: 20px;">{{$my['name']}}</td>
                            @foreach($attendance as $comb)
                            @if(!strcmp($my['id'],$comb['subject_id']))
                            <td style=" font-size: 20px;">
                                {{$comb['present']}}
                            </td>

                            <td style=" font-size: 20px;">
                                {{$comb['absent']}}
                            </td>

                            <td style=" font-size: 20px;">
                                {{$comb['leaves']}}
                            </td>
                            <?php 
                                $percent = 0.0;
                                $total = $comb->present + $comb->absent + $comb->leaves;
                                $percent = ((($comb->present + $comb->leaves)/$total) * 100); 
                            ?>
                            <td style=" font-size: 20px;">
                                <?php echo round($percent, 2).'%'?>
                            </td>

                            <br>
                            <br>
                            @endif
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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