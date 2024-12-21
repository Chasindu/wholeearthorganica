<!doctype html>
<html lang="en-US">
<?php
include 'Classes/DB_RUN.php';

if (session_status() !== PHP_SESSION_ACTIVE)
    session_start();

    if (isset($_POST['shipped'])) {

                $stmt = $pdo->prepare("UPDATE orders SET status = 'shipped' WHERE rand_order_id = :id");
                $stmt->bindParam(':id', $_POST['update_id'], PDO::PARAM_INT);

                // Execute the query
               $stmt->execute() ;
            
    }


$stmt = $pdo->prepare("SELECT orders.*, items.id, orders.status, orders.date  FROM orders INNER JOIN items ON orders.item = items.id WHERE items.seller_id =:seller");
$stmt->bindParam(':seller', $_SESSION['user_id']);
$stmt->execute();
$order = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <title>My Inventry &#8211; Organio</title>
    <meta name='robots' content='max-image-preview:large, noindex, follow'>
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel='dns-prefetch' href='//fonts.googleapis.com'>
    <link rel="alternate" type="application/rss+xml" title="Organio &raquo; Feed" href="feed/index.htm">
    <link rel="alternate" type="application/rss+xml" title="Organio &raquo; Comments Feed"
        href="comments/feed/index.htm">
    <script type="text/javascript"> /* <![CDATA[ */
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/demo.casethemes.net\/organio\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.1" } };
        /*! This file is auto-generated */
        !function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }), a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" }); return void (a.onmessage = function (e) { c(n = e.data), a.terminate(), t(n) }) } catch (e) { } c(n = f(s, u, p)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
        /* ]]> */</script>
    <link rel='stylesheet' id='sbi_styles-css' href='wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=6.6.0'
        type='text/css' media='all'>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min.css?ver=6.7.1'
        type='text/css' media='all'>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-family--inter: "Inter", sans-serif;
            --wp--preset--font-family--cardo: Cardo;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='ct-main-css-css'
        href='wp-content/plugins/case-theme-core/assets/css/ct-main-css.min.css?ver=1.0.0' type='text/css' media='all'>
    <link rel='stylesheet' id='progressbar-lib-css-css'
        href='wp-content/plugins/case-theme-core/assets/css/lib/progressbar.min.css?ver=0.7.1' type='text/css'
        media='all'>
    <link rel='stylesheet' id='oc-css-css'
        href='wp-content/plugins/case-theme-core/assets/css/lib/owl.carousel.min.css?ver=2.2.1' type='text/css'
        media='all'>
    <link rel='stylesheet' id='ct-slick-css-css'
        href='wp-content/plugins/case-theme-core/assets/css/lib/ct-slick-css.min.css?ver=1.0.0' type='text/css'
        media='all'>
    <link rel='stylesheet' id='ct-font-awesome-css'
        href='wp-content/plugins/case-theme-core/assets/plugin/font-awesome/css/font-awesome.min.css?ver=4.7.0'
        type='text/css' media='all'>
    <link rel='stylesheet' id='remodal-css'
        href='wp-content/plugins/case-theme-user/acess/css/remodal.min.css?ver=6.7.1' type='text/css' media='all'>
    <link rel='stylesheet' id='remodal-default-theme-css'
        href='wp-content/plugins/case-theme-user/acess/css/remodal-default-theme.min.css?ver=6.7.1' type='text/css'
        media='all'>
    <link rel='stylesheet' id='contact-form-7-css'
        href='wp-content/plugins/contact-form-7/includes/css/contact-form-7.min.css?ver=6.0' type='text/css'
        media='all'>
    <link rel='stylesheet' id='purchase-link-css-css'
        href='wp-content/plugins/envato-purchase-link/css/purchase-link-css.min.css?ver=1.0.0' type='text/css'
        media='all'>
    <link rel='stylesheet' id='select2-css' href='wp-content/plugins/woocommerce/assets/css/select2.min.css?ver=9.3.3'
        type='text/css' media='all'>
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='wp-content/plugins/woocommerce/assets/css/woocommerce-layout.min.css?ver=9.3.3' type='text/css'
        media='all'>
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.min.css?ver=9.3.3' type='text/css'
        media='only screen and (max-width: 768px)'>
    <link rel='stylesheet' id='woocommerce-general-css'
        href='wp-content/plugins/woocommerce/assets/css/woocommerce-general.min.css?ver=9.3.3' type='text/css'
        media='all'>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='woo-variation-swatches-css'
        href='wp-content/plugins/woo-variation-swatches/assets/css/frontend.min.css?ver=1729744251' type='text/css'
        media='all'>
    <style id='woo-variation-swatches-inline-css' type='text/css'>
        :root {
            --wvs-tick: url("data:image/svg+xml;utf8,%3Csvg filter='drop-shadow(0px 0px 2px rgb(0 0 0 / .8))' xmlns='http://www.w3.org/2000/svg'  viewBox='0 0 30 30'%3E%3Cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M4 16L11 23 27 7'/%3E%3C/svg%3E");
            --wvs-cross: url("data:image/svg+xml;utf8,%3Csvg filter='drop-shadow(0px 0px 5px rgb(255 255 255 / .6))' xmlns='http://www.w3.org/2000/svg' width='72px' height='72px' viewBox='0 0 24 24'%3E%3Cpath fill='none' stroke='%23ff0000' stroke-linecap='round' stroke-width='0.6' d='M5 5L19 19M19 5L5 19'/%3E%3C/svg%3E");
            --wvs-single-product-item-width: 30px;
            --wvs-single-product-item-height: 30px;
            --wvs-single-product-item-font-size: 16px
        }
    </style>
    <link rel='stylesheet' id='hint-css'
        href='wp-content/plugins/woo-smart-compare/assets/libs/hint/hint.min.css?ver=6.7.1' type='text/css' media='all'>
    <link rel='stylesheet' id='perfect-scrollbar-css'
        href='wp-content/plugins/woo-smart-compare/assets/libs/perfect-scrollbar/css/perfect-scrollbar.min.css?ver=6.7.1'
        type='text/css' media='all'>
    <link rel='stylesheet' id='perfect-scrollbar-wpc-css'
        href='wp-content/plugins/woo-smart-compare/assets/libs/perfect-scrollbar/css/perfect-scrollbar-wpc.min.css?ver=6.7.1'
        type='text/css' media='all'>
    <link rel='stylesheet' id='woosc-frontend-css'
        href='wp-content/plugins/woo-smart-compare/assets/css/woosc-frontend.min.css?ver=6.3.0' type='text/css'
        media='all'>
    <link rel='stylesheet' id='slick-css'
        href='wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.min.css?ver=6.7.1' type='text/css'
        media='all'>
    <link rel='stylesheet' id='magnific-popup-css'
        href='wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/magnific-popup.min.css?ver=6.7.1'
        type='text/css' media='all'>
    <link rel='stylesheet' id='woosq-feather-css'
        href='wp-content/plugins/woo-smart-quick-view/assets/libs/feather/woosq-feather.min.css?ver=6.7.1'
        type='text/css' media='all'>
    <link rel='stylesheet' id='woosq-frontend-css'
        href='wp-content/plugins/woo-smart-quick-view/assets/css/woosq-frontend.min.css?ver=4.1.3' type='text/css'
        media='all'>
    <link rel='stylesheet' id='woosw-icons-css'
        href='wp-content/plugins/woo-smart-wishlist/assets/css/woosw-icons.min.css?ver=4.9.4' type='text/css'
        media='all'>
    <link rel='stylesheet' id='woosw-frontend-css'
        href='wp-content/plugins/woo-smart-wishlist/assets/css/woosw-frontend.min.css?ver=4.9.4' type='text/css'
        media='all'>
    <style id='woosw-frontend-inline-css' type='text/css'>
        .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-notice {
            background-color: #76a713;
        }

        .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-popup-content-bot-inner a:hover {
            color: #76a713;
            border-color: #76a713;
        }
    </style>
    <link rel='stylesheet' id='bootstrap-css' href='wp-content/themes/orgio/assets/css/bootstrap.min.css?ver=4.0.0'
        type='text/css' media='all'>
    <link rel='stylesheet' id='caseicon-css' href='wp-content/themes/orgio/assets/css/caseicon.min.css?ver=1.5.7'
        type='text/css' media='all'>
    <link rel='stylesheet' id='flaticon-css' href='wp-content/themes/orgio/assets/css/flaticon.min.css?ver=1.5.7'
        type='text/css' media='all'>
    <link rel='stylesheet' id='animate-css' href='wp-content/themes/orgio/assets/css/animate.min.css?ver=1.0.0'
        type='text/css' media='all'>
    <link rel='stylesheet' id='organio-theme-css'
        href='wp-content/themes/orgio/assets/css/organio-theme.min.css?ver=1.5.7' type='text/css' media='all'>
    <style id='organio-theme-inline-css' type='text/css'>
        :root {
            --primary-color: #76a713;
            --secondary-color: #191919;
            --third-color: #ff7800;
            --dark-color: #191919;
            --primary-color-rgb: 118, 167, 19;
            --secondary-color-rgb: 25, 25, 25;
            --third-color-rgb: 255, 120, 0;
            --dark-color-rgb: 25, 25, 25;
            --link-color: #76a713;
            --link-color-hover: #ff7800;
            --link-color-active: #ff7800;
            --gradient-color-from: #ff7800;
            --gradient-color-to: #ffa200;
            --gradient-color-from-rgb: 255, 120, 0;
            --gradient-color-to-rgb: 255, 162, 0;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (min-width: 1200px) {}
    </style>
    <link rel='stylesheet' id='organio-style-css' href='wp-content/themes/orgio/organio-style.min.css?ver=6.7.1'
        type='text/css' media='all'>
    <link rel='stylesheet' id='organio-google-fonts-css'
        href='css?family=Poppins%3A400%2C500%2C600%2C700%7CLora%3A400%2C500%2C600%2C700%7CBarlow%3A300%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%7CArchitects+Daughter%3A400%7CFira+Sans%3A400%2C500%2C700%7CRoboto%3A400%2C500%2C600%2C700%7CLexend%3A400%2C500%2C600%2C700%7CPlayfair+Display%3A400%2C400i%2C700%2C700i%2C800%2C900%7CAbril+Fatface%3A400%2C400i%2C700%2C700i%2C800%2C900%7CPT+Sans%3A400%2C400i%2C700%2C700i%7CNunito%3A400%2C700&#038;subset=latin%2Clatin-ext&#038;ver=6.7.1'
        type='text/css' media='all'>
    <link rel='stylesheet' id='elementor-icons-css'
        href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.31.0' type='text/css'
        media='all'>
    <link rel='stylesheet' id='elementor-frontend-css'
        href='wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.25.4' type='text/css' media='all'>
    <link rel='stylesheet' id='swiper-css'
        href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' type='text/css'
        media='all'>
    <link rel='stylesheet' id='e-swiper-css'
        href='wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=3.25.4' type='text/css'
        media='all'>
    <link rel='stylesheet' id='elementor-post-12-css' href='wp-content/uploads/elementor/css/post-12.css?ver=1731036539'
        type='text/css' media='all'>
    <link rel='stylesheet' id='sbistyles-css' href='wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=6.6.0'
        type='text/css' media='all'>
    <link rel='stylesheet' id='elementor-post-30-css' href='wp-content/uploads/elementor/css/post-30.css?ver=1731037321'
        type='text/css' media='all'>
    <link rel='stylesheet' id='google-fonts-1-css'
        href='css-1?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.7.1'
        type='text/css' media='all'>
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' type='text/css'
        media='all'>
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3' type='text/css'
        media='all'>
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' type='text/css'
        media='all'>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <script type="text/template"
        id="tmpl-variation-template"><div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div><div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div><div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div> </script>
    <script type="text/template"
        id="tmpl-unavailable-variation-template"><p role="alert">Sorry, this product is unavailable. Please choose a different combination.</p> </script>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script type="text/javascript" src="wp-content/plugins/case-theme-core/assets/js/lib/waypoints.min.js?ver=2.0.5"
        id="waypoints-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.9.3.3"
        id="jquery-blockui-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra"> /* <![CDATA[ */
        var wc_add_to_cart_params = { "ajax_url": "\/organio\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/demo.casethemes.net\/organio\/cart\/", "is_cart": "1", "cart_redirect_after_add": "no" };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.3.3"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.3.3" id="js-cookie-js"
        data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra"> /* <![CDATA[ */
        var woocommerce_params = { "ajax_url": "\/organio\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%" };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.3.3"
        id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-country-select-js-extra"> /* <![CDATA[ */
        var wc_country_select_params = { "countries": "{\"AF\":[],\"AL\":{\"AL-01\":\"Berat\",\"AL-09\":\"Dib\\u00ebr\",\"AL-02\":\"Durr\\u00ebs\",\"AL-03\":\"Elbasan\",\"AL-04\":\"Fier\",\"AL-05\":\"Gjirokast\\u00ebr\",\"AL-06\":\"Kor\\u00e7\\u00eb\",\"AL-07\":\"Kuk\\u00ebs\",\"AL-08\":\"Lezh\\u00eb\",\"AL-10\":\"Shkod\\u00ebr\",\"AL-11\":\"Tirana\",\"AL-12\":\"Vlor\\u00eb\"},\"AO\":{\"BGO\":\"Bengo\",\"BLU\":\"Benguela\",\"BIE\":\"Bi\\u00e9\",\"CAB\":\"Cabinda\",\"CNN\":\"Cunene\",\"HUA\":\"Huambo\",\"HUI\":\"Hu\\u00edla\",\"CCU\":\"Kuando Kubango\",\"CNO\":\"Kwanza-Norte\",\"CUS\":\"Kwanza-Sul\",\"LUA\":\"Luanda\",\"LNO\":\"Lunda-Norte\",\"LSU\":\"Lunda-Sul\",\"MAL\":\"Malanje\",\"MOX\":\"Moxico\",\"NAM\":\"Namibe\",\"UIG\":\"U\\u00edge\",\"ZAI\":\"Zaire\"},\"AR\":{\"C\":\"Ciudad Aut\\u00f3noma de Buenos Aires\",\"B\":\"Buenos Aires\",\"K\":\"Catamarca\",\"H\":\"Chaco\",\"U\":\"Chubut\",\"X\":\"C\\u00f3rdoba\",\"W\":\"Corrientes\",\"E\":\"Entre R\\u00edos\",\"P\":\"Formosa\",\"Y\":\"Jujuy\",\"L\":\"La Pampa\",\"F\":\"La Rioja\",\"M\":\"Mendoza\",\"N\":\"Misiones\",\"Q\":\"Neuqu\\u00e9n\",\"R\":\"R\\u00edo Negro\",\"A\":\"Salta\",\"J\":\"San Juan\",\"D\":\"San Luis\",\"Z\":\"Santa Cruz\",\"S\":\"Santa Fe\",\"G\":\"Santiago del Estero\",\"V\":\"Tierra del Fuego\",\"T\":\"Tucum\\u00e1n\"},\"AT\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"AX\":[],\"BD\":{\"BD-05\":\"Bagerhat\",\"BD-01\":\"Bandarban\",\"BD-02\":\"Barguna\",\"BD-06\":\"Barishal\",\"BD-07\":\"Bhola\",\"BD-03\":\"Bogura\",\"BD-04\":\"Brahmanbaria\",\"BD-09\":\"Chandpur\",\"BD-10\":\"Chattogram\",\"BD-12\":\"Chuadanga\",\"BD-11\":\"Cox's Bazar\",\"BD-08\":\"Cumilla\",\"BD-13\":\"Dhaka\",\"BD-14\":\"Dinajpur\",\"BD-15\":\"Faridpur \",\"BD-16\":\"Feni\",\"BD-19\":\"Gaibandha\",\"BD-18\":\"Gazipur\",\"BD-17\":\"Gopalganj\",\"BD-20\":\"Habiganj\",\"BD-21\":\"Jamalpur\",\"BD-22\":\"Jashore\",\"BD-25\":\"Jhalokati\",\"BD-23\":\"Jhenaidah\",\"BD-24\":\"Joypurhat\",\"BD-29\":\"Khagrachhari\",\"BD-27\":\"Khulna\",\"BD-26\":\"Kishoreganj\",\"BD-28\":\"Kurigram\",\"BD-30\":\"Kushtia\",\"BD-31\":\"Lakshmipur\",\"BD-32\":\"Lalmonirhat\",\"BD-36\":\"Madaripur\",\"BD-37\":\"Magura\",\"BD-33\":\"Manikganj \",\"BD-39\":\"Meherpur\",\"BD-38\":\"Moulvibazar\",\"BD-35\":\"Munshiganj\",\"BD-34\":\"Mymensingh\",\"BD-48\":\"Naogaon\",\"BD-43\":\"Narail\",\"BD-40\":\"Narayanganj\",\"BD-42\":\"Narsingdi\",\"BD-44\":\"Natore\",\"BD-45\":\"Nawabganj\",\"BD-41\":\"Netrakona\",\"BD-46\":\"Nilphamari\",\"BD-47\":\"Noakhali\",\"BD-49\":\"Pabna\",\"BD-52\":\"Panchagarh\",\"BD-51\":\"Patuakhali\",\"BD-50\":\"Pirojpur\",\"BD-53\":\"Rajbari\",\"BD-54\":\"Rajshahi\",\"BD-56\":\"Rangamati\",\"BD-55\":\"Rangpur\",\"BD-58\":\"Satkhira\",\"BD-62\":\"Shariatpur\",\"BD-57\":\"Sherpur\",\"BD-59\":\"Sirajganj\",\"BD-61\":\"Sunamganj\",\"BD-60\":\"Sylhet\",\"BD-63\":\"Tangail\",\"BD-64\":\"Thakurgaon\"},\"BE\":[],\"BG\":{\"BG-01\":\"Blagoevgrad\",\"BG-02\":\"Burgas\",\"BG-08\":\"Dobrich\",\"BG-07\":\"Gabrovo\",\"BG-26\":\"Haskovo\",\"BG-09\":\"Kardzhali\",\"BG-10\":\"Kyustendil\",\"BG-11\":\"Lovech\",\"BG-12\":\"Montana\",\"BG-13\":\"Pazardzhik\",\"BG-14\":\"Pernik\",\"BG-15\":\"Pleven\",\"BG-16\":\"Plovdiv\",\"BG-17\":\"Razgrad\",\"BG-18\":\"Ruse\",\"BG-27\":\"Shumen\",\"BG-19\":\"Silistra\",\"BG-20\":\"Sliven\",\"BG-21\":\"Smolyan\",\"BG-23\":\"Sofia District\",\"BG-22\":\"Sofia\",\"BG-24\":\"Stara Zagora\",\"BG-25\":\"Targovishte\",\"BG-03\":\"Varna\",\"BG-04\":\"Veliko Tarnovo\",\"BG-05\":\"Vidin\",\"BG-06\":\"Vratsa\",\"BG-28\":\"Yambol\"},\"BH\":[],\"BI\":[],\"BJ\":{\"AL\":\"Alibori\",\"AK\":\"Atakora\",\"AQ\":\"Atlantique\",\"BO\":\"Borgou\",\"CO\":\"Collines\",\"KO\":\"Kouffo\",\"DO\":\"Donga\",\"LI\":\"Littoral\",\"MO\":\"Mono\",\"OU\":\"Ou\\u00e9m\\u00e9\",\"PL\":\"Plateau\",\"ZO\":\"Zou\"},\"BO\":{\"BO-B\":\"Beni\",\"BO-H\":\"Chuquisaca\",\"BO-C\":\"Cochabamba\",\"BO-L\":\"La Paz\",\"BO-O\":\"Oruro\",\"BO-N\":\"Pando\",\"BO-P\":\"Potos\\u00ed\",\"BO-S\":\"Santa Cruz\",\"BO-T\":\"Tarija\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\\u00e1\",\"AM\":\"Amazonas\",\"BA\":\"Bahia\",\"CE\":\"Cear\\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\\u00edrito Santo\",\"GO\":\"Goi\\u00e1s\",\"MA\":\"Maranh\\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\\u00e1\",\"PB\":\"Para\\u00edba\",\"PR\":\"Paran\\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NL\":\"Newfoundland and Labrador\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CH\":{\"AG\":\"Aargau\",\"AR\":\"Appenzell Ausserrhoden\",\"AI\":\"Appenzell Innerrhoden\",\"BL\":\"Basel-Landschaft\",\"BS\":\"Basel-Stadt\",\"BE\":\"Bern\",\"FR\":\"Fribourg\",\"GE\":\"Geneva\",\"GL\":\"Glarus\",\"GR\":\"Graub\\u00fcnden\",\"JU\":\"Jura\",\"LU\":\"Luzern\",\"NE\":\"Neuch\\u00e2tel\",\"NW\":\"Nidwalden\",\"OW\":\"Obwalden\",\"SH\":\"Schaffhausen\",\"SZ\":\"Schwyz\",\"SO\":\"Solothurn\",\"SG\":\"St. Gallen\",\"TG\":\"Thurgau\",\"TI\":\"Ticino\",\"UR\":\"Uri\",\"VS\":\"Valais\",\"VD\":\"Vaud\",\"ZG\":\"Zug\",\"ZH\":\"Z\\u00fcrich\"},\"CL\":{\"CL-AI\":\"Ais\\u00e9n del General Carlos Iba\\u00f1ez del Campo\",\"CL-AN\":\"Antofagasta\",\"CL-AP\":\"Arica y Parinacota\",\"CL-AR\":\"La Araucan\\u00eda\",\"CL-AT\":\"Atacama\",\"CL-BI\":\"Biob\\u00edo\",\"CL-CO\":\"Coquimbo\",\"CL-LI\":\"Libertador General Bernardo O'Higgins\",\"CL-LL\":\"Los Lagos\",\"CL-LR\":\"Los R\\u00edos\",\"CL-MA\":\"Magallanes\",\"CL-ML\":\"Maule\",\"CL-NB\":\"\\u00d1uble\",\"CL-RM\":\"Regi\\u00f3n Metropolitana de Santiago\",\"CL-TA\":\"Tarapac\\u00e1\",\"CL-VS\":\"Valpara\\u00edso\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \\u4e91\\u5357\",\"CN2\":\"Beijing \\\/ \\u5317\\u4eac\",\"CN3\":\"Tianjin \\\/ \\u5929\\u6d25\",\"CN4\":\"Hebei \\\/ \\u6cb3\\u5317\",\"CN5\":\"Shanxi \\\/ \\u5c71\\u897f\",\"CN6\":\"Inner Mongolia \\\/ \\u5167\\u8499\\u53e4\",\"CN7\":\"Liaoning \\\/ \\u8fbd\\u5b81\",\"CN8\":\"Jilin \\\/ \\u5409\\u6797\",\"CN9\":\"Heilongjiang \\\/ \\u9ed1\\u9f99\\u6c5f\",\"CN10\":\"Shanghai \\\/ \\u4e0a\\u6d77\",\"CN11\":\"Jiangsu \\\/ \\u6c5f\\u82cf\",\"CN12\":\"Zhejiang \\\/ \\u6d59\\u6c5f\",\"CN13\":\"Anhui \\\/ \\u5b89\\u5fbd\",\"CN14\":\"Fujian \\\/ \\u798f\\u5efa\",\"CN15\":\"Jiangxi \\\/ \\u6c5f\\u897f\",\"CN16\":\"Shandong \\\/ \\u5c71\\u4e1c\",\"CN17\":\"Henan \\\/ \\u6cb3\\u5357\",\"CN18\":\"Hubei \\\/ \\u6e56\\u5317\",\"CN19\":\"Hunan \\\/ \\u6e56\\u5357\",\"CN20\":\"Guangdong \\\/ \\u5e7f\\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \\u5e7f\\u897f\\u58ee\\u65cf\",\"CN22\":\"Hainan \\\/ \\u6d77\\u5357\",\"CN23\":\"Chongqing \\\/ \\u91cd\\u5e86\",\"CN24\":\"Sichuan \\\/ \\u56db\\u5ddd\",\"CN25\":\"Guizhou \\\/ \\u8d35\\u5dde\",\"CN26\":\"Shaanxi \\\/ \\u9655\\u897f\",\"CN27\":\"Gansu \\\/ \\u7518\\u8083\",\"CN28\":\"Qinghai \\\/ \\u9752\\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \\u5b81\\u590f\",\"CN30\":\"Macao \\\/ \\u6fb3\\u95e8\",\"CN31\":\"Tibet \\\/ \\u897f\\u85cf\",\"CN32\":\"Xinjiang \\\/ \\u65b0\\u7586\"},\"CO\":{\"CO-AMA\":\"Amazonas\",\"CO-ANT\":\"Antioquia\",\"CO-ARA\":\"Arauca\",\"CO-ATL\":\"Atl\\u00e1ntico\",\"CO-BOL\":\"Bol\\u00edvar\",\"CO-BOY\":\"Boyac\\u00e1\",\"CO-CAL\":\"Caldas\",\"CO-CAQ\":\"Caquet\\u00e1\",\"CO-CAS\":\"Casanare\",\"CO-CAU\":\"Cauca\",\"CO-CES\":\"Cesar\",\"CO-CHO\":\"Choc\\u00f3\",\"CO-COR\":\"C\\u00f3rdoba\",\"CO-CUN\":\"Cundinamarca\",\"CO-DC\":\"Capital District\",\"CO-GUA\":\"Guain\\u00eda\",\"CO-GUV\":\"Guaviare\",\"CO-HUI\":\"Huila\",\"CO-LAG\":\"La Guajira\",\"CO-MAG\":\"Magdalena\",\"CO-MET\":\"Meta\",\"CO-NAR\":\"Nari\\u00f1o\",\"CO-NSA\":\"Norte de Santander\",\"CO-PUT\":\"Putumayo\",\"CO-QUI\":\"Quind\\u00edo\",\"CO-RIS\":\"Risaralda\",\"CO-SAN\":\"Santander\",\"CO-SAP\":\"San Andr\\u00e9s & Providencia\",\"CO-SUC\":\"Sucre\",\"CO-TOL\":\"Tolima\",\"CO-VAC\":\"Valle del Cauca\",\"CO-VAU\":\"Vaup\\u00e9s\",\"CO-VID\":\"Vichada\"},\"CR\":{\"CR-A\":\"Alajuela\",\"CR-C\":\"Cartago\",\"CR-G\":\"Guanacaste\",\"CR-H\":\"Heredia\",\"CR-L\":\"Lim\\u00f3n\",\"CR-P\":\"Puntarenas\",\"CR-SJ\":\"San Jos\\u00e9\"},\"CZ\":[],\"DE\":{\"DE-BW\":\"Baden-W\\u00fcrttemberg\",\"DE-BY\":\"Bavaria\",\"DE-BE\":\"Berlin\",\"DE-BB\":\"Brandenburg\",\"DE-HB\":\"Bremen\",\"DE-HH\":\"Hamburg\",\"DE-HE\":\"Hesse\",\"DE-MV\":\"Mecklenburg-Vorpommern\",\"DE-NI\":\"Lower Saxony\",\"DE-NW\":\"North Rhine-Westphalia\",\"DE-RP\":\"Rhineland-Palatinate\",\"DE-SL\":\"Saarland\",\"DE-SN\":\"Saxony\",\"DE-ST\":\"Saxony-Anhalt\",\"DE-SH\":\"Schleswig-Holstein\",\"DE-TH\":\"Thuringia\"},\"DK\":[],\"DO\":{\"DO-01\":\"Distrito Nacional\",\"DO-02\":\"Azua\",\"DO-03\":\"Baoruco\",\"DO-04\":\"Barahona\",\"DO-33\":\"Cibao Nordeste\",\"DO-34\":\"Cibao Noroeste\",\"DO-35\":\"Cibao Norte\",\"DO-36\":\"Cibao Sur\",\"DO-05\":\"Dajab\\u00f3n\",\"DO-06\":\"Duarte\",\"DO-08\":\"El Seibo\",\"DO-37\":\"El Valle\",\"DO-07\":\"El\\u00edas Pi\\u00f1a\",\"DO-38\":\"Enriquillo\",\"DO-09\":\"Espaillat\",\"DO-30\":\"Hato Mayor\",\"DO-19\":\"Hermanas Mirabal\",\"DO-39\":\"Hig\\u00fcamo\",\"DO-10\":\"Independencia\",\"DO-11\":\"La Altagracia\",\"DO-12\":\"La Romana\",\"DO-13\":\"La Vega\",\"DO-14\":\"Mar\\u00eda Trinidad S\\u00e1nchez\",\"DO-28\":\"Monse\\u00f1or Nouel\",\"DO-15\":\"Monte Cristi\",\"DO-29\":\"Monte Plata\",\"DO-40\":\"Ozama\",\"DO-16\":\"Pedernales\",\"DO-17\":\"Peravia\",\"DO-18\":\"Puerto Plata\",\"DO-20\":\"Saman\\u00e1\",\"DO-21\":\"San Crist\\u00f3bal\",\"DO-31\":\"San Jos\\u00e9 de Ocoa\",\"DO-22\":\"San Juan\",\"DO-23\":\"San Pedro de Macor\\u00eds\",\"DO-24\":\"S\\u00e1nchez Ram\\u00edrez\",\"DO-25\":\"Santiago\",\"DO-26\":\"Santiago Rodr\\u00edguez\",\"DO-32\":\"Santo Domingo\",\"DO-41\":\"Valdesia\",\"DO-27\":\"Valverde\",\"DO-42\":\"Yuma\"},\"DZ\":{\"DZ-01\":\"Adrar\",\"DZ-02\":\"Chlef\",\"DZ-03\":\"Laghouat\",\"DZ-04\":\"Oum El Bouaghi\",\"DZ-05\":\"Batna\",\"DZ-06\":\"B\\u00e9ja\\u00efa\",\"DZ-07\":\"Biskra\",\"DZ-08\":\"B\\u00e9char\",\"DZ-09\":\"Blida\",\"DZ-10\":\"Bouira\",\"DZ-11\":\"Tamanghasset\",\"DZ-12\":\"T\\u00e9bessa\",\"DZ-13\":\"Tlemcen\",\"DZ-14\":\"Tiaret\",\"DZ-15\":\"Tizi Ouzou\",\"DZ-16\":\"Algiers\",\"DZ-17\":\"Djelfa\",\"DZ-18\":\"Jijel\",\"DZ-19\":\"S\\u00e9tif\",\"DZ-20\":\"Sa\\u00efda\",\"DZ-21\":\"Skikda\",\"DZ-22\":\"Sidi Bel Abb\\u00e8s\",\"DZ-23\":\"Annaba\",\"DZ-24\":\"Guelma\",\"DZ-25\":\"Constantine\",\"DZ-26\":\"M\\u00e9d\\u00e9a\",\"DZ-27\":\"Mostaganem\",\"DZ-28\":\"M\\u2019Sila\",\"DZ-29\":\"Mascara\",\"DZ-30\":\"Ouargla\",\"DZ-31\":\"Oran\",\"DZ-32\":\"El Bayadh\",\"DZ-33\":\"Illizi\",\"DZ-34\":\"Bordj Bou Arr\\u00e9ridj\",\"DZ-35\":\"Boumerd\\u00e8s\",\"DZ-36\":\"El Tarf\",\"DZ-37\":\"Tindouf\",\"DZ-38\":\"Tissemsilt\",\"DZ-39\":\"El Oued\",\"DZ-40\":\"Khenchela\",\"DZ-41\":\"Souk Ahras\",\"DZ-42\":\"Tipasa\",\"DZ-43\":\"Mila\",\"DZ-44\":\"A\\u00efn Defla\",\"DZ-45\":\"Naama\",\"DZ-46\":\"A\\u00efn T\\u00e9mouchent\",\"DZ-47\":\"Gharda\\u00efa\",\"DZ-48\":\"Relizane\"},\"EE\":[],\"EC\":{\"EC-A\":\"Azuay\",\"EC-B\":\"Bol\\u00edvar\",\"EC-F\":\"Ca\\u00f1ar\",\"EC-C\":\"Carchi\",\"EC-H\":\"Chimborazo\",\"EC-X\":\"Cotopaxi\",\"EC-O\":\"El Oro\",\"EC-E\":\"Esmeraldas\",\"EC-W\":\"Gal\\u00e1pagos\",\"EC-G\":\"Guayas\",\"EC-I\":\"Imbabura\",\"EC-L\":\"Loja\",\"EC-R\":\"Los R\\u00edos\",\"EC-M\":\"Manab\\u00ed\",\"EC-S\":\"Morona-Santiago\",\"EC-N\":\"Napo\",\"EC-D\":\"Orellana\",\"EC-Y\":\"Pastaza\",\"EC-P\":\"Pichincha\",\"EC-SE\":\"Santa Elena\",\"EC-SD\":\"Santo Domingo de los Ts\\u00e1chilas\",\"EC-U\":\"Sucumb\\u00edos\",\"EC-T\":\"Tungurahua\",\"EC-Z\":\"Zamora-Chinchipe\"},\"EG\":{\"EGALX\":\"Alexandria\",\"EGASN\":\"Aswan\",\"EGAST\":\"Asyut\",\"EGBA\":\"Red Sea\",\"EGBH\":\"Beheira\",\"EGBNS\":\"Beni Suef\",\"EGC\":\"Cairo\",\"EGDK\":\"Dakahlia\",\"EGDT\":\"Damietta\",\"EGFYM\":\"Faiyum\",\"EGGH\":\"Gharbia\",\"EGGZ\":\"Giza\",\"EGIS\":\"Ismailia\",\"EGJS\":\"South Sinai\",\"EGKB\":\"Qalyubia\",\"EGKFS\":\"Kafr el-Sheikh\",\"EGKN\":\"Qena\",\"EGLX\":\"Luxor\",\"EGMN\":\"Minya\",\"EGMNF\":\"Monufia\",\"EGMT\":\"Matrouh\",\"EGPTS\":\"Port Said\",\"EGSHG\":\"Sohag\",\"EGSHR\":\"Al Sharqia\",\"EGSIN\":\"North Sinai\",\"EGSUZ\":\"Suez\",\"EGWAD\":\"New Valley\"},\"ES\":{\"C\":\"A Coru\\u00f1a\",\"VI\":\"Araba\\\/\\u00c1lava\",\"AB\":\"Albacete\",\"A\":\"Alicante\",\"AL\":\"Almer\\u00eda\",\"O\":\"Asturias\",\"AV\":\"\\u00c1vila\",\"BA\":\"Badajoz\",\"PM\":\"Baleares\",\"B\":\"Barcelona\",\"BU\":\"Burgos\",\"CC\":\"C\\u00e1ceres\",\"CA\":\"C\\u00e1diz\",\"S\":\"Cantabria\",\"CS\":\"Castell\\u00f3n\",\"CE\":\"Ceuta\",\"CR\":\"Ciudad Real\",\"CO\":\"C\\u00f3rdoba\",\"CU\":\"Cuenca\",\"GI\":\"Girona\",\"GR\":\"Granada\",\"GU\":\"Guadalajara\",\"SS\":\"Gipuzkoa\",\"H\":\"Huelva\",\"HU\":\"Huesca\",\"J\":\"Ja\\u00e9n\",\"LO\":\"La Rioja\",\"GC\":\"Las Palmas\",\"LE\":\"Le\\u00f3n\",\"L\":\"Lleida\",\"LU\":\"Lugo\",\"M\":\"Madrid\",\"MA\":\"M\\u00e1laga\",\"ML\":\"Melilla\",\"MU\":\"Murcia\",\"NA\":\"Navarra\",\"OR\":\"Ourense\",\"P\":\"Palencia\",\"PO\":\"Pontevedra\",\"SA\":\"Salamanca\",\"TF\":\"Santa Cruz de Tenerife\",\"SG\":\"Segovia\",\"SE\":\"Sevilla\",\"SO\":\"Soria\",\"T\":\"Tarragona\",\"TE\":\"Teruel\",\"TO\":\"Toledo\",\"V\":\"Valencia\",\"VA\":\"Valladolid\",\"BI\":\"Biscay\",\"ZA\":\"Zamora\",\"Z\":\"Zaragoza\"},\"ET\":[],\"FI\":[],\"FR\":[],\"GF\":[],\"GH\":{\"AF\":\"Ahafo\",\"AH\":\"Ashanti\",\"BA\":\"Brong-Ahafo\",\"BO\":\"Bono\",\"BE\":\"Bono East\",\"CP\":\"Central\",\"EP\":\"Eastern\",\"AA\":\"Greater Accra\",\"NE\":\"North East\",\"NP\":\"Northern\",\"OT\":\"Oti\",\"SV\":\"Savannah\",\"UE\":\"Upper East\",\"UW\":\"Upper West\",\"TV\":\"Volta\",\"WP\":\"Western\",\"WN\":\"Western North\"},\"GP\":[],\"GR\":{\"I\":\"Attica\",\"A\":\"East Macedonia and Thrace\",\"B\":\"Central Macedonia\",\"C\":\"West Macedonia\",\"D\":\"Epirus\",\"E\":\"Thessaly\",\"F\":\"Ionian Islands\",\"G\":\"West Greece\",\"H\":\"Central Greece\",\"J\":\"Peloponnese\",\"K\":\"North Aegean\",\"L\":\"South Aegean\",\"M\":\"Crete\"},\"GT\":{\"GT-AV\":\"Alta Verapaz\",\"GT-BV\":\"Baja Verapaz\",\"GT-CM\":\"Chimaltenango\",\"GT-CQ\":\"Chiquimula\",\"GT-PR\":\"El Progreso\",\"GT-ES\":\"Escuintla\",\"GT-GU\":\"Guatemala\",\"GT-HU\":\"Huehuetenango\",\"GT-IZ\":\"Izabal\",\"GT-JA\":\"Jalapa\",\"GT-JU\":\"Jutiapa\",\"GT-PE\":\"Pet\\u00e9n\",\"GT-QZ\":\"Quetzaltenango\",\"GT-QC\":\"Quich\\u00e9\",\"GT-RE\":\"Retalhuleu\",\"GT-SA\":\"Sacatep\\u00e9quez\",\"GT-SM\":\"San Marcos\",\"GT-SR\":\"Santa Rosa\",\"GT-SO\":\"Solol\\u00e1\",\"GT-SU\":\"Suchitep\\u00e9quez\",\"GT-TO\":\"Totonicap\\u00e1n\",\"GT-ZA\":\"Zacapa\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"HN\":{\"HN-AT\":\"Atl\\u00e1ntida\",\"HN-IB\":\"Bay Islands\",\"HN-CH\":\"Choluteca\",\"HN-CL\":\"Col\\u00f3n\",\"HN-CM\":\"Comayagua\",\"HN-CP\":\"Cop\\u00e1n\",\"HN-CR\":\"Cort\\u00e9s\",\"HN-EP\":\"El Para\\u00edso\",\"HN-FM\":\"Francisco Moraz\\u00e1n\",\"HN-GD\":\"Gracias a Dios\",\"HN-IN\":\"Intibuc\\u00e1\",\"HN-LE\":\"Lempira\",\"HN-LP\":\"La Paz\",\"HN-OC\":\"Ocotepeque\",\"HN-OL\":\"Olancho\",\"HN-SB\":\"Santa B\\u00e1rbara\",\"HN-VA\":\"Valle\",\"HN-YO\":\"Yoro\"},\"HU\":{\"BK\":\"B\\u00e1cs-Kiskun\",\"BE\":\"B\\u00e9k\\u00e9s\",\"BA\":\"Baranya\",\"BZ\":\"Borsod-Aba\\u00faj-Zempl\\u00e9n\",\"BU\":\"Budapest\",\"CS\":\"Csongr\\u00e1d-Csan\\u00e1d\",\"FE\":\"Fej\\u00e9r\",\"GS\":\"Gy\\u0151r-Moson-Sopron\",\"HB\":\"Hajd\\u00fa-Bihar\",\"HE\":\"Heves\",\"JN\":\"J\\u00e1sz-Nagykun-Szolnok\",\"KE\":\"Kom\\u00e1rom-Esztergom\",\"NO\":\"N\\u00f3gr\\u00e1d\",\"PE\":\"Pest\",\"SO\":\"Somogy\",\"SZ\":\"Szabolcs-Szatm\\u00e1r-Bereg\",\"TO\":\"Tolna\",\"VA\":\"Vas\",\"VE\":\"Veszpr\\u00e9m\",\"ZA\":\"Zala\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"IE\":{\"CW\":\"Carlow\",\"CN\":\"Cavan\",\"CE\":\"Clare\",\"CO\":\"Cork\",\"DL\":\"Donegal\",\"D\":\"Dublin\",\"G\":\"Galway\",\"KY\":\"Kerry\",\"KE\":\"Kildare\",\"KK\":\"Kilkenny\",\"LS\":\"Laois\",\"LM\":\"Leitrim\",\"LK\":\"Limerick\",\"LD\":\"Longford\",\"LH\":\"Louth\",\"MO\":\"Mayo\",\"MH\":\"Meath\",\"MN\":\"Monaghan\",\"OY\":\"Offaly\",\"RN\":\"Roscommon\",\"SO\":\"Sligo\",\"TA\":\"Tipperary\",\"WD\":\"Waterford\",\"WH\":\"Westmeath\",\"WX\":\"Wexford\",\"WW\":\"Wicklow\"},\"IN\":{\"AP\":\"Andhra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"LA\":\"Ladakh\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Odisha\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TS\":\"Telangana\",\"TR\":\"Tripura\",\"UK\":\"Uttarakhand\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadra and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"IR\":{\"KHZ\":\"Khuzestan (\\u062e\\u0648\\u0632\\u0633\\u062a\\u0627\\u0646)\",\"THR\":\"Tehran (\\u062a\\u0647\\u0631\\u0627\\u0646)\",\"ILM\":\"Ilaam (\\u0627\\u06cc\\u0644\\u0627\\u0645)\",\"BHR\":\"Bushehr (\\u0628\\u0648\\u0634\\u0647\\u0631)\",\"ADL\":\"Ardabil (\\u0627\\u0631\\u062f\\u0628\\u06cc\\u0644)\",\"ESF\":\"Isfahan (\\u0627\\u0635\\u0641\\u0647\\u0627\\u0646)\",\"YZD\":\"Yazd (\\u06cc\\u0632\\u062f)\",\"KRH\":\"Kermanshah (\\u06a9\\u0631\\u0645\\u0627\\u0646\\u0634\\u0627\\u0647)\",\"KRN\":\"Kerman (\\u06a9\\u0631\\u0645\\u0627\\u0646)\",\"HDN\":\"Hamadan (\\u0647\\u0645\\u062f\\u0627\\u0646)\",\"GZN\":\"Ghazvin (\\u0642\\u0632\\u0648\\u06cc\\u0646)\",\"ZJN\":\"Zanjan (\\u0632\\u0646\\u062c\\u0627\\u0646)\",\"LRS\":\"Luristan (\\u0644\\u0631\\u0633\\u062a\\u0627\\u0646)\",\"ABZ\":\"Alborz (\\u0627\\u0644\\u0628\\u0631\\u0632)\",\"EAZ\":\"East Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u0634\\u0631\\u0642\\u06cc)\",\"WAZ\":\"West Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u063a\\u0631\\u0628\\u06cc)\",\"CHB\":\"Chaharmahal and Bakhtiari (\\u0686\\u0647\\u0627\\u0631\\u0645\\u062d\\u0627\\u0644 \\u0648 \\u0628\\u062e\\u062a\\u06cc\\u0627\\u0631\\u06cc)\",\"SKH\":\"South Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u062c\\u0646\\u0648\\u0628\\u06cc)\",\"RKH\":\"Razavi Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0631\\u0636\\u0648\\u06cc)\",\"NKH\":\"North Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0634\\u0645\\u0627\\u0644\\u06cc)\",\"SMN\":\"Semnan (\\u0633\\u0645\\u0646\\u0627\\u0646)\",\"FRS\":\"Fars (\\u0641\\u0627\\u0631\\u0633)\",\"QHM\":\"Qom (\\u0642\\u0645)\",\"KRD\":\"Kurdistan \\\/ \\u06a9\\u0631\\u062f\\u0633\\u062a\\u0627\\u0646)\",\"KBD\":\"Kohgiluyeh and BoyerAhmad (\\u06a9\\u0647\\u06af\\u06cc\\u0644\\u0648\\u06cc\\u06cc\\u0647 \\u0648 \\u0628\\u0648\\u06cc\\u0631\\u0627\\u062d\\u0645\\u062f)\",\"GLS\":\"Golestan (\\u06af\\u0644\\u0633\\u062a\\u0627\\u0646)\",\"GIL\":\"Gilan (\\u06af\\u06cc\\u0644\\u0627\\u0646)\",\"MZN\":\"Mazandaran (\\u0645\\u0627\\u0632\\u0646\\u062f\\u0631\\u0627\\u0646)\",\"MKZ\":\"Markazi (\\u0645\\u0631\\u06a9\\u0632\\u06cc)\",\"HRZ\":\"Hormozgan (\\u0647\\u0631\\u0645\\u0632\\u06af\\u0627\\u0646)\",\"SBN\":\"Sistan and Baluchestan (\\u0633\\u06cc\\u0633\\u062a\\u0627\\u0646 \\u0648 \\u0628\\u0644\\u0648\\u0686\\u0633\\u062a\\u0627\\u0646)\"},\"IS\":[],\"IT\":{\"AG\":\"Agrigento\",\"AL\":\"Alessandria\",\"AN\":\"Ancona\",\"AO\":\"Aosta\",\"AR\":\"Arezzo\",\"AP\":\"Ascoli Piceno\",\"AT\":\"Asti\",\"AV\":\"Avellino\",\"BA\":\"Bari\",\"BT\":\"Barletta-Andria-Trani\",\"BL\":\"Belluno\",\"BN\":\"Benevento\",\"BG\":\"Bergamo\",\"BI\":\"Biella\",\"BO\":\"Bologna\",\"BZ\":\"Bolzano\",\"BS\":\"Brescia\",\"BR\":\"Brindisi\",\"CA\":\"Cagliari\",\"CL\":\"Caltanissetta\",\"CB\":\"Campobasso\",\"CE\":\"Caserta\",\"CT\":\"Catania\",\"CZ\":\"Catanzaro\",\"CH\":\"Chieti\",\"CO\":\"Como\",\"CS\":\"Cosenza\",\"CR\":\"Cremona\",\"KR\":\"Crotone\",\"CN\":\"Cuneo\",\"EN\":\"Enna\",\"FM\":\"Fermo\",\"FE\":\"Ferrara\",\"FI\":\"Firenze\",\"FG\":\"Foggia\",\"FC\":\"Forl\\u00ec-Cesena\",\"FR\":\"Frosinone\",\"GE\":\"Genova\",\"GO\":\"Gorizia\",\"GR\":\"Grosseto\",\"IM\":\"Imperia\",\"IS\":\"Isernia\",\"SP\":\"La Spezia\",\"AQ\":\"L'Aquila\",\"LT\":\"Latina\",\"LE\":\"Lecce\",\"LC\":\"Lecco\",\"LI\":\"Livorno\",\"LO\":\"Lodi\",\"LU\":\"Lucca\",\"MC\":\"Macerata\",\"MN\":\"Mantova\",\"MS\":\"Massa-Carrara\",\"MT\":\"Matera\",\"ME\":\"Messina\",\"MI\":\"Milano\",\"MO\":\"Modena\",\"MB\":\"Monza e della Brianza\",\"NA\":\"Napoli\",\"NO\":\"Novara\",\"NU\":\"Nuoro\",\"OR\":\"Oristano\",\"PD\":\"Padova\",\"PA\":\"Palermo\",\"PR\":\"Parma\",\"PV\":\"Pavia\",\"PG\":\"Perugia\",\"PU\":\"Pesaro e Urbino\",\"PE\":\"Pescara\",\"PC\":\"Piacenza\",\"PI\":\"Pisa\",\"PT\":\"Pistoia\",\"PN\":\"Pordenone\",\"PZ\":\"Potenza\",\"PO\":\"Prato\",\"RG\":\"Ragusa\",\"RA\":\"Ravenna\",\"RC\":\"Reggio Calabria\",\"RE\":\"Reggio Emilia\",\"RI\":\"Rieti\",\"RN\":\"Rimini\",\"RM\":\"Roma\",\"RO\":\"Rovigo\",\"SA\":\"Salerno\",\"SS\":\"Sassari\",\"SV\":\"Savona\",\"SI\":\"Siena\",\"SR\":\"Siracusa\",\"SO\":\"Sondrio\",\"SU\":\"Sud Sardegna\",\"TA\":\"Taranto\",\"TE\":\"Teramo\",\"TR\":\"Terni\",\"TO\":\"Torino\",\"TP\":\"Trapani\",\"TN\":\"Trento\",\"TV\":\"Treviso\",\"TS\":\"Trieste\",\"UD\":\"Udine\",\"VA\":\"Varese\",\"VE\":\"Venezia\",\"VB\":\"Verbano-Cusio-Ossola\",\"VC\":\"Vercelli\",\"VR\":\"Verona\",\"VV\":\"Vibo Valentia\",\"VI\":\"Vicenza\",\"VT\":\"Viterbo\"},\"IL\":[],\"IM\":[],\"JM\":{\"JM-01\":\"Kingston\",\"JM-02\":\"Saint Andrew\",\"JM-03\":\"Saint Thomas\",\"JM-04\":\"Portland\",\"JM-05\":\"Saint Mary\",\"JM-06\":\"Saint Ann\",\"JM-07\":\"Trelawny\",\"JM-08\":\"Saint James\",\"JM-09\":\"Hanover\",\"JM-10\":\"Westmoreland\",\"JM-11\":\"Saint Elizabeth\",\"JM-12\":\"Manchester\",\"JM-13\":\"Clarendon\",\"JM-14\":\"Saint Catherine\"},\"JP\":{\"JP01\":\"Hokkaido\",\"JP02\":\"Aomori\",\"JP03\":\"Iwate\",\"JP04\":\"Miyagi\",\"JP05\":\"Akita\",\"JP06\":\"Yamagata\",\"JP07\":\"Fukushima\",\"JP08\":\"Ibaraki\",\"JP09\":\"Tochigi\",\"JP10\":\"Gunma\",\"JP11\":\"Saitama\",\"JP12\":\"Chiba\",\"JP13\":\"Tokyo\",\"JP14\":\"Kanagawa\",\"JP15\":\"Niigata\",\"JP16\":\"Toyama\",\"JP17\":\"Ishikawa\",\"JP18\":\"Fukui\",\"JP19\":\"Yamanashi\",\"JP20\":\"Nagano\",\"JP21\":\"Gifu\",\"JP22\":\"Shizuoka\",\"JP23\":\"Aichi\",\"JP24\":\"Mie\",\"JP25\":\"Shiga\",\"JP26\":\"Kyoto\",\"JP27\":\"Osaka\",\"JP28\":\"Hyogo\",\"JP29\":\"Nara\",\"JP30\":\"Wakayama\",\"JP31\":\"Tottori\",\"JP32\":\"Shimane\",\"JP33\":\"Okayama\",\"JP34\":\"Hiroshima\",\"JP35\":\"Yamaguchi\",\"JP36\":\"Tokushima\",\"JP37\":\"Kagawa\",\"JP38\":\"Ehime\",\"JP39\":\"Kochi\",\"JP40\":\"Fukuoka\",\"JP41\":\"Saga\",\"JP42\":\"Nagasaki\",\"JP43\":\"Kumamoto\",\"JP44\":\"Oita\",\"JP45\":\"Miyazaki\",\"JP46\":\"Kagoshima\",\"JP47\":\"Okinawa\"},\"KE\":{\"KE01\":\"Baringo\",\"KE02\":\"Bomet\",\"KE03\":\"Bungoma\",\"KE04\":\"Busia\",\"KE05\":\"Elgeyo-Marakwet\",\"KE06\":\"Embu\",\"KE07\":\"Garissa\",\"KE08\":\"Homa Bay\",\"KE09\":\"Isiolo\",\"KE10\":\"Kajiado\",\"KE11\":\"Kakamega\",\"KE12\":\"Kericho\",\"KE13\":\"Kiambu\",\"KE14\":\"Kilifi\",\"KE15\":\"Kirinyaga\",\"KE16\":\"Kisii\",\"KE17\":\"Kisumu\",\"KE18\":\"Kitui\",\"KE19\":\"Kwale\",\"KE20\":\"Laikipia\",\"KE21\":\"Lamu\",\"KE22\":\"Machakos\",\"KE23\":\"Makueni\",\"KE24\":\"Mandera\",\"KE25\":\"Marsabit\",\"KE26\":\"Meru\",\"KE27\":\"Migori\",\"KE28\":\"Mombasa\",\"KE29\":\"Murang\\u2019a\",\"KE30\":\"Nairobi County\",\"KE31\":\"Nakuru\",\"KE32\":\"Nandi\",\"KE33\":\"Narok\",\"KE34\":\"Nyamira\",\"KE35\":\"Nyandarua\",\"KE36\":\"Nyeri\",\"KE37\":\"Samburu\",\"KE38\":\"Siaya\",\"KE39\":\"Taita-Taveta\",\"KE40\":\"Tana River\",\"KE41\":\"Tharaka-Nithi\",\"KE42\":\"Trans Nzoia\",\"KE43\":\"Turkana\",\"KE44\":\"Uasin Gishu\",\"KE45\":\"Vihiga\",\"KE46\":\"Wajir\",\"KE47\":\"West Pokot\"},\"KN\":{\"KNK\":\"Saint Kitts\",\"KNN\":\"Nevis\",\"KN01\":\"Christ Church Nichola Town\",\"KN02\":\"Saint Anne Sandy Point\",\"KN03\":\"Saint George Basseterre\",\"KN04\":\"Saint George Gingerland\",\"KN05\":\"Saint James Windward\",\"KN06\":\"Saint John Capisterre\",\"KN07\":\"Saint John Figtree\",\"KN08\":\"Saint Mary Cayon\",\"KN09\":\"Saint Paul Capisterre\",\"KN10\":\"Saint Paul Charlestown\",\"KN11\":\"Saint Peter Basseterre\",\"KN12\":\"Saint Thomas Lowland\",\"KN13\":\"Saint Thomas Middle Island\",\"KN15\":\"Trinity Palmetto Point\"},\"KR\":[],\"KW\":[],\"LA\":{\"AT\":\"Attapeu\",\"BK\":\"Bokeo\",\"BL\":\"Bolikhamsai\",\"CH\":\"Champasak\",\"HO\":\"Houaphanh\",\"KH\":\"Khammouane\",\"LM\":\"Luang Namtha\",\"LP\":\"Luang Prabang\",\"OU\":\"Oudomxay\",\"PH\":\"Phongsaly\",\"SL\":\"Salavan\",\"SV\":\"Savannakhet\",\"VI\":\"Vientiane Province\",\"VT\":\"Vientiane\",\"XA\":\"Sainyabuli\",\"XE\":\"Sekong\",\"XI\":\"Xiangkhouang\",\"XS\":\"Xaisomboun\"},\"LB\":[],\"LI\":[],\"LR\":{\"BM\":\"Bomi\",\"BN\":\"Bong\",\"GA\":\"Gbarpolu\",\"GB\":\"Grand Bassa\",\"GC\":\"Grand Cape Mount\",\"GG\":\"Grand Gedeh\",\"GK\":\"Grand Kru\",\"LO\":\"Lofa\",\"MA\":\"Margibi\",\"MY\":\"Maryland\",\"MO\":\"Montserrado\",\"NM\":\"Nimba\",\"RV\":\"Rivercess\",\"RG\":\"River Gee\",\"SN\":\"Sinoe\"},\"LU\":[],\"MA\":{\"maagd\":\"Agadir-Ida Ou Tanane\",\"maazi\":\"Azilal\",\"mabem\":\"B\\u00e9ni-Mellal\",\"maber\":\"Berkane\",\"mabes\":\"Ben Slimane\",\"mabod\":\"Boujdour\",\"mabom\":\"Boulemane\",\"mabrr\":\"Berrechid\",\"macas\":\"Casablanca\",\"mache\":\"Chefchaouen\",\"machi\":\"Chichaoua\",\"macht\":\"Chtouka A\\u00eft Baha\",\"madri\":\"Driouch\",\"maedi\":\"Essaouira\",\"maerr\":\"Errachidia\",\"mafah\":\"Fahs-Beni Makada\",\"mafes\":\"F\\u00e8s-Dar-Dbibegh\",\"mafig\":\"Figuig\",\"mafqh\":\"Fquih Ben Salah\",\"mague\":\"Guelmim\",\"maguf\":\"Guercif\",\"mahaj\":\"El Hajeb\",\"mahao\":\"Al Haouz\",\"mahoc\":\"Al Hoce\\u00efma\",\"maifr\":\"Ifrane\",\"maine\":\"Inezgane-A\\u00eft Melloul\",\"majdi\":\"El Jadida\",\"majra\":\"Jerada\",\"maken\":\"K\\u00e9nitra\",\"makes\":\"Kelaat Sraghna\",\"makhe\":\"Khemisset\",\"makhn\":\"Kh\\u00e9nifra\",\"makho\":\"Khouribga\",\"malaa\":\"La\\u00e2youne\",\"malar\":\"Larache\",\"mamar\":\"Marrakech\",\"mamdf\":\"M\\u2019diq-Fnideq\",\"mamed\":\"M\\u00e9diouna\",\"mamek\":\"Mekn\\u00e8s\",\"mamid\":\"Midelt\",\"mammd\":\"Marrakech-Medina\",\"mammn\":\"Marrakech-Menara\",\"mamoh\":\"Mohammedia\",\"mamou\":\"Moulay Yacoub\",\"manad\":\"Nador\",\"manou\":\"Nouaceur\",\"maoua\":\"Ouarzazate\",\"maoud\":\"Oued Ed-Dahab\",\"maouj\":\"Oujda-Angad\",\"maouz\":\"Ouezzane\",\"marab\":\"Rabat\",\"mareh\":\"Rehamna\",\"masaf\":\"Safi\",\"masal\":\"Sal\\u00e9\",\"masef\":\"Sefrou\",\"maset\":\"Settat\",\"masib\":\"Sidi Bennour\",\"masif\":\"Sidi Ifni\",\"masik\":\"Sidi Kacem\",\"masil\":\"Sidi Slimane\",\"maskh\":\"Skhirat-T\\u00e9mara\",\"masyb\":\"Sidi Youssef Ben Ali\",\"mataf\":\"Tarfaya (EH-partial)\",\"matai\":\"Taourirt\",\"matao\":\"Taounate\",\"matar\":\"Taroudant\",\"matat\":\"Tata\",\"mataz\":\"Taza\",\"matet\":\"T\\u00e9touan\",\"matin\":\"Tinghir\",\"matiz\":\"Tiznit\",\"matng\":\"Tangier-Assilah\",\"matnt\":\"Tan-Tan\",\"mayus\":\"Youssoufia\",\"mazag\":\"Zagora\"},\"MD\":{\"C\":\"Chi\\u0219in\\u0103u\",\"BL\":\"B\\u0103l\\u021bi\",\"AN\":\"Anenii Noi\",\"BS\":\"Basarabeasca\",\"BR\":\"Briceni\",\"CH\":\"Cahul\",\"CT\":\"Cantemir\",\"CL\":\"C\\u0103l\\u0103ra\\u0219i\",\"CS\":\"C\\u0103u\\u0219eni\",\"CM\":\"Cimi\\u0219lia\",\"CR\":\"Criuleni\",\"DN\":\"Dondu\\u0219eni\",\"DR\":\"Drochia\",\"DB\":\"Dub\\u0103sari\",\"ED\":\"Edine\\u021b\",\"FL\":\"F\\u0103le\\u0219ti\",\"FR\":\"Flore\\u0219ti\",\"GE\":\"UTA G\\u0103g\\u0103uzia\",\"GL\":\"Glodeni\",\"HN\":\"H\\u00eence\\u0219ti\",\"IL\":\"Ialoveni\",\"LV\":\"Leova\",\"NS\":\"Nisporeni\",\"OC\":\"Ocni\\u021ba\",\"OR\":\"Orhei\",\"RZ\":\"Rezina\",\"RS\":\"R\\u00ee\\u0219cani\",\"SG\":\"S\\u00eengerei\",\"SR\":\"Soroca\",\"ST\":\"Str\\u0103\\u0219eni\",\"SD\":\"\\u0218old\\u0103ne\\u0219ti\",\"SV\":\"\\u0218tefan Vod\\u0103\",\"TR\":\"Taraclia\",\"TL\":\"Telene\\u0219ti\",\"UN\":\"Ungheni\"},\"MF\":[],\"MQ\":[],\"MT\":[],\"MX\":{\"DF\":\"Ciudad de M\\u00e9xico\",\"JA\":\"Jalisco\",\"NL\":\"Nuevo Le\\u00f3n\",\"AG\":\"Aguascalientes\",\"BC\":\"Baja California\",\"BS\":\"Baja California Sur\",\"CM\":\"Campeche\",\"CS\":\"Chiapas\",\"CH\":\"Chihuahua\",\"CO\":\"Coahuila\",\"CL\":\"Colima\",\"DG\":\"Durango\",\"GT\":\"Guanajuato\",\"GR\":\"Guerrero\",\"HG\":\"Hidalgo\",\"MX\":\"Estado de M\\u00e9xico\",\"MI\":\"Michoac\\u00e1n\",\"MO\":\"Morelos\",\"NA\":\"Nayarit\",\"OA\":\"Oaxaca\",\"PU\":\"Puebla\",\"QT\":\"Quer\\u00e9taro\",\"QR\":\"Quintana Roo\",\"SL\":\"San Luis Potos\\u00ed\",\"SI\":\"Sinaloa\",\"SO\":\"Sonora\",\"TB\":\"Tabasco\",\"TM\":\"Tamaulipas\",\"TL\":\"Tlaxcala\",\"VE\":\"Veracruz\",\"YU\":\"Yucat\\u00e1n\",\"ZA\":\"Zacatecas\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"LBN\":\"Labuan\",\"MLK\":\"Malacca (Melaka)\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PNG\":\"Penang (Pulau Pinang)\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"PJY\":\"Putrajaya\",\"KUL\":\"Kuala Lumpur\"},\"MZ\":{\"MZP\":\"Cabo Delgado\",\"MZG\":\"Gaza\",\"MZI\":\"Inhambane\",\"MZB\":\"Manica\",\"MZL\":\"Maputo Province\",\"MZMPM\":\"Maputo\",\"MZN\":\"Nampula\",\"MZA\":\"Niassa\",\"MZS\":\"Sofala\",\"MZT\":\"Tete\",\"MZQ\":\"Zamb\\u00e9zia\"},\"NA\":{\"ER\":\"Erongo\",\"HA\":\"Hardap\",\"KA\":\"Karas\",\"KE\":\"Kavango East\",\"KW\":\"Kavango West\",\"KH\":\"Khomas\",\"KU\":\"Kunene\",\"OW\":\"Ohangwena\",\"OH\":\"Omaheke\",\"OS\":\"Omusati\",\"ON\":\"Oshana\",\"OT\":\"Oshikoto\",\"OD\":\"Otjozondjupa\",\"CA\":\"Zambezi\"},\"NG\":{\"AB\":\"Abia\",\"FC\":\"Abuja\",\"AD\":\"Adamawa\",\"AK\":\"Akwa Ibom\",\"AN\":\"Anambra\",\"BA\":\"Bauchi\",\"BY\":\"Bayelsa\",\"BE\":\"Benue\",\"BO\":\"Borno\",\"CR\":\"Cross River\",\"DE\":\"Delta\",\"EB\":\"Ebonyi\",\"ED\":\"Edo\",\"EK\":\"Ekiti\",\"EN\":\"Enugu\",\"GO\":\"Gombe\",\"IM\":\"Imo\",\"JI\":\"Jigawa\",\"KD\":\"Kaduna\",\"KN\":\"Kano\",\"KT\":\"Katsina\",\"KE\":\"Kebbi\",\"KO\":\"Kogi\",\"KW\":\"Kwara\",\"LA\":\"Lagos\",\"NA\":\"Nasarawa\",\"NI\":\"Niger\",\"OG\":\"Ogun\",\"ON\":\"Ondo\",\"OS\":\"Osun\",\"OY\":\"Oyo\",\"PL\":\"Plateau\",\"RI\":\"Rivers\",\"SO\":\"Sokoto\",\"TA\":\"Taraba\",\"YO\":\"Yobe\",\"ZA\":\"Zamfara\"},\"NL\":[],\"NO\":[],\"NP\":{\"BAG\":\"Bagmati\",\"BHE\":\"Bheri\",\"DHA\":\"Dhaulagiri\",\"GAN\":\"Gandaki\",\"JAN\":\"Janakpur\",\"KAR\":\"Karnali\",\"KOS\":\"Koshi\",\"LUM\":\"Lumbini\",\"MAH\":\"Mahakali\",\"MEC\":\"Mechi\",\"NAR\":\"Narayani\",\"RAP\":\"Rapti\",\"SAG\":\"Sagarmatha\",\"SET\":\"Seti\"},\"NI\":{\"NI-AN\":\"Atl\\u00e1ntico Norte\",\"NI-AS\":\"Atl\\u00e1ntico Sur\",\"NI-BO\":\"Boaco\",\"NI-CA\":\"Carazo\",\"NI-CI\":\"Chinandega\",\"NI-CO\":\"Chontales\",\"NI-ES\":\"Estel\\u00ed\",\"NI-GR\":\"Granada\",\"NI-JI\":\"Jinotega\",\"NI-LE\":\"Le\\u00f3n\",\"NI-MD\":\"Madriz\",\"NI-MN\":\"Managua\",\"NI-MS\":\"Masaya\",\"NI-MT\":\"Matagalpa\",\"NI-NS\":\"Nueva Segovia\",\"NI-RI\":\"Rivas\",\"NI-SJ\":\"R\\u00edo San Juan\"},\"NZ\":{\"NTL\":\"Northland\",\"AUK\":\"Auckland\",\"WKO\":\"Waikato\",\"BOP\":\"Bay of Plenty\",\"TKI\":\"Taranaki\",\"GIS\":\"Gisborne\",\"HKB\":\"Hawke\\u2019s Bay\",\"MWT\":\"Manawatu-Wanganui\",\"WGN\":\"Wellington\",\"NSN\":\"Nelson\",\"MBH\":\"Marlborough\",\"TAS\":\"Tasman\",\"WTC\":\"West Coast\",\"CAN\":\"Canterbury\",\"OTA\":\"Otago\",\"STL\":\"Southland\"},\"PA\":{\"PA-1\":\"Bocas del Toro\",\"PA-2\":\"Cocl\\u00e9\",\"PA-3\":\"Col\\u00f3n\",\"PA-4\":\"Chiriqu\\u00ed\",\"PA-5\":\"Dari\\u00e9n\",\"PA-6\":\"Herrera\",\"PA-7\":\"Los Santos\",\"PA-8\":\"Panam\\u00e1\",\"PA-9\":\"Veraguas\",\"PA-10\":\"West Panam\\u00e1\",\"PA-EM\":\"Ember\\u00e1\",\"PA-KY\":\"Guna Yala\",\"PA-NB\":\"Ng\\u00f6be-Bugl\\u00e9\"},\"PE\":{\"CAL\":\"El Callao\",\"LMA\":\"Municipalidad Metropolitana de Lima\",\"AMA\":\"Amazonas\",\"ANC\":\"Ancash\",\"APU\":\"Apur\\u00edmac\",\"ARE\":\"Arequipa\",\"AYA\":\"Ayacucho\",\"CAJ\":\"Cajamarca\",\"CUS\":\"Cusco\",\"HUV\":\"Huancavelica\",\"HUC\":\"Hu\\u00e1nuco\",\"ICA\":\"Ica\",\"JUN\":\"Jun\\u00edn\",\"LAL\":\"La Libertad\",\"LAM\":\"Lambayeque\",\"LIM\":\"Lima\",\"LOR\":\"Loreto\",\"MDD\":\"Madre de Dios\",\"MOQ\":\"Moquegua\",\"PAS\":\"Pasco\",\"PIU\":\"Piura\",\"PUN\":\"Puno\",\"SAM\":\"San Mart\\u00edn\",\"TAC\":\"Tacna\",\"TUM\":\"Tumbes\",\"UCA\":\"Ucayali\"},\"PH\":{\"ABR\":\"Abra\",\"AGN\":\"Agusan del Norte\",\"AGS\":\"Agusan del Sur\",\"AKL\":\"Aklan\",\"ALB\":\"Albay\",\"ANT\":\"Antique\",\"APA\":\"Apayao\",\"AUR\":\"Aurora\",\"BAS\":\"Basilan\",\"BAN\":\"Bataan\",\"BTN\":\"Batanes\",\"BTG\":\"Batangas\",\"BEN\":\"Benguet\",\"BIL\":\"Biliran\",\"BOH\":\"Bohol\",\"BUK\":\"Bukidnon\",\"BUL\":\"Bulacan\",\"CAG\":\"Cagayan\",\"CAN\":\"Camarines Norte\",\"CAS\":\"Camarines Sur\",\"CAM\":\"Camiguin\",\"CAP\":\"Capiz\",\"CAT\":\"Catanduanes\",\"CAV\":\"Cavite\",\"CEB\":\"Cebu\",\"COM\":\"Compostela Valley\",\"NCO\":\"Cotabato\",\"DAV\":\"Davao del Norte\",\"DAS\":\"Davao del Sur\",\"DAC\":\"Davao Occidental\",\"DAO\":\"Davao Oriental\",\"DIN\":\"Dinagat Islands\",\"EAS\":\"Eastern Samar\",\"GUI\":\"Guimaras\",\"IFU\":\"Ifugao\",\"ILN\":\"Ilocos Norte\",\"ILS\":\"Ilocos Sur\",\"ILI\":\"Iloilo\",\"ISA\":\"Isabela\",\"KAL\":\"Kalinga\",\"LUN\":\"La Union\",\"LAG\":\"Laguna\",\"LAN\":\"Lanao del Norte\",\"LAS\":\"Lanao del Sur\",\"LEY\":\"Leyte\",\"MAG\":\"Maguindanao\",\"MAD\":\"Marinduque\",\"MAS\":\"Masbate\",\"MSC\":\"Misamis Occidental\",\"MSR\":\"Misamis Oriental\",\"MOU\":\"Mountain Province\",\"NEC\":\"Negros Occidental\",\"NER\":\"Negros Oriental\",\"NSA\":\"Northern Samar\",\"NUE\":\"Nueva Ecija\",\"NUV\":\"Nueva Vizcaya\",\"MDC\":\"Occidental Mindoro\",\"MDR\":\"Oriental Mindoro\",\"PLW\":\"Palawan\",\"PAM\":\"Pampanga\",\"PAN\":\"Pangasinan\",\"QUE\":\"Quezon\",\"QUI\":\"Quirino\",\"RIZ\":\"Rizal\",\"ROM\":\"Romblon\",\"WSA\":\"Samar\",\"SAR\":\"Sarangani\",\"SIQ\":\"Siquijor\",\"SOR\":\"Sorsogon\",\"SCO\":\"South Cotabato\",\"SLE\":\"Southern Leyte\",\"SUK\":\"Sultan Kudarat\",\"SLU\":\"Sulu\",\"SUN\":\"Surigao del Norte\",\"SUR\":\"Surigao del Sur\",\"TAR\":\"Tarlac\",\"TAW\":\"Tawi-Tawi\",\"ZMB\":\"Zambales\",\"ZAN\":\"Zamboanga del Norte\",\"ZAS\":\"Zamboanga del Sur\",\"ZSI\":\"Zamboanga Sibugay\",\"00\":\"Metro Manila\"},\"PK\":{\"JK\":\"Azad Kashmir\",\"BA\":\"Balochistan\",\"TA\":\"FATA\",\"GB\":\"Gilgit Baltistan\",\"IS\":\"Islamabad Capital Territory\",\"KP\":\"Khyber Pakhtunkhwa\",\"PB\":\"Punjab\",\"SD\":\"Sindh\"},\"PL\":[],\"PR\":[],\"PT\":[],\"PY\":{\"PY-ASU\":\"Asunci\\u00f3n\",\"PY-1\":\"Concepci\\u00f3n\",\"PY-2\":\"San Pedro\",\"PY-3\":\"Cordillera\",\"PY-4\":\"Guair\\u00e1\",\"PY-5\":\"Caaguaz\\u00fa\",\"PY-6\":\"Caazap\\u00e1\",\"PY-7\":\"Itap\\u00faa\",\"PY-8\":\"Misiones\",\"PY-9\":\"Paraguar\\u00ed\",\"PY-10\":\"Alto Paran\\u00e1\",\"PY-11\":\"Central\",\"PY-12\":\"\\u00d1eembuc\\u00fa\",\"PY-13\":\"Amambay\",\"PY-14\":\"Canindey\\u00fa\",\"PY-15\":\"Presidente Hayes\",\"PY-16\":\"Alto Paraguay\",\"PY-17\":\"Boquer\\u00f3n\"},\"RE\":[],\"RO\":{\"AB\":\"Alba\",\"AR\":\"Arad\",\"AG\":\"Arge\\u0219\",\"BC\":\"Bac\\u0103u\",\"BH\":\"Bihor\",\"BN\":\"Bistri\\u021ba-N\\u0103s\\u0103ud\",\"BT\":\"Boto\\u0219ani\",\"BR\":\"Br\\u0103ila\",\"BV\":\"Bra\\u0219ov\",\"B\":\"Bucure\\u0219ti\",\"BZ\":\"Buz\\u0103u\",\"CL\":\"C\\u0103l\\u0103ra\\u0219i\",\"CS\":\"Cara\\u0219-Severin\",\"CJ\":\"Cluj\",\"CT\":\"Constan\\u021ba\",\"CV\":\"Covasna\",\"DB\":\"D\\u00e2mbovi\\u021ba\",\"DJ\":\"Dolj\",\"GL\":\"Gala\\u021bi\",\"GR\":\"Giurgiu\",\"GJ\":\"Gorj\",\"HR\":\"Harghita\",\"HD\":\"Hunedoara\",\"IL\":\"Ialomi\\u021ba\",\"IS\":\"Ia\\u0219i\",\"IF\":\"Ilfov\",\"MM\":\"Maramure\\u0219\",\"MH\":\"Mehedin\\u021bi\",\"MS\":\"Mure\\u0219\",\"NT\":\"Neam\\u021b\",\"OT\":\"Olt\",\"PH\":\"Prahova\",\"SJ\":\"S\\u0103laj\",\"SM\":\"Satu Mare\",\"SB\":\"Sibiu\",\"SV\":\"Suceava\",\"TR\":\"Teleorman\",\"TM\":\"Timi\\u0219\",\"TL\":\"Tulcea\",\"VL\":\"V\\u00e2lcea\",\"VS\":\"Vaslui\",\"VN\":\"Vrancea\"},\"SN\":{\"SNDB\":\"Diourbel\",\"SNDK\":\"Dakar\",\"SNFK\":\"Fatick\",\"SNKA\":\"Kaffrine\",\"SNKD\":\"Kolda\",\"SNKE\":\"K\\u00e9dougou\",\"SNKL\":\"Kaolack\",\"SNLG\":\"Louga\",\"SNMT\":\"Matam\",\"SNSE\":\"S\\u00e9dhiou\",\"SNSL\":\"Saint-Louis\",\"SNTC\":\"Tambacounda\",\"SNTH\":\"Thi\\u00e8s\",\"SNZG\":\"Ziguinchor\"},\"SG\":[],\"SK\":[],\"SI\":[],\"SV\":{\"SV-AH\":\"Ahuachap\\u00e1n\",\"SV-CA\":\"Caba\\u00f1as\",\"SV-CH\":\"Chalatenango\",\"SV-CU\":\"Cuscatl\\u00e1n\",\"SV-LI\":\"La Libertad\",\"SV-MO\":\"Moraz\\u00e1n\",\"SV-PA\":\"La Paz\",\"SV-SA\":\"Santa Ana\",\"SV-SM\":\"San Miguel\",\"SV-SO\":\"Sonsonate\",\"SV-SS\":\"San Salvador\",\"SV-SV\":\"San Vicente\",\"SV-UN\":\"La Uni\\u00f3n\",\"SV-US\":\"Usulut\\u00e1n\"},\"TH\":{\"TH-37\":\"Amnat Charoen\",\"TH-15\":\"Ang Thong\",\"TH-14\":\"Ayutthaya\",\"TH-10\":\"Bangkok\",\"TH-38\":\"Bueng Kan\",\"TH-31\":\"Buri Ram\",\"TH-24\":\"Chachoengsao\",\"TH-18\":\"Chai Nat\",\"TH-36\":\"Chaiyaphum\",\"TH-22\":\"Chanthaburi\",\"TH-50\":\"Chiang Mai\",\"TH-57\":\"Chiang Rai\",\"TH-20\":\"Chonburi\",\"TH-86\":\"Chumphon\",\"TH-46\":\"Kalasin\",\"TH-62\":\"Kamphaeng Phet\",\"TH-71\":\"Kanchanaburi\",\"TH-40\":\"Khon Kaen\",\"TH-81\":\"Krabi\",\"TH-52\":\"Lampang\",\"TH-51\":\"Lamphun\",\"TH-42\":\"Loei\",\"TH-16\":\"Lopburi\",\"TH-58\":\"Mae Hong Son\",\"TH-44\":\"Maha Sarakham\",\"TH-49\":\"Mukdahan\",\"TH-26\":\"Nakhon Nayok\",\"TH-73\":\"Nakhon Pathom\",\"TH-48\":\"Nakhon Phanom\",\"TH-30\":\"Nakhon Ratchasima\",\"TH-60\":\"Nakhon Sawan\",\"TH-80\":\"Nakhon Si Thammarat\",\"TH-55\":\"Nan\",\"TH-96\":\"Narathiwat\",\"TH-39\":\"Nong Bua Lam Phu\",\"TH-43\":\"Nong Khai\",\"TH-12\":\"Nonthaburi\",\"TH-13\":\"Pathum Thani\",\"TH-94\":\"Pattani\",\"TH-82\":\"Phang Nga\",\"TH-93\":\"Phatthalung\",\"TH-56\":\"Phayao\",\"TH-67\":\"Phetchabun\",\"TH-76\":\"Phetchaburi\",\"TH-66\":\"Phichit\",\"TH-65\":\"Phitsanulok\",\"TH-54\":\"Phrae\",\"TH-83\":\"Phuket\",\"TH-25\":\"Prachin Buri\",\"TH-77\":\"Prachuap Khiri Khan\",\"TH-85\":\"Ranong\",\"TH-70\":\"Ratchaburi\",\"TH-21\":\"Rayong\",\"TH-45\":\"Roi Et\",\"TH-27\":\"Sa Kaeo\",\"TH-47\":\"Sakon Nakhon\",\"TH-11\":\"Samut Prakan\",\"TH-74\":\"Samut Sakhon\",\"TH-75\":\"Samut Songkhram\",\"TH-19\":\"Saraburi\",\"TH-91\":\"Satun\",\"TH-17\":\"Sing Buri\",\"TH-33\":\"Sisaket\",\"TH-90\":\"Songkhla\",\"TH-64\":\"Sukhothai\",\"TH-72\":\"Suphan Buri\",\"TH-84\":\"Surat Thani\",\"TH-32\":\"Surin\",\"TH-63\":\"Tak\",\"TH-92\":\"Trang\",\"TH-23\":\"Trat\",\"TH-34\":\"Ubon Ratchathani\",\"TH-41\":\"Udon Thani\",\"TH-61\":\"Uthai Thani\",\"TH-53\":\"Uttaradit\",\"TH-95\":\"Yala\",\"TH-35\":\"Yasothon\"},\"TR\":{\"TR01\":\"Adana\",\"TR02\":\"Ad\\u0131yaman\",\"TR03\":\"Afyon\",\"TR04\":\"A\\u011fr\\u0131\",\"TR05\":\"Amasya\",\"TR06\":\"Ankara\",\"TR07\":\"Antalya\",\"TR08\":\"Artvin\",\"TR09\":\"Ayd\\u0131n\",\"TR10\":\"Bal\\u0131kesir\",\"TR11\":\"Bilecik\",\"TR12\":\"Bing\\u00f6l\",\"TR13\":\"Bitlis\",\"TR14\":\"Bolu\",\"TR15\":\"Burdur\",\"TR16\":\"Bursa\",\"TR17\":\"\\u00c7anakkale\",\"TR18\":\"\\u00c7ank\\u0131r\\u0131\",\"TR19\":\"\\u00c7orum\",\"TR20\":\"Denizli\",\"TR21\":\"Diyarbak\\u0131r\",\"TR22\":\"Edirne\",\"TR23\":\"Elaz\\u0131\\u011f\",\"TR24\":\"Erzincan\",\"TR25\":\"Erzurum\",\"TR26\":\"Eski\\u015fehir\",\"TR27\":\"Gaziantep\",\"TR28\":\"Giresun\",\"TR29\":\"G\\u00fcm\\u00fc\\u015fhane\",\"TR30\":\"Hakkari\",\"TR31\":\"Hatay\",\"TR32\":\"Isparta\",\"TR33\":\"\\u0130\\u00e7el\",\"TR34\":\"\\u0130stanbul\",\"TR35\":\"\\u0130zmir\",\"TR36\":\"Kars\",\"TR37\":\"Kastamonu\",\"TR38\":\"Kayseri\",\"TR39\":\"K\\u0131rklareli\",\"TR40\":\"K\\u0131r\\u015fehir\",\"TR41\":\"Kocaeli\",\"TR42\":\"Konya\",\"TR43\":\"K\\u00fctahya\",\"TR44\":\"Malatya\",\"TR45\":\"Manisa\",\"TR46\":\"Kahramanmara\\u015f\",\"TR47\":\"Mardin\",\"TR48\":\"Mu\\u011fla\",\"TR49\":\"Mu\\u015f\",\"TR50\":\"Nev\\u015fehir\",\"TR51\":\"Ni\\u011fde\",\"TR52\":\"Ordu\",\"TR53\":\"Rize\",\"TR54\":\"Sakarya\",\"TR55\":\"Samsun\",\"TR56\":\"Siirt\",\"TR57\":\"Sinop\",\"TR58\":\"Sivas\",\"TR59\":\"Tekirda\\u011f\",\"TR60\":\"Tokat\",\"TR61\":\"Trabzon\",\"TR62\":\"Tunceli\",\"TR63\":\"\\u015eanl\\u0131urfa\",\"TR64\":\"U\\u015fak\",\"TR65\":\"Van\",\"TR66\":\"Yozgat\",\"TR67\":\"Zonguldak\",\"TR68\":\"Aksaray\",\"TR69\":\"Bayburt\",\"TR70\":\"Karaman\",\"TR71\":\"K\\u0131r\\u0131kkale\",\"TR72\":\"Batman\",\"TR73\":\"\\u015e\\u0131rnak\",\"TR74\":\"Bart\\u0131n\",\"TR75\":\"Ardahan\",\"TR76\":\"I\\u011fd\\u0131r\",\"TR77\":\"Yalova\",\"TR78\":\"Karab\\u00fck\",\"TR79\":\"Kilis\",\"TR80\":\"Osmaniye\",\"TR81\":\"D\\u00fczce\"},\"TZ\":{\"TZ01\":\"Arusha\",\"TZ02\":\"Dar es Salaam\",\"TZ03\":\"Dodoma\",\"TZ04\":\"Iringa\",\"TZ05\":\"Kagera\",\"TZ06\":\"Pemba North\",\"TZ07\":\"Zanzibar North\",\"TZ08\":\"Kigoma\",\"TZ09\":\"Kilimanjaro\",\"TZ10\":\"Pemba South\",\"TZ11\":\"Zanzibar South\",\"TZ12\":\"Lindi\",\"TZ13\":\"Mara\",\"TZ14\":\"Mbeya\",\"TZ15\":\"Zanzibar West\",\"TZ16\":\"Morogoro\",\"TZ17\":\"Mtwara\",\"TZ18\":\"Mwanza\",\"TZ19\":\"Coast\",\"TZ20\":\"Rukwa\",\"TZ21\":\"Ruvuma\",\"TZ22\":\"Shinyanga\",\"TZ23\":\"Singida\",\"TZ24\":\"Tabora\",\"TZ25\":\"Tanga\",\"TZ26\":\"Manyara\",\"TZ27\":\"Geita\",\"TZ28\":\"Katavi\",\"TZ29\":\"Njombe\",\"TZ30\":\"Simiyu\"},\"LK\":[],\"RS\":{\"RS00\":\"Belgrade\",\"RS14\":\"Bor\",\"RS11\":\"Brani\\u010devo\",\"RS02\":\"Central Banat\",\"RS10\":\"Danube\",\"RS23\":\"Jablanica\",\"RS09\":\"Kolubara\",\"RS08\":\"Ma\\u010dva\",\"RS17\":\"Morava\",\"RS20\":\"Ni\\u0161ava\",\"RS01\":\"North Ba\\u010dka\",\"RS03\":\"North Banat\",\"RS24\":\"P\\u010dinja\",\"RS22\":\"Pirot\",\"RS13\":\"Pomoravlje\",\"RS19\":\"Rasina\",\"RS18\":\"Ra\\u0161ka\",\"RS06\":\"South Ba\\u010dka\",\"RS04\":\"South Banat\",\"RS07\":\"Srem\",\"RS12\":\"\\u0160umadija\",\"RS21\":\"Toplica\",\"RS05\":\"West Ba\\u010dka\",\"RS15\":\"Zaje\\u010dar\",\"RS16\":\"Zlatibor\",\"RS25\":\"Kosovo\",\"RS26\":\"Pe\\u0107\",\"RS27\":\"Prizren\",\"RS28\":\"Kosovska Mitrovica\",\"RS29\":\"Kosovo-Pomoravlje\",\"RSKM\":\"Kosovo-Metohija\",\"RSVO\":\"Vojvodina\"},\"RW\":[],\"SE\":[],\"UA\":{\"UA05\":\"Vinnychchyna\",\"UA07\":\"Volyn\",\"UA09\":\"Luhanshchyna\",\"UA12\":\"Dnipropetrovshchyna\",\"UA14\":\"Donechchyna\",\"UA18\":\"Zhytomyrshchyna\",\"UA21\":\"Zakarpattia\",\"UA23\":\"Zaporizhzhya\",\"UA26\":\"Prykarpattia\",\"UA30\":\"Kyiv\",\"UA32\":\"Kyivshchyna\",\"UA35\":\"Kirovohradschyna\",\"UA40\":\"Sevastopol\",\"UA43\":\"Crimea\",\"UA46\":\"Lvivshchyna\",\"UA48\":\"Mykolayivschyna\",\"UA51\":\"Odeshchyna\",\"UA53\":\"Poltavshchyna\",\"UA56\":\"Rivnenshchyna\",\"UA59\":\"Sumshchyna\",\"UA61\":\"Ternopilshchyna\",\"UA63\":\"Kharkivshchyna\",\"UA65\":\"Khersonshchyna\",\"UA68\":\"Khmelnychchyna\",\"UA71\":\"Cherkashchyna\",\"UA74\":\"Chernihivshchyna\",\"UA77\":\"Chernivtsi Oblast\"},\"UG\":{\"UG314\":\"Abim\",\"UG301\":\"Adjumani\",\"UG322\":\"Agago\",\"UG323\":\"Alebtong\",\"UG315\":\"Amolatar\",\"UG324\":\"Amudat\",\"UG216\":\"Amuria\",\"UG316\":\"Amuru\",\"UG302\":\"Apac\",\"UG303\":\"Arua\",\"UG217\":\"Budaka\",\"UG218\":\"Bududa\",\"UG201\":\"Bugiri\",\"UG235\":\"Bugweri\",\"UG420\":\"Buhweju\",\"UG117\":\"Buikwe\",\"UG219\":\"Bukedea\",\"UG118\":\"Bukomansimbi\",\"UG220\":\"Bukwa\",\"UG225\":\"Bulambuli\",\"UG416\":\"Buliisa\",\"UG401\":\"Bundibugyo\",\"UG430\":\"Bunyangabu\",\"UG402\":\"Bushenyi\",\"UG202\":\"Busia\",\"UG221\":\"Butaleja\",\"UG119\":\"Butambala\",\"UG233\":\"Butebo\",\"UG120\":\"Buvuma\",\"UG226\":\"Buyende\",\"UG317\":\"Dokolo\",\"UG121\":\"Gomba\",\"UG304\":\"Gulu\",\"UG403\":\"Hoima\",\"UG417\":\"Ibanda\",\"UG203\":\"Iganga\",\"UG418\":\"Isingiro\",\"UG204\":\"Jinja\",\"UG318\":\"Kaabong\",\"UG404\":\"Kabale\",\"UG405\":\"Kabarole\",\"UG213\":\"Kaberamaido\",\"UG427\":\"Kagadi\",\"UG428\":\"Kakumiro\",\"UG101\":\"Kalangala\",\"UG222\":\"Kaliro\",\"UG122\":\"Kalungu\",\"UG102\":\"Kampala\",\"UG205\":\"Kamuli\",\"UG413\":\"Kamwenge\",\"UG414\":\"Kanungu\",\"UG206\":\"Kapchorwa\",\"UG236\":\"Kapelebyong\",\"UG126\":\"Kasanda\",\"UG406\":\"Kasese\",\"UG207\":\"Katakwi\",\"UG112\":\"Kayunga\",\"UG407\":\"Kibaale\",\"UG103\":\"Kiboga\",\"UG227\":\"Kibuku\",\"UG432\":\"Kikuube\",\"UG419\":\"Kiruhura\",\"UG421\":\"Kiryandongo\",\"UG408\":\"Kisoro\",\"UG305\":\"Kitgum\",\"UG319\":\"Koboko\",\"UG325\":\"Kole\",\"UG306\":\"Kotido\",\"UG208\":\"Kumi\",\"UG333\":\"Kwania\",\"UG228\":\"Kween\",\"UG123\":\"Kyankwanzi\",\"UG422\":\"Kyegegwa\",\"UG415\":\"Kyenjojo\",\"UG125\":\"Kyotera\",\"UG326\":\"Lamwo\",\"UG307\":\"Lira\",\"UG229\":\"Luuka\",\"UG104\":\"Luwero\",\"UG124\":\"Lwengo\",\"UG114\":\"Lyantonde\",\"UG223\":\"Manafwa\",\"UG320\":\"Maracha\",\"UG105\":\"Masaka\",\"UG409\":\"Masindi\",\"UG214\":\"Mayuge\",\"UG209\":\"Mbale\",\"UG410\":\"Mbarara\",\"UG423\":\"Mitooma\",\"UG115\":\"Mityana\",\"UG308\":\"Moroto\",\"UG309\":\"Moyo\",\"UG106\":\"Mpigi\",\"UG107\":\"Mubende\",\"UG108\":\"Mukono\",\"UG334\":\"Nabilatuk\",\"UG311\":\"Nakapiripirit\",\"UG116\":\"Nakaseke\",\"UG109\":\"Nakasongola\",\"UG230\":\"Namayingo\",\"UG234\":\"Namisindwa\",\"UG224\":\"Namutumba\",\"UG327\":\"Napak\",\"UG310\":\"Nebbi\",\"UG231\":\"Ngora\",\"UG424\":\"Ntoroko\",\"UG411\":\"Ntungamo\",\"UG328\":\"Nwoya\",\"UG331\":\"Omoro\",\"UG329\":\"Otuke\",\"UG321\":\"Oyam\",\"UG312\":\"Pader\",\"UG332\":\"Pakwach\",\"UG210\":\"Pallisa\",\"UG110\":\"Rakai\",\"UG429\":\"Rubanda\",\"UG425\":\"Rubirizi\",\"UG431\":\"Rukiga\",\"UG412\":\"Rukungiri\",\"UG111\":\"Sembabule\",\"UG232\":\"Serere\",\"UG426\":\"Sheema\",\"UG215\":\"Sironko\",\"UG211\":\"Soroti\",\"UG212\":\"Tororo\",\"UG113\":\"Wakiso\",\"UG313\":\"Yumbe\",\"UG330\":\"Zombo\"},\"UM\":{\"81\":\"Baker Island\",\"84\":\"Howland Island\",\"86\":\"Jarvis Island\",\"67\":\"Johnston Atoll\",\"89\":\"Kingman Reef\",\"71\":\"Midway Atoll\",\"76\":\"Navassa Island\",\"95\":\"Palmyra Atoll\",\"79\":\"Wake Island\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\"},\"UY\":{\"UY-AR\":\"Artigas\",\"UY-CA\":\"Canelones\",\"UY-CL\":\"Cerro Largo\",\"UY-CO\":\"Colonia\",\"UY-DU\":\"Durazno\",\"UY-FS\":\"Flores\",\"UY-FD\":\"Florida\",\"UY-LA\":\"Lavalleja\",\"UY-MA\":\"Maldonado\",\"UY-MO\":\"Montevideo\",\"UY-PA\":\"Paysand\\u00fa\",\"UY-RN\":\"R\\u00edo Negro\",\"UY-RV\":\"Rivera\",\"UY-RO\":\"Rocha\",\"UY-SA\":\"Salto\",\"UY-SJ\":\"San Jos\\u00e9\",\"UY-SO\":\"Soriano\",\"UY-TA\":\"Tacuaremb\\u00f3\",\"UY-TT\":\"Treinta y Tres\"},\"VE\":{\"VE-A\":\"Capital\",\"VE-B\":\"Anzo\\u00e1tegui\",\"VE-C\":\"Apure\",\"VE-D\":\"Aragua\",\"VE-E\":\"Barinas\",\"VE-F\":\"Bol\\u00edvar\",\"VE-G\":\"Carabobo\",\"VE-H\":\"Cojedes\",\"VE-I\":\"Falc\\u00f3n\",\"VE-J\":\"Gu\\u00e1rico\",\"VE-K\":\"Lara\",\"VE-L\":\"M\\u00e9rida\",\"VE-M\":\"Miranda\",\"VE-N\":\"Monagas\",\"VE-O\":\"Nueva Esparta\",\"VE-P\":\"Portuguesa\",\"VE-R\":\"Sucre\",\"VE-S\":\"T\\u00e1chira\",\"VE-T\":\"Trujillo\",\"VE-U\":\"Yaracuy\",\"VE-V\":\"Zulia\",\"VE-W\":\"Federal Dependencies\",\"VE-X\":\"La Guaira (Vargas)\",\"VE-Y\":\"Delta Amacuro\",\"VE-Z\":\"Amazonas\"},\"VN\":[],\"YT\":[],\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"ZM\":{\"ZM-01\":\"Western\",\"ZM-02\":\"Central\",\"ZM-03\":\"Eastern\",\"ZM-04\":\"Luapula\",\"ZM-05\":\"Northern\",\"ZM-06\":\"North-Western\",\"ZM-07\":\"Southern\",\"ZM-08\":\"Copperbelt\",\"ZM-09\":\"Lusaka\",\"ZM-10\":\"Muchinga\"}}", "i18n_select_state_text": "Select an option\u2026", "i18n_no_matches": "No matches found", "i18n_ajax_error": "Loading failed", "i18n_input_too_short_1": "Please enter 1 or more characters", "i18n_input_too_short_n": "Please enter %qty% or more characters", "i18n_input_too_long_1": "Please delete 1 character", "i18n_input_too_long_n": "Please delete %qty% characters", "i18n_selection_too_long_1": "You can only select 1 item", "i18n_selection_too_long_n": "You can only select %qty% items", "i18n_load_more": "Loading more results\u2026", "i18n_searching": "Searching\u2026" };
        /* ]]> */</script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/frontend/country-select.min.js?ver=9.3.3"
        id="wc-country-select-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-address-i18n-js-extra"> /* <![CDATA[ */
        var wc_address_i18n_params = { "locale": "{\"AE\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"AF\":{\"state\":{\"required\":false,\"hidden\":true}},\"AL\":{\"state\":{\"label\":\"County\"}},\"AO\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Province\"}},\"AT\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"AU\":{\"city\":{\"label\":\"Suburb\"},\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"State\"}},\"AX\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"BA\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Canton\",\"required\":false,\"hidden\":true}},\"BD\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"District\"}},\"BE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"BG\":{\"state\":{\"required\":false}},\"BH\":{\"postcode\":{\"required\":false},\"state\":{\"required\":false,\"hidden\":true}},\"BI\":{\"state\":{\"required\":false,\"hidden\":true}},\"BO\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Department\"}},\"BS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"BZ\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"CA\":{\"postcode\":{\"label\":\"Postal code\"},\"state\":{\"label\":\"Province\"}},\"CH\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Canton\",\"required\":false}},\"CL\":{\"city\":{\"required\":true},\"postcode\":{\"required\":false,\"hidden\":false},\"state\":{\"label\":\"Region\"}},\"CN\":{\"state\":{\"label\":\"Province\"}},\"CO\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"Department\"}},\"CR\":{\"state\":{\"label\":\"Province\"}},\"CW\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"CZ\":{\"state\":{\"required\":false,\"hidden\":true}},\"DE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"DK\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"DO\":{\"state\":{\"label\":\"Province\"}},\"EC\":{\"state\":{\"label\":\"Province\"}},\"EE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"ET\":{\"state\":{\"required\":false,\"hidden\":true}},\"FI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"FR\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"GG\":{\"state\":{\"required\":false,\"label\":\"Parish\"}},\"GH\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"Region\"}},\"GP\":{\"state\":{\"required\":false,\"hidden\":true}},\"GF\":{\"state\":{\"required\":false,\"hidden\":true}},\"GR\":{\"state\":{\"required\":false}},\"GT\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"Department\"}},\"HK\":{\"postcode\":{\"required\":false},\"city\":{\"label\":\"Town \\\/ District\"},\"state\":{\"label\":\"Region\"}},\"HN\":{\"state\":{\"label\":\"Department\"}},\"HU\":{\"last_name\":{\"class\":[\"form-row-first\"],\"priority\":10},\"first_name\":{\"class\":[\"form-row-last\"],\"priority\":20},\"postcode\":{\"class\":[\"form-row-first\",\"address-field\"],\"priority\":65},\"city\":{\"class\":[\"form-row-last\",\"address-field\"]},\"address_1\":{\"priority\":71},\"address_2\":{\"priority\":72},\"state\":{\"label\":\"County\",\"required\":false}},\"ID\":{\"state\":{\"label\":\"Province\"}},\"IE\":{\"postcode\":{\"required\":false,\"label\":\"Eircode\"},\"state\":{\"label\":\"County\"}},\"IS\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"IL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"IM\":{\"state\":{\"required\":false,\"hidden\":true}},\"IN\":{\"postcode\":{\"label\":\"PIN Code\"},\"state\":{\"label\":\"State\"}},\"IR\":{\"state\":{\"priority\":50},\"city\":{\"priority\":60},\"address_1\":{\"priority\":70},\"address_2\":{\"priority\":80}},\"IT\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":true,\"label\":\"Province\"}},\"JM\":{\"city\":{\"label\":\"Town \\\/ City \\\/ Post Office\"},\"postcode\":{\"required\":false,\"label\":\"Postal Code\"},\"state\":{\"required\":true,\"label\":\"Parish\"}},\"JP\":{\"last_name\":{\"class\":[\"form-row-first\"],\"priority\":10},\"first_name\":{\"class\":[\"form-row-last\"],\"priority\":20},\"postcode\":{\"class\":[\"form-row-first\",\"address-field\"],\"priority\":65},\"state\":{\"label\":\"Prefecture\",\"class\":[\"form-row-last\",\"address-field\"],\"priority\":66},\"city\":{\"priority\":67},\"address_1\":{\"priority\":68},\"address_2\":{\"priority\":69}},\"KN\":{\"postcode\":{\"required\":false,\"label\":\"Postal code\"},\"state\":{\"required\":true,\"label\":\"Parish\"}},\"KR\":{\"state\":{\"required\":false,\"hidden\":true}},\"KW\":{\"state\":{\"required\":false,\"hidden\":true}},\"LV\":{\"state\":{\"label\":\"Municipality\",\"required\":false}},\"LB\":{\"state\":{\"required\":false,\"hidden\":true}},\"MF\":{\"state\":{\"required\":false,\"hidden\":true}},\"MQ\":{\"state\":{\"required\":false,\"hidden\":true}},\"MT\":{\"state\":{\"required\":false,\"hidden\":true}},\"MZ\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Province\"}},\"NI\":{\"state\":{\"label\":\"Department\"}},\"NL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"NG\":{\"postcode\":{\"label\":\"Postcode\",\"required\":false,\"hidden\":true},\"state\":{\"label\":\"State\"}},\"NZ\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"required\":false,\"label\":\"Region\"}},\"NO\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"NP\":{\"state\":{\"label\":\"State \\\/ Zone\"},\"postcode\":{\"required\":false}},\"PA\":{\"state\":{\"label\":\"Province\"}},\"PL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"PR\":{\"city\":{\"label\":\"Municipality\"},\"state\":{\"required\":false,\"hidden\":true}},\"PT\":{\"state\":{\"required\":false,\"hidden\":true}},\"PY\":{\"state\":{\"label\":\"Department\"}},\"RE\":{\"state\":{\"required\":false,\"hidden\":true}},\"RO\":{\"state\":{\"label\":\"County\",\"required\":true}},\"RS\":{\"city\":{\"required\":true},\"postcode\":{\"required\":true},\"state\":{\"label\":\"District\",\"required\":false}},\"RW\":{\"state\":{\"required\":false,\"hidden\":true}},\"SG\":{\"state\":{\"required\":false,\"hidden\":true},\"city\":{\"required\":false}},\"SK\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"SI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"SR\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"SV\":{\"state\":{\"label\":\"Department\"}},\"ES\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Province\"}},\"LI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"LK\":{\"state\":{\"required\":false,\"hidden\":true}},\"LU\":{\"state\":{\"required\":false,\"hidden\":true}},\"MD\":{\"state\":{\"label\":\"Municipality \\\/ District\"}},\"SE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"hidden\":true}},\"TR\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Province\"}},\"UG\":{\"postcode\":{\"required\":false,\"hidden\":true},\"city\":{\"label\":\"Town \\\/ Village\",\"required\":true},\"state\":{\"label\":\"District\",\"required\":true}},\"US\":{\"postcode\":{\"label\":\"ZIP Code\"},\"state\":{\"label\":\"State\"}},\"UY\":{\"state\":{\"label\":\"Department\"}},\"GB\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"County\",\"required\":false}},\"ST\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"District\"}},\"VN\":{\"state\":{\"required\":false,\"hidden\":true},\"postcode\":{\"priority\":65,\"required\":false,\"hidden\":false},\"address_2\":{\"required\":false,\"hidden\":false}},\"WS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"YT\":{\"state\":{\"required\":false,\"hidden\":true}},\"ZA\":{\"state\":{\"label\":\"Province\"}},\"ZW\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"default\":{\"first_name\":{\"label\":\"First name\",\"required\":true,\"class\":[\"form-row-first\"],\"autocomplete\":\"given-name\",\"priority\":10},\"last_name\":{\"label\":\"Last name\",\"required\":true,\"class\":[\"form-row-last\"],\"autocomplete\":\"family-name\",\"priority\":20},\"company\":{\"label\":\"Company name\",\"class\":[\"form-row-wide\"],\"autocomplete\":\"organization\",\"priority\":30,\"required\":false},\"country\":{\"type\":\"country\",\"label\":\"Country \\\/ Region\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\",\"update_totals_on_change\"],\"autocomplete\":\"country\",\"priority\":40},\"address_1\":{\"label\":\"Street address\",\"placeholder\":\"House number and street name\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line1\",\"priority\":50},\"address_2\":{\"label\":\"Apartment, suite, unit, etc.\",\"label_class\":[\"screen-reader-text\"],\"placeholder\":\"Apartment, suite, unit, etc. (optional)\",\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line2\",\"priority\":60,\"required\":false},\"city\":{\"label\":\"Town \\\/ City\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-level2\",\"priority\":70},\"state\":{\"type\":\"state\",\"label\":\"State \\\/ County\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"state\"],\"autocomplete\":\"address-level1\",\"priority\":80},\"postcode\":{\"label\":\"Postcode \\\/ ZIP\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"postcode\"],\"autocomplete\":\"postal-code\",\"priority\":90}}}", "locale_fields": "{\"address_1\":\"#billing_address_1_field, #shipping_address_1_field\",\"address_2\":\"#billing_address_2_field, #shipping_address_2_field\",\"state\":\"#billing_state_field, #shipping_state_field, #calc_shipping_state_field\",\"postcode\":\"#billing_postcode_field, #shipping_postcode_field, #calc_shipping_postcode_field\",\"city\":\"#billing_city_field, #shipping_city_field, #calc_shipping_city_field\"}", "i18n_required_text": "required", "i18n_optional_text": "optional" };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/address-i18n.min.js?ver=9.3.3"
        id="wc-address-i18n-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-cart-js-extra"> /* <![CDATA[ */
        var wc_cart_params = { "ajax_url": "\/organio\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%", "update_shipping_method_nonce": "aba2513289", "apply_coupon_nonce": "954b511a5b", "remove_coupon_nonce": "dae6ee3475" };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/cart.min.js?ver=9.3.3"
        id="wc-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.9-wc.9.3.3"
        id="selectWoo-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="wp-includes/js/underscore.min.js?ver=1.13.7" id="underscore-js"></script>
    <script type="text/javascript" id="wp-util-js-extra"> /* <![CDATA[ */
        var _wpUtilSettings = { "ajax": { "url": "\/organio\/wp-admin\/admin-ajax.php" } };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-includes/js/wp-util.min.js?ver=6.7.1" id="wp-util-js"></script>
    <script type="text/javascript"
        src="wp-content/uploads/siteground-optimizer-assets/ct-inline-css-js.min.js?ver=1.5.7"
        id="ct-inline-css-js-js"></script>
    <link rel="https://api.w.org/" href="wp-json/index.htm">
    <link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/8">
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://demo.casethemes.net/organio/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.7.1">
    <meta name="generator" content="WooCommerce 9.3.3">
    <link rel="canonical" href="index.htm">
    <link rel='shortlink' href='index.htm?p=8'>
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="wp-json/oembed/1.0/embed-58?url=https%3A%2F%2Fdemo.casethemes.net%2Forganio%2Fcart%2F">
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed-59?url=https%3A%2F%2Fdemo.casethemes.net%2Forganio%2Fcart%2F&#038;format=xml">
    <meta name="generator" content="Redux 4.5.0">
    <link rel="icon" type="image/png" href="wp-content/uploads/2021/03/favicon.png"> <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.25.4; features: additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <meta name="generator"
        content="Powered by Slider Revolution 6.7.20 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
    <style class='wp-fonts-local' type='text/css'>
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>
    <script>function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };</script>
    <style id="ct_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">
        body #pagetitle {
            background-image: url('wp-content/uploads/2021/03/bg-page-title.jpg');
        }

        a {
            color: #76a713;
        }

        a:hover {
            color: #ff7800;
        }

        a:active {
            color: #ff7800;
        }
    </style>
