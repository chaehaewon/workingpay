<!-- php 구문 -->
<?php 
    if(isset($_REQUEST['submit'])) {
        // print_r($_REQUEST); // print_r(); 배열 내용 찍기 --> $_REQUEST == form 내용 파라미터 배열
        // exit(); // 전송 눌렀을 때 파라미터 표시하고 정지

        // 파라미터 name이랑 $_REQUEST['키'] 맞춰주기
        $admin_email = "eeyore@workinglabs.kr"; //받는사람
        $subject = $_REQUEST['subject'] ?? ''; //문의유형
        $kname = $_REQUEST['kname']; //이름
        $email = $_REQUEST['email']; //이메일
        $contact = $_REQUEST['contact']; //연락처
        $bname = $_REQUEST['bname'] ?? ''; //사업장명
        $bnum = $_REQUEST['bnum'] ?? ''; //사업장 번호
        $text = $_REQUEST['text']; //상세내용
                            
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
            // mail("To : " . $admin_email, "From : " . $email, "문의유형 : " . $subject, "이름 : " . $name, "연락처 : " . $contact, "사업장명 : " . $company_name, "사업장번호 : " . $company_num, "문의내용 : " . $message); //send mail
            $rs = mail('eeyore@workinglabs.kr', $subject, $text); //send mail
            // echo "Thank you for your message!";
            
            if ($rs) {
                $result = '메일이 전송되었습니다?';
            } else {
                $result = '메일 전송 실패';
            }
        } else {
            $result = '이메일 형식을 확인해주세요.';
        }

        echo '<script>alert(\'' . $result . '\'); location.href = "/contact/contact.html"; </script>';

    } else {
}