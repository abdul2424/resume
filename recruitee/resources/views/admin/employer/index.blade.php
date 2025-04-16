@extends('admin.dashboard.layout')
@section('content')

<div class="container-fluid dashboard-content">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Employer Jobs</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Jobs Table</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Job Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employers as $job)
                                <tr>
                                    <td>{{ $job->tittle }}</td>
                                    <td>{{ $job->location }}</td>
                                    <td>{{ $job->job_category }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#jobModal{{ $job->id }}">
                                            Details
                                        </button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="jobModal{{ $job->id }}" tabindex="-1" role="dialog" aria-labelledby="jobModalLabel{{ $job->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="jobModalLabel{{ $job->id }}">Job Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Title:</strong> {{ $job->tittle }}</p>
                                                <p><strong>Location:</strong> {{ $job->location }}</p>
                                                <p><strong>Job Category:</strong> {{ $job->job_category }}</p>
                                                <p><strong>Sub Category:</strong> {{ $job->job_sub_category }}</p>
                                                <p><strong>Description:</strong> {{ $job->job_desc }}</p>
                                                <p><strong>Job Type:</strong> {{ $job->job_type }}</p>
                                                <p><strong>Marital Status:</strong> {{ $job->marital_status == 0 ? 'Single' : 'Married' }}</p>
                                                <p><strong>Experience:</strong> {{ $job->experience }} years</p>
                                                <p><strong>Salary:</strong> {{ $job->salary }}</p>
                                                <p><strong>Discipline:</strong> {{ $job->discipline }}</p>
                                                <p><strong>Discipline Category:</strong> {{ $job->discipline_category }}</p>
                                                <p><strong>Skills:</strong> {{ $job->skills }}</p>
                                                <p><strong>Created At:</strong> {{ $job->created_at }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