</head>

<body
    class="page-template-default page page-id-8 theme-orgio woocommerce-cart woocommerce-page woocommerce-no-js woo-variation-swatches wvs-behavior-blur wvs-theme-orgio wvs-show-label wvs-tooltip redux-page  site-h2 body-default-font heading-default-font header-sticky  site-404-default elementor-default elementor-kit-12">
    <div id="page" class="site">
        <div id="ct-loadding" class="ct-loader style5">
            <div class="ct-spinner5">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <?php include 'header.php' ?>
        <div id="pagetitle" class="page-title bg-image ">
            <div class="container">
                <div class="page-title-inner">
                    <div class="page-title-holder">
                        <h1 class="page-title">My Orders</h1>
                    </div>
                    <ul class="ct-breadcrumb">
                        <li><a class="breadcrumb-entry" href="my-account.php">My Account</a></li>
                        <li><span class="breadcrumb-entry">My Orders</span></li>
                    </ul>
                </div>
            </div>
        </div>



        <div id="content" class="site-content">
            <div class="content-inner">
                <div class="container content-container">
                    <div class="row content-row">
                        <div id="primary" class="content-area content-full-width col-12">
                            <main id="main" class="site-main">
                                <article id="post-8" class="post-8 page type-page status-publish hentry">
                                    <div class="entry-content clearfix">
                                        <div class="woocommerce">
                                            <div class="woocommerce-notices-wrapper"></div>
                                            <form class="woocommerce-cart-form" action="" method="post">
                                                <table
                                                    class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                                    cellspacing="0">
                                                    <thead>
                                                        <tr>

                                                            <th class="product-thumbnail"><span
                                                                    class="screen-reader-text">Thumbnail image</span>
                                                            </th>
                                                            <th class="product-name">Product</th>
                                                            <th class="product-price">Customer</th>
                                                            <th class="product-quantity">Quantity</th>
                                                            <th class="product-quantity">Status</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php


                                                        foreach ($order as $item) {

                                                            $stmt = $pdo->prepare("SELECT * FROM items WHERE id= :item_id");
                                                            $stmt->bindParam(':item_id', $item['item']);
                                                            $stmt->execute();
                                                            $order_element = $stmt->fetch(PDO::FETCH_ASSOC);

                                                            $itemTotal = $order_element['price'] * $item['qty'];

                                                            ?>

                                                            <tr class="woocommerce-cart-form__cart-item cart_item">

                                                                <td class="product-thumbnail"> <a
                                                                        href="product.php?id=<?php echo $order_element['id']; ?>"><img
                                                                            loading="lazy" decoding="async" width="600"
                                                                            height="500" src="Classes"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt=""
                                                                            srcset="Classes/image/<?php echo $order_element['image']; ?>, Classes/image/<?php echo $order_element['image']; ?>, Classes/image/<?php echo $order_element['image']; ?>"
                                                                            sizes="(max-width: 600px) 100vw, 600px"></a>
                                                                </td>
                                                                <td class="product-name" data-title="Product"> <a
                                                                        href="product.php?id=<?php echo $order_element['id']; ?>"><?php echo $order_element['name'] ?></a>
                                                                </td>
                                                                <td class="product-price" data-title="Price"> <span
                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol"></span>
                                                                                
                                                                                
                                                                                <a
                                                                        href="customer_data.php?id=<?php echo $item['cus_id']; ?>"><?php echo $item['cus_id'] ?> Click Here</a>
                                                                                
                                                                                
                                                                            
                                                                            
                                                                            </bdi></span>
                                                                </td>

                                                                <td class="product-price" data-title="Price"> <span
                                                                        class="woocommerce-Price-amount amount"><bdi><?php echo $item['qty'] ?></bdi></span>
                                                                </td>
                                                                <td class="product-subtotal" data-title="Subtotal"> <span
                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol"></span><?php echo $item['status'] . " (" . $item['date'] . ")" ?>
                                                                        </bdi></span>


                                                                </td>

                                                                <td class="actions">
                                                                    <div>
                                                                        <form action="" method="POST">
                                                                            <input type="hidden"
                                                                                value="<?php echo $item['rand_order_id'] ?>"
                                                                                name="update_id">
                                                                            <button type="submit" class="button"
                                                                                name="shipped">Mark As Shipped</button>

                                                                        </form>
                                                                    </div>

                                                                </td>



                                                            </tr>

                                                            <?php

                                                        } ?>







                                                    </tbody>
                                                </table>
                                            </form>


                                        </div>
                                    </div><!-- .entry-content -->
                                </article><!-- #post-8 -->
                            </main><!-- #main -->
                        </div><!-- #primary -->
                    </div>
                </div>
            </div><!-- #content inner -->
        </div><!-- #content -->






        <?php include 'footer.php' ?>


        <a href="#" class="scroll-top"><i class="caseicon-long-arrow-right-three"></i></a>
    </div><!-- #page -->
    <div class="ct-modal ct-modal-search">
        <div class="ct-modal-close"><i class="ct-icon-close"></i></div>
        <div class="ct-modal-overlay"></div>
        <div class="ct-modal-content">
            <form role="search" method="get" class="search-form-popup" action="https://demo.casethemes.net/organio/">
                <div class="searchform-wrap"> <input type="text" placeholder="Enter Keywords..." id="search" name="s"
                        class="search-field"> <button type="submit" class="search-submit"><i
                            class="caseicon-search"></i></button></div>
            </form>
        </div>
    </div>
    <div class="ct-widget-cart-wrap">
        <div class="ct-widget-cart-overlay"></div>
        <div class="ct-widget-cart-sidebar">
            <div class="ct-close"><i class="ct-icon-close"></i></div>
            <div class="widget_shopping_cart">
                <div class="widget_shopping_head">
                    <div class="widget_shopping_title"> Cart</div>
                </div>
                <div class="widget_shopping_cart_content">
                    <ul class="cart_list product_list_widget">
                        <li class="empty"> <i class="caseicon-shopping-cart-alt"></i> <span>Your cart is empty</span> <a
                                class="btn btn-animate" href="shop/index.htm">Browse Shop</a></li>
                    </ul><!-- end product list -->
                </div>
            </div>
        </div>
    </div>

    <div class="ct-cursor ct-js-cursor">
        <div class="ct-cursor-wrapper">
            <div class="ct-cursor--follower ct-js-follower"></div>
            <div class="ct-cursor--label ct-js-label"></div>
            <div class="ct-cursor--icon ct-js-icon"></div>
        </div>
    </div>

    <script>(function () {
            function maybePrefixUrlField() {
                const value = this.value.trim()
                if (value !== '' && value.indexOf('http') !== 0) {
                    this.value = 'http://' + value
                }
            }
            const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
            for (let j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener('blur', maybePrefixUrlField)
            }
        })();</script><!-- Instagram Feed JS -->
    <script
        type="text/javascript"> var sbiajaxurl = "https://demo.casethemes.net/organio/wp-admin/admin-ajax.php"; </script>
    <div class="woosc-popup woosc-search">
        <div class="woosc-popup-inner">
            <div class="woosc-popup-content">
                <div class="woosc-popup-content-inner">
                    <div class="woosc-popup-close"></div>
                    <div class="woosc-search-input"> <label for="woosc_search_input"></label><input type="search"
                            id="woosc_search_input" placeholder="Type any keyword to search..."></div>
                    <div class="woosc-search-result"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="woosc-popup woosc-settings">
        <div class="woosc-popup-inner">
            <div class="woosc-popup-content">
                <div class="woosc-popup-content-inner">
                    <div class="woosc-popup-close"></div>
                    <ul class="woosc-settings-tools">
                        <li> <label><input type="checkbox" class="woosc-settings-tool" value="hide_similarities"
                                    id="woosc_hide_similarities"> Hide similarities </label></li>
                        <li> <label><input type="checkbox" class="woosc-settings-tool" value="highlight_differences"
                                    id="woosc_highlight_differences"> Highlight differences </label></li>
                    </ul> Select the fields to be shown. Others will be hidden. Drag and drop to rearrange the order.<ul
                        class="woosc-settings-fields">
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="ng1x" checked/=""><span class="move">Image</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="9hta" checked/=""><span class="move">SKU</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="zjsw" checked/=""><span class="move">Rating</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="zsh9" checked/=""><span class="move">Price</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="uugr" checked/=""><span class="move">Stock</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="eer8" checked/=""><span class="move">Availability</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="cgsj" checked/=""><span class="move">Add to cart</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="lwmb" checked/=""><span class="move">Description</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="y1o8" checked/=""><span class="move">Weight</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="woosc-popup woosc-share">
        <div class="woosc-popup-inner">
            <div class="woosc-popup-content">
                <div class="woosc-popup-content-inner">
                    <div class="woosc-popup-close"></div>
                    <div class="woosc-share-content"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="woosc-area"
        class="woosc-area woosc-bar-bottom woosc-bar-right woosc-bar-click-outside-yes woosc-hide-checkout"
        data-bg-color="#292a30" data-btn-color="#76a713">
        <div class="woosc-inner">
            <div class="woosc-table">
                <div class="woosc-table-inner"> <a href="#close" id="woosc-table-close"
                        class="woosc-table-close hint--left" aria-label="Close"><span
                            class="woosc-table-close-icon"></span></a>
                    <div class="woosc-table-items"></div>
                </div>
            </div>
            <div class="woosc-bar">
                <div class="woosc-bar-notice"> Click outside to hide the comparison bar</div> <a href="#print"
                    class="woosc-bar-print hint--top" aria-label="Print"></a> <a href="#share"
                    class="woosc-bar-share hint--top" aria-label="Share"></a> <a href="#search"
                    class="woosc-bar-search hint--top" aria-label="Add product"></a>
                <div class="woosc-bar-items"></div>
                <div class="woosc-bar-btn woosc-bar-btn-text">
                    <div class="woosc-bar-btn-icon-wrapper">
                        <div class="woosc-bar-btn-icon-inner"><span></span><span></span><span></span></div>
                    </div> Compare
                </div>
            </div>
        </div>
    </div>
    <div id="woosw_wishlist" class="woosw-popup woosw-popup-center"></div>
    <script type="text/javascript"> jQuery(function ($) {
            if (typeof wc_add_to_cart_params === 'undefined')
                return false;
            $(document.body).on('added_to_cart', function (event, fragments, cart_hash, $button) {
                var $pid = $button.data('product_id');
                $.ajax({
                    type: 'POST',
                    url: wc_add_to_cart_params.ajax_url,
                    data: {
                        'action': 'item_added',
                        'id': $pid
                    },
                    success: function (response) {
                        $('.ct-widget-cart-wrap').addClass('open');
                    }
                });
            });
        }); </script>
    <script type='text/javascript'> const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, { rootMargin: '200px 0px 200px 0px' });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        }); </script>
    <script type='text/javascript'> (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })(); </script>
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=wc-9.3.3' type='text/css'
        media='all'>
    <link rel='stylesheet' id='wpml-style-css' href='wp-content/themes/orgio/assets/css/style-lang.css?ver=1.0.0'
        type='text/css' media='all'>
    <link rel='stylesheet' id='elementor-post-2655-css'
        href='wp-content/uploads/elementor/css/post-2655.css?ver=1731037036' type='text/css' media='all'>
    <link rel='stylesheet' id='elementor-post-5090-css'
        href='wp-content/uploads/elementor/css/post-5090.css?ver=1731037036' type='text/css' media='all'>
    <link rel='stylesheet' id='elementor-post-4527-css'
        href='wp-content/uploads/elementor/css/post-4527.css?ver=1731037036' type='text/css' media='all'>
    <link rel='stylesheet' id='widget-divider-css'
        href='wp-content/plugins/elementor/assets/css/widget-divider.min.css?ver=3.25.4' type='text/css' media='all'>
    <link rel='stylesheet' id='google-fonts-2-css'
        href='css-3?family=Fira+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.7.1'
        type='text/css' media='all'>
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3' type='text/css'
        media='all'>
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='wp-content/plugins/revslider/sr6/assets/css/rs6.css?ver=6.7.20' type='text/css' media='all'>
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/ct-core-main.min.js?ver=1.0.0"
        id="ct-core-main-js"></script>
    <script type="text/javascript" src="wp-content/plugins/case-theme-user/acess/js/notify.min.js?ver=1.0.0"
        id="notify-js"></script>
    <script type="text/javascript" src="wp-content/plugins/case-theme-user/acess/js/remodal.min.js?ver=1.0.0"
        id="remodal-js"></script>
    <script type="text/javascript" id="ct-user-form-js-extra"> /* <![CDATA[ */
        var userpress = { "ajax": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php", "nonce": "cd3b3a353b" };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/ct-user-form.min.js?ver=1.0.0"
        id="ct-user-form-js"></script>
    <script type="text/javascript" src="wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6"
        id="wp-hooks-js"></script>
    <script type="text/javascript" src="wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6"
        id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after"> /* <![CDATA[ */
        wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
        /* ]]> */</script>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/swv.min.js?ver=6.0"
        id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-before"> /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/demo.casethemes.net\/organio\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/contact-form-7.min.js?ver=6.0"
        id="contact-form-7-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/sr6/assets/js/rbtools.min.js?ver=6.7.20" defer=""
        async="" id="tp-tools-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/sr6/assets/js/rs6.min.js?ver=6.7.20" defer=""
        async="" id="revmin-js"></script>
    <script type="text/javascript" id="wp-api-request-js-extra"> /* <![CDATA[ */
        var wpApiSettings = { "root": "https:\/\/demo.casethemes.net\/organio\/wp-json\/", "nonce": "7a7befeb17", "versionString": "wp\/v2\/" };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-includes/js/api-request.min.js?ver=6.7.1" id="wp-api-request-js"></script>
    <script type="text/javascript" src="wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0"
        id="wp-polyfill-js"></script>
    <script type="text/javascript" src="wp-includes/js/dist/url.min.js?ver=e87eb76272a3a08402d2"
        id="wp-url-js"></script>
    <script type="text/javascript" src="wp-includes/js/dist/api-fetch.min.js?ver=d387b816bc1ed2042e28"
        id="wp-api-fetch-js"></script>
    <script type="text/javascript" id="wp-api-fetch-js-after"> /* <![CDATA[ */
        wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("https://demo.casethemes.net/organio/wp-json/"));
        wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("7a7befeb17");
        wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
        wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
        wp.apiFetch.nonceEndpoint = "https://demo.casethemes.net/organio/wp-admin/admin-ajax.php?action=rest-nonce";
        /* ]]> */</script>
    <script type="text/javascript" id="woo-variation-swatches-js-extra"> /* <![CDATA[ */
        var woo_variation_swatches_options = { "show_variation_label": "1", "clear_on_reselect": "", "variation_label_separator": ":", "is_mobile": "", "show_variation_stock": "", "stock_label_threshold": "5", "cart_redirect_after_add": "no", "enable_ajax_add_to_cart": "yes", "cart_url": "https:\/\/demo.casethemes.net\/organio\/cart\/", "is_cart": "1" };
        /* ]]> */</script>
    <script type="text/javascript"
        src="wp-content/plugins/woo-variation-swatches/assets/js/frontend.min.js?ver=1729744251"
        id="woo-variation-swatches-js"></script>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/print.min.js?ver=6.3.0"
        id="print-js"></script>
    <script type="text/javascript"
        src="wp-content/uploads/siteground-optimizer-assets/table-head-fixer.min.js?ver=6.3.0"
        id="table-head-fixer-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woo-smart-compare/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js?ver=6.3.0"
        id="perfect-scrollbar-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/ui/core.min.js?ver=1.13.3"
        id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.3"
        id="jquery-ui-mouse-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/ui/sortable.min.js?ver=1.13.3"
        id="jquery-ui-sortable-js"></script>
    <script type="text/javascript" id="woosc-frontend-js-extra"> /* <![CDATA[ */
        var woosc_vars = { "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%", "nonce": "c5cdb0e59d", "hash": "6", "user_id": "0cdb64fab32a05bd393b20c8c351de9f", "page_url": "#", "open_button": "", "hide_empty_row": "yes", "reload_count": "no", "variations": "yes", "open_button_action": "open_popup", "menu_action": "open_popup", "button_action": "show_table", "sidebar_position": "right", "message_position": "right-top", "message_added": "{name} has been added to Compare list.", "message_removed": "{name} has been removed from the Compare list.", "message_exists": "{name} is already in the Compare list.", "open_bar": "no", "bar_bubble": "no", "adding": "prepend", "click_again": "no", "hide_empty": "no", "click_outside": "yes", "freeze_column": "yes", "freeze_row": "yes", "scrollbar": "yes", "limit": "100", "remove_all": "Do you want to remove all products from the compare?", "limit_notice": "You can add a maximum of {limit} products to the comparison table.", "copied_text": "Share link %s was copied to clipboard!", "button_text": "Compare", "button_text_added": "Compare", "button_normal_icon": "woosc-icon-1", "button_added_icon": "woosc-icon-74" };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/woosc-frontend.min.js?ver=6.3.0"
        id="woosc-frontend-js"></script>
    <script type="text/javascript" id="wc-add-to-cart-variation-js-extra"> /* <![CDATA[ */
        var wc_add_to_cart_variation_params = { "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%", "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.", "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.", "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination." };
        /* ]]> */</script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=9.3.3"
        id="wc-add-to-cart-variation-js" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.min.js?ver=4.1.3" id="slick-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.min.js?ver=4.1.3"
        id="magnific-popup-js"></script>
    <script type="text/javascript" id="woosq-frontend-js-extra"> /* <![CDATA[ */
        var woosq_vars = { "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%", "nonce": "88339caaac", "view": "popup", "effect": "mfp-3d-unfold", "scrollbar": "yes", "auto_close": "yes", "hashchange": "no", "cart_redirect": "no", "cart_url": "https:\/\/demo.casethemes.net\/organio\/cart\/", "close": "Close (Esc)", "next_prev": "yes", "next": "Next (Right arrow key)", "prev": "Previous (Left arrow key)", "thumbnails_effect": "no", "related_slick_params": "{\"slidesToShow\":2,\"slidesToScroll\":2,\"dots\":true,\"arrows\":false,\"adaptiveHeight\":true,\"rtl\":false}", "thumbnails_slick_params": "{\"slidesToShow\":1,\"slidesToScroll\":1,\"dots\":true,\"arrows\":true,\"adaptiveHeight\":false,\"rtl\":false}", "thumbnails_zoom_params": "{\"duration\":120,\"magnify\":1}", "quick_view": "0" };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/woosq-frontend.min.js?ver=4.1.3"
        id="woosq-frontend-js"></script>
    <script type="text/javascript" id="woosw-frontend-js-extra"> /* <![CDATA[ */
        var woosw_vars = { "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%", "nonce": "e18dae9370", "page_myaccount": "yes", "menu_action": "open_popup", "reload_count": "no", "perfect_scrollbar": "yes", "wishlist_url": "https:\/\/demo.casethemes.net\/organio\/wishlist\/", "button_action": "list", "message_position": "right-top", "button_action_added": "popup", "empty_confirm": "This action cannot be undone. Are you sure?", "delete_confirm": "This action cannot be undone. Are you sure?", "copied_text": "Copied the wishlist link:", "menu_text": "Wishlist", "button_text": "Add to wishlist", "button_text_added": "Browse wishlist", "button_normal_icon": "woosw-icon-5", "button_added_icon": "woosw-icon-8", "button_loading_icon": "woosw-icon-4" };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/woosw-frontend.min.js?ver=4.9.4"
        id="woosw-frontend-js"></script>
    <script type="text/javascript" src="wp-content/themes/orgio/assets/js/bootstrap.min.js?ver=4.0.0"
        id="bootstrap-js"></script>
    <script type="text/javascript" src="wp-content/themes/orgio/assets/js/nice-select.min.js?ver=all"
        id="nice-select-js"></script>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/match-height.min.js?ver=1.0.0"
        id="match-height-js"></script>
    <script type="text/javascript" src="wp-content/themes/orgio/assets/js/progressbar.min.js?ver=1.0.0"
        id="progressbar-js"></script>
    <script type="text/javascript" src="wp-content/themes/orgio/assets/js/wow.min.js?ver=1.0.0" id="wow-js"></script>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/organio-main.min.js?ver=1.5.7"
        id="organio-main-js"></script>
    <script type="text/javascript"
        src="wp-content/uploads/siteground-optimizer-assets/organio-woocommerce.min.js?ver=1.5.7"
        id="organio-woocommerce-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=9.3.3"
        id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra"> /* <![CDATA[ */
        var wc_order_attribution = { "params": { "lifetime": 1.0000000000000000818030539140313095458623138256371021270751953125e-5, "session": 30, "base64": false, "ajaxurl": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php", "prefix": "wc_order_attribution_", "allowTracking": true }, "fields": { "source_type": "current.typ", "referrer": "current_add.rf", "utm_campaign": "current.cmp", "utm_source": "current.src", "utm_medium": "current.mdm", "utm_content": "current.cnt", "utm_id": "current.id", "utm_term": "current.trm", "utm_source_platform": "current.plt", "utm_creative_format": "current.fmt", "utm_marketing_tactic": "current.tct", "session_entry": "current_add.ep", "session_start_time": "current_add.fd", "session_pages": "session.pgs", "session_count": "udata.vst", "user_agent": "udata.uag" } };
        /* ]]> */</script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.3.3"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript" id="sbi_scripts-js-extra"> /* <![CDATA[ */
        var sb_instagram_js_options = { "font_method": "svg", "resized_url": "https:\/\/demo.casethemes.net\/organio\/wp-content\/uploads\/sb-instagram-feed-images\/", "placeholder": "https:\/\/demo.casethemes.net\/organio\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png", "ajax_url": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php" };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-content/plugins/instagram-feed/js/sbi-scripts.min.js?ver=6.6.0"
        id="sbi_scripts-js"></script>
    <script type="text/javascript" src="wp-content/themes/orgio/assets/js/cursor.js?ver=1.0.0"
        id="organio-cursor-js"></script>
    <script type="text/javascript" defer="" src="wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.9.18"
        id="mc4wp-forms-api-js"></script>
    <script type="text/javascript" src="wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.25.4"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.25.4"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before"> /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": {
                "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } },
                "hasCustomBreakpoints": false
            }, "version": "3.25.4", "is_static": false, "experimentalFeatures": { "additional_custom_breakpoints": true, "e_swiper_latest": true, "e_nested_atomic_repeaters": true, "e_onboarding": true, "e_css_smooth_scroll": true, "home_screen": true, "landing-pages": true, "nested-elements": true, "editor_v2": true, "link-in-bio": true, "floating-buttons": true }, "urls": { "assets": "https:\/\/demo.casethemes.net\/organio\/wp-content\/plugins\/elementor\/assets\/", "ajaxurl": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php", "uploadUrl": "https:\/\/demo.casethemes.net\/organio\/wp-content\/uploads" }, "nonces": { "floatingButtonsClickTracking": "90a1169fa1" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 30, "title": "Cart%20%E2%80%93%20Organio", "excerpt": "", "featuredImage": false }
        };
        /* ]]> */</script>
    <script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.25.4"
        id="elementor-frontend-js"></script>
</body>

</html>