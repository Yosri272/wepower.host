<template>
    <div class="main-container py-12">

        <!-- Header -->
<<<<<<< HEAD
        <div class="flex justify-between items-center gap-4">
            <div class=" text-slate-800 text-lg md:text-3xl font-bold leading-9">Popular Products</div>

            <router-link to="/most-popular" class="flex items-center gap-1">
                <div class="text-slate-600 text-base font-normal leading-normal">View All</div>
                <ArrowRightIcon class="w-5 h-5 text-slate-600" />
            </router-link>
        </div>
=======
        <div v-if="!isLoading" class="flex justify-between items-center gap-4">
            <div class=" text-slate-800 text-lg md:text-3xl font-bold leading-9">{{ $t('Popular Products') }}</div>

            <router-link to="/most-popular" class="flex items-center gap-1">
                <div class="text-slate-600 text-base font-normal leading-normal">{{ $t('View All') }}</div>
                <ArrowRightIcon class="w-5 h-5 text-slate-600" />
            </router-link>
        </div>
        <!-- loading -->
        <SkeletonLoader v-else class="w-48 sm:w-60 md:w-72 lg:w-96 h-12 rounded-lg" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        <!-- Products -->
        <div class="mt-8 grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-6 gap-3 md:gap-6 items-start">

<<<<<<< HEAD
            <div v-for="product in products" :key="product.id" class="w-full">
                <ProductCard :product="product"/>
            </div>

=======
            <div v-if="!isLoading" v-for="product in products" :key="product.id" class="w-full">
                <ProductCard :product="product"/>
            </div>

            <!-- loading -->
            <div v-else v-for="i in 6" :key="i">
                <SkeletonLoader class="w-full h-[220px] sm:h-[330px]" />
            </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        </div>

    </div>
</template>

<script setup>
import { ArrowRightIcon } from '@heroicons/vue/24/outline';
import ProductCard from './ProductCard.vue';
<<<<<<< HEAD

const props = defineProps({
    products: Array
=======
import SkeletonLoader from './SkeletonLoader.vue';

const props = defineProps({
    products: Array,
    isLoading: Boolean
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
})

</script>
