<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="zoom-domain-verification" content="ZOOM_verify_958bd47838f84fa582d1aeac0a6cfee9">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
     @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap');
  </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<style>
.hero{
    max-width: 90%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.main-heading h1{
    margin: 0%;
    padding: 20px 0px;
    font-size: 50px;
    color: #37756A;
}
.org-fields{
    display: flex;
    flex-direction: row;
    align-items: center;
}
.org-fields input{
    margin-right: 10px;
    padding: 20px 30px;
    background-color: #37756A;
    color: white;
}
.org-fields button{
    width: 150px;
    height: 57px;
    padding: 13px 30px;
    color: #37756A;
    font-size: larger;
    font-weight: bold;
    border: 2px solid #37756A;
}
.jobs{
    max-width: 90%;
    margin: auto;
    display: flex;
    flex-direction: row;
}
.job-heading{
    max-width: 90%;
    margin: auto;
    color: #37756A;
    font-size: 30px;
}
.job-details{
    margin-top: 30px;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 20px;
    border: 2px solid #37756A;
}
.job-item{
    margin: 20px 10px;
}
.name{
    padding: 10px;
    background-color: #37756A;
    color: white;
}
.detail{
    padding: 10px;
    color: #37756A;
    border: 1px solid #37756A;
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
    }
}

.main-container{
    box-sizing: border-box;
    margin: 0%;
    padding: 0%;
    max-width: 100%;
    background-color: #37756A;

}
header{
    max-width: 80%;
    margin: auto;
    height: 70px;
    
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.logo{
    font-weight: bold;
    font-size: larger;
    color: white;
}

.item{
    text-decoration: none;
    color: white;
    padding: 20px;
    border-radius: 8px;
}
.btn{
    max-width: 250px;
    padding: 12px;
    outline: none;
    font-size: larger;
    font-weight: bold;
    color: #37756A;
    border: 1px solid white;
    text-transform: capitalize;
    background-color: white;
    border-radius: 12px;
}
.log{
    letter-spacing: 2px;
    font-family: Yellowtail;
    padding: 20px;}
    .main{
        display: flex;
        text-align: center;
        color: #37756A;
        
        flex-direction: column;
    }
    .main h1{
        font-size: 40px;
    }
    .main span{
        font-size:20px ;
        display: flex;
        text-align: center;
        
      
        
       
    }
    .main{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins" ,sans-serif;
    }
    body{
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
    }
    .pricing{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        width: 80%;
        margin: auto;
        padding: 2rem;
        
        
    }
    .main-head h2{
        color: #37756A;
        text-align: center;
        font-size: 32px;
        margin-top: 70px;
        font-family: "Poppins" ,sans-serif;
        
      
    }
    .main-head span{
    background: #37756A;
    color: white;
    font-size: 32px;
    display: inline-block;
    padding: .3rem 1.5rem;
    clip-path: polygon(100% 0,93% 50%,100% 99%,0% 100%,7% 50%,0% 0%);
    font-family: "Poppins" ,sans-serif;
}
   

    .card-wrapper{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 230px;
        height: auto;
        background-color: #f9f9f9;
      
        border-radius: 20px;
        box-shadow: 0 5px 14px rgba(0, 0, 0, 0.25), 0 5px 5px rgba(0, 0, 0, 0.22);
        padding: 2rem;
        margin: 1rem;
        transition: all 0.2s ease-in;
    }
    .card-header img{
        width: 200px;
        display: block;
        margin: 0 auto;
    }
    .card-wrapper:hover{
        transform: scale(1.1);
    }
    .card-header{
        margin: 1rem;
        text-align: center;
    }
    .card-wrapper:hover .card-header> h2{
        transform: scale(1.1);
        color: #37756A;
        letter-spacing: 3;
    }
    .card-detail{
        width: 100%;

    }
    .card-detail > p{
        padding: 0.6rem 1.5rem;
        font-size: 1rem;
        border-bottom: 1px solid #d5d5d5;
    }
.check{
    color: #37756A;
    padding-right: 8px;
}
.nocheck{
    color: #37756A;
    padding-right: 8px;
}
.card-detail > p:hover{
    background-color: #d5d5d5;
}
.card-price{
    display: flex;
    align-items: flex-start;
    margin: 0.2rem;
}
.card-price p{
    font-size: 3rem;
    font-weight: 800;
}
.card-price p sup,sub{
    font-size: 1.2rem;
}
.card-button{
    padding: 0.6rem 3rem;
    border: 2px solid #37756A;
    background-color: #37756A;
    color: #fff;
    border-radius: 30px;
    cursor: pointer;
    transition: all 50ms ease-in;

}
.card-button:hover{
    border: 2px solid #37756A;
    background-color: transparent;
    color: #37756A;
    font-weight: 800;
}
.footer{
            background-color: #37756A;
padding: 40px 0px;
margin-top: 30px;

        }
        .container-3{
            max-width: 1170px;
           
            margin: auto;
        }
        ul{
            list-style-type: none;
        }
        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .footer-col{
            width: 22%;
            padding: 0px 17px;

        }
        .footer-col h4{
            font-size: 22px;
            text-transform: capitalize;
            color: #ffffff;
           margin-bottom: 30px;
           font-weight: 500;
           position: relative;
        }
        .footer-col h4::before{
            content: '';
            position: absolute;
            left:0;
            bottom: -10px;
            box-sizing: border-box;
            width: 50px;
            height: 2px;
            background-color: white;
           
        }
        .footer-col ul li:not(:last-child){
            margin-bottom: 10px;

        }
        .footer-col ul li a{
            text-decoration: none;
            color: black;
        }

        
        .footer-col ul li a:hover{
            color: white;
            padding-left: 10px;
        }
.footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgb(255, 255, 255,0.2);
    margin: 0px 10px 10px 0px;
    text-align: center;
    line-height: 40px;
    border-radius: 50px;
    color: white;
    transition: 0.5s all ease;
}
.footer-col .social-links a:hover{
    color: #24262b;
    background-color: #ffffff;
}
#display{
    color: black;
}
.btn-section a{
    text-decoration: none;
}
fieldset input[type=submit]
{

padding: 10px;

}  
.footer-col ul li{
            margin-left: -40px;
        }
        
  .third-sec{
    
    width: 100%;
    margin: 0%;
    padding: 0%;
    display: flex;
    justify-content: flex-end;
    background-image:url("/storage/media/curve2.png") ;
  }
  .boxes{
    max-width: 30%;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    /* background-color: #37756A; */
    margin-left: auto;
    margin-top: 70px;
    align-items: center;
    margin-right: 150px;
    border-radius: 8px;
  }
