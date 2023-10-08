@extends('layouts.master')
@section('page_title', 'Student Lists Options')
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
        <h6 class="card-title">Generate Section List</h6>
        {!! Qs::getPanelOptions() !!}
    </div>


    <div class="card-body">
        <div class="row">
            <form class="col-md-12" method="POST" action="{{route('students.section_list.generate')}}">
                @csrf
                <fieldset>
                    <div class="row">
                        <div class="form-group col-md-4" style="display: flex;align-items: center;">
                            <label for="class" style="padding-right: 10px;white-space: nowrap;">Select Class: </label>
                            <select class="select form-control" id="class_id2" name="class" required data-fouc data-placeholder="Choose..">
                                <option value=""></option>
                                @foreach($my_classes as $nal)
                                <option id="{{$nal->id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->id}}">{{ $nal->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-5" style="display: flex;align-items: center;">
                            <label for="stu-cat" style="padding-right: 10px;white-space: nowrap;">Combination: </label>
                            <select id="combination_id2" class="select form-control" id="stu-cat" name="combination" required data-fouc data-placeholder="Choose..">
                                <option value=""></option>
                                @foreach($combs as $nal)
                                <option id="{{$nal->my_class_id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->name}}">{{ $nal->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                     <div class="col-md-3" >
                         <div class="form-group">
                                <label>Section:</label>
                                <input value="{{ old('section') }}" required type="text" name="section" class="form-control" placeholder="Section" style="border: solid #ddd 1px">
                            </div>
                        </div>
                    <button type="submit" class="btn btn-success">Generate</button>
            </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Generate Class List</h6>
        {!! Qs::getPanelOptions() !!}
    </div>


    <div class="card-body">
        <div class="row">
            <form class="col-md-12" method="POST" action="{{route('students.class_list.generate')}}">
                @csrf
                <fieldset>
                    <div class="row">
                        <div class="form-group col-md-7" style="display: flex;align-items: center;">
                            <label for="class" style="padding-right: 10px;white-space: nowrap;">Select Class: </label>
                            <select class="select form-control" id="class_id2" name="class" required data-fouc data-placeholder="Choose..">
                                <option value=""></option>
                                @foreach($my_classes as $nal)
                                <option id="{{$nal->id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->id}}">{{ $nal->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Generate</button>
            </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Generate Combination List</h6>
        {!! Qs::getPanelOptions() !!}
    </div>


    <div class="card-body">
        <div class="row">
            <form class="col-md-12" method="POST" action="{{route('students.combination_list.generate')}}">
                @csrf
                <fieldset>
                    <div class="row">
                        <div class="form-group col-md-4" style="display: flex;align-items: center;">
                            <label for="class" style="padding-right: 10px;white-space: nowrap;">Select Class: </label>
                            <select class="select form-control" id="class_id2" name="class" required data-fouc data-placeholder="Choose..">
                                <option value=""></option>
                                @foreach($my_classes as $nal)
                                <option id="{{$nal->id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->id}}">{{ $nal->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-5" style="display: flex;align-items: center;">
                            <label for="stu-cat" style="padding-right: 10px;white-space: nowrap;">Combination: </label>
                            <select id="combination_id2" class="select form-control" id="stu-cat" name="combination" required data-fouc data-placeholder="Choose..">
                                <option value=""></option>
                                @foreach($combs as $nal)
                                <option id="{{$nal->my_class_id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->name}}">{{ $nal->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                     
                    <button type="submit" class="btn btn-primary">Generate</button>
            </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Generate Group List</h6>
        {!! Qs::getPanelOptions() !!}
    </div>


    <div class="card-body">
        <div class="row">
            <form class="col-md-12" method="POST" action="{{route('students.group_list.generate')}}">
                @csrf
                <fieldset>
                    <div class="row">
                        <div class="form-group col-md-4" style="display: flex;align-items: center;">
                            <label for="class" style="padding-right: 10px;white-space: nowrap;">Select Group: </label>
                            <select class="select form-control" id="class_id2" name="group" required data-fouc data-placeholder="Choose..">
                                <option value=""></option>
                                @foreach($groups as $nal)
                                <option id="{{$nal->id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->name}}">{{ $nal->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                     <div class="col-md-3" >
                         <div class="form-group">
                                <label>Section:</label>
                                <input value="{{ old('section') }}" required type="text" name="section" class="form-control" placeholder="Section" style="border: solid #ddd 1px">
                            </div>
                        </div>
                    <button type="submit" class="btn btn-warning">Generate</button>
            </form>
        </div>
    </div>
</div>

<script>
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
</script>



{{--Payment Create Ends--}}

@endsection