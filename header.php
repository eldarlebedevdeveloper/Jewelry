<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
            the_content()
            ?></title>
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/css/slick.css">
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/css/fonts.css">
    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/css/style.css">
    <?php wp_head() ?>
</head>
<!-- clear title -->
<script>
let textTitle = document.title

function clearTitle(str) {
    var regex = /<\/?[^>]+>/g,
        result = str.replace(regex, "");

    return result;
}
document.querySelector('title').textContent = clearTitle(textTitle)
</script>

<body class="body-hidden">
    <header class="header">
        <div class="header-offer">
            <nav class="header-nav">
                <a href="home" class="header-offer-link">
                    Home
                </a>
                <a href="contact" class="header-offer-link">
                    Contact us
                </a>
                <a href="catalog" class="header-offer-link">
                    Catalog
                </a>
                <a href="#" class="header-mobile-menu">
                    <svg width="32" height="9" viewBox="0 0 32 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="32" height="2" fill="white" />
                        <rect y="7" width="22" height="2" fill="white" />
                    </svg>
                </a>
            </nav>
            <a href="home" class="header-offer-logo-wrapper">

                <svg width="91" height="53" viewBox="0 0 91 53" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="header-offer-logo">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M34.392 0.0273437C28.3088 0.535117 26.159 2.63861 25.7903 8.44368C25.5862 11.6575 26.2338 14.1658 27.6348 15.5885C27.9516 15.9101 28.2108 16.1879 28.2108 16.2057C28.2108 16.2236 27.9568 16.4235 27.6464 16.6501C25.7595 18.0276 24.8374 20.8257 25.0235 24.6103C25.285 29.9317 27.4268 32.5774 32.2556 33.5441C33.4596 33.7852 66.5457 33.9099 66.9866 33.6751C67.5358 33.3825 67.5558 33.1962 67.5558 28.3772C67.5558 23.3619 67.5451 23.2794 66.8643 22.9952C66.5723 22.8733 65.955 22.8379 64.1158 22.8379C60.793 22.8379 60.8421 22.8075 60.5116 25.0669L60.3192 26.3828H56.5738H52.8283V16.7763V7.1699L53.4464 7.04239C55.2081 6.67909 55.1933 6.71046 55.1933 3.34823V0.712897L54.8796 0.362065L54.566 0.0112314L44.694 0.0013493C39.2645 -0.00412911 34.6285 0.00757847 34.392 0.0273437ZM44.2283 10.3294V13.182L40.1702 13.1432C35.673 13.1001 35.5111 13.0783 34.8626 12.4303C33.9555 11.5238 33.8254 8.90655 34.6467 8.08597C35.1772 7.55586 35.7332 7.49602 40.2239 7.48593L44.2283 7.4769V10.3294ZM44.2283 23.224V26.403L39.8477 26.3599C34.9881 26.312 34.6763 26.2684 33.9757 25.5377C33.1793 24.7071 33.1428 22.0861 33.9124 21.006C34.4976 20.1848 35.2359 20.0749 40.2777 20.0581L44.2283 20.045V23.224Z"
                        fill="white" />
                    <path
                        d="M7.272 44.288H3.24V45.696H5.624V47.192C5.624 47.88 5.408 48.728 3.912 48.728C2.424 48.728 2.208 47.888 2.208 47.192H0.552C0.552 49.144 1.608 50.136 3.912 50.136C6.264 50.136 7.272 49.136 7.272 47.192V44.288ZM19.7986 44.288H13.8786V50H19.7986V48.704H15.5346V47.792H19.6386V46.496H15.5346V45.584H19.7986V44.288ZM35.0466 48.728L33.3106 44.288H31.0706L29.2866 48.728L27.7506 44.288H26.0626L28.1026 50H30.4306L32.1826 45.568L33.8946 50H36.2306L38.3106 44.288H36.6226L35.0466 48.728ZM50.4986 44.288H44.5786V50H50.4986V48.704H46.2346V47.792H50.3386V46.496H46.2346V45.584H50.4986V44.288ZM58.7408 44.288H57.0848V50H62.7008V48.592H58.7408V44.288ZM74.9039 47.664C75.5519 47.424 75.9199 46.928 75.9199 46.088C75.9199 44.88 75.0959 44.288 73.6079 44.288H69.2239V50H70.8799V48.376H73.5519C74.1119 48.376 74.2399 48.52 74.2399 49.056V50H75.8879V48.744C75.8879 48.104 75.5279 47.728 74.9039 47.664ZM73.1999 45.64C73.7039 45.64 74.1839 45.64 74.1839 46.336C74.1839 47.024 73.7039 47.024 73.1999 47.024H70.8799V45.64H73.1999ZM85.729 46.72L83.777 44.288H81.697L84.897 48.104V50H86.569V48.104L89.761 44.288H87.681L85.729 46.72Z"
                        fill="white" />
                </svg>
            </a>
            <div class="header-offer-btn-wrapper">
                <a href="consultancy" class="header-offer-btn">Meet the Consult</a>
                <a href="/contact/" class="header-offer-btn make_an_order">Make an order</a>
            </div>

        </div>
        <div class="first-screen-nav" id="eldar_first_screen_nav">
            <a href="#" class="first-screen-nav-item first-screen-nav-item-remove">Who we are</a>
            <a href="#about-us-page-information" class="first-screen-nav-item first-screen-nav-item-remove">Process</a>
            <a href="#about-us-page-information-02"
                class="first-screen-nav-item first-screen-nav-item-remove">History</a>
        </div>
    </header>