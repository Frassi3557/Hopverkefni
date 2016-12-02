<header>
    <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
    <div>
        <input class="input1" type="checkbox" id="toggle">
        <label class="checkbox" for="toggle">&#9776; Efnisyfirlit</label>
        <nav class="menu">
            <ul class="topmenu">
                <a href="index.php"<?php if ($currentPage == 'index.php') {echo 'id="here"';}?>><li>Orðtök</li></a>
                <a href="baeta.php"<?php if ($currentPage == 'baeta.php') {echo 'id="here"';}?>><li>Bæta við orðtaki</li></a>
                <a href="myndir.php"<?php if ($currentPage == 'myndir.php') {echo 'id="here"';}?>><li>Myndir</li></a>
                <a href="baetamynd.php"<?php if ($currentPage == 'baetamynd.php') {echo 'id="here"';}?>><li>Bæta við mynd</li></a>
            </ul>
        </nav>
    </div>
</header>