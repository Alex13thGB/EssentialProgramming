<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var passwordSymbols = " 1234567890-=!@#$%^&*()_+qwertyuiop[]\\a"
			+ " sdfghjkl;'zxcvbnm,./QWERTYUIOP{}\":LKJHGFDSAZXCVBNM<>?"

		function readInt(){
			var number = document.getElementById("passLength").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("password").value = text;
		}

		function genPassword(){
			var length = readInt();
			var passwordText = "";

			for(var i = 0; i < length; i++){
				charCode = parseInt(Math.random() * (passwordSymbols.length - 1));
				passwordText = passwordText + passwordSymbols[charCode];
			}
			write(passwordText);
		}

	</script>
</head>
<body>

<div class="content">
<?php
include "menu.php";
?>
	
<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Угадайка мультиплеер</h1>

			<div class="box">
				<p>Сгенерированный пароль</p>
				<input type="text" id="password">
				<p id="info">Укажите длину пароля</p>
				<input type="text" id="passLength">
				<br>
				<a href="#" onClick="genPassword();" id="button">Сгенерировать пароль</a>				
			</div>
        </div>
    </div>
</div>

	

</div>
<div class="footer">Copyright &copy; Sukharev Aleksei <?php echo date("Y")?></div>

</body>
</html>