@extends('layouts.master')
@section('page_title', 'Create Payment')
@section('content')
<style>
    .nav-tabs .nav-item {
        cursor: pointer;
    }

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
<ul class="nav nav-tabs" style="text-align: center;">
    <li class="nav-item" style="width: 50%;">
        <a class="nav-link challan-link active">Challan</a>
    </li>
    <li class="nav-item" style="width: 50%;">
        <a class="nav-link special-challan-link">Special Challan</a>
    </li>
</ul>

<section class="challan-sec">
    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Create Payment</h6>
            {!! Qs::getPanelOptions() !!}
        </div>
        <div class="card-body">
            <div class="row">
                <form class="col-md-12" method="POST" action="{{route('payments.occasional.particulars')}}">
                    @csrf
                    <fieldset>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="class_id">Class: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required name="c_id" id="class_id" class="select-search form-control" required>
                                    <option value=""></option>
                                    @foreach($my_classes as $nal)
                                    <option value="{{$nal->id}}">{{ $nal->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fee-cat">Fee Category: </label>
                                <select class="select form-control" id="fee-cat" name="fee_cat" required data-fouc data-placeholder="Choose.." style="border: 1px solid;" !important>

                                    <option {{ (old('feeCat') == 'fbise') ? 'selected' : '' }} value="fbise_fee">FBISE Fee</option>
                                    <option {{ (old('feeCat') == 'clgFunds') ? 'selected' : '' }} value="college_funds">College Funds</option>
                                    <option {{ (old('feeCat') == 'govtFunds') ? 'selected' : '' }} value="govt_funds">Govt. Fee</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Enter Fee Particular: </label>
                                    <input type="text" value="{{ old('fee_particular') }}" name="fee_particular" class="form-control" placeholder="Particular Name" style="border: 1px solid;" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Enter Amount: </label>
                                    <input type="text" value="{{ old('amount') }}" name="amount" class="form-control" placeholder="Amount" style="border: 1px solid;" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Save</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Generate Challan</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <form class="col-md-12" method="POST" action="{{route('payments.show.particulars')}}">
                    @csrf
                    <fieldset>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="class_id">Class: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required name="c_id" id="class_id" class="select-search form-control" required>
                                    <option value=""></option>
                                    @foreach($my_classes as $nal)
                                    <option value="{{$nal->id}}">{{ $nal->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Due Date: </label>
                                    <input style="border: 1px solid black;" name="due_date" value="{{ old('due_date') }}" type="text" class="form-control date-pick date-1" placeholder="Select Date..." required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Roll No: </label>
                                    <input style="border: 1px solid black;" name="roll_no" value="{{ old('roll_no') }}" type="text" class="form-control" placeholder="Roll No" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Session: </label>
                                    <input style="border: 1px solid black;" name="session" value="2022-2023" type="text" class="form-control" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Show Particulars</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="special-challan-sec">
    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Create Special Challan</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <form class="col-md-12" method="POST" action="{{route('payments.special.particulars')}}">
                    @csrf
                    <fieldset>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="class_id">Roll No: <span class="text-danger">*</span></label>
                                <input type="text" value="{{ old('roll_no') }}" name="roll_no" class="form-control" placeholder="Roll No" style="border: 1px solid;" required>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="fee-cat">Fee Category: </label>
                                <select class="select form-control" id="fee-cat" name="fee_cat" required data-fouc data-placeholder="Choose.." style="border: 1px solid;" !important>

                                    <option {{ (old('feeCat') == 'fbise') ? 'selected' : '' }} value="fbise">FBISE Fee</option>
                                    <option {{ (old('feeCat') == 'clgFunds') ? 'selected' : '' }} value="college_funds">College Funds</option>
                                    <option {{ (old('feeCat') == 'govtFunds') ? 'selected' : '' }} value="govt_funds">Govt. Fee</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Enter Fee Particular: </label>
                                    <input type="text" value="{{ old('fee_particular') }}" name="fee_particular" class="form-control" placeholder="Particular Name" style="border: 1px solid;" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Enter Amount: </label>
                                    <input type="text" value="{{ old('amount') }}" name="amount" class="form-control" placeholder="Amount" style="border: 1px solid;" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Save</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Generate Special Challan</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <form class="col-md-12" method="POST" action="{{route('payments.special.challan')}}">
                    @csrf
                    <fieldset>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Due Date: </label>
                                    <input style="border: 1px solid black;" name="date" value="{{ old('due_date') }}" type="text" class="form-control date-pick date-2" placeholder="Select Date..." required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Roll No: </label>
                                    <input style="border: 1px solid black;" name="roll_no" value="{{ old('roll_no') }}" type="text" class="form-control" placeholder="Roll No" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Session: </label>
                                    <input style="border: 1px solid black;" name="session" value="2022-2023" type="text" class="form-control" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Generate Challan</button>
                </form>
            </div>
        </div>
    </div>
</section>


<script>
    $(".date-1").on("change", () => {
        validDate1();
    });
    $(".date-2").on("change", () => {
        validDate2();
    });

    function validDate1() {
        let d = new Date();
        let tempDate = $(".date-1").val();
        tempDate = tempDate.split("-");
        let d1 = new Date(tempDate[1] + "-" + tempDate[0] + "-" + tempDate[2]);
        let d2 = new Date(d.getMonth() + 1 + "-" + d.getDate() + "-" + d.getFullYear());
        if (!(Date.parse(d1) > Date.parse(d2))) {
            $(".date-1").val("");
        }
    }

    function validDate2() {
        let d = new Date();
        let tempDate = $(".date-2").val();
        tempDate = tempDate.split("-");
        let d1 = new Date(tempDate[1] + "-" + tempDate[0] + "-" + tempDate[2]);
        let d2 = new Date(d.getMonth() + 1 + "-" + d.getDate() + "-" + d.getFullYear());
        if (!(Date.parse(d1) > Date.parse(d2))) {
            $(".date-2").val("");
        }
    }
    // challan tabs
    if ($(".challan-link").hasClass("active")) {
        $(".challan-sec").css({
            display: "block"
        })
        $(".special-challan-sec").css({
            display: "none"
        })
    } else {
        $(".special-challan-sec").css({
            display: "block"
        })
        $(".challan-sec").css({
            display: "none"
        })

    }

    $(".challan-link").on("click", () => {
        if (!$(".challan-link").hasClass("active")) {
            $(".challan-link").addClass("active")
            $(".special-challan-link").removeClass("active")
            $(".challan-sec").css({
                display: "block"
            })
            $(".special-challan-sec").css({
                display: "none"
            })
        }
    })
    $(".special-challan-link").on("click", () => {
        if (!$(".special-challan-link").hasClass("active")) {
            $(".special-challan-link").addClass("active")
            $(".challan-link").removeClass("active")
            $(".special-challan-sec").css({
                display: "block"
            })
            $(".challan-sec").css({
                display: "none"
            })
        }
    })
    // toggle values inputs
    $("#adFee").on("change", () => {
        if ($("#adFee").is(":checked")) {
            $(".adFeeInputDiv").css({
                display: "block"
            });
            $(".adFeeInputDiv").prop("disabled", false);
        } else {
            $(".adFeeInputDiv").css({
                display: "none"
            });
            $(".adFeeInputDiv").prop("disabled", true);
        }
    });

    $("#tutFee").on("change", () => {
        if ($("#tutFee").is(":checked")) {
            $(".tutFeeInputDiv").css({
                display: "block"
            });
            $(".tutFeeInputDiv").prop("disabled", false);
        } else {
            $(".tutFeeInputDiv").css({
                display: "none"
            });
            $(".tutFeeInputDiv").prop("disabled", true);
        }
    });

    $("#examFee").on("change", () => {
        if ($("#examFee").is(":checked")) {
            $(".examFeeInputDiv").css({
                display: "block"
            });
            $(".examFeeInputDiv").prop("disabled", false);
        } else {
            $(".examFeeInputDiv").css({
                display: "none"
            });
            $(".examFeeInputDiv").prop("disabled", true);
        }
    });

    $("#cmcFee").on("change", () => {
        if ($("#cmcFee").is(":checked")) {
            $(".cmcFeeInputDiv").css({
                display: "block"
            });
            $(".cmcFeeInputDiv").prop("disabled", false);
        } else {
            $(".cmcFeeInputDiv").css({
                display: "none"
            });
            $(".cmcFeeInputDiv").prop("disabled", true);
        }
    });

    $("#fee-cat").on("change", (e) => {
        if (e.target.value == "fbise") {
            $(".fbise-funds").css({
                display: "flex",
                justifyContent: "space-between",

            });
            $(".college-funds").css({
                display: "none"
            });
            $(".breakage-funds").css({
                display: "none"
            });
            $(".govt-funds").css({
                display: "none"
            });

            total = 0;
            parts = document.querySelectorAll(".fbise-funds");
            for (let i = 0; i < parts.length; i++) {
                total += parseInt(parts[i].querySelectorAll("td")[1].innerText);
            }
            document.querySelector(".g-total").innerText = total;

        } else if (e.target.value == "clg-funds") {
            $(".fbise-funds").css({
                display: "none"
            });
            $(".college-funds").css({
                display: "flex",
                justifyContent: "space-between",

            });
            $(".breakage-funds").css({
                display: "none"
            });
            $(".govt-funds").css({
                display: "none"
            });

            total = 0;
            parts = document.querySelectorAll(".college-funds");
            for (let i = 0; i < parts.length; i++) {
                total += parseInt(parts[i].querySelectorAll("td")[1].innerText);
            }
            document.querySelector(".g-total").innerText = total;
            // parts = $(".college-funds");
            // parts.each(part => {
            //     // console.log($(`${part} > td`));
            // });

        } else if (e.target.value == "break-funds") {
            $(".fbise-funds").css({
                display: "none"
            });
            $(".college-funds").css({
                display: "none"
            });
            $(".breakage-funds").css({
                display: "flex",
                justifyContent: "space-between",

            });
            $(".govt-funds").css({
                display: "none"
            });
            total = 0;
            parts = document.querySelectorAll(".breakage-funds");
            for (let i = 0; i < parts.length; i++) {
                total += parseInt(parts[i].querySelectorAll("td")[1].innerText);
            }
            document.querySelector(".g-total").innerText = total;

        } else if (e.target.value == "govt-funds") {
            $(".fbise-funds").css({
                display: "none"
            });
            $(".college-funds").css({
                display: "none"
            });
            $(".breakage-funds").css({
                display: "none"
            });
            $(".govt-funds").css({
                display: "flex",
                justifyContent: "space-between",
                border: "none"
            });
            total = 0;
            parts = document.querySelectorAll(".govt-funds");
            for (let i = 0; i < parts.length; i++) {
                total += parseInt(parts[i].querySelectorAll("td")[1].innerText);
            }
            document.querySelector(".g-total").innerText = total;

        }
    })
</script>

{{--Payment Create Ends--}}

@endsection