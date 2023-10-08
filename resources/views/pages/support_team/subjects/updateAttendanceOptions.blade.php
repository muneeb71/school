@extends('layouts.master')
@section('page_title', 'Attendance')
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
</style>

<div class="card">
    <div class="card-header bg-white header-elements-inline">
        <h6 class="card-title">Please Select Options To Update Attendance</h6>

        {!! Qs::getPanelOptions() !!}
    </div>


    <form id="" method="post" enctype="multipart/form-data" class="wizard-form steps-validation"
        action="{{ route('students.updateAttendance.list') }}" data-fouc>
        @csrf
        <h6></h6>
        <fieldset>
            <div style="margin-bottom: 20px;">

                <div class="personal-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quota_id">Class: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required name="class" id="class_id"
                                    class="select-search form-control" onchange="grpChange()" required>
                                    <option value=""></option>
                                    @foreach($my_classes as $nal)
                                    <option {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->id}}">
                                        {{ $nal->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Section:</label>
                                <input name="section" value="{{ old('section') }}" type="text" class="form-control"
                                    placeholder="Section" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subject">Subject: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required style="border: 1px solid #ddd;"
                                    name="subject" id="subject_id" class="select-search form-control" required>
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
                                <label for="teacher">Teacher: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required style="border: 1px solid #ddd;"
                                    name="teacher" id="teacher_id" class="select-search form-control" required>
                                    <option value=""></option>
                                    @foreach($teachers as $nal)
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
                                    class="form-control date-pick" placeholder="Select Date"
                                    style="border: 1px solid #ddd;" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>To:</label>
                                <input name="to_date" value="{{ old('to_date') }}" id="to" type="text"
                                    class="form-control date-pick" placeholder="Select Date" onchange="values()"
                                    style="border: 1px solid #ddd;" required>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </fieldset>
    </form>
</div>


<script>
comb_opts = $("#subject_id").children();

function grpChange() {
    // let grpId = $("#class_id :selected")[0].value;
    // $("#subject_id").empty();
    // for (let i = 0; i < comb_opts.length; i++) {
    //     if ($(comb_opts)[i].value == grpId) {
    //         $("#subject_id").append(comb_opts[i]);
    //     }
    // }
    console.log("1212");
};

function validDate() {
    let d = new Date();
    let tempDate = $(".date-pick").val();
    tempDate = tempDate.split("-");
    let d1 = new Date(tempDate[1] + "-" + tempDate[0] + "-" + tempDate[2]);
    let d2 = new Date(d.getMonth() + 1 + "-" + d.getDate() + "-" + d.getFullYear());
    if (!(Date.parse(d1) > Date.parse(d2))) {
        $(".date-pick").val("");
    }
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