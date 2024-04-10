<?php
if($_GET['file'] === "flag.txt"){
    echo "flag{s33ms_to0_3asy}";
    exit();
}

if(isset($_GET['file'])) {
    $file = $_GET['file'];
    if(file_exists($file)) {
        $fileInfo = new finfo(FILEINFO_MIME_TYPE);
        $mimeType = $fileInfo->file($file);
        if (strpos($mimeType, 'image') !== false) {
            header('Content-Type: ' . $mimeType);
            readfile($file);
        } else {
            echo file_get_contents($file);
        }
    } else {
        echo "File does not exist";
    }
} else {
    echo "No file selected";
}
?>