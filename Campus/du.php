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
			top: 1000px;
			left: 0%;
			height: 240px;
			width: 100%;
			background-color: forestgreen;

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

		
		.button1:hover{
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


		.button2:hover{
            	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19), 0 6px 20px 0 rgba(0,0,0,0.19);
        }

		.button2 a{

			text-decoration: none;
			color:white;
			
		}

		
		#ka{position: absolute ;
			text-decoration: none;
			color:black;
			height: 25px;
			width: 80px;
			top: 200px;
			left: 170px;
			padding: 10px 20px;
			background-color: #4CAF50;
		}


		#kha{position: absolute ;
			text-decoration: none;
			color:black;
			height: 25px;
			width: 80px;
			top: 200px;
			left: 295px;
			padding: 10px 20px;
			background-color: #4CAF50;

		}

		#ga{position: absolute ;
			text-decoration: none;
			color:black;
			height: 25px;
			width: 80px;
			top: 200px;
			left: 420px;
			padding: 10px 20px;
			background-color: #4CAF50;

		}

		#gha{position: absolute ;
			text-decoration: none;
			color:black;
			height: 25px;
			width: 80px;
			top: 200px;
			left: 545px;
			padding: 10px 20px;
			background-color: #4CAF50;
		}

		#iba{position: absolute ;
			text-decoration: none;
			color:black;
			height: 25px;
			width: 80px;
			top: 200px;
			left: 670px;
			padding: 10px 20px;
			background-color: #4CAF50;

		}

		#cha{position: absolute ;
			text-decoration: none;
			color:black;
			height: 25px;
			width: 80px;
			top: 200px;
			left: 795px;
			padding: 10px 20px;
			background-color: #4CAF50;
		}

		#home_eco{position: absolute ;
			text-decoration: none;
			color:black;
			height: 25px;
			width: 110px;
			top: 200px;
			left: 920px;
			padding: 10px 5px;
			background-color: #4CAF50;
		}

		#science{position: absolute ;
			text-decoration: none;
			color:black;
			height: 25px;
			width: 80px;
			top: 200px;
			left: 1045px;
			padding: 10px 20px;
			background-color: #4CAF50;

		}


	#name{
		
			color: rgb(16, 78, 178);
			position: absolute;
			height: 30px;
			width: 700px;
			font-size: 30px;
			top: 140px;
			left:500px;
		    margin: 4px 2px;
			padding: 10px 20px;

	}

    #update{
			
			text-align: center;
    		border-width: 5px;
			border-color: #4CAF50;
			color: red;
			position: absolute;
			height: 30px;
			width: 650px;
			font-size: 24px;
			top: 950px;
			left:700px;
		    margin: 4px 2px;
			padding: 10px 20px;

	}

	#year{
			
			text-align: center;
    		border-width: 5px;
			border-color: rgb(16, 78, 178);
			color: blue;
			position: absolute;
			height: 30px;
			width: 650px;
			font-size: 20px;
			top: 850px;
			left:290px;
		    margin: 4px 2px;
			padding: 10px 20px;

	}

    #seat_name{
			border-style: solid;
			text-align: center;
    		border-width: 3px;
			border-color: #4CAF50;
			color: black;
			position: absolute;
			height: 30px;
			width: 400px;
			font-size: 24px;
			top: 920px;
			left:800px;
		    margin: 4px 2px;
			padding:5px 10px;

	}




    #seat_table{
    		border-style: solid;
			text-align: center;
    		border-width: 4px;
			border-color: #4CAF50;
       		position: absolute ;
        	height: 1290px;
        	width: 650px;
        	top: 1020px;
        	left:680px;
    } 	

    #notice_board{
			border-style: solid;
			text-align: center;
    		border-width: 3px;
			border-color: #4CAF50;
			color: black;
			position: absolute;
			height: 30px;
			width: 370px;
			font-size: 24px;
			top: 1000px;
			left:120px;
		    margin: 4px 2px;
			padding: 5px 10px;

	}



    #notice{
			
			text-align: left;
			color: black;
			position: absolute;
			height: 30px;
			width: 400px;
			font-size: 20px;
			top: 980px;
			left:100px;
		    margin: 4px 2px;
			padding: 10px 20px;

	}


	 #notice p{
	 	color: blue;
	 }

	 #notice1 p{
	 	color: red;
	 	font-size: 22px;
	 	border-style: solid;
		text-align: center;
    	border-width: 3px;
		border-color: #4CAF50;
		height: 40px;
		width: 400px;
	 }

	 #notice2 p{
	 	color: red;
	 	font-size: 22px;
	 	border-style: solid;
		text-align: center;
    	border-width: 3px;
		border-color: #4CAF50;
		height: 40px;
		width: 400px;
	 }


	.download1{
		
			background-color: #4CAF50;
			border: none;
			color: white;
			text-align: center;
			text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
			margin: 4px 2px;
			padding: 10px 20px;
			
	}
	.download1:hover{
            	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
     }


	.full_list1{
			font-size: 20px;
			width: 500px;


	}
	#web{
		position: absolute;
		top: 250px;
		left: 350px;
		width: 500px;
	}

	.pdfobject-container { height: 500px;}
	.pdfobject { border: 1px solid #666; }

	#dept {
		position: absolute;
		top: 400px;
		left: 200px;

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





	<p id="name">Dhaka University</p>






	<div id="web">
		

	<a class="button1"  target="_blank" href="du_ka.php">
	   <button class="full_list1">ক  ইউনিট</button>
	</a>

	<a class="button1"  target="_blank" href="du_kha.php">
	   <button class="full_list1">খ  ইউনিট</button>
	</a>
	<a class="button1"  target="_blank" href="du_ga.php">
	   <button class="full_list1">গ  ইউনিট</button>
	</a>

	<a class="button1"  target="_blank" href="du_gha.php">
	   <button class="full_list1">ঘ  ইউনিট</button>
	</a>
	<a class="button1"  target="_blank" href="du_cha.php">
	   <button class="full_list1">চ  ইউনিট</button>
	</a>

	<a class="button1"  target="_blank" href="du_home_eco.php">
	   <button class="full_list1">গার্হস্থ্য অর্থনীতি</button>
	</a>
	<a class="button1"  target="_blank" href="du_iba.php">
	   <button class="full_list1">আই বি এ</button>
	</a>

	<a class="button1"  target="_blank" href="du_science.php">
	   <button class="full_list1">সাইন্স </button>
	</a>



<br><br><br><br><br><br><br><br><br>



	<a class="button1"  target="_blank" href="http://www.du.ac.bd">
	   <button class="full_list1">Click Here To Visit Main Website Of   DU</button>
	</a>

	</div>



	





	
    <footer>

      	<h4>Contact Us: <br> campusinfobd@gmail.com <br> <br> 
      	Find Us On : <br><br> 

      	<a href="https://www.facebook.com/Campusinfobd-629435777240518/"><img src="images/fb.png" title="Describe Image Link Destination" width="60" height="60" /></a></h4>
      
    </footer>




</body>
</html>