<template>
    <div>

        <!-- Header -->
<<<<<<< HEAD
        <AuthPageheader title="Order History" />
=======
        <AuthPageHeader title="Order History" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        <!-- Order Status -->
        <div class="bg-white px-3 border-t border-slate-100 flex gap-4 md:gap-8 overflow-x-auto">

            <label class="statusLinkBtn" for="Pending">
                <input type="radio" v-model="orderStatus" name="status" class="sr-only" value="Pending" id="Pending" checked />
<<<<<<< HEAD
                Pending ({{ statusWiseOrders.pending }})
=======
                {{ $t('Pending') }} ({{ statusWiseOrders.pending }})
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </label>

            <label class="statusLinkBtn" for="Confirm">
                <input type="radio" v-model="orderStatus" name="status" class="sr-only" value="Confirm" id="Confirm" />
<<<<<<< HEAD
                Confirm ({{ statusWiseOrders.confirm }})
=======
                {{ $t('Confirm') }} ({{ statusWiseOrders.confirm }})
            </label>

            <label class="statusLinkBtn" for="Pickup">
                <input type="radio" v-model="orderStatus" name="status" class="sr-only" value="Pickup" id="Pickup" />
                {{ $t('Pickup') }} ({{ statusWiseOrders.pickup }})
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </label>

            <label class="statusLinkBtn" for="Processing">
                <input type="radio" v-model="orderStatus" name="status" class="sr-only" value="Processing" id="Processing" />
<<<<<<< HEAD
                Processing ({{ statusWiseOrders.processing }})
=======
                {{ $t('Processing') }} ({{ statusWiseOrders.processing }})
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </label>

            <label class="statusLinkBtn" for="OnTheWay">
                <input type="radio" v-model="orderStatus" name="status" class="sr-only" value="On The Way" id="OnTheWay" />
<<<<<<< HEAD
                On The Way ({{ statusWiseOrders.on_the_way }})
=======
                {{ $t('On The Way') }} ({{ statusWiseOrders.on_the_way }})
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </label>

            <label class="statusLinkBtn" for="delivered">
                <input type="radio" v-model="orderStatus" name="status" class="sr-only" value="Delivered" id="delivered" />
<<<<<<< HEAD
                Delivered ({{ statusWiseOrders.delivered }})
=======
                {{ $t('Delivered') }} ({{ statusWiseOrders.delivered }})
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </label>

            <label class="statusLinkBtn" for="Cancelled">
                <input type="radio" v-model="orderStatus" name="status" class="sr-only" value="cancelled" id="Cancelled" />
<<<<<<< HEAD
                Cancelled ({{ statusWiseOrders.cancelled }})
=======
                {{ $t('Cancelled') }} ({{ statusWiseOrders.cancelled }})
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </label>

            <label class="statusLinkBtn" for="All">
                <input type="radio" v-model="orderStatus" name="status" class="sr-only" value="" id="All" />
<<<<<<< HEAD
                All ({{ statusWiseOrders.all }})
=======
                {{ $t('All') }} ({{ statusWiseOrders.all }})
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </label>

        </div>

        <!-- Order History -->
        <div class="px-2 pt-2 md:px-4 md:pt-4 lg:px-6 lg:pt-6">
            <div class="p-4 lg:p-6 bg-white rounded-xl flex flex-col gap-3">

                <!-- Order Item -->
                <div v-for="order in orders" :key="order.id">
                    <OrderHistoryOrderItem :order="order" />
                </div>

                <!-- Order list empty -->
                <div v-if="orders.length == 0">
<<<<<<< HEAD
                    <p>No Order Found</p>
=======
                    <p>{{ $t('No Order Found') }}</p>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                </div>

            </div>
        </div>

<<<<<<< HEAD
        <!-- paginations -->
        <div v-if="totalItems > perPage" class="px-2 md:px-4 lg:px-6 mt-4">
            <div class="bg-white p-3 rounded-xl flex justify-between items-center w-full  gap-4 flex-wrap">
                <div class="text-slate-800 text-base font-normal leading-normal">
                    Showing {{ perPage * (currentPage - 1) + 1 }} to {{ perPage * (currentPage - 1) +
                    orders.length }} of {{ totalItems }} results
                </div>
                <div>
                    <vue-awesome-paginate :total-items="totalItems" :items-per-page="perPage" type="button"
                        :max-pages-shown="3" v-model="currentPage" :on-click="onClickHandler" />
=======
        <!-- pagination's -->
        <div v-if="totalItems > perPage" class="px-2 md:px-4 lg:px-6 mt-4">
            <div class="bg-white p-3 rounded-xl flex justify-between items-center w-full  gap-4 flex-wrap">
                <div class="text-slate-800 text-base font-normal leading-normal">
                    {{ $t('Showing') }} {{ perPage * (currentPage - 1) + 1 }} {{ $t('to') }} {{ perPage * (currentPage - 1) +
                    orders.length }} {{ $t('of') }} {{ totalItems }} {{ $t('results') }}
                </div>
                <div>

                    <vue-awesome-paginate :total-items="totalItems" :items-per-page="perPage" type="button"
                        :max-pages-shown="3" v-model="currentPage" :hide-prev-next-when-ends="true" @click="onClickHandler" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                </div>
            </div>
        </div>

    </div>
</template>

<script setup>
<<<<<<< HEAD
import { ref, onMounted, watch } from 'vue';
import AuthPageheader from '../components/AuthPageheader.vue';
import OrderHistoryOrderItem from '../components/OrderHistoryOrderItem.vue';

=======
import { onMounted, ref, watch } from 'vue';
import AuthPageHeader from '../components/AuthPageHeader.vue';
import OrderHistoryOrderItem from '../components/OrderHistoryOrderItem.vue';

import { useRouter } from 'vue-router';
const router = useRouter();

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
import { useAuth } from '../stores/AuthStore';
const authStore = useAuth();
const orderStatus = ref('Pending');

const orders = ref([]);

const totalItems = ref(20);
const currentPage = ref(1);
const perPage = ref(10);

const statusWiseOrders = ref({
    all: 0,
    pending: 0,
    confirm: 0,
    processing: 0,
<<<<<<< HEAD
=======
    pickup: 0,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    on_the_way: 0,
    delivered: 0,
    cancelled: 0
});

const onClickHandler = (page) => {
    currentPage.value = page;
    fetchOrders();
};

watch(orderStatus, () => {
    currentPage.value = 1;
    fetchOrders();
});

onMounted(() => {
    fetchOrders();
});

const fetchOrders = async () => {
    axios.get('/orders', {
        params: {
            order_status: orderStatus.value,
            page: currentPage.value,
            per_page: perPage.value
        },
        headers: {
            Authorization: authStore.token,
        }
    }).then((response) => {
        totalItems.value = response.data.data.total;
        orders.value = response.data.data.orders;
        statusWiseOrders.value = response.data.data.status_wise_orders;
<<<<<<< HEAD
    })
=======
    }).catch((error) => {
        if (error.response.status === 401) {
            authStore.token = null;
            authStore.user = null;
            authStore.addresses = [];
            authStore.favoriteProducts = 0;
            router.push('/');
        }
    });
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
};

</script>
<style scoped>
    .statusLinkBtn{
        @apply py-4 border-b-2 relative has-[:checked]:text-primary text-base font-normal leading-normal has-[:checked]:border-primary cursor-pointer border-transparent shrink-0;
    }
</style>
