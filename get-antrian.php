<?php
include ('config.php');
$aksi = $_REQUEST['aksi'];
if ($aksi == "tampilloket") {
  //ketahui jumlah total sehari...
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Loket' ORDER BY round(noantrian) DESC");
	$result = fetch_assoc($sql);
	$noantrian = $result['noantrian'];
	//nomor antrian, total yang ada + 1
	if($noantrian > 0) {
		$next_antrian = $noantrian + 1;
	} else {
		$next_antrian = 1;
	}
	echo '<div id="nomernya" align="center">';
  echo '<h1 class="display-1">';
  echo 'D'.$next_antrian;
  echo '</h1>';
  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
  echo '</div>';
  echo '<br>';

	exit();
}

if ($aksi == "printloket") {
  //ketahui jumlah total sehari...
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Loket' ORDER BY round(noantrian) DESC");
	$result = fetch_assoc($sql);
	$noantrian = $result['noantrian'];
	//nomor antrian, total yang ada + 1
	if($noantrian > 0) {
		$next_antrian = $noantrian + 1;
	} else {
		$next_antrian = 1;
	}
	echo '<div id="nomernya" align="center">';
  echo '<h1 class="display-1">';
  echo 'D'.$next_antrian;
  echo '</h1>';
  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
  echo '</div>';
  echo '<br>';

	?>

	<script>
	$(document).ready(function(){
		$("#btnKRM").on('click', function(){
			$("#formloket").submit(function(){
				$.ajax({
					url: "get-antrian.php?aksi=simpanloket&noantrian=<?php echo $next_antrian;?>",
					type:"POST",
					data:$(this).serialize(),
					success:function(data){
						setTimeout('$("#loading").hide()',1000);
						window.location.href = "index.php";
						}
					});
				return false;
			});
		});
	})
	</script>
	<?php
	exit();
}

//jika simpan
if ($aksi == "simpanloket") {
	//ambil nilai
	$noantrian = $_GET['noantrian'];
	//cek
	//$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND noantrian = '$noantrian' AND type = 'Loket'");
	//if (empty(num_rows($sql))) {
		query("INSERT INTO antrian_loket(kd, type, noantrian, postdate, start_time, end_time) VALUES (NULL, 'Loket', '$noantrian', '$date_time', CURRENT_TIME(), '00:00:00')");
	//}
	?>
	<?php
	exit();
}

if ($aksi == "tampilloket5") {
  //ketahui jumlah total sehari...
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Loket5' ORDER BY round(noantrian) DESC");
	$result = fetch_assoc($sql);
	$noantrian = $result['noantrian'];
	//nomor antrian, total yang ada + 1
	if($noantrian > 0) {
		$next_antrian = $noantrian + 1;
	} else {
		$next_antrian = 1;
	}
	echo '<div id="nomernya" align="center">';
  echo '<h1 class="display-1">';
  echo 'A'.$next_antrian;
  echo '</h1>';
  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
  echo '</div>';
  echo '<br>';

	exit();
}

if ($aksi == "printloket5") {
  //ketahui jumlah total sehari...
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Loket5' ORDER BY round(noantrian) DESC");
	$result = fetch_assoc($sql);
	$noantrian = $result['noantrian'];
	//nomor antrian, total yang ada + 1
	if($noantrian > 0) {
		$next_antrian = $noantrian + 1;
	} else {
		$next_antrian = 1;
	}
	echo '<div id="nomernya" align="center">';
  echo '<h1 class="display-1">';
  echo 'A'.$next_antrian;
  echo '</h1>';
  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
  echo '</div>';
  echo '<br>';

	?>

	<script>
	$(document).ready(function(){
		$("#btnKRM5").on('click', function(){
			$("#formloket5").submit(function(){
				$.ajax({
					url: "get-antrian.php?aksi=simpanloket5&noantrian=<?php echo $next_antrian;?>",
					type:"POST",
					data:$(this).serialize(),
					success:function(data){
						setTimeout('$("#loading").hide()',1000);
						window.location.href = "index.php";
						}
					});
				return false;
			});
		});
	})
	</script>
	<?php
	exit();
}

//jika simpan
if ($aksi == "simpanloket5") {
	//ambil nilai
	$noantrian = $_GET['noantrian'];
	//cek
	//$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND noantrian = '$noantrian' AND type = 'Loket'");
	//if (empty(num_rows($sql))) {
		query("INSERT INTO antrian_loket(kd, type, noantrian, postdate, start_time, end_time) VALUES (NULL, 'Loket5', '$noantrian', '$date_time', CURRENT_TIME(), '00:00:00')");
	//}
	?>
	<?php
	exit();
}

