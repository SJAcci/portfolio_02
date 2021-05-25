<?
    if(!$userid){
        ?>
        <div class="tNav">
            <ul>
                <li><a href="/tnav/login.php">로그인</a></li>
                <li><a href="/tnav/join.php">회원가입</a></li>
                <li><a href="#eng_page" id="eng">ENG</a></li>
            </ul>
        </div>
        <?
    }else{ 
        ?>
        <div class="tNav">
            <ul>
                <li class="hello"><?=$username?>(<?=$userid?>)님 안녕하세요!</li>
                <li><a href="/tnav/log_out.php">로그아웃</a></li>
                <li><a href="/tnav/join_form_modify.php">MyPage</a></li>
            </ul>
        </div>
        <?
    }
?>

















