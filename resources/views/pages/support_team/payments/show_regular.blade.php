@extends('layouts.master')
@section('page_title', 'View & Edit Fees Particulars')
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
<div class="card" style="width: 80%;margin: auto;text-align: center;">
    <div class="card-header">
        <h3 class="card-title">Regular Fees Particulars</h3>
    </div>
    <div class="card-body">

        <div class="tab-content">
            <div class="tab-pane fade show active" id="all-students">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Category</th>
                            <th>Fee Particular</th>
                            <th>Amount</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($particulars as $p)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                {{$p->fee_category}}
                            </td>
                            <td>
                                {{$p->fee_particular}}
                            </td>
                            <form id="updateForm" method="POST" action="{{route('fees.particulars.edit')}}">
                                @csrf
                                <td>
                                    <input type="number" id="{{$p->id}}" name="amount" value="{{$p->amount}}">
                                </td>
                                <td>
                                    <button type="submit" class="dropdown-item"><i class="icon-pencil"></i> Update</button>
                                    <input type="hidden" name="id" value="{{$p->id}}">

                                </td>
                            </form>
                            <td>
                                <form method="POST" action="{{route('fees.particulars.delete')}}">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="icon-trash"></i> Delete</button>
                                    <input type="hidden" name="del_id" value="{{$p->id}}">
                                </form>

                            </td>
                        </tr>
                        <?php
                        $i++;
                        ?>
                        @endforeach
                        </form>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<script>
    // toggle values inputs
    let allAmounts = $("input[type='number']");
    for (let i = 0; i < allAmounts.length; i++) {
        $(allAmounts[i]).on("change", () => {
            console.log($(allAmounts[i]).val())
        })
    }
    var count_chk = $('[type=checkbox]');
    var value = $('[type=number]');
    var hid = $('[type=hidden]');
    $(".chk_part").on("change", () => {
        for (let j = 0; j < count_chk.length; j++) {
            if ($(count_chk[j]).is(":checked")) {
                console.log(hid);
                $(hid[j + 2]).prop("disabled", false)
                $(value[j]).prop("disabled", false)
            } else {
                $(hid[j + 2]).prop("disabled", true)
                $(value[j]).prop("disabled", true)
            }

        }
    })
</script>

{{--Payment Create Ends--}}

@endsection