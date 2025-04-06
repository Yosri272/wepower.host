<template>
    <div class="main-container pt-8 pb-12">

<<<<<<< HEAD
        <div class="text-slate-800 text-lg lg:text-3xl font-bold">Most Popular</div>

        <!-- Products -->
        <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-6  gap-3 sm:gap-6 items-start mt-6">
            <div v-for="product in products" :key="product.id" class="w-full">
                <ProductCard :product="product" />
            </div>
            <div v-if="products.length == 0" class="text-slate-950 text-xl font-medium leading-7">
                No Products Found
=======
        <div v-if="!isLoading" class="text-slate-800 text-lg lg:text-3xl font-bold">
            {{ $t('Most Popular') }}
        </div>
        <!-- loading -->
        <SkeletonLoader v-else class="w-48 sm:w-60 md:w-72 lg:w-96 h-12 rounded-lg" />

        <!-- Products -->
        <div
            class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-6  gap-3 sm:gap-6 items-start mt-6">
            <div v-if="!isLoading" v-for="product in products" :key="product.id" class="w-full">
                <ProductCard :product="product" />
            </div>
            <!-- loading -->
            <div v-else v-for="i in 12" :key="i">
                <SkeletonLoader class="w-full h-[220px] sm:h-[330px] rounded-lg" />
            </div>

            <div v-if="products.length == 0 && !isLoading" class="text-slate-950 text-xl font-medium leading-7">
                {{ $t('No Products Found') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </div>
        </div>

        <!-- Pagination -->
<<<<<<< HEAD
        <div class="flex justify-between items-center w-full mt-8  gap-4 flex-wrap">
            <div class="text-slate-800 text-base font-normal leading-normal">
                Showing {{ (perPage * (currentPage - 1) + 1) }} to {{ (perPage * (currentPage - 1) + products.length) }}
                of {{ totalProducts }} results
            </div>
            <div>
                <vue-awesome-paginate :total-items="totalProducts" :items-per-page="perPage" type="button"
                    :max-pages-shown="5" v-model="currentPage" :on-click="onClickHandler" />
=======
        <div v-if="products.length > 0 && !isLoading" class="flex justify-between items-center w-full mt-8  gap-4 flex-wrap">
            <div class="text-slate-800 text-base font-normal leading-normal">
                {{ $t('Showing') }} {{ (perPage * (currentPage - 1) + 1) }} to {{ (perPage * (currentPage - 1) +
                products.length) }}
                {{ $t('of') }} {{ totalProducts }} {{ $t('results') }}
            </div>
            <div>
                <vue-awesome-paginate :total-items="totalProducts" :items-per-page="perPage" type="button"
                    :max-pages-shown="5" v-model="currentPage" :hide-prev-next-when-ends="true"
                    @click="onClickHandler" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </div>
        </div>

    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
<<<<<<< HEAD
import ProductCard from '../components/ProductCard.vue';


=======
import { useMaster } from '../stores/MasterStore';
import ProductCard from '../components/ProductCard.vue';
import SkeletonLoader from '../components/SkeletonLoader.vue';
import { useAuth } from '../stores/AuthStore';

const authStore = useAuth();

const master = useMaster();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
const currentPage = ref(1);
const perPage = ref(12);

const products = ref([]);
const totalProducts = ref(0);
<<<<<<< HEAD
=======
const isLoading = ref(true);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

onMounted(() => {
    fetchProducts();
    window.scrollTo(0, 0);
});

const onClickHandler = async (page) => {
    currentPage.value = page;
    fetchProducts();
};

const fetchProducts = async () => {
<<<<<<< HEAD
    axios.get('/products', { params: { page: currentPage.value, per_page: perPage.value, sort_type: 'popular' } }).then((response) => {
        totalProducts.value = response.data.data.total;
        products.value = response.data.data.products;
=======
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
    isLoading.value = true;
    axios.get('/products', {
        params: {
            page: currentPage.value,
            per_page: perPage.value,
            sort_type: 'popular_product'
        },
        headers: {
            'Accept-Language': master.locale || 'en',
            Authorization: authStore.token
        }
    }).then((response) => {
        totalProducts.value = response.data.data.total;
        products.value = response.data.data.products;
        setTimeout(() => {
            isLoading.value = false;
        }, 300);
    }).catch((error) => {
        isLoading.value = false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    })
};

</script>
