<head>
    <title>自分メータ―</title>
    <link rel="stylesheet" href="../../css_file/design2.css">
    <link href="../css_file/progression.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../css_file/home_c.css">
</head>
<?php

try
{
$id = htmlspecialchars($_POST["student_name"]);
session_start();

#選択したテストをチャートのページに受け渡すためのセッションを作成
$_SESSION['ds1']=='';
$_SESSION['student_id']=$id;

#データベースから生徒の情報を取得
$sql='SELECT jtid, gakunen, shuuryouflag FROM jibuntest WHERE fk_uid='.$id.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetchAll(PDO::FETCH_ASSOC);

#データがない場合の表示
if(empty($rec)){
    print'データがありません。ホームに戻ってテストを始めてください。';

}
else{
$jt_data = $rec;

$count_id = 0;

#データベースからテストの情報を取得
foreach($rec as $jt){
    $sql='SELECT hid,test_date,fk_jtid  FROM test_history WHERE fk_jtid='.$jt['jtid'].'';
    $stmt=$dbh->prepare($sql);
    $stmt->execute();
    $rec2[]=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $jtdate[$count_id] = $rec2[$count_id];
    $count_id += 1;
}
foreach($jtdate as $jt2){
    $data[] = end($jt2);
}
?>

<!-- 選択した生徒のテストの一覧を日時、学年とともに表示 -->
<form name="data_choice" method="post" action="data2.php" class="data_slc">
<table align="center">
<?php foreach($data as $key => $date) :?>
    <?php if(is_array($data[$key]) == true) :?>
        <tr>
            <td>
                <input type="radio" id="<?php print$key?>" name="ds1" value="<?php print$jt_data[$key]['jtid']?>">
            </td>
            <td>
                <?php print($data[$key]['test_date']);?>
            </td>
            <td>
                <?php print($jt_data[$key]['gakunen']);?>
            </td>
            <td>
                <?php
                    if($jt_data[$key]['shuuryouflag']==1){
                        print"<ruby>回答中<rt>かいとうちゅう</rt></ruby>";
                    }
                    else if($jt_data[$key]['shuuryouflag']==0){
                        print"<ruby>回答終了済<rt>かいとうしゅうりょうず</rt></ruby>み";
                    }
                    print'</td></tr>';
                ?>
            </td>
        <tr>
    <?php else:
            $key - 1;
        endif; ?>
<?php endforeach;?>
</table>
<div id="center">

<input type="submit" id="choice" style="position:fixed; left:75%; top:80%;" value="選択" class="btn-gradient-3d-simple3">
</div>
</form>

<?php
$dbh=null;
exit();
}
}
catch(Exception $e)
{
	exit();
}

?>