if ($aksi == "tampilloket1") {
  //ketahui jumlah total sehari...
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Loket1' ORDER BY round(noantrian) DESC");
	$result = fetch_assoc($sql);
	$noantrian = $result['noantrian'];
	//nomor antrian, total yang ada + 1
	if($noantrian > 0) {
		$next_antrian = $noantrian + 1;
	} else {
		$next_antrian = 1;
	}
	echo '<div id="nomernya" align="center">';
  echo '<h1 class="display-1">';
  echo 'E'.$next_antrian;
  echo '</h1>';
  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
  echo '</div>';
  echo '<br>';

	exit();
}

if ($aksi == "printloket1") {
  //ketahui jumlah total sehari...
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Loket1' ORDER BY round(noantrian) DESC");
	$result = fetch_assoc($sql);
	$noantrian = $result['noantrian'];
	//nomor antrian, total yang ada + 1
	if($noantrian > 0) {
		$next_antrian = $noantrian + 1;
	} else {
		$next_antrian = 1;
	}
	echo '<div id="nomernya" align="center">';
  echo '<h1 class="display-1">';
  echo 'E'.$next_antrian;
  echo '</h1>';
  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
  echo '</div>';
  echo '<br>';

	?>

	<script>
	$(document).ready(function(){
		$("#btnKRM1").on('click', function(){
			$("#formloket1").submit(function(){
				$.ajax({
					url: "get-antrian.php?aksi=simpanloket1&noantrian=<?php echo $next_antrian;?>",
					type:"POST",
					data:$(this).serialize(),
					success:function(data){
						setTimeout('$("#loading").hide()',1000);
						window.location.href = "index.php";
						}
					});
				return false;
			});
		});
	})
	</script>
	<?php
	exit();
}

//jika simpan
if ($aksi == "simpanloket1") {
	//ambil nilai
	$noantrian = $_GET['noantrian'];
	//cek
	//$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND noantrian = '$noantrian' AND type = 'Loket'");
	//if (empty(num_rows($sql))) {
		query("INSERT INTO antrian_loket(kd, type, noantrian, postdate, start_time, end_time) VALUES (NULL, 'Loket1', '$noantrian', '$date_time', CURRENT_TIME(), '00:00:00')");
	//}
	?>
	<?php
	exit();
}

if ($aksi == "tampilloket2") {
  //ketahui jumlah total sehari...
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Loket2' ORDER BY round(noantrian) DESC");
	$result = fetch_assoc($sql);
	$noantrian = $result['noantrian'];
	//nomor antrian, total yang ada + 1
	if($noantrian > 0) {
		$next_antrian = $noantrian + 1;
	} else {
		$next_antrian = 1;
	}
	echo '<div id="nomernya" align="center">';
  echo '<h1 class="display-1">';
  echo 'F'.$next_antrian;
  echo '</h1>';
  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
  echo '</div>';
  echo '<br>';

	exit();
}

if ($aksi == "printloket2") {
  //ketahui jumlah total sehari...
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Loket2' ORDER BY round(noantrian) DESC");
	$result = fetch_assoc($sql);
	$noantrian = $result['noantrian'];
	//nomor antrian, total yang ada + 1
	if($noantrian > 0) {
		$next_antrian = $noantrian + 1;
	} else {
		$next_antrian = 1;
	}
	echo '<div id="nomernya" align="center">';
  echo '<h1 class="display-1">';
  echo 'F'.$next_antrian;
  echo '</h1>';
  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
  echo '</div>';
  echo '<br>';

	?>

	<script>
	$(document).ready(function(){
		$("#btnKRM2").on('click', function(){
			$("#formloket2").submit(function(){
				$.ajax({
					url: "get-antrian.php?aksi=simpanloket2&noantrian=<?php echo $next_antrian;?>",
					type:"POST",
					data:$(this).serialize(),
					success:function(data){
						setTimeout('$("#loading").hide()',1000);
						window.location.href = "index.php";
						}
					});
				return false;
			});
		});
	})
	</script>
	<?php
	exit();
}

//jika simpan
if ($aksi == "simpanloket2") {
	//ambil nilai
	$noantrian = $_GET['noantrian'];
	//cek
	//$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND noantrian = '$noantrian' AND type = 'Loket'");
	//if (empty(num_rows($sql))) {
		query("INSERT INTO antrian_loket(kd, type, noantrian, postdate, start_time, end_time) VALUES (NULL, 'Loket2', '$noantrian', '$date_time', CURRENT_TIME(), '00:00:00')");
	//}
	?>
	<?php
	exit();
}

