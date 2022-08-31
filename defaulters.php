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
	
	
	<link rel="stylesheet" href="css/defaulters.css?v=<?php echo time(); ?>">
</head>

<body>

<div class="inner-body">
      
   <h1>Fee Defaulters</h1>

      <div class="search-students">

        <form class="tab">
      <h3>Select Month</h3><br>
        <label class="radio-inline">
      <input type="radio" name="optradio" > January
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >Febuary
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">March
    </label><br>
    <label class="radio-inline">
      <input type="radio" name="optradio" >April
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >May
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >June
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >July
    </label><br>
    <label class="radio-inline">
      <input type="radio" name="optradio" >August
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >September
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >October
    </label><br>
    <label class="radio-inline">
      <input type="radio" name="optradio" >November
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" >December
    </label>
      </form>
  
          <button><span class="material-symbols-sharp">manage_search</span></button>
      </div>
      <div class="search-students-result">
         <a href="add-student.html"><img src="img/boy.gif"></a>
          <h4>Numair</h4>
          <h5>5th A</h5>
          <span class="material-symbols-sharp" class="delete">block</span>
          
        </div>
        <button class="reminder"><span class="material-symbols-sharp">
notifications_active
</span>Send Reminder</button>
</div>

</body>
</html>