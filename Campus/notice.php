<!DOCTYPE html>
<html>
<head>
  <title>campusinfobd</title>
  <meta charset="utf8">
  <link rel="icon" href="images/logo.JPG" >
  <style type="text/css">
       body{
      background-image: url(images/body.jpg);

    }
    header{
      position: absolute ;
      top: 1px;
      left: 0%;
      height: 83px;
      width: 1350px;
      background-color: forestgreen;
    }
    #quote{
      position: absolute ;
      top: 35px;
      left: 820px;
      width: 500px;
      color: white;
      font-family: verdana;
      text-align: right;
      font-style: italic;
    }
    h1{
      
        position: absolute ;
      top: -10px;
      left: 40%;
      color: white;
    }
    footer{
      position: absolute ;
      left: -20%;
      height: 240px;
      width:150%;
      background-color: forestgreen;

    }

    footer h4{
      position: absolute ;
      color: white;
      left: 60px;
      top: 20px;
      

    }
    button{
      background-color: #4CAF50;
      border: none;
      color: white;
      text-align: center;
      text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .button1{
      background-color: #4CAF50;
      border: none;
      color: white;
      text-align: center;
      text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      padding: 10px 20px;
      
    }
    #home{position: absolute ;
      height: 25px;
      width: 110px;
      top: 90px;
      left: 210px;
    }
    #varsity_list{position: absolute ;
      height: 25px;
      width:110px;
      top: 90px;
      left: 380px;

    }

    #download{position: absolute ;
      height: 25px;
      width: 110px;
      top: 90px;
      left: 550px;

    }

    #result{position: absolute ;
      height: 25px;
      width: 110px;
      top: 90px;
      left: 720px;

    }

    #review{position: absolute ;
      height: 25px;
      width: 130px;
      top: 90px;
      left: 890px;

    }
    #p1{
      font-size: 30px;
      color: rgb(33, 113, 224);
      position: absolute ;
      height: 25px;
      width: 1200px;
      top: 140px;
      left: 400px;
    }
    .shadow1{
        color: black;
        text-decoration: none;
    }

    .shadow:hover{
        color: white;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    }

    .shadow1:hover{
        color: white;
        text-decoration: none;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    }


    
    .button1:hover{
              box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
    table {

        font-family: arial, sans-serif;
        border-collapse: collapse;
        
    }

    td, th {
        
        text-align: center;
        padding: 8px;
    }

    tr:nth-child(odd) {
         background-color: #dddddd;
    } 
    .name_background{
          
          background-color: lightgray;

          height: 30px;
          width: 500px;
          

          text-align: left;
          font-size: 20px;
          margin: 4px 2px;
          padding: 8px 10px;
      }



    .name_table{
       
      left: 100px;
        width: 450px;

    }

    

    
    #main{
      position: absolute;
      top: 150px;
      left: 250px;
    }
        #logo{
            position: absolute;
          
            left:-10px;
        }

        #fb{
            position: absolute;
            top: 1px;
            left:750px;
        }


  </style>

</head>

<body>
  <header>  </header>
  <h1>Campus Info</h1>
  <p id="quote">we feel proud to become the part of your journey........</p>

  <a class="button1" id="home" href="index.php">
     <button>Home</button>
  </a>

  <a class="button1"  id="varsity_list" href="varsity_list.php">
     <button>Varsity List</button>
  </a>

  <a class="button1"  id="download" href="download.php">
     <button>Download</button>
  </a>

  <a class="button1" id="result"  href="result.php">
     <button>Result</button>
  </a>

  <a class="button1" id="review" href="review.php">
     <button>Subject Review</button>
  </a>







    <div id="main">
    
     <br><br>
    







  <br><br><br>
  <h3 class="name_background">Notice Board</h3>
  <table class="name_table" ><br>
    <tr>
       <td><a href="result.php" class="shadow">SSC result has been published</a></td>
    </tr>
    <tr>
       <td><a href="bubt.php" class="shadow">Admission notice of BUBT has been published</a></td>
    </tr>
    
  </table><br>
<br><br><br><br>









    <br><br><br><br><br><br><br><br>
    <footer>

        <h4>Contact Us: <br> campusinfobd@gmail.com <br> <br> 
        Find Us On : <br><br> 

        <a href="https://www.facebook.com/Campusinfobd-629435777240518/"><img src="images/fb.png" title="Describe Image Link Destination" width="60" height="60" /></a></h4>
      
    </footer>

 

    
  </div>




</body>
</html>