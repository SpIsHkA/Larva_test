document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.navbar-menu ul li a');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            links.forEach(link => {
                link.classList.remove('active');
            });

            this.classList.add('active');

            event.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 85,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Обработчик скролла страницы
    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;

        // Получаем все якорные ссылки в меню
        const links = document.querySelectorAll('.navbar-menu ul li a');

        // Проходимся по каждой ссылке и проверяем, находится ли соответствующий элемент в области видимости
        links.forEach(link => {
            const targetId = link.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                const rect = targetElement.getBoundingClientRect();

                // Если верхняя граница элемента находится выше (или находится на) верхней границы окна просмотра
                // и нижняя граница элемента находится ниже (или находится на) нижней границы окна просмотра,
                // то это означает, что элемент находится в области видимости
                if (rect.top <= 85 && rect.bottom >= 85) { // Учитываем высоту навбара
                    // Удаляем активный класс у всех ссылок
                    links.forEach(link => {
                        link.classList.remove('active');
                    });

                    // Добавляем активный класс к текущей ссылке
                    link.classList.add('active');
                }
            }
        });
    });
});
