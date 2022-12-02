<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" href="setstyle.css">
</head>
<body>
    <div id="header">
        <a href="setting.php" style="color:black;text-decoration:none; position: absolute;">
            <h1 style="text-align: center;">Setting</h1>
        </a>
    </div>
    <fieldset id="jb-content">
        <legend>배경화면</legend>
        <form action="" method="POST" enctype="multipart/form-data">
        	<p><input type="file" name="myfile"></p>
  <p><input type="submit" name="action" value="Upload"></p>
	</form>
        </fieldset>
	<fieldset id="jb-sidebar">
        <legend>테마</legend>
		<div>
			<a href="test2.php" style="text-decoration: none; color: black;">메모 설정 이동</a>
		</div>
	</fieldset>
        <fieldset id="jb-footer">
        <legend>기타</legend>
        <p>...............................</p>
        </fieldset>

</body>
</html>
