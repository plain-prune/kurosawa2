<?php
session_start();
require('dbconnect.php');
$data = dbroad(7);
db_js($data, 7);
?>
<html>

<head>
    <title>自分メーター</title>
    <link rel="stylesheet" href="css_file/design.css">
</head>

<body>
    <label for="file"><ruby>進行度<rt>しんこうど</rt></ruby>:</label>
    <progress id="progress1" max="10" value=""></progress>
    <p></p>
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
                <h1 id=idh1>6.<ruby>身<rt>み</rt></ruby>のまわり</h1>
                <hr class="cp_hr06">
                </hr>
                <th id="t1">①<ruby>朝<rt>あさ</rt></ruby>、きちんと<ruby>起<rt>お</rt></ruby>きることができます。</th>

                <form name="aaForm" id=aa>
                    <td id="t11">
                        <div class="sample">
                            <input type="radio" name="h1" id="select1" value="1" onclick="ask()">
                            <label for="select1" id="sizelabel1">１</label>
                            <input type="radio" name="h1" id="select2" value="2" onclick="ask()">
                            <label for="select2" id="sizelabel2">２</label>
                            <input type="radio" name="h1" id="select3" value="3" onclick="ask()">
                            <label for="select3" id="sizelabel3">３</label>
                            <input type="radio" name="h1" id="select4" value="4" onclick="ask()">
                            <label for="select4" id="sizelabel4">４</label>
                            <input type="radio" name="h1" id="select5" value="5" onclick="ask()">
                            <label for="select5" id="sizelabel5">５</label>
                            <input type="radio" name="h1" id="pass51" value="0" onclick="ask()">
                            <label for="pass51" id="passlabel1">パス</label>
                    <td  id="t21"><input type="text" id="textarea" class="textbox" placeholder="ここにテキストを入力">
                        <script>
                            var e = document.getElementById('textarea');
                            e.value = sessionStorage.getItem("comment51");
                        </script>
    </div>
    </td>

    </form>
    </tr>
    <form name="bForm" id=b>
        <tr>
            <th id="t2">②<ruby>睡眠<rt>すいみん</rt></ruby>をきちんととっています。</th>
            <td id="t12">
                <div class="sample">
                    <input type="radio" name="h2" id="select6" value="1" onclick="ask2()">
                    <label for="select6" id="sizelabel6">１</label>
                    <input type="radio" name="h2" id="select7" value="2" onclick="ask2()">
                    <label for="select7" id="sizelabel7">２</label>
                    <input type="radio" name="h2" id="select8" value="3" onclick="ask2()">
                    <label for="select8" id="sizelabel8">３</label>
                    <input type="radio" name="h2" id="select9" value="4" onclick="ask2()">
                    <label for="select9" id="sizelabel9">４</label>
                    <input type="radio" name="h2" id="select10" value="5" onclick="ask2()">
                    <label for="select10" id="sizelabel10">５</label>
                    <input type="radio" name="h2" id="pass52" value="0" onclick="ask2()">
                    <label for="pass52" id="passlabel2">パス</label>
            <td  id="t22"><input type="text" id="textarea2" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea2');
                    e.value = sessionStorage.getItem("comment52");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="cForm" id=c>
        <tr>
            <th id="t3">③<ruby>食事<rt>しょくじ</rt></ruby>は<ruby>三食<rt>さんしょく</rt></ruby>とっています。</th>
            <td id="t13">
                <div class="sample">
                    <input type="radio" name="h3" id="select11" value="1" onclick="ask3()">
                    <label for="select11" id="sizelabel11">１</label>
                    <input type="radio" name="h3" id="select12" value="2" onclick="ask3()">
                    <label for="select12" id="sizelabel12">２</label>
                    <input type="radio" name="h3" id="select13" value="3" onclick="ask3()">
                    <label for="select13" id="sizelabel13">３</label>
                    <input type="radio" name="h3" id="select14" value="4" onclick="ask3()">
                    <label for="select14" id="sizelabel14">４</label>
                    <input type="radio" name="h3" id="select15" value="5" onclick="ask3()">
                    <label for="select15" id="sizelabel15">５</label>
                    <input type="radio" name="h3" id="pass53" value="0" onclick="ask3()">
                    <label for="pass53" id="passlabel3">パス</label>
            <td  id="t23"><input type="text" id="textarea3" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea3');
                    e.value = sessionStorage.getItem("comment53");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="dForm" id=d>
        <tr>
            <th id="t4">④<ruby>食<rt>た</rt></ruby>べ<ruby>物<rt>もの</rt></ruby>の<ruby>好<rt>す</rt></ruby>き<ruby>嫌<rt>きら</rt></ruby>いはありません。（アレルギーは<ruby>除<rt>のぞ</rt></ruby>く）</th>
            <td id="t14">
                <div class="sample">
                    <input type="radio" name="h4" id="select16" value="1" onclick="ask4()">
                    <label for="select16" id="sizelabel16">１</label>
                    <input type="radio" name="h4" id="select17" value="2" onclick="ask4()">
                    <label for="select17" id="sizelabel17">２</label>
                    <input type="radio" name="h4" id="select18" value="3" onclick="ask4()">
                    <label for="select18" id="sizelabel18">３</label>
                    <input type="radio" name="h4" id="select19" value="4" onclick="ask4()">
                    <label for="select19" id="sizelabel19">４</label>
                    <input type="radio" name="h4" id="select20" value="5" onclick="ask4()">
                    <label for="select20" id="sizelabel20">５</label>
                    <input type="radio" name="h4" id="pass54" value="0" onclick="ask4()">
                    <label for="pass54" id="passlabel4">パス</label>
            <td id="t24"><input type="text" id="textarea4" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea4');
                    e.value = sessionStorage.getItem("comment54");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="eForm" id=e>
        <tr>
            <th id="t5">⑤<ruby>自分<rt>じぶん</rt></ruby>の<ruby>体調<rt>たいちょう</rt></ruby>や<ruby>病状<rt>びょうじょう</rt></ruby>をわかっています。</th>
            <td id="t15">
                <div class="sample">
                    <input type="radio" name="h5" id="select21" value="1" onclick="ask5()">
                    <label for="select21" id="sizelabel21">１</label>
                    <input type="radio" name="h5" id="select22" value="2" onclick="ask5()">
                    <label for="select22" id="sizelabel22">２</label>
                    <input type="radio" name="h5" id="select23" value="3" onclick="ask5()">
                    <label for="select23" id="sizelabel23">３</label>
                    <input type="radio" name="h5" id="select24" value="4" onclick="ask5()">
                    <label for="select24" id="sizelabel24">４</label>
                    <input type="radio" name="h5" id="select25" value="5" onclick="ask5()">
                    <label for="select25" id="sizelabel25">５</label>
                    <input type="radio" name="h5" id="pass55" value="0" onclick="ask5()">
                    <label for="pass55" id="passlabel5">パス</label>
            <td  id="t25"><input type="text" id="textarea5" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea5');
                    e.value = sessionStorage.getItem("comment55");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="fForm" id=f>
        <tr>
            <th id="t6">⑥<ruby>薬<rt>くすり</rt></ruby>を<ruby>自分<rt>じぶん</rt></ruby>で<ruby>管理<rt>かんり</rt></ruby>できます。<br>（<ruby>必要<rt>ひつよう</rt></ruby>な<ruby>時<rt>とき</rt></ruby>に<ruby>飲<rt>の</rt></ruby>むことができます。）</th>
            <td id="t16">
                <div class="sample">
                    <input type="radio" name="h6" id="select26" value="1" onclick="ask6()">
                    <label for="select26" id="sizelabel26">１</label>
                    <input type="radio" name="h6" id="select27" value="2" onclick="ask6()">
                    <label for="select27" id="sizelabel27">２</label>
                    <input type="radio" name="h6" id="select28" value="3" onclick="ask6()">
                    <label for="select28" id="sizelabel28">３</label>
                    <input type="radio" name="h6" id="select29" value="4" onclick="ask6()">
                    <label for="select29" id="sizelabel29">４</label>
                    <input type="radio" name="h6" id="select30" value="5" onclick="ask6()">
                    <label for="select30" id="sizelabel30">５</label>
                    <input type="radio" name="h6" id="pass56" value="0" onclick="ask6()">
                    <label for="pass56" id="passlabel6">パス</label>
            <td id="t26"><input type="text" id="textarea6" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea6');
                    e.value = sessionStorage.getItem("comment56");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="gForm" id=g>
        <tr>
            <th id="t7">⑦<ruby>季節<rt>きせつ</rt></ruby>や<ruby>目的<rt>もくてき</rt></ruby>に<ruby>合<rt>あ</rt></ruby>った<ruby>持<rt>も</rt></ruby>ち<ruby>物<rt>もの</rt></ruby>の<ruby>準備<rt>じゅんび</rt></ruby>や<ruby>服装<rt>ふくそう</rt></ruby>ができます。</th>
            <td id="t17">
                <div class="sample">
                    <input type="radio" name="h7" id="select31" value="1" onclick="ask7()">
                    <label for="select31" id="sizelabel31">１</label>
                    <input type="radio" name="h7" id="select32" value="2" onclick="ask7()">
                    <label for="select32" id="sizelabel32">２</label>
                    <input type="radio" name="h7" id="select33" value="3" onclick="ask7()">
                    <label for="select33" id="sizelabel33">３</label>
                    <input type="radio" name="h7" id="select34" value="4" onclick="ask7()">
                    <label for="select34" id="sizelabel34">４</label>
                    <input type="radio" name="h7" id="select35" value="5" onclick="ask7()">
                    <label for="select35" id="sizelabel35">５</label>
                    <input type="radio" name="h7" id="pass57" value="0" onclick="ask7()">
                    <label for="pass57" id="passlabel7">パス</label>
            <td  id="t27"><input type="text" id="textarea7" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea7');
                    e.value = sessionStorage.getItem("comment57");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="hForm" id=h>
        <tr>
            <th id="t8">⑧<ruby>身<rt>み</rt></ruby>だしなみ（<ruby>洗顔<rt>せんがん</rt></ruby>・<ruby>歯磨<rt>はみが</rt></ruby>き・<ruby>入浴<rt>にゅうよく</rt></ruby>・<ruby>洗髪<rt>せんぱつ</rt></ruby>など）に<br><ruby>気<rt>き</rt></ruby>を<ruby>付<rt>つ</rt></ruby>けられます。</th>
            <td id="t18">
                <div class="sample">
                    <input type="radio" name="h8" id="select36" value="1" onclick="ask8()">
                    <label for="select36" id="sizelabel36">１</label>
                    <input type="radio" name="h8" id="select37" value="2" onclick="ask8()">
                    <label for="select37" id="sizelabel37">２</label>
                    <input type="radio" name="h8" id="select38" value="3" onclick="ask8()">
                    <label for="select38" id="sizelabel38">３</label>
                    <input type="radio" name="h8" id="select39" value="4" onclick="ask8()">
                    <label for="select39" id="sizelabel39">４</label>
                    <input type="radio" name="h8" id="select40" value="5" onclick="ask8()">
                    <label for="select40" id="sizelabel40">５</label>
                    <input type="radio" name="h8" id="pass58" value="0" onclick="ask8()">
                    <label for="pass58" id="passlabel8">パス</label>
            <td  id="t28"><input type="text" id="textarea8" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea8');
                    e.value = sessionStorage.getItem("comment58");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="iForm" id=i>
        <tr>
            <th id="t9">⑨<ruby>気持<rt>きも</rt></ruby>ちの<ruby>支<rt>ささ</rt></ruby>えになる<ruby>存在<rt>そんざい</rt></ruby>やものがあります。</th>
            <td id="t19">
                <div class="sample">
                    <input type="radio" name="h9" id="select41" value="1" onclick="ask9()">
                    <label for="select41" id="sizelabel41">１</label>
                    <input type="radio" name="h9" id="select42" value="2" onclick="ask9()">
                    <label for="select42" id="sizelabel42">２</label>
                    <input type="radio" name="h9" id="select43" value="3" onclick="ask9()">
                    <label for="select43" id="sizelabel43">３</label>
                    <input type="radio" name="h9" id="select44" value="4" onclick="ask9()">
                    <label for="select44" id="sizelabel44">４</label>
                    <input type="radio" name="h9" id="select45" value="5" onclick="ask9()">
                    <label for="select45" id="sizelabel45">５</label>
                    <input type="radio" name="h9" id="pass59" value="0" onclick="ask9()">
                    <label for="pass59" id="passlabel9">パス</label>
            <td  id="t29"><input type="text" id="textarea9" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea9');
                    e.value = sessionStorage.getItem("comment59");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="jForm" id=j>
        <tr>
            <th id="t10">⑩<ruby>自分<rt>じぶん</rt></ruby>なりのストレス<ruby>対処法<rt>たいしょほう</rt></ruby>があります。</th>
            <td id="t20">
                <div class="sample">
                    <input type="radio" name="h10" id="select46" value="1" onclick="ask10()">
                    <label for="select46" id="sizelabel46">１</label>
                    <input type="radio" name="h10" id="select47" value="2" onclick="ask10()">
                    <label for="select47" id="sizelabel47">２</label>
                    <input type="radio" name="h10" id="select48" value="3" onclick="ask10()">
                    <label for="select48" id="sizelabel48">３</label>
                    <input type="radio" name="h10" id="select49" value="4" onclick="ask10()">
                    <label for="select49" id="sizelabel49">４</label>
                    <input type="radio" name="h10" id="select50" value="5" onclick="ask10()">
                    <label for="select50" id="sizelabel50">５</label>
                    <input type="radio" name="h10" id="pass60" value="0" onclick="ask10()">
                    <label for="pass60" id="passlabel10">パス</label>
            <td  id="t30"><input type="text" id="textarea10" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea10');
                    e.value = sessionStorage.getItem("comment60");
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
        var elements1 = element1.h1;
        var elements2 = element2.h2;
        var elements3 = element3.h3;
        var elements4 = element4.h4;
        var elements5 = element5.h5;
        var elements6 = element6.h6;
        var elements7 = element7.h7;
        var elements8 = element8.h8;
        var elements9 = element9.h9;
        var elements10 = element10.h10;
        var haa = sessionStorage.getItem("Answer6-1");
        var hab = sessionStorage.getItem("Answer6-2");
        var hac = sessionStorage.getItem("Answer6-3");
        var had = sessionStorage.getItem("Answer6-4");
        var hae = sessionStorage.getItem("Answer6-5");
        var haf = sessionStorage.getItem("Answer6-6");
        var hag = sessionStorage.getItem("Answer6-7");
        var hah = sessionStorage.getItem("Answer6-8");
        var hai = sessionStorage.getItem("Answer6-9");
        var haj = sessionStorage.getItem("Answer6-10");

        haa = haa - 1;
        hab = hab - 1;
        hac = hac - 1;
        had = had - 1;
        hae = hae - 1;
        haf = haf - 1;
        hag = hag - 1;
        hah = hah - 1;
        hai = hai - 1;
        haj = haj - 1;

        if (isNaN(haa) == true) {
            sessionStorage.setItem("Answer6-1", 0);
        }

        if (isNaN(hab) == true) {
            sessionStorage.setItem("Answer6-2", 0);
        }

        if (isNaN(hac) == true) {
            sessionStorage.setItem("Answer6-3", 0);
        }

        if (isNaN(had) == true) {
            sessionStorage.setItem("Answer6-4", 0);
        }

        if (isNaN(hae) == true) {
            sessionStorage.setItem("Answer6-5", 0);
        }

        if (isNaN(haf) == true) {
            sessionStorage.setItem("Answer6-6", 0);
        }

        if (isNaN(hag) == true) {
            sessionStorage.setItem("Answer6-7", 0);
        }

        if (isNaN(hah) == true) {
            sessionStorage.setItem("Answer6-8", 0);
        }

        if (isNaN(hai) == true) {
            sessionStorage.setItem("Answer6-9", 0);
        }

        if (isNaN(haj) == true) {
            sessionStorage.setItem("Answer6-10", 0);
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

        if ((0 <= haa) && (haa < 7)) {
            elements1[haa].checked = true
        } else {
            ;
        }

        if ((0 <= hab) && (hab < 7)) {
            elements2[hab].checked = true
        } else {
            ;
        }

        if ((0 <= hac) && (hac < 7)) {
            elements3[hac].checked = true
        } else {
            ;
        }

        if ((0 <= had) && (had < 7)) {
            elements4[had].checked = true
        } else {
            e;
        }

        if ((0 <= hae) && (hae < 7)) {
            elements5[hae].checked = true
        } else {
            ;
        }

        if ((0 <= haf) && (haf < 7)) {
            elements6[haf].checked = true
        } else {
            ;
        }

        if ((0 <= hag) && (hag < 7)) {
            elements7[hag].checked = true
        } else {
            ;
        }

        if ((0 <= hah) && (hah < 7)) {
            elements8[hah].checked = true
        } else {
            ;
        }

        if ((0 <= hai) && (hai < 7)) {
            elements9[hai].checked = true
        } else {
            ;
        }

        if ((0 <= haj) && (haj < 7)) {
            elements10[haj].checked = true
        } else {
            ;
        }
        var set = 0;

        function ask() {
            var inps = document.aaForm.elements;
            var flag = false;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer6-1", parseInt(inp.value));
                    sessionStorage.setItem("snk51", 1);
                }
            }
            if (document.aaForm.h1[5].checked) {

                sessionStorage.setItem("pass51", 1);
            } else {
                sessionStorage.setItem("pass51", 0)
            }
            for (var i = 0; i < document.aaForm.h1.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.aaForm.h1[i].checked) {
                    flag = true;
                    document.getElementById("select6").disabled = false;
                    document.getElementById("select7").disabled = false;
                    document.getElementById("select8").disabled = false;
                    document.getElementById("select9").disabled = false;
                    document.getElementById("select10").disabled = false;
                    document.getElementById("pass52").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select6").disabled = true;
                document.getElementById("select7").disabled = true;
                document.getElementById("select8").disabled = true;
                document.getElementById("select9").disabled = true;
                document.getElementById("select10").disabled = true;
                document.getElementById("pass52").disabled = true;
            }

        }

        function ask2() {
            var inps = document.bForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer6-2", parseInt(inp.value));
                    sessionStorage.setItem("snk52", 1);
                }
            }
            if (document.bForm.h2[5].checked) {

                sessionStorage.setItem("pass52", 1);
            } else {
                sessionStorage.setItem("pass52", 0)
            }
            for (var i = 0; i < document.bForm.h2.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.bForm.h2[i].checked) {
                    flag = true;
                    document.getElementById("select11").disabled = false;
                    document.getElementById("select12").disabled = false;
                    document.getElementById("select13").disabled = false;
                    document.getElementById("select14").disabled = false;
                    document.getElementById("select15").disabled = false;
                    document.getElementById("pass53").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select11").disabled = true;
                document.getElementById("select12").disabled = true;
                document.getElementById("select13").disabled = true;
                document.getElementById("select14").disabled = true;
                document.getElementById("select15").disabled = true;
                document.getElementById("pass53").disabled = true;
            }

        }

        function ask3() {
            var inps = document.cForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer6-3", parseInt(inp.value));
                    sessionStorage.setItem("snk53", 1);
                }
            }
            if (document.cForm.h3[5].checked) {

                sessionStorage.setItem("pass53", 1);
            } else {
                sessionStorage.setItem("pass53", 0)
            }
            for (var i = 0; i < document.cForm.h3.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.cForm.h3[i].checked) {
                    flag = true;
                    document.getElementById("select16").disabled = false;
                    document.getElementById("select17").disabled = false;
                    document.getElementById("select18").disabled = false;
                    document.getElementById("select19").disabled = false;
                    document.getElementById("select20").disabled = false;
                    document.getElementById("pass54").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select16").disabled = true;
                document.getElementById("select17").disabled = true;
                document.getElementById("select18").disabled = true;
                document.getElementById("select19").disabled = true;
                document.getElementById("select20").disabled = true;
                document.getElementById("pass54").disabled = true;
            }

        }

        function ask4() {
            var inps = document.dForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer6-4", parseInt(inp.value));
                    sessionStorage.setItem("snk54", 1);
                }
            }
            if (document.dForm.h4[5].checked) {

                sessionStorage.setItem("pass54", 1);
            } else {
                sessionStorage.setItem("pass54", 0)
            }
            for (var i = 0; i < document.dForm.h4.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.dForm.h4[i].checked) {
                    flag = true;
                    document.getElementById("select21").disabled = false;
                    document.getElementById("select22").disabled = false;
                    document.getElementById("select23").disabled = false;
                    document.getElementById("select24").disabled = false;
                    document.getElementById("select25").disabled = false;
                    document.getElementById("pass55").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select21").disabled = true;
                document.getElementById("select22").disabled = true;
                document.getElementById("select23").disabled = true;
                document.getElementById("select24").disabled = true;
                document.getElementById("select25").disabled = true;
                document.getElementById("pass55").disabled = true;
            }

        }

        function ask5() {
            var inps = document.eForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer6-5", parseInt(inp.value));
                    sessionStorage.setItem("snk55", 1);
                }
            }
            if (document.eForm.h5[5].checked) {

                sessionStorage.setItem("pass55", 1);
            } else {
                sessionStorage.setItem("pass55", 0)
            }
            for (var i = 0; i < document.eForm.h5.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.eForm.h5[i].checked) {
                    flag = true;
                    document.getElementById("select26").disabled = false;
                    document.getElementById("select27").disabled = false;
                    document.getElementById("select28").disabled = false;
                    document.getElementById("select29").disabled = false;
                    document.getElementById("select30").disabled = false;
                    document.getElementById("pass56").disabled = false;
                }
            }
            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select26").disabled = true;
                document.getElementById("select27").disabled = true;
                document.getElementById("select28").disabled = true;
                document.getElementById("select29").disabled = true;
                document.getElementById("select30").disabled = true;
                document.getElementById("pass56").disabled = true;
            }
        }

        function ask6() {
            var inps = document.fForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer6-6", parseInt(inp.value));
                    sessionStorage.setItem("snk56", 1);
                }
            }
            if (document.fForm.h6[5].checked) {

                sessionStorage.setItem("pass56", 1);
            } else {
                sessionStorage.setItem("pass56", 0)
            }
            for (var i = 0; i < document.fForm.h6.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.fForm.h6[i].checked) {
                    flag = true;
                    document.getElementById("select31").disabled = false;
                    document.getElementById("select32").disabled = false;
                    document.getElementById("select33").disabled = false;
                    document.getElementById("select34").disabled = false;
                    document.getElementById("select35").disabled = false;
                    document.getElementById("pass57").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select31").disabled = true;
                document.getElementById("select32").disabled = true;
                document.getElementById("select33").disabled = true;
                document.getElementById("select34").disabled = true;
                document.getElementById("select35").disabled = true;
                document.getElementById("pass57").disabled = true;
            }
        }

        function ask7() {
            var inps = document.gForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer6-7", parseInt(inp.value));
                    sessionStorage.setItem("snk57", 1);
                }
            }
            if (document.gForm.h7[5].checked) {

                sessionStorage.setItem("pass57", 1);
            } else {
                sessionStorage.setItem("pass57", 0)
            }
            for (var i = 0; i < document.gForm.h7.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.gForm.h7[i].checked) {
                    flag = true;
                    document.getElementById("select36").disabled = false;
                    document.getElementById("select37").disabled = false;
                    document.getElementById("select38").disabled = false;
                    document.getElementById("select39").disabled = false;
                    document.getElementById("select40").disabled = false;
                    document.getElementById("pass58").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select36").disabled = true;
                document.getElementById("select37").disabled = true;
                document.getElementById("select38").disabled = true;
                document.getElementById("select39").disabled = true;
                document.getElementById("select40").disabled = true;
                document.getElementById("pas58").disabled = true;
            }

        }

        function ask8() {
            var inps = document.hForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer6-8", parseInt(inp.value));
                    sessionStorage.setItem("snk58", 1);
                }
            }
            if (document.hForm.h8[5].checked) {

                sessionStorage.setItem("pass58", 1);
            } else {
                sessionStorage.setItem("pass58", 0)
            }
            for (var i = 0; i < document.hForm.h8.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.hForm.h8[i].checked) {
                    flag = true;
                    document.getElementById("select41").disabled = false;
                    document.getElementById("select42").disabled = false;
                    document.getElementById("select43").disabled = false;
                    document.getElementById("select44").disabled = false;
                    document.getElementById("select45").disabled = false;
                    document.getElementById("pass59").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select41").disabled = true;
                document.getElementById("select42").disabled = true;
                document.getElementById("select43").disabled = true;
                document.getElementById("select44").disabled = true;
                document.getElementById("select45").disabled = true;
                document.getElementById("pass59").disabled = true;
            }

        }

        function ask9() {
            var inps = document.iForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer6-9", parseInt(inp.value));
                    sessionStorage.setItem("snk59", 1);
                }
            }
            if (document.iForm.h9[5].checked) {

                sessionStorage.setItem("pass59", 1);
            } else {
                sessionStorage.setItem("pass59", 0)
            }
            for (var i = 0; i < document.iForm.h9.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.iForm.h9[i].checked) {
                    flag = true;
                    document.getElementById("select46").disabled = false;
                    document.getElementById("select47").disabled = false;
                    document.getElementById("select48").disabled = false;
                    document.getElementById("select49").disabled = false;
                    document.getElementById("select50").disabled = false;
                    document.getElementById("pass60").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select46").disabled = true;
                document.getElementById("select47").disabled = true;
                document.getElementById("select48").disabled = true;
                document.getElementById("select49").disabled = true;
                document.getElementById("select50").disabled = true;
                document.getElementById("pass60").disabled = true;
            }

        }

        function ask10() {
            var inps = document.jForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer6-10", parseInt(inp.value));
                    sessionStorage.setItem("snk60", 1);
                }
            }
            if (document.jForm.h10[5].checked) {

                sessionStorage.setItem("pass60", 1);
            } else {
                sessionStorage.setItem("pass60", 0)
            }
            for (var i = 0; i < document.jForm.h10.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.jForm.h10[i].checked) {
                    flag = true;
                    document.getElementById("next").disabled = false;

                }
            }

        }

        var sum = 0,
            sum2 = 0,
            sum3 = 0,
            sum4 = 0,
            sum5 = 0,
            sum6 = 0;
        var num = 0;
        var passdata1 = 0,
            passdata2 = 0,
            passdata3 = 0,
            passdata4 = 0,
            passdata5 = 0,
            passdata6 = 0;
        var pass1 = 0;
        var max = 0;
        name = sessionStorage.getItem("name");
        date = sessionStorage.getItem("date");
        var data = [59];
        data[0] = sessionStorage.getItem("Answer1-1");
        data[1] = sessionStorage.getItem("Answer1-2");
        data[2] = sessionStorage.getItem("Answer1-3");
        data[3] = sessionStorage.getItem("Answer1-4");
        data[4] = sessionStorage.getItem("Answer1-5");
        data[5] = sessionStorage.getItem("Answer1-6");
        data[6] = sessionStorage.getItem("Answer1-7");
        data[7] = sessionStorage.getItem("Answer1-8");
        data[8] = sessionStorage.getItem("Answer1-9");
        data[9] = sessionStorage.getItem("Answer1-10");
        //2ページ目
        data[10] = sessionStorage.getItem("Answer2-1");
        data[11] = sessionStorage.getItem("Answer2-2");
        data[12] = sessionStorage.getItem("Answer2-3");
        data[13] = sessionStorage.getItem("Answer2-4");
        data[14] = sessionStorage.getItem("Answer2-5");
        data[15] = sessionStorage.getItem("Answer2-6");
        data[16] = sessionStorage.getItem("Answer2-7");
        data[17] = sessionStorage.getItem("Answer2-8");
        data[18] = sessionStorage.getItem("Answer2-9");
        data[19] = sessionStorage.getItem("Answer2-10");
        //3ページ目
        data[20] = sessionStorage.getItem("Answer3-1");
        data[21] = sessionStorage.getItem("Answer3-2");
        data[22] = sessionStorage.getItem("Answer3-3");
        data[23] = sessionStorage.getItem("Answer3-4");
        data[24] = sessionStorage.getItem("Answer3-5");
        data[25] = sessionStorage.getItem("Answer3-6");
        data[26] = sessionStorage.getItem("Answer3-7");
        data[27] = sessionStorage.getItem("Answer3-8");
        data[28] = sessionStorage.getItem("Answer3-9");
        data[29] = sessionStorage.getItem("Answer3-10");
        //4ページ目
        data[30] = sessionStorage.getItem("Answer4-1");
        data[31] = sessionStorage.getItem("Answer4-2");
        data[32] = sessionStorage.getItem("Answer4-3");
        data[33] = sessionStorage.getItem("Answer4-4");
        data[34] = sessionStorage.getItem("Answer4-5");
        data[35] = sessionStorage.getItem("Answer4-6");
        data[36] = sessionStorage.getItem("Answer4-7");
        data[37] = sessionStorage.getItem("Answer4-8");
        data[38] = sessionStorage.getItem("Answer4-9");
        data[39] = sessionStorage.getItem("Answer4-10");
        //5ページ目
        data[40] = sessionStorage.getItem("Answer5-1");
        data[41] = sessionStorage.getItem("Answer5-2");
        data[42] = sessionStorage.getItem("Answer5-3");
        data[43] = sessionStorage.getItem("Answer5-4");
        data[44] = sessionStorage.getItem("Answer5-5");
        data[45] = sessionStorage.getItem("Answer5-6");
        data[46] = sessionStorage.getItem("Answer5-7");
        data[47] = sessionStorage.getItem("Answer5-8");
        data[48] = sessionStorage.getItem("Answer5-9");
        data[49] = sessionStorage.getItem("Answer5-10");
        //6ページ目
        data[50] = sessionStorage.getItem("Answer6-1");
        data[51] = sessionStorage.getItem("Answer6-2");
        data[52] = sessionStorage.getItem("Answer6-3");
        data[53] = sessionStorage.getItem("Answer6-4");
        data[54] = sessionStorage.getItem("Answer6-5");
        data[55] = sessionStorage.getItem("Answer6-6");
        data[56] = sessionStorage.getItem("Answer6-7");
        data[57] = sessionStorage.getItem("Answer6-8");
        data[58] = sessionStorage.getItem("Answer6-9");
        data[59] = sessionStorage.getItem("Answer6-10");

        for (var i = 0; i < 60; i++) {
            if (i <= 9) {
                sum += parseInt(data[i]);
            } else if (i <= 19) {
                sum2 += parseInt(data[i]);
            } else if (i <= 29) {
                sum3 += parseInt(data[i]);
            } else if (i <= 39) {
                sum4 += parseInt(data[i]);
            } else if (i <= 49) {
                sum5 += parseInt(data[i]);
            } else {
                sum6 += parseInt(data[i]);
            }


        }

        sum2 - sum;
        sum3 - (sum + sum2)
        sum4 - (sum + sum2 + sum3)
        sum5 - (sum + sum2 + sum3 + sum4)
        sum6 - (sum + sum2 + sum3 + sum4 + sum5)


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
                sessionStorage.setItem("comment51", value);
            } else if (tarea[0] == 0) {
                sessionStorage.setItem("comment51", "解答なし");
            }
            if (tarea[1] == 1) {
                var textContent2 = document.getElementById("textarea2");
                var value = textContent2.value;
                sessionStorage.setItem("comment52", value);
            } else if (tarea[1] == 0) {
                sessionStorage.setItem("comment52", "解答なし");
            }
            if (tarea[2] == 1) {
                var textContent3 = document.getElementById("textarea3");
                var value = textContent3.value;
                sessionStorage.setItem("comment53", value);
            } else if (tarea[2] == 0) {
                sessionStorage.setItem("comment53", "解答なし");
            }
            if (tarea[3] == 1) {
                var textContent4 = document.getElementById("textarea4");
                var value = textContent4.value;
                sessionStorage.setItem("comment54", value);
            } else if (tarea[3] == 0) {
                sessionStorage.setItem("comment54", "解答なし");
            }
            if (tarea[4] == 1) {
                var textContent5 = document.getElementById("textarea5");
                var value = textContent5.value;
                sessionStorage.setItem("comment55", value);
            } else if (tarea[4] == 0) {
                sessionStorage.setItem("comment55", "解答なし");
            }
            if (tarea[5] == 1) {
                var textContent6 = document.getElementById("textarea6");
                var value = textContent6.value;
                sessionStorage.setItem("comment56", value);
            } else if (tarea[5] == 0) {
                sessionStorage.setItem("comment56", "解答なし");
            }
            if (tarea[6] == 1) {
                var textContent7 = document.getElementById("textarea7");
                var value = textContent7.value;
                sessionStorage.setItem("comment57", value);
            } else if (tarea[6] == 0) {
                sessionStorage.setItem("comment57", "解答なし");
            }
            if (tarea[7] == 1) {
                var textContent8 = document.getElementById("textarea8");
                var value = textContent8.value;
                sessionStorage.setItem("comment58", value);
            } else if (tarea[7] == 0) {
                sessionStorage.setItem("comment58", "解答なし");
            }
            if (tarea[8] == 1) {
                var textContent9 = document.getElementById("textarea9");
                var value = textContent9.value;
                sessionStorage.setItem("comment59", value);
            } else if (tarea[8] == 0) {
                sessionStorage.setItem("comment59", "解答なし");
            }
            if (tarea[9] == 1) {
                var textContent10 = document.getElementById("textarea10");
                var value = textContent10.value;
                sessionStorage.setItem("comment60", value);
            } else if (tarea[9] == 0) {
                sessionStorage.setItem("comment60", "解答なし");
            }
            location.assign("progress_home.html");
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
            $("[name=h1]").one('click', function() {
                if (num1 == 0) {
                    num1++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=h2]").one('click', function() {
                if (num2 == 0) {
                    num2++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=h3]").one('click', function() {
                if (num3 == 0) {
                    num3++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=h4]").one('click', function() {
                if (num4 == 0) {
                    num4++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=h5]").one('click', function() {
                if (num5 == 0) {
                    num5++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=h6]").one('click', function() {
                if (num6 == 0) {
                    num6++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=h7]").one('click', function() {
                if (num7 == 0) {
                    num7++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=h8]").one('click', function() {
                if (num8 == 0) {
                    num8++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=h9]").one('click', function() {
                if (num9 == 0) {
                    num9++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=h10]").one('click', function() {
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
        <input type="submit" name="live" value="戻る" class="btn-gradient-3d-simple2">
        <input type="submit" name="progress" id="next" value="進行度確認へ" class="btn-gradient-3d-simple">
    </form>
    <script>
        window.onload = function() {
            var form = document.getElementById('submitform');
            form.addEventListener('submit', function() {
                saveContent();
                var Answers = document.getElementById('Answers');
                var Answer = new Array(sessionStorage.getItem("Answer6-1"),
                    sessionStorage.getItem("Answer6-2"),
                    sessionStorage.getItem("Answer6-3"),
                    sessionStorage.getItem("Answer6-4"),
                    sessionStorage.getItem("Answer6-5"),
                    sessionStorage.getItem("Answer6-6"),
                    sessionStorage.getItem("Answer6-7"),
                    sessionStorage.getItem("Answer6-8"),
                    sessionStorage.getItem("Answer6-9"),
                    sessionStorage.getItem("Answer6-10"),
                    sessionStorage.getItem("comment51"),
                    sessionStorage.getItem("comment52"),
                    sessionStorage.getItem("comment53"),
                    sessionStorage.getItem("comment54"),
                    sessionStorage.getItem("comment55"),
                    sessionStorage.getItem("comment56"),
                    sessionStorage.getItem("comment57"),
                    sessionStorage.getItem("comment58"),
                    sessionStorage.getItem("comment59"),
                    sessionStorage.getItem("comment60"),
                    7);
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