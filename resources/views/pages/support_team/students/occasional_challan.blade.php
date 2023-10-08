

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
</head>
<style>
    .main_body .content_area {
        padding: 0 0 10px 0;
        margin: 10px 0;
    }

    .main_body .content_area .title_search_area {
        border-radius: 0;
    }

    .question_box h3 {
        margin: 50px 0;
        text-align: center;
        font-size: 30px;
    }
</style>

<body style="width: 100vw;">
    <div class="container">
        <div class="main_body">
            <div style="min-height: 250px" class="content_area">
                <div id="ChallanDiv">
                    <style>
                        @media print {
                            .print-button {
                                display: none;
                            }

                            .printbtn,
                            header,
                            footer {
                                display: none !important;
                            }

                            #ChallanDiv {
                                top: 0px !important;
                                position: relative;
                            }

                            .row span {
                                padding: 2px 0 2px 2px;
                            }
                        }

                        body {
                            visibility: hidden;
                        }

                        .printbtn {
                            display: block;
                            visibility: visible;
                        }

                        #ChallanDiv {
                            top: -150px;
                            position: relative;
                        }

                        .printbtn {}

                        .main_body {
                            width: 1300px;
                        }

                        .section-to-print,
                        .section-to-print * {
                            background-color: white;
                            visibility: visible;
                        }

                        body {
                            font-family: arial;
                            font-size: 14px;
                            position: relative;
                            top: 200px;
                        }

                        .border {
                            border-top: 1px solid;
                        }

                        .main_form_cont {
                            float: left;
                            min-width: 380px;
                            max-width: 380px;
                            border: 1px solid;
                            margin: 20px 10px 10px 0;
                        }

                        .row {
                            float: left;
                            width: 100%;
                        }

                        .row span {
                            float: left;
                            padding: 5px 0 5px 2px;
                            border-right: 1px solid;
                            text-align: center;
                        }
                    </style>
                    <div class="section-to-print" style="min-width: 98vw;max-width: 100vw;">
                        <div class="print-button" style="height: 20px;background-color: green;
                            text-align:center;color: white;padding: 10px 0;width:50%;margin:auto">PRINT CHALLAN FORM
                        </div>
                        <div style="display: flex;flex-wrap: nowrap;justify-content: center;width:fit-content">
                            <div class="main_form_cont" style="border: 2px dashed black;padding:10px">
                                <div class="row">
                                    <span style="
                                            width: 97.5%;
                                            text-align: center;
                                            font-size: 18px;
                                            border: none;
                                            "><b>NATIONAL BANK AIOU</b>
                                        <hr style="color:black;height: 20px;background-color: black;margin: auto;">
                                    </span>
                                    <span style="
                                            width: 97.5%;
                                            text-align: center;
                                            font-size: 13px;
                                            border: none;
                                            padding: 0 0 5px 5px;
                                            font-weight: bold;
                                            ">Only Payable to NBP-AIOU Branch
                                        <br /><br />Online A/C No. 0977004027688653</span>
                                </div>
                                <div class="row">
                                    <span style="width: 90%; border: none;padding: 20px 0;"><b>Due Date: {{$date}}</b></span>
                                </div>
                                <div style="margin: auto;text-align: center">
                                    <span style="width: 90%; border: none"><b>Islamabad Model PostGraduate College
                                            H-8</b></span>
                                </div>
                                <div>
                                    <div style="display: flex;padding:20px 20px;justify-content: space-between;">
                                        <div><span><b>Receipt:</b> {{$student->form_no}}</span></div>
                                        <div><span><b>Issue Date:</b> {{date("d-m-Y")}}</span></div>
                                    </div>

                                </div>

                                <div style="
                                        margin: 10px 0;
                                        border: 2px solid black;
                                        padding: 10px 30px;
                                        border-radius:10px;
                                    ">
                                    <div style="                                            
                                            display: flex;
                                            justify-content: space-between;
                                        ">
                                        <div>
                                            <span style="font-weight: bold">Class: </span>{{App\Models\MyClass::class_name($student->my_class_id)}}
                                        </div>
                                        <div>
                                            <span style="font-weight: bold">Roll No: </span>{{$student->roll_no}}
                                        </div>
                                    </div>
                                    <hr />
                                    <div>
                                        <span style="font-weight: bold">Name</span>: {{$student->name}}
                                    </div>
                                    <hr />
                                    <div>
                                        <span style="font-weight: bold">F.Name</span>: {{$parent->name}}
                                    </div>
                                    <hr />
                                    <div>
                                        <span style="font-weight: bold">Session: </span>{{$session}}
                                    </div>
                                </div>
                                <div style="border:2px solid black;padding-bottom:80px;border-radius:10px;padding-left:10px;padding-right:10px;margin-top:20px">
                                    <div style="display: flex;justify-content: space-between;padding: 10px 20px;border-bottom:1px solid black">
                                        <div></div>
                                        <div>Descriptions</div>
                                        <div>Amount</div>
                                    </div>
                                    <?php $i = 0; ?>
                                    <div class="desc-wrappers">
                                        <div style="width: 80%;padding: 0px 20px;padding-top:15px">
                                            @foreach($fee_cat as $f)
                                            <b>{{$f}}</b>
                                            @foreach($particulars as $d )
                                            @if($d['fee_category'] == $f)
                                            <!-- <hr> -->
                                            <div style="display: flex;justify-content: space-between;padding: 5px 20px">
                                                <div>{{$d->fee_particular}}</div>
                                                <div>{{$d->amount}}</div>
                                                <?php
                                                $i = $i + $d->amount;
                                                ?>
                                            </div>
                                            @endif
                                            @endforeach
                                            @endforeach
                                            <br>
                                        </div>

                                        <div class="row border">
                                            <span style="
                                            width: 95%;
                                            border: none;
                                            text-align: center;
                                            font-size: 12px;
                                            padding: 20px 5px;
                                        ">
                                                <img class="barcode" />
                                                <Strong>Total Payable: <?php echo $i ?>.0</Strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main_form_cont" style="border: 2px dashed black;padding:10px">
                                <div class="row">
                                    <span style="
                                            width: 97.5%;
                                            text-align: center;
                                            font-size: 18px;
                                            border: none;
                                            "><b>NATIONAL BANK AIOU</b>
                                        <hr style="color:black;height: 20px;background-color: black;margin: auto;">
                                    </span>
                                    <span style="
                                            width: 97.5%;
                                            text-align: center;
                                            font-size: 13px;
                                            border: none;
                                            padding: 0 0 5px 5px;
                                            font-weight: bold;
                                            ">Only Payable to NBP-AIOU Branch
                                        <br /><br />Online A/C No. 0977004027688653</span>
                                </div>
                                <div class="row">
                                    <span style="width: 90%; border: none;padding: 20px 0;"><b>Due Date: {{$date}}</b></span>
                                </div>
                                <div style="margin: auto;text-align: center">
                                    <span style="width: 90%; border: none"><b>Islamabad Model PostGraduate College
                                            H-8</b></span>
                                </div>
                                <div>
                                    <div style="display: flex;padding:20px 20px;justify-content: space-between;">
                                        <div><span><b>Receipt:</b> {{$student->form_no}}</span></div>
                                        <div><span><b>Issue Date:</b> {{date("d-m-Y")}}</span></div>
                                    </div>

                                </div>

                                <div style="
                                        margin: 10px 0;
                                        border: 2px solid black;
                                        padding: 10px 30px;
                                        border-radius:10px;
                                    ">
                                    <div style="                                            
                                            display: flex;
                                            justify-content: space-between;
                                        ">
                                        <div>
                                            <span style="font-weight: bold">Class: </span>{{App\models\MyClass::class_name($student->my_class_id)}}
                                        </div>
                                        <div>
                                            <span style="font-weight: bold">Roll No: </span>{{$student->roll_no}}
                                        </div>
                                    </div>
                                    <hr />
                                    <div>
                                        <span style="font-weight: bold">Name</span>: {{$student->name}}
                                    </div>
                                    <hr />
                                    <div>
                                        <span style="font-weight: bold">F.Name</span>: {{$parent->name}}
                                    </div>
                                    <hr />
                                    <div>
                                        <span style="font-weight: bold">Session: </span>{{$session}}
                                    </div>
                                </div>
                                <div style="border:2px solid black;padding-bottom:80px;border-radius:10px;padding-left:10px;padding-right:10px;margin-top:20px">
                                    <div style="display: flex;justify-content: space-between;padding: 10px 20px;border-bottom:1px solid black">
                                        <div></div>
                                        <div>Descriptions</div>
                                        <div>Amount</div>
                                    </div>
                                    <?php $i = 0; ?>
                                    <div class="desc-wrappers">
                                        <div style="width: 80%;padding: 0px 20px;padding-top:15px">
                                            @foreach($fee_cat as $f)
                                            <b>{{$f}}</b>
                                            @foreach($particulars as $d )
                                            @if($d['fee_category'] == $f)
                                            <!-- <hr> -->
                                            <div style="display: flex;justify-content: space-between;padding: 5px 20px">
                                                <div>{{$d->fee_particular}}</div>
                                                <div>{{$d->amount}}</div>
                                                <?php
                                                $i = $i + $d->amount;
                                                ?>
                                            </div>
                                            @endif
                                            @endforeach
                                            @endforeach
                                            <br>
                                        </div>

                                        <div class="row border">
                                            <span style="
                                            width: 95%;
                                            border: none;
                                            text-align: center;
                                            font-size: 12px;
                                            padding: 20px 5px;
                                        ">
                                                <img class="barcode" />
                                                <Strong>Total Payable: <?php echo $i ?>.0</Strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main_form_cont" style="border: 2px dashed black;padding:10px">
                                <div class="row">
                                    <span style="
                                            width: 97.5%;
                                            text-align: center;
                                            font-size: 18px;
                                            border: none;
                                            "><b>NATIONAL BANK AIOU</b>
                                        <hr style="color:black;height: 20px;background-color: black;margin: auto;">
                                    </span>
                                    <span style="
                                            width: 97.5%;
                                            text-align: center;
                                            font-size: 13px;
                                            border: none;
                                            padding: 0 0 5px 5px;
                                            font-weight: bold;
                                            ">Only Payable to NBP-AIOU Branch
                                        <br /><br />Online A/C No. 0977004027688653</span>
                                </div>
                                <div class="row">
                                    <span style="width: 90%; border: none;padding: 20px 0;"><b>Due Date: {{$date}}</b></span>
                                </div>
                                <div style="margin: auto;text-align: center">
                                    <span style="width: 90%; border: none"><b>Islamabad Model PostGraduate College
                                            H-8</b></span>
                                </div>
                                <div>
                                    <div style="display: flex;padding:20px 20px;justify-content: space-between;">
                                        <div><span><b>Receipt:</b> {{$student->form_no}}</span></div>
                                        <div><span><b>Issue Date:</b> {{date("d-m-Y")}}</span></div>
                                    </div>

                                </div>

                                <div style="
                                        margin: 10px 0;
                                        border: 2px solid black;
                                        padding: 10px 30px;
                                        border-radius:10px;
                                    ">
                                    <div style="                                            
                                            display: flex;
                                            justify-content: space-between;
                                        ">
                                        <div>
                                            <span style="font-weight: bold">Class: </span>{{App\models\MyClass::class_name($student->my_class_id)}}
                                        </div>
                                        <div>
                                            <span style="font-weight: bold">Roll No: </span>{{$student->roll_no}}
                                        </div>
                                    </div>
                                    <hr />
                                    <div>
                                        <span style="font-weight: bold">Name</span>: {{$student->name}}
                                    </div>
                                    <hr />
                                    <div>
                                        <span style="font-weight: bold">F.Name</span>: {{$parent->name}}
                                    </div>
                                    <hr />
                                    <div>
                                        <span style="font-weight: bold">Session: </span>{{$session}}
                                    </div>
                                </div>
                                <div style="border:2px solid black;padding-bottom:80px;border-radius:10px;padding-left:10px;padding-right:10px;margin-top:20px">
                                    <div style="display: flex;justify-content: space-between;padding: 10px 20px;border-bottom:1px solid black">
                                        <div></div>
                                        <div>Descriptions</div>
                                        <div>Amount</div>
                                    </div>
                                    <?php $i = 0; ?>
                                    <div class="desc-wrappers">
                                        <div style="width: 80%;padding: 0px 20px;padding-top:15px">
                                            @foreach($fee_cat as $f)
                                            <b>{{$f}}</b>
                                            @foreach($particulars as $d )
                                            @if($d['fee_category'] == $f)
                                            <!-- <hr> -->
                                            <div style="display: flex;justify-content: space-between;padding: 5px 20px">
                                                <div>{{$d->fee_particular}}</div>
                                                <div>{{$d->amount}}</div>
                                                <?php
                                                $i = $i + $d->amount;
                                                ?>
                                            </div>
                                            @endif
                                            @endforeach
                                            @endforeach
                                            <br>
                                        </div>

                                        <div class="row border">
                                            <span style="
                                            width: 95%;
                                            border: none;
                                            text-align: center;
                                            font-size: 12px;
                                            padding: 20px 5px;
                                        ">
                                                <img class="barcode" />
                                                <Strong>Total Payable: <?php echo $i ?>.0</Strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main_form_cont" style="border: 2px dashed black;padding:10px">
                                <div class="row">
                                    <span style="
                                            width: 97.5%;
                                            text-align: center;
                                            font-size: 18px;
                                            border: none;
                                            "><b>NATIONAL BANK AIOU</b>
                                        <hr style="color:black;height: 20px;background-color: black;margin: auto;">
                                    </span>
                                    <span style="
                                            width: 97.5%;
                                            text-align: center;
                                            font-size: 13px;
                                            border: none;
                                            padding: 0 0 5px 5px;
                                            font-weight: bold;
                                            ">Only Payable to NBP-AIOU Branch
                                        <br /><br />Online A/C No. 0977004027688653</span>
                                </div>
                                <div class="row">
                                    <span style="width: 90%; border: none;padding: 20px 0;"><b>Due Date: {{$date}}</b></span>
                                </div>
                                <div style="margin: auto;text-align: center">
                                    <span style="width: 90%; border: none"><b>Islamabad Model PostGraduate College
                                            H-8</b></span>
                                </div>
                                <div>
                                    <div style="display: flex;padding:20px 20px;justify-content: space-between;">
                                        <div><span><b>Receipt:</b> {{$student->form_no}}</span></div>
                                        <div><span><b>Issue Date:</b> {{date("d-m-Y")}}</span></div>
                                    </div>

                                </div>

                                <div style="
                                        margin: 10px 0;
                                        border: 2px solid black;
                                        padding: 10px 30px;
                                        border-radius:10px;
                                    ">
                                    <div style="                                            
                                            display: flex;
                                            justify-content: space-between;
                                        ">
                                        <div>
                                            <span style="font-weight: bold">Class: </span>{{App\models\MyClass::class_name($student->my_class_id)}}
                                        </div>
                                        <div>
                                            <span style="font-weight: bold">Roll No: </span>{{$student->roll_no}}
                                        </div>
                                    </div>
                                    <hr />
                                    <div>
                                        <span style="font-weight: bold">Name</span>: {{$student->name}}
                                    </div>
                                    <hr />
                                    <div>
                                        <span style="font-weight: bold">F.Name</span>: {{$parent->name}}
                                    </div>
                                    <hr />
                                    <div>
                                        <span style="font-weight: bold">Session: </span>{{$session}}
                                    </div>
                                </div>
                                <div style="border:2px solid black;padding-bottom:80px;border-radius:10px;padding-left:10px;padding-right:10px;margin-top:20px">
                                    <div style="display: flex;justify-content: space-between;padding: 10px 20px;border-bottom:1px solid black">
                                        <div></div>
                                        <div>Descriptions</div>
                                        <div>Amount</div>
                                    </div>
                                    <?php $i = 0; ?>
                                    <div class="desc-wrappers">
                                        <div style="width: 80%;padding: 0px 20px;padding-top:15px">
                                            @foreach($fee_cat as $f)
                                            <b>{{$f}}</b>
                                            @foreach($particulars as $d )
                                            @if($d['fee_category'] == $f)
                                            <!-- <hr> -->
                                            <div style="display: flex;justify-content: space-between;padding: 5px 20px">
                                                <div>{{$d->fee_particular}}</div>
                                                <div>{{$d->amount}}</div>
                                                <?php
                                                $i = $i + $d->amount;
                                                ?>
                                            </div>
                                            @endif
                                            @endforeach
                                            @endforeach
                                            <br>
                                        </div>

                                        <div class="row border">
                                            <span style="
                                            width: 95%;
                                            border: none;
                                            text-align: center;
                                            font-size: 12px;
                                            padding: 20px 5px;
                                        ">
                                                <img class="barcode" />
                                                <Strong>Total Payable: <?php echo $i ?>.0</Strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.querySelector(".print-button").addEventListener("click", () => {
            print();
        })
    </script>
</body>

</html>