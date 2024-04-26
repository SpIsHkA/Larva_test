<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larva Games</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="navbar">
        <div class="container">
            <div class="navbar-header">
                <a href="#" onclick="scrollToTop()">
                    <img src="./img/logo.svg" alt="Логотип">
                </a>
            </div>
            <div class="navbar-menu">
                <ul class="navbar-nav">
                    <li class>
                        <a href="#home">Обо мне</a>
                    </li>
                    <li class>
                        <a href="#dream">Мечта</a>
                    </li>
                    <li class>
                        <a href="#games">Мои игры</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-section" id="home">
        <h1>Обо мне</h1>
        <p>В данный момент я работаю над двумя играми: <br>
            ・The Slime Plague - смесь Tower Defence и Horror <br>
            ・No gravity no sanity -  horror игра <br>
            Прогресс разработки я выкладываю на YouTube, TikTok и в Discord.</p>
        <div class="btns-layout">
            <a href="https://www.tiktok.com/@larva_games" target="_blank">
                <div class="btn">
                    <img src="./img/tiktok.svg">
                    <h2>larva games</h2>
                </div>
            </a>
            <a href="https://www.tiktok.com/@larva.life" target="_blank">
                <div class="btn">
                    <img src="./img/tiktok.svg">
                    <h2>larva life</h2>
                </div>
            </a>
            <a href="https://t.me/larva_games" target="_blank">
                <div class="btn">
                    <img src="./img/tg.svg">
                    <h2>telegram</h2>
                </div>
            </a>
            <a href="https://www.twitch.tv/larvagames" target="_blank">
                <div class="btn">
                    <img src="./img/twitch.svg">
                    <h2>twitch</h2>
                </div>
            </a>
            <a href="https://www.youtube.com/@larva_games" target="_blank">
                <div class="btn">
                    <img src="./img/youtube.svg">
                    <h2>youtube</h2>
                </div>
            </a>

        </div>
    </div>
    <div class="section" id="dream">
        <h1>Мечта</h1>
        <p>У меня есть мечта - собственная студия разработки игр Larva games. Если ты хочешь помочь мне с этим, то можешь поддержать меня финансово. буду очень благодарен.</p>
        <div class="btns-layout">
            <a href="https://boosty.to/larvagames" target="_blank">
                <div class="btn">
                    <img src="./img/boosty.svg">
                    <h2>boosty</h2>
                </div>
            </a>
            <a href="https://www.donationalerts.com/r/larvagames" target="_blank">
                <div class="btn">
                    <img src="./img/donalerts.svg">
                    <h2>donation alerts</h2>
                </div>
            </a>
        </div>
    </div>
    <div class="section" id="games">
        <h1>мои игры</h1>
        <div class="cards-layout">
            <div class="card" onclick="window.open('https://store.steampowered.com/app/2523780/No_Gravity_No_Sanity/', '_blank')">
                <img src="./img/games/no-gravity-no-sanity.png">
                <div class="card-text">
                    <h2>No Gravity No Sanity</h2>
                    <p>"No Gravity No Sanity" - это одиночный хоррор, раскрывающий последствия великого научного открытия - создание первой черной дыры в земных условиях.</p>
                </div>
            </div>            
            <div class="card" onclick="window.open('https://store.steampowered.com/app/2359980/The_Slime_Plague/', '_blank')">
                <img src="./img/games/the-sline-plague.jpg">
                <div class="card-text">
                    <h2>The Slime Plague</h2>
                    <p>Метеорит принес на Землю ядовитую слизь, которая заражает все на своем пути, чтобы заселить планету обитателями из глубокого космоса. Вместе со своими друзьями вы столкнетесь с монстрами, чтобы защитить свою ферму и отбиться от захватчиков. Не бойтесь, ведь ваши друзья полагаются на вас.</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="love-section">
    <div class="love-content">
        <h1>Лавина сердец!</h1>
        <p>Вы можете оставлять безграничное количество сердец! Мне будет очень приятно!</p>
        <div class="love-btn">
            <div class="btn-love">
                <h2>лайкнуть</h2>
            </div>
            <div class="cnt-love">
                <h3 id="heart-count"><?php echo getHeartCount(); ?> сердец</h3>
            </div>
        </div>
    </div>
</div>

<?php
// Функция для получения количества сердец из файла
function getHeartCount() {
    $filePath = "heart_count.txt"; // Путь к файлу с количеством сердец

    // Проверяем, существует ли файл
    if (file_exists($filePath)) {
        // Читаем количество сердец из файла
        $heartCount = file_get_contents($filePath);
        return $heartCount !== false ? intval($heartCount) : 0; // Возвращаем количество сердец, преобразованное в целое число
    } else {
        return 0; // Если файл не существует, возвращаем 0
    }
}

// Функция для обновления количества сердец в файле
function updateHeartCount($newCount) {
    $filePath = "heart_count.txt"; // Путь к файлу с количеством сердец

    // Записываем новое количество сердец в файл
    file_put_contents($filePath, $newCount);
}
?>


<script src="script.js"></script>
<script>
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>


</body>
</html>