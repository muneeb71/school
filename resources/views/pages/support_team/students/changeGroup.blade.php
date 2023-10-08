@extends('layouts.master')
@section('page_title', 'Change Group/Combination')
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
</style>

<form method="post" action="{{ route('students.changeGroup') }}">
    @csrf
    <div style="width: 60%;margin:auto">
        <label for="group_id">Choose Input Type:</label>
        <select data-placeholder="Choose..." required name="input_type" id="input_type" class="form-control" required onchange="inputChange()">
            <option value="roll_no">Roll No</option>
            <option value="form">Form</option>
        </select>
        
        <div class="roll_no_div" style="margin-bottom: 30px;margin-top:30px">
            <label>Roll No: </label>
            <input id="roll_no" type="text" value="{{ old('form_no') }}" name="roll_no" class="form-control" placeholder="Roll No" required>
        </div>
        <div class="form_no_div" style="margin-bottom: 30px;margin-top:30px">
            <label>Form No: </label>
            <input id="form_no" type="number" value="{{ old('form_no') }}" name="form_no" class="form-control" placeholder="Form No" disabled required>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="group_id">Group: <span class="text-danger">*</span></label>
                    <select data-placeholder="Choose..." required name="group" id="group_id" class="select-search form-control" required onchange="grpChange()">
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
        </div>
        <div style="display: flex;justify-content: flex-end;">
            <button type="submit" class="btn btn-info add-stu">Update Group/Combination</button>
        </div>

</form>

<script>
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

    function inputChange() {
        if ($("#input_type").val() == "roll_no") {
            
            $("#roll_no").prop({
                disabled: false
            });
            $(".roll_no_div").css({
                display: "block"
            });
            $("#form_no").prop({
                disabled: true
            });
            // $(".roll_no_div").css({
            //     display: "none"
            // });
        } else {
            $("#form_no").prop({
                disabled: false
            });
            $(".form_no_div").css({
                display: "block"
            });
            $("#roll_no").prop({
                disabled: true
            });
            // $(".form_no_div").css({
            //     display: "none"
            // });
        }
    }
</script>

@endsection