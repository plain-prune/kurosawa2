<?php

function dbroad($page)
{
    require('dbconnect2.php');

    //jtidを取得(データ一つ一つを区別するID)
    $a = $_SESSION['jtid'];

    //uidを取得(個人を区別するID)
    $uid = $_SESSION['uid'];

    //dataflagを更新
    $sql = 'UPDATE user SET dataflag = 1 WHERE id=' . $uid . '';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    switch ($page) {

        case '1':
            $data = [];
            $sql = 'SELECT * FROM kokoro WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM shakai WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM gakushu WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM karada WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM seikatsu WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM minomawari WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM kokoro_text WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM shakai_text WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM gakushu_text WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM karada_text WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM seikatsu_text WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM minomawari_text WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            for ($i = 0; $i < 120; $i++) {
                if ($data[$i] == '') {
                    $data[$i] = '';
                }
            }

            break;

        case '2':
            $data = [];
            $sql = 'SELECT * FROM kokoro WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM kokoro_text WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];
            for ($i = 10; $i < 20; $i++) {
                if ($data[$i] == '') {
                    $data[$i] = '';
                }
            }
            break;

        case '3':
            $data = [];
            $sql = 'SELECT * FROM shakai WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM shakai_text WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];
            for ($i = 10; $i < 20; $i++) {
                if ($data[$i] == '') {
                    $data[$i] = '';
                }
            }
            break;

        case '4':
            $data = [];
            $sql = 'SELECT * FROM gakushu WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM gakushu_text WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];
            for ($i = 10; $i < 20; $i++) {
                if ($data[$i] == '') {
                    $data[$i] = '';
                }
            }
            break;

        case '5':
            $data = [];
            $sql = 'SELECT * FROM karada WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM karada_text WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];
            for ($i = 10; $i < 20; $i++) {
                if ($data[$i] == '') {
                    $data[$i] = '';
                }
            }
            break;

        case '6':
            $data = [];
            $sql = 'SELECT * FROM seikatsu WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM seikatsu_text WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];
            for ($i = 10; $i < 20; $i++) {
                if ($data[$i] == '') {
                    $data[$i] = '';
                }
            }
            break;

        case '7':
            $data = [];
            $sql = 'SELECT * FROM minomawari WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM minomawari_text WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];
            for ($i = 10; $i < 20; $i++) {
                if ($data[$i] == '') {
                    $data[$i] = '';
                }
            }
            break;
        case '8':
            $data = [];
            $sql = 'SELECT * FROM kokoro WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM shakai WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM gakushu WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM karada WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM seikatsu WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            $sql = 'SELECT * FROM minomawari WHERE fk_jtid=' . $a . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $data[] = $rec['q1'];
            $data[] = $rec['q2'];
            $data[] = $rec['q3'];
            $data[] = $rec['q4'];
            $data[] = $rec['q5'];
            $data[] = $rec['q6'];
            $data[] = $rec['q7'];
            $data[] = $rec['q8'];
            $data[] = $rec['q9'];
            $data[] = $rec['q10'];

            for ($i = 0; $i < 60; $i++) {
                if ($data[$i] == '') {
                    $data[$i] = '';
                }
            }
            break;
    }
    $dbh = null;
    return ($data);
}

