<?php
    include 'php/search.php';
?>

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
        <section id="content">
            <div class="content-bg">
                <div class="main">
                    <div class="container_12">
                        <div class="wrapper">
                            <article class="grid_12">
                                <h3>Результаты поиска</h3>
                                <div class="wrapper p3">
                                    <div class="list-pages-menu">
                                        <ol class="rounded-list">
                                            <?php
                                                echo prepare_search_content();
                                            ?>
                                        </ol>
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
</body>
</html>