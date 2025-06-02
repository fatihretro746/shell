<?php
set_time_limit(0);
ini_set('memory_limit', '1024M');
ignore_user_abort(true);

// CONFIG
$logFile = 'sensitive_functions_log.txt';
$sensitiveFunctions = [
    'eval', 'exec', 'shell_exec', 'system', 'passthru',
    'popen', 'proc_open', 'file_put_contents', 'fwrite',
    'fopen', 'file_get_contents', 'unlink', 'rename',
    'copy', 'move_uploaded_file', 'scandir', 'opendir', 'readdir'
];

$extensions = ['php', 'php2', 'php3', 'php4', 'php5', 'php7', 'php8', 'phtml', 'phar', 'inc', 'ctp', 'module'];

// Glob recursive (fallback jika glob tak support recurse)
function scanRecursive($dir, $exts, &$results = []) {
    foreach ($exts as $ext) {
        $pattern = rtrim($dir, '/') . '/*.'.$ext;
        foreach (glob($pattern) as $file) {
            $results[] = $file;
        }
    }

    $folders = glob(rtrim($dir, '/') . '/*', GLOB_ONLYDIR);
    foreach ($folders as $folder) {
        scanRecursive($folder, $exts, $results);
    }

    return $results;
}

// Check if content has sensitive function
function analyzeContent($file, $content, $sensitiveFunctions) {
    $alerts = [];
    foreach ($sensitiveFunctions as $func) {
        if (preg_match_all('/\b' . preg_quote($func, '/') . '\b/i', $content, $matches, PREG_OFFSET_CAPTURE)) {
            foreach ($matches[0] as $match) {
                $line = substr_count(substr($content, 0, $match[1]), "\n") + 1;
                $alerts[] = "⚠️ <strong>$func</strong> found in <code>$file</code> on line <strong>$line</strong>";
            }
        }
    }
    return $alerts;
}

// SCAN
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['directory'])) {
    $dir = rtrim(trim($_POST['directory']), '/');
    if (!is_dir($dir)) {
        die("Invalid directory.");
    }

    if (file_exists($logFile)) unlink($logFile);

    $files = scanRecursive($dir, $extensions);
    $totalHits = 0;

    echo "<h2>Scan result for: <code>$dir</code></h2><ul>";

    foreach ($files as $file) {
        $content = @file_get_contents($file);
        if (!$content) continue;

        $findings = analyzeContent($file, $content, $sensitiveFunctions);
        if (!empty($findings)) {
            foreach ($findings as $line) {
                echo "<li>$line</li>";
                file_put_contents($logFile, strip_tags($line) . PHP_EOL, FILE_APPEND);
                $totalHits++;
            }
        }
    }

    echo "</ul><hr>";
    echo "<strong>Total hits: $totalHits</strong><br>";
    echo "<a href='$logFile' target='_blank'>Download log file</a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Shell Scanner Gacor</title>
    <style>
        body {
            font-family: Consolas, monospace;
            background: #111;
            color: #0f0;
            padding: 40px;
        }
        input, button {
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
        }
        input {
            width: 400px;
        }
        button {
            background: #0f0;
            color: #000;
            cursor: pointer;
            border: none;
        }
        ul {
            margin-top: 20px;
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        code {
            background: #222;
            padding: 2px 4px;
        }
    </style>
</head>
<body>
    <h1>🛡️ PHP Shell Scanner GACOR</h1>
    <form method="post">
        <input type="text" name="directory" placeholder="Contoh: /home/u123456/public_html" required>
        <br>
        <button type="submit">🔍 Scan Sekarang</button>
    </form>
</body>
</html>
