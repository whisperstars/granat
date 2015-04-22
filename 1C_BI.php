<?php include 'includes/head.html'; ?>
<body id="page1">
    <div class="extra">
        <!--==============================header=================================-->
        <header>
            <?php include 'includes/header.html'; ?>
            <div class="row-bot">
                <div class="center-shadow">
                </div>
            </div>
        </header>
        
        <!--==============================content================================-->
        <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. December10, 2011!</div>
            <div class="content-bg">
                <div class="main">
                    <div class="container_12">
                        <div class="wrapper img-indent-bot">
                            <article class="grid_12">
                                <h3>1С: Бизнес-анализ</h3>
                                <div class="wrapper">
                                    <div class="list-pages-menu">
                                    <ol class="rounded-list">
                                        <li><a href="#DataSource">Источники данных</a></li>
                                        <li><a href="#LoadingData">Загрузка данных</a></li>
                                        <li><a href="#ModelAssociations">Модель ассоциаций</a></li>
                                        <li><a href="#ResultsPresentation">Представление результатов</a></li>
                                        <li><a href="#ExportTools">Средства экспорта</a></li>
                                        <li><a href="#Teamwork">Коллективная работа</a></li>
                                    </ol>
                                </div>

                                <div id="DataSource" class="pageInList">
                                    Источники данных
Предоставьте вашим сотрудникам доступ к аналитическим инструментам, чтобы обеспечить своевременное решение критически важных задач.
Сократите затраты, ускорьте и упростите анализ данных, поступающих из различных источников.

