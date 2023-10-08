@extends('layouts.master')
@section('page_title', 'Generate Reports')
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

/* Firefox */
input[type=number] {
    -moz-appearance: textfield;
}
</style>


<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Generate Attendance Report</h6>
        {!! Qs::getPanelOptions() !!}
    </div>


    <div class="card-body">
        <div class="row">
            <form class="col-md-12" method="POST" action="{{route('students.attendance.report.generate')}}">
                @csrf
                <fieldset>
                    <div class="row" style="display: flex; justify-content:center ;align-items: center">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Roll No:</label>
                                <input value="{{ old('roll_no') }}" required type="text" name="roll_no"
                                    class="form-control" placeholder="Roll No" style="border: solid #ddd 1px">
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                                    <label for="combination">Select Combination <span class="text-danger">*</span></label>
                                        <select required data-placeholder="Select Combination" class="form-control select" name="combination" id="combination">
                                            <option value=""></option>
                                            @foreach($combinations as $c)
                                                <option {{ old('combination') == $c->id ? 'selected' : '' }} value="{{ $c->name }}">{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                    
                                </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>From:</label>
                                <input value="{{ old('from') }}" required type="text" name="from_date"
                                    class="form-control date-pick" placeholder="from-date"
                                    style="border: solid #ddd 1px">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>To:</label>
                                <input value="{{ old('to') }}" required type="text" name="to_date"
                                    class="form-control date-pick" placeholder="to-date "
                                    style="border: solid #ddd 1px">
                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center; margin-top: 20px">
                        <button type="submit" class="btn btn-primary"
                            style="border-radius: 10px; padding: 15px 20px 15px">
                            Generate</button>
                    </div>
            </form>
        </div>
    </div>
</div>

<!-- <script>
comb_opts1 = $("#combination_id1").children();
comb_opts2 = $("#combination_id2").children();

$("#class_id1").on("change", () => {
    classChange1();
});
$("#class_id2").on("change", () => {
    classChange2();
});

function classChange1() {
    let grpId = $("#class_id1 :selected")[0].id;
    $("#combination_id1").empty();
    for (let i = 0; i < comb_opts1.length; i++) {
        if ($(comb_opts1)[i].id == grpId) {
            $("#combination_id1").append(comb_opts1[i]);
        }
    }
};

function classChange2() {
    let grpId = $("#class_id2 :selected")[0].id;
    $("#combination_id2").empty();
    for (let i = 0; i < comb_opts2.length; i++) {
        if ($(comb_opts2)[i].id == grpId) {
            $("#combination_id2").append(comb_opts2[i]);
        }
    }
};
</script> -->



{{--Payment Create Ends--}}

@endsection