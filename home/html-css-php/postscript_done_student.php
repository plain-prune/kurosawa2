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
		<h1><ruby>実行結果<rt>じっこうけっか</rt></ruby></h1>

	<?php
	try{
		$user_detail_grade = $_POST['grade'];
		$u_d_gender = $_POST['gender'];

		$user_detail_gender = 10;
		if($u_d_gender=="男"){
			$user_detail_gender=1;
		} else if($u_d_gender=="女"){
			$user_detail_gender=2;
		} else if($u_d_gender=="その他"){
			$user_detail_gender=3;
		}

		session_start();
			
		require('dbconnect2.php');
		
		$uid=$_SESSION['uid'];
		$detail = $dbh->prepare('SELECT COUNT(*) AS cnt FROM user_detail WHERE id =?');
		$detail->execute(array($uid));
		$details = $detail ->fetch();
		if($details['cnt']==1){
			$detail = $dbh ->prepare('UPDATE user_detail SET grade=?, gender=? WHERE id =?');
			$detail->execute(array($user_detail_grade, $user_detail_gender,$uid));
			$details = $detail ->fetch();
		} else if($details['cnt']==0){
			$detail = $dbh ->prepare('INSERT user_detail SET id=?, grade=?, gender=?');
			$detail->execute(array($uid, $user_detail_grade, $user_detail_gender));
			$details = $detail ->fetch();
		}

		$_SESSION['grade']=$user_detail_grade;
		$_SESSION['gender']=$u_d_gender;

		print '<table align="center"><tr><td>成功しました</tr></td></table>';
	} catch (Exception $e) {
		print '<table align="center"><tr><td>エラーが発生しました</tr></td></table>';
	}
	?>
<input type="button" value="ホームに戻る" onclick=location.assign("../home_teacher.php") class="btn-gradient-3d-simple2">
</body>

</html>