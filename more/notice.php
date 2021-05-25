<? include "../lib/session.php" ?>
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
        <?
            //DB를 연결하고 데이터 조회 - SELECT
            
            //DB연결
            include "../lib/dbconn.php";
        
            //연주회 소개 테이블담는 변수
            $table = 'notice';
        
            //한 화면에 표시될 리스트 글수를 담는 변수
            $scale = 10; 
        
            //주소표시줄의 mode라는 파라미터값 받아오기
            $mode = $_GET['mode'];
        
            //검색폼의 데이터를 받아오는 변수
            $search = $_POST['search']; //검색입력상자의 값을 담는 변수
            $find = $_POST['find']; //선택상자의 값을 담는 변수
        
        
            //데이터조회구문이 처음상태와 검색했을때와 다르게 처리
            if($mode == "search"){ //검색버튼을 눌렀다면
                if(!$search){ //입력상자에 값이 없으면
                    echo "
                        <script>
                            window.alert('검색할 단어를 입력해 주세요!');
                            history.go(-1);
                        </script>
                    ";
                    exit; //페이지 벗어나기
                }
                
                $sql = "SELECT * FROM $table WHERE $find LIKE '%$search%' ORDER BY num DESC";
            }else{ //페이지로 바로 왔을때
                $sql = "SELECT * FROM $table ORDER BY num DESC";
            }
            
        
            //명령실행 - mysqli_query()
            $result = mysqli_query($connect, $sql);
        
            //전체 글수를 담는 변수
            $total_record = mysqli_num_rows($result);
        
            //페이지네이션
            //글이 21개라고 가정하면 페이지 번호 3개
            //전체페이지수를 계산 : 전체글수/보여줄글수
            //floor(실수) : 내림처리해서 정수로 변경해주는 함수
            if($total_record % $scale == 0){ //나머지 글이 없을때
                //전체 페이지수를 담는 변수
                $total_page = floor($total_record / $scale);
            }else{ //나머지 글이 있다면 
                //무조건 한페이지씩 더 생겨야함
                $total_page = floor($total_record / $scale) + 1;
            }
        
            //페이지번호 - 처음접속하면 1을 배당, 해당페이지 번호 처리
            if(isset($_GET["page"])){ //페이지가 있으면 
                $page = $_GET["page"]; //그번호로 처리
            }else{
                $page = 1; //페이지가 없으면 1번으로 처리
            }
        
            //페이지 번호에 따라 보여줄 시작번호 구하기
            $start = ($page - 1) * $scale;
            $number = $total_record - $start;
        ?>
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
            <div class="noticeTable">
                <form name="board_form" id="boardForm" method="post" action="">
                    <select name="find" id="findSelect">
                        <option value="subject">제목</option>
                        <option value="content">내용</option>
                    </select>
                    <label for="findSelect" class="away">검색 기준 선택</label>
                    <input type="text" name="search" id="searchBox">
                    <label for="searchBox" class="away">검색 상자</label>
                    <button type="button" name="search_btn" id="searchBtn"></button>
                </form>
                <table>
                    <caption>공지사항 목록 테이블</caption>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성일</th>
                    </tr>
                    <?
                        if($total_record == 0){
                            echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
                        }
                    
                        //있는 글만큼 반복해서 가져오기
                        for($i=$start; $i<$start+$scale && $i < $total_record; $i++){
                            //가져올 레코드 선택
                            mysqli_data_seek($result, $i);

                            //갖고 온 한행을 연관배열로 가져오기
                            $row = mysqli_fetch_assoc($result);


                            //연관배열에서 데이터를 각각 가져오기
                            $item_num = $row['num'];
                            $item_id = $row['id'];
                            $item_name = $row['name'];
                            $item_hit = $row['hit'];
                            $item_date = $row['regist_day'];
                            $item_date = substr($item_date, 0, 10); //년,월,일만 반환 - 그게 열글자

                            //제목 - 제목 문자열에 띄어쓰기 있다면,특수문자로 변경해라
                            $item_subject = str_replace(" ", "&nbsp;", $row['subject']);
                    ?>
                    <tr>
                        <td><?= $number ?></td>
                        <td class="context"><a href="notice_view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a></td>
                        <td><?= $item_date ?></td>
                    </tr>
                    <?
                        $number--; //조회번호를 감소
                        } //반복문의 종료
                    ?>
                </table>
                <div class="pageBtn">
                    <div class="pageNum">
                        <?php
                            if ($total_page>=2 && $page >= 2){
                                $new_page = $page-1;
                                echo "<a href='notice.php?table=$table&page=$new_page' class='prevPage'>&lt;&lt; 이전</a>";
                            }else{
                                echo "&nbsp;";
                            }
                        ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;

                           <?php
                            //게시판 페이지번호 반복
                            for($i=1; $i<=$total_page; $i++){
                                if($page == $i){ //현재페이지는 링크안검
                                    echo "<b> $i </b>";
                                }else{ //나머지페이지는 링크처리
                                    echo "<a href='notice.php?table=$table&page=$i'> $i </a>";
                                }
                            }
                        ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                            if ($total_page>=2 && $page != $total_page){
                                $new_page = $page+1;
                                echo "<a href='notice.php?table=$table&page=$new_page' class='nextPage'>다음 &gt;&gt;</a>";
                            }else{
                                echo "&nbsp;";
                            }
                        ?>
                    </div>
                    <div class="btnWrap">
                        <a href="notice.php" class="listBtn">목록</a>
                        <? 
                            //로그인되어 있어야 글쓰기 버튼 처리
                            if($userid == "admin"){
                        ?>
                                <a href="notice_write.php?table=<?=$table?>" class="writeBtn">글쓰기</a>
                        <?
                            }
                        ?>
                    </div>
                </div>
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