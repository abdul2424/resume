<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap')">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap');
  </style>
    
    <title>Contact us</title>
    <style>
       *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
    }
.navigation{
    display: none;
    max-width: 250px;
    position: relative;
    top: 130px;
    background-color: white;
    color: #37756A;
    border-radius: 8px;
}
.navigation > a{
    max-width: 250px;
    display: block;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: #37756A;
    text-align: center;
}
.navigation > a:hover{
    background-color: #37756A;
    color: white;
}
.main-container{
    box-sizing: border-box;
   /* height: 86px; */
    max-width: 100%;
    background-color: #37756A;

   
}
header{
    max-width: 80%;
    margin: auto;
    /* height: 70px; */
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.logo{
    font-weight: bold;
    font-size: larger;
    color: white;
    display: flex;
    flex-direction: row;
    align-items: center;
}
.log{
    display: flex;
    flex-direction: row;
}
.first-alp{
    padding: 10px;
    color: white;
    border: 2px solid  white;
    font-weight: bold;
}
.sec-alp{
    padding: 10px;
    background-color: white;
    color: #37756A;
    font-weight: bold;
}
.icon{
    display: none;
}
.item{
    text-decoration: none;
    color: white;
    padding: 20px;
    border-radius: 8px;
}
.btn{
    width: 100px;
    padding: 15px;
    outline: none;
    font-size: larger;
    font-weight: bold;
    color: #37756A;
    border: none;
    border-radius: 4px;
    text-transform: capitalize;
    text-align: center;
    background-color: white;
}
.log{
    letter-spacing: 2px;
    font-family: Yellowtail;
    padding: 20px;
}
.btn-section a{
    text-decoration: none;
    color: #37756A;
}
@media only screen and (min-width:100px) and (max-width:1200px) {
    nav{
        display: none;
    }
    .btn-section > .btn{
        display: none;
    }
    .icon{
        display: block;
        font-size: 30px;
        margin-right: 15px;
        color: white;
    }
}
@media only screen and (min-width:1200px) {
    .icon{
        display: none;
    }
}

@media only screen and (max-width:660px) {
    body{
        margin: 0%;
        padding: 0%;
    }
    .main-container{
        max-width: 100%;
        margin: 0%;
        padding: 0%;
        /* padding-bottom: 50px; */
        box-sizing: border-box;
        background-color: #37756A;
    }
    header{
        max-width: 95%;
        margin: auto;
    }
    nav{
        display: none;
    }
    .btn-section > .btn{
        display: none;
    }
    .icon{
        display: block;
        font-size: 30px;
        margin-right: 15px;
        color: white;
    }}
    @media only screen and (min-width:660px) {
    body{
        margin: 0%;
        padding: 0%;
    }
    .main-container{
        max-width: 100%;
        margin: 0%;
        padding: 0%;
        /* padding-bottom: 50px; */
        box-sizing: border-box;
        background-color: #37756A;
    }
    header{
        max-width: 95%;
        margin: auto;
    }
    nav{
        display: none;
    }
    .btn-section > .btn{
        display: none;
    }
    .icon{
        display: block;
        font-size: 30px;
        margin-right: 15px;
        color: white;
    }}
    @media only screen and (min-width:768px) {
    body{
        margin: 0%;
        padding: 0%;
    }
    header{
        max-width: 90%;
        margin: auto;
    }
    nav{
        display: none;
    }
    .btn-section > .btn{
        display: none;
    }
    .icon{
        display: inline-block;
        font-size: 30px;
        margin-right: 20px;
    }}
    @media only screen and (min-width:992px) {
    body{
        margin: 0%;
        padding: 0%;
    }
    .main-container{
        max-width: 100%;
        margin: 0%;
        padding: 0%;
        /* padding-bottom: 80px; */
        box-sizing: border-box;
        background-color: #37756A;
    }
    header{
        max-width: 85%;
        margin: auto;
    }
    nav{
        display: none;
    }
    .btn-section > .btn{
        display: none;
    }
    .icon{
        display: inline-block;
        font-size: 30px;
        margin-right: 20px;
    }}
    @media only screen and (min-width:1200px) {
    body{
        margin: 0%;
        padding: 0%;
    }
    .main-container{
        max-width: 100%;
        margin: 0%;
        padding: 0%;
        /* padding-bottom: 80px; */
        box-sizing: border-box;
        background-color: #37756A;
    }
    header{
        max-width: 85%;
        margin: auto;
    }
    nav{
        display: inline-block;
    }
    .btn-section > .btn{
        display: inline-block;
    }
    .icon{
        display: none;
        font-size: 30px;
        margin-right: 20px;
    }}
    @media only screen and (min-width:100px) and (max-width:1200px) {
    nav{
        display: none;
    }
    .btn-section > .btn{
        display: none;
    }
    .icon{
        display: block;
        font-size: 30px;
        margin-right: 15px;
        color: white;
    }
}
@media only screen and (min-width:1200px) {
    .icon{
        display: none;
    }
}
.contact-bg{
    height: 60vh;
    
    text-align: center;
    background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url('./images/contact\ bg.jpg');
    background-position: 50% 100%;
    background-repeat: no-repeat;
    background-size: cover;
    /* background-attachment: fixed; */
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}


.contact-bg h3{
    font-size: 1.3rem;
    font-weight: 400;
}
.contact-bg h2{
    font-size: 3rem;
    text-transform: uppercase;
    padding: 0.4rem 0;
    letter-spacing: 1px;
}
.line div{
   margin: 0 0.2rem;
}
.line div:nth-child(1),
.line div:nth-child(3){
    height: 5px;
    width: 70px;
    background: white;
    border-radius: 5px;
}
.line{
    display: flex;
    align-items: center;
}
.line div:nth-child(2){
    width: 10px;
    height: 10px;
    background: white;
    border-radius: 50%;
}
.text{
    font-weight: 300;
    opacity: 0.8;
}
.contact-bg .text{
    margin: 1.6rem 0;
     
}
.contact-body{
    max-width: 1320px;
    margin: 0 auto;
    padding: 1rem 3rem;
}
.contact-info{
    margin: 2rem 0;
    text-align: center;
    padding: 2rem 0;
}
.contact-info span{
    display: block;

}
.contact-info div{
    margin: 0.8rem 0;
    padding: 1rem;
}
.contact-info span .fas{
    font-size: 2.5rem;
    padding-bottom: 0.9rem;
    color: #37756A;
}
.contact-info div span:nth-child(2){
    font-weight: 500;
    font-size: 1.1rem;
}
.contact-info text{
    padding-top: 0.4rem;
}
.contact-form{
    
    padding: 2rem 4rem;
    border-top: 1px solid #c7c7c7;
}
.contact-form form{
    padding-bottom: 1rem;
    /* margin-left: 40px; */
}
.form-control{
    width: 100%;
    border: 1.5px solid #c7c7c7;
    border-radius: 5px;
    padding: 0.7rem;
    margin: 0.6rem 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 1rem;
    outline: 0;
}
.form-control:focus{
    box-shadow: 0 0 6px -3px rgba(48, 48, 48, 1);
}
.contact-form form div{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    column-gap: 0.6rem;
}
.send-btn{
    
    font-family:'Open Sans', sans-serif;
    font-size: 1rem;
    text-transform: uppercase;
    background: #37756A;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    padding: 0.7rem 1.4rem;
    cursor: pointer;
    transition: all 0.4 ease;
}
.send-btn:hover{
    opacity: 0.9;
}
.contact-form > div{
    margin: 0 auto;
    text-align: center;

}


  .contact-form > div img{
    width: 70%;
    
  }
  @media only screen and (max-width:660px){
    .contact-form div img{
        
       display: none;
      
    }
    .contact-form{
    padding: 1rem 2rem;
    border-top: 1px solid #c7c7c7;
}
.send-btn{
    font-family:'Open Sans', sans-serif;
    font-size: 1rem;
    text-transform: uppercase;
    background: #37756A;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    padding: 0.5rem 1.2rem;
    cursor: pointer;
    transition: all 0.4 ease;
}
  }
  @media screen and (min-width:768px){
    .contact-bg .text{
        width: 70%;
        margin-left: auto;
        margin-right: auto;
    }
    .contact-info{
        display: grid;
        grid-template-columns: (2, 1fr);

    }
  }
  @media screen and (min-width:992px) {
    .contact-bg .text{
        width: 50%;

    }
    .contact-form{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
    }
  }
  @media screen and (min-width:1200px) {
    .contact-info{
        grid-template-columns: repeat(4, 1fr);
    }
  }
  


.container-3{
	width: 100%;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #37756A;
    padding: 60px 0;
}
.footer-col{
   width: 25%;
   padding: 0 70px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #ffffff;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: white;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
    /* padding: 0 40px; */
}
}

