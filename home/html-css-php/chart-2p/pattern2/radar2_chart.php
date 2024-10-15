<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>自分メーター</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.2/xlsx.full.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>
	<link rel="stylesheet" href="../../css_file/result_c.css">
</head>

<body>
	<div id="center">
		<form name="nForm">

			<?php
			session_start();
                        ini_set('display_errors', 0);
			#生徒、教師のデータをセッションから変数に挿入
			if ($_SESSION['ds2'] == '') {
				$_SESSION['ds2'] = $_POST['ds2'];
			}
			$ids1 = $_SESSION['ds1'];
			$ids2 = $_SESSION['ds2'];

			#db_inputにあるdbdataを呼び出し、DBのデータを取得する
			require('db_input.php');
			#phpの配列をjavascriptに変換する
			$add_sumS = (dbdata($ids1));
			$leave_sumS = (dbdata($ids2));
			$json_add_sumS = json_encode($add_sumS);
			$json_leave_sumS = json_encode($leave_sumS);
			?>

			<tr>
								<h1>結果</h1>
				<hr class="cp_hr06">
				</hr>


				<!-- 生徒側のデータの表の生成 -->
				<table class="table table-bordered table-condensed table-to-export" data-sheet-name="東京都区一覧">
					<tr>
						<th>自分</th>
						<th>合計点</th>
						<th>平均点</th>
					</tr>
					<?php
					$title = ["１こころ", "２しゃかい", "３がくしゅう", "４からだ", "５せいかつ", "６身のまわり"];
					$j = 0;
					for ($i = 0; $i < 6; $i++) {
					?>
						<th><?php print($title[$i]); ?></th>
						<td bgcolor="#FFFFFF" width="top">
							<script>
								document.write(<?php print($add_sumS[$j]); ?>)
							</script>点
						<td bgcolor="#FFFFFF" width="top">
							<script>
								document.write(<?php print($add_sumS[$j] / 10); ?>)
							</script>点
			</tr>
		<?php
						$j = $j + 1;
					} ?>

		</table>

		<!-- 先生側のデータの表の生成 -->
		<table class="table table-bordered table-condensed table-to-export" data-sheet-name="東京都区一覧">
			<tr>
				<th>先生</th>
				<th>合計点</th>
				<th>平均点</th>
			</tr>
			<?php
			$title = ["１こころ", "２しゃかい", "３がくしゅう", "４からだ", "５せいかつ", "６身のまわり"];
			$j = 0;
			for ($i = 0; $i < 6; $i++) {
			?>
				<th><?php print($title[$i]); ?></th>
				<td bgcolor="#FFFFFF" width="top">
					<script>
						document.write(<?php print($leave_sumS[$j]); ?>)
					</script>点
				<td bgcolor="#FFFFFF" width="top">
					<script>
						document.write(<?php print($leave_sumS[$j] / 10); ?>)
					</script>点
					</tr>
				<?php
				$j = $j + 1;
			} ?>

		</table>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>

		<!-- チャート描画キャンバス -->
		<div><canvas id="Chart1"></canvas></div>
		<div><canvas id="Chart2"></canvas></div>


		<!-- 各ボタン -->
		<div style="text-align:center">
			<script>
				//<button id="randomizeData">更新</button>
			</script>
		</div>
		<!-- メイン -->
		<script>
			//phpから変数を取得
			let js_add_sumS = <?php echo $json_add_sumS; ?>;
			let js_leave_sumS = <?php echo $json_leave_sumS; ?>;


			// 色の設定
			let colorSet = {
				red: 'rgb(255, 99, 132)',
				orange: 'rgb(255, 159, 64)',
				yellow: 'rgb(255, 205, 86)',
				green: 'rgb(75, 192, 192)',
				blue: 'rgb(54, 162, 235)',
				purple: 'rgb(153, 102, 255)',
				grey: 'rgb(201, 203, 207)'
			};

			// 色のRGB変換
			let color = Chart.helpers.color;

			//チャートの設定
			function conf(dataS,dataS2, nameS,nameS2,time) {

				let config = {
					type: 'radar',
					data: {
						labels: ["1こころ", "2しゃかい", "3がくしゅう", "4からだ", "5せいかつ", "6身のまわり"],
						datasets: [{
								label: nameS,
								backgroundColor: color(colorSet.red).alpha(0.5).rgbString(),
								borderColor: colorSet.red,
								pointBackgroundColor: colorSet.red,
								data: dataS

							},
							{
								label: nameS2,
								backgroundColor: color(colorSet.blue).alpha(0.5).rgbString(),
								borderColor: colorSet.blue,
								pointBackgroundColor: colorSet.blue,
								data: dataS2

							}
							
						],
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
							text: time
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
								fontColor: colorSet.black,
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
				return config;
			}

			Sname = "";
			time1 = "生徒";
			time2 = "教師";
			//チャートの作成
			let myRadar = new Chart($("#Chart1"), conf(js_add_sumS, js_leave_sumS,time1 , time2, Sname));
			
			</script>
			
		<?php 
			require('../../dbconnect2.php');
			$data2_id = $_SESSION['data2_id'];
			
			$name = $dbh->prepare('SELECT username FROM user WHERE id =?');
			$name->execute(array($data2_id));
			$name2 = $name ->fetch();
			$detail = $dbh->prepare('SELECT * FROM user_detail WHERE id =?');
			$detail->execute(array($data2_id));
			$details = $detail ->fetch();
			$data2_grade=$details['grade'];
			$data2_gender=$details['gender'];
			$data2_disability=$details['disability'];
			$data2_comment=$details['comment'];
		?>

		<input type="button" value="ホームに戻る" onclick=location.assign("../../../home_teacher.php") class="btn-gradient-3d-simple2">