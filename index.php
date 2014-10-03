<!DOCTYPE HTML>
<html>
<head>
<title>DWA P2- XKCD Password Generator </title>
</head>
<?php include 'logic.php';?>
<body>
<form action= '' method= "POST">

Number of words in password?: <input type="number", name="pLength"><br>
Do you want to include a number?: <input type="checkbox", name="inclNumber"><br>
Do you want to include a non-number symbol?: <input type="checkbox", name="inclSymbol"><br>
<input type="submit">
</form>
<?php if(!empty($_POST)){echo $passwordString; }?>
<br><br><br><br><br>
<h1>XKCD Password Generator</h1>
 <p>
    This simple web-app is designed to create passwords that are difficult for machines to guess or crack, but easy for humans to remember.<br>
Such passwords are based on long strings of common words with numbers and/or characters interspersed. <br>
It is based on the work of Randal Munroe, as presented in his comic XKCD.<br>
</p>
    <p>
    <img src=http://imgs.xkcd.com/comics/password_strength.png>
    </p>
    </body>
</html>