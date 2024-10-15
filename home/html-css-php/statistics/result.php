<?php session_start() ?>
<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>自分メーター</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.2/xlsx.full.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>
	<link rel="stylesheet" href="../css_file/result_c2.css">
</head>

<body>
<div id="center">
<form name="nForm">
<?php 

require('../dbconnect2.php');
if(isset($_POST['disability'])==true){$selected=$_POST['disability'];}
$option='';
if(isset($_POST['onedata'])==true){$option.='一人一つまで　';}
if(isset($_POST['enddata'])==true){$option.='終了済のテストのみ';}
if($option==''){$option='すべてのデータ';}

if(isset($_POST['disability'])==false)
{
print'<h1>結果</h1>';
print'<hr class="cp_hr06"></hr>';
print'<table align="center"><tr><td>生徒のテスト一覧<br />データオプション：'.$option.'</tr></td></table>';
print'<br /><br /><br />';
print'障害名を選択してください。<br \>';
print'<input type="button" value="ホームに戻る" onclick=location.assign("../../home_teacher.php") class="btn-gradient-3d-simple2">';
print'<input type="button" value="選択に戻る" onclick=location.assign("select.php") class="btn-gradient-3d-simple2">';
print'<br /><br />';
exit;
}

require('db_input.php');

$data=0;
$count_history=1;

$stmt = $dbh->prepare('SELECT COUNT(*) AS cnt FROM user_detail WHERE disability LIKE ?');
$stmt->execute(['%'.$selected.'%']);
$rec_member = $stmt ->fetch(PDO::FETCH_ASSOC);
$count_member=$rec_member['cnt'];
if($count_member!=0&&isset($_POST['enddata'])==true)
{
$count_history=0;

$stmt = $dbh->prepare('SELECT id FROM user_detail WHERE disability LIKE ?');
$stmt->execute(['%'.$selected.'%']);
while(true)
{
	$rec_id=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec_id==false)
	{
		break;
	}
	$member_id_count[]=$rec_id['id'];
}
foreach($member_id_count as $key => $val)
{
	$stmt = $dbh->prepare('SELECT COUNT(*) AS cnt FROM jibuntest WHERE shuuryouflag=0 AND fk_uid=?');
	$stmt->execute([$val]);
	$rec_data=$stmt->fetch(PDO::FETCH_ASSOC);
	$data_count=$rec_data['cnt'];
	$count_history=$count_history+$data_count;
}

}
if($count_member==0||$count_history==0)
{

print'<h1>結果</h1>';
print'<hr class="cp_hr06"></hr>';
print'<table align="center"><tr><td>'.$selected.'の生徒のテスト一覧<br />データオプション：'.$option.'</tr></td></table>';
print'<br /><br /><br />';
print'該当するテストデータがありません。<br \>';
print'<input type="button" value="ホームに戻る" onclick=location.assign("../../home_teacher.php") class="btn-gradient-3d-simple2">';
print'<input type="button" value="選択に戻る" onclick=location.assign("select.php") class="btn-gradient-3d-simple2">';
print'<br /><br />';
exit;
}

$stmt = $dbh->prepare('SELECT id FROM user_detail WHERE disability LIKE ?');
$stmt->execute(['%'.$selected.'%']);
while(true)
{
	$rec_id=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec_id==false)
	{
		break;
	}
	$member_id[]=$rec_id['id'];
}
foreach($member_id as $key => $val)
{
	if(isset($_POST['enddata'])==false)
	{
		$stmt = $dbh->prepare('SELECT jtid FROM jibuntest WHERE fk_uid=?');
		$stmt->execute([$val]);
	}
	else
	{
		$stmt = $dbh->prepare('SELECT jtid FROM jibuntest WHERE shuuryouflag=0 AND fk_uid=?');
		$stmt->execute([$val]);
	}
	while(true)
	{
		$rec_data=$stmt->fetch(PDO::FETCH_ASSOC);
		if($rec_data==false)
		{
			break;
		}
		$data_id=$rec_data['jtid'];
		$data_sum[]=(dbdata($data_id));
		$data++;

		$stmt_history = $dbh->prepare('SELECT test_date FROM test_history WHERE fk_jtid=?');
		$stmt_history->execute([$data_id]);
		$rec_history=$stmt_history->fetch(PDO::FETCH_ASSOC);
		$data_history[]=$rec_history['test_date'];

		$stmt_name = $dbh->prepare('SELECT username FROM user WHERE id=?');
		$stmt_name->execute([$val]);
		$rec_name=$stmt_name->fetch(PDO::FETCH_ASSOC);
		$data_name[]=$rec_name['username'];
	}
}

for($a=0;$a<6;$a++)
{
	$add_data[$a]=0;
}