Объединение разных источников данных в одно аналитическое ядро – ключ к их анализу. Предлагаемая BI-ситема позволяет получать данные из баз данных, электронных таблиц, веб-сайтов и пользовательских источников данных. 
Основные классы источников данных для BI-ситемы:
•   ERP-системы (1C, Microsoft Dynamics AX, SAP, Oracle E-Business Suite, Oracle JD Edwards EnterpriseOne, и др.);
•   CRM-системы ( Terrasoft CRM, vTiger и др.);
•   Самописные системы;
•   Все промышленные СУБД( Oracle, Microsoft SQL Server, My SQL, PostgreSQL, Informix, Interbase и др.
•   Файлы Excel, Access,. txt,. csv,. xml и др.
•   Данные из Интернет (например, курсы валют, данные социальных сетей и т.д.).
•   И другие источники информации. 
Итак, в одном и том же приложении предлагаемой BI-системы Вы можете комбинировать источники данных разных разработчиков и поставщиков информации, что позволяет получить глубокое понимание имеющихся данных.
                                </div>

                                <div id="LoadingData" class="hidden pageInList">
Загрузка данных
Многие организации не используют все имеющиеся данные как источник получения необходимых знаний о бизнесе для принятия решений и реакции на изменения.
 Чаще всего информация, действительно способная дать необходимые знания, не лежит на поверхности, а скрыта глубоко в данных, хранящихся во внутрикорпоративных системах или на персональных компьютерах сотрудников.
 Для получения и регулярного своевременного использования такой информации организации нуждаются в инструменте, который бы позволил осуществить оптимизацию,фильтрацию и объединение всех необходимых данных, а также провести их полный и быстрый анализ даже неопытным пользователям



Система QlikView  способна извлекать и объединять данные из множества разнородных источников, не прибегая в явной форме к импорту или экспорту данных из внешних систем. В результате пользователи могут централизованно анализировать корпоративные данные независимо от их происхождения и получать целостное представление о бизнесе.QlikView консолидирует данные из разных источников.

QlikView использует встроенные функции, чтобы извлечь, преобразовать и загрузить данные из одного или нескольких источников (например, ERP-систем, СУБД, систем собственной разработки, текста, Excel, XML и т.д.). В документе QlikView данные хранятся в сжатом виде благодаря применению запатентованной ассоциативной модели данных. Коэффициент сжатия без агрегирования достигает 5-20 раз от первоначального размера.
Для загрузки данных можно использовать:
•   Выгрузка даных в промежуточных файлах на диск и загрузка данных из этих файлов в BI -систему. Основные недостатки этого варианта: не всегда возможно выгрузить данные в любое время, низкая скорость выгрузки при больших объемах данных, уменьшение надежности системы, которая может быть вызвана сбоями при выгрузке, необходимо отслеживать результаты выгрузки.
•   На больших проектах, как правило, строится трехзвенная архитектура . Первоначальную информацию из источника выгружают в QVD-контейнеры, далее ее из первой линии контейнеров перегружают с необходимой трансформацией во вторую. Итоговые приложения могут быть построены на базе обеих линий. Зачем же нужны эти QVD-контейнеры?Первая задача – убрать нагрузку с транзакционной системы, чтобы минимизировать риск сбоя и снижения производительности по вине стороннего софта. Вторая – повысить скорость загрузки информации. Для QlikView QVD – это родной формат, с которым она работает на порядок быстрее. И третья задача – создание последующей инкрементальной загрузки информации, когда к модели будет подгружаться только измененная и новая информация из источников. Таким образом, создается промежуточный слой данных, с которым разработчик может проводить необходимые преобразования.


                                </div>

                                <div id="ModelAssociations" class="hidden pageInList">
                                    Модель ассоциаций

BI-сиcтема  построена на аналитической платформе, реализующей ассоциативную архитектуру с обработкой данных в оперативной памяти.Управление взаимосвязями между данными осуществляется не на прикладном уровне, а на уровне внутренних механизмов платформы. Платформа хранит в оперативной памяти отдельные таблицы данных и ассоциативные связи между ними. Каждое значение каждого поля связано со всеми остальными значениями во всей базе данных. Наборы данных могут состоять из сотен таблиц с тысячами полей.

  

В тот момент, когда пользователь выбирает необходимое значение в любом из полей заданной таблицы базы данных, BI-ситема не выполняет запросов, а все оставшиеся поля немедленно подстраиваются в соответствии со сделанным выбором пользователя, то есть все необходимые виды фильтров накладываются на исходные данные автоматически. Значения, которые выбирает пользователь, окрашиваются в зеленый цвет. Все связанные с этим сделанным выбором данные окрашиваются в белый, а остальные в серый цвет.
Пользователю всегда понятно, каким образом связываются между собой любые значения. Если возникает необходимость изучить определенную информацию по конкретному продукту, услуге или временному промежутку, то всегда есть возможность выделить все соответствующие данные из общего содержания, так как пользователь не ограничен рамками конкретного запроса.
Ассоциативные связи между данными хранятся на протяжении всей работы без необходимости в дополнительных настройках. В любой момент можно получить оперативный ответ на любой из возникающих вопросов и перейти к решению актуальных задач.


 http://qva.by/index.pl?act=PRODUCT&id=71


Вытянув данные из различных источников QlikView автоматически выстраивает ассоциативные связи между уникальными данными в различных источниках и типах представления данных. Другими словами QlikView мгновенно просматривает индивидуальные значения различных параметров данных о одной таблице и простраивает связи с другими индивидуальными данными во всех других таблицах. Связи строятся не на уровне столбцов, а на уровне реальных данных.

Поэтому, когда конечный пользователь начинает работать с данными, ассоциативно связанными в BI-ситеме он просто видит как данные связаны. Пользователь видит зависимости или видит отсутствие связей, и начинает задавать себе вопросы на понимание: «Почему в эти даты были отгрузки? А они реально должны были быть? А эти даты отгрузок соответствуют прописанным в договорах на поставку?» Точнее это будут любые возможные вопросы, относящиеся к сути работы компании и каждый из вопросов будет отвечен. BI-ситема сама укажет пользователю куда нужно посмотреть для того, чтобы задуматься и получить ответ именно на заданный вопрос. 
Поскольку ассоциативно простроены связи между всеми таблицами, то BI-ситема моментально отбирает данные в других таблицах данные ассоциативно связанные события. Ключевой момент – ассоциативная модель QlikView работает в любых направлениях. 
Задав любой вопрос и выбрав данные, QlikView дает множество ответов на еще не заданные вопросы. Увидев которые, пользователь говорит себе – как интересно! А почему эти данные связанны с теми которые он выбрал? А должны ли быть эти данные связаны на самом деле? 


 


Уникальность ассоциативного механизма:

1) Приложение работает аналогично тому, как происходит мышление человека.
2) Предлагает возможности для выявления несвязных данных.
3) Решение поддерживает как прямой, так и косвенный поиск.
4) Выдает ответы с той скоростью, с которой пользователи только могут задавать вопросы. 

Посмотрите видео ссылка

                                </div>

                                <div id="ResultsPresentation" class="hidden pageInList">
                                    Представление результатов
