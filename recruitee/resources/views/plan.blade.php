@include('header')


<div class="main my-4">
    <h1>Feature-rich plans with upfront pricing
    </h1>
    <span>Over 27,000 companies have hired 1.5 million candidates with The Recruiters. Manage your entire process, from sourcing to employee onboarding and management with the world’s most complete recruiting software.</span>
</div>
@if($users)
@if($users->type=='employer')
<div class="main-head" ><h2>Organization's Servive charges <span>Plan</span></h2></div>
<section class="pricing">
    
        <div class="card-wrapper">
        <div class="card-header">
            <img src="/storage/media/work.webp" alt="">
            <h2>STARTER</h2>
        </div>
        <div class="card-detail">
            <p> <span class="fas fa-check check"></span> <b>1</b> full user</p>
            <p> <span class="fas fa-check check"></span> <b>5</b> contact per clients</p>
            <p> <span class="fas fa-times nocheck"></span>  Lorem ipsum dolor</p>
            <p> <span class="fas fa-times nocheck"></span>  Lorem ipsum dolor</p>
        </div>


        <div class="card-price">
            <p><sup>$</sup>10 <sub>/month</sub></p>
        </div>
        @if($users && $users->plan_id === 1)
        <button class="card-button" disabled>Activated</button>
        @else
        <button class="card-button"><a href="/stripe/1" style="text-decoration:none;color:white">I WANT IT</a></button>
        @endif
        </div>

        <div class="card-wrapper">
            <div class="card-header">
                <img src="/storage/media/work.webp" alt="" srcset="">
                <h2>PROFESSIONAL</h2>
            </div>
            <div class="card-detail">
                <p> <span class="fas fa-check check"></span> <b>5</b> full user</p>
                <p> <span class="fas fa-check check"></span> <b>20</b> contact per clients</p>
                <p> <span class="fas fa-times nocheck"></span>  Lorem ipsum dolor</p>
                <p> <span class="fas fa-times nocheck"></span>  Lorem ipsum dolor</p>
            </div>
            <div class="card-price">
            <p><sup>$</sup>25<sub>/month</sub></p>
        </div>
        @if($users && $users->plan_id === 2)
        <button class="card-button" disabled>Activated</button>
        @else
        <button class="card-button"><a href="/stripe/2" style="text-decoration:none;color:white">I WANT IT</a></button>
        @endif

        </div>


        <div class="card-wrapper">
            <div class="card-header">
                <img src="/storage/media/work.webp" alt="" srcset="">
                <h2>BUSINESS</h2>
            </div>
            <div class="card-detail">
                <p> <span class="fas fa-check check"></span> <b>5</b> full user</p>
                <p> <span class="fas fa-check check"></span> <b>20</b> contact per clients</p>
                <p> <span class="fas fa-check check"></span>  Lorem ipsum dolor</p>
                <p> <span class="fas fa-check check"></span>  Lorem ipsum dolor</p>
            </div>
            <div class="card-price">
            <p><sup>$</sup>45<sub>/month</sub></p>
        </div>
        @if($users && $users->plan_id === 3)
        <button class="card-button" disabled>Activated</button>
        @else
        <button class="card-button"><a href="/stripe/3" style="text-decoration:none;color:white">I WANT IT</a></button>
        @endif
        </div>
</section>




