<template>
    <div class="main-container py-12 bg-slate-100">

        <!-- Header -->
<<<<<<< HEAD
        <div class="flex justify-between items-center gap-4">
            <div class="text-slate-800 text-lg md:text-3xl font-bold leading-9">Top Rated Shops</div>

            <router-link to="/shops" class="flex items-center gap-1">
                <div class="text-slate-600 text-base font-normal leading-normal">View All</div>
                <ArrowRightIcon class="w-5 h-5 text-slate-600" />
            </router-link>
        </div>

=======
        <div v-if="!isLoading" class="flex justify-between items-center gap-4">
            <div class="text-slate-800 text-lg md:text-3xl font-bold leading-9">{{ $t('Top Rated Shops') }}</div>

            <router-link to="/shops" class="flex items-center gap-1">
                <div class="text-slate-600 text-base font-normal leading-normal">{{ $t('View All') }}</div>
                <ArrowRightIcon class="w-5 h-5 text-slate-600" />
            </router-link>
        </div>
        <!-- loading -->
        <SkeletonLoader v-else class="w-48 sm:w-60 md:w-72 lg:w-96 h-12 rounded-lg" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        <!-- Shops -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 items-start">

<<<<<<< HEAD
            <div v-for="shop in shops" :key="shop.id" class="w-full">
                <ShopCardTop :shop="shop"/>
            </div>

        </div>


=======
            <div v-if="!isLoading" v-for="shop in shops" :key="shop.id" class="w-full">
                <ShopCardTop :shop="shop"/>
            </div>

            <!-- loading -->
            <div v-else v-for="i in 4" :key="i">
                <SkeletonLoader class="w-full h-[200px] sm:h-[250px]" />
            </div>
        </div>

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    </div>
</template>

<script setup>
import { ArrowRightIcon } from '@heroicons/vue/24/outline';
import ShopCardTop from './ShopCardTop.vue';
<<<<<<< HEAD

const { shops } = defineProps(['shops']);
=======
import SkeletonLoader from './SkeletonLoader.vue';

const { shops, isLoading } = defineProps(['shops', 'isLoading']);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

</script>
