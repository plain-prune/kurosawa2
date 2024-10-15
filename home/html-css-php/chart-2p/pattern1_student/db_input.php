<?php
#$aに取得するデータのidを代入
#$a=20;
function dbdata($a){

require('../../dbconnect2.php');

$data = [];
$text = [];

#DBから配列を取得
$sql='SELECT * FROM kokoro WHERE fk_jtid='.$a.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
#配列に値を代入
for($i=1;$i<=10;$i++){
    $data[]=$rec['q'.$i];
}

$sql='SELECT * FROM kokoro_text WHERE fk_jtid='.$a.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
for($i=1;$i<=10;$i++){
    $text[]=$rec['q'.$i];
}

$sql='SELECT * FROM shakai WHERE fk_jtid='.$a.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
for($i=1;$i<=10;$i++){
    $data[]=$rec['q'.$i];
}

$sql='SELECT * FROM shakai_text WHERE fk_jtid='.$a.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
for($i=1;$i<=10;$i++){
    $text[]=$rec['q'.$i];
}

$sql='SELECT * FROM gakushu WHERE fk_jtid='.$a.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
for($i=1;$i<=10;$i++){
    $data[]=$rec['q'.$i];
}

$sql='SELECT * FROM gakushu_text WHERE fk_jtid='.$a.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
for($i=1;$i<=10;$i++){
    $text[]=$rec['q'.$i];
}

$sql='SELECT * FROM karada WHERE fk_jtid='.$a.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
for($i=1;$i<=10;$i++){
    $data[]=$rec['q'.$i];
}

$sql='SELECT * FROM karada_text WHERE fk_jtid='.$a.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
for($i=1;$i<=10;$i++){
    $text[]=$rec['q'.$i];
}

$sql='SELECT * FROM seikatsu WHERE fk_jtid='.$a.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
for($i=1;$i<=10;$i++){
    $data[]=$rec['q'.$i];
}

$sql='SELECT * FROM seikatsu_text WHERE fk_jtid='.$a.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
for($i=1;$i<=10;$i++){
    $text[]=$rec['q'.$i];
}

$sql='SELECT * FROM minomawari WHERE fk_jtid='.$a.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
for($i=1;$i<=10;$i++){
    $data[]=$rec['q'.$i];
}

$sql='SELECT * FROM minomawari_text WHERE fk_jtid='.$a.'';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
for($i=1;$i<=10;$i++){
    $text[]=$rec['q'.$i];
}

#初期化
for($i=0;$i<6;$i++){
    $sum_data[$i]=0;
}
#合計計算
for($i=0;$i<10;$i++){
    $sum_data[0]=$sum_data[0]+$data[$i];
}
for($i=10;$i<20;$i++){
    $sum_data[1]=$sum_data[1]+$data[$i];
}
for($i=20;$i<30;$i++){
    $sum_data[2]=$sum_data[2]+$data[$i];
}
for($i=30;$i<40;$i++){
    $sum_data[3]=$sum_data[3]+$data[$i];
}
for($i=40;$i<50;$i++){
    $sum_data[4]=$sum_data[4]+$data[$i];
}
for($i=50;$i<60;$i++){
    $sum_data[5]=$sum_data[5]+$data[$i];
}

#テスト出力
#print($sum_data[0]);
return $sum_data;

}