function db_js($data, $page)
{
    switch ($page) {

        case '1':
            $json_array = json_encode($data);
            print '<script>let data = ' . $json_array . '</script>';
            $count = 0;
            $snk_count = 1;
            for ($i = 1; $i < 7; $i++) {
                for ($j = 1; $j < 11; $j++, $count++, $snk_count++) {
                    print '<script>sessionStorage.setItem("Answer' . $i . '-' . $j . '", data[' . $count . ']);</script>';
                    if ($data[$count] != '') {
                        print '<script>sessionStorage.setItem("snk' . $snk_count . '", parseInt(1,10));</script>';
                    }
                }
            }
            for ($i = 1, $count = 60; $i < 61; $i++, $count++) {
                if ($i == 1) {
                    print '<script>sessionStorage.setItem("comment", data[' . $count . ']);</script>';
                } else {
                    print '<script>sessionStorage.setItem("comment' . $i . '", data[' . $count . ']);</script>';
                }
            }
            for ($i = 1; $i < 61; $i++) {
                print '<script>sessionStorage.setItem("pass' . $i . '",parseInt(0,10))</script>';
            }
            break;

        case '2':
            $json_array = json_encode($data);
            print '<script>let data = ' . $json_array . '</script>';
            $count = 0;
            $snk_count = 1;
            for ($j = 1; $j < 11; $j++, $count++, $snk_count++) {
                print '<script>sessionStorage.setItem("Answer1-' . $j . '", data[' . $count . ']);</script>';
                if ($data[1 * $j] != 0) {
                    print '<script>sessionStorage.setItem("snk' . $snk_count . '", parseInt(1,10));</script>';
                }
            }
            for ($i = 1; $i < 11; $i++, $count++) {
                if ($i == 1) {
                    print '<script>sessionStorage.setItem("comment", data[' . $count . ']);</script>';
                } else {
                    print '<script>sessionStorage.setItem("comment' . $i . '", data[' . $count . ']);</script>';
                }
            }
            break;

        case '3':
            $json_array = json_encode($data);
            print '<script>let data = ' . $json_array . '</script>';
            $count = 0;
            $snk_count = 1;
            for ($j = 1; $j < 11; $j++, $count++, $snk_count++) {
                print '<script>sessionStorage.setItem("Answer2-' . $j . '", data[' . $count . ']);</script>';
                if ($data[1 * $j] != 0) {
                    print '<script>sessionStorage.setItem("snk' . $snk_count . '", parseInt(1,10));</script>';
                }
            }
            for ($i = 11; $i < 21; $i++, $count++) {
                print '<script>sessionStorage.setItem("comment' . $i . '", data[' . $count . ']);</script>';
            }
            break;

        case '4':
            $json_array = json_encode($data);
            print '<script>let data = ' . $json_array . '</script>';
            $count = 0;
            $snk_count = 1;
            for ($j = 1; $j < 11; $j++, $count++, $snk_count++) {
                print '<script>sessionStorage.setItem("Answer3-' . $j . '", data[' . $count . ']);</script>';
                if ($data[1 * $j] != 0) {
                    print '<script>sessionStorage.setItem("snk' . $snk_count . '", parseInt(1,10));</script>';
                }
            }
            for ($i = 21; $i < 31; $i++, $count++) {
                print '<script>sessionStorage.setItem("comment' . $i . '", data[' . $count . ']);</script>';
            }
            break;

        case '5':
            $json_array = json_encode($data);
            print '<script>let data = ' . $json_array . '</script>';
            $count = 0;
            $snk_count = 1;
            for ($j = 1; $j < 11; $j++, $count++, $snk_count++) {
                print '<script>sessionStorage.setItem("Answer4-' . $j . '", data[' . $count . ']);</script>';
                if ($data[1 * $j] != 0) {
                    print '<script>sessionStorage.setItem("snk' . $snk_count . '", parseInt(1,10));</script>';
                }
            }
            for ($i = 31; $i < 41; $i++, $count++) {
                print '<script>sessionStorage.setItem("comment' . $i . '", data[' . $count . ']);</script>';
            }
            break;

        case '6':
            $json_array = json_encode($data);
            print '<script>let data = ' . $json_array . '</script>';
            $count = 0;
            $snk_count = 1;
            for ($j = 1; $j < 11; $j++, $count++, $snk_count++) {
                print '<script>sessionStorage.setItem("Answer5-' . $j . '", data[' . $count . ']);</script>';
                if ($data[1 * $j] != 0) {
                    print '<script>sessionStorage.setItem("snk' . $snk_count . '", parseInt(1,10));</script>';
                }
            }
            for ($i = 41; $i < 51; $i++, $count++) {
                print '<script>sessionStorage.setItem("comment' . $i . '", data[' . $count . ']);</script>';
            }
            break;

        case '7':
            $json_array = json_encode($data);
            print '<script>let data1 = ' . $json_array . '</script>';
            $count = 0;
            $snk_count = 1;
            for ($j = 1; $j < 11; $j++, $count++, $snk_count++) {
                print '<script>sessionStorage.setItem("Answer6-' . $j . '", data1[' . $count . ']);</script>';
                if ($data[1 * $j] != 0) {
                    print '<script>sessionStorage.setItem("snk' . $snk_count . '", parseInt(1,10));</script>';
                }
            }
            for ($i = 51; $i < 61; $i++, $count++) {
                print '<script>sessionStorage.setItem("comment' . $i . '", data1[' . $count . ']);</script>';
            }
            break;
    }
    return 0;
}

