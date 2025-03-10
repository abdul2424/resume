@extends('frontend.index')

@section('content')

<section class="review" id="review">
    <h2 class="heading">Job seekers <span>Review</span></h2>
</section>

<br><br>





<br><br>

<div class="stories">
    <div class="success">
        <h2>Organization's success stories </h2>
        <p>We’re proud to have partnered with over 2,000 brands in Pakistan and beyond. Read why our clients love
            working with us.</p>
    </div>
    <div class="right">
        <img src="/storage/media/business.webp" alt="">
    </div>

</div>

<div class="wrap">
    <div class="str">
        <i class="fa-solid fa-quote-left"></i>
        <p>Tech Innovators Inc., a leading technology firm, partnered with The Recruiters to streamline their talent
            acquisition process. By leveraging The Recruiters' AI-powered matching system and advanced analytics
            dashboard, Tech Innovators reduced their hiring time by 40% and improved the quality of hires
            significantly.</p>

        <span>Tech Innovators Inc.</span>


    </div>

    <div class="str">

        <i class="fa-solid fa-quote-left"></i>
        <p>Green Solutions Ltd., an environmental consultancy, faced challenges in finding candidates with niche
            expertise. By utilizing The Recruiters' customizable candidate profiles and secure video interview
            functionality, they were able to connect with highly specialized professionals worldwide. </p>

        <span>Green Solutions Ltd</span>


    </div>

</div>
<div class="wrap2">

    <div class="str">

        <i class="fa-solid fa-quote-left"></i>

        <p>Future Finance Corp., a global financial services company, adopted The Recruiters platform to enhance
            their recruitment process. The intuitive user interface and AI-driven candidate matching allowed their
            HR team to quickly identify top talent.</p>

        <span>Future Finance Corp</span>

    </div>
    <div class="str">

        <i class="fa-solid fa-quote-left"></i>

        <p>HealthFirst Medical, a healthcare provider, needed to hire skilled professionals rapidly to meet
            increasing demand. The Recruiters provided a comprehensive solution with its secure video interview
            feature and advanced analytics dashboard. </p>

        <span>HealthFirst Medical</span>


    </div>

</div>
<div class="wrap3">

    <div class="stories">
        <div class="success">
            <h2>Employees<br> success stories </h2>

            <p>At The Recruiters, we take pride in connecting talented individuals with their ideal career
                opportunities. Our platform's advanced matching system, intuitive interface, and innovative
                features.</p>
            </h2>



        </div>
        <div class="right">
            <img src="/storage/media/business.webp" alt="">
        </div>

    </div>

    <div class="wrap">
        <div class="str">

            <i class="fa-solid fa-quote-left"></i>



            <p>Emma L., a talented software developer, had been searching for a role that aligned with her skills
                and career aspirations. Through The Recruiters, she was matched with a leading tech company that
                perfectly suited her expertise in AI and machine learning.</p>

            <span>Emma L., Software Developer</span>


        </div>

        <div class="str">

            <i class="fa-solid fa-quote-left"></i>



            <p>Alex R., a dynamic marketing specialist, was seeking a position that offered creativity and growth
                opportunities. Using The Recruiters, Alex found several job openings tailored to his background and
                interests. The platform's seamless application process and detailed job descriptions made it easy
                for him to identify the best opportunities.</p>

            <span>Alex R., Marketing Specialist</span>


        </div>

    </div>
    <div class="wrap2">

        <div class="str">

            <i class="fa-solid fa-quote-left"></i>



            <p>Priya K., an experienced environmental consultant, wanted to work for a company committed to
                sustainability. The Recruiters platform provided her with a list of potential employers that matched
                her values and professional goals.</p>

            <span>Priya K., Environmental Consultant</span>


        </div>
        <div class="str">

            <i class="fa-solid fa-quote-left"></i>
            <p>David M., a skilled financial analyst, was on the lookout for a company that offered both stability
                and growth potential. The Recruiters' AI-driven matching system connected him with Future Finance
                Corp., a leading financial services firm.</p>

            <span>David M., Financial Analyst</span>

        </div>


    </div>

