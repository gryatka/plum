<!--база данных-->
<?php
    require 'db.php'; 
?>

<!--шапка-->

<input type="checkbox" id="menu-checkbox">
    <nav role="navigation">
        <label for="menu-checkbox" class="toggle-buttom" data-open="МЕНЮ" data-close="ЗАКРЫТЬ" onclick></label>
    <div id="menu">
        <ul class="menu">
            <li><a href="index.php">Главная</a></li>
            <li><a href="library.php">Библиотека постов</a></li>
            <li><a href="addres.php">Дополнительные ресурсы</a></li>
            <li><a href="rules.php">Правила и FAQ</a></li>
            <li><a href="https://nyaa.pantsu.cat/" target="_blank">Аниме трекер</a></li>
            <li><a href="https://t.me/plumtg" target="_blank">Мы в Telegram</a></li>
        </ul>
    </div>
    <div id="menu960">
        <ul class="menu960">
            <li><a href="index.php">Главная</a></li>
            <li><a href="library.php">Библиотека постов</a></li>
            <li><a href="addres.php">Дополнительные ресурсы</a></li>
            <li><a href="rules.php">Правила и FAQ</a></li>
        </ul>
        <ul class="menu960">
            <li><a href="https://nyaa.pantsu.cat/" target="_blank">Аниме трекер</a></li>
            <li><a href="https://t.me/plumtg" target="_blank">Мы в Telegram</a></li>
        </ul>
    </div>
</nav>