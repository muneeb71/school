@extends('layouts.master')
@section('page_title', 'Re-Admit Student')
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

<form method="post" action="{{ route('students.readmit') }}">
    @csrf
    <div style="width: 60%;margin:auto">
        <label for="group_id">Choose Input Type:</label>
        <select data-placeholder="Choose..." required name="input_type" id="input_type" class="form-control" required onchange="inputChange()">
            <option value="form">Form</option>
            <option value="roll_no">Roll No</option>
        </select>
        <div class="form_no_div" style="margin-bottom: 30px;margin-top:30px">
            <label>Form No: </label>
            <input id="form_no" type="number" value="{{ old('form_no') }}" name="form_no" class="form-control" placeholder="Form No" required>
        </div>
        <div class="roll_no_div" style="margin-bottom: 30px;margin-top:30px">
            <label>Roll No: </label>
            <input id="roll_no" type="text" value="{{ old('form_no') }}" disabled name="roll_no" class="form-control" placeholder="Roll No" required>
        </div>
        <div style="display: flex;justify-content: flex-end;">
            <button type="submit" class="btn btn-info add-stu">Re-Admit Student</button>
        </div>
    </div>
</form>

<script>
    function inputChange() {
        if ($("#input_type").val() == "form") {
            $("#form_no").prop({
                disabled: false
            });
            $(".form_no_div").css({
                display: "block"
            });
            $("#roll_no").prop({
                disabled: true
            });
            // $(".roll_no_div").css({
            //     display: "none"
            // });
        } else {
            $("#roll_no").prop({
                disabled: false
            });
            $(".roll_no_div").css({
                display: "block"
            });
            $("#form_no").prop({
                disabled: true
            });
            // $(".form_no_div").css({
            //     display: "none"
            // });
        }
    }
</script>

@endsection