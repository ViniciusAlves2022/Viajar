<!DOCTYPE html>
<html lang="pt-BR" class="hide-scroll">
<head> 
    <title>Ideias incr&#237;veis para viagens #html-templates-pt-seo-one-item-suffix Live Demo</title>
    <meta name="Keywords">
    <meta name="Description">
    
   <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no,width=device-width">
    <link href="//fonts.googleapis.com/css?family=Roboto|Open+Sans:200,300,400,700,800,900&amp;subset=latin" rel="preload" as="font" />


<script>
    window.serverSettings = {
        fbAppId: '290410448063109',
        googleAppId: '13150095650-mo8psu2colep6uv90a2mu6r87u87s35a.apps.googleusercontent.com'
    };
    window.isAuthenticated = 0;
    window.logEvent = 1;
    window.userHasAdsParams = 1;
    window.utmSourceFromReferrer = 0;
    window.currentLang = 'pt';
    window.baseUrl = 'html-templates';
    window.currentUrl = 'modelos-html';
    var np_userId = '';
    try {
        np_userId = localStorage.getItem('np_userId');
    } catch (err) {
    }
    if (!np_userId) {
        function S4() {
            return (((1 + Math.random()) * 0x10000) | 0).toString(16).substring(1);
        }

        // then to call it, plus stitch in '4' in the third group
        np_userId = (S4() + S4() + S4() + S4().substr(0, 3) + S4() + S4() + S4() + S4()).toLowerCase();
        try {
            localStorage.setItem('np_userId', np_userId);
            setCookie('np_userId', np_userId, 365);
        } catch (err) {
        }
    } else if (!readCookie('np_userId')) {
        setCookie('np_userId', np_userId, 365);
    }

    function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    function sendAnalyticsData(eventType, props, cb) {
        var json = { data: {} };
        json.userToken = np_userId;
        json.data.adsParams = readCookie('AdsParameters');
        json.data.ga = readCookie('_ga');
        json.data.gac = readCookie('_gac_UA-88868916-2');
        json.data.userAgent = navigator.userAgent;
        json.data.eventType = eventType;
        json.data.props = props;
        $.ajax({
            'type': 'POST',
            'url': '/Feedback/SendAdsLog',
            'contentType': 'application/json; charset=utf-8',
            'data': JSON.stringify(json),
            'dataType': 'json',
            'complete': cb || function() {}
        });
    }

    var isAmplitudeInitialized = false;

    function initializeAmplitudeUser() {
        if (isAmplitudeInitialized) {
            return;
        }
        isAmplitudeInitialized = true;

            identifyAmplitudeUser(null);
    }

    function sendAmplitudeAnalyticsData(eventName, analyticsData, userProperties, callback_function) {
        initializeAmplitudeUser();

        if (userProperties) {
            if(userProperties.utm_source || userProperties.utm_campaign) {
                var identify = new amplitude.Identify();
                identify.setOnce("utm_campaign", userProperties.utm_campaign);
                identify.setOnce("utm_source", userProperties.utm_source);
                identify.setOnce("utm_content", userProperties.utm_content);
                identify.setOnce("utm_term", userProperties.utm_term);
                identify.setOnce("utm_page", userProperties.utm_page);
                identify.setOnce("utm_page2", userProperties.utm_page);
                identify.setOnce("referrer", userProperties.referrer);

                amplitude.getInstance().identify(identify);

                userProperties.utm_source_last = userProperties.utm_source;
                userProperties.utm_campaign_last = userProperties.utm_campaign;
                userProperties.utm_content_last = userProperties.utm_content;
                userProperties.utm_term_last = userProperties.utm_term;
                userProperties.utm_page_last = userProperties.utm_page;
            }

            var userProps = _objectWithoutProperties(userProperties, ["utm_campaign", "utm_source","utm_content", "utm_term", "utm_page", "referrer"]);
            amplitude.getInstance().setUserProperties(userProps);
        }

        analyticsData.WebSite = 'true';
        if (typeof callback_function === 'function') {
            amplitude.getInstance().logEvent(eventName, analyticsData, callback_function);
        } else {
            amplitude.getInstance().logEvent(eventName, analyticsData);
        }
    }

    function identifyAmplitudeUser(userId, token) {
        if (userId) {
            amplitude.getInstance().setUserProperties({
                "Token": token,
                "UserId": userId
            });
        }

        var identify = new amplitude.Identify();
        amplitude.getInstance().identify(identify);
        if (userId) {
            amplitude.getInstance().setUserId(userId);
        }
    }

    function _objectWithoutProperties(obj, keys) {
        var target = {};
        for (var i in obj) {
            if (keys.indexOf(i) >= 0) continue;
            if (!Object.prototype.hasOwnProperty.call(obj, i)) continue;
            target[i] = obj[i];
        }
        return target;
    }

    function getUtmParams(url) {
        if (!url.searchParams) {
            return {};
        }

        var utmSource = url.searchParams.get("utm_source");
        if (url.searchParams.get("sscid")) {
            utmSource = 'ShareASale';
        } else if (url.searchParams.get("fbclid")) {
            utmSource = 'Facebook';
        }
        var utmCampaign = url.searchParams.get("utm_campaign") || url.searchParams.get("campaign");
        var utmContent = url.searchParams.get("utm_content") || url.searchParams.get("content");
        var utmTerm = url.searchParams.get("utm_term") || url.searchParams.get("term");


        return { utmSource : utmSource, utmCampaign: utmCampaign, utmContent: utmContent, utmTerm: utmTerm}
    }

    function clearPageUrl(pageUrl) {
        if (window.currentLang) {
            pageUrl = pageUrl.replace('/' + window.currentLang, '');
        }
        if (window.currentUrl) {
            pageUrl = pageUrl.replace(window.currentUrl, window.baseUrl);
        }

        var url = pageUrl.replace(/\?.*/, '').replace(/(.)\/$/, '$1');
        var match = url.match(/\/\d+(\/|$)/);
        if (match && match.index > 0) {
            url = url.substring(0, match.index);
        }
        return url.replace(/\/editor\//ig, '/').replace(/\/frame\//ig, '/').toLowerCase();
    }

    function getUtmPageValue(pageUrl) {
        var url = '/';
        var parts = pageUrl.split('/');
        if (pageUrl.startsWith('/') && parts.length > 1) {
            url += parts[1];
        } else {
            return pageUrl;
        }
        return url;
    }

    function sendAnalyticsFromUrl(referrer, pageType) {
        var hash = window.location.hash;

        var urlIsAvailable = typeof URL === "function" || (navigator.userAgent.indexOf('MSIE') != -1 && typeof URL === 'object');
        if (!urlIsAvailable) {
            return;
        }

        var url = new URL(window.location.href);
        if (hash && hash.indexOf('utm_') >= 0) {
            url = new URL(window.location.origin + window.location.pathname + hash.replace('#', '?'));
        }

        if (!url.searchParams) {
            return;
        }
        var paramsFromCookie = false;
        var utmParams = getUtmParams(url);
        if (userHasAdsParams)
        {
            var adsParamsFromCookie = readCookie('AdsParameters');
            if (!utmParams.utmCampaign && !utmParams.utmSource && adsParamsFromCookie) {
                url = new URL(window.location.origin + (adsParamsFromCookie.indexOf('?') === -1 ? '?' : '') + readCookie('AdsParameters'));
                utmParams = getUtmParams(url);
                paramsFromCookie = true;
            }
        }

        var source = url.searchParams.get("source");
        var gclid = url.searchParams.get("gclid");

        var needLogEvent = utmParams.utmSource || utmParams.utmCampaign || gclid;
        var fullPageUrl = window.location.pathname.split('?')[0];
        var pageUrl = clearPageUrl(fullPageUrl);

        if (needLogEvent) {
            var eventProps = {
                "utm_source": utmParams.utmSource || source,
                "utm_campaign": utmParams.utmCampaign,
                "utm_content": utmParams.utmContent,
                "utm_term": utmParams.utmTerm,
                "utm_page": getUtmPageValue(pageUrl),
                "page_url": pageUrl,
                "full_page_url": fullPageUrl
            };
            if (utmParams.utmSource === "elastic") {
                sendAmplitudeAnalyticsData('Email Click', eventProps);
            }
            if (!paramsFromCookie || utmSourceFromReferrer) {
                var userProps = {
                    "utm_source": utmParams.utmSource,
                    "utm_campaign": utmParams.utmCampaign,
                    "utm_content": utmParams.utmContent,
                    "utm_term": utmParams.utmTerm,
                    "utm_page": getUtmPageValue(pageUrl),
                    "utm_lang": window.currentLang || '',
                    "referrer": referrer
                };
                sendAmplitudeAnalyticsData('Campaign', eventProps, userProps);
            }
        }

        if (logEvent && (isAuthenticated || needLogEvent)) {
            var pageEventProps = {
                'page': pageUrl,
                'full_page_url': fullPageUrl,
                'type': pageType,
                'lang': window.currentLang || ''
            };
            sendAmplitudeAnalyticsData('Page View', pageEventProps);
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        var referrer = '';
        var pageType = 'Template Page Preview';
        sendAnalyticsFromUrl(referrer, pageType);
        if (location.href.indexOf('/frame/') === -1) {
            PureCookie.initCookieConsent({
                description: 'By using this website, you automatically accept that we use cookies. Learn more about our ',
                link: '<a href= target="_blank"> privacy and cookies policy</a>.',
                buttonCaption: "Accept",
                opacity: 0.88,
            });
        }
    });
</script>


<!--
<style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-KGP3NM3':true});</script>
-->    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88868916-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        var options = {};
        // gtag('config', 'GA_TRACKING_ID', { 'optimize_id': 'OPT_CONTAINER_ID'});
        gtag('config', 'UA-88868916-2', options);
        gtag('config', 'AW-797221335');
    </script>
        <!-- Facebook Pixel Code -->
        <script>
            if(window.hideFacebookPixelCode !== true) {
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
                fbq('init', '251025992170426');
                fbq('track', 'PageView');
            }
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=251025992170426&ev=PageView&noscript=1"/></noscript>
        <!-- End Facebook Pixel Code -->


<!-- Amplitude Code -->
<script type="text/javascript">
    (function(e,t){var n=e.amplitude||{_q:[],_iq:{}};var r=t.createElement("script")
            ;r.type="text/javascript"
            ;r.integrity="sha384-d/yhnowERvm+7eCU79T/bYjOiMmq4F11ElWYLmt0ktvYEVgqLDazh4+gW9CKMpYW"
            ;r.crossOrigin="anonymous";r.async=true
            ;r.src="https://cdn.amplitude.com/libs/amplitude-5.2.2-min.gz.js"
            ;r.onload=function(){if(!e.amplitude.runQueuedFunctions){
                console.log("[Amplitude] Error: could not load SDK")}}
            ;var i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)
            ;function s(e,t){e.prototype[t]=function(){
            this._q.push([t].concat(Array.prototype.slice.call(arguments,0)));return this}}
        var o=function(){this._q=[];return this}
            ;var a=["add","append","clearAll","prepend","set","setOnce","unset"]
            ;for(var u=0;u<a.length;u++){s(o,a[u])}n.Identify=o;var c=function(){this._q=[]
                ;return this}
            ;var l=["setProductId","setQuantity","setPrice","setRevenueType","setEventProperties"]
            ;for(var p=0;p<l.length;p++){s(c,l[p])}n.Revenue=c
            ;var d=["init","logEvent","logRevenue","setUserId","setUserProperties","setOptOut","setVersionName","setDomain","setDeviceId","setGlobalUserProperties","identify","clearUserProperties","setGroup","logRevenueV2","regenerateDeviceId","groupIdentify","onInit","logEventWithTimestamp","logEventWithGroups","setSessionId","resetSessionId"]
            ;function v(e){function t(t){e[t]=function(){
                e._q.push([t].concat(Array.prototype.slice.call(arguments,0)))}}
            for(var n=0;n<d.length;n++){t(d[n])}}v(n);n.getInstance=function(e){
                e=(!e||e.length===0?"$default_instance":e).toLowerCase()
                    ;if(!n._iq.hasOwnProperty(e)){n._iq[e]={_q:[]};v(n._iq[e])}return n._iq[e]}
            ;e.amplitude=n})(window,document);
    amplitude.getInstance().init("878f4709123a5451aff838c1f870b849");
