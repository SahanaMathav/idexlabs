<?php defined('ALTUMCODE') || die() ?>

<div class="index-container">
    <div class="container index-container-content">
        <?= \Altum\Alerts::output_alerts() ?>

<script>
(function (w, d, s, o, f, js, fjs) {
        w[o] = w[o] || function () {
            (w[o].q = w[o].q || []).push(arguments) };
        js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];
        js.id = o; js.src = f; js.async = 1;
        fjs.parentNode.insertBefore(js, fjs) }
    (window, document, 'script', 'nw', 'https://chat.norby.io/widget'));
        nw('init', {
            apiKey: 'a5170dc1-937f-4828-8670-67c5e7781d4d',
            serviceBaseUrl: 'https://api.norby.io',
            lang: 'en',
            languageList: ['AR','DA','DE','EE','EN','ES','FI','FR','IT','JA','NO','PL','PT','RU','SV','TR','UA','ZH'],
            mainColor: '#4da69f',
            popupBotAvatarColor: '#4da69f',
            multichat: true,
            botName: 'Idex',
            imageTransferEnabled: true,
            side: 'right',
            marginSideDesktop: 80,
            marginBottomDesktop: 48,
            marginSideMobile: 16,
            marginBottomMobile: 16
        });
    </script>

<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Idexlabs" />
<link rel="manifest" href="/site.webmanifest" />

        <div class="row">
            <div class="col">
                <div class="text-left">
                    <div>
                        <span class="badge badge-light">
                            <i class="fas fa-fw fa-star fa-sm text-warning"></i><i class="fas fa-fw fa-star fa-sm text-warning"></i><i class="fas fa-fw fa-star fa-sm text-warning"></i><i class="fas fa-fw fa-star fa-sm text-warning"></i><i class="fas fa-fw fa-star fa-sm text-warning"></i>
                            <?= l('index.stars') ?>
                        </span>
                    </div>
                    <h1 class="index-header mb-4"><?= l('index.header') ?></h1>
                    <p class="index-subheader mb-5"><?= l('index.subheader') ?></p>

                    <div class="d-flex flex-column flex-lg-row">
                        <?php if(settings()->users->register_is_enabled): ?>
                            <a href="<?= url('register') ?>" class="btn index-button index-button-white bg-gradient border-0 mb-3 mb-lg-0 mr-lg-3">
                                <?= l('index.sign_up') ?> <i class="fas fa-fw fa-sm fa-arrow-right"></i>
                            </a>
                        <?php endif ?>

                        <?php //ALTUMCODE:DEMO if(!DEMO): ?>
                        <?php if(settings()->links->example_url): ?>
                            <a href="<?= settings()->links->example_url ?>" target="_blank" class="btn btn-outline-primary index-button mb-3 mb-lg-0">
                                <?= l('index.example') ?> <i class="fas fa-fw fa-sm fa-external-link-alt"></i>
                            </a>
                        <?php endif ?>
                        <?php //ALTUMCODE:DEMO endif ?>
                    </div>
                </div>
            </div>

            <div class="d-none d-lg-block col">
                <img src="<?= ASSETS_FULL_URL . 'images/heroI.png' ?>" class="index-image"/>
            </div>
        </div>
    </div>
</div>

