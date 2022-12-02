<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body style="width: 790px; height:480;">
    <!-- 전력측정, 온습도, 조고센서 횟수 -->
    <h1 style="text-align: center;font-size: 35px;"><a href="./test.php"style="text-decoration:none; color:black;">IoT 에너지 지키미</a></h1>
    <div id="blank"></div>
    <div id="main_line"></div>
    <div id="blank"></div>
        <div class="vt">
                <h2>온도</h2>
                <div class="line"></div>
                <p>21.05°C</p>
        </div>
        <div class="vt">
                <h2>습도</h2>
                <div class="line"></div>
                <p>8.00%</p>
        </div>
        <div class="vt">
                <h2>밝기</h2>
                <div class="line"></div>
                <p>100 %</p> 
        </div>
        <div class="vt">
			<a href="./power.php">
				<img src="./img/refrigerator.png">
		 	</a>
        </div>
        <div class="vt" style="width:540px;margin-top:0px;">
	<ul>
		<li><h2>안녕안녕</h2></li>	</ul>
	</div>
        <div class="vt" >
        <a href="bright.php">  
       		<a href="cont.php"><img src="img/bright.png"></a>
        </a>
        </div>
        <div class="alert-box" id="alert">알림창</div>
        <br>
    </body>
</html>
