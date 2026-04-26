@include('home.header')







<main>
    <section class="section main-slider">
        <div class="container main-slider__container">
            <div class="main-slider__bg bg">
               
                <picture class="bg__item bg__item_phone">
                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/header-bg-2.webp" type="image/webp">
                    <img src="themes/2017-09/img/header-bg-2.png" alt="">
                </picture>
                <picture class="bg__item bg__item_note">
                    <source srcset="themes/2017-09/img/header-bg-6.png" media="(max-width: 550px)" type="image/webp">
                    <source srcset="themes/2017-09/img/header-bg-6.png" media="(max-width: 550px)" type="image/jpeg">
    
                    <source srcset="themes/2017-09/img/header-bg-6.png" media="(max-width: 1024px)" type="image/webp">
                    <source srcset="themes/2017-09/img/header-bg-6.png" media="(max-width: 1024px)" type="image/jpeg">
    
                    <img src="themes/2017-09/img/header-bg-5.png" alt="">
                    <img src="themes/2017-09/img/header-bg-5.png" alt="">
                </picture>
                <div class="bg__item bg__item_gradient"></div>
            </div>
            <div class="content main-slider__content">
                <div class="main-slider__in">
                    <h1 class="main-slider__title">Earn Like a Pro
                        with <br>DALPHA MARKETS</h1>
                    <div class="main-slider__desc">
                        <p class="main-slider__desc_bold">Earn up to $600k and scale your profits up to $2 Million with a single investment Sieze the opportunity of signifiicant financial growth! </p>
                    </div>
                    <div class="main-slider__btn-container">
                                            <a href="{{url('sign-up')}}"
                            class="btn btn_blue-gradient main-slider__btn">Start in one click</a>
                                        </div>
                                </div>
            </div>
        </div>
    </section>
    
    <section class="section section_light conditions" id="conditions">
        <div class="container">
            <div class="content">
            <div class="conditions__in">
                <h2>Place your trades on best conditions</h2>
                <ul class="conditions__list">
                 
                    <li class="conditions__item">
                        <p class="conditions__num">$100<i data-from="" data-to=""></i>
                        </p>
                        <span class="conditions__subtitle">Minimum investment amount</span>
                    </li>
                    <li class="conditions__item">
                        <p class="conditions__num">
                            <i data-from="0" data-to="10+"></i>+
                        </p>
                        <span class="conditions__subtitle">Years Prop Trading Experience</span>
                    </li>
                    <li class="conditions__item">
                        <p class="conditions__num"><i data-from="0" data-to="500">0</i>+</p>
                        <span class="conditions__subtitle">Deposit & Withdrawals</span>
                    </li>
                    <li class="conditions__item conditions__item_nomargin">
                        <p class="conditions__num">$0</p>
                        <span class="conditions__subtitle">No commission on deposit</span>
                    </li>
                    <li class="conditions__item conditions__item_nomargin">
                        <p class="conditions__num"><i data-from="0" data-to="100">0</i>+</p>
                        <span class="conditions__subtitle">Assets for trading</span>
                    </li>
                </ul>
                <div class="monitor">
                    <picture class="">
                        <source srcset="themes/2017-09/img/monitor.png 1x, themes/2017-09/img/monitor.png 2x" type="image/webp">
                        <source srcset="themes/2017-09/img/monitor.png 1x, themes/2017-09/img/monitor.png 2x" type="image/png">
                        <img src="themes/2017-09/img/monitor.png"
                             data-src="themes/2017-09/img/monitor.png"
                             data-srcset="themes/2017-09/img/monitor.png 1x,themes/2017-09/img/monitor.png 2x"
                             alt="Monitor" loading="lazy">
                    </picture>
                </div>
            </div>
            </div>
        </div>
    </section>
    
    <section class="section section_light why-we">
        <div class="container">
            <div class="content why-we__in">
                <h2>
                    <span>Why</span> choose us?
                </h2>
                            <ul class="why-list">
                                                            <li class="why-list__item">
                            <a class="why-list__link why-list__link--flexible-trading"
                               href="cabinet/high-low/index.html">
                                <img src="themes/2017-09/img/why-we/1.svg"
                                     alt="Icon 1" class="lazy" loading="lazy"/>
                                <p class="why-list__title">Flexible Trading</p>
                                <p class="why-list__sub-title">Latest trends: quick and digital trading, express trades, Forex MT5, pending orders, trades copying. Payouts up to 218%.</p>
                            </a>
                        </li>
                                                            <li class="why-list__item">
                            <a class="why-list__link why-list__link--education"
                               href="cabinet/platform-guide/index.html">
                                <img src="themes/2017-09/img/why-we/2.svg"
                                     alt="Icon 2" class="lazy" loading="lazy"/>
                                <p class="why-list__title">Comprehensive Education</p>
                                <p class="why-list__sub-title">Our help section contains tutorials, guides and various trading strategies.</p>
                            </a>
                        </li>
                                                            <li class="why-list__item">
                            <a class="why-list__link why-list__link--diverse-trading-instruments"
                               href="{{url('sign-up')}}">
                                <img src="themes/2017-09/img/why-we/3.svg"
                                     alt="Icon 3" class="lazy" loading="lazy"/>
                                <p class="why-list__title">Diverse Trading Instruments</p>
                                <p class="why-list__sub-title">Assets suitable for any trader: currency, commodities, stocks.</p>
                            </a>
                        </li>
                                                            <li class="why-list__item">
                            <a class="why-list__link why-list__link--demo-account"
                               href="{{url('sign-up')}}">
                                <img src="themes/2017-09/img/why-we/4.svg"
                                     alt="Icon 4" class="lazy" loading="lazy"/>
                                <p class="why-list__title">Copy Trading</p>
                                <p class="why-list__sub-title">Follow & copy top-performing traders
                                    Become a copier or a provider
                                    No need to develop your own trading plan</p>
                            </a>
                        </li>
                                                            <li class="why-list__item">
                            <a class="why-list__link why-list__link--deposit-withdrawals"
                               href="{{url('deposit-withdrawal')}}">
                                <img src="themes/2017-09/img/why-we/5.svg"
                                     alt="Icon 5" class="lazy" loading="lazy"/>
                                <p class="why-list__title">Easy Deposits and Withdrawals</p>
                                <p class="why-list__sub-title">Use the most convenient payment method for hassle-free deposits and withdrawals.</p>
                            </a>
                        </li>
                                                            <li class="why-list__item">
                            <a class="why-list__link why-list__link--high-customer-loyalty"
                               href="{{url('sign-up')}}">
                                <img src="themes/2017-09/img/why-we/6.svg"
                                     alt="Icon 6" class="lazy" loading="lazy"/>
                                <p class="why-list__title">High Customer Loyalty</p>
                                <p class="why-list__sub-title">Trading tournaments, regular bonuses, gifts, promo codes and contests are available to any trader.</p>
                            </a>
                        </li>
                                                                                                                       <li class="why-list__item">
                            <a class="why-list__link why-list__link--indicators-and-signals"
                               href="{{url('sign-up')}}">
                                <img src="themes/2017-09/img/why-we/8.svg"
                                     alt="Icon 8" class="lazy" loading="lazy"/>
                                <p class="why-list__title">Indicators and Signals</p>
                                <p class="why-list__sub-title">Everything you need for a top-tier trading experience including popular indicators and signals.</p>
                            </a>
                        </li>
                                                        <li class="why-list__item_start-trading start-trading">
                            <div class="start-trading__inn">
                                <p class="start-trading__text">
                                    Trade in one click                            </p>
                                <a href="{{url('sign-up')}}"
                                   class="btn btn_blue-gradient">Start trading</a>
                            </div>
                        </li>
                                </ul>
            </div>
        </div>
    </section>
    
    <section class="section slider offers">
        <div class="container">
            <div class="content offers__in">
                <div class="slider__arrows">
                    <a class="slider__arrow arrow arrow-left"><svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 1L2 11L12 21" stroke="#96AEC1" stroke-width="2" class="slider-arrow-stroke"/>
    </svg>
    </a>
                    <a class="slider__arrow arrow arrow-right"><svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1 1L11 11L1 21" stroke="#0099FA" stroke-width="2" class="slider-arrow-stroke"/>
    </svg>
    </a>
                </div>
                <div class="offers__corners">
                    <img src="themes/2017-09/img/offers-slider/corner-1.png" class="offers__corner offers__corner_1" alt="" loading="lazy">
                    <img src="themes/2017-09/img/offers-slider/corner-2.png" class="offers__corner offers__corner_2" alt="" loading="lazy">
                    <img src="themes/2017-09/img/offers-slider/corner-3.png" class="offers__corner offers__corner_3" alt="" loading="lazy">
                    <img src="themes/2017-09/img/offers-slider/corner-4.png" class="offers__corner offers__corner_4" alt="" loading="lazy">
                </div>
                <div class="offers__list">
                    <a href="{{url('deposit-withdrawal')}}" class="offers__item offers__item_payment-methods">
                        <div class="offers__col">
                            <div class="offers__img-wrap">
                                <picture class="offers__img offers__img_no-shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/card.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/card@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/card.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/card@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/card.png"
                                         data-src="themes/2017-09/img/offers-slider/card.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/card.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/card@2x.png 2x"
                                         alt="Card icon" loading="lazy"/>
                                </picture>
                                <picture class="offers__img offers__img_shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/card_s.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/card_s@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/card_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/card_s@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/card_s.png"
                                         data-src="themes/2017-09/img/offers-slider/card_s.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/card_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/card_s@2x.png 2x"
                                         alt="Card icon" loading="lazy"/>
                                </picture>
                            </div>
                            <p class="offers__title">Deposit & Withdrawals</p>
                            <div class="btn btn_dark-blue offers__btn">More</div>
                        </div>
                    </a>
                    <a href="{{url('deposit-withdrawal')}}" class="offers__item offers__item_trading-assets">
                        <div class="offers__col">
                            <div class="offers__img-wrap">
                                <picture class="offers__img offers__img_no-shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/trade.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/trade@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/trade.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/trade@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/trade.png"
                                         data-src="themes/2017-09/img/offers-slider/trade.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/trade.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/trade@2x.png 2x"
                                         alt="Trading icon" loading="lazy"/>
                                </picture>
                                <picture class="offers__img offers__img_shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/trade_s.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/trade_s@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/trade_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/trade_s@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/trade_s.png"
                                         data-src="themes/2017-09/img/offers-slider/trade_s.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/trade_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/trade_s@2x.png 2x"
                                         alt="Trading icon" loading="lazy"/>
                                </picture>
                            </div>
                            <p class="offers__title">Trading assets</p>
                            <div class="btn btn_dark-blue offers__btn">More</div>
                        </div>
                    </a>
                    <a href="{{url('about')}}" target="_blank" class="offers__item offers__item_achievements">
                        <div class="offers__col">
                            <div class="offers__img-wrap">
                                <picture class="offers__img offers__img_no-shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/archi.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/archi@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/archi.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/archi@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/archi.png"
                                         data-src="themes/2017-09/img/offers-slider/archi.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/archi.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/archi@2x.png 2x"
                                         alt="Cup icon" loading="lazy"/>
                                </picture>
                                <picture class="offers__img offers__img_shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/archi_s.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/archi_s@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/archi_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/archi_s@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/archi_s.png"
                                         data-src="themes/2017-09/img/offers-slider/archi_s.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/archi_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/archi_s@2x.png 2x"
                                         alt="Cup icon" loading="lazy"/>
                                </picture>
                            </div>
                            <p class="offers__title">Achievements</p>
                            <div class="btn btn_dark-blue offers__btn">More</div>
                        </div>
                    </a>
                    <a href="{{url('process')}}" target="_blank" class="offers__item offers__item_apps">
                        <div class="offers__col">
                            <div class="offers__img-wrap">
                                <picture class="offers__img offers__img_no-shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/app.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/app@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/app.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/app@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/app.png"
                                         data-src="themes/2017-09/img/offers-slider/app.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/app.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/app@2x.png 2x"
                                         alt="App icon" loading="lazy"/>
                                </picture>
                                <picture class="offers__img offers__img_shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/app_s.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/app_s@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/app_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/app_s@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/app_s.png"
                                         data-src="themes/2017-09/img/offers-slider/app_s.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/app_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/app_s@2x.png 2x"
                                         alt="App icon" loading="lazy"/>
                                </picture>
                            </div>
                           
                            <p class="offers__title">Why people choose us</p>
                            <div class="btn btn_dark-blue offers__btn">More</div>
                        </div>
                    </a>
                    <a href="{{url('about')}}" target="_blank" class="offers__item offers__item_tech-analysis">
                        <div class="offers__col">
                            <div class="offers__img-wrap">
                                <picture class="offers__img offers__img_no-shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/analytic.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/analytic@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/analytic.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/analytic@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/analytic.png"
                                         data-src="themes/2017-09/img/offers-slider/analytic.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/analytic.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/analytic@2x.png 2x"
                                         alt="Analytic icon" loading="lazy"/>
                                </picture>
                                <picture class="offers__img offers__img_shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/analytic_s.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/analytic_s@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/analytic_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/analytic_s@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/analytic_s.png"
                                         data-src="themes/2017-09/img/offers-slider/analytic_s.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/analytic_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/analytic_s@2x.png 2x"
                                         alt="Analytic icon" loading="lazy"/>
                                </picture>
                            </div>
                            <p class="offers__title">Technical Analysis Tools</p>
                            <div class="btn btn_dark-blue offers__btn">More</div>
                        </div>
                    </a>
                    <a href="{{url('sign-up')}}" target="_blank" class="offers__item offers__item_signals">
                        <div class="offers__col">
                            <div class="offers__img-wrap">
                                <picture class="offers__img offers__img_no-shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/signal.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/signal@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/signal.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/signal@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/signal.png"
                                         data-src="themes/2017-09/img/offers-slider/signal.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/signal.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/signal@2x.png 2x"
                                         alt="Signal icon" loading="lazy"/>
                                </picture>
                                <picture class="offers__img offers__img_shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/signal_s.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/signal_s@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/signal_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/signal_s@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/signal_s.png"
                                         data-src="themes/2017-09/img/offers-slider/signal_s.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/signal_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/signal_s@2x.png 2x"
                                         alt="Signal icon" loading="lazy"/>
                                </picture>
                            </div>
                            <p class="offers__title">Signals</p>
                            <div class="btn btn_dark-blue offers__btn">More</div>
                        </div>
                    </a>
                    <a href="{{url('sign-up')}}" target="_blank" class="offers__item offers__item_community">
                        <div class="offers__col">
                            <div class="offers__img-wrap">
                                <picture class="offers__img offers__img_no-shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/comm.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/comm@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/comm.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/comm@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/comm.png"
                                         data-src="themes/2017-09/img/offers-slider/comm.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/comm.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/comm@2x.png 2x"
                                         alt="Community icon" loading="lazy"/>
                                </picture>
                                <picture class="offers__img offers__img_shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/comm_s.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/comm_s@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/comm_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/comm_s@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/comm_s.png"
                                         data-src="themes/2017-09/img/offers-slider/comm_s.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/comm_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/comm_s@2x.png 2x"
                                         alt="Community icon" loading="lazy"/>
                                </picture>
                            </div>
                            <p class="offers__title">Great community</p>
                            <div class="btn btn_dark-blue offers__btn">More</div>
                        </div>
                    </a>
                    <a href="#" target="_blank" class="offers__item offers__item_social-trading">
                        <div class="offers__col">
                            <div class="offers__img-wrap">
                                <picture class="offers__img offers__img_no-shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/copy.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/copy@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/copy.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/copy@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/copy.png"
                                         data-src="themes/2017-09/img/offers-slider/copy.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/copy.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/copy@2x.png 2x"
                                         alt="Social icon" loading="lazy"/>
                                </picture>
                                <picture class="offers__img offers__img_shine">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/copy_s.webp 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/copy_s@2x.webp 2x" type="image/webp">
                                    <source srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/copy_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/copy_s@2x.png 2x" type="image/png">
                                    <img src="themes/2017-09/img/offers-slider/copy_s.png"
                                         data-src="themes/2017-09/img/offers-slider/copy_s.png"
                                         srcset="https://m.pocketoption.com/themes/2017-09/img/offers-slider/copy_s.png 1x, https://m.pocketoption.com/themes/2017-09/img/offers-slider/copy_s@2x.png 2x"
                                         alt="Social icon" loading="lazy"/>
                                </picture>
                            </div>
                            <p class="offers__title">Copy Trading</p>
                            <div class="btn btn_dark-blue offers__btn">More</div>
                        </div>
                    </a>
                   
                           
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section section_light check-your-luck">
        <div class="container container__no-padding">
            <div class="content check-your-luck__in">
                <div class="check-your-luck__left">
                    <h2>The Process of Simulated Funding</h2>
                    <p class="title-desc">
                        After our evaluation & final verification, you will successfully become part of our Proprietary Trading Firm. </p>
                </div>
                <div class="check-your-luck__right">
                    <div class="alert alert--danger"></div>
                    <div class="form-wrap">
                        
                            <button type="submit" class="btn btn_blue-gradient">
                              <a href="{{url('sign-up')}}"></a> Start yout trading journey now!                       </button>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    
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
    
    <section class="section section_light applications">
        <div class="container">
            <div class="content applications__in">
                <h2>
                    Why Dalphamarkets.com is one of the world's most Trusted Brokerage Company? </h2>


                <h2 class="reviews-slider__title">
                    Copy Trading:           </h2>
                <p class="reviews-slider__title-desc">Follow & copy top-performing traders
                    Become a copier or a provider
                    No need to develop your own trading plan</p>
                <div class="phone-container">
                    <picture class="phone phone_android">
                        <source srcset="https://m.pocketoption.com/themes/2017-09/img/apps/android-img.webp 1x, https://m.pocketoption.com/themes/2017-09/img/apps/android-img@2x.webp 2x" type="image/webp">
                        <source srcset="https://m.pocketoption.com/themes/2017-09/img/apps/android-img.png 1x, https://m.pocketoption.com/themes/2017-09/img/apps/android-img@2x.png 2x" type="image/png">
                        <img src="themes/2017-09/img/apps/android-img.png"
                             data-src="https://m.pocketoption.com/themes/2017-09/img/apps/android-img.png"
                             data-srcset="https://m.pocketoption.com/themes/2017-09/img/apps/android-img.png 1x, https://m.pocketoption.com/themes/2017-09/img/apps/android-img@2x.png 2x"
                             alt="Android" loading="lazy">
                    </picture>
                    <picture class="phone phone_iphone">
                        <source srcset="https://m.pocketoption.com/themes/2017-09/img/apps/iphone-img.webp 1x, https://m.pocketoption.com/themes/2017-09/img/apps/iphone-img@2x.webp 2x" type="image/webp">
                        <source srcset="https://m.pocketoption.com/themes/2017-09/img/apps/iphone-img.png 1x, https://m.pocketoption.com/themes/2017-09/img/apps/iphone-img@2x.png 2x" type="image/png">
                        <img src="themes/2017-09/img/apps/iphone-img.png"
                             data-src="https://m.pocketoption.com/themes/2017-09/img/apps/iphone-img.png"
                             data-srcset="https://m.pocketoption.com/themes/2017-09/img/apps/iphone-img.png 1x, https://m.pocketoption.com/themes/2017-09/img/apps/iphone-img@2x.png 2x"
                             alt="Iphone" loading="lazy">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section class="section section_light reviews-slider">
        <div class="container reviews-slider__container">
            <div class="content reviews-slider__in">
                <h2 class="reviews-slider__title">
                    What people say about us            </h2>
                <p class="reviews-slider__title-desc">More than 10 million customers worldwide trust us and earn daily.</p>
                <div class="js-reviews-slider slider">
                    <div class="slider__left">
                        <div class="slider__in">
                            <div class="rv-slider">
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-02-08 17:31:40</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">بهترین فضا برای انجام معاملات . گزینه جیبی در</span><span class="js-review-text-next"> واقع یک بروکر است برای کسانی که علاقه مند به معاملات بورس و فرابورس هستند تا علاوه بر اینکه می آموزند، درآمد هم کسب نمایند. گوهر هایی که می دهد، ابزار بسیار کارآمدی هستند در راستای سود رسانی هر چه بیشتر.</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/ir.svg"
                                                        alt="Iran"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Ehsan L.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 57586565</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-02-08 09:20:43</div>
                                        </div>
                                        <div class="review-item__text">
                                                                                        Extremely Reliable
    Tested & Trusted
    Friendly interface                                                                            </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/in.svg"
                                                        alt="India"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Merusinh . D.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 548007</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-02-07 11:11:52</div>
                                        </div>
                                        <div class="review-item__text">
                                                                                       Amazing Trading Platform
    
    withdraw is very fast 
    I am satisfied                                                                            </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/bd.svg"
                                                        alt="Bangladesh"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Md Anwar H.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 70355452</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-02-06 18:50:28</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">DALPHA MARKETS is good platform to earn and learn iam using this platform since last year</span><span class="js-review-text-next"> and iam not facing any issue easy deposit or withdraw good platform..iam happy with DALPHA MARKETS</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/ye.svg"
                                                        alt="Yemen"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Heba N.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 70561137</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-02-06 14:11:42</div>
                                        </div>
                                        <div class="review-item__text">
                                                                                        i have been using many other trading app but DALPHA MARKETS is the best in my opinion.                                                                            </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/mg.svg"
                                                        alt="Madagascar"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Tantelini. R.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 70822738</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-02-06 08:29:49</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">Great broker for binary trading. DALPHA MARKETS impresses with its intuitive interface,</span><span class="js-review-text-next"> catering to traders of all levels. The platform's diverse asset selection, from cryptocurrencies to Forex, offers ample market opportunities. Its mobile app ensures seamless trading on the move, while innovative features like social trading enhance the user experience. Caution is advised, as with any trading platform, to navigate market risks wisely.</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/in.svg"
                                                        alt="India"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Jeetendra S.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 71197979</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-02-06 08:27:46</div>
                                        </div>
                                        <div class="review-item__text">
                                                                                        Dalphamarkets.com is a very good site and trust platform. It's really helpful to make money.                                                                            </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/ma.svg"
                                                        alt="Morocco"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Elhassan A.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 18550305</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-02-05 09:00:11</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">Trusted Platform and a great opportunity to trade with confidence. I like the design and</span><span class="js-review-text-next"> the fast help from support.</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/om.svg"
                                                        alt="Oman"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Mohammed . H.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 69776404</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-02-04 18:41:27</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">I started and enjoying it.
    This is one of best broker in the world.
    This is the beauty of</span><span class="js-review-text-next"> DALPHA MARKETS.</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/pk.svg"
                                                        alt="Pakistan"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Raheel ha. F.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 71323183</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-02-04 10:24:26</div>
                                        </div>
                                        <div class="review-item__text">
                                                                                        An incredible trusted platform for trading.                                                                            </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/ke.svg"
                                                        alt="Kenya"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Joseph Mw. G.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 71453260</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-02-01 16:53:14</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">The DALPHA MARKETS is the best option for forex
    trading, especiauy pr ug and start</span><span class="js-review-text-next"> trading
    especially since you can set the time frame
    from 5 seconds to 4 days and start trading with
    the lowest possible amount, i.e. one dollar. This is
    unique. The ability to use the most useful indicators
    is also one of the other features of this popular
    broker. I recommend that you test it and don't
    forget the Telegram link.</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/ir.svg"
                                                        alt="Iran"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Fatemehsa. S.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 68311683</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-02-01 05:02:49</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">dalphamarkets.com is really great.  Everything has been smooth so far. 10-Star Ratings! I</span><span class="js-review-text-next"> highly recommend to anyone interested in trading career.</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/tt.svg"
                                                        alt="Trinidad & Tobago"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Monifa S.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 42616595</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-01-30 21:28:09</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">Very good trading platform compared to others..
    I always recommend PO TRADE to all my</span><span class="js-review-text-next"> traders colleagues..
    Service support also very fast to solve any issue..</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/my.svg"
                                                        alt="Malaysia"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Muhammad . A.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 58417191</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-01-30 11:32:34</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">As My Trading career start from DALPHA MARKETS and I found it has most interactive</span><span class="js-review-text-next"> interface and also it has many payment option which help me to easily deposit and start trade.  Its really  very user-friendly and I have more than 6 month experience in DALPHA MARKETS. and the most important is they provide best customer service and fast response to solve any issue.</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/bd.svg"
                                                        alt="Bangladesh"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Md Mahadi H.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 58277059</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-01-30 11:23:13</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">I have been with DALPHA MARKETS for 3 years now. And I have to say they are great. Of</span><span class="js-review-text-next"> lately their deposits and withdrawals have been super fast.</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/za.svg"
                                                        alt="South Africa"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Marcus M.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 12224356</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-01-30 03:26:41</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">it's the best platform for binary in every detail of it,i only trade here
    update today i</span><span class="js-review-text-next"> made withdraw it took only 10m amazing</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/sy.svg"
                                                        alt="Syria"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Mohammed A.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 68140730</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-01-29 14:11:58</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">DALPHA MARKETSs is my first choice in options trading so I give 5 star. The best thing of</span><span class="js-review-text-next"> DALPHA MARKETSs is its support, fast withdrawal & honesty. DALPHA MARKETSs makes ZERO to HERO if we used true strategies according to daily market.</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/pk.svg"
                                                        alt="Pakistan"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Syed muha. A.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 60573675</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-01-28 09:13:15</div>
                                        </div>
                                        <div class="review-item__text">
                                                                                        I really liked the platform, very convenient. Keep up with the good work                                                                            </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/tz.svg"
                                                        alt="Tanzania"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Gabriel A M.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 71231525</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-01-28 06:43:56</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">1,0000 best of the binary options 2024 in terms of withdrawal and trading. Do look for</span><span class="js-review-text-next"> other's pockets options is they king of binary options</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/ke.svg"
                                                        alt="Kenya"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Boniface . M.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#" class="js-link-with-get-param" target="_blank">UID 70757482</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <div class="review-item">
                                        <div class="review-item__top">
                                            <div class="review-item__stars" style="cursor: default; user-select: none; display: block; white-space: nowrap;">
                                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>                                        </div>
                                            <div class="review-item__date">2024-01-28 00:39:43</div>
                                        </div>
                                        <div class="review-item__text">
                                            
                                                <span class="js-review-text-prev">I’m amazed by this platform after the demo trades, I am going real trade to meet my</span><span class="js-review-text-next"> future financial freedom.</span><span class="js-review-dots">...</span></br>
                                                <a href="#" class="review-item__more-btn js-show-full-review-btn">Show full review</a>
                                                <a href="#" class="review-item__more-btn js-hide-full-review-btn">Hide full review</a>
    
                                                                                </div>
                                        <div class="review-item__footer">
                                            <div class="review-item__flag">
                                                <img
                                                        class="review-item__flag-img"
                                                        src="images/flags-svg/pg.svg"
                                                        alt="Papua New Guinea"
                                                >
                                            </div>
                                            <div class="review-item__user-data">
                                                <div class="review-item__fio">
    
                                                    <a href="#" class="js-link-with-get-param" target="_blank">
                                                        Richard D.                                                </a>
                                                </div>
                                                <div class="review-item__uid">
                                                    <a href="#2" class="js-link-with-get-param" target="_blank">UID 70919662</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                        </div>
                        </div>
                        <div class="slider__arrows">
                            <a class="slider__arrow arrow arrow-left"><svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 1L2 11L12 21" stroke="#96AEC1" stroke-width="2" class="slider-arrow-stroke"/>
    </svg>
    </a>
                            <a class="slider__arrow arrow arrow-right"><svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1 1L11 11L1 21" stroke="#0099FA" stroke-width="2" class="slider-arrow-stroke"/>
    </svg>
    </a>
                        </div>
                    </div>
                    <div class="slider__right">
                        <div class="slider__footer slider-footer">
                            <a href="#" class="slider-footer__link-all slider__link-all">All reviews</a>
                            <p class="slider-footer__text">
                                Your feedback helps us to improve our platform and provide you with the best trading experience tailored to your needs. View ratings and post your own suggestions. We appreciate your feedback!                        </p>
                            <a href="#" class="btn btn_light-blue slider-footer__btn">
                                Submit a review                        </a>
                            <div class="slider__info-text slider-footer__desc">
                                The reviews are published with no changes to the original text                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    
    
    
    <div class="your-earnings modal">
        <div class="your-earnings__bg modal__bg">
        </div>
        <div class="modal__wrap">
        <div class="modal__container modal__header your-earnings__header">
                        <div class="your-earnings__logo">
   <img width="180px" src="logo.png">          
                </div>
          
        </div>
    </div>
    
    </main>
      
    
    @include('home.footer')
    
