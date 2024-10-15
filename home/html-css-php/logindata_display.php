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
        <h1><ruby>生徒情報<rt>せいとじょうほう</rt></ruby></h1>
        <?php
        try
        {
        session_start();
        $uid=$_SESSION['uid']; 

	require('dbconnect2.php');

	$sql = "SELECT * FROM user WHERE id=$uid";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$res = $stmt->fetch(PDO::FETCH_ASSOC);

        print '<table align="center">';
        print '<tr><td>登録日：';
        print $res['tourokubi']. '</td></tr>';
        
        print'<tr><td>名前：' ;
        print $res['username'] . '</td></tr> ';

        $sql = "SELECT * FROM user_detail WHERE id=$uid";
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		$res = $stmt->fetch(PDO::FETCH_ASSOC);

        print '<tr><td>学年：'; 
        if(isset($res['grade'])=='') {
            print '登録されていません';
        } else {
            print $res['grade'] . '</td></tr>';
        }

        print '<tr><td>性別：';
        if(isset($res['gender'])=='') {
            print '登録されていません';
        } else if($res['gender']==1) {
            print'男の子';
        } else if($res['gender']==2) {
            print'女の子';
        } else {
            print'その他';
        }
        print '</td></tr>';

        print'<tr><td>障害名：';
        if(isset($res['disability'])=='') {
            print '登録されていません';
        } else {
            print $res['disability'] .'</td></tr>';
        }

        print '<tr><td>記入欄：';
        if(isset($res['comment'])=='') {
            print '登録されていません';
        } else {
            print $res['comment'] .'</td></tr>';
        }

        print '</table>';

	} catch (Exception $e) {
		print '<ruby>接続<rt>せつぞく</rt></ruby>エラーが<ruby>発生<rt>はっせい</rt></ruby>しました。';
		exit();
	}

	?>
	<input type="button" onclick=location.assign("../home_teacher.php") value="戻る" class="btn-gradient-3d-simple2">
</body>

</html>