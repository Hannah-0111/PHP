<?php


$id = (isset($_POST['id']) and $_POST['id'] != '') ? $_POST['id'] : '';
$pw = (isset($_POST['pw']) and $_POST['pw'] != '') ? $_POST['pw'] : '';

if($id == '') {
    echo "
    <script>
        alert('아이디를 입력바랍니다.');
        history.go(-1)
    </script>
    ";
    exit;
}

if($pw == '') {
    echo "
    <script>
        alert('패스워드를 입력바랍니다.');
        history.go(-1)
    </script>
    ";
    exit;
}

if($id == 'guest' && $pw == '1234') {
    session_start();

    $_SESSION['ss_id'] = $id;

    echo "
    <script>
        alert('로그인이 성공했습니다.');
        self.location.href='member.php';
    </script>";
} else {
    
    echo "
    <script>
        alert('로그인이 실패했습니다. 아이디와 비밀번호를 확인해주세요.');
        self.location.href='index.php';
    </script>";
}

?>