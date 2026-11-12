<?php
$pageTitle = lang('SiteCopy.careers');
$bodyClass = '';
$currentPage = 'careers';
echo view('includes/header', [
        'pageTitle' => $pageTitle,
        'bodyClass' => $bodyClass,
    'currentPage' => $currentPage,
]);
?>
    <main>
        <section class="page-hero page-hero--careers">
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
                <h1 class="page-hero__title"><?= esc(lang('SiteCopy.careers')) ?></h1>
                <p class="page-hero__text"><?= esc(lang('SiteCopy.travel_insurance_to_the_countries_of_the_europ')) ?></p>
            </div>
        </section>
        <section class="history">
            <div class="container">
                <div class="history__inner">
                    <div class="history__heading">
                        <h2 class="title"><?= esc(lang('SiteCopy.our_history')) ?></h2>
                        <p class="section-note history__note">Lorem ipsum</p>
                    </div>
                    <div class="history__content">
                        <div class="history__text">
                            <p>Proin et lectus a neque accumsan ultrices et id est. Nam tempor malesuada mollis. Vivamus
                                cursus eleifend condimentum.
                                Suspendisse dignissim urna a placerat interdum. Phasellus tristique augue sit amet
                                fringilla bibendum. Sed viverra
                                auctor tortor, id semper ante lobortis ac. Duis vitae dapibus leo, eu porttitor orci.
                                Duis maximus sem sed vulputate
                                scelerisque. Suspendisse eu eleifend libero, sit amet dignissim lectus. Etiam mauris
                                est, pretium at ante vehicula,
                                finibus vehicula est. Praesent tempus, massa ac ultrices commodo, arcu massa consectetur
                                leo, in pretium urna tortor
                                ultrices nulla. Vestibulum a tortor tempus, volutpat diam ut, volutpat tellus.
                            </p>
                            <p>Sed vehicula ligula mi, nec vestibulum turpis rutrum nec. Donec in massa eu nisi auctor
                                molestie. Nulla volutpat nec
                                velit nec mattis. Fusce venenatis ex eu tortor accumsan, non aliquam sapien congue</p>
                        </div>
                        <ul class="history__stats">
                            <li class="history__stat">
                                <p class="history__stat-value">400k+</p>
                                <p class="history__stat-label">Lorem ipsum dolor sit amet</p>
                            </li>
                            <li class="history__stat">
                                <p class="history__stat-value">95%</p>
                                <p class="history__stat-label">Lorem ipsum dolor sit amet</p>
                            </li>
                            <li class="history__stat">
                                <p class="history__stat-value">100%</p>
                                <p class="history__stat-label">Lorem ipsum dolor sit amet</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="policy">
            <div class="container">
                <div class="policy__head">
                    <div class="policy__inner">
                        <h2 class="title policy__title"><?= esc(lang('SiteCopy.get_insurance_policy')) ?></h2>
                        <p class="section-note policy__note">Lorem ipsum</p>
                    </div>
                    <div class="policy__buttons">
                        <button class="policy__button-prev" type="button"><img src="img/carers/arrow-prew.svg"
                                alt=""></button>
                        <button class="policy__button-next" type="button"><img src="img/carers/arrow-next.svg"
                                alt=""></button>
                    </div>
                </div>
                <div class="swiper policy__slider">
                    <ul class="policy__grid">
                        <li class="policy__card">
                            <div class="policy__card-img"><img src="img/carers/polici-icon.svg" alt=""></div>
                            <h3 class="policy__card-title">Nullam aliquet </h3>
                            <p class="policy__card-text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                vehicula
                                nulla, eu dictum odio </p>
                        </li>
                        <li class="policy__card">
                            <div class="policy__card-img"><img src="img/carers/polici-icon.svg" alt=""></div>
                            <h3 class="policy__card-title">Nullam aliquet </h3>
                            <p class="policy__card-text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                vehicula
                                nulla, eu dictum odio </p>
                        </li>
                        <li class="policy__card">
                            <div class="policy__card-img"><img src="img/carers/polici-icon.svg" alt=""></div>
                            <h3 class="policy__card-title">Nullam aliquet </h3>
                            <p class="policy__card-text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                vehicula
                                nulla, eu dictum odio </p>
                        </li>
                        <li class="policy__card">
                            <div class="policy__card-img"><img src="img/carers/polici-icon.svg" alt=""></div>
                            <h3 class="policy__card-title">Nullam aliquet </h3>
                            <p class="policy__card-text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                vehicula
                                nulla, eu dictum odio </p>
                        </li>
                    </ul>
                    <div class="swiper-pagination policy__pagination"></div>
                </div>
            </div>
        </section>
        <section class="powers">
            <div class="container">
                <p class="section-note powers__note">Lorem ipsum</p>
                <h2 class="title powers__title"><?= esc(lang('SiteCopy.policy_powers')) ?></h2>
                <div class="powers__slider swiper">
                    <ul class="powers__cards">
                        <li class="powers__card powers__card--img">
                            <img class="powers__img" src="img/carers/powers-1.png" alt="">
                        </li>
                        <li class="powers__card">
                            <h3 class="powers__card-title">Nullam aliquet </h3>
                            <div>
                                <p class="powers__card-text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                    vehicula
                                    nulla, eu dictum odio </p>
                                <a class="powers__card-link" href="#"><?= esc(lang('SiteCopy.read_more')) ?>
                                    <img src="img/rules-arrow.svg" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="powers__card">
                            <h3 class="powers__card-title">Nullam aliquet </h3>
                            <div>
                                <p class="powers__card-text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                    vehicula
                                    nulla, eu dictum odio </p>
                                <a class="powers__card-link" href="#"><?= esc(lang('SiteCopy.read_more')) ?>
                                    <img src="img/rules-arrow.svg" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="powers__card powers__card--dark">
                            <h3 class="powers__card-title">Nullam aliquet </h3>
                            <div>
                                <p class="powers__card-text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                    vehicula
                                    nulla, eu dictum odio </p>
                                <a class="powers__card-link" href="#"><?= esc(lang('SiteCopy.read_more')) ?>
                                    <img src="img/rules-arrow-white.svg" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="powers__card">
                            <h3 class="powers__card-title">Nullam aliquet </h3>
                            <div>
                                <p class="powers__card-text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                    vehicula
                                    nulla, eu dictum odio </p>
                                <a class="powers__card-link" href="#"><?= esc(lang('SiteCopy.read_more')) ?>
                                    <img src="img/rules-arrow.svg" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="powers__card powers__card--img">
                            <img class="powers__img" src="img/carers/powers-6.png" alt="">
                        </li>
                        <li class="powers__card powers__card--accent">
                            <h3 class="powers__card-title">Nullam aliquet </h3>
                            <div>
                                <p class="powers__card-text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                    vehicula
                                    nulla, eu dictum odio </p>
                                <a class="powers__card-link" href="#"><?= esc(lang('SiteCopy.read_more')) ?>
                                    <img src="img/rules-arrow.svg" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="powers__card">
                            <h3 class="powers__card-title">Nullam aliquet </h3>
                            <div>
                                <p class="powers__card-text">Nullam aliquet tellus ac dui aliquet gravida. Duis laoreet
                                    vehicula
                                    nulla, eu dictum odio </p>
                                <a class="powers__card-link" href="#"><?= esc(lang('SiteCopy.read_more')) ?>
                                    <img src="img/rules-arrow.svg" alt="">
                                </a>
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-pagination powers__pagination"></div>
                </div>
            </div>
        </section>

        <?= view('includes/visa-check'); ?>

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
        <section class="quote">
            <div class="container">
                <img class="quote__icon-open" src="img/quotes.svg" alt="">
                <p class="quote__text">Aliquam sed velit nec turpis. <br> Blandit condimentum sit amet eu erat. Sed
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

        <?= view('includes/insurance-popup'); ?>

        <?= view('includes/scripts'); ?>
</body>

</html>
