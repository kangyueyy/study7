<?php
function curl_post($url = '', $filename = "aaa")
{
    ini_set('memory_limit', '1280M');
    // ob_start();
    // header( "Content-type:  application/octet-stream");
    // header( "Accept-Ranges:  bytes ");
    // header('Content-Disposition: attachment; filename*="utf8\'\'' . "aaa.mp4" . '"');
//    $save_dir = "K:\\MEDIA\\TEACH\\NEW\\";
    // mkdir($save_dir, 0777, true);exit;
    $save_dir = "../resources/download/";
    //创建保存目录
    if (!is_dir($save_dir) && !mkdir($save_dir, 0777, true)) {
        echo "1111";
        return false;
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, 'https://m.tangdou.com/v81/dAOAMgMjwD3T5A2.html');
    $output = curl_exec($ch);
    curl_close($ch);
    $filePath = $save_dir . $filename . '.mp4';
//    $filePath = iconv('UTF-8', 'gbk', $filePath);
    $fp2      = @fopen($filePath, 'a');
    fwrite($fp2, $output);
    fclose($fp2);
    unset($content, $url);
    if (!empty(file_exists($filePath))) {
        $size = filesize($filePath);
        $size = $size/(1024*1024);
        echo "文件下载成功：{$filePath}({$size}m)";
    } else {
        echo "文件下载失败：{$filePath}";
    }
    //  $size=readfile($output);
    // header( "Accept-Length: " .$size);
}

// $size=readfile($fileurl);
// header( "Accept-Length: " .$size);
if (empty($_REQUEST['url']) || empty($_REQUEST['filename'])) {
    echo '参数有误';exit;
}
curl_post($_REQUEST['url'] ?? '', $_REQUEST['filename'] ?? '');

// $content = file_get_contents("https://share.tangdou.com/h5/play?vid=9126442&utm_campaign=client_share&utm_source=tangdou_android&utm_medium=wx_chat&utm_type=0&share_uid=12213590");

// echo $content;exit;
