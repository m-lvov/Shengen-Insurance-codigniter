<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<?php
$locale = service('request')->getLocale();
$catalog = $locale === 'uk' ? require APPPATH . 'Language/uk/SiteClient.php' : [];
?>
<script type="application/json" id="site-translations"><?= json_encode($catalog, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR) ?></script>
<script src="/js/main.js?v=20261111-uk-2"></script>