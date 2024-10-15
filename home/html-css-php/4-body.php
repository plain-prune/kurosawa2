<?php
session_start();
require('dbconnect.php');
$data = dbroad(5);
db_js($data, 5);
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
                <h1 id=idh1>4.からだ</h1>
                <hr class="cp_hr06">
                </hr>
                <th id="t1">①<ruby>健康<rt>けんこう</rt></ruby>です。</th>
                <form name="aaForm" id=aa>
                    <td id="t11">
                        <div class="sample">
                            <input type="radio" name="f1" id="select1" value="1" onclick="ask()">
                            <label for="select1" id="sizelabel1">１</label>
                            <input type="radio" name="f1" id="select2" value="2" onclick="ask()">
                            <label for="select2" id="sizelabel2">２</label>
                            <input type="radio" name="f1" id="select3" value="3" onclick="ask()">
                            <label for="select3" id="sizelabel3">３</label>
                            <input type="radio" name="f1" id="select4" value="4" onclick="ask()">
                            <label for="select4" id="sizelabel4">４</label>
                            <input type="radio" name="f1" id="select5" value="5" onclick="ask()">
                            <label for="select5" id="sizelabel5">５</label>
                            <input type="radio" name="f1" id="pass31" value="0" onclick="ask()">
                            <label for="pass31" id="passlabel1">パス</label>
                    <td id="t21"><input type="text" id="textarea" class="textbox" placeholder="ここにテキストを入力">
                        <script>
                            var e = document.getElementById('textarea');
                            e.value = sessionStorage.getItem("comment31");
                        </script>
    </div>
    </td>
    </tr>
    </form>
    <form name="bForm" id=b>
        <tr>
            <th id="t2">②<ruby>手先<rt>てさき</rt>が</ruby><ruby>器用<rt>きよう</rt>です。</ruby></th>
            <td id="t12">
                <div class="sample">
                    <input type="radio" name="f2" id="select6" value="1" onclick="ask2()">
                    <label for="select6" id="sizelabel6">１</label>
                    <input type="radio" name="f2" id="select7" value="2" onclick="ask2()">
                    <label for="select7" id="sizelabel7">２</label>
                    <input type="radio" name="f2" id="select8" value="3" onclick="ask2()">
                    <label for="select8" id="sizelabel8">３</label>
                    <input type="radio" name="f2" id="select9" value="4" onclick="ask2()">
                    <label for="select9" id="sizelabel9">４</label>
                    <input type="radio" name="f2" id="select10" value="5" onclick="ask2()">
                    <label for="select10" id="sizelabel10">５</label>
                    <input type="radio" name="f2" id="pass32" value="0" onclick="ask2()">
                    <label for="pass32" id="passlabel2">パス</label>
            <td  id="t22"><input type="text" id="textarea2" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea2');
                    e.value = sessionStorage.getItem("comment32");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="cForm" id=c>
        <tr>

            <th id="t3">③<ruby>体力<rt>たいりょく</rt></ruby>には<ruby>自信<rt>じしん</rt></ruby>があります。</th>
            <td id="t13">
                <div class="sample">
                    <input type="radio" name="f3" id="select11" value="1" onclick="ask3()">
                    <label for="select11" id="sizelabel11">１</label>
                    <input type="radio" name="f3" id="select12" value="2" onclick="ask3()">
                    <label for="select12" id="sizelabel12">２</label>
                    <input type="radio" name="f3" id="select13" value="3" onclick="ask3()">
                    <label for="select13" id="sizelabel13">３</label>
                    <input type="radio" name="f3" id="select14" value="4" onclick="ask3()">
                    <label for="select14" id="sizelabel14">４</label>
                    <input type="radio" name="f3" id="select15" value="5" onclick="ask3()">
                    <label for="select15" id="sizelabel15">５</label>
                    <input type="radio" name="f3" id="pass33" value="0" onclick="ask3()">
                    <label for="pass33" id="passlabel3">パス</label>
            <td id="t23"><input type="text" id="textarea3" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea3');
                    e.value = sessionStorage.getItem("comment33");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="dForm" id=d>
        <tr>
            <th id="t4">④テキパキと<ruby>行動<rt>こうどう</rt></ruby>できます。</th>
            <td id="t14">
                <div class="sample">
                    <input type="radio" name="f4" id="select16" value="1" onclick="ask4()">
                    <label for="select16" id="sizelabel16">１</label>
                    <input type="radio" name="f4" id="select17" value="2" onclick="ask4()">
                    <label for="select17" id="sizelabel17">２</label>
                    <input type="radio" name="f4" id="select18" value="3" onclick="ask4()">
                    <label for="select18" id="sizelabel18">３</label>
                    <input type="radio" name="f4" id="select19" value="4" onclick="ask4()">
                    <label for="select19" id="sizelabel19">４</label>
                    <input type="radio" name="f4" id="select20" value="5" onclick="ask4()">
                    <label for="select20" id="sizelabel20">５</label>
                    <input type="radio" name="f4" id="pass34" value="0" onclick="ask4()">
                    <label for="pass34" id="passlabel4">パス</label>
            <td  id="t24"><input type="text" id="textarea4" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea4');
                    e.value = sessionStorage.getItem("comment34");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="eForm" id=e>
        <tr>
            <th id="t5">⑤<ruby>運動<rt>うんどう</rt></ruby>が<ruby>好<rt>す</rt></ruby>きです。</th>
            <td id="t15">
                <div class="sample">
                    <input type="radio" name="f5" id="select21" value="1" onclick="ask5()">
                    <label for="select21" id="sizelabel21">１</label>
                    <input type="radio" name="f5" id="select22" value="2" onclick="ask5()">
                    <label for="select22" id="sizelabel22">２</label>
                    <input type="radio" name="f5" id="select23" value="3" onclick="ask5()">
                    <label for="select23" id="sizelabel23">３</label>
                    <input type="radio" name="f5" id="select24" value="4" onclick="ask5()">
                    <label for="select24" id="sizelabel24">４</label>
                    <input type="radio" name="f5" id="select25" value="5" onclick="ask5()">
                    <label for="select25" id="sizelabel25">５</label>
                    <input type="radio" name="f5" id="pass35" value="0" onclick="ask5()">
                    <label for="pass35" id="passlabel5">パス</label>
            <td id="t25"><input type="text" id="textarea5" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea5');
                    e.value = sessionStorage.getItem("comment35");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="fForm" id=f>
        <tr>
            <th id="t6">⑥<ruby>必要<rt>ひつよう</rt></ruby>な<ruby>時<rt>とき</rt></ruby>には、じっとしていたり、<ruby>待<rt>ま</rt></ruby>つことができます。</th>
            <td id="t16">
                <div class="sample">
                    <input type="radio" name="f6" id="select26" value="1" onclick="ask6()">
                    <label for="select26" id="sizelabel26">１</label>
                    <input type="radio" name="f6" id="select27" value="2" onclick="ask6()">
                    <label for="select27" id="sizelabel27">２</label>
                    <input type="radio" name="f6" id="select28" value="3" onclick="ask6()">
                    <label for="select28" id="sizelabel28">３</label>
                    <input type="radio" name="f6" id="select29" value="4" onclick="ask6()">
                    <label for="select29" id="sizelabel29">４</label>
                    <input type="radio" name="f6" id="select30" value="5" onclick="ask6()">
                    <label for="select30" id="sizelabel30">５</label>
                    <input type="radio" name="f6" id="pass36" value="0" onclick="ask6()">
                    <label for="pass36" id="passlabel6">パス</label>
            <td id="t26"><input type="text" id="textarea6" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea6');
                    e.value = sessionStorage.getItem("comment36");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="gForm" id=g>
        <tr>
            <th id="t7">⑦<ruby>匂<rt>にお</rt></ruby>いが<ruby>気<rt>き</rt></ruby>になって<ruby>困<rt>こま</rt></ruby>ったり、<br>つらくなったりすることはありません。</th>
            <td id="t17">
                <div class="sample">
                    <input type="radio" name="f7" id="select31" value="1" onclick="ask7()">
                    <label for="select31" id="sizelabel31">１</label>
                    <input type="radio" name="f7" id="select32" value="2" onclick="ask7()">
                    <label for="select32" id="sizelabel32">２</label>
                    <input type="radio" name="f7" id="select33" value="3" onclick="ask7()">
                    <label for="select33" id="sizelabel33">３</label>
                    <input type="radio" name="f7" id="select34" value="4" onclick="ask7()">
                    <label for="select34" id="sizelabel34">４</label>
                    <input type="radio" name="f7" id="select35" value="5" onclick="ask7()">
                    <label for="select35" id="sizelabel35">５</label>
                    <input type="radio" name="f7" id="pass37" value="0" onclick="ask7()">
                    <label for="pass37" id="passlabel7">パス</label>
            <td id="t27"><input type="text" id="textarea7" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea7');
                    e.value = sessionStorage.getItem("comment37");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="hForm" id=h>
        <tr>
            <th id="t8">⑧<ruby>音<rt>おと</rt></ruby>や<ruby>声<rt>こえ</rt></ruby>が<ruby>気<rt>き</rt></ruby>になって<ruby>困<rt>こま</rt></ruby>ったり、<br>つらくなったりすることはありません。</th>
            <td id="t18">
                <div class="sample">
                    <input type="radio" name="f8" id="select36" value="1" onclick="ask8()">
                    <label for="select36" id="sizelabel36">１</label>
                    <input type="radio" name="f8" id="select37" value="2" onclick="ask8()">
                    <label for="select37" id="sizelabel37">２</label>
                    <input type="radio" name="f8" id="select38" value="3" onclick="ask8()">
                    <label for="select38" id="sizelabel38">３</label>
                    <input type="radio" name="f8" id="select39" value="4" onclick="ask8()">
                    <label for="select39" id="sizelabel39">４</label>
                    <input type="radio" name="f8" id="select40" value="5" onclick="ask8()">
                    <label for="select40" id="sizelabel40">５</label>
                    <input type="radio" name="f8" id="pass38" value="0" onclick="ask8()">
                    <label for="pass38" id="passlabel8">パス</label>
            <td id="t28"><input type="text" id="textarea8" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea8');
                    e.value = sessionStorage.getItem("comment38");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="iForm" id=i>
        <tr>
            <th id="t9">⑨<ruby>光<rt>ひかり</rt></ruby>(<ruby>明<rt>あか</rt></ruby>るさやまぶしさ)が<ruby>気<rt>き</rt></ruby>になって<ruby>困<rt>こま</rt></ruby>ったり、<br>つらくなったりすることはありません。</th>
            <td id="t19">
                <div class="sample">
                    <input type="radio" name="f9" id="select41" value="1" onclick="ask9()">
                    <label for="select41" id="sizelabel41">１</label>
                    <input type="radio" name="f9" id="select42" value="2" onclick="ask9()">
                    <label for="select42" id="sizelabel42">２</label>
                    <input type="radio" name="f9" id="select43" value="3" onclick="ask9()">
                    <label for="select43" id="sizelabel43">３</label>
                    <input type="radio" name="f9" id="select44" value="4" onclick="ask9()">
                    <label for="select44" id="sizelabel44">４</label>
                    <input type="radio" name="f9" id="select45" value="5" onclick="ask9()">
                    <label for="select45" id="sizelabel45">５</label>
                    <input type="radio" name="f9" id="pass39" value="0" onclick="ask9()">
                    <label for="pass39" id="passlabel9">パス</label>
            <td id="t29"><input type="text" id="textarea9" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea9');
                    e.value = sessionStorage.getItem("comment39");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="jForm" id=j>
        <tr>
            <th id="t10">⑩<ruby>物<rt>もの</rt></ruby>や<ruby>服<rt>ふく</rt></ruby>の<ruby>感触<rt>かんしょく</rt></ruby>が<ruby>気<rt>き</rt></ruby>になって<ruby>困<rt>こま</rt></ruby>ったり、<br>つらくなったりすることはありません。</th>
            <td id="t20">
                <div class="sample">
                    <input type="radio" name="f10" id="select46" value="1" onclick="ask10()">
                    <label for="select46" id="sizelabel46">１</label>
                    <input type="radio" name="f10" id="select47" value="2" onclick="ask10()">
                    <label for="select47" id="sizelabel47">２</label>
                    <input type="radio" name="f10" id="select48" value="3" onclick="ask10()">
                    <label for="select48" id="sizelabel48">３</label>
                    <input type="radio" name="f10" id="select49" value="4" onclick="ask10()">
                    <label for="select49" id="sizelabel49">４</label>
                    <input type="radio" name="f10" id="select50" value="5" onclick="ask10()">
                    <label for="select50" id="sizelabel50">５</label>
                    <input type="radio" name="f10" id="pass40" value="0" onclick="ask10()">
                    <label for="pass40" id="passlabel10">パス</label>
            <td  id="t30"><input type="text" id="textarea10" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea10');
                    e.value = sessionStorage.getItem("comment40");
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
        var elements1 = element1.f1;
        var elements2 = element2.f2;
        var elements3 = element3.f3;
        var elements4 = element4.f4;
        var elements5 = element5.f5;
        var elements6 = element6.f6;
        var elements7 = element7.f7;
        var elements8 = element8.f8;
        var elements9 = element9.f9;
        var elements10 = element10.f10;
        var faa = sessionStorage.getItem("Answer4-1");
        var fab = sessionStorage.getItem("Answer4-2");
        var fac = sessionStorage.getItem("Answer4-3");
        var fad = sessionStorage.getItem("Answer4-4");
        var fae = sessionStorage.getItem("Answer4-5");
        var faf = sessionStorage.getItem("Answer4-6");
        var fag = sessionStorage.getItem("Answer4-7");
        var fah = sessionStorage.getItem("Answer4-8");
        var fai = sessionStorage.getItem("Answer4-9");
        var faj = sessionStorage.getItem("Answer4-10");

        faa = faa - 1;
        fab = fab - 1;
        fac = fac - 1;
        fad = fad - 1;
        fae = fae - 1;
        faf = faf - 1;
        fag = fag - 1;
        fah = fah - 1;
        fai = fai - 1;
        faj = faj - 1;

        if (isNaN(faa) == true) {
            sessionStorage.setItem("Answer4-1", 0);
        }

        if (isNaN(fab) == true) {
            sessionStorage.setItem("Answer4-2", 0);
        }

        if (isNaN(fac) == true) {
            sessionStorage.setItem("Answer4-3", 0);
        }

        if (isNaN(fad) == true) {
            sessionStorage.setItem("Answer4-4", 0);
        }

        if (isNaN(fae) == true) {
            sessionStorage.setItem("Answer4-5", 0);
        }

        if (isNaN(faf) == true) {
            sessionStorage.setItem("Answer4-6", 0);
        }

        if (isNaN(fag) == true) {
            sessionStorage.setItem("Answer4-7", 0);
        }

        if (isNaN(fah) == true) {
            sessionStorage.setItem("Answer4-8", 0);
        }

        if (isNaN(fai) == true) {
            sessionStorage.setItem("Answer4-9", 0);
        }

        if (isNaN(faj) == true) {
            sessionStorage.setItem("Answer4-10", 0);
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

        if ((0 <= faa) && (faa < 7)) {
            elements1[faa].checked = true
        } else {
            ;
        }

        if ((0 <= fab) && (fab < 7)) {
            elements2[fab].checked = true
        } else {
            ;
        }

        if ((0 <= fac) && (fac < 7)) {
            elements3[fac].checked = true
        } else {
            ;
        }

        if ((0 <= fad) && (fad < 7)) {
            elements4[fad].checked = true
        } else {
            e;
        }

        if ((0 <= fae) && (fae < 7)) {
            elements5[fae].checked = true
        } else {
            ;
        }

        if ((0 <= faf) && (faf < 7)) {
            elements6[faf].checked = true
        } else {
            ;
        }

        if ((0 <= fag) && (fag < 7)) {
            elements7[fag].checked = true
        } else {
            ;
        }

        if ((0 <= fah) && (fah < 7)) {
            elements8[fah].checked = true
        } else {
            ;
        }

        if ((0 <= fai) && (fai < 7)) {
            elements9[fai].checked = true
        } else {
            ;
        }

        if ((0 <= faj) && (faj < 7)) {
            elements10[faj].checked = true
        } else {
            ;
        }
        var set = 0;



        function ask() {
            var inps = document.aaForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer4-1", parseInt(inp.value));
                    sessionStorage.setItem("snk31", 1);
                }
            }
            if (document.aaForm.f1[5].checked) {

                sessionStorage.setItem("pass31", 1);
            } else {
                sessionStorage.setItem("pass31", 0)
            }
            for (var i = 0; i < document.aaForm.f1.length; i++) {

                // i�Ԗڂ̃��W�I�{�^�����`�F�b�N����Ă��邩�𔻒�
                if (document.aaForm.f1[i].checked) {
                    flag = true;
                    document.getElementById("select6").disabled = false;
                    document.getElementById("select7").disabled = false;
                    document.getElementById("select8").disabled = false;
                    document.getElementById("select9").disabled = false;
                    document.getElementById("select10").disabled = false;
                    document.getElementById("pass32").disabled = false;
                }
            }

            // �����I������Ă��Ȃ��ꍇ�̏���
            if (!flag) {
                document.getElementById("select6").disabled = true;
                document.getElementById("select7").disabled = true;
                document.getElementById("select8").disabled = true;
                document.getElementById("select9").disabled = true;
                document.getElementById("select10").disabled = true;
                document.getElementById("pass32").disabled = true;
            }

        }

        function ask2() {
            var inps = document.bForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer4-2", parseInt(inp.value));
                    sessionStorage.setItem("snk32", 1);
                }
            }
            if (document.bForm.f2[5].checked) {

                sessionStorage.setItem("pass32", 1);
            } else {
                sessionStorage.setItem("pass32", 0)
            }
            for (var i = 0; i < document.bForm.f2.length; i++) {

                // i�Ԗڂ̃��W�I�{�^�����`�F�b�N����Ă��邩�𔻒�
                if (document.bForm.f2[i].checked) {
                    flag = true;
                    document.getElementById("select11").disabled = false;
                    document.getElementById("select12").disabled = false;
                    document.getElementById("select13").disabled = false;
                    document.getElementById("select14").disabled = false;
                    document.getElementById("select15").disabled = false;
                    document.getElementById("pass33").disabled = false;
                }
            }

            // �����I������Ă��Ȃ��ꍇ�̏���
            if (!flag) {
                document.getElementById("select11").disabled = true;
                document.getElementById("select12").disabled = true;
                document.getElementById("select13").disabled = true;
                document.getElementById("select14").disabled = true;
                document.getElementById("select15").disabled = true;
                document.getElementById("pass33").disabled = true;
            }

        }

        function ask3() {
            var inps = document.cForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer4-3", parseInt(inp.value));
                    sessionStorage.setItem("snk33", 1);
                }
            }
            if (document.cForm.f3[5].checked) {

                sessionStorage.setItem("pass33", 1);
            } else {
                sessionStorage.setItem("pass33")
            }
            for (var i = 0; i < document.cForm.f3.length; i++) {

                // i�Ԗڂ̃��W�I�{�^�����`�F�b�N����Ă��邩�𔻒�
                if (document.cForm.f3[i].checked) {
                    flag = true;
                    document.getElementById("select16").disabled = false;
                    document.getElementById("select17").disabled = false;
                    document.getElementById("select18").disabled = false;
                    document.getElementById("select19").disabled = false;
                    document.getElementById("select20").disabled = false;
                    document.getElementById("pass34").disabled = false;
                }
            }

            // �����I������Ă��Ȃ��ꍇ�̏���
            if (!flag) {
                document.getElementById("select16").disabled = true;
                document.getElementById("select17").disabled = true;
                document.getElementById("select18").disabled = true;
                document.getElementById("select19").disabled = true;
                document.getElementById("select20").disabled = true;
                document.getElementById("pass34").disabled = true;
            }


        }

        function ask4() {
            var inps = document.dForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer4-4", parseInt(inp.value));
                    sessionStorage.setItem("snk34", 1);
                }
            }
            if (document.dForm.f4[5].checked) {

                sessionStorage.setItem("pass34", 1);
            } else {
                sessionStorage.setItem("pass34", 0)
            }
            for (var i = 0; i < document.dForm.f4.length; i++) {

                // i�Ԗڂ̃��W�I�{�^�����`�F�b�N����Ă��邩�𔻒�
                if (document.dForm.f4[i].checked) {
                    flag = true;
                    document.getElementById("select21").disabled = false;
                    document.getElementById("select22").disabled = false;
                    document.getElementById("select23").disabled = false;
                    document.getElementById("select24").disabled = false;
                    document.getElementById("select25").disabled = false;
                    document.getElementById("pass35").disabled = false;
                }
            }

            // �����I������Ă��Ȃ��ꍇ�̏���
            if (!flag) {
                document.getElementById("select21").disabled = true;
                document.getElementById("select22").disabled = true;
                document.getElementById("select23").disabled = true;
                document.getElementById("select24").disabled = true;
                document.getElementById("select25").disabled = true;
                document.getElementById("pass35").disabled = true;
            }

        }

        function ask5() {
            var inps = document.eForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer4-5", parseInt(inp.value));
                    sessionStorage.setItem("snk35", 1);
                }
            }
            if (document.eForm.f5[5].checked) {

                sessionStorage.setItem("pass35", 1);
            } else {
                sessionStorage.setItem("pass35", 0)
            }
            for (var i = 0; i < document.eForm.f5.length; i++) {

                // i�Ԗڂ̃��W�I�{�^�����`�F�b�N����Ă��邩�𔻒�
                if (document.eForm.f5[i].checked) {
                    flag = true;
                    document.getElementById("select26").disabled = false;
                    document.getElementById("select27").disabled = false;
                    document.getElementById("select28").disabled = false;
                    document.getElementById("select29").disabled = false;
                    document.getElementById("select30").disabled = false;
                    document.getElementById("pass36").disabled = false;
                }
            }

            // �����I������Ă��Ȃ��ꍇ�̏���
            if (!flag) {
                document.getElementById("select26").disabled = true;
                document.getElementById("select27").disabled = true;
                document.getElementById("select28").disabled = true;
                document.getElementById("select29").disabled = true;
                document.getElementById("select30").disabled = true;
                document.getElementById("pass36").disabled = true;
            }

        }

        function ask6() {
            var inps = document.fForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer4-6", parseInt(inp.value));
                    sessionStorage.setItem("snk36", 1);
                }
            }
            if (document.fForm.f6[5].checked) {

                sessionStorage.setItem("pass36", 1);
            } else {
                sessionStorage.setItem("pass36", 0)
            }
            for (var i = 0; i < document.fForm.f6.length; i++) {

                // i�Ԗڂ̃��W�I�{�^�����`�F�b�N����Ă��邩�𔻒�
                if (document.fForm.f6[i].checked) {
                    flag = true;
                    document.getElementById("select31").disabled = false;
                    document.getElementById("select32").disabled = false;
                    document.getElementById("select33").disabled = false;
                    document.getElementById("select34").disabled = false;
                    document.getElementById("select35").disabled = false;
                    document.getElementById("pass37").disabled = false;
                }
            }

            // �����I������Ă��Ȃ��ꍇ�̏���
            if (!flag) {
                document.getElementById("select31").disabled = true;
                document.getElementById("select32").disabled = true;
                document.getElementById("select33").disabled = true;
                document.getElementById("select34").disabled = true;
                document.getElementById("select35").disabled = true;
                document.getElementById("pass37").disabled = true;
            }

        }

        function ask7() {
            var inps = document.gForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer4-7", parseInt(inp.value));
                    sessionStorage.setItem("snk37", 1);
                }
            }
            if (document.gForm.f7[5].checked) {

                sessionStorage.setItem("pass37", 1);
            } else {
                sessionStorage.setItem("pass37", 0)
            }
            for (var i = 0; i < document.gForm.f7.length; i++) {

                // i�Ԗڂ̃��W�I�{�^�����`�F�b�N����Ă��邩�𔻒�
                if (document.gForm.f7[i].checked) {
                    flag = true;
                    document.getElementById("select36").disabled = false;
                    document.getElementById("select37").disabled = false;
                    document.getElementById("select38").disabled = false;
                    document.getElementById("select39").disabled = false;
                    document.getElementById("select40").disabled = false;
                    document.getElementById("pass38").disabled = false;
                }
            }

            // �����I������Ă��Ȃ��ꍇ�̏���
            if (!flag) {
                document.getElementById("select36").disabled = true;
                document.getElementById("select37").disabled = true;
                document.getElementById("select38").disabled = true;
                document.getElementById("select39").disabled = true;
                document.getElementById("select40").disabled = true;
                document.getElementById("pass38").disabled = true;
            }

        }

        function ask8() {
            var inps = document.hForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer4-8", parseInt(inp.value));
                    sessionStorage.setItem("snk38", 1);
                }
            }
            if (document.hForm.f8[5].checked) {

                sessionStorage.setItem("pass38", 1);
            } else {
                sessionStorage.setItem("pass38", 0)
            }
            for (var i = 0; i < document.hForm.f8.length; i++) {

                // i�Ԗڂ̃��W�I�{�^�����`�F�b�N����Ă��邩�𔻒�
                if (document.hForm.f8[i].checked) {
                    flag = true;
                    document.getElementById("select41").disabled = false;
                    document.getElementById("select42").disabled = false;
                    document.getElementById("select43").disabled = false;
                    document.getElementById("select44").disabled = false;
                    document.getElementById("select45").disabled = false;
                    document.getElementById("pass39").disabled = false;
                }
            }

            // �����I������Ă��Ȃ��ꍇ�̏���
            if (!flag) {
                document.getElementById("select41").disabled = true;
                document.getElementById("select42").disabled = true;
                document.getElementById("select43").disabled = true;
                document.getElementById("select44").disabled = true;
                document.getElementById("select45").disabled = true;
                document.getElementById("pass39").disabled = true;
            }

        }

        function ask9() {
            var inps = document.iForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer4-9", parseInt(inp.value));
                    sessionStorage.setItem("snk39", 1);
                }
            }
            if (document.iForm.f9[5].checked) {

                sessionStorage.setItem("pass39", 1);
            } else {
                sessionStorage.setItem("pass39", 0)
            }
            for (var i = 0; i < document.iForm.f9.length; i++) {

                // i�Ԗڂ̃��W�I�{�^�����`�F�b�N����Ă��邩�𔻒�
                if (document.iForm.f9[i].checked) {
                    flag = true;
                    document.getElementById("select46").disabled = false;
                    document.getElementById("select47").disabled = false;
                    document.getElementById("select48").disabled = false;
                    document.getElementById("select49").disabled = false;
                    document.getElementById("select50").disabled = false;
                    document.getElementById("pass40").disabled = false;
                }
            }

            // �����I������Ă��Ȃ��ꍇ�̏���
            if (!flag) {
                document.getElementById("select46").disabled = true;
                document.getElementById("select47").disabled = true;
                document.getElementById("select48").disabled = true;
                document.getElementById("select49").disabled = true;
                document.getElementById("select50").disabled = true;
                document.getElementById("pass40").disabled = true;
            }

        }

        function ask10() {
            var inps = document.jForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer4-10", parseInt(inp.value));
                    sessionStorage.setItem("snk40", 1);
                }
            }
            if (document.jForm.f10[5].checked) {

                sessionStorage.setItem("pass40", 1);
            } else {
                sessionStorage.setItem("pass40", 0)
            }
            for (var i = 0; i < document.jForm.f10.length; i++) {

                // i�Ԗڂ̃��W�I�{�^�����`�F�b�N����Ă��邩�𔻒�
                if (document.jForm.f10[i].checked) {
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

        function saveContent() { //�Z�b�V�����X�g���[�W�Ƀe�L�X�g�̓��e��ۑ�����֐�
            if (tarea[0] == 1) {
                var textContent = document.getElementById("textarea");
                var value = textContent.value;
                sessionStorage.setItem("comment31", value);
            } else if (tarea[0] == 0) {
                sessionStorage.setItem("comment31", "�𓚂Ȃ�");
            }
            if (tarea[1] == 1) {
                var textContent2 = document.getElementById("textarea2");
                var value = textContent2.value;
                sessionStorage.setItem("comment32", value);
            } else if (tarea[1] == 0) {
                sessionStorage.setItem("comment32", "�𓚂Ȃ�");
            }
            if (tarea[2] == 1) {
                var textContent3 = document.getElementById("textarea3");
                var value = textContent3.value;
                sessionStorage.setItem("comment33", value);
            } else if (tarea[2] == 0) {
                sessionStorage.setItem("comment33", "�𓚂Ȃ�");
            }
            if (tarea[3] == 1) {
                var textContent4 = document.getElementById("textarea4");
                var value = textContent4.value;
                sessionStorage.setItem("comment34", value);
            } else if (tarea[3] == 0) {
                sessionStorage.setItem("comment34", "�𓚂Ȃ�");
            }
            if (tarea[4] == 1) {
                var textContent5 = document.getElementById("textarea5");
                var value = textContent5.value;
                sessionStorage.setItem("comment35", value);
            } else if (tarea[4] == 0) {
                sessionStorage.setItem("comment35", "�𓚂Ȃ�");
            }
            if (tarea[5] == 1) {
                var textContent6 = document.getElementById("textarea6");
                var value = textContent6.value;
                sessionStorage.setItem("comment36", value);
            } else if (tarea[5] == 0) {
                sessionStorage.setItem("comment36", "�𓚂Ȃ�");
            }
            if (tarea[6] == 1) {
                var textContent7 = document.getElementById("textarea7");
                var value = textContent7.value;
                sessionStorage.setItem("comment37", value);
            } else if (tarea[6] == 0) {
                sessionStorage.setItem("comment37", "�𓚂Ȃ�");
            }
            if (tarea[7] == 1) {
                var textContent8 = document.getElementById("textarea8");
                var value = textContent8.value;
                sessionStorage.setItem("comment38", value);
            } else if (tarea[7] == 0) {
                sessionStorage.setItem("comment38", "�𓚂Ȃ�");
            }
            if (tarea[8] == 1) {
                var textContent9 = document.getElementById("textarea9");
                var value = textContent9.value;
                sessionStorage.setItem("comment39", value);
            } else if (tarea[8] == 0) {
                sessionStorage.setItem("comment39", "�𓚂Ȃ�");
            }
            if (tarea[9] == 1) {
                var textContent10 = document.getElementById("textarea10");
                var value = textContent10.value;
                sessionStorage.setItem("comment40", value);
            } else if (tarea[9] == 0) {
                sessionStorage.setItem("comment40", "�𓚂Ȃ�");
            }
            location.assign("progress_home.html");
        }

        function cleartextarea() { //�e�L�X�g�G���A�̃N���A���s���֐�
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
            $("[name=f1]").one('click', function() {
                if (num1 == 0) {
                    num1++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=f2]").one('click', function() {
                if (num2 == 0) {
                    num2++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=f3]").one('click', function() {
                if (num3 == 0) {
                    num3++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=f4]").one('click', function() {
                if (num4 == 0) {
                    num4++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=f5]").one('click', function() {
                if (num5 == 0) {
                    num5++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=f6]").one('click', function() {
                if (num6 == 0) {
                    num6++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=f7]").one('click', function() {
                if (num7 == 0) {
                    num7++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=f8]").one('click', function() {
                if (num8 == 0) {
                    num8++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=f9]").one('click', function() {
                if (num9 == 0) {
                    num9++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=f10]").one('click', function() {
                if (num10 == 0) {
                    num10++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
        });
    </script>

    <form id="submitform" method="post" action="dbsave.php">
        <input type="hidden" name="Answers" id="Answers">
        <input type="submit" name="study" value="戻る" class="btn-gradient-3d-simple2">
        <input type="submit" name="live" value="次へ" class="btn-gradient-3d-simple2">
        <input type="submit" name="progress" id="next" value="進行度確認へ" class="btn-gradient-3d-simple">
    </form>

    <script>
        window.onload = function() {
            var form = document.getElementById('submitform');
            form.addEventListener('submit', function() {
                saveContent();
                var Answers = document.getElementById('Answers');
                var Answer = new Array(sessionStorage.getItem("Answer4-1"),
                    sessionStorage.getItem("Answer4-2"),
                    sessionStorage.getItem("Answer4-3"),
                    sessionStorage.getItem("Answer4-4"),
                    sessionStorage.getItem("Answer4-5"),
                    sessionStorage.getItem("Answer4-6"),
                    sessionStorage.getItem("Answer4-7"),
                    sessionStorage.getItem("Answer4-8"),
                    sessionStorage.getItem("Answer4-9"),
                    sessionStorage.getItem("Answer4-10"),
                    sessionStorage.getItem("comment31"),
                    sessionStorage.getItem("comment32"),
                    sessionStorage.getItem("comment33"),
                    sessionStorage.getItem("comment34"),
                    sessionStorage.getItem("comment35"),
                    sessionStorage.getItem("comment36"),
                    sessionStorage.getItem("comment37"),
                    sessionStorage.getItem("comment38"),
                    sessionStorage.getItem("comment39"),
                    sessionStorage.getItem("comment40"),
                    5);
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