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
<h2>Insert Data In Database Using PHP.</h2>
</div>
<form action="insert.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<style>body
{
background-image:url("n1.jpg");
background-size:1440px 750px;
}</style>
<h4 style="color:yellow">field marked as * are compulsory</h4>
<h2>Form</h2>
<label>Name:  *</label>
<input class="input" name="name" type="text" value="">
<br>
<label>Email:  *</label>
<input class="input" name="email" type="text" value="">
<br>
<label>Contact:  *</label>
<input class="input" name="contact" type="text" value="">
<label>Address:</label>
<textarea cols="25" name="address" rows="5"></textarea><br>
<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
</div>
</body>
</html>