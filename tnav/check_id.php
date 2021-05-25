<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>아이디 중복확인 | YO ENTERTAINMENT</title>
        <style>
            html{ overflow: hidden; }
            
            *{ padding: 0; margin: 0; background-color: #212223; }
            .check_box{ width: 300px; height: 350px; padding: 20px; box-sizing: border-box; text-align: center; background-image: url(../images/top_nav/login_bg.jpg); background-repeat: no-repeat; background-size: cover; }
            .check_box h1{ margin-bottom: 30px; }
            .check_box h1 img{ width: 150px; }
            .check_box h3{ margin-bottom: 30px; color: #ffc600; font-family: 'S-CoreDream-4Regular'; }
            .check_box a{ padding: 5px 20px; background-color: #ffc600; color: #fff; text-decoration: none; }
            .check_box p{ color: #fff; margin-bottom: 20px; font-family: 'S-CoreDream-4Regular'; }
        </style>
    </head>
    <body>
        
        <div class="check_box">
            <h1>
            <img src="../images/main/logo_w.png" alt="YO 엔터 로고">
            </h1>
            <h3>아이디 중복 확인</h3>
            <p>
                <?
                    //중복확인 버튼을 누르면 아이디값을 주소표시줄로 보낼것
                    $id = $_GET["id"];

                    if(!$id){ //폼에 아이디를 입력하지 않았다면
                        echo "아이디를 입력하세요";
                    }else{ //폼에 아이디를 입력했다면

                        //DB아이디와 주소표시줄로 온 아이디가 같은지 확인

                        //DB연결
                        include "../lib/dbconn.php";

                        //데이터조회 : SELECT - 조건 아이디를 확인
                        $sql = "SELECT * FROM member WHERE id='$id'";

                        $result = mysqli_query($connect, $sql); //sql명령실행
                        $num_record = mysqli_num_rows($result); //레코드 줄수가 있는 확인

                        if($num_record){ //레코드가 존재 - 기존 DB에 아이디가 있음                        
                            echo "
                                아이디가 중복됩니다!<br>
                                다른 아이디를 사용하세요.
                            ";
                        }else{ //아이디가 DB 없음
                            echo "사용가능한 아이디입니다.";
                        }

                        //DB연결끊기
                        mysqli_close($connect);
                    }
                ?>
            </p>
            <a href="#close" onclick="javascript:self.close()">닫기</a>
        </div>
    </body>
</html>