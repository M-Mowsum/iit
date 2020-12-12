<!Doctype html>
    
	<head>
	       <title> prime </title>
	</head>
    <body>
	
          <?php

		   echo "<table  border='1' style='border-collapse:collapse' width='500px' align='center'>";
		   echo "<td><b>Number</td>";
		   echo "<td><b>Status</td>";
		    for($x=2;$x<101;$x++){ 
			   
			   echo "<tr>";
			   echo "<td>$x :</td>";
			   
			   $n=1;
			   for($y=2;$y<$x;$y++){
			   
			      if($x%$y==0){
					  $n=0;
					  echo "<td>No</td>";
					  break;
			      }
				  $n=1;
			      
			  }
			  if($n==1){
				  echo "<td>Prime</td>";
			  }
			    echo "</tr>";
			 }
		    echo "</table>";
		  ?>
    </body>


</html>