if ($aksi == "tampilloket3") {
  //ketahui jumlah total sehari...
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Loket3' ORDER BY round(noantrian) DESC");
	$result = fetch_assoc($sql);
	$noantrian = $result['noantrian'];
	//nomor antrian, total yang ada + 1
	if($noantrian > 0) {
		$next_antrian = $noantrian + 1;
	} else {
		$next_antrian = 1;
	}
	echo '<div id="nomernya" align="center">';
  echo '<h1 class="display-1">';
  echo 'G'.$next_antrian;
  echo '</h1>';
  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
  echo '</div>';
  echo '<br>';

	exit();
}

if ($aksi == "printloket3") {
  //ketahui jumlah total sehari...
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Loket3' ORDER BY round(noantrian) DESC");
	$result = fetch_assoc($sql);
	$noantrian = $result['noantrian'];
	//nomor antrian, total yang ada + 1
	if($noantrian > 0) {
		$next_antrian = $noantrian + 1;
	} else {
		$next_antrian = 1;
	}
	echo '<div id="nomernya" align="center">';
  echo '<h1 class="display-1">';
  echo 'G'.$next_antrian;
  echo '</h1>';
  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
  echo '</div>';
  echo '<br>';

	?>

	<script>
	$(document).ready(function(){
		$("#btnKRM3").on('click', function(){
			$("#formloket3").submit(function(){
				$.ajax({
					url: "get-antrian.php?aksi=simpanloket3&noantrian=<?php echo $next_antrian;?>",
					type:"POST",
					data:$(this).serialize(),
					success:function(data){
						setTimeout('$("#loading").hide()',1000);
						window.location.href = "index.php";
						}
					});
				return false;
			});
		});
	})
	</script>
	<?php
	exit();
}

//jika simpan
if ($aksi == "simpanloket3") {
	//ambil nilai
	$noantrian = $_GET['noantrian'];
	//cek
	//$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND noantrian = '$noantrian' AND type = 'Loket'");
	//if (empty(num_rows($sql))) {
		query("INSERT INTO antrian_loket(kd, type, noantrian, postdate, start_time, end_time) VALUES (NULL, 'Loket3', '$noantrian', '$date_time', CURRENT_TIME(), '00:00:00')");
	//}
	?>
	<?php
	exit();
}

if ($aksi == "tampilloket4") {
  //ketahui jumlah total sehari...
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Loket4' ORDER BY round(noantrian) DESC");
	$result = fetch_assoc($sql);
	$noantrian = $result['noantrian'];
	//nomor antrian, total yang ada + 1
	if($noantrian > 0) {
		$next_antrian = $noantrian + 1;
	} else {
		$next_antrian = 1;
	}
	echo '<div id="nomernya" align="center">';
  echo '<h1 class="display-1">';
  echo 'H'.$next_antrian;
  echo '</h1>';
  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
  echo '</div>';
  echo '<br>';

	exit();
}

if ($aksi == "printloket4") {
  //ketahui jumlah total sehari...
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Loket4' ORDER BY round(noantrian) DESC");
	$result = fetch_assoc($sql);
	$noantrian = $result['noantrian'];
	//nomor antrian, total yang ada + 1
	if($noantrian > 0) {
		$next_antrian = $noantrian + 1;
	} else {
		$next_antrian = 1;
	}
	echo '<div id="nomernya" align="center">';
  echo '<h1 class="display-1">';
  echo 'H'.$next_antrian;
  echo '</h1>';
  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
  echo '</div>';
  echo '<br>';

	?>

	<script>
	$(document).ready(function(){
		$("#btnKRM4").on('click', function(){
			$("#formloket4").submit(function(){
				$.ajax({
					url: "get-antrian.php?aksi=simpanloket4&noantrian=<?php echo $next_antrian;?>",
					type:"POST",
					data:$(this).serialize(),
					success:function(data){
						setTimeout('$("#loading").hide()',1000);
						window.location.href = "index.php";
						}
					});
				return false;
			});
		});
	})
	</script>
	<?php
	exit();
}

//jika simpan
if ($aksi == "simpanloket4") {
	//ambil nilai
	$noantrian = $_GET['noantrian'];
	//cek
	//$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND noantrian = '$noantrian' AND type = 'Loket'");
	//if (empty(num_rows($sql))) {
		query("INSERT INTO antrian_loket(kd, type, noantrian, postdate, start_time, end_time) VALUES (NULL, 'Loket4', '$noantrian', '$date_time', CURRENT_TIME(), '00:00:00')");
	//}
	?>
	<?php
	exit();
}


