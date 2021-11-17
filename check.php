<!DOCTYPE html>
<html>
	<title>Kết quả kiểm tra điểm</title>
	<body>
		<?php
			function GiaiThua($x) {
				$result = 1;
				for ($i = 1; $i <= $x; $i++) {
					$result *= $i;
				}
				return $result;
			}
			$x = $_POST["x"];
			echo "Giai thừa của $x là " . GiaiThua($x);
		?>
	</body>
</html>