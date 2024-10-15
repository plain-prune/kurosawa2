<?php
session_start();
require('dbconnect.php');
$data = dbroad(3);
db_js($data, 3);
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
                <h1 id=idh1>2.しゃかい</h1>
                <hr class="cp_hr06">
                </hr>
                <th id="t1">①<ruby>集団<rt>しゅうだん</rt></ruby>の<ruby>中<rt>なか</rt></ruby>で<ruby>活動<rt>かつどう</rt></ruby>できます。</th>
                <form name="aaForm" id=aa>
                    <td id="t11">
                        <div class="sample">
                            <input type="radio" name="d1" id="select1" value="1" onclick="ask()">
                            <label for="select1" id="sizelabel1">１</label>
                            <input type="radio" name="d1" id="select2" value="2" onclick="ask()">
                            <label for="select2" id="sizelabel2">２</label>
                            <input type="radio" name="d1" id="select3" value="3" onclick="ask()">
                            <label for="select3" id="sizelabel3">３</label>
                            <input type="radio" name="d1" id="select4" value="4" onclick="ask()">
                            <label for="select4" id="sizelabel4">４</label>
                            <input type="radio" name="d1" id="select5" value="5" onclick="ask()">
                            <label for="select5" id="sizelabel5">５</label>
                            <input type="radio" name="d1" id="pass11" value="0" onclick="ask()">
                            <label for="pass11" id="passlabel1">パス</label>
                    <td id="t21"><input type="text" id="textarea" class="textbox" placeholder="ここにテキストを入力">
                        <script>
                            var e = document.getElementById('textarea');
                            e.value = sessionStorage.getItem("comment11");
                        </script>
    </div>
    </td>
    </form>
    </tr>
    <form name="bForm" id=b>
        <tr>
            <th id="t2">②<ruby>社会<rt>しゃかい</rt></ruby>や<ruby>学校<rt>がっこう</rt></ruby>のルール、ゲームのルールなどを<ruby>守<rt>まも</rt></ruby>れます。</th>
            <td id="t12">
                <div class="sample">
                    <input type="radio" name="d2" id="select6" value="1" onclick="ask2()">
                    <label for="select6" id="sizelabel6">１</label>
                    <input type="radio" name="d2" id="select7" value="2" onclick="ask2()">
                    <label for="select7" id="sizelabel7">２</label>
                    <input type="radio" name="d2" id="select8" value="3" onclick="ask2()">
                    <label for="select8" id="sizelabel8">３</label>
                    <input type="radio" name="d2" id="select9" value="4" onclick="ask2()">
                    <label for="select9" id="sizelabel9">４</label>
                    <input type="radio" name="d2" id="select10" value="5" onclick="ask2()">
                    <label for="select10" id="sizelabel10">５</label>
                    <input type="radio" name="d2" id="pass12" value="0" onclick="ask2()">
                    <label for="pass12" id="passlabel2">パス</label>
            <td  id="t22"><input type="text" id="textarea2" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea2');
                    e.value = sessionStorage.getItem("comment12");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="cForm" id=c>
        <tr>
            <th id="t3">③<ruby>人<rt>ひと</rt></ruby>（<ruby>例<rt>たとえ</rt></ruby>えば<ruby>友<rt>とも</rt></ruby>だちや<ruby>先生<rt>せんせい</rt></ruby>）と<ruby>話<rt>はな</rt></ruby>すことが<ruby>好<rt>す</rt></ruby>きです。</th>
            <td id="t13">
                <div class="sample">
                    <input type="radio" name="d3" id="select11" value="1" onclick="ask3()">
                    <label for="select11" id="sizelabel11">１</label>
                    <input type="radio" name="d3" id="select12" value="2" onclick="ask3()">
                    <label for="select12" id="sizelabel12">２</label>
                    <input type="radio" name="d3" id="select13" value="3" onclick="ask3()">
                    <label for="select13" id="sizelabel13">３</label>
                    <input type="radio" name="d3" id="select14" value="4" onclick="ask3()">
                    <label for="select14" id="sizelabel14">４</label>
                    <input type="radio" name="d3" id="select15" value="5" onclick="ask3()">
                    <label for="select15" id="sizelabel15">５</label>
                    <input type="radio" name="d3" id="pass13" value="0" onclick="ask3()">
                    <label for="pass13" id="passlabel3">パス</label>
            <td  id="t23"><input type="text" id="textarea3" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea3');
                    e.value = sessionStorage.getItem("comment13");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="dForm" id=d>
        <tr>
            <th id="t4">④<ruby>友<rt>とも</rt></ruby>だちとけんかや<ruby>言<rt>い</rt></ruby>い<ruby>合<rt>あ</rt></ruby>いをしません。。</th>
            <td id="t14">
                <div class="sample">
                    <input type="radio" name="d4" id="select16" value="1" onclick="ask4()">
                    <label for="select16" id="sizelabel16">１</label>
                    <input type="radio" name="d4" id="select17" value="2" onclick="ask4()">
                    <label for="select17" id="sizelabel17">２</label>
                    <input type="radio" name="d4" id="select18" value="3" onclick="ask4()">
                    <label for="select18" id="sizelabel18">３</label>
                    <input type="radio" name="d4" id="select19" value="4" onclick="ask4()">
                    <label for="select19" id="sizelabel19">４</label>
                    <input type="radio" name="d4" id="select20" value="5" onclick="ask4()">
                    <label for="select20" id="sizelabel20">５</label>
                    <input type="radio" name="d4" id="pass14" value="0" onclick="ask4()">
                    <label for="pass14" id="passlabel4">パス</label>
            <td  id="t24"><input type="text" id="textarea4" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea4');
                    e.value = sessionStorage.getItem("comment14");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="eForm" id=e>
        <tr>
            <th id="t5">⑤<ruby>家族<rt>かぞく</rt></ruby>（<ruby>施設<rt>しせつ</rt>
                    </russ1by>の<ruby>職員<rt>しょくいん</rt></ruby>さん）との<ruby>関係<rt>かんけい</rt></ruby>は<ruby>良<rt>よ</rt></ruby>いです。</th>
            <td id="t15">
                <div class="sample">
                    <input type="radio" name="d5" id="select21" value="1" onclick="ask5()">
                    <label for="select21" id="sizelabel21">１</label>
                    <input type="radio" name="d5" id="select22" value="2" onclick="ask5()">
                    <label for="select22" id="sizelabel22">２</label>
                    <input type="radio" name="d5" id="select23" value="3" onclick="ask5()">
                    <label for="select23" id="sizelabel23">３</label>
                    <input type="radio" name="d5" id="select24" value="4" onclick="ask5()">
                    <label for="select24" id="sizelabel24">４</label>
                    <input type="radio" name="d5" id="select25" value="5" onclick="ask5()">
                    <label for="select25" id="sizelabel25">５</label>
                    <input type="radio" name="d5" id="pass15" value="0" onclick="ask5()">
                    <label for="pass15" id="passlabel5">パス</label>
            <td id="t25"><input type="text" id="textarea5" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea5');
                    e.value = sessionStorage.getItem("comment15");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="fForm" id=f>
        <tr>
            <th id="t6">⑥<ruby>学校<rt>がっこう</rt></ruby>の<ruby>先生<rt>せんせい</rt></ruby>を<ruby>頼<rt>たよ</rt></ruby>ることができます。</th>
            <td id="t16">
                <div class="sample">
                    <input type="radio" name="d6" id="select26" value="1" onclick="ask6()">
                    <label for="select26" id="sizelabel26">１</label>
                    <input type="radio" name="d6" id="select27" value="2" onclick="ask6()">
                    <label for="select27" id="sizelabel27">２</label>
                    <input type="radio" name="d6" id="select28" value="3" onclick="ask6()">
                    <label for="select28" id="sizelabel28">３</label>
                    <input type="radio" name="d6" id="select29" value="4" onclick="ask6()">
                    <label for="select29" id="sizelabel29">４</label>
                    <input type="radio" name="d6" id="select30" value="5" onclick="ask6()">
                    <label for="select30" id="sizelabel30">５</label>
                    <input type="radio" name="d6" id="pass16" value="0" onclick="ask6()">
                    <label for="pass16" id="passlabel6">パス</label>
            <td  id="t26"><input type="text" id="textarea6" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea6');
                    e.value = sessionStorage.getItem("comment16");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="gForm" id=g>
        <tr>
            <th id="t7">⑦<ruby>異性<rt>いせい</rt></ruby>の<ruby>友達<rt>ともだち</rt></ruby>（<ruby>男子<rt>だんし</rt></ruby>は<ruby>女子<rt>じょし</rt></ruby>、<ruby>女子<rt>じょし</rt></ruby>は<ruby>男子<rt>だんし</rt></ruby>）と<br>ルールを<ruby>守<rt>まも</rt></ruby>って<ruby>仲良<rt>なかよ</rt></ruby>くできます。</th>
            <td  id="t17">
                <div class="sample">
                    <input type="radio" name="d7" id="select31" value="1" onclick="ask7()">
                    <label for="select31" id="sizelabel31">１</label>
                    <input type="radio" name="d7" id="select32" value="2" onclick="ask7()">
                    <label for="select32" id="sizelabel32">２</label>
                    <input type="radio" name="d7" id="select33" value="3" onclick="ask7()">
                    <label for="select33" id="sizelabel33">３</label>
                    <input type="radio" name="d7" id="select34" value="4" onclick="ask7()">
                    <label for="select34" id="sizelabel34">４</label>
                    <input type="radio" name="d7" id="select35" value="5" onclick="ask7()">
                    <label for="select35" id="sizelabel35">５</label>
                    <input type="radio" name="d7" id="pass17" value="0" onclick="ask7()">
                    <label for="pass17" id="passlabel7">パス</label>
            <td  id="t27"><input type="text" id="textarea7" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea7');
                    e.value = sessionStorage.getItem("comment17");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="hForm" id=h>
        <tr>
            <th id="t8">⑧<ruby>信用<rt>しんよう</rt></ruby>できる<ruby>友達<rt>ともだち</rt></ruby>や<ruby>先生<rt>せんせい</rt></ruby>がいます。</th>
            <td id="t18">
                <div class="sample">
                    <input type="radio" name="d8" id="select36" value="1" onclick="ask8()">
                    <label for="select36" id="sizelabel36">１</label>
                    <input type="radio" name="d8" id="select37" value="2" onclick="ask8()">
                    <label for="select37" id="sizelabel37">２</label>
                    <input type="radio" name="d8" id="select38" value="3" onclick="ask8()">
                    <label for="select38" id="sizelabel38">３</label>
                    <input type="radio" name="d8" id="select39" value="4" onclick="ask8()">
                    <label for="select39" id="sizelabel39">４</label>
                    <input type="radio" name="d8" id="select40" value="5" onclick="ask8()">
                    <label for="select40" id="sizelabel40">５</label>
                    <input type="radio" name="d8" id="pass18" value="0" onclick="ask8()">
                    <label for="pass18" id="passlabel8">パス</label>
            <td  id="t28"><input type="text" id="textarea8" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea8');
                    e.value = sessionStorage.getItem("comment18");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="iForm" id=i>
        <tr>
            <th id="t9">⑨<ruby>困<rt>こま</rt></ruby>ったときは<ruby>相談<rt>そうだん</rt></ruby>できる<ruby>人<rt>ひと</rt></ruby>がいます。<br>（それはだれですか？）</th>
            <td id="t19">
                <div class="sample">
                    <input type="radio" name="d9" id="select41" value="1" onclick="ask9()">
                    <label for="select41" id="sizelabel41">１</label>
                    <input type="radio" name="d9" id="select42" value="2" onclick="ask9()">
                    <label for="select42" id="sizelabel42">２</label>
                    <input type="radio" name="d9" id="select43" value="3" onclick="ask9()">
                    <label for="select43" id="sizelabel43">３</label>
                    <input type="radio" name="d9" id="select44" value="4" onclick="ask9()">
                    <label for="select44" id="sizelabel44">４</label>
                    <input type="radio" name="d9" id="select45" value="5" onclick="ask9()">
                    <label for="select45" id="sizelabel45">５</label>
                    <input type="radio" name="d9" id="pass19" value="0" onclick="ask9()">
                    <label for="pass19" id="passlabel9">パス</label>
            <td  id="t29"><input type="text" id="textarea9" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea9');
                    e.value = sessionStorage.getItem("comment19");
                </script>
                </div>
            </td>
        </tr>
    </form>
    <form name="jForm" id=j>
        <tr>
            <th id="t10">⑩<ruby>表情<rt>ひょうじょう</rt></ruby>や<ruby>態度<rt>たいど</rt></ruby>を<ruby>見<rt>み</rt></ruby>て、<ruby>相手<rt>あいて</rt></ruby>の<ruby>気持<rt>きも</rt></ruby>ちがわかります。</th>
            <td id="t20">
                <div class="sample">
                    <input type="radio" name="d10" id="select46" value="1" onclick="ask10()">
                    <label for="select46" id="sizelabel46">１</label>
                    <input type="radio" name="d10" id="select47" value="2" onclick="ask10()">
                    <label for="select47" id="sizelabel47">２</label>
                    <input type="radio" name="d10" id="select48" value="3" onclick="ask10()">
                    <label for="select48" id="sizelabel48">３</label>
                    <input type="radio" name="d10" id="select49" value="4" onclick="ask10()">
                    <label for="select49" id="sizelabel49">４</label>
                    <input type="radio" name="d10" id="select50" value="5" onclick="ask10()">
                    <label for="select50" id="sizelabel50">５</label>
                    <input type="radio" name="d10" id="pass20" value="0" onclick="ask10()">
                    <label for="pass20" id="passlabel10">パス</label>
            <td id="t30"><input type="text" id="textarea10" class="textbox" placeholder="ここにテキストを入力">
                <script>
                    var e = document.getElementById('textarea10');
                    e.value = sessionStorage.getItem("comment20");
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
        var elements1 = element1.d1;
        var elements2 = element2.d2;
        var elements3 = element3.d3;
        var elements4 = element4.d4;
        var elements5 = element5.d5;
        var elements6 = element6.d6;
        var elements7 = element7.d7;
        var elements8 = element8.d8;
        var elements9 = element9.d9;
        var elements10 = element10.d10;
        var daa = sessionStorage.getItem("Answer2-1");
        var dab = sessionStorage.getItem("Answer2-2");
        var dac = sessionStorage.getItem("Answer2-3");
        var dad = sessionStorage.getItem("Answer2-4");
        var dae = sessionStorage.getItem("Answer2-5");
        var daf = sessionStorage.getItem("Answer2-6");
        var dag = sessionStorage.getItem("Answer2-7");
        var dah = sessionStorage.getItem("Answer2-8");
        var dai = sessionStorage.getItem("Answer2-9");
        var daj = sessionStorage.getItem("Answer2-10");

        daa = daa - 1;
        dab = dab - 1;
        dac = dac - 1;
        dad = dad - 1;
        dae = dae - 1;
        daf = daf - 1;
        dag = dag - 1;
        dah = dah - 1;
        dai = dai - 1;
        daj = daj - 1;

        if (isNaN(daa) == true) {
            sessionStorage.setItem("Answer2-1", 0);
        }


        if (isNaN(dab) == true) {
            sessionStorage.setItem("Answer2-2", 0);
        }

        if (isNaN(dac) == true) {
            sessionStorage.setItem("Answer2-3", 0);
        }

        if (isNaN(dad) == true) {
            sessionStorage.setItem("Answer2-4", 0);
        }

        if (isNaN(dae) == true) {
            sessionStorage.setItem("Answer2-5", 0);
        }

        if (isNaN(daf) == true) {
            sessionStorage.setItem("Answer2-6", 0);
        }

        if (isNaN(dag) == true) {
            sessionStorage.setItem("Answer2-7", 0);
        }

        if (isNaN(dah) == true) {
            sessionStorage.setItem("Answer2-8", 0);
        }

        if (isNaN(dai) == true) {
            sessionStorage.setItem("Answer2-9", 0);
        }

        if (isNaN(daj) == true) {
            sessionStorage.setItem("Answer2-10", 0);
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

        if ((0 <= daa) && (daa < 7)) {
            elements1[daa].checked = true
        } else {
            ;
        }

        if ((0 <= dab) && (dab < 7)) {
            elements2[dab].checked = true
        } else {
            ;
        }

        if ((0 <= dac) && (dac < 7)) {
            elements3[dac].checked = true
        } else {
            ;
        }

        if ((0 <= dad) && (dad < 7)) {
            elements4[dad].checked = true
        } else {
            e;
        }

        if ((0 <= dae) && (dae < 7)) {
            elements5[dae].checked = true
        } else {
            ;
        }

        if ((0 <= daf) && (daf < 7)) {
            elements6[daf].checked = true
        } else {
            ;
        }

        if ((0 <= dag) && (dag < 7)) {
            elements7[dag].checked = true
        } else {
            ;
        }

        if ((0 <= dah) && (dah < 7)) {
            elements8[dah].checked = true
        } else {
            ;
        }

        if ((0 <= dai) && (dai < 7)) {
            elements9[dai].checked = true
        } else {
            ;
        }

        if ((0 <= daj) && (daj < 7)) {
            elements10[daj].checked = true
        } else {
            ;
        }
        var set = 0;


        function ask() {
            var inps = document.aaForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer2-1", parseInt(inp.value));
                    sessionStorage.setItem("snk11", parseInt(1, 10));
                }
            }
            if (document.aaForm.d1[5].checked) {

                sessionStorage.setItem("pass11", 1);
            } else {
                sessionStorage.setItem("pass11", 0)
            }

            for (var i = 0; i < document.aaForm.d1.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.aaForm.d1[i].checked) {
                    flag = true;
                    document.getElementById("select6").disabled = false;
                    document.getElementById("select7").disabled = false;
                    document.getElementById("select8").disabled = false;
                    document.getElementById("select9").disabled = false;
                    document.getElementById("select10").disabled = false;
                    document.getElementById("pass12").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select6").disabled = true;
                document.getElementById("select7").disabled = true;
                document.getElementById("select8").disabled = true;
                document.getElementById("select9").disabled = true;
                document.getElementById("select10").disabled = true;
                document.getElementById("pass12").disabled = true;
            }

        }

        function ask2() {
            var inps = document.bForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer2-2", parseInt(inp.value));
                    sessionStorage.setItem("snk12", parseInt(1, 10));
                }
            }
            if (document.bForm.d2[5].checked) {

                sessionStorage.setItem("pass12", 1);
            } else {
                sessionStorage.setItem("pass12", 0)
            }


            for (var i = 0; i < document.bForm.d2.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.bForm.d2[i].checked) {
                    flag = true;
                    document.getElementById("select11").disabled = false;
                    document.getElementById("select12").disabled = false;
                    document.getElementById("select13").disabled = false;
                    document.getElementById("select14").disabled = false;
                    document.getElementById("select15").disabled = false;
                    document.getElementById("pass13").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select11").disabled = true;
                document.getElementById("select12").disabled = true;
                document.getElementById("select13").disabled = true;
                document.getElementById("select14").disabled = true;
                document.getElementById("select15").disabled = true;
                document.getElementById("pass13").disabled = true;
            }

        }

        function ask3() {
            var inps = document.cForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer2-3", parseInt(inp.value));
                    sessionStorage.setItem("snk13", parseInt(1, 10));
                }
            }
            if (document.cForm.d3[5].checked) {

                sessionStorage.setItem("pass13", 1);
            } else {
                sessionStorage.setItem("pass13", 0)
            }

            for (var i = 0; i < document.cForm.d3.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.cForm.d3[i].checked) {
                    flag = true;
                    document.getElementById("select16").disabled = false;
                    document.getElementById("select17").disabled = false;
                    document.getElementById("select18").disabled = false;
                    document.getElementById("select19").disabled = false;
                    document.getElementById("select20").disabled = false;
                    document.getElementById("pass14").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select16").disabled = true;
                document.getElementById("select17").disabled = true;
                document.getElementById("select18").disabled = true;
                document.getElementById("select19").disabled = true;
                document.getElementById("select20").disabled = true;
                document.getElementById("pass14").disabled = true;
            }

        }

        function ask4() {
            var inps = document.dForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer2-4", parseInt(inp.value));
                    sessionStorage.setItem("snk14", parseInt(1, 10));
                }
            }
            if (document.dForm.d4[5].checked) {

                sessionStorage.setItem("pass14", 1);
            } else {
                sessionStorage.setItem("pass14", 0)
            }

            for (var i = 0; i < document.dForm.d4.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.dForm.d4[i].checked) {
                    flag = true;
                    document.getElementById("select21").disabled = false;
                    document.getElementById("select22").disabled = false;
                    document.getElementById("select23").disabled = false;
                    document.getElementById("select24").disabled = false;
                    document.getElementById("select25").disabled = false;
                    document.getElementById("pass15").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select21").disabled = true;
                document.getElementById("select22").disabled = true;
                document.getElementById("select23").disabled = true;
                document.getElementById("select24").disabled = true;
                document.getElementById("select25").disabled = true;
                document.getElementById("pass15").disabled = true;
            }

        }

        function ask5() {
            var inps = document.eForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer2-5", parseInt(inp.value));
                    sessionStorage.setItem("snk15", parseInt(1, 10));
                }
            }
            if (document.eForm.d5[5].checked) {

                sessionStorage.setItem("pass15", 1);
            } else {
                sessionStorage.setItem("pass15", 0)
            }

            for (var i = 0; i < document.eForm.d5.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.eForm.d5[i].checked) {
                    flag = true;
                    document.getElementById("select26").disabled = false;
                    document.getElementById("select27").disabled = false;
                    document.getElementById("select28").disabled = false;
                    document.getElementById("select29").disabled = false;
                    document.getElementById("select30").disabled = false;
                    document.getElementById("pass16").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select26").disabled = true;
                document.getElementById("select27").disabled = true;
                document.getElementById("select28").disabled = true;
                document.getElementById("select29").disabled = true;
                document.getElementById("select30").disabled = true;
                document.getElementById("pass16").disabled = true;
            }


        }

        function ask6() {
            var inps = document.fForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer2-6", parseInt(inp.value));
                    sessionStorage.setItem("snk16", parseInt(1, 10));
                }
            }
            if (document.fForm.d6[5].checked) {

                sessionStorage.setItem("pass16", 1);
            } else {
                sessionStorage.setItem("pass16", 0)
            }

            for (var i = 0; i < document.fForm.d6.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.fForm.d6[i].checked) {
                    flag = true;
                    document.getElementById("select31").disabled = false;
                    document.getElementById("select32").disabled = false;
                    document.getElementById("select33").disabled = false;
                    document.getElementById("select34").disabled = false;
                    document.getElementById("select35").disabled = false;
                    document.getElementById("pass17").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select31").disabled = true;
                document.getElementById("select32").disabled = true;
                document.getElementById("select33").disabled = true;
                document.getElementById("select34").disabled = true;
                document.getElementById("select35").disabled = true;
                document.getElementById("pass17").disabled = true;
            }

        }

        function ask7() {
            var inps = document.gForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer2-7", parseInt(inp.value));
                    sessionStorage.setItem("snk17", parseInt(1, 10));
                }
            }
            if (document.gForm.d7[5].checked) {

                sessionStorage.setItem("pass17", 1);
            } else {
                sessionStorage.setItem("pass17", 0)
            }

            for (var i = 0; i < document.gForm.d7.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.gForm.d7[i].checked) {
                    flag = true;
                    document.getElementById("select36").disabled = false;
                    document.getElementById("select37").disabled = false;
                    document.getElementById("select38").disabled = false;
                    document.getElementById("select39").disabled = false;
                    document.getElementById("select40").disabled = false;
                    document.getElementById("pass18").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select36").disabled = true;
                document.getElementById("select37").disabled = true;
                document.getElementById("select38").disabled = true;
                document.getElementById("select39").disabled = true;
                document.getElementById("select40").disabled = true;
                document.getElementById("pass18").disabled = true;
            }

        }

        function ask8() {
            var inps = document.hForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer2-8", parseInt(inp.value));
                    sessionStorage.setItem("snk18", parseInt(1, 10));
                }
            }
            if (document.hForm.d8[5].checked) {

                sessionStorage.setItem("pass18", 1);
            } else {
                sessionStorage.setItem("pass18", 0)
            }

            for (var i = 0; i < document.hForm.d8.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.hForm.d8[i].checked) {
                    flag = true;
                    document.getElementById("select41").disabled = false;
                    document.getElementById("select42").disabled = false;
                    document.getElementById("select43").disabled = false;
                    document.getElementById("select44").disabled = false;
                    document.getElementById("select45").disabled = false;
                    document.getElementById("pass19").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select41").disabled = true;
                document.getElementById("select42").disabled = true;
                document.getElementById("select43").disabled = true;
                document.getElementById("select44").disabled = true;
                document.getElementById("select45").disabled = true;
                document.getElementById("pass19").disabled = true;
            }

        }

        function ask9() {
            var inps = document.iForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer2-9", parseInt(inp.value));
                    sessionStorage.setItem("snk19", parseInt(1, 10));
                }
            }
            if (document.iForm.d9[5].checked) {

                sessionStorage.setItem("pass19", 1);
            } else {
                sessionStorage.setItem("pass19", 0)
            }

            for (var i = 0; i < document.iForm.d9.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.iForm.d9[i].checked) {
                    flag = true;
                    document.getElementById("select46").disabled = false;
                    document.getElementById("select47").disabled = false;
                    document.getElementById("select48").disabled = false;
                    document.getElementById("select49").disabled = false;
                    document.getElementById("select50").disabled = false;
                    document.getElementById("pass20").disabled = false;
                }
            }

            // 何も選択されていない場合の処理
            if (!flag) {
                document.getElementById("select46").disabled = true;
                document.getElementById("select47").disabled = true;
                document.getElementById("select48").disabled = true;
                document.getElementById("select49").disabled = true;
                document.getElementById("select50").disabled = true;
                document.getElementById("pass20").disabled = true;
            }

        }

        function ask10() {
            var inps = document.jForm.elements;
            for (var i = 0; i < 6; i++) {
                var inp = inps[i];
                if (inp.checked || inp.options) {
                    sessionStorage.setItem("Answer2-10", parseInt(inp.value));
                    sessionStorage.setItem("snk20", parseInt(1, 10));
                }
            }
            if (document.jForm.d10[5].checked) {

                sessionStorage.setItem("pass20", 1);
            } else {
                sessionStorage.setItem("pass20", 0)
            }

            for (var i = 0; i < document.jForm.d10.length; i++) {

                // i番目のラジオボタンがチェックされているかを判定
                if (document.jForm.d10[i].checked) {
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
                sessionStorage.setItem("comment11", value);
            } else if (tarea[0] == 0) {
                sessionStorage.setItem("comment11", "解答なし");
            }
            if (tarea[1] == 1) {
                var textContent2 = document.getElementById("textarea2");
                var value = textContent2.value;
                sessionStorage.setItem("comment12", value);
            } else if (tarea[1] == 0) {
                sessionStorage.setItem("comment12", "解答なし");
            }
            if (tarea[2] == 1) {
                var textContent3 = document.getElementById("textarea3");
                var value = textContent3.value;
                sessionStorage.setItem("comment13", value);
            } else if (tarea[2] == 0) {
                sessionStorage.setItem("comment13", "解答なし");
            }
            if (tarea[3] == 1) {
                var textContent4 = document.getElementById("textarea4");
                var value = textContent4.value;
                sessionStorage.setItem("comment14", value);
            } else if (tarea[3] == 0) {
                sessionStorage.setItem("comment14", "解答なし");
            }
            if (tarea[4] == 1) {
                var textContent5 = document.getElementById("textarea5");
                var value = textContent5.value;
                sessionStorage.setItem("comment15", value);
            } else if (tarea[4] == 0) {
                sessionStorage.setItem("comment15", "解答なし");
            }
            if (tarea[5] == 1) {
                var textContent6 = document.getElementById("textarea6");
                var value = textContent6.value;
                sessionStorage.setItem("comment16", value);
            } else if (tarea[5] == 0) {
                sessionStorage.setItem("comment16", "解答なし");
            }
            if (tarea[6] == 1) {
                var textContent7 = document.getElementById("textarea7");
                var value = textContent7.value;
                sessionStorage.setItem("comment17", value);
            } else if (tarea[6] == 0) {
                sessionStorage.setItem("comment17", "解答なし");
            }
            if (tarea[7] == 1) {
                var textContent8 = document.getElementById("textarea8");
                var value = textContent8.value;
                sessionStorage.setItem("comment18", value);
            } else if (tarea[7] == 0) {
                sessionStorage.setItem("comment18", "解答なし");
            }
            if (tarea[8] == 1) {
                var textContent9 = document.getElementById("textarea9");
                var value = textContent9.value;
                sessionStorage.setItem("comment19", value);
            } else if (tarea[8] == 0) {
                sessionStorage.setItem("comment19", "解答なし");
            }
            if (tarea[9] == 1) {
                var textContent10 = document.getElementById("textarea10");
                var value = textContent10.value;
                sessionStorage.setItem("comment20", value);
            } else if (tarea[9] == 0) {
                sessionStorage.setItem("comment20", "解答なし");
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
            $("[name=d1]").one('click', function() {
                if (num1 == 0) {
                    num1++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=d2]").one('click', function() {
                if (num2 == 0) {
                    num2++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=d3]").one('click', function() {
                if (num3 == 0) {
                    num3++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=d4]").one('click', function() {
                if (num4 == 0) {
                    num4++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=d5]").one('click', function() {
                if (num5 == 0) {
                    num5++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=d6]").one('click', function() {
                if (num6 == 0) {
                    num6++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=d7]").one('click', function() {
                if (num7 == 0) {
                    num7++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=d8]").one('click', function() {
                if (num8 == 0) {
                    num8++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=d9]").one('click', function() {
                if (num9 == 0) {
                    num9++;
                    num++;
                }
                $('#progress1').attr("value", num);
            });
            $("[name=d10]").one('click', function() {
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
        <input type="submit" name="heart" value="戻る" class="btn-gradient-3d-simple2">
        <input type="submit" name="study" value="次へ" class="btn-gradient-3d-simple2">
        <input type="submit" name="progress" id="next" value="進行度確認へ" class="btn-gradient-3d-simple">
    </form>

    <script>
        window.onload = function() {
            var form = document.getElementById('submitform');
            form.addEventListener('submit', function() {
                saveContent();
                var Answers = document.getElementById('Answers');
                var Answer = new Array(sessionStorage.getItem("Answer2-1"),
                    sessionStorage.getItem("Answer2-2"),
                    sessionStorage.getItem("Answer2-3"),
                    sessionStorage.getItem("Answer2-4"),
                    sessionStorage.getItem("Answer2-5"),
                    sessionStorage.getItem("Answer2-6"),
                    sessionStorage.getItem("Answer2-7"),
                    sessionStorage.getItem("Answer2-8"),
                    sessionStorage.getItem("Answer2-9"),
                    sessionStorage.getItem("Answer2-10"),
                    sessionStorage.getItem("comment11"),
                    sessionStorage.getItem("comment12"),
                    sessionStorage.getItem("comment13"),
                    sessionStorage.getItem("comment14"),
                    sessionStorage.getItem("comment15"),
                    sessionStorage.getItem("comment16"),
                    sessionStorage.getItem("comment17"),
                    sessionStorage.getItem("comment18"),
                    sessionStorage.getItem("comment19"),
                    sessionStorage.getItem("comment20"),
                    3);
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