if ($aksi == "tampilcs") {
	  //ketahui jumlah total sehari...
		$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'CS' ORDER BY round(noantrian) DESC");
		$result = fetch_assoc($sql);
		$noantrian = $result['noantrian'];
		//nomor antrian, total yang ada + 1
		if($noantrian > 0) {
			$next_antrian = $noantrian + 1;
		} else {
			$next_antrian = 1;
		}
		echo '<div id="nomernya" align="center">';
	  echo '<h1 class="display-1">';
	  echo 'B'.$next_antrian;
	  echo '</h1>';
	  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
	  echo '</div>';
	  echo '<br>';

		exit();
}

if ($aksi == "printcs") {
	  //ketahui jumlah total sehari...
		$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'CS' ORDER BY round(noantrian) DESC");
		$result = fetch_assoc($sql);
		$noantrian = $result['noantrian'];
		//nomor antrian, total yang ada + 1
		if($noantrian > 0) {
			$next_antrian = $noantrian + 1;
		} else {
			$next_antrian = 1;
		}
		echo '<div id="nomernya" align="center">';
	  echo '<h1 class="display-1">';
	  echo 'B'.$next_antrian;
	  echo '</h1>';
	  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
	  echo '</div>';
	  echo '<br>';

		?>

		<script>
		$(document).ready(function(){
			$("#btnKRMCS").on('click', function(){
				$("#formcs").submit(function(){
					$.ajax({
						url: "get-antrian.php?aksi=simpancs&noantrian=<?php echo $next_antrian;?>",
						type:"POST",
						data:$(this).serialize(),
						success:function(data){
							setTimeout('$("#loading").hide()',1000);
							window.location.href = "index.php";
							}
						});
					return false;
				});
			});
		})
		</script>
		<?php
		exit();
}

//jika simpan
if ($aksi == "simpancs") {
	//ambil nilai
	$noantrian = $_GET['noantrian'];
	//cek
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND noantrian = '$noantrian' AND type = 'CS'");
	if (empty(num_rows($sql))) {
		query("INSERT INTO antrian_loket(kd, type, noantrian, postdate, start_time, end_time) VALUES (NULL, 'CS', '$noantrian', '$date_time', CURRENT_TIME(), '00:00:00')");
	}
	?>
	<?php
	exit();
}
if ($aksi == "tampilapotek") {
	  //ketahui jumlah total sehari...
		$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Apotek' ORDER BY round(noantrian) DESC");
		$result = fetch_assoc($sql);
		$noantrian = $result['noantrian'];
		//nomor antrian, total yang ada + 1
		if($noantrian > 0) {
			$next_antrian = $noantrian + 1;
		} else {
			$next_antrian = 1;
		}
		echo '<div id="nomernya" align="center">';
	  echo '<h1 class="display-1">';
	  echo 'C'.$next_antrian;
	  echo '</h1>';
	  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
	  echo '</div>';
	  echo '<br>';

		exit();
}

if ($aksi == "printapotek") {
	  //ketahui jumlah total sehari...
		$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND type = 'Apotek' ORDER BY round(noantrian) DESC");
		$result = fetch_assoc($sql);
		$noantrian = $result['noantrian'];
		//nomor antrian, total yang ada + 1
		if($noantrian > 0) {
			$next_antrian = $noantrian + 1;
		} else {
			$next_antrian = 1;
		}
		echo '<div id="nomernya" align="center">';
	  echo '<h1 class="display-1">';
	  echo 'C'.$next_antrian;
	  echo '</h1>';
	  echo '['.$tanggal.'-'.$bulan.'-'.$tahun.']';
	  echo '</div>';
	  echo '<br>';

		?>

		<script>
		$(document).ready(function(){
			$("#btnKRMpr").on('click', function(){
				$("#formpr").submit(function(){
					$.ajax({
						url: "get-antrian.php?aksi=simpanapotek&noantrian=<?php echo $next_antrian;?>",
						type:"POST",
						data:$(this).serialize(),
						success:function(data){
							setTimeout('$("#loading").hide()',1000);
							window.location.href = "index.php";
							}
						});
					return false;
				});
			});
		})
		</script>
		<?php
		exit();
}

//jika simpan
if ($aksi == "simpanapotek") {
	//ambil nilai
	$noantrian = $_GET['noantrian'];
	//cek
	$sql = query("SELECT * FROM antrian_loket WHERE round(DATE_FORMAT(postdate, '%d')) = '$tanggal' AND round(DATE_FORMAT(postdate, '%m')) = '$bulan' AND round(DATE_FORMAT(postdate, '%Y')) = '$tahun' AND noantrian = '$noantrian' AND type = 'Apotek'");
	if (empty(num_rows($sql))) {
		query("INSERT INTO antrian_loket(kd, type, noantrian, postdate, start_time, end_time) VALUES (NULL, 'Apotek', '$noantrian', '$date_time', CURRENT_TIME(), '00:00:00')");
	}
	?>
	<?php
	exit();
}
?>