</style>
</head>
<body>
    <section class="main-container">
        <header>
            <div class="logo">
            <span class="log">
                <span class="first-alp" id="first-alp">THE</span>
                <span class="sec-alp">NexHire</span>
            </span>
                <nav id="horizontal-nav">
                <a href="/" class="item">Home</a>
                    <a href="/about" class="item">About Us</a>
                    <a href="/contact" class="item">Contact Us</a>
                    <a href="/customer" class="item">Our Customers</a>
                    <a href="/plan" class="item">Our Plans</a>
                </nav>
            </div>
            <div class="btn-section">
                <button class="btn" id="login"><a href="./Login.html" >Login</a></button>
                <button class="btn" id="signup"><a href="./Signup.html" >Signup</a></button>
                <a href="javascript:void(0);" class="icon" id="icon">
                    <i class="fa fa-bars"></i>
                </a>
                
            </div>
        </header>
    </div>
    </section>
        <section class="test-section">
            <div class="contact-bg">
                <h3>Get i<div class="navigation" id="vertical-nav">
                    <a href="./index.html" class="item">Home</a>
                    <a href="./Aboutus.html" class="item">About Us</a>
                    <a href="./Contact.html" class="item">Contact Us</a>
                    <a href="./customers.html" class="item">Our Customers</a>
                    <a href="./Login.html" class="item">Login</a>
                    <a href="./Signup.html" class="item">Signup</a>
                </div>n Touch with Us</h3>
                <h2>Contact us</h2>
                <div class="line">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <p class="text">We value your feedback and are here to assist you with any questions or concerns. Whether you need help navigating our platform, have inquiries about our services, or want to provide feedback, our dedicated support team is ready to assist you. Please don't hesitate to reach out to us through the contact form below, via email, or by phone.
                </p>
            </div>
            <div class="contact-body">
                <div class="contact-info">
                    <div>
                    <span><i class="fas fa-mobile-alt"></i></span>
                    <span>Phone No.</span>
                    <span class="text">1-2234-654322-2</span>
                    </div>
                    <div>
                        <span><i class="fas fa-envelope-open"></i></span>
                        <span>Email</span>
                        <span class="text">mail@company.com</span>
                        </div>
                    <div>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <span>Address</span>
                            <span class="text">2939 Patric street, Victoria town, Sargodha</span>
                            </div>
                            <div>
                                <span><i class="fas fa-clock"></i></span>
                                <span>Opening Hours</span>
                                <span class="text">Monday - Friday <br>(9:00 AM to 5:00 PM)</span>
                            </div>
                 </div>
                <div class="contact-form">
                    <form action="">
                        <div>
                            <input type="text" class="form-control" placeholder="First name">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                        <textarea rows="5" class="form-control" placeholder="Message" ></textarea>
                        <input type="submit" class="send-btn" value="Send">
                    </form>
                    <div>
                        <img src="/storage/media/exp.jpg" alt="">
                    </div>
                </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42361.23699060138!2d-123.40042231804989!3d48.426258703820416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548f738bddb06171%3A0x38e8f3741ebb48ed!2sVictoria%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1710573402461!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
     </section>

