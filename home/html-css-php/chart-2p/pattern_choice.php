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
    <link rel="stylesheet" href="../css_file/home_c.css">
    <link href="../css_file/progression.css" rel="stylesheet" type="text/css">

    <div id="center">
        <h1>比較内容の選択</h1>
	<!-- それぞれ別のフォルダのプログラムだが一部の文章・教師フラッグの有無・教師用の検索機能の有無を除いて違いはない -->
        <input type="button" value="転入・転出の比較(生徒)" onclick=location.assign("pattern1_student/data1.php") class="btn-gradient-3d-simple3">
        <input type="button" value="転入・転出の比較(教師)" onclick=location.assign("pattern1_teacher/data1.php") class="btn-gradient-3d-simple3">
        <input type="button" value="生徒と教師の比較" onclick=location.assign("pattern2/data1.php") class="btn-gradient-3d-simple3">
        <input type="button" value="その他の比較" onclick=location.assign("pattern3/data1.php") class="btn-gradient-3d-simple3">
        
         <input type="button" style="position:fixed; left:25%; top:80%;" onclick=location.assign("../../home_teacher.php") value="戻る" class="btn-gradient-3d-simple2">
        <!-- 比較機能で使ったセッションの消去 -->
        <?php
        unset($_SESSION['ds1']);//２人比較の場合使うのはds1,ds2のみ。data_studentの略だがコピペが楽だったので教師に対しても使用する
        unset($_SESSION['ds2']);
        unset($_SESSION['dt1']);
        unset($_SESSION['dt2']);
        ?>
    </div>
</body>

</html>