<!doctype html>
<html lang="ja">

<head>
    <script>
        sessionStorage.clear();
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>自分メータ―</title>
</head>

<body>
    <link rel="stylesheet" href="html-css-php/css_file/home_c.css">
    <link href="html-css-php/css_file/progression.css" rel="stylesheet" type="text/css">

    <div id="center">
        <h1>自分メータ</h1>

        <input type="button" value="はじめから" onclick=location.assign("html-css-php/test_start.php") class="btn-gradient-3d-simple3">
        <?php

        session_start();

        //SQLの呼び出し
	require('html-css-php/dbconnect2.php');

        $uid = $_SESSION['uid'];

        //dataflagを参照し、値をresultに格納
        $sql = 'SELECT * FROM user WHERE id=' . $uid . '';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //データがあるかどうかの確認
        if ($result['dataflag'] == 1) {
            if ($result['kyoushiflag'] == 0) {
                print '<input type="button" value="つづきから" onclick=location.assign("html-css-php/data_choice.php")  class="btn-gradient-3d-simple3">';
                print '<input type="button" value="ログアウト" onclick=location.assign("../home.html")  class="btn-gradient-3d-simple3">';
            } else {
                print '<input type="button" value="つづきから" onclick=location.assign("html-css-php/student_choice.php")  class="btn-gradient-3d-simple3">';
                print '<input type="button" value="ログアウト" onclick=location.assign("../home_teacher.html")  class="btn-gradient-3d-simple3">';
            }
        } else {
            if ($result['kyoushiflag'] == 0) {
                print '<input type="button" value="ログアウト" onclick=location.assign("../home.html")  class="btn-gradient-3d-simple3">';
            } else {
                print '<input type="button" value="ログアウト" onclick=location.assign("../home_teacher.html")  class="btn-gradient-3d-simple3">';
            }
        }
	if ($result['kyoushiflag'] == 1) {
	//追記機能
	print '<input type="button" value="その他の記入(教師専用)" onclick=location.assign("html-css-php/postscript.html")  class="btn-gradient-3d-simple3">';        

        //比較機能
        print'<input type="button" value="比較機能" onclick=location.assign("html-css-php/chart/student1data.php") class="btn-gradient-3d-simple4">';
        print'<input type="button" value="2データ比較機能" onclick=location.assign("html-css-php/chart-2p/pattern_choice.php") class="btn-gradient-3d-simple4">';
	print'<input type="button" value="障害毎の一覧表示" onclick=location.assign("html-css-php/statistics/select.php") class="btn-gradient-3d-simple4"><br />';
       
	//生徒情報変更
        print'<input type="button" value="生徒情報変更" onclick=location.assign("html-css-php/logindata_change.php") class="btn-gradient-3d-simple4">';

        //生徒情報参照
	print'<input type="button" value="生徒情報参照" onclick=location.assign("html-css-php/logindata_display.php") class="btn-gradient-3d-simple4"><br />';

	//CSV作成
	print'<input type="button" value="csv作成" onclick=location.assign("html-css-php/takecsv.php") class="btn-gradient-3d-simple4">';
	}
	if ($result['kyoushiflag'] == 0) {
	//追記機能
	print '<input type="button" value="そのほか" onclick=location.assign("html-css-php/postscript_student.html")  class="btn-gradient-3d-simple3">';        

	//生徒情報変更
        print'<input type="button" value="生徒情報変更" onclick=location.assign("html-css-php/logindata_change.php") class="btn-gradient-3d-simple4">';
	}
        ?>
        <!-- 比較機能で使ったセッションの消去 -->
        <?php
        unset($_SESSION['ds1']);
        unset($_SESSION['ds2']);
        unset($_SESSION['dt1']);
        unset($_SESSION['dt2']);
        ?>
    </div>
</body>

</html>