</script>





<script>
var shareasaleSSCID=shareasaleGetParameterByName("sscid");function shareasaleSetCookie(e,a,r,s,t){if(e&&a){var o,n=s?"; path="+s:"",i=t?"; domain="+t:"",S="";r&&((o=new Date).setTime(o.getTime()+r),S="; expires="+o.toUTCString()),document.cookie=e+"="+a+S+n+i+"; SameSite=None;Secure"}}function shareasaleGetParameterByName(e,a){a||(a=window.location.href),e=e.replace(/[\[\]]/g,"\\$&");var r=new RegExp("[?&]"+e+"(=([^&#]*)|&|#|$)").exec(a);return r?r[2]?decodeURIComponent(r[2].replace(/\+/g," ")):"":null}shareasaleSSCID&&shareasaleSetCookie("shareasaleSSCID",shareasaleSSCID,94670778e4,"/");
</script>





<script src="//capp.nicepage.com/477f6139b2fce3bc7bbbaf730c8e7a3be955ee56/main-libs.js" ></script>
<link href="//capp.nicepage.com/477f6139b2fce3bc7bbbaf730c8e7a3be955ee56/main-libs.css" rel="stylesheet" />



<script>
    function receiveCountryCode() {
        if ($.cookie('UserCountryCode') !== undefined) {
            return;
        }

        $.ajax({
            type: 'HEAD',
            url: 'https://d57e01lyo0mq2.cloudfront.net/location',
            success: function(data, status, jqXHR) {
                var countryCode = jqXHR.getResponseHeader('cloudfront-viewer-country');
                if (countryCode) {
                    $.cookie('UserCountryCode', countryCode, { expires: 7, path: '/' });
                }
            },
            error: function (jqXHR) {
                var date = new Date();
                var minutes = 15;
                date.setTime(date.getTime() + (minutes * 60 * 1000));
                $.cookie('UserCountryCode', '', { expires: date, path: '/' });
            }
        });
    }

    document.addEventListener('DOMContentLoaded',
        function() {
            receiveCountryCode();
    });
