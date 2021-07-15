<!DOCTYPE html>
<html lang="ko">

<head>
    <title>WorkingPay</title>
    <meta charset="UTF-8">
    <meta name="description" content="contact form example">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <meta name="robots" content="noindex,nofollow" />

    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../image/favicon.ico" type="image/x-icon">    
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="../js/jquery-1.12.4.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#header").load("../header.html")
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("#footer").load("../footer.html")
        });
    </script>
</head>

<div id="header">
  
</div>

<body>
    <div id="mail_to">
        <div class="banner_img">
            <!-- <img src="http://ipsumimage.appspot.com/1920x200" alt="banner"> -->
        </div>
        <section class="wrap">
            <h2>CONTACT US</h2>
            <p> 워킹페이 서비스에 관한 문의사항이나 제휴 및 도입에<br> 대하여 문의주시면 답변해드립니다!</p>
            <h3 class="address">
                <span>Tel.<a href="tel:070-424-6806">070-424-6806
                    </a></span>
                <span>Email.<a href="https://mail.naver.com/write/popup?srvid=note&tp=naverID@naver.com" target="_blank">workingpay@naver.com</a></span>
            </h3>
        </section>

        <section class="inner">

<!-- php 구문 -->
            <?php 
                if(isset($_REQUEST['submit'])) {
                    print_r($_REQUEST); // print_r(); 배열 내용 찍기 --> $_REQUEST == form 내용 파라미터 배열
                    exit(); // 전송 눌렀을 때 파라미터 표시하고 정지 (뒤로가기로 돌아가)

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

                    echo '<script>alert(\'' . $result . '\'); location.href = "/contact/contact.php"; </script>';

                } else {
            ?>        


            <form id="send" method="post">
                <fieldset>
                    <legend>사업자정보 필수입력공간</legend>
                    <ul class="input_in">
                        <li class="op">
                            문의유형&#42;
                            <select class="ipt-select" required_name = "subject" name="subject">
                                <option value="기업도입문의" selected>기업도입문의</option>
                                <option value="서비스문의">서비스문의</option>
                                <option value="제휴문의">제휴문의</option>
                                <option value="기타">기타</option>
                            </select>
                        </li>
                        <li>

                            <label class="kn">
                                이름&#42;
                                <input type="text" id="kname" name="kname" placeholder="이름을 입력하세요." onfocus="this.placeholder=''" onblur="this.placeholder='이름을 입력하세요.'" required_name ="name">
                            </label>
                        </li>
                        <li>
                            <label class="mail">
                                이메일&#42;
                                <input type="email" id="email" name="email" maxlength="40" placeholder="example@email.com" onfocus="this.placeholder=''" onblur="this.placeholder='example@email.com'" required_name="email">
                            </label>
                        </li>
                        <li>
                            <label class="contact">
                                연락처&#42;
                                <input type="text" id="contact" name="contact" maxlength="12" placeholder="연락처를 입력하세요." onfocus="this.placeholder=''" onblur="this.placeholder='연락처를 입력하세요.'" required_name ="contact">
                            </label>

                            <!-- required oninvalid="this.setCustomValidity('연락처를 입력하세요')"  -->
                        </li>
                        <li class="bname">
                            <label>
                                사업장명&#42;
                                <input type="text" id="bname" name="bname" placeholder="사업장명을 입력하세요."    required name ="company_name">
                                <!-- onfocus="this.placeholder=''" -->
                                <!-- onblur="this.placeholder='사업장명을 입력하세요.'" -->
                            </label>
                        </li>
                           <li class="bnum">
                            <label>
                                사업자번호&#42;
                                <input type="text" id="bnum" name="bnum" placeholder="사업자 번호를 입력하세요" onfocus="this.placeholder='' " onblur="this.placeholder='사업자 번호를 입력하세요.'" maxlength="10" required_name="company_num">
                            </label>

                            <!-- required oninvalid="this.setCustomValidity('사업자번호를 입력하세요')"  -->
                        </li>
                        <li class="box">
                            <p>상세내용</p>
                                <textarea rows="8" cols="68" name=" text" placeholder="상세내용 및 문의사항을 입력하세요." class="textarea" onfocus="this.placeholder=''" onblur="this.placeholder='상세내용 및 문의사항을 입력하세요.'" required_name ="message"></textarea>
                        </li>
                        <li class="check">
                            <label>
                                <input type="checkbox" name="check" id="check" checked><span class="check_b" ></span>개인정보 수집 및 이용에 동의합니다.
                            </label>
                        </li>
                    </ul>
                    <!-- <button type="submit" onclick="check()" value="submit" name="submit" >전송</button> -->
                    <input type="submit" value="전송" name="submit"/>

                    
                </fieldset>
            </form>
            
            <?php
                }
            ?>       
            

        </section>
    </div>
</body>

<div id="footer">

</html>
