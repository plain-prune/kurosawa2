<!doctype html>
<html lang="ja">

<head>
	<!-- Required meta tags -->
	<meta charset="Shift JIS">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<title>自分メーター</title>
</head>

<body>

	<main>
		<?php
		//ディレクトリの確認と作成　参考：https://ysklog.net/php/2873.html
		function CheckDirectory($directory_path)
		{
			if (file_exists($directory_path)) {;
			} else {
				if (mkdir($directory_path, 0777)) {
					chmod($directory_path, 0777);
				}
			}
		}
		/**
		 * 参考：http://program-memo.com/archives/512
		 * CSVを生成
		 * @param array CSVに変換する2次元配列
		 * @param string CSVの保存先
		 */
		function create_csv($data1, $save_path)
		{

			//一時データを開く
			$fp = fopen('php://temp', 'r+b');

			//fputcsvでCSVデータを作る
			foreach ($data1 as $val) {
				fputcsv($fp, $val);
			}

			//ファイルポインタを先頭に戻す
			rewind($fp);

			//ストリームの中身をテキストデータに変換、
			//さらにテキストデータをUTF-8からSJIS-winに変換する
			$str = str_replace(PHP_EOL, "\r\n", stream_get_contents($fp));
			$str = mb_convert_encoding($str, 'SJIS-win', 'UTF-8');

			//一時データのファイルポインタを閉じる
			fclose($fp);

			//css_fileを生成して、データを書き込んで保存する
			$fp2 = fopen($save_path, "w");
			fwrite($fp2, $str);
			fclose($fp2);
		}

		//一列のcss_fileの作成
		function create_csv2($data1, $save_path)
		{

			//一時データを開く
			$fp = fopen('php://temp', 'r+b');

			//fputcsvでCSVデータを作る
			foreach ($data1 as $val) {
				fputcsv($fp, $val);
			}
			//ファイルポインタを先頭に戻す
			rewind($fp);

			//ストリームの中身をテキストデータに変換、
			//さらにテキストデータをUTF-8からSJIS-winに変換する
			$str = str_replace(PHP_EOL, "\r\n", stream_get_contents($fp));
			$str = mb_convert_encoding($str, 'SJIS-win', 'UTF-8');

			//一時データのファイルポインタを閉じる
			fclose($fp);

			//css_fileを生成して、データを書き込んで保存する
			$fp2 = fopen($save_path, "w");
			fwrite($fp2, $str);
			fclose($fp2);
		}

		//progress_home.htmlからデータを受け取り、それぞれの配列に移す

		$array = json_decode($_POST['saves']);
		for ($i = 0; $i < 60; $i++) {
			if ($array[$i] == null) {
				$array[$i] = 0;
			}
			$data[$i] = $array[$i];
		}

		for ($i = 60, $j = 0; $i < 120; $i++, $j++) {
			$text[$j] = $array[$i];
			if ($text[$j] == '') {
				$text[$j] = '解答なし';
			}
		}
		for ($i = 0; $i < 120; $i++) {
			$dbdata[$i] = $array[$i];
		}
		$dbdata[120] = 0;
		require('dbconnect.php');
		$date = dbsave($dbdata);

		$_SESSION['flag'] = 0;
		$my_name = $_SESSION['name'];
		$input_date = substr($date['test_date'], 0, 10);
		$grade = $_SESSION['grade'];
		$y_date = substr($input_date, 0, 4);

		$gender = $_SESSION['gender'];

		//合計の計算
		$sum = 0;
		$sum1 = 0;
		$sum2 = 0;
		$sum3 = 0;
		$sum4 = 0;
		$sum5 = 0;
		$sum6 = 0;

		for ($i = 0; $i < 10; $i++) {
			$sum += $data[$i];
		}
		for ($i = 10; $i < 20; $i++) {
			$sum2 += $data[$i];
		}
		for ($i = 20; $i < 30; $i++) {
			$sum3 += $data[$i];
		}
		for ($i = 30; $i < 40; $i++) {
			$sum4 += $data[$i];
		}
		for ($i = 40; $i < 50; $i++) {
			$sum5 += $data[$i];
		}
		for ($i = 50; $i < 60; $i++) {
			$sum6 += $data[$i];
		}

		// 保存データ
		$data1 =
			[
				["こころ", "点数", "コメント", "しゃかい", "点数", "コメント", "がくしゅう", "点数", "コメント", "からだ", "点数", "コメント", "せいかつ", "点数", "コメント", "身のまわり", "点数", "コメント"],
				["第1問", $data[0], $text[0], "第1問", $data[10], $text[10], "第1問", $data[20], $text[20], "第1問", $data[30], $text[30], "第1問", $data[40], $text[40], "第1問", $data[50], $text[50]],
				["第2問", $data[1], $text[1], "第2問", $data[11], $text[11], "第2問", $data[21], $text[21], "第2問", $data[31], $text[31], "第2問", $data[41], $text[41], "第2問", $data[51], $text[51]],
				["第3問", $data[2], $text[2], "第3問", $data[12], $text[12], "第3問", $data[22], $text[22], "第3問", $data[32], $text[32], "第3問", $data[42], $text[42], "第3問", $data[52], $text[52]],
				["第4問", $data[3], $text[3], "第4問", $data[13], $text[13], "第4問", $data[23], $text[23], "第4問", $data[33], $text[33], "第4問", $data[43], $text[43], "第4問", $data[53], $text[53]],
				["第5問", $data[4], $text[4], "第5問", $data[14], $text[14], "第5問", $data[24], $text[24], "第5問", $data[34], $text[34], "第5問", $data[44], $text[44], "第5問", $data[54], $text[54]],
				["第6問", $data[5], $text[5], "第6問", $data[15], $text[15], "第6問", $data[25], $text[25], "第6問", $data[35], $text[35], "第6問", $data[45], $text[45], "第6問", $data[55], $text[55]],
				["第7問", $data[6], $text[6], "第7問", $data[16], $text[16], "第7問", $data[26], $text[26], "第7問", $data[36], $text[36], "第7問", $data[46], $text[46], "第7問", $data[56], $text[56]],
				["第8問", $data[7], $text[7], "第8問", $data[17], $text[17], "第8問", $data[27], $text[27], "第8問", $data[37], $text[37], "第8問", $data[47], $text[47], "第8問", $data[57], $text[57]],
				["第9問", $data[8], $text[8], "第9問", $data[18], $text[18], "第9問", $data[28], $text[28], "第9問", $data[38], $text[38], "第9問", $data[48], $text[48], "第9問", $data[58], $text[58]],
				["第10問", $data[9], $text[9], "第10問", $data[19], $text[19], "第10問", $data[29], $text[29], "第10問", $data[39], $text[39], "第10問", $data[49], $text[49], "第10問", $data[59], $text[59]],
				["合計", $sum, '', '', $sum2, '', '', $sum3, '', '', $sum4, '', '', $sum5, '', '', $sum6],
				["症状など", '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''],
			];


		$under = "_";
		$data2[0][0] = $my_name;
		$data2[0][1] = $grade;
		for ($i = 2; $i < 62; $i++) {
			$data2[0][$i] = $data[$i - 2];
		}
		//年度を求める
		$m_date = substr($input_date, 5, 2);
		if ($m_date == 1 || $m_date == 2 || $m_date  == 3) {
			$y_date = $y_date - 1;
		}
		// css_fileの生成(保存するフォルダーの名前によってプログラムを変更する)
		//$save_path = "csv_file/$grade$my_name$input_date.csv";
		//年度ごと
		//$save_path = "csv_file/$y_date/$grade$my_name$input_date.csv";
		//学年ごと
		//$save_path = "csv_file/$grade/$grade$my_name$input_date.csv";
		//年度の学年ごと
		if ($_SESSION['kyoushiflag'] == 0) {
			$save_path = "csv_file/$y_date/$grade/$gender$under$grade$under$my_name$under$input_date.csv";

			//ファイル保存先のディレクトリの作成
			$directory_path1 = "csv_file/$y_date";
			$directory_path2 = "csv_file/$y_date/$grade";

			CheckDirectory($directory_path1);
			CheckDirectory($directory_path2);
			create_csv($data1, $save_path);
		} else if ($_SESSION['kyoushiflag'] == 1) {
			$_POST["student_name"] = $_SESSION['uid'];

			$select_id = $_SESSION['student_id'];

			$id = htmlspecialchars($_POST["student_name"]);
			session_start();
			$_SESSION['student_id'] = $id;

			$sid = $_SESSION['student_id'];
			require('dbconnect2.php');
			$sql = 'SELECT username,kyoushiflag FROM user WHERE id=' . $select_id . '';
			$stmt = $dbh->prepare($sql);
			$stmt->execute();
			$rec = $stmt->fetch(PDO::FETCH_ASSOC);
			$dbh = null;
			$s_name = $rec['username'];

			if ($rec['kyoushiflag'] == 1) {
				$save_path = "csv_file/$y_date/$grade/教師$under$gender$under$grade$under$s_name$under$input_date.csv";

				//ファイル保存先のディレクトリの作成
				$directory_path1 = "csv_file/$y_date";
				$directory_path2 = "csv_file/$y_date/$grade";

				CheckDirectory($directory_path1);
				CheckDirectory($directory_path2);
				create_csv($data1, $save_path);
			} else if ($rec['kyoushiflag'] == 0) {
				$save_path = "csv_file/$y_date/$grade/$gender$under$grade$under$s_name$under$input_date.csv";

				//ファイル保存先のディレクトリの作成
				$directory_path1 = "csv_file/$y_date";
				$directory_path2 = "csv_file/$y_date/$grade";

				CheckDirectory($directory_path1);
				CheckDirectory($directory_path2);
				create_csv($data1, $save_path);
			}
		}

		?>
		<script>
			var max = 0;
			var sum = 0,
				sum2 = 0,
				sum3 = 0,
				sum4 = 0,
				sum5 = 0,
				sum6 = 0;
			var max = 0;
			var pass = [60];

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

			for (var i = 0; i < 7; i++) {
				if (max < sum) {
					max = sum;
				}
				if (max < sum2) {
					max = sum2;
				}
				if (max < sum3) {
					max = sum3;
				}
				if (max < sum4) {
					max = sum4;
				}
				if (max < sum5) {
					max = sum5;
				}
				if (max < sum6) {
					max = sum6;
				}
			}

			var AP = 0;
			if ((sum == sum2 && sum3 == sum4) && sum5 == sum6) {
				AP = 1;
			}

			if (AP == 1) {
				location.assign("result7.php");
			} else if (sum == max) {
				location.assign("result.php");
			} else if (sum2 == max) {
				location.assign("result2.php");
			} else if (sum3 == max) {
				location.assign("result3.php");
			} else if (sum4 == max) {
				location.assign("result4.php");
			} else if (sum5 == max) {
				location.assign("result5.php");
			} else if (sum6 == max) {
				location.assign("result6.php");
			}
		</script>
	</main>
</body>

</html>