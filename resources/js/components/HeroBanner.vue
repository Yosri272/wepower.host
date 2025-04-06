<template>
<<<<<<< HEAD
    <div class="main-container mt-3 grid grid-cols-4 gap-3 lg:gap-8">
        <div class="col-span-4 lg:col-span-3">
            <!-- Main Banner Slider -->
            <swiper :navigation="true" :pagination="{ clickable: true }" :slides-per-view="1" :space-between="20"
                :modules="modules" class="mySwiper" :loop="false" :autoplay="{
                    delay: 3000,
                    disableOnInteraction: true
                }">

                <swiper-slide v-for="banner in banners" :key="banner.id">
                    <img :src="banner.thumbnail" loading="lazy" class="w-full object-cover aspect-[9/4]" />
                </swiper-slide>

            </swiper>

        </div>

        <!-- Banner Thumbnails -->
        <div class="col-span-4 lg:col-span-1 flex flex-col sm:flex-row  lg:flex-col gap-4 lg:gap-8">
            <img v-for="ad in ads" :key="ad.id" :src="ad.thumbnail" loading="lazy" class="w-full h-[136px] sm:h-auto aspect-[9/6] object-cover rounded-lg" />
        </div>
    </div>
=======
    <div v-if="!isLoading" class="main-container mt-3 grid grid-cols-4 gap-3 lg:gap-8" :dir="master.langDirection || 'ltr'">
        <div class="col-span-4 lg:col-span-3">
            <!-- Main Banner Slider -->
            <swiper :navigation="true" :pagination="{ clickable: true }" :slides-per-view="1" :space-between="20"
                :modules="modules" class="mySwiper rounded-lg" :loop="false" :autoplay="{
                    delay: 4000,
                    disableOnInteraction: false
                }">

                <swiper-slide v-for="banner in banners" :key="banner.id">
                    <img :src="banner.thumbnail" loading="lazy" class="w-full rounded-lg object-cover aspect-[9/4]" />
                </swiper-slide>
            </swiper>
        </div>

        <!-- Banner Thumbnails -->
        <div class="col-span-4 lg:col-span-1 grid sm:grid-cols-2 lg:grid-cols-1 gap-4 lg:gap-8 overflow-hidden">
            <img v-for="ad in ads" :key="ad.id" :src="ad.thumbnail" loading="lazy" class="w-full h-[136px] sm:h-auto aspect-[9/6] object-cover rounded-lg" />
        </div>
    </div>

    <!-- Skeleton loader -->
    <div v-else class="main-container mt-3 grid grid-cols-4 gap-3 lg:gap-8">
        <div class="col-span-4 lg:col-span-3">
            <div class="w-full aspect-[9/4] object-cover rounded-lg">
                <SkeletonLoader class="w-full h-full object-cover rounded-lg" />
            </div>
        </div>
        <div class="col-span-4 lg:col-span-1 grid sm:grid-cols-2 lg:grid-cols-1 gap-4 lg:gap-8 overflow-hidden">
            <div v-for="i in 2" :key="i" class="w-full h-[136px] sm:h-auto aspect-[9/6] object-cover rounded-lg">
                <SkeletonLoader class="w-full h-full object-cover rounded-lg" />
            </div>
        </div>
    </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
</template>

<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue';
<<<<<<< HEAD
import { Navigation, Pagination, A11y } from 'swiper/modules';
=======
import { Navigation, Pagination, A11y, Autoplay } from 'swiper/modules';
import { useMaster } from '../stores/MasterStore';
const master = useMaster();
import SkeletonLoader from './SkeletonLoader.vue';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

// Import Swiper styles
import 'swiper/css';

import 'swiper/css/navigation';
import 'swiper/css/pagination';

const modules = [
<<<<<<< HEAD
    Navigation, Pagination, A11y
=======
    Navigation, Pagination, A11y, Autoplay
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
];

const props = defineProps({
    banners: Array,
<<<<<<< HEAD
    ads: Array
=======
    ads: Array,
    isLoading: {
        type: Boolean,
        default: true
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
})

</script>

<style>
.mySwiper .swiper-button-prev,
.mySwiper .swiper-button-next {
    position: absolute;
    width: 28px;
    height: 28px;
    background-color: #fff;
    color: #475569 !important;
    border-radius: 8px !important;
    margin-top: auto;
}

.mySwiper .swiper-button-next {
    left: auto;
    right: 20px;
    bottom: 20px;
}

.mySwiper .swiper-button-prev {
    left: auto;
    right: 58px;
    bottom: 20px;
}

.mySwiper .swiper-button-prev:after,
.mySwiper .swiper-button-next:after {
    font-size: 16px !important;
}

.mySwiper .swiper-pagination-bullet-active {
    @apply bg-primary w-6 h-2 rounded;
}
</style>
