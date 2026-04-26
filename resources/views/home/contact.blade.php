@include('home.header')
















<main>
    <div class="page page--contacts">
        <section class="section top-section">
            <div class="container top-section__container">
                <div class="top-section__bg bg">
                    <img src="themes/2017-09/img/pages/contacts/contacts-bg.png" alt="" class="bg__item bg__item_1">
                    <div class="bg__item bg__item_gradient"></div>
                </div>
                <div class="content top-section__content">
                        <div class="breadcrumbs-wrap">
            <ul  class="breadcrumbs "><li class="breadcrumbs__item"><a class="breadcrumbs__link" href="../index.html">Home</a></li><li class="breadcrumbs__item breadcrumbs__item--active"><span class="breadcrumbs__label">Contacts</span></li></ul>    </div>
    
    
    
    
    
                    <h1 class="top-section__title">
                        Contacts                </h1>
                </div>
            </div>
        </section>
    
        <section class="section section_light-blue">
            <div class="container container_small-padding">
                <div class="content">
                    <div class="contacts__list">
                        <div class="contacts__item">
                            <p class="contacts__title">
                                <img src="themes/2017-09/img/pages/contacts/ic-support.svg" alt="">
                                Get Support For Your Trade & Investment Success.                       </p>
                            <div class="contacts__text">
                                <p>
                                    DALPHA MARKETS support specialists are happy to answer any questions you may have via built-in:
                                </p>
                            </div>
                            <p>
                                <a class="link contacts__link"
                                    href="#">Support Desk</a>
                            </p>
                        </div>
                        <div class="contacts__item">
                            <p class="contacts__title">
                                <img src="themes/2017-09/img/pages/contacts/ic-help.svg" alt="">
                                Community Help                        </p>
                            <div class="contacts__text">
                                <p>Find answers, ask questions, and connect with our community of traders from around the world:</p>
                            </div>
                            <p>
                                <a class="link contacts__link js-link-with-get-param" id="chat-block-trigger" target="_blank"
                                    href="">Live Chat</a>
                            </p>
                        </div>
                        <div class="contacts__item">
                            <p class="contacts__title">
                                <img src="themes/2017-09/img/pages/contacts/ic-hotline.svg" alt="">
                                Contact Email                       </p>
                            <div class="contacts__text">
                                <p>Reach us via email</p>
                            </div>
                            <p>
                                support@dalphamarkets.com
                            </p>
                            <p class="contacts__work-time">
                                Customer Support 24 hours a day, 7days a week.                      </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="section section_light-blue contacts-form">
            <div class="container">
                <div class="content">
                    <div id="form-block" class="contacts-form__wrap">
                        <div class="contacts-form__left">
                            <h2 class="contacts-form__title">
                                Send us a message                        </h2>
                            <div class="contacts-form__desc">
                                <p>We are looking forward to assisting you in a professional and timely manner. Please complete the form below to submit your question and our specialists will get back to you.</p>
                            </div>
                            
                            
                                                </div>
                        <div class="contacts-form__right">
                            <form method="post" action=""
                                  class="form-with-label form">
                                <div class="form__row">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" class="form-control" required>
                                        <label for="email">Email <span>*</span></label>
                                                                        </div>
                                </div>
                                <div class="form__row">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="4" autocomplete="off" required></textarea>
                                        <label for="message">Message <span>*</span></label>
                                                                        </div>
                                </div>
                                <div class="form__row form__row_rules">
                                    <div class="form-group  rules ">
                                        <div class="checkbox">
                                            <label>
                                                I have read and accepted the terms of the following agreement: <a href="#" target="_blank">Privacy policy</a>
                                                    <input type="checkbox" name="rules" value="1" id="checkbox_pao" required="1"  />                                            <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
    
    <style>
        .animate-rotate {
            animation: capchaRotate linear 1s infinite;
            transform-origin: center;
        }
    
        @keyframes capchaRotate {
            0% {
                transform: rotate(0);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
                                                                           </div>
                                </div>
                              
                                <button type="submit" class="btn btn_blue-gradient">
                                    Send                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </main>  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    @include('home.footer')
    
