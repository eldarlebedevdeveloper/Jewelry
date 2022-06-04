<!-- Form -->

<section class="form-section" id="form-section">
    <div class="container">
        <div class="form-section-wrapper">
            <div class="form-section-title-wrapper form-section-title-anim _anim__items _anim__no__hide">
                <h2 class="form-section-title">
                    Make an order
                </h2>
            </div>
            <div class="form-section-offer">
                <span class="form-section-subtitle">
                    It is a long established fact that a reader will be 
                    distracted by the readable content of a page when 
                    looking at its layou
                </span>
                <div class="form-section-steps">
                    <div class="form-section-step-wrapper">
                        <span class="form-section-step-number">01</span>
                        <span class="form-section-step">Submit a request</span>
                    </div>
                    <div class="form-section-step-wrapper">
                        <span class="form-section-step-number">02</span>
                        <span class="form-section-step">Discuss the details</span>
                    </div>
                    <div class="form-section-step-wrapper">
                        <span class="form-section-step-number">03</span>
                        <span class="form-section-step">Get your unique jewellery</span>
                    </div>
                    <div class="form-section-step-link-wrapper">
                        <a href="#" class="form-section-step-link">
                            <span class="form-section-step-link">Instagram</span>
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12.5L19 12.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 19.7916L19 12.5L12 5.20829" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                              
                        </a>
                    </div>
                </div>
                <?php   echo do_shortcode('[contact-form-7 id="90" title="Главная форма"]'); ?>
              
            </div>

        </div>
        <div class="form-section-right _anim__items _anim__no__hide">
            <div class="form-section-step-wrapper form-section-step-anim">
                <span class="form-section-step-number">01</span>
                <span class="form-section-step">Submit a request</span>
            </div>
            <div class="form-section-step-wrapper">
                <span class="form-section-step-number">02</span>
                <span class="form-section-step">Discuss the details</span>
            </div>
            <div class="form-section-step-wrapper form-section-step-anim2">
                <span class="form-section-step-number">03</span>
                <span class="form-section-step">Get your unique jewellery</span>
            </div>
            <img src="<? echo get_template_directory_uri() ?>/img/about-us/form-img-right.png" class="form-img-right form-img-right-anim">
        </div>
    </div>
    <img src="<? echo get_template_directory_uri() ?>/img/about-us/form-img.png" class="form-img">
</section>

