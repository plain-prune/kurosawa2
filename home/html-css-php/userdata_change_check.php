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
		$change_teach = $_POST['change_teach'];
		$change_user_grade = $_POST['change_grade'];
		$change_user_gender = $_POST['change_gender'];
		$change_user_name = $_POST['change_name'];
		$change_user_pass = $_POST['change_pass'];
		$change_user_pass2 = $_POST['change_pass2'];

		$change_user_name = str_replace(" ", "", $change_user_name);
		$change_user_name = str_replace("　", "", $change_user_name);

		if ($change_user_name == '') {
			print 'スタッフ名が入力されていません。<br />';
		} else {
			print '<table align="center">';
			print '<tr><td>スタッフ名：';
			print $change_user_name . "</tr></td>";
			print '<br />';
		}

		if ($change_user_pass == '') {
			print 'パスワードが入力されていません。<br />';
		}

		if ($change_user_pass != $change_user_pass2) {
			print 'パスワードが<ruby>一致<rt>いっち</rt></ruby>しません。<br />';
		}

		if ($change_user_name == '' || $change_user_pass == '' || $change_user_pass != $change_user_pass2) {
			print '<form>';
			print '<input type="button" onclick="history.back()" value="戻る" class="btn-gradient-3d-simple2">';
			print '</form>';
		} else {
			print '<tr><td>パスワード：';
			print $change_user_pass . "</tr></td>";
			print '</table>';
			print '<br />';
			print '<form method="post" action="userdata_change_done.php">';
			print '<input type="hidden" name="change_teach" value="0">';
			if ($change_teach == 'yes') {
				print '<input type="hidden" name="change_teach" value="1">';
			}
			print '<input type="hidden" name="change_grade" value="' . $change_user_grade . '">';
			print '<input type="hidden" name="change_gender" value="' . $change_user_gender . '">';
			print '<input type="hidden" name="change_name" value="' . $change_user_name . '">';
			print '<input type="hidden" name="change_pass" value="' . $change_user_pass . '">';
			print '<br />';
			print '<input type="button" onclick=location.assign("userdata_change.php") value="戻る" class="btn-gradient-3d-simple2">';
			print '<input type="submit" value="ＯＫ" class="btn-gradient-3d-simple">';
			print '</form>';
		}

		?>

</body>

</html>