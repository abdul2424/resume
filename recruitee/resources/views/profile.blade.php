@include('header')




<section class="hero">
        <div class="main-heading">
            <h1>Welcome {{$users->name}}</h1>
        </div>
        <form method="post" action="/user_login">
    @csrf
        <div class="org-fields">
                <input type="email" name="email" class="form-control email" id="exampleInputEmail1" value="{{$users->email}}" aria-describedby="emailHelp">
            <button type="submit" class="update">Update</button>
        </div>
        </form>
    </section>


  <h1 class="job-heading" style="margin-top:20px;">Jobs Created :</h1>
  @if($users->status_paid==1)
       @foreach($total_jobs as $job)
    <div class="jobs">
        <div class="job-details">
            <div class="job-item">
                <span class="name">Title</span> 
                <span class="detail">{{ $job->tittle }}</span>
            </div>
            <div class="job-item">
                <span class="name">Category</span> 
                <span class="detail">{{ $job->job_category }}</span>
            </div>
            <div class="job-item">
                <span class="name">Sub-Category</span> 
                <span class="detail">{{ $job->job_sub_category }}</span>
            </div>
            <div class="job-item">
                <span class="name">Skills</span> 
                <span class="detail">{{ $job->skills }}</span>
            </div>
            <div class="job-item">
                <span class="name">Experience</span> 
                <span class="detail">{{ $job->experience }}</span>
            </div>
            <div class="job-item">
                <span class="name">Job Type</span> 
                <span class="detail">{{ $job->job_type }}</span>
            </div>
            <div class="job-item">
                <span class="name">Location</span> 
                <span class="detail">{{ $job->location }}</span>
            </div>
            
            <div class="job-item">
                @if(count($job->meetings) > 0)
                    <button type="button" class="name" style="margin-top:-10px;" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $job->id }}">
                        View Meetings
                    </button>
                @endif

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $job->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $job->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel{{ $job->id }}">View Meetings</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if(count($job->meetings) > 0)
                                    <ul>
                                        @foreach($job->meetings as $meeting)
                                            <li>
                                <span><b>Candidate Email:</b> {{$meeting->candidate_email}}</span>
                                <div style="width: 300px; overflow: auto;">
                                    <a href="{{ $meeting->host_url }}" target="_blank">{{ $meeting->host_url }}</a>
                                </div>
                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    No meetings found.
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

        @else
        <button><a class="btn ml-2 update" href="/organization" style="text-decoration:none;color:#37756A;font-weight:bold;">Create Jobs</a></button>
        @endif





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>



