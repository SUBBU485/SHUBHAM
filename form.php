<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="css/insert.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
</div>
<form action="insert.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<style>body
{
background-image:url("n2.jpg");
background-size:1440px 750px;
}</style>
<h4 style="color:red">field marked as * are compulsory</h4>
<label>Name:  *</label>
<input class="input" name="name" type="text" value="" style="background:powderblue" required>
<br>
<br>
<label>Email:  *</label>
<input class="input" name="email" value="" style="background:powderblue" type="email" size="40"  required>
<br>
<br>
<label>Contact:  *</label>
<input class="input" name="contact" type="number" value="" style="background:powderblue" required>
<br>
<br>
<label>Address:</label>
<textarea cols="25" name="address" style="background:powderblue" ></textarea><br>
<br>
<br>
<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
</div>
</body>
</html>