<?php
    include "../lib/session.php";

    //DB연결
    include "../lib/dbconn.php";
    
    $num = $_GET['num']; //주소표시줄에서 해당글 번호 받음
    $table = $_GET['table']; //주소표시줄에서 테이블명 받기
    $page = $_GET['page']; //주소표시줄에서 페이지번호 받기

    //SQL문
    $sql = "SELECT * FROM $table WHERE num=$num";
    
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_assoc($result);

    //모든 데이터를 각각 변수에 담기
    $item_num     = $row['num'];
    $item_name    = $row['name'];
	$item_id      = $row['id'];

	$image_name[0]   = $row['file_name_0'];
	$image_name[1]   = $row['file_name_1'];

	$image_copied[0] = $row['file_copied_0'];
	$image_copied[1] = $row['file_copied_1'];

    $item_date    = $row['regist_day'];
	$item_subject = str_replace(" ", "&nbsp;", $row['subject']);

	$item_content = $row['content'];
	$is_html      = $row['is_html'];


    //html쓰기가 체크가 안되면 엔터처리가 안되서 되도록 처리
    if($is_html!= "y"){
		$item_content = str_replace(" ", "&nbsp;", $item_content);
		$item_content = str_replace("\n", "<br>", $item_content);
	}

    //반복문으로 이미지 정보 처리
    for($i=0; $i<2; $i++){
		if ($image_copied[$i]){
			$imageinfo = GetImageSize("./data/".$image_copied[$i]);

			$image_width[$i] = $imageinfo[0];
			$image_height[$i] = $imageinfo[1];
			$image_type[$i]  = $imageinfo[2];

			if ($image_width[$i] > 785){
				$image_width[$i] = 785;
            }
		}else{
			$image_width[$i] = "";
			$image_height[$i] = "";
			$image_type[$i]  = "";
		}
	}

    mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>공지사항 | 피자땅</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/notice.css">
        
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub.js"></script>
    </head>
    <body>
        <header>
            <div class="hTop">
                <div class="wrap">
                   <h1>
                        <a href="../index.php"><img src="../images/common/logo.png" alt="피자땅 로고" width="80"></a>
                    </h1>
                    <? include "../lib/tnav.php"; ?>
                </div>
            </div>
            <div class="hBottom">
                <? include "../lib/gnb.php"; ?>
            </div>
        </header>
        <div id="mainImg" class="subMainBg05"></div>
        <div id="subTitle">
            <h3>공지사항</h3>
            <ul class="indicator">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="notice.php">MORE</a></li>
                <li><a href="notice.php">공지사항</a></li>
            </ul>
        </div>
        <div id="subContents">
            <table class="noticeView">
                <caption>게시글 확인</caption>
                <tr class="top">
                    <th>제목</th>
                    <td colspan="3"><?= $item_subject ?></td>
                </tr>
                <tr>
                    <th>작성자</th>
                    <td><?= $item_name ?></td>
                    <th>작성일</th>
                    <td><?= $item_date ?></td>
                </tr>
                <tr>
                    <th>내용</th>
                    <td colspan="3">
                        <?php
                            for($i=0; $i<2; $i++){
                                if ($image_copied[$i]){
                                    $img_name = $image_copied[$i];
                                    $img_name = "./data/".$img_name;
                                    $img_width = $image_width[$i];

                                    echo "<img src='$img_name' width='$img_width'>"."<br><br>";
                                }
                            }
                        ?>
                        <?= $item_content ?>
                    </td>
                </tr>
            </table>
            <div class="btnWrap">
                <a href="notice.php?table=<?=$table?>&page=<?=$page?>" class="listBtn">목록</a>
                <!--수정버튼과 삭제버튼 권한 설정-->
                <?php
                    //글쓴 사람이거나, 관리자거나, 레벨이 1이 되는 사람은 해당글을 삭제하거나 수정할 수 있도록 설정
                    if($userid == $item_id || $userid == "admin" || $userlevel==9 ){
                ?>
                <a href="notice_write.php?table=<?=$table?>&mode=modify&num=<?=$item_num?>&page=<?=$page?>" class="modifyBtn">수정</a>
                <!--3. 삭제버튼-->
                <a id="delete_btn" class="deleteBtn" href="#delete">삭제</a>&nbsp;
                <input type="hidden" value="delete.php?table=<?=$table?>&num=<?=$item_num?>" name="deleteData" id="deleteInput">
                <label for="deleteInput" class="away">삭제버튼데이터</label>

                <?php
                    }
                ?>
            </div>
        </div>
        <footer>
            <div class="fTop">
                <div class="info">
                    <h4>Info</h4>
                    <ul>
                        <li><a href="#">회사소개</a></li>
                        <li><a href="#">창업안내</a></li>
                        <li><a href="#">채용</a></li>
                    </ul>
                </div>
                <div class="contact">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">주문전화 000-0000</a></li>
                        <li><a href="#">가맹문의 000-0000</a></li>
                        <li><a href="#">대표번호 02-000-0000</a></li>
                        <li><a href="#">팩스 02-000-0001</a></li>
                    </ul>
                </div>
                <div class="follow">
                    <h4>Follow</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </div>
            </div>
            <div class="fBottom">
                <ul class="fNav">
                    <li><a href="#">개인정보처리방침</a></li>
                    <li><a href="#">이메일무단수집거부</a></li>
                    <li><a href="#">이용약관</a></li>
                </ul>
                <div class="family">
                    <button>
                        <span class="text">Family Site</span>
                        <span class="icon">▼</span>
                    </button>
                    <ul>
                        <li><a href="#" target="_blank">오븐에 빠진 닭</a></li>
                        <li><a href="#" target="_blank">투핑거스</a></li>
                    </ul>
                </div>
                <p>Copyright &copy;2020 PIZZATTANG, All Rights Reserved 서울특별시 강남구 학동로  11길 6</p>
            </div>
            <aside class="topBtn">
                <a href="#">
                    ▲<br>
                    TOP
                </a>
            </aside>
        </footer>
    </body>
</html>