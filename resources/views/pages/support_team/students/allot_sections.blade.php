@extends('layouts.master')
@section('page_title', 'Allot Sections')
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

<form method="post" action="{{ route('students.allot_sections') }}">
    @csrf
    <div style="width: 60%;margin:auto">
        
        
        <div class="roll_no_div" style="margin-bottom: 30px;margin-top:30px">
             <label for="class" style="padding-right: 10px;white-space: nowrap;">Select Class: </label>
                            <select class="select form-control" id="class_id1" name="class_id1" required data-fouc data-placeholder="Choose..">
                                <option value=""></option>
                                @foreach($my_classes as $nal)
                            
                                <option id="{{$nal->id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->id}}">{{ $nal->name }}</option>
                              
                                @endforeach
                            </select>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="group_id">Group: <span class="text-danger">*</span></label>
                    <select data-placeholder="Choose..." required name="group" id="group_id" class="select-search form-control" required onchange="grpChange()">
                        <option value=""></option>
                        @foreach($groups as $nal)
                     
                        <option id="{{$nal->id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }}>{{ $nal->name }}</option>
                       
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="quota_id">Subject Combination: <span class="text-danger">*</span></label>
                    <select data-placeholder="Choose..." required name="combination" id="combination_id" class="select-search form-control" required>
                        <option value=""></option>
                        @foreach($combinations as $nal)
                    
                        <option id="{{$nal->group_id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->name}}">{{ $nal->name }}</option>
                       
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="quota_id">No. Of Sections: <span class="text-danger">*</span></label>
                    <input type="number" value="{{ old('number') }}" name="count" class="form-control" placeholder="No. "  required>
                </div>
            </div>
        </div>
        <div style="display: flex;justify-content: flex-end;">
            <button type="submit" class="btn btn-info add-stu">Allot Sections</button>
        </div>

</form>

<hr>
<form method="post" action="{{ route('students.remove_sections') }}">
    @csrf
    <div style="width: 60%;margin:auto">
        
        
        <div class="roll_no_div" style="margin-bottom: 30px;margin-top:30px">
             <label for="class" style="padding-right: 10px;white-space: nowrap;">Select Class: </label>
                            <select class="select form-control" id="class_id1" name="class_id1" required data-fouc data-placeholder="Choose..">
                                <option value=""></option>
                                @foreach($my_classes as $nal)
                              
                                <option id="{{$nal->id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->id}}">{{ $nal->name }}</option>
                               
                                @endforeach
                            </select>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="group_id">Group: <span class="text-danger">*</span></label>
                    <select data-placeholder="Choose..." required name="group" id="group_id1" class="select-search form-control" required onchange="grpChange1()">
                        <option value=""></option>
                        @foreach($groups as $nal)
                        
                        <option id="{{$nal->id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }}>{{ $nal->name }}</option>
                        
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="quota_id">Subject Combination: <span class="text-danger">*</span></label>
                    <select data-placeholder="Choose..." required name="combination" id="combination_id1" class="select-search form-control" required>
                        <option value=""></option>
                        @foreach($combinations as $nal)
                
                        <option id="{{$nal->group_id}}" {{ (old('nal_id') == $nal->id ? 'selected' : '') }} value="{{$nal->name}}">{{ $nal->name }}</option>
                        
                        @endforeach
                    </select>
                </div>
            </div>
           
        </div>
        <div style="display: flex;justify-content: flex-end;">
            <button type="submit" class="btn btn-info add-stu">Remove Alloted Sections</button>
        </div>

</form>
<script>
    comb_opts = $("#combination_id").children();

    function grpChange() {
        let grpId = $("#group_id :selected")[0].id;
        $("#combination_id").empty();
        for (let i = 0; i < comb_opts.length; i++) {
            if ($(comb_opts)[i].id == grpId) {
                $("#combination_id").append(comb_opts[i]);
            }
        }
    };
    function grpChange1() {
        let grpId = $("#group_id1 :selected")[0].id;
        $("#combination_id1").empty();
        for (let i = 0; i < comb_opts.length; i++) {
            if ($(comb_opts)[i].id == grpId) {
                $("#combination_id1").append(comb_opts[i]);
            }
        }
    };

    function inputChange() {
        if ($("#input_type").val() == "roll_no") {
            
            $("#roll_no").prop({
                disabled: false
            });
            $(".roll_no_div").css({
                display: "block"
            });
            $("#form_no").prop({
                disabled: true
            });
            // $(".roll_no_div").css({
            //     display: "none"
            // });
        } else {
            $("#form_no").prop({
                disabled: false
            });
            $(".form_no_div").css({
                display: "block"
            });
            $("#roll_no").prop({
                disabled: true
            });
            // $(".form_no_div").css({
            //     display: "none"
            // });
        }
    }
</script>

@endsection