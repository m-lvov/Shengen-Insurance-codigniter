<div class="language-menu" id="language-menu" hidden>
    <div class="language-menu__panel" role="dialog" aria-modal="true" aria-labelledby="language-menu-title">
        <div class="language-menu__header">
            <h2 class="language-menu__title" id="language-menu-title"><?= esc(lang('SiteCopy.select_language')) ?></h2>
            <p class="language-menu__description"><?= esc(lang('SiteCopy.choose_a_language')) ?></p>
        </div>

        <div class="language-menu__body">
            <div class="language-menu__regions">
                <button class="language-menu__region" type="button" data-region="america"><?= esc(lang('SiteCopy.america')) ?></button>
                <button class="language-menu__region" type="button" data-region="europe"><?= esc(lang('SiteCopy.europe')) ?></button>
                <button class="language-menu__region" type="button" data-region="africa"><?= esc(lang('SiteCopy.africa')) ?></button>
                <button class="language-menu__region" type="button" data-region="asia"><?= esc(lang('SiteCopy.asia')) ?></button>
                <button class="language-menu__region" type="button" data-region="oceania"><?= esc(lang('SiteCopy.oceania')) ?></button>
            </div>

            <div class="language-menu__search">
                <label class="language-menu__field">
                    <span class="language-menu__search-icon" aria-hidden="true"></span>
                    <input class="language-menu__input" type="search" placeholder="<?= esc(lang('SiteCopy.find_a_language'), 'attr') ?>"
                           aria-label="<?= esc(lang('SiteCopy.find_a_language'), 'attr') ?>" autocomplete="off">
                </label>
                <ul class="language-menu__list" hidden>
                    <li class="language-menu__item">
                        <button class="language-menu__option language-menu__option--selected" type="button"
                                data-language="en">English</button>
                    </li>
                    <li class="language-menu__item">
                        <button class="language-menu__option" type="button" data-language="uk">Українська</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="language-menu__footer">
            <div class="language-menu__logo">
                <img class="language-menu__logo-icon" src="/img/logo.svg" alt="">
                <span class="language-menu__logo-text">Go Schengen</span>
            </div>
            <button class="language-menu__submit" type="button">
                <?= esc(lang('SiteCopy.choose_language')) ?>
                <span class="language-menu__submit-arrow" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</div>