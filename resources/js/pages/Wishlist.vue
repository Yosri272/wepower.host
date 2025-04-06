<template>
    <div>
        <!-- Header -->
<<<<<<< HEAD
        <AuthPageheader :title="'Wishlist (' + authStore.favoriteProducts + ')'" />
=======
        <AuthPageHeader :title="'Wishlist (' + authStore.favoriteProducts + ')'" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        <div class="p-3 md:p-4 xl:p-6">

            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6 items-start">
                <ProductCard v-for="product in products" :key="product.id" :product="product" />
            </div>

            <div v-if="products.length == 0"
                class="p-3 md:p-4 xl:p-6 bg-white rounded-lg md:rounded-2xl border border-slate-100 italic">
<<<<<<< HEAD
                Wishlist is empty
=======
                {{ $t('Wishlist is empty') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </div>

        </div>

    </div>
</template>

<script setup>
<<<<<<< HEAD
import { ref, onMounted, watch } from "vue";
import AuthPageheader from "../components/AuthPageheader.vue";
=======
import { onMounted, ref, watch } from "vue";
import AuthPageHeader from "../components/AuthPageHeader.vue";
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
import ProductCard from "../components/ProductCard.vue";

import { useAuth } from "../stores/AuthStore";

<<<<<<< HEAD
import { useRoute } from 'vue-router';
const route = useRoute();

=======
import { useRoute, useRouter } from 'vue-router';
const route = useRoute();
const router = useRouter();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
const authStore = useAuth();

const products = ref([]);

<<<<<<< HEAD

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
watch(() => authStore.favoriteProducts, () => {
    if (route.name === 'wishlist') {
        fetchProducts();
    }
});

onMounted(() => {
    fetchProducts();
});

const fetchProducts = async () => {
    axios.get('/favorite-products', {
        headers: {
            Authorization: authStore.token,
        }
    }).then((response) => {
        products.value = response.data.data.products;
<<<<<<< HEAD
=======
        authStore.favoriteProducts = response.data.data.products?.length ?? 0;
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
