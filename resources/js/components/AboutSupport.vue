<template>
<<<<<<< HEAD
    <div class="main-container mt-12">
        <div class="p-6 bg-white rounded-xl shadow-lg border border-dashed border-slate-300 grid grid-cols-1 md:grid-cols-3 xl:grid-cols-4 gap-16">
            <div class="flex justify-start items-start gap-4">
                <img :src="'/assets/icons/secure-payment.svg'" class="w-11 h-11" loading="lazy" alt="icon"/>
                <div class="text-slate-600 text-sm font-medium leading-tight">
                    <div class=" text-slate-950 text-base font-bold leading-normal">
                        Secure Payment Gateways
                    </div>
                    <div class="text-slate-700 text-base font-normal leading-normal mt-1">
                        48+ gateways to ensure your security.
=======
    <div class="main-container mt-8 sm:mt-12">
        <div v-if="!isLoading" class="p-6 bg-white rounded-xl shadow-lg border border-dashed border-slate-300 grid grid-cols-1 md:grid-cols-3 xl:grid-cols-4 gap-5 sm:gap-8 lg:gap-16">
            <div class="flex justify-start items-start gap-4">
                <img :src="'/assets/icons/secure-payment.svg'" class="w-11 h-11" loading="lazy" alt="icon"/>
                <div class="text-slate-600 text-sm font-medium leading-tight">
                    <div class=" text-slate-950 sm:text-base font-bold leading-normal">
                        {{ $t('Secure Payment Gateways') }}
                    </div>
                    <div class="text-slate-700 sm:text-base font-normal leading-normal mt-0 sm:mt-1">
                        {{ $t('48+ gateways to ensure your security') }}.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </div>
                </div>
            </div>

            <div class="flex justify-start items-start gap-4">
                <img :src="'/assets/icons/customer-review.svg'" class="w-11 h-11" loading="lazy" alt="icon"/>
                <div class="text-slate-600 text-sm font-medium leading-tight">
<<<<<<< HEAD
                    <div class=" text-slate-950 text-base font-bold leading-normal">
                        Genuine Customer Reviews
                    </div>
                    <div class="text-slate-700 text-base font-normal leading-normal mt-1">
                        Find verified reviews showcased on our platforms.
=======
                    <div class=" text-slate-950 sm:text-base font-bold leading-normal">
                        {{ $t('Genuine Customer Reviews') }}
                    </div>
                    <div class="text-slate-700 sm:text-base font-normal leading-normal mt-0 sm:mt-1">
                        {{ $t('Find verified reviews showcased on our platforms') }}.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </div>
                </div>
            </div>

            <div class="flex justify-start items-start gap-4">
                <img :src="'/assets/icons/support.svg'" class="w-11 h-11" loading="lazy" alt="icon"/>
                <div class="text-slate-600 text-sm font-medium leading-tight">
<<<<<<< HEAD
                    <div class=" text-slate-950 text-base font-bold leading-normal">
                       24/3 Customer Support
                    </div>
                    <div class="text-slate-700 text-base font-normal leading-normal mt-1">
                        Always our support team is available for you.
=======
                    <div class=" text-slate-950 sm:text-base font-bold leading-normal">
                       {{ $t('24/7 Customer Support') }}
                    </div>
                    <div class="text-slate-700 sm:text-base font-normal leading-normal mt-0 sm:mt-1">
                        {{ $t('Always our support team is available for you') }}.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </div>
                </div>
            </div>

            <div class="flex justify-start items-start gap-4">
                <img :src="'/assets/icons/easy-return.svg'" class="w-11 h-11" loading="lazy" alt="icon"/>
                <div class="text-slate-600 text-sm font-medium leading-tight">
<<<<<<< HEAD
                    <div class=" text-slate-950 text-base font-bold leading-normal">
                        30-Day Easy Returns
                    </div>
                    <div class="text-slate-700 text-base font-normal leading-normal mt-1">
                        If you're not satisfied, return it hassle-free.
                    </div>
                </div>
            </div>

=======
                    <div class=" text-slate-950 sm:text-base font-bold leading-normal">
                        {{ $t('Easy Return Policy') }}
                    </div>
                    <div class="text-slate-700 sm:text-base font-normal leading-normal mt-0 sm:mt-1">
                        {{ $t("If you're not satisfied, return it hassle-free") }}.
                    </div>
                </div>
            </div>
        </div>
        <!-- loader -->
        <div v-else class="p-4 bg-white rounded-xl border border-dashed border-slate-300 grid grid-cols-1 md:grid-cols-3 xl:grid-cols-4 gap-5 sm:gap-8">
            <SkeletonLoader v-for="i in 4" :key="i" class="w-full h-[200px] sm:h-[140px] rounded-lg" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        </div>
    </div>
</template>

<script setup>
<<<<<<< HEAD

</script>

<style lang="scss" scoped>

</style>
=======
import SkeletonLoader from './SkeletonLoader.vue';
const props = defineProps({
    isLoading: {
        type: Boolean,
        default: true
    }
})
</script>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
