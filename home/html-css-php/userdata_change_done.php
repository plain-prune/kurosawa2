<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>自分メータ</title>
</head>

<body>

	<?php

	try {
		session_start();

		$teach = $_SESSION['kyoushiflag'];
		$user_grade = $_SESSION['grade'];
		$user_gender = $_SESSION['gender'];
		$user_name = $_SESSION['name'];
		$user_pass = $_SESSION['pass'];

		print $user_name;
		print "<br />";
		print $user_pass;
		print "<br />";

		$change_teach = $_POST['change_teach'];
		$change_user_grade = $_POST['change_grade'];
		$change_user_gender = $_POST['change_gender'];
		$change_user_name = $_POST['change_name'];
		$change_user_pass = $_POST['change_pass'];

		print $change_user_name;
		print "<br />";
		print $change_user_pass;
		print "<br />";

		require('dbconnect2.php');

		//同じユーザを登録出来ないようにする(パスワードと名前と教師が同じ登録をはじく)
		$sql = "SELECT * FROM user WHERE username ='" . $user_name . "' AND password ='" . $user_pass . "' AND kyoushiflag ='" . $teach . "'";
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		if (($result['username'] == $change_user_name) && ($result['password'] == $change_user_pass) && ($result['kyoushiflag'] == $change_teach)) {
			print '<script>window.sessionStorage.clear();</script>';
			print '<h1><ruby><rt>警告：すでに同じユーザが登録されています</rt></ruby></h1>';
			print '<a href="userdata_change.html"> 戻る</a>';
		} else {
			//データベースに変更した情報を更新
			$sql = "UPDATE user SET username=?,password=?,kyoushiflag=?  WHERE username ='" . $user_name . "' AND password ='" . $user_pass . "' AND kyoushiflag ='" . $teach . "'";
			$stmt = $dbh->prepare($sql);
			$data[] = $change_user_name;
			$data[] = $change_user_pass;
			$data[] = (int)$change_teach;
			$stmt->execute($data);
			//		$id = $dbh->lastInsertId();

			print $change_user_name;
			print 'さんの情報を更新しました。<br />';

			//SQL参照用アドレス削除
			$dbh = null;

			$_SESSION['kyoushiflag'] = (int)$change_teach;
			$_SESSION['name'] = $change_user_name;
			$_SESSION['grade'] = $change_user_grade;
			$_SESSION['gender'] = $change_user_gender;
			$_SESSION['flag'] = 1;
			//		$_SESSION['uid']=$id;

			//		print'<script>window.sessionStorage.clear();</script>';
			//		print'<script>window.location = "../home_teacher.php"</script>';
		}
	} catch (Exception $e) {
		print '<ruby>接続<rt>せつぞく</rt></ruby>エラーが<ruby>発生<rt>はっせい</rt></ruby>しました。';
		exit();
	}

	?>

</body>

</html>