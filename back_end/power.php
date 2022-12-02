<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="power.css">
</head>
<body style="width: 790px; height:480;">
    <!-- 전력측정, 온습도, 조고센서 횟수 -->
    	<h1 style="text-align: center;font-size: 35px;">
		<a href="./index2.php" style="text-decoration: none; color: black;">IoT 에너지 지키미</a>
	</h1>
    <div id="blank"></div>
    <div id="main_line"></div>
    <div id="blank"></div>
        <div class="vt"style="margin-left:116px;">
            <h2>전력</h2>
            <div class="line"></div>
            <p>0.00Wh</p>
        </div>
        <div class="vt">
            <h2>문 횟수</h2>
            <div class="line"></div>
            <p>126회</p>
        </div>
        <div class="vt">
            <h2>낭비 전력</h2>
            <div class="line"></div>
            <p>25.2kWh</p>
        </div>
        <hr style="width: 700px;margin-bottom: 30px;">
        <div class="information">
            <span class="inf">냉장고의 문을 자주 열면 찬 공기가 빠져나가고 그만큼 더운 공기가 들어가게 
                되므로 소비전력이 증가한다. 문 열기 횟수에 따라 하루 4회 개폐마다 0.8kWh/월 전기소비가 
                증가한다.
            </span>
        </div>
        <div class="alert-box" id="alert">알림창</div>
        <br>
    </body>
</html>
