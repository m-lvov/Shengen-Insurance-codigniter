<div class="insurance-popup" hidden>
    <div class="insurance-popup__overlay"></div>

    <div class="insurance-popup__panel" role="dialog" aria-modal="true" aria-labelledby="insurance-popup-title">

        <button class="insurance-popup__close" type="button" aria-label="<?= esc(lang('SiteCopy.close_popup'), 'attr') ?>">
            <img src="/img/close-form.svg" alt="">
        </button>

        <h2 class="insurance-popup__title" id="insurance-popup-title">
            <?= esc(lang('SiteCopy.get_insurance_now')) ?>
        </h2>

        <div class="insurance-popup__form">
            <form class="hero-mobile-form" action="" novalidate>
                <div class="hero-mobile-form__tabs" role="group" aria-label="<?= esc(lang('SiteCopy.trip_type'), 'attr') ?>">
                    <button class="hero-mobile-form__tab hero-mobile-form__tab--active" type="button"
                            data-trip="single" aria-pressed="true"><?= esc(lang('SiteCopy.single_trip')) ?></button>
                    <button class="hero-mobile-form__tab" type="button" data-trip="annual"
                            aria-pressed="false"><?= esc(lang('SiteCopy.annual')) ?></button>
                </div>
                <div class="hero-mobile-form__field-inner hero-mobile-form__country">
                    <button class="hero-mobile-form__field hero-mobile-form__field--select" type="button"
                            aria-label="<?= esc(lang('SiteCopy.select_countries'), 'attr') ?>" aria-expanded="false" aria-controls="popup-country-dropdown"
                            aria-describedby="popup-country-error"><span class="hero-mobile-form__country-value"><?= esc(lang('SiteCopy.select_country')) ?></span>
                        <img src="/img/mobile/mobile-form-mark.svg" alt="">
                    </button>
                    <div class="hero-mobile-form__country-dropdown" id="popup-country-dropdown" hidden>
                        <input class="hero-mobile-form__field hero-mobile-form__country-search" type="search"
                               placeholder="<?= esc(lang('SiteCopy.search_country'), 'attr') ?>" aria-label="<?= esc(lang('SiteCopy.search_countries'), 'attr') ?>" autocomplete="off">
                        <ul class="hero-mobile-form__country-options"></ul>
                        <p class="hero-mobile-form__country-empty" hidden><?= esc(lang('SiteCopy.no_countries_found')) ?></p>
                        <button class="hero-mobile-form__country-done" type="button"><?= esc(lang('SiteCopy.done')) ?></button>
                    </div>
                    <p class="hero-mobile-form__error" id="popup-country-error" hidden><?= esc(lang('SiteCopy.please_select_a_country')) ?></p>
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
                            aria-label="<?= esc(lang('SiteCopy.select_trip_dates'), 'attr') ?>" aria-expanded="false" aria-controls="popup-trip-calendar"
                            aria-describedby="popup-date-error">
                        <span class="hero-mobile-form__date-value"><?= esc(lang('SiteCopy.select_date')) ?></span>
                        <img src="/img/mobile/mobile-form-calendar.svg" alt="">
                    </button>
                    <p class="hero-mobile-form__error" id="popup-date-error" hidden><?= esc(lang('SiteCopy.please_select_your_trip_dates')) ?>
                    </p>
                    <div class="calendar hero-mobile-form__calendar" id="popup-trip-calendar" role="group"
                         aria-label="<?= esc(lang('SiteCopy.select_trip_dates'), 'attr') ?>" hidden>
                        <section class="calendar__month" aria-labelledby="popup-calendar-title">
                            <div class="calendar__header">
                                <button class="calendar__nav calendar__nav--prev" type="button"
                                        aria-label="<?= esc(lang('SiteCopy.previous_month'), 'attr') ?>"></button>
                                <h3 class="calendar__title" id="popup-calendar-title" aria-live="polite"></h3>
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
                            <img class="calendar__confirm-arrow" src="/img/form-btn-arrow.svg" alt="">
                        </button>
                    </div>
                </div>
                <div class="hero-mobile-form__travelers">
                    <input class="hero-mobile-form__field hero-mobile-form__passenger-value" type="number"
                           name="travelers" min="1" step="1" value="1" inputmode="numeric"
                           aria-label="<?= esc(lang('SiteCopy.number_of_travelers'), 'attr') ?>" aria-describedby="popup-travelers-error">
                    <div class="hero-mobile-form__counter">
                        <button class="hero-mobile-form__counter-btn hero-mobile-form__counter-btn--plus"
                                type="button" aria-label="<?= esc(lang('SiteCopy.add_passenger'), 'attr') ?>"></button>
                        <button class="hero-mobile-form__counter-btn hero-mobile-form__counter-btn--minus"
                                type="button" aria-label="<?= esc(lang('SiteCopy.remove_passenger'), 'attr') ?>" disabled></button>
                    </div>
                </div>
                <p class="hero-mobile-form__error" id="popup-travelers-error" hidden><?= esc(lang('SiteCopy.please_enter_at_least_one_traveler')) ?></p>
                <label class="hero-mobile-form__age-label">
                    <input class="hero-mobile-form__field hero-mobile-form__age" type="text" inputmode="numeric"
                           name="applicantAge" placeholder="<?= esc(lang('SiteCopy.your_age'), 'attr') ?>" aria-label="<?= esc(lang('SiteCopy.your_age'), 'attr') ?>"
                           aria-describedby="popup-age-error">
                </label>
                <p class="hero-mobile-form__error" id="popup-age-error" hidden><?= esc(lang('SiteCopy.please_enter_your_age_as_a_whole_number')) ?></p>
                <button class="hero-mobile-form__submit" type="submit"><?= esc(lang('SiteCopy.passenger_details')) ?> <img
                            src="/img/mobile/mobile-form-arrow.svg" alt=""></button>
                <p class="hero-mobile-form__status" role="status" hidden></p>
            </form>
        </div>
    </div>
</div>