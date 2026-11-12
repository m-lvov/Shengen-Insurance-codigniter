
<!DOCTYPE html>
<html lang="<?= esc(service('request')->getLocale(), 'attr') ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= csrf_meta() ?>
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8')?></title>
    <link rel="icon" type="image/svg+xml" sizes="any" href="/img/quote/favicon.svg">
    <link rel="stylesheet" href="/css/modern-normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/style.css?v=20261112-layout-3">
</head>

<body class="<?= htmlspecialchars($bodyClass ?? '', ENT_QUOTES, 'UTF-8') ?>">
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <a class="header__logo-link" href="/">
                    <img class="header__logo-img" src="/img/logo.svg" alt="<?= esc(lang('SiteCopy.logo'), 'attr') ?>">
                    <p class="header__logo-text">Go Schengen</p>
                </a>
            </div>
            <nav class="header__nav">
                <ul class="header__menu">
                    <li class="header__menu-item <?= $currentPage ==='home' ? 'header__menu-item--active' : ''?>"><a class="header__menu-link"
                                                                               href="/"><?= esc(lang('SiteCopy.home')) ?></a>
                    </li>
                    <li class="header__menu-item <?= $currentPage ==='about' ? 'header__menu-item--active' : ''?>"><a class="header__menu-link" href="/about-us"><?= esc(lang('SiteCopy.about_us_2')) ?></a>
                    </li>
                    <li class="header__menu-item"><a class="header__menu-link" href="/#reviews"><?= esc(lang('SiteCopy.reviews')) ?></a></li>
                    <li class="header__menu-item"><a class="header__menu-link" href="/#contact"><?= esc(lang('SiteCopy.contacts')) ?></a></li>
                    <li class="header__menu-item"><a class="header__menu-link" href="/#legal"><?= esc(lang('SiteCopy.legal_info')) ?></a></li>
                    <li class="header__menu-item"><a class="header__menu-link" href="/#contact"><?= esc(lang('SiteCopy.partnership')) ?></a></li>
                    <li class="header__menu-item <?= $currentPage ==='careers' ? 'header__menu-item--active' : ''?>"><a class="header__menu-link" href="/careers"><?= esc(lang('SiteCopy.careers')) ?></a></li>
                </ul>
            </nav>
            <div class="header__actions">
                <button class="header__route" type="button">
                    <span><?= esc(lang('SiteCopy.from')) ?></span>
                    <span class="header__route-divider"><?= esc(lang('SiteCopy.to')) ?></span>
                </button>
                <button class="header__language" type="button">
                    <img class="header__language-flag" src="/img/flag.png" alt="">
                    <span class="header__language-value"><?= esc(lang('SiteCopy.eng')) ?></span>
                    <img class="header__language-arrow" src="//img/header-arrow.svg" alt="">
                </button>
                <button class="header__burger" type="button">
                    <span class="header__burger-line"></span>
                    <span class="header__burger-line"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="burger-menu" id="burger-menu" hidden>
        <div class="burger-menu__overlay"></div>
        <div class="container burger-menu__container">
            <div class="burger-menu__dialog">
                <div class="burger-menu__body">
                    <nav class="burger-menu__navigation">
                        <div class="burger-menu__tabs">
                            <button class="burger-menu__tab" type="button" data-menu-tab="destinations">
                                <span class="burger-menu__tab-label"><?= esc(lang('SiteCopy.destinations')) ?></span>
                                <img src="/img/mega-menu/arrow.svg" alt="">
                            </button>
                            <button class="burger-menu__tab" type="button" data-menu-tab="insurance">
                                <span class="burger-menu__tab-label"><?= esc(lang('SiteCopy.schengen_visa_insurance')) ?></span>
                                <img src="/img/mega-menu/arrow.svg" alt="">
                            </button>
                            <button class="burger-menu__tab" type="button" data-menu-tab="entry-rules">
                                <span class="burger-menu__tab-label"><?= esc(lang('SiteCopy.rules_of_entry')) ?></span>
                                <img src="/img/mega-menu/arrow.svg" alt="">
                            </button>
                            <button class="burger-menu__tab" type="button" data-menu-tab="visa-types">
                                <span class="burger-menu__tab-label"><?= esc(lang('SiteCopy.types_schengen_visas')) ?></span>
                                <img src="/img/mega-menu/arrow.svg" alt="">
                            </button>
                            <button class="burger-menu__tab" type="button" data-menu-tab="visa-refusal">
                                <span class="burger-menu__tab-label"><?= esc(lang('SiteCopy.schengen_visas_refusal')) ?></span>
                                <img src="/img/mega-menu/arrow.svg" alt="">
                            </button>
                            <button class="burger-menu__tab" type="button" data-menu-tab="ees">
                                <span class="burger-menu__tab-label"><?= esc(lang('SiteCopy.ees_entry_exit_system')) ?></span>
                                <img src="/img/mega-menu/arrow.svg" alt="">
                            </button>
                            <button class="burger-menu__tab" type="button" data-menu-tab="etias">
                                <span class="burger-menu__tab-label">ETIAS</span>
                                <img src="/img/mega-menu/arrow.svg" alt="">
                            </button>
                        </div>
                    </nav>
                    <div class="burger-menu__content">
                        <div class="burger-menu__panel" data-menu-panel="destinations" hidden>
                            <div class="menu-countries__card">
                                <ul class="menu-countries">
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag.png" alt="">
                                            <span><?= esc(lang('SiteCopy.austria')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-1.png" alt="">
                                            <span><?= esc(lang('SiteCopy.belgium')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-2.png" alt="">
                                            <span><?= esc(lang('SiteCopy.bulgaria')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-3.png" alt="">
                                            <span><?= esc(lang('SiteCopy.croatia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-4.png" alt="">
                                            <span><?= esc(lang('SiteCopy.cyprus')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-5.png" alt="">
                                            <span><?= esc(lang('SiteCopy.czech_republic')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-6.png" alt="">
                                            <span><?= esc(lang('SiteCopy.denmark')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-7.png" alt="">
                                            <span><?= esc(lang('SiteCopy.estonia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-8.png" alt="">
                                            <span><?= esc(lang('SiteCopy.finland')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-9.png" alt="">
                                            <span><?= esc(lang('SiteCopy.france')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-10.png" alt="">
                                            <span><?= esc(lang('SiteCopy.germany')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-11.png" alt="">
                                            <span><?= esc(lang('SiteCopy.greece')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-12.png" alt="">
                                            <span><?= esc(lang('SiteCopy.hungary')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-13.png" alt="">
                                            <span><?= esc(lang('SiteCopy.iceland')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-14.png" alt="">
                                            <span><?= esc(lang('SiteCopy.italy')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-15.png" alt="">
                                            <span><?= esc(lang('SiteCopy.latvia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-17.png" alt="">
                                            <span><?= esc(lang('SiteCopy.liechtenstein')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-16.png" alt="">
                                            <span><?= esc(lang('SiteCopy.lithuania')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-18.png" alt="">
                                            <span><?= esc(lang('SiteCopy.luxembourg')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-19.png" alt="">
                                            <span><?= esc(lang('SiteCopy.malta')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-20.png" alt="">
                                            <span><?= esc(lang('SiteCopy.netherlands')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-21.png" alt="">
                                            <span><?= esc(lang('SiteCopy.norway')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-22.png" alt="">
                                            <span><?= esc(lang('SiteCopy.poland')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-23.png" alt="">
                                            <span><?= esc(lang('SiteCopy.portugal')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-29.png" alt="">
                                            <span><?= esc(lang('SiteCopy.romania')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-24.png" alt="">
                                            <span><?= esc(lang('SiteCopy.slovakia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-25.png" alt="">
                                            <span><?= esc(lang('SiteCopy.slovenia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-26.png" alt="">
                                            <span><?= esc(lang('SiteCopy.spain')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-27.png" alt="">
                                            <span><?= esc(lang('SiteCopy.sweden')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#destinations">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-28.png" alt="">
                                            <span><?= esc(lang('SiteCopy.switzerland')) ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu-countries__actions">
                                <button class="menu-countries__action" type="button">
                                    <img class="menu-countries__action-icon" src="/img/mega-menu/worldwide.svg"
                                         alt="">
                                    <span class="menu-countries__action-text"><?= esc(lang('SiteCopy.worldwide')) ?></span>
                                    <img class="menu-countries__action-arrow" src="/img/mega-menu/arrow-btn.svg"
                                         alt="">
                                </button>
                                <button class="menu-countries__action" type="button">
                                    <img class="menu-countries__action-icon" src="/img/mega-menu/allshengen.svg"
                                         alt="">
                                    <span class="menu-countries__action-text"><?= esc(lang('SiteCopy.all_schengen')) ?></span>
                                    <img class="menu-countries__action-arrow" src="/img/mega-menu/arrow-btn.svg"
                                         alt="">
                                </button>
                            </div>
                        </div>
                        <div class="burger-menu__panel" data-menu-panel="insurance" hidden>
                            <div class="menu-countries__card">
                                <ul class="menu-countries">
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag.png" alt="">
                                            <span><?= esc(lang('SiteCopy.austria')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-1.png" alt="">
                                            <span><?= esc(lang('SiteCopy.belgium')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-2.png" alt="">
                                            <span><?= esc(lang('SiteCopy.bulgaria')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-3.png" alt="">
                                            <span><?= esc(lang('SiteCopy.croatia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-4.png" alt="">
                                            <span><?= esc(lang('SiteCopy.cyprus')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-5.png" alt="">
                                            <span><?= esc(lang('SiteCopy.czech_republic')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-6.png" alt="">
                                            <span><?= esc(lang('SiteCopy.denmark')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-7.png" alt="">
                                            <span><?= esc(lang('SiteCopy.estonia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-8.png" alt="">
                                            <span><?= esc(lang('SiteCopy.finland')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-9.png" alt="">
                                            <span><?= esc(lang('SiteCopy.france')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-10.png" alt="">
                                            <span><?= esc(lang('SiteCopy.germany')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-11.png" alt="">
                                            <span><?= esc(lang('SiteCopy.greece')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-12.png" alt="">
                                            <span><?= esc(lang('SiteCopy.hungary')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-13.png" alt="">
                                            <span><?= esc(lang('SiteCopy.iceland')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-14.png" alt="">
                                            <span><?= esc(lang('SiteCopy.italy')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-15.png" alt="">
                                            <span><?= esc(lang('SiteCopy.latvia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-17.png" alt="">
                                            <span><?= esc(lang('SiteCopy.liechtenstein')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-16.png" alt="">
                                            <span><?= esc(lang('SiteCopy.lithuania')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-18.png" alt="">
                                            <span><?= esc(lang('SiteCopy.luxembourg')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-19.png" alt="">
                                            <span><?= esc(lang('SiteCopy.malta')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-20.png" alt="">
                                            <span><?= esc(lang('SiteCopy.netherlands')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-21.png" alt="">
                                            <span><?= esc(lang('SiteCopy.norway')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-22.png" alt="">
                                            <span><?= esc(lang('SiteCopy.poland')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-23.png" alt="">
                                            <span><?= esc(lang('SiteCopy.portugal')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-29.png" alt="">
                                            <span><?= esc(lang('SiteCopy.romania')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-24.png" alt="">
                                            <span><?= esc(lang('SiteCopy.slovakia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-25.png" alt="">
                                            <span><?= esc(lang('SiteCopy.slovenia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-26.png" alt="">
                                            <span><?= esc(lang('SiteCopy.spain')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-27.png" alt="">
                                            <span><?= esc(lang('SiteCopy.sweden')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#insurance">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-28.png" alt="">
                                            <span><?= esc(lang('SiteCopy.switzerland')) ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu-countries__actions">
                                <button class="menu-countries__action" type="button">
                                    <img class="menu-countries__action-icon" src="/img/mega-menu/allshengen.svg"
                                         alt="">
                                    <span class="menu-countries__action-text"><?= esc(lang('SiteCopy.all_schengen')) ?></span>
                                    <img class="menu-countries__action-arrow" src="/img/mega-menu/arrow-btn.svg"
                                         alt="">
                                </button>
                            </div>
                        </div>
                        <div class="burger-menu__panel" data-menu-panel="entry-rules" hidden>
                            <div class="menu-countries__card">
                                <ul class="menu-countries">
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag.png" alt="">
                                            <span><?= esc(lang('SiteCopy.austria')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-1.png" alt="">
                                            <span><?= esc(lang('SiteCopy.belgium')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-2.png" alt="">
                                            <span><?= esc(lang('SiteCopy.bulgaria')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-3.png" alt="">
                                            <span><?= esc(lang('SiteCopy.croatia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-4.png" alt="">
                                            <span><?= esc(lang('SiteCopy.cyprus')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-5.png" alt="">
                                            <span><?= esc(lang('SiteCopy.czech_republic')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-6.png" alt="">
                                            <span><?= esc(lang('SiteCopy.denmark')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-7.png" alt="">
                                            <span><?= esc(lang('SiteCopy.estonia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-8.png" alt="">
                                            <span><?= esc(lang('SiteCopy.finland')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-9.png" alt="">
                                            <span><?= esc(lang('SiteCopy.france')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-10.png" alt="">
                                            <span><?= esc(lang('SiteCopy.germany')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-11.png" alt="">
                                            <span><?= esc(lang('SiteCopy.greece')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-12.png" alt="">
                                            <span><?= esc(lang('SiteCopy.hungary')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-13.png" alt="">
                                            <span><?= esc(lang('SiteCopy.iceland')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-14.png" alt="">
                                            <span><?= esc(lang('SiteCopy.italy')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-15.png" alt="">
                                            <span><?= esc(lang('SiteCopy.latvia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-17.png" alt="">
                                            <span><?= esc(lang('SiteCopy.liechtenstein')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-16.png" alt="">
                                            <span><?= esc(lang('SiteCopy.lithuania')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-18.png" alt="">
                                            <span><?= esc(lang('SiteCopy.luxembourg')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-19.png" alt="">
                                            <span><?= esc(lang('SiteCopy.malta')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-20.png" alt="">
                                            <span><?= esc(lang('SiteCopy.netherlands')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-21.png" alt="">
                                            <span><?= esc(lang('SiteCopy.norway')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-22.png" alt="">
                                            <span><?= esc(lang('SiteCopy.poland')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-23.png" alt="">
                                            <span><?= esc(lang('SiteCopy.portugal')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-29.png" alt="">
                                            <span><?= esc(lang('SiteCopy.romania')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-24.png" alt="">
                                            <span><?= esc(lang('SiteCopy.slovakia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-25.png" alt="">
                                            <span><?= esc(lang('SiteCopy.slovenia')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-26.png" alt="">
                                            <span><?= esc(lang('SiteCopy.spain')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-27.png" alt="">
                                            <span><?= esc(lang('SiteCopy.sweden')) ?></span>
                                        </a>
                                    </li>
                                    <li class="menu-countries__item">
                                        <a class="menu-countries__link" href="/#rules">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-28.png" alt="">
                                            <span><?= esc(lang('SiteCopy.switzerland')) ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu-countries__actions">
                                <button class="menu-countries__action" type="button">
                                    <img class="menu-countries__action-icon" src="/img/mega-menu/allshengen.svg"
                                         alt="">
                                    <span class="menu-countries__action-text"><?= esc(lang('SiteCopy.all_entry_rules')) ?></span>
                                    <img class="menu-countries__action-arrow" src="/img/mega-menu/arrow-btn.svg"
                                         alt="">
                                </button>
                            </div>
                        </div>
                        <div class="burger-menu__panel" data-menu-panel="visa-types" hidden>
                            <ul class="menu-types__list">
                                <li class="menu-types__item"><a class="menu-types__link" href="#"><?= esc(lang('SiteCopy.all_types_of_visas')) ?></a>
                                </li>
                                <li class="menu-types__item"><a class="menu-types__link" href="#"><?= esc(lang('SiteCopy.type_a_2')) ?></a></li>
                                <li class="menu-types__item"><a class="menu-types__link" href="#"><?= esc(lang('SiteCopy.type_b_2')) ?></a></li>
                                <li class="menu-types__item"><a class="menu-types__link" href="#"><?= esc(lang('SiteCopy.type_d_2')) ?></a></li>
                                <li class="menu-types__item"><a class="menu-types__link" href="#"><?= esc(lang('SiteCopy.type_c')) ?></a></li>
                                <li class="menu-types__item"><a class="menu-types__link" href="#"><?= esc(lang('SiteCopy.ltv_limited_territorial_validity_visa')) ?></a></li>
                            </ul>
                        </div>
                        <div class="burger-menu__panel" data-menu-panel="visa-refusal" hidden>
                            <a class="burger-menu__link" href="/#visa-refusal"><?= esc(lang('SiteCopy.schengen_visas_refusal')) ?></a>
                        </div>
                        <div class="burger-menu__panel" data-menu-panel="ees" hidden>
                            <a class="burger-menu__link" href="/#ees"><?= esc(lang('SiteCopy.ees_entry_exit_system')) ?></a>
                        </div>
                        <div class="burger-menu__panel" data-menu-panel="etias" hidden>
                            <a class="burger-menu__link" href="/#etias">ETIAS</a>
                        </div>
                    </div>
                </div>
                <div class="burger-menu__contacts">
                    <button class="burger-menu__contacts-btn" type="button">
                        <img src="/img/mega-menu/question.svg" alt="">
                        <span>
                                <?= esc(lang('SiteCopy.contact_us')) ?>
                            </span>
                    </button>
                    <ul class="burger-menu__contacts-list">
                        <li class="burger-menu__contacts-item">
                            <a class="burger-menu__contacts-link" href="tel:+203440403030">
                                <img src="/img/mega-menu/phone.svg" alt="">
                                <span>+2034 4040 3030</span>
                            </a>
                        </li>
                        <li class="burger-menu__contacts-item">
                            <a class="burger-menu__contacts-link" href="mailto:support@.com">
                                <img src="/img/mega-menu/email.svg" alt="">
                                <span>support@.com</span>
                            </a>

                        </li>
                        <li class="burger-menu__contacts-item">
                            <a class="burger-menu__contacts-link" href="#">
                                <img src="/img/mega-menu/location.svg" alt="">
                                <span><?= esc(lang('SiteCopy.545_mavis_island')) ?></span>
                            </a>
                        </li>
                        <li class="burger-menu__contacts-item">
                            <a class="burger-menu__contacts-link" href="#">
                                <img src="/img/mega-menu/time.svg" alt="">
                                <span>Lorem ipsum</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="route-menu" hidden>
        <div class="route-menu__overlay"></div>
        <div class="container route-menu__container">
            <div class="route-menu__dialog">
                <div class="route-menu__body">
                    <nav class="route-menu__navigation">
                        <button class="route-menu__tab route-menu__tab--active" type="button"
                                data-route-tab="departure">
                            <?= esc(lang('SiteCopy.country_of_departure')) ?>
                            <img src="/img/mega-menu/arrow.svg" alt="">
                        </button>
                        <button class="route-menu__tab" type="button" data-route-tab="destination">
                            <?= esc(lang('SiteCopy.destination_country')) ?>
                            <img src="/img/mega-menu/arrow.svg" alt="">
                        </button>
                    </nav>
                    <div class="route-menu__content">
                        <div class="route-menu__panel" data-route-panel="departure">
                            <div class="route-menu__regions">
                                <button class="route-menu__option" type="button" data-region-tab="america">
                                    <?= esc(lang('SiteCopy.america')) ?>
                                    <img src="/img/mega-menu/arrow.svg" alt="">
                                </button>
                                <button class="route-menu__option" type="button" data-region-tab="europe">
                                    <?= esc(lang('SiteCopy.europe')) ?>
                                    <img src="/img/mega-menu/arrow.svg" alt="">
                                </button>
                                <button class="route-menu__option" type="button" data-region-tab="africa">
                                    <?= esc(lang('SiteCopy.africa')) ?>
                                    <img src="/img/mega-menu/arrow.svg" alt="">
                                </button>
                                <button class="route-menu__option" type="button" data-region-tab="asia">
                                    <?= esc(lang('SiteCopy.asia')) ?>
                                    <img src="/img/mega-menu/arrow.svg" alt="">
                                </button>
                                <button class="route-menu__option" type="button" data-region-tab="oceania">
                                    <?= esc(lang('SiteCopy.oceania')) ?>
                                    <img src="/img/mega-menu/arrow.svg" alt="">
                                </button>
                            </div>
                            <div class="route-menu__subregions" hidden>
                                <div class="route-menu__subregion-panel" data-region-panel="america" hidden>
                                    <button class="route-menu__option" type="button" data-countries-tab="caribbean">
                                        <?= esc(lang('SiteCopy.caribbean')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="central-america">
                                        <?= esc(lang('SiteCopy.central_america')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="north-america">
                                        <?= esc(lang('SiteCopy.north_america')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="south-america">
                                        <?= esc(lang('SiteCopy.south_america')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                </div>
                                <div class="route-menu__subregion-panel" data-region-panel="europe" hidden>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="northern-europe">
                                        <?= esc(lang('SiteCopy.northern_europe')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="western-europe">
                                        <?= esc(lang('SiteCopy.western_europe')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="southern-europe">
                                        <?= esc(lang('SiteCopy.southern_europe')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="eastern-europe">
                                        <?= esc(lang('SiteCopy.eastern_europe')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                </div>
                                <div class="route-menu__subregion-panel" data-region-panel="africa" hidden>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="northern-africa">
                                        <?= esc(lang('SiteCopy.northern_africa')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="western-africa">
                                        <?= esc(lang('SiteCopy.western_africa')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="central-africa">
                                        <?= esc(lang('SiteCopy.central_africa')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="eastern-africa">
                                        <?= esc(lang('SiteCopy.eastern_africa')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="southern-africa">
                                        <?= esc(lang('SiteCopy.southern_africa')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                </div>
                                <div class="route-menu__subregion-panel" data-region-panel="asia" hidden>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="central-asia">
                                        <?= esc(lang('SiteCopy.central_asia')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="eastern-asia">
                                        <?= esc(lang('SiteCopy.eastern_asia')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="southern-asia">
                                        <?= esc(lang('SiteCopy.southern_asia')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="south-eastern-asia">
                                        <?= esc(lang('SiteCopy.south_eastern_asia')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="western-asia">
                                        <?= esc(lang('SiteCopy.western_asia')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                </div>
                                <div class="route-menu__subregion-panel" data-region-panel="oceania" hidden>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="australia-new-zealand">
                                        <?= esc(lang('SiteCopy.australia_new_zealand')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button" data-countries-tab="melanesia">
                                        <?= esc(lang('SiteCopy.melanesia')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button"
                                            data-countries-tab="micronesia">
                                        <?= esc(lang('SiteCopy.micronesia')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                    <button class="route-menu__option" type="button" data-countries-tab="polynesia">
                                        <?= esc(lang('SiteCopy.polynesia')) ?>
                                        <img src="/img/mega-menu/arrow.svg" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="route-menu__countries" hidden>
                                <ul class="route-menu__countries-list" data-countries-panel="caribbean" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="anguilla">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.anguilla')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="antigua-and-barbuda">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-1.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.antigua_and_barbuda')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="aruba">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-2.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.aruba')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="bahamas">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-3.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.bahamas')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="barbados">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-4.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.barbados')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="bermuda">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-5.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.bermuda')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="bonaire-and-saba">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-6.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.bonaire_saba')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="cayman-islands">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-7.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.cayman_islands')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="cuba">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-8.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.cuba')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="curacao">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-9.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.curacao')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="dominica">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-10.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.dominica')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="dominican-republic">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-11.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.dominican_republic')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="grenada">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-12.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.grenada')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="guadeloupe">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-13.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.guadeloupe')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="haiti">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-14.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.haiti')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="jamaica">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-15.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.jamaica')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="martinique">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-16.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.martinique')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="montserrat">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-17.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.montserrat')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="puerto-rico">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-18.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.puerto_rico')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="saint-barthelemy">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-19.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.saint_barth_lemy')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="saint-kitts-and-nevis">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-20.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.saint_kitts_and_nevis')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="saint-lucia">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-21.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.saint_lucia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="saint-martin">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-22.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.saint_martin')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="st-vincent">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-23.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.st_vincent')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="sint-maarten">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-24.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.sint_maarten')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="trinidad-and-tobago">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-25.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.trinidad_and_tobago')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="turks-and-caicos">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-26.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.turks_and_caicos')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="central-america"
                                    hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="belize">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-153.png" alt="">
                                            <span><?= esc(lang('SiteCopy.belize')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="costa-rica">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-154.png" alt="">
                                            <span><?= esc(lang('SiteCopy.costa_rica')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="el-salvador">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-155.png" alt="">
                                            <span><?= esc(lang('SiteCopy.el_salvador')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="guatemala">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-156.png" alt="">
                                            <span><?= esc(lang('SiteCopy.guatemala')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="honduras">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-157.png" alt="">
                                            <span><?= esc(lang('SiteCopy.honduras')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="mexico">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-158.png" alt="">
                                            <span><?= esc(lang('SiteCopy.mexico')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="nicaragua">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-159.png" alt="">
                                            <span><?= esc(lang('SiteCopy.nicaragua')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="panama">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-160.png" alt="">
                                            <span><?= esc(lang('SiteCopy.panama')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="north-america" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="canada">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-161.png" alt="">
                                            <span><?= esc(lang('SiteCopy.canada')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="greenland">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-162.png" alt="">
                                            <span><?= esc(lang('SiteCopy.greenland')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="saint-pierre-and-miquelon">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-163.png" alt="">
                                            <span><?= esc(lang('SiteCopy.saint_pierre_and_miquelon')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="usa">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-164.png" alt="">
                                            <span><?= esc(lang('SiteCopy.usa')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="south-america" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="argentina">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-165.png" alt="">
                                            <span><?= esc(lang('SiteCopy.argentina')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="bolivia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-166.png" alt="">
                                            <span><?= esc(lang('SiteCopy.bolivia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="brazil">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-167.png" alt="">
                                            <span><?= esc(lang('SiteCopy.brazil')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="chile">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-168.png" alt="">
                                            <span><?= esc(lang('SiteCopy.chile')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="colombia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-169.png" alt="">
                                            <span><?= esc(lang('SiteCopy.colombia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="ecuador">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-170.png" alt="">
                                            <span><?= esc(lang('SiteCopy.ecuador')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="french-guiana">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-171.png" alt="">
                                            <span><?= esc(lang('SiteCopy.french_guiana')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="guyana">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-172.png" alt="">
                                            <span><?= esc(lang('SiteCopy.guyana')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="paraguay">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-173.png" alt="">
                                            <span><?= esc(lang('SiteCopy.paraguay')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="peru">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-174.png" alt="">
                                            <span><?= esc(lang('SiteCopy.peru')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="suriname">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-175.png" alt="">
                                            <span><?= esc(lang('SiteCopy.suriname')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="uruguay">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-176.png" alt="">
                                            <span><?= esc(lang('SiteCopy.uruguay')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="venezuela">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-177.png" alt="">
                                            <span><?= esc(lang('SiteCopy.venezuela')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="northern-europe"
                                    hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="guernsey">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-178.png" alt="">
                                            <span><?= esc(lang('SiteCopy.guernsey')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="ireland">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-179.png" alt="">
                                            <span><?= esc(lang('SiteCopy.ireland')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="isle-of-man">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-180.png" alt="">
                                            <span><?= esc(lang('SiteCopy.isle_of_man')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="jersey">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-181.png" alt="">
                                            <span><?= esc(lang('SiteCopy.jersey')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="united-kingdom">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-182.png" alt="">
                                            <span><?= esc(lang('SiteCopy.united_kingdom')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="western-europe" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="monaco">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-183.png" alt="">
                                            <span><?= esc(lang('SiteCopy.monaco')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="southern-europe"
                                    hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="albania">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-184.png" alt="">
                                            <span><?= esc(lang('SiteCopy.albania')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="andorra">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-185.png" alt="">
                                            <span><?= esc(lang('SiteCopy.andorra')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="bosnia-and-herzegovina">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-186.png" alt="">
                                            <span><?= esc(lang('SiteCopy.bosnia_and_herzegovina')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="gibraltar">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-187.png" alt="">
                                            <span><?= esc(lang('SiteCopy.gibraltar')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="holy-see-vatican-city">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-188.png" alt="">
                                            <span><?= esc(lang('SiteCopy.holy_see_vatican_city')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="kosovo">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-189.png" alt="">
                                            <span><?= esc(lang('SiteCopy.kosovo')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="montenegro">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-190.png" alt="">
                                            <span><?= esc(lang('SiteCopy.montenegro')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="north-macedonia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-191.png" alt="">
                                            <span><?= esc(lang('SiteCopy.north_macedonia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="san-marino">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-192.png" alt="">
                                            <span><?= esc(lang('SiteCopy.san_marino')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="serbia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-193.png" alt="">
                                            <span><?= esc(lang('SiteCopy.serbia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="turkey">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-194.png" alt="">
                                            <span><?= esc(lang('SiteCopy.turkey')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="eastern-europe" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="belarus">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-195.png" alt="">
                                            <span><?= esc(lang('SiteCopy.belarus')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="georgia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-196.png" alt="">
                                            <span><?= esc(lang('SiteCopy.georgia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="moldova">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-197.png" alt="">
                                            <span><?= esc(lang('SiteCopy.moldova')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="russia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-198.png" alt="">
                                            <span><?= esc(lang('SiteCopy.russia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="ukraine">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-199.png" alt="">
                                            <span><?= esc(lang('SiteCopy.ukraine')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="northern-africa"
                                    hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="algeria">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-27.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.algeria')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="egypt">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-28.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.egypt')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="libya">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-29.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.libya')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="mauritania">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-30.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.mauritania')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="morocco">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-31.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.morocco')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="sudan">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-32.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.sudan')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="tunisia">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-33.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.tunisia')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="western-africa" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="benin">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-107.png" alt="">
                                            <span><?= esc(lang('SiteCopy.benin')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="burkina-faso">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-108.png" alt="">
                                            <span><?= esc(lang('SiteCopy.burkina_faso')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="cote-d-ivoire">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-109.png" alt="">
                                            <span><?= esc(lang('SiteCopy.c_te_d_ivoire')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="gambia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-110.png" alt="">
                                            <span><?= esc(lang('SiteCopy.gambia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="ghana">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-111.png" alt="">
                                            <span><?= esc(lang('SiteCopy.ghana')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="guinea">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-112.png" alt="">
                                            <span><?= esc(lang('SiteCopy.guinea')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="guinea-bissau">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-113.png" alt="">
                                            <span><?= esc(lang('SiteCopy.guinea_bissau')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="liberia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-114.png" alt="">
                                            <span><?= esc(lang('SiteCopy.liberia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="mali">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-115.png" alt="">
                                            <span><?= esc(lang('SiteCopy.mali')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="niger">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-116.png" alt="">
                                            <span><?= esc(lang('SiteCopy.niger')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="nigeria">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-117.png" alt="">
                                            <span><?= esc(lang('SiteCopy.nigeria')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="senegal">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-118.png" alt="">
                                            <span><?= esc(lang('SiteCopy.senegal')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="sierra-leone">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-119.png" alt="">
                                            <span><?= esc(lang('SiteCopy.sierra_leone')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="togo">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-120.png" alt="">
                                            <span><?= esc(lang('SiteCopy.togo')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="central-africa" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="angola">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-121.png" alt="">
                                            <span><?= esc(lang('SiteCopy.angola')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="cameroon">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-122.png" alt="">
                                            <span><?= esc(lang('SiteCopy.cameroon')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="central-african-republic">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-123.png" alt="">
                                            <span><?= esc(lang('SiteCopy.central_african_republic')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="chad">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-124.png" alt="">
                                            <span><?= esc(lang('SiteCopy.chad')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="dr-congo">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-125.png" alt="">
                                            <span><?= esc(lang('SiteCopy.dr_congo')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="equatorial-guinea">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-126.png" alt="">
                                            <span><?= esc(lang('SiteCopy.equatorial_guinea')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="gabon">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-127.png" alt="">
                                            <span><?= esc(lang('SiteCopy.gabon')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="republic-of-the-congo">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-128.png" alt="">
                                            <span><?= esc(lang('SiteCopy.republic_of_the_congo')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="sao-tome-and-principe">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-129.png" alt="">
                                            <span><?= esc(lang('SiteCopy.s_o_tom_and_pr_ncipe')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="eastern-africa" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="burundi">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-130.png" alt="">
                                            <span><?= esc(lang('SiteCopy.burundi')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="comoros">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-131.png" alt="">
                                            <span><?= esc(lang('SiteCopy.comoros')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="djibouti">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-132.png" alt="">
                                            <span><?= esc(lang('SiteCopy.djibouti')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="eritrea">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-133.png" alt="">
                                            <span><?= esc(lang('SiteCopy.eritrea')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="ethiopia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-134.png" alt="">
                                            <span><?= esc(lang('SiteCopy.ethiopia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="kenya">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-135.png" alt="">
                                            <span><?= esc(lang('SiteCopy.kenya')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="madagascar">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-136.png" alt="">
                                            <span><?= esc(lang('SiteCopy.madagascar')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="malawi">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-137.png" alt="">
                                            <span><?= esc(lang('SiteCopy.malawi')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="mauritius">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-138.png" alt="">
                                            <span><?= esc(lang('SiteCopy.mauritius')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="rwanda">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-139.png" alt="">
                                            <span><?= esc(lang('SiteCopy.rwanda')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="seychelles">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-140.png" alt="">
                                            <span><?= esc(lang('SiteCopy.seychelles')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="somalia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-141.png" alt="">
                                            <span><?= esc(lang('SiteCopy.somalia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="south-sudan">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-142.png" alt="">
                                            <span><?= esc(lang('SiteCopy.south_sudan')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="tanzania">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-143.png" alt="">
                                            <span><?= esc(lang('SiteCopy.tanzania')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="uganda">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-144.png" alt="">
                                            <span><?= esc(lang('SiteCopy.uganda')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="southern-africa"
                                    hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="botswana">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-145.png" alt="">
                                            <span><?= esc(lang('SiteCopy.botswana')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="eswatini-swaziland">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-146.png" alt="">
                                            <span><?= esc(lang('SiteCopy.eswatini_swaziland')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="lesotho">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-147.png" alt="">
                                            <span><?= esc(lang('SiteCopy.lesotho')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="mozambique">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-148.png" alt="">
                                            <span><?= esc(lang('SiteCopy.mozambique')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="namibia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-149.png" alt="">
                                            <span><?= esc(lang('SiteCopy.namibia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="south-africa">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-150.png" alt="">
                                            <span><?= esc(lang('SiteCopy.south_africa')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="zambia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-151.png" alt="">
                                            <span><?= esc(lang('SiteCopy.zambia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="zimbabwe">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-152.png" alt="">
                                            <span><?= esc(lang('SiteCopy.zimbabwe')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="central-asia" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="kazakhstan">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-34.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.kazakhstan')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="kyrgyzstan">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-35.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.kyrgyzstan')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="tajikistan">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-36.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.tajikistan')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="turkmenistan">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-37.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.turkmenistan')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="uzbekistan">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-38.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.uzbekistan')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="eastern-asia" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="china">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-66.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.china')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="hong-kong">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-67.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.hong_kong')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="japan">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-68.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.japan')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="macao">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-69.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.macao')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="mongolia">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-70.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.mongolia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="south-korea">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-71.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.south_korea')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="taiwan">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-72.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.taiwan')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="southern-asia" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="afghanistan">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-73.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.afghanistan')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="bangladesh">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-74.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.bangladesh')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="india">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-75.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.india')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="iran">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-76.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.iran')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="maldives">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-77.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.maldives')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="nepal">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-78.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.nepal')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="pakistan">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-79.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.pakistan')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="sri-lanka">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-80.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.sri_lanka')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="south-eastern-asia"
                                    hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="brunei">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-81.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.brunei')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="cambodia">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-82.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.cambodia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="indonesia">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-83.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.indonesia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="laos">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-84.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.laos')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="malaysia">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-85.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.malaysia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="myanmar">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-86.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.myanmar')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="philippines">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-87.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.philippines')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="singapore">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-88.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.singapore')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="thailand">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-89.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.thailand')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="timor-leste">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-90.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.timor_leste')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="vietnam">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-91.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.vietnam')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="western-asia" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="armenia">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-92.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.armenia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="azerbaijan">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-93.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.azerbaijan')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="bahrain">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-94.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.bahrain')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="iraq">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-95.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.iraq')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="israel">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-96.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.israel')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="jordan">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-97.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.jordan')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="kuwait">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-98.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.kuwait')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="lebanon">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-99.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.lebanon')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="oman">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-100.png" alt="">
                                            <span><?= esc(lang('SiteCopy.oman')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="palestine">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-101.png" alt="">
                                            <span><?= esc(lang('SiteCopy.palestine')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="qatar">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-102.png" alt="">
                                            <span><?= esc(lang('SiteCopy.qatar')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="saudi-arabia">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-103.png" alt="">
                                            <span><?= esc(lang('SiteCopy.saudi_arabia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="syria">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-104.png" alt="">
                                            <span><?= esc(lang('SiteCopy.syria')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="united-arab-emirates">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-105.png" alt="">
                                            <span><?= esc(lang('SiteCopy.united_arab_emirates')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="yemen">
                                            <img class="route-menu__flag"
                                                 src="/img/flags-fromto/Rectangle%2045-106.png" alt="">
                                            <span><?= esc(lang('SiteCopy.yemen')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="australia-new-zealand"
                                    hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="australia">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-39.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.australia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="christmas-island">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-40.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.christmas_island')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="cocos-keeling-islands">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-41.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.cocos_keeling_islands')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="new-zealand">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-42.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.new_zealand')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="norfolk-island">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-43.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.norfolk_island')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="melanesia" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="fiji">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-44.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.fiji')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="new-caledonia">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-45.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.new_caledonia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="papua-new-guinea">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-46.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.papua_new_guinea')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="solomon-islands">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-47.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.solomon_islands')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="vanuatu">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-48.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.vanuatu')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="micronesia" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="guam">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-49.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.guam')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="kiribati">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-50.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.kiribati')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="marshall-islands">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-51.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.marshall_islands')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="micronesia">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-52.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.micronesia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="nauru">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-53.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.nauru')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="northern-mariana-islands">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-54.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.northern_mariana_islands')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="palau">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-55.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.palau')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                                <ul class="route-menu__countries-list" data-countries-panel="polynesia" hidden>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="american-samoa">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-56.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.american_samoa')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="cook-islands">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-57.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.cook_islands')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="french-polynesia">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-58.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.french_polynesia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="niue">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-59.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.niue')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="pitcairn-islands">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-60.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.pitcairn_islands')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="samoa">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-61.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.samoa')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="tokelau">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-62.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.tokelau')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="tonga">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-63.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.tonga')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button" data-country="tuvalu">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-64.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.tuvalu')) ?></span>
                                        </button>
                                    </li>
                                    <li class="route-menu__country">
                                        <button class="route-menu__country-btn" type="button"
                                                data-country="wallis-and-futuna">
                                            <img class="route-menu__flag" src="/img/flags-fromto/Rectangle%2045-65.png"
                                                 alt="">
                                            <span><?= esc(lang('SiteCopy.wallis_and_futuna')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="route-menu__panel" data-route-panel="destination" hidden>
                            <div class="route-menu__schengen-card">
                                <ul class="menu-countries route-menu__schengen-list">
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="austria">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag.png" alt="">
                                            <span><?= esc(lang('SiteCopy.austria')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="belgium">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-1.png" alt="">
                                            <span><?= esc(lang('SiteCopy.belgium')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="bulgaria">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-2.png" alt="">
                                            <span><?= esc(lang('SiteCopy.bulgaria')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="croatia">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-3.png" alt="">
                                            <span><?= esc(lang('SiteCopy.croatia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="cyprus">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-4.png" alt="">
                                            <span><?= esc(lang('SiteCopy.cyprus')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button"
                                                data-country="czech-republic">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-5.png" alt="">
                                            <span><?= esc(lang('SiteCopy.czech_republic')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="denmark">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-6.png" alt="">
                                            <span><?= esc(lang('SiteCopy.denmark')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="estonia">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-7.png" alt="">
                                            <span><?= esc(lang('SiteCopy.estonia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="finland">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-8.png" alt="">
                                            <span><?= esc(lang('SiteCopy.finland')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="france">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-9.png" alt="">
                                            <span><?= esc(lang('SiteCopy.france')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="germany">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-10.png" alt="">
                                            <span><?= esc(lang('SiteCopy.germany')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="greece">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-11.png" alt="">
                                            <span><?= esc(lang('SiteCopy.greece')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="hungary">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-12.png" alt="">
                                            <span><?= esc(lang('SiteCopy.hungary')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="iceland">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-13.png" alt="">
                                            <span><?= esc(lang('SiteCopy.iceland')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="italy">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-14.png" alt="">
                                            <span><?= esc(lang('SiteCopy.italy')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="latvia">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-15.png" alt="">
                                            <span><?= esc(lang('SiteCopy.latvia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button"
                                                data-country="liechtenstein">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-17.png" alt="">
                                            <span><?= esc(lang('SiteCopy.liechtenstein')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="lithuania">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-16.png" alt="">
                                            <span><?= esc(lang('SiteCopy.lithuania')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button"
                                                data-country="luxembourg">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-18.png" alt="">
                                            <span><?= esc(lang('SiteCopy.luxembourg')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="malta">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-19.png" alt="">
                                            <span><?= esc(lang('SiteCopy.malta')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button"
                                                data-country="netherlands">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-20.png" alt="">
                                            <span><?= esc(lang('SiteCopy.netherlands')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="norway">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-21.png" alt="">
                                            <span><?= esc(lang('SiteCopy.norway')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="poland">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-22.png" alt="">
                                            <span><?= esc(lang('SiteCopy.poland')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="portugal">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-23.png" alt="">
                                            <span><?= esc(lang('SiteCopy.portugal')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="romania">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-29.png" alt="">
                                            <span><?= esc(lang('SiteCopy.romania')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="slovakia">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-24.png" alt="">
                                            <span><?= esc(lang('SiteCopy.slovakia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="slovenia">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-25.png" alt="">
                                            <span><?= esc(lang('SiteCopy.slovenia')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="spain">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-26.png" alt="">
                                            <span><?= esc(lang('SiteCopy.spain')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button" data-country="sweden">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-27.png" alt="">
                                            <span><?= esc(lang('SiteCopy.sweden')) ?></span>
                                        </button>
                                    </li>
                                    <li class="menu-countries__item">
                                        <button class="menu-countries__link" type="button"
                                                data-country="switzerland">
                                            <img class="menu-countries__flag" src="/img/flags-30/flag-28.png" alt="">
                                            <span><?= esc(lang('SiteCopy.switzerland')) ?></span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="burger-menu__contacts route-menu__contacts">
                    <button class="burger-menu__contacts-btn" type="button">
                        <img src="/img/mega-menu/question.svg" alt="">
                        <span><?= esc(lang('SiteCopy.contact_us')) ?></span>
                    </button>
                    <ul class="burger-menu__contacts-list">
                        <li class="burger-menu__contacts-item">
                            <a class="burger-menu__contacts-link" href="tel:+203440403030">
                                <img src="/img/mega-menu/phone.svg" alt="">
                                <span>+2034 4040 3030</span>
                            </a>
                        </li>
                        <li class="burger-menu__contacts-item">
                            <a class="burger-menu__contacts-link" href="mailto:support@.com">
                                <img src="/img/mega-menu/email.svg" alt="">
                                <span>support@.com</span>
                            </a>
                        </li>
                        <li class="burger-menu__contacts-item">
                            <a class="burger-menu__contacts-link" href="#">
                                <img src="/img/mega-menu/location.svg" alt="">
                                <span><?= esc(lang('SiteCopy.545_mavis_island')) ?></span>
                            </a>
                        </li>
                        <li class="burger-menu__contacts-item">
                            <a class="burger-menu__contacts-link" href="#">
                                <img src="/img/mega-menu/time.svg" alt="">
                                <span>Lorem ipsum</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
