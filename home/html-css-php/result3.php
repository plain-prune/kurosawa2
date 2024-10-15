<?php session_start(); ?>
<script>
	var sum = 0,
		sum2 = 0,
		sum3 = 0,
		sum4 = 0,
		sum5 = 0,
		sum6 = 0;
	var num = 0,
		num2 = 0,
		num3 = 0,
		num4 = 0,
		num5 = 0,
		num6 = 0;
	var max = 0;
	var passdata1 = 0,
		passdata2 = 0,
		passdata3 = 0,
		passdata4 = 0,
		passdata5 = 0,
		passdata6 = 0;
	var pass = [60];
	my_name = sessionStorage.getItem("name");
	date = sessionStorage.getItem("date");
	grade = sessionStorage.getItem("grade");

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
	pass[1] = sessionStorage.getItem("pass1");
	pass[2] = sessionStorage.getItem("pass2");
	pass[3] = sessionStorage.getItem("pass3");
	pass[4] = sessionStorage.getItem("pass4");
	pass[5] = sessionStorage.getItem("pass5");
	pass[6] = sessionStorage.getItem("pass6");
	pass[7] = sessionStorage.getItem("pass7");
	pass[8] = sessionStorage.getItem("pass8");
	pass[9] = sessionStorage.getItem("pass9");
	pass[10] = sessionStorage.getItem("pass10");
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
	pass[11] = sessionStorage.getItem("pass11");
	pass[12] = sessionStorage.getItem("pass12");
	pass[13] = sessionStorage.getItem("pass13");
	pass[14] = sessionStorage.getItem("pass14");
	pass[15] = sessionStorage.getItem("pass15");
	pass[16] = sessionStorage.getItem("pass16");
	pass[17] = sessionStorage.getItem("pass17");
	pass[18] = sessionStorage.getItem("pass18");
	pass[19] = sessionStorage.getItem("pass19");
	pass[20] = sessionStorage.getItem("pass20");
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
	pass[21] = sessionStorage.getItem("pass21");
	pass[22] = sessionStorage.getItem("pass22");
	pass[23] = sessionStorage.getItem("pass23");
	pass[24] = sessionStorage.getItem("pass24");
	pass[25] = sessionStorage.getItem("pass25");
	pass[26] = sessionStorage.getItem("pass26");
	pass[27] = sessionStorage.getItem("pass27");
	pass[28] = sessionStorage.getItem("pass28");
	pass[29] = sessionStorage.getItem("pass29");
	pass[30] = sessionStorage.getItem("pass30");
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
	pass[31] = sessionStorage.getItem("pass31");
	pass[32] = sessionStorage.getItem("pass32");
	pass[33] = sessionStorage.getItem("pass33");
	pass[34] = sessionStorage.getItem("pass34");
	pass[35] = sessionStorage.getItem("pass35");
	pass[36] = sessionStorage.getItem("pass36");
	pass[37] = sessionStorage.getItem("pass37");
	pass[38] = sessionStorage.getItem("pass38");
	pass[39] = sessionStorage.getItem("pass39");
	pass[40] = sessionStorage.getItem("pass40");
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
	pass[41] = sessionStorage.getItem("pass41");
	pass[42] = sessionStorage.getItem("pass42");
	pass[43] = sessionStorage.getItem("pass43");
	pass[44] = sessionStorage.getItem("pass44");
	pass[45] = sessionStorage.getItem("pass45");
	pass[46] = sessionStorage.getItem("pass46");
	pass[47] = sessionStorage.getItem("pass47");
	pass[48] = sessionStorage.getItem("pass48");
	pass[49] = sessionStorage.getItem("pass49");
	pass[50] = sessionStorage.getItem("pass50");
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
	pass[51] = sessionStorage.getItem("pass51");
	pass[52] = sessionStorage.getItem("pass52");
	pass[53] = sessionStorage.getItem("pass53");
	pass[54] = sessionStorage.getItem("pass54");
	pass[55] = sessionStorage.getItem("pass55");
	pass[56] = sessionStorage.getItem("pass56");
	pass[57] = sessionStorage.getItem("pass57");
	pass[58] = sessionStorage.getItem("pass58");
	pass[59] = sessionStorage.getItem("pass59");
	pass[60] = sessionStorage.getItem("pass60");
	var text = [59];
	//1ページ目
	text[0] = sessionStorage.getItem("comment");
	text[1] = sessionStorage.getItem("comment2");
	text[2] = sessionStorage.getItem("comment3");
	text[3] = sessionStorage.getItem("comment4");
	text[4] = sessionStorage.getItem("comment5");
	text[5] = sessionStorage.getItem("comment6");
	text[6] = sessionStorage.getItem("comment7");
	text[7] = sessionStorage.getItem("comment8");
	text[8] = sessionStorage.getItem("comment9");
	text[9] = sessionStorage.getItem("comment10");
	//2ページ目
	text[10] = sessionStorage.getItem("comment11");
	text[11] = sessionStorage.getItem("comment12");
	text[12] = sessionStorage.getItem("comment13");
	text[13] = sessionStorage.getItem("comment14");
	text[14] = sessionStorage.getItem("comment15");
	text[15] = sessionStorage.getItem("comment16");
	text[16] = sessionStorage.getItem("comment17");
	text[17] = sessionStorage.getItem("comment18");
	text[18] = sessionStorage.getItem("comment19");
	text[19] = sessionStorage.getItem("comment20");
	//3ページ目
	text[20] = sessionStorage.getItem("comment21");
	text[21] = sessionStorage.getItem("comment22");
	text[22] = sessionStorage.getItem("comment23");
	text[23] = sessionStorage.getItem("comment24");
	text[24] = sessionStorage.getItem("comment25");
	text[25] = sessionStorage.getItem("comment26");
	text[26] = sessionStorage.getItem("comment27");
	text[27] = sessionStorage.getItem("comment28");
	text[28] = sessionStorage.getItem("comment29");
	text[29] = sessionStorage.getItem("comment30");
	//4ページ目
	text[30] = sessionStorage.getItem("comment31");
	text[31] = sessionStorage.getItem("comment32");
	text[32] = sessionStorage.getItem("comment33");
	text[33] = sessionStorage.getItem("comment34");
	text[34] = sessionStorage.getItem("comment35");
	text[35] = sessionStorage.getItem("comment36");
	text[36] = sessionStorage.getItem("comment37");
	text[37] = sessionStorage.getItem("comment38");
	text[38] = sessionStorage.getItem("comment39");
	text[39] = sessionStorage.getItem("comment40");
	//5ページ目
	text[40] = sessionStorage.getItem("comment41");
	text[41] = sessionStorage.getItem("comment42");
	text[42] = sessionStorage.getItem("comment43");
	text[43] = sessionStorage.getItem("comment44");
	text[44] = sessionStorage.getItem("comment45");
	text[45] = sessionStorage.getItem("comment46");
	text[46] = sessionStorage.getItem("comment47");
	text[47] = sessionStorage.getItem("comment48");
	text[48] = sessionStorage.getItem("comment49");
	text[49] = sessionStorage.getItem("comment50");
	//6ページ目
	text[50] = sessionStorage.getItem("comment51");
	text[51] = sessionStorage.getItem("comment52");
	text[52] = sessionStorage.getItem("comment53");
	text[53] = sessionStorage.getItem("comment54");
	text[54] = sessionStorage.getItem("comment55");
	text[55] = sessionStorage.getItem("comment56");
	text[56] = sessionStorage.getItem("comment57");
	text[57] = sessionStorage.getItem("comment58");
	text[58] = sessionStorage.getItem("comment59");
	text[59] = sessionStorage.getItem("comment60");

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

	for (var i = 1; i < 61; i++) {
		if (i <= 10) {
			num += parseInt(pass[i], 10);
		} else if (i <= 20) {
			num2 += parseInt(pass[i], 10);
		} else if (i <= 30) {
			num3 += parseInt(pass[i], 10);
		} else if (i <= 40) {
			num4 += parseInt(pass[i], 10);
		} else if (i <= 50) {
			num5 += parseInt(pass[i], 10);
		} else {
			num6 += parseInt(pass[i], 10);
		}


	}

	num2 - num;
	num3 - (num + num2);
	num4 - (num + num2 + num3);
	num5 - (num + num2 + num3 + num4);
	num6 - (num + num2 + num3 + num4 + num5);

	if (sum >= 1) {
		passdata1 = Math.round(sum) / (10 - num);
	} else {
		passdata1 = 0;
	}
	if (sum2 >= 1) {
		passdata2 = Math.round(sum2) / (10 - num2);
	} else {
		passdata2 = 0;
	}
	if (sum3 >= 1) {
		passdata3 = Math.round(sum3) / (10 - num3);
	} else {
		passdata3 = 0;
	}
	if (sum4 >= 1) {
		passdata4 = Math.round(sum4) / (10 - num4);
	} else {
		passdata4 = 0;
	}
	if (sum5 >= 1) {
		passdata5 = Math.round(sum5) / (10 - num5);
	} else {
		passdata5 = 0;
	}
	if (sum6 >= 1) {
		passdata6 = Math.round(sum6) / (10 - num6);
	} else {
		passdata6 = 0;
	}
