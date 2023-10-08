@extends('layouts.master')
@section('page_title', 'Generate Challan')
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
<form method="post" action="{{route('applicants.meritList.fee')}}">
    @csrf
    <div style="width: 60%;margin:auto">
        <div style="margin-bottom: 30px;">
            <label>Form No: </label>
            <input type="text" value="{{ old('form_no') }}" name="form_no" class="form-control" placeholder="Form No" required>
        </div>

        <div style="display: flex;justify-content: flex-end;">
            <button type="submit" id="challan" class="btn btn-info add-stu mx-4">Generate Challan</button>
            </div>
    </div>
</form>



@endsection