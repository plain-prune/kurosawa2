<?php
session_start();
require('dbconnect.php');
$data = dbroad(2);
db_js($data, 2);
?>
<script>
    for (i = 1; i < 61; i++) {
        sessionStorage.setItem("pass" + i, parseInt(0));
    }
</script>
<html>

<head>
    <title>自分メーター</title>
    <link rel="stylesheet" href="css_file/design.css">
</head>

<body>
    <label for="file"><ruby>進行度<rt>しんこうど</rt></ruby>:</label>
    <progress id="progress1" max="10" value=""></progress>
    <p id=progress1></p>

    <input type="button" value="" onClick="sessionStorage.setItem('color', 0), document.getElementById('t1').className='white',document.getElementById('t2').className='white',document.getElementById('t3').className='white',document.getElementById('t4').className='white',document.getElementById('t5').className='white',document.getElementById('t6').className='white',document.getElementById('t7').className='white',document.getElementById('t8').className='white',document.getElementById('t9').className='white',document.getElementById('t10').className='white',document.getElementById('idh1').className='h1white'
    ,document.getElementById('t11').className='td_white',document.getElementById('t12').className='td_white',document.getElementById('t13').className='td_white',document.getElementById('t14').className='td_white',document.getElementById('t15').className='td_white',document.getElementById('t16').className='td_white',document.getElementById('t17').className='td_white',document.getElementById('t18').className='td_white',document.getElementById('t19').className='td_white',document.getElementById('t20').className='td_white'
    ,document.getElementById('t21').className='td_white',document.getElementById('t22').className='td_white',document.getElementById('t23').className='td_white',document.getElementById('t24').className='td_white',document.getElementById('t25').className='td_white',document.getElementById('t26').className='td_white',document.getElementById('t27').className='td_white',document.getElementById('t28').className='td_white',document.getElementById('t29').className='td_white',document.getElementById('t30').className='td_white'" style="background-color:#ffffff;" class="a">
    <input type="button" value="" onClick="sessionStorage.setItem('color', 1), document.getElementById('t1').className='black',document.getElementById('t2').className='black',document.getElementById('t3').className='black',document.getElementById('t4').className='black',document.getElementById('t5').className='black',document.getElementById('t6').className='black',document.getElementById('t7').className='black',document.getElementById('t8').className='black',document.getElementById('t9').className='black',document.getElementById('t10').className='black',document.getElementById('idh1').className='h1black'
    ,document.getElementById('t11').className='td_black',document.getElementById('t12').className='td_black',document.getElementById('t13').className='td_black',document.getElementById('t14').className='td_black',document.getElementById('t15').className='td_black',document.getElementById('t16').className='td_black',document.getElementById('t17').className='td_black',document.getElementById('t18').className='td_black',document.getElementById('t19').className='td_black',document.getElementById('t20').className='td_black'
    ,document.getElementById('t21').className='td_black',document.getElementById('t22').className='td_black',document.getElementById('t23').className='td_black',document.getElementById('t24').className='td_black',document.getElementById('t25').className='td_black',document.getElementById('t26').className='td_black',document.getElementById('t27').className='td_black',document.getElementById('t28').className='td_black',document.getElementById('t29').className='td_black',document.getElementById('t30').className='td_black'" style="background-color:#696969;" class="a">
    <input type="button" value="" onClick="sessionStorage.setItem('color', 2), document.getElementById('t1').className='red',document.getElementById('t2').className='red',document.getElementById('t3').className='red',document.getElementById('t4').className='red',document.getElementById('t5').className='red',document.getElementById('t6').className='red',document.getElementById('t7').className='red',document.getElementById('t8').className='red',document.getElementById('t9').className='red',document.getElementById('t10').className='red',document.getElementById('idh1').className='h1red'
    document.getElementById('t11').className='td_red',document.getElementById('t12').className='td_red',document.getElementById('t13').className='td_red',document.getElementById('t14').className='td_red',document.getElementById('t15').className='td_red',document.getElementById('t16').className='td_red',document.getElementById('t17').className='td_red',document.getElementById('t18').className='td_red',document.getElementById('t19').className='td_red',document.getElementById('t20').className='td_red'
    document.getElementById('t21').className='td_red',document.getElementById('t22').className='td_red',document.getElementById('t23').className='td_red',document.getElementById('t24').className='td_red',document.getElementById('t25').className='td_red',document.getElementById('t26').className='td_red',document.getElementById('t27').className='td_red',document.getElementById('t28').className='td_red',document.getElementById('t29').className='td_red',document.getElementById('t30').className='td_red'" style="background-color:#ff6347;" class="a">
    <input type="button" value="" onClick="sessionStorage.setItem('color', 3), document.getElementById('t1').className='green',document.getElementById('t2').className='green',document.getElementById('t3').className='green',document.getElementById('t4').className='green',document.getElementById('t5').className='green',document.getElementById('t6').className='green',document.getElementById('t7').className='green',document.getElementById('t8').className='green',document.getElementById('t9').className='green',document.getElementById('t10').className='green',document.getElementById('idh1').className='h1green'
    ,document.getElementById('t11').className='td_green',document.getElementById('t12').className='td_green',document.getElementById('t13').className='td_green',document.getElementById('t14').className='td_green',document.getElementById('t15').className='td_green',document.getElementById('t16').className='td_green',document.getElementById('t17').className='td_green',document.getElementById('t18').className='td_green',document.getElementById('t19').className='td_green',document.getElementById('t20').className='td_green'
    ,document.getElementById('t21').className='td_green',document.getElementById('t22').className='td_green',document.getElementById('t23').className='td_green',document.getElementById('t24').className='td_green',document.getElementById('t25').className='td_green',document.getElementById('t26').className='td_green',document.getElementById('t27').className='td_green',document.getElementById('t28').className='td_green',document.getElementById('t29').className='td_green',document.getElementById('t30').className='td_green'" style="background-color:#32cd32;" class="a">
    <input type="button" value="" onClick="sessionStorage.setItem('color', 4), document.getElementById('t1').className='blue',document.getElementById('t2').className='blue',document.getElementById('t3').className='blue',document.getElementById('t4').className='blue',document.getElementById('t5').className='blue',document.getElementById('t6').className='blue',document.getElementById('t7').className='blue',document.getElementById('t8').className='blue',document.getElementById('t9').className='blue',document.getElementById('t10').className='blue',document.getElementById('idh1').className='h1blue'
    ,document.getElementById('t11').className='td_blue',document.getElementById('t12').className='td_blue',document.getElementById('t13').className='td_blue',document.getElementById('t14').className='td_blue',document.getElementById('t15').className='td_blue',document.getElementById('t16').className='td_blue',document.getElementById('t17').className='td_blue',document.getElementById('t18').className='td_blue',document.getElementById('t19').className='td_blue',document.getElementById('t20').className='td_blue'
    ,document.getElementById('t21').className='td_blue',document.getElementById('t22').className='td_blue',document.getElementById('t23').className='td_blue',document.getElementById('t24').className='td_blue',document.getElementById('t25').className='td_blue',document.getElementById('t26').className='td_blue',document.getElementById('t27').className='td_blue',document.getElementById('t28').className='td_blue',document.getElementById('t29').className='td_blue',document.getElementById('t30').className='td_blue'" style="background-color:#1e90ff;" class="a">
    
    <button onclick="small()">小</button>
    <button onclick="medium()">中</button>
    <button onclick="large()">大</button>

    <div id="center">
        <table>
            <tr>
                <h1 id=idh1>1.こころ</h1>
                <hr class="cp_hr06">
                </hr>
                <th id="t1">①<ruby>不安<rt>ふあん</rt></ruby>や<ruby>悩<rt>なや</rt></ruby>みはありません。</th>
                <form name="aaForm" id=aa>
                    <td id="t11">
                        <div class="sample">
                            <input type="radio" name="c1" id="select1" value="1" onclick="ask()">
                            <label for="select1" id="sizelabel1">１</label>
                            <input type="radio" name="c1" id="select2" value="2" onclick="ask()">
                            <label for="select2" id="sizelabel2">２</label>
                            <input type="radio" name="c1" id="select3" value="3" onclick="ask()">
                            <label for="select3" id="sizelabel3">３</label>
                            <input type="radio" name="c1" id="select4" value="4" onclick="ask()">
                            <label for="select4" id="sizelabel4">４</label>
                            <input type="radio" name="c1" id="select5" value="5" onclick="ask()">
                            <label for="select5" id="sizelabel5">５</label>
                            <input type="radio" name="c1" id="pass1" value="0" onclick="ask()">
                            <label for="pass1" id="passlabel1">パス</label>
                    <td id="t21"><input type="text" id="textarea" class="textbox" placeholder="ここにテキストを入力">
                        <script>
                            var e = document.getElementById('textarea');
                            e.value = sessionStorage.getItem("comment");
                        </script>
    </div>
    </td>
    </form>
    </tr>
    <form name="bForm" id=b>
        <tr>
            <th id="t2">②<ruby>自分<rt>じぶん</rt></ruby>の<ruby>気持<rt>きも</rt></ruby>ちをコントロールできます。<br>（イライラしても<ruby>気持<rt>きも</rt></ruby>ちをおさえられます。）</th>
            <td id="t12">
                <div class="sample">
                    <input type="radio" name="c2" id="select6" value="1" onclick="ask2()">
                    <label for="select6" id="sizelabel6">１</label>
                    <input type="radio" name="c2" id="select7" value="2" onclick="ask2()">
                    <label for="select7" id="sizelabel7">２</label>
                    <input type="radio" name="c2" id="select8" value="3" onclick="ask2()">
                    <label for="select8" id="sizelabel8">３</label>
                    <input type="radio" name="c2" id="select9" value="4" onclick="ask2()">
                    <label for="select9" id="sizelabel9">４</label>
                    <input type="radio" name="c2" id="select10" value="5" onclick="ask2()">
                    <label for="select10" id="sizelabel10">５</label>
                    <input type="radio" name="c2" id="pass2" value="0" onclick="ask2()">
                    <label for="pass2" id="passlabel2">パス</label>
            <td id="t22"><input type="text" id="textarea2" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea2');
                    e.value = sessionStorage.getItem("comment2");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="cForm" id=c>
        <tr>
            <th id="t3">③<ruby>気<rt>き</rt></ruby>になることがあっても、<br><ruby>気持<rt>きも</rt></ruby>ちを<ruby>切<rt>き</rt></ruby>りかえてやるべきことができます。</th>
            <td id="t13">
                <div class="sample">
                    <input type="radio" name="c3" id="select11" value="1" onclick="ask3()">
                    <label for="select11" id="sizelabel11">１</label>
                    <input type="radio" name="c3" id="select12" value="2" onclick="ask3()">
                    <label for="select12" id="sizelabel12">２</label>
                    <input type="radio" name="c3" id="select13" value="3" onclick="ask3()">
                    <label for="select13" id="sizelabel13">３</label>
                    <input type="radio" name="c3" id="select14" value="4" onclick="ask3()">
                    <label for="select14" id="sizelabel14">４</label>
                    <input type="radio" name="c3" id="select15" value="5" onclick="ask3()">
                    <label for="select15" id="sizelabel15">５</label>
                    <input type="radio" name="c3" id="pass3" value="0" onclick="ask3()">
                    <label for="pass3" id="passlabel3">パス</label>
            <td id="t23"><input type="text" id="textarea3" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea3');
                    e.value = sessionStorage.getItem("comment3");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="dForm" id=d>
        <tr>
            <th id="t4">④がんばろうと<ruby>思<rt>おも</rt></ruby>う<ruby>意欲<rt>いよく</rt></ruby>や<ruby>元気<rt>げんき</rt></ruby>があります。</th>
            <td id="t14">
                <div class="sample">
                    <input type="radio" name="c4" id="select16" value="1" onclick="ask4()">
                    <label for="select16" id="sizelabel16">１</label>
                    <input type="radio" name="c4" id="select17" value="2" onclick="ask4()">
                    <label for="select17" id="sizelabel17">２</label>
                    <input type="radio" name="c4" id="select18" value="3" onclick="ask4()">
                    <label for="select18" id="sizelabel18">３</label>
                    <input type="radio" name="c4" id="select19" value="4" onclick="ask4()">
                    <label for="select19" id="sizelabel19">４</label>
                    <input type="radio" name="c4" id="select20" value="5" onclick="ask4()">
                    <label for="select20" id="sizelabel20">５</label>
                    <input type="radio" name="c4" id="pass4" value="0" onclick="ask4()">
                    <label for="pass4" id="passlabel4">パス</label>
            <td id="t24"><input type="text" id="textarea4" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea4');
                    e.value = sessionStorage.getItem("comment4");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="eForm" id=e>
        <tr>
            <th id="t5">⑤<ruby>自分<rt>じぶん</rt></ruby>の<ruby>気持<rt>きも</rt></ruby>ちや、<ruby>自分<rt>じぶん</rt></ruby>の<ruby>今<rt>いま</rt></ruby>の<ruby>状態<rt>じょうたい</rt></ruby>をわかっています。</th>
            <td id="t15">
                <div class="sample">
                    <input type="radio" name="c5" id="select21" value="1" onclick="ask5()">
                    <label for="select21" id="sizelabel21">１</label>
                    <input type="radio" name="c5" id="select22" value="2" onclick="ask5()">
                    <label for="select22" id="sizelabel22">２</label>
                    <input type="radio" name="c5" id="select23" value="3" onclick="ask5()">
                    <label for="select23" id="sizelabel23">３</label>
                    <input type="radio" name="c5" id="select24" value="4" onclick="ask5()">
                    <label for="select24" id="sizelabel24">４</label>
                    <input type="radio" name="c5" id="select25" value="5" onclick="ask5()">
                    <label for="select25" id="sizelabel25">５</label>
                    <input type="radio" name="c5" id="pass5" value="0" onclick="ask5()">
                    <label for="pass5" id="passlabel5">パス</label>
            <td id="t25"><input type="text" id="textarea5" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea5');
                    e.value = sessionStorage.getItem("comment5");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="fForm" id=f>
        <tr>
            <th id="t6">⑥<ruby>自分<rt>じぶん</rt></ruby>の<ruby>気持<rt>きも</rt></ruby>ちを<ruby>言葉<rt>ことば</rt></ruby>や<ruby>文<rt>ぶん</rt></ruby>で<ruby>伝<rt>つた</rt></ruby>えられます。</th>
            <td id="t16">
                <div class="sample">
                    <input type="radio" name="c6" id="select26" value="1" onclick="ask6()">
                    <label for="select26" id="sizelabel26">１</label>
                    <input type="radio" name="c6" id="select27" value="2" onclick="ask6()">
                    <label for="select27" id="sizelabel27">２</label>
                    <input type="radio" name="c6" id="select28" value="3" onclick="ask6()">
                    <label for="select28" id="sizelabel28">３</label>
                    <input type="radio" name="c6" id="select29" value="4" onclick="ask6()">
                    <label for="select29" id="sizelabel29">４</label>
                    <input type="radio" name="c6" id="select30" value="5" onclick="ask6()">
                    <label for="select30" id="sizelabel30">５</label>
                    <input type="radio" name="c6" id="pass6" value="0" onclick="ask6()">
                    <label for="pass6" id="passlabel6">パス</label>
            <td id="t26"><input type="text" id="textarea6" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea6');
                    e.value = sessionStorage.getItem("comment6");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="gForm" id=g>
        <tr>
            <th id="t7">⑦<ruby>自分<rt>じぶん</rt></ruby>の<ruby>気持<rt>きも</rt></ruby>ちは<ruby>穏<rt>おだ</rt></ruby>やかです。</th>
            <td id="t17">
                <div class="sample">
                    <input type="radio" name="c7" id="select31" value="1" onclick="ask7()">
                    <label for="select31" id="sizelabel31">１</label>
                    <input type="radio" name="c7" id="select32" value="2" onclick="ask7()">
                    <label for="select32" id="sizelabel32">２</label>
                    <input type="radio" name="c7" id="select33" value="3" onclick="ask7()">
                    <label for="select33" id="sizelabel33">３</label>
                    <input type="radio" name="c7" id="select34" value="4" onclick="ask7()">
                    <label for="select34" id="sizelabel34">４</label>
                    <input type="radio" name="c7" id="select35" value="5" onclick="ask7()">
                    <label for="select35" id="sizelabel35">５</label>
                    <input type="radio" name="c7" id="pass7" value="0" onclick="ask7()">
                    <label for="pass7" id="passlabel7">パス</label>
            <td id="t27"><input type="text" id="textarea7" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea7');
                    e.value = sessionStorage.getItem("comment7");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="hForm" id=h>
        <tr>
            <th id="t8">⑧<ruby>少<rt>すこ</rt></ruby>しのことでテンションが<ruby>上<rt>あ</rt></ruby>がったり、<br> <ruby>下<rt>さ</rt></ruby>がったりすることはありません。</th>
            <td id="t18">
                <div class="sample">
                    <input type="radio" name="c8" id="select36" value="1" onclick="ask8()">
                    <label for="select36" id="sizelabel36">１</label>
                    <input type="radio" name="c8" id="select37" value="2" onclick="ask8()">
                    <label for="select37" id="sizelabel37">２</label>
                    <input type="radio" name="c8" id="select38" value="3" onclick="ask8()">
                    <label for="select38" id="sizelabel38">３</label>
                    <input type="radio" name="c8" id="select39" value="4" onclick="ask8()">
                    <label for="select39" id="sizelabel39">４</label>
                    <input type="radio" name="c8" id="select40" value="5" onclick="ask8()">
                    <label for="select40" id="sizelabel40">５</label>
                    <input type="radio" name="c8" id="pass8" value="0" onclick="ask8()">
                    <label for="pass8" id="passlabel8">パス</label>
            <td id="t28"><input type="text" id="textarea8" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea8');
                    e.value = sessionStorage.getItem("comment8");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="iForm" id=i>
        <tr>
            <th id="t9">⑨<ruby>自分<rt>じぶん</rt></ruby>のことを<ruby>大切<rt>たいせつ</rt></ruby>に<ruby>思<rt>おも</rt></ruby>います。<br>または、<ruby>自信<rt>じしん</rt></ruby>を<ruby>持<rt>も</rt></ruby>てることがあります。</th>
            <td id="t19">
                <div class="sample">
                    <input type="radio" name="c9" id="select41" value="1" onclick="ask9()">
                    <label for="select41" id="sizelabel41">１</label>
                    <input type="radio" name="c9" id="select42" value="2" onclick="ask9()">
                    <label for="select42" id="sizelabel42">２</label>
                    <input type="radio" name="c9" id="select43" value="3" onclick="ask9()">
                    <label for="select43" id="sizelabel43">３</label>
                    <input type="radio" name="c9" id="select44" value="4" onclick="ask9()">
                    <label for="select44" id="sizelabel44">４</label>
                    <input type="radio" name="c9" id="select45" value="5" onclick="ask9()">
                    <label for="select45" id="sizelabel45">５</label>
                    <input type="radio" name="c9" id="pass9" value="0" onclick="ask9()">
                    <label for="pass9" id="passlabel9">パス</label>
            <td id="t29"><input type="text" id="textarea9" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea9');
                    e.value = sessionStorage.getItem("comment9");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="jForm" id=j>
        <tr>
            <th id="t10">⑩<ruby>他<rt>ほか</rt></ruby>の<ruby>人<rt>ひと</rt></ruby>のことを<ruby>大切<rt>たいせつ</rt></ruby>に<ruby>思<rt>おも</rt></ruby>います。</th>
            <td id="t20">
                <div class="sample">
                    <input type="radio" name="c10" id="select46" value="1" onclick="ask10()">
                    <label for="select46" id="sizelabel46">１</label>
                    <input type="radio" name="c10" id="select47" value="2" onclick="ask10()">
                    <label for="select47" id="sizelabel47">２</label>
                    <input type="radio" name="c10" id="select48" value="3" onclick="ask10()">
                    <label for="select48" id="sizelabel48">３</label>
                    <input type="radio" name="c10" id="select49" value="4" onclick="ask10()">
                    <label for="select49" id="sizelabel49">４</label>
                    <input type="radio" name="c10" id="select50" value="5" onclick="ask10()">
                    <label for="select50" id="sizelabel50">５</label>
                    <input type="radio" name="c10" id="pass10" value="0" onclick="ask10()">
                    <label for="pass10" id="passlabel10">パス</label>
            <td id="t30"><input type="text" id="textarea10" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea10');
                    e.value = sessionStorage.getItem("comment10");
                </script>
                </div>
            </td>
        </tr>
    </form>
    </table>
    <script>
        var element1 = document.getElementById("aa");
        var element2 = document.getElementById("b");
        var element3 = document.getElementById("c");
        var element4 = document.getElementById("d");
        var element5 = document.getElementById("e");
        var element6 = document.getElementById("f");
        var element7 = document.getElementById("g");
        var element8 = document.getElementById("h");
        var element9 = document.getElementById("i");
        var element10 = document.getElementById("j");
        var elements1 = element1.c1;
        var elements2 = element2.c2;
        var elements3 = element3.c3;
        var elements4 = element4.c4;
        var elements5 = element5.c5;
        var elements6 = element6.c6;
        var elements7 = element7.c7;
        var elements8 = element8.c8;
        var elements9 = element9.c9;
        var elements10 = element10.c10;
        var caa = sessionStorage.getItem("Answer1-1");
        var cab = sessionStorage.getItem("Answer1-2");
        var cac = sessionStorage.getItem("Answer1-3");
        var cad = sessionStorage.getItem("Answer1-4");
        var cae = sessionStorage.getItem("Answer1-5");
        var caf = sessionStorage.getItem("Answer1-6");
        var cag = sessionStorage.getItem("Answer1-7");
        var cah = sessionStorage.getItem("Answer1-8");
        var cai = sessionStorage.getItem("Answer1-9");
        var caj = sessionStorage.getItem("Answer1-10");

        caa = caa - 1;
        cab = cab - 1;
        cac = cac - 1;
        cad = cad - 1;
        cae = cae - 1;
        caf = caf - 1;
        cag = cag - 1;
        cah = cah - 1;
        cai = cai - 1;
        caj = caj - 1;


        if (isNaN(caa) == true) {
            sessionStorage.setItem("Answer1-1", 0);
        }


        if (isNaN(cab) == true) {
            sessionStorage.setItem("Answer1-2", 0);
        }

        if (isNaN(cac) == true) {
            sessionStorage.setItem("Answer1-3", 0);
        }

        if (isNaN(cad) == true) {
            sessionStorage.setItem("Answer1-4", 0);
        }

        if (isNaN(cae) == true) {
            sessionStorage.setItem("Answer1-5", 0);
        }

        if (isNaN(caf) == true) {
            sessionStorage.setItem("Answer1-6", 0);
        }

        if (isNaN(cag) == true) {
            sessionStorage.setItem("Answer1-7", 0);
        }

        if (isNaN(cah) == true) {
            sessionStorage.setItem("Answer1-8", 0);
        }

        if (isNaN(cai) == true) {
            sessionStorage.setItem("Answer1-9", 0);
        }

        if (isNaN(caj) == true) {
            sessionStorage.setItem("Answer1-10", 0);
        }

        var color = sessionStorage.getItem("color");
        if (color == 0) {
            document.getElementById('t1').className = 'white';
            document.getElementById('t2').className = 'white';
            document.getElementById('t3').className = 'white';
            document.getElementById('t4').className = 'white';
            document.getElementById('t5').className = 'white';
            document.getElementById('t6').className = 'white';
            document.getElementById('t7').className = 'white';
            document.getElementById('t8').className = 'white';
            document.getElementById('t9').className = 'white';
            document.getElementById('t10').className = 'white';
            document.getElementById('idh1').className = 'h1white';
            document.getElementById('t11').className = 'td_white';
            document.getElementById('t12').className = 'td_white';
            document.getElementById('t13').className = 'td_white';
            document.getElementById('t14').className = 'td_white';
            document.getElementById('t15').className = 'td_white';
            document.getElementById('t16').className = 'td_white';
            document.getElementById('t17').className = 'td_white';
            document.getElementById('t18').className = 'td_white';
            document.getElementById('t19').className = 'td_white';
            document.getElementById('t20').className = 'td_white';
            document.getElementById('t21').className = 'td_white';
            document.getElementById('t22').className = 'td_white';
            document.getElementById('t23').className = 'td_white';
            document.getElementById('t24').className = 'td_white';
            document.getElementById('t25').className = 'td_white';
            document.getElementById('t26').className = 'td_white';
            document.getElementById('t27').className = 'td_white';
            document.getElementById('t28').className = 'td_white';
            document.getElementById('t29').className = 'td_white';
            document.getElementById('t30').className = 'td_white';
        } else if (color == 1) {
            document.getElementById('t1').className = 'black';
            document.getElementById('t2').className = 'black';
            document.getElementById('t3').className = 'black';
            document.getElementById('t4').className = 'black';
            document.getElementById('t5').className = 'black';
            document.getElementById('t6').className = 'black';
            document.getElementById('t7').className = 'black';
            document.getElementById('t8').className = 'black';
            document.getElementById('t9').className = 'black';
            document.getElementById('t10').className = 'black';
            document.getElementById('idh1').className = 'h1black';
            document.getElementById('t11').className = 'td_black';
            document.getElementById('t12').className = 'td_black';
            document.getElementById('t13').className = 'td_black';
            document.getElementById('t14').className = 'td_black';
            document.getElementById('t15').className = 'td_black';
            document.getElementById('t16').className = 'td_black';
            document.getElementById('t17').className = 'td_black';
            document.getElementById('t18').className = 'td_black';
            document.getElementById('t19').className = 'td_black';
            document.getElementById('t20').className = 'td_black';
            document.getElementById('t21').className = 'td_black';
            document.getElementById('t22').className = 'td_black';
            document.getElementById('t23').className = 'td_black';
            document.getElementById('t24').className = 'td_black';
            document.getElementById('t25').className = 'td_black';
            document.getElementById('t26').className = 'td_black';
            document.getElementById('t27').className = 'td_black';
            document.getElementById('t28').className = 'td_black';
            document.getElementById('t29').className = 'td_black';
            document.getElementById('t30').className = 'td_black';
        } else if (color == 2) {
            document.getElementById('t1').className = 'red';
            document.getElementById('t2').className = 'red';
            document.getElementById('t3').className = 'red';
            document.getElementById('t4').className = 'red';
            document.getElementById('t5').className = 'red';
            document.getElementById('t6').className = 'red';
            document.getElementById('t7').className = 'red';
            document.getElementById('t8').className = 'red';
            document.getElementById('t9').className = 'red';
            document.getElementById('t10').className = 'red';
            document.getElementById('idh1').className = 'h1red';
            document.getElementById('t11').className = 'td_red';
            document.getElementById('t12').className = 'td_red';
            document.getElementById('t13').className = 'td_red';
            document.getElementById('t14').className = 'td_red';
            document.getElementById('t15').className = 'td_red';
            document.getElementById('t16').className = 'td_red';
            document.getElementById('t17').className = 'td_red';
            document.getElementById('t18').className = 'td_red';
            document.getElementById('t19').className = 'td_red';
            document.getElementById('t20').className = 'td_red';
            document.getElementById('t21').className = 'td_red';
            document.getElementById('t22').className = 'td_red';
            document.getElementById('t23').className = 'td_red';
            document.getElementById('t24').className = 'td_red';
            document.getElementById('t25').className = 'td_red';
            document.getElementById('t26').className = 'td_red';
            document.getElementById('t27').className = 'td_red';
            document.getElementById('t28').className = 'td_red';
            document.getElementById('t29').className = 'td_red';
            document.getElementById('t30').className = 'td_red';
        } else if (color == 3) {
            document.getElementById('t1').className = 'green';
            document.getElementById('t2').className = 'green';
            document.getElementById('t3').className = 'green';
            document.getElementById('t4').className = 'green';
            document.getElementById('t5').className = 'green';
            document.getElementById('t6').className = 'green';
            document.getElementById('t7').className = 'green';
            document.getElementById('t8').className = 'green';
            document.getElementById('t9').className = 'green';
            document.getElementById('t10').className = 'green';
            document.getElementById('idh1').className = 'h1green';
            document.getElementById('t11').className = 'td_green';
            document.getElementById('t12').className = 'td_green';
            document.getElementById('t13').className = 'td_green';
            document.getElementById('t14').className = 'td_green';
            document.getElementById('t15').className = 'td_green';
            document.getElementById('t16').className = 'td_green';
            document.getElementById('t17').className = 'td_green';
            document.getElementById('t18').className = 'td_green';
            document.getElementById('t19').className = 'td_green';
            document.getElementById('t20').className = 'td_green';
            document.getElementById('t21').className = 'td_green';
            document.getElementById('t22').className = 'td_green';
            document.getElementById('t23').className = 'td_green';
            document.getElementById('t24').className = 'td_green';
            document.getElementById('t25').className = 'td_green';
            document.getElementById('t26').className = 'td_green';
            document.getElementById('t27').className = 'td_green';
            document.getElementById('t28').className = 'td_green';
            document.getElementById('t29').className = 'td_green';
            document.getElementById('t30').className = 'td_green';
        } else if (color == 4) {
            document.getElementById('t1').className = 'blue';
            document.getElementById('t2').className = 'blue';
            document.getElementById('t3').className = 'blue';
            document.getElementById('t4').className = 'blue';
            document.getElementById('t5').className = 'blue';
            document.getElementById('t6').className = 'blue';
            document.getElementById('t7').className = 'blue';
            document.getElementById('t8').className = 'blue';
            document.getElementById('t9').className = 'blue';
            document.getElementById('t10').className = 'blue';
            document.getElementById('idh1').className = 'h1blue';
            document.getElementById('t11').className = 'td_blue';
            document.getElementById('t12').className = 'td_blue';
            document.getElementById('t13').className = 'td_blue';
            document.getElementById('t14').className = 'td_blue';
            document.getElementById('t15').className = 'td_blue';
            document.getElementById('t16').className = 'td_blue';
            document.getElementById('t17').className = 'td_blue';
            document.getElementById('t18').className = 'td_blue';
            document.getElementById('t19').className = 'td_blue';
            document.getElementById('t21').className = 'td_blue';
            document.getElementById('t22').className = 'td_blue';
            document.getElementById('t22').className = 'td_blue';
            document.getElementById('t23').className = 'td_blue';
            document.getElementById('t24').className = 'td_blue';
            document.getElementById('t25').className = 'td_blue';
            document.getElementById('t26').className = 'td_blue';
            document.getElementById('t27').className = 'td_blue';
            document.getElementById('t28').className = 'td_blue';
            document.getElementById('t29').className = 'td_blue';
            document.getElementById('t30').className = 'td_blue';
        }

        if ((0 <= caa) && (caa < 7)) {
            elements1[caa].checked = true
        } else {
            ;
        }

        if ((0 <= cab) && (cab < 7)) {
            elements2[cab].checked = true
        } else {
            ;
        }

        if ((0 <= cac) && (cac < 7)) {
            elements3[cac].checked = true
        } else {
            ;
        }

        if ((0 <= cad) && (cad < 7)) {
            elements4[cad].checked = true
        } else {
            e;
        }

        if ((0 <= cae) && (cae < 7)) {
            elements5[cae].checked = true
        } else {
            ;
        }

        if ((0 <= caf) && (caf < 7)) {
            elements6[caf].checked = true
        } else {
            ;
        }

        if ((0 <= cag) && (cag < 7)) {
            elements7[cag].checked = true
        } else {
            ;
        }

        if ((0 <= cah) && (cah < 7)) {
            elements8[cah].checked = true
        } else {
            ;
        }

        if ((0 <= cai) && (cai < 7)) {
            elements9[cai].checked = true
        } else {
            ;
        }

        if ((0 <= caj) && (caj < 7)) {
            elements10[caj].checked = true
        } else {
            ;
        }

        sessionStorage.setItem("snk1", 0);
        sessionStorage.setItem("snk2", 0);
        sessionStorage.setItem("snk3", 0);
        sessionStorage.setItem("snk4", 0);
        sessionStorage.setItem("snk5", 0);
        sessionStorage.setItem("snk6", 0);
        sessionStorage.setItem("snk7", 0);
        sessionStorage.setItem("snk8", 0);
        sessionStorage.setItem("snk9", 0);
        sessionStorage.setItem("snk10", 0);

        var set = 0;

        function ask() {
            var inps = document.aaForm.elements;
            var flag = false;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer1-1", parseInt(inp.value));
                    sessionStorage.setItem("snk1", parseInt(1, 10));
                }
            }

            if (document.aaForm.c1[5].checked) {
                sessionStorage.setItem("pass1", parseInt(6, 10));
            } else {
                sessionStorage.setItem("pass1", 0)
            }

            for (var i = 0; i < document.aaForm.c1.length; i++) {
                // i番目のラジオボタンがチェックされているかを判定
                if (document.aaForm.c1[i].checked) {
                    flag = true;
                    document.getElementById("select6").disabled = false;
                    document.getElementById("select7").disabled = false;
                    document.getElementById("select8").disabled = false;
                    document.getElementById("select9").disabled = false;
                    document.getElementById("select10").disabled = false;
                    document.getElementById("pass2").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select6").disabled = true;
                document.getElementById("select7").disabled = true;
                document.getElementById("select8").disabled = true;
                document.getElementById("select9").disabled = true;
                document.getElementById("select10").disabled = true;
                document.getElementById("pass2").disabled = true;
            }
        }

        function ask2() {
            var inps = document.bForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer1-2", parseInt(inp.value));
                    sessionStorage.setItem("snk2", parseInt(1, 10));
                }
            }

            if (document.bForm.c2[5].checked) {
                sessionStorage.setItem("pass2", parseInt(6, 10));
            } else {
                sessionStorage.setItem("pass2", 0)
            }

            for (var i = 0; i < document.bForm.c2.length; i++) {
                // i番目のラジオボタンがチェックされているかを判定
                if (document.bForm.c2[i].checked) {
                    flag = true;
                    document.getElementById("select11").disabled = false;
                    document.getElementById("select12").disabled = false;
                    document.getElementById("select13").disabled = false;
                    document.getElementById("select14").disabled = false;
                    document.getElementById("select15").disabled = false;
                    document.getElementById("pass3").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select11").disabled = true;
                document.getElementById("select12").disabled = true;
                document.getElementById("select13").disabled = true;
                document.getElementById("select14").disabled = true;
                document.getElementById("select15").disabled = true;
                document.getElementById("pass3").disabled = true;
            }
        }

        function ask3() {
            var inps = document.cForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer1-3", parseInt(inp.value));
                    sessionStorage.setItem("snk3", parseInt(1, 10));
                }
            }

            if (document.cForm.c3[5].checked) {
                sessionStorage.setItem("pass3", parseInt(6, 10));
            } else {
                sessionStorage.setItem("pass3", 0)
            }

            for (var i = 0; i < document.cForm.c3.length; i++) {
                // i番目のラジオボタンがチェックされているかを判定
                if (document.cForm.c3[i].checked) {
                    flag = true;
                    document.getElementById("select16").disabled = false;
                    document.getElementById("select17").disabled = false;
                    document.getElementById("select18").disabled = false;
                    document.getElementById("select19").disabled = false;
                    document.getElementById("select20").disabled = false;
                    document.getElementById("pass4").disabled = false;
                }
            }
            //何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select16").disabled = true;
                document.getElementById("select17").disabled = true;
                document.getElementById("select18").disabled = true;
                document.getElementById("select19").disabled = true;
                document.getElementById("select20").disabled = true;
                document.getElementById("pass4").disabled = true;
            }
        }

        function ask4() {
            var inps = document.dForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer1-4", parseInt(inp.value));
                    sessionStorage.setItem("snk4", parseInt(1, 10));
                }
            }

            if (document.dForm.c4[5].checked) {
                sessionStorage.setItem("pass4", parseInt(6, 10));
            } else {
                sessionStorage.setItem("pass4", 0)
            }

            for (var i = 0; i < document.dForm.c4.length; i++) {
                // i番目のラジオボタンがチェックされているかを判定
                if (document.dForm.c4[i].checked) {
                    flag = true;
                    document.getElementById("select21").disabled = false;
                    document.getElementById("select22").disabled = false;
                    document.getElementById("select23").disabled = false;
                    document.getElementById("select24").disabled = false;
                    document.getElementById("select25").disabled = false;
                    document.getElementById("pass5").disabled = false;
                }
            }
            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select21").disabled = true;
                document.getElementById("select22").disabled = true;
                document.getElementById("select23").disabled = true;
                document.getElementById("select24").disabled = true;
                document.getElementById("select25").disabled = true;
                document.getElementById("pass5").disabled = true;
            }
        }

        function ask5() {
            var inps = document.eForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer1-5", parseInt(inp.value));
                    sessionStorage.setItem("snk5", parseInt(1, 10));
                }
            }

            if (document.eForm.c5[5].checked) {
                sessionStorage.setItem("pass5", parseInt(6, 10));
            } else {
                sessionStorage.setItem("pass5", 0)
            }

            for (var i = 0; i < document.eForm.c5.length; i++) {
                // i番目のラジオボタンがチェックされているかを判定
                if (document.eForm.c5[i].checked) {
                    flag = true;
                    document.getElementById("select26").disabled = false;
                    document.getElementById("select27").disabled = false;
                    document.getElementById("select28").disabled = false;
                    document.getElementById("select29").disabled = false;
                    document.getElementById("select30").disabled = false;
                    document.getElementById("pass6").disabled = false;
                }
            }
            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select26").disabled = true;
                document.getElementById("select27").disabled = true;
                document.getElementById("select28").disabled = true;
                document.getElementById("select29").disabled = true;
                document.getElementById("select30").disabled = true;
                document.getElementById("pass6").disabled = true;
            }
        }

        function ask6() {
            var inps = document.fForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer1-6", parseInt(inp.value));
                    sessionStorage.setItem("snk6", parseInt(1, 10));
                }
            }

            if (document.fForm.c6[5].checked) {
                sessionStorage.setItem("pass6", parseInt(6, 10));
            } else {
                sessionStorage.setItem("pass6", 0)
            }

            for (var i = 0; i < document.fForm.c6.length; i++) {
                // i番目のラジオボタンがチェックされているかを判定
                if (document.fForm.c6[i].checked) {
                    flag = true;
                    document.getElementById("select31").disabled = false;
                    document.getElementById("select32").disabled = false;
                    document.getElementById("select33").disabled = false;
                    document.getElementById("select34").disabled = false;
                    document.getElementById("select35").disabled = false;
                    document.getElementById("pass7").disabled = false;
                }
            }
            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select31").disabled = true;
                document.getElementById("select32").disabled = true;
                document.getElementById("select33").disabled = true;
                document.getElementById("select34").disabled = true;
                document.getElementById("select35").disabled = true;
                document.getElementById("pass7").disabled = true;
            }
        }

        function ask7() {
            var inps = document.gForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer1-7", parseInt(inp.value));
                    sessionStorage.setItem("snk7", parseInt(1, 10));
                }
            }

            if (document.gForm.c7[5].checked) {
                sessionStorage.setItem("pass7", parseInt(6, 10));
            } else {
                sessionStorage.setItem("pass7", 0)
            }

            for (var i = 0; i < document.gForm.c7.length; i++) {
                // i番目のラジオボタンがチェックされているかを判定
                if (document.gForm.c7[i].checked) {
                    flag = true;
                    document.getElementById("select36").disabled = false;
                    document.getElementById("select37").disabled = false;
                    document.getElementById("select38").disabled = false;
                    document.getElementById("select39").disabled = false;
                    document.getElementById("select40").disabled = false;
                    document.getElementById("pass8").disabled = false;
                }
            }
            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select36").disabled = true;
                document.getElementById("select37").disabled = true;
                document.getElementById("select38").disabled = true;
                document.getElementById("select39").disabled = true;
                document.getElementById("select40").disabled = true;
                document.getElementById("pass8").disabled = true;
            }
        }

        function ask8() {
            var inps = document.hForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer1-8", parseInt(inp.value));
                    sessionStorage.setItem("snk8", parseInt(1, 10));
                }
            }

            if (document.hForm.c8[5].checked) {
                sessionStorage.setItem("pass8", parseInt(6, 10));
            } else {
                sessionStorage.setItem("pass8", 0)
            }

            for (var i = 0; i < document.hForm.c8.length; i++) {
                // i番目のラジオボタンがチェックされているかを判定
                if (document.hForm.c8[i].checked) {
                    flag = true;
                    document.getElementById("select41").disabled = false;
                    document.getElementById("select42").disabled = false;
                    document.getElementById("select43").disabled = false;
                    document.getElementById("select44").disabled = false;
                    document.getElementById("select45").disabled = false;
                    document.getElementById("pass9").disabled = false;
                }
            }
            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select41").disabled = true;
                document.getElementById("select42").disabled = true;
                document.getElementById("select43").disabled = true;
                document.getElementById("select44").disabled = true;
                document.getElementById("select45").disabled = true;
                document.getElementById("pass9").disabled = true;
            }
        }

        function ask9() {
            var inps = document.iForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer1-9", parseInt(inp.value));
                    sessionStorage.setItem("snk9", parseInt(1, 10));
                }
            }

            if (document.iForm.c9[5].checked) {
                sessionStorage.setItem("pass9", parseInt(6, 10));
            } else {
                sessionStorage.setItem("pass9", 0)
            }

            for (var i = 0; i < document.iForm.c9.length; i++) {
                // i番目のラジオボタンがチェックされているかを判定
                if (document.iForm.c9[i].checked) {
                    flag = true;
                    document.getElementById("select46").disabled = false;
                    document.getElementById("select47").disabled = false;
                    document.getElementById("select48").disabled = false;
                    document.getElementById("select49").disabled = false;
                    document.getElementById("select50").disabled = false;
                    document.getElementById("pass10").disabled = false;
                }
            }
            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select46").disabled = true;
                document.getElementById("select47").disabled = true;
                document.getElementById("select48").disabled = true;
                document.getElementById("select49").disabled = true;
                document.getElementById("select50").disabled = true;
                document.getElementById("pass10").disabled = true;
            }
        }

        function ask10() {
            var inps = document.jForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer1-10", parseInt(inp.value));
                    sessionStorage.setItem("snk10", parseInt(1, 10));
                }
            }

            if (document.jForm.c10[5].checked) {
                sessionStorage.setItem("pass10", parseInt(6, 10));
            } else {
                sessionStorage.setItem("pass10", 0)
            }

            for (var i = 0; i < document.jForm.c10.length; i++) {
                // i番目のラジオボタンがチェックされているかを判定
                if (document.jForm.c10[i].checked) {
                    flag = true;
                    document.getElementById("next").disabled = false;
                }
            }
        }

        var tarea = [10];
        tarea[0] = 1;
        tarea[1] = 1;
        tarea[2] = 1;
        tarea[3] = 1;
        tarea[4] = 1;
        tarea[5] = 1;
        tarea[6] = 1;
        tarea[7] = 1;
        tarea[8] = 1;
        tarea[9] = 1;

        function saveContent() { //セッションストレージにテキストの内容を保存する関数
            if (tarea[0] == 1) {
                var textContent = document.getElementById("textarea");
                var value = textContent.value;
                sessionStorage.setItem("comment", value);
            } else if (tarea[0] == 0) {
                sessionStorage.setItem("comment", "解答なし");
            }

            if (tarea[1] == 1) {
                var textContent2 = document.getElementById("textarea2");
                var value = textContent2.value;
                sessionStorage.setItem("comment2", value);
            } else if (tarea[1] == 0) {
                sessionStorage.setItem("comment2", "解答なし");
            }

            if (tarea[2] == 1) {
                var textContent3 = document.getElementById("textarea3");
                var value = textContent3.value;
                sessionStorage.setItem("comment3", value);
            } else if (tarea[2] == 0) {
                sessionStorage.setItem("comment3", "解答なし");
            }

            if (tarea[3] == 1) {
                var textContent4 = document.getElementById("textarea4");
                var value = textContent4.value;
                sessionStorage.setItem("comment4", value);
            } else if (tarea[3] == 0) {
                sessionStorage.setItem("comment4", "解答なし");
            }

            if (tarea[4] == 1) {
                var textContent5 = document.getElementById("textarea5");
                var value = textContent5.value;
                sessionStorage.setItem("comment5", value);
            } else if (tarea[4] == 0) {
                sessionStorage.setItem("comment5", "解答なし");
            }

            if (tarea[5] == 1) {
                var textContent6 = document.getElementById("textarea6");
                var value = textContent6.value;
                sessionStorage.setItem("comment6", value);
            } else if (tarea[5] == 0) {
                sessionStorage.setItem("comment6", "解答なし");
            }

            if (tarea[6] == 1) {
                var textContent7 = document.getElementById("textarea7");
                var value = textContent7.value;
                sessionStorage.setItem("comment7", value);
            } else if (tarea[6] == 0) {
                sessionStorage.setItem("comment7", "解答なし");
            }

            if (tarea[7] == 1) {
                var textContent8 = document.getElementById("textarea8");
                var value = textContent8.value;
                sessionStorage.setItem("comment8", value);
            } else if (tarea[7] == 0) {
                sessionStorage.setItem("comment8", "解答なし");
            }

            if (tarea[8] == 1) {
                var textContent9 = document.getElementById("textarea9");
                var value = textContent9.value;
                sessionStorage.setItem("comment9", value);
            } else if (tarea[8] == 0) {
                sessionStorage.setItem("comment9", "解答なし");
            }

            if (tarea[9] == 1) {
                var textContent10 = document.getElementById("textarea10");
                var value = textContent10.value;
                sessionStorage.setItem("comment10", value);
            } else if (tarea[9] == 0) {
                sessionStorage.setItem("comment10", "解答なし");
            }
        }

        function cleartextarea() { //テキストエリアのクリアを行う関数
            if (tarea[0] == 0) {
                document.getElementById("textarea").innerText = "";
                tarea[0] = 1;
            }
        }

        function cleartextarea2() {
            if (tarea[1] == 0) {
                document.getElementById("textarea2").innerText = "";
                tarea[1] = 1;
            }
        }

        function cleartextarea3() {
            if (tarea[2] == 0) {
                document.getElementById("textarea3").innerText = "";
                tarea[2] = 1;
            }
        }

        function cleartextarea4() {
            if (tarea[3] == 0) {
                document.getElementById("textarea4").innerText = "";
                tarea[3] = 1;
            }
        }

        function cleartextarea5() {
            if (tarea[4] == 0) {
                document.getElementById("textarea5").innerText = "";
                tarea[4] = 1;
            }
        }

        function cleartextarea6() {
            if (tarea[5] == 0) {
                document.getElementById("textarea6").innerText = "";
                tarea[5] = 1;
            }
        }

        function cleartextarea7() {
            if (tarea[6] == 0) {
                document.getElementById("textarea7").innerText = "";
                tarea[6] = 1;
            }
        }

        function cleartextarea8() {
            if (tarea[7] == 0) {
                document.getElementById("textarea8").innerText = "";
                tarea[7] = 1;
            }
        }

        function cleartextarea9() {
            if (tarea[8] == 0) {
                document.getElementById("textarea9").innerText = "";
                tarea[8] = 1;
            }
        }

        function cleartextarea10() {
            if (tarea[9] == 0) {
                document.getElementById("textarea10").innerText = "";
                tarea[9] = 1;
            }
        }
    </script>
    <script src="jQuery.js"></script>
    <script>
        var num = 0;
        var num1 = 0;
        var num2 = 0;
        var num3 = 0;
        var num4 = 0;
        var num5 = 0;
        var num6 = 0;
        var num7 = 0;
        var num8 = 0;
        var num9 = 0;
        var num10 = 0;

        var checkaa = document.aaForm.select1.checked;
        if (checkaa == true) {
            num1++;
            num++;
        }
        var checkaa = document.aaForm.select2.checked;
        if (checkaa == true) {
            num1++;
            num++;
        }
        var checkaa = document.aaForm.select3.checked;
        if (checkaa == true) {
            num1++;
            num++;
        }
        var checkaa = document.aaForm.select4.checked;
        if (checkaa == true) {
            num1++;
            num++;
        }
        var checkaa = document.aaForm.select5.checked;
        if (checkaa == true) {
            num1++;
            num++;
        }
        var checkaa = document.bForm.select6.checked;
        if (checkaa == true) {
            num2++;
            num++;
        }
        var checkaa = document.bForm.select7.checked;
        if (checkaa == true) {
            num2++;
            num++;
        }
        var checkaa = document.bForm.select8.checked;
        if (checkaa == true) {
            num2++;
            num++;
        }
        var checkaa = document.bForm.select9.checked;
        if (checkaa == true) {
            num2++;
            num++;
        }
        var checkaa = document.bForm.select10.checked;
        if (checkaa == true) {
            num2++;
            num++;
        }
        var checkaa = document.cForm.select11.checked;
        if (checkaa == true) {
            num3++;
            num++;
        }
        var checkaa = document.cForm.select12.checked;
        if (checkaa == true) {
            num3++;
            num++;
        }
        var checkaa = document.cForm.select13.checked;
        if (checkaa == true) {
            num3++;
            num++;
        }
        var checkaa = document.cForm.select14.checked;
        if (checkaa == true) {
            num3++;
            num++;
        }
        var checkaa = document.cForm.select15.checked;
        if (checkaa == true) {
            num3++;
            num++;
        }
        var checkaa = document.dForm.select16.checked;
        if (checkaa == true) {
            num4++;
            num++;
        }
        var checkaa = document.dForm.select17.checked;
        if (checkaa == true) {
            num4++;
            num++;
        }
        var checkaa = document.dForm.select18.checked;
        if (checkaa == true) {
            num4++;
            num++;
        }
        var checkaa = document.dForm.select19.checked;
        if (checkaa == true) {
            num4++;
            num++;
        }
        var checkaa = document.dForm.select20.checked;
        if (checkaa == true) {
            num4++;
            num++;
        }
        var checkaa = document.eForm.select21.checked;
        if (checkaa == true) {
            num5++;
            num++;
        }
        var checkaa = document.eForm.select22.checked;
        if (checkaa == true) {
            num5++;
            num++;
        }
        var checkaa = document.eForm.select23.checked;
        if (checkaa == true) {
            num5++;
            num++;
        }
        var checkaa = document.eForm.select24.checked;
        if (checkaa == true) {
            num5++;
            num++;
        }
        var checkaa = document.eForm.select25.checked;
        if (checkaa == true) {
            num5++;
            num++;
        }
        var checkaa = document.fForm.select26.checked;
        if (checkaa == true) {
            num6++;
            num++;
        }
        var checkaa = document.fForm.select27.checked;
        if (checkaa == true) {
            num6++;
            num++;
        }
        var checkaa = document.fForm.select28.checked;
        if (checkaa == true) {
            num6++;
            num++;
        }
        var checkaa = document.fForm.select29.checked;
        if (checkaa == true) {
            num6++;
            num++;
        }
        var checkaa = document.fForm.select30.checked;
        if (checkaa == true) {
            num6++;
            num++;
        }
        var checkaa = document.gForm.select31.checked;
        if (checkaa == true) {
            num7++;
            num++;
        }
        var checkaa = document.gForm.select32.checked;
        if (checkaa == true) {
            num7++;
            num++;
        }
        var checkaa = document.gForm.select33.checked;
        if (checkaa == true) {
            num7++;
            num++;
        }
        var checkaa = document.gForm.select34.checked;
        if (checkaa == true) {
            num7++;
            num++;
        }
        var checkaa = document.gForm.select35.checked;
        if (checkaa == true) {
            num7++;
            num++;
        }
        var checkaa = document.hForm.select36.checked;
        if (checkaa == true) {
            num8++;
            num++;
        }
        var checkaa = document.hForm.select37.checked;
        if (checkaa == true) {
            num8++;
            num++;
        }
        var checkaa = document.hForm.select38.checked;
        if (checkaa == true) {
            num8++;
            num++;
        }
        var checkaa = document.hForm.select39.checked;
        if (checkaa == true) {
            num8++;
            num++;
        }
        var checkaa = document.hForm.select40.checked;
        if (checkaa == true) {
            num8++;
            num++;
        }
        var checkaa = document.iForm.select41.checked;
        if (checkaa == true) {
            num9++;
            num++;
        }
        var checkaa = document.iForm.select42.checked;
        if (checkaa == true) {
            num9++;
            num++;
        }
        var checkaa = document.iForm.select43.checked;
        if (checkaa == true) {
            num9++;
            num++;
        }
        var checkaa = document.iForm.select44.checked;
        if (checkaa == true) {
            num9++;
            num++;
        }
        var checkaa = document.iForm.select45.checked;
        if (checkaa == true) {
            num9++;
            num++;
        }
        var checkaa = document.jForm.select46.checked;
        if (checkaa == true) {
            num10++;
            num++;
        }
        var checkaa = document.jForm.select47.checked;
        if (checkaa == true) {
            num10++;
            num++;
        }
        var checkaa = document.jForm.select48.checked;
        if (checkaa == true) {
            num10++;
            num++;
        }
        var checkaa = document.jForm.select49.checked;
        if (checkaa == true) {
            num10++;
            num++;
        }
        var checkaa = document.jForm.select50.checked;
        if (checkaa == true) {
            num10++;
            num++;
        }

        $(function() {
            $('#progress1').attr("value", num);
            $("[name=c1]").one('click', function() {
                if (num1 == 0) {
                    num1++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=c2]").one('click', function() {
                if (num2 == 0) {
                    num2++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=c3]").one('click', function() {
                if (num3 == 0) {
                    num3++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=c4]").one('click', function() {
                if (num4 == 0) {
                    num4++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=c5]").one('click', function() {
                if (num5 == 0) {
                    num5++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=c6]").one('click', function() {
                if (num6 == 0) {
                    num6++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=c7]").one('click', function() {
                if (num7 == 0) {
                    num7++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=c8]").one('click', function() {
                if (num8 == 0) {
                    num8++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=c9]").one('click', function() {
                if (num9 == 0) {
                    num9++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=c10]").one('click', function() {
                if (num10 == 0) {
                    num10++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
        });
    </script>

    <!--input type="radio"name="c1" id="select1" value="1"onclick="ask59()">
<label for="select1">合計</label-->


    <form id="submitform" method="post" action="dbsave.php">
        <input type="hidden" name="Answers" id="Answers">
        <input type="submit" name="society" value="次へ" class="btn-gradient-3d-simple2">
        <input type="submit" name="progress" id="next" value="進行度確認へ" class="btn-gradient-3d-simple">
    </form>

    <script>
        window.onload = function() {
            var form = document.getElementById('submitform');
            form.addEventListener('submit', function() {
                saveContent();
                var Answers = document.getElementById('Answers');
                var Answer = new Array(sessionStorage.getItem("Answer1-1"),
                    sessionStorage.getItem("Answer1-2"),
                    sessionStorage.getItem("Answer1-3"),
                    sessionStorage.getItem("Answer1-4"),
                    sessionStorage.getItem("Answer1-5"),
                    sessionStorage.getItem("Answer1-6"),
                    sessionStorage.getItem("Answer1-7"),
                    sessionStorage.getItem("Answer1-8"),
                    sessionStorage.getItem("Answer1-9"),
                    sessionStorage.getItem("Answer1-10"),
                    sessionStorage.getItem("comment"),
                    sessionStorage.getItem("comment2"),
                    sessionStorage.getItem("comment3"),
                    sessionStorage.getItem("comment4"),
                    sessionStorage.getItem("comment5"),
                    sessionStorage.getItem("comment6"),
                    sessionStorage.getItem("comment7"),
                    sessionStorage.getItem("comment8"),
                    sessionStorage.getItem("comment9"),
                    sessionStorage.getItem("comment10"),
                    2);
                Answers.value = JSON.stringify(Answer);
            });
        }

        function small() {
            sessionStorage.setItem('size', 0);
            document.body.style.fontSize = 150 + '%';
            for (i = 1; i < 11; i++) {
                document.getElementById("t" + i).style.fontSize = 125 + '%';
            }
            for (j = 1; j < 51; j++) {
                document.getElementById("sizelabel" + j).style.fontSize = 125 + '%';
            }
            for (k = 1; k < 11; k++) {
                document.getElementById("passlabel" + k).style.fontSize = 125 + '%';
            }
            for (l = 1; l < 11; l++) {
                if (l == 1) {
                    document.getElementById("textarea").style.fontSize = 120 + '%';
                } else if (1 < l) {
                    document.getElementById("textarea" + l).style.fontSize = 120 + '%';
                }
            }
        }

        //文字サイズを普通にする
        function medium() {
            sessionStorage.setItem('size', 1);
            document.body.style.fontSize = 165 + '%';
            for (i = 1; i < 11; i++) {
                document.getElementById("t" + i).style.fontSize = 140 + '%';
            }
            for (j = 1; j < 51; j++) {
                document.getElementById("sizelabel" + j).style.fontSize = 140 + '%';
            }
            for (k = 1; k < 11; k++) {
                document.getElementById("passlabel" + k).style.fontSize = 140 + '%';
            }
            for (l = 1; l < 11; l++) {
                if (l == 1) {
                    document.getElementById("textarea").style.fontSize = 130 + '%';
                } else if (1 < l) {
                    document.getElementById("textarea" + l).style.fontSize = 130 + '%';
                }
            }
        }

        //文字サイズを大きくする
        function large() {
            sessionStorage.setItem('size', 2);
            document.body.style.fontSize = 180 + '%';
            for (i = 1; i < 11; i++) {
                document.getElementById("t" + i).style.fontSize = 155 + '%';
            }
            for (j = 1; j < 51; j++) {
                document.getElementById("sizelabel" + j).style.fontSize = 155 + '%';
            }
            for (k = 1; k < 11; k++) {
                document.getElementById("passlabel" + k).style.fontSize = 155 + '%';
            }
            for (l = 1; l < 11; l++) {
                if (l == 1) {
                    document.getElementById("textarea").style.fontSize = 140 + '%';
                } else if (1 < l) {
                    document.getElementById("textarea" + l).style.fontSize = 140 + '%';
                }
            }
        }

        if (sessionStorage.getItem("size") == 0) {
            small();
        } else if (sessionStorage.getItem("size") == 1) {
            medium();
        } else if (sessionStorage.getItem("size") == 2) {
            large();
        }
    </script>
</body>

</html>