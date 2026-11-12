

<footer class="footer">
    <div class="container">
        <div class="footer__head">
            <a class="footer__logo-link" href="/">
                <img class="footer__logo-img" src="/img/logo.svg" alt="">
                <span class="footer__logo-text">Go Schengen</span>
            </a>
            <p class="footer__text"><?= esc(lang('SiteCopy.goschengen_registered_in_country_no_00000000_w')) ?></p>
            <nav class="footer__wrapper footer__wrapper-site" aria-labelledby="footer-site-title">
                <h3 class="footer__title" id="footer-site-title"><?= esc(lang('SiteCopy.site')) ?></h3>
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__item-link" href="/#insurance"><?= esc(lang('SiteCopy.visa_insurance')) ?></a></li>
                    <li class="footer__item"><a class="footer__item-link" href="/#destinations"><?= esc(lang('SiteCopy.destinations')) ?></a></li>
                    <li class="footer__item"><a class="footer__item-link" href="/#rules"><?= esc(lang('SiteCopy.rules_of_entry')) ?></a></li>
                    <li class="footer__item"><a class="footer__item-link" href="/#visa-types"><?= esc(lang('SiteCopy.types_of_schengen_visas')) ?></a>
                    </li>
                    <li class="footer__item"><a class="footer__item-link" href="/#visa-refusal"><?= esc(lang('SiteCopy.schengen_visa_refusal')) ?></a></li>
                    <li class="footer__item"><a class="footer__item-link" href="/#ees"><?= esc(lang('SiteCopy.ees_entry_exit_system')) ?></a>
                    </li>
                    <li class="footer__item"><a class="footer__item-link" href="/#etias">ETIAS</a></li>
                </ul>
            </nav>
            <nav class="footer__wrapper footer__wrapper-company" aria-labelledby="footer-company-title">
                <h3 class="footer__title" id="footer-company-title"><?= esc(lang('SiteCopy.company')) ?></h3>
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__item-link" href="/about-us"><?= esc(lang('SiteCopy.about_us_2')) ?></a></li>
                    <li class="footer__item"><a class="footer__item-link" href="/#contact"><?= esc(lang('SiteCopy.contacts')) ?></a></li>
                    <li class="footer__item"><a class="footer__item-link" href="/#reviews"><?= esc(lang('SiteCopy.reviews')) ?></a></li>
                    <li class="footer__item"><a class="footer__item-link" href="/#contact"><?= esc(lang('SiteCopy.partnership')) ?></a></li>
                    <li class="footer__item"><a class="footer__item-link" href="/careers"><?= esc(lang('SiteCopy.careers')) ?></a></li>
                </ul>
            </nav>
            <nav class="footer__wrapper" id="legal" aria-labelledby="footer-legal-title">
                <h3 class="footer__title" id="footer-legal-title"><?= esc(lang('SiteCopy.legal')) ?></h3>
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__item-link" href=""><?= esc(lang('SiteCopy.terms_of_service')) ?></a></li>
                    <li class="footer__item"><a class="footer__item-link" href=""><?= esc(lang('SiteCopy.privacy_policy')) ?></a></li>
                    <li class="footer__item"><a class="footer__item-link" href=""><?= esc(lang('SiteCopy.cookie_policy')) ?></a></li>
                    <li class="footer__item"><a class="footer__item-link" href="/#documents"><?= esc(lang('SiteCopy.insurance_documents')) ?></a>
                    </li>
                </ul>
            </nav>
            <div class="footer__wrapper footer__wrapper-contact">
                <h3 class="footer__title"><?= esc(lang('SiteCopy.contact')) ?></h3>
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__item-link"
                                                href="mailto:support@.com">support@.com</a>
                    </li>
                    <li class="footer__item"><a class="footer__item-link" href="tel:+77777777777">+7 (777)
                            777-77-77</a></li>
                    <li class="footer__item">
                        <ul class="footer__contact-icons">
                            <li class="footer__contact-icon"><a href="#"><img src="/img/telegram.svg"
                                                                              alt="Telegram"></a>
                            </li>
                            <li class="footer__contact-icon"><a href="#"><img src="/img/watsap.svg"
                                                                              alt="WhatsApp"></a></li>
                            <li class="footer__contact-icon"><a href="#"><img src="/img/mesenger.svg"
                                                                              alt="<?= esc(lang('SiteCopy.messenger'), 'attr') ?>"></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="footer__wrapper footer__wrapper-social">
                <h3 class="footer__title"><?= esc(lang('SiteCopy.social')) ?></h3>
                <ul class="footer__list footer__list-social">
                    <li class="footer__item"><a class="footer__item-link" href="#"><img
                                    src="/img/facebook-footer.svg" alt="Facebook"></a>
                    </li>
                    <li class="footer__item"><a class="footer__item-link" href="#"><img src="/img/X.svg" alt="X"></a>
                    </li>
                    <li class="footer__item"><a class="footer__item-link" href="#"><img src="/img/instagramm.svg"
                                                                                        alt="Instagram"></a>
                    </li>
                    <li class="footer__item"><a class="footer__item-link" href="#"><img src="/img/in.svg"
                                                                                        alt="LinkedIn"></a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="footer__list-logos">
            <li class="footer__item-logos"><img src="/img/apple-pay.svg" alt=""></li>
            <li class="footer__item-logos"><img src="/img/g-pay.svg" alt=""></li>
            <li class="footer__item-logos"><img src="/img/visa.svg" alt=""></li>
            <li class="footer__item-logos"><img src="/img/mastercard.svg" alt=""></li>
            <li class="footer__item-logos"><img src="/img/pay-pal.svg" alt=""></li>
        </ul>
        <div class="footer__bottom">
            <p class="footer__bottom-text"><?= esc(lang('SiteCopy.2026_goschengen_limited_all_rights_reserved')) ?></p>
            <p class="footer__bottom-text"><?= esc(lang('SiteCopy.27_high_street_oxford_ox1_4rp_united_kingdom')) ?></p>
        </div>
    </div>
</footer>
