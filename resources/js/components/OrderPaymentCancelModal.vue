<template>
    <!-- Order Confirm Dialog Modal -->
<<<<<<< HEAD
    <TransitionRoot as="template" :show="baskerStore.orderPaymentCancelModal">
=======
    <TransitionRoot as="template" :show="basketStore.orderPaymentCancelModal">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            <Dialog as="div" class="relative z-10" @close="closeConfirmModal">
                <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0"
                    enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-50 transition-opacity" />
                </TransitionChild>
                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
<<<<<<< HEAD
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
=======
                    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        <TransitionChild as="template" enter="ease-out duration-300"
                            enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200"
                            leave-from="opacity-100 translate-y-0 sm:scale-100"
                            leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                            <DialogPanel
                                class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-xl transition-all my-8 md:my-0 w-full md:w-[538px]">
                                <div class="bg-white p-5 sm:p-8 relative">

                                    <div class="flex justify-center">
                                        <ArchiveBoxXMarkIcon class="w-20 h-20 text-red-500" />
                                    </div>

                                    <div class="mt-4 text-center text-gray-900 text-xl sm:text-3xl font-bold leading-9">
                                        Your order has been placed but payment has been cancelled
                                    </div>

                                    <div
                                        class="mt-4 py-3.5 bg-slate-100 rounded-lg text-center text-slate-950 text-base">
                                        Your order ID is: 265865
                                    </div>

                                    <div
                                        class="mt-4 text-center text-slate-700 text-lg font-normal leading-7 tracking-tight">
                                        You will receive an order confirmation email with details of your order.
                                    </div>

                                    <div class="mt-4 w-full flex">
                                        <button @click="goToHomepage"
                                            class="w-full text-center px-6 py-4 bg-primary rounded-[10px] text-white text-base font-medium leading-normal">
                                            Continue Shopping
                                        </button>
                                    </div>
                                </div>
                            </DialogPanel>
                        </TransitionChild>
                    </div>
                </div>
            </Dialog>
        </TransitionRoot>
</template>

<script setup>
<<<<<<< HEAD
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { ArchiveBoxXMarkIcon } from '@heroicons/vue/24/solid';

import { useRouter } from 'vue-router';
import { useBaskerStore } from '../stores/BasketStore';

const router = useRouter();

const baskerStore = useBaskerStore();

const goToHomepage = () => {
    baskerStore.showOrderConfirmModal = false;
=======
import { Dialog, DialogPanel, TransitionChild, TransitionRoot } from '@headlessui/vue';
import { ArchiveBoxXMarkIcon } from '@heroicons/vue/24/solid';

import { useRouter } from 'vue-router';
import { useBasketStore } from '../stores/BasketStore';

const router = useRouter();

const basketStore = useBasketStore();

const goToHomepage = () => {
    basketStore.showOrderConfirmModal = false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    router.push('/');
}

const closeConfirmModal = () => {
<<<<<<< HEAD
    baskerStore.showOrderConfirmModal = false;
=======
    basketStore.showOrderConfirmModal = false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    router.push('/');
}

</script>

<style lang="scss" scoped>

</style>
