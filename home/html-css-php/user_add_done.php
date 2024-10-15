<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>自分メータ</title>
</head>

<body>

	<?php

	try {
		$teach = $_POST['teach'];
		$user_name = $_POST['name'];
		$user_pass = $_POST['pass'];

		session_start();

		require('dbconnect2.php');

		//同じユーザを登録出来ないようにする(パスワードと名前と教師が同じ登録をはじく)
		$sql = "SELECT * FROM user WHERE username ='" . $user_name . "' AND password ='" . $user_pass . "' AND kyoushiflag ='" . $teach . "'";
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		if (($result['username'] == $user_name) && ($result['password'] == $user_pass) && ($result['kyoushiflag'] == $teach)) {
			print '<script>window.sessionStorage.clear();</script>';
			print '<h1><ruby><rt>警告：すでに同じユーザが登録されています</rt></ruby></h1>';
			print '<a href="user_add.html"> 戻る</a>';
		} else {
			//データベースに情報を登録
			$sql = 'INSERT INTO user (username,password,tourokubi,kyoushiflag) VALUES (?,?,?,?)';
			$stmt = $dbh->prepare($sql);
			$data[] = $user_name;
			$data[] = $user_pass;
			$data[] = date("Y-m-d");
			$data[] = (int)$teach;
			$stmt->execute($data);
			$id = $dbh->lastInsertId();

			print $user_name;
			print 'さんを追加しました。<br />';

			//dataflagに0を挿入
			$sql = 'UPDATE user SET dataflag = 0 WHERE id = ' . $id . '';
			$stmt = $dbh->prepare($sql);
			$stmt->execute();

			//SQL参照用アドレス削除
			$dbh = null;

			$_SESSION['kyoushiflag'] = (int)$teach;
			$_SESSION['name'] = $user_name;
			$_SESSION['pass'] = $user_pass;
			$_SESSION['flag'] = 1;
			$_SESSION['uid'] = $id;
			unset($_SESSION["grade"]);
			unset($_SESSION["gender"]);

			print '<script>window.sessionStorage.clear();</script>';
			print '<script>window.location = "../home_teacher.php"</script>';
		}
	} catch (Exception $e) {
		print '<ruby>接続<rt>せつぞく</rt></ruby>エラーが<ruby>発生<rt>はっせい</rt></ruby>しました。';
		exit();
	}

	?>

</body>

</html>