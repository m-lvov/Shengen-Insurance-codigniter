<section class="visa-check" id="visa-check">
    <div class="container">
        <div class="visa-check__inner">

            <div class="visa-check__start">
                <h2 class="title visa-check__title">
                            <span class="visa-check__title-desktop">
                                <?= esc(lang('SiteCopy.find_out_if_you_need_a_schengen_visa')) ?>
                            </span>
                    <span class="visa-check__title-mobile">
                                <?= esc(lang('SiteCopy.find_out_if_you_need_a_visa')) ?>
                            </span>
                </h2>

                <form class="visa-check__form">
                    <div class="visa-select" data-field="citizenship">
                        <input class="visa-select__input" type="hidden" name="citizenship">

                        <button class="visa-select__trigger" type="button"
                                aria-label="<?= esc(lang('SiteCopy.select_citizenship'), 'attr') ?>" aria-expanded="false"
                                aria-controls="visa-citizenship-dropdown"
                                aria-describedby="visa-citizenship-error">
                            <span class="visa-select__value"><?= esc(lang('SiteCopy.citizenship')) ?></span>
                            <img class="visa-select__arrow" src="/img/visa-form-arrow.svg" alt="">
                        </button>

                        <div class="visa-select__dropdown" id="visa-citizenship-dropdown" hidden>
                            <input class="visa-select__search" type="search"
                                   placeholder="<?= esc(lang('SiteCopy.search_country'), 'attr') ?>" aria-label="<?= esc(lang('SiteCopy.search_citizenship_country'), 'attr') ?>"
                                   autocomplete="off">
                            <ul class="visa-select__list" aria-label="<?= esc(lang('SiteCopy.citizenship_countries'), 'attr') ?>"></ul>
                            <p class="visa-select__empty" hidden><?= esc(lang('SiteCopy.no_countries_found')) ?></p>
                        </div>

                        <p class="visa-select__error" id="visa-citizenship-error" hidden>
                            <?= esc(lang('SiteCopy.please_select_your_citizenship')) ?>
                        </p>
                    </div>

                    <div class="visa-select" data-field="destination">
                        <input class="visa-select__input" type="hidden" name="destination">

                        <button class="visa-select__trigger" type="button"
                                aria-label="<?= esc(lang('SiteCopy.select_destination'), 'attr') ?>" aria-expanded="false"
                                aria-controls="visa-destination-dropdown"
                                aria-describedby="visa-destination-error">
                            <span class="visa-select__value"><?= esc(lang('SiteCopy.destination')) ?></span>
                            <img class="visa-select__arrow" src="/img/visa-form-arrow.svg" alt="">
                        </button>

                        <div class="visa-select__dropdown" id="visa-destination-dropdown" hidden>
                            <input class="visa-select__search" type="search"
                                   placeholder="<?= esc(lang('SiteCopy.search_country'), 'attr') ?>" aria-label="<?= esc(lang('SiteCopy.search_destination_country'), 'attr') ?>"
                                   autocomplete="off">
                            <ul class="visa-select__list" aria-label="<?= esc(lang('SiteCopy.destination_countries'), 'attr') ?>"></ul>
                            <p class="visa-select__empty" hidden><?= esc(lang('SiteCopy.no_countries_found')) ?></p>
                        </div>

                        <p class="visa-select__error" id="visa-destination-error" hidden>
                            <?= esc(lang('SiteCopy.please_select_your_destination')) ?>
                        </p>
                    </div>

                    <button class="visa-check__btn" type="button">
                        <span class="visa-check__value"><?= esc(lang('SiteCopy.check')) ?></span>
                        <img class="visa-check__img" src="/img/visa-check-arrow.svg" alt="">
                    </button>
                </form>
            </div>

            <div class="visa-check__result" hidden>
                <h2 class="title visa-check__title visa-check__result-title">
                    <?= esc(lang('SiteCopy.yes_you_need_a_schengen_visa')) ?>
                </h2>

                <p class="visa-check__result-text">
                    <?= esc(lang('SiteCopy.to_apply_for_a_schengen_visa_from_your_country')) ?>
                    <span class="visa-check__discount"><?= esc(lang('SiteCopy.10_discount')) ?></span>
                </p>

                <button class="visa-check__btn visa-check__apply" type="button">
                    <span class="visa-check__value"><?= esc(lang('SiteCopy.apply_now')) ?></span>
                    <img class="visa-check__img" src="/img/visa-check-arrow.svg" alt="">
                </button>
            </div>

            <img class="visa-check__map" src="/img/mobile/form-bg.svg" alt="">

        </div>
    </div>
</section>