<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>control</title>
    <link rel="stylesheet" href="contstyle.css">
</head>
<body>
    <div class="header">
        <a style="text-decoration: none; color: black;" href="index2.php"><h1>IoT 에너지 지키미</h1></a>
        <div class="line"></div>
    </div>
    <div style="text-align: center;">
        <div class="light" style="display:inline;">
            <h2 style="display: inline;">조명 밝기 : </h2><span style="display: inline">100 %</span> 
            <h1 style="text-align: center; top: 0%;">스위치</h1>
        </div>
    </div>
    <div class="find-btn">
        <button type="button" class="btn btn-navy navbar-btn find-btn1" onclick="location.href='./cont.php?value=on'">on</button>
        <button type="button" class="btn btn-grey navbar-btn find-btn1" onclick="location.href='./cont.php?value=off'">off</button>
    </div>
</body>
</html>

