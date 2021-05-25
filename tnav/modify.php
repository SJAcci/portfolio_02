<? include "../lib/session.php" ?>
<meta charset="utf-8">
<?
    //회원가입수정 폼 데이터를 담는 변수
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $phone = $_POST["phone"];

    //생년월일
    $birth01 = $_POST["birth01"];
    $birth02 = $_POST["birth02"];
    $birth03 = $_POST["birth03"];

    if($birth02 < 10){
        $birth02 = '0' . $birth02;
    }
    if($birth03 < 10){
        $birth03 = '0' . $birth03;
    }

    $birth = $birth01 . "-" . $birth02 . "-" . $birth03;

	//우편번호
	$post = $_POST["address01"];

	//주소 조합
    $addr01 = $_POST["post"];
    $addr02 = $_POST["address02"];
    $addr = $addr01 . '|' . $addr02;

    //이메일 조합
    $email01 = $_POST["mail01"];
    $email02 = $_POST["mail02"];

    $email = $email01 . "@" . $email02;

    //DB연결
    include "../lib/dbconn.php";

    //데이터 수정 SQL문 : UPDATE 테이블 SET 필드명='값', 필드명='값', ...;
    $sql = "UPDATE member SET name='$name', pass='$pass', birth='$birth', phone='$phone', address='$addr', post='$post' WHERE id='$userid'";

    //명령실행
    mysqli_query($connect, $sql);

    //세션변수 변경
    $_SESSION['username'] = $name;


	//echo mysqli_error($connect);

    //DB종료
    mysqli_close($connect);

    //수정완료되면 첫페이지 이동
    echo "
	   <script>
	       parent.location.href = '../index.php';
	   </script>
	";
?>










