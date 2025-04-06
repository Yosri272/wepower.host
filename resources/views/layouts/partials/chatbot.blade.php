<!-- Start of Tawk.to Script -->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/67f11396ae8585190ac874bc/1io2r910t';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

<script>
    Tawk_API = Tawk_API || {};
    Tawk_API.onLoad = function () {
        const lang = document.documentElement.lang || navigator.language;

        // تحقّق من اللغة العربية
        if (lang.startsWith('ar')) {
            // ننتظر قليلاً لأن Tawk.to يحمّل iframe متأخر
            setTimeout(() => {
                const iframe = document.querySelector("#tawkchat-container");
                if (iframe) {
                    iframe.style.right = 'unset';
                    iframe.style.left = '20px';
                    iframe.style.direction = 'rtl';
                    iframe.style.transform = 'scaleX(-1)';

                    // نعكس اتجاه النص داخل الشات (بإضافة class خاص لاحقًا)
                    const style = document.createElement('style');
                    style.innerHTML = `
                        #tawkchat-container * {
                            direction: rtl !important;
                            text-align: right !important;
                        }
                    `;
                    document.head.appendChild(style);
                }
            }, 1000);
        }
    };
</script>
<!-- End of Tawk.to Script -->
