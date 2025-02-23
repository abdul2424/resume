
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
.btn-section a{
    text-decoration: none;
    color: #37756A;
}
.left-sec{
    display: flex;
    flex-direction:column;
    width:400px;
    justify-content:center;

}
.contain{
    width:80%;
    margin:auto;
    display:flex;
    flex-direction:row;
    justify-content:space-between;
}
.left-sec h1{
    color: #77E5A4;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 50px;
    margin-top: 40px;
    text-transform: capitalize;
}
.left-sec p{
    font-size: 20px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    color:#384349;
    line-height: 1.9rem;
    
}
.contain img{
    width:500px;
    height:450px;
    border-radius: 10px;
}
@media only screen and (max-width:660px){
    .left-sec{
        display: flex;
        flex-direction:column;
        width:200px;
      
    
    }
    .contain{
        width:90%;
        margin:auto;
        display:flex;
        flex-direction:row;
        justify-content:space-between;
    }
    .left-sec h1{
        color: #77E5A4;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 19px;
        margin-top: 10px;
        text-transform: capitalize;
    }
    .left-sec p{
        font-size: 10px;
        max-width: 200px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:#384349;
        line-height: 1.1rem;
        
    }
    .contain img{   
        max-width:200px;
        height:150px;
        border-radius: 10px;
        
    }
    
}
@media only screen and (min-width:660px){
    .left-sec{
        display: flex;
        flex-direction:column;
        width:300px;
        justify-content:center;
    
    }
    .contain{
        width:80%;
        margin:auto;
        display:flex;
        flex-direction:row;
        justify-content:space-between;
    }
    .left-sec h1{
        color: #77E5A4;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 24px;
        margin-top: 10px;
        text-transform: capitalize;
    }
    .left-sec p{
        font-size: 12px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:#384349;
        line-height: 1.5rem;
        
    }
    .contain img{
        width: 300px;
        height:250px;
        border-radius: 10px;
        
    }
    
}
@media only screen and (min-width:768px){
    .left-sec{
        display: flex;
        flex-direction:column;
        width:310px;
        justify-content:center;
    
    }
    .contain{
        width:80%;
        margin:auto;
        display:flex;
        flex-direction:row;
        justify-content:space-between;
    }
    .left-sec h1{
        color: #77E5A4;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 27px;
        margin-top: 10px;
        text-transform: capitalize;
    }
    .left-sec p{
        font-size: 18px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:#384349;
        line-height: 1.6rem;
        
    }
    .contain img{
        width:300px;
        height:260px;
        border-radius: 10px;
    }
    
}
@media only screen and (min-width:992px){
    .left-sec{
        display: flex;
        flex-direction:column;
        width:380px;
        justify-content:center;
    
    }
    .contain{
        width:85%;
        margin:auto;
        display:flex;
        flex-direction:row;
        justify-content:space-between;
    }
    .left-sec h1{
        color: #77E5A4;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 30px;
        margin-top: 10px;
        text-transform: capitalize;
    }
    .left-sec p{
        font-size: 22px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:#384349;
        line-height: 1.7rem;
        margin-top:10px;
        
    }
    .contain img{
        width:320px;
        height:280px;
        border-radius: 10px;
    }
    
}
@media only screen and (min-width:1200px){
    .left-sec{
        display: flex;
        flex-direction:column;
        width:400px;
        justify-content:center;
    
    }
    .contain{
        width:80%;
        margin:auto;
        display:flex;
        flex-direction:row;
        justify-content:space-between;
    }
    .left-sec h1{
        color: #77E5A4;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 53px;
        margin-top: 10px;
        text-transform: capitalize;
    }
    .left-sec p{
        font-size: 18px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:#384349;
        line-height: 1.7rem;
        
    }
    .contain img{
        width: 400px;
        height:350px;
        border-radius: 10px;
    }
    
}
.left-sec{
    display: flex;
    flex-direction:column;
    width:400px;
    justify-content:center;

}
.body1{
    width:80%;
    margin:auto;
    display:flex;
    flex-direction:row-reverse;
    justify-content:space-between;
}
.right-sec1{
    display: flex;
    flex-direction:column;
    width:400px;
    justify-content:center;
}
.right-sec1 h1{
    color: #77E5A4;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 50px;
    margin-top: 40px;
    text-transform: capitalize;
}
.right-sec1 p{
    font-size: 20px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    color:#384349;
    line-height: 1.9rem;
}
.body1 img{
    width:500px;
    height:450px;
    border-radius: 10px;
}
@media only screen and (max-width:660px){
    .body1{
        width:95%;
        margin:auto;
        display:flex;
        flex-direction:row-reverse;
        justify-content:space-evenly;
    }
    .right-sec1{
        display: flex;
        flex-direction:column;
        width:300px;
        padding-left: 20px;
    
    }
    .right-sec1 h1{
        color: #77E5A4;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 19px;
        margin-top: 10px;
        text-transform: capitalize;
    }
    .right-sec1 p{
       max-width: 200px;
        font-size: 10px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:#384349;
        line-height: 1.1rem;
        
    }
    .body1 img{
        max-width:200px;
        height:150px;
        border-radius: 10px;
        /* margin-left: 40px; */
        margin-top: 18px;
    }
    
}
@media only screen and (min-width:660px){
    .right-sec1{
        display: flex;
        flex-direction:column;
        /* width:300px; */
        margin-left: 100px;
    
    }
    .body1{
        width:80%;
        margin:auto;
        display:flex;
        flex-direction:row-reverse;
        justify-content:space-between;
    }
    .right-sec1 h1{
        color: #77E5A4;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 24px;
        margin-top: 10px;
        text-transform: capitalize;
    }
    .right-sec1 p{
        font-size: 12px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:#384349;
        line-height: 1.5rem;
        
    }
    .body1 img{
        width: 270px;
        height:240px;
        border-radius: 10px;
    }
    
}
@media only screen and (min-width:768px){
    .right-sec1{
        display: flex;
        flex-direction:column;
        /* width:360px; */
        justify-content:center;
        margin-left: 90px;
    
    }
    .body1{
        width:80%;
        margin:auto;
        display:flex;
        flex-direction:row-reverse;
        justify-content:space-between;
    }
    .right-sec1 h1{
        color: #77E5A4;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 27px;
        margin-top: 10px;
        text-transform: capitalize;
    }
    .right-sec1 p{
        font-size: 18px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:#384349;
        line-height: 1.5rem;
        
    }
    .body1 img{
        width:300px;
        height:260px;
        border-radius: 10px;
    }
    
}
@media only screen and (min-width:992px){
    .right-sec1{
        display: flex;
        flex-direction:column;
        /* width:380px; */
        justify-content:center;
        margin-left: 90px;
    
    }
    .body1{
        width:85%;
        margin:auto;
        display:flex;
        flex-direction:row-reverse;
        justify-content:space-between;
    }
    .right-sec1 h1{
        color: #77E5A4;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 30px;
        margin-top: 10px;
        text-transform: capitalize;
    }
    .right-sec1 p{
        font-size: 22px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:#384349;
        line-height: 1.7rem;
        margin-top:10px;
        
    }
    .body1 img{
        width:320px;
        height:280px;
        border-radius: 10px;
    }
    
}
@media only screen and (min-width:1200px){
    .right-sec1{
        display: flex;
        flex-direction:column;
        /* width:400px; */
        justify-content:center;
    
    }
    .body1{
        width:80%;
        margin:auto;
        display:flex;
        flex-direction:row-reverse;;
        justify-content:space-between;
    }
    .right-sec1 h1{
        color: #77E5A4;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 53px;
        margin-top: 10px;
        text-transform: capitalize;
    }
    .right-sec1 p{
        font-size: 18px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:#384349;
        line-height: 1.7rem;
        
    }
    .body1 img{
        width: 500px;
        height:450px;
        border-radius: 10px;
        
    }
    
}
.body2{
    background-color: #37756A;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.body2 > h1{
    text-align: center;
    color: white;
    padding-top: 60px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;

}
.body2 p{
    margin-top: 30px;
    color: white;
    padding: 0px 170px;
    font-size: 16px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    line-height: 1.5rem;
}
.body2 input[type=button]{
    background-color:white;
    color: #384349;
    display: flex;
    align-items:center;
    justify-content:center;
    text-align: center;
    width: 150px;
    border-radius: 4px;
    border: none;
}
@media only screen and (max-width:660px) {
    .body2{
    background-color: #37756A;
    height: 340px;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
   align-items: center;
   
}
.body2 h1{
    margin-top: 20px;
    text-align: center;
    color: white;
    padding-top: 20px;
    font-size: medium;
    font-family:Verdana, Geneva, Tahoma, sans-serif;

}
.body2 p{
  width: 400px;
    margin-top: 20px;
    padding: 5px 20px;
    color: white;
    text-align: center;
    font-size: 16px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    line-height: 1.5rem;
}
.body2 input[type=button]{
    display: flex;
   margin-top: 20px;
   margin-bottom: 40px;
   text-align: center;
    background-color: white;
  border: none;
  color: #37756A;
  padding: 12px 20px;
  text-decoration: none;
  border-radius: 10px;
  cursor: pointer;}
}

