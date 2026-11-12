<?php
$pageTitle = 'Go Shengen';
$bodyClass = 'index-page';
$currentPage = 'home';
echo view ('includes/header',[
        'pageTitle' => $pageTitle,
        'bodyClass' => $bodyClass,
        'currentPage' => $currentPage,
]);
?>
    <main class="main">
        <section class="hero" id="hero">
            <div class="container">
                <div class="page-hero__card page-hero__card-index">
                    <div class="page-hero__avatars">
                        <img class="page-hero__avatar" src="img/page-hero/avatar-1.svg" alt="">
                        <img class="page-hero__avatar" src="img/page-hero/avatar-2.svg" alt="">
                        <img class="page-hero__avatar" src="img/page-hero/avatar-3.svg" alt="">
                    </div>
                    <p class="page-hero__value">
                        <?= esc(lang('SiteCopy.245_880_000_people')) ?>
                    </p>
                </div>
                <div class="hero__inner">
                    <div class="hero__rate">
                        <img class="hero__rate-stars" src="img/stars.svg" alt="">
                        <p class="hero__rate-value"><?= esc(lang('SiteCopy.top_rated_4_8_5')) ?></p>
                    </div>
                    <p class="hero__rev"><?= esc(lang('SiteCopy.over_19_000_reviews')) ?></p>
                    <h1 class="hero__title"><?= esc(lang('SiteCopy.schengen_travel_insurance')) ?><span class="hero__title-mobile"> <?= esc(lang('SiteCopy.for_any_occasion')) ?></span></h1>
                    <p class="hero__text"><?= esc(lang('SiteCopy.order_schengen_travel_insurance_for_visa_to_ga')) ?>
                    </p>
                </div>
                <form class="hero__form" action="" novalidate>
                    <div class="form-field">
                        <div class="form-field__inner form-country">
                            <div class="form-country__panel">
                                <span class="form-field__label form-field__label-form" id="country-label"><?= esc(lang('SiteCopy.from')) ?></span>
                                <div class="custom-select">
                                    <div class="form-field__btn form-country__field">
                                        <input class="form-country__search" type="text" placeholder="<?= esc(lang('SiteCopy.select_a_country'), 'attr') ?>"
                                            autocomplete="off" aria-labelledby="country-label">
                                        <button class="form-country__toggle" type="button"
                                            aria-label="<?= esc(lang('SiteCopy.open_country_list'), 'attr') ?>" aria-controls="country-dropdown"
                                            aria-expanded="false">
                                            <img class="custom-select__arrow" src="img/form-arrow.svg" alt="">
                                        </button>
                                    </div>
                                    <div class="form-country__dropdown" id="country-dropdown" hidden>
                                        <div class="form-country__selection" hidden>
                                            <button class="form-country__done" type="button">
                                                <?= esc(lang('SiteCopy.done')) ?>
                                            </button>
                                            <ul class="form-country__tags"></ul>
                                        </div>
                                        <div class="form-country__scroll">
                                            <span class="form-country__caption">
                                                <?= esc(lang('SiteCopy.popular_destinations')) ?>
                                            </span>
                                            <ul class="form-country__options form-country__options--popular">

                                            </ul>
                                            <span class="form-country__caption form-country__caption--all">
                                                <?= esc(lang('SiteCopy.all_destinations')) ?>
                                            </span>
                                            <ul class="form-country__options form-country__options--all">

                                            </ul>
                                            <p class="form-country__empty" hidden><?= esc(lang('SiteCopy.no_countries_found')) ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="form-field__list">
                                <li class="form-field__items"><button class="form-field__option"
                                        type="button"><?= esc(lang('SiteCopy.germany')) ?></button></li>
                                <li class="form-field__items"><button class="form-field__option"
                                        type="button"><?= esc(lang('SiteCopy.france')) ?></button></li>
                                <li class="form-field__items"><button class="form-field__option"
                                        type="button"><?= esc(lang('SiteCopy.spain')) ?></button></li>
                                <li class="form-field__items"><button class="form-field__option"
                                        type="button"><?= esc(lang('SiteCopy.italy')) ?></button></li>
                                <li class="form-field__items"><button class="form-field__option"
                                        type="button"><?= esc(lang('SiteCopy.greece')) ?></button></li>
                            </ul>

                        </div>

                        <div class="form-field__inner form-date">
                            <div class="form-date__panel">
                                <span class="form-field__label form-field__label-date" id="date-label"><?= esc(lang('SiteCopy.date')) ?></span>
                                <button class="form-field__btn-date" type="button"
                                    aria-labelledby="date-label date-value" aria-expanded="false"
                                    aria-controls="trip-calendar">
                                    <span class="form-field__value" id="date-value">
                                        <span class="form-date__range">
                                            <span class="form-date__start"><?= esc(lang('SiteCopy.select_date')) ?></span>
                                            <span aria-hidden="true" hidden> - </span>
                                            <span class="form-date__end"></span>
                                        </span>
                                        <span class="form-date__annual-value" hidden>
                                            <span class="form-date__annual-caption"><?= esc(lang('SiteCopy.choose_your_annual_policy_start_date')) ?></span>
                                            <span class="form-date__annual-date"></span>
                                        </span>
                                    </span>
                                </button>
                                <div class="form-date__error" id="date-error" role="alert" hidden>
                                    <img class="form-date__error-icon" src="img/form/error.svg" alt="">
                                    <p>
                                        <?= esc(lang('SiteCopy.please_select_the_end_date_of_your_trip')) ?>
                                    </p>
                                </div>
                                <div class="calendar" id="trip-calendar" role="group" aria-label="<?= esc(lang('SiteCopy.select_trip_dates'), 'attr') ?>"
                                    hidden>
                                    <div class="calendar__months">
                                        <section class="calendar__month" aria-labelledby="calendar-month-first">
                                            <div class="calendar__header">
                                                <button class="calendar__nav calendar__nav--prev" type="button"
                                                    aria-label="<?= esc(lang('SiteCopy.previous_month'), 'attr') ?>"></button>
                                                <h3 class="calendar__title" id="calendar-month-first"
                                                    aria-live="polite"></h3>
                                            </div>
                                            <div class="calendar__weekdays" aria-hidden="true">
                                                <span><?= esc(lang('SiteCopy.mon')) ?></span><span><?= esc(lang('SiteCopy.tue')) ?></span><span><?= esc(lang('SiteCopy.wed')) ?></span><span><?= esc(lang('SiteCopy.thu')) ?></span><span><?= esc(lang('SiteCopy.fri')) ?></span><span><?= esc(lang('SiteCopy.sat')) ?></span><span><?= esc(lang('SiteCopy.sun')) ?></span>
                                            </div>
                                            <div class="calendar__days"></div>
                                        </section>
                                        <section class="calendar__month" aria-labelledby="calendar-month-second">
                                            <div class="calendar__header">
                                                <h3 class="calendar__title" id="calendar-month-second"
                                                    aria-live="polite"></h3>
                                                <button class="calendar__nav calendar__nav--next" type="button"
                                                    aria-label="<?= esc(lang('SiteCopy.next_month'), 'attr') ?>"></button>
                                            </div>
                                            <div class="calendar__weekdays" aria-hidden="true">
                                                <span><?= esc(lang('SiteCopy.mon')) ?></span><span><?= esc(lang('SiteCopy.tue')) ?></span><span><?= esc(lang('SiteCopy.wed')) ?></span><span><?= esc(lang('SiteCopy.thu')) ?></span><span><?= esc(lang('SiteCopy.fri')) ?></span><span><?= esc(lang('SiteCopy.sat')) ?></span><span><?= esc(lang('SiteCopy.sun')) ?></span>
                                            </div>
                                            <div class="calendar__days"></div>
                                        </section>
                                    </div>
                                    <button class="calendar__confirm" type="button" hidden>
                                        <span><?= esc(lang('SiteCopy.confirm')) ?></span>
                                        <img class="calendar__confirm-arrow" src="img/form-btn-arrow.svg" alt="">
                                    </button>
                                </div>
                            </div>
                            <label class="form-field__annual">
                                <input class="form-field__annual-checkbox" type="checkbox" name="annual">
                                <span class="form-field__annual-title"><?= esc(lang('SiteCopy.annual_insurance')) ?></span>
                            </label>
                        </div>
                        <div class="form-field__inner form-travelers">
                            <span class="form-field__label form-field__label-travelers"
                                id="travelers-label"><?= esc(lang('SiteCopy.travelers')) ?></span>
                            <button class="form-field__btn form-travelers__toggle" type="button"
                                aria-labelledby="travelers-label travelers-value" aria-expanded="false"
                                aria-controls="travelers-dropdown">
                                <span class="form-field__value" id="travelers-value">
                                    <?= esc(lang('SiteCopy.insurance_for')) ?> <span class="form-field__value-bold form-travelers__value"><?= esc(lang('SiteCopy.1_person')) ?></span>
                                </span>
                                <img class="custom-select__arrow" src="img/form-arrow.svg" alt="">
                            </button>
                            <div class="form-travelers__dropdown" id="travelers-dropdown" role="group"
                                aria-labelledby="travelers-title" hidden>
                                <div class="form-travelers__intro">
                                    <h3 class="form-travelers__title" id="travelers-title"><?= esc(lang('SiteCopy.number_of_travels')) ?></h3>
                                    <p class="form-travelers__description"><?= esc(lang('SiteCopy.how_many_people_are_going_on_the_trip')) ?></p>
                                </div>
                                <div class="form-travelers__counter">
                                    <button class="form-travelers__step form-travelers__step--minus" type="button"
                                        aria-label="<?= esc(lang('SiteCopy.decrease_number_of_travelers'), 'attr') ?>" disabled>−</button>
                                    <output class="form-travelers__count" aria-live="polite"
                                        aria-label="<?= esc(lang('SiteCopy.number_of_travelers'), 'attr') ?>">1</output>
                                    <button class="form-travelers__step form-travelers__step--plus" type="button"
                                        aria-label="<?= esc(lang('SiteCopy.increase_number_of_travelers'), 'attr') ?>">+</button>
                                </div>
                                <button class="form-travelers__confirm" type="button">
                                    <span><?= esc(lang('SiteCopy.confirm')) ?></span>
                                    <img class="form-travelers__confirm-arrow" src="img/form-btn-arrow.svg" alt="">
                                </button>
                            </div>
                        </div>
                        <div class="form-field__inner form-field__inner-quote">
                            <button class="form-field__btn-quote" type="button">
                                <?= esc(lang('Site.getQuote')); ?>
                                <img class="form-field__btn-img" src="img/form-btn-arrow.svg" alt="">
                            </button>
                            <label class="form-field__quote">
                                <input class="form-field__quote-checkbox" type="checkbox" checked name="quote"
                                    data-error="quote-consent-error" required>
                                <span class="form-field__quote-title"><?= esc(lang('SiteCopy.by_clicking_on_get_quote_you_agree_to_the_disc')) ?></span>
                            </label>
                            <p class="form-field__quote-error" id="quote-consent-error" role="alert" hidden>
                                <?= esc(lang('SiteCopy.please_agree_to_the_disclaimer')) ?>
                            </p>
                        </div>
                    </div>
                </form>
                <form class="hero-mobile-form" action="" novalidate>
                    <div class="hero-mobile-form__tabs" role="group" aria-label="<?= esc(lang('SiteCopy.trip_type'), 'attr') ?>">
                        <button class="hero-mobile-form__tab hero-mobile-form__tab--active" type="button"
                            data-trip="single" aria-pressed="true"><?= esc(lang('SiteCopy.single_trip')) ?></button>
                        <button class="hero-mobile-form__tab" type="button" data-trip="annual"
                            aria-pressed="false"><?= esc(lang('SiteCopy.annual')) ?></button>
                    </div>
                    <div class="hero-mobile-form__field-inner hero-mobile-form__country">
                        <button class="hero-mobile-form__field hero-mobile-form__field--select" type="button"
                            aria-label="<?= esc(lang('SiteCopy.select_countries'), 'attr') ?>" aria-expanded="false" aria-controls="mobile-country-dropdown"
                            aria-describedby="mobile-country-error"><span class="hero-mobile-form__country-value"><?= esc(lang('SiteCopy.select_country')) ?></span>
                            <img src="img/mobile/mobile-form-mark.svg" alt="">
                        </button>
                        <div class="hero-mobile-form__country-dropdown" id="mobile-country-dropdown" hidden>
                            <input class="hero-mobile-form__field hero-mobile-form__country-search" type="search"
                                placeholder="<?= esc(lang('SiteCopy.search_country'), 'attr') ?>" aria-label="<?= esc(lang('SiteCopy.search_countries'), 'attr') ?>" autocomplete="off">
                            <ul class="hero-mobile-form__country-options"></ul>
                            <p class="hero-mobile-form__country-empty" hidden><?= esc(lang('SiteCopy.no_countries_found')) ?></p>
                            <button class="hero-mobile-form__country-done" type="button"><?= esc(lang('SiteCopy.done')) ?></button>
                        </div>
                        <p class="hero-mobile-form__error" id="mobile-country-error" hidden><?= esc(lang('SiteCopy.please_select_a_country')) ?></p>
                        <ul class="hero-mobile-form__countries">
                            <li><button type="button"><?= esc(lang('SiteCopy.germany')) ?></button></li>
                            <li><button type="button"><?= esc(lang('SiteCopy.france')) ?></button></li>
                            <li><button type="button"><?= esc(lang('SiteCopy.spain')) ?></button></li>
                            <li><button type="button"><?= esc(lang('SiteCopy.italy')) ?></button></li>
                            <li><button type="button"><?= esc(lang('SiteCopy.greece')) ?></button></li>
                        </ul>
                    </div>
                    <div class="hero-mobile-form__date">
                        <button class="hero-mobile-form__field hero-mobile-form__field--date" type="button"
                            aria-label="<?= esc(lang('SiteCopy.select_trip_dates'), 'attr') ?>" aria-expanded="false" aria-controls="mobile-trip-calendar"
                            aria-describedby="mobile-date-error">
                            <span class="hero-mobile-form__date-value"><?= esc(lang('SiteCopy.select_date')) ?></span>
                            <img src="img/mobile/mobile-form-calendar.svg" alt="">
                        </button>
                        <p class="hero-mobile-form__error" id="mobile-date-error" hidden><?= esc(lang('SiteCopy.please_select_your_trip_dates')) ?>
                        </p>
                        <div class="calendar hero-mobile-form__calendar" id="mobile-trip-calendar" role="group"
                            aria-label="<?= esc(lang('SiteCopy.select_trip_dates'), 'attr') ?>" hidden>
                            <section class="calendar__month" aria-labelledby="mobile-calendar-title">
                                <div class="calendar__header">
                                    <button class="calendar__nav calendar__nav--prev" type="button"
                                        aria-label="<?= esc(lang('SiteCopy.previous_month'), 'attr') ?>"></button>
                                    <h3 class="calendar__title" id="mobile-calendar-title" aria-live="polite"></h3>
                                    <button class="calendar__nav calendar__nav--next" type="button"
                                        aria-label="<?= esc(lang('SiteCopy.next_month'), 'attr') ?>"></button>
                                </div>
                                <div class="calendar__weekdays" aria-hidden="true">
                                    <span><?= esc(lang('SiteCopy.mon')) ?></span><span><?= esc(lang('SiteCopy.tue')) ?></span><span><?= esc(lang('SiteCopy.wed')) ?></span><span><?= esc(lang('SiteCopy.thu')) ?></span>
                                    <span><?= esc(lang('SiteCopy.fri')) ?></span><span><?= esc(lang('SiteCopy.sat')) ?></span><span><?= esc(lang('SiteCopy.sun')) ?></span>
                                </div>
                                <div class="calendar__days"></div>
                            </section>
                            <button class="calendar__confirm" type="button" hidden>
                                <span><?= esc(lang('SiteCopy.confirm')) ?></span>
                                <img class="calendar__confirm-arrow" src="img/form-btn-arrow.svg" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="hero-mobile-form__travelers">
                        <input class="hero-mobile-form__field hero-mobile-form__passenger-value" type="number"
                            name="travelers" min="1" step="1" value="1" inputmode="numeric"
                            aria-label="<?= esc(lang('SiteCopy.number_of_travelers'), 'attr') ?>" aria-describedby="mobile-travelers-error">
                        <div class="hero-mobile-form__counter">
                            <button class="hero-mobile-form__counter-btn hero-mobile-form__counter-btn--plus"
                                type="button" aria-label="<?= esc(lang('SiteCopy.add_passenger'), 'attr') ?>"></button>
                            <button class="hero-mobile-form__counter-btn hero-mobile-form__counter-btn--minus"
                                type="button" aria-label="<?= esc(lang('SiteCopy.remove_passenger'), 'attr') ?>" disabled></button>
                        </div>
                    </div>
                    <p class="hero-mobile-form__error" id="mobile-travelers-error" hidden><?= esc(lang('SiteCopy.please_enter_at_least_one_traveler')) ?></p>
                    <label class="hero-mobile-form__age-label">
                        <input class="hero-mobile-form__field hero-mobile-form__age" type="text" inputmode="numeric"
                            name="applicantAge" placeholder="<?= esc(lang('SiteCopy.your_age'), 'attr') ?>" aria-label="<?= esc(lang('SiteCopy.your_age'), 'attr') ?>"
                            aria-describedby="mobile-age-error">
                    </label>
                    <p class="hero-mobile-form__error" id="mobile-age-error" hidden><?= esc(lang('SiteCopy.please_enter_your_age_as_a_whole_number')) ?></p>
                    <button class="hero-mobile-form__submit" type="submit"><?= esc(lang('SiteCopy.passenger_details')) ?> <img
                            src="img/mobile/mobile-form-arrow.svg" alt=""></button>
                    <p class="hero-mobile-form__status" role="status" hidden></p>
                </form>
            </div>
        </section>
        <section class="why-chose" id="why-choose">
            <div class="container">
                <h2 class="title"><span class="why-chose__title-desktop"><?= esc(lang('SiteCopy.why_choose_goschengen')) ?></span><span
                        class="why-chose__title-mobile"><?= esc(lang('SiteCopy.over_50_companies')) ?></span></h2>
                <div class="swiper why-chose__slider">
                    <ul class="swiper-wrapper why-chose__list">
                        <li class="swiper-slide why-chose__item">
                            <div class="why-chose__item-icon">
                                <img class="why-chose__item-img" src="img/chose1.svg" alt="">
                            </div>
                            <p class="why-chose__item-text"><?= esc(lang('SiteCopy.best_price')) ?></p>
                        </li>
                        <li class="swiper-slide why-chose__item">
                            <div class="why-chose__item-icon">
                                <img class="why-chose__item-img" src="img/chose2.svg" alt="">
                            </div>
                            <p class="why-chose__item-text"><?= esc(lang('SiteCopy.no_deductible')) ?></p>
                        </li>
                        <li class="swiper-slide why-chose__item">
                            <div class="why-chose__item-icon">
                                <img class="why-chose__item-img" src="img/chose3.svg" alt="">
                            </div>
                            <p class="why-chose__item-text"><?= esc(lang('SiteCopy.refund_in_case_of_visa_refusal')) ?></p>
                        </li>
                        <li class="swiper-slide why-chose__item">
                            <div class="why-chose__item-icon">
                                <img class="why-chose__item-img" src="img/chose4.svg" alt="">
                            </div>
                            <p class="why-chose__item-text"><?= esc(lang('SiteCopy.98_approval_rate_for_visas')) ?></p>
                        </li>
                        <li class="swiper-slide why-chose__item">
                            <div class="why-chose__item-icon">
                                <img class="why-chose__item-img" src="img/chose5.svg" alt="">
                            </div>
                            <p class="why-chose__item-text"><?= esc(lang('SiteCopy.accredited_company')) ?></p>
                        </li>
                        <li class="swiper-slide why-chose__item">
                            <div class="why-chose__item-icon">
                                <img class="why-chose__item-img" src="img/chose6.svg" alt="">
                            </div>
                            <p class="why-chose__item-text"><?= esc(lang('SiteCopy.24_7_assistance')) ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="insurance" id="insurance">
            <div class="container">
                <h2 class="title insurance__title"><?= esc(lang('SiteCopy.medical_health_insurance_for_a_schengen_visa_f')) ?></h2>
                <p class="section-note section-note--muted-dot insurance__subtitle"><?= esc(lang('SiteCopy.essential_coverage_tailored_for_any_traveler')) ?></p>
                <div class="swiper insurance__slider">
                    <div class="swiper-wrapper insurance__list">
                        <article class="swiper-slide insurance__card">
                            <div class="insurance__card-icon"><img src="img/insurance-1.svg" alt=""></div>
                            <h3 class="insurance__card-title"><?= esc(lang('SiteCopy.multi_trip_insurance_with_worldwide_coverage')) ?></h3>
                            <p class="insurance__card-text"><?= esc(lang('SiteCopy.we_are_a_company_with_international_experience')) ?></p>
                        </article>
                        <article class="swiper-slide insurance__card">
                            <div class="insurance__card-icon"><img src="img/insurance-2.svg" alt=""></div>
                            <h3 class="insurance__card-title"><?= esc(lang('SiteCopy.schengen_visa_health_insurance_for_any_age')) ?></h3>
                            <p class="insurance__card-text"><?= esc(lang('SiteCopy.our_clients_range_in_age_we_re_happy_to_help_y')) ?></p>
                        </article>
                        <article class="swiper-slide insurance__card">
                            <div class="insurance__card-icon"><img src="img/insurance-3.svg" alt=""></div>
                            <h3 class="insurance__card-title"><?= esc(lang('SiteCopy.schengen_tourist_insurance_for_any_nationality')) ?></h3>
                            <p class="insurance__card-text"><?= esc(lang('SiteCopy.we_offer_you_amazing_travel_conditions_for_bus')) ?></p>
                        </article>
                        <article class="swiper-slide insurance__card">
                            <div class="insurance__card-icon"><img src="img/insurance-4.svg" alt=""></div>
                            <h3 class="insurance__card-title"><?= esc(lang('SiteCopy.schengen_area_travel_insurance_for_visas_and_e')) ?>
                            </h3>
                            <p class="insurance__card-text"><?= esc(lang('SiteCopy.our_extensive_experience_allows_us_to_draft_co')) ?></p>
                        </article>
                    </div>
                    <div class="swiper-pagination insurance__pagination"></div>
                </div>

            </div>
        </section>
        <section class="countries" id="countries">
            <div class="container">
                <div class="countries__header">
                    <div class="countries__heading">
                        <h2 class="title countries__title"><?= esc(lang('SiteCopy.basic_information_about_schengen_countries_and')) ?></h2>
                        <p class="section-note section-note--light countries__note"><?= esc(lang('SiteCopy.all_schengen_countries_require_at_least_a_basi')) ?></p>
                    </div>
                    <div class="swiper countries__slider">
                        <div class="swiper-wrapper countries__list">
                            <article class="swiper-slide country__card">
                                <img class="country__card-img" src="img/country-1.png" alt="">
                                <h3 class="country__card-title"><?= esc(lang('SiteCopy.spain')) ?></h3>
                            </article>
                            <article class="swiper-slide country__card">
                                <img class="country__card-img" src="img/country-2.png" alt="">
                                <h3 class="country__card-title"><?= esc(lang('SiteCopy.germany')) ?></h3>
                            </article>
                            <article class="swiper-slide country__card">
                                <img class="country__card-img" src="img/country-3.png" alt="">
                                <h3 class="country__card-title"><?= esc(lang('SiteCopy.france')) ?></h3>
                            </article>
                            <article class="swiper-slide country__card">
                                <img class="country__card-img" src="img/country-4.png" alt="">
                                <h3 class="country__card-title"><?= esc(lang('SiteCopy.italy')) ?></h3>
                            </article>
                            <article class="swiper-slide country__card">
                                <img class="country__card-img" src="img/country-5.png" alt="">
                                <h3 class="country__card-title"><?= esc(lang('SiteCopy.netherlands')) ?></h3>
                            </article>
                            <article class="swiper-slide country__card">
                                <img class="country__card-img" src="img/country-6.png" alt="">
                                <h3 class="country__card-title"><?= esc(lang('SiteCopy.switzerland')) ?></h3>
                            </article>
                        </div>
                        <div class="swiper-pagination countries__pagination"></div>
                    </div>
                    <div class="countries__descr">
                        <p><?= esc(lang('SiteCopy.travel_medical_insurance_for_schengen_visas_co')) ?></p>
                        <p><?= esc(lang('SiteCopy.the_zone_includes_29_countries_plus_cyprus_whi')) ?></p>
                        <p><?= esc(lang('SiteCopy.popular_destinations_to_buy_schengen_travel_in')) ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="entry-systems" id="entry-systems">
            <div class="container">
                <div class="entry-systems__list">
                    <div class="entry-system" id="ees">
                        <h2 class="title"><?= esc(lang('SiteCopy.ees_entry_exit_system')) ?></h2>
                        <p class="section-note">
                            <?= esc(lang('SiteCopy.the_ees_is_a_new_eu_digital_system_for_recordi')) ?>
                        </p>
                        <h3 class="entry-system__question"><?= esc(lang('SiteCopy.who_does_it_apply_to')) ?></h3>
                        <p class="entry-system__text"><?= esc(lang('SiteCopy.the_ees_applies_to_non_eu_citizens_traveling_o')) ?></p>
                        <h3 class="entry-system__question"><?= esc(lang('SiteCopy.who_is_not_affected_by_the_ees')) ?></h3>
                        <p class="entry-system__text"><?= esc(lang('SiteCopy.as_a_rule_the_system_does_not_apply_to_holders')) ?></p>
                        <div class="media-notice entry-system__media">
                            <img class="media-notice__image entry-system__img" src="img/entry-system-1.png" alt="">
                            <div class="media-notice__panel entry-system__notice">
                                <img class="media-notice__icon" src="img/important.svg" alt="">
                                <div class="media-notice__content">
                                    <h3 class="media-notice__title"><?= esc(lang('SiteCopy.important')) ?></h3>
                                    <p class="media-notice__text"><?= esc(lang('SiteCopy.for_the_ees_system_there_is_no_need_to_fill_ou')) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="entry-system" id="etias">
                        <h2 class="title">ETIAS</h2>
                        <p class="section-note">
                            <?= esc(lang('SiteCopy.etias_is_a_new_pre_entry_authorization_system')) ?>
                        </p>
                        <h3 class="entry-system__question"><?= esc(lang('SiteCopy.who_does_it_apply_to')) ?></h3>
                        <p class="entry-system__text"><?= esc(lang('SiteCopy.etias_applies_to_travelers_from_visa_exempt_co')) ?></p>
                        <h3 class="entry-system__question"><?= esc(lang('SiteCopy.who_is_not_affected_by_etias')) ?></h3>
                        <p class="entry-system__text"><?= esc(lang('SiteCopy.etias_does_not_apply_to_travelers_who_require')) ?></p>
                        <div class="media-notice entry-system__media">
                            <img class="media-notice__image entry-system__img" src="img/entry-system-2.png" alt="">
                            <div class="media-notice__panel entry-system__notice">
                                <img class="media-notice__icon" src="img/important.svg" alt="">
                                <div class="media-notice__content">
                                    <h3 class="media-notice__title"><?= esc(lang('SiteCopy.important')) ?></h3>
                                    <p class="media-notice__text"><?= esc(lang('SiteCopy.the_etias_system_has_not_yet_been_implemented')) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php echo view('includes/visa-check'); ?>
        <section class="visa-types" id="visa-types">
            <div class="container">
                <div class="visa-types__inner">
                    <div class="visa-types__content">
                        <h2 class="title"><?= esc(lang('SiteCopy.the_variety_of_visas_that_require_schengen_med')) ?></h2>
                        <p class="section-note"><?= esc(lang('SiteCopy.not_everyone_knows_that_various_permits_are_av')) ?></p>
                        <div class="media-notice visa-types__media">
                            <img class="media-notice__image" src="img/visa-type.png" alt="">
                            <div class="media-notice__panel">
                                <img class="media-notice__icon" src="img/important.svg" alt="">
                                <div class="media-notice__content">
                                    <h3 class="media-notice__title"><?= esc(lang('SiteCopy.important')) ?></h3>
                                    <p class="media-notice__text"><?= esc(lang('SiteCopy.regardless_of_the_document_you_apply_for_you_w')) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="visa-types__table-wrapper">
                        <table class="visa-types__table">
                            <thead class="visa-types__table-head">
                                <tr class="visa-types__table-row visa-types__table-row--head">
                                    <th class="visa-types__table-heading visa-types__table-heading--permission"
                                        scope="col"><?= esc(lang('SiteCopy.type_of_permission')) ?></th>
                                    <th class="visa-types__table-heading visa-types__table-heading--conditions"
                                        scope="col"><?= esc(lang('SiteCopy.basic_conditions')) ?></th>
                                    <th class="visa-types__table-heading visa-types__table-heading--subtypes"
                                        scope="col">
                                        <?= esc(lang('SiteCopy.main_subtypes_and_tasks')) ?></th>
                                </tr>
                            </thead>
                            <tbody class="visa-types__table-body">
                                <tr class="visa-types__table-row">
                                    <td class="visa-types__table-cell"><?= esc(lang('SiteCopy.type_a')) ?></td>
                                    <td class="visa-types__table-cell"><?= esc(lang('SiteCopy.to_be_in_a_transit_area_for_example_at_an_airp')) ?></td>
                                </tr>
                                <tr class="visa-types__table-row">
                                    <td class="visa-types__table-cell"><?= esc(lang('SiteCopy.type_b')) ?></td>
                                    <td class="visa-types__table-cell"><?= esc(lang('SiteCopy.the_type_that_previously_allowed_exit_from_the')) ?></td>
                                </tr>
                                <tr class="visa-types__table-row">
                                    <td class="visa-types__table-cell visa-types__table-cell--first"><?= esc(lang('SiteCopy.type_d')) ?></td>
                                    <td class="visa-types__table-cell"><?= esc(lang('SiteCopy.multiple_entry_permit_accept_for_long_term_sta')) ?></td>
                                    <td>
                                        <ul class="visa-types__table-tags visa-types__table-tags--type-d">
                                            <li class="visa-types__table-tag"><?= esc(lang('SiteCopy.for_work_mainly')) ?>
                                            </li>
                                            <li class="visa-types__table-tag"><?= esc(lang('SiteCopy.for_studying_as_a_student')) ?></li>
                                            <li class="visa-types__table-tag"><?= esc(lang('SiteCopy.domestic_business')) ?>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="visa-types__table-row">
                                    <td class="visa-types__table-cell"><?= esc(lang('SiteCopy.type_c_short_term')) ?></td>
                                    <td class="visa-types__table-cell"><?= esc(lang('SiteCopy.multiple_entry_or_single_entry_visa_for_short')) ?></td>
                                    <td>
                                        <ul class="visa-types__table-tags">
                                            <li class="visa-types__table-tag"><?= esc(lang('SiteCopy.tourist_visa')) ?></li>
                                            <li class="visa-types__table-tag"><?= esc(lang('SiteCopy.business_visa_business_trips_negotiations_etc')) ?>
                                            </li>
                                            <li class="visa-types__table-tag"><?= esc(lang('SiteCopy.visitor_visa')) ?></li>
                                            <li class="visa-types__table-tag"><?= esc(lang('SiteCopy.study_visa')) ?></li>
                                            <li class="visa-types__table-tag"><?= esc(lang('SiteCopy.medical_visa')) ?></li>
                                            <li class="visa-types__table-tag"><?= esc(lang('SiteCopy.sports_cultural_visa')) ?></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="visa-types__table-row">
                                    <td class="visa-types__table-cell"><?= esc(lang('SiteCopy.ltv_limited_territorial_validity_visa')) ?></td>
                                    <td class="visa-types__table-cell"><?= esc(lang('SiteCopy.grant_permission_to_stay_in_a_specific_country')) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section class="steps" id="steps">
            <div class="container">
                <h2 class="title steps__title"><?= esc(lang('SiteCopy.how_to_save_an_insurance_application')) ?></h2>
                <p class="section-note section-note--light steps__note"><?= esc(lang('SiteCopy.follow_these_steps_to_save_your_application')) ?></p>
                <div class="swiper steps__slider">
                    <ul class="swiper-wrapper steps__list">
                        <li class="swiper-slide steps__item">
                            <div class="steps__item-number"><span>1</span></div>
                            <p class="steps__item-title"><?= esc(lang('SiteCopy.quick_calculation')) ?></p>
                            <p class="steps__item-text"><?= esc(lang('SiteCopy.choose_your_destination_and_dates_to_calculate')) ?></p>
                        </li>
                        <li class="swiper-slide steps__item">
                            <div class="steps__item-number"><span>2</span></div>
                            <p class="steps__item-title"><?= esc(lang('SiteCopy.key_terms')) ?></p>
                            <p class="steps__item-text"><?= esc(lang('SiteCopy.review_the_countries_travel_dates_coverage_and')) ?></p>
                        </li>
                        <li class="swiper-slide steps__item">
                            <div class="steps__item-number"><span>3</span></div>
                            <p class="steps__item-title"><?= esc(lang('SiteCopy.traveler_details')) ?></p>
                            <p class="steps__item-text"><?= esc(lang('SiteCopy.enter_the_traveler_and_contact_details')) ?></p>
                        </li>
                        <li class="swiper-slide steps__item">
                            <div class="steps__item-number"><span>4</span></div>
                            <p class="steps__item-title"><?= esc(lang('SiteCopy.application_saved')) ?></p>
                            <p class="steps__item-text"><?= esc(lang('SiteCopy.save_the_application_to_get_a_reference_number')) ?></p>
                        </li>
                    </ul>
                    <div class="swiper-pagination steps__pagination"></div>
                </div>
            </div>
        </section>
        <section class="coverage" id="coverage">
            <div class="container">
                <div class="coverage__wrapper">
                    <div class="coverage__content">
                        <h2 class="title"><?= esc(lang('SiteCopy.what_does_schengen_countries_insurance_cover')) ?></h2>
                        <p class="section-note coverage__note"><?= esc(lang('SiteCopy.the_policy_you_receive_from_our_company_will_p')) ?></p>
                        <a class="coverage__btn" href="/#hero">
                            <?= esc(lang('SiteCopy.get_a_quote')) ?>
                            <img class="coverage__btn-arrow" src="img/coverage-btn.svg" alt="">
                        </a>
                        <div class="media-notice coverage__media">
                            <img class="media-notice__image" src="img/coverage.png" alt="">
                            <div class="media-notice__panel">
                                <img class="media-notice__icon" src="img/important-white.svg" alt="">
                                <div class="media-notice__content">
                                    <h3 class="media-notice__title"><?= esc(lang('SiteCopy.important')) ?></h3>
                                    <p class="media-notice__text"><?= esc(lang('SiteCopy.the_best_schengen_travel_insurance_terms_may_v')) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coverage__table-box">
                        <div class="coverage__table-wrapper">
                            <table class="coverage__table">
                                <thead class="coverage__table-head">
                                    <tr>
                                        <th class="coverage__table-heading coverage__table-heading--coverage"
                                            scope="col"><?= esc(lang('SiteCopy.coverage')) ?></th>
                                        <th class="coverage__table-heading coverage__table-heading--basic" scope="col">
                                            <?= esc(lang('SiteCopy.basic_conditions')) ?></th>
                                    </tr>
                                </thead>
                                <tbody class="coverage__table-body">
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.medical_assistance')) ?></span></th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.schengen_travel_insurance_covers_treatment_for')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.inpatient_treatment_services_in_a_hospital')) ?></span></th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.basic_schengen_insurance_covers_both_outpatien')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.covid_19_quarantine_mandatory_observation')) ?></span></th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.if_local_law_requires_mandatory_observation_or')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.evacuation_ambulance_and_transportation')) ?></span></th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.schengen_travel_insurance_includes_emergency_a')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.funeral_services_and_repatriation')) ?></span>
                                        </th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.the_policy_covers_repatriation_of_the_body_to')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.accidents')) ?></span></th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.schengen_insurance_provides_compensation_in_ca')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.emergency_pregnancy_complications')) ?></span>
                                        </th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.basic_travel_insurance_for_schengen_also_cover')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.loss_of_baggage')) ?></span></th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.if_an_airline_loses_your_checked_baggage_durin')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.flight_delay')) ?></span></th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.if_your_flight_is_delayed_for_more_than_4_hour')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.loss_of_documents')) ?></span></th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.if_your_documents_are_lost_during_the_trip_sch')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.liability_to_third_parties')) ?></span></th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.the_policy_includes_personal_liability_coverag')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.legal_and_translation_assistance')) ?></span>
                                        </th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.schengen_insurance_also_includes_legal_and_tra')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.return_ticket')) ?></span></th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.in_certain_insured_events_the_policy_may_also')) ?></td>
                                    </tr>
                                    <tr class="coverage__table-row">
                                        <th class="coverage__table-cell coverage__table-cell--name"><span
                                                class="coverage__table-name"><?= esc(lang('SiteCopy.telephone_communication_expenses')) ?></span>
                                        </th>
                                        <td class="coverage__table-cell"><?= esc(lang('SiteCopy.if_you_need_to_contact_the_assistance_service')) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="exclusions" id="exclusions">
            <div class="container">
                <div class="exclusions__inner">
                    <div class="exclusions__content">
                        <h2 class="title exclusions__title"><?= esc(lang('SiteCopy.what_doesn_t_cover_cheap_travel_insurance_for')) ?>
                        </h2>
                        <p class="section-note exclusions__note"><?= esc(lang('SiteCopy.despite_the_extensive_list_of_situations_in_wh')) ?></p>
                        <img class="exclusions__img" src="img/exclusions.png" alt="">
                    </div>
                    <div class="exclusions__details">
                        <ul class="exclusions__list">
                            <li class="exclusions__item"><?= esc(lang('SiteCopy.chronic_and_congenital_diseases_diagnosed_befo')) ?></li>
                            <li class="exclusions__item"><?= esc(lang('SiteCopy.oncology_and_other_serious_illnesses_only_if_t')) ?></li>
                            <li class="exclusions__item"><?= esc(lang('SiteCopy.routine_medical_examinations_and_preventive_te')) ?></li>
                            <li class="exclusions__item"><?= esc(lang('SiteCopy.pregnancy_after_27_weeks_and_childbirth')) ?></li>
                            <li class="exclusions__item"><?= esc(lang('SiteCopy.implants_and_prosthetics')) ?></li>
                            <li class="exclusions__item"><?= esc(lang('SiteCopy.services_of_unlicensed_specialists')) ?></li>
                            <li class="exclusions__item"><?= esc(lang('SiteCopy.sports_and_extreme_sports_we_have_specially_de')) ?></li>
                            <li class="exclusions__item"><?= esc(lang('SiteCopy.situations_caused_by_alcohol_or_drug_intoxicat')) ?></li>
                            <li class="exclusions__item"><?= esc(lang('SiteCopy.intentional_violation_of_the_law')) ?></li>
                            <li class="exclusions__item"><?= esc(lang('SiteCopy.emergencies_such_as_natural_disasters_riots_an')) ?></li>
                            <li class="exclusions__item"><?= esc(lang('SiteCopy.work_related_injuries_occur_due_to_violations')) ?></li>
                        </ul>
                        <p class="exclusions__text"><?= esc(lang('SiteCopy.low_cost_schengen_travel_insurance_doesn_t_mea')) ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about" id="about">
            <div class="container">
                <h2 class="title about__title"><?= esc(lang('SiteCopy.about_goschengen')) ?></h2>
                <p class="section-note about__note"><?= esc(lang('SiteCopy.a_simple_and_convenient_online_service_for_buy')) ?></p>
                <div class="about__main">
                    <div class="about__column about__column--left">
                        <div class="about__card about__card--wide about__card--image">
                            <img class="about__img" src="img/about-1.png" alt="">
                        </div>
                        <div class="about__card">
                            <h3 class="about__card-title"><?= esc(lang('SiteCopy.policies_issued_50_000')) ?></h3>
                            <p class="about__card-text"><?= esc(lang('SiteCopy.thousands_of_travelers_use_goschengen_to_buy_i')) ?></p>
                        </div>
                        <div class="about__card about__card--tall about__card--accent">
                            <p class="about__card-value">172</p>
                            <h3 class="about__card-title"><?= esc(lang('SiteCopy.an_international_network_of_172_medical_facili')) ?></h3>
                            <p class="about__card-text"><?= esc(lang('SiteCopy.get_access_to_insurance_coverage_supported_by')) ?>
                            </p>
                        </div>
                        <div class="about__card">
                            <h3 class="about__card-title"><?= esc(lang('SiteCopy.customer_satisfaction_98')) ?></h3>
                            <p class="about__card-text"><?= esc(lang('SiteCopy.users_appreciate_the_service_for_its_speed_con')) ?></p>
                        </div>
                        <div class="about__card about__card--image about__card--large">
                            <img class="about__img" src="img/about-3.png" alt="">
                        </div>
                        <div class="about__card about__card--dark about__card--large">
                            <h3 class="about__card-title"><?= esc(lang('SiteCopy.online_calculator')) ?></h3>
                            <p class="about__card-text"><?= esc(lang('SiteCopy.instant_online_quote_calculate_the_exact_price')) ?></p>
                        </div>
                    </div>
                    <div class="about__column about__column--right">
                        <div class="about__card about__card--tall about__card--dark">
                            <p class="about__card-value">100%</p>
                            <h3 class="about__card-title"><?= esc(lang('SiteCopy.online_process')) ?></h3>
                            <p class="about__card-text"><?= esc(lang('SiteCopy.the_entire_process_from_submitting_your_applic')) ?></p>
                        </div>
                        <div class="about__card">
                            <h3 class="about__card-title"><?= esc(lang('SiteCopy.always_available_24_7')) ?></h3>
                            <p class="about__card-text"><?= esc(lang('SiteCopy.the_service_is_available_at_any_time_so_users')) ?></p>
                        </div>
                        <div class="about__card">
                            <h3 class="about__card-title"><?= esc(lang('SiteCopy.average_application_time_3_min')) ?></h3>
                            <p class="about__card-text"><?= esc(lang('SiteCopy.a_short_and_intuitive_form_helps_travelers_qui')) ?></p>
                        </div>
                        <div class="about__card about__card--wide about__card--image">
                            <img class="about__img" src="img/about-2.png" alt="">
                        </div>
                        <div class="about__card about__card--accent about__card--large" id="visa-refusal">
                            <h3 class="about__card-title"><?= esc(lang('SiteCopy.visa_refusal')) ?></h3>
                            <p class="about__card-text"><?= esc(lang('SiteCopy.refunds_in_case_of_visa_refusal_if_a_visa_appl')) ?></p>
                        </div>
                        <div class="about__card about__card--large">
                            <h3 class="about__card-title"><?= esc(lang('SiteCopy.everything_you_need_in_one_place')) ?></h3>
                            <p class="about__card-text"><?= esc(lang('SiteCopy.trusted_for_schengen_travel_planning_goschenge')) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="destinations" id="destinations">
            <div class="container">
                <div class="destinations__inner">
                    <div class="destinations__content">
                        <h2 class="title destinations__title">
                            <span class="destinations__title-desktop"><?= esc(lang('SiteCopy.travel_insurance_for_a_schengen_visa_popular_d')) ?></span>
                            <span class="destinations__title-mobile"><?= esc(lang('SiteCopy.about_the_company')) ?></span>
                        </h2>
                        <p class="section-note destinations__note destinations__note--desktop"><?= esc(lang('SiteCopy.a_simple_and_convenient_online_service_for_buy')) ?></p>
                        <ul class="destinations__note-mobile">
                            <li><?= esc(lang('SiteCopy.schengen_visa_insurance_is_a_mandatory_require')) ?></li>
                            <li><?= esc(lang('SiteCopy.people_searching_for_health_insurance_schengen')) ?></li>
                        </ul>
                        <p class="destinations__text"><?= esc(lang('SiteCopy.from_the_usa_to_south_africa_we_are_ready_to_p')) ?></p>
                        <ul class="destinations__list">
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/india.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.india')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/uk.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.uk')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/kuwait.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.kuwait')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/pakistan.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.pakistan')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/uae.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.uae')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/philippines.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.philippines')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/bahrain.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.bahrain')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/bangladesh.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.bangladesh')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/canada.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.canada')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/nigeria.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.nigeria')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/singapore.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.singapore')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/dubai.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.dubai')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/australia.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.australia')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/kenya.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.kenya')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/qatar.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.qatar')) ?></p>
                            </li>
                            <li class="destinations__item">
                                <img class="destinations__flag" src="img/flags/indonesia.png" alt="">
                                <p class="destinations__country"><?= esc(lang('SiteCopy.indonesia')) ?></p>
                            </li>
                        </ul>
                    </div>
                    <div class="media-notice destinations__media">
                        <img class="media-notice__image" src="img/destination.png" alt="">
                        <div class="media-notice__panel destinations__notice">
                            <img class="media-notice__icon" src="img/important-white.svg" alt="">
                            <div class="media-notice__content">
                                <h3 class="media-notice__title destination-notice__title"><?= esc(lang('SiteCopy.important')) ?></h3>
                                <p class="media-notice__text destination-notice__text"><?= esc(lang('SiteCopy.schengen_visa_insurance_for_tourists_workers_o')) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="expert" id="expert">
            <div class="container">
                <h2 class="title expert__title"><?= esc(lang('SiteCopy.expert_opinion')) ?></h2>
                <p class="section-note expert__note"><?= esc(lang('SiteCopy.clear_advice_rooted_in_real_experience')) ?></p>
                <blockquote class="expert__quote">
                    <img class="expert__icon" src="img/quotes.svg" alt="">
                    <p class="expert__text"><?= esc(lang('SiteCopy.getting_travel_insurance_for_a_schengen_visa_i')) ?>
                    </p>
                </blockquote>
                <button class="expert__read-more" type="button" aria-expanded="false"><?= esc(lang('SiteCopy.read_more')) ?></button>
                <article class="expert__card">
                    <div class="expert__card-wrapper">
                        <img class="expert__card-img" src="img/expert-photo.png" alt="">
                        <div class="expert__card-content">
                            <p class="expert__card-title">Nullam aliquet</p>
                            <p class="expert__card-text"><?= esc(lang('SiteCopy.head_of_sales_department')) ?></p>
                        </div>
                    </div>
                    <ul class="expert__card-list">
                        <li class="expert__card-item">
                            <a class="expert__card-link" href="#">
                                <img class="expert__card-icon" src="img/facebook.svg" alt="<?= esc(lang('SiteCopy.facebook'), 'attr') ?>">
                            </a>
                        </li>
                        <li class="expert__card-item">
                            <a class="expert__card-link" href="#">
                                <img class="expert__card-icon" src="img/instagram.svg" alt="<?= esc(lang('SiteCopy.instagram'), 'attr') ?>">
                            </a>
                        </li>
                        <li class="expert__card-item">
                            <a class="expert__card-link" href="#">
                                <img class="expert__card-icon" src="img/in.svg" alt="<?= esc(lang('SiteCopy.in'), 'attr') ?>">
                            </a>
                        </li>
                    </ul>
                </article>
                <div class="expert__controls">
                    <button class="expert__control" type="button" aria-label="<?= esc(lang('SiteCopy.previous_expert'), 'attr') ?>">
                        <img src="img/carers/arrow-prew.svg" alt="">
                    </button>
                    <button class="expert__control" type="button" aria-label="<?= esc(lang('SiteCopy.next_expert'), 'attr') ?>">
                        <img src="img/carers/arrow-next.svg" alt="">
                    </button>
                </div>
            </div>
        </section>
        <section class="benefits" id="benefits">
            <div class="container">
                <h2 class="title"><?= esc(lang('SiteCopy.benefits_of_working_with_us')) ?></h2>
                <p class="section-note benefits__note">
                    <?= esc(lang('SiteCopy.a_concise_look_at_what_sets_our_service_apart')) ?>
                </p>
                <div class="swiper benefits__slider">
                    <ul class="swiper-wrapper benefits__cards">
                        <li class="swiper-slide benefits__card">
                            <img class="benefits__card-img" src="img/benefit-1.svg" alt="">
                            <div class="benefits__card-inner">
                                <h3 class="benefits__card-title"><?= esc(lang('SiteCopy.available_for')) ?> <br> <?= esc(lang('SiteCopy.everyone')) ?></h3>
                                <p class="benefits__card-text"><?= esc(lang('SiteCopy.we_are_open_to_everyone_regardless_of_location')) ?>
                                    <br>
                                    <?= esc(lang('SiteCopy.gender_or_nationality')) ?>
                                </p>
                            </div>
                        </li>
                        <li class="swiper-slide benefits__card">
                            <img class="benefits__card-img" src="img/benefit-2.svg" alt="">
                            <div class="benefits__card-inner">
                                <h3 class="benefits__card-title"><?= esc(lang('SiteCopy.guaranteed_quality')) ?> <br> <?= esc(lang('SiteCopy.legality')) ?></h3>
                                <p class="benefits__card-text"><?= esc(lang('SiteCopy.guaranteed_quality_and_contract_legitimacy')) ?></p>
                            </div>
                        </li>
                        <li class="swiper-slide benefits__card">
                            <img class="benefits__card-img" src="img/benefit-3.svg" alt="">
                            <div class="benefits__card-inner">
                                <h3 class="benefits__card-title"><?= esc(lang('SiteCopy.accepted_by_european_embassies')) ?></h3>
                                <p class="benefits__card-text"><?= esc(lang('SiteCopy.embassies_in_europe_accept_our_documents')) ?></p>
                            </div>
                        </li>
                        <li class="swiper-slide benefits__card">
                            <img class="benefits__card-img" src="img/benefit-4.svg" alt="">
                            <div class="benefits__card-inner">
                                <h3 class="benefits__card-title"><?= esc(lang('SiteCopy.human_support_in_emergencies')) ?></h3>
                                <p class="benefits__card-text"><?= esc(lang('SiteCopy.a_human_approach_and_support_in_emergency_situ')) ?></p>
                            </div>
                        </li>
                        <li class="swiper-slide benefits__card">
                            <img class="benefits__card-img" src="img/benefit-5.svg" alt="">
                            <div class="benefits__card-inner">
                                <h3 class="benefits__card-title"><?= esc(lang('SiteCopy.best')) ?> <br><?= esc(lang('SiteCopy.coverage_terms')) ?></h3>
                                <p class="benefits__card-text"><?= esc(lang('SiteCopy.the_most_favorable_terms_considering_the_list')) ?>
                                    <br> <?= esc(lang('SiteCopy.cases')) ?>
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-pagination benefits__pagination"></div>
                </div>
            </div>
        </section>
        <section class="documents" id="documents">
            <div class="container">
                <h2 class="title documents__title"><?= esc(lang('SiteCopy.universal_list_of_documents_for_obtaining_a_sc')) ?></h2>
                <p class="section-note documents__note"><?= esc(lang('SiteCopy.individual_country_regulations_may_require_add')) ?></p>
                <div class="documents__inner">
                    <img class="documents__img" src="img/documents.png" alt="">
                    <div class="documents__content">
                        <ul class="documents__list">
                            <li class="documents__item"><span class="documents__item-text"><?= esc(lang('SiteCopy.an_international_passport_and_its_copy')) ?></span></li>
                            <li class="documents__item"><span class="documents__item-text"><?= esc(lang('SiteCopy.completed_visa_application')) ?></span>
                            </li>
                            <li class="documents__item"><span class="documents__item-text"><?= esc(lang('SiteCopy.two_standard_photographs')) ?></span>
                            </li>
                            <li class="documents__item"><span class="documents__item-text"><?= esc(lang('SiteCopy.a_regular_passport_and_its_copy')) ?></span></li>
                            <li class="documents__item"><span class="documents__item-text"><?= esc(lang('SiteCopy.employment_certificate')) ?></span>
                            </li>
                            <li class="documents__item"><span class="documents__item-text"><?= esc(lang('SiteCopy.proof_of_travel_funding')) ?></span>
                            </li>
                            <li class="documents__item"><span class="documents__item-text"><?= esc(lang('SiteCopy.round_trip_tickets')) ?></span>
                            </li>
                            <li class="documents__item"><span class="documents__item-text"><?= esc(lang('SiteCopy.accommodation_confirmation')) ?></span>
                            </li>
                            <li class="documents__item"><span class="documents__item-text"><?= esc(lang('SiteCopy.special_medical_insurance')) ?></span>
                            </li>
                            <li class="documents__item"><span class="documents__item-text"><?= esc(lang('SiteCopy.additional_supporting_documents')) ?></span></li>
                        </ul>
                        <p class="documents__text"><?= esc(lang('SiteCopy.once_you_have_prepared_these_documents_you_can')) ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="insurance-terms" id="insurance-terms">
            <div class="container">
                <h2 class="title insurance-terms__title"><?= esc(lang('SiteCopy.schengen_visa_insurance_prices_terms_coverage')) ?></h2>
                <p class="section-note insurance-terms__note"><?= esc(lang('SiteCopy.be_sure_to_read_the_contract_before_signing_we')) ?></p>
                <div class="swiper insurance-terms__slider">
                    <ul class="swiper-wrapper insurance-terms__grid">
                        <li class="swiper-slide insurance-terms__card">
                            <div class="insurance-terms__icon">
                                <img src="img/terms/icon-1.svg" alt="">
                            </div>
                            <p class="insurance-terms__text"><?= esc(lang('SiteCopy.the_insurance_coverage_starts_at_30000_euro_or')) ?></p>
                        </li>
                        <li class="swiper-slide insurance-terms__card">
                            <div class="insurance-terms__icon">
                                <img src="img/terms/icon-2.svg" alt="">
                            </div>
                            <p class="insurance-terms__text"><?= esc(lang('SiteCopy.the_basic_travel_insurance_for_schengen_countr')) ?></p>
                        </li>
                        <li class="swiper-slide insurance-terms__card insurance-terms__card--air">
                            <p class="insurance-terms__text"><?= esc(lang('SiteCopy.you_can_insure_people_from_1_to_100_years_old')) ?></p>
                        </li>
                        <li class="swiper-slide insurance-terms__card">
                            <div class="insurance-terms__icon">
                                <img src="img/terms/icon-3.svg" alt="">
                            </div>
                            <p class="insurance-terms__text"><?= esc(lang('SiteCopy.policy_is_valid_in_all_countries_but_the_list')) ?></p>
                        </li>
                        <li class="swiper-slide insurance-terms__card">
                            <div class="insurance-terms__icon">
                                <img src="img/terms/icon-4.svg" alt="">
                            </div>
                            <p class="insurance-terms__text"><?= esc(lang('SiteCopy.covered_illness_services_include_covid_19_trea')) ?></p>
                        </li>
                        <li class="swiper-slide insurance-terms__card insurance-terms__card--accent">
                            <div class="insurance-terms__icon">
                                <img src="img/terms/icon-5.svg" alt="">
                            </div>
                            <p class="insurance-terms__text"><?= esc(lang('SiteCopy.the_standard_contract_has_a_0_deductible_and_c')) ?></p>
                        </li>
                        <li class="swiper-slide insurance-terms__card insurance-terms__card--luggage">
                            <p class="insurance-terms__text"><?= esc(lang('SiteCopy.our_cheap_travel_insurance_to_schengen_is_suit')) ?></p>
                        </li>
                        <li class="swiper-slide insurance-terms__card">
                            <div class="insurance-terms__icon">
                                <img src="img/terms/icon-6.svg" alt="">
                            </div>
                            <p class="insurance-terms__text"><?= esc(lang('SiteCopy.100_money_back_guarantee_for_cancellation_of_t')) ?></p>
                        </li>
                        <li class="swiper-slide insurance-terms__card insurance-terms__card--accent">
                            <div class="insurance-terms__icon">
                                <img src="img/terms/icon-7.svg" alt="">
                            </div>
                            <p class="insurance-terms__text"><?= esc(lang('SiteCopy.the_document_specifies_the_validity_period_for')) ?></p>
                        </li>
                        <li class="swiper-slide insurance-terms__card">
                            <div class="insurance-terms__icon">
                                <img src="img/terms/icon-8.svg" alt="">
                            </div>
                            <p class="insurance-terms__text"><?= esc(lang('SiteCopy.you_can_expand_your_policy_by_adding_additiona')) ?></p>
                        </li>
                    </ul>
                    <div class="swiper-pagination insurance-terms__pagination"></div>
                </div>
                <div class="insurance-terms__footer">
                    <p class="insurance-terms__footer-text"><?= esc(lang('SiteCopy.you_can_ask_our_specialist_further_questions_d')) ?></p>
                    <a class="insurance-terms__footer-link" href="#contact"><?= esc(lang('SiteCopy.contact_support')) ?>
                        <img src="img/terms/headphones.svg" alt="">
                    </a>
                </div>
            </div>
        </section>
        <section class="shengen-contries" id="schengen-countries">
            <div class="container">
                <h2 class="title shengen-contries__title"><?= esc(lang('SiteCopy.30_countries_that_are_part_of_the_schengen_are')) ?></h2>
                <p class="section-note shengen-contries__note"><?= esc(lang('SiteCopy.a_brief_overview_of_the_unified_travel_zone')) ?></p>
                <ul class="shengen-contries__grid">
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.austria')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-1.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.belgium')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-2.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.bulgaria')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-3.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.croatia')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-4.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.cyprus')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-5.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.czech_republic')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-6.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.denmark')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-7.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.estonia')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-8.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.finland')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-9.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.france')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-10.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.germany')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-11.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.greece')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-12.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.hungary')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-13.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.iceland')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-14.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.italy')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-15.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.latvia')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-16.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.lithuania')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-17.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.liechtenstein')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-18.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.luxembourg')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-19.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.malta')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-20.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.netherlands')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-21.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.norway')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-22.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.poland')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-29.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.romania')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-23.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.portugal')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-24.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.slovakia')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-25.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.slovenia')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-26.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.spain')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-27.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.sweden')) ?></p>
                    </li>
                    <li class="shengen-contries__card">
                        <img class="shengen-contries__card-img" src="img/flags-30/flag-28.png" alt="">
                        <p class="shengen-contries__card-text"><?= esc(lang('SiteCopy.switzerland')) ?></p>
                    </li>
                </ul>
                <button class="shengen-contries__more" type="button" aria-expanded="false"><?= esc(lang('SiteCopy.read_more')) ?></button>
            </div>
        </section>
        <section class="reviews" id="reviews">
            <div class="container">
                <h2 class="title reviews__title"><?= esc(lang('SiteCopy.reviews')) ?></h2>
                <p class="section-note reviews__note"><?= esc(lang('SiteCopy.read_reviews_about_goschengen')) ?></p>
                <div class="swiper reviews__slider">
                    <ul class="reviews__list">
                        <li class="reviews__item">
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/li.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.li_wei')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.singapore')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.super_convenient_online_calculator_i_compared')) ?></p>
                        </li>
                        <li class="reviews__item">
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/lachlan.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.lachlan_murray')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.australia')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.i_picked_this_policy_specifically_because_of_t')) ?></p>
                        </li>
                        <li class="reviews__item">
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/sarah.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.sarah_jenkins')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.usa')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.was_looking_for_travel_insurance_for_rome_i_wa')) ?></p>
                        </li>
                        <li class="reviews__item">
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/david.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-4.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.david_thompson')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.canada')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.had_a_bit_of_a_headache_at_checkout_my_card_fa')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/kenji.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.kenji_sato')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.japan')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.travelled_to_vienna_and_had_a_medical_emergenc')) ?>
                            </p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/oliver.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-4.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.oliver_wright')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.britain')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.got_a_policy_for_greece_from_the_uk_the_site_h')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/lucas.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.lucas_rocha')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.brazil')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.picked_up_this_insurance_for_a_trip_to_visit_m')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/fatima.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.fatima_mansoori')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.uae')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.the_price_for_uae_is_very_low_i_had_some_quest')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/maria.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-4.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.maria_theresa')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.philippines')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.we_were_planning_a_big_family_trip_to_europe_a')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/isabella.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.isabella_silva')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.brazil')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.we_traveled_to_spain_and_unfortunately_there_w')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/james.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.james_wilson')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.canada')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.my_go_to_for_every_trip_was_heading_out_to_vis')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/emily.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.emily_bennett')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.great_britain')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.flying_to_see_friends_in_portugal_and_my_fligh')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/tyler.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-4.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.tyler_henderson')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.usa')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.had_a_bit_of_a_scare_at_first_because_my_polic')) ?>
                            </p>
                            <p class="reviews__text">
                                <?= esc(lang('SiteCopy.the_insurance_really_saved_my_life_in_italy_i')) ?>
                            </p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/mason.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-4.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.mason_taylor')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.canada')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.the_website_was_a_bit_laggy_on_the_mobile_vers')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/isham.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.ishaan_sharma')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.india')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.got_my_policy_last_minute_right_before_heading')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/zoe.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-4.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.zoe_jenkins')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.australia')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.tried_paying_three_times_and_it_wouldn_t_go_th')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/arjun.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.arjun_sharma')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.india')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.applied_for_my_spain_visa_and_this_policy_was')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/aisha.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.aisha_al_saud')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.saudi_arabia')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.brilliant_service_i_opted_for_the_worldwide_co')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/chen.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.chen_ming')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.china')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.got_a_bit_mixed_up_with_the_website_options_at')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/vikram.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.vikram_swaminathan')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.india')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.i_bought_this_policy_purely_for_the_visa_becau')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/chen-long.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.chen_long')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.china')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.i_m_used_to_high_tech_services_in_shanghai_so')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/noura.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.noura_al_saeed')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.kuwait')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.for_our_summer_trip_to_marbella_i_was_looking')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/deepali.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.deepali_singh')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.india')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.i_travel_a_lot_for_leisure_and_can_t_stand_hid')) ?></p>
                        </li>
                        <li class="reviews__item" hidden>
                            <div class="reviews__header">
                                <img class="reviews__avatar" src="img/reviews/vikram-lyer.png" alt="">
                                <div class="reviews__author">
                                    <img class="reviews__rating" src="img/reviews/stars-5.svg" alt="">
                                    <p class="reviews__name"><?= esc(lang('SiteCopy.vikram_iyer')) ?></p>
                                    <p class="reviews__location"><?= esc(lang('SiteCopy.india')) ?></p>
                                </div>
                            </div>
                            <p class="reviews__text"><?= esc(lang('SiteCopy.i_spent_a_lot_of_time_searching_for_a_plan_for')) ?></p>
                        </li>
                    </ul>
                    <div class="swiper-pagination reviews__pagination"></div>
                </div>
                <button class="reviews__btn" type="button"><?= esc(lang('SiteCopy.see_all_reviews')) ?></button>
            </div>
        </section>
        <section class="rules" id="rules">
            <div class="container">
                <h2 class="title"><?= esc(lang('SiteCopy.schengen_area_entry_rules')) ?></h2>
                <p class="section-note rules__note"><?= esc(lang('SiteCopy.learn_more_about_the_rules_for_entering_the_sc')) ?></p>
                <div class="swiper rules__slider">
                    <ul class="rules__list">
                        <li class="rules__item">
                            <img class="rules__img" src="img/rules.png" alt="">
                            <div class="rules__wrapper">
                                <h3 class="rules__subtitle">Nullam aliquet</h3>
                                <p class="rules__text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                    vehicula
                                    nulla, eu dictum odio molestie id.</p>
                                <a class="rules__link" href="#"><?= esc(lang('SiteCopy.read_more')) ?>
                                    <img src="img/rules-arrow.svg" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="rules__item">
                            <img class="rules__img" src="img/rules.png" alt="">
                            <div class="rules__wrapper">
                                <h3 class="rules__subtitle">Nullam aliquet</h3>
                                <p class="rules__text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                    vehicula
                                    nulla, eu dictum odio molestie id.</p>
                                <a class="rules__link" href="#"><?= esc(lang('SiteCopy.read_more')) ?>
                                    <img src="img/rules-arrow.svg" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="rules__item">
                            <img class="rules__img" src="img/rules.png" alt="">
                            <div class="rules__wrapper">
                                <h3 class="rules__subtitle">Nullam aliquet</h3>
                                <p class="rules__text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                    vehicula
                                    nulla, eu dictum odio molestie id.</p>
                                <a class="rules__link" href="#"><?= esc(lang('SiteCopy.read_more')) ?>
                                    <img src="img/rules-arrow.svg" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="rules__item">
                            <img class="rules__img" src="img/rules.png" alt="">
                            <div class="rules__wrapper">
                                <h3 class="rules__subtitle">Nullam aliquet</h3>
                                <p class="rules__text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                    vehicula
                                    nulla, eu dictum odio molestie id.</p>
                                <a class="rules__link" href="#"><?= esc(lang('SiteCopy.read_more')) ?>
                                    <img src="img/rules-arrow.svg" alt="">
                                </a>
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-pagination rules__pagination"></div>
                </div>
            </div>
        </section>

    <?php echo view('includes/faq'); ?>
    <?php echo view('includes/contact'); ?>
    </main
    <?php echo view('includes/footer'); ?>
    <?php echo view('includes/language-menu'); ?>
    <?php echo view('includes/insurance-popup'); ?>
    <?php echo view('includes/scripts'); ?>
</body>

</html>
