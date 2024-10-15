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
		$user_detail_grade = $_POST['grade'];
		if(isset($_POST['disability'])==true){
			$user_detail_disability = $_POST['disability'];
		}else{
			$user_detail_disability = '記載なし';
		}
		$user_detail_gender = $_POST['gender'];
		$user_detail_comment = $_POST['comment'];

		$user_name = str_replace(" ", "", $user_detail_disability);
		$user_name = str_replace("　", "", $user_detail_disability);

			print '<table align="center">';

			if ($user_detail_grade == '') {
			print '<tr><td>学年は未入力です</tr></td>';
			} else{
			print '<tr><td>学年：';
			print $user_detail_grade . "</tr></td>";
			}
			
			if (isset($_POST['disability']) && is_array($_POST['disability'])) {
    			$user_detail_disability = implode("　", $_POST["disability"]);
			}
			if ($user_detail_disability == '記載なし') {
			print '<tr><td>障害名は未入力です</tr></td>';
			} else{
			print '<td>障害名：';
			print ($user_detail_disability . '　');
			print '</td>';
			print '<br />';
			}
		
			if ($user_detail_gender == '') {
			print '<tr><td>性別は未入力です</tr></td>';
			} else{
			print '<tr><td>性別：';
			print $user_detail_gender . "</tr></td>";
			}

			if ($user_detail_comment == '') {
			print '<tr><td>自由記入欄は未入力です</tr></td>';
			$user_detail_comment="記載なし";
			} else{
			print '<tr><td>';
			print $user_detail_comment . "</tr></td>";
			}

			print '</table>';
			print '<br />';
			print '<form method="post" action="postscript_done.php">';
			print '<input type="hidden" name="teach" value="0">';
			if ($teach == 'yes') {
			print '<input type="hidden" name="teach" value="1">';
			}
			print '<input type="hidden" name="grade" value="' . $user_detail_grade . '">';
			print '<input type="hidden" name="gender" value="' . $user_detail_gender . '">';
			print '<input type="hidden" name="disability[]" value="' . $user_detail_disability  . '">';
			print '<input type="hidden" name="comment" value="' . $user_detail_comment . '">';
			print '<br />';
			print '<input type="button" onclick=location.assign("postscript.html") value="戻る" class="btn-gradient-3d-simple2">';
			print '<input type="submit" value="ＯＫ" class="btn-gradient-3d-simple">';
			print '</form>';

		?>

</body>

</html>