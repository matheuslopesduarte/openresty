<?php
include '../assets/messages.php';
$err = $_SERVER['ERROR_CODE'] ?? 500;
$description = $msg[$err] ?? "Erro inesperado";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Erro <?= "{$err} ($msg[$err])" ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        body {
            min-height: 100dvh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .background-lines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(to right, rgba(0, 0, 0, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 0, 0, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
            z-index: 0;
        }

        header {
            padding: 1rem 2rem;
            text-align: center;
            font-weight: 500;
            font-size: 1.2rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            z-index: 2;
        }

        .content {
            position: relative;
            z-index: 1;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
        }

        .error-code {
            font-size: 5rem;
            font-weight: 300;
            color: #999;
        }

        .error-message {
            font-size: 1.8rem;
            font-weight: 500;
            margin-top: 1rem;
            max-width: 90%;
        }

        footer {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
            border-top: 1px solid;
        }

        footer a {
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .back-button {
            position: absolute;
            top: 75px;
            left: 1rem;
            background: #ffffff;
            color: #444;
            border: 1px solid #e0e0e0;
            border-radius: 24px;
            padding: 8px 14px 8px 12px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.95rem;
            font-weight: 500;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            cursor: pointer;
            z-index: 5;
            transition: all 0.2s ease;
        }

        .back-button:hover {
            background: #f7f7f7;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        }

        .back-button:active {
            transform: scale(0.97);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .back-button svg {
            flex-shrink: 0;
        }

        @media (max-width: 600px) {
            .error-code {
                font-size: 3.5rem;
            }

            .error-message {
                font-size: 1.2rem;
            }
        }

        /* --- tema claro --- */
        body.light {
            background: #f8fbff;
            color: #2e2e2e;
        }

        body.light .background-lines {
            background-image:
                linear-gradient(to right, rgba(0, 0, 0, 0.035) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 0, 0, 0.035) 1px, transparent 1px);
        }

        body.light header {
            background: #e9f3ff;
            color: #1d4e89;
        }

        body.light .back-button {
            background: #ffffff;
            color: #2e2e2e;
            border-color: #ddd;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        body.light .back-button:hover {
            background: #f0f4ff;
        }

        body.light footer {
            background: #f2f7fc;
            color: #5c5c5c;
            border-top: 1px solid #dbe7f1;
        }

        body.light footer a {
            color: #337ab7;
        }

        /* --- tema escuro --- */
        body.dark {
            background: #121212;
            color: #e0e0e0;
        }

        body.dark .background-lines {
            background-image:
                linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
        }

        body.dark header {
            background: #1f1f1f;
            color: #aadfff;
            box-shadow: 0 1px 3px rgba(255, 255, 255, 0.05);
        }

        body.dark .back-button {
            background: #1c1c1c;
            color: #e0e0e0;
            border-color: #2e2e2e;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.6);
        }

        body.dark .back-button:hover {
            background: #2a2a2a;
        }

        body.dark footer {
            background: #1a1a1a;
            color: #aaa;
            border-top-color: #333;
        }

        body.dark footer a {
            color: #66b0ff;
        }
    </style>

</head>

<body>
    <div class="background-lines"></div>

    <button class="back-button" onclick="history.back()" title="Voltar" id="goBackBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="#444" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        <span>Voltar</span>
    </button>

    <header>
        Ocorreu um erro em sua solicitação
    </header>

    <div class="content">
        <div class="error-code"><?= $err ?></div>
        <div class="error-message"><?= htmlspecialchars($description) ?></div>
    </div>

    <footer>
        <a href="/index.html">Ir para o início</a> •
        <a href="mailto:admin@mlopes.xyz">Contatar o webmaster</a>
    </footer>

    <script>
        function setThemeBasedOnPreference() {
            const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            document.body.classList.add(prefersDark ? 'dark' : 'light');
        }

        setThemeBasedOnPreference();

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            document.body.classList.remove('dark', 'light');
            document.body.classList.add(e.matches ? 'dark' : 'light');
        });

        if (window.history.length <= 1) {
            document.getElementById('goBackBtn').style.display = 'none';
        }
    </script>
</body>

</html>