</script>

<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>自分メータ</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.2/xlsx.full.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>
	<script src="memo.js"></script><!--追加-->
	<link rel="stylesheet" href="css_file/result_c.css">
</head>

<body>
	<div id="center">
		<form name="nForm">


			<tr>
				<h1>結果</h1>
				<hr class="cp_hr06">
				</hr>

				<div class="kokuban-t2"><span class="title-t2">あなたは博士タイプ！</span><ruby>博士<rt>はかせ</rt></ruby>のように<ruby>物事<rt>ものごと</rt></ruby>を<ruby>追及<rt>ついきゅう</rt></ruby>して、<ruby>新<rt>あたら</rt></ruby>しいことを<ruby>身<rt>み</rt></ruby>に<ruby>付<rt>つ</rt></ruby>けたり、<ruby>発見<rt>はっけん</rt></ruby>することが
					<ruby>得意<rt>とくい</rt></ruby>です。あなたは、こつこつと<ruby>努力<rt>どりょく</rt></ruby>して、
					<ruby>好<rt>す</rt></ruby>きな<ruby>勉強<rt>べんきょう</rt></ruby>だけでなく、<ruby>苦手<rt>にがて</rt></ruby>なことにもチャレンジできます。ノートの
					<ruby>取<rt>と</rt></ruby>り<ruby>方<rt>かた</rt></ruby>や、<ruby>何<rt>なに</rt></ruby>かを<ruby>覚<rt>おぼ</rt></ruby>えるときも
					<ruby>自分<rt>じぶん</rt></ruby>なりに<ruby>工夫<rt>くふう</rt></ruby>していますね。そんな<ruby>強<rt>つよ</rt></ruby>みを
					<ruby>活<rt>い</rt></ruby>かして、<ruby>様々<rt>さまざま</rt></ruby>なことに<ruby>挑戦<rt>ちょうせん</rt></ruby>し、
					<ruby>知識<rt>ちしき</rt></ruby>を<ruby>深<rt>ふか</rt></ruby>めて、<ruby>未来<rt>みらい</rt></ruby>への
					<ruby>可能性<rt>かのうせい</rt></ruby>を<ruby>広<rt>ひろ</rt></ruby>げましょう。
					<!--メモの表示・非表示-->
					<br><br><span class="memo">メモ</span><br>
					<?php
					require('question_data.php');
					$question=q_data();
					$question_json = json_encode($question); //JSONエンコード
					?>
					<div id="memo" class="memo">
						<table id="memo_table">
							<tr>
								<th>質問</th>
								<th>メモ</th>
							</tr>
						<script>
							let question = JSON.parse('<?php echo $question_json; ?>'); //JSONデコード
							for(i=0;i<60;i++){
								if(text[i].length>0){		
									document.getElementById('memo_table').insertAdjacentHTML("beforeend","<tr><td>"+question[i]+"</td><td>"+text[i]+"</td></tr>");
								}
							}
							document.getElementById("memo").style.display ="none";
						</script>	
						</table>	
					</div>
					<button type="button" id="btn_memo" onclick="memo_func()">表示</button>
					<!--メモの表示・非表示-->
				</div>
				<table class="table table-bordered table-condensed table-to-export" data-sheet-name="東京都区一覧">
					<tr>
						<th></th>
						<th>合計点</th>
						<th>平均点</th>
					</tr>
					<th>1 こころ</th>
					<td bgcolor="#FFFFFF" width="top">
						<script>
							document.write(sum)
						</script>点
					<td bgcolor="#FFFFFF" width="top">
						<script>
							document.write(passdata1)
						</script>点
			</tr>

			<tr>
				<th>2 しゃかい</th>
				<td bgcolor="#FFFFFF" valign="top">
					<script>
						document.write(sum2)
					</script>点
				<td bgcolor="#FFFFFF" width="top">
					<script>
						document.write(passdata2)
					</script>点
			</tr>

			<tr>
				<th>3 がくしゅう</th>
				<td bgcolor="#FFFFFF" valign="top">
					<script>
						document.write(sum3)
					</script>点
				<td bgcolor="#FFFFFF" width="top">
					<script>
						document.write(passdata3)
					</script>点
			</tr>

			<tr>
				<th>4 からだ</th>
				<td bgcolor="#FFFFFF" valign="top">
					<script>
						document.write(sum4)
					</script>点
				<td bgcolor="#FFFFFF" width="top">
					<script>
						document.write(passdata4)
					</script>点
			</tr>

			<tr>
				<th>5 せいかつ</th>
				<td bgcolor="#FFFFFF" valign="top">
					<script>
						document.write(sum5)
					</script>点
				<td bgcolor="#FFFFFF" width="top">
					<script>
						document.write(passdata5)
					</script>点
			</tr>

			<tr>
				<th>6 身のまわり</th>
				<td bgcolor="#FFFFFF" valign="top">
					<script>
						document.write(sum6)
					</script>点
				<td bgcolor="#FFFFFF" width="top">
					<script>
						document.write(passdata6)
					</script>点
			</tr>

			</table>



			<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>

			<!-- チャート描画キャンバス -->
			<div><canvas id="myChart"></canvas></div>

			<!-- 各ボタン -->
			<div style="text-align:center">
				<script>
					//<button id="randomizeData">更新</button>
				</script>
			</div>
			<!-- メイン -->
			<script>
				// 色の設定
				var colorSet = {
					red: 'rgb(255, 99, 132)',
					orange: 'rgb(255, 159, 64)',
					yellow: 'rgb(255, 205, 86)',
					green: 'rgb(75, 192, 192)',
					blue: 'rgb(54, 162, 235)',
					purple: 'rgb(153, 102, 255)',
					grey: 'rgb(201, 203, 207)'
				};

				// 乱数生成(0～100)
				var rnd100 = function() {
					return Math.round(Math.random() * 100);
				};

				// 色のRGB変換
				var color = Chart.helpers.color;

				/*
				 * チャートの初期設定
				 */
				var config = {
					type: 'radar',
					data: {
						labels: ["1こころ", "2しゃかい", "3がくしゅう", "4からだ", "5せいかつ", "6身のまわり"],
						datasets: [{
								label: "自分",
								backgroundColor: color(colorSet.red).alpha(0.5).rgbString(),
								borderColor: colorSet.red,
								pointBackgroundColor: colorSet.red,
								data: [sum, sum2, sum3, sum4, sum5, sum6]

							},
							/*{
											//label: "先生",
											//backgroundColor: color(colorSet.blue).alpha(0.5).rgbString(),
											//borderColor: colorSet.blue,
											//pointBackgroundColor: colorSet.blue,
											data: [50, 40, 30, 20, 10, 0]
										},*/
						]
					},
					options: {
						animation: false,
						showTooltips: false,
						legend: {
							position: 'bottom'
						},
						title: {
							display: true,
							fontSize: 20,
							fontColor: '#666',
							text: 'チャート'
						},
						scale: {
							display: true,
							pointLabels: {
								fontSize: 15,
								fontColor: colorSet.yellow
							},
							ticks: {
								display: true,
								fontSize: 12,
								fontColor: colorSet.green,
								min: 0,
								max: 50,
								beginAtZero: true
							},
							gridLines: {
								display: true,
								color: colorSet.yellow
							}
						}
					}
				};

				/*
				 * チャートの作成
				 */
				var myRadar = new Chart($("#myChart"), config);

				/* 
				 * ランダムデータ（#reloadeData）
				 */
				/*$("#randomizeData").click(function(){
					config.data.datasets.forEach(function(dataset){
						dataset.data = dataset.data.map(function(){
							return rnd100();
						});
					});

					myRadar.update();
				});*/
			</script>



			<script language="javascript" type="text/javascript">
				// 出力するオブジェクト(Array)
				var array1 = [
					["こころ", " ", "コメント", "しゃかい", " ", "コメント", "がくしゅう", " ", "コメント", "からだ", " ", "コメント", "せいかつ", " ", "コメント", "身のまわり", " ", "コメント"],
					["第1問", data[0], text[0], "第1問", data[10], text[10], "第1問", data[20], text[20], "第1問", data[30], text[30], "第1問", data[40], text[40], "第1問", data[50], text[50]],
					["第2問", data[1], text[1], "第2問", data[11], text[11], "第2問", data[21], text[21], "第2問", data[31], text[31], "第2問", data[41], text[41], "第2問", data[51], text[51]],
					["第3問", data[2], text[2], "第3問", data[12], text[12], "第3問", data[22], text[22], "第3問", data[32], text[32], "第3問", data[42], text[42], "第3問", data[52], text[52]],
					["第4問", data[3], text[3], "第4問", data[13], text[13], "第4問", data[23], text[23], "第4問", data[33], text[33], "第4問", data[43], text[43], "第4問", data[53], text[53]],
					["第5問", data[4], text[4], "第5問", data[14], text[14], "第5問", data[24], text[24], "第5問", data[34], text[34], "第5問", data[44], text[44], "第5問", data[54], text[54]],
					["第6問", data[5], text[5], "第6問", data[15], text[15], "第6問", data[25], text[25], "第6問", data[35], text[35], "第6問", data[45], text[45], "第6問", data[55], text[55]],
					["第7問", data[6], text[6], "第7問", data[16], text[16], "第7問", data[26], text[26], "第7問", data[36], text[36], "第7問", data[46], text[46], "第7問", data[56], text[56]],
					["第8問", data[7], text[7], "第8問", data[17], text[17], "第8問", data[27], text[27], "第8問", data[37], text[37], "第8問", data[47], text[47], "第8問", data[57], text[57]],
					["第9問", data[8], text[8], "第9問", data[18], text[18], "第9問", data[28], text[28], "第9問", data[38], text[38], "第9問", data[48], text[48], "第9問", data[58], text[58]],
					["第10問", data[9], text[9], "第10問", data[19], text[19], "第10問", data[29], text[29], "第10問", data[39], text[39], "第10問", data[49], text[49], "第10問", data[59], text[59]],
					["合計", sum, , , sum2, , , sum3, , , sum4, , , sum5, , , sum6],
				];

				// SheetをWorkbookに追加する
				// 参照：https://github.com/SheetJS/js-xlsx/issues/163
				function sheet_to_workbook(sheet /*:Worksheet*/ , opts) /*:Workbook*/ {
					var n = opts && opts.sheet ? opts.sheet : "Sheet1";
					var sheets = {};
					sheets[n] = sheet;
					return {
						SheetNames: [n],
						Sheets: sheets
					};
				}

				// ArrayをWorkbookに変換する
				// 参照：https://github.com/SheetJS/js-xlsx/issues/163
				function aoa_to_workbook(data /*:Array<Array <any> >*/ , opts) /*:Workbook*/ {
					return sheet_to_workbook(XLSX.utils.aoa_to_sheet(data, opts), opts);
				}

				// stringをArrayBufferに変換する
				// 参照：https://stackoverflow.com/questions/34993292/how-to-save-xlsx-data-to-file-as-a-blob
				function s2ab(s) {
					var buf = new ArrayBuffer(s.length);
					var view = new Uint8Array(buf);
					for (var i = 0; i != s.length; ++i) view[i] = s.charCodeAt(i) & 0xFF;
					return buf;
				}
			</script>

			<?php require('result_postscript.php'); ?>
			<?php $i=0;for($i=0;$i<12;$i++){print'<br />';} ?>

			<input type="button" value="ホームに戻る" onclick=location.assign("../home_teacher.php") class="btn-gradient-3d-simple2">
</body>

</html>