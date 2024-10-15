<?php require'../../dbconnect2.php' ?>
<head>
  <title>自分メータ―</title>
  <link rel="stylesheet" href="../../css_file/design2.css">
  <link href="../css_file/progression.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../../css_file/home_c.css">
</head>

<body>
  <div id="center">
    <?php

    ini_set('display_errors', 0);

    session_start();

    #指定セッションが空っぽの場合のみ前ページで選択したデータを受け渡す
    if ($_SESSION['ds1'] == '') {
      $_SESSION['ds1'] = $_POST['ds1'];
    }
    #print($_SESSION['ds1']);
    #受け渡しデータの確認用

    $disability = "全て";
    if(isset($_POST['disability'])==true)
    {$disability = $_POST["disability"];}
    #生徒が回答したデータを取得
    if($disability=="全て"){
	$sql = 'SELECT id, username,kyoushiflag FROM user';
    }else if($disability=="ADHD"){
	$sql = 'SELECT user.id, user.username,user.kyoushiflag, user_detail.disability FROM user,user_detail WHERE user.id = user_detail.id HAVING disability LIKE "%ADHD%"';
    }else if($disability=="ASD"){
	$sql = 'SELECT user.id, user.username,user.kyoushiflag, user_detail.disability FROM user,user_detail WHERE user.id = user_detail.id HAVING disability LIKE "%ASD%"';;
    }else if($disability=="適応障害"){
	$sql = 'SELECT user.id, user.username,user.kyoushiflag, user_detail.disability FROM user,user_detail WHERE user.id = user_detail.id HAVING disability LIKE "%適応障害%"';
    }else if($disability=="反応性愛着障害"){
	$sql = 'SELECT user.id, user.username,user.kyoushiflag, user_detail.disability FROM user,user_detail WHERE user.id = user_detail.id HAVING disability LIKE "%反応性愛着障害%"';
    }else if($disability=="強迫性障害"){
	$sql = 'SELECT user.id, user.username,user.kyoushiflag, user_detail.disability FROM user,user_detail WHERE user.id = user_detail.id HAVING disability LIKE "%強迫性障害%"';
    }else if($disability=="気分変調症"){
	$sql = 'SELECT user.id, user.username,user.kyoushiflag, user_detail.disability FROM user,user_detail WHERE user.id = user_detail.id HAVING disability LIKE "%気分変調症%"';
    }else if($disability=="抑うつ状態"){
	$sql = 'SELECT user.id, user.username,user.kyoushiflag, user_detail.disability FROM user,user_detail WHERE user.id = user_detail.id HAVING disability LIKE "%抑うつ状態%"';
    }else if($disability=="統合失調症"){
	$sql = 'SELECT user.id, user.username,user.kyoushiflag, user_detail.disability FROM user,user_detail WHERE user.id = user_detail.id HAVING disability LIKE "%統合失調症%"';
    }else if($disability=="その他"){
	$sql = 'SELECT user.id, user.username,user.kyoushiflag, user_detail.disability FROM user,user_detail WHERE user.id = user_detail.id HAVING disability LIKE "%その他%"';
    }
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $rec = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <tr>
      <h2>２つ目のデータを選択してください</h2>
      <hr class="cp_hr06">
      </hr>

      <input type="button" style="position:fixed; left:20%; top:80%;" onclick=location.assign("../pattern_choice.php") value="戻る" class="btn-gradient-3d-simple2">

      <form method="post" id="choiceform_disability" action="" onsubmit="display()" class="stu_slc">
        <select name="disability">
		<option value="全て">絞り込みしない</option>
		<option value="ADHD">ADHD</option>
		<option value="ASD">ASD</option>
		<option value="適応障害">適応障害</option>
		<option value="反応性愛着障害">反応性愛着障害</option>
		<option value="強迫性障害">強迫性障害</option>
		<option value="気分変調症">気分変調症</option>
		<option value="抑うつ状態">抑うつ状態</option>
		<option value="統合失調症">統合失調症</option>
		<option value="その他">その他</option>
        </select>
        <!-- 選択した障害を持つ生徒を表示 -->
        <input type="submit" value="生徒検索">
      </form>

	<?php print'<table align="center"><tr><td>現在の検索条件：'.$disability.'の生徒</tr></td></table>'; ?>

      <!-- 生徒の一覧を表示 -->
      <form method="post" id="choiceform" action="" onsubmit="display()" class="stu_slc">
        <select name="student_name">
          <?php if($disability =="全て"){
	$sql_a = 'SELECT kyoushiflag FROM user WHERE id=' . $_SESSION['uid'] . '';
	$stmt_a = $dbh->prepare($sql_a);
	$stmt_a->execute();
	$my_flag = $stmt_a->fetch(PDO::FETCH_ASSOC);

	print'<option value="'.$_SESSION['uid'].'">'.$_SESSION['name'];if($my_flag["kyoushiflag"]==1){print"(教師)";}print'</option>';
	}else{print' <option value="sample">選択して下さい</option>';} ?>
          <?php $i = 0;
          foreach ($rec as $u_name) : ?>
            <option value="<?php print($u_name["id"]); ?>"><?php print($u_name["username"]);if($u_name["kyoushiflag"]==1){print"(教師)";} ?></option>
            <?php $i++; ?>
          <?php endforeach; ?>

        </select>

        <!-- 選択した生徒のテスト一覧を表示 -->
	<?php print '<input type="hidden" name="disability" value="' . $disability . '">'; ?>
        <input type="submit" value="データ選択">
      </form>

      <?php
      ini_set('display_errors', 0);
      error_reporting(E_ALL & ~E_NOTICE);
      session_start();
      require('data2_choice.php');
      ?>

  </div>
</body>

</html>