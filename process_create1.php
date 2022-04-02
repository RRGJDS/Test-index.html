<?php
$conn = mysqli_connect('localhost', 'root', '123456', 'testdb');
$sql = " INSERT INTO allow
    (allow1)
    VALUES(
		'{$_POST['allow1']}'	
    )";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="bokja.php">돌아가기</a>';
}
?>