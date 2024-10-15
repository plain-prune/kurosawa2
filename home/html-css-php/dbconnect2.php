<?php


    try {
        $dsn = 'mysql:dbname=jibunmeter;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        print '<ruby>接続<rt>せつぞく</rt></ruby>エラーが<ruby>発生<rt>はっせい</rt></ruby>しました。';
        exit();
    }
?>
