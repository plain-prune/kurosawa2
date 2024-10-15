<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>自分メータ</title>
	<link rel="stylesheet" href="css_file/design2.css">
	<link href="progression.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="center">
<h1>CSV出力</h1>

<h3>注意</h3>
<p>年齢と性別の設定が行われていない生徒はデータが出力されません。<br />必ず「そのほか」または「その他の記入（教師専用）」より設定してください。</p>
<p>終了していないテストデータに限り、回答していない質問の答えが空白となる場合があります。</p>
<input type="button" style="position:absolute; left:30%; top:35%;" value="ホームに戻る" onclick=location.assign("../home_teacher.php") class="btn-gradient-3d-simple2">
<input type="button" style="position:absolute; left:50%; top:35%;" value="出力開始" onclick=location.assign("takecsv_done.php") class="btn-gradient-3d-simple2">
</body>

</html>