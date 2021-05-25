<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <title>프랜차이즈 | 피자땅</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/franchise.css">
        
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub.js"></script>
        <script src="../js/franchise.js"></script>
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
            <h3>프랜차이즈</h3>
            <ul class="indicator">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="notice.php">MORE</a></li>
                <li><a href="franchise.php">프랜차이즈</a></li>
            </ul>
        </div>
        <div id="subContents">
            <div id="procedure">
                <div class="conWrap">
                    <h4>PROCEDURE</h4>
                    <img src="../images/more/franchise_procedure_steps.png" alt="가맹절차 아이콘">
                    <p id="step01" class="text">
                        <span class="bold">01 가맹상담</span><br>
                        피자땅만의 경영노하우 및 가맹에 대한 정보를<br>
                        상세히 알려드립니다.   
                    </p>
                    <p id="step02" class="text">
                        <span class="bold">02 상권조사</span><br>
                        원하시는 후보지의 조건을 분석 후<br>
                        투자규모 및 수익성을 검토합니다.   
                    </p>
                    <p id="step03" class="text">
                        <span class="bold">03 가맹신청서 접수</span><br>
                        개점의사를 확인 후<br>
                        가맹신청서를작 성하여접수합니다.   
                    </p>
                    <p id="step04" class="text">
                        <span class="bold">04 개정후보지 선정</span><br>
                        상권조사및 투자가능금액을 바탕으로<br>
                        점포개발 담당자와 함께 개점후보지를선 정합니다.   
                    </p>
                    <p id="step05" class="text">
                        <span class="bold">05 가맹계약 체결</span><br>
                        가맹계약을 체결하여<br>
                        피자땅 파트너쉽을 맺습니다. 
                    </p>
                    <p id="step06" class="text">
                        <span class="bold">06 점포공사/개점준비</span><br>
                        개점에 따른 각종 인허가사항이나 집기,<br>
                        점주 및 종업원에 대한 교육을 시행합니다.<br>
                        <span class="small">(점포 내/외공사는 시방서에따라 전문업체가담당을합니다.)</span>
                    </p>
                    <p id="step07" class="text">
                        <span class="bold">07 점포 오픈</span><br>
                        마케팅 홍보와 관련하여 본사의 지원아래<br>
                        점포를오픈합니다.  
                    </p>
                </div>
            </div>
            <div id="schedule">
                <h4>SCHEDULE</h4>
                <div class="conWrap">
                    <div id="colum01">
                        <ul>
                            <li>D-25</li>
                            <li>인테리어 도면작업/수정</li>
                            <li>LNG 가스 시공 신청</li>
                            <li>인테리어 시공</li>
                            <li>승압신청/냉난방 점검</li>
                            <li>직원 및 아르바이트 모집</li>
                            <li>일반 전화 신청</li>
                            <li>본사교육 인원 통보</li>
                        </ul>
                        <img src="../images/more/franchise_schedule_banner.png" alt="가맹점 절차 스케쥴 안내 배너 이미지">
                    </div>
                    <div id="colum02">
                        <ul>
                            <li>D-18</li>
                            <li>가스시공 완료</li>
                        </ul>
                        <ul>
                            <li>D-14</li>
                            <li>사업자등록 신청 (관할구청)</li>
                        </ul>
                        <ul>
                            <li>D-12</li>
                            <li>해당구청 허가증 신청</li>
                            <li>해당구청 보건증 접수 (직원 및 아르바이트)</li>
                        </ul>
                        <ul>
                            <li>D-10</li>
                            <li>위생교육 수료필증 (해당구청 위생과)</li>
                        </ul>
                    </div>
                    <div id="colum03">
                        <ul class="first">
                            <li>D-4</li>
                            <li>매장 실무교육 (본점)</li>
                        </ul>
                        <ul class="second">
                            <li>D-3</li>
                            <li>인테리어 완공</li>
                        </ul>
                        <ul class="third">
                            <li>D-2</li>
                            <li>기기입고</li>
                            <li>오토바이입고</li>
                            <li>배달통 설치</li>
                        </ul>
                        <ul class="last">
                            <li>D-1</li>
                            <li>식자재 입고</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="estimate">
                <h4>ESTIMATE</h4>
                <table>
                    <caption>가맹점 개설비용</caption>
                    <tr>
                        <th>구분</th>
                        <th>내용</th>
                        <th>금액</th>
                        <th>비고</th>
                    </tr>
                    <tr class="greenBg">
                        <td>가맹비</td>
                        <td>지적재산권 사용, 영업노하우 제공</td>
                        <td>1,000만원</td>
                        <td>면제</td>
                    </tr>
                    <tr class="greenBg">
                        <td>교육비</td>
                        <td>본사 교육 (4일), 현장교육 (5일)</td>
                        <td>300만원</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>이행보증금</td>
                        <td>계약이행보증금</td>
                        <td>500만원</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="2">인테리어</td>
                        <td>내/외부인테리어</td>
                        <td>140만원/평(VAT별도)</td>
                        <td>자체진행가능</td>
                    </tr>
                    <tr>
                        <td>간판 1조기준/싸인물</td>
                        <td>650만원</td>
                        <td>자체진행가능</td>
                    </tr>
                    <tr>
                        <td>주방기기</td>
                        <td>오븐기, 워크인, 냉장고 및 주방기기</td>
                        <td>2,000만원</td>
                        <td>자체구매가능</td>
                    </tr>
                    <tr>
                        <td>POS</td>
                        <td>본체, CID, 무선단말기, 프린터기 2대 등</td>
                        <td>200만원</td>
                        <td>프로그램만 사용가능</td>
                    </tr>
                    <tr class="last">
                        <td colspan="2">합계</td>
                        <td class="red">800만원-</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div id="iBanner">
                <img src="../images/more/franchise_banner.png" alt="피자땅 가맹점 문의 배경 이미지">
                <p>문의전화 | 000-000-0000</p>
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