<template>
<<<<<<< HEAD
    <div class="main-container pt-8 pb-6 sm:pt-14 sm:pb-10 bg-primary-950 text-white">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!--===== ReadyeCommerce (col-1) =====-->
            <div>
                <div>
                    <img :src="master.footerLogo" class="h-10" loading="lazy" />
                </div>
                <div class="mt-6 max-w-[328px]">
                    <div class="text-white text-sm font-normal leading-normal">
                        {{ master.footerDescription }}
                    </div>

                    <div class="mt-4 p-4 bg-black bg-opacity-20 rounded-[56px] flex gap-3">
                        <DevicePhoneMobileIcon class="w-6 h-6 text-white" />
                        <div class="w-[0px] h-6 border border-primary-900"></div>
                        <div class="text-white text-base font-normal leading-normal">
                            {{ master.mobile }}
                        </div>
                    </div>
                    <div class="mt-3 p-4 bg-black bg-opacity-20 rounded-[56px] flex gap-3">
                        <EnvelopeIcon class="w-6 h-6 text-white" />
                        <div class="w-[0px] h-6 border border-primary-900"></div>
                        <div class="text-white text-base font-normal leading-normal">
                            {{ master.email }}
                        </div>
                    </div>
                </div>

                <div class="flex justify-start mt-5 items-center gap-6">
                    <div class="flex items-center gap-3">
                        <a v-for="socialLink in master.socialLinks" :key="socialLink.name" target="_blank" :href="socialLink.link" class="w-8 h-8 bg-primary-800 rounded-full overflow-hidden">
                            <img :src="socialLink.logo" alt="" class="w-full h-full object-cover">
                        </a>
                    </div>
                </div>
            </div>

            <!--===== Quick Links (col-2) =====-->
            <div class="mt-4 sm:mt-0">
                <div class="text-white text-lg font-medium leading-normal tracking-tight">Quick Links</div>

                <div class="flex flex-col gap-2 mt-6">
                    <router-link v-if="master.getMultiVendor" to="/shops"
                        class="py-2 hover:text-primary text-white text-base font-normal leading-normal">
                        Shops
                    </router-link>
                    <router-link to="/most-popular"
                        class="py-2 hover:text-primary text-white text-base font-normal leading-normal">
                        Most Popular
                    </router-link>
                    <router-link to="/best-deal"
                        class="py-2 hover:text-primary text-white text-base font-normal leading-normal">
                        Best Deal
                    </router-link>
                    <a v-if="master.getMultiVendor" href="/shop"
                        class="py-2 hover:text-primary text-white text-base font-normal leading-normal">
                        Become a Seller
                    </a>

                    <router-link v-if="!master.getMultiVendor" to="/contact-us"
                        class="py-2 hover:text-primary text-white text-base font-normal leading-normal">
                        Contact
                    </router-link>
                </div>
            </div>

            <!--===== Company (col-3) =====-->
            <div class="mt-4 lg:mt-0">
                <div class="text-white text-lg font-medium leading-normal tracking-tight">Company</div>

                <div class="flex flex-col gap-2 mt-6">
                    <router-link to="/about-us"
                        class="py-2 hover:text-primary text-white text-base font-normal leading-normal">
                        About us
                    </router-link>
                    <router-link v-if="master.getMultiVendor" to="/contact-us"
                        class="py-2 hover:text-primary text-white text-base font-normal leading-normal">
                        Contact
                    </router-link>
                    <router-link to="/terms-and-conditions"
                        class="py-2 hover:text-primary text-white text-base font-normal leading-normal">
                        Terms & Conditions
                    </router-link>
                    <router-link to="/privacy-policy"
                        class="py-2 hover:text-primary text-white text-base font-normal leading-normal">
                        Privacy Policy
                    </router-link>
                </div>
            </div>

            <!--===== Download our app (col-4) =====-->
            <div v-if="master.showDownloadApp" class="mt-4 lg:mt-0">
                <div class="text-white text-lg font-medium leading-normal tracking-tight">
                    Download our app
                </div>

                <div class="mt-6">
                    <div v-if="master.footerQr" class="bg-white rounded-md w-28 overflow-hidden">
                        <img :src="master.footerQr" class="h-28 w-full" loading="lazy" />
                        <div class="text-center text-primary-950 text-sm font-normal leading-tight pb-1">
                            Scan the QR
                        </div>
                    </div>

                    <div class="flex justify-start gap-4 mt-6">
                        <button class="border-none w-[119.70px] h-10 py-1 px-2 bg-primary-900 rounded-lg" @click="appStore">
                            <img :src="'/assets/icons/appstoreFooter.svg'" alt="appstore" class="w-full h-full object-fill" loading="lazy" />
                        </button>
                        <button class="border-none w-[119.70px] h-10 py-1 px-2 bg-primary-900 rounded-lg" @click="playStore">
                            <img :src="'/assets/icons/playstoreFooter.svg'" alt="playstore" class="w-full h-full object-fill" loading="lazy" />
                        </button>
                    </div>
