@extends('layouts.master')
@section('page_title', 'Admit Student')
@section('content')

<style>
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
                                <input value="{{ old('form_no') }}" required type="number" name="form_no" class="form-control" placeholder="Form No">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Full Name: <span class="text-danger">*</span></label>
                                <input value="{{ old('name') }}" required type="text" name="full_name" placeholder="Full Name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>CNIC: </label>
                                <input type="number" value="{{ old('cnic') }}" name="cnic" class="form-control" placeholder="CNIC" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Date of Birth:</label>
                                <input name="dob" onchange="calAge()" value="{{ old('dob') }}" type="text" class="form-control date-pick" placeholder="Select Date..." required>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Age:</label>
                                <input name="age" id="age" readonly value="{{ old('age') }}" type="text" class="form-control" placeholder="Age" required>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="gender">Gender: <span class="text-danger">*</span></label>
                                <select class="select form-control" id="gender" name="gender" required data-fouc data-placeholder="Choose..">
                                    <option {{ (old('gender') == 'Male') ? 'selected' : '' }} value="Male">Male</option>
                                    <option {{ (old('gender') == 'Female') ? 'selected' : '' }} value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Upload Passport Photo:</label>
                                <input value="{{ old('photo') }}" accept="image/*" type="file" name="photo" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Religion: </label>
                                <input type="text" value="{{ old('religion') }}" value="Islam" name="religion" class="form-control" placeholder="Religion" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nationality_id">Nationality: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required name="nationality" id="nationality_id" class="select-search form-control" required>
                                    @foreach($nationals as $nal)
                                    <option {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{ $nal->id }}">{{ $nal->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Domicile: </label>
                                <input type="text" value="{{ old('domicile') }}" value="ICT" name="domicile" class="form-control" placeholder="Domilcile" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone:</label>
                                <input value="{{ old('phone') }}" type="text" name="phone" class="form-control" placeholder="Phone" required>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="group_id">Group: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required name="group_name" id="group_id" class="select-search form-control" required>
                                    <option value=""></option>
                                    @foreach($groups as $nal)
                                    <option {{ (old('nal_id') == $nal->id ? 'selected' : '') }}>{{ $nal->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Subject Combination Code Applied For:</label>
                                <input value="{{ old('combination_code') }}" type="text" name="combination_code" class="form-control" placeholder="000" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Subject Combination:</label>
                                <input value="{{ old('combination_sub') }}" type="text" name="combination_sub" class="form-control" placeholder="SUB-SUB-SUB" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="font-weight: bold;font-size: larger;">Bus Avail:</label>
                                <input type="radio" id="yes" name="bus" value="yes" style="margin-left: 30px">
                                <label for="age1">Yes</label>
                                <input type="radio" id="no" name="bus" value="no" style="margin-left: 30px">
                                <label for="age1">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 20px;">
                <div class="d-flex heading-div" style="justify-content: space-between;">
                    <h4>Father Information</h4>
                    <a class="father-close close" onclick="fatClose()">x</a>
                </div>
                <div class="father-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Father Name: </label>
                                <input type="text" value="{{ old('father_name') }}" name="father_name" class="form-control" placeholder="Father Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Father CNIC: </label>
                                <input type="number" value="{{ old('father_cnic') }}" name="father_cnic" class="form-control" placeholder="Father CNIC" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Father Mobile No: </label>
                                <input type="number" value="{{ old('father_mn') }}" name="father_mn" class="form-control" placeholder="Father Mobile No." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Father Whatsapp No: </label>
                                <input type="text" value="{{ old('father_wn') }}" name="father_wn" class="form-control" placeholder="Father Whatsapp No.">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Father Contact No: </label>
                                <input type="number" value="{{ old('father_cn') }}" name="father_cn" class="form-control" placeholder="Father Contact No.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Father Official Address: </label>
                                <input type="text" value="{{ old('father_off_add') }}" name="father_off_add" class="form-control" placeholder="Father Official Address" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Father Occupation </label>
                                <input type="text" value="{{ old('father_occ') }}" name="father_occ" class="form-control" placeholder="Father Occupation">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Father Permenant Address: </label>
                                <input type="text" value="{{ old('father_per_add') }}" name="father_per_add" class="form-control" placeholder="Father Permenant Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Father Postal Address: </label>
                                <input type="text" value="{{ old('father_pos_add') }}" name="father_pos_add" class="form-control" placeholder="Father Postal Address">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 20px;">
                <div class="d-flex heading-div" style="justify-content: space-between;">
                    <h4>Guardian Information</h4>
                    <a class="guard-close close" onclick="guardClose()">x</a>
                </div>
                <div class="guard-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Guardian Name: </label>
                                <input type="text" value="{{ old('guard_name') }}" name="guard_name" class="form-control" placeholder="Guardian Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Guardian CNIC: </label>
                                <input type="number" value="{{ old('guard_cnic') }}" name="guard_cnic" class="form-control" placeholder="Guardian CNIC">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Guardian Mobile No: </label>
                                <input type="number" value="{{ old('guard_mn') }}" name="guard_mn" class="form-control" placeholder="Guardian Mobile No.">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Guardian Whatsapp No: </label>
                                <input type="number" value="{{ old('guard_wn') }}" name="guard_wn" class="form-control" placeholder="Guardian Whatsapp No.">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Guardian Contact No: </label>
                                <input type="number" value="{{ old('guard_cn') }}" name="guard_cn" class="form-control" placeholder="Guardian Contact No.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Guardian Official Address: </label>
                                <input type="text" value="{{ old('guard_off_add') }}" name="guard_off_add" class="form-control" placeholder="guardian Official Address">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Guardian Occupation </label>
                                <input type="text" value="{{ old('guard_occ') }}" name="guard_occ" class="form-control" placeholder="guardian Occupation">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Guardian Permenant Address: </label>
                                <input type="text" value="{{ old('guard_per_add') }}" name="guard_per_add" class="form-control" placeholder="guardian Permenant Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Guardian Postal Address: </label>
                                <input type="text" value="{{ old('guard_pos_add') }}" name="guard_pos_add" class="form-control" placeholder="guardian Postal Address">
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
                                <input name="roll_no" value="{{ old('roll_no') }}" type="number" class="form-control" placeholder="Roll No" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="year_passed">Year Passed: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required name="year_passed" id="year_passed" class="select-search form-control" required>
                                    <option value=""></option>
                                    @for($y=date('Y', strtotime('- 10 years')); $y<=date('Y'); $y++) <option {{ (old('year_admitted') == $y) ? 'selected' : '' }} value="{{ $y }}">{{ $y }}</option>
                                        @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Total Marks: </label>
                                <input id="tot_marks" onchange="calPer()" type="number" value="{{ old('total_marks') }}" name="total_marks" class="form-control" placeholder="Total" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Obtained Marks: </label>
                                <input id="obt_marks" onchange="calPer()" type="number" value="{{ old('obtained_marks') }}" name="obtained_marks" class="form-control" placeholder="Obtained" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Percentage: </label>
                                <input type="number" id="per" readonly value="{{ old('percentage') }}" name="percentage" class="form-control" placeholder="%" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Grade/Division: </label>
                                <input type="text" value="{{ old('grade') }}" name="grade" class="form-control" placeholder="Grade" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Board: </label>
                                <input type="text" value="{{ old('board') }}" value="FBISE" name="board" class="form-control" placeholder="Board" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Instituion Attended: </label>
                                <input type="text" value="{{ old('ins_attended') }}" name="ins_attended" class="form-control" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Elective Subjects: </label>
                                <input type="text" value="{{ old('elective_subjects') }}" name="elective_subjects" class="form-control" placeholder="Subjects" required>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </fieldset>
    </form>
</div>

<script>
    function calPer() {
        totMarks = $("#tot_marks").val();
        obtMarks = $("#obt_marks").val();
        percentage = (obtMarks / totMarks) * 100;
        $("#per").val(parseFloat(percentage).toFixed(2));
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