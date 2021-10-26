<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Annisa Lee</title>
    <style>
*{
    margin-right: 0px;
    padding: 0px;
    font-family: sans-serif;
  }
  body {
    background-image: url(https://i.pinimg.com/564x/c5/c7/91/c5c791017af3677c611ec5571c8d5c9b.jpg);
    height: 100vh;
    background-size: cover;
    background position: center;
    background-attachment: fixed;
  }
  ul{
      float: right;
      list-style-type: none;
      margin-top: 25px;
  }
  ul li{
      display: inline-block;
  }
  ul li a{
      text-decoration: none;
      color: #fff;
      border: 1px solid;
      transition: 0.6s;
      margin-top: 10px;
      padding: 5px 20px;
  }
  ul li a:hover{
      background: #ffff;
      color: black;
  }
  ul li.active a{
      background: #ffff;
      color: black;
  }
  .logo img{
      float: left;
      width: 130px;
      height: auto;
      padding-left: 20px;
      padding-top: 20px;
  }
  .main{
      max-width: 1800px;
      margin: auto;
  }
  .title{
      position: absolute;
      margin-top: auto;
      top: 40%;
      left: 38%;
      transform: translate(-50%-50%);
  }
  .title h1{
      font-family: sans-serif;
      color: #fff;
      font-size: 70px;
  }
  .button{
      position: absolute;
      top: 65%;
      margin-left: 46%;
      transform: translate(-50%-50%);
  }
  .btn1{
      border: 1px solid;
      padding: 10px 30px;
      color: #fff;
      text-decoration: none;
      font-family: sans-serif;
      transition: 0,6s;
      border-radius: 5px;
      margin: 5px;
  }
  .btn1:hover{
      background: #fff;
      color: black;
  }
  </style>
    
  </head>
  <body>
    <header>
    
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Web Desaign</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <div class="button">
                <a href="http://127.0.0.1:8000/welcome" class="btn1">Klik Here</a>
        </div>
        <div class="title">
          <h1>Annisa Lee</h1>
        </div>
      </div>
    </header>
  </body>
</html>
