<!DOCTYPE html>
<html>
  <head>
    <title>World population</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
  </head>
  <body>
  
  
    <div class="wrapper">
      <h1>World population over time</h1>
      <h2>Number of people (in millions) living on earth, the last 500 years</h2>

      <canvas id="myChart" width="1600" height="900"></canvas>
    </div>

	<p>Your age is <?php echo $data ?>.</p>
	
	<button type="button" id="goodreadsbutton"> click </button> 
	
	<script> 
	$.ajax({
		url : 'https://www.goodreads.com/review/list/24559798.xml?key=Gbr7ePid92XrltlI2LM72w&shelf=read&sort=date_read&per_page=20&v=2',
		type : 'GET',
		dataType:'xml',
		success : function(data) {              
			alert('Data: '+data);
		},
		error : function(request,error)
		{
			  //var err = eval("(" + xhr.responseText + ")");
			  //alert(err.Message);
			alert("Request: "+JSON.stringify(request.responseText));
			//{"readyState":0,"status":0,"r":"error"}
		}
	});

	</script>

	
	
	<div id="div1"> </div>
	
    <script src="goodreadscharts.js"></script>
	
	<div>
<?php echo "hello" ?>

<?php
        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "https://www.goodreads.com/review/list/24559798.xml?key=Gbr7ePid92XrltlI2LM72w&shelf=read&sort=date_read&per_page=20&v=2"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);      
		
		//print output
		echo $output;
?>
</p></div>	


	
	
	
	
	
	
	
  </body>
</html>

<?php

?>