<?php if(settings()->links->biolinks_is_enabled): ?>
    <div class="container mt-6">
        <div class="card index-highly-rounded border-0" data-aos="fade-up">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto col-lg-5 mb-4 mb-lg-0">
                        <img src="<?= ASSETS_FULL_URL . 'images/index/Speech.png' ?>" class="index-card-image index-highly-rounded" loading="lazy" />
                    </div>
                    <div class="col">
                        <div class="bg-primary-100 p-3 w-fit-content rounded">
                            <i class="fas fa-fw fa-users fa-lg text-primary"></i>
                        </div>

                        <h2 class="mt-3"><?= l('index.presentation1.header') ?></h2>
                        <p class="h6 mt-2"><?= l('index.presentation1.subheader') ?></p>

                        <ul class="list-style-none mt-4">
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation1.feature1') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation1.feature2') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation1.feature3') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation1.feature4') ?></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if(settings()->links->shortener_is_enabled): ?>
    <div class="container mt-6">
        <div class="card index-highly-rounded border-0" data-aos="fade-up">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto col-lg-5 mb-4 mb-lg-0">
                        <img src="<?= ASSETS_FULL_URL . 'images/index/Bbcode.png' ?>" class="index-card-image index-highly-rounded" loading="lazy" />
                    </div>
                    <div class="col">
                        <div class="bg-primary-100 p-3 w-fit-content rounded">
                            <i class="fas fa-fw fa-link fa-lg text-primary"></i>
                        </div>

                        <h2 class="mt-3"><?= l('index.presentation2.header') ?></h2>
                        <p class="h6 mt-2"><?= l('index.presentation2.subheader') ?></p>

                        <ul class="list-style-none mt-4">
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation2.feature1') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation2.feature2') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation2.feature3') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation2.feature4') ?></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if(settings()->links->static_is_enabled): ?>
    <div class="container mt-6">
        <div class="card index-highly-rounded border-0" data-aos="fade-up">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto col-lg-5 mb-4 mb-lg-0">
                        <img src="<?= ASSETS_FULL_URL . 'images/index/Character.png' ?>" class="index-card-image index-highly-rounded" loading="lazy" />
                    </div>
                    <div class="col">
                        <div class="bg-primary-100 p-3 w-fit-content rounded">
                            <i class="fas fa-fw fa-code fa-lg text-primary"></i>
                        </div>

                        <h2 class="mt-3"><?= l('index.presentation5.header') ?></h2>
                        <p class="h6 mt-2"><?= l('index.presentation5.subheader') ?></p>

                        <ul class="list-style-none mt-4">
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation5.feature1') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation5.feature2') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation5.feature3') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation5.feature4') ?></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if(settings()->codes->qr_codes_is_enabled): ?>
    <div class="container mt-6">
        <div class="card index-highly-rounded border-0" data-aos="fade-up">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto col-lg-5 mb-4 mb-lg-0">
                        <img src="<?= ASSETS_FULL_URL . 'images/index/Barcode.png' ?>" class="index-card-image index-highly-rounded" loading="lazy" />
                    </div>
                    <div class="col">
                        <div class="bg-primary-100 p-3 w-fit-content rounded">
                            <i class="fas fa-fw fa-qrcode fa-lg text-primary"></i>
                        </div>

                        <h2 class="mt-3"><?= l('index.presentation3.header') ?></h2>
                        <p class="h6 mt-2"><?= l('index.presentation3.subheader') ?></p>

                        <ul class="list-style-none mt-4">
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation3.feature1') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation3.feature2') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation3.feature3') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation3.feature4') ?></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                                <div><?= l('index.presentation3.feature5') ?></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<div class="container mt-6">
    <div class="card index-highly-rounded border-0" data-aos="fade-up">
        <div class="card-body">
            <div class="row">
                <div class="col-auto col-lg-5 mb-4 mb-lg-0">
                    <img src="<?= ASSETS_FULL_URL . 'images/index/Image.png' ?>" class="index-card-image index-highly-rounded" loading="lazy" />
                </div>
                <div class="col">
                    <div class="bg-primary-100 p-3 w-fit-content rounded">
                        <i class="fas fa-fw fa-chart-bar fa-lg text-primary"></i>
                    </div>

                    <h2 class="mt-3"><?= l('index.presentation4.header') ?></h2>
                    <p class="h6 mt-2"><?= l('index.presentation4.subheader') ?></p>

                    <ul class="list-style-none mt-4">
                        <li class="d-flex align-items-center mb-2">
                            <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                            <div><?= l('index.presentation4.feature1') ?></div>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                            <div><?= l('index.presentation4.feature2') ?></div>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                            <div><?= l('index.presentation4.feature3') ?></div>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="fas fa-fw fa-sm fa-check-circle text-success mr-3"></i>
                            <div><?= l('index.presentation4.feature4') ?></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-3"></div>

