<head>
    <title>自分メータ</title>
    <link rel="stylesheet" href="css_file/design2.css">
    <link href="progression.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css_file/home_c.css">
    <script>
        sessionStorage.clear();
    </script>
</head>

 <div id="center">
<?php

try {
    session_start();

    require('dbconnect2.php');

    //データ選択時に名前を表示出来るように取得
    $sql = 'SELECT * FROM user WHERE id=' . $_SESSION['uid'] . '';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $name = $stmt->fetch(PDO::FETCH_ASSOC);


    $sql = 'SELECT jtid, gakunen, shuuryouflag FROM jibuntest WHERE fk_uid=' . $_SESSION['uid'] . '';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $rec = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($rec)) {
        print 'データがありません。ホームに戻ってテストを始めてください。';
        print '<form>';
        print '<input type="button" onclick=location.assign("../home_teacher.php") value="戻る" class="btn-gradient-3d-simple2">';
        print '</form>';
    } else {
        $jt_data = $rec;

        $count_id = 0;
        foreach ($rec as $jt) {
            $sql = 'SELECT * FROM test_history WHERE fk_jtid=' . $jt['jtid'] . '';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $rec2[] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $jtdate[$count_id] = $rec2[$count_id];
            $count_id += 1;
        }
        foreach ($jtdate as $jt2) {
            $data[] = end($jt2);
        }
?>
        <!-- <form name="data_choice" method="post" action="test_loading.php"> -->
        <table align="center">

		<h2>つづきから</h2>
		<hr class="cp_hr06"></hr>

            <!-- ユーザ名を表示 -->
            <tr>
                <?php
                print "<ruby>ログイン</ruby>";
                print "<ruby>名<rt>めい</rt></ruby>";
                print "<ruby>：</ruby>";
                print($name['username']);
                ?>
            </tr>

            <?php foreach ($data as $key => $date) : ?>
                <?php if (is_array($data[$key]) == true) : ?>
                    <tr>
                        <td>
                            <input type="radio" id="<?php print $key ?>" name="jtid" value="<?php print $jt_data[$key]['jtid'] ?>" form="choice" required>
                        </td>
                        <td>
                            <form method="post" action="./data_test.php">
                                <input type="text" value="<?php print($data[$key]['name']); ?>" name="test_name" />
                                <input type="hidden" value="<?php print $jt_data[$key]['jtid'] ?>" name="test_id"/>
                                <input type="submit" value="変更" />
                            </form>
                        </td>
                        <td>
                            <?php print($name['username']); ?>
                        </td>
                        <td>
                            <?php print($jt_data[$key]['gakunen']); ?>
                        </td>
                        <td>
                            <?php
                            if ($jt_data[$key]['shuuryouflag'] == 1) {
                                print "<ruby>回答中<rt>かいとうちゅう</rt></ruby>";
                            } else if ($jt_data[$key]['shuuryouflag'] == 0) {
                                print "<ruby>回答終了済<rt>かいとうしゅうりょうず</rt></ruby>み";
                            }
                            print '</td></tr>';
                            ?>
                        </td>
                    <tr>
                    <?php else :
                    $key - 1;
                endif; ?>
                <?php endforeach; ?>
        </table>
        <form name="data_choice" method="post" action="test_loading.php" id="choice">
            <div id="center">
                <input type="button" style="position:fixed; left:20%; top:80%;" onclick='location.assign("../home_teacher.php")' style="position:absolute; left:25%; " value="戻る" class="btn-gradient-3d-simple2">
                <input type="submit" style="position:fixed; left:75%; top:80%;" value="選択" class="btn-gradient-3d-simple2">
            </div>
        </form>
<?php
        $dbh = null;
        exit();
    }
} catch (Exception $e) {
    print '<ruby>接続<rt>せつぞく</rt></ruby>エラーが<ruby>発生<rt>はっせい</rt></ruby>しました。';
    exit();
}

?>
</div>