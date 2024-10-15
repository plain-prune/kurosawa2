<?php
//require_once './DbManager.php';
// print($_POST["test_name"]);
// echo "<br>";
// echo $_POST['test_id'];

function getDb() : PDO {
    $dsn = 'mysql:dbname=jibunmeter; host=localhost; charset=utf8';
    $usr = 'root';
    $passwd = '';

    $db = new PDO($dsn, $usr, $passwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
    
}

try {
    $db = getDb();
    $stt = $db->prepare('UPDATE test_history SET name = :name WHERE fk_jtid = :fk_jtid');
    $stt->bindValue(':name', $_POST['test_name']);
    $stt->bindValue(':fk_jtid', $_POST['test_id']);
    $stt->execute();
    header('Location: ./data_choice.php');

} catch (PDOException $e){
    die("<ruby>接続<rt>せつぞく</rt></ruby>エラーが<ruby>発生<rt>はっせい</rt></ruby>しました。<br>{$e->getMessage()}");

} 
