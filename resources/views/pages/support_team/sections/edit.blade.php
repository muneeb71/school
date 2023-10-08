@extends('layouts.master')
@section('page_title', 'Edit Section of '.$s->my_class->name)
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Section of {{ $s->my_class->name }}</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form class="" method="post" action="{{ route('sections.update', $s->id) }}">
                        @csrf @method('PUT')
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="name" value="{{ $s->name }}" required type="text" class="form-control" placeholder="Name of Class">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="my_class_id" class="col-lg-3 col-form-label font-weight-semibold">Class </label>
                            <div class="col-lg-9">
                                <input class="form-control" id="my_class_id" disabled="disabled" type="text" value="{{ $s->my_class->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="strength" class="col-lg-3 col-form-label font-weight-semibold">Strength</label>
                            <div class="col-lg-9">
                            <input class="form-control" id="strength" type="text" value="{{ $s->strength }}">
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Section Edit Ends--}}

@endsection
