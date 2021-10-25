<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> User Form</h1>
    <hr>
    <label for="name"><b>Enter Name</b></label>
<input type="text" placeholder="Enter Name" name="name"> <br> <br>
<label for="email"><b>Enter Email</b></label>
<input type="text" placeholder="Enter Email" name="email"><br> <br>
<label for="dob"><b>Date Of Birth</b></label>
<input type="date" id="dob" name="dob"><br> <br>
<label for="about"><b>About Yourself</b></label>
<textarea name="about" rows="6" cols="30"> </textarea> <br> <br>

<div id="response"></div>

<hr>
<button type="submit" class="registerbtn"><strong>Register</strong></button>


<script type="text/javascript">
setInterval(function(){
    var xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET","response.php",false);
    xmlhttp.send(null);
    document.getElementById("response").innerHTML=xmlhttp.responseText;
}, 1000);

</script>
</body>
</html>
