<?php

//try{
	$user_name=$_POST['name'];
	$user_pass=$_POST['pass'];
	$teach=$_POST['teach'];
	error_reporting(0);
	$login=$_POST['login_teacher'];
	error_reporting(E_ALL);

	if ($teach == 'yes') {
		$teach = 1;
	}
	else{
		$teach = 0;
	}
	require('dbconnect2.php');
	$sql='SELECT id, kyoushiflag FROM user WHERE username=? AND password=? AND kyoushiflag=?';
	$stmt=$dbh->prepare($sql);
	$data[]=$user_name;
	$data[]=$user_pass;
	$data[]=(int)$teach;
	$stmt->execute($data);

	$rec=$stmt->fetch(PDO::FETCH_ASSOC);


	if($rec==false){
		print '名前かパスワード、または教師かどうかが<ruby>間違<rt>まちが</rt></ruby>っています。<br />';
		if($login == 1) print '<a href="user_login_teacher.php"> 戻る</a>';
                else print '<a href="user_login.php"> 戻る</a>';
	}
	else{
		session_start();
		$_SESSION['uid']=$rec['id'];
		$_SESSION['kyoushiflag']=$rec['kyoushiflag'];
		$_SESSION['name']=$user_name;
		$_SESSION['pass']=$user_pass;

		
		$sql='SELECT grade, gender FROM user_detail WHERE id=?';
		$stmt=$dbh->prepare($sql);
		$data_a[]=$rec['id'];
		$stmt->execute($data_a);
		$rec=$stmt->fetch(PDO::FETCH_ASSOC);

		if($rec==true){
			$_SESSION['grade']=$rec['grade'];
			if($rec['gender']==1){$_SESSION['gender']='男';}
			if($rec['gender']==2){$_SESSION['gender']='女';}
			if($rec['gender']==3){$_SESSION['gender']='その他';}
		}else{
			unset($_SESSION["grade"]);
			unset($_SESSION["gender"]);
		}
	
		print'<script>window.location = "../home_teacher.php"</script>';
		exit();
	}
//}
//catch(Exception $e){
//	print '<ruby>接続<rt>せつぞく</rt></ruby>エラーが<ruby>発生<rt>はっせい</rt></ruby>しました。';
//	exit();
//}
