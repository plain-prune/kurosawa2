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
		<h1><ruby>確認画面<rt>かくにんがめん</rt></ruby></h1>

		<?php
		$teach = $_POST['teach'];
		$user_name = $_POST['name'];
		$user_pass = $_POST['pass'];
		$user_pass2 = $_POST['pass2'];

		$user_name = str_replace(" ", "", $user_name);
		$user_name = str_replace("　", "", $user_name);

		if ($user_name == '') {
			print '名前が入力されていません。<br />';
		} else {
			print '<table align="center">';
			print '<tr><td>生徒名：';
			print $user_name . "</tr></td>";
			print '<br />';
		}

		if ($user_pass == '') {
			print 'パスワードが入力されていません。<br />';
		}

		if ($user_pass != $user_pass2) {
			print 'パスワードが<ruby>一致<rt>いっち</rt></ruby>しません。<br />';
		}

		if ($user_name == '' || $user_pass == '' || $user_pass != $user_pass2) {
			print '<form>';
			print '<input type="button" onclick="history.back()" value="戻る" class="btn-gradient-3d-simple2">';
			print '</form>';
		} else {
			print '<tr><td>パスワード：';
			print $user_pass . "</tr></td>";
			print '</table>';
			print '<br />';
			print '<form method="post" action="user_add_done.php">';
			print '<input type="hidden" name="teach" value="0">';
			if ($teach == 'yes') {
				print '<input type="hidden" name="teach" value="1">';
			}
			print '<input type="hidden" name="name" value="' . $user_name . '">';
			print '<input type="hidden" name="pass" value="' . $user_pass . '">';
			print '<br />';
			print '<input type="button" onclick=location.assign("user_add.html") value="戻る" class="btn-gradient-3d-simple2">';
			print '<input type="submit" value="ＯＫ" class="btn-gradient-3d-simple">';
			print '</form>';
		}

		?>

</body>

</html>