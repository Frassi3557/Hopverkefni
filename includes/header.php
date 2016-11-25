<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<div class="header-nav">
	<nav>
		<li><a href="index.php"<?php if ($currentPage == 'index.php') {echo 'id="here"';}?>>Orðtök</a></li>
        <li><a href="baeta.php"<?php if ($currentPage == 'baeta.php') {echo 'id="here"';}?>>Bæta við orðtaki</a></li>
	</nav>
</div>