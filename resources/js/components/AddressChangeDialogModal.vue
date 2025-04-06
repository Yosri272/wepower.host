<template>
    <TransitionRoot as="template" :show="authStore.showChangeAddressModal">
        <Dialog as="div" class="relative z-10" @close="authStore.showChangeAddressModal = false">
            <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100"
                leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
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
<<<<<<< HEAD
                            class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-xl transition-all my-8 md:my-0 w-full md:max-w-xl">
=======
                            class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-xl transition-all my-8 md:my-3 w-full md:max-w-2xl">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            <div class="bg-white p-5 sm:p-8 relative">
                                <!-- close button -->
                                <div class="w-9 h-9 bg-slate-100 rounded-[32px] absolute top-4 right-4 flex justify-center items-center cursor-pointer"
                                    @click="authStore.showChangeAddressModal = false">
                                    <XMarkIcon class="w-6 h-6 text-slate-600" />
                                </div>
                                <!-- end close button -->

                                <div class="text-slate-950 text-2xl font-medium">
<<<<<<< HEAD
                                    Saved Address
=======
                                    {{ $t('Saved Address') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </div>

                                <!-- Address List -->
                                <div class="mt-6 space-y-6">

                                    <label v-for="address in authStore.addresses" :key="address.id" :for="'address' + address.id"
<<<<<<< HEAD
                                        class="mt-4 p-4 flex gap-6  rounded-lg border border-slate-200 has-[:checked]:border-primary" @click="basketStore.address = address">
=======
                                        class="mt-4 p-4 flex gap-6  rounded-lg border border-slate-200 has-[:checked]:border-primary cursor-pointer" @click="basketStore.address = address">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                        <!-- Tag -->
                                        <div
                                            class="flex sm:h-20 w-[60px] sm:w-[88px] bg-slate-50 rounded-lg flex-col gap-2 justify-center items-center shrink-0">
                                            <MapPinIcon class="w-6 h-6 text-primary-600" />
                                            <div
                                                class="px-1.5 py-[3px] bg-slate-800 rounded-md text-white text-xs font-medium uppercase">
                                                {{ address.address_type }}
                                            </div>
                                        </div>
                                        <div class="grow overflow-hidden">
                                            <!-- Name -->
                                            <div class="flex justify-between items-center mb-1 pr-1">
                                                <div
                                                    class="text-slate-950 text-lg font-medium leading-normal tracking-tight">
                                                    {{ address.name }}
                                                </div>
                                                <!-- input radio -->
                                                <input type="radio" name="address" :id="'address' + address.id" value=""
                                                    class="radioBtn2" :checked="basketStore.address.id == address.id">
                                            </div>
                                            <!-- Phone -->
                                            <div class="text-slate-500 text-base font-normal leading-normal">
                                                {{ address.phone }}
                                            </div>
                                            <!-- Address -->
                                            <div class="text-slate-500 text-base font-normal leading-normal truncate">
<<<<<<< HEAD
                                                {{ address.flat_no + ', ' + address.address_line + ', ' + address.address_line2 }}, {{ address.area + '-' + address.post_code }}
=======
                                                {{ (address.flat_no ? address.flat_no + ', ' : '') + address.address_line + ', ' + (address.address_line2 ? address.address_line2 + ', ' : '') }}, {{ address.area + '-' + address.post_code }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                            </div>

                                            <div v-if="address.is_default"
                                                class="text-blue-500 mt-1 text-sm font-normal leading-[18px] italic">
<<<<<<< HEAD
                                                Default Address</div>
=======
                                                {{ $t('Default Address') }}
                                            </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                        </div>
                                    </label>

                                </div>
                                <!-- End Address List -->

                                <!-- New Address Button -->
                                <button
                                    class="px-6 py-4 rounded-[10px] border border-primary flex justify-center items-center w-full mt-6 text-primary hover:bg-primary hover:text-white gap-1"
                                    @click="addressModalShow()">
                                    <PlusIcon class="w-5 h-5" />
                                    <div class="text-base font-medium leading-normal">
<<<<<<< HEAD
                                        New Address
=======
                                        {{ $t('New Address') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </div>
                                </button>
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
import { XMarkIcon } from '@heroicons/vue/24/outline';
import { MapPinIcon, PlusIcon } from '@heroicons/vue/24/solid';
import { useAuth } from '../stores/AuthStore';
import { useBaskerStore } from '../stores/BasketStore';

const authStore = useAuth();
const basketStore = useBaskerStore();
=======
import { Dialog, DialogPanel, TransitionChild, TransitionRoot } from '@headlessui/vue';
import { XMarkIcon } from '@heroicons/vue/24/outline';
import { MapPinIcon, PlusIcon } from '@heroicons/vue/24/solid';
import { useAuth } from '../stores/AuthStore';
import { useBasketStore } from '../stores/BasketStore';

const authStore = useAuth();
const basketStore = useBasketStore();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

const addressModalShow = () => {
    authStore.showChangeAddressModal = false;
    authStore.showAddressModal = true;
}

</script>

<style lang="scss" scoped></style>
