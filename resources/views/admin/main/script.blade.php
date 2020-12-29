<!-- Argon Scripts -->
<!-- Core -->
<script src="{{ asset('./argon/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('./argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('./argon/assets/vendor/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('./argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('./argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.j') }}"></script>
<script src="{{ asset('./argon/assets/vendor/lavalamp/js/jquery.lavalamp.min.js') }}"></script>
<!-- Optional JS -->
<script src="{{ asset('./argon/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('./argon/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
<!-- Argon JS -->
<script src="{{ asset('./argon/assets/js/argon.min-v=1.0.0.js') }}"></script>
<!-- Demo JS - remove this in your project -->
<script src="{{ asset('./argon/assets/js/demo.min.js') }}"></script>
<script>
// Facebook Pixel Code Don't Delete
! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
    n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
}(window,
    document, 'script', '//connect.facebook.net/en_US/fbevents.js');

try {
    fbq('init', '111649226022273');
    fbq('track', "PageView");

} catch (err) {
    console.log('Facebook Track Error:', err);
}
</script>
<noscript>
<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
</noscript>