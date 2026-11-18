<!doctype html>
<html lang="<?= esc($locale, 'attr') ?>">
<head>
    <meta charset="UTF-8">
    <title><?= esc(lang('DemoPolicy.title')) ?> | Go Schengen</title>
    <style>
        @page { margin: 42pt 48pt; }
        body {
            margin: 0;
            font: 10pt "DejaVu Sans", sans-serif;
            color: #02063c;
        }
        h1, h2, p { margin: 0; }
        table { width: 100%; border-collapse: collapse; }
        .header { background: #02063c; color: #fff; padding: 24pt; }
        .brand { font-size: 11pt; font-weight: bold; letter-spacing: 0.9pt; }
        .sample {
            background: #b5f476;
            color: #02063c;
            font-size: 8pt;
            font-weight: bold;
            padding: 6pt 8pt;
        }
        h1 { font-size: 24pt; margin: 16pt 0 4pt; }
        .subtitle { color: #dfdef2; }
        .reference { background: #f2f0fa; padding: 11pt 14pt; margin: 14pt 0 20pt; }
        .label { display: block; font-size: 8pt; font-weight: bold; color: #505776; }
        .reference-value { font-family: "DejaVu Sans Mono", monospace; font-size: 10pt; }
        h2 { font-size: 13pt; margin-bottom: 6pt; }
        .details { margin-bottom: 13pt; }
        .details td { width: 33%; vertical-align: top; padding: 7pt 9pt 0 0; }
        .travelers { margin-bottom: 15pt; }
        .travelers td { padding: 4pt 0; border-bottom: 0.6pt solid #e5e4ef; }
        .travelers .number { width: 22pt; color: #505776; font-size: 8pt; }
        .amounts { page-break-inside: avoid; }
        .amounts td { width: 50%; padding: 11pt 12pt; background: #f1f9e9; }
        .amount { display: block; margin-top: 2pt; font-size: 14pt; font-weight: bold; }
        .notice { color: #505776; font-size: 8pt; margin-top: 14pt; line-height: 1.5; }
    </style>
</head>
<body>
    <header class="header">
        <table>
            <tr>
                <td class="brand">GO SCHENGEN</td>
                <td style="text-align: right"><span class="sample"><?= esc(lang('DemoPolicy.sample')) ?></span></td>
            </tr>
        </table>
        <h1><?= esc(lang('DemoPolicy.title')) ?></h1>
        <p class="subtitle"><?= esc(lang('DemoPolicy.description')) ?></p>
    </header>

    <div class="reference">
        <span class="label"><?= esc(lang('DemoPolicy.reference')) ?></span>
        <span class="reference-value"><?= esc($reference) ?></span>
    </div>

    <h2><?= esc(lang('DemoPolicy.trip')) ?></h2>
    <p><span class="label"><?= esc(lang('DemoPolicy.destinations')) ?></span><?= esc($countries) ?></p>
    <table class="details">
        <tr>
            <td><span class="label"><?= esc(lang('DemoPolicy.start')) ?></span><?= esc($start) ?></td>
            <?php if ($end !== null): ?>
                <td><span class="label"><?= esc(lang('DemoPolicy.end')) ?></span><?= esc($end) ?></td>
            <?php endif ?>
            <td>
                <span class="label"><?= esc(lang('DemoPolicy.plan')) ?></span>
                <?= esc(lang($annual ? 'DemoPolicy.annual' : 'DemoPolicy.single')) ?>
            </td>
        </tr>
    </table>

    <h2><?= esc(lang('DemoPolicy.travelers')) ?></h2>
    <table class="travelers">
        <?php foreach ($tourists as $index => $tourist): ?>
            <tr>
                <td class="number"><?= $index + 1 ?></td>
                <td><?= esc($tourist['first_name'] . ' ' . $tourist['last_name']) ?></td>
            </tr>
        <?php endforeach ?>
    </table>

    <table class="amounts">
        <tr>
            <td><span class="label"><?= esc(lang('DemoPolicy.coverage')) ?></span><span class="amount"><?= esc($coverage) ?></span></td>
            <td><span class="label"><?= esc(lang('DemoPolicy.total')) ?></span><span class="amount"><?= esc($total) ?></span></td>
        </tr>
    </table>
    <p class="notice"><?= esc(lang('DemoPolicy.notice')) ?></p>
</body>
</html>
