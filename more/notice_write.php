<? 
    include "../lib/session.php";

    //DB연결
    include "../lib/dbconn.php";
    $table = "notice";
    $mode = $_GET['mode'];
    $page = 1;

    //수정모드이면 - 데이터를 조회해서 각각 변수에 데이터를 담아라
    if ($mode == "modify"){
        $table = $_GET['table'];
        $num = $_GET['num'];
        $page = $_GET['page'];
        
		$sql = "SELECT * FROM $table WHERE num=$num";
        
		$result = mysqli_query($connect, $sql);
    
		$row = mysqli_fetch_assoc($result);
	
		$item_subject     = addslashes($row['subject']);
		$item_content     = addslashes($row['content']);
		$item_name     = $row['name'];
        
        echo $item_name;
        
        

		$item_file_0 = $row['file_name_0'];
		$item_file_1 = $row['file_name_1'];

		$copied_file_0 = $row['file_copied_0'];
		$copied_file_1 = $row['file_copied_1'];
	}
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
        <script src="write.js"></script>
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
            <?php
                //만약 수정모드면
                if($mode=="modify"){
            ?>
                <!--글작성폼 : enctype="multipart/form-data" 파일업로드를 위해 반드시 작성-->
                <form name="board_form" id="boardWrite" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data"> 

            <?php
                }else{//그냥 글쓰기면
            ?>
                <form name="board_form" id="boardWrite" method="post" action="insert.php?table=<?=$table?>" enctype="multipart/form-data">
            <?php
                }
            ?>
                <table>
                    <caption>글쓰기 테이블</caption>
                    <tr class="top">
                        <th>작성자</th>
                        <td><?=$username?></td>
                        <th>HTML 쓰기</th>
                        <td>
                            <input type="checkbox" name="html_ok" id="htmlOk" value="y">
                            <label for="htmlOk">HTML 쓰기</label>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="noticeTitle">제목</label>
                        </th>
                        <td colspan="3">
                            <?
                                if($mode == "modify"){
                            ?>
                            <input type="text" name="subject" id="noticeTitle" value="<?=$item_subject?>">
                            <?
                                }else{
                            ?>
                            
                            <input type="text" name="subject" id="noticeTitle">
                            <?
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="noticeContent">내용</label>
                        </th>
                        <td colspan="3">
                            <?
                                if($mode == "modify"){
                            ?>
                            <textarea name="content" id="noticeContent" rows="20"><?=$item_content?></textarea>
                            <?
                                }else{
                            ?>
                            <textarea name="content" id="noticeContent" rows="20"></textarea>
                            <?
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="noticeFile01">첨부파일1</label>
                        </th>
                        <td colspan="3">
                            <input type="file" name="upfile[]" id="noticeFile01">
                            <? 	
                                if ($mode=="modify" && $item_file_0){
                            ?>
                                <input type="checkbox" name="del_file[]" id="deleteFile01" value="0"> <label for="deleteFile01">삭제</label>
                            
                            <?
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="noticeFile02">첨부파일2</label>
                        </th>
                        <td colspan="3">
                            <input type="file" name="upfile[]" id="noticeFile02">
                            <?	
                                if ($mode=="modify" && $item_file_0){
                            ?>
                                <input type="checkbox" name="del_file[]" id="deleteFile02" value="0"> <label for="deleteFile02">삭제</label>
                            <?
                                }
                            ?>
                        </td>
                    </tr>
                </table>
                <div class="btnWrap">
                    <a href="notice.php?table=<?=$table?>&page=<?=$page?>" class="listBtn">목록</a>
                    <a href="#" class="submitBtn" onclick="check_input()">등록</a>
                </div>
            </form>
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