function dbsave($data)
{
    require('dbconnect2.php');
    
    session_start();
    $jtid = $_SESSION['jtid'];
    switch (end($data)) {
        case '0':
            $sqdata = [];

            $sql = 'UPDATE jibuntest SET shuuryouflag=0 WHERE jtid=' . $jtid . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'UPDATE kokoro SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[0];
            $sqdata[] = $data[1];
            $sqdata[] = $data[2];
            $sqdata[] = $data[3];
            $sqdata[] = $data[4];
            $sqdata[] = $data[5];
            $sqdata[] = $data[6];
            $sqdata[] = $data[7];
            $sqdata[] = $data[8];
            $sqdata[] = $data[9];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE kokoro_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[60];
            $sqdata[] = $data[61];
            $sqdata[] = $data[62];
            $sqdata[] = $data[63];
            $sqdata[] = $data[64];
            $sqdata[] = $data[65];
            $sqdata[] = $data[66];
            $sqdata[] = $data[67];
            $sqdata[] = $data[68];
            $sqdata[] = $data[69];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE shakai SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[10];
            $sqdata[] = $data[11];
            $sqdata[] = $data[12];
            $sqdata[] = $data[13];
            $sqdata[] = $data[14];
            $sqdata[] = $data[15];
            $sqdata[] = $data[16];
            $sqdata[] = $data[17];
            $sqdata[] = $data[18];
            $sqdata[] = $data[19];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE shakai_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[70];
            $sqdata[] = $data[71];
            $sqdata[] = $data[72];
            $sqdata[] = $data[73];
            $sqdata[] = $data[74];
            $sqdata[] = $data[75];
            $sqdata[] = $data[76];
            $sqdata[] = $data[77];
            $sqdata[] = $data[78];
            $sqdata[] = $data[79];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE gakushu SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[20];
            $sqdata[] = $data[21];
            $sqdata[] = $data[22];
            $sqdata[] = $data[23];
            $sqdata[] = $data[24];
            $sqdata[] = $data[25];
            $sqdata[] = $data[26];
            $sqdata[] = $data[27];
            $sqdata[] = $data[28];
            $sqdata[] = $data[29];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE gakushu_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[80];
            $sqdata[] = $data[81];
            $sqdata[] = $data[82];
            $sqdata[] = $data[83];
            $sqdata[] = $data[84];
            $sqdata[] = $data[85];
            $sqdata[] = $data[86];
            $sqdata[] = $data[87];
            $sqdata[] = $data[88];
            $sqdata[] = $data[89];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE karada SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[30];
            $sqdata[] = $data[31];
            $sqdata[] = $data[32];
            $sqdata[] = $data[33];
            $sqdata[] = $data[34];
            $sqdata[] = $data[35];
            $sqdata[] = $data[36];
            $sqdata[] = $data[37];
            $sqdata[] = $data[38];
            $sqdata[] = $data[39];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE karada_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[90];
            $sqdata[] = $data[91];
            $sqdata[] = $data[92];
            $sqdata[] = $data[93];
            $sqdata[] = $data[94];
            $sqdata[] = $data[95];
            $sqdata[] = $data[96];
            $sqdata[] = $data[97];
            $sqdata[] = $data[98];
            $sqdata[] = $data[99];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE seikatsu SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[40];
            $sqdata[] = $data[41];
            $sqdata[] = $data[42];
            $sqdata[] = $data[43];
            $sqdata[] = $data[44];
            $sqdata[] = $data[45];
            $sqdata[] = $data[46];
            $sqdata[] = $data[47];
            $sqdata[] = $data[48];
            $sqdata[] = $data[49];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE seikatsu_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[100];
            $sqdata[] = $data[101];
            $sqdata[] = $data[102];
            $sqdata[] = $data[103];
            $sqdata[] = $data[104];
            $sqdata[] = $data[105];
            $sqdata[] = $data[106];
            $sqdata[] = $data[107];
            $sqdata[] = $data[108];
            $sqdata[] = $data[109];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE minomawari SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[50];
            $sqdata[] = $data[51];
            $sqdata[] = $data[52];
            $sqdata[] = $data[53];
            $sqdata[] = $data[54];
            $sqdata[] = $data[55];
            $sqdata[] = $data[56];
            $sqdata[] = $data[57];
            $sqdata[] = $data[58];
            $sqdata[] = $data[59];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE minomawari_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[110];
            $sqdata[] = $data[111];
            $sqdata[] = $data[112];
            $sqdata[] = $data[113];
            $sqdata[] = $data[114];
            $sqdata[] = $data[115];
            $sqdata[] = $data[116];
            $sqdata[] = $data[117];
            $sqdata[] = $data[118];
            $sqdata[] = $data[119];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sql = 'SELECT test_date FROM test_history WHERE fk_jtid=' . $jtid . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            return $rec;
        case '1':
            $sqdata = [];

            $sql = 'UPDATE kokoro SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[0];
            $sqdata[] = $data[1];
            $sqdata[] = $data[2];
            $sqdata[] = $data[3];
            $sqdata[] = $data[4];
            $sqdata[] = $data[5];
            $sqdata[] = $data[6];
            $sqdata[] = $data[7];
            $sqdata[] = $data[8];
            $sqdata[] = $data[9];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE kokoro_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[60];
            $sqdata[] = $data[61];
            $sqdata[] = $data[62];
            $sqdata[] = $data[63];
            $sqdata[] = $data[64];
            $sqdata[] = $data[65];
            $sqdata[] = $data[66];
            $sqdata[] = $data[67];
            $sqdata[] = $data[68];
            $sqdata[] = $data[69];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE shakai SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[10];
            $sqdata[] = $data[11];
            $sqdata[] = $data[12];
            $sqdata[] = $data[13];
            $sqdata[] = $data[14];
            $sqdata[] = $data[15];
            $sqdata[] = $data[16];
            $sqdata[] = $data[17];
            $sqdata[] = $data[18];
            $sqdata[] = $data[19];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE shakai_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[70];
            $sqdata[] = $data[71];
            $sqdata[] = $data[72];
            $sqdata[] = $data[73];
            $sqdata[] = $data[74];
            $sqdata[] = $data[75];
            $sqdata[] = $data[76];
            $sqdata[] = $data[77];
            $sqdata[] = $data[78];
            $sqdata[] = $data[79];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE gakushu SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[20];
            $sqdata[] = $data[21];
            $sqdata[] = $data[22];
            $sqdata[] = $data[23];
            $sqdata[] = $data[24];
            $sqdata[] = $data[25];
            $sqdata[] = $data[26];
            $sqdata[] = $data[27];
            $sqdata[] = $data[28];
            $sqdata[] = $data[29];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE gakushu_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[80];
            $sqdata[] = $data[81];
            $sqdata[] = $data[82];
            $sqdata[] = $data[83];
            $sqdata[] = $data[84];
            $sqdata[] = $data[85];
            $sqdata[] = $data[86];
            $sqdata[] = $data[87];
            $sqdata[] = $data[88];
            $sqdata[] = $data[89];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE karada SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[30];
            $sqdata[] = $data[31];
            $sqdata[] = $data[32];
            $sqdata[] = $data[33];
            $sqdata[] = $data[34];
            $sqdata[] = $data[35];
            $sqdata[] = $data[36];
            $sqdata[] = $data[37];
            $sqdata[] = $data[38];
            $sqdata[] = $data[39];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE karada_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[90];
            $sqdata[] = $data[91];
            $sqdata[] = $data[92];
            $sqdata[] = $data[93];
            $sqdata[] = $data[94];
            $sqdata[] = $data[95];
            $sqdata[] = $data[96];
            $sqdata[] = $data[97];
            $sqdata[] = $data[98];
            $sqdata[] = $data[99];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE seikatsu SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[40];
            $sqdata[] = $data[41];
            $sqdata[] = $data[42];
            $sqdata[] = $data[43];
            $sqdata[] = $data[44];
            $sqdata[] = $data[45];
            $sqdata[] = $data[46];
            $sqdata[] = $data[47];
            $sqdata[] = $data[48];
            $sqdata[] = $data[49];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE seikatsu_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[100];
            $sqdata[] = $data[101];
            $sqdata[] = $data[102];
            $sqdata[] = $data[103];
            $sqdata[] = $data[104];
            $sqdata[] = $data[105];
            $sqdata[] = $data[106];
            $sqdata[] = $data[107];
            $sqdata[] = $data[108];
            $sqdata[] = $data[109];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE minomawari SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[50];
            $sqdata[] = $data[51];
            $sqdata[] = $data[52];
            $sqdata[] = $data[53];
            $sqdata[] = $data[54];
            $sqdata[] = $data[55];
            $sqdata[] = $data[56];
            $sqdata[] = $data[57];
            $sqdata[] = $data[58];
            $sqdata[] = $data[59];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE minomawari_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[110];
            $sqdata[] = $data[111];
            $sqdata[] = $data[112];
            $sqdata[] = $data[113];
            $sqdata[] = $data[114];
            $sqdata[] = $data[115];
            $sqdata[] = $data[116];
            $sqdata[] = $data[117];
            $sqdata[] = $data[118];
            $sqdata[] = $data[119];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sql = 'SELECT test_date FROM test_history WHERE fk_jtid=' . $jtid . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            return $rec;
        case '2':
            $sqdata = [];
            $sql = 'UPDATE kokoro SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[0];
            $sqdata[] = $data[1];
            $sqdata[] = $data[2];
            $sqdata[] = $data[3];
            $sqdata[] = $data[4];
            $sqdata[] = $data[5];
            $sqdata[] = $data[6];
            $sqdata[] = $data[7];
            $sqdata[] = $data[8];
            $sqdata[] = $data[9];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE kokoro_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[10];
            $sqdata[] = $data[11];
            $sqdata[] = $data[12];
            $sqdata[] = $data[13];
            $sqdata[] = $data[14];
            $sqdata[] = $data[15];
            $sqdata[] = $data[16];
            $sqdata[] = $data[17];
            $sqdata[] = $data[18];
            $sqdata[] = $data[19];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);
            break;
        case '3':
            $sqdata = [];
            $sql = 'UPDATE shakai SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[0];
            $sqdata[] = $data[1];
            $sqdata[] = $data[2];
            $sqdata[] = $data[3];
            $sqdata[] = $data[4];
            $sqdata[] = $data[5];
            $sqdata[] = $data[6];
            $sqdata[] = $data[7];
            $sqdata[] = $data[8];
            $sqdata[] = $data[9];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE shakai_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[10];
            $sqdata[] = $data[11];
            $sqdata[] = $data[12];
            $sqdata[] = $data[13];
            $sqdata[] = $data[14];
            $sqdata[] = $data[15];
            $sqdata[] = $data[16];
            $sqdata[] = $data[17];
            $sqdata[] = $data[18];
            $sqdata[] = $data[19];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);
            break;
        case '4':
            $sqdata = [];
            $sql = 'UPDATE gakushu SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[0];
            $sqdata[] = $data[1];
            $sqdata[] = $data[2];
            $sqdata[] = $data[3];
            $sqdata[] = $data[4];
            $sqdata[] = $data[5];
            $sqdata[] = $data[6];
            $sqdata[] = $data[7];
            $sqdata[] = $data[8];
            $sqdata[] = $data[9];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE gakushu_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[10];
            $sqdata[] = $data[11];
            $sqdata[] = $data[12];
            $sqdata[] = $data[13];
            $sqdata[] = $data[14];
            $sqdata[] = $data[15];
            $sqdata[] = $data[16];
            $sqdata[] = $data[17];
            $sqdata[] = $data[18];
            $sqdata[] = $data[19];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);
            break;
        case '5':
            $sqdata = [];
            $sql = 'UPDATE karada SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[0];
            $sqdata[] = $data[1];
            $sqdata[] = $data[2];
            $sqdata[] = $data[3];
            $sqdata[] = $data[4];
            $sqdata[] = $data[5];
            $sqdata[] = $data[6];
            $sqdata[] = $data[7];
            $sqdata[] = $data[8];
            $sqdata[] = $data[9];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE karada_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[10];
            $sqdata[] = $data[11];
            $sqdata[] = $data[12];
            $sqdata[] = $data[13];
            $sqdata[] = $data[14];
            $sqdata[] = $data[15];
            $sqdata[] = $data[16];
            $sqdata[] = $data[17];
            $sqdata[] = $data[18];
            $sqdata[] = $data[19];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);
            break;
        case '6':
            $sqdata = [];
            $sql = 'UPDATE seikatsu SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[0];
            $sqdata[] = $data[1];
            $sqdata[] = $data[2];
            $sqdata[] = $data[3];
            $sqdata[] = $data[4];
            $sqdata[] = $data[5];
            $sqdata[] = $data[6];
            $sqdata[] = $data[7];
            $sqdata[] = $data[8];
            $sqdata[] = $data[9];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE seikatsu_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[10];
            $sqdata[] = $data[11];
            $sqdata[] = $data[12];
            $sqdata[] = $data[13];
            $sqdata[] = $data[14];
            $sqdata[] = $data[15];
            $sqdata[] = $data[16];
            $sqdata[] = $data[17];
            $sqdata[] = $data[18];
            $sqdata[] = $data[19];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);
            break;
        case '7':
            $sqdata = [];
            $sql = 'UPDATE minomawari SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[0];
            $sqdata[] = $data[1];
            $sqdata[] = $data[2];
            $sqdata[] = $data[3];
            $sqdata[] = $data[4];
            $sqdata[] = $data[5];
            $sqdata[] = $data[6];
            $sqdata[] = $data[7];
            $sqdata[] = $data[8];
            $sqdata[] = $data[9];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);

            $sqdata = [];

            $sql = 'UPDATE minomawari_text SET q1=?, q2=?, q3=?, q4=?, q5=?,q6=?,q7=?,q8=?,q9=?,q10=? WHERE fk_jtid=' . $jtid . '';
            $sqdata[] = $data[10];
            $sqdata[] = $data[11];
            $sqdata[] = $data[12];
            $sqdata[] = $data[13];
            $sqdata[] = $data[14];
            $sqdata[] = $data[15];
            $sqdata[] = $data[16];
            $sqdata[] = $data[17];
            $sqdata[] = $data[18];
            $sqdata[] = $data[19];
            $stmt = $dbh->prepare($sql);
            $stmt->execute($sqdata);
            break;
    }
    return 0;
}

