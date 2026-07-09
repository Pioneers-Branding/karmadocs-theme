<?php
/**
 * Template Name: Karma Psychiatric and Medicine Management
 * Description: Landing page with meta pixel tracking, form, and FAQ
 */
/* Force full-width layout */
add_filter('body_class', function ($classes) {
    $classes[] = 'page-template-lp';
    return $classes;
});
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // Meta description
    $meta_desc = 'Personalized psychiatric care including TMS therapy, medication management, and talk therapy for depression, anxiety, OCD, PTSD, ADHD, and more.';
    echo '<meta name="description" content="' . esc_attr($meta_desc) . '">' . "\n";
    ?>
    <title><?php wp_title('| KarmaDocs', true, 'right'); ?></title>

    <!-- Preconnect for fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>

    <!-- Meta Pixel Code - Added in header for proper tracking -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1943390473007545');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1943390473007545&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <style>
        /* ── RESET & BASE ── */
        .page-template-lp,
        .page-template-lp body {
            margin: 0;
            padding: 0;
            font-family: 'Outfit', system-ui, sans-serif;
            -webkit-font-smoothing: antialiased;
            background: #fff;
            color: #1f2937;
            overflow-x: hidden;
        }

        /* ── NAV ── */
        .page-template-lp .lp-nav {
            position: fixed;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 1200px;
            z-index: 100;
            padding: 0;
            transition: all .35s;
        }

        .page-template-lp .lp-nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 6px 24px;
            border-radius: 0;
            transition: all .35s;
        }

        .page-template-lp .lp-nav.scrolled .lp-nav-inner {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(16px);
            border-radius: 100px;
            box-shadow: 0 4px 28px rgba(0, 0, 0, 0.18);
            padding: 2px 28px;
        }

        .page-template-lp .lp-nav.scrolled .lp-logo {
            filter: none;
        }

        .page-template-lp .lp-logo {
            filter: brightness(0) invert(1);
            transition: all .35s;
        }

        .page-template-lp .lp-loc {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 5px 12px;
            border-radius: 100px;
            border: 1px solid rgb(109, 109, 109);
            background: rgb(255, 255, 255);
            color: rgba(129, 129, 129, 0.9);
            font-size: 11px;
            font-weight: 500;
            transition: all .25s;
            cursor: default;
            backdrop-filter: blur(6px);
        }

        .page-template-lp .lp-loc-desktop {
            display: flex;
            gap: 8px;
        }

        .page-template-lp .lp-loc-mobile {
            display: none;
        }

        /* ── HERO ── */
        .page-template-lp .lp-hero {
            position: relative;
            height: 85vh;
            min-height: 560px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #2d1b4e;
        }

        .page-template-lp .lp-hero video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .page-template-lp .lp-hero::after {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 2;
            background: linear-gradient(135deg, rgba(26, 43, 74, 0.82) 0%, rgba(118, 60, 152, 0.4) 55%, rgba(26, 43, 74, 0.72) 100%);
        }

        .page-template-lp .lp-hero-inner {
            position: relative;
            z-index: 3;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .page-template-lp .lp-hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 56px;
            align-items: center;
        }

        /* ── BADGE ── */
        .page-template-lp .lp-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            border-radius: 100px;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.25);
            font-size: 12px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 20px;
            backdrop-filter: blur(6px);
        }

        .page-template-lp .lp-badge-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #fff;
            animation: lp-blink 2s infinite;
        }

        @keyframes lp-blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.3;
            }
        }

        /* ── HEADING ── */
        .page-template-lp .lp-hero h1 {
            font-size: clamp(28px, 5vw, 46px);
            font-weight: 900;
            line-height: 1.07;
            letter-spacing: -0.03em;
            margin-bottom: 16px;
            color: #fff;
        }

        .page-template-lp .lp-hero h1 em {
            font-style: normal;
            color: #f0d9ff;
        }

        .page-template-lp .lp-hero .lp-sub {
            font-size: clamp(13px, 1.5vw, 15px);
            color: rgba(255, 255, 255, 0.75);
            line-height: 1.75;
            max-width: 460px;
            margin-bottom: 28px;
        }

        /* ── STATS ── */
        .page-template-lp .lp-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .page-template-lp .lp-st {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border-radius: 14px;
            padding: 14px 18px;
            text-align: center;
            min-width: 80px;
            transition: all .3s;
        }

        .page-template-lp .lp-st:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
        }

        .page-template-lp .lp-st-num {
            display: block;
            font-size: 26px;
            font-weight: 900;
            color: #fff;
            line-height: 1.1;
        }

        .page-template-lp .lp-st-label {
            display: block;
            font-size: 10px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.7);
            margin-top: 4px;
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }

        /* ── FORM CARD ── */
        .page-template-lp .lp-card {
            background: #fff;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(0, 0, 0, 0.04);
        }

        .page-template-lp .lp-card h2 {
            font-size: 22px;
            font-weight: 800;
            color: #1a2b4a;
            margin-bottom: 4px;
        }

        .page-template-lp .lp-card .lp-card-sub {
            font-size: 13px;
            color: #9ca3af;
            margin-bottom: 22px;
        }

        .page-template-lp .lp-fld {
            margin-bottom: 14px;
        }

        .page-template-lp .lp-fld label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: #4b5563;
            margin-bottom: 5px;
        }

        .page-template-lp .lp-fld label .lp-r {
            color: #ef4444;
        }

        .page-template-lp .lp-fld input,
        .page-template-lp .lp-fld select,
        .page-template-lp .lp-fld textarea {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid #e5e7eb;
            border-radius: 10px;
            font-size: 14px;
            color: #1f2937;
            background: #fafafa;
            transition: all .25s;
            outline: none;
            font-family: inherit;
        }

        .page-template-lp .lp-fld input::placeholder,
        .page-template-lp .lp-fld textarea::placeholder {
            color: #9ca3af;
        }

        .page-template-lp .lp-fld input:focus,
        .page-template-lp .lp-fld select:focus,
        .page-template-lp .lp-fld textarea:focus {
            border-color: #763C98;
            box-shadow: 0 0 0 3px rgba(118, 60, 152, 0.1);
            background: #fff;
        }

        .page-template-lp .lp-fld select {
            appearance: none;
            cursor: pointer;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%239ca3af'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
            padding-right: 36px;
        }

        .page-template-lp .lp-fld textarea {
            resize: none;
        }

        .page-template-lp .lp-btn-submit {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            letter-spacing: 0.01em;
            background: linear-gradient(135deg, #763C98 0%, #5e3080 100%);
            box-shadow: 0 4px 16px rgba(118, 60, 152, 0.3);
            transition: all .3s;
        }

        .page-template-lp .lp-btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(118, 60, 152, 0.4);
        }

        .page-template-lp .lp-btn-submit:active {
            transform: translateY(0);
        }

        .page-template-lp .lp-card .lp-trust {
            text-align: center;
            font-size: 11px;
            color: #c9cdd3;
            margin-top: 10px;
        }

        /* ── FAQ ── */
        .page-template-lp .lp-faq-section {
            background: #f8f9fb;
            padding: 64px 0;
        }

        .page-template-lp .lp-faq-wrap {
            max-width: 680px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .page-template-lp .lp-faq-title {
            text-align: center;
            margin-bottom: 36px;
        }

        .page-template-lp .lp-faq-title h2 {
            font-size: clamp(24px, 4vw, 32px);
            font-weight: 800;
            color: #1a2b4a;
        }

        .page-template-lp .lp-faq-title p {
            font-size: 14px;
            color: #9ca3af;
            margin-top: 6px;
        }

        .page-template-lp .lp-faq-item {
            background: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 14px;
            margin-bottom: 8px;
            transition: all .3s;
            overflow: hidden;
        }

        .page-template-lp .lp-faq-item:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        }

        .page-template-lp .lp-faq-q {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 16px 20px;
            border: none;
            background: none;
            cursor: pointer;
            text-align: left;
            gap: 14px;
            font-family: inherit;
        }

        .page-template-lp .lp-faq-q .lp-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: rgba(118, 60, 152, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .page-template-lp .lp-faq-q .lp-icon svg {
            width: 18px;
            height: 18px;
            color: #763C98;
        }

        .page-template-lp .lp-faq-q span {
            flex: 1;
            font-size: 14px;
            font-weight: 600;
            color: #1a2b4a;
        }

        .page-template-lp .lp-faq-q .lp-chevron {
            width: 18px;
            height: 18px;
            color: #c9cdd3;
            flex-shrink: 0;
            transition: transform .3s;
        }

        .page-template-lp .lp-faq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .4s ease;
        }

        .page-template-lp .lp-faq-a.open {
            max-height: 300px;
        }

        .page-template-lp .lp-faq-a p {
            padding: 0 20px 18px 70px;
            font-size: 13px;
            line-height: 1.75;
            color: #6b7280;
        }

        /* ── FOOTER ── */
        .page-template-lp .lp-footer {
            background: #efefef;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 20px 24px;
        }

        .page-template-lp .lp-footer-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
        }

        .page-template-lp .lp-footer p {
            color: rgba(0, 0, 0, 0.6);
            font-size: 12px;
        }

        .page-template-lp .lp-footer .lp-copy {
            color: rgba(0, 0, 0, 0.35);
            font-size: 11px;
        }

        /* ── MOBILE FAQ LINK ── */
        .page-template-lp .lp-faq-link {
            display: none;
            align-items: center;
            gap: 4px;
            padding: 6px 14px;
            border-radius: 100px;
            border: 1px solid rgba(255, 255, 255, 0.35);
            background: rgba(255, 255, 255, 0.15);
            color: rgba(255, 255, 255, 0.9);
            font-size: 11px;
            font-weight: 600;
            text-decoration: none;
            backdrop-filter: blur(6px);
            transition: all .25s;
        }

        .page-template-lp .lp-faq-link:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: rgba(255, 255, 255, 0.6);
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 1023px) {
            .page-template-lp .lp-hero-grid {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            .page-template-lp .lp-hero-left {
                text-align: center;
            }

            .page-template-lp .lp-hero .lp-sub {
                margin-left: auto;
                margin-right: auto;
            }

            .page-template-lp .lp-stats {
                justify-content: center;
            }

            .page-template-lp .lp-loc-desktop {
                display: none !important;
            }

            .page-template-lp .lp-loc-mobile {
                display: flex !important;
            }

            .page-template-lp .lp-faq-link {
                display: inline-flex !important;
            }

            .page-template-lp .lp-nav.scrolled .lp-nav-inner {
                padding: 8px 16px;
            }
        }

        @media (max-width: 640px) {
            .page-template-lp .lp-hero {
                height: auto;
                min-height: auto;
                padding: 70px 0 32px;
            }

            .page-template-lp .lp-hero-inner {
                padding: 0 16px;
            }

            .page-template-lp .lp-hero-grid {
                gap: 24px;
            }

            .page-template-lp .lp-badge {
                font-size: 10px;
                padding: 5px 12px;
                margin-bottom: 16px;
            }

            .page-template-lp .lp-hero h1 {
                font-size: 26px;
                margin-bottom: 12px;
            }

            .page-template-lp .lp-hero .lp-sub {
                font-size: 13px;
                margin-bottom: 20px;
            }

            .page-template-lp .lp-stats {
                gap: 8px;
            }

            .page-template-lp .lp-st {
                padding: 10px 12px;
                min-width: 68px;
            }

            .page-template-lp .lp-st-num {
                font-size: 20px;
            }

            .page-template-lp .lp-st-label {
                font-size: 9px;
            }

            .page-template-lp .lp-card {
                padding: 22px 16px;
                border-radius: 14px;
            }

            .page-template-lp .lp-card h2 {
                font-size: 18px;
            }

            .page-template-lp .lp-form-row {
                display: block !important;
            }

            .page-template-lp .lp-form-row .lp-fld {
                margin-bottom: 14px;
            }

            .page-template-lp .lp-nav {
                top: 10px;
                width: calc(100% - 24px);
            }

            .page-template-lp .lp-nav.scrolled .lp-nav-inner {
                padding: 8px 16px;
            }

            .page-template-lp .lp-faq-q {
                padding: 14px 16px;
                gap: 10px;
            }

            .page-template-lp .lp-faq-q .lp-icon {
                width: 30px;
                height: 30px;
            }

            .page-template-lp .lp-faq-q .lp-icon svg {
                width: 15px;
                height: 15px;
            }

            .page-template-lp .lp-faq-a p {
                padding-left: 56px;
                font-size: 12px;
            }

            .page-template-lp .lp-footer-inner {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>

    <!-- NAV -->
    <nav class="lp-nav" id="lp-nav">
        <div class="lp-nav-inner">
            <a href="<?php echo home_url('/'); ?>">
                <img class="lp-logo" src="<?php echo get_template_directory_uri(); ?>/assets/banner-video.mp4"
                    alt="KarmaDocs" style="height:64px;">
            </a>
            <div class="lp-loc-desktop">
                <span class="lp-loc">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="12" height="12">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Palm Springs
                </span>
                <span class="lp-loc">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="12" height="12">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Rancho Mirage
                </span>
                <span class="lp-loc">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="12" height="12">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Twentynine Palms
                </span>
            </div>
            <a href="#lp-faq-section" class="lp-faq-link">FAQ</a>
        </div>
    </nav>

    <!-- HERO -->
    <section class="lp-hero">
        <video autoplay muted loop playsinline preload="auto">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/hero-video.mp4" type="video/mp4">
        </video>

        <div class="lp-hero-inner">
            <div class="lp-hero-grid">
                <!-- Left -->
                <div class="lp-hero-left">
                    <div class="lp-badge">
                        <span class="lp-badge-dot"></span>
                        Comprehensive Psychiatric Services
                    </div>
                    <h1>Compassionate Mental Health <em>Care That Works</em></h1>
                    <p class="lp-sub">From advanced TMS therapy and medication management to individual counseling, we
                        offer a full spectrum of psychiatric services tailored to your unique needs. Begin your healing
                        journey today.</p>
                    <div class="lp-stats">
                        <div class="lp-st"><span class="lp-st-num">85%</span><span class="lp-st-label">Success
                                Rate</span></div>
                        <div class="lp-st"><span class="lp-st-num">10K+</span><span class="lp-st-label">Patients</span>
                        </div>
                        <div class="lp-st"><span class="lp-st-num">4.9</span><span class="lp-st-label">Rating</span>
                        </div>
                        <div class="lp-st"><span class="lp-st-num">5+</span><span class="lp-st-label">Services</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="lp-card" style="margin-top:40px;">
                    <h2>Schedule a Consultation</h2>
                    <p class="lp-card-sub">We'll reach out within one business day</p>

                    <form id="lp-heroForm" accept-charset="UTF-8"
                        action="https://app.formester.com/forms/RwHkLHT6l/submissions" method="POST">
                        <div class="lp-fld">
                            <label>Full Name <span class="lp-r">*</span></label>
                            <input type="text" name="name" required placeholder="Your full name">
                        </div>
                        <div class="lp-form-row" style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
                            <div class="lp-fld">
                                <label>Phone Number <span class="lp-r">*</span></label>
                                <input type="tel" name="phone" required placeholder="(555) 000-0000">
                            </div>
                            <div class="lp-fld">
                                <label>Email Address <span class="lp-r">*</span></label>
                                <input type="email" name="email" required placeholder="you@email.com">
                            </div>
                        </div>
                        <div class="lp-fld">
                            <label>What are you seeking help for? <span class="lp-r">*</span></label>
                            <select name="condition" required>
                                <option value="" disabled selected>Select a condition</option>
                                <option value="Depression">Depression</option>
                                <option value="Anxiety">Anxiety Disorders</option>
                                <option value="PTSD">PTSD & Trauma</option>
                                <option value="OCD">OCD</option>
                                <option value="Womens Mood Disorders">Women's Mood Disorders</option>
                                <option value="Stress & Adjustment">Stress & Adjustment</option>
                                <option value="ADHD">ADHD</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="lp-fld">
                            <label>Preferred Location <span class="lp-r">*</span></label>
                            <select name="location" required>
                                <option value="" disabled selected>Choose a clinic</option>
                                <option value="Palm Springs">Palm Springs, CA 92264</option>
                                <option value="Rancho Mirage">Rancho Mirage, CA 92270</option>
                                <option value="Twentynine Palms">Twentynine Palms, CA 92277</option>
                            </select>
                        </div>
                        <div class="lp-fld">
                            <label>Anything else you'd like us to know?</label>
                            <textarea name="message" rows="2"
                                placeholder="Optional — tell us about your situation..."></textarea>
                        </div>

                        <input type="hidden" name="_meta_fbp" id="lp-metaFbp">
                        <input type="hidden" name="_meta_fbc" id="lp-metaFbc">
                        <input type="hidden" name="_meta_source" value="landing_page">

                        <button type="submit" class="lp-btn-submit">Get My Free Consultation</button>
                        <p class="lp-trust">No spam. Your information is safe with us.</p>
                    </form>

                    <div id="lp-formSuccess" style="display:none;text-align:center;padding:40px 0;">
                        <div
                            style="width:48px;height:48px;background:#dcfce7;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 14px;">
                            <svg style="width:24px;height:24px;color:#22c55e;" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 style="font-size:18px;font-weight:700;color:#1a2b4a;margin-bottom:4px;">Thank You!</h3>
                        <p style="font-size:14px;color:#6b7280;">We'll be in touch shortly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="lp-faq-section" id="lp-faq-section">
        <div class="lp-faq-wrap">
            <div class="lp-faq-title">
                <h2>Common Questions</h2>
                <p>Everything you need to know about our psychiatric services</p>
            </div>

            <div class="lp-faq-item">
                <button class="lp-faq-q" onclick="lpToggleFaq(this)">
                    <div class="lp-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <span>What services does KarmaDocs offer?</span>
                    <svg class="lp-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="lp-faq-a">
                    <p>KarmaDocs provides a full spectrum of psychiatric care including TMS therapy, medication
                        management, and individual talk therapy. We treat depression, anxiety disorders, PTSD, OCD,
                        women's mood disorders, stress & adjustment disorders, and ADHD with evidence-based,
                        personalized treatment plans.</p>
                </div>
            </div>

            <div class="lp-faq-item">
                <button class="lp-faq-q" onclick="lpToggleFaq(this)">
                    <div class="lp-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <span>Does insurance cover your services?</span>
                    <svg class="lp-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="lp-faq-a">
                    <p>Yes. We work with most major insurance providers including Medicare, IEHP, Tricare, Blue Cross
                        Blue Shield, Aetna, and Cigna. Our team handles all benefit verification and pre-authorization
                        for TMS, medication management, and therapy services.</p>
                </div>
            </div>

            <div class="lp-faq-item">
                <button class="lp-faq-q" onclick="lpToggleFaq(this)">
                    <div class="lp-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <span>What can I expect from my first visit?</span>
                    <svg class="lp-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="lp-faq-a">
                    <p>Your first visit is a comprehensive psychiatric evaluation. Our clinician will review your
                        medical history, current symptoms, and treatment goals to create a personalized care plan —
                        whether that involves therapy, medication, TMS, or a combination.</p>
                </div>
            </div>

            <div class="lp-faq-item">
                <button class="lp-faq-q" onclick="lpToggleFaq(this)">
                    <div class="lp-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span>How does medication management work?</span>
                    <svg class="lp-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="lp-faq-a">
                    <p>Our board-certified providers prescribe and monitor psychiatric medications as part of a broader
                        treatment plan. We focus on finding the right medication and dosage with minimal side effects,
                        checking in regularly to ensure your care stays aligned with your goals.</p>
                </div>
            </div>

            <div class="lp-faq-item">
                <button class="lp-faq-q" onclick="lpToggleFaq(this)">
                    <div class="lp-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span>When should I seek psychiatric care?</span>
                    <svg class="lp-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="lp-faq-a">
                    <p>You don't have to wait until things feel unmanageable. If you're struggling with persistent
                        sadness, anxiety, racing thoughts, difficulty sleeping, trauma symptoms, or any mental health
                        concern — we're here to help. Early intervention leads to better outcomes.</p>
                </div>
            </div>

            <div class="lp-faq-item">
                <button class="lp-faq-q" onclick="lpToggleFaq(this)">
                    <div class="lp-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <span>What conditions do you treat?</span>
                    <svg class="lp-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="lp-faq-a">
                    <p>KarmaDocs treats depression, anxiety disorders, PTSD, OCD, women's mood disorders, stress &
                        adjustment disorders, and ADHD. We believe every individual's experience is unique and tailor
                        every treatment plan accordingly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="lp-footer">
        <div class="lp-footer-inner">
            <a href="<?php echo home_url('/'); ?>">
                <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1766060387/Karma-Docs-Logo-Horizental_w48ja1.webp"
                    alt="KarmaDocs" style="height:64px;">
            </a>
            <p>Comprehensive psychiatric care in Palm Springs, CA — from TMS therapy and medication management to talk
                therapy for depression, anxiety, and more.</p>
            <span class="lp-copy">&copy; <?php echo date('Y'); ?> KarmaDocs. All rights reserved.</span>
        </div>
    </footer>

    <script>
        // Nav scroll effect
        const lpNav = document.getElementById('lp-nav');
        window.addEventListener('scroll', () => lpNav.classList.toggle('scrolled', scrollY > 50));

        // FAQ Toggle
        function lpToggleFaq(btn) {
            const a = btn.closest('.lp-faq-item').querySelector('.lp-faq-a');
            const ch = btn.querySelector('.lp-chevron');
            const open = a.classList.contains('open');
            document.querySelectorAll('.lp-faq-a').forEach(x => x.classList.remove('open'));
            document.querySelectorAll('.lp-faq-q .lp-chevron').forEach(x => x.style.transform = 'rotate(0deg)');
            if (!open) { a.classList.add('open'); ch.style.transform = 'rotate(180deg)'; }
        }

        // Meta Pixel & Form tracking
        function lpGetCookie(n) {
            return (document.cookie.match(new RegExp('(^| )' + n + '=([^;]+)')) || [])[2] || '';
        }

        document.getElementById('lp-heroForm').addEventListener('submit', function () {
            document.getElementById('lp-metaFbp').value = lpGetCookie('_fbp');
            document.getElementById('lp-metaFbc').value = lpGetCookie('_fbc');
            if (typeof fbq === 'function') fbq('track', 'Lead', { content_name: 'TMS Consultation', content_category: 'Mental Health' });
        });
    </script>

    <?php wp_footer(); ?>
</body>

</html>