@else
<!-- <div class="main-head" ><h2>Registration Fee for job seekers <span>Plan</span></h2></div>
<section class="pricing">
    
        <div class="card-wrapper">
        <div class="card-header">
            <img src="/storage/media/work.webp" alt="">
            <h2>STARTER</h2>
        </div>
        <div class="card-detail">
            <p> <span class="fas fa-check check"></span> <b>1</b> full user</p>
            <p> <span class="fas fa-check check"></span> <b>5</b> contact per clients</p>
            <p> <span class="fas fa-times nocheck"></span>  Lorem ipsum dolor</p>
            <p> <span class="fas fa-times nocheck"></span>  Lorem ipsum dolor</p>
        </div>


                <div class="card-price">
                    <p><sup>$</sup>10 <sub>/month</sub></p>
                </div>
                @if($charges && $charges->id != null && $charges->name=='STARTER')
                <button type="button" class="btn btn-secondary btn-lg" disabled>Activated</button>
                @else
                <button class="card-button"><a href="/stripe/4" style="text-decoration:none;color:white">I WANT IT</a></button>
                @endif
        </div>
        <div class="card-wrapper">
            <div class="card-header">
                <img src="/storage/media/work.webp" alt="" srcset="">
                <h2>PROFESSIONAL</h2>
            </div>
            <div class="card-detail">
                <p> <span class="fas fa-check check"></span> <b>5</b> full user</p>
                <p> <span class="fas fa-check check"></span> <b>20</b> contact per clients</p>
                <p> <span class="fas fa-times nocheck"></span>  Lorem ipsum dolor</p>
                <p> <span class="fas fa-times nocheck"></span>  Lorem ipsum dolor</p>
            </div>
            <div class="card-price">
            <p><sup>$</sup>25<sub>/month</sub></p>
            </div>
            @if($charges && $charges->id != null && $charges->name=='PROFESSIONAL')
            <button class="card-button" disabled>Activated</button>
            @else
            <button class="card-button"><a href="/stripe/5" style="text-decoration:none;color:white">I WANT IT</a></button>
            @endif
        </div>


    <div class="card-wrapper">
        <div class="card-header">
            <img src="/storage/media/work.webp" alt="" srcset="">
            <h2>BUSINESS</h2>
        </div>
        <div class="card-detail">
            <p> <span class="fas fa-check check"></span> <b>5</b> full user</p>
            <p> <span class="fas fa-check check"></span> <b>20</b> contact per clients</p>
            <p> <span class="fas fa-check check"></span>  Lorem ipsum dolor</p>
            <p> <span class="fas fa-check check"></span>  Lorem ipsum dolor</p>
        </div>
        <div class="card-price">
        <p><sup>$</sup>45<sub>/month</sub></p>
        </div>
            @if($charges && $charges->id != null && $charges->name=='BUSINESS')
            <button class="card-button" disabled>Activated</button>
            @else
            <button class="card-button"><a href="/stripe/6" style="text-decoration:none;color:white">I WANT IT</a></button>
            @endif
    </div>
</section> -->
<p style="text-align:center;">No Registration Fee for job Seekers</p>
@endif
@endif





<div class="third-sec">


    <div class="left-sec">
       
        <div class="center">
            <div class="inner-circle"></div>
            
            <p>95%</p>
          </div>
        
         
        <div class="left-head"><p>of GetApp reviewers <br> recommend  Recruiters  <br>to a friend or colleague</p></div>
    </div>


    <div class="boxes">
        <div class="right-box"><span>“All your hiring needs in one place!”</span>
            <hr style="color: gray">
            <div class="wrap">
                <div class="icon"><img src="/storage/media/captera icon.png" alt=""></div>
                <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
            </div>
        </div>     
        <div class="right-box"><span>“All your hiring needs in one place!”</span>
            <hr>
            <div class="wrap">
                <div class="icon"><img src="/storage/media/get app icon.png" alt=""></div>
                <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
            </div>
        </div>     
        <div class="right-box"><span>“All your hiring needs in one place!”</span>
            <hr>
            <div class="wrap">
                <div class="icon"><img src="/storage/media/software advice icon.png" alt=""></div>
                <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
            </div>
        </div>     
    </div>
</div>










<footer class="footer">
    <div class="container-3">
        <div class="row">
            <div class="footer-col">
                <h4>Company</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">Why choose us?</a></li>
                    </ul>
                
            </div>
            <div class="footer-col">
                <h4>Get help</h4>
                    <ul><li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                    </ul>
                
            </div>
            <div class="footer-col">
                <h4>Online shop</h4>
                    <ul>
                        <li><a href="#">Test</a></li>
                        <li><a href="#">Post A Job</a></li>
                        <li><a href="#">Find a Job</a></li>
                        <li><a href="#">Status</a></li>
                    </ul>
                
            </div>
            <div class="footer-col">
                <h4>Follow us</h4>
                <div class="social-links">
                   <a href="#"><i class="fab fa-facebook"></i></a>
                   <a href="#"><i class="fab fa-instagram"></i></a>
                   <a href="#"><i class="fab fa-twitter"></i></a>
                   <a href="#"><i class="fab fa-linkedin"></i></a>
                   </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.card-button').click(function() {
            var planId = $(this).data('plan-id');
            $.ajax({
                url: '/your-route-url',
                method: 'POST',
                data: {
                    plan_id: planId
                },
                success: function(response) {
                    // Handle success response
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

