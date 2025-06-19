<?php
/*
Template name: home
*/
get_header();
?>

<body class="main__body">
    <main>
        <section id="Home" class="home">
            <div class="container">
                <div class="home__wrapper">
                    <div class="home__inner home__wrapper-box">
                        <h1 class="home__title title"><?php the_field('Home_title'); ?><span> <?php the_field('Home_title2'); ?></span></h1>
                        <p class="home__text text">
                            <?php the_field('Home_text'); ?>
                        </p>

                        <ul class="home__benefit home__items">
                            <?php if (have_rows('Home_benefit')): ?>
                                <?php while (have_rows('Home_benefit')) : the_row(); ?>
                                    <li class="home__item">
                                        <div class="home__item-title">
                                            <?php the_sub_field('Home_benefit-title'); ?> <span>+</span>
                                        </div>
                                        <div class="home__item-text">
                                            <?php the_sub_field('home_benefit-text'); ?>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>


                        </ul>
                    </div>
                    <div class="home__wrapper-box">
                        <div class="home__box-image">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/header/cup.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="About" class="about">
            <div class="container">

                <h2 class="about__title title"><span><?php the_field('About_title'); ?></span> <?php the_field('About_title2'); ?></h2>
                <div class="about__wrapper">

                    <?php if (have_rows('About_box')): ?>
                        <?php while (have_rows('About_box')) : the_row(); ?>

                            <?php
                            $text = get_sub_field('About_box-text');
                            $link = get_sub_field('About_box-url'); // ACF Link field
                            $video_url = is_array($link) ? $link['url'] : '';
                            $image_url = get_sub_field('About_box-image');
                            ?>

                            <div class="about__box<?php echo (get_row_index() == 2) ? '-box' : ''; ?>">

                                <?php if (!empty($text)): ?>
                                    <p class="about__text">
                                        <?php echo esc_html($text); ?>
                                    </p>
                                <?php endif; ?>

                                <?php if ($image_url): ?>
                                    <a data-fancybox="gallery"
                                        href="<?php echo esc_url($video_url ?: '#'); ?>"
                                        class="about__image-link">
                                        <div class="about__image">
                                            <svg viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="Media / Play_Circle">
                                                    <g id="Vector">
                                                        <path d="M3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12Z"
                                                            stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M10 15V9L15 12L10 15Z"
                                                            stroke="#000000" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                </g>
                                            </svg>
                                            <img src="<?php echo esc_url($image_url); ?>" alt="" />
                                        </div>
                                    </a>
                                <?php endif; ?>

                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>


                </div>



            </div>
        </section>
        <section id='Gallery' class="gallery">
            <div class="container">
                <h2 class="gallery__title title"><?php the_field('Gallery_title'); ?> <span><?php the_field('Gallery_title2'); ?></span></h2>
                <div class="gallery__wrapper">



                    <?php if (have_rows('Gallery_wrapper')): ?>
                        <?php while (have_rows('Gallery_wrapper')): the_row(); ?>
                            <?php
                            $image_field = get_sub_field('Gallery_image');
                            $video_link = get_sub_field('About_box-url');

                            // Якщо image повертає масив — беремо URL
                            $image_url = is_array($image_field) ? $image_field['url'] : $image_field;
                            ?>
                            <?php if ($image_url): ?>
                                <div class="gallery__box">
                                    <a class="gallery__box-link"
                                        data-fancybox="galimage"
                                        href="<?php echo esc_url($video_link ?: $image_url); ?>">
                                        <div class="gallery__box-image">
                                            <img src="<?php echo esc_url($image_url); ?>" alt="" />
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>






                </div>
            </div>

        </section>
        <section id="Contacts" class="contact">
            <div class="container">
                <div class="contact__title title"><span><?php the_field('Contacts_title1'); ?></span> <?php the_field('Contacts_title2'); ?></div>
                <div class="contact__wrapper">
                    <div class="contact__box">

                        <p class="contact__text text">
                            Have time to buy the most harmonious drinks in the new Starbucks
                            coffee and don't forget about the discount!
                        </p>

                        <div class="contact__inner">
                            <div class="contact__image">
                                <img src="<?php echo get_template_directory_uri(); ?> /assets/img/contact/insta.png" alt="" />
                            </div>
                            <p class="contact__p">@supercoffee</p>
                        </div>
                        <div class="contact__inner">
                            <div class="contact__image">
                                <img src="<?php echo get_template_directory_uri(); ?> /assets/img/contact/tell.png" alt="" />
                            </div>
                            <a class="contact__link" href="tel:+79999999999">+7-999-999-99-99</a>
                        </div>
                        <div class="contact__inner">
                            <button class="contact__btn">Give me some feedback</button>
                        </div>
                    </div>

                    <div class="contact__box">
                        <div class="contact__image">
                            <img
                                class="contact__box-image"
                                src="<?php echo get_template_directory_uri(); ?> /assets/img/contact/contact.png"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal__wrapper">
            <div class="modal">
                <div class="modal__close">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/img/cross.svg" alt="cancel" width="24px" height="24px" />
                </div>
                <div class="modal__title">
                    <span>Just leave your details and we’ll get back to you</span>
                </div>
                <div class="modal__body">
                    <form class="modal__form" action="#">
                        <input
                            class="modal__form-name modal__form-input"
                            type="text"
                            placeholder="Enter your name" />
                        <input
                            class="phone__input modal__form-input"
                            type="text"
                            placeholder="+38(___)___-__-__"
                            value="+38" />
                        <button class="modal__form-btn">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <a href="#" class="btn modal__btn">Open modal</a>
        <!-- Modal 2 -->
        <div class="modal__wrappe2">
            <div class="modal">
                <div class="modal__title">
                    <span>Your application has been accepted. We will contact you shortly.</span>
                </div>
                <div class="modal__body">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/img/done.svg" alt="done">
                </div>
            </div>
        </div>


        <div class="skroll__box">
            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/skroll.png" alt="" />
        </div>
    </main>

</body>

<?php get_footer(); ?>