@media only screen and (min-width:660px) {
    .body2{
    background-color: #37756A;
    height: 350px;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
   
   
}
.body2 h1{
    text-align: center;
    color: white;
    padding-top: 15px;
    font-size: 20px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;

}
.body2 p{
   display: flex;
    margin: auto;
    width: 700px;
   margin-top: 20px;
    color: white;
    text-align: center;
    /* padding: 0px 170px 0px 170px; */
    font-size: 16px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    line-height: 1.4rem;
}
.body2 input[type=button]{
    display: flex;
   margin-top: 20px;
   margin-bottom: 40px;
   margin-right: auto;
   margin-left: auto;
    background-color: white;
  border: none;
  color: #37756A;
  padding: 12px 23px;
  text-decoration: none;
 
  border-radius: 10px;
  cursor: pointer;}

}
@media only screen and (min-width:768px) {
    .body2{
    background-color: #37756A;
    height: 290px;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
   
   
}
.body2 h1{
    margin-top: 20px;
    text-align: center;
    color: white;
    padding-top: 15px;
    font-size: 25px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;

}
.body2 p{
   display: flex;
    /* margin: auto; */
    width: 680px;
   margin-top: 20px;
    color: white;
    text-align: center;
    /* padding: 0px 170px 0px 170px; */
    font-size: 16px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    line-height: 1.4rem;
}
.body2 input[type=button]{
    display: flex;
   margin-top: 20px;
   margin-bottom: 40px;
   margin-right: auto;
   margin-left: auto;
    background-color: white;
  border: none;
  color: #37756A;
  padding: 12px 23px;
  text-decoration: none;
 
  border-radius: 10px;
  cursor: pointer;}
}
@media only screen and (min-width:992px) {
    .body2{
    background-color: #37756A;
    height: 300px;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
   
   
}
.body2 h1{
    text-align: center;
    color: white;
    padding-top: 35px;
    font-size: 25px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;

}
.body2 p{
   display: flex;
    margin: auto;
    width: 800px;
   margin-top: 20px;
    color: white;
    text-align: center;
    /* padding: 0px 170px 0px 170px; */
    font-size: 16px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    line-height: 1.4rem;
}
.body2 input[type=button]{
    display: flex;
   margin-top: 20px;
   margin-bottom: 40px;
   align-items: center;
   justify-content: center;
   border: none;
   outline: none;
    background-color: white;
  border: none;
  color: #37756A;
  padding: 12px 23px;
  text-decoration: none;
 
  border-radius: 10px;
  cursor: pointer;}
}
.team{
    width: 80%;
    margin: auto;
    background-color: #f5f5f5;
}
.row1 {
  display: flex;
  flex-wrap: wrap;
  padding: 2em 1em;
  text-align: center;
}
.column {
  width: 100%;
  padding: 0.5em 0;
}
.row1 h1 {
  width: 100%;
  text-align: center;
  font-size: 3.5em;
  color: #37756A;
}
.card {
  box-shadow: 0 0 2.4em rgba(25, 0, 58, 0.1);
  padding: 3.5em 1em;
  border-radius: 0.6em;
  color: #37756A;
  cursor: pointer;
  transition: 0.3s;
  background-color: #ffffff;
}
.card .img-container {
  width: 8em;
  height: 8em;
  background-color: #37756A;
  padding: 0.5em;
  border-radius: 50%;
  margin: 0 auto 2em auto;
}
.card img {
  width: 100%;
  border-radius: 50%;
}
.card h3 {
  font-weight: 500;
}
.card p {
  font-weight: 300;
  text-transform: uppercase;
  margin: 0.5em 0 2em 0;
  letter-spacing: 2px;
}
.icons {
  width: 50%;
  min-width: 180px;
  margin: auto;
  display: flex;
  justify-content: space-between;
}
.card a {
  text-decoration: none;
  color: #37756A;
  font-size: 1.4em;
}
.card:hover {
  background: linear-gradient(#37756A, #317d6f);
  color: #ffffff;
}
.card:hover a{
    color: #ffffff;
}
.card:hover .img-container {
  transform: scale(1.15);
  background-color: #ffffff;
}
@media screen and (min-width: 768px) {
  section {
    padding: 1em 7em;
  }
}
@media screen and (min-width: 992px) {
  section {
    padding: 1em;
  }
  .card {
    padding: 5em 1em;
  }
  .column {
    flex: 0 0 33.33%;
    max-width: 33.33%;
    padding: 0 1em;
  }
}


    


  .last-wrap{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 80%;
    margin: auto;
  }
  .last-wrap .head {
    /* width: 50%; */
    /* height: 300px; */
    display: flex;
    flex-direction: column;
  }
  .last-wrap .head h1{
    color: #37756A;
    font-size: 40px;
    text-transform: capitalize;
    margin-top: 30px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   
  }
  .head p{
    color: #37756A;
    font-size: 14px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   margin-top: 10px;
  }
  .img img{
    height: 400px;
    width: 400px; 
    margin-top: 40px;
    margin-bottom: 40px;
  }
  .logos{
    display: flex;
    flex-wrap: wrap;
    /* align-items: center; */
    /* justify-content: center; */
    
  }
  .logos img{
    width: 100px;
    height: 100px; 
    margin: 3px;
    
  }
  .cover{
    display: flex;
    flex-direction: column;
  }
.logo1{
    display: flex;
    flex-wrap: wrap;
    /* justify-content: center; */

}
.logo1 img{
    width: 100px;
    height: 100px; 
    margin: 3px;
    margin-top: -30px;
    
  }
  @media only screen and (max-width:660px){
    .last-wrap{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 90%;
    margin: auto;
  }
  .last-wrap .head {
    /* width: 50%; */
    /* height: 300px; */
    display: flex;
    flex-direction: column;
  }
  .last-wrap .head h1{
    color: #37756A;
    width: 250px;
    font-size: 18px;
    text-transform: capitalize;
    margin-top: 30px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   
  }
  .head p{
    color: #37756A;
    font-size: 10px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   margin-top: 10px;
   margin-bottom: 10px;
  }
  .img img{
    height: 180px;
    width: 180px; 
    margin-top: 40px;
  }
  .logos{
    display: flex;
    flex-wrap: wrap;
    /* align-items: center; */
    /* justify-content: center; */
    
  }
  .logos img{
    width: 30px;
    height: 30px; 
    margin: 3px;
    
  }
  .cover{
    display: flex;
    flex-direction: column;
  }
.logo1{
    display: flex;
    flex-wrap: wrap;
    /* justify-content: center; */

}
.logo1 img{
    width: 30px;
    height: 30px; 
    margin: 3px;
    margin-top: -8px;
    
    
  }
  }
  @media only screen and (min-width:660px){
    .last-wrap{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 85%;
    margin: auto;
  }
  .last-wrap .head {
    /* width: 50%; */
    /* height: 300px; */
    display: flex;
    flex-direction: column;
  }
  .last-wrap .head h1{
    color: #37756A;
    width: 280px;
    font-size: 20px;
    text-transform: capitalize;
    margin-top: 30px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   
  }
  .head p{
    color: #37756A;
    font-size: 10px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   margin-top: 12px;
   margin-bottom: 10px;
  }
  .img img{
    height: 200px;
    width: 200px; 
    margin-top: 40px;
  }
  .logos{
    display: flex;
    flex-wrap: wrap;
    /* align-items: center; */
    /* justify-content: center; */
    
  }
  .logos img{
    width: 35px;
    height: 35px; 
    margin: 3px;
    
  }
  .cover{
    display: flex;
    flex-direction: column;
  }
.logo1{
    display: flex;
    flex-wrap: wrap;
    /* justify-content: center; */

}
.logo1 img{
    width: 35px;
    height: 35px; 
    margin: 3px;
    margin-top: -10px;
    
    
  }
  }
  @media only screen and (min-width:768px){
    .last-wrap{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 80%;
    margin: auto;
  }
  .last-wrap .head {
    /* width: 50%; */
    /* height: 300px; */
    display: flex;
    flex-direction: column;
  }
  .last-wrap .head h1{
    color: #37756A;
    width: 300px;
    font-size: 22px;
    text-transform: capitalize;
    margin-top: 30px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   
  }
  .head p{
    color: #37756A;
    font-size: 14px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   margin-top: 10px;
   margin-bottom: 10px;
  }
  .img img{
    height: 220px;
    width: 220px; 
    margin-top: 40px;
  }
  .logos{
    display: flex;
    flex-wrap: wrap;
    /* align-items: center; */
    /* justify-content: center; */
    
  }
  .logos img{
    width: 40px;
    height: 40px; 
    margin: 3px;
    
  }
  .cover{
    display: flex;
    flex-direction: column;
  }
.logo1{
    display: flex;
    flex-wrap: wrap;
    /* justify-content: center; */

}
.logo1 img{
    width: 40px;
    height: 40px; 
    margin: 3px;
    margin-top: -12px;
    
    
  }
  }
  @media only screen and (min-width:992px){
    
    .last-wrap{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 80%;
    margin: auto;
  }
  .last-wrap .head {
    /* width: 50%; */
    /* height: 300px; */
    display: flex;
    flex-direction: column;
  }
  .last-wrap .head h1{
    color: #37756A;
    width: 330px;
    font-size: 24px;
    text-transform: capitalize;
    margin-top: 30px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   
  }
  .head p{
    color: #37756A;
    font-size: 16px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   margin-top: 10px;
   margin-bottom: 10px;
  }
  .img img{
    height: 250px;
    width:250px; 
    margin-top: 40px;
  }
  .logos{
    display: flex;
    flex-wrap: wrap;
    /* align-items: center; */
    /* justify-content: center; */
    
  }
  .logos img{
    width: 45px;
    height: 45px; 
    margin: 3px;
    
  }
  .cover{
    display: flex;
    flex-direction: column;
  }
.logo1{
    display: flex;
    flex-wrap: wrap;
    /* justify-content: center; */

}
.logo1 img{
    width: 45px;
    height: 45px; 
    margin: 3px;
    margin-top: -14px;
    
    
  }
  }
  @media only screen and (min-width:1200px){
    .last-wrap{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 80%;
    margin: auto;
  }
  .last-wrap .head {
    /* width: 50%; */
    /* height: 300px; */
    display: flex;
    flex-direction: column;
  }
  .last-wrap .head h1{
    color: #37756A;
    width: 500px;
    font-size: 40px;
    text-transform: capitalize;
    margin-top: 30px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   
  }
  .head p{
    color: #37756A;
    font-size: 14px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   margin-top: 10px;
   margin-bottom: 10px;
  }
  .img img{
    height: 400px;
    width: 400px; 
    margin-top: 40px;
  }
  .logos{
    display: flex;
    flex-wrap: wrap;
    /* align-items: center; */
    /* justify-content: center; */
    
  }
  .logos img{
    width: 100px;
    height: 100px; 
    margin: 3px;
    
  }
  .cover{
    display: flex;
    flex-direction: column;
  }
.logo1{
    display: flex;
    flex-wrap: wrap;
    /* justify-content: center; */

}
.logo1 img{
    width: 100px;
    height: 100px; 
    margin: 3px;
    margin-top: -30px;
    
    
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

.body2 a{
text-decoration: none;
color: #37756A;
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
<br>

<div class="contain">
    <div class="left-sec">
        <h1>Who we are ?</h1>
        <p>We are an innovative recruitment platform that connects job seekers with leading organizations through advanced AI technology.
        </p>
    </div>
        <img src="/storage/media/who we are2.jpg" alt="Image 1">
</div>


<div class="body1">
    <div class="right-sec1">
        <h1>What We Do ?</h1>
        <p>
          We simplify hiring by matching candidate profiles with job requirements, providing seamless communication tools, and ensuring a perfect fit for both job seekers and employers.
        </p>
    </div>
    <img src="/storage/media/what we doo.jpg" alt="" srcset="">
</div>
<br><br>
<section class="team">
    <div class="row1">
      <h1>Our Team</h1>
    </div>
    <div class="row1">
      <!-- Column 1-->
      <div class="column">
        <div class="card">
          <div class="img-container">
            <img src="/storage/media/avatar (1).svg" />
          </div>
          <h3>Bilal Ur Rehman</h3>
          <p></p>
          <div class="icons">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fab fa-github"></i>
            </a>
            <a href="#">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- Column 2-->
      <div class="column">
        <div class="card">
          <div class="img-container">
            <img src="/storage/media/avatar (1).svg" />
          </div>
          <h3>Malik Mohsin Azhar</h3>
          <p></p>
          <div class="icons">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fab fa-github"></i>
            </a>
            <a href="#">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- Column 3-->
      <div class="column">
        <div class="card">
          <div class="img-container">
            <img src="/storage/media/avatar (1).svg" >
          </div>
          <h3>Sunbal Nawaz</h3>
          <p></p>
          <div class="icons">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fab fa-github"></i>
            </a>
            <a href="#">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>  
            
    <div class="body2">
        <h1>Join our Team</h1>
        <p>If you’re interested in changing the way recruiting is done, you could be a great fit at NexHire. We don’t care if you have recruiting experience—if you have a passion for people, creative mind, and can-do attitude, we want to hear from you!</p>

        <a href="./Signup.html">
          <input type="button" value="Join our team">
      </a>
    </div>

    <div class="last-wrap">

<div class="head"><h1>Why companies are glad they chose NexHire</h1>


    <p>Organizations of all sizes say NexHire helps their teams find and hire great people, faster.</p>
    <div class="cover">
    <div class="logos">
    
    <img src="/storage/media/LogoRyanair.svg" alt="">
    <img src="/storage/media/LogoSephora.svg" alt="" srcset="">
    <img src="/storage/media/LogoIQPC.svg" alt="">
    <img src="/storage/media/LogoMoodle.svg" alt="">


</div>
<div class="logo1">
<img src="/storage/media/LogoHireVue.svg" alt="">
<img src="/storage/media/LogoSohohouse.svg" alt="">
<img src="/storage/media/LogoBevi.svg" alt="">
<img src="/storage/media/LogoRyanair.svg" alt="" srcset="">


</div>
</div>
    

</div>

<div class="img">
    <img src="/storage/media/work.webp" alt="" srcset="">
   
</div>

</div>
    </div>

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