<?php
$pageTitle = lang('SiteCopy.about_us_2');
$bodyClass = '';
$currentPage = 'about';
echo view('includes/header', [
        'pageTitle' => $pageTitle,
        'bodyClass' => $bodyClass,
        'currentPage' => $currentPage,
]);
?>
    <main>
        <section class="page-hero page-hero--about">
            <div class="container">
                <div class="page-hero__card">
                    <div class="page-hero__avatars">
                        <img class="page-hero__avatar" src="img/page-hero/avatar-1.svg" alt="">
                        <img class="page-hero__avatar" src="img/page-hero/avatar-2.svg" alt="">
                        <img class="page-hero__avatar" src="img/page-hero/avatar-3.svg" alt="">
                    </div>
                    <p class="page-hero__value">
                        <?= esc(lang('SiteCopy.245_880_000_people')) ?>
                    </p>
                </div>
                <h1 class="page-hero__title"><?= esc(lang('SiteCopy.about_us')) ?></h1>
                <p class="page-hero__text"><?= esc(lang('SiteCopy.travel_insurance_to_the_countries_of_the_europ')) ?></p>
            </div>
        </section>
        <section class="company-history">
            <div class="container">
                <h2 class="title"><?= esc(lang('SiteCopy.our_history')) ?></h2>
                <p class="section-note company-history__note">Lorem ipsum</p>
                <div class="company-history__content">
                    <p class="company-history__text">Proin et lectus a neque accumsan ultrices et id est. Nam tempor
                        malesuada mollis. Vivamus cursus eleifend condimentum.
                        Suspendisse dignissim urna a placerat interdum. Phasellus tristique augue sit amet fringilla
                        bibendum. Sed viverra
                        auctor tortor, id semper ante lobortis ac. Duis vitae dapibus leo, eu porttitor orci. Duis
                        maximus sem sed vulputate
                        scelerisque. Suspendisse eu eleifend libero, sit amet dignissim lectus. <br>

                        <br>Etiam mauris est, pretium at ante vehicula, finibus vehicula est. Praesent tempus, massa ac
                        ultrices commodo, arcu massa
                        consectetur leo, in pretium urna tortor ultrices nulla. Vestibulum a tortor tempus, volutpat
                        diam ut, volutpat tellus.
                        Sed vehicula ligula mi, nec vestibulum turpis rutrum nec. Donec in massa eu nisi auctor
                        molestie. Nulla volutpat nec
                        velit nec mattis.
                    </p>
                    <div class="company-history__media">
                        <img class="company-history__img" src="img/about-us/company-history.png" alt="">
                        <div class="company-history__badge">
                            <span class="company-history__badge-icon">
                                <img src="img/carers/polici-icon.svg" alt="">
                            </span>
                            <span class="company-history__badge-text">sit amet dignissim</span>
                        </div>
                    </div>
                    <p class="company-history__text-second">Proin et lectus a neque accumsan ultrices et id est. Nam
                        tempor
                        malesuada mollis. Vivamus cursus eleifend condimentum.
                        Suspendisse dignissim urna a placerat interdum. Phasellus tristique augue sit amet fringilla
                        bibendum. Sed viverra
                        auctor tortor, id semper ante lobortis ac. Duis vitae dapibus leo, eu porttitor orci. Duis
                        maximus sem sed vulputate
                        scelerisque. Suspendisse eu eleifend libero, sit amet dignissim lectus. Etiam mauris est,
                        pretium at ante vehicula,
                        finibus vehicula est. Praesent tempus, massa ac ultrices commodo, arcu massa consectetur leo, in
                        pretium urna tortor
                        ultrices nulla. Vestibulum a tortor tempus, volutpat diam ut, volutpat tellus. <br>

                        <br>Sed vehicula ligula mi, nec vestibulum turpis rutrum nec. Donec in massa eu nisi auctor
                        molestie. Nulla volutpat nec
                        velit nec mattis. Fusce venenatis ex eu tortor accumsan, non aliquam sapien congue
                    </p>
                </div>
            </div>
        </section>
        <section class="trusted-companies">
            <div class="container">
                <h2 class="title"><?= esc(lang('SiteCopy.over_50_companies_trust_us')) ?></h2>
                <div class="swiper trusted-companies__slider">
                    <ul class="trusted-companies__list">
                        <li class="trusted-companies__item"></li>
                        <li class="trusted-companies__item"></li>
                        <li class="trusted-companies__item"></li>
                        <li class="trusted-companies__item"></li>
                        <li class="trusted-companies__item"></li>
                        <li class="trusted-companies__item"></li>
                        <li class="trusted-companies__item"></li>
                    </ul>
                    <div class="swiper-pagination trusted-companies__pagination"></div>
                </div>
            </div>
        </section>
        <section class="company-about">
            <div class="container">
                <h2 class="title company-about__title"><?= esc(lang('SiteCopy.about_the_company')) ?></h2>
                <p class="section-note section-note--light company-about__note">Lorem ipsum</p>
                <p class="company-about__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper
                    molestie molestie. Nam hendrerit accumsan tellus
                    ut cursus. Nunc tempor quam eu tincidunt suscipit. Cras convallis molestie suscipit. Nullam quis
                    convallis nulla. Aenean
                    elementum iaculis ex eu imperdiet. Mauris vehicula placerat sollicitudin. Mauris sit amet ante
                    ullamcorper, ullamcorper
                    nisl sit amet, lacinia orci.</p>
                <ul class="company-about__stats">
                    <li class="company-about__stat">
                        <p class="company-about__stat-value">400k+</p>
                        <p class="company-about__stat-label">Lorem ipsum dolor sit amet</p>
                    </li>
                    <li class="company-about__stat">
                        <p class="company-about__stat-value">95%</p>
                        <p class="company-about__stat-label">Lorem ipsum dolor sit amet</p>
                    </li>
                    <li class="company-about__stat">
                        <p class="company-about__stat-value">100%</p>
                        <p class="company-about__stat-label">Lorem ipsum dolor sit amet</p>
                    </li>
                </ul>
            </div>
        </section>
        <section class="timeline">
            <div class="container">
                <h2 class="title"><?= esc(lang('SiteCopy.timeline')) ?></h2>
                <p class="section-note timeline__note">Lorem ipsum</p>
                <div class="timeline__inner">
                    <div class="timeline__navigation">
                        <ul class="timeline__previews">
                            <li class="timeline__preview">
                                <button class="timeline__preview-button" type="button">
                                    <img src="img/about-us/timeline-1.png" alt="">
                                </button>
                            </li>
                            <li class="timeline__preview">
                                <button class="timeline__preview-button" type="button">
                                    <img src="img/about-us/timeline-2.png" alt="">
                                </button>
                            </li>
                            <li class="timeline__preview">
                                <button class="timeline__preview-button" type="button">
                                    <img src="img/about-us/timeline-3.png" alt="">
                                </button>
                            </li>
                            <li class="timeline__preview">
                                <button class="timeline__preview-button" type="button">
                                    <img src="img/about-us/timeline-4.png" alt="">
                                </button>
                            </li>
                            <li class="timeline__preview">
                                <button class="timeline__preview-button" type="button">
                                    <img src="img/about-us/timeline-5.png" alt="">
                                </button>
                            </li>
                            <li class="timeline__preview">
                                <button class="timeline__preview-button" type="button">
                                    <img src="img/about-us/timeline-6.png" alt="">
                                </button>
                            </li>
                        </ul>
                        <div class="timeline__controls">
                            <button class="timeline__control timeline__control--prev" type="button"
                                aria-label="<?= esc(lang('SiteCopy.previous_event'), 'attr') ?>">
                                <img src="img/carers/arrow-prew.svg" alt="">
                            </button>
                            <button class="timeline__control timeline__control--next" type="button"
                                aria-label="<?= esc(lang('SiteCopy.next_event'), 'attr') ?>">
                                <img src="img/carers/arrow-next.svg" alt="">
                            </button>
                        </div>
                    </div>
                    <article class="timeline__event">
                        <div class="timeline__content">
                            <div class="timeline__heading">
                                <time class="timeline__year" datetime="2021">2021</time>
                                <h3 class="timeline__event-title">
                                    Hendrerit<br>
                                    accumsan tellus
                                </h3>
                            </div>
                            <p class="timeline__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aenean semper molestie molestie. Nam hendrerit accumsan
                                tellus ut cursus. Nunc tempor quam eu tincidunt suscipit.
                            </p>
                        </div>
                    </article>
                    <img class="timeline__decor" src="img/about-us/timline-content.png" alt="">
                </div>
            </div>
        </section>
        <section class="team">
            <div class="container">
                <h2 class="title"><?= esc(lang('SiteCopy.our_team')) ?></h2>
                <p class="section-note team__note">Lorem ipsum</p>
                <div class="swiper team__slider">
                    <ul class="team__list">
                        <li class="team__item">
                            <img class="team__item-img" src="img/carers/team-photo.png" alt="">
                            <h3 class="team__item-name"><?= esc(lang('SiteCopy.anna_shvets')) ?></h3>
                            <p class="team__item-position"><?= esc(lang('SiteCopy.ceo_of_the_sales_department')) ?></p>
                        </li>
                        <li class="team__item">
                            <img class="team__item-img" src="img/carers/team-photo.png" alt="">
                            <h3 class="team__item-name"><?= esc(lang('SiteCopy.anna_shvets')) ?></h3>
                            <p class="team__item-position"><?= esc(lang('SiteCopy.ceo_of_the_sales_department')) ?></p>
                        </li>
                        <li class="team__item">
                            <img class="team__item-img" src="img/carers/team-photo.png" alt="">
                            <h3 class="team__item-name"><?= esc(lang('SiteCopy.anna_shvets')) ?></h3>
                            <p class="team__item-position"><?= esc(lang('SiteCopy.ceo_of_the_sales_department')) ?></p>
                        </li>
                        <li class="team__item">
                            <img class="team__item-img" src="img/carers/team-photo.png" alt="">
                            <h3 class="team__item-name"><?= esc(lang('SiteCopy.anna_shvets')) ?></h3>
                            <p class="team__item-position"><?= esc(lang('SiteCopy.ceo_of_the_sales_department')) ?></p>
                        </li>
                    </ul>
                    <div class="swiper-pagination team__pagination"></div>
                </div>
            </div>
        </section>

        <?= view ('includes/visa-check'); ?>

        <section class="quote">
            <div class="container">
                <img class="quote__icon-open" src="img/quotes.svg" alt="">
                <p class="quote__text">Aliquam sed velit nec turpis. <br>Blandit condimentum sit amet eu erat. Sed
                    ultricies dictum ante,
                    sed porttitor arcu
                    pulvinar nec. Mauris eget maximus leo. Cras pretium ligula erat, vel pulvinar nulla sollicitudin
                    a. Ut congue, ligula
                    non blandit mattis, nibh orci luctus risus, ut vulputate eros odio ac neque. Morbi mattis ipsum
                    at nisl ornare porta.
                    Pellentesque consectetur in ex eu dictum. In condimentum id orci at ullamcorper.</p>
                <img class="quote__icon-close" src="img/quotes.svg" alt="">
            </div>
        </section>

        <?= view('includes/faq'); ?>

        <?= view('includes/contact'); ?>

        </main>

        <?= view('includes/footer'); ?>

        <?= view('includes/language-menu'); ?>

        <?= view ('includes/insurance-popup'); ?>

        <?= view('includes/scripts'); ?>
</body>

</html>
