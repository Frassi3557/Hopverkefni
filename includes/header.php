<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<div>
    <input class="input1" type="checkbox" id="toggle">
    <label class="checkbox" for="toggle">&#9776; Menu</label>
    <nav class="menu">
        <ul class="topmenu">
            <li><a href="index.php"<?php if ($currentPage == 'index.php') {echo 'id="here"';}?>>Orðtök</a></li>
            <li><a href="baeta.php"<?php if ($currentPage == 'baeta.php') {echo 'id="here"';}?>>Bæta við orðtaki</a></li>
            <li><a href="myndir.php"<?php if ($currentPage == 'myndir.php') {echo 'id="here"';}?>>Myndir</a></li>
            <li><a href="baetamynd.php"<?php if ($currentPage == 'baetamynd.php') {echo 'id="here"';}?>>Bæta við mynd</a></li>
        </ul>
    </nav>
</div>