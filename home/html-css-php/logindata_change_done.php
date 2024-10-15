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

	try {
		session_start();
		$user_name =$_SESSION['name'];
		$uid = $_SESSION['uid'];

		$change_user_name = $_POST['change_name'];
		$change_user_pass = $_POST['change_pass'];
		$change_grade = $_POST['change_grade'];
		$change_gender =$_POST['change_gender'];
		$change_detail_gender = 10;
		if($change_gender=="男"){
			$change_detail_gender=1;
		} else if($change_gender=="女"){
			$change_detail_gender=2;
		} else if($change_gender=="その他"){
			$change_detail_gender=3;
		}

			require('dbconnect2.php');
		
			//データベースに変更した情報を更新
			$sql = "UPDATE user SET username=?,password=? WHERE id=$uid";
			$stmt = $dbh->prepare($sql);
			$data[] = $change_user_name;
			$data[] = $change_user_pass;
			$stmt->execute($data);
			//$id = $dbh->lastInsertId();

		//user_detailの更新
		$sql = 'SELECT COUNT(*) AS cnt FROM user_detail WHERE id=?';
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array($uid));
		$res = $stmt->fetch();

		if($res['cnt']==1){
			$sql= 'UPDATE user_detail SET grade=?, gender=? WHERE id =?';
			$stmt = $dbh->prepare($sql);
			$stmt->execute(array($change_grade, $change_detail_gender,$uid));
			}
		 else if($res['cnt']==0){
			$sql = 'INSERT user_detail SET id=?, grade=?, gender=?';
			$stmt = $dbh->prepare($sql);
			$stmt->execute(array($uid, $change_grade, $change_detail_gender));
			}

			print '<table align="center">';
			print '<tr><td>変更完了しました。</tr></td><br />';
			print'</table>';

			//SQL参照用アドレス削除
			$dbh = null;

			

			//セッションの更新
			$_SESSION['name'] = $change_user_name;
			$_SESSION['grade'] = $change_grade;
			$_SESSION['gender'] =$change_gender;
			$_SESSION['pass'] = $change_user_pass;
			$_SESSION['flag'] = 1;

			print '<script>window.sessionStorage.clear();</script>';

		}
	
	 catch (Exception $e) {
		print '<ruby>接続<rt>せつぞく</rt></ruby>エラーが<ruby>発生<rt>はっせい</rt></ruby>しました。';
		exit();
	}

	?>
	<input type="button" onclick=location.assign("../home_teacher.php") value="戻る" class="btn-gradient-3d-simple2">
</body>

</html>