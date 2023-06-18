<?php get_header(); ?>
    <div class="about" id="about" style="background: url(<?= CFS()->get('backgrond_white'); ?>) center 100% repeat-x,
                url(<?= CFS()->get('backgrond_black'); ?>) center 100% repeat-x, #1d1d1d;">
        <div class="container">
            <div class="about__inner">
                <?php
                $loop = CFS()->get('card');
                foreach ($loop as $row) {
                    ?>
                        <div class="about__item">
                    <div class="about__year"><?= $row['card_year'] ?></div>
                    <div class="about__text"><?= $row['card_text'] ?></div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="team" id="team">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title"><?= CFS()->get('team_title'); ?></h2>
                <p class="block__text"><?= CFS()->get('team_description'); ?></p>
            </div>
            <div class="team__inner">


                    <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <?php 
                    $loop = CFS()->get('team_card');
                    foreach ($loop as $row) {
                        ?>
                                        <div class="swiper-slide">

                    <div class="team__item">             
                    <img class="team__item-img" src="<?= $row['team_img'] ?>" alt="">
                    <h3 class="team__item-title"><?= $row['team_name'] ?></h3>
                    <p class="team__item-text"><?= $row['team_post'] ?></p>
                    <div class="team__icon-box">

                        <?php
                            if(!empty($row['team_twitter']['url'])) {
                                ?>
                                    <a href="<?= $row['team_twitter']['url'] ?>" targer="<?=$row['team_twitter']['targer'] ?>"><i class="icon-twitter"></i></a>
                                <?php
                            }
                            if(!empty($row['team_instagram']['url'])) {
                                ?>
                                    <a href="<?= $row['team_instagram']['url'] ?>" targer="<?=$row['team_instagram']['targer'] ?>"><i class="icon-instagram"></i></a>
                                    <?php
                }
                ?>
                </div>
                </div>
            </div>
                <?php
            }
            ?>


                
                </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
                </div>




               


                
            </div>
        </div>
    </div>
    <div class="provide" id="provide">
        <div class="container">
            <div class="block__head inverse">
                <h2 class="block__title"><?= CFS()->get('provide_card_title'); ?></h2>
                <p class="block__text"><?= CFS()->get('provide_card_text'); ?></p>
            </div>
            <div class="provide__inner">
                <div class="provide__item">
                    <img src="" alt="">
                    <h3 class="provide__item-title">Some Analytics</h3>
                    <p class="provide__item-text">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</p>
                </div>
            </div>
        </div>
    </div> 








    <div class="contact" id="contact">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title">Contac Us</h2>
                <p class="block__text">We know what we need to do</p>
            </div>
            <div class="contact__inner">
                <div class="contact__icon-box">
                    <div class="contact__item">
                        <i class="icon-phone"></i>
                        <div class="contact__text"><a href="tel:555222333">555-222-333</a></div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-location"></i> 
                        <div class="contact__text"><a href="https://goo.gl/maps/ot9BCyYtQbSXoJYRA" target="_blank">Here is some address</a></div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-mail-alt"></i>
                        <div class="contact__text"><a href="mailto:somemail@hotmail.com">somemail@hotmail.com</a></div>
                    </div>
                </div>
                <form action="" class="contact__form">
                    <input class="contact__name" type="text" placeholder="Full Name">
                    <input class="contact__email" type="email" placeholder="Email">
                    <input class="contact__number" type="number" placeholder="Number">
                    <textarea class="contact__textarea" placeholder="Write your Message here..."></textarea>
                    <input type="submit" class="contact__button" value="Submit">
                </form>
            </div>
        </div>
    </div>
<?php get_footer(); ?>