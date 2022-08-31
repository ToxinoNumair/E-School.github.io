<?php include "head-nav.php" ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	
<title>E-School</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/evo-calendar.min.css"/>
<link rel="stylesheet" type="text/css" href="css/evo-calendar.midnight-blue.css"/>
	
	<link rel="stylesheet" href="css/calender.css?v=<?php echo time(); ?>">
</head>

<body>

<div class="calend">

<div id="calendar"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/evo-calendar.min.js"></script>
<script>
        // initialize your calendar, once the page's DOM is ready
        $(document).ready(function() {
            $('#calendar').evoCalendar({
                
                theme: "midnight-blue",
                calendarEvents: [{
        id: 'event1', // Event's ID (required)
        name: "Registration", // Event name (required)
        date: "August/31/2022", // Event date (required)
        type: "Registration", // Event type (required)
        everyYear: true // Same event every year (optional)
      },
      {
        id: 'event2', // Event's ID (required)
        name: "Classes Start", // Event name (required)
        date: "September/12/2022", // Event date (required)
        type: "Classes Start", // Event type (required)
        everyYear: true // Same event every year (optional)
      },
     
    ]
            })
})

        
        </script>
</body>
</html>