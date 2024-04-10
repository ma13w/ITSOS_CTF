<?php
if (
    $_SERVER["REQUEST_METHOD"] == "GET"
) {
    echo "
    2024-02-20 08:00:12 | 192.168.1.10 | GET /getNotes.php | 200 OK <br>
    2024-02-20 08:01:35 | 203.0.113.45 | GET /getUser.php | 200 OK <br>
    2024-02-20 08:02:48 | 87.65.43.21 | POST /getAnswer.php | 302 Found <br>
    2024-02-20 08:03:59 | 123.45.67.89 | GET /getLog.php | 200 OK <br>
    2024-02-20 08:05:21 | 98.76.54.32 | GET /flag.php | 404 Not Found <br>
    2024-02-20 08:06:44 | 54.32.10.98 | GET / | 200 OK <br>
    2024-02-20 08:07:57 | 192.168.1.10 | GET /getNotes.php | 200 OK <br>
    2024-02-20 08:09:12 | 203.0.113.45 | GET /getLog.php | 200 OK <br>
    2024-02-20 08:10:35 | 87.65.43.21 | GET /getUser.php | 200 OK <br>
    2024-02-20 08:11:48 | 123.45.67.89 | GET /getAnswer.php | 200 OK <br>
    2024-02-20 08:13:59 | 98.76.54.32 | GET /getNotes.php | 200 OK <br>
    2024-02-20 08:15:21 | 54.32.10.98 | GET /getLog.php | 200 OK <br>
    2024-02-20 08:16:44 | 192.168.1.10 | GET /getUser.php | 200 OK <br>
    2024-02-20 08:18:57 | 203.0.113.45 | GET /getAnswer.php | 200 OK <br>
    2024-02-20 08:20:12 | 87.65.43.21 | GET /getNotes.php | 200 OK <br>
    2024-02-20 08:21:35 | 123.45.67.89 | GET /getLog.php | 200 OK <br>
    2024-02-20 08:22:48 | 98.76.54.32 | GET /getUser.php | 200 OK <br>
    2024-02-20 08:23:59 | 54.32.10.98 | GET /getAnswer.php | 200 OK <br>
    2024-02-20 08:06:44 | 54.32.10.98 | GET / | 200 OK <br>
    2024-02-20 08:07:57 | 192.168.1.10 | GET /getNotes.php | 200 OK <br>
    2024-02-20 08:09:12 | 203.0.113.45 | GET /getLog.php | 200 OK <br>
    2024-02-20 08:10:35 | 87.65.43.21 | GET /getUser.php | 200 OK <br>
    2024-02-20 08:11:48 | 123.45.67.89 | GET /getAnswer.php | 200 OK <br>
    2024-02-20 08:13:59 | 98.76.54.32 | GET /getNotes.php | 200 OK <br>
    2024-02-20 08:15:21 | 54.32.10.98 | GET /getLog.php | 200 OK <br>
    2024-02-20 08:16:44 | 192.168.1.10 | GET /getUser.php | 200 OK <br>
    2024-02-20 08:18:57 | 203.0.113.45 | GET /getAnswer.php | 200 OK <br>
    2024-02-20 08:20:12 | 87.65.43.21 | GET /getNotes.php | 200 OK <br>
    2024-02-20 08:21:35 | 123.45.67.89 | GET /getLog.php | 200 OK <br>
    2024-02-20 08:22:48 | 98.76.54.32 | GET /getUser.php | 200 OK <br>
    2024-02-20 08:06:44 | 54.32.10.98 | GET / | 200 OK <br>
    2024-02-20 08:06:44 | 541.3322.1.98 | GET /getFlag.php | 200 OK <br>
    2024-02-20 08:07:57 | 192.168.1.10 | GET /getNotes.php | 200 OK <br>
    2024-02-20 08:09:12 | 203.0.113.45 | GET /getLog.php | 200 OK <br>
    2024-02-20 08:10:35 | 87.65.43.21 | GET /getUser.php | 200 OK <br>
    2024-02-20 08:11:48 | 123.45.67.89 | GET /getAnswer.php | 200 OK <br>
    2024-02-20 08:13:59 | 98.76.54.32 | GET /getNotes.php | 200 OK <br>
    2024-02-20 08:15:21 | 54.32.10.98 | GET /getLog.php | 200 OK <br>
    2024-02-20 08:16:44 | 192.168.1.10 | GET /getUser.php | 200 OK <br>
    2024-02-20 08:18:57 | 203.0.113.45 | GET /getAnswer.php | 200 OK <br>
    2024-02-20 08:20:12 | 87.65.43.21 | GET /getNotes.php | 200 OK <br>
    2024-02-20 08:21:35 | 123.45.67.89 | GET /getLog.php | 200 OK <br>
    2024-02-20 08:22:48 | 98.76.54.32 | GET /getUser.php | 200 OK <br>
    2024-02-20 08:00:12 | 192.168.1.10 | GET /getNotes.php | 200 OK <br>
    2024-02-20 08:01:35 | 203.0.113.45 | GET /getUser.php | 200 OK <br>
    2024-02-20 08:02:48 | 87.65.43.21 | POST /getAnswer.php | 302 Found <br>
    2024-02-20 08:03:59 | 123.45.67.89 | GET /getLog.php | 200 OK <br>
    2024-02-20 08:05:21 | 98.76.54.32 | GET /flag.php | 404 Not Found <br>
    2024-02-20 08:06:44 | 54.32.10.98 | GET / | 200 OK <br>
    ";
}

?>