<div class="container mt-8">
    <div class="row">
        <style>
            /* File Links */
            .file-links-background {
                background-color: #ecfdf5;
            }
            .file-links-icon {
                color: #10b981;
            }

            /* VCard Links */
            .vcard-links-background {
                background-color: #ecfeff;
            }
            .vcard-links-icon {
                color: #06b6d4;
            }

            /* Event Links */
            .event-links-background {
                background-color: #eef2ff;
            }
            .event-links-icon {
                color: #6366f1;
            }

            /* Splash pages */
            .splash-pages-background {
                background-color: #eef2ff;
            }
            .splash-pages-icon {
                color: #06b6d4;
            }

            /* Domains */
            .domains-background {
                background-color: #faf5ff;
            }
            .domains-icon {
                color: #a855f7;
            }

            /* Projects */
            .projects-background {
                background-color: #fdf4ff;
            }
            .projects-icon {
                color: #d946ef;
            }

            /* File Links - Dark Theme */
            [data-theme-style="dark"] .file-links-background {
                background-color: #1a4731;
            }
            [data-theme-style="dark"] .file-links-icon {
                color: #047857;
            }

            /* VCard Links - Dark Theme */
            [data-theme-style="dark"] .vcard-links-background {
                background-color: #1a4044;
            }
            [data-theme-style="dark"] .vcard-links-icon {
                color: #025e73;
            }

            /* Event Links - Dark Theme */
            [data-theme-style="dark"] .event-links-background {
                background-color: #1a1c36;
            }
            [data-theme-style="dark"] .event-links-icon {
                color: #3134a1;
            }

            /* Splash pages - Dark Theme */
            [data-theme-style="dark"] .splash-pages-background {
                background-color: #1a1c36;
            }
            [data-theme-style="dark"] .splash-pages-icon {
                color: #025e73;
            }

            /* Domains - Dark Theme */
            [data-theme-style="dark"] .domains-background {
                background-color: #2d1e3f;
            }
            [data-theme-style="dark"] .domains-icon {
                color: #6d22a5;
            }

            /* Projects - Dark Theme */
            [data-theme-style="dark"] .projects-background {
                background-color: #321a36;
            }
            [data-theme-style="dark"] .projects-icon {
                color: #a316af;
            }
        </style>

        <?php if(settings()->links->files_is_enabled): ?>
            <div class="col-12 col-lg-4 p-4 icon-zoom-animation" data-aos="fade-up" data-aos-delay="100">
                <div class="card index-highly-rounded border-0 d-flex flex-column justify-content-between h-100">
                    <div class="card-body">
                        <div class="file-links-background mb-3 p-3 index-highly-rounded">
                            <i class="fas fa-fw fa-lg fa-file mr-3 file-links-icon"></i>
                            <span class="h5"><?= l('index.file_links.header') ?></span>
                        </div>

                        <span class="text-muted"><?= l('index.file_links.subheader') ?></span>
                    </div>
                </div>
            </div>
        <?php endif ?>

        <?php if(settings()->links->vcards_is_enabled): ?>
            <div class="col-12 col-lg-4 p-4 icon-zoom-animation" data-aos="fade-up" data-aos-delay="200">
                <div class="card index-highly-rounded border-0 d-flex flex-column justify-content-between h-100">
                    <div class="card-body">
                        <div class="vcard-links-background mb-3 p-3 index-highly-rounded">
                            <i class="fas fa-fw fa-lg fa-id-card mr-3 vcard-links-icon"></i>
                            <span class="h5"><?= l('index.vcard_links.header') ?></span>
                        </div>

                        <span class="text-muted"><?= l('index.vcard_links.subheader') ?></span>
                    </div>
                </div>
            </div>
        <?php endif ?>

        <?php if(settings()->links->events_is_enabled): ?>
            <div class="col-12 col-lg-4 p-4 icon-zoom-animation" data-aos="fade-up" data-aos-delay="300">
                <div class="card index-highly-rounded border-0 d-flex flex-column justify-content-between h-100">
                    <div class="card-body">
                        <div class="event-links-background mb-3 p-3 index-highly-rounded">
                            <i class="fas fa-fw fa-lg fa-calendar mr-3 event-links-icon"></i>
                            <span class="h5"><?= l('index.event_links.header') ?></span>
                        </div>

                        <span class="text-muted"><?= l('index.event_links.subheader') ?></span>
                    </div>
                </div>
            </div>
        <?php endif ?>

        <?php if(settings()->links->splash_page_is_enabled): ?>
            <div class="col-12 col-lg-4 p-4 icon-zoom-animation" data-aos="fade-up" data-aos-delay="400">
                <div class="card index-highly-rounded border-0 d-flex flex-column justify-content-between h-100">
                    <div class="card-body">
                        <div class="splash-pages-background mb-3 p-3 index-highly-rounded">
                            <i class="fas fa-fw fa-lg fa-droplet mr-3 splash-pages-icon"></i>
                            <span class="h5"><?= l('index.splash_pages.header') ?></span>
                        </div>

                        <span class="text-muted"><?= l('index.splash_pages.subheader') ?></span>
                    </div>
                </div>
            </div>
        <?php endif ?>

        <?php if(settings()->links->domains_is_enabled): ?>
            <div class="col-12 col-lg-4 p-4 icon-zoom-animation" data-aos="fade-up" data-aos-delay="500">
                <div class="card index-highly-rounded border-0 d-flex flex-column justify-content-between h-100">
                    <div class="card-body">
                        <div class="domains-background mb-3 p-3 index-highly-rounded">
                            <i class="fas fa-fw fa-lg fa-globe mr-3 domains-icon"></i>
                            <span class="h5"><?= l('index.domains.header') ?></span>
                        </div>

                        <span class="text-muted"><?= l('index.domains.subheader') ?></span>
                    </div>
                </div>
            </div>
        <?php endif ?>

        <div class="col-12 col-lg-4 p-4 icon-zoom-animation" data-aos="fade-up" data-aos-delay="600">
            <div class="card index-highly-rounded border-0 d-flex flex-column justify-content-between h-100">
                <div class="card-body">
                    <div class="projects-background mb-3 p-3 index-highly-rounded">
                        <i class="fas fa-fw fa-lg fa-project-diagram mr-3 projects-icon"></i>
                        <span class="h5"><?= l('index.projects.header') ?></span>
                    </div>

                    <span class="text-muted"><?= l('index.projects.subheader') ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if(settings()->links->shortener_is_enabled): ?>
    <div class="container mt-8">
        <div class="card py-4 index-highly-rounded border-0">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2><?= l('index.shortener_app_linking.header') ?></h2>
                    <p class="text-muted"><?= l('index.shortener_app_linking.subheader') ?></p>
                </div>

                <div class="d-flex flex-wrap justify-content-center">
                    <?php foreach(require APP_PATH . 'includes/app_linking.php' as $app_key => $app): ?>
                        <div class="bg-gray-100 index-highly-rounded w-fit-content p-3 m-4 icon-zoom-animation" data-toggle="tooltip" title="<?= $app['name'] ?>">
                            <span title="<?= $app['name'] ?>"><i class="<?= $app['icon'] ?> fa-fw fa-xl mx-1" style="color: <?= $app['color'] ?>"></i></span>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<div class="py-3"></div>

