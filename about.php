<?php
$page_title = 'PHP Deploy Test — About';
include 'header.php';
?>
    <h1>About</h1>
    <p>
        This is a minimal multi-page PHP site used to verify GitHub OAuth-based
        deployment integrations for PHP hosting. The presence of this second page
        confirms that multi-file deploys and basic routing work correctly.
    </p>
    <p>
        Files in this repo:
    </p>
    <ul>
        <li><code>index.php</code> — landing page with live PHP runtime info</li>
        <li><code>about.php</code> — this page</li>
        <li><code>header.php</code> — shared <code>include</code>'d header + styles</li>
    </ul>

    <p><a href="index.php">← Back to home</a></p>
</body>
</html>
