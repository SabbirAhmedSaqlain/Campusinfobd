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
      left: 0%;
      height: 240px;
      width: 1000px;
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

			width: 1200px;

			left: 120px;
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
		.one{
        	
        background-color: lightgray;
       
			width: 600px;
			
			left: 350px;

			text-align: center;
		    font-size: 26px;
		    margin: 4px 2px;
			padding: 8px 10px;
        }
        .table1{
        	 
			width: 620px;
		 
			left: 350px;
        }

     #main {
          position: absolute;
          top: 140px;
          left: 230px;
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
	 <p id="p1"> Here, we have the collection of books from class one to class ten . <br> Download any what you want.</p>






	<h3 class="one">Class One</h3><br>
	<table class="table1" >
  	<tr>
  	 	<td>Amar Bangla Boi</td>
   		<td><a href="one/1bangla.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c1_rar/c1_bangla.rar" target="_blank" class="shadow">Download in rar</a></td>
  	</tr>
  	<tr>
      <td>Prathomic Gonit</td>
      <td><a href="one/1math.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c1_rar/c1_math.rar" target="_blank" class="shadow">Download in rar</a></td>
  	</tr>
  	<tr>
      <td>English For Today</td>
      <td><a href="one/1english.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c1_rar/c1_english.rar" target="_blank" class="shadow">Download in rar</a></td>
  	</tr>
	</table><br><br><br><br>





	<h3 class="one">Class Two</h3><br>
	<table class="table1" >
    <tr>
      <td>Amar Bangla Boi</td>
      <td><a href="two/2bangla.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c2_rar/c2_bangla.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Prathomic Gonit</td>
      <td><a href="two/2math.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c2_rar/c2_math.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>English For Today</td>
      <td><a href="two/2english.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c2_rar/c2_english.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
	</table><br><br><br><br>


	



	<h3 class="one">Class Three</h3><br>
	<table class="table1" >
    <tr>
      <td>Amar Bangla Boi</td>
      <td><a href="three/3bangla.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c3_rar/c3_bangla.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Prathomic Gonit</td>
      <td><a href="three/3math.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c3_rar/c3_math.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>English For Today</td>
      <td><a href="three/3english.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c3_rar/c3_english.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Bangladesh And Bisho</td>
      <td><a href="three/3bangladesh.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c3_rar/c3_global.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Prathomic Biggan</td>
      <td><a href="three/3science.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c3_rar/c3_science.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Islam Religion</td>
      <td><a href="three/3islam.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c3_rar/c3_islam.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Hindu Religion</td>
      <td><a href="three/3hindu.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c3_rar/c3_hindu.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Christian Religion</td>
      <td><a href="three/3christian.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c3_rar/c3_christan.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Buddhist Religion</td>
      <td><a href="three/3buddhist.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c3_rar/c3_buddah.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
	</table><br><br><br><br>





	<h3 class="one">Class Four</h3><br>
	<table class="table1" >
    <tr>
      <td>Amar Bangla Boi</td>
      <td><a href="four/4bangla.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c4_rar/c4_bangla.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Prathomic Gonit</td>
      <td><a href="four/4math.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c4_rar/c4_math.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>English For Today</td>
      <td><a href="four/4english.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c4_rar/c4_english.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Bangladesh And Bisho</td>
      <td><a href="four/4bangladesh.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c4_rar/c4_global.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Prathomic Biggan</td>
      <td><a href="four/4science.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c4_rar/c4_science.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Islam Religion</td>
      <td><a href="four/4islam.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c4_rar/c4_islam.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Hindu Religion</td>
      <td><a href="four/4hindu.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c4_rar/c4_hindu.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Christian Religion</td>
      <td><a href="four/4christian.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c4_rar/c4_christan.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Buddhist Religion</td>
      <td><a href="four/4buddhist.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c4_rar/c4_buddah.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
	</table><br><br><br><br>





	<h3 class="one">Class Five</h3><br>
	<table class="table1" >
    <tr>
      <td>Amar Bangla Boi</td>
      <td><a href="five/5bangla.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c5_rar/c5_bangla.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Prathomic Gonit</td>
      <td><a href="five/5math.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c5_rar/c5_math.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>English For Today</td>
      <td><a href="five/5english.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c5_rar/c5_english.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Bangladesh And Bisho</td>
      <td><a href="five/5bangladesh.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c5_rar/c5_global.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Prathomic Biggan</td>
      <td><a href="five/5science.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c5_rar/c5_science.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Islam Religion</td>
      <td><a href="five/5islam.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c5_rar/c5_islam.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Hindu Religion</td>
      <td><a href="five/5hindu.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c5_rar/c5_hindu.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Christian Religion</td>
      <td><a href="five/5christian.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c5_rar/c5_christan.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>
    <tr>
      <td>Buddhist Religion</td>
      <td><a href="five/5buddhist.pdf" target="_blank" class="shadow">Download in PDF</a></td>
      <td><a href="http://www.ebook.gov.bd/ebook2013/rar/c5_rar/c5_buddah.rar" target="_blank" class="shadow">Download in rar</a></td>
    </tr>

	</table><br><br><br><br>



	 
  <br><br><br><br><br><br>

    <footer>

        <h4>Contact Us: <br> campusinfobd@gmail.com <br> <br> 
        Find Us On : <br><br> 

        <a href="https://www.facebook.com/Campusinfobd-629435777240518/"><img src="images/fb.png" title="Describe Image Link Destination" width="60" height="60" /></a></h4>
      
    </footer>
	</div>




</body>
</html>