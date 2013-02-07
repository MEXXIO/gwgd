<?php
ob_start();
ob_implicit_flush(0);
require_once 'user/casimir-conf.php';
require_once 'inc/Casimir.php';

$casimir = new Casimir();

require_once 'inc/header.php';
?>
<h3>Tools</h3>
<h4>Bookmarklet</h4>
<div id="bookmarklet">Drag this bookmarklet into your toolbar: <?php $casimir->showBookmarklet(); ?></div>
<?php
require_once 'inc/footer.php';
$casimir->print_gzipped_page();

?>
