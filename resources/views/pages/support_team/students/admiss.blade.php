@extends('layouts.master')
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

    input {
        /* border: 0 !important; */
        /* border-bottom: 1px solid black !important; */
        outline: none;
    }
</style>
<style>
    .print-card {
        display: none !important;
    }

    @media print {
        .print-card {
            display: block !important;
            margin-top: 30px !important;
            /* margin-left: 30px !important; */
        }

        .form-btns {
            display: none;
        }

        .card-header {
            display: none;
        }

        .navbar {
            display: none;
        }

        .sidebar {
            display: none;
        }

        .page-header {
            display: none;
        }

        .print-btn {
            display: none;
        }

        /* th {
            display: none;
        } */

        .datatable-header {
            display: none;
        }

        .datatable-footer {
            display: none;
        }

        .gen-fee {
            display: none;
        }

        .add-stu {
            display: none;
        }
    }

    label {
        min-width: 120px;
        margin: auto;
        font-size: 18px !important;
    }

    input {
        margin-bottom: 8px;
        font-size: 18px !important;
    }

    h6 {
        font-size: 18px !important;
    }
</style>

<div class="card" style="width: 80%;margin:auto;display:flex;flex-wrap:nowrap;">
    <!-- <div class="card-header bg-white header-elements-inline">
        <h6 class="card-title">Please fill The form Below To Admit A New Student</h6>
    </div> -->

    <form id="" style="padding:30px" method="post" enctype="multipart/form-data" action="{{route('payments.fees_records')}}" data-fouc>
        <div style="text-align: center;">
            <h5>Islamabad Mode Postgraduate College H-8 Islamabad</h5>
            <h6>Phone: 051-9250332</h6>
        </div>
        @csrf
        <div style="margin:20px;border-radius:10px;border:3px solid black;">
            <div style="padding: 0 20px;padding-top:20px">
                <div style="display: flex;align-items: center;">
                    <label style="padding-right:10px">Form No:</label>
                    <input value="{{ $form_no }}" id="form_no" required type="number" name="form_no" class="form-control" placeholder="Form No" readonly>
                </div>
                <div style="display: flex;align-items: center;">
                    <label style="padding-right:10px">Roll No:</label>
                    <input value="{{ $roll_no }}" id="roll_no" required type="text" name="roll_no" class="form-control" placeholder="Roll No" readonly>
                </div>
                <div style="display: flex;align-items: center;">
                    <label style="padding-right:10px">Name: </label>
                    <input value="{{ $name }}" required type="text" name="full_name" placeholder="Full Name" class="form-control" readonly>
                </div>
                <div style="display: flex;align-items: center;">
                    <label style="padding-right:10px">Father Name: </label>
                    <input type="text" value="{{ $f_name }}" name="father_name" class="form-control" placeholder="Father Name" required readonly>
                </div>
            </div>
            <hr style="border-top:1px solid black">
            <div style="padding: 0 20px">
                <div style="display: flex;">
                    <div style="display: flex;align-items: center;margin-right:10px;flex:0.4;">
                        <label style="padding-right:10px">Class: </label>
                        <input type="text" value="{{App\Models\MyClass::class_name($class)}}" name="class" class="form-control" placeholder="Class" required readonly>
                    </div>
                    <div style="display: flex;flex:0.6">
                        <label style="padding-right:10px">Section: </label>
                        <input type="text" value="{{ $section }}" name="section" class="form-control" placeholder="Section" required readonly>
                    </div>
                </div>
                <div style="display: flex;">
                    <div style="display: flex;align-items: center;margin-right:10px;flex:0.4">
                        <label style="padding-right:10px">Session: </label>
                        <input type="text" value="{{ $session }}" name="session" class="form-control" placeholder="Session" required readonly>
                    </div>
                    <div style="display: flex;align-items: center;flex:0.6">
                        <label for="group_id">Group: <span class="text-danger">*</span></label>
                        <input type="text" value="{{$group }}" name="class" class="form-control" placeholder="Class" required readonly>

                    </div>
                </div>
            </div>
             <div style="padding: 0 20px">
                <div style="display: flex;align-items: center;flex:0.6">
                        <label for="group_id">Combination: </label>
                        <input type="text" value="{{$combination }}" name="class" class="form-control" placeholder="Class" required readonly>

                    </div>
            </div>
            <hr style="border-top:1px solid black">
            <div class="row" style="padding:0 20px;padding-bottom:20px">
                <div class="col-md-6">
                    <h6 style="text-decoration: underline;">Due Fee: </h6>
                    <div style="display: flex;align-items: center;margin-left:10px">
                        <h6 style="text-decoration: underline;padding-right:10px">Rs. </h6>

                        <input type="number" id="due_fees" value="{{$due}}" name="due_fee" class="form-control" placeholder="Due Fee" onchange="calBalance()" required>

                    </div>
                </div>
                <div class="col-md-6">
                    <h6 style="text-decoration: underline;">Paid Fee: </h6>
                    <div style="display: flex;align-items: center;">
                        <h6 style="text-decoration: underline;padding-right:10px">Rs. </h6>

                        <input type="number" id="paid_fees" value="" name="paid_fee" class="form-control" placeholder="Paid Fee" onchange="calBalance()" onblur="copyFee()" required>

                    </div>
                </div>
                <div class="col-md-6">
                    <h6 style="text-decoration: underline;">Balance: </h6>
                    <div style="display: flex;align-items: center;">
                        <h6 style="text-decoration: underline;padding-right:10px">Rs. </h6>

                        <input type="number" id="balance" value="" name="balance" class="form-control" placeholder="Balance" readonly>


                    </div>
                </div>
                <div class="form-btns col-md-6" style="text-align: right;">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="" class="btn btn-primary print_btn">Print</a>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="print-card card" style="width: 80%;margin:auto;display:flex;flex-wrap:nowrap">
    <!-- <div class="card-header bg-white header-elements-inline">
        <h6 class="card-title">Please fill The form Below To Admit A New Student</h6>
    </div> -->

    <form id="" style="padding:30px" method="post" enctype="multipart/form-data" action="{{route('payments.fees_records')}}" data-fouc>
        <div style="text-align: center;">
            <h5>Islamabad Mode Postgraduate College H-8 Islamabad</h5>
            <h6>Phone: 051-9250332</h6>
        </div>
        @csrf
        <div style="margin:20px;border-radius:10px;border:3px solid black;">
            <div style="padding: 0 20px;padding-top:20px">
                <div style="display: flex;align-items: center;">
                    <label style="padding-right:10px">Form No:</label>
                    <input value="{{ $form_no }}" id="form_no" required type="number" name="form_no" class="form-control" placeholder="Form No" readonly>
                </div>
                <div style="display: flex;align-items: center;">
                    <label style="padding-right:10px">Roll No:</label>
                    <input value="{{ $roll_no }}" id="roll_no" required type="text" name="roll_no" class="form-control" placeholder="Roll No" readonly>
                </div>
                <div style="display: flex;align-items: center;">
                    <label style="padding-right:10px">Name: </label>
                    <input value="{{ $name }}" required type="text" name="full_name" placeholder="Full Name" class="form-control" readonly>
                </div>
                <div style="display: flex;align-items: center;">
                    <label style="padding-right:10px">Father Name: </label>
                    <input type="text" value="{{ $f_name }}" name="father_name" class="form-control" placeholder="Father Name" required readonly>
                </div>
            </div>
            <hr style="border-top:1px solid black">
            <div style="padding: 0 20px">
                <div style="display: flex;">
                    <div style="display: flex;align-items: center;margin-right:10px;flex:0.4;">
                        <label style="padding-right:10px">Class: </label>
                        <input type="text" value="{{App\Models\MyClass::class_name($class)}}" name="class" class="form-control" placeholder="Class" required readonly>
                    </div>
                    <div style="display: flex;flex:0.6">
                        <label style="padding-right:10px">Section: </label>
                        <input type="text" value="{{ $section }}" name="section" class="form-control" placeholder="Section" required readonly>
                    </div>
                </div>
                <div style="display: flex;">
                    <div style="display: flex;align-items: center;margin-right:10px;flex:0.4">
                        <label style="padding-right:10px">Session: </label>
                        <input type="text" value="{{ $session }}" name="session" class="form-control" placeholder="Session" required readonly>
                    </div>
                    <div style="display: flex;align-items: center;flex:0.6">
                        <label for="group_id">Group: <span class="text-danger">*</span></label>
                        <input type="text" value="{{$group }}" name="class" class="form-control" placeholder="Class" required readonly>

                    </div>
                </div>
            </div>
            <hr style="border-top:1px solid black">
            <div class="row" style="padding:0 20px;padding-bottom:20px">
                <div class="col-md-6">
                    <h6 style="text-decoration: underline;">Due Fee: </h6>
                    <div style="display: flex;align-items: center;margin-left:10px">
                        <h6 style="text-decoration: underline;padding-right:10px">Rs. </h6>

                        <input type="number" id="due_fees1" value="{{$due}}" name="due_fee" class="form-control" placeholder="Due Fee" onchange="calBalance()" required>

                    </div>
                </div>
                <div class="col-md-6">
                    <h6 style="text-decoration: underline;">Paid Fee: </h6>
                    <div style="display: flex;align-items: center;">
                        <h6 style="text-decoration: underline;padding-right:10px">Rs. </h6>

                        <input type="number" id="paid_fees1" value="{{}}" name="paid_fee" class="form-control" placeholder="Paid Fee" onchange="calBalance()" required>

                    </div>
                </div>
                <div class="col-md-6">
                    <h6 style="text-decoration: underline;">Balance: </h6>
                    <div style="display: flex;align-items: center;">
                        <h6 style="text-decoration: underline;padding-right:10px">Rs. </h6>

                        <input type="number" id="balance1" value="" name="balance" class="form-control" placeholder="Balance" readonly>


                    </div>
                </div>
                <div class="form-btns col-md-6" style="text-align: right;">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="" class="btn btn-primary print_btn">Print</a>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $(".print_btn").on("click", (e) => {
        e.preventDefault();
        print();
    });

    function copyFee(){
        $("#paid_fees1").val($("#paid_fees").val());
        $("#due_fees1").val($("#due_fees").val());
        $("#balance1").val($("#balance").val());
    }
    function checkFee() {
        due = $("#due_fees").val();
        console.log(due);
        $("#paid_fees").attr({
            max: due,
        });
    };

    function calBalance() {
        checkFee();
        due = $("#due_fees").val();
        paid = $("#paid_fees").val();
        balance = due - paid;
        $("#balance").val(balance);
    };
    
</script>

@endsection