<div class="container mt-8">
    <div class="card py-4 index-highly-rounded border-0 bg-gray-900">
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-3 mb-4 mb-lg-0">
                    <div class="text-center d-flex flex-column">
                        <span class="font-weight-bold text-muted mb-3"><?= l('index.stats.links') ?></span>
                        <span class="h1 text-gradient-primary" style="--gradient-one: var(--purple); --gradient-two: var(--pink);"><?= nr($data->total_links, 0, true, true) . '+' ?></span>
                    </div>
                </div>

                <?php if(settings()->codes->qr_codes_is_enabled): ?>
                    <div class="col-12 col-lg-3 mb-4 mb-lg-0">
                        <div class="text-center d-flex flex-column">
                            <span class="font-weight-bold text-muted mb-3"><?= l('index.stats.qr_codes') ?></span>
                            <span class="h1 text-gradient-primary" style="--gradient-one: var(--teal); --gradient-two: var(--blue);"><?= nr($data->total_qr_codes, 0, true, true) . '+' ?></span>
                        </div>
                    </div>
                <?php endif ?>

                <div class="col-12 col-lg-3 mb-4 mb-lg-0">
                    <div class="text-center d-flex flex-column">
                        <span class="font-weight-bold text-muted mb-3"><?= l('index.stats.track_links') ?></span>
                        <span class="h1 text-gradient-primary" style="--gradient-one: var(--blue); --gradient-two: var(--purple);"><?= nr($data->total_track_links, 0, true, true) . '+' ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-3"></div>

<?php if(settings()->links->pixels_is_enabled): ?>
    <div class="container mt-8">
        <div class="card py-4 border-0 index-highly-rounded">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2><?= l('index.pixels.header') ?></h2>
                    <p class="text-muted"><?= l('index.pixels.subheader') ?></p>
                </div>

                <div class="row no-gutters">
                    <?php $i = 0; ?>
                    <?php foreach(require APP_PATH . 'includes/pixels.php' as $item): ?>
                        <div class="col-6 col-lg-4 p-4" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                            <div class="bg-gray-100 rounded-3x w-100 p-3 icon-zoom-animation text-truncate">
                                <i class="<?= $item['icon'] ?> fa-fw fa-lg mx-1" style="color: <?= $item['color'] ?>"></i>
                                <span class="h6"><?= $item['name'] ?></span>
                            </div>
                        </div>
                        <?php $i++ ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>


