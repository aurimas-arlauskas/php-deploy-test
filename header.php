<?php
$page_title = $page_title ?? 'PHP Deploy Test';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            max-width: 720px;
            margin: 2rem auto;
            padding: 0 1rem;
            line-height: 1.6;
            color: #222;
            background: #fafafa;
        }
        nav {
            margin-bottom: 2rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid #ddd;
        }
        nav a {
            margin-right: 1rem;
            color: #0366d6;
            text-decoration: none;
        }
        nav a:hover { text-decoration: underline; }
        h1 { margin-top: 0; }
        .info {
            background: #fff;
            border: 1px solid #e1e4e8;
            border-radius: 6px;
            padding: 1rem 1.25rem;
            font-family: ui-monospace, SFMono-Regular, Menlo, monospace;
            font-size: 0.9rem;
        }
        .info div { margin: 0.25rem 0; }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
    </nav>