$data_one=0;
if(isset($_POST['onedata'])==true)
{
	
	$data_name_one[0]=$data_name[0];
	$data_history_one[0]=$data_history[0];
	for($b=0;$b<6;$b++){$data_sum_one[0][$b]=$data_sum[0][$b];}
	$data_one++;

	for($a=1;$a<$data;$a++)
	{
		if($data_name[$a]==$data_name[$a-1])
		{
		$data_name_one[$data_one-1]=$data_name[$a];
		$data_history_one[$data_one-1]=$data_history[$a];
		for($b=0;$b<6;$b++){$data_sum_one[$data_one-1][$b]=$data_sum[$a][$b];}
		}

		if($data_name[$a]!=$data_name[$a-1])
		{
		$data_name_one[$data_one]=$data_name[$a];
		$data_history_one[$data_one]=$data_history[$a];
		for($b=0;$b<6;$b++){$data_sum_one[$data_one][$b]=$data_sum[$a][$b];}
		$data_one++;
		}
	}
}

if(isset($_POST['onedata'])==true)
{
	for($a=0;$a<$data_one;$a++)
	{
		for($b=0;$b<6;$b++)
		{
			$add_data[$b]=$add_data[$b]+$data_sum_one[$a][$b];
		}
	}

	for($a=0;$a<6;$a++)
	{
		$ave_data[$a]=$add_data[$a]/$data_one;
		$ave_data[$a]=round($ave_data[$a],2);
	}
}
else
{
	for($a=0;$a<$data;$a++)
	{
		for($b=0;$b<6;$b++)
		{
			$add_data[$b]=$add_data[$b]+$data_sum[$a][$b];
		}
	}

	for($a=0;$a<6;$a++)
	{
		$ave_data[$a]=$add_data[$a]/$data;
		$ave_data[$a]=round($ave_data[$a],2);
	}
}
 ?>
		<h1>結果</h1>
		<hr class="cp_hr06"></hr>

	<?php print'<table align="center"><tr><td>'.$selected.'の生徒のテスト一覧<br />データオプション：'.$option.'</tr></td></table>'; ?>
	<br /><br /><br /><br />
		<input type="button" value="ホームに戻る" onclick=location.assign("../../home_teacher.php") class="btn-gradient-3d-simple2">
		<input type="button" value="選択に戻る" onclick=location.assign("select.php") class="btn-gradient-3d-simple2">
		<br /><br />

		<table class="table table-bordered table-condensed table-to-export" data-sheet-name="datasheet">
			<tr>
				<th></th>
				<th>テスト開始日</th>
				<th>　１こころ　</th>
				<th> ２しゃかい </th>
				<th>３がくしゅう</th>
				<th>　４からだ　</th>
				<th> ５せいかつ </th>
				<th>６身のまわり</th>
			</tr>
			<tr>
				<th>平均点</th>
				<td></td>
				<td><?php print$ave_data[0]; ?>点</td>
				<td><?php print$ave_data[1]; ?>点</td>
				<td><?php print$ave_data[2]; ?>点</td>
				<td><?php print$ave_data[3]; ?>点</td>
				<td><?php print$ave_data[4]; ?>点</td>
				<td><?php print$ave_data[5]; ?>点</td>
			</tr>
			<?php 
			if(isset($_POST['onedata'])==false)
			{
				for($a=0;$a<$data;$a++)
				{
				print'<tr>';
					print'<th>'.$data_name[$a].'さん</th>';
					print'<td>'.$data_history[$a].'</td>';
					print'<td>'.$data_sum[$a][0].'点</td>';
					print'<td>'.$data_sum[$a][1].'点</td>';
					print'<td>'.$data_sum[$a][2].'点</td>';
					print'<td>'.$data_sum[$a][3].'点</td>';
					print'<td>'.$data_sum[$a][4].'点</td>';
					print'<td>'.$data_sum[$a][5].'点</td>';
				print'</tr>';
				}
			}
			else
			{
				for($a=0;$a<$data_one;$a++)
				{
				print'<tr>';
					print'<th>'.$data_name_one[$a].'さん</th>';
					print'<td>'.$data_history_one[$a].'</td>';
					print'<td>'.$data_sum_one[$a][0].'点</td>';
					print'<td>'.$data_sum_one[$a][1].'点</td>';
					print'<td>'.$data_sum_one[$a][2].'点</td>';
					print'<td>'.$data_sum_one[$a][3].'点</td>';
					print'<td>'.$data_sum_one[$a][4].'点</td>';
					print'<td>'.$data_sum_one[$a][5].'点</td>';
				print'</tr>';
				}
			}
			 ?>
			
		</table>
</body>
<html>