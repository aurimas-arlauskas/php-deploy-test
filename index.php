<?php
$page_title = 'PHP Deploy Test — Home';
include 'header.php';
?>
    <h1>PHP Deploy Test</h1>
    <p>
        This page is served by PHP from a GitHub repository deployed via an OAuth-based
        Git integration. If you can see the live values below (not raw <code>&lt;?php ?&gt;</code> tags),
        the PHP interpreter is running correctly on the host.
    </p>

    <div class="info">
        <div><strong>PHP version:</strong> <?php echo phpversion(); ?></div>
        <div><strong>Server software:</strong> <?php echo htmlspecialchars($_SERVER['SERVER_SOFTWARE'] ?? 'unknown'); ?></div>
        <div><strong>Host:</strong> <?php echo htmlspecialchars($_SERVER['HTTP_HOST'] ?? 'unknown'); ?></div>
        <div><strong>Rendered at:</strong> <?php echo date('c'); ?></div>
    </div>

    <p>Next: <a href="about.php">About this repo →</a></p>
</body>
</html>
