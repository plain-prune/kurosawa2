<head>
  <title>自分メータ―</title>
  <link rel="stylesheet" href="css_file/design2.css">
  <link href="css_file/progression.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css_file/home_c.css">

</head>

<body>
 <div id="center">
  <?php
  session_start();
  require('dbconnect2.php');

  //データ選択時に名前を表示出来るように取得
  $sql = 'SELECT * FROM user WHERE id=' . $_SESSION['uid'] . '';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $name = $stmt->fetch(PDO::FETCH_ASSOC);


  $sql = 'SELECT id,username,kyoushiflag FROM user';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $rec = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>
  
  <h2>つづきから</h2>
  <hr class="cp_hr06"></hr>

  <!-- ユーザ名を表示 -->
  <div class="stu_choice_login_name">
    <?php
    print "ログイン名：";
    print ($name['username']);
    print ' (教師)';
    $_SESSION['kyoushi_name'] = $name['username'];
    ?>
  </div>

  <form method="post" id="choiceform" action="" onsubmit="display()">
    <select name="student_name" class="stu_choice">
      <option value="<?php print ''; ?>">
        <?php
        print '選択してください';
        ?>
      </option>
      <?php

      $i = 0;
      foreach ($rec as $u_name) : ?>

        <?php
        if ($u_name['kyoushiflag'] == 1) {
        ?>
          <option value="<?php print($u_name['id']); ?>">
            <?php
            print($u_name['username']);
            print '(教師)';
            ?>
          </option>
        <?php
        } else {
        ?>
          <option value="<?php print($u_name['id']); ?>"><?php print($u_name['username']); ?></option>
        <?php
        }
        ?>
        <?php $i++; ?>
      <?php endforeach; ?>
    </select>
    <input type="button" style="position:fixed; left:20%; top:80%;" onclick=location.assign("../home_teacher.php") value="戻る" class="btn-gradient-3d-simple2">
    <input type="submit" value="データ選択" class="stu_choice">
  </form>

  <?php
  ini_set('display_errors', 0);
  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  require('data_choice_teach.php');
  ?>

  </div>
</body>

</html>