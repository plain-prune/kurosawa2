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
try
{
session_start();
$uid=$_SESSION['uid']; 
$user_name=$_SESSION['name'];
$user_pass=$_SESSION['pass'];
$user_grade=$_SESSION['grade'];
$user_gender=$_SESSION['gender'];
if($user_gender=="男")
{
        $user_gender2="男の子";
}
else if($user_gender=="女")
{
        $user_gender2="女の子";
}
else if($user_gender=="その他")
{
        $user_gender2="そのほか";
}
?>

        <div id="center">
                <h1><ruby>生徒情報の変更<rt>せいとじょうほう　へんこう</rt></ruby></h1>

                <form method="post" name="form1" action="logindata_change_check.php">

                        <div class="cp_ipselect">
                                <select data-progression="" class="cp_sl06" required id="grade" data-helper="学年を選択してください"
                                        name="change_grade">
                                        <option value=""></option>
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
                                <label class="cp_sl06_selectlabel"><ruby>学 年<rt>がく ねん</rt></label>
                        </div>

                        <div class="cp_iptxt">
                                <input class="ef" data-progression="" data-helper="名前を入れてください" type="text" id="name"
                                        name="change_name" value="<?php print $user_name; ?>">
                                <label>名 前:</label> 
                                <span class="focus_line"></span>
                        </div>

                        <div class="cp_ipselect">
                        	<select data-progression="" class="cp_sl06" required id="gender" data-helper="性別を選択してください"
                                        name="change_gender" >
                                        <option value=""></option>
                                        <option value="男">男の子</option>
                                        <option value="女">女の子</option>
                                        <option value="その他">そのほか</option>
                                </select>
                                <span class="cp_sl06_highlight"></span>
                                <span class="cp_sl06_selectbar"></span>
                                <label class="cp_sl06_selectlabel"><ruby>性 別<rt>せい べつ</rt></label>
                        </div>

                        
                        <div class="cp_iptxt">
                                <input class="ef" data-progression="" data-helper="パスワードを入れてください" type="text" id="name"
                                        name="change_pass" value="<?php print $user_pass; ?>" placeholder="">
                                <label>パスワード :</label>
                                <span class="focus_line"></span>
                        </div>

                        <div class="cp_iptxt">
                                <input class="ef" data-progression="" data-helper="パスワード確認！" type="text" id="name"
                                        name="change_pass2" value="<?php print $user_pass; ?>" placeholder="">
                                <label>パスワード確認 :</label>
                                <span class="focus_line"></span>
                        </div>

                        <input type="button" onclick=location.assign("../home_teacher.php") value="戻る"
                                class="btn-gradient-3d-simple2">
                        <input type="submit" value="ＯＫ" onclick="teachcheck()" class="btn-gradient-3d-simple">
                </form>
<?php
}
catch (Exception $e) {
    print '<ruby>接続<rt>せつぞく</rt></ruby>エラーが<ruby>発生<rt>はっせい</rt></ruby>しました。';
    exit();
}

?>
</body>

</html>