function dbcreate($page)
{
    require('dbconnect2.php');

    $name = $_SESSION['name'];
    $gakunen = $_SESSION['grade'];
    switch ($page) {
        case '1':
            $uid = $_SESSION['uid'];
            $sql = 'INSERT INTO jibuntest (gakunen, shuuryouflag, fk_uid) VALUES ("' . $gakunen . '",1,' . $uid . ')';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $id = $dbh->lastInsertId();

            $sql = 'INSERT INTO kokoro (fk_jtid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (' . $id . ',null, null, null, null, null, null, null, null, null, null)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'INSERT INTO kokoro_text (fk_jtid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (' . $id . ',null, null, null, null, null, null, null, null, null, null)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'INSERT INTO shakai (fk_jtid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (' . $id . ',null, null, null, null, null, null, null, null, null, null)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'INSERT INTO shakai_text (fk_jtid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (' . $id . ',null, null, null, null, null, null, null, null, null, null)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'INSERT INTO gakushu (fk_jtid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (' . $id . ',null, null, null, null, null, null, null, null, null, null)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'INSERT INTO gakushu_text (fk_jtid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (' . $id . ',null, null, null, null, null, null, null, null, null, null)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'INSERT INTO karada (fk_jtid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (' . $id . ',null, null, null, null, null, null, null, null, null, null)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'INSERT INTO karada_text (fk_jtid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (' . $id . ',null, null, null, null, null, null, null, null, null, null)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'INSERT INTO seikatsu (fk_jtid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (' . $id . ',null, null, null, null, null, null, null, null, null, null)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'INSERT INTO seikatsu_text (fk_jtid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (' . $id . ',null, null, null, null, null, null, null, null, null, null)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'INSERT INTO minomawari (fk_jtid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (' . $id . ',null, null, null, null, null, null, null, null, null, null)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'INSERT INTO minomawari_text (fk_jtid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (' . $id . ',null, null, null, null, null, null, null, null, null, null)';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $sql = 'INSERT INTO test_history (test_date, fk_jtid) VALUES (NOW(), ' . $id . ')';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $dbh = null;
            break;
    }
    return $id;
}
