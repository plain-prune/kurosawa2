<?php require'../dbconnect2.php' ?>
<head>
  <title>自分メータ―</title>
  <link rel="stylesheet" href="../css_file/design2.css">
  <link href="../css_file/progression.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../css_file/home_c.css">
</head>

<body>
  <div id="center">
    <?php

    ini_set('display_errors', 0);

    session_start();

    #生徒が回答したデータを取得
    $sql = 'SELECT id, username FROM user WHERE kyoushiflag=0';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $rec = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <tr>
      <h2>転入時の生徒側のデータを選択してください</h2>
      <hr class="cp_hr06">
      </hr>

      <input type="button" style="position:fixed; left:20%; top:80%;" onclick=location.assign("../../home_teacher.php") value="戻る" class="btn-gradient-3d-simple2">

      <!-- 生徒の一覧を表示 -->
      <form method="post" id="choiceform" action="" onsubmit="display()" class="stu_slc">
        <select name="student_name">
          <option value="<?php print($_SESSION['uid']); ?>"><?php print($_SESSION['name']); ?></option>
          <?php $i = 0;
          foreach ($rec as $u_name) : ?>
            <option value="<?php print($u_name["id"]); ?>"><?php print($u_name["username"]); ?></option>
            <?php $i++; ?>
          <?php endforeach; ?>

        </select>

        <!-- 選択した生徒のテスト一覧を表示 -->
        <input type="submit" value="データ選択">
      </form>

      <?php
      ini_set('display_errors', 0);
      error_reporting(E_ALL & ~E_NOTICE);
      session_start();
      require('student1data_choice.php');
      ?>

  </div>
</body>

</html>