<?php if(settings()->tools->is_enabled && $data->enabled_tools): ?>
    <div class="py-3"></div>

    <div class="container mt-8">
        <h2 class="text-center mb-3"><?= sprintf(l('index.tools.header'), nr($data->enabled_tools)) ?> <i class="fas fa-fw fa-xs fa-screwdriver-wrench text-muted ml-1"></i></h2>

        <p class="text-muted text-center mb-4"><?= l('index.tools.subheader') ?></p>

        <div class="row position-relative">
            <div class="index-fade"></div>

            <?php foreach($data->tools_categories as $tool => $tool_properties): ?>
                <div class="col-12 col-lg-6 p-3 position-relative">
                    <div class="card"  style="background: <?= $tool_properties['color'] ?>; border-color: <?= $tool_properties['color'] ?>; color: white;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex text-truncate">
                                    <div class="d-flex align-items-center justify-content-center rounded mr-3 tool-icon" style="background: <?= $tool_properties['faded_color'] ?>;">
                                        <i class="<?= $tool_properties['icon'] ?> fa-fw" style="color: <?= $tool_properties['color'] ?>"></i>
                                    </div>

                                    <div class="text-truncate ml-3">
                                        <a href="<?= url('tools') ?>" class="stretched-link text-decoration-none" style="color: white;">
                                            <strong><?= l('tools.' . $tool) ?></strong>
                                        </a>
                                        <p class="text-truncate small m-0"><?= l('tools.' . $tool . '_help') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>


<?php if(\Altum\Plugin::is_active('aix') && settings()->aix->images_is_enabled && settings()->aix->images_display_latest_on_index): ?>
    <div class="py-3"></div>

    <div class="container mt-8">
        <div class="text-center mb-4">
            <h2 class="h3"><?= sprintf(l('index.images'), nr($data->total_images, 0, true, true)) ?></h2>
            <p class="text-muted"><?= l('index.images_subheader') ?></p>
        </div>

        <div class="card index-highly-rounded border-0">
            <div class="card-body">
                <div class="row no-gutters">
                    <?php foreach($data->images as $image): ?>
                        <div class="col-6 col-lg-3 p-4" data-aos="zoom-in">
                            <img src="<?= \Altum\Uploads::get_full_url('images') . $image->image ?>" class="img-fluid rounded" alt="<?= $image->input ?>" data-toggle="tooltip" title="<?= $image->input ?>" />
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if(\Altum\Plugin::is_active('aix') && settings()->aix->documents_is_enabled): ?>
    <div class="py-3"></div>

    <div class="container mt-8">
        <div class="card index-highly-rounded bg-gray-900">
            <div class="card-body py-5 py-lg-6 text-center">
                <span class="h3 text-gray-100"><?= sprintf(l('index.documents'), nr($data->total_documents, 0, true, true)) ?></span>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if(settings()->main->display_index_testimonials): ?>
    <div class="py-3"></div>

    <div class="p-4 mt-8">
        <div class="py-7 bg-primary-100 rounded-2x">
            <div class="container">
                <div class="text-center">
                    <h2><?= l('index.testimonials.header') ?> <i class="fas fa-fw fa-xs fa-check-circle text-success"></i></h2>
                </div>

                <div class="row mt-8">
                    <?php foreach(['one', 'two', 'three'] as $key => $value): ?>
                        <div class="col-12 col-lg-4 mb-6 mb-lg-0" data-aos="fade-up" data-aos-delay="<?= $key * 100 ?>">
                            <div class="card border-0 zoom-animation-subtle">
                                <div class="card-body">
                                    <img src="<?= ASSETS_FULL_URL . 'images/index/testi-' . $value . '.png' ?>" class="img-fluid index-testimonial-avatar" alt="<?= l('index.testimonials.' . $value . '.name') . ', ' . l('index.testimonials.' . $value . '.attribute') ?>" loading="lazy" />

                                    <p class="mt-5">
                                        <span class="text-gray-800 font-weight-bold text-muted h5">“</span>
                                        <span><?= l('index.testimonials.' . $value . '.text') ?></span>
                                        <span class="text-gray-800 font-weight-bold text-muted h5">”</span>
                                    </p>

                                    <div class="blockquote-footer mt-4">
                                        <span class="font-weight-bold"><?= l('index.testimonials.' . $value . '.name') ?></span>, <span class="text-muted"><?= l('index.testimonials.' . $value . '.attribute') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>