Привычный интуитивно понятный пользовательский интерфейс BI-сиcтемы и высокий уровень визуализации обеспечивает простоту работы, наглядность представления и быстроту восприятия комплексной информации.
BI-ситема управляется щелчком мыши, и любой сотрудник легко обучается работе с ней.
BI-ситема предлагает сотни видов диаграмм, графиков, таблиц, комбинированных и специализированных элементов для расширенного анализа.
Элементы типа «список» позволяют быстро перемещаться по всем значениям измерений.
На каждый графический элемент можно кликнуть мышью для более детального анализа.
Каждый из элементов является интерактивным, позволяя щелчком мыши включать фильтры, переходить по иерархиям, получать более детальные данные и совершать много других манипуляций с данными.
С визуально интерактивным пользовательским интерфейсом BI-ситема легка в обучении и позволяет пользователям получать более глубокое понимание даннях.
                                </div>

                                <div id="ExportTools" class="hidden pageInList">
                                    Средства экспорта
BI-ситема позволяет исследовать данные, задавать вопросы и получать ответы «на лету». ВЫ можете организовать обсуждение с коллегами для совместного принятия решений в реальном времени.Предлагаем Вам воспользоваться всеми преимуществами оптимизированного и масштабируемого механизма BI-ситемы, работающего в оперативной памяти, для мгновенного доступа к большим объемам данных. Получайте информацию с помощью нескольких щелчков мышью. Изучайте взаимосвязи между данными и проникайте в суть происходящих процессов.
С помощью несложных действий экспортируйте данные из объектов в форматы XML, Excel, CSV и TXT.
                                </div>

                                <div id="Teamwork" class="hidden pageInList">
                                    Коллективная работа


BI-ситема поддерживает совместную работу! Анализируйте информацию, оставляя комментарии к графикам прямо в приложении. Проводите совместные сеансы, анализируете информацию совместно с удалёнными подразделениями. 

В BI-ситеме пользователи могут вести обсуждения с помощью нового объекта комментариев. Пользователь может оставить комментарий к любому объекту BI-ситемы, его коллеги могут добавить к нему свои собственные комментарии. Обсуждение проблемы может разделяться на несколько «ветвей». Пользователи могут создавать закладки, иллюстрирующие обсуждаемые выборки, и включать их в дискуссии, чтобы позже, читая эти комментарии, можно было полностью восстановить актуальную на тот момент среду. BI-ситема запоминает состояние самого объекта (выборки пользователя), а также автора и время создания каждого комментария. Таким образом в системе сохраняется подробный протокол процесса принятия решения.

                                </div>
                            </article>
                        </div>
                        <div class="wrapper">
                            <article class="grid_8">
                                <h3>Дополнительные услуги</h3>
                                <div class="wrapper">
                                    <figure class="img-indent"><img class="img-border" src="images/page3-img7.jpg" alt="" /></figure>
                                    <div class="extra-wrap">
                                        <p>Конечно, проект "1С: Бизнес-анализ" является для нас приоритетным, но это не единственная услуга, которую мы Вам предлагаем. Если у Вас возникнет необходимость, мы можем быть полезными и в таких сферах деятельности:</p>
                                        <ul class="list-1">
                                            <li><a href="#">Внедрение 1С, консультации, обучение.</a></li>
                                            <li><a href="#">Разработка программного обеспечения под заказ.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="grid_4">
                                <div class="indent-left3">
                                    <h3>Шаги к успеху</h3>
                                    <div class="wrapper indent-bot">
                                        <h4 class="img-indent2">Шаг 1</h4>
                                        <div class="extra-wrap">
                                            Изучите наш сайт, наши пре-зентации, видеоролики и статьи.
                                        </div>
                                    </div>
                                    <div class="wrapper indent-bot">
                                        <h4 class="img-indent2">Шаг 2</h4>
                                        <div class="extra-wrap">
                                            Примите решение о внедрении системы<br> <a href="#">"1С: Бизнес-анализ".</a>
                                        </div>
                                    </div>
                                    <div class="wrapper indent-bot">
                                        <h4 class="img-indent2">Шаг 3</h4>
                                        <div class="extra-wrap">
                                            Свяжитесь с нами и закажите<br> <a href="#">пилотный проект.</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="block"></div>
            </div>
        </section>
    </div>
    
    <!--==============================footer=================================-->
    <footer>
        <?php include 'includes/footer.html'; ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>