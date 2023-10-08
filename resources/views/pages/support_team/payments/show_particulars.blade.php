@extends('layouts.master')
@section('page_title', 'Create Occasional Challan')
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
<?php
$i = 0;
?>
<div class="card" style="width: 60%;margin: auto;text-align: center;">
    <div class="card-header">
        <h3 class="card-title">Generate Challan</h3>
    </div>
    <div class="card-body">
        
        <div class="tab-content">
            <div class="tab-pane fade show active" id="all-students">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Check</th>
                            <th>Fee Type</th>
                            <th>Amount</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="POST" action="{{route('payments.occasional.challan')}}">
                            @csrf
                            @foreach($particulars as $p)
                            <tr>
                                <td>
                                    <input type="checkbox" id="check.{{$loop->index}}" class="chk_part">
                                </td>
                                <td>
                                    {{$p->fee_particular}}
                                </td>
                                <td>
                                    <input type="number" id="part.{{$loop->index}}" name="amount[]" value="{{$p->amount}}" >
                                    <input type="hidden" name="id[]" value="{{$p->id}}">
                                </td>
                            </tr>
                            <?php
                            $i++;
                            ?>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <input type="hidden" name="count" value="{{$i}}">
                                    <input type="hidden" name="date" value="{{$date}}">
                                    <input type="hidden" name="roll_no" value="{{$roll_no}}">
                                    <input type="hidden" name="session" value="{{$session}}">
                                    <button type="submit" class="btn btn-info">Generate Challan</button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<script>
    // toggle values inputs
    var count_chk=$('[type=checkbox]');
    var value=$('[type=number]');
    var hid=$('[type=hidden]');
    $(".chk_part").on("change", () => {
        for (let j = 0; j < count_chk.length; j++) {
            if ($(count_chk[j]).is(":checked")) {
                console.log(hid);
                $(hid[j+2]).prop("disabled", false)
                $(value[j]).prop("disabled", false)
            } else {
                $(hid[j+2]).prop("disabled", true)
                $(value[j]).prop("disabled", true)
            }

    }
    })
</script>

{{--Payment Create Ends--}}

@endsection