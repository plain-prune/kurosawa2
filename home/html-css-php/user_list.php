<head>
  <title>自分メータ―</title>
  <link rel="stylesheet" href="css_file/design2.css">
  <link href="css_file/progression.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css_file/home_c.css">

</head>

<body>
  <?php
  session_start();
  require('dbconnect2.php');

  //データ選択時に名前を表示出来るように取得
  $sql = 'SELECT * FROM user WHERE id=' . $_SESSION['uid'] . '';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $name = $stmt->fetch(PDO::FETCH_ASSOC);


  $sql = 'SELECT id, username,kyoushiflag FROM user';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $rec = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <!-- ユーザ名を表示 -->
  <tr>
    <?php
    print "<ruby>ログイン</ruby>";
    print "<ruby>名<rt>めい</rt></ruby>";
    print "<ruby>：</ruby>";
    print($name['username']);
    print '(教師)';
    $_SESSION['kyoushi_name'] = $name['username'];
    ?>
  </tr>
  <!-- ユーザ一覧 -->
  <form method="post" id="choiceform" action="userdata_change.php" onsubmit="display()">
    <select name="student_name">
      <?php
      $sql = 'SELECT * FROM user WHERE id=' . $_SESSION['uid'] . '';
      $stmt = $dbh->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($result['kyoushiflag'] == 1) {
      ?>
        <!-- 初期値 -->
        <option value="<?php print($_SESSION['uid']); ?>">
          <?php
          print($_SESSION['name']);
          print '(教師)';
          ?>
        </option>
      <?php
      } else {
      ?>
        <option value="<?php print($_SESSION['uid']); ?>"><?php print($_SESSION['name']); ?></option>

      <?php
      }
      $i = 0;
      foreach ($rec as $u_name) : ?>
        <option value="<?php print($u_name["id"]); ?>">
          <?php
          if ($u_name["kyoushiflag"] == 1) {
            print($u_name["username"]);
            print '(教師)';
          } else {
            print($u_name["username"]);
          }
          ?>
        </option>
        <?php $i++; ?>
      <?php endforeach; ?>
    </select>
    <input type="submit" value="データ選択">
  </form>

  <?php
  ini_set('display_errors', 0);
  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  require('student_data_choice.php');
  ?>

  </div>
</body>

</html>