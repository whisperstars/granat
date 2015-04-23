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
                            <article class="grid_8">
                                <h3>Контактная форма</h3>
                                <form id="contact-form2">                    
                                    <fieldset>
                                          <label><span class="text-form">Имя:</span><input class="name" name="name" type="text" /></label>
                                          <label><span class="text-form">Контакт:</span><input class="contact" name="contact" type="text" /></label>                              
                                          <div class="wrapper">
                                            <div class="text-form">Сообщение:</div>
                                            <div class="extra-wrap">
                                                <textarea name="message" class="message"></textarea>
                                                <div class="clear"></div>
                                                <div class="buttons2">
                                                    <a href="#" class="send_btn send">Отправить</a>
                                                </div> 
                                            </div>
                                          </div>                            
                                    </fieldset>                     
                                </form>
                            </article>    
                            <article class="grid_4">
                                <h3>Как с нами связаться</h3>
                                <figure class="img-indent-bot img-border">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2648.6932349875933!2d35.037858400000005!3d48.404833999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbfb5c5777534f%3A0x3b5574e3287c955e!2sPanikakhy+St%2C+2%2C+Dnipropetrovs&#39;k%2C+Dnipropetrovsk+Oblast!5e0!3m2!1sen!2sua!4v1429793082061" width="500" height="225" frameborder="0" style="border:0"></iframe>
                                </figure>
                                <dl>
                                    <dd><span>МТС:</span> +3 8(095) 90 68 520</dd>
                                    <dd><span>Киевстар:</span> +3 8(067) 56 72 652</dd>
                                    <dd><span>Email:</span><a href="mailto:info@granat.dp.ua">info@granat.dp.ua</a></dd>
                                </dl>
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

    <script type="text/javascript" src="js/contactForm.js"></script>
</body>
</html>