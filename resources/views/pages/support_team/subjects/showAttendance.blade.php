@extends('layouts.master')
@section('page_title', 'Attendance')
@section('content')
<style>
.form-control {
    border: none;
    background: none;
    outline: none;
}

.table-borderless>tbody>tr>td,
.table-borderless>tbody>tr>th,
.table-borderless>tfoot>tr>td,
.table-borderless>tfoot>tr>th,
.table-borderless>thead>tr>td,
.table-borderless>thead>tr>th {
    padding: 10px 0;
    border: none;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.data-1 {
    border: 1px solid #dadee6;
    border-radius: 8px;
    padding: 3px;
    font-weight: 400;
    font-size: 14px
}

.data-2 {
    font-size: 14px;
}

/* Firefox */
input[type=number] {
    -moz-appearance: textfield;
}
</style>
<?php
$i = 0;
?>
<div class="card" style="width: 90%;margin: auto;text-align: center;">
    <div class="card-header">
        <h3 class="card-title">Add Attendance</h3>
    </div>
    <div style="display: flex; justify-content:space-between; padding: 10px ;margin:auto;">
        <h5 style="font-weight: bold; margin: 10px;">Class: {{$class}}</h5>
        <h5 style="font-weight: bold ; margin: 10px">Section: {{$section}}</h5>
    </div>
    <form id="form" method="POST" action="{{route('students.saveAttendance')}}">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Lectures Delivered: </label>
                        <input type="number" value="{{ old('no_of_lectures') }}" id="no_of_lectures" name="no_of_lectures"
                            class="form-control" placeholder="000" style="border: 1px solid #ddd;" min="1" step="1" onchange="checkLectures()" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="subject">Subject: <span class="text-danger">*</span></label>
                        <select data-placeholder="Choose..." required style="border: 1px solid #ddd;" name="subject"
                            id="subject" class="select-search form-control" required>
                            <option value=""></option>
                            @foreach($subjects as $nal)
                            <option {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->id}}">
                                {{ $nal->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>From:</label>
                        <input name="from_date" value="{{ old('from_date') }}" id="from" type="text"
                            class="form-control date-pick" placeholder="Select Date" style="border: 1px solid #ddd;"
                            required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>To:</label>
                        <input name="to_date" value="{{ old('to_date') }}" id="to" type="text"
                            class="form-control date-pick" placeholder="Select Date" style="border: 1px solid #ddd;" onchange="checkLectures()"
                            required>
                    </div>
                </div>
            </div>
            <div id="error_div"
                style="display: flex;display: none; justify-content: center; background-color: #f9f9f9; border-radius: 10px; color: red; font-size: 16px; width: 100%; margin-bottom: 10px;">
                Error - No of lectures and Attendance data does not match!
            </div>
            <div class="col-md-2"
                style="display: grid; place-items: center; background-color: #f8f8f8; border-radius: 10px; margin-left: auto;">
                <button type=" submit" id="btn_up" class="dropdown-item"><i class="icon-pencil"></i>
                    Add Attendance</button>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-students">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Roll No</th>
                                <th>Name</th>
                                <th>Present</th>
                                <th>Leaves</th>
                                <th>Absent</th>
                                <th>Remarks</th>


                            </tr>
                        </thead>
                        <tbody>

                            @foreach($students as $p)
                            <tr id={{$p->roll_no}}>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td class="data-2">
                                    {{$p->roll_no}}
                                </td>
                                <td class="data-2">
                                    {{$p->name}}
                                </td>

                                <td class="presents">
                                    <input class="data-1" type="number" id="present[]" name="present[]" onchange="addAbsents(this)">
                                </td>
                                <td class="leaves">
                                    <input class="data-1" type="number" id="leaves[]" name="leaves[]" onchange="addAbsents(this)" value="0">
                                </td>
                                <td class="absents">
                                    <input class="data-1" type="number" id="absent[]" name="absent[]" onchange="chk(this)">
                                </td>
                                <td>
                                    <textarea class="data-1" rows="3" cols="25" name="remarks[]"></textarea>
                                </td>
                                <td class="error_td" style="display:none">Error - No of lectures and Attendance data does not match!</td>
                                <!--  <td>
                                    <button type=" submit" id="btn_up" class="dropdown-item"><i class="icon-pencil"></i>
                                        Update</button>
                                    <!-- <p style="color: red; display: none" id="error_att">Invalid Attendance Data</p> -->
                                <!-- <input type="hidden" id="no_of_lectures1" name="no_of_lectures1" value="">
                                     

                                </td>-->
                                <input type="hidden" id="roll_no[]" name="roll_no[]" value="{{$p->roll_no}}">

                                @endforeach
                            </tr>


                        </tbody>
                    </table>
                </div>
    </form>
</div>
</div>
</div>
<script>
function addAbsents(e){
    let tr = $(e).parent().parent();
    
    let totalClasses = $("#no_of_lectures").val();
    
    let presents = $(tr).find(".presents").find("input").val();
    let leaves = $(tr).find(".leaves").find("input").val();
    let absents = $(tr).find(".absents").find("input");
    if(presents != "" && leaves != "" && totalClasses != ""){
        $(absents).val(parseInt(totalClasses) - (parseInt(presents) + parseInt(leaves)));
    }
    chk(e);
    
}
function checkLectures(){
    let totalClasses = $("#no_of_lectures").val();
    if(totalClasses.includes(".")){
        
        $("#no_of_lectures").val(totalClasses.split(".")[0]);
    }
    let to = ($("#to").val());
    let from  =(document.getElementById("from").value);
    let d1 = '';
    let d2 = '';
    let m1 = '';
    let m2 = '';
    let err = false;
    for(let i = 0; i<to.length; i++){
        if(i == 0 || i == 1){
            d1 += from[i];
            d2 += to[i];
        }
        if(i == 3|| i == 4){
            m1 += from[i];
            m2 += to[i];
        }
    }
    d2 = parseInt(d2);
    m1 = parseInt(m1);
    m2 = parseInt(m2);
    if(m1 == m2){
        if(parseInt(totalClasses) > d2-d1){
             err = true;
        }
        else{
            err = false;
        }
    }
    else if(m1 !=m2){
        if(parseInt(totalClasses) > ((d2 - d1) + 30)){
             err = true;
        }
        else{
            err = false;
        }
    }
    if(err){
        document.getElementById("error_div").style.display = "block";
    }
    else{
            document.getElementById("error_div").style.display = "none";
    }


}
function chk(e) {
    let tr = $(e).parent().parent();
    let presents = $(tr).find(".presents").find("input").val();
    let absents = $(tr).find(".absents").find("input").val();
    let leaves = $(tr).find(".leaves").find("input").val();
    let lec = document.getElementById("no_of_lectures").value;
    let err = false;
    // let error = $(");
    // $(error). attr('class', 'error_td');
    // var pt = document.getElementsByName("present[]");
    // var ab = document.getElementsByName("absent[]");
    // var lv = document.getElementsByName("leaves[]");


    // for (var i = 0; i < pt.length; i++) {
    //     var tot = parseInt(pt[i].value) + parseInt(ab[i].value) + parseInt(lv[i].value);

    //     if (lec != tot && !isNaN(tot)) {
    //         err = true;
    //     }
    // }
    if(lec == "" || parseInt(lec) < parseInt(absents)  || parseInt(absents) < 0 || (parseInt(presents) + parseInt(absents) + parseInt(leaves) > parseInt(lec)) || ((parseInt(presents) + parseInt(absents) + parseInt(leaves)) < 0) || (parseInt(presents) > parseInt(lec))){
        err = true;
    }else{
        err = false;
    }
    if(err){
        $(tr).find(".error_td").css("display", "block");
    }else{
        $(tr).find(".error_td").css("display", "none");
    }
    // if (err) {ch
    //     document.getElementById("error_div").style.display = "block";
    //     $("#btn_up").attr('disabled', 'disabled');
    // } else {
    //     document.getElementById("error_div").style.display = "none";
    //     $("#btn_up").removeAttr('disabled');
    // }
}
</script>

{{--Payment Create Ends--}}

@endsection