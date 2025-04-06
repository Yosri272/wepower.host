<template>
    <div>
        <div class="bg-white px-3 text-slate-600 flex items-center gap-1 pt-2">
            <HomeIcon class="w-5 h-5 md:w-6 md:h-6" />
            <router-link to="/order-history" class="leading-normal hover:text-primary">
<<<<<<< HEAD
                Order History
            </router-link>
            <span class="leading-normal">/ Order Details</span>
        </div>

        <!-- Header -->
        <AuthPageheader title="Order Details" />
=======
                {{ $t('Order History') }}
            </router-link>
            <span class="leading-normal">/ {{ $t('Order Details') }}</span>
        </div>

        <!-- Header -->
        <AuthPageHeader :title="$t('Order Details')" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        <!-- Order details -->
        <div class="px-2 pt-2 md:px-4 md:pt-4 lg:px-6 lg:pt-6">
            <OrderDetailsOrderStatus :order="order" />

            <div class="grid grid-cols-3 gap-4 md:gap-6 mt-4 p-3 md:p-4 xl:p-6 bg-white rounded-lg md:rounded-2xl">
                <!-- column 1 -->
                <div
                    class="col-span-3 lg:col-span-2 bg-white rounded-lg md:rounded-2xl border border-slate-100 p-3 md:p-4 xl:p-6">

                    <div class="text-slate-500 text-xs md:text-base font-normal leading-none">
<<<<<<< HEAD
                        Purchased from
=======
                        {{ $t('Purchased from') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </div>
                    <div class="flex items-center gap-3 mt-2">
                        <img class="w-9 h-9 md:w-12 md:h-12" :src="order.shop?.logo" />
                        <div class="flex flex-wrap gap-2 justify-between items-start grow">
                            <div>
                                <div class="text-slate-950 text-sm md:text-base font-normal leading-tight">
                                    {{ order.shop?.name }}
                                </div>
                                <div class="flex items-center gap-1">
                                    <StarIcon class="w-5 h-5 text-yellow-400" />
                                    <span class="text-slate-800 text-xs md:text-base font-medium">{{ order.shop?.rating
                                        }}</span>
                                </div>
                            </div>
<<<<<<< HEAD

                            <!-- <button
                                class="text-primary text-xs md:text-sm font-normal leading-tight px-2 py-1 rounded-lg border border-primary">
                                Rate the Seller
                            </button> -->
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </div>
                    </div>

                    <div class="w-full h-[0px] border-t border-slate-200 my-3"></div>

                    <div class="text-slate-600 text-sm md:text-base font-normal leading-tight">
<<<<<<< HEAD
                        Products ({{ order.products?.length }})
                    </div>

                    <OrderProducts :order="order" />
=======
                        {{ $t('Products') }} ({{ order.products?.length }})
                    </div>

                    <OrderProducts :order="order" @refresh="fetchOrderDetails"/>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                </div>

                <!-- column 2 -->
                <div class="col-span-3 lg:col-span-1">

                    <OrderDetailsSummery :order="order" @update:paymentSuccess="fetchOrderDetails"/>

                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
<<<<<<< HEAD
import { ref, onMounted, watch } from "vue";
import { HomeIcon } from "@heroicons/vue/24/outline";
import { StarIcon } from "@heroicons/vue/24/solid";
import AuthPageheader from "../components/AuthPageheader.vue";
import OrderDetailsOrderStatus from "../components/OrderDetailsOrderStatus.vue";
import OrderProducts from "../components/OrderProducts.vue";
import OrderDetailsSummery from "../components/OrderDetailsSummery.vue";
import { useRoute } from 'vue-router';
=======
import { HomeIcon } from "@heroicons/vue/24/outline";
import { StarIcon } from "@heroicons/vue/24/solid";
import { onMounted, ref, watch } from "vue";
import { useRoute, useRouter } from 'vue-router';
import AuthPageHeader from "../components/AuthPageHeader.vue";
import OrderDetailsOrderStatus from "../components/OrderDetailsOrderStatus.vue";
import OrderDetailsSummery from "../components/OrderDetailsSummery.vue";
import OrderProducts from "../components/OrderProducts.vue";
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

import { useAuth } from "../stores/AuthStore";
const authStore = useAuth();
const route = useRoute();
<<<<<<< HEAD
=======
const router = useRouter();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

const order = ref({});

watch(() => authStore.orderCancel, () => {
    if (authStore.orderCancel == true) {
        fetchOrderDetails();
    }
    authStore.orderCancel = false;
});

onMounted(() => {
    fetchOrderDetails();
    window.scrollTo(0, 0, { behavior: 'smooth' });
});

const fetchOrderDetails = async () => {
    axios.get('/order-details', {
        params: { order_id: route.params.id },
        headers: {
            Authorization: authStore.token,
        }
    }).then((response) => {
        order.value = response.data.data.order;
<<<<<<< HEAD
=======
    }).catch((error) => {
        if (error.response.status === 401) {
            authStore.token = null;
            authStore.user = null;
            authStore.addresses = [];
            authStore.favoriteProducts = 0;
            router.push('/');
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    });
};


</script>
