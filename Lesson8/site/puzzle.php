<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var score = 0;

		function checkAnswer(inputId, answers){
			var userAnswer = document.getElementById(inputId).value;
			userAnswer = userAnswer.toLowerCase();
			for(var i = 0; i < answers.length; i++){
				if(userAnswer == answers[i]){
					score++;
					break;
				}
			}
		}
		
		function checkAnswers() {

			checkAnswer("userAnswer1", ["сон", "сноведение"]);
			checkAnswer("userAnswer2", ["морской", "укус акулы"]);
			checkAnswer("userAnswer3", ["шахматный", "мертвый"]);

			alert("Вы отгадали " + score + " загадок");

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

			<h1>Игра в загадки</h1>

			<div class="box">
				<?php
					$userAnswer = $_GET["userAnswer1"];
					if(isset($userAnswer)){
						$score = 0;
						if($userAnswer == "сон" ||  $userAnswer == "сноведение"){
							$score++;
						}
						$userAnswer = $_GET["userAnswer2"];
						if($userAnswer == "морской" ||  $userAnswer == "укус акулы"){
							$score++;
						}
						$userAnswer = $_GET["userAnswer3"];
						if($userAnswer == "шахматный" ||  $userAnswer == "мертвый"){
							$score++;
						}

						echo "Вы отгадали " . $score . " загадок";
					}
				?>

				<form method="get">
					<p>Что можно увидеть с закрытыми глазами?</p>
					<input type="text" name="userAnswer1">

					<p>Какой болезнью никто не болеет на суше?</p>
					<input type="text" name="userAnswer2">

					<p>Какой конь не ест овса?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>
			</div>
        </div>
    </div>
</div>

	

</div>

<div class="footer">Copyright &copy; Sukharev Aleksei <?php echo date("Y")?></div>

</body>
</html>