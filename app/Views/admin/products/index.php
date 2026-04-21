<?php
// Start output buffering to capture content
ob_start();
?>

<h1>Admin Products</h1>
<p>Manage your products here.</p>

<?php
$content = ob_get_clean();
include '../../layouts/index.php';
?>