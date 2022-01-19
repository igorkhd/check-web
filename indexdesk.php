
<!DOCTYPE html>
<html lang="en">
<!-- Igor Kholodenko, check web -->

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Check websites appl</title>

	
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="css/fullpage.min.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/templatemo-style.css">

    <link rel="stylesheet" href="css/responsive.css">

    </head>
    
    <body>
    <br /><br />
    <h2>Check websites application</h2>
    <br /><br />

	<?php
    echo "<hr>";

	   if (isDomainAvailible('https://youtube.com'))
	   {
               echo "<br /><strong>youtube.com up and running!</strong>";
       }
	
	else {

               echo "<br />youtube.com currently down.";
	
       }


    echo "</br></br>";
    echo "<a href='https://youtube.com','mywindowtitle','width=500,height=150' target='_blank')>Open celebrities-staffing.com in new window</a>";
    echo "</br></br>";
    echo "<iframe src='https://youtube.com' width='1200px' height='200px'></iframe>";
    echo "<br /><br />";
    echo "<hr>";
	
//	

//
	   
       //returns true, if domain is availible, false if not
       function isDomainAvailible($domain)
       {
               //check, if a valid url is provided
               if(!filter_var($domain, FILTER_VALIDATE_URL))
               {
                       return false;
               }

               //initialize curl
               $curlInit = curl_init($domain);
               curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
               curl_setopt($curlInit,CURLOPT_HEADER,true);
               curl_setopt($curlInit,CURLOPT_NOBODY,true);
               curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

               //get answer
               $response = curl_exec($curlInit);

               curl_close($curlInit);
			   
			   
			   

               if ($response) return true;

               return false;
       }
?>
    <br /><br />
    <br />


  </body>
</html>