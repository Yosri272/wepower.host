<<<<<<< HEAD
import './bootstrap';

import { createApp } from 'vue';

import App from './App.vue';

import router from "./router";

import VueAwesomePaginate from "vue-awesome-paginate";
import "vue-awesome-paginate/dist/style.css";

import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";

import { createPinia } from "pinia";
import piniaPluginPersistedstate from "pinia-plugin-persistedstate";

// 🔹 إنشاء Pinia مع دعم التخزين المستمر
const pinia = createPinia();
pinia.use(piniaPluginPersistedstate);

// 🚀 مسح الكاش عند تحميل التطبيق لمرة واحدة فقط
if (window.localStorage.getItem('reset_cache') !== 'true') {
    localStorage.clear();
    sessionStorage.clear();
    window.localStorage.setItem('reset_cache', 'true');
}

// 🔹 إنشاء تطبيق Vue
const app = createApp(App);

// 🔹 استخدام Vue Router و Pinia
app.use(pinia);
app.use(router);
app.use(VueAwesomePaginate);
app.use(Toast);

// 🚀 مسح كاش Vue Router عند تغيير المسار
router.beforeEach((to, from, next) => {
    if (to.fullPath !== from.fullPath) {
        next();
        location.reload(); // يجبر Vue على إعادة التحميل بدون كاش
    } else {
        next();
    }
});

// 🚀 تعطيل كاش المتصفح لـ API Requests باستخدام Axios
import axios from 'axios';
window.axios = axios;
window.axios.defaults.baseURL = '/api';
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['Cache-Control'] = 'no-cache, no-store, must-revalidate';
window.axios.defaults.headers.common['Pragma'] = 'no-cache';
window.axios.defaults.headers.common['Expires'] = '0';

// 🚀 حذف كاش Service Workers لمنع Vue PWA من تخزين الملفات القديمة
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.getRegistrations().then(registrations => {
        registrations.forEach(registration => registration.unregister());
    });
}

// 🚀 حذف كاش المتصفح عند التحديث
if (window.caches) {
    caches.keys().then(function(names) {
        for (let name of names) caches.delete(name);
    });
}

// 🔹 تشغيل التطبيق على `#app`
app.mount('#app');
=======
import "./bootstrap";

import { createApp } from "vue";

import App from "./App.vue";

import router from "./router";

import VueAwesomePaginate from "vue-awesome-paginate";
import "vue-awesome-paginate/dist/style.css";

import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";

import VueSelect from "vue-select";
import "vue-select/dist/vue-select.css";

import { createPinia } from "pinia";
import piniaPluginPersistedstate from "pinia-plugin-persistedstate";

import localization from "./localization";

const pinia = createPinia();
pinia.use(piniaPluginPersistedstate);

const app = createApp(App);

app.component("v-select", VueSelect);
localization.fetchLocalizationData();

app.use(localization.i18n);
app.use(pinia);
app.use(router);
app.use(VueAwesomePaginate);
app.use(Toast);
app.mount("#app");
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