<footer class="footer">
    <div class="container-3">
        <div class="row">
            <div class="footer-col">
                <h4>Company</h4>
                    <ul>
                        <li><a href="./Aboutus.html">About us</a></li>
                        <li><a href="./Contact.html">Contact us</a></li>
                        <li><a href="./customers.html">Customers</a></li>
                        
                    </ul>
                
            </div>
            <div class="footer-col">
                <h4>Resources</h4>
                    <ul><li><a href="./Contact.html">Join us</a></li>
                        <li><a href="#">Candidate</a></li>
                        <li><a href="#">Employers</a></li>
                       
                    </ul>
                
            </div>
            <div class="footer-col">
                <h4>Platform</h4>
                    <ul>
                        <li><a href="./Pricing.html">Pricing</a></li>
                        <li><a href="./Pricing.html">Post A Job</a></li>
                        <li><a href="./Pricing.html">Find a Job</a></li>
                       
                    </ul>
                
            </div>
            <div class="footer-col">
                <h4>Follow us</h4>
                <div class="social-links">
                   <a href="#"><i class="fab fa-facebook"></i></a>
                   <a href="#"><i class="fab fa-instagram"></i></a>
                   <a href="#"><i class="fab fa-twitter"></i></a>
                  
                   </div>
            </div>
        </div>
    </div>
</footer>
<script>
    document.onload(function(){
if(window.innerWidth > 1200){
    document.getElementById('icon').style.display = 'none';
    document.getElementById('vertical-nav').style.display = 'none';
}else{
    document.getElementById('horizontal-nav').style.display = 'none';
    document.getElementById('signup').style.display = 'none';
    document.getElementById('login').style.display = 'none';
    document.getElementById('icon').style.display = 'block';
    document.getElementById('vertical-nav').style.display = 'none';
}
});
document.getElementById("icon").addEventListener('click', function (){
document.getElementById("vertical-nav").style.display = 'flex';
});
</script>
</body>
</html>