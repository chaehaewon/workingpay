<html lang="ko">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php
    //헤더 
    // $header = ('Content-Type: text/html; charset=utf-8'); 
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Return-Path: <". $admin_email .">\r\n";
    $header .= "From: ". $kname ." <". $admin_email .">\r\n";
    $header .= "Reply-To: <". $admin_email .">\r\n";



    $admin_email = "cgodnjs8@gmail.com"; //받는사람(수신자)
    $subject = $_POST['subject'] ?? ''; //문의유형(발신자)
    $kname = $_POST['kname']; //이름(발신자)
    $email = $_POST['email']; //이메일(발신자)
    $contact = $_POST['contact']; //연락처(발신자)
    $bname = $_POST['bname'] ?? ''; //사업장명(발신자)
    $bnum = $_POST['bnum'] ?? ''; //사업장 번호(발신자)
    $text = $_POST['text']; //상세내용(발신자)

    // if(empty($subject)){ 
    //     echo("
    //         <script>
    //             alert('문의 유형을 선택해주세요');
    //         </script>
    //     ");
    // }else{
    //     echo($subject);
    // }

   
  // if(isset($_REQUEST['submit'])) {
        // print_r($_REQUEST); // print_r(); 배열 내용 찍기 --> $_REQUEST == form 내용 파라미터 배열
        // exit(); // 전송 눌렀을 때 파라미터 표시하고 정지

        // 파라미터 name이랑 $_REQUEST['키'] 맞춰주기
      
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
        // mail("To : " . $admin_email, "From : " . $email, "문의유형 : " . $subject, "이름 : " . $name, "연락처 : " . $contact, "사업장명 : " . $company_name, "사업장번호 : " . $company_num, "문의내용 : " . $message); //send mail
        $rs = mail($admin_email, $subject, $text, $header, $email) ; //send mail
        // echo "Thank you for your message!";
        
        if ($rs) {
            $result = "메일이 전송되었습니다";
        } else {
            $result = "메일 전송 실패";
        }
    } else {
        $result = "이메일 형식을 확인해주세요.";
    }

    echo '<script>alert(\'' . $result . '\'); location.href = "/contact/contact.html"; </script>';
?>


</html>