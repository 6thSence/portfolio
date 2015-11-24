    <section class="aboutbox">
        <h2 class="aboutbox-header">У вас интересный проект? Напишите мне</h2>
        <div class="aboutbox-body contact-me clearfix">
            <form method="POST" id="feedback-form" class="back-form clearfix">
                <div class="serv-msg error" id="serv-msg"></div>
                <div class="back-text-div left">
                    <p class="back-text  ">Имя</p>
                    <input class="input first" type="text" name="name" placeholder="Как к вам обращаться" x-autocompletetype="name" qtip-position="left" qtip-content="введите имя">
                </div>
                <div class="back-text-div right">
                    <p class="back-text   ">Email</p>
                    <input class="input first" type="text" name="email" placeholder="Куда мне писать" x-autocompletetype="name" qtip-position="right"
                           qtip-content="введите email">
                </div>
                <div class="back-massage-div">
                    <p class="back-text">Сообщение</p>
                    <textarea class="input big " name="message" rows="5" placeholder="Кратко в чем суть" qtip-position="left"qtip-content="ваш вопрос"></textarea>
                </div>
                <div class="kapcha-div">
                    <div id="html_element" data-theme="light" class="g-recaptcha" data-sitekey="<?php echo PUBLIC_KEY; ?>"></div>
                </div>
                <div class="buttons">
                    <button id="dis"class="sub" type="submit" value="Отправить" >Отправить</button>
                    <button class="sub res" type="reset" value="Очистить">Очистить</button>
                </div>
            </form>
        </div>
    </section>
