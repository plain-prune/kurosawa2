<!DOCTYPE html>
<html>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>自分メータ</title>
        <link rel="stylesheet" href="css_file/design2.css">
        <link href="css_file/progression.css" rel="stylesheet" type="text/css">
</head>

<body>
        <div id="center">
                <h1>ログイン</h1>

                <form method="post" action="user_login_check.php">

                        <div class="cp_iptxt">
                                <input class="ef" data-progression="" data-helper="名前を入れてね！" type="text" id="name" name="name" value="" placeholder="">
                                <label>担当する生徒の名前:</label>
                                <span class="focus_line"></span>
                        </div>

                        <label>
                                <input type="hidden" id="teach" name="teach" value="yes">
                        </label>


                        <div class="cp_iptxt">
                                <input class="ef" data-progression="" data-helper="パスワードを入れてね！" type="text" id="name" name="pass" value="" placeholder="">
                                <label>パスワード:</label>
                                <span class="focus_line"></span>
                        </div>

                        <input type="hidden" name="login_teacher" value="1">

                        <input type="button" onclick=location.assign("../../home_teacher.html") value="戻る" class="btn-gradient-3d-simple2">
                        <input type="submit" value="ログイン" class="btn-gradient-3d-simple">
                </form>
</body>
</html>