function check_input(){
    if(!document.board_form.subject.value){
        alert("제목을 입력하세요!");    
        document.board_form.subject.focus();
        return;
    }

    if(!document.board_form.content.value){
        alert("내용을 입력하세요!");    
        document.board_form.content.focus();
        return;
    }
    
    document.board_form.submit();
}


//삭제버튼
$(document).ready(function(){
    $('.deleteBtn').click(function(){
        var href = $('#deleteInput').val();
        
        var q = confirm("한번 삭제한 자료는 복구할 수 없습니다. \n\n정말삭제하시겠습니까?");
        
        if(q){
            location.href = href;
        }
    });
});