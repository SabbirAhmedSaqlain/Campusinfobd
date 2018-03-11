<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
	<title>Project ABC</title>
	<meta charset="utf8">
	<link rel="icon" href="images/logo.png" >
  
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
			left: 0%;
			height: 340px;
			width: 150%;
			background-color: forestgreen;

		}

		footer h4{
			position: absolute ;
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
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
			padding: 10px 20px;
			width: 300px;
			
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

        .name_background{
        	
        	background-color: lightgray;
        	height: 30px;
			width: 600px;
			left: -2%;
			 
			text-align: center;
		    font-size: 26px;
		    margin: 4px 2px;
			padding: 8px 10px;
        }
        
        .name_table{
			height: 25px;
			width: 600px;
			
        }

       
		#full_list{
			font-size: 30px;
			text-align: center;
			height: 60px;
			width: 600px;


		}


		#full_list1{
			font-size: 20px;
		}


		


        #main {
        	position: absolute;
        	top: 140px;
        	left: 230px;
        }

         #secondary {
        	position: absolute;
        	top: 140px;
        	left: 830px;
        	padding: 2px;
        	width: 350px;
   			border: 5px solid green;
   		    padding: 25px;
    		margin: 25px;

        }
        #logo{
        	position: absolute;
        	top: 1px;
        	left: 1px;
        }    




		
    </style>

