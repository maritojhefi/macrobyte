<script src="https://unpkg.com/scrollreveal"></script>

<div id="fb-root"></div>
<div id="fb-customer-chat" class="fb-customerchat"></div>
<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "2109985345740506");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v18.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<script>
    // ScrollReveal Config
    ScrollReveal().reveal('.reveal', {
        distance: '60px',
        duration: 1200,
        easing: 'cubic-bezier(.2,.8,.2,1)',
        interval: 150,
        opacity: 0,
        origin: 'bottom',
        reset: false
    });

    // Mobile Navbar Toggle Menu
    function toggleMenu() {
        document.getElementById("navContent").classList.toggle("active");
    }
</script>