</script>
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->





    
    <meta name="robots" content="noindex, nofollow">
    <script type="text/javascript">
        var device = 'desktop';
        function init($) {
            $('#previewDesktopBtn').click(function (e) {
                setLivePreviewFrameSize($(this));
                setActiveResponsiveButton(this);
                e.preventDefault();
            });

            $('#previewLaptopBtn').click(function (e) {
                setLivePreviewFrameSize($(this));
                setActiveResponsiveButton(this);
                e.preventDefault();
            });
            $('#previewTabletBtn').click(function (e) {
                setLivePreviewFrameSize($(this));
                setActiveResponsiveButton(this);
                e.preventDefault();
            });
            $('#previewPhoneHorizontalBtn').click(function (e) {
                setLivePreviewFrameSize($(this));
                setActiveResponsiveButton(this);
                e.preventDefault();
            });
            $('#previewPhoneBtn').click(function (e) {
                setLivePreviewFrameSize($(this));
                setActiveResponsiveButton(this);
                e.preventDefault();
            });

            detectActiveResponsiveButton();
        }

        if (jQuery.isReady) {
            init(jQuery);
        } else {
            jQuery(function ($) {
                init($);
            });
        }

        function setActiveResponsiveButton(btn) {
            $(".page-preview-header > a").removeClass("active");
            $(btn).addClass("active");
        }

        function detectActiveResponsiveButton() {
            var d = device;
            if (!d) {
                d = 'desktop';
            }
            $("#preview" + d.charAt(0).toUpperCase() + d.substr(1) + "Btn").click();
        }

        function getDataPreviewSizeAttr(el) {
            return el.closest("[data-preview-size]").attr("data-preview-size");
        }

        function setLivePreviewFrameSize(srcEl) {
            var getScrollbarWidth = function () {
                var s = $('<div style="width:100px;height:100px;overflow:scroll;visibility:hidden;position:absolute;top:-99999px"><div style="height:200px;"></div></div>')
                    .appendTo("body");
                var res = s.width() - s.find("div").last().width();
                s.remove();
                return res;
            };
            var attr = getDataPreviewSizeAttr(srcEl);
            $('#livePreviewFrame').width(attr.indexOf("%") !== -1 ? attr : parseInt(attr, 10) + getScrollbarWidth());
        }

    </script>
    <style>
        .dialog-wrapper {
            display: none !important;
        }

        .wrap,
        #main {
            height: 100vh;
            margin: 0 !important;
        }

        iframe {
            display: none;
        }


        html,
        body {
            height: 100%;
        }

        .page-preview {
            border-radius: 0;
            height: 100%;
        }

        .page-preview-header {
            background: #f2f2f2;
            border: none;
            height: 70px;
            position: relative;
            text-align: center;
        }

        .page-preview-header > a {
            display: inline-block;
            margin-top: 15px;
            padding: 4px;
        }

        .page-preview-header > a:hover {
            background: #e2f0fc;
            text-decoration: none;
        }

        .page-preview-header > a.active {
            background: #c9e4f9;
        }

        .page-preview-header > .close {
            float: right;
            margin-right: 10px;
        }

        .page-preview-body {
            height: calc(100% - 70px);
            overflow: hidden;
            text-align: center;
        }

        .page-preview-body iframe {
            border: none;
            display: inline-block;
            height: 100%;
        }
    </style>

</head>
    <body>
        


<div class="page-preview">
   
    <div class="page-preview-body">
        <iframe id="livePreviewFrame" src="https://travel.nicepage.io/pt/Home.html?version=db7196af-0a29-4525-82ed-d872b712dc1a" width="1057" height="640" style="width:100%;"></iframe>
    </div>
</div>


        <script>
            if (window.parent) {
                var _w = 0, _h = 0;
                var updateFormSize = function () {
                    var form = $('form.shaped-form-extended,form.shaped-form');
                    var w = form.outerWidth(true);
                    var h = form.outerHeight(true);
                    if (Math.abs(_w - w) > 5 || Math.abs(_h - h) > 5) {
                        _w = w;
                        _h = h;
                        var msg = { key: 'login-frame-size', width: w, height: h };
                        window.parent.postMessage(msg, "*");
                    }
                    setTimeout(updateFormSize, 300);
                }
                updateFormSize();
            }
        </script>
    </body>
</html>