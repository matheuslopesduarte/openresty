<?php
include '../assets/messages.php';
$err = $_SERVER['ERROR_CODE'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Error {$err} ($msg[$err])!!" ?></title>
</head>

<body>
    <main class="bsod container">
        <h1 class="neg title"><span class="bg"><?php echo "Error - {$err}" ?></span></h1>

        <h3><?php echo $msg[$err] ?></h3>

        <p>An error has occured, to continue:</p>
        <ul>
            <li>Return to our homepage.</li>
            <li>Send us an e-mail about this error and try later.</li>
        </ul>
        <nav class="nav">
            <a href="/" class="link">index</a>&nbsp;|&nbsp;<a href="https://mlopes.xyz" class="link">webmaster</a>
        </nav>
    </main>
</body>
<style>
    @import 'https://fonts.googleapis.com/css?family=VT323';

    * {
        user-select: none;
    }

    body,
    h1,
    h2,
    h3,
    h4,
    p,
    a,
    li {
        color: #e0e2f4;
        user-select: text;
    }

    body,
    p {
        font: normal 20px/1.25rem "VT323", monospace;
    }

    h1 {
        font: normal 2.75rem/1.05em "VT323", monospace;
    }

    h2 {
        font: normal 2.25rem/1.25em "VT323", monospace;
    }

    h3 {
        font: lighter 1.5rem/1.25em "VT323", monospace;
    }

    h4 {
        font: lighter 1.125rem/1.2222222em "VT323", monospace;
    }

    ul {
        padding: 0;
        list-style-type: none;
    }

    li::before {
        content: "*";
        margin-right: 8px;
    }

    body {
        background: #0414a7;
    }

    .container {
        width: 90%;
        margin: auto;
        max-width: 640px;
    }

    .bsod {
        padding-top: 10%;
    }

    .bsod .neg {
        text-align: center;
        color: #0414a7;
    }

    .bsod .neg .bg {
        background: #aaaaaa;
        padding: 0 15px 2px 13px;
    }

    .bsod .title {
        margin-bottom: 50px;
    }

    .bsod .nav {
        margin-top: 35px;
        text-align: center;
    }

    .bsod .nav .link {
        text-decoration: none;
        padding: 0 9px 2px 8px;
    }

    .bsod .nav .link:hover,
    .bsod .nav .link:focus {
        background: #aaaaaa;
        color: #0414a7;
    }
</style>

</html>