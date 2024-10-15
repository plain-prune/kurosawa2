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

	$disability_list[]="ADHD";
	$disability_list[]="ASD";
	$disability_list[]="適応障害";
	$disability_list[]="反応性愛着障害";
	$disability_list[]="強迫性障害";
	$disability_list[]="気分変調症";
	$disability_list[]="抑うつ状態";
	$disability_list[]="統合失調症";
	$disability_list[]="その他";

for($i=0;$i<10;$i++)
{
	$count_data[$i]=0;
}

foreach($disability_list as $key => $val)
{
	$stmt = $dbh->prepare('SELECT COUNT(*) AS cnt FROM user_detail WHERE disability LIKE ?');
	$stmt->execute(['%'.$val.'%']);
	$rec_member = $stmt ->fetch(PDO::FETCH_ASSOC);
	$count_member[$key]=$rec_member['cnt'];

	$stmt = $dbh->prepare('SELECT id FROM user_detail WHERE disability LIKE ?');
	$stmt->execute(['%'.$val.'%']);
	while(true)
	{
		$rec_id=$stmt->fetch(PDO::FETCH_ASSOC);
		if($rec_id==false)
		{
			break;
		}
		$member_id[]=$rec_id['id'];
	}
	foreach($member_id as $key_id => $val_id)
	{
		$stmt = $dbh->prepare('SELECT COUNT(*) AS cnt FROM jibuntest WHERE fk_uid=?');
		$stmt->execute([$val_id]);
		$rec_data=$stmt->fetch(PDO::FETCH_ASSOC);
		$count_data_a=$rec_data['cnt'];
		$count_data[$key]=$count_data[$key]+$count_data_a;
	}
	unset($member_id);
	unset($count_data_a);
}
	

    ?>

    <tr>
      <h2>障害名の選択</h2>
      <hr class="cp_hr06">
      </hr>
      <input type="button" style="position:fixed; left:20%; top:80%;" onclick=location.assign("../../home_teacher.php") value="戻る" class="btn-gradient-3d-simple2">

      <?php
      ini_set('display_errors', 0);
      error_reporting(E_ALL & ~E_NOTICE);
?>
	<form name="data_choice" method="post" action="result.php" class="data_slc">
	<table align="center">
<?php 
foreach($disability_list as $key => $val)
{ 
	print'<tr>';
            print'<td><input type="radio" id="0" name="disability" value="'.$val.'"></td>';
            print'<td>'.$val.'</td>';
            print'<td>'.$count_member[$key].'人</td>';
            print'<td>'.$count_data[$key].'データ</td>';
        print'<tr>';
}

 ?>
</table>
<input type="checkbox"name="onedata"value="on">１人あたり１つのデータ(最新)のみ参照する<br />
<input type="checkbox"name="enddata"value="on">回答が終了しているデータのみ参照する
<div id="center">

<input type="submit" id="choice" style="position:fixed; left:75%; top:80%;" value="選択" class="btn-gradient-3d-simple3">
</div>
</form>

<?php
$dbh=null;
exit();
?>
      

  </div>
</body>

</html>