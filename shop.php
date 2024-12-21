<?php 
include 'Classes/DB_RUN.php';
// $email = filter_var(sanitizeInput($_POST['email']), FILTER_SANITIZE_EMAIL);
// $password = sanitizeInput($_POST['psw']);

try {

    if (isset($_POST['search_btn'])) {

        $searchTerm = "%".$_POST['seach_input']."%";

        $stmt = $pdo->prepare("SELECT * FROM items WHERE name LIKE :name");
        $stmt->bindParam(':name', $searchTerm);
        $stmt->execute();
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $stmt = $pdo->prepare("SELECT * FROM items WHERE name LIKE :name ORDER BY qty DESC LIMIT 3");
        $stmt->bindParam(':name', $searchTerm);
        $stmt->execute();
        $items_most_available = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    

    }
    else if (isset($_GET['cat'])) {

        $searchTerm = $_GET['cat'];

        $stmt = $pdo->prepare("SELECT * FROM items WHERE cat= :cat");
        $stmt->bindParam(':cat', $searchTerm);
        $stmt->execute();
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $stmt = $pdo->prepare("SELECT * FROM items WHERE cat= :cat ORDER BY qty DESC LIMIT 3");
        $stmt->bindParam(':cat', $searchTerm);
        $stmt->execute();
        $items_most_available = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    }

    else if (isset($_GET['orderby'])) {

        $searchCondition = $_GET['orderby'];

        if ($searchCondition=="price-desc")
        {
            $stmt = $pdo->prepare("SELECT * FROM items ORDER BY price DESC");
        }
        else if($searchCondition=="price")
        {
            $stmt = $pdo->prepare("SELECT * FROM items ORDER BY price ASC");
        }
        else if($searchCondition=="popularity")
        {
            $stmt = $pdo->prepare("SELECT * FROM items ORDER BY qty DESC");
        }
        else
        {
            $stmt = $pdo->prepare("SELECT * FROM items");
        }


        $stmt->execute();
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $stmt = $pdo->prepare("SELECT * FROM items WHERE cat= :cat ORDER BY qty DESC LIMIT 3");
        $stmt->bindParam(':cat', $searchTerm);
        $stmt->execute();
        $items_most_available = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    }

    else {

        $stmt = $pdo->prepare("SELECT * FROM items");
        $stmt->execute();
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $stmt = $pdo->prepare("SELECT * FROM items ORDER BY qty DESC LIMIT 3");
        $stmt->execute();
        $items_most_available = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }






} catch (PDOException $e) {
    error_log("Query error: " . $e->getMessage());
    die("An error occurred. Please try again.");
}

