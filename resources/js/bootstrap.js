<<<<<<< HEAD
/**
 * تحميل مكتبة Axios للتعامل مع API Laravel
 */

import axios from 'axios';
window.axios = axios;

// تحديد عنوان الـ API الافتراضي
window.axios.defaults.baseURL = '/api';

// التأكد من إرسال CSRF Token تلقائيًا مع كل الطلبات
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// 🚀 تعطيل كاش المتصفح عند إرسال الطلبات إلى Laravel API
window.axios.defaults.headers.common['Cache-Control'] = 'no-cache, no-store, must-revalidate';
window.axios.defaults.headers.common['Pragma'] = 'no-cache';
window.axios.defaults.headers.common['Expires'] = '0';

// 🚀 إضافة CSRF Token مع كل الطلبات (مهم في Laravel لحماية الطلبات)
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('⚠️ CSRF token not found: Ensure you have <meta name="csrf-token" content="{{ csrf_token() }}"> in your HTML.');
}

// ✅ إضافة Interceptor لمعالجة الأخطاء في جميع الطلبات
window.axios.interceptors.response.use(
    response => response,
    error => {
        if (error.response && error.response.status === 401) {
            console.warn("⚠️ Unauthorized request! Redirecting to login...");
            window.location.href = '/login';
        } else if (error.response && error.response.status === 419) {
            console.warn("⚠️ CSRF token mismatch! Trying to refresh...");
            window.location.reload();
        }
        return Promise.reject(error);
    }
);

/**
 * Echo لتفعيل WebSockets و Pusher في Laravel (تحميل مشروط)
 */
if (import.meta.env.VITE_ENABLE_PUSHER === "true") {
    import('laravel-echo').then(module => {
        const Echo = module.default;
        import('pusher-js').then(PusherModule => {
            const Pusher = PusherModule.default;
            window.Pusher = Pusher;

            window.Echo = new Echo({
                broadcaster: 'pusher',
                key: import.meta.env.VITE_PUSHER_APP_KEY,
                cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
                wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
                wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
                wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
                forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
                enabledTransports: ['ws', 'wss'],
            });

            console.log("✅ Pusher & Echo initialized successfully!");
        }).catch(error => {
            console.error("🚨 Failed to load Pusher:", error);
        });
    }).catch(error => {
        console.error("🚨 Failed to load Echo:", error);
    });
} else {
    console.warn("🚨 Pusher is disabled. Set VITE_ENABLE_PUSHER=true in your .env to enable it.");
}
=======
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.baseURL = '/api';

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['Accept-Language'] = localStorage.getItem('locale') ?? 'en';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
