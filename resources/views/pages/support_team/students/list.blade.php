@extends('layouts.master')
@section('page_title', 'Student Information - '.$my_class->name)
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Students List</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-students" class="nav-link active" data-toggle="tab">All {{ $my_class->name }} Students</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-students">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Roll No</th>
                            <th>Section</th>
                            <th>Contact No.</th>
                            <th>Father Name</th>
                            <th>Father Contact</th>
                            <th>Quota</th>

                            <th>Subject Combination</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $s)
                            @if($s->status == null || $s->status == 'active')
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ $s->photo }}" alt="photo"></td>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->roll_no }}</td>
                                <td>{{ $s->section}}</td>
                                <td>{{ $s->phone}}</td>
                                @foreach($parent as $p)
                                @if($p->student_id == $s->id)
                                <td>{{ $p->name}}</td>
                                <td>{{ $p->phone}}</td>
                                @endif
                                @endforeach
                                <td>{{ $s->qouta_name}}</td>
                                <td>{{ $s->subject_combination }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-left">
                                               
                                                <a href="{{ route('students.show', Qs::hash($s->id)) }}" class="dropdown-item"><i class="icon-eye"></i> View Profile</a>
                                                @if(Qs::userIsTeamSA())
                                                    <a href="{{ route('students.edit', Qs::hash($s->id)) }}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                                    @endif

                                                {{--Delete--}}
                                                @if(Qs::userIsSuperAdmin())
                                                    <a id="{{ Qs::hash($s->id) }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                                    <form method="post" id="item-delete-{{ Qs::hash($s->id) }}" action="{{ route('students.destroy', Qs::hash($s->id)) }}" class="hidden">@csrf @method('delete')</form>
                                                    <form action="{{route('students.generateRollNoSlip')}}" method="post">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item" ><i class="icon-eye"></i> Roll No. Slip</button>
                                                        <input type="hidden" name="id" value="{{$s->id}}">
                                                    </form>
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

    {{--Student List Ends--}}

@endsection
