@extends('layouts.master')
@section('page_title', 'Applicants Information ')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Applicants List</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-students" class="nav-link active" data-toggle="tab">All Eligible
                        Applicants</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-students">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Form No</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Group</th>
                                <th>Quota</th>
                                <th>Subject Combination</th>
                                <th>Obtained Marks</th>
                                <th>Total Marks</th>
                                <th>Board</th>
                                <th>Fee</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicants as $s)
                                @if ($s->status != 'admitted')
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $s->form_no }}</td>
                                        <td>{{ $s->name }}</td>
                                        <td>{{ $s->fathers_name }}</td>
                                        <td>{{ $s->group_name }}</td>
                                        <td>{{ $s->qouta_name }}</td>
                                        <td>{{ $s->subject_combination }}</td>
                                        <td>{{ $s->marks_obtained }}</td>
                                        <td>{{ $s->total_marks }}</td>
                                        <td>{{ $s->board }}</td>
                                        <td>
                                            <form method="post" action="{{ route('applicants.meritList.fee') }}">
                                                @csrf

                                                <button type="submit" class="btn btn-success gen-fee">Generate Fee
                                                    Challan</button>
                                                <input type="hidden" name="form_no" value="{{ $s->form_no }}">
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <div class="list-icons">
                                                <div class="dropdown">
                                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                        <i class="icon-menu9"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-left">
                                                        <a href="{{ route('applicants.list.show', Qs::hash($s->id)) }}"
                                                            class="dropdown-item"><i class="icon-eye"></i> View Profile</a>
                                                        @if (Qs::userIsTeamSA())
                                                            <a href="{{ route('applicants.list.showEdit', Qs::hash($s->id)) }}"
                                                                class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                                        @endif

                                                        {{-- Delete --}}
                                                        @if (Qs::userIsSuperAdmin())
                                                            <a id="{{ Qs::hash($s->id) }}" onclick="confirmDelete(this.id)"
                                                                href="#" class="dropdown-item"><i
                                                                    class="icon-trash"></i> Delete</a>
                                                            <form method="post" id="item-delete-{{ Qs::hash($s->id) }}"
                                                                action="{{ route('applicants.list.delete', Qs::hash($s->id)) }}"
                                                                class="hidden">@csrf @method('delete')</form>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>

    {{-- Student List Ends --}}

@endsection
