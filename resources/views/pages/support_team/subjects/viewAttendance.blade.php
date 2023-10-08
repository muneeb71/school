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

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Firefox */
input[type=number] {
    -moz-appearance: textfield;
}
</style>
<?php
$i = 0;
?>
<div class="card" style="width: 80%;margin: auto;text-align: center;">
    <div class="card-header">
        <h3 class="card-title">View Attendance</h3>
    </div>
    <div style="display: flex; justify-content:space-between; padding: 10px ;margin:auto;">
        <h5 style="font-weight: bold; margin: 10px;">Class: {{$class}}</h5>
        <h5 style="font-weight: bold ; margin: 10px">Section: {{$section}}</h5>
    </div>
    <div class="card-body">
        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label>Subject: </label>
                    <input type="text" value="{{ $subjects->name }}" id="subject" name="subject" class="form-control"
                        placeholder="xyz" style="border: 1px solid #ddd;" required>

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Teacher: </label>
                    <input type="text" value="{{ $teachers->name }}" id="subject" name="teacher" class="form-control"
                        placeholder="xyz" style="border: 1px solid #ddd;" required>

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>From:</label>
                    <input name="from_date" value="{{ $from_date }}" id="from" type="text"
                        class="form-control date-pick" placeholder="Select Date" style="border: 1px solid #ddd;"
                        required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>To:</label>
                    <input name="to_date" value="{{ $to_date }}" id="to" type="text" class="form-control date-pick"
                        placeholder="Select Date" onchange="values()" style="border: 1px solid #ddd;" required>
                </div>
            </div>
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
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td class="data-2">
                                {{$p->roll_no}}
                            </td>
                            <td class="data-2">
                                {{$p->name}}
                            </td>
                            <form id="" method="POST" action="">
                                @csrf
                                @foreach($attendance as $att)
                                @if($p->roll_no == $att->roll_no)
                                <td>
                                    <input type="number" class="data-1" id="present"
                                        value="{{$att->present ? $att->present : 0}}" name="present" required>
                                </td>
                                <td>
                                    <input type="number" class="data-1" id="leaves" name="leaves"
                                        value="{{$att->leaves ? $att->leaves : 0}}" required>
                                </td>
                                <td>
                                    <input type="number" class="data-1" id="absent" name="absent"
                                        value="{{$att->absent ? $att->absent : 0}}" onblur="chk()" required>
                                </td>

                                <td>
                                    <textarea rows="3" cols="25" class="data-1"
                                        name="remarks">{{$att->remarks ? $att->remarks : ''}}</textarea>
                                </td>

                                @endif
                                @endforeach
                                <!-- <td>
                                    <button type="submit" id="btn_up" class="dropdown-item" onclick="values()"><i class="icon-pencil"></i> Update</button>
                                    <p style="color: red; display: none" id="error_att">Invalid Attendance Data</p>
                                    <input type="hidden" id="roll_no" name="roll_no" value="{{$p->roll_no}}">
                                    <input type="hidden" id="no_of_lectures1" name="no_of_lectures1" value="">
                                    <input type="hidden" id="subject1" name="subject1" value="">
                                    <input type="hidden" id="teacher1" name="teacher1" value="">
                                    <input type="hidden" id="from1" name="from1" value="">
                                    <input type="hidden" id="to1" name="to1" value="">

                                </td> -->
                            </form>
                            <!-- <td>
                                <form method="POST" action="{{route('fees.particulars.delete')}}">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="icon-trash"></i> Delete</button>
                                    <input type="hidden" name="del_id" value="{{$p->id}}">
                                </form>

                            </td> -->
                        </tr>
                        <?php
                        $i++;
                        ?>
                        @endforeach
                        </form>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<script>
// toggle values inputs
// let allAmounts = $("input[type='number']");
// for (let i = 0; i < allAmounts.length; i++) {
//     $(allAmounts[i]).on("change", () => {
//         console.log($(allAmounts[i]).val())
//     })
// }
// var count_chk = $('[type=checkbox]');
// var value = $('[type=number]');
// var hid = $('[type=hidden]');
// $(".chk_part").on("change", () => {
//     for (let j = 0; j < count_chk.length; j++) {
//         if ($(count_chk[j]).is(":checked")) {
//             console.log(hid);
//             $(hid[j + 2]).prop("disabled", false)
//             $(value[j]).prop("disabled", false)
//         } else {
//             $(hid[j + 2]).prop("disabled", true)
//             $(value[j]).prop("disabled", true)
//         }

//     }
// })

function values() {
    $("#no_of_lectures1").val($("#no_of_lectures").val());
    $("#subject1").val($("#subject").val());
    $("#teacher1").val($("#teacher").val());
    $("#from1").val($("#from").val());
    $("#to1").val($("#to").val());

}

function chk() {
    let total = parseInt(document.querySelector("#absent").value) + parseInt(document.querySelector("#present").value) +
        parseInt(document.querySelector("#leaves").value)
    if (total != parseInt($("#no_of_lectures").val())) {
        $("#error_att").show();
        $("#btn_up").attr('disabled', 'disabled');
    } else {
        $("#btn_up").removeAttr('disabled');
        $("#error_att").hide();
    }
}
</script>

{{--Payment Create Ends--}}

@endsection