<!-- 
<section class="form-section" id="form-section">
    <div class="container">
        <div class="form-section-wrapper">
            <div class="form-section-title-wrapper form-section-title-anim _anim__items _anim__no__hide">
                <h2 class="form-section-title">
                    Make an order
                </h2>
            </div>
            <div class="form-section-offer">
                <span class="form-section-subtitle">
                    It is a long established fact that a reader will be 
                    distracted by the readable content of a page when 
                    looking at its layou
                </span>
                <div class="form-section-steps">
                    <div class="form-section-step-wrapper">
                        <span class="form-section-step-number">01</span>
                        <span class="form-section-step">Submit a request</span>
                    </div>
                    <div class="form-section-step-wrapper">
                        <span class="form-section-step-number">02</span>
                        <span class="form-section-step">Discuss the details</span>
                    </div>
                    <div class="form-section-step-wrapper">
                        <span class="form-section-step-number">03</span>
                        <span class="form-section-step">Get your unique jewellery</span>
                    </div>
                    <div class="form-section-step-link-wrapper">
                        <a href="#" class="form-section-step-link">
                            <span class="form-section-step-link">Instagram</span>
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12.5L19 12.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 19.7916L19 12.5L12 5.20829" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                              
                        </a>
                    </div>
                </div>
                <form class="form" id="form">
                    <div class="form-item-wrapper" id="form-item-wrapper-name">
                        <span class="form-item">Name</span><input type="text" name="name" class="form-input" placeholder="Sam">
                    </div>
                    <div class="form-item-wrapper" id="form-item-wrapper-phone">
                        <span class="form-item">Phone</span><input type="tel" name="phone" class="form-input" placeholder="sam@garmata.pro">
                    </div>
                    <div class="form-item-wrapper" id="form-item-wrapper-message">
                        <span class="form-item">Message</span><textarea name="message" class="form-input" cols="30" rows="2" placeholder="I'd like to buy something, message me  pls asap"></textarea>
                    </div>
                    <div class="form-item-wrapper" id="form-item-wrapper-file">
                        <label for="file-img" class="file-label">
                            <div class="file-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.6464 14.7334L18.5 15.587V14.3799V13.9999C18.5 13.8673 18.5527 13.7401 18.6464 13.6463C18.7402 13.5526 18.8674 13.4999 19 13.4999C19.1326 13.4999 19.2598 13.5526 19.3536 13.6463C19.4473 13.7401 19.5 13.8673 19.5 13.9999V18.9999C19.5 19.6629 19.2366 20.2988 18.7678 20.7677C18.2989 21.2365 17.663 21.4999 17 21.4999H5C4.33696 21.4999 3.70107 21.2365 3.23223 20.7677C2.76339 20.2988 2.5 19.6629 2.5 18.9999V6.9999C2.5 6.33685 2.76339 5.70097 3.23223 5.23213C3.70107 4.76329 4.33696 4.4999 5 4.4999H12C12.1326 4.4999 12.2598 4.55257 12.3536 4.64634C12.4473 4.74011 12.5 4.86729 12.5 4.9999C12.5 5.1325 12.4473 5.25968 12.3536 5.35345C12.2598 5.44722 12.1326 5.4999 12 5.4999H5C4.60217 5.4999 4.22064 5.65793 3.93934 5.93924C3.65804 6.22054 3.5 6.60207 3.5 6.9999V12.5999V13.807L4.35355 12.9535L5.82899 11.478C6.26542 11.0646 6.84373 10.8342 7.445 10.8342C8.04627 10.8342 8.62458 11.0646 9.06101 11.478L11.5364 13.9535L11.89 14.307L12.2436 13.9534L12.9422 13.2548C12.9423 13.2547 12.9425 13.2545 12.9427 13.2543C13.3716 12.8291 13.9511 12.5905 14.555 12.5905C15.1589 12.5905 15.7384 12.8291 16.1673 13.2543C16.1675 13.2545 16.1677 13.2547 16.1678 13.2548L17.6464 14.7334ZM3.64645 15.0763L3.5 15.2228V15.4299V18.9999C3.5 19.3977 3.65804 19.7793 3.93934 20.0606C4.22065 20.3419 4.60218 20.4999 5 20.4999H15.46H16.6671L15.8136 19.6463L11.5136 15.3463L8.34355 12.1763L8.34366 12.1762L8.33494 12.1679C8.09504 11.9393 7.77637 11.8118 7.445 11.8118C7.11363 11.8118 6.79496 11.9393 6.55506 12.1679L6.55496 12.1678L6.54645 12.1763L3.64645 15.0763ZM18.5 19.0037V18.9999V17.2099V17.0038L18.3548 16.8576L15.4671 13.95C15.4667 13.9495 15.4663 13.9491 15.4658 13.9486C15.3479 13.8286 15.2072 13.7332 15.052 13.668C14.8962 13.6025 14.729 13.5688 14.56 13.5688C14.391 13.5688 14.2238 13.6025 14.068 13.668C13.9131 13.733 13.7727 13.8282 13.6549 13.9479L12.9564 14.6463L12.6037 14.9991L12.9557 15.3527L17.4657 19.8827L17.8718 20.2906L18.2189 19.8314C18.3992 19.5929 18.4977 19.3026 18.5 19.0037ZM22.3564 4.64345L22.3579 4.6449C22.4048 4.69138 22.442 4.74668 22.4673 4.80761C22.4927 4.86854 22.5058 4.93389 22.5058 4.9999C22.5058 5.0659 22.4927 5.13126 22.4673 5.19219C22.442 5.25311 22.4048 5.30841 22.3579 5.3549L22.355 5.3578C22.3085 5.40466 22.2532 5.44186 22.1923 5.46724C22.1314 5.49263 22.066 5.50569 22 5.50569C21.934 5.50569 21.8686 5.49263 21.8077 5.46724C21.7468 5.44186 21.6915 5.40466 21.645 5.3578L21.6449 5.35771L20.3549 4.05771L19.5 3.19617V4.4099V9.9999C19.5 10.1325 19.4473 10.2597 19.3536 10.3534C19.2598 10.4472 19.1326 10.4999 19 10.4999C18.8674 10.4999 18.7402 10.4472 18.6464 10.3534C18.5527 10.2597 18.5 10.1325 18.5 9.9999V4.4099V3.19617L17.6451 4.05771L16.3564 5.35634C16.3563 5.35652 16.3561 5.35669 16.3559 5.35687C16.2614 5.45108 16.1334 5.50399 16 5.50399C15.8663 5.50399 15.7381 5.45088 15.6436 5.35634C15.549 5.26181 15.4959 5.13359 15.4959 4.9999C15.4959 4.9337 15.5089 4.86815 15.5343 4.80699C15.5596 4.74583 15.5967 4.69026 15.6436 4.64345L18.639 1.64796C18.6859 1.60393 18.7408 1.56933 18.8008 1.54608L18.8008 1.54617L18.81 1.54239C18.9317 1.49238 19.0683 1.49238 19.19 1.54239L19.19 1.54248L19.1992 1.54608C19.2592 1.56933 19.3141 1.60393 19.361 1.64796L22.3564 4.64345Z" fill="black" stroke="#F2F2F2"/>
                                </svg>  
                            </div>
                            <span>Upload Image</span>                
                        </label>
                        <input type="file" id="file-img" name="file-img" accept="image/*">
                        
                    </div>
                    <div class="form-btn-wrapper"><button type="submit" class="form-btn" id="form-btn">Make an order</button></div>
                </form>
            </div>

        </div>
        <div class="form-section-right _anim__items _anim__no__hide">
            <div class="form-section-step-wrapper form-section-step-anim">
                <span class="form-section-step-number">01</span>
                <span class="form-section-step">Submit a request</span>
            </div>
            <div class="form-section-step-wrapper">
                <span class="form-section-step-number">02</span>
                <span class="form-section-step">Discuss the details</span>
            </div>
            <div class="form-section-step-wrapper form-section-step-anim2">
                <span class="form-section-step-number">03</span>
                <span class="form-section-step">Get your unique jewellery</span>
            </div>
            <img src="<? echo get_template_directory_uri() ?>/img/about-us/form-img-right.png" class="form-img-right form-img-right-anim">
        </div>
    </div>
    <img src="<? echo get_template_directory_uri() ?>/img/about-us/form-img.png" class="form-img">
</section> -->