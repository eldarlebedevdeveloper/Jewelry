<?php get_header() ?>
<!-- First screen -->
<section class="first-screen first-screen-slider" id="first-screen-slider">
    <div class="container">
        <div class="first-screen-nav">
            <?php $count_posts = wp_count_posts();
            $published_posts = $count_posts->publish;
            ?>
            <a href="#" class="first-screen-nav-item slider_navigation" data-slide="all_slides">All
                goods(<?php echo $published_posts; ?>)</a>
            <?php
            $categories = get_categories([
                'orderby'            => 'name',
                'order'              => 'ASC',
                'style'              => 'none',
                'show_count'         => 1,
                'hide_empty'         => 1,
                'child_of'           => 0,
                'exclude'            => '',
                'include'            => '',
                'hierarchical'       => true,
                'title_li'           => __('Categories'),
                'number'             => NULL,
                'echo'               => 1,
                'depth'              => 0,
                'pad_counts'         => 0,
                'taxonomy'           => 'category',
                'walker'             => 'Walker_Category',
                'separator'          => '',
            ]);
            ?>
            <?php
            $currentCatefory = 0;
            if ($categories) {
                foreach ($categories as $cat) {
                    $currentCatefory++;
            ?>
                    <a href="#" class="first-screen-nav-item slider_navigation" data-slide="<?php echo $currentCatefory; ?>" data-slideCategory='<?php echo $cat->slug; ?>'>
                        <?php echo $cat->name; ?>(<?php echo $cat->count; ?>) </a>
            <?php
                }
            }
            ?>
        </div>
        <div class="first-screen-product-wrapper">
            <?php
            global $post;
            $myposts = get_posts(array(
                'tag' => 'main-product',
            ));
            foreach ($myposts as $post) {
                setup_postdata($post);
            ?>
                <div class="first-screen-product-item">
                    <?php $image = get_field('3d_model');
                    if (!empty($image)) :
                    ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" onclick="location.href='<?php the_permalink(); ?>'" data-link="<?php the_permalink(); ?>" data-slideCategory="<?php $category = get_the_category();
                                                                                                                                                                                                                                    echo $category[0]->slug; ?>" class="first-screen-product first-screen-product-02">
                </div>
        <?php
                    endif;
                }
                wp_reset_postdata();
        ?>
        </div>
        <div class="first-screen-bg-wrapper first-screen-bg-wrapper-main">
            <div class="first-screen-main-bg-wrapper">
                <?php
                $current = 0;
                global $post;
                $myposts = get_posts(array(
                    'tag' => 'main-product',
                ));
                foreach ($myposts as $post) {
                    setup_postdata($post);
                    $current++;
                ?>
                    <div class="first-screen-main-bg-item">
                        <div class="first-screen-main-bg-block">
                            <h1 class="main-bg-number">
                                0<?php echo $current; ?>
                            </h1>
                            <h1 class="main-bg">
                                <?php the_title(); ?>
                            </h1>
                        </div>
                    </div>
                <?php

                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="first-screen-btn-wrapper">
            <a href="product-01.html" class="first-screen-btn">
                Learn more
            </a>
        </div>
        <div id="catalog_button_bottom">
            <div class="about-us-page-main-btn" id="about-us-page-main-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 5V19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                    <path d="M19 12L12 19L5 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
        </div>
    </div>
    <div class="first-screen-offer">
        <div class="first-screen-arrow-wrapper">
            <div class="first-screen-arrow-block first-screen-arrow-block-left">
                <a class="first-screen-arrow first-screen-arrow-left first-screen-arrow-left-auto first-screen-arrow-link">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12.5L19 12.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 19.7916L19 12.5L12 5.20829" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <div class="first-screen-info-wrapper">
                <div class="first-screen-info-title">
                    <span class="first-screen-number">01</span>
                    <span class="first-screen-info-title-line"></span>
                    <span class="first-screen-number">09</span>
                </div>
                <div class="first-screen-info">
                    <p class="first-screen-description">
                        It is a long established fact that a reader will be
                        distracted by the readable content of a page
                        when looking at its layou
                    </p>
                </div>
            </div>
            <div class="first-screen-offer-link-wrapper">
                <a href="#" class="first-screen-ofer-link switcher">

                </a>
            </div>
            <div class="first-screen-arrow-block first-screen-arrow-block-right">
                <a class="first-screen-arrow first-screen-arrow-right first-screen-arrow-right-auto first-screen-arrow-link">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12.5L19 12.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 19.7916L19 12.5L12 5.20829" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="first-screen-catalog-wrapper-hide">
            <div class="first-screen-catalog-grid">
                <div class="first-screen-catalog-wrapper">
                    <?php
                    $current2 = 0;
                    global $post;
                    $myposts = get_posts(array(
                        'tag__not_in' => 3,
                        'numberposts' => 10000,
                    ));
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                        $current2++;
                    ?>
                        <div class="first-screen-catalog-item" data-productCategory="<?php $category = get_the_category();
                                                                                        echo $category[0]->slug; ?>">

                            <div class='first-screen-catalog-item-shadow-box'></div>
                            <div class="first-screen-catalog-item-top-wrapper">
                                <div class="first-screen-catalog-item-img-wrapper">
                                    <?php
                                    $image2 = get_field('3d_model');
                                    if (!empty($image2)) :
                                    ?>
                                        <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" class="first-screen-catalog-item-img">
                                    <?php endif; ?>
                                </div>
                                <div class="first-screen-catalog-item-btn-wrapper">
                                    <a href="product-01.html" class="first-screen-catalog-item-btn">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.9199 6.62C17.8185 6.37565 17.6243 6.18147 17.3799 6.08C17.2597 6.02876 17.1306 6.00158 16.9999 6H6.99994C6.73472 6 6.48037 6.10536 6.29283 6.29289C6.1053 6.48043 5.99994 6.73478 5.99994 7C5.99994 7.26522 6.1053 7.51957 6.29283 7.70711C6.48037 7.89464 6.73472 8 6.99994 8H14.5899L6.28994 16.29C6.19621 16.383 6.12182 16.4936 6.07105 16.6154C6.02028 16.7373 5.99414 16.868 5.99414 17C5.99414 17.132 6.02028 17.2627 6.07105 17.3846C6.12182 17.5064 6.19621 17.617 6.28994 17.71C6.3829 17.8037 6.4935 17.8781 6.61536 17.9289C6.73722 17.9797 6.86793 18.0058 6.99994 18.0058C7.13195 18.0058 7.26266 17.9797 7.38452 17.9289C7.50638 17.8781 7.61698 17.8037 7.70994 17.71L15.9999 9.41V17C15.9999 17.2652 16.1053 17.5196 16.2928 17.7071C16.4804 17.8946 16.7347 18 16.9999 18C17.2652 18 17.5195 17.8946 17.707 17.7071C17.8946 17.5196 17.9999 17.2652 17.9999 17V7C17.9984 6.86932 17.9712 6.74022 17.9199 6.62Z" fill="#F2F2F2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="first-screen-catalog-item-offer">
                                <div class="first-screen-catalog-item-title-wrapper">
                                    <h3 class="first-screen-catalog-item-title"><?php the_title(); ?></h3>
                                </div>
                                <div class="first-screen-catalog-item-description-wrapper">
                                    <div class="first-screen-catalog-item-description">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <div class="first-screen-catalog-item-bottom-wrapper">
                                    <span class="first-screen-catalog-item-price">$<?php the_field('price'); ?> </span>
                                    <span class="first-screen-catalog-item-number">0<?php echo $current2; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Footer -->
<footer class="footer" id="footer">
    <div class="container">
        <div class="header footer-content">
            <div class="header-offer">
                <nav class="header-nav" id="footer_links">
                    <a href="index.html" class="header-offer-link">
                        Home
                    </a>
                    <a href="contact.html" class="header-offer-link">
                        Contact us
                    </a>
                    <a href="catalog.html" class="header-offer-link">
                        Catalog
                    </a>
                    <div id="footer_links_buttom">
                        <a href="#" class="header-offer-link">
                            Privacy policy
                        </a>
                        <a href="#" class="header-offer-link">
                            Return conditions
                        </a>
                    </div>
                </nav>
                <div class="footer-sn-wrapper">
                    <a href="https://www.instagram.com/bezlikiy/" class="footer-sn-link">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.6667 4C6.98533 4 4 6.98533 4 10.6667V21.3333C4 25.0147 6.98533 28 10.6667 28H21.3333C25.0147 28 28 25.0147 28 21.3333V10.6667C28 6.98533 25.0147 4 21.3333 4H10.6667ZM24 6.66667C24.736 6.66667 25.3333 7.264 25.3333 8C25.3333 8.736 24.736 9.33333 24 9.33333C23.264 9.33333 22.6667 8.736 22.6667 8C22.6667 7.264 23.264 6.66667 24 6.66667ZM16 9.33333C19.6813 9.33333 22.6667 12.3187 22.6667 16C22.6667 19.6813 19.6813 22.6667 16 22.6667C12.3187 22.6667 9.33333 19.6813 9.33333 16C9.33333 12.3187 12.3187 9.33333 16 9.33333ZM16 12C14.9391 12 13.9217 12.4214 13.1716 13.1716C12.4214 13.9217 12 14.9391 12 16C12 17.0609 12.4214 18.0783 13.1716 18.8284C13.9217 19.5786 14.9391 20 16 20C17.0609 20 18.0783 19.5786 18.8284 18.8284C19.5786 18.0783 20 17.0609 20 16C20 14.9391 19.5786 13.9217 18.8284 13.1716C18.0783 12.4214 17.0609 12 16 12Z" fill="#F2F2F2" />
                        </svg>
                    </a>
                </div>
                <a href="index.html" class="header-offer-logo-wrapper">
                    <svg width="91" height="53" viewBox="0 0 91 53" fill="none" xmlns="http://www.w3.org/2000/svg" class="header-offer-logo">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34.392 0.0273437C28.3088 0.535117 26.159 2.63861 25.7903 8.44368C25.5862 11.6575 26.2338 14.1658 27.6348 15.5885C27.9516 15.9101 28.2108 16.1879 28.2108 16.2057C28.2108 16.2236 27.9568 16.4235 27.6464 16.6501C25.7595 18.0276 24.8374 20.8257 25.0235 24.6103C25.285 29.9317 27.4268 32.5774 32.2556 33.5441C33.4596 33.7852 66.5457 33.9099 66.9866 33.6751C67.5358 33.3825 67.5558 33.1962 67.5558 28.3772C67.5558 23.3619 67.5451 23.2794 66.8643 22.9952C66.5723 22.8733 65.955 22.8379 64.1158 22.8379C60.793 22.8379 60.8421 22.8075 60.5116 25.0669L60.3192 26.3828H56.5738H52.8283V16.7763V7.1699L53.4464 7.04239C55.2081 6.67909 55.1933 6.71046 55.1933 3.34823V0.712897L54.8796 0.362065L54.566 0.0112314L44.694 0.0013493C39.2645 -0.00412911 34.6285 0.00757847 34.392 0.0273437ZM44.2283 10.3294V13.182L40.1702 13.1432C35.673 13.1001 35.5111 13.0783 34.8626 12.4303C33.9555 11.5238 33.8254 8.90655 34.6467 8.08597C35.1772 7.55586 35.7332 7.49602 40.2239 7.48593L44.2283 7.4769V10.3294ZM44.2283 23.224V26.403L39.8477 26.3599C34.9881 26.312 34.6763 26.2684 33.9757 25.5377C33.1793 24.7071 33.1428 22.0861 33.9124 21.006C34.4976 20.1848 35.2359 20.0749 40.2777 20.0581L44.2283 20.045V23.224Z" fill="white" />
                        <path d="M7.272 44.288H3.24V45.696H5.624V47.192C5.624 47.88 5.408 48.728 3.912 48.728C2.424 48.728 2.208 47.888 2.208 47.192H0.552C0.552 49.144 1.608 50.136 3.912 50.136C6.264 50.136 7.272 49.136 7.272 47.192V44.288ZM19.7986 44.288H13.8786V50H19.7986V48.704H15.5346V47.792H19.6386V46.496H15.5346V45.584H19.7986V44.288ZM35.0466 48.728L33.3106 44.288H31.0706L29.2866 48.728L27.7506 44.288H26.0626L28.1026 50H30.4306L32.1826 45.568L33.8946 50H36.2306L38.3106 44.288H36.6226L35.0466 48.728ZM50.4986 44.288H44.5786V50H50.4986V48.704H46.2346V47.792H50.3386V46.496H46.2346V45.584H50.4986V44.288ZM58.7408 44.288H57.0848V50H62.7008V48.592H58.7408V44.288ZM74.9039 47.664C75.5519 47.424 75.9199 46.928 75.9199 46.088C75.9199 44.88 75.0959 44.288 73.6079 44.288H69.2239V50H70.8799V48.376H73.5519C74.1119 48.376 74.2399 48.52 74.2399 49.056V50H75.8879V48.744C75.8879 48.104 75.5279 47.728 74.9039 47.664ZM73.1999 45.64C73.7039 45.64 74.1839 45.64 74.1839 46.336C74.1839 47.024 73.7039 47.024 73.1999 47.024H70.8799V45.64H73.1999ZM85.729 46.72L83.777 44.288H81.697L84.897 48.104V50H86.569V48.104L89.761 44.288H87.681L85.729 46.72Z" fill="white" />
                    </svg>
                </a>
                <div class="footer-payment-wrapper">
                    <div class="footer-payment-block">
                        <svg width="56" height="18" viewBox="0 0 56 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_400_1703)">
                                <path d="M24.2669 17.7399H19.7305L22.5679 0.31543H27.104L24.2669 17.7399Z" fill="white" />
                                <path d="M40.7115 0.741829C39.8167 0.38927 38.3975 0 36.6427 0C32.1628 0 29.0082 2.37257 28.9888 5.76463C28.9516 8.26729 31.2475 9.65733 32.9646 10.4918C34.7197 11.3445 35.3163 11.901 35.3163 12.6611C35.2984 13.8284 33.8981 14.3665 32.592 14.3665C30.7809 14.3665 29.8104 14.0891 28.3357 13.4396L27.7383 13.1612L27.1035 17.0727C28.1675 17.5541 30.1277 17.9813 32.1628 18C36.9227 18 40.0216 15.6641 40.0583 12.0494C40.0764 10.0658 38.8641 8.54594 36.2505 7.30397C34.6638 6.50671 33.6922 5.96912 33.6922 5.15338C33.7108 4.4118 34.514 3.65223 36.3051 3.65223C37.7798 3.61503 38.8634 3.9671 39.6842 4.31941L40.0945 4.50444L40.7115 0.741829Z" fill="white" />
                                <path d="M46.7412 11.567C47.1148 10.566 48.5523 6.6918 48.5523 6.6918C48.5335 6.72901 48.9252 5.67231 49.1492 5.02361L49.4662 6.52501C49.4662 6.52501 50.3252 10.6959 50.5118 11.567C49.8028 11.567 47.6372 11.567 46.7412 11.567ZM52.3408 0.31543H48.8319C47.7498 0.31543 46.9277 0.630294 46.4609 1.76115L39.7227 17.7397H44.4825C44.4825 17.7397 45.2662 15.5891 45.4346 15.1259C45.9568 15.1259 50.5872 15.1259 51.259 15.1259C51.3892 15.7376 51.8002 17.7397 51.8002 17.7397H56.0005L52.3408 0.31543Z" fill="white" />
                                <path d="M15.9421 0.31543L11.4995 12.1973L11.0141 9.78749C10.1927 7.00692 7.61678 3.9859 4.74219 2.48376L8.81147 17.7214H13.6086L20.739 0.31543H15.9421Z" fill="white" />
                                <path d="M7.37328 0.31543H0.0746677L0 0.667496C5.69337 2.11346 9.46398 5.5989 11.0132 9.78823L9.42653 1.78012C9.16531 0.66725 8.36257 0.352139 7.37328 0.31543Z" fill="#ACACAC" />
                            </g>
                            <defs>
                                <clipPath id="clip0_400_1703">
                                    <rect width="56" height="18" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="footer-payment-block">
                        <svg width="41" height="25" viewBox="0 0 41 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.0308 2.61035H14.9355V21.7952H26.0308V2.61035Z" fill="#DEDEDE" />
                            <path d="M15.6745 12.2028C15.6745 8.305 17.5785 4.84557 20.5 2.61037C18.3499 0.98333 15.6376 0 12.6791 0C5.67074 0 0 5.45768 0 12.2028C0 18.9479 5.67074 24.4056 12.6791 24.4056C15.6376 24.4056 18.3499 23.4222 20.5 21.7952C17.5744 19.5916 15.6745 16.1006 15.6745 12.2028Z" fill="#ACACAC" />
                            <path d="M41 12.2028C41 18.9479 35.3293 24.4056 28.3209 24.4056C25.3624 24.4056 22.6501 23.4222 20.5 21.7952C23.4585 19.556 25.3255 16.1006 25.3255 12.2028C25.3255 8.305 23.4215 4.84557 20.5 2.61037C22.646 0.98333 25.3583 0 28.3168 0C35.3293 0 41 5.49322 41 12.2028Z" fill="white" />
                        </svg>
                    </div>
                    <div class="footer-payment-block">
                        <svg width="59" height="23" viewBox="0 0 59 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_70_331)">
                                <path d="M27.9054 11.2361V17.9781H25.7266V1.32827H31.5052C32.1949 1.31412 32.8807 1.43421 33.523 1.68161C34.1652 1.929 34.7512 2.2988 35.2471 2.76967C35.7479 3.21195 36.1466 3.75435 36.4162 4.36044C36.6858 4.96652 36.8201 5.62223 36.8101 6.2835C36.8245 6.94831 36.6922 7.60831 36.4224 8.21825C36.1526 8.82819 35.7517 9.37366 35.2471 9.81726C34.2366 10.7631 32.9893 11.2356 31.5052 11.2348H27.9054V11.2361ZM27.9054 3.37811V9.19022H31.5593C31.9599 9.20188 32.3585 9.13133 32.7297 8.9831C33.101 8.83487 33.4366 8.61221 33.7151 8.32937C33.9922 8.06491 34.2125 7.74861 34.3629 7.39915C34.5133 7.04968 34.5908 6.67417 34.5908 6.2948C34.5908 5.91543 34.5133 5.53991 34.3629 5.19045C34.2125 4.84098 33.9922 4.52468 33.7151 4.26023C33.4401 3.97142 33.1056 3.74331 32.734 3.591C32.3623 3.4387 31.9619 3.36568 31.5593 3.37679H27.9054V3.37811Z" fill="white" />
                                <path d="M41.8304 6.21484C43.4409 6.21484 44.7121 6.6373 45.6441 7.48222C46.576 8.32713 47.0416 9.48557 47.0407 10.9575V17.9785H44.9566V16.3977H44.8618C43.9596 17.6996 42.7597 18.3505 41.2621 18.3505C39.9836 18.3505 38.9141 17.9785 38.0534 17.2346C37.6403 16.8931 37.3101 16.4655 37.0867 15.9829C36.8634 15.5003 36.7525 14.9748 36.7623 14.4448C36.7623 13.266 37.2161 12.3285 38.1237 11.6324C39.0314 10.9363 40.243 10.5873 41.7587 10.5855C43.0525 10.5855 44.118 10.818 44.9552 11.283V10.7941C44.9577 10.4328 44.8782 10.0755 44.7226 9.74803C44.5669 9.42059 44.339 9.13127 44.0553 8.90103C43.4791 8.39073 42.7282 8.1123 41.9522 8.12121C40.7352 8.12121 39.7721 8.62515 39.0629 9.63303L37.1439 8.44669C38.1995 6.95879 39.7617 6.21484 41.8304 6.21484ZM39.0115 14.4913C39.01 14.7635 39.0749 15.0321 39.2006 15.2747C39.3263 15.5174 39.5092 15.727 39.7342 15.8862C40.2161 16.2583 40.8142 16.4554 41.4272 16.4442C42.3466 16.4426 43.2279 16.0834 43.878 15.4451C44.5998 14.7782 44.9606 13.9958 44.9606 13.0977C44.2813 12.5663 43.334 12.3006 42.1187 12.3006C41.2336 12.3006 40.4956 12.5101 39.9047 12.929C39.3079 13.3541 39.0115 13.8709 39.0115 14.4913Z" fill="white" />
                                <path d="M59.0041 6.58691L51.7288 23.0003H49.4796L52.1794 17.2573L47.3955 6.58691H49.7638L53.2215 14.7704H53.2688L56.6318 6.58691H59.0041Z" fill="white" />
                                <path d="M19.1009 9.78279C19.1017 9.13097 19.0456 8.48029 18.9331 7.83789H9.74414V11.5218H15.0071C14.8994 12.1101 14.6715 12.671 14.337 13.1706C14.0026 13.6701 13.5685 14.098 13.0611 14.4285V16.8198H16.2021C18.0412 15.1552 19.1009 12.6935 19.1009 9.78279Z" fill="#525252" />
                                <path d="M9.74389 19.1299C12.3734 19.1299 14.5874 18.2824 16.2019 16.821L13.0608 14.4298C12.1866 15.0116 11.0607 15.3438 9.74389 15.3438C7.20239 15.3438 5.04522 13.6619 4.27384 11.3955H1.03809V13.8598C1.84908 15.444 3.09264 16.7758 4.62995 17.7064C6.16725 18.637 7.93779 19.1298 9.74389 19.1299Z" fill="#979797" />
                                <path d="M4.27329 11.3961C3.86549 10.2085 3.86549 8.92245 4.27329 7.73484V5.27051H1.03754C0.355307 6.60318 0 8.074 0 9.56549C0 11.057 0.355307 12.5278 1.03754 13.8605L4.27329 11.3961Z" fill="white" />
                                <path d="M9.74389 3.78582C11.1334 3.76354 12.4761 4.27892 13.4817 5.22058L16.2628 2.49055C14.4993 0.864593 12.1631 -0.0280864 9.74389 -0.000349005C7.93779 -0.0002682 6.16725 0.49259 4.62995 1.4232C3.09264 2.35381 1.84908 3.68555 1.03809 5.26974L4.27384 7.73407C5.04522 5.46768 7.20239 3.78582 9.74389 3.78582Z" fill="#DFDFDF" />
                            </g>
                            <defs>
                                <clipPath id="clip0_70_331">
                                    <rect width="59" height="23" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="footer-payment-block">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple-pay" class="svg-inline--fa fa-apple-pay fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path fill="currentColor" d="M116.9 158.5c-7.5 8.9-19.5 15.9-31.5 14.9-1.5-12 4.4-24.8 11.3-32.6 7.5-9.1 20.6-15.6 31.3-16.1 1.2 12.4-3.7 24.7-11.1 33.8m10.9 17.2c-17.4-1-32.3 9.9-40.5 9.9-8.4 0-21-9.4-34.8-9.1-17.9.3-34.5 10.4-43.6 26.5-18.8 32.3-4.9 80 13.3 106.3 8.9 13 19.5 27.3 33.5 26.8 13.3-.5 18.5-8.6 34.5-8.6 16.1 0 20.8 8.6 34.8 8.4 14.5-.3 23.6-13 32.5-26 10.1-14.8 14.3-29.1 14.5-29.9-.3-.3-28-10.9-28.3-42.9-.3-26.8 21.9-39.5 22.9-40.3-12.5-18.6-32-20.6-38.8-21.1m100.4-36.2v194.9h30.3v-66.6h41.9c38.3 0 65.1-26.3 65.1-64.3s-26.4-64-64.1-64h-73.2zm30.3 25.5h34.9c26.3 0 41.3 14 41.3 38.6s-15 38.8-41.4 38.8h-34.8V165zm162.2 170.9c19 0 36.6-9.6 44.6-24.9h.6v23.4h28v-97c0-28.1-22.5-46.3-57.1-46.3-32.1 0-55.9 18.4-56.8 43.6h27.3c2.3-12 13.4-19.9 28.6-19.9 18.5 0 28.9 8.6 28.9 24.5v10.8l-37.8 2.3c-35.1 2.1-54.1 16.5-54.1 41.5.1 25.2 19.7 42 47.8 42zm8.2-23.1c-16.1 0-26.4-7.8-26.4-19.6 0-12.3 9.9-19.4 28.8-20.5l33.6-2.1v11c0 18.2-15.5 31.2-36 31.2zm102.5 74.6c29.5 0 43.4-11.3 55.5-45.4L640 193h-30.8l-35.6 115.1h-.6L537.4 193h-31.6L557 334.9l-2.8 8.6c-4.6 14.6-12.1 20.3-25.5 20.3-2.4 0-7-.3-8.9-.5v23.4c1.8.4 9.3.7 11.6.7z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Modal -->
<div class="modal modal-menu" id="modal-menu">
    <div class="modal-menu-content">
        <div class="container modal-menu-container">
            <div class="header-offer">
                <nav class="header-nav">
                    <a href="index.html" class="header-offer-link">
                        Home
                    </a>
                    <a href="contact.html" class="header-offer-link">
                        Contact us
                    </a>
                    <a href="catalog.html" class="header-offer-link">
                        Catalog
                    </a>
                </nav>
                <a href="index.html" class="header-offer-logo-wrapper">
                    <svg width="91" height="53" viewBox="0 0 91 53" fill="none" xmlns="http://www.w3.org/2000/svg" class="header-offer-logo">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34.392 0.0273437C28.3088 0.535117 26.159 2.63861 25.7903 8.44368C25.5862 11.6575 26.2338 14.1658 27.6348 15.5885C27.9516 15.9101 28.2108 16.1879 28.2108 16.2057C28.2108 16.2236 27.9568 16.4235 27.6464 16.6501C25.7595 18.0276 24.8374 20.8257 25.0235 24.6103C25.285 29.9317 27.4268 32.5774 32.2556 33.5441C33.4596 33.7852 66.5457 33.9099 66.9866 33.6751C67.5358 33.3825 67.5558 33.1962 67.5558 28.3772C67.5558 23.3619 67.5451 23.2794 66.8643 22.9952C66.5723 22.8733 65.955 22.8379 64.1158 22.8379C60.793 22.8379 60.8421 22.8075 60.5116 25.0669L60.3192 26.3828H56.5738H52.8283V16.7763V7.1699L53.4464 7.04239C55.2081 6.67909 55.1933 6.71046 55.1933 3.34823V0.712897L54.8796 0.362065L54.566 0.0112314L44.694 0.0013493C39.2645 -0.00412911 34.6285 0.00757847 34.392 0.0273437ZM44.2283 10.3294V13.182L40.1702 13.1432C35.673 13.1001 35.5111 13.0783 34.8626 12.4303C33.9555 11.5238 33.8254 8.90655 34.6467 8.08597C35.1772 7.55586 35.7332 7.49602 40.2239 7.48593L44.2283 7.4769V10.3294ZM44.2283 23.224V26.403L39.8477 26.3599C34.9881 26.312 34.6763 26.2684 33.9757 25.5377C33.1793 24.7071 33.1428 22.0861 33.9124 21.006C34.4976 20.1848 35.2359 20.0749 40.2777 20.0581L44.2283 20.045V23.224Z" fill="white" />
                        <path d="M7.272 44.288H3.24V45.696H5.624V47.192C5.624 47.88 5.408 48.728 3.912 48.728C2.424 48.728 2.208 47.888 2.208 47.192H0.552C0.552 49.144 1.608 50.136 3.912 50.136C6.264 50.136 7.272 49.136 7.272 47.192V44.288ZM19.7986 44.288H13.8786V50H19.7986V48.704H15.5346V47.792H19.6386V46.496H15.5346V45.584H19.7986V44.288ZM35.0466 48.728L33.3106 44.288H31.0706L29.2866 48.728L27.7506 44.288H26.0626L28.1026 50H30.4306L32.1826 45.568L33.8946 50H36.2306L38.3106 44.288H36.6226L35.0466 48.728ZM50.4986 44.288H44.5786V50H50.4986V48.704H46.2346V47.792H50.3386V46.496H46.2346V45.584H50.4986V44.288ZM58.7408 44.288H57.0848V50H62.7008V48.592H58.7408V44.288ZM74.9039 47.664C75.5519 47.424 75.9199 46.928 75.9199 46.088C75.9199 44.88 75.0959 44.288 73.6079 44.288H69.2239V50H70.8799V48.376H73.5519C74.1119 48.376 74.2399 48.52 74.2399 49.056V50H75.8879V48.744C75.8879 48.104 75.5279 47.728 74.9039 47.664ZM73.1999 45.64C73.7039 45.64 74.1839 45.64 74.1839 46.336C74.1839 47.024 73.7039 47.024 73.1999 47.024H70.8799V45.64H73.1999ZM85.729 46.72L83.777 44.288H81.697L84.897 48.104V50H86.569V48.104L89.761 44.288H87.681L85.729 46.72Z" fill="white" />
                    </svg>
                </a>
                <div class="header-offer-btn-wrapper">
                    <a href="consultancy.html" class="header-offer-btn">Meet the Consult</a>
                    <a href="product-01.html#form-section" class="header-offer-btn make_an_order">Make an order</a>
                </div>

            </div>
            <div class="first-screen-nav">
                <a href="#" class="first-screen-nav-item">All goods (7)</a>
                <a href="#" class="first-screen-nav-item">Bracelets (2)</a>
                <a href="#" class="first-screen-nav-item">Neck Chains (4)</a>
                <a href="#" class="first-screen-nav-item">Rings (1)</a>
                <div class="header-menu-btn-wrapper">
                    <a href="#" class="header-menu-btn-link">
                        <img src="<? echo get_template_directory_uri() ?>/img/menu-btn.svg" alt="Back to products" class="header-menu-btn">
                    </a>
                </div>
            </div>
            <div class="modal-menu-close-btn-wrapper">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="modal-menu-close-btn">
                    <path d="M18 6L6 18" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M6 6L18 18" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>