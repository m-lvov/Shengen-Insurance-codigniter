<?php
$pageTitle = lang('SiteCopy.quote');
$currentPage = '';
echo view ('includes/header', [
        'pageTitle' => $pageTitle,
        'currentPage' => $currentPage,
]);
?>
    <main class="quote-main" data-screen="quote">
        <nav class="quote-navigation" aria-label="<?= esc(lang('SiteCopy.insurance_quote_sections'), 'attr') ?>">
            <div class="container">
                <div class="quote-navigation__inner">
                    <button class="quote-navigation__button quote-navigation__button--active" type="button"
                        data-quote-screen="0" aria-current="page"><?= esc(lang('SiteCopy.insurance')) ?></button>
                    <button class="quote-navigation__button" type="button" data-quote-screen="1"><?= esc(lang('SiteCopy.add_ons')) ?></button>
                    <button class="quote-navigation__button" type="button" data-quote-screen="2"><?= esc(lang('SiteCopy.coverage')) ?></button>
                </div>
            </div>
        </nav>
        <section class="quote-page" tabindex="-1">
            <div class="container">
                <button class="quote-page__back" type="button">
                    <img src="img/quote/back-arrow.svg" alt="">
                    <span><?= esc(lang('SiteCopy.back')) ?></span>
                </button>
                <div class="quote-page__inner">
                    <div class="quote-page__progress">
                        <div class="quote-page__steps">
                            <span class="quote-page__step quote-page__step--active"></span>
                            <span class="quote-page__step quote-page__step--active"></span>
                            <span class="quote-page__step"></span>
                            <span class="quote-page__step"></span>
                        </div>
                        <p class="quote-page__step-text"><?= esc(lang('SiteCopy.step')) ?> <span class="quote-page__step-text-swap">2</span> <?= esc(lang('SiteCopy.of_4')) ?></p>
                    </div>
                    <div class="quote-page__summary">
                        <div class="quote-page__summary-item quote-page__summary-item--country" tabindex="0"
                            aria-describedby="quote-country-tooltip">
                            <img src="img/quote/map.svg" alt="">
                            <span class="quote-page__summary-item__country">
                                <?= esc(lang('SiteCopy.germany')) ?>
                            </span>
                            <span class="quote-page__country-tooltip" id="quote-country-tooltip" role="tooltip" hidden></span>
                        </div>
                        <div class="quote-page__summary-item">
                            <img src="img/quote/calendar.svg" alt="">
                            <span class="quote-page__summary-item__date">
                                <?= esc(lang('SiteCopy.mar_26_mar_31_2026')) ?>
                            </span>

                        </div>
                        <div class="quote-page__summary-item">
                            <img src="img/quote/time.svg" alt="">
                            <span class="quote-page__summary-item__days">
                                <?= esc(lang('SiteCopy.4_days')) ?>
                            </span>

                        </div>
                        <div class="quote-page__summary-item">
                            <img src="img/quote/people.svg" alt="">
                            <span class="quote-page__summary-item__traveler">
                                <?= esc(lang('SiteCopy.1_traveler')) ?>
                            </span>

                        </div>
                    </div>
                    <!-- Coverage -->
                    <div class="quote-page__card">
                        <h1 class="quote-page__title">
                            <img src="img/quote/info-1.svg" alt="">
                            <?= esc(lang('SiteCopy.insurance_coverage')) ?>
                        </h1>
                        <div class="quote-page__coverage">
                            <button class="quote-page__coverage-btn quote-page__coverage-btn--active" type="button"
                                data-coverage="35000">€
                                35,000</button>
                            <button class="quote-page__coverage-btn" type="button" data-coverage="100000">€
                                100,000</button>
                            <button class="quote-page__coverage-btn" type="button" data-coverage="500000">€
                                500,000</button>
                            <button class="quote-page__coverage-btn" type="button" data-coverage="1000000">€
                                1,000,000</button>
                        </div>
                        <div class="quote-page__trip">
                            <div class="quote-page__trip-panel">
                                <p class="quote-page__label"><?= esc(lang('SiteCopy.trip_type')) ?></p>
                                <button class="quote-page__select" type="button">
                                    <span class="quote-page__select-value"><?= esc(lang('SiteCopy.standard_trip')) ?></span>
                                    <img class="quote-page__select-arrow" src="img/form-arrow.svg" alt="">
                                </button>
                                <ul class="quote-page__options" hidden>
                                    <li class="quote-page__item">
                                        <label class="quote-page__option">
                                            <input class="quote-page__radio" type="radio" name="tripType" checked
                                                value="standard">
                                            <span class="quote-page__name"><?= esc(lang('SiteCopy.standard_trip')) ?></span>
                                        </label>
                                        <button class="quote-page__info" type="button">
                                            <img src="img/quote/info-1.svg" alt="<?= esc(lang('SiteCopy.information_about_standard_trip'), 'attr') ?>">
                                        </button>
                                        <span class="quote-page__tooltip quote-page__tooltip--standard"><?= esc(lang('SiteCopy.standard_trip_is_a_basic_travel_insurance_poli')) ?></span>
                                    </li>
                                    <li class="quote-page__item">
                                        <label class="quote-page__option">
                                            <input class="quote-page__radio" type="radio" name="tripType"
                                                value="studying-abroad">
                                            <span class="quote-page__name"><?= esc(lang('SiteCopy.studying_abroad')) ?></span>
                                        </label>
                                        <button class="quote-page__info" type="button">
                                            <img src="img/quote/info-1.svg" alt="<?= esc(lang('SiteCopy.information_about_studying_abroad'), 'attr') ?>">
                                        </button>
                                        <span class="quote-page__tooltip quote-page__tooltip--study"><?= esc(lang('SiteCopy.study_abroad_is_a_specialized_insurance_policy')) ?>
                                        </span>
                                    </li>
                                    <li class="quote-page__item">
                                        <label class="quote-page__option">
                                            <input class="quote-page__radio" type="radio" name="tripType"
                                                value="working-abroad">
                                            <span class="quote-page__name"><?= esc(lang('SiteCopy.working_abroad')) ?></span>
                                        </label>
                                        <button class="quote-page__info" type="button">
                                            <img src="img/quote/info-1.svg" alt="<?= esc(lang('SiteCopy.information_about_working_abroad'), 'attr') ?>">
                                        </button>
                                        <span class="quote-page__tooltip quote-page__tooltip--work"><?= esc(lang('SiteCopy.working_abroad_is_a_special_insurance_policy_d')) ?></span>
                                    </li>
                                    <li class="quote-page__item">
                                        <label class="quote-page__option">
                                            <input class="quote-page__radio" type="radio" name="tripType"
                                                value="cruise">
                                            <span class="quote-page__name"><?= esc(lang('SiteCopy.cruise')) ?></span>
                                        </label>
                                        <button class="quote-page__info" type="button">
                                            <img src="img/quote/info-1.svg" alt="<?= esc(lang('SiteCopy.information_about_cruise'), 'attr') ?>">
                                        </button>
                                        <span class="quote-page__tooltip quote-page__tooltip--cruise"><?= esc(lang('SiteCopy.cruise_is_an_insurance_policy_designed_specifi')) ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="quote-page__benefits">
                            <li class="quote-page__benefit">
                                <?= esc(lang('SiteCopy.medical_expenses_35_000_eur')) ?>
                            </li>
                            <li class="quote-page__benefit">
                                <?= esc(lang('SiteCopy.ambulance_100_00_eur')) ?>
                            </li>
                            <li class="quote-page__benefit">
                                <?= esc(lang('SiteCopy.accident_2_500_eur')) ?>
                            </li>
                        </ul>
                        <ul class="quote-page__benefits">
                            <li class="quote-page__benefit">
                                <?= esc(lang('SiteCopy.medical_return_to_country_of_residence_500_00')) ?>
                            </li>
                            <li class="quote-page__benefit">
                                <?= esc(lang('SiteCopy.return_ticket_50_00_eur')) ?>
                            </li>
                            <li class="quote-page__benefit">
                                <?= esc(lang('SiteCopy.deductible_0_00_eur')) ?>
                            </li>
                        </ul>
                        <ul class="quote-page__benefits">
                            <li class="quote-page__benefit">
                                <?= esc(lang('SiteCopy.repatriation_of_the_deceased_3_000_eur')) ?>
                            </li>
                            <li class="quote-page__benefit">
                                <?= esc(lang('SiteCopy.personal_liability_500_00_eur')) ?>
                            </li>
                        </ul>
                        <div class="quote-page__footer">
                            <div class="quote-page__total">
                                <p class="quote-page__price">$21<span>,75</span></p>
                                <p class="quote-page__price-text"><span><?= esc(lang('SiteCopy.total_price')) ?></span> <?= esc(lang('SiteCopy.for_your_trip')) ?></p>
                            </div>
                            <button class="quote-page__submit" type="button">
                                <span><?= esc(lang('SiteCopy.get_covered')) ?></span>
                                <img src="img/form-btn-arrow.svg" alt="">
                            </button>
                        </div>
                    </div>
                    <button class="quote-page__full-coverage" type="button" hidden>
                        <span><?= esc(lang('SiteCopy.see_full_coverage')) ?></span>
                        <img src="img/quote/more-arrow.svg" alt="">
                    </button>

                    <!-- Tourists -->
                    <form class="tourists-form" novalidate hidden>
                        <h1 class="tourists-form__title"><?= esc(lang('SiteCopy.who_s_coming')) ?></h1>
                        <div class="tourists-form__list">
                            <div class="tourist">
                                <div class="tourist__fields">
                                    <label class="tourist__field">
                                        <span class="tourist__label"><?= esc(lang('SiteCopy.first_name')) ?></span>
                                        <input class="tourist__input" type="text" name="tourists[0][firstName]"
                                            placeholder="Anna" autocomplete="given-name" required>
                                        <span class="tourist__error" hidden><?= esc(lang('SiteCopy.enter_your_first_name')) ?></span>
                                    </label>

                                    <label class="tourist__field">
                                        <span class="tourist__label"><?= esc(lang('SiteCopy.last_name')) ?></span>
                                        <input class="tourist__input" type="text" name="tourists[0][lastName]"
                                            placeholder="Karol" autocomplete="family-name" required>
                                        <span class="tourist__error" hidden><?= esc(lang('SiteCopy.enter_your_last_name')) ?></span>
                                    </label>

                                    <label class="tourist__field">
                                        <span class="tourist__label"><?= esc(lang('SiteCopy.passport_number')) ?></span>
                                        <input class="tourist__input" type="text" name="tourists[0][passport]"
                                            placeholder="<?= esc(lang('SiteCopy.aa123456'), 'attr') ?>" pattern="[A-Z]{2}[0-9]{6}"
                                            autocapitalize="characters" spellcheck="false" required>
                                        <span class="tourist__error" hidden><?= esc(lang('SiteCopy.enter_a_passport_number_aa123456')) ?></span>
                                    </label>

                                    <fieldset class="tourist__birth">
                                        <legend class="tourist__label"><?= esc(lang('SiteCopy.date_of_birth')) ?></legend>

                                        <div class="tourist__birth-inputs">
                                            <input class="tourist__input" type="text" name="tourists[0][month]"
                                                placeholder="MM" inputmode="numeric" maxlength="2"
                                                autocomplete="bday-month" required>

                                            <input class="tourist__input" type="text" name="tourists[0][day]"
                                                placeholder="DD" inputmode="numeric" maxlength="2"
                                                autocomplete="bday-day" required>

                                            <input class="tourist__input" type="text" name="tourists[0][year]"
                                                placeholder="YYYY" inputmode="numeric" maxlength="4"
                                                autocomplete="bday-year" required>
                                        </div>
                                        <p class="tourist__error" hidden><?= esc(lang('SiteCopy.enter_your_date_of_birth')) ?></p>
                                    </fieldset>

                                    <label class="tourist__field">
                                        <span class="tourist__label"><?= esc(lang('SiteCopy.your_email')) ?></span>
                                        <input class="tourist__input" type="email" name="email"
                                            placeholder="example@gmail.com" autocomplete="email"
                                            autocapitalize="none" spellcheck="false" required>
                                        <span class="tourist__error" hidden><?= esc(lang('SiteCopy.enter_your_email')) ?></span>
                                    </label>

                                    <label class="tourist__field">
                                        <span class="tourist__label"><?= esc(lang('SiteCopy.your_phone')) ?></span>
                                        <input class="tourist__input" type="tel" name="phone"
                                            placeholder="+380 99 777 77 77" autocomplete="tel" inputmode="tel"
                                            pattern="\+380 [0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}" required>
                                        <span class="tourist__error" hidden><?= esc(lang('SiteCopy.enter_a_phone_number_380_99_777_77_77')) ?></span>
                                    </label>
                                </div>

                                <p class="tourists-form__privacy">
                                    <?= esc(lang('SiteCopy.we_keep_your_data_confidential')) ?>
                                </p>
                            </div>
                        </div>

                        <button class="tourists-form__add" type="button">
                            <?= esc(lang('SiteCopy.add_a_tourist')) ?>
                            <span class="tourists-form__add-inner">
                                <img class="tourists-form__add-icon" src="img/quote/plus.svg" alt="">
                            </span>
                        </button>

                        <div class="tourists-form__footer">
                            <button class="tourists-form__submit" type="submit">
                                <?= esc(lang('SiteCopy.save_and_continue')) ?>
                                <img class="tourists-form__submit-icon" src="img/form-btn-arrow.svg" alt="">
                            </button>

                            <label class="tourists-form__consent">
                                <input class="tourists-form__checkbox" type="checkbox" name="consent" checked
                                    data-error="tourists-consent-error" required>
                                <span class="tourists-form__consent-text">
                                    <?= esc(lang('SiteCopy.by_continuing_i_agree_to_the')) ?> <span class="tourists-form__policy"><?= esc(lang('SiteCopy.terms_conditions')) ?></span>
                                    <?= esc(lang('SiteCopy.and')) ?> <span class="tourists-form__policy"><?= esc(lang('SiteCopy.privacy_policy')) ?></span>
                                </span>
                            </label>
                            <p class="tourists-form__consent-error" id="tourists-consent-error" role="alert" hidden>
                                <?= esc(lang('SiteCopy.please_agree_to_the_terms_conditions_and_priva')) ?>
                            </p>
                        </div>
                    </form>

                    <!-- Tourist template -->
                    <template class="tourist-template">
                        <div class="tourist">
                            <div class="tourist__header">
                                <button class="tourist__remove" type="button" title="<?= esc(lang('SiteCopy.remove_tourist'), 'attr') ?>">
                                    <img class="tourist__remove-icon" src="img/quote/remove-buttonsvg.svg"
                                        alt="">
                                </button>
                                <h2 class="tourist__title"><?= esc(lang('SiteCopy.tourist')) ?> <span class="tourist__number">2</span></h2>
                            </div>

                            <div class="tourist__fields">
                                <label class="tourist__field">
                                    <span class="tourist__label"><?= esc(lang('SiteCopy.first_name')) ?></span>
                                    <input class="tourist__input" type="text" data-field="firstName"
                                        placeholder="Anna" required>
                                    <span class="tourist__error" hidden><?= esc(lang('SiteCopy.enter_your_first_name')) ?></span>
                                </label>

                                <label class="tourist__field">
                                    <span class="tourist__label"><?= esc(lang('SiteCopy.last_name')) ?></span>
                                    <input class="tourist__input" type="text" data-field="lastName"
                                        placeholder="Karol" required>
                                    <span class="tourist__error" hidden><?= esc(lang('SiteCopy.enter_your_last_name')) ?></span>
                                </label>

                                <label class="tourist__field">
                                    <span class="tourist__label"><?= esc(lang('SiteCopy.passport_number')) ?></span>
                                    <input class="tourist__input" type="text" data-field="passport"
                                        placeholder="<?= esc(lang('SiteCopy.aa123456'), 'attr') ?>" pattern="[A-Z]{2}[0-9]{6}"
                                        autocapitalize="characters" spellcheck="false" required>
                                    <span class="tourist__error" hidden><?= esc(lang('SiteCopy.enter_a_passport_number_aa123456')) ?></span>
                                </label>

                                <fieldset class="tourist__birth">
                                    <legend class="tourist__label"><?= esc(lang('SiteCopy.date_of_birth')) ?></legend>

                                    <div class="tourist__birth-inputs">
                                        <input class="tourist__input" type="text" data-field="month"
                                            placeholder="MM" inputmode="numeric" maxlength="2" required>

                                        <input class="tourist__input" type="text" data-field="day"
                                            placeholder="DD" inputmode="numeric" maxlength="2" required>

                                        <input class="tourist__input" type="text" data-field="year"
                                            placeholder="YYYY" inputmode="numeric" maxlength="4" required>
                                    </div>

                                    <p class="tourist__error" hidden><?= esc(lang('SiteCopy.enter_your_date_of_birth')) ?></p>
                                </fieldset>
                            </div>
                        </div>
                    </template>

                    <!-- Payment -->
                    <div class="payment" hidden>
                        <h1 class="payment__title" tabindex="-1"><?= esc(lang('SiteCopy.demo_payment')) ?></h1>

                        <div class="payment__panel">
                            <form class="payment-form" method="post" autocomplete="off" novalidate>
                                <h2 class="payment-form__title"><?= esc(lang('SiteCopy.enter_your_payment_information')) ?></h2>

                                <div class="payment-form__field">
                                    <span class="payment-form__label" id="payment-type-label"><?= esc(lang('SiteCopy.select_the_payment_type')) ?></span>
                                    <div class="payment-form__select-wrap">
                                        <input class="payment-form__type-value" type="hidden" value="card">
                                        <button class="payment-form__select" type="button"
                                            aria-haspopup="listbox" aria-expanded="false"
                                            aria-controls="payment-type-options"
                                            aria-labelledby="payment-type-label payment-type-value">
                                            <img class="payment-form__type-icon" src="/img/quote/famicons_card.svg" alt="">
                                            <span class="payment-form__select-value" id="payment-type-value"><?= esc(lang('SiteCopy.card')) ?></span>
                                            <img class="payment-form__select-arrow" src="/img/form-arrow.svg" alt="">
                                        </button>
                                        <ul class="payment-form__options" id="payment-type-options" role="listbox"
                                            aria-labelledby="payment-type-label" hidden>
                                            <li class="payment-form__option-item" role="presentation">
                                                <button class="payment-form__option" type="button" role="option"
                                                    data-value="card" aria-selected="true" tabindex="-1">
                                                    <img class="payment-form__option-icon" src="/img/quote/famicons_card.svg" alt="">
                                                    <span class="payment-form__option-name"><?= esc(lang('SiteCopy.card')) ?></span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <label class="payment-form__field">
                                    <span class="payment-form__label"><?= esc(lang('SiteCopy.card_number')) ?></span>
                                    <span class="payment-form__number-wrap">
                                        <img class="payment-form__brand" src="/img/quote/mastercard.svg"
                                            alt="Mastercard">
                                        <input class="payment-form__input payment-form__input--number" type="text"
                                            inputmode="numeric" maxlength="23" placeholder="0000 · 0000 · 0000 · 0000"
                                            required>
                                        <span class="payment-form__valid" hidden></span>
                                    </span>
                                    <span class="payment-form__error" hidden><?= esc(lang('SiteCopy.please_enter_a_valid_card_number')) ?></span>
                                </label>

                                <fieldset class="payment-form__expiry">
                                    <legend class="payment-form__label"><?= esc(lang('SiteCopy.expiry_date')) ?></legend>
                                    <div class="payment-form__row">
                                        <span class="payment-form__hint"><?= esc(lang('SiteCopy.enter_card_expiry')) ?></span>
                                        <div class="payment-form__expiry-inputs">
                                            <input class="payment-form__input payment-form__input--month" type="text"
                                                inputmode="numeric" maxlength="2" placeholder="00" title="<?= esc(lang('SiteCopy.expiry_month'), 'attr') ?>"
                                                required>
                                            <span class="payment-form__expiry-divider">/</span>
                                            <input class="payment-form__input payment-form__input--year" type="text"
                                                inputmode="numeric" maxlength="2" placeholder="00" title="<?= esc(lang('SiteCopy.expiry_year'), 'attr') ?>"
                                                required>
                                        </div>
                                    </div>
                                    <p class="payment-form__error" hidden><?= esc(lang('SiteCopy.please_enter_a_valid_date')) ?></p>
                                </fieldset>

                                <label class="payment-form__field payment-form__field--cvv">
                                    <span class="payment-form__label"><?= esc(lang('SiteCopy.cvv_number')) ?></span>
                                    <span class="payment-form__row">
                                        <span class="payment-form__hint"><?= esc(lang('SiteCopy.please_enter_3_digits')) ?></span>
                                        <input class="payment-form__input payment-form__input--cvv" type="text"
                                            inputmode="numeric" maxlength="3" placeholder="000" required>
                                    </span>
                                    <span class="payment-form__error" hidden><?= esc(lang('SiteCopy.please_enter_a_valid_cvv')) ?></span>
                                </label>

                                <div class="payment-form__footer">
                                    <p class="payment-form__privacy">
                                        <img class="payment-form__lock" src="/img/quote/lock.svg" alt="">
                                        <?= esc(lang('SiteCopy.use_test_card_details_only')) ?>
                                    </p>
                                    <button class="payment-form__submit" type="button">
                                        <?= esc(lang('SiteCopy.run_demo_payment')) ?>
                                        <img class="payment-form__submit-icon" src="/img/form-btn-arrow.svg" alt="">
                                    </button>
                                </div>
                            </form>

                            <div class="payment-receipt">
                                <div class="payment-card payment-card--dark">
                                    <div class="payment-card__inner">
                                        <div class="payment-card__front">
                                            <img class="payment-card__background" src="/img/quote/card-first.png" alt="">
                                            <p class="payment-card__label"><?= esc(lang('SiteCopy.your_card')) ?></p>
                                            <img class="payment-card__chip" src="/img/quote/chip.svg" alt="">
                                            <img class="payment-card__contactless" src="/img/quote/radio-line-first.svg"
                                                alt="">
                                            <p class="payment-card__number">0000 · 0000 · 0000 · 0000</p>
                                            <p class="payment-card__expiry">
                                                <?= esc(lang('SiteCopy.exp')) ?> <span class="payment-card__expiry-value">00/00</span>
                                            </p>
                                            <img class="payment-card__brand" src="/img/quote/mastercard.svg"
                                                alt="Mastercard" hidden>
                                        </div>

                                        <div class="payment-card__back">
                                            <img class="payment-card__background" src="/img/quote/card-second.png"
                                                alt="">
                                            <div class="payment-card__stripe">
                                                <img class="payment-card__chip payment-card__chip--back"
                                                    src="/img/quote/chip.svg" alt="">
                                            </div>
                                            <img class="payment-card__contactless payment-card__contactless--back"
                                                src="/img/quote/radio-line.svg" alt="">
                                            <p class="payment-card__number payment-card__number--back">
                                                0000 · 0000 · 0000 · 0000
                                            </p>
                                            <div class="payment-card__details">
                                                <div class="payment-card__detail">
                                                    <p class="payment-card__detail-label"><?= esc(lang('SiteCopy.expiry_date')) ?></p>
                                                    <p class="payment-card__expiry">
                                                        <?= esc(lang('SiteCopy.exp')) ?> <span class="payment-card__expiry-value">00/00</span>
                                                    </p>
                                                </div>
                                                <div class="payment-card__detail">
                                                    <p class="payment-card__detail-label">CVV</p>
                                                    <p class="payment-card__cvv">000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <dl class="payment-receipt__details">
                                    <div class="payment-receipt__row">
                                        <dt class="payment-receipt__label"><?= esc(lang('SiteCopy.company')) ?></dt>
                                        <dd class="payment-receipt__value payment-receipt__value--company">-</dd>
                                    </div>
                                    <div class="payment-receipt__row">
                                        <dt class="payment-receipt__label"><?= esc(lang('SiteCopy.application_reference')) ?></dt>
                                        <dd class="payment-receipt__value payment-receipt__value--order">-</dd>
                                    </div>
                                    <div class="payment-receipt__row">
                                        <dt class="payment-receipt__label"><?= esc(lang('SiteCopy.insurance_policy')) ?></dt>
                                        <dd class="payment-receipt__value payment-receipt__value--policy">-</dd>
                                    </div>
                                </dl>

                                <div class="payment-receipt__total">
                                    <p class="payment-receipt__total-label"><?= esc(lang('SiteCopy.quoted_total_usd')) ?></p>
                                    <div class="payment-receipt__prices">
                                        <p class="payment-receipt__price">$21<span
                                                class="payment-receipt__fraction">,75</span></p>
                                        <del class="payment-receipt__old-price" hidden></del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment results -->
                    <div class="payment-modal payment-modal--success" role="dialog" tabindex="-1"
                        aria-labelledby="payment-success-title" aria-describedby="payment-success-text" hidden>
                        <div class="payment-modal__content">
                            <img class="payment-modal__icon" src="/img/quote/modals/payment-success.svg" alt="">
                            <h2 class="payment-modal__title" id="payment-success-title">
                                <?= esc(lang('SiteCopy.thank_you')) ?><br><?= esc(lang('SiteCopy.demo_payment_completed')) ?>
                            </h2>
                            <p class="payment-modal__text" id="payment-success-text">
                                <?= esc(lang('SiteCopy.the_test_payment_scenario_was_completed_succes')) ?>
                            </p>
                        </div>
                        <div class="payment-modal__footer">
                            <a class="payment-modal__logo" href="/" aria-label="<?= esc(lang('SiteCopy.go_schengen_home'), 'attr') ?>">
                                <img class="payment-modal__logo-icon" src="/img/quote/modals/logo.svg" alt="">
                                <span class="payment-modal__logo-text">GO SCHENGEN</span>
                            </a>
                        </div>
                    </div>

                    <div class="payment-modal payment-modal--error" role="dialog" tabindex="-1"
                        aria-labelledby="payment-error-title" aria-describedby="payment-error-text" hidden>
                        <div class="payment-modal__content">
                            <img class="payment-modal__icon" src="/img/quote/modals/payment-error.svg" alt="">
                            <h2 class="payment-modal__title" id="payment-error-title"><?= esc(lang('SiteCopy.payment_error')) ?></h2>
                            <p class="payment-modal__text" id="payment-error-text">
                                <?= esc(lang('SiteCopy.the_payment_could_not_be_completed_please_chec')) ?>
                            </p>
                            <button class="payment-modal__retry" type="button">
                                <?= esc(lang('SiteCopy.try_again')) ?>
                                <img class="payment-modal__retry-icon" src="/img/form-btn-arrow.svg" alt="">
                            </button>
                        </div>
                        <div class="payment-modal__footer">
                            <a class="payment-modal__logo" href="/" aria-label="<?= esc(lang('SiteCopy.go_schengen_home'), 'attr') ?>">
                                <img class="payment-modal__logo-icon" src="/img/quote/modals/logo.svg" alt="">
                                <span class="payment-modal__logo-text">GO SCHENGEN</span>
                            </a>
                        </div>
                    </div>

                    <div class="payment-modal payment-modal--failed" role="dialog" tabindex="-1"
                        aria-labelledby="payment-failed-title" aria-describedby="payment-failed-text" hidden>
                        <div class="payment-modal__content">
                            <img class="payment-modal__icon" src="/img/quote/modals/payment-failed.svg" alt="">
                            <h2 class="payment-modal__title" id="payment-failed-title">
                                <?= esc(lang('SiteCopy.your_payment')) ?><br><?= esc(lang('SiteCopy.was_unsuccessful')) ?>
                            </h2>
                            <p class="payment-modal__text" id="payment-failed-text">
                                <?= esc(lang('SiteCopy.write_to_our_support_team_and_we_will_help_you')) ?>
                            </p>
                            <ul class="payment-modal__contacts">
                                <li class="payment-modal__contact-item">
                                    <button class="payment-modal__contact" type="button" data-channel="telegram"
                                        aria-label="<?= esc(lang('SiteCopy.contact_support_on_telegram'), 'attr') ?>">
                                        <img class="payment-modal__contact-icon" src="/img/quote/modals/telegram.svg" alt="">
                                        <span class="payment-modal__contact-label">Telegram</span>
                                    </button>
                                </li>
                                <li class="payment-modal__contact-item">
                                    <button class="payment-modal__contact" type="button" data-channel="whatsapp"
                                        aria-label="<?= esc(lang('SiteCopy.contact_support_on_whatsapp'), 'attr') ?>">
                                        <img class="payment-modal__contact-icon" src="/img/quote/modals/whatsapp.svg" alt="">
                                        <span class="payment-modal__contact-label">WhatsApp</span>
                                    </button>
                                </li>
                                <li class="payment-modal__contact-item">
                                    <button class="payment-modal__contact" type="button" data-channel="messenger"
                                        aria-label="<?= esc(lang('SiteCopy.contact_support_on_messenger'), 'attr') ?>">
                                        <img class="payment-modal__contact-icon" src="/img/quote/modals/messenger.svg" alt="">
                                        <span class="payment-modal__contact-label"><?= esc(lang('SiteCopy.messenger')) ?></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="payment-modal__footer">
                            <a class="payment-modal__logo" href="/" aria-label="<?= esc(lang('SiteCopy.go_schengen_home'), 'attr') ?>">
                                <img class="payment-modal__logo-icon" src="/img/quote/modals/logo.svg" alt="">
                                <span class="payment-modal__logo-text">GO SCHENGEN</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Add-ons -->
        <div class="quote-details" hidden>
            <section class="addons" tabindex="-1">
                <div class="container">
                    <h2 class="title addons__title"><?= esc(lang('SiteCopy.add_ons')) ?></h2>
                    <ul class="addons__list">
                        <li class="addons__item">
                            <div class="addons__image">
                                <span class="addons__badge"><?= esc(lang('SiteCopy.we_recommend')) ?></span>
                                <img class="addons__icon" src="img/quote/icons/Frame 1618873270.png" alt="">
                            </div>
                            <div class="addons__details">
                                <div class="addons__heading">
                                    <h3 class="addons__name"><?= esc(lang('SiteCopy.visa_cancellation')) ?></h3>
                                    <button class="addons__info" type="button">
                                        <img class="addons__info-icon" src="img/quote/info-1.svg" alt="">
                                    </button>
                                    <div class="addons__tooltip addons__tooltip--visa"><?= esc(lang('SiteCopy.refund_of_the_official_fee_you_paid_to_the_emb')) ?></div>
                                </div>
                                <p class="addons__description">
                                    <?= esc(lang('SiteCopy.refund_of_consular_service_fees_in_the_event_o')) ?>
                                </p>
                                <p class="addons__price">$ 49,00</p>
                            </div>
                            <button class="addons__button" type="button" data-price="49" data-addon="visa-cancellation">
                                <span class="addons__button-text"><?= esc(lang('SiteCopy.add')) ?></span>
                                <span class="addons__button-icon">+</span>
                            </button>
                        </li>
                        <li class="addons__item">
                            <div class="addons__image">
                                <img class="addons__icon" src="img/quote/icons/Frame 1618873270-1.png" alt="">
                            </div>
                            <div class="addons__details">
                                <div class="addons__heading">
                                    <h3 class="addons__name"><?= esc(lang('SiteCopy.trip_cancellation')) ?></h3>
                                    <button class="addons__info" type="button">
                                        <img class="addons__info-icon" src="img/quote/info-1.svg" alt="">
                                    </button>
                                    <div class="addons__tooltip addons__tooltip--trip"><?= esc(lang('SiteCopy.a_serious_injury_or_sudden_illness_that_render')) ?></div>
                                </div>
                                <p class="addons__description"><?= esc(lang('SiteCopy.we_ll_cover_your_expenses_in_the_event_of_illn')) ?></p>
                                <p class="addons__price">$ 49,00</p>
                            </div>
                            <button class="addons__button" type="button" data-price="49" data-addon="trip-cancellation">
                                <span class="addons__button-text"><?= esc(lang('SiteCopy.add')) ?></span>
                                <span class="addons__button-icon">+</span>
                            </button>
                        </li>
                        <li class="addons__item">
                            <div class="addons__image">
                                <img class="addons__icon" src="img/quote/icons/Frame 1618873270-2.png" alt="">
                            </div>
                            <div class="addons__details">
                                <div class="addons__heading">
                                    <h3 class="addons__name"><?= esc(lang('SiteCopy.alcohol_intoxication')) ?></h3>
                                    <button class="addons__info" type="button">
                                        <img class="addons__info-icon" src="img/quote/info-1.svg" alt="">
                                    </button>
                                    <div class="addons__tooltip addons__tooltip--alcohol"><?= esc(lang('SiteCopy.waiver_of_payment_restrictions_if_the_insured')) ?></div>
                                </div>
                                <p class="addons__description"><?= esc(lang('SiteCopy.reimbursement_of_medical_expenses_if_the_injur')) ?></p>
                                <p class="addons__price">$ 5,00</p>
                            </div>
                            <button class="addons__button" type="button" data-price="5" data-addon="alcohol-intoxication">
                                <span class="addons__button-text"><?= esc(lang('SiteCopy.add')) ?></span>
                                <span class="addons__button-icon">+</span>
                            </button>
                        </li>
                        <li class="addons__item">
                            <div class="addons__image">
                                <img class="addons__icon" src="img/quote/icons/Frame 1618873270-3.png" alt="">
                            </div>
                            <div class="addons__details">
                                <div class="addons__heading">
                                    <h3 class="addons__name"><?= esc(lang('SiteCopy.lost_luggage_premium_plan')) ?></h3>
                                    <button class="addons__info" type="button">
                                        <img class="addons__info-icon" src="img/quote/info-1.svg" alt="">
                                    </button>
                                    <div class="addons__tooltip addons__tooltip--luggage"><?= esc(lang('SiteCopy.a_payment_of_1_000_within_48_hours_in_the_even')) ?></div>
                                </div>
                                <p class="addons__description"><?= esc(lang('SiteCopy.a_payment_of_1_000')) ?></p>
                                <p class="addons__price">$ 25,00</p>
                            </div>
                            <button class="addons__button" type="button" data-price="25" data-addon="lost-luggage">
                                <span class="addons__button-text"><?= esc(lang('SiteCopy.add')) ?></span>
                                <span class="addons__button-icon">+</span>
                            </button>
                        </li>
                        <li class="addons__item">
                            <div class="addons__image">
                                <img class="addons__icon" src="img/quote/icons/Frame 1618873270-4.png" alt="">
                            </div>
                            <div class="addons__details">
                                <div class="addons__heading">
                                    <h3 class="addons__name"><?= esc(lang('SiteCopy.property_protection')) ?></h3>
                                    <button class="addons__info" type="button">
                                        <img class="addons__info-icon" src="img/quote/info-1.svg" alt="">
                                    </button>
                                    <div class="addons__tooltip addons__tooltip--property"><?= esc(lang('SiteCopy.compensation_for_financial_losses_in_the_event')) ?></div>
                                </div>
                                <p class="addons__description"><?= esc(lang('SiteCopy.insurance_coverage_of_up_to_500_000_in_case_so')) ?></p>
                                <p class="addons__price">$ 32,00</p>
                            </div>
                            <button class="addons__button" type="button" data-price="32" data-addon="property-protection">
                                <span class="addons__button-text"><?= esc(lang('SiteCopy.add')) ?></span>
                                <span class="addons__button-icon">+</span>
                            </button>
                        </li>
                        <li class="addons__item" hidden>
                            <div class="addons__image">
                                <img class="addons__icon" src="img/quote/icons/Frame 1618873270-5.png" alt="">
                            </div>
                            <div class="addons__details">
                                <div class="addons__heading">
                                    <h3 class="addons__name"><?= esc(lang('SiteCopy.active_recreation')) ?></h3>
                                    <button class="addons__info" type="button">
                                        <img class="addons__info-icon" src="img/quote/info-1.svg" alt="">
                                    </button>
                                    <div class="addons__tooltip addons__tooltip--recreation">
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.general_fitness_and_low_impact_activities')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.running_and_walking')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.fitness_yoga_and_pilates')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.aerobics_and_aqua_aerobic')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.weightlifting_and_bodybuilding')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.sports_and_ballroom_dancing')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.frisbee')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.croquet')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.darts')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.billiards_and_bowling')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.team_and_ball_sports')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.ball_games_basketball_football_american_footba')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.tennis_any')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.golf')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.cycling_skating_and_wheeled_activities')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.cycling_except_cycling_motocross_road_cycling')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.roller_skating_except_rollerblading_scooters_s')) ?>
                                            </li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.ice_skating_except_figure_skating_sledding_exc')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.karting')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.water_and_beach_activities')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.swimming_except_diving')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.snorkeling')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.water_skiing_water_motorcycles_aquabike_water')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.water_activities_except_for_those_specifically')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.surfing_including_wakesurfing_windsurfing_exce')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.sailing')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.fishing_except_underwater_fishing')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.winter_sports')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.skiing_and_snowboarding_on_specially_equipped')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.curling')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.outdoor_and_adventure_activities')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.trekking_hiking_without_mountaineering_equipme')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.descent_into_the_cave_with_an_excursion')) ?>
                                            </li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.jeep_safari')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.digging')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.paintball')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.recreational_organized_shooting_at_specially_e')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.military_and_historical_reenactments')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.animal_riding_activities')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.organized_animal_riding_tours')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.unaccompanied_animal_riding_including_horsebac')) ?>
                                            </li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.transport_and_motor_activities')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.driver_or_passenger_on_atvs_scooters_mopeds_an')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.tourism_and_leisure_attractions')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.visiting_water_parks_amusement_parks_jumping_o')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.aerotube')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.other_sports')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.rowing_kayaking_and_canoeing')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.fencing')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.sandboarding')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.triathlon')) ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="addons__description"><?= esc(lang('SiteCopy.provides_coverage_for_injuries_sustained_abroa')) ?></p>
                                <p class="addons__price">$ 89,00</p>
                            </div>
                            <button class="addons__button" type="button" data-price="89" data-addon="active-recreation">
                                <span class="addons__button-text"><?= esc(lang('SiteCopy.add')) ?></span>
                                <span class="addons__button-icon">+</span>
                            </button>
                        </li>
                        <li class="addons__item" hidden>
                            <div class="addons__image">
                                <img class="addons__icon" src="img/quote/icons/Frame 1618873270-6.png" alt="">
                            </div>
                            <div class="addons__details">
                                <div class="addons__heading">
                                    <h3 class="addons__name"><?= esc(lang('SiteCopy.extreme_adventures_professional_sports')) ?></h3>
                                    <button class="addons__info" type="button">
                                        <img class="addons__info-icon" src="img/quote/info-1.svg" alt="">
                                    </button>
                                    <div class="addons__tooltip addons__tooltip--extreme">
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.winter_and_mountain_sports')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.alpine_skiing_and_snowboarding_including_freer')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.freestyle_skiing_and_snowboarding')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.bobsleigh_and_luge')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.figure_skating')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.street_sled_racing')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.mountaineering_mountain_hiking_rock_climbing_m')) ?>
                                            </li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.rock_climbing_and_ice_climbing')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.cycling_and_wheeled_extreme_activities')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.cycling_including_motocross_road_cycling_bmx_t')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.mountainboarding')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.rollerblading')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.parkour_and_freerunning')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.booking')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.zorbing')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.water_sports_and_underwater_activities')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.wakeboarding')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.rafting')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.flyboarding')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.kiting_including_kitesurfing_and_snowkiting')) ?>
                                            </li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.scuba_diving')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.snorkeling')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.underwater_fishing')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.air_sports_and_aerial_high_risk_activities')) ?>
                                        </h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.paragliding')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.hang_gliding')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.hot_air_ballooning')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.parachuting')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.participation_in_any_flights_or_parachute_jump')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.wingsuit_flying')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.jumping_and_height_related_extreme_activities')) ?>
                                        </h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.bungee_jumping_rope_jumping_base_jumping_and_o')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.cliff_jumping')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.zip_lining')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.trampoline_jumping')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.motor_and_track_based_activities')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.motor_sports_on_special_tracks')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.combat_and_strength_sports')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.martial_arts_including_all_types_of_boxing_and')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.arm_wrestling')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.adventure_and_exploration_activities')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.caving')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.hunting_using_any_type_of_weapon')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.rodeo_bull_riding')) ?></li>
                                        </ul>
                                        <h4 class="addons__tooltip-title"><?= esc(lang('SiteCopy.professional_sports')) ?></h4>
                                        <ul class="addons__tooltip-list">
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.sports_competitions')) ?></li>
                                            <li class="addons__tooltip-item"><?= esc(lang('SiteCopy.training_sessions')) ?></li>
                                        </ul>
                                        <p class="addons__tooltip-note"><strong class="addons__tooltip-emphasis"><?= esc(lang('SiteCopy.this_also_includes_all_activities_listed_under')) ?></strong></p>
                                    </div>
                                </div>
                                <p class="addons__description"><?= esc(lang('SiteCopy.provides_insurance_coverage_for_injuries_susta')) ?></p>
                                <p class="addons__price">$ 89,00</p>
                            </div>
                            <button class="addons__button" type="button" data-price="89" data-addon="extreme-sports">
                                <span class="addons__button-text"><?= esc(lang('SiteCopy.add')) ?></span>
                                <span class="addons__button-icon">+</span>
                            </button>
                        </li>
                    </ul>
                    <button class="addons__button-full">
                        <span>
                            <?= esc(lang('SiteCopy.see_full_add_ons')) ?>
                        </span>
                        <img src="img/quote/more-arrow.svg" alt="">
                    </button>
                </div>
            </section>
            <section class="quote-coverage" id="coverage" tabindex="-1" hidden>
                <div class="container">
                    <h2 class="title quote-coverage__title"><?= esc(lang('SiteCopy.what_s_covered')) ?></h2>
                    <table class="quote-coverage__table">
                        <thead class="quote-coverage__head">
                            <tr class="quote-coverage__row">
                                <th class="quote-coverage__heading" scope="col">
                                    <img class="quote-coverage__heading-icon" src="img/table-type.svg" alt="">
                                    <?= esc(lang('SiteCopy.coverage_option')) ?>
                                </th>
                                <th class="quote-coverage__heading" scope="col">
                                    <img class="quote-coverage__heading-icon" src="img/table-basic.svg" alt="">
                                    <?= esc(lang('SiteCopy.coverage_detail')) ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="quote-coverage__body">
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.medical_coverage')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.schengen_medical_travel_insurance_covers_emerg')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.medical_transport')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.schengen_insurance_includes_medical_transporta')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.outpatient_treatment')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.coverage_of_expenses_directly_related_to_the_d_2')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.inpatient_treatment')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.coverage_of_expenses_directly_related_to_the_d')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.viral_and_infections')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.schengen_insurance_coverage_of_costs_for_the_t')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.pregnancy')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.schengen_insurance_for_pregnant_women_includes')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.repatriation')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.expenses_are_paid_for_repatriation_of_the_body')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.accidents')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.schengen_insurance_provides_compensation_in_ca')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.liability')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.schengen_insurance_for_students_includes_finan')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.loss_of_baggage')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.if_your_luggage_is_lost_and_you_are_denied_com')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.flight_delay')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.if_the_flight_is_delayed_more_than_4_hours_the')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.loss_of_documents')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.compensation_of_expenses_to_receive_new_docume')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.legal_assistance')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.payment_for_lawyer_services_abroad_during_an_i')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.translation_assistance')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.payment_for_interpreter_services_abroad_during')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row" data-coverage-item="deductible">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.deductible')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.schengen_medical_insurance_has_a_deductible_of')) ?></td>
                            </tr>
                            <tr class="quote-coverage__row">
                                <td class="quote-coverage__cell quote-coverage__cell--name">
                                    <?= esc(lang('SiteCopy.activation')) ?>
                                </td>
                                <td class="quote-coverage__cell"><?= esc(lang('SiteCopy.schengen_insurance_becomes_effective_activated')) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <div class="order-summary-slot order-summary-slot--addons">
                <aside class="addons__summary order-summary">
                    <div class="container">
                        <div class="addons__trip">
                            <div class="addons__trip-item addons__trip-item--country" tabindex="0"
                                aria-describedby="addons-country-tooltip">
                                <img class="addons__trip-icon" src="img/quote/map.svg" alt="">
                                <span class="addons__country"><?= esc(lang('SiteCopy.germany')) ?></span>
                                <span class="addons__country-tooltip" id="addons-country-tooltip" role="tooltip" hidden></span>
                            </div>
                            <div class="addons__trip-item addons__trip-item--dot"></div>
                            <div class="addons__trip-item">
                                <img class="addons__trip-icon" src="img/quote/time.svg" alt="">
                                <span class="addons__days"><?= esc(lang('SiteCopy.4_days')) ?></span>
                            </div>
                            <div class="addons__trip-item addons__trip-item--dot"></div>
                            <div class="addons__trip-item addons__trip-item--travelers">
                                <img class="addons__trip-icon" src="img/quote/people.svg" alt="">
                                <span class="addons__travelers"><?= esc(lang('SiteCopy.1_traveler')) ?></span>
                            </div>
                        </div>
                        <ul class="addons__benefits">
                            <li class="addons__benefit"><?= esc(lang('SiteCopy.medical_expenses')) ?> <span class="addons__medical"><?= esc(lang('SiteCopy.35_000_eur')) ?></span>
                            </li>
                            <li class="addons__benefit"><?= esc(lang('SiteCopy.ambulance')) ?> <span class="addons__ambulance"><?= esc(lang('SiteCopy.100_00_eur')) ?></span></li>
                            <li class="addons__benefit"><?= esc(lang('SiteCopy.accident')) ?> <span class="addons__accident"><?= esc(lang('SiteCopy.2_500_eur')) ?></span></li>
                        </ul>
                        <ul class="addons__benefits">
                            <li class="addons__benefit"><?= esc(lang('SiteCopy.medical_return_to_country_of_residence')) ?> <span
                                    class="addons__medical-return"><?= esc(lang('SiteCopy.500_00_eur')) ?></span></li>
                            <li class="addons__benefit"><?= esc(lang('SiteCopy.return_ticket')) ?> <span class="addons__return-ticket"><?= esc(lang('SiteCopy.50_00_eur')) ?></span></li>
                        </ul>
                        <ul class="addons__benefits">
                            <li class="addons__benefit"><?= esc(lang('SiteCopy.repatriation_of_the_deceased')) ?> <span
                                    class="addons__repatriation"><?= esc(lang('SiteCopy.3_000_eur')) ?></span></li>
                            <li class="addons__benefit"><?= esc(lang('SiteCopy.personal_liability')) ?> <span class="addons__liability"><?= esc(lang('SiteCopy.500_00_eur')) ?></span></li>
                        </ul>
                        <div class="addons__footer">
                            <div class="addons__total">
                                <p class="addons__total-price">$21<span class="addons__price-fraction">,75</span></p>
                                <p class="addons__price-text"><span class="addons__price-emphasis"><?= esc(lang('SiteCopy.total_price')) ?></span>
                                    <?= esc(lang('SiteCopy.for_your_trip')) ?></p>
                            </div>
                            <button class="addons__submit" type="button">
                                <?= esc(lang('SiteCopy.get_covered')) ?>
                                <img class="addons__submit-icon" src="img/form-btn-arrow.svg" alt="">
                            </button>
                        </div>
                        <ul class="addons__selected"></ul>
                    </div>
                </aside>
            </div>
            <div class="order-summary-slot order-summary-slot--coverage" hidden></div>
        </div>
        <div class="quote-coverage__bar-slot" hidden>
            <div class="quote-coverage__bar" inert>
                <div class="container">
                    <div class="quote-coverage__bar-inner">
                        <div class="quote-coverage__trip">
                            <div class="quote-coverage__summary">
                                <div class="quote-coverage__summary-item quote-coverage__summary-item--country" tabindex="0"
                                    aria-describedby="coverage-country-tooltip">
                                    <img class="quote-coverage__summary-icon" src="img/quote/map.svg" alt="">
                                    <span class="quote-coverage__country"><?= esc(lang('SiteCopy.germany')) ?></span>
                                    <span class="quote-coverage__country-tooltip" id="coverage-country-tooltip" role="tooltip" hidden></span>
                                </div>
                                <div class="quote-coverage__summary-item">
                                    <img class="quote-coverage__summary-icon" src="img/quote/calendar.svg" alt="">
                                    <span class="quote-coverage__date"><?= esc(lang('SiteCopy.mar_26_mar_31_2026')) ?></span>
                                </div>
                                <div class="quote-coverage__summary-item">
                                    <img class="quote-coverage__summary-icon" src="img/quote/time.svg" alt="">
                                    <span class="quote-coverage__days"><?= esc(lang('SiteCopy.4_days')) ?></span>
                                </div>
                                <div class="quote-coverage__summary-item">
                                    <img class="quote-coverage__summary-icon" src="img/quote/people.svg" alt="">
                                    <span class="quote-coverage__travelers"><?= esc(lang('SiteCopy.1_traveler')) ?></span>
                                </div>
                            </div>
                            <div class="quote-coverage__cost">
                                <p class="quote-coverage__cost-label">
                                    <img class="quote-coverage__cost-icon" src="img/quote/info-1.svg" alt="">
                                    <?= esc(lang('SiteCopy.set_trip_cost')) ?>
                                </p>
                                <button class="quote-coverage__cost-button quote-coverage__cost-button--minus"
                                    type="button">−</button>
                                <span class="quote-coverage__cost-value">$ 35,000</span>
                                <button class="quote-coverage__cost-button quote-coverage__cost-button--plus"
                                    type="button">+</button>
                            </div>
                        </div>
                        <div class="quote-coverage__total">
                            <p class="quote-coverage__price">$21<span class="quote-coverage__price-fraction">,75</span>
                            </p>
                            <p class="quote-coverage__price-text"><span class="quote-coverage__price-emphasis"><?= esc(lang('SiteCopy.total_price')) ?></span> <?= esc(lang('SiteCopy.for_your_trip')) ?></p>
                        </div>
                        <button class="quote-coverage__submit" type="button">
                            <?= esc(lang('SiteCopy.get_covered')) ?>
                            <img class="quote-coverage__submit-icon" src="img/form-btn-arrow.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </main>

        <?= view('includes/language-menu') ?>

        <?php echo view('includes/scripts'); ?>
</body>

</html>
