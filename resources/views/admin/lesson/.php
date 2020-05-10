<?php
//------------------------------
// カレンダーを作成する
//------------------------------

// カレンダーを表示する「年」を指定する
$year = 2020;

// 年始のタイムスタンプを取得
$timestamp = strtotime("{$year}-01-01 00:00:00");
$weekday = 0;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>カレンダーを作成する</title>
<style>
main {
	display: flex;
	flex-wrap: wrap;
}

table {
	margin-right: 10px;
	margin-bottom: 20px;
	border: 1px solid #555;
}

table caption {
	padding: 7px 0;
	font-size: 86%;
	color: #fff;
	line-height: 1.0em;
	background: #555;
}
table th,
table td {
	padding: 0 5px;
	font-size: 86%;
	color: #222;
	text-align: center;
}
table td {
	text-align: right;
}
</style>
</head>
<body>
<main>
	<?php for( $i=1; $i<=12; $i++): ?>
	<table>
		<caption><?php echo $i; ?>月</caption>
		<thead>
			<tr>
				<th>日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// 開始日を取得
			$start_day_timestamp = mktime(0,0,0,$i,1,$year);
		
			// 末日を取得
			$end_day_timestamp = mktime(0,0,0,($i+1),0,$year);
			$end_day = date("d", $end_day_timestamp);
	
			for( $j=1; $j <= $end_day; $j++ ) {
				
				if( $j === 1 ) {
		
					echo '<tr>';
		
					$weekday = date("w", $start_day_timestamp);
					
					for( $k=0; $k<$weekday; $k++ ) {
						echo '<td></td>';
					} 
				}
		
				echo '<td><a href="/aaa?date='.$j.'">'.$j.'</a></td>';
				$weekday++;
		
				if( 6 < $weekday ) {
					echo '</tr><tr>';
					$weekday = 0;
				}
			}
			?>
		</tbody>
	</table>
	<?php endfor; ?>
</main>
</body>
</html>