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
<h1>CSV出力</h1>

<?php

//try{

	$data=0;

	require('dbconnect2.php');
	$sql=
		'SELECT 
			user.id,
			user.username,
			user.kyoushiflag,
			user_detail.grade,
			user_detail.gender,
			user_detail.disability,
			user_detail.comment,
			jibuntest.shuuryouflag,
			test_history.test_date,
			kokoro.q1 AS kokoro_q1,
			kokoro.q2 AS kokoro_q2,
			kokoro.q3 AS kokoro_q3,
			kokoro.q4 AS kokoro_q4,
			kokoro.q5 AS kokoro_q5,
			kokoro.q6 AS kokoro_q6,
			kokoro.q7 AS kokoro_q7,
			kokoro.q8 AS kokoro_q8,
			kokoro.q9 AS kokoro_q9,
			kokoro.q10 AS kokoro_q10,
			shakai.q1 AS shakai_q1,
			shakai.q2 AS shakai_q2,
			shakai.q3 AS shakai_q3,
			shakai.q4 AS shakai_q4,
			shakai.q5 AS shakai_q5,
			shakai.q6 AS shakai_q6,
			shakai.q7 AS shakai_q7,
			shakai.q8 AS shakai_q8,
			shakai.q9 AS shakai_q9,
			shakai.q10 AS shakai_q10,
			gakushu.q1 AS gakushu_q1,
			gakushu.q2 AS gakushu_q2,
			gakushu.q3 AS gakushu_q3,
			gakushu.q4 AS gakushu_q4,
			gakushu.q5 AS gakushu_q5,
			gakushu.q6 AS gakushu_q6,
			gakushu.q7 AS gakushu_q7,
			gakushu.q8 AS gakushu_q8,
			gakushu.q9 AS gakushu_q9,
			gakushu.q10 AS gakushu_q10,
			karada.q1 AS karada_q1,
			karada.q2 AS karada_q2,
			karada.q3 AS karada_q3,
			karada.q4 AS karada_q4,
			karada.q5 AS karada_q5,
			karada.q6 AS karada_q6,
			karada.q7 AS karada_q7,
			karada.q8 AS karada_q8,
			karada.q9 AS karada_q9,
			karada.q10 AS karada_q10,
			seikatsu.q1 AS seikatsu_q1,
			seikatsu.q2 AS seikatsu_q2,
			seikatsu.q3 AS seikatsu_q3,
			seikatsu.q4 AS seikatsu_q4,
			seikatsu.q5 AS seikatsu_q5,
			seikatsu.q6 AS seikatsu_q6,
			seikatsu.q7 AS seikatsu_q7,
			seikatsu.q8 AS seikatsu_q8,
			seikatsu.q9 AS seikatsu_q9,
			seikatsu.q10 AS seikatsu_q10,
			minomawari.q1 AS minomawari_q1,
			minomawari.q2 AS minomawari_q2,
			minomawari.q3 AS minomawari_q3,
			minomawari.q4 AS minomawari_q4,
			minomawari.q5 AS minomawari_q5,
			minomawari.q6 AS minomawari_q6,
			minomawari.q7 AS minomawari_q7,
			minomawari.q8 AS minomawari_q8,
			minomawari.q9 AS minomawari_q9,
			minomawari.q10 AS minomawari_q10 
		FROM 
			user,user_detail,jibuntest,test_history,kokoro,shakai,gakushu,karada,seikatsu,minomawari 
		WHERE 
			user.id=user_detail.id
			AND user.id=jibuntest.fk_uid
			AND jibuntest.jtid=test_history.fk_jtid
			AND kokoro.fk_jtid=jibuntest.jtid
			AND shakai.fk_jtid=jibuntest.jtid
			AND gakushu.fk_jtid=jibuntest.jtid
			AND karada.fk_jtid=jibuntest.jtid
			AND seikatsu.fk_jtid=jibuntest.jtid
			AND minomawari.fk_jtid=jibuntest.jtid 
		ORDER BY 
			user.id asc
		';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$dbh=null;
	while(true)
	{
		$rec=$stmt->fetch(PDO::FETCH_ASSOC);
		if($rec==false)
		{
			break;
		}
		$name[]=$rec['username'];
		if($rec['kyoushiflag']==1){$kyoushi[]='教師';}
		if($rec['kyoushiflag']==0){$kyoushi[]='生徒';}
		$grade[]=$rec['grade'];
		if($rec['gender']==1){$gender[]='男子';}
		if($rec['gender']==2){$gender[]='女子';}
		if($rec['gender']==3){$gender[]='その他';}
		$disability[]=$rec['disability'];
		$comment[]=$rec['comment'];
		$date[]=$rec['test_date'];
		if($rec['shuuryouflag']==0){$shuuryou[]='終了済';}
		if($rec['shuuryouflag']==1){$shuuryou[]='未終了';}
		$kokoro_q1[]=$rec['kokoro_q1'];
		$kokoro_q2[]=$rec['kokoro_q2'];
		$kokoro_q3[]=$rec['kokoro_q3'];
		$kokoro_q4[]=$rec['kokoro_q4'];
		$kokoro_q5[]=$rec['kokoro_q5'];
		$kokoro_q6[]=$rec['kokoro_q6'];
		$kokoro_q7[]=$rec['kokoro_q7'];
		$kokoro_q8[]=$rec['kokoro_q8'];
		$kokoro_q9[]=$rec['kokoro_q9'];
		$kokoro_q10[]=$rec['kokoro_q10'];
		$shakai_q1[]=$rec['shakai_q1'];
		$shakai_q2[]=$rec['shakai_q2'];
		$shakai_q3[]=$rec['shakai_q3'];
		$shakai_q4[]=$rec['shakai_q4'];
		$shakai_q5[]=$rec['shakai_q5'];
		$shakai_q6[]=$rec['shakai_q6'];
		$shakai_q7[]=$rec['shakai_q7'];
		$shakai_q8[]=$rec['shakai_q8'];
		$shakai_q9[]=$rec['shakai_q9'];
		$shakai_q10[]=$rec['shakai_q10'];
		$gakushu_q1[]=$rec['gakushu_q1'];
		$gakushu_q2[]=$rec['gakushu_q2'];
		$gakushu_q3[]=$rec['gakushu_q3'];
		$gakushu_q4[]=$rec['gakushu_q4'];
		$gakushu_q5[]=$rec['gakushu_q5'];
		$gakushu_q6[]=$rec['gakushu_q6'];
		$gakushu_q7[]=$rec['gakushu_q7'];
		$gakushu_q8[]=$rec['gakushu_q8'];
		$gakushu_q9[]=$rec['gakushu_q9'];
		$gakushu_q10[]=$rec['gakushu_q10'];
		$karada_q1[]=$rec['karada_q1'];
		$karada_q2[]=$rec['karada_q2'];
		$karada_q3[]=$rec['karada_q3'];
		$karada_q4[]=$rec['karada_q4'];
		$karada_q5[]=$rec['karada_q5'];
		$karada_q6[]=$rec['karada_q6'];
		$karada_q7[]=$rec['karada_q7'];
		$karada_q8[]=$rec['karada_q8'];
		$karada_q9[]=$rec['karada_q9'];
		$karada_q10[]=$rec['karada_q10'];
		$seikatsu_q1[]=$rec['seikatsu_q1'];
		$seikatsu_q2[]=$rec['seikatsu_q2'];
		$seikatsu_q3[]=$rec['seikatsu_q3'];
		$seikatsu_q4[]=$rec['seikatsu_q4'];
		$seikatsu_q5[]=$rec['seikatsu_q5'];
		$seikatsu_q6[]=$rec['seikatsu_q6'];
		$seikatsu_q7[]=$rec['seikatsu_q7'];
		$seikatsu_q8[]=$rec['seikatsu_q8'];
		$seikatsu_q9[]=$rec['seikatsu_q9'];
		$seikatsu_q10[]=$rec['seikatsu_q10'];
		$minomawari_q1[]=$rec['minomawari_q1'];
		$minomawari_q2[]=$rec['minomawari_q2'];
		$minomawari_q3[]=$rec['minomawari_q3'];
		$minomawari_q4[]=$rec['minomawari_q4'];
		$minomawari_q5[]=$rec['minomawari_q5'];
		$minomawari_q6[]=$rec['minomawari_q6'];
		$minomawari_q7[]=$rec['minomawari_q7'];
		$minomawari_q8[]=$rec['minomawari_q8'];
		$minomawari_q9[]=$rec['minomawari_q9'];
		$minomawari_q10[]=$rec['minomawari_q10'];
		$data++;
	}

	$csv='名前,作成者,学年,性別,障害名,その他,テスト開始日,テスト状態,';
	$csv.='こころ問1,こころ問2,こころ問3,こころ問4,こころ問5,こころ問6,こころ問7,こころ問8,こころ問9,こころ問10,';
	$csv.='しゃかい問1,しゃかい問2,しゃかい問3,しゃかい問4,しゃかい問5,しゃかい問6,しゃかい問7,しゃかい問8,しゃかい問9,しゃかい問10,';
	$csv.='がくしゅう問1,がくしゅう問2,がくしゅう問3,がくしゅう問4,がくしゅう問5,がくしゅう問6,がくしゅう問7,がくしゅう問8,がくしゅう問9,がくしゅう問10,';
	$csv.='からだ問1,からだ問2,からだ問3,からだ問4,からだ問5,からだ問6,からだ問7,からだ問8,からだ問9,からだ問10,';
	$csv.='せいかつ問1,せいかつ問2,せいかつ問3,せいかつ問4,せいかつ問5,せいかつ問6,せいかつ問7,せいかつ問8,せいかつ問9,せいかつ問10,';
	$csv.='みのまわり問1,みのまわり問2,みのまわり問3,みのまわり問4,みのまわり問5,みのまわり問6,みのまわり問7,みのまわり問8,みのまわり問9,みのまわり問10';
	$csv.="\n";

	for($i=0;$i<$data;$i++)
	{
		$csv.= $name[$i];
		$csv.=',';
		$csv.= $kyoushi[$i];
		$csv.=',';
		$csv.= $grade[$i];
		$csv.=',';
		$csv.= $gender[$i];
		$csv.=',';
		$csv.= $disability[$i];
		$csv.=',';
		$csv.= $comment[$i];
		$csv.=',';
		$csv.= $date[$i];
		$csv.=',';
		$csv.= $shuuryou[$i];
		$csv.=',';
		$csv.= $kokoro_q1[$i];
		$csv.=',';
		$csv.= $kokoro_q2[$i];
		$csv.=',';
		$csv.= $kokoro_q3[$i];
		$csv.=',';
		$csv.= $kokoro_q4[$i];
		$csv.=',';
		$csv.= $kokoro_q5[$i];
		$csv.=',';
		$csv.= $kokoro_q6[$i];
		$csv.=',';
		$csv.= $kokoro_q7[$i];
		$csv.=',';
		$csv.= $kokoro_q8[$i];
		$csv.=',';
		$csv.= $kokoro_q9[$i];
		$csv.=',';
		$csv.= $kokoro_q10[$i];
		$csv.=',';
		$csv.= $shakai_q1[$i];
		$csv.=',';
		$csv.= $shakai_q2[$i];
		$csv.=',';
		$csv.= $shakai_q3[$i];
		$csv.=',';
		$csv.= $shakai_q4[$i];
		$csv.=',';
		$csv.= $shakai_q5[$i];
		$csv.=',';
		$csv.= $shakai_q6[$i];
		$csv.=',';
		$csv.= $shakai_q7[$i];
		$csv.=',';
		$csv.= $shakai_q8[$i];
		$csv.=',';
		$csv.= $shakai_q9[$i];
		$csv.=',';
		$csv.= $shakai_q10[$i];
		$csv.=',';
		$csv.= $gakushu_q1[$i];
		$csv.=',';
		$csv.= $gakushu_q2[$i];
		$csv.=',';
		$csv.= $gakushu_q3[$i];
		$csv.=',';
		$csv.= $gakushu_q4[$i];
		$csv.=',';
		$csv.= $gakushu_q5[$i];
		$csv.=',';
		$csv.= $gakushu_q6[$i];
		$csv.=',';
		$csv.= $gakushu_q7[$i];
		$csv.=',';
		$csv.= $gakushu_q8[$i];
		$csv.=',';
		$csv.= $gakushu_q9[$i];
		$csv.=',';
		$csv.= $gakushu_q10[$i];
		$csv.=',';
		$csv.= $karada_q1[$i];
		$csv.=',';
		$csv.= $karada_q2[$i];
		$csv.=',';
		$csv.= $karada_q3[$i];
		$csv.=',';
		$csv.= $karada_q4[$i];
		$csv.=',';
		$csv.= $karada_q5[$i];
		$csv.=',';
		$csv.= $karada_q6[$i];
		$csv.=',';
		$csv.= $karada_q7[$i];
		$csv.=',';
		$csv.= $karada_q8[$i];
		$csv.=',';
		$csv.= $karada_q9[$i];
		$csv.=',';
		$csv.= $karada_q10[$i];
		$csv.=',';
		$csv.= $seikatsu_q1[$i];
		$csv.=',';
		$csv.= $seikatsu_q2[$i];
		$csv.=',';
		$csv.= $seikatsu_q3[$i];
		$csv.=',';
		$csv.= $seikatsu_q4[$i];
		$csv.=',';
		$csv.= $seikatsu_q5[$i];
		$csv.=',';
		$csv.= $seikatsu_q6[$i];
		$csv.=',';
		$csv.= $seikatsu_q7[$i];
		$csv.=',';
		$csv.= $seikatsu_q8[$i];
		$csv.=',';
		$csv.= $seikatsu_q9[$i];
		$csv.=',';
		$csv.= $seikatsu_q10[$i];
		$csv.=',';
		$csv.= $minomawari_q1[$i];
		$csv.=',';
		$csv.= $minomawari_q2[$i];
		$csv.=',';
		$csv.= $minomawari_q3[$i];
		$csv.=',';
		$csv.= $minomawari_q4[$i];
		$csv.=',';
		$csv.= $minomawari_q5[$i];
		$csv.=',';
		$csv.= $minomawari_q6[$i];
		$csv.=',';
		$csv.= $minomawari_q7[$i];
		$csv.=',';
		$csv.= $minomawari_q8[$i];
		$csv.=',';
		$csv.= $minomawari_q9[$i];
		$csv.=',';
		$csv.= $minomawari_q10[$i];
		$csv.="\n";

	}
	//print nl2br($csv);
	

	$file_name='result_list.csv';
	$file_location='csv_file/'.$file_name;

	$file=fopen($file_location,'w');
	$csv = mb_convert_encoding($csv,'SJIS','UTF-8');
	fputs($file,$csv);
	fclose($file);

	print '<p>出力に成功しました。</p>';


	print'<a href=csv_file/'.$file_name.'>CSVファイルのダウンロード</a><br />';

//} catch (Exception $e) {
//	print '<p>エラーが発生しました。</p>';
//}

?>
<input type="button" value="ホームに戻る" onclick=location.assign("../home_teacher.php") class="btn-gradient-3d-simple2">
</body>

</html>