=======
    <div class="main-container pt-6 pb-6 sm:pt-8 sm:pb-8 bg-primary-950 text-white">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6">

            <!--===== (footer) =====-->
            <div v-for="(footer, index) in master.footers" :key="footer.id">

                <div v-if="footer.title" class="text-white text-base sm:text-lg font-bold tracking-wide leading-normal flex items-center justify-between mb-3"
                    @click="!isLargeScreen ? toggleLinks(index) : ''">
                    {{ footer.title }}
                    <div v-if="footer.items.some(item => item.type === 'link')" class="transition-transform duration-300 block sm:hidden"
                        :class="checkOpen(index) ? 'rotate-180' : ''">
                        <ChevronDownIcon class="w-5 h-5" />
                    </div>
                </div>

                <div v-for="item in footer.items" :key="item.id">
                    <div v-if="item.type == 'logo'">
                        <img :src="master.footerLogo" class="h-10" loading="lazy" />
                    </div>

                    <div v-if="item.type == 'text'" class="text-white mt-3 text-sm font-normal leading-normal max-w-[328px]">
                        {{ item.title }}
                    </div>

                    <div v-if="item.type == 'phone'" class="mt-3 p-3 bg-black bg-opacity-20 rounded-[56px] flex gap-3 max-w-[328px]">
                        <DevicePhoneMobileIcon class="w-6 h-6 text-white" />
                        <div class="w-[0px] h-6 border border-primary-900"></div>
                        <div class="text-white text-base font-normal leading-normal">
                            {{ item.title }}
                        </div>
                    </div>

                    <div v-if="item.type == 'email'" class="mt-3 p-3 bg-black bg-opacity-20 rounded-[56px] flex gap-3 max-w-[328px]">
                        <EnvelopeIcon class="w-6 h-6 text-white" />
                        <div class="w-[0px] h-6 border border-primary-900"></div>
                        <div class="text-white text-base font-normal leading-normal">
                            {{ item.title }}
                        </div>
                    </div>

                    <div v-if="item.type == 'social_links'" class="flex justify-start mt-3 items-center gap-6">
                        <div class="flex items-center gap-2 flex-wrap">
                            <a v-for="socialLink in master.socialLinks" :key="socialLink.name" target="_blank"
                                :href="socialLink.link" class="w-9 h-9 overflow-hidden" :title="socialLink.name">
                                <img :src="socialLink.logo" alt="" class="w-full h-full object-cover">
                            </a>
                        </div>
                    </div>

                    <div v-if="item.type == 'app_store'" class="my-3">
                        <div v-if="master.footerQr" class="bg-white rounded-md w-28 overflow-hidden">
                            <img :src="master.footerQr" class="h-28 w-full" loading="lazy" />
                            <div class="text-center text-primary-950 text-sm font-normal leading-tight pb-1">
                                {{ $t('Scan the QR') }}
                            </div>
                        </div>

                        <div class="flex justify-start gap-4 mt-3">
                            <button class="border-none w-[119.70px] h-10 py-1 px-2 bg-primary-900 rounded-lg"
                                @click="appStore">
                                <img :src="'/assets/icons/appStoreFooter.svg'" alt="appStore"
                                    class="w-full h-full object-fill" loading="lazy" />
                            </button>
                            <button class="border-none w-[119.70px] h-10 py-1 px-2 bg-primary-900 rounded-lg"
                                @click="playStore">
                                <img :src="'/assets/icons/playStoreFooter.svg'" alt="playStore"
                                    class="w-full h-full object-fill" loading="lazy" />
                            </button>
                        </div>
                    </div>

                    <transition v-if="item.type == 'link'" name="slide" mode="out-in">
                        <div v-if="checkOpen(index) || isLargeScreen || (footer.title ? false : true)" class="w-full">
                            <router-link :to="item.url" :target="item.target" class="py-2 hover:text-primary text-white text-base font-normal leading-normal inline-block">
                                {{ item.title }}
                            </router-link>
                        </div>
                    </transition>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                </div>
            </div>

        </div>
    </div>
</template>

<script setup>
<<<<<<< HEAD
import { DevicePhoneMobileIcon, EnvelopeIcon } from '@heroicons/vue/24/outline';
=======
import { onMounted, onBeforeUnmount, ref } from 'vue';
import { DevicePhoneMobileIcon, EnvelopeIcon } from '@heroicons/vue/24/outline';
import { ChevronDownIcon } from '@heroicons/vue/24/solid';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

import { useMaster } from "../stores/MasterStore";
const master = useMaster();

<<<<<<< HEAD
=======
const [item0, item1, item2, item3] = [ref(false), ref(false), ref(false), ref(false)];

const isLargeScreen = ref(window.innerWidth >= 640);

onMounted(() => {
    window.addEventListener('resize', handleResize);
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', handleResize);
});

const checkOpen = (index) => {
    const items = [item0, item1, item2, item3];
    return items[index]?.value || false;
}

const handleResize = () => {
    isLargeScreen.value = window.innerWidth >= 640;
    if (isLargeScreen.value) {
        item0.value = item1.value = item2.value = item3.value = true;
    } else {
        item0.value = item1.value = item2.value = item3.value = false;
    }
};

const toggleLinks = (index) => {
    switch (index) {
        case 0:
            item0.value = !item0.value;
            break;
        case 1:
            item1.value = !item1.value;
            break;
        case 2:
            item2.value = !item2.value;
            break;
        case 3:
            item3.value = !item3.value;
            break;
    }
}

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
const appStore = () => {
    if (master.appStoreLink) {
        window.open(master.appStoreLink, '_blank');
    }
}

const playStore = () => {
    if (master.playStoreLink) {
        window.open(master.playStoreLink, '_blank');
    }
}

</script>
<<<<<<< HEAD
=======
<style scoped>
.slide-enter-active,
.slide-leave-active {
    transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
}

.slide-enter-from,
.slide-leave-to {
    max-height: 0;
    opacity: 0;
}

.slide-enter-to,
.slide-leave-from {
    max-height: 500px;
    opacity: 1;
}
</style>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
