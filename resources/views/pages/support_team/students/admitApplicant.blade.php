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
</style>
<form method="post" action="{{route('students.admit')}}">
    @csrf
    <div style="width: 60%;margin:auto">
        <div style="margin-bottom: 30px;">
            <label>Form No: </label>
            <input type="text" value="{{ old('form_no') }}" name="form_no" class="form-control" placeholder="Form No" required>
        </div>

        <div style="display: flex;justify-content: flex-end;">
            <button type="submit" id="admit" class="btn btn-success add-stu">Admit Student</button>
            <input type="hidden" name="type" id="type" />
        </div>
    </div>
</form>

<script>
    $("#challan").on("click", (e) => {
        $("#type").val("challan")
    })

    $("#admit").on("click", () => {
        $("#type").val("admit")
    })
</script>

@endsection