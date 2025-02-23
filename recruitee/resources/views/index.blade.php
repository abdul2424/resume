<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="zoom-domain-verification" content="ZOOM_verify_958bd47838f84fa582d1aeac0a6cfee9">
<title> NexHire</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
  
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
          margin: 0%;
          padding: 0%;
          max-width: 100%;
          background-color: #37756A;
          padding-bottom: 100px;
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
      .hero{
          max-width: 80%;
          margin: auto;
          margin-top: 100px;
          color: white;
          display: flex;
          flex-flow: column;
          align-items: center;
      }
      .hero-heading{
          font-size: 75px;
          color: white;
          text-transform: capitalize;
          font-weight: bolder;
          font-family: serif;
          margin: 0%;
          padding: 0%;
          text-align: center;
          line-height: 65px;
      }
      .hero-para{
          color: white;
          font-size: 25px;
          text-align: center;
          font-family: monospace;
      }
      .hero-btn-container{
          margin-top: 50px;
      }
      .hero-btn{
          max-width: 250px;
          padding: 20px;
          margin: 10px;
          text-decoration: none;
          border-radius: 4px;
          border: 1px solid white;
          color: white;
          font-weight: bolder;
          font-size: large;
          background-color: transparent;
      }
      .primary-container{
          width: 80%;
          margin: auto;
          margin-top: 30px;
          display: flex;
          flex-direction: column;
      
      }
      .p-heading{
          font-size: 50px;
          margin: 0%;
          padding: 0%;
          text-align: center;
          color: #37756A;
      }
      .p-para{
          text-align: center;
          font-size: large;
          font-family: monospace;
          max-width:65%;
          margin:20px auto;
      }
      .div-container{
          margin-top: 20px;
          margin-bottom: 50px;
          display: flex;
          flex-flow: row wrap;
          justify-content: center;
      }
      .div-items{
          padding: 30px;
          max-width: 300px;
          border: 2px solid #37756A;
          margin: 20px;
          border-radius: 8px;
      }
      .div-items > h2 {
          color: #37756A;
          padding: 0%;
          margin: 0%;
      }
      .div-items > p{
          font-family: monospace;
      }
      .primary-icons{
          font-size: 250px;
          color: #37756A;
      }
      .sec-container{
          background-color: #37756A;
          
      }
      .secondry-div-container{
          max-width: 80%;
          margin: auto;
          padding-top: 50px;
          padding-bottom: 50px;
          text-transform: capitalize;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
      }
      .secondry-div-container > h1 {
          color: white;
          font-size: 50px;
          font-family: serif;
          margin: 0%;
          padding: 0%;
      }
      .secondry-div-container > p{
          color: white;
          font-family: monospace;
          font-size: large;
          text-align: center;
      }
      .sec-wrapper{
          display: flex;
          flex-flow: row wrap;
          justify-content: space-evenly;
      }
      .wrapper-items{
          max-width: 350px;
          border-radius: 5px;
          margin-bottom: 50px;
          border: 1px solid white;
      }
      .wrapper-items > img{
          border-radius: 4px;
      }
      .wrapper-items > h2 {
          color: white;
      }
      .wrapper-items > p{
          color: white;
          font-family: monospace;
      }
      .updates{
          max-width: 80%;
          margin-top: 50px;
          margin: auto;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          text-align: center;
      }
      .updates > h1{
          font-family: serif;
          text-transform: capitalize;
          font-size: 60px;
          line-height: 55px;
          color: #2C5F7F;
      }
      .updates-wrapper{
          display: flex;
          flex-direction: row;
          flex-wrap: wrap;
          justify-content: space-evenly;
      }
      .updates-items{
          max-width: 400px;
          padding: 10px;
          border-bottom: 1px solid #2C5F7F;
          
      }
      .updates-items > h2 > a{
          text-decoration: none;
          color: #2C5F7F;
          font-family: sans-serif;
          font-weight: bolder;
          line-height: 20px;
      }
      .updates-images {
          width: 400px;
          height: 230px;
          border-radius: 4px;
      }
      .grow-container{
          max-width: 100%;
          padding-bottom: 40px;
          background-color: #37756A;
          display: flex;
          flex-direction: column;
      }
      .grow-container > h1 {
          padding-top: 30px;
          font-size: 50px;
          color: white;
          font-family: serif;
          text-transform: capitalize;
          text-align: center;
          margin: 0%;
          padding: 30px 20px 30px 20px;
      }
      .grow-wrapper{
          max-width: 80%;
          margin: auto;
          display: flex;
          flex-direction: row;
          justify-content: space-evenly;
      }
      .left-wrapper{
          padding-right: 150px;
          padding-top: 10px;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          align-items: start;
          text-align: left;
      }
      .grow-wrapper-items{
          color: white;
          font-size: larger;
          max-width: 400px;
      }
      .right-wrapper{
          max-width: 500px;
          text-align: right;
      }
      .right-wrapper > img {
          width: 500px;
          height: 500px;
          border-radius: 7px;
      }
      .profile{
          max-width: 80%;
          margin: auto;
          margin-top: 100px;
          display: flex;
          flex-direction: row;
          justify-content: space-evenly;
      }
      .left-profile-container{
          text-align: center;
      }
      .left-profile-container > h1 {
          font-size: 60px;
          margin: 0px;
          margin-top: 50px;
          padding: 0%;
          color: #37756A;
          text-transform: capitalize;
      }
      .left-profile-container > p{
          margin-bottom: 80px;
          line-height: 30px;
          font-size: large;
          font-family: sans-serif;
          text-align: center;
      }
      .left-profile-container > a{
          max-width: 300px;
          font-size: x-large;
          text-decoration: none;
          color: white;
          text-align: center;
          border-radius: 4px;
          background-color: #37756A;
          padding: 30px;
          font-weight: bold;
          margin-top: 50px;
          margin-bottom: 50px;
      }
      .right-profile-container > img {
          max-width: 500px;
          max-height: 500px;
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
              padding-bottom: 50px;
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
          .hero{
              max-width: 95%;
              margin: auto;
              margin-top: 30px;
              color: white;
              display: flex;
              flex-flow: column;
              align-items: center;
          }
          .hero-heading{
              max-width: 95%;
              font-size: 25px;
              color: white;
              text-transform: capitalize;
              font-weight: bolder;
              font-family: serif;
              margin: 0%;
              padding: 0%;
              text-align: center;
              line-height: 25px;
          }
          .hero-para{
              max-width: 90%;
              color: white;
              font-size: 12px;
              text-align: center;
              font-family: monospace;
              text-align: center;
          }
          .hero-btn-container{
              margin-top: 30px;
          }
          .hero-btn{
              max-width: 150px;
              padding: 10px;
              margin: 10px;
              text-decoration: none;
              border-radius: 4px;
              border: 1px solid white;
              color: white;
              font-weight: bolder;
              font-size: 15px;
              box-sizing: border-box;
              background-color: transparent;
              text-align: center;
          }
          .primary-container{
              width: 95%;
              margin: auto;
              margin-top: 30px;
              display: flex;
              flex-direction: column;
              
          }
          .p-heading{
              font-size: 25px;
              margin: 0%;
              padding: 0%;
              text-align: center;
              color: #37756A;
          }
          .p-para{
              text-align: center;
              font-size: 12px;
              font-family: monospace;
          }
          .div-container{
              margin-top: 20px;
              margin-bottom: 50px;
              display: flex;
              flex-flow: row wrap;
              justify-content: center;
          }
          .div-items{
              padding: 30px;
              max-width: 300px;
              border: 2px solid #37756A;
              margin: 15px;
              border-radius: 4px;
          }
          .div-items > h2 {
              color: #37756A;
              padding: 0%;
              margin: 0%;
              font-size: 15px;
          }
          .div-items > p{
              font-family: monospace;
          }
          .primary-icons{
              font-size: 250px;
              color: #37756A;
          }
          .sec-container{
              background-color: #37756A;
              
          }
          .secondry-div-container{
              min-width: 95%;
              margin: auto;
              padding-top: 30px;
              padding-bottom: 30px;
              text-transform: capitalize;
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
          }
          .secondry-div-container > h1 {
              color: white;
              font-size: 25px;
              font-family: serif;
              text-align: center;
              margin: 0%;
              padding: 0%;
          }
          .secondry-div-container > p{
              color: white;
              font-family: monospace;
              font-size: 12px;
              text-align: center;
          }
          .sec-wrapper{
              display: flex;
              flex-flow: row wrap;
              justify-content: space-evenly;
              margin-top: 20px;
          }
          .wrapper-items{
              max-width: 350px;
              border-radius: 4px;
              margin-bottom: 20px;
              border: none;
          }
          .wrapper-items > img{
              border-radius: 4px;
              max-width: 350px;
          }
          .wrapper-items > h2 {
              color: white;
              font-size: 15px;
          }
          .wrapper-items > p{
              color: white;
              font-family: monospace;
              font-size: 12px;
          }
      
      .updates{
          max-width: 95%;
          padding: 30px 0px;
          margin: auto;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          text-align: center;
      }
      .updates > h1{
          font-family: serif;
          text-transform: capitalize;
          font-size: 25px;
          line-height: 25px;
          color: #2C5F7F;
      }
      .updates-wrapper{
          display: flex;
          flex-direction: row;
          flex-wrap: wrap;
          justify-content: space-evenly;
      }
      .updates-items{
          max-width: 350px;
          padding: 10px;
          border-bottom: 1px solid #2C5F7F;
          
      }
      .updates-items > h2 > a{
          text-decoration: none;
          color: #2C5F7F;
          font-size: 12px;
          max-width: 350;
          font-family: sans-serif;
          font-weight: bold;
      }
      .updates-images {
          max-width: 350px;
          height: 230px;
          border-radius: 4px;
      }
      .grow-container{
          max-width: 100%;
          padding-bottom: 20px;
          background-color: #37756A;
          display: flex;
          flex-direction: column;
      }
      .grow-container > h1 {
          /* padding-top: 30px; */
          font-size: 25px;
          color: white;
          font-family: serif;
          text-transform: capitalize;
          text-align: center;
          margin: 0%;
      }
      .grow-wrapper{
          max-width: 95%;
          margin: auto;
          display: flex;
          flex-direction: row;
          justify-content: space-evenly;
      }
      .left-wrapper{
          padding-right: 20px;
          padding-top: 10px;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          align-items: start;
          text-align: left;
      }
      .grow-wrapper-items{
          color: white;
          max-width: 350px;
      }
      .grow-wrapper-items h2{
          color: white;
          font-size: 15px;
      }
      .grow-wrapper-items p{
          color: white;
          font-size: 12px;
      }
      .right-wrapper{
          max-width: 500px;
          text-align: right;
          display: none;
      }
      .right-wrapper > img {
          width: 500px;
          height: 500px;
          border-radius: 7px;
          display: none;
      }
      .profile{
          max-width: 95%;
          margin: auto;
          margin-top: 30px;
          display: flex;
          flex-direction: row;
          justify-content: center;
      }
      .left-profile-container{
          text-align: center;
      }
      .left-profile-container > h1 {
          font-size: 25px;
          margin: 0px;
          margin-top: 10px;
          padding: 0%;
          color: #37756A;
          text-transform: capitalize;
      }
      .left-profile-container > p{
          margin-bottom: 30px;
          line-height: 20px;
          font-size: 12px;
          font-family: sans-serif;
          text-align: center;
      }
      .left-profile-container > a{
          max-width: 150px;
          font-size: 15px;
          text-decoration: none;
          color: white;
          text-align: center;
          border-radius: 4px;
          background-color: #37756A;
          padding: 15px;
          font-weight: bold;
          margin-top: 20px;
          margin-bottom: 20px;
          
      }
      .right-profile-container > img {
          max-width: 500px;
          max-height: 500px;
          display: none;
      }
      
      
      }
      
      @media only screen and (min-width:660px) {
          body{
              margin: 0%;
              padding: 0%;
          }
          .main-container{
              max-width: 100%;
              margin: 0%;
              padding: 0%;
              padding-bottom: 50px;
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
          .hero{
              max-width: 95%;
              margin: auto;
              margin-top: 30px;
              color: white;
              display: flex;
              flex-flow: column;
              align-items: center;
          }
          .hero-heading{
              max-width: 95%;
              font-size: 35px;
              color: white;
              text-transform: capitalize;
              font-weight: bolder;
              font-family: serif;
              margin: 0%;
              padding: 0%;
              text-align: center;
              line-height: 30px;
          }
          .hero-para{
              max-width: 95%;
              color: white;
              font-size: 17px;
              text-align: center;
              font-family: monospace;
              text-align: center;
          }
          .hero-btn-container{
              margin-top: 30px;
          }
          .hero-btn{
              max-width: 200px;
              padding: 10px;
              margin: 10px;
              text-decoration: none;
              border-radius: 4px;
              border: 1px solid white;
              color: white;
              font-weight: bolder;
              font-size: 20px;
              box-sizing: border-box;
              background-color: transparent;
              text-align: center;
          }
          .primary-container{
              width: 95%;
              margin: auto;
              margin-top: 30px;
              display: flex;
              flex-direction: column;
              
          }
          .p-heading{
              font-size: 30px;
              margin: 0%;
              padding: 0%;
              text-align: center;
              color: #37756A;
          }
          .p-para{
              text-align: center;
              font-size: 14px;
              font-family: monospace;
          }
          .div-container{
              margin-top: 20px;
              margin-bottom: 50px;
              display: flex;
              flex-flow: row wrap;
              justify-content: center;
          }
          .div-items{
              padding: 17px;
              max-width: 235px;
              border: 2px solid #37756A;
              margin: 15px;
              border-radius: 4px;
          }
          .div-items > h2 {
              color: #37756A;
              padding: 0%;
              margin: 0%;
          }
          .div-items > p{
              font-family: monospace;
          }
          .primary-icons{
              font-size: 250px;
              color: #37756A;
          }
          .sec-container{
              background-color: #37756A;
              
          }
          .secondry-div-container{
              max-width: 90%;
              margin: auto;
              padding-top: 40px;
              padding-bottom: 40px;
              text-transform: capitalize;
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
          }
          .secondry-div-container > h1 {
              color: white;
              font-size: 35px;
              font-family: serif;
              margin: 0%;
              padding: 0%;
          }
          .secondry-div-container > p{
              color: white;
              font-family: monospace;
              font-size: 17px;
              text-align: center;
          }
          .sec-wrapper{
              display: flex;
              flex-flow: row wrap;
              margin-top: 20px;
              justify-content: space-evenly;
          }
          .wrapper-items{
              max-width: 280px;
              border-radius: 5px;
              margin-bottom: 30px;
              border: none;
          }
          .wrapper-items > img{
              border-radius: 4px;
              max-width: 280px;
          }
          .wrapper-items > h2 {
              color: white;
          }
          .wrapper-items > p{
              color: white;
              font-family: monospace;
          }
          
          .updates{
              max-width: 90%;
              padding: 40px 0px;
              margin: auto;
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              text-align: center;
          }
          .updates > h1{
              font-family: serif;
              text-transform: capitalize;
              font-size: 35px;
              line-height: 33px;
              color: #2C5F7F;
              margin: 0%;
              padding-bottom: 20px;
          }
          .updates-wrapper{
              display: flex;
              flex-direction: row;
              flex-wrap: wrap;
              justify-content: space-evenly;
          }
          .updates-items{
              max-width: 280px;
              padding: 10px;
              border-bottom: 1px solid #2C5F7F;
              
          }
          .updates-items > h2 > a{
              text-decoration: none;
              color: #2C5F7F;
              font-size: 12px;
              font-family: sans-serif;
              font-weight: bold;
          }
          .updates-images {
              max-width: 280px;
              height: 230px;
              border-radius: 4px;
          }
          .grow-container{
              max-width: 100%;
              padding: 20px 30px;
              background-color: #37756A;
              display: flex;
              flex-direction: column;
          }
          .grow-container > h1 {
              font-size: 35px;
              color: white;
              font-family: serif;
              text-transform: capitalize;
              text-align: center;
              margin: 0%;
              padding: 0%;
          }
          .grow-wrapper{
              max-width: 90%;
              margin: auto;
              display: flex;
              flex-direction: row;
              justify-content: space-evenly;
              padding: 30px;
          }
          .left-wrapper{
              padding-right: 20px;
              padding-top: 10px;
              margin-top: 0%;
              padding-top: 0%;
              display: flex;
              flex-direction: column;
              justify-content: space-between;
              align-items: start;
              text-align: left;
          }
          .grow-wrapper-items{
              color: white;
              max-width: 550px;
          }
          .grow-wrapper-items h2{
              color: white;
              font-size: 20px;
          }
          .grow-wrapper-items p{
              color: white;
              font-size: 16px;
          }
          .right-wrapper{
              max-width: 500px;
              text-align: right;
              display: none;
          }
          .right-wrapper > img {
              width: 500px;
              height: 500px;
              border-radius: 7px;
              display: none;
          }
          .profile{
              max-width: 90%;
              margin: auto;
              margin-top: 30px;
              display: flex;
              flex-direction: row;
              justify-content: center;
          }
          .left-profile-container{
              text-align: center;
          }
          .left-profile-container > h1 {
              font-size: 35px;
              margin: 0px;
              margin-top: 10px;
              padding: 0%;
              color: #37756A;
              text-transform: capitalize;
          }
          .left-profile-container > p{
              margin-bottom: 60px;
              margin-top: 20px;
              line-height: 20px;
              font-size: 15px;
              font-family: sans-serif;
              text-align: center;
          }
          .left-profile-container > a{
              max-width: 200px;
          font-size: 18px;
              text-decoration: none;
              color: white;
              text-align: center;
              border-radius: 4px;
              background-color: #37756A;
              padding: 15px;
              font-weight: bold;
              margin-top: 40px;
              margin-bottom: 20px;
          }
          .right-profile-container > img {
              max-width: 500px;
              max-height: 500px;
              display: none;
          }
          
      }
      
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
          }
          .hero{
              max-width: 90%;
              margin: auto;
              margin-top: 40px;
              color: white;
              display: flex;
              flex-flow: column;
              align-items: center;
          }
          .hero-heading{
              max-width: 90%;
              font-size: 45px;
              color: white;
              text-transform: capitalize;
              font-weight: bolder;
              font-family: serif;
              margin: 0%;
              padding: 0%;
              text-align: center;
              line-height: 43px;
          }
          .hero-para{
              max-width: 90%;
              color: white;
              font-size: 20px;
              text-align: center;
              font-family: monospace;
              text-align: center;
          }
          .hero-btn-container{
              margin-top: 30px;
          }
          .hero-btn{
              max-width: 230px;
              padding: 10px 15px;
              margin: 10px;
              text-decoration: none;
              border-radius: 4px;
              border: 1px solid white;
              color: white;
              font-weight: bolder;
              font-size: 20px;
              box-sizing: border-box;
              background-color: transparent;
              text-align: center;
          }
          .primary-container{
              width: 93%;
              margin: auto;
              margin-top: 30px;
              display: flex;
              flex-direction: column;
              
          }
          .p-heading{
              font-size: 37px;
              margin: 0%;
              padding: 0%;
              text-align: center;
              color: #37756A;
          }
          .p-para{
              text-align: center;
              font-size: 17px;
              font-family: monospace;
          }
          .div-container{
              margin-top: 20px;
              margin-bottom: 50px;
              display: flex;
              flex-flow: row wrap;
              justify-content: center;
          }
          .div-items{
              padding: 15px;
              max-width: 350px;
              border: 2px solid #37756A;
              margin: 10px;
              border-radius: 4px;
              box-sizing: border-box;
          }
          .div-items > h2 {
              color: #37756A;
              padding: 0%;
              margin: 0%;
              margin-bottom: 20px;
              font-size: 24px;
          }
          .div-items > p{
              font-family: monospace;
          }
          .primary-icons{
              font-size: 250px;
              color: #37756A;
          }
          .sec-container{
              background-color: #37756A;
              
          }
          .secondry-div-container{
              max-width: 90%;
              margin: auto;
              padding-top: 50px;
              padding-bottom: 50px;
              text-transform: capitalize;
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
          }
          .secondry-div-container > h1 {
              color: white;
              font-size: 50px;
              font-family: serif;
              margin: 0%;
              padding: 0%;
          }
          .secondry-div-container > p{
              color: white;
              font-family: monospace;
              font-size: large;
              text-align: center;
          }
          .sec-wrapper{
              display: flex;
              flex-flow: row wrap;
              justify-content: space-evenly;
          }
          .wrapper-items{
              max-width: 350px;
              border-radius: 5px;
              margin-bottom: 50px;
              /* border: 1px solid white; */
          }
          .wrapper-items > img{
              max-width: 350px;
              border-radius: 4px;
          }
          .wrapper-items > h2 {
              color: white;
          }
          .wrapper-items > p{
              color: white;
              font-family: monospace;
          }
          
          .updates{
              max-width: 90%;
              padding: 40px 0px;
              margin: auto;
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              text-align: center;
          }
          .updates > h1{
              font-family: serif;
              text-transform: capitalize;
              font-size: 50px;
              line-height: 40px;
              color: #2C5F7F;
              margin: 0%;
              padding-bottom: 20px;
          }
          .updates-wrapper{
              display: flex;
              flex-direction: row;
              flex-wrap: wrap;
              justify-content: space-evenly;
          }
          .updates-items{
              max-width: 350px;
              padding: 10px;
              border-bottom: 1px solid #2C5F7F;
              
          }
          .updates-items > h2 > a{
              text-decoration: none;
              color: #2C5F7F;
              font-size: 12px;
              font-family: sans-serif;
              font-weight: bold;
          }
          .updates-images {
              max-width: 350px;
              height: 230px;
              border-radius: 4px;
          }
          .grow-container{
              max-width: 100%;
              padding: 20px 30px;
              background-color: #37756A;
              display: flex;
              flex-direction: column;
          }
          .grow-container > h1 {
              font-size: 45px;
              color: white;
              font-family: serif;
              text-transform: capitalize;
              text-align: center;
              margin: 0%;
              padding: 0%;
          }
          .grow-wrapper{
              max-width: 90%;
              margin: auto;
              display: flex;
              flex-direction: row;
              justify-content: space-evenly;
              padding: 30px;
          }
          .left-wrapper{
              padding-right: 20px;
              padding-top: 10px;
              margin-top: 0%;
              padding-top: 0%;
              display: flex;
              flex-direction: column;
              justify-content: space-between;
              align-items: start;
              text-align: left;
          }
          .grow-wrapper-items{
              color: white;
              max-width: 600px;
          }
          .grow-wrapper-items h2{
              color: white;
              font-size: 25px;
          }
          .grow-wrapper-items p{
              color: white;
              font-size: 18px;
          }
          .right-wrapper{
              display: none;
          }
          .right-wrapper > img {
              display: none;
          }
          .profile{
              max-width: 90%;
              margin: auto;
              padding: 50px;
              display: flex;
              flex-direction: row;
              justify-content: center;
          }
          .left-profile-container{
              text-align: center;
          }
          .left-profile-container > h1 {
              font-size: 50px;
              margin: 0px;
              margin-top: 10px;
              padding: 0%;
              color: #37756A;
              text-transform: capitalize;
          }
          .left-profile-container > p{
              margin-bottom: 60px;
              margin-top: 20px;
              line-height: 28px;
              font-size: 25px;
              font-family: sans-serif;
              text-align: center;
          }
          .left-profile-container > a{
              max-width: 250px;
              font-size: 18px;
              text-decoration: none;
              color: white;
              text-align: center;
              border-radius: 4px;
              background-color: #37756A;
              padding: 20px;
              font-weight: bold;
              margin-top: 40px;
              margin-bottom: 20px;
          }
          .right-profile-container > img {
              max-width: 500px;
              max-height: 500px;
              display: none;
          }
      }
      @media only screen and (min-width:992px) {
          body{
              margin: 0%;
              padding: 0%;
          }
          .main-container{
              max-width: 100%;
              margin: 0%;
              padding: 0%;
              padding-bottom: 80px;
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
          }
          .hero{
              max-width: 85%;
              margin: auto;
              margin-top: 40px;
              color: white;
              display: flex;
              flex-flow: column;
              align-items: center;
          }
          .hero-heading{
              max-width: 85%;
              font-size: 53px;
              color: white;
              text-transform: capitalize;
              font-weight: bolder;
              font-family: serif;
              margin: 0%;
              padding: 0%;
              text-align: center;
              line-height: 46px;
          }
          .hero-para{
              max-width: 85%;
              color: white;
              font-size: 23px;
              text-align: center;
              font-family: monospace;
              text-align: center;
          }
          .hero-btn-container{
              margin-top: 30px;
          }
          .hero-btn{
              max-width: 250px;
              padding: 10px 15px;
              margin: 10px;
              text-decoration: none;
              border-radius: 4px;
              border: 1px solid white;
              color: white;
              font-weight: bolder;
              font-size: 23px;
              box-sizing: border-box;
              background-color: transparent;
              text-align: center;
          }
          .primary-container{
              width: 100%;
              margin: auto;
              margin-top: 30px;
              display: flex;
              flex-direction: column;
              
          }
          .p-heading{
              font-size: 50px;
              margin: 0%;
              padding: 0%;
              text-align: center;
              color: #37756A;
          }
          .p-para{
              text-align: center;
              font-size: large;
              font-family: monospace;
          }
          .div-container{
              max-width: 100%;
              margin: auto;
              margin-top: 20px;
              margin-bottom: 50px;
              display: flex;
              flex-flow: row wrap;
              justify-content: center;
          }
          .div-items{
              box-sizing: border-box;
              padding: 30px;
              max-width: 450px;
              border: 2px solid #37756A;
              margin: 20px;
              border-radius: 8px;
          }
          .div-items > h2 {
              color: #37756A;
              padding: 0%;
              margin: 0%;
          }
          .div-items > p{
              font-family: monospace;
          }
          .primary-icons{
              font-size: 250px;
              color: #37756A;
          }
          .sec-container{
              background-color: #37756A;
              
          }
          .secondry-div-container{
              max-width: 95%;
              margin: auto;
              padding-top: 50px;
              padding-bottom: 50px;
              text-transform: capitalize;
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
          }
          .secondry-div-container > h1 {
              color: white;
              font-size: 50px;
              font-family: serif;
              margin: 0%;
              padding: 0%;
          }
          .secondry-div-container > p{
              color: white;
              font-family: monospace;
              font-size: large;
              text-align: center;
          }
          .sec-wrapper{
              display: flex;
              flex-flow: row wrap;
              justify-content: space-evenly;
          }
          .wrapper-items{
              min-width: 450px;
              border-radius: 5px;
              margin-bottom: 50px;
          }
          .wrapper-items > img{
              min-width: 450px;
              border-radius: 4px;
          }
          .wrapper-items > h2 {
              color: white;
          }
          .wrapper-items > p{
              color: white;
              font-family: monospace;
          }
          
          .updates{
              max-width: 95%;
              padding: 40px 0px;
              margin: auto;
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              text-align: center;
          }
          .updates > h1{
              font-family: serif;
              text-transform: capitalize;
              font-size: 50px;
              line-height: 40px;
              color: #2C5F7F;
              margin: 0%;
              padding-bottom: 20px;
          }
          .updates-wrapper{
              display: flex;
              flex-direction: row;
              flex-wrap: wrap;
              justify-content: space-evenly;
          }
          .updates-items{
              max-width: 450px;
              padding: 10px;
              border-bottom: 1px solid #2C5F7F;
              
          }
          .updates-items > h2 > a{
              text-decoration: none;
              color: #2C5F7F;
              font-size: 12px;
              font-family: sans-serif;
              font-weight: bold;
          }
          .updates-images {
              min-width: 450px;
              border-radius: 4px;
          }
          .grow-container{
              max-width: 100%;
              padding: 20px 30px;
              background-color: #37756A;
              display: flex;
              flex-direction: column;
          }
          .grow-container > h1 {
              font-size: 45px;
              color: white;
              font-family: serif;
              text-transform: capitalize;
              text-align: center;
              margin: 0%;
              padding: 0%;
          }
          .grow-wrapper{
              max-width: 95%;
              margin: auto;
              display: flex;
              flex-direction: row;
              justify-content: space-evenly;
              padding: 30px;
          }
          .left-wrapper{
              padding-right: 20px;
              padding-top: 10px;
              margin-top: 0%;
              padding-top: 0%;
              display: flex;
              flex-direction: column;
              justify-content: space-between;
              align-items: start;
              text-align: left;
          }
          .grow-wrapper-items{
              color: white;
              max-width: 400px;
          }
          .grow-wrapper-items h2{
              color: white;
              font-size: 25px;
          }
          .grow-wrapper-items p{
              color: white;
              font-size: 18px;
          }
          .right-wrapper{
              display: inline-block;
          }
          .right-wrapper > img {
              display: block;
              border-radius: 4px;
          }
          .profile{
              max-width: 95%;
              margin: auto;
              padding: 50px;
              display: flex;
              flex-direction: row;
              justify-content: center;
          }
          .left-profile-container{
              display: flex;
              flex-direction: column;
              align-items: center;
              text-align: center;
              margin-top: 100px;
          }
          .left-profile-container > h1 {
              font-size: 45px;
              margin: 0px;
              margin-top: 10px;
              padding: 0%;
              color: #37756A;
              text-transform: capitalize;
          }
          .left-profile-container > p{
              margin-bottom: 60px;
              margin-top: 20px;
              line-height: 28px;
              font-size: 20px;
              font-family: sans-serif;
              text-align: center;
          }
          .left-profile-container > a{
              max-width: 250px;
              font-size: 18px;
              text-decoration: none;
              color: white;
              text-align: center;
              border-radius: 4px;
              background-color: #37756A;
              padding: 20px;
              font-weight: bold;
              margin-top: 20px;
              margin-bottom: 20px;
          }
          .right-profile-container > img {
              max-width: 500px;
              max-height: 500px;
              display: inline-block;
          }
      }
      @media only screen and (min-width:1200px) {
          body{
              margin: 0%;
              padding: 0%;
          }
          .main-container{
              max-width: 100%;
              margin: 0%;
              padding: 0%;
              padding-bottom: 80px;
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
          }
          .hero{
              max-width: 85%;
              margin: auto;
              margin-top: 60px;
              color: white;
              display: flex;
              flex-flow: column;
              align-items: center;
              padding-bottom: 30px;
          }
          .hero-heading{
              max-width: 85%;
              font-size: 50px;
              color: white;
              text-transform: capitalize;
              font-weight: bolder;
              font-family: serif;
              margin: 0%;
              padding: 0%;
              margin-bottom: 20px;
              text-align: center;
              line-height: 50px;
          }
          .hero-para{
              color: white;
              font-size: 18px !important;
              text-align: center;
              font-family: monospace;
              text-align: center;
          }
          .hero-btn-container{
              margin-top: 30px;
          }
          .hero-btn{
              max-width: 150px;
              padding: 10px 15px;
              margin: 10px;
              text-decoration: none;
              border-radius: 4px;
              border: 1px solid white;
              color: white;
              font-weight: bolder;
              font-size: 18px;
              box-sizing: border-box;
              background-color: transparent;
              text-align: center;
          }
          .primary-container{
              width: 100%;
              margin: auto;
              margin-top: 30px;
              display: flex;
              flex-direction: column;
              
          }
          .p-heading{
              font-size: 40px;
              margin-bottom: 20px;
              margin: 0%;
              padding: 0%;
              text-align: center;
              color: #37756A;
          }
          .p-para{
              text-align: center;
              font-size: large;
              font-family: monospace;
          }
          .div-container{
              margin-top: 20px;
              margin-bottom: 50px;
              display: flex;
              flex-flow: row wrap;
              justify-content: center;
          }
          .div-items{
              padding: 30px;
              max-width: 450px;
              border: 2px solid #37756A;
              margin: 20px;
              border-radius: 8px;
          }
          .div-items > h2 {
              color: #37756A;
              padding: 0%;
              margin: 0%;
          }
          .div-items > p{
              font-family: monospace;
          }
          .primary-icons{
              font-size: 250px;
              color: #37756A;
          }
          .sec-container{
              background-color: #37756A;
              
          }
          .secondry-div-container{
              max-width: 80%;
              margin: auto;
              padding: 50px;
              text-transform: capitalize;
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: space-around;
          }
          .secondry-div-container > h1 {
              color: white;
              font-size: 50px;
              font-family: serif;
              margin: 0%;
              padding: 0%;
          }
          .secondry-div-container > p{
              color: white;
              font-family: monospace;
              font-size: large;
              text-align: center;
          }
          .sec-wrapper{
              display: flex;
              flex-flow: row wrap;
              justify-content: space-evenly;
          }
          .wrapper-items{
              max-width: 450px;
              border-radius: 5px;
              margin-bottom: 50px;
          }
          .wrapper-items > img{
              min-width: 450px;
              border-radius: 4px;
          }
          .wrapper-items > h2 {
              color: white;
          }
          .wrapper-items > p{
              color: white;
              font-family: monospace;
          }
          
          .updates{
              max-width: 80%;
              padding: 40px 0px;
              margin: auto;
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              text-align: center;
          }
          .updates > h1{
              font-family: serif;
              text-transform: capitalize;
              font-size: 50px;
              line-height: 40px;
              color: #2C5F7F;
              margin: 0%;
              padding-bottom: 20px;
          }
          .updates-wrapper{
              display: flex;
              flex-direction: row;
              flex-wrap: wrap;
              justify-content: space-evenly;
          }
          .updates-items{
              max-width: 450px;
              padding: 10px;
              border-bottom: 1px solid #2C5F7F;
              
          }
          .updates-items > h2 > a{
              text-decoration: none;
              color: #2C5F7F;
              font-size: 12px;
              font-family: sans-serif;
              font-weight: bold;
          }
          .updates-images {
              min-width: 450px;
              height: 230px;
              border-radius: 4px;
          }
          .grow-container{
              max-width: 100%;
              padding: 20px 30px;
              background-color: #37756A;
              display: flex;
              flex-direction: column;
          }
          .grow-container > h1 {
              font-size: 45px;
              color: white;
              font-family: serif;
              text-transform: capitalize;
              text-align: center;
              margin: 0%;
              padding: 0%;
          }
          .grow-wrapper{
              max-width: 90%;
              margin: auto;
              display: flex;
              flex-direction: row;
              justify-content: space-between;
              padding: 30px;
          }
          .left-wrapper{
              padding-right: 20px;
              padding-top: 10px;
              margin-top: 0%;
              padding-top: 0%;
              display: flex;
              flex-direction: column;
              justify-content: space-between;
              align-items: start;
              text-align: left;
          }
          .grow-wrapper-items{
              color: white;
              max-width: 400px;
          }
          .grow-wrapper-items h2{
              color: white;
              font-size: 25px;
          }
          .grow-wrapper-items p{
              color: white;
              font-size: 18px;
          }
          .right-wrapper{
              display: inline-block;
          }
          .right-wrapper > img {
              display: block;
              border-radius: 4px;
          }
          .profile{
              max-width: 80%;
              margin: auto;
              padding: 50px;
              display: flex;
              flex-direction: row;
              justify-content: center;
          }
          .left-profile-container{
              display: flex;
              flex-direction: column;
              align-items: center;
              text-align: center;
              margin-top: 100px;
          }
          .left-profile-container > h1 {
              font-size: 45px;
              margin: 0px;
              margin-top: 10px;
              padding: 0%;
              color: #37756A;
              text-transform: capitalize;
          }
          .left-profile-container > p{
              margin-bottom: 60px;
              margin-top: 20px;
              line-height: 28px;
              font-size: 20px;
              font-family: sans-serif;
              text-align: center;
          }
          .left-profile-container > a{
              max-width: 250px;
              font-size: 18px;
              text-decoration: none;
              color: white;
              text-align: center;
              border-radius: 4px;
              background-color: #37756A;
              padding: 20px;
              font-weight: bold;
              margin-top: 20px;
              margin-bottom: 20px;
          }
          .right-profile-container > img {
              max-width: 500px;
              max-height: 500px;
              display: inline-block;
          }
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
      .footer-col ul{
        padding-left: 0 !important;
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
      body{
        overflow-x: hidden;
      }
      .reviews-section {
            padding: 50px 20px;
            background-color: #ffffff;
        }
        .section-heading {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
            font-size: 2.5em;
        }
        .reviews-slider {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .review-slide {
            width: 50%;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-right: 20px;
        }
        .review-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .reviewer-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
        }
        .reviewer-info {
            flex-grow: 1;
        }
        .reviewer-name {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        .star-rating {
            color: #ffc107;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .review-text {
            color: #666;
            line-height: 1.6;
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
                @if(session()->has('FRONT_USER_LOGIN'))
                @if($users->type=='employee') 
                <button class="btn btn-light position-relative"><a  href="/cand_profile" style="text-decoration:none;color:#37756A;font-weight:bold;text-align:center;">
                        Profile</a></button>
                @else
                        <button class="btn btn-light position-relative"><a  href="/profile" style="text-decoration:none;color:#37756A;font-weight:bold;text-align:center;">
                        Profile
                    @if($total_jobs != 0)
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ $total_jobs }}+
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
                <button><a class="btn ml-2" href="/logout" style="text-decoration:none;color:#37756A;font-weight:bold;">Logout</a></button>
    
                @else
                    <button><a class="btn" href="/login" style="text-decoration:none;color:#37756A;font-weight:bold;">Login</a></button>
                    <button ><a class="btn" href="/signup" style="text-decoration:none;color:#37756A;font-weight:bold;">Signup</a></button>
                @endif
     
                </div>
        </header>
        <section class="hero">
            <h1 class="hero-heading" id="hero-heading">Transform Your Career and Discover Endless Possibilities with Top Employers</h1>
            <p class="hero-para">Whether you’re hiring Employee #2 or 200 new employees,
                NexHire is all-in-one ,  recruiting software helps you
                find the best candidates and turn them into employees.</p>
            <div class="hero-btn-container">
              @if($users)
                @if($users->type=='employee') 
                    <a class="hero-btn" href="/candidate">Want A Job</a>
                @elseif($users->type=='employer')
                    <a class="hero-btn" href="/organization">Post A Job</a>
                @endif        
                @else
                                                <a class="hero-btn" href="/candidate">Want A Job</a>
                    <a class="hero-btn" href="/organization">Post A Job</a>
                @endif
                

            </div>
        </section>
    </section>

    <section class="primary-container">
        <h1 class="p-heading">Source And Attract Top Talent</h1>
        <p class="p-para">From built-in passive candidate sourcing to one-click job posting to 400+ sites, 
            NexHire helps you meet enough great people to choose the best person for the job.</p>
        <div class="div-container">
            <div class="div-items">
                <i class="material-icons primary-icons" style="font-size:60px;">computer</i><br> 
                <h2>AI Recommendation System</h2>
                <p>An AI recommendation system will compare job seeker profiles with organization job 
                    descriptions to suggest matching profiles.</p>
            </div>
            <div class="div-items">
                <i class="fa-regular fa-address-card" style="font-size:60px; color: #37756A; margin-bottom: 15px;"></i>
                <h2>User Registration</h2>
                <p>Job seekers and organizations can register with the platform by providing personal,
                     academic, and professional details.</p>
            </div>
            <div class="div-items">
                <svg xmlns="http://www.w3.org/2000/svg" style="font-size:60px; margin-bottom: 15px;" fill="#37756A" viewbox="0 -960 960 960" width="65px" height="65px"><path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg>
                <h2>Data Collection Form</h2>
                <p>A comprehensive data collection form will capture information such as 
                    personal details, academic history, extra courses, experiences, and skills from job seekers</p>
            </div>
            <div class="div-items">

                <i class="fa-regular fa-envelope" style="font-size:60px; color: #37756A; margin-bottom: 15px;"></i>
                <h2>Email Notifications</h2>
                <p>The system will send email notifications to job seekers whose profiles match organization 
                    requirements, inviting them for initial testing.</p>
            </div>
            <div class="div-items">
                <i class="fa-regular fa-address-card" style="font-size:60px; color: #37756A; margin-bottom: 15px;"></i>
                <h2>Profile Updating</h2>
                <p>A profile updating button will allow users to improve their resumes for future opportunities.

                </p>
            </div>
            <div class="div-items">
                <svg xmlns="http://www.w3.org/2000/svg" height="65px" viewBox="0 -960 960 960" width="65px" 
                fill="#37756A"><path d="M360-320h80v-120h120v-80H440v-120h-80v120H240v80h120v120ZM160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h480q33 0 56.5 23.5T720-720v180l160-160v440L720-420v180q0 33-23.5 56.5T640-160H160Zm0-80h480v-480H160v480Zm0 0v-480 480Z"/></svg>
                <h2>Chatbot and Video Calling</h2>
                <p>The platform will feature a chatbot and video calling facility to facilitate communication
                     between job seekers and organizations</p>
            </div>
        </div>
    </section>
   
    <section class="sec-container">
        <div class="secondry-div-container">
            <h1>Make the right hiring decisions</h1>
            <p>Guide your hiring teams through fair and objective evaluations so
                you can mitigate bias, evaluate objectively and move the best <br>
                candidates forward.</p>
                <div class="sec-wrapper">
                <div class="wrapper-items">
                    <img src="/storage/media/Payment.jpg" alt="AI Recommendation" width="350px" height="200px"><br>
                    <h2>Registration Fee Payment</h2>
                    <p>Job seekers will pay a registration fee during the registration process, while organizations will 
                        also pay charges for utilizing the platform's services.</p>
                </div>
                <div class="wrapper-items">
                    <img src="/storage/media/find candidate.jpg" alt="AI Recommendation" width="350px" height="200px"><br>
                    <h2>Find and attract candidates</h2>
                    <p>Fill your pipeline quickly with one-click job posting, AI-powered sourcing, employee referrals and more.</p>
                </div>
                <div class="wrapper-items">
                    <img src="/storage/media/find cand.JPG" alt="AI Recommendation" width="350px" height="200px"><br>
                    <h2>Move the right applicants forward</h2>
                    <p>Collaborate with hiring teams to evaluate applicants, gather feedback and decide who's best,
                         all in one recruiting system.</p>
                </div>
                <div class="wrapper-items">
                    <img src="/storage/media/AI decision.jpg" alt="AI Recommendation" width="350px" height="200px"><br>
                    <h2>Make the best hire,
                        in half the time</h2>
                    <p>Move faster on a recruiting platform that automates process and manual tasks, like 
                        scheduling interviews and getting approvals.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="updates">
        <h1>Check out the latest product news and updates
            from Our Platform</h1>
            <div class="updates-wrapper">
                <div class="updates-items">
                    <img class="updates-images" src="/storage/media/update 11.JPG" alt="News And Updates">
                    <h2><a href="#">NexHire Introduces Advanced Analytics Dashboard for Employers!</a></h2>
                </div>
                <div class="updates-items">
                    <img class="updates-images" src="/storage/media/update 2.JPG" alt="News And Updates">
                    <h2><a href="#">NexHire Implements Secure Video Interview Functionality!</a></h2>
                </div>
                <div class="updates-items">
                    <img class="updates-images" src="/storage/media/update 3.JPG" alt="News And Updates">
                    <h2><a href="#">Enhanced Candidate Profile Customization Launched on NexHire!</a></h2>
                </div>
                <div class="updates-items" style="border-bottom :none">
                    <img class="updates-images" src="/storage/media/update 4.JPG" alt="News And Updates">
                    <h2><a href="#">New AI-Powered Matching System Rolled Out for NexHire Platform!</a></h2>
                </div>
            </div>
    </section>
    <section class="grow-container">
        <h1>More than 27,000 companies around 
            the <br>world have chosen NexHire as their ATS</h1>
        <div class="grow-wrapper">
            <div class="left-wrapper">
                <div class="grow-wrapper-items">
                    <h2>Expert advice</h2>
                    <p>Make the right moves with help from thousands of hiring templates and tutorials.</p>
                    <hr>
                </div>
                <div class="grow-wrapper-items">
                    <h2>Fast, global support</h2>
                    <p>Reach our award-winning support team in about 25 seconds by phone or chat.</p>
                    <hr>
                </div>
                <div class="grow-wrapper-items">
                    <h2>Assisted onboarding</h2>
                    <p>Get up and running in days not months - NexHire is just that easy to use.</p>
                    <hr>
                </div>
            </div>
            <div class="right-wrapper">
                <img src="/storage/media/screening.jpg" alt="Images">
            </div>
        </div>
    </section>
    <section class="profile">
        <div class="left-profile-container">
            <h1>Let’s grow together</h1>
            <p>Explore our full platform with a 15-day free trial. <br>
            Post jobs, get candidates and onboard employees all in one place.</p>
            <a href="#">Update My Profile</a>
        </div>
        <div class="right-profile-container">
            <img src="/storage/media/screening7.jpg" alt="Update Profile">
        </div>
    </section>

    
 
  

    <section class="reviews-section">
        <h2 class="section-heading">Client Reviews</h2>
        <div class="reviews-slider js-flickity" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true, "autoPlay": 3000 }'>
            <!-- Review 1 -->
            <div class="review-slide">
                <div class="review-header">
                    <img src="https://media.istockphoto.com/id/1040916392/photo/photo-of-teenage-young-boy-holds-something-on-palm.jpg?s=612x612&w=0&k=20&c=sVBDU5pFCffAsC_1ZiNKBjGGp532IHIRyvZrPiQOtvs=" alt="Reviewer" class="reviewer-image">
                    <div class="reviewer-info">
                        <div class="reviewer-name">Sarah Johnson</div>
                        <div class="star-rating">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">Exceptional recruitment service that truly understands the nuanced needs of modern tech companies. Their candidate screening process is remarkably thorough and precise.</p>
            </div>

            <!-- Review 2 -->
            <div class="review-slide">
                <div class="review-header">
                    <img src="https://media.istockphoto.com/id/1062482646/photo/scared-little-girl-shrugging.jpg?s=612x612&w=0&k=20&c=OjLqNUaGggPg7DXOFxf20p32-KtfYdiEOQlljcIX4M8=" alt="Reviewer" class="reviewer-image">
                    <div class="reviewer-info">
                        <div class="reviewer-name">Michael Chen</div>
                        <div class="star-rating">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">Innovative approach to talent acquisition. They helped us find top-tier candidates who perfectly match our company's culture and technical requirements.</p>
            </div>

            <!-- Review 3 -->
            <div class="review-slide">
                <div class="review-header">
                    <img src="https://img.freepik.com/free-photo/portrait-cute-teen-boy-pointing-upper-left-corner-t-shirt-looking-surprised-front-view_176474-109051.jpg" alt="Reviewer" class="reviewer-image">
                    <div class="reviewer-info">
                        <div class="reviewer-name">Emily Rodriguez</div>
                        <div class="star-rating">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">Their recruitment strategy is cutting-edge. Quick, efficient, and they consistently deliver high-quality candidates that exceed expectations.</p>
            </div>

            <!-- Review 4 -->
            <div class="review-slide">
                <div class="review-header">
                    <img src="https://img.freepik.com/free-photo/front-view-young-male-grey-t-shirt-cleaning-out-his-shoulder_140725-27905.jpg" alt="Reviewer" class="reviewer-image">
                    <div class="reviewer-info">
                        <div class="reviewer-name">David Kim</div>
                        <div class="star-rating">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">Remarkable talent acquisition team that understands the intricacies of modern workplace dynamics and recruiting strategies.</p>
            </div>

            <!-- Review 5 -->
            <div class="review-slide">
                <div class="review-header">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQckPCKCZSDTjdxtlguim1GrRXrDzzdRK4W2yadYnlg-ydi0uAF_4df9d7ZsYVmPhnJ1bI&usqp=CAU" alt="Reviewer" class="reviewer-image">
                    <div class="reviewer-info">
                        <div class="reviewer-name">Rachel Thompson</div>
                        <div class="star-rating">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">Incredible recruitment experience that transformed our hiring process. Their insights and candidate matching are truly game-changing.</p>
            </div>

            <!-- Review 6 -->
            <div class="review-slide">
                <div class="review-header">
                    <img src="https://img.freepik.com/premium-photo/happy-little-patriotic-boy-holding-american-flag-usa-celebrate-4th-july-happy-independence-day_723616-2763.jpg?semt=ais_hybrid" alt="Reviewer" class="reviewer-image">
                    <div class="reviewer-info">
                        <div class="reviewer-name">Alex Martinez</div>
                        <div class="star-rating">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">Professional, efficient, and deeply knowledgeable about talent acquisition. They've been an invaluable partner in our recruitment efforts.</p>
            </div>

            <!-- Review 7 -->
            <div class="review-slide">
                <div class="review-header">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsZdhwXf7EdTPy0v3dJMLYFXPNCC3pJ4r6IQ&s" alt="Reviewer" class="reviewer-image">
                    <div class="reviewer-info">
                        <div class="reviewer-name">Jessica Wang</div>
                        <div class="star-rating">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">Exceptional service that goes beyond traditional recruitment. Their strategic approach has dramatically improved our hiring quality.</p>
            </div>

            <!-- Review 8 -->
            <div class="review-slide">
                <div class="review-header">
                    <img src="https://media.istockphoto.com/id/1384332904/photo/laughing-young-man.jpg?s=612x612&w=0&k=20&c=FsGVyzNwhKoZMLoVTUm87Y-RMunRciRjHxn_OKH9nWw=" alt="Reviewer" class="reviewer-image">
                    <div class="reviewer-info">
                        <div class="reviewer-name">Robert Taylor</div>
                        <div class="star-rating">★★★★½</div>
                    </div>
                </div>
                <p class="review-text">Innovative recruitment solutions that truly understand the complexities of modern talent acquisition and company needs.</p>
            </div>

            <!-- Review 9 -->
            <div class="review-slide">
                <div class="review-header">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/033/333/970/small/cute-boy-wearing-blank-empty-white-t-shirt-mockup-for-design-template-ai-generated-free-photo.jpg" alt="Reviewer" class="reviewer-image">
                    <div class="reviewer-info">
                        <div class="reviewer-name">Linda Garcia</div>
                        <div class="star-rating">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">Their recruitment methodology is sophisticated and precise. They consistently deliver candidates that are perfect cultural and professional fits.</p>
            </div>

            <!-- Review 10 -->
            <div class="review-slide">
                <div class="review-header">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnaofZvy6STAMr06xDaF-jKrxqJAfE6DwHrhwtsdUieytSJQwMJezU2sGDjA8yy65QCjs&usqp=CAU" alt="Reviewer" class="reviewer-image">
                    <div class="reviewer-info">
                        <div class="reviewer-name">Kevin Nguyen</div>
                        <div class="star-rating">★★★★★</div>
                    </div>
                </div>
                <p class="review-text">A recruitment partner that truly understands the evolving landscape of talent acquisition and delivers exceptional results consistently.</p>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>