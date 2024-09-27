<?php
    $real_name = $_GET["real_name"];
    $file_name = $_GET["file_name"];
    $file_type = $_GET["real_type"];
    $file_path = "./data/".$real_name;

    //브라우저가 IE일 때, 한글 파일명이 깨지는 현상 방지
    $ie = preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0') !== false && 
        strpos($_SERVER['HTTP_USER_AGENT'], 'rv:11.0') !== false);

    if ($ie) {
        $file_name = iconv('utf-8', 'euc-kr', $file_name);
    }

    //다운로드 파일 유무 확인
    // file_exists() : 지정된 경로에 파일이나 디렉터리가 존재하는지 확인하고 true/false 반환.
    if (file_exists($file_path)) {
        $fp = fopen($file_path, "rb");

        //다운로드할 파일의 정보를 클라이언트 브라우저에 전달하기 위해 Header() 함수 사용.
        Header("Content-type: application/x-msdownload");
        Header("Content-Length: ". filesize($file_path));
        Header("Content-Disposition: attachment; filename=" . $file_name);
        Header("Content-Transfer-Encoding: binary");
        Header("Content-Description: File Transfer");
        Header("Expires: 0"); //다운로드 후 브라우저가 파일을 캐시하지 않도록
    }

    //파일 전송 및 파일 포인터 닫기
    if (!fpassthru($fp)) {
        scclose($fp);
    }



?>