?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <title>Shop &#8211; Organio</title>
    <meta name='robots' content='max-image-preview:large'>
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel='dns-prefetch' href='//fonts.googleapis.com'>
    <link rel="alternate" type="application/rss+xml" title="Organio &raquo; Feed" href="feed/index.htm">
    <link rel="alternate" type="application/rss+xml" title="Organio &raquo; Comments Feed"
        href="comments/feed/index.htm">
    <link rel="alternate" type="application/rss+xml" title="Organio &raquo; Products Feed" href="feed/index.htm">
    <script type="text/javascript"> /* <![CDATA[ */
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/demo.casethemes.net\/organio\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.1" } };
        /*! This file is auto-generated */
        !function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }), a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" }); return void (a.onmessage = function (e) { c(n = e.data), a.terminate(), t(n) }) } catch (e) { } c(n = f(s, u, p)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
        /* ]]> */ </script>
    <link rel='stylesheet' id='sbi_styles-css'
        href='wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=6.6.0' type='text/css' media='all'>
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
    <link rel='stylesheet' id='wp-block-library-css'
        href='wp-includes/css/dist/block-library/style.min.css?ver=6.7.1' type='text/css' media='all'>
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
        href='wp-content/plugins/case-theme-core/assets/css/ct-main-css.min.css?ver=1.0.0' type='text/css'
        media='all'>
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
        href='wp-content/plugins/woo-smart-compare/assets/libs/hint/hint.min.css?ver=6.7.1' type='text/css'
        media='all'>
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
    <link rel='stylesheet' id='elementor-post-12-css'
        href='wp-content/uploads/elementor/css/post-12.css?ver=1731036539' type='text/css' media='all'>
    <link rel='stylesheet' id='sbistyles-css'
        href='wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=6.6.0' type='text/css' media='all'>
    <link rel='stylesheet' id='elementor-post-30-css'
        href='wp-content/uploads/elementor/css/post-30.css?ver=1731037321' type='text/css' media='all'>
    <link rel='stylesheet' id='google-fonts-1-css'
        href='css-1?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.7.1'
        type='text/css' media='all'>
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3'
        type='text/css' media='all'>
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
        var wc_add_to_cart_params = { "ajax_url": "\/organio\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/demo.casethemes.net\/organio\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
        /* ]]> */ </script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.3.3" id="wc-add-to-cart-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.3.3"
        id="js-cookie-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra"> /* <![CDATA[ */
        var woocommerce_params = { "ajax_url": "\/organio\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%" };
        /* ]]> */ </script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.3.3" id="woocommerce-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="wp-includes/js/underscore.min.js?ver=1.13.7" id="underscore-js"></script>
    <script type="text/javascript" id="wp-util-js-extra"> /* <![CDATA[ */
        var _wpUtilSettings = { "ajax": { "url": "\/organio\/wp-admin\/admin-ajax.php" } };
        /* ]]> */ </script>
    <script type="text/javascript" src="wp-includes/js/wp-util.min.js?ver=6.7.1" id="wp-util-js"></script>
    <script type="text/javascript"
        src="wp-content/uploads/siteground-optimizer-assets/ct-inline-css-js.min.js?ver=1.5.7"
        id="ct-inline-css-js-js"></script>
    <link rel="https://api.w.org/" href="wp-json/index.htm">
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://demo.casethemes.net/organio/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.7.1">
    <meta name="generator" content="WooCommerce 9.3.3">
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
    class="archive post-type-archive post-type-archive-product theme-orgio woocommerce-shop woocommerce woocommerce-page woocommerce-no-js woo-variation-swatches wvs-behavior-blur wvs-theme-orgio wvs-show-label wvs-tooltip hfeed redux-page  site-h2 body-default-font heading-default-font header-sticky  site-404-default elementor-default elementor-kit-12">
    <div id="page" class="site">
        <div id="ct-loadding" class="ct-loader style5">
            <div class="ct-spinner5">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
<?php include 'header.php'?>
        <div id="pagetitle" class="page-title bg-image ">
            <div class="container">
                <div class="page-title-inner">
                    <div class="page-title-holder">
                        <h1 class="page-title">Shop</h1>
                    </div>
                    <ul class="ct-breadcrumb">
                        <li><a class="breadcrumb-entry" href="index.htm">Home</a></li>
                        <li><span class="breadcrumb-entry">Products</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="content" class="site-content">
            <div class="content-inner">
                <div class="container content-container">
                    <div class="row content-row">
                        <div id="primary"
                            class="content-area content-has-sidebar float-right col-xl-9 col-lg-9 col-md-12 col-sm-12">
                            <main id="main" class="site-main" role="main">
                                <div class="woocommerce-topbar">
                                    <div class="woocommerce-result-count">
                                        <p class="woocommerce-result-count"> Showing <?php echo count($items)?> results</p>
                                    </div>
                                    <div class="woocommerce-archive-layout"> <span
                                            class="archive-layout layout-grid active"></span> <span
                                            class="archive-layout layout-list"></span></div>
                                    <div class="woocommerce-topbar-ordering">
                                        <form class="woocommerce-ordering" method="get"> <select name="orderby"
                                                class="orderby" aria-label="Shop order">
                                                <option value="popularity">Sort by Most Availability</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                            </form>
                                    </div>
                                </div>
                                <div class="woocommerce-notices-wrapper"></div>
                                <ul class="products columns-4">

                                <?php

if (count($items) > 0) {

    
    foreach ($items as $item) 
    
    {?>

                                    <li
                                        class="product type-product post-998 status-publish last instock product_cat-bread-bakery product_tag-coffee product_tag-fish product_tag-grape has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                        <a href="product.php?id=<?php echo$item['id'] ?>"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                        <div class="woocommerce-product-inner style-1"
                                            style="border-color: rgba(167,73,48,0.32)">
                                            <div class="woocommerce-product-header"> <a
                                                    class="woocommerce-product-details"
                                                    href="product.php?id=<?php echo$item['id'] ?>"> <img loading="lazy"
                                                        width="600" height="500"
                                                        src="Classes/image/<?php echo$item['image'];?>"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                        alt="" decoding="async"
                                                        srcset="Classes/image/<?php echo$item['image'];?>, Classes/image/<?php echo$item['image'];?>, Classes/image/<?php echo$item['image'];?>, Classes/image/<?php echo$item['image'];?>"
                                                        sizes="(max-width: 600px) 100vw, 600px"> </a>                                            
                                            </div>
                                            <div class="woocommerce-product-content">
                                                <h4 class="woocommerce-product--title"> <a
                                                        href="product.php?id=<?php echo$item['id'] ?>"><?php echo  $item['name']; ?></a></h4> <span
                                                    class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">&#36;</span><?php echo number_format((float)$item['price'], 2, '.', ''); ?></bdi></span></span>

                                            </div>
                                        </div> 
                                    </li>

<?php }}?>
                                </ul>

                            </main><!-- #main -->
                        </div><!-- #primary -->
                        <aside id="secondary"
                            class="sidebar-fixed widget-area widget-has-sidebar sidebar-fixed col-xl-3 col-lg-3 col-md-12 col-sm-12">
                            <div class="sidebar-sticky">
                                <section id="woocommerce_product_search-2"
                                    class="widget woocommerce widget_product_search">
                                    <div class="widget-content">
                                        <form role="search" method="post" class="woocommerce-product-search"
                                            action=""> <label
                                                class="screen-reader-text"
                                                for="woocommerce-product-search-field-0">Search for:</label> <input
                                                type="search" name="seach_input" id="woocommerce-product-search-field-0"
                                                class="search-field" placeholder="Search products&hellip;" value=""
                                                name="s"> <button type="submit" name="search_btn" value="Search" class="">Search</button>
                                            <input type="hidden" name="post_type" value="product"></form>
                                    </div>
                                </section>
                                <section id="woocommerce_product_categories-2"
                                    class="widget woocommerce widget_product_categories">
                                    <div class="widget-content">
                                        <h2 class="widget-title"><span>Categories</span></h2>
                                        <ul class="product-categories">
                                            <li class="cat-item cat-item-69"><a
                                                    href="shop.php?cat=chicken">Chicken
                                                    </a></li>
                                                    <li class="cat-item cat-item-69"><a href="shop.php?cat=beef">Beef</a></li>
                                                    <li class="cat-item cat-item-69"><a href="shop.php?cat=eggs">Eggs</a></li>
                                                    <li class="cat-item cat-item-69"><a href="shop.php?cat=milk">Milk</a></li>
                                                    <li class="cat-item cat-item-69"><a href="shop.php?cat=cheese">Cheese</a></li>
                                                    <li class="cat-item cat-item-69"><a href="shop.php?cat=butter">Butter</a></li>
                                                    <li class="cat-item cat-item-69"><a href="shop.php?cat=yorgurt">Yorgurt</a></li>
                                                    <li class="cat-item cat-item-69"><a href="shop.php?cat=vegitable">Vegitable</a></li>
                                                    <li class="cat-item cat-item-69"><a href="shop.php?cat=fruits">Fruits</a></li>
                                        </ul>
                                    </div>
                                </section>

                                <section id="woocommerce_products-2" class="widget woocommerce widget_products">
                                    <div class="widget-content">
                                        <h2 class="widget-title"><span>Most Availability</span></h2>
                                        <ul class="product_list_widget">

                                        <?php

if (count($items_most_available) > 0) {

    
    foreach ($items_most_available as $item) 
    
    {?>
                                            <li>
                                                <div class="wg-product-inner">
                                                    <div class="wg-product-image"> <a
                                                            href="product.php?id=<?php echo$item['id'] ?>"> <img
                                                                loading="lazy" width="300" height="300"
                                                                src="Classes/image/<?php echo$item['image'];?>"
                                                                class="attachment-300x300 size-300x300" alt=""
                                                                decoding="async"
                                                                srcset="Classes/image/<?php echo$item['image'];?>, Classes/image/<?php echo$item['image'];?>, Classes/image/<?php echo$item['image'];?>, Classes/image/<?php echo$item['image'];?>"
                                                                sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                                    <div class="wg-product-holder">
                                                        <h3 class="product-title"> <a
                                                                href="product.php?id=<?php echo$item['id'] ?>"><?php echo $item['name']; ?></a></h3>

                                                        <span class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span><?php echo number_format((float)$item['price'], 2, '.', ''); ?></bdi></span>
                                                    </div>
                                                </div>
                                            </li>

                                            <?php }}?>


                                        </ul>
                                    </div>
                                </section>

                            </div>
                        </aside>
                    </div>
                </div>
            </div><!-- #content inner -->
        </div><!-- #content -->
        <?php include 'footer.php'?>
        
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
                                class="btn btn-animate" href="index.htm">Browse Shop</a></li>
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
        /* ]]> */ </script>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/ct-user-form.min.js?ver=1.0.0"
        id="ct-user-form-js"></script>
    <script type="text/javascript" src="wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6"
        id="wp-hooks-js"></script>
    <script type="text/javascript" src="wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6"
        id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after"> /* <![CDATA[ */
        wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
        /* ]]> */ </script>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/swv.min.js?ver=6.0"
        id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-before"> /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/demo.casethemes.net\/organio\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */ </script>
    <script type="text/javascript" src="wp-content/uploads/siteground-optimizer-assets/contact-form-7.min.js?ver=6.0"
        id="contact-form-7-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/sr6/assets/js/rbtools.min.js?ver=6.7.20"
        defer="" async="" id="tp-tools-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/sr6/assets/js/rs6.min.js?ver=6.7.20" defer=""
        async="" id="revmin-js"></script>
    <script type="text/javascript" id="wp-api-request-js-extra"> /* <![CDATA[ */
        var wpApiSettings = { "root": "https:\/\/demo.casethemes.net\/organio\/wp-json\/", "nonce": "7a7befeb17", "versionString": "wp\/v2\/" };
        /* ]]> */ </script>
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
        /* ]]> */ </script>
    <script type="text/javascript" id="woo-variation-swatches-js-extra"> /* <![CDATA[ */
        var woo_variation_swatches_options = { "show_variation_label": "1", "clear_on_reselect": "", "variation_label_separator": ":", "is_mobile": "", "show_variation_stock": "", "stock_label_threshold": "5", "cart_redirect_after_add": "no", "enable_ajax_add_to_cart": "yes", "cart_url": "https:\/\/demo.casethemes.net\/organio\/cart\/", "is_cart": "" };
        /* ]]> */ </script>
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
        /* ]]> */ </script>
    <script type="text/javascript"
        src="wp-content/uploads/siteground-optimizer-assets/woosc-frontend.min.js?ver=6.3.0"
        id="woosc-frontend-js"></script>
    <script type="text/javascript" id="wc-add-to-cart-variation-js-extra"> /* <![CDATA[ */
        var wc_add_to_cart_variation_params = { "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%", "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.", "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.", "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination." };
        /* ]]> */ </script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=9.3.3"
        id="wc-add-to-cart-variation-js" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.min.js?ver=4.1.3"
        id="slick-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.min.js?ver=4.1.3"
        id="magnific-popup-js"></script>
    <script type="text/javascript" id="woosq-frontend-js-extra"> /* <![CDATA[ */
        var woosq_vars = { "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%", "nonce": "88339caaac", "view": "popup", "effect": "mfp-3d-unfold", "scrollbar": "yes", "auto_close": "yes", "hashchange": "no", "cart_redirect": "no", "cart_url": "https:\/\/demo.casethemes.net\/organio\/cart\/", "close": "Close (Esc)", "next_prev": "yes", "next": "Next (Right arrow key)", "prev": "Previous (Left arrow key)", "thumbnails_effect": "no", "related_slick_params": "{\"slidesToShow\":2,\"slidesToScroll\":2,\"dots\":true,\"arrows\":false,\"adaptiveHeight\":true,\"rtl\":false}", "thumbnails_slick_params": "{\"slidesToShow\":1,\"slidesToScroll\":1,\"dots\":true,\"arrows\":true,\"adaptiveHeight\":false,\"rtl\":false}", "thumbnails_zoom_params": "{\"duration\":120,\"magnify\":1}", "quick_view": "0" };
        /* ]]> */ </script>
    <script type="text/javascript"
        src="wp-content/uploads/siteground-optimizer-assets/woosq-frontend.min.js?ver=4.1.3"
        id="woosq-frontend-js"></script>
    <script type="text/javascript" id="woosw-frontend-js-extra"> /* <![CDATA[ */
        var woosw_vars = { "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%", "nonce": "e18dae9370", "page_myaccount": "yes", "menu_action": "open_popup", "reload_count": "no", "perfect_scrollbar": "yes", "wishlist_url": "https:\/\/demo.casethemes.net\/organio\/wishlist\/", "button_action": "list", "message_position": "right-top", "button_action_added": "popup", "empty_confirm": "This action cannot be undone. Are you sure?", "delete_confirm": "This action cannot be undone. Are you sure?", "copied_text": "Copied the wishlist link:", "menu_text": "Wishlist", "button_text": "Add to wishlist", "button_text_added": "Browse wishlist", "button_normal_icon": "woosw-icon-5", "button_added_icon": "woosw-icon-8", "button_loading_icon": "woosw-icon-4" };
        /* ]]> */ </script>
    <script type="text/javascript"
        src="wp-content/uploads/siteground-optimizer-assets/woosw-frontend.min.js?ver=4.9.4"
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
        /* ]]> */ </script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.3.3"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/ui/slider.min.js?ver=1.13.3"
        id="jquery-ui-slider-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js?ver=9.3.3"
        id="wc-jquery-ui-touchpunch-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/accounting/accounting.min.js?ver=0.4.2"
        id="accounting-js"></script>
    <script type="text/javascript" id="wc-price-slider-js-extra"> /* <![CDATA[ */
        var woocommerce_price_slider_params = { "currency_format_num_decimals": "0", "currency_format_symbol": "$", "currency_format_decimal_sep": ".", "currency_format_thousand_sep": ",", "currency_format": "%s%v" };
        /* ]]> */ </script>
    <script type="text/javascript"
        src="wp-content/plugins/woocommerce/assets/js/frontend/price-slider.min.js?ver=9.3.3"
        id="wc-price-slider-js"></script>
    <script type="text/javascript" id="sbi_scripts-js-extra"> /* <![CDATA[ */
        var sb_instagram_js_options = { "font_method": "svg", "resized_url": "https:\/\/demo.casethemes.net\/organio\/wp-content\/uploads\/sb-instagram-feed-images\/", "placeholder": "https:\/\/demo.casethemes.net\/organio\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png", "ajax_url": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php" };
        /* ]]> */ </script>
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
            }, "version": "3.25.4", "is_static": false, "experimentalFeatures": { "additional_custom_breakpoints": true, "e_swiper_latest": true, "e_nested_atomic_repeaters": true, "e_onboarding": true, "e_css_smooth_scroll": true, "home_screen": true, "landing-pages": true, "nested-elements": true, "editor_v2": true, "link-in-bio": true, "floating-buttons": true }, "urls": { "assets": "https:\/\/demo.casethemes.net\/organio\/wp-content\/plugins\/elementor\/assets\/", "ajaxurl": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php", "uploadUrl": "https:\/\/demo.casethemes.net\/organio\/wp-content\/uploads" }, "nonces": { "floatingButtonsClickTracking": "90a1169fa1" }, "swiperClass": "swiper", "settings": { "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 0, "title": "Shop &#8211; Organio", "excerpt": "<p>This is where you can browse products in this store.<\/p>\n" }
        };
        /* ]]> */ </script>
    <script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.25.4"
        id="elementor-frontend-js"></script>
</body>

</html>