.right-box{
    background-color: white;
    display: flex;
    text-align: center;
    flex-direction: column;
    width: 300px;
    margin: 10px;
    border-radius: 8px;
}
.right-box span{
    text-align: center;
    font-size: 30px;
    padding: 15px;
}

.wrap{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    padding: 15px;
}
.stars i{
    
    
    font-size: 1rem;
    color: orange;
   margin-top: 10px;
   margin-bottom: 10px;
   
}
.icon img{
    width: 90px;
}
.left-sec{
    display: flex;
    flex-direction: row;
  
    text-align: center;
    width: 42%;
    margin-left: 100px;
    height: 150px;
    margin-top: 350px;
   
   
    
    
}
.center{
   
    background: white;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  position: relative;
  animation: pulse 2s infinite;

}
@keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
.center p{
   
	vertical-align:middle;
	color: #37756A;
    font-size: 60px;
	text-align:center;
	
}
.left-head{
    display: flex;
    text-align: left;
    margin: 5px;
    
  
}
.left-head p{
    font-weight: bold;
    font-size: 25px;
    color: #fff;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.card-button:hover a {
    color: #37756A;
}

.center .inner-circle {
            background: orange;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: moveAroundBorder 8s linear infinite;

        }
        @keyframes moveAroundBorder {
    0% {
        transform: translateX(-50%) rotate(0deg) translateY(calc(-50% - 60px)) rotate(0deg);
    }
    100% {
        transform: translateX(-50%) rotate(360deg) translateY(calc(-50% - 70px)) rotate(-360deg);
    }
}
</style>
</head>
<body>
<div class="main-container">
    <header>
        <div class="logo">
            <!-- <span class="=item">THE_RECRUITERS</span> -->
            <a href="/" class="log item">THE NexHire</a>
            <a href="/" class="item">Home</a>
            <a href="/about" class="item">About Us</a>
                    <a href="/contact" class="item">Contact Us</a>
                    <a href="/customer" class="item">Our Customers</a>
                    <a href="/plan" class="item">Our Plans</a>
        </div>
        <div class="btn-section">
        @if(session()->has('FRONT_USER_LOGIN'))
            @if($users->type=='employee') 
            <button class="btn btn-light position-relative"><a  href="/profile" style="text-decoration:none;color:#37756A;font-weight:bold;text-align:center;">
                    Profile</a></button>
            @else
                    <button class="btn btn-light position-relative"><a  href="/profile" style="text-decoration:none;color:#37756A;font-weight:bold;text-align:center;">
                    Profile
                @if($total_jobs_count != 0)
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ $total_jobs_count }}+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                @else
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        0+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                @endif
                </a></button>
            @endif
            <button class="btn"><a  href="/logout" style="text-decoration:none;color:#37756A;font-weight:bold;text-align:center;">Logout</a></button>
            @else
                <button class="btn"><a href="/login" style="text-decoration:none;color:#37756A">Login</a></button>
                <button class="btn"><a href="/signup" style="text-decoration:none;color:#37756A">Signup</a></button>
            @endif
        </div>
    </header>
</div>



