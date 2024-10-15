<!DOCTYPE html>
<html xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>自分メータ</title>
        <link rel="stylesheet" href="css_file/design2.css">
        <link href="css_file/progression.css" rel="stylesheet" type="text/css">

        <!--[if gte mso 9]><xml>
<mso:CustomDocumentProperties>
<mso:xd_Signature msdt:dt="string"></mso:xd_Signature>
<mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_Editor msdt:dt="string">KUMENO FUMIHIRO</mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_Editor>
<mso:Order msdt:dt="string">1370600.00000000</mso:Order>
<mso:ComplianceAssetId msdt:dt="string"></mso:ComplianceAssetId>
<mso:TemplateUrl msdt:dt="string"></mso:TemplateUrl>
<mso:xd_ProgID msdt:dt="string"></mso:xd_ProgID>
<mso:_ExtendedDescription msdt:dt="string"></mso:_ExtendedDescription>
<mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_Author msdt:dt="string">KUMENO FUMIHIRO</mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_Author>
<mso:ContentTypeId msdt:dt="string">0x0101001DCA70F4AAFA134197477F43C314D8C0</mso:ContentTypeId>
<mso:TriggerFlowInfo msdt:dt="string"></mso:TriggerFlowInfo>
<mso:_SourceUrl msdt:dt="string"></mso:_SourceUrl>
<mso:_SharedFileIndex msdt:dt="string"></mso:_SharedFileIndex>
<mso:MediaLengthInSeconds msdt:dt="string"></mso:MediaLengthInSeconds>
</mso:CustomDocumentProperties>
</xml><![endif]-->
</head>

<body>
        <?php
        // セレクトボックスで選択された値を受け取る
        $change_id = $_POST["student_name"];
        //DB接続
        require('dbconnect2.php');

        //ユーザデータの取得
        $sql = 'SELECT * FROM user WHERE id=' . $change_id . '';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

        //学年データのために別のテーブルからデータを取得
        $sql = 'SELECT * FROM jibuntest WHERE fk_uid=' . $change_id . '';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $gakunen = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <div id="center">
                <h1><ruby>登録<rt>とうろく</rt></ruby></h1>

                <form method="post" name="form1" action="userdata_change_check.php">

                        <div class="cp_ipselect">
                                <select data-progression="" class="cp_sl06" required id="grade" data-helper="学年を選択してね" name="change_grade">
                                        <option value="1" selected><?php print($gakunen['gakunen']) ?></option>
                                        <option value="小学校1年生">小学校1年生</option>
                                        <option value="小学校2年生">小学校2年生</option>
                                        <option value="小学校3年生">小学校3年生</option>
                                        <option value="小学校4年生">小学校4年生</option>
                                        <option value="小学校5年生">小学校5年生</option>
                                        <option value="小学校6年生">小学校6年生</option>
                                        <option value="中学校1年生">中学校1年生</option>
                                        <option value="中学校2年生">中学校2年生</option>
                                        <option value="中学校3年生">中学校3年生</option>
                                </select>
                                <span class="cp_sl06_highlight"></span>
                                <span class="cp_sl06_selectbar"></span>
                                <label class="cp_sl06_selectlabel">学年</label>
                        </div>

                        <div class="cp_iptxt">
                                <input class="ef" data-progression="" data-helper="名前を入れてね！" type="text" id="name" name="change_name" value="<?php print($user_data['username']) ?>" placeholder="">
                                <label>名 前 :</label>
                                <span class="focus_line"></span>
                        </div>


                        <label>
                                <input type="hidden" id="teach" name="change_teach" value="no">
                                <input type="checkbox" id="teach" name="change_teach" value="yes" class="option-input02 checkbox">
                                <ruby>教師<rt>きょうし</rt></ruby>です
                        </label>
                        <script>
                                function teachcheck() {
                                        var check = document.getElementById("teach");
                                        if (check.checked) {
                                                check.value = 'yes';
                                        } else {
                                                check.value = 'no';
                                        }
                                }
                        </script>
                        <div class="cp_iptxt">
                                <input class="ef" data-progression="" data-helper="パスワードを入れてね！" type="text" id="name" name="change_pass" value="<?php print($user_data['password']) ?>" placeholder="">
                                <label>ﾊﾟｽﾜｰﾄﾞ :</label>
                                <span class="focus_line"></span>
                        </div>

                        <div class="cp_iptxt">
                                <input class="ef" data-progression="" data-helper="パスワード確認！" type="text" id="name" name="change_pass2" value="<?php print($user_data['password']) ?>" placeholder="">
                                <label>パスワード確認 :</label>
                                <span class="focus_line"></span>
                        </div>

                        <input type="button" onclick=location.assign("../../home.html") value="戻る" class="btn-gradient-3d-simple2">
                        <input type="submit" value="ＯＫ" onclick="teachcheck()" class="btn-gradient-3d-simple">
                </form>

</body>

</html>