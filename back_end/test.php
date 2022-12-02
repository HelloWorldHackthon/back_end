<!--
  blank는 마진을 주기 위해 만들었습니다.
--> 

<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <div id="header">
        <strong>IoT 에너지 지키미</strong>
    </div>
    <div id="blank"></div>
    <div id="clock" style="color:rgba(0, 0, 0, 0.512);">clock</div>
    <script>
      var Target = document.getElementById("clock");
      function clock() {
          var mag = "현재 시간 :";
          var time = new Date();
          var week = ['일', '월', '화', '수', '목', '금', '토'];

          var hours = time.getHours();
          var minutes = time.getMinutes();

          Target.innerText = 
          `${mag} ${hours < 10 ? `0${hours}` : hours}:${minutes < 10 ? `0${minutes}` : minutes}`;
      }
      clock();
      setInterval(clock, 1000); // 1초마다 실행
    </script>
    <div id="blank"></div>
    <section>
      <h3>식물을 키우는 화분, 이제 지구를 키운다</h3><br>
      <div id="blank"></div>
    </section>
    <div id="blank"></div>
    <div id="center">
      <a href="index2.php"><button>정보 보기</button></a>
    </div>
    <div id="blank"></div>
  </body>
</html>
