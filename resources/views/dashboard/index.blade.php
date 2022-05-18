@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="">
            <div class="mt-3 mb-4 d-flex justify-content-between">
                <h2 class=" pb-2">Pragyotsav 2022 Admin Panel</h2>
                <div>
                    <form id="logout_form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-icon btn-round btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"/>
                                <path d="M7 12h14l-3 -3m0 6l3 -3"/>
                            </svg>
                        </button>
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-primary card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Rc Robo Racing</p>
                                        <h4 class="card-title">{{ $rc_robo_racing }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-info card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Drone Racing</p>
                                        <h4 class="card-title">{{ $drone_racing }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-success card-round">
                        <div class="card-body ">
                            <div class="row">

                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Robo war</p>
                                        <h4 class="card-title">{{ $robo_war }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-secondary card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Hardware Assembling</p>
                                        <h4 class="card-title">{{ $hardware_assembling }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-default card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Style Soldering</p>
                                        <h4 class="card-title">{{ $style_soldering }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-warning card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Line Follower Robot</p>
                                        <h4 class="card-title">{{ $line_follower }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-primary card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Paper Presentation</p>
                                        <h4 class="card-title">{{ $paper_prsentation }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-secondary card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Robo Soccer</p>
                                        <h4 class="card-title">{{ $robo_soccer }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-secondary card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">3D Printing Workshop</p>
                                        <h4 class="card-title">{{ $printing_workshop }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-secondary card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">VR Workshop</p>
                                        <h4 class="card-title">{{ $vr_workshop }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-secondary card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">AI Workshop</p>
                                        <h4 class="card-title">{{ $ai_workshop }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-secondary card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">All workshops</p>
                                        <h4 class="card-title">{{ $all_workshop }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-info card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Total Registration</p>
                                        <h4 class="card-title">{{ count($teams) }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-success card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Presentees</p>
                                        <h4 class="card-title">{{ $presentees }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-danger card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Absentees</p>
                                        <h4 class="card-title">{{ $absentees }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Event Registered Users</h4>
                    <a href="{{ route('export') }}" class="btn btn-secondary">
                        Export
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display  table stripe row-border order-column table-hover" style="width: 150%;">
                            <thead>
                            <tr>
                                <th>REG ID</th>
                                <th>Transaction</th>
                                <th>Leader Name</th>
                                <th>Event</th>
                                <th>Email</th>
                                <th>Year</th>
                                <th>Department</th>
                                <th>College</th>
                                <th>Contact</th>
                                <th>Members</th>
                                <th>Attendance</th>
                                <th>Registered On</th>
                            </tr>
                            </thead>

                            <tbody>
                            @forelse($teams as $team)
                                <tr>
                                    <td>{{ $team->reg_id }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal-{{ $team->id }}">
                                            View Transaction
                                        </button>
                                        <div class="modal fade" id="exampleModal-{{ $team->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Payment Receipt</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="text-center">
                                                            <img src="{{ asset('storage/'.$team->image) }}" class="rounded img-thumbnail" alt="...">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $team->team_lead }}</td>
                                    <td>{{ $team->event_name }}</td>
                                    <td>{{ $team->team_lead_email }}</td>
                                    <td>{{ $team->team_lead_year }}</td>
                                    <td>{{ $team->team_lead_department}}</td>
                                    <td>{{ $team->team_lead_college }}</td>
                                    <td>{{ $team->team_lead_phone }}</td>
                                    <td>
                                        <span>{{ $team->member_1}}</span>,
                                        <span>{{ $team->member_2 }}</span>,
                                        <span>{{ $team->member_3 }}</span>
                                    </td>
                                    <td>
                                        @if($team->attendance == 0)
                                            <form action="{{ route('change_status',$team->reg_id) }}" method="post">
                                                @csrf
                                                <input type="hidden" value="1" name="attendance">
                                                <button onclick="this.disabled=true;this.form.submit()" type="submit" class="btn btn-danger btn-sm">
                                                    Absent
                                                </button>
                                            </form>
                                        @else
                                            <form action="{{ route('change_status',$team->reg_id) }}" method="post">
                                                @csrf
                                                <input type="hidden" value="0" name="attendance">
                                                <button onclick="this.disabled=true;this.form.submit()" type="submit" class="btn btn-success btn-sm">
                                                    Present
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                    <td>{{ $team->created_at->format('d M Y') }}</td>
                                </tr>
                            @empty
                                <div class="alert alert-primary" role="alert">
                                    NO records found
                                </div>
                            @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection