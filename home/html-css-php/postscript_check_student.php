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
		$user_detail_grade = $_POST['grade'];
		$user_detail_gender = $_POST['gender'];

			print '<table align="center">';

			if ($user_detail_grade == '') {
			print '<tr><td>学年は未入力です</tr></td>';
			} else{
			print '<tr><td>学年：';
			print $user_detail_grade . "</tr></td>";
			}
			
			if ($user_detail_gender == '') {
			print '<tr><td>性別は未入力です</tr></td>';
			} else{
			print '<tr><td>性別：';
			print $user_detail_gender . "</tr></td>";
			}
			print '</table>';
			print '<br />';
			print '<form method="post" action="postscript_done_student.php">';
			print '<input type="hidden" name="grade" value="' . $user_detail_grade . '">';
			print '<input type="hidden" name="gender" value="' . $user_detail_gender . '">';
			print '<br />';
			print '<input type="button" onclick=location.assign("postscript_student.html") value="戻る" class="btn-gradient-3d-simple2">';
			print '<input type="submit" value="ＯＫ" class="btn-gradient-3d-simple">';
			print '</form>';

		?>

</body>

</html>