<?php if(settings()->main->display_index_plans): ?>
<style>
:root {
    /* Light theme variables */
    --pricing-bg: #000;
    --pricing-text: #333333;
    --pricing-border: #eaeaea;
    --pricing-card-bg: #000;
    --pricing-card-shadow: rgba(0, 0, 0, 0.1);
    --pricing-hover-shadow: rgba(0, 0, 0, 0.15);
    --pricing-muted: #666666;
}

[data-theme='dark'] {
    /* Dark theme variables */
    --pricing-bg: #0d0d0d;
    --pricing-text: #ffffff;
    --pricing-border: #2d2d2d;
    --pricing-card-bg: #242424;
    --pricing-card-shadow: rgba(0, 0, 0, 0.3);
    --pricing-hover-shadow: rgba(0, 0, 0, 0.4);
    --pricing-muted: #a0a0a0;
}

.pricing-container {
    padding: 2rem 0;
    font-family: 'Inter', sans-serif;
    background: black;
    color: white;
}

.pricing-header {
    text-align: center;
    margin-bottom: 3rem;   
}

.pricing-header h2 {
    color: white;
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.pricing-header p {
    color: white;
}

.pricing-plans {
    display: flex;
    justify-content: center;
    gap: 2rem;
    flex-wrap: wrap;
    padding: 1rem;
    max-width: 1200px;
    margin: 0 auto;
}

.pricing-plan {
    background: black;
    border: 1px solid var(--pricing-border);
    border-radius: 12px;
    box-shadow: 0 4px 6px var(--pricing-card-shadow);
    padding: 2rem;
    min-width: 280px;
    flex: 1;
    max-width: 350px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.pricing-plan:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 12px var(--pricing-hover-shadow);
}

.plan-header {
    text-align: center;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid var(--pricing-border);
    position: relative;
}

.plan-name {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: var(--pricing-text);
}

.plan-price {
    font-size: 2.5rem;
    font-weight: 700;
    color: #4da69f;
}

.plan-features {
    margin: 1.5rem 0;
    list-style: none;
    padding: 0;
}

.plan-features li {
    padding: 0.75rem 0;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: white;

    
}

.plan-features li:last-child {
    border-bottom: none;
}

.feature-check {
    color: #4da69f;
    font-weight: bold;
}

.feature-cross {
    color: white;
}

.plan-cta {
    text-align: center;
    margin-top: 2rem;
}

.plan-button {
    background: #4da69f;
    color: white;
    border: none;
    padding: 0.75rem 2rem;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
    width: 100%;
}

.plan-button:hover {
    background: #3d8f89;
    transform: translateY(-2px);
}

/* Responsive Design Improvements */
@media (max-width: 1024px) {
    .pricing-plans {
        gap: 1rem;
        padding: 0.5rem;
    }
    
    .pricing-plan {
        min-width: 250px;
    }
}

@media (max-width: 768px) {
    .pricing-plans {
        flex-direction: column;
        align-items: center;
    }
    
    .pricing-plan {
        max-width: 100%;
        width: 100%;
        margin-bottom: 1rem;
    }
    
    .pricing-header h2 {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .pricing-container {
        padding: 1rem;
    }
    
    .plan-price {
        font-size: 2rem;
    }
    
    .plan-features li {
        font-size: 0.9rem;
    }
}

/* Popular Plan Highlight */
.pricing-plan.popular {
    border: 2px solid #4da69f;
    transform: scale(1.05);
}

.pricing-plan.popular:hover {
    transform: scale(1.05) translateY(-5px);
}

.popular-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: #4da69f;
    color: white;
    padding: 0.25rem 1rem;
    border-radius: 20px;
    font-size: 0.8rem;
}
</style>

<div class="pricing-container">
    <div class="pricing-header">
        <h2><?= l('index.pricing.header') ?></h2>
        <p class="text-muted"><?= l('index.pricing.subheader') ?></p>
    </div>
    
    <div class="pricing-plans">
        <!-- Basic Plan -->
        <div class="pricing-plan">
            <div class="plan-header">
                <div class="plan-name">Basic</div>
                <div class="plan-price">$399</div>
            </div>
            <ul class="plan-features">
                <li><span class="feature-check">✓</span> Auto open app on mobile</li>
                <li><span class="feature-check">✓</span> API access</li>
                <li><span class="feature-cross">✕</span> No ads</li>
                <li><span class="feature-check">✓</span> Sensitive content</li>
                <li><span class="feature-cross">✕</span> Password protection</li>
                <li><span class="feature-check">✓</span> Custom CSS & JS</li>
                <li><span class="feature-cross">✕</span> Additional fonts</li>
                <li><span class="feature-cross">✕</span> SEO features</li>
                <li><span class="feature-cross">✕</span> Custom branding</li>
                <li>1 custom domain</li>
                <li>10 projects</li>
                <li>0 QR codes</li>
                <li>0 vcard links</li>
                <li>0 file links</li>
                <li>15 biolink pages</li>
            </ul>
            <div class="plan-cta">
                <a href="<?= url('register') ?>" class="plan-button">Get Started</a>
            </div>
        </div>

        <!-- Standard Plan -->
        <div class="pricing-plan popular">
            <div class="popular-badge">Most Popular</div>
            <div class="plan-header">
                <div class="plan-name">Standard</div>
                <div class="plan-price">$699</div>
            </div>
            <ul class="plan-features">
                <li><span class="feature-check">✓</span> Auto open app on mobile</li>
                <li><span class="feature-check">✓</span> API access</li>
                <li><span class="feature-check">✓</span> No ads</li>
                <li><span class="feature-check">✓</span> Sensitive content</li>
                <li><span class="feature-check">✓</span> Password protection</li>
                <li><span class="feature-check">✓</span> Custom CSS & JS</li>
                <li><span class="feature-check">✓</span> Additional fonts</li>
                <li><span class="feature-cross">✕</span> SEO features</li>
                <li><span class="feature-cross">✕</span> Custom branding</li>
                <li>3 custom domains</li>
                <li>25 projects</li>
                <li>25 QR codes</li>
                <li>25 vcard links</li>
                <li>25 file links</li>
                <li>50 biolink pages</li>
            </ul>
            <div class="plan-cta">
                <a href="<?= url('register') ?>" class="plan-button">Choose Standard</a>
            </div>
        </div>

        <!-- Premium Plan -->
        <div class="pricing-plan">
            <div class="plan-header">
                <div class="plan-name">Premium</div>
                <div class="plan-price">$899</div>
            </div>
            <ul class="plan-features">
                <li><span class="feature-check">✓</span> Auto open app on mobile</li>
                <li><span class="feature-check">✓</span> API access</li>
                <li><span class="feature-check">✓</span> No ads</li>
                <li><span class="feature-check">✓</span> Sensitive content</li>
                <li><span class="feature-check">✓</span> Password protection</li>
                <li><span class="feature-check">✓</span> Custom CSS & JS</li>
                <li><span class="feature-check">✓</span> Additional fonts</li>
                <li><span class="feature-check">✓</span> SEO features</li>
                <li><span class="feature-check">✓</span> Custom branding</li>
                <li><span class="feature-check">✓</span> 10 custom domains</li>
                <li><span class="feature-check">✓</span> Unlimited projects</li>
                <li><span class="feature-check">✓</span> Unlimited QR codes</li>
                <li><span class="feature-check">✓</span> Unlimited vcard links</li>
                <li><span class="feature-check">✓</span> Unlimited file links</li>
                <li><span class="feature-check">✓</span> Unlimited biolink pages</li>
            </ul>
            <div class="plan-cta">
                <a href="<?= url('register') ?>" class="plan-button">Choose Premium</a>
            </div>
        </div>
    </div>
</div>
<?php endif ?>



<?php if(settings()->main->display_index_faq): ?>
    <div class="py-3"></div>

    <div class="container mt-8">
        <div class="text-center mb-5">
            <h2><?= sprintf(l('index.faq.header'), '<span class="text-primary">', '</span>') ?></h2>
        </div>

        <div class="accordion index-faq" id="faq_accordion">
            <?php foreach(['one', 'two', 'three', 'four'] as $key): ?>
                <div class="card index-highly-rounded">
                    <div class="card-body">
                        <div class="" id="<?= 'faq_accordion_' . $key ?>">
                            <h3 class="mb-0">
                                <button class="btn btn-lg font-weight-bold btn-block d-flex justify-content-between text-gray-800 px-0 icon-zoom-animation" type="button" data-toggle="collapse" data-target="<?= '#faq_accordion_answer_' . $key ?>" aria-expanded="true" aria-controls="<?= 'faq_accordion_answer_' . $key ?>">
                                    <span><?= l('index.faq.' . $key . '.question') ?></span>

                                    <span data-icon>
                                        <i class="fas fa-fw fa-circle-chevron-down"></i>
                                    </span>
                                </button>
                            </h3>
                        </div>

                        <div id="<?= 'faq_accordion_answer_' . $key ?>" class="collapse text-muted mt-3" aria-labelledby="<?= 'faq_accordion_' . $key ?>" data-parent="#faq_accordion">
                            <?= l('index.faq.' . $key . '.answer') ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <?php ob_start() ?>
    <script>
        'use strict';

        $('#faq_accordion').on('show.bs.collapse', event => {
            let svg = event.target.parentElement.querySelector('[data-icon] svg')
            svg.style.transform = 'rotate(180deg)';
            svg.style.color = 'var(--primary)';
        })

        $('#faq_accordion').on('hide.bs.collapse', event => {
            let svg = event.target.parentElement.querySelector('[data-icon] svg')
            svg.style.color = 'var(--primary-800)';
            svg.style.removeProperty('transform');
        })
    </script>
    <?php \Altum\Event::add_content(ob_get_clean(), 'javascript') ?>
<?php endif ?>

<?php if(settings()->users->register_is_enabled): ?>
    <div class="py-3"></div>

    <div class="container mt-8">
        <div class="card index-highly-rounded border-0 index-cta py-5 py-lg-6" data-aos="fade-up">
            <div class="card-body row align-items-center justify-content-center">
                <div class="col-12 col-lg-5">
                    <div class="text-center text-lg-left mb-4 mb-lg-0">
                        <h2 class="h1"><?= l('index.cta.header') ?></h2>
                        <p class="h5"><?= l('index.cta.subheader') ?></p>
                    </div>
                </div>

                <div class="col-12 col-lg-5 mt-4 mt-lg-0">
                    <div class="text-center text-lg-right">
                        <?php if(\Altum\Authentication::check()): ?>
                            <a href="<?= url('dashboard') ?>" class="btn btn-primary zoom-animation">
                                <?= l('dashboard.menu') ?> <i class="fas fa-fw fa-arrow-right"></i>
                            </a>
                        <?php else: ?>
                            <a href="<?= url('register') ?>" class="btn btn-primary zoom-animation">
                                <?= l('index.cta.register') ?> <i class="fas fa-fw fa-arrow-right"></i>
                            </a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if(count($data->blog_posts)): ?>
    <div class="py-3"></div>

    <div class="container mt-8">
        <div class="text-center mb-5">
            <h2><?= sprintf(l('index.blog.header'), '<span class="text-primary">', '</span>') ?></h2>
        </div>

        <div class="row">
            <?php foreach($data->blog_posts as $blog_post): ?>
                <div class="col-12 col-lg-4 p-4">
                    <div class="card h-100 zoom-animation-subtle">
                        <div class="card-body">
                            <?php if($blog_post->image): ?>
                                <a href="<?= SITE_URL . ($blog_post->language ? \Altum\Language::$active_languages[$blog_post->language] . '/' : null) . 'blog/' . $blog_post->url ?>" aria-label="<?= $blog_post->title ?>">
                                    <img src="<?= \Altum\Uploads::get_full_url('blog') . $blog_post->image ?>" class="blog-post-image-small img-fluid w-100 rounded mb-4" alt="<?= $blog_post->image_description ?>" loading="lazy" />
                                </a>
                            <?php endif ?>

                            <a href="<?= SITE_URL . ($blog_post->language ? \Altum\Language::$active_languages[$blog_post->language] . '/' : null) . 'blog/' . $blog_post->url ?>">
                                <h3 class="h5 card-title mb-2"><?= $blog_post->title ?></h3>
                            </a>

                            <p class="text-muted mb-0"><?= $blog_post->description ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>


<?php ob_start() ?>
<link rel="stylesheet" href="<?= ASSETS_FULL_URL . 'css/libraries/aos.min.css?v=' . PRODUCT_CODE ?>">
<?php \Altum\Event::add_content(ob_get_clean(), 'head') ?>

<?php ob_start() ?>
<script src="<?= ASSETS_FULL_URL . 'js/libraries/aos.min.js?v=' . PRODUCT_CODE ?>"></script>

<script>
    AOS.init({
        delay: 100,
        duration: 600
    });
</script>
<?php \Altum\Event::add_content(ob_get_clean(), 'javascript') ?>