</div>
@endsection

<style>
   

    @media only screen and (min-width:100px) and (max-width:1200px) {
        nav {
            display: none;
        }

        .btn-section>.btn {
            display: none;
        }

        .icon {
            display: block;
            font-size: 30px;
            margin-right: 15px;
            color: white;
        }
    }

    @media only screen and (min-width:1200px) {
        .icon {
            display: none;
        }
    }

    @media only screen and (max-width:660px) {
        body {
            margin: 0%;
            padding: 0%;
        }

        .main-container {
            max-width: 100%;
            margin: 0%;
            padding: 0%;
            /* padding-bottom: 50px; */
            box-sizing: border-box;
            background-color: #37756A;
        }

        header {
            max-width: 95%;
            margin: auto;
        }

        nav {
            display: none;
        }

        .btn-section>.btn {
            display: none;
        }

        .icon {
            display: block;
            font-size: 30px;
            margin-right: 15px;
            color: white;
        }
    }

    @media only screen and (min-width:660px) {
        body {
            margin: 0%;
            padding: 0%;
        }

        .main-container {
            max-width: 100%;
            margin: 0%;
            padding: 0%;
            /* padding-bottom: 50px; */
            box-sizing: border-box;
            background-color: #37756A;
        }

        header {
            max-width: 95%;
            margin: auto;
        }

        nav {
            display: none;
        }

        .btn-section>.btn {
            display: none;
        }

        .icon {
            display: block;
            font-size: 30px;
            margin-right: 15px;
            color: white;
        }
    }

    @media only screen and (min-width:768px) {
        body {
            margin: 0%;
            padding: 0%;
        }

        header {
            max-width: 90%;
            margin: auto;
        }

        nav {
            display: none;
        }

        .btn-section>.btn {
            display: none;
        }

        .icon {
            display: inline-block;
            font-size: 30px;
            margin-right: 20px;
        }
    }

    @media only screen and (min-width:992px) {
        body {
            margin: 0%;
            padding: 0%;
        }

        .main-container {
            max-width: 100%;
            margin: 0%;
            padding: 0%;
            /* padding-bottom: 80px; */
            box-sizing: border-box;
            background-color: #37756A;
        }

        header {
            max-width: 85%;
            margin: auto;
        }

        nav {
            display: none;
        }

        .btn-section>.btn {
            display: none;
        }

        .icon {
            display: inline-block;
            font-size: 30px;
            margin-right: 20px;
        }
    }

    @media only screen and (min-width:1200px) {
        body {
            margin: 0%;
            padding: 0%;
        }

        .main-container {
            max-width: 100%;
            margin: 0%;
            padding: 0%;
            /* padding-bottom: 80px; */
            box-sizing: border-box;
            background-color: #37756A;
        }

        header {
            max-width: 85%;
            margin: auto;
        }

        nav {
            display: inline-block;
        }

        .btn-section>.btn {
            display: inline-block;
        }

        .icon {
            display: none;
            font-size: 30px;
            margin-right: 20px;
        }
    }

    @media only screen and (min-width:100px) and (max-width:1200px) {
        nav {
            display: none;
        }

        .btn-section>.btn {
            display: none;
        }

        .icon {
            display: block;
            font-size: 30px;
            margin-right: 15px;
            color: white;
        }
    }

    @media only screen and (min-width:1200px) {
        .icon {
            display: none;
        }
    }

    .heading {
        text-align: center;
        padding: 2rem 0;
        padding-bottom: 3rem;
        font-size: 36px;
        color: var(--black);

    }

    section {
        padding: 2rem 9%;

    }

    .heading span {
        background: #37756A;
        color: white;
        display: inline-block;
        padding: .3rem 1.5rem;
        clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
    }

    @media only screen and (max-width:660px) {
        .heading span {
            margin-top: 6px;
        }
    }

    .card-image {
        position: relative;
        height: 140px;
        width: 150px;
        border-radius: 50%;
        background-color: #FFF;
        padding: 3PX;
    }

    .card-image .card-img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
        background-color: #EFEFEF;
        border: 2PX solid #37756A;

    }

    .slide-container {
        min-height: 50vh;
        max-width: 900px;
        margin: auto;
        padding: 15px 0;
        background-color: #F4F4F4;
        padding: 45px 20px;
        margin-top: -4px;
        justify-content: center;
    }

    .card {
        border-radius: 25px;
        background-color: #FFF;
        width: 330px;

    }

    body {
        background-color: #ffffff;
    }

    .slide-content {
        margin: 0 40px;
    }

    .image-content,
    .card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 12px 14px;
    }

    .stars i {


        font-size: 1.7remrem;
        color: orange;
        margin-top: 10px;
        margin-bottom: 10px;

    }

    .overlay {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: #37756A;
        border-radius: 25px 25px 0 25px;

    }

    .overlay::before,
    .overlay::after {
        position: absolute;
        content: '';
        height: 40px;
        width: 40px;
        background-color: #37756A;
        right: 0;
        bottom: -40px;

    }

    .overlay::after {
        border-radius: 0 25px 0 0;
        background-color: #FFF;
    }

    .name {
        font-size: 20px;
        font-size: larger;
        color: black;

        padding-bottom: 12px;
    }

    .description {
        font-size: 14px;
        line-height: 1.4rem;
        color: #707070;
        text-align: center;
    }

    .image-content {
        row-gap: 5px;
        position: relative;
        padding: 25px 0;
    }

    .swiper-pagination-bullet {
        background-color: white;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: #37756A;
    }


    .success {
        text-align: left;
    }

    .success h2 {
        width: 400px;
        color: #37756A;
        font-size: 42px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;

    }

    .success p {
        width: 400px;
        font-size: 25px;
        color: black;
        margin-top: 20px;
        line-height: 2.2rem;
        text-align: left;
    }

    .stories {
        width: 73%;
        margin: auto;
        display: flex;

        flex-direction: row;
        justify-content: space-between;
        margin-top: 20px;
    }

    .right img {
        width: 370px;
        height: 360px;

    }

    @media only screen and (max-width:660px) {
        .success {
            text-align: left;
            /* Align content to the left */
            /* Example margin from left */
            /* Example border */
        }

        .success h2 {
            max-width: 150px;
            color: #37756A;
            font-size: 25px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }

        .success p {
            max-width: 150px;
            font-size: 18px;
            color: black;
            margin-top: 20px;
            line-height: 2rem;
            text-align: left;

        }

        .stories {
            width: 90%;
            margin: auto;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            margin-top: 20px;
        }

        .right img {
            width: 150px;
            height: 150px;
            margin-top: 90px;


        }
    }

    @media only screen and (min-width:660px) {
        .success {
            text-align: left;
            /* Align content to the left */
            /* Example margin from left */
            /* Example border */
        }

        .success h2 {
            max-width: 400px;
            color: #37756A;
            font-size: 42px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }

        .success p {
            max-width: 400px;
            font-size: 25px;
            color: black;
            margin-top: 20px;
            line-height: 2.2rem;
            text-align: left;
        }

        .stories {
            width: 95%;
            margin: auto;
            display: flex;

            flex-direction: row;
            justify-content: space-between;
            margin-top: 20px;
        }

        .right img {
            width: 300px;
            height: 300px;

        }
    }

    @media only screen and (min-width:768px) {
        .success {
            text-align: left;
            /* Align content to the left */
            /* Example margin from left */
            /* Example border */
        }

        .success h2 {
            max-width: 400px;
            color: #37756A;
            font-size: 42px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }

        .success p {
            max-width: 400px;
            font-size: 25px;
            color: black;
            margin-top: 20px;
            line-height: 2.2rem;
            text-align: left;
        }

        .stories {
            width: 85%;
            margin: auto;
            display: flex;

            flex-direction: row;
            justify-content: space-between;
            margin-top: 20px;
        }

        .right img {
            width: 370px;
            height: 350px;

        }
    }

    @media only screen and (min-width:992px) {
        .success {
            text-align: left;
            /* Align content to the left */
            /* Example margin from left */
            /* Example border */
        }

        .success h2 {
            max-width: 400px;
            color: #37756A;
            font-size: 42px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }

        .success p {
            max-width: 400px;
            font-size: 25px;
            color: black;
            margin-top: 20px;
            line-height: 2.2rem;
            text-align: left;
        }

        .stories {
            width: 73%;
            margin: auto;
            display: flex;

            flex-direction: row;
            justify-content: space-between;
            margin-top: 20px;
        }

        .right img {
            width: 370px;
            height: 350px;

        }
    }

    .str i {

        font-size: 48px;
        color: #37756A;
    }

    .str {
        display: flex;
        flex-direction: column;
    }

    .wrap {
        display: flex;
        flex-direction: row;
        margin: auto;
        width: 73%;
        margin-top: 70px;
        justify-content: space-between;

    }

    @media (max-width: 660px) {
        .wrap {
            flex-direction: column;
            width: 80%;
            margin: auto;
        }

        .str {
            flex: 1 1 100%;
            max-width: 100%;
            margin: auto;
            margin-top: 20px;
        }

        .str p {
            max-width: 90%;
            /* Adjust this value as needed */
            margin: 0 auto;
            /* Optional: Center the paragraphs horizontally */
        }

        .str span {
            margin-left: 20px;
        }

    }

    .str p {
        width: 400px;
        margin-top: 15px;
        line-height: 1.6rem;
    }

    .str span {
        margin-top: 20px;
        font-size: 18px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;

    }

    .span span {
        margin-top: 18px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 18px;
    }

    .wrap2 {
        display: flex;
        flex-direction: row;
        width: 73%;
        margin: auto;
        margin-top: 80px;
        justify-content: space-between;
    }

    @media (max-width: 660px) {
        .wrap2 {
            width: 90%;
            margin: auto;
            flex-direction: column;
            margin-top: -10px;
        }

        .str {
            flex: 1 1 100%;
            max-width: 100%;
            margin: auto;
            margin-top: 20px;
        }

        .str p {
            max-width: 90%;
            /* Adjust this value as needed */
            margin: 0 auto;
            /* Optional: Center the paragraphs horizontally */
        }
    }

    .wrap3 {
        margin-top: 100px;
    }

    @media (max-width: 660px) {
        .wrap3 {
            flex-direction: column;
            width: 90%;
            margin: auto;
        }

        .str {
            flex: 1 1 100%;
            max-width: 100%;
            margin: auto;
            margin-top: 20px;
        }

        .str p {
            max-width: 90%;
            /* Adjust this value as needed */
            margin: 0 auto;
            /* Optional: Center the paragraphs horizontally */
        }

    }

    .container-3 {
        width: 100%;
        margin: auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    ul {
        list-style: none;
    }

    .footer {
        margin-top: 30px;
        background-color: #37756A;
        padding: 60px 0;
    }

    .footer-col {
        width: 25%;
        padding: 0 70px;
    }

    .footer-col h4 {
        font-size: 18px;
        color: #ffffff;
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
    }

    .footer-col h4::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: #ffffff;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }

    .footer-col ul li:not(:last-child) {
        margin-bottom: 10px;
    }

    .footer-col ul li a {
        font-size: 16px;
        text-transform: capitalize;
        color: #ffffff;
        text-decoration: none;
        font-weight: 300;
        color: white;
        display: block;
        transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
        color: #ffffff;
        padding-left: 8px;
    }

    .footer-col .social-links a {
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(255, 255, 255, 0.2);
        margin: 0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        transition: all 0.5s ease;
    }

    .footer-col .social-links a:hover {
        color: #24262b;
        background-color: #ffffff;
    }

    /*responsive*/
    @media(max-width: 767px) {
        .footer-col {
            width: 50%;
            margin-bottom: 30px;
        }
    }

    @media(max-width: 574px) {
        .footer-col {
            width: 100%;
            /* padding: 0 40px; */
        }
    }

    @media screen and (max-width: 768px) {
        .slide-content {
            margin: 0 10px;
        }
    }

    @media screen and (max-width: 768px) {
        .slide-content1 {
            margin: 0 10px;
        }
    }
</style>