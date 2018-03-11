<!DOCTYPE html>
<html>
<head>
	<title>Project ABC</title>
	<link rel="icon" href="images/icon.ico" >
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
			top: 1200px;
			left: 0%;
			height: 240px;
			width: 900px;
			background-color: forestgreen;

		}

    footer h4{
      position: absolute;
      left: 50px;
      color: white;
      left: 60px;
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
		.button2{
			background-color: #4CAF50;
			border: none;
			color: white;

			text-align: center;
			text-decoration: none;
		   
		    font-size: 16px;
		   
		    cursor: pointer;
			padding: 8px  4px;
			
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

		
		.button1:hover{
            	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .button2:hover{
            	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        table {

   			font-family: arial, sans-serif;
   			border-collapse: collapse;
    		
		}

		td, th {
    	 	border: 1px solid #dddddd;
   			text-align: left;
    		padding: 8px;
		}

		tr:nth-child(odd) {
   			 background-color: #dddddd;
		}


   
	#name1{
        position: absolute ;
        padding: 12px 10px; 
        background-color: #dddddd;
       
        width: 630px;
        top: 1px;
        left: 60px;
    }  
	#details{
        position: absolute ;
       
        width: 750px;
        top: 1px;
        left: 580px;
        padding: 12px 10px; 



    }  

     #subject{
        position: absolute ;
        
        width: 650px;
        top: 100px;
        left: 60px;
   	 }  

   	 a{
        	/*text-decoration: none;*/
        	color: rgb(92, 67, 204);
        	font-style: bold;
        }

     .shadow:hover{
            	color: white;
    		text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;


     }
             .shadow1{
          color: black;
            text-decoration: none;
        }
                .shadow1:hover{
              color: white;
              text-decoration: none;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        }

        #main{
          position: absolute;
          left: 250px;
          top: 200px;
        }







		





	</style>

</head>
<body>
	<header>  </header>
	<h1>Project Zero</h1>
	<p id="quote">feel proud to become the part of your journey........</p>


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

	<h2 id="name1">Subjects Name</h2>
	<h2 id="details">Review</h2>
	<table id="subject">

    <tr>
        <td><a href="cse.php" class="shadow1">Computer Science and Engineering</a></td>
        <td><a href="cse.php" class="shadow1">CSE</a></td>
      	<td><a href="cse.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>

        <td><a href="eee.php" class="shadow1">Electrical and Electronic Engineering</a></td>
        <td><a href="eee.php" class="shadow1">EEE</a></td>
      	<td><a href="eee.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="arch.php" class="shadow1">Department of Architecture</a></td>
        <td><a href="arch.php" class="shadow1">Arch</a></td>
      	<td><a href="arch.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="civil.php" class="shadow1">Civil Engineering</a></td>
        <td><a href="civil.php" class="shadow1">Civil</a></td>
      	<td><a href="civil.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="ece1.php" class="shadow1">Electrical & Computer Engineering</a></td>
        <td><a href="ece1.php" class="shadow1">ECE</a></td>
      	<td><a href="ece1.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>
        <td><a href="me.php" class="shadow1">Mechanical Engineering</a></td>
        <td><a href="me.php" class="shadow1">ME</a></td>     
      	<td><a href="me.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="ete.php" class="shadow1">Electronics & Telecommunication Engineering</a></td>
        <td><a href="ete.php" class="shadow1">ETE</a></td>
      	<td><a href="ete.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="ece.php" class="shadow1">Electronics & Communication Engineering</a></td>
        <td><a href="ece.php" class="shadow1">ECE</a></td>
      	<td><a href="ece.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>  

        <td><a href="ipe.php" class="shadow1">Industrial and Production Engineering</a></td>
        <td><a href="ipe.php" class="shadow1">IPE</a></td>
      	<td><a href="ipe.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>

    </tr>

    <tr>        
        <td><a href="be.php" class="shadow1">Biomedical Engineering</a></td>
        <td><a href="be.php" class="shadow1">BE</a></td>
      	<td><a href="be.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="urp.php" class="shadow1">Urban and Regional Planning</a></td>
        <td><a href="urp.php" class="shadow1">URP</a></td>
      	<td><a href="urp.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="mme.php" class="shadow1">Materials and Metallurgical Engineering</a></td>
        <td><a href="mme.php" class="shadow1">MME</a></td>
      	<td><a href="mme.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="wre.php" class="shadow1">Water Resources Engineering</a></td>
        <td><a href="wre.php" class="shadow1">CSE</a></td>
      	<td><a href="wre.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="name.php" class="shadow1">Naval Architecture and Marine Engineering</a></td>
        <td><a href="name.php" class="shadow1">NAME</a></td>
      	<td><a href="name.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="gce.php" class="shadow1">Glass & Ceramics Engineering</a></td>
        <td><a href="gce.php" class="shadow1">GC</a></td>
      	<td><a href="gce.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="mte.php" class="shadow1">Mechatronics Engineering</a></td>
        <td><a href="mte.php" class="shadow1">MTE</a></td>
      	<td><a href="mte.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="cfpe.php" class="shadow1">Chemical & Food Process Engineering</a></td>
        <td><a href="cfpe.php" class="shadow1">CFPE</a></td>
      	<td><a href="cfpe.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>	        
        <td><a href="le.php" class="shadow1">Lather Engineering</a></td>
        <td><a href="le.php" class="shadow1">LE</a></td>
      	<td><a href="le.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

	   <tr>        
        <td><a href="ce.php" class="shadow1">Chemical Engineering</a></td>
        <td><a href="ce.php" class="shadow1">CE</a></td>
      	<td><a href="ce.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="mse.php" class="shadow1">Material Science & Engineering</a></td>
        <td><a href="mse.php" class="shadow1">MSE</a></td>
      	<td><a href="mse.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>

    <tr>        
        <td><a href="becm.php" class="shadow1">Building Engineering & Construction Management</a></td>
        <td><a href="becm.php" class="shadow1">BECM</a></td>
      	<td><a href="becm.php" class="shadow" target="_blank"><strong>View Details</strong></a></td>
    </tr>
  </table>



    <footer>

        <h4>Contact Us: <br> campusinfobd@gmail.com <br> <br> 
        Find Us On : <br><br> 

        <a href="https://www.facebook.com/Campusinfobd-629435777240518/"><img src="images/fb.png" title="Describe Image Link Destination" width="60" height="60" /></a></h4>
      
    </footer>
  </div>




</body>
</html>