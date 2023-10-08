@extends('layouts.master')
@section('page_title', 'Monthly Attendance Report')
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
        <h4 class="card-title" style=" font-size: 20px;">MONTHLY ATTENDANCE REPORT</h4>
    </div>
    <div style="display: flex; justify-content:space-evenly ;align-items: center; padding: 15px; font-size: 14px;">
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
    <div style="display: flex; justify-content:space-evenly ;align-items: center; padding: 15px; font-size: 14px;">
        <div style="display: flex; flex-direction: column;">
            <label>CLASS: </label>
            <input type="text" class="data-1" id="class" name="class" value="{{$class}}" style="border: 1px solid black !important; border-radius: 8px !important;padding: 8px !important; font-weight: 400 !important;
        font-size: 14px !important;">
        </div>
        <div style="display: flex; flex-direction: column;">
            <label>SECTION: </label>
            <input type="text" class="data-1" id="section" name="section" value="{{$section}}" style="border: 1px solid black !important; border-radius: 8px !important;padding: 8px !important; font-weight: 400 !important;
        font-size: 14px !important;">
        </div>
    </div>

    <div style="display:flex; justify-content: space-around; margin-top: 20px;">
        <button class="print-btn btn btn-primary" onclick="printFunc()">Print</button>
    </div>
    <div class="card-body" style="padding-top: -200px">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="all-students">
                <table class="table">
                    <thead>
                        <tr style="border-bottom: 2px solid black;">
                            <th style=" font-size: 20px;">S/N</th>
                            <th style=" font-size: 20px;">Subject</th>
                            <th style=" font-size: 20px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subjects as $sub)
                        <?php $chk = false?>
                        <tr style="border-bottom: 2px solid black;">
                            <td style=" font-size: 20px;">{{$loop->iteration}}</td>
                            <td style=" font-size: 20px;">{{$sub->name}}</td>
                            <td >
                                @foreach($record as $key => $value)
                                    @if($sub->name == $key && $value > 0)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height: 35px">
                                    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                                </svg>
                                @elseif(!$chk && $sub->name == $key && $value == 0)
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height: 35px"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg>
                                    <?php $chk = true?>
                                    @endif
                                @endforeach
                                <!--@if($chk)-->
                                
                                <!--@elseif($chk == false)-->
                                    
                                <!--@endif-->
                            </td>

                            <br>
                            <br>
                           
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