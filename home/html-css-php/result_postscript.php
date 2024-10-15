<?php 
	require('dbconnect2.php');
	$uid=$_SESSION['uid'];
	$kyoushi = $dbh->prepare('SELECT kyoushiflag FROM user WHERE id =?');
	$kyoushi->execute(array($uid));
	$kyoushis = $kyoushi ->fetch();
	if($kyoushis['kyoushiflag']==1)
	{
		if(isset($_SESSION['postscript_id_data'])==true)
		{
			$p_id_data=$_SESSION['postscript_id_data'];
		}else{
			$p_id_data=0;
		}

		if($p_id_data ==0)
		{
			$data_id = $_SESSION['postscript_id'];
		}else{
			$id = $dbh->prepare('SELECT fk_uid FROM jibuntest WHERE jtid =?');
			$id->execute(array($p_id_data));
			$ids = $id ->fetch();
			$data_id=$ids['fk_uid'];
		}

		$d_cnt = $dbh->prepare('SELECT COUNT(*) AS cnt FROM user_detail WHERE id =?');
		$d_cnt->execute(array($data_id));
		$d_cnts = $d_cnt ->fetch();
		if($d_cnts['cnt']==1){
			$name = $dbh->prepare('SELECT username FROM user WHERE id =?');
			$name->execute(array($data_id));
			$name1 = $name ->fetch();
			$detail = $dbh->prepare('SELECT * FROM user_detail WHERE id =?');
			$detail->execute(array($data_id));
			$details = $detail ->fetch();
			$grade=$details['grade'];
			$gender=$details['gender'];
			$disability=$details['disability'];
			$comment=$details['comment'];
			if($grade==""){$grade='データなし';}
			if($gender==""){$gender='データなし';}
			if($disability==""){$disability='データなし';}
			if($comment==""){$comment='データなし';}

			print'</table>';
			print'<table class="table table-bordered table-condensed table-to-export" data-sheet-name="東京都区一覧">';						print'<tr>';
			print'<th></th>';
			print'<th>'.$name1['username'].'さん</th>';
			print'</tr>';
			print'<tr>';
			print'<th><ruby>学年<rt>がくねん</rt></ruby></th>';
			print'<td bgcolor="#FFFFFF" width="top">';
			print $grade;
			print'</tr>';
			print'<tr>';
			print'<th><ruby>性別<rt>せいべつ</rt></ruby></th>';
			print'<td bgcolor="#FFFFFF" width="top">';
				if($gender==0){print "データなし";}
				if($gender==1){print "男の子";}
				if($gender==2){print "女の子";}
				if($gender==3){print "その他";};
			print'</tr>';
			print'<tr>';
			if($disability=="データなし")
			{
				print'</table>';
			}else{
				print'<th><ruby>障害名<rt>しょうがいめい</rt></ruby></th>';
				print'<td bgcolor="#FFFFFF" width="top">';
				print $disability;
				print'</tr>';
				print'<tr>';
				print'<th>その<ruby>他<rt>た</rt></ruby></th>';
				print'<td bgcolor="#FFFFFF" width="top">';
				print $comment;
				print'</tr>';
				print'</table>';
			}
		}
	}
 ?>