</head>
<body>
	<header> <h1>Project Zero</h1> </header>

		<img src="images/logo1.png" height="80px" width="300px"><br><br>
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
		
	



	<br><br><br>
	<h3 class="name_background">Notice Board</h3>
	<table class="name_table" ><br>
  	<tr>
   		 <td><a href="notice.html" class="shadow">Notice 1</a></td>
  	</tr>
  	<tr>
   		 <td><a href="notice.html" class="shadow">Notice 1</a></td>
  	</tr>
  	<tr>
   		 <td><a href="notice.html" class="shadow">Notice 1</a></td>
  	</tr>
  	<tr>
    	<td><a href="notice.html" class="shadow">Notice 1</a></td>
  	</tr>
  	<tr>
    	<td><a href="notice.html" class="shadow">Notice 1</a></td>
  	</tr>
  	<tr>
    	<td><a href="notice.html" class="shadow">Notice 1</a></td>
  	</tr>
	</table><br>

	<a class="button1" class="continue" href="notice.html">
	   <button>Click Here For More .....</button>
	</a><br><br><br><br>





	<h3 class="name_background">Engineering Universaity</h3>

  <table class="name_table" ><br>
    <tr>
      <td><a href="buet.php" class="shadow1">BUET</a></td>
      <td><a href="buet.php" class="shadow1">Bangladesh University of Engineering & Technology</a></td>
      <td><a href="buet.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="ruet.php" class="shadow1">RUET</a></td>
      <td><a href="ruet.php" class="shadow1">Rajshahi University of Engineering & Technology</a></td>
      <td><a href="ruet.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="kuet.php" class="shadow1">KUET</a></td>
      <td><a href="kuet.php" class="shadow1">Khulna University of Engineering & Technology</a></td>
      <td><a href="kuet.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="cuet.php" class="shadow1">CUET</a></td>
      <td><a href="cuet.php" class="shadow1">Chittagong University of Engineering & Technology </a></td>
      <td><a href="cuet.php" class="shadow">Details</a></td>   
    </tr>

  </table><br>

	<a class="button1" class="continue"  href="engineering.php">
	   <button>Click Here For More .....</button>
	</a><br><br><br><br>




	<h3 class="name_background">Public Universaity</h3>

	<table class="name_table" ><br>
  	<tr>
      <td><a href="du.php" class="shadow1">DU</a></td>
      <td><a href="du.php" class="shadow1">Dhaka University</a></td>
      <td><a href="du.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="ru.php" class="shadow1">RU</a></td>
      <td><a href="ru.php" class="shadow1">Rajshahi University</a></td>
      <td><a href="ru.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="cu.php" class="shadow1">CU</a></td>
      <td><a href="cu.php" class="shadow1"> Chittagong University</a></td>
      <td><a href="cu.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="ju.php" class="shadow1">JU</a></td>
      <td><a href="ju.php" class="shadow1">Jahangirnagar University </a></td>
      <td><a href="ju.php" class="shadow">Details</a></td>   
    </tr>
    <tr>
      <td><a href="ku.php" class="shadow1">KU</a></td>
      <td><a href="ku.php" class="shadow1">Khulna University</a></td>
      <td><a href="ku.php" class="shadow">Details</a></td>   
    </tr>

	</table><br>

	<a class="button1" class="continue" href="public.php">
	   <button>Click Here For More .....</button>
	</a><br><br><br><br><br>






	<h3 class="name_background">Science & Technology</h3>

	<table class="name_table"><br>
    <tr>
      <td><a href="sust.php" class="shadow1">SUST</a></td>
      <td><a href="sust.php" class="shadow1">Shahjalal University of Science and Technology</a></td>
      <td><a href="sust.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="hstu.php" class="shadow1">HSTU</a></td>
      <td><a href="hstu.php" class="shadow1">Hajee Mohammad Danesh Science & Technology University</a></td>
      <td><a href="hstu.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="mbstu.php" class="shadow1">MBSTU</a></td>
      <td><a href="mbstu.php" class="shadow1"> Mawlana Bhashani Science and Technology University</a></td>
      <td><a href="mbstu.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="pstu.php" class="shadow1">PSTU</a></td>
      <td><a href="pstu.php" class="shadow1">Patuakhali Science and Technology University </a></td>
      <td><a href="pstu.php" class="shadow">Details</a></td>   
    </tr>
    <tr>
      <td><a href="nstu.php" class="shadow1">NSTU</a></td>
      <td><a href="nstu.php" class="shadow1">Noakhali Science and Technology University</a></td>
      <td><a href="nstu.php" class="shadow">Details</a></td>   
    </tr>

	</table><br>

	<a class="button1" class="continue" href="science.php">
	   <button>Click Here For More .....</button>
	</a><br><br><br><br><br>

	


	<h3 class="name_background">Private Universaity</h3>


	<table class="name_table"><br>
    <tr>
      <td><a href="aust.php" class="shadow1">AUST</a></td>
      <td><a href="aust.php" class="shadow1">Ahsanullah University of Science and Technology</a></td>
      <td><a href="aust.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="bracu.php" class="shadow1">BRACU</a></td>
      <td><a href="bracu.php" class="shadow1">BRAC University</a></td>
      <td><a href="bracu.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="ewu.php" class="shadow1">EWU</a></td>
      <td><a href="ewu.php" class="shadow1"> East West University</a></td>
      <td><a href="ewu.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="nsu.php" class="shadow1">NSU</a></td>
      <td><a href="nsu.php" class="shadow1">North South University </a></td>
      <td><a href="nsu.php" class="shadow">Details</a></td>   
    </tr>
    <tr>
      <td><a href="aiub.php" class="shadow1">AIUB</a></td>
      <td><a href="aiub.php" class="shadow1">American International University-Bangladesh</a></td>
      <td><a href="aiub.php" class="shadow">Details</a></td>   
    </tr>
	</table><br>

	<a class="button1" class="continue" href="private.php">
	   <button>Click Here For More .....</button>
	</a><br><br><br><br><br>








	<h3 class="name_background">Private Medical</h3>
	<table class="name_table"><br>

	 <tr>
      <td><a href="bmc.php" class="shadow1">BMC</a></td>
      <td><a href="bmc.php" class="shadow1">Bangladesh Medical College</a></td>
      <td><a href="bmc.php" class="shadow">Details</a></td>   
    </tr>
     <tr>
      <td><a href="imc.php" class="shadow1">IMC</a></td>
      <td><a href="imc.php" class="shadow1">Ibrahim Medical College</a></td>
      <td><a href="imc.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="hfrcmc.php" class="shadow1">HFRCMC</a></td>
      <td><a href="hfrcmc.php" class="shadow1">Holy Family Red Crescent Medical College</a></td>
      <td><a href="hfrcmc.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="jimc.php" class="shadow1">JIMC</a></td>
      <td><a href="jimc.php" class="shadow1"> Jahurul Islam Medical College </a></td>
      <td><a href="jimc.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="dnmc.php" class="shadow1">DNMC</a></td>
      <td><a href="dnmc.php" class="shadow1">Dhaka National Medical College</a></td>
      <td><a href="dnmc.php" class="shadow">Details</a></td>
    </tr>
    <tr>
      <td><a href="kyamc.php" class="shadow1">KYAMC</a></td>
      <td><a href="kyamc.php" class="shadow1">Khwaja Yunus Ali Medical College </a></td>
      <td><a href="kyamc.php" class="shadow">Details</a></td>   
    </tr>
    </table><br>

    <a class="button1" class="continue" href="private_medical.php">
	   <button>Click Here For More .....</button>
	</a><br><br><br><br><br>









    <a class="button1" id="full_list" href="varsity_list.php">
	   <button id="full_list1">Click Here For All Varsity List</button>
	</a><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer>

      	<h4>Contact Us: <br> campusinfobd@gmail.com <br> <br> 
      	<img  src="images/logo1.png" height="100px" width="400px"><br><br>
      	Find Us On : <br><br> 


      	<a href="https://www.facebook.com/Campusinfobd-629435777240518/"><img src="images/fb.png" title="Describe Image Link Destination" width="60" height="60" /></a></h4>
      
    </footer>



	</div>

	<div id="secondary">

		<h2>Important Links</h2>

		<a class="button2"  href="#">
	    <button>Click Here For Medical Admisstion</button>

		<a class="button2"  href="review.php">
	    <button>Engineering Subject Review</button>

		<a class="button2"  href="#">
	    <button>Engineering Last Year Waiting List Statistics</button>

		<a class="button2"  href="#">
	    <button>Tuition Fee Comparison of Private University</button>	

	    <br>




	</div>



	




	





</body>
</html>