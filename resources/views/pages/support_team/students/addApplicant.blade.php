@extends('layouts.master')
@section('page_title', 'Admit Student')
@section('content')

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    .personal-show {
        display: block;
    }

    .personal-hide {
        display: none;
    }

    .father-show {
        display: block;
    }

    .father-hide {
        display: none;
    }

    .guard-show {
        display: block;
    }

    .guard-hide {
        display: none;
    }

    .acad-show {
        display: block;
    }

    .acad-hide {
        display: none;
    }

    .close {
        cursor: pointer;
    }
</style>
<div class="card">
    <div class="card-header bg-white header-elements-inline">
        <h6 class="card-title">Please fill The form Below To Admit A New Student</h6>

        {!! Qs::getPanelOptions() !!}
    </div>

    <form id="" method="post" enctype="multipart/form-data" class="wizard-form steps-validation" action="{{ route('students.store') }}" data-fouc>
        @csrf
        <h6></h6>
        <fieldset>
            <div style="margin-bottom: 20px;">
                <div class="d-flex heading-div" style="justify-content: space-between;">
                    <h4>Personal Data</h4>
                    <a class="per-close close" onclick="perClose()">x</a>
                </div>
                <div class="personal-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Form No:</label>
                                <input value="{{ old('form_no') }}" id="form_no" required type="number" name="form_no" class="form-control" placeholder="Form No" onblur="form_chk()">
                            </div>
                            <p class="duplicate_form_no" style="color: red; padding-left: 5px">Form Number Already Exists In Record</p>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Full Name: <span class="text-danger">*</span></label>
                                <input value="{{ old('name') }}" required type="text" name="full_name" placeholder="Full Name" class="form-control"  id="name" onblur="myFunction()">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Date of Birth:</label>
                                <input onchange="calAge()" name="dob" value="{{ old('dob') }}" type="text" class="form-control date-pick" placeholder="Select Date..." required>

                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Age:</label>
                                <input min="10" max="24" name="age" id="age" value="{{ old('age') }}" type="text" class="form-control" placeholder="Age" readonly>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile No.:</label>
                                <input name="phone" value="{{ old('phone') }}" type="number" class="form-control" placeholder="Mobile No." required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Father Name: </label>
                                <input type="text" value="{{ old('father_name') }}" name="father_name" class="form-control"
                                id="f_name" placeholder="Father Name" onblur="myFunction1()"required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="group_id">Group: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required name="group_name" id="group_id" class="select-search form-control" required onchange="grpChange()">
                                    <option value=""></option>
                                    @foreach($groups as $nal)
                                    <option id="{{$nal->id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }}>{{ $nal->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quota_id">Subject Combination: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required name="combination" id="combination_id" class="select-search form-control" required>
                                    <option value=""></option>
                                    @foreach($combinations as $nal)
                                    <option id="{{$nal->group_id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->name}}">{{ $nal->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quota_id">Quota: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required name="quota_name" id="quota_id" class="select-search form-control" required>
                                    <option value=""></option>
                                    @foreach($quotas as $nal)
                                    <option {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->name}}">{{ $nal->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 20px;">
                <div class="d-flex heading-div" style="justify-content: space-between;">
                    <h4>Academic Information</h4>
                    <a class="acad-close close" onclick="acadClose()">x</a>
                </div>
                <div class="acad-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Roll-No:</label>
                                <input name="roll_no" value="{{ old('roll_no') }}" type="text" class="form-control" placeholder="Roll No" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Total Marks: </label>
                                <input max="1100" type="number" id="tot_marks" onchange="calPer()" value="1100" name="total_marks" class="form-control" placeholder="Total" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Obtained Marks: </label>
                                <input max="1100" type="number" onchange="calPer()" id="obt_marks" value="{{ old('obtained_marks') }}" name="obtained_marks" class="form-control" placeholder="Obtained" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Board: </label>
                                <input type="text" value="FBISE" name="board" class="form-control" placeholder="Board" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Percentage:</label>
                                <input name="per" id="per" value="{{ old('per') }}" type="text" class="form-control" placeholder="Percentage" readonly>
                            </div>
                        </div>
                       <input type="hidden" name="form_check" id="form_check"  value="{{$form_no_check}}"/>
                    </div>
                </div>

        </fieldset>
    </form>
</div>

<script>
    let chk = $("#form_check").val();
    let error = false;
    chk = JSON.parse(chk);
    $(".duplicate_form_no").css({
        display:"none"
    })
function form_chk(){
    error = false;
    for(let i = 0; i<chk.length; i++){
        if(chk[i].form_no == $("#form_no").val()){
            error = true;
        }
    }
    if(error){
        $(".duplicate_form_no").css({
            display:"block"
        })
        $("#form_no").attr({
            "placeholder": $("#form_no").val() 
        })
        $("#form_no").val("")
    }else{
        $(".duplicate_form_no").css({
            display:"none"
        })
        $("#form_no").attr({
            "placeholder": "Form No"
        })
    }
}

function myFunction() {
  var x = document.getElementById("name");
  x.value = x.value.toUpperCase();
}
function myFunction1() {
  var x = document.getElementById("f_name");
  x.value = x.value.toUpperCase();
}
    comb_opts = $("#combination_id").children();

    function grpChange() {
        let grpId = $("#group_id :selected")[0].id;
        $("#combination_id").empty();
        for (let i = 0; i < comb_opts.length; i++) {
            if ($(comb_opts)[i].id == grpId) {
                $("#combination_id").append(comb_opts[i]);
            }
        }
    };

    function calPer() {
        totMarks = $("#tot_marks").val();
        obtMarks = $("#obt_marks").val();
        percentage = (obtMarks / totMarks) * 100;
        $("#per").val(parseFloat(percentage).toFixed(2));

        $("#obt_marks").attr({
            max: $("#tot_marks").val()
        })
    }

    function calAge() {
        let tempDate = $(".date-pick").val();
        tempDate = tempDate.split("-");
        let dob = new Date(tempDate[1] + "-" + tempDate[0] + "-" + tempDate[2]);
        //calculate month difference from current date in time  
        var month_diff = Date.now() - dob.getTime();

        //convert the calculated difference in date format  
        var age_dt = new Date(month_diff);

        //extract year from date      
        var year = age_dt.getUTCFullYear();

        //now calculate the age of the user  
        var age = Math.abs(year - 1970);

        //display the calculated age  
        $("#age").val(age);
    }


    function perClose() {
        if (document.querySelector(".personal-data").classList.contains("personal-hide")) {
            document.querySelector(".personal-data").classList.add("personal-show");
            document.querySelector(".personal-data").classList.remove("personal-hide");

            document.querySelector(".per-close").innerHTML = "x";
            // document.querySelector(".father-data").classList.remove("father-show");
            // document.querySelector(".father-data").classList.add("father-hide");
            // document.querySelector(".guard-data").classList.remove("guard-show");
            // document.querySelector(".guard-data").classList.add("guard-hide");
            // document.querySelector(".acad-data").classList.remove("acad-show");
            // document.querySelector(".acad-data").classList.add("acad-hide");

        } else {
            document.querySelector(".personal-data").classList.add("personal-hide");
            document.querySelector(".personal-data").classList.remove("personal-show");

            document.querySelector(".per-close").innerHTML = "+";
        }

    };

    function fatClose() {
        if (document.querySelector(".father-data").classList.contains("father-hide")) {
            document.querySelector(".father-data").classList.add("father-show");
            document.querySelector(".father-data").classList.remove("father-hide");

            document.querySelector(".father-close").innerHTML = "x";
        } else {
            document.querySelector(".father-data").classList.add("father-hide");
            document.querySelector(".father-data").classList.remove("father-show");

            document.querySelector(".father-close").innerHTML = "+";
        }


    };

    function guardClose() {
        if (document.querySelector(".guard-data").classList.contains("guard-hide")) {
            document.querySelector(".guard-data").classList.add("guard-show");
            document.querySelector(".guard-data").classList.remove("guard-hide");

            document.querySelector(".guard-close").innerHTML = "x";
        } else {
            document.querySelector(".guard-data").classList.add("guard-hide");
            document.querySelector(".guard-data").classList.remove("guard-show");

            document.querySelector(".guard-close").innerHTML = "+";
        }

    };

    function acadClose() {
        if (document.querySelector(".acad-data").classList.contains("acad-hide")) {
            document.querySelector(".acad-data").classList.add("acad-show");
            document.querySelector(".acad-data").classList.remove("acad-hide");

            document.querySelector(".acad-close").innerHTML = "x";
        } else {
            document.querySelector(".acad-data").classList.add("acad-hide");
            document.querySelector(".acad-data").classList.remove("acad-show");

            document.querySelector(".acad-close").innerHTML = "+";
        }

    };

    function yesnoCheck() {
        if (document.getElementById('ailment').checked) {
            document.getElementById('ailment_name').style.display = 'block';
            document.getElementById('ailment_no').style.marginTop = '8px';
        }
        if (document.getElementById('ailment_no').checked) {
            document.getElementById('ailment_name').style.display = 'none';
            document.getElementById('ailment_no').style.marginTop = '0px';
        }
        if (document.getElementById('eligibilty_yes').checked) {
            document.getElementById('eligibilty_remarks').style.display = 'block';
            document.getElementById('eligibilty_no').style.marginTop = '8px';
        }
        if (document.getElementById('eligibilty_no').checked) {
            document.getElementById('eligibilty_remarks ').style.display = 'none';
            document.getElementById('eligibilty_no').style.marginTop = '0px';
        }

    }
</script>

@endsection