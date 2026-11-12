<?php
$contactOld = session()->getFlashdata('contact_old') ?? [];
?>
<section class="contact" id="contact">
    <div class="container">
        <h2 class="title contact__title"><?= esc(lang('SiteCopy.any_questions_left')) ?></h2>
        <p class="section-note contact__note"><?= esc(lang('SiteCopy.if_you_have_any_questions_or_are_interested_in')) ?></p>
        <?php $contactError = session()->getFlashdata('contact_error'); ?>
        <?php if ($contactError): ?>
            <p class="contact__error" role="alert">
                <?= esc($contactError) ?>
            </p>
        <?php endif; ?>
        <form class="contact__form" action="/contact" method="post" novalidate>
            <?=csrf_field()?>
            <div class="contact__select" data-contact-select>
                <button class="contact__select-trigger" type="button">
                            <span class="contact__select-value">
                                <span class="contact__select-text"><?= esc(lang('SiteCopy.type_of_question')) ?></span>
                            </span>
                </button>
                <input class="contact__select-input" type="hidden" name="questionType" value="<?= esc($contactOld['questionType'] ?? '') ?>">
                <ul class="contact__select-list" hidden>
                    <li class="contact__select-item">
                        <button class="contact__select-option" type="button" data-value="choosing-insurance">
                            <?= esc(lang('SiteCopy.which_insurance_plan_is_right_for_my_trip')) ?>
                        </button>
                    </li>
                    <li class="contact__select-item">
                        <button class="contact__select-option" type="button" data-value="insurance-requirement">
                            <?= esc(lang('SiteCopy.do_i_need_insurance_for_my_visa_or_destination')) ?>
                        </button>
                    </li>
                    <li class="contact__select-item">
                        <button class="contact__select-option" type="button" data-value="policy-coverage">
                            <?= esc(lang('SiteCopy.what_does_my_insurance_policy_cover')) ?>
                        </button>
                    </li>
                    <li class="contact__select-item">
                        <button class="contact__select-option" type="button" data-value="visa-refusal-refund">
                            <?= esc(lang('SiteCopy.how_can_i_get_a_refund_if_my_visa_is_refused')) ?>
                        </button>
                    </li>
                    <li class="contact__select-item">
                        <button class="contact__select-option" type="button" data-value="partnership">
                            <?= esc(lang('SiteCopy.how_can_i_become_a_goschengen_partner')) ?>
                        </button>
                    </li>
                </ul>
            </div>
            <input class="contact__input" type="text" name="name" placeholder="<?= esc(lang('SiteCopy.name'), 'attr') ?>" value="<?= esc($contactOld['name'] ?? '') ?>">
            <input class="contact__input" type="tel" name="phone" placeholder="<?= esc(lang('SiteCopy.380_xx_xxx_xx_xx'), 'attr') ?>" value="<?= esc($contactOld['phone'] ?? '') ?>"
                   inputmode="tel" autocomplete="tel" pattern="\+380 [0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}">
            <input class="contact__input" type="email" name="email" placeholder="<?= esc(lang('SiteCopy.email'), 'attr') ?>" value="<?= esc($contactOld['email'] ?? '') ?>">
            <button class="contact__submit" type="submit"><?= esc(lang('SiteCopy.send')) ?></button>
        </form>
        <?php $contactSuccess = session()->getFlashdata('contact_success'); ?>
        <?php if($contactSuccess): ?>
            <p class="contact__success" role="status">
                <?= esc($contactSuccess) ?>
            </p>
        <?php endif; ?>
    </div>
</section>
