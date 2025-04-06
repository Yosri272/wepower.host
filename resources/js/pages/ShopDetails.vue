<template>
    <div class="">
        <div class="h-56 md:h-64 w-full">
<<<<<<< HEAD
            <img :src="shop?.banner" loading="lazy" class="w-full h-full object-cover" />
        </div>

        <div class="main-container relative py-10 pt-24">

            <!-- Shop Details -->
            <div class="-top-32 sm:-top-28 lg:-top-[108px] absolute left-0 right-0 main-container">
                <div class="w-full p-6 bg-white rounded-2xl shadow flex-col gap-2 sm:gap-6 flex">
=======
            <img v-if="!isLoading" :src="shop?.banner" loading="lazy" class="w-full h-full object-cover" />

            <!-- loading -->
            <SkeletonLoader v-else class="w-full h-full" />
        </div>

        <div class="main-container relative bg-primary-50 py-10 pt-24">
            <!-- Shop Details -->
            <div class="-top-32 sm:-top-28 lg:-top-[108px] absolute left-0 right-0 main-container">
                <div v-if="!isLoading" class="w-full p-6 bg-white rounded-2xl shadow flex-col gap-2 sm:gap-6 flex">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

                    <div class="flex justify-between w-full gap-3 sm:gap-6 flex-wrap sm:flex-nowrap">
                        <div class="flex grow gap-6">
                            <div class="w-16 h-16 md:w-[88px] md:h-[88px] rounded-full overflow-hidden shrink-0">
                                <img :src="shop?.logo" loading="lazy" class="w-full h-full object-cover" />
                            </div>

                            <div class="flex flex-col items-start gap-2">

                                <div class="flex justify-start items-center w-full gap-2">
                                    <!-- Shop Name -->
                                    <div class="text-slate-950 text-lg font-bold leading-normal tracking-tight">
                                        {{ shop?.name }}
                                    </div>
                                    <!-- Status -->
<<<<<<< HEAD
                                    <div
                                        class="px-1 py-0.5 bg-lime-600 rounded-[10px] text-white text-xs font-normal leading-none">
=======
                                    <div class="px-1 py-0.5 rounded-[10px] text-white text-xs font-normal leading-none"
                                        :class="shop?.shop_status === 'Online' ? 'bg-lime-600' : 'bg-slate-500'">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                        {{ shop?.shop_status }}
                                    </div>
                                </div>

                                <div class="flex justify-start items-center gap-4">
                                    <!-- Items -->
                                    <div class="text-slate-500 text-base font-normal leading-normal">
<<<<<<< HEAD
                                        {{ shop?.total_products }}+ Items
                                    </div>

                                    <div class="h-3 w-[0px] border text-slate-300"></div>

                                    <!-- Categorise -->
                                    <div class="text-slate-500 text-base font-normal leading-normal text-center">
                                        {{ shop?.total_categories }}+ Categorise
=======
                                        {{ shop?.total_products }}+ {{ $t('Items') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </div>
                                </div>

                                <!-- short description -->
                                <div class="text-slate-500 text-sm font-normal leading-tight">
                                    <div v-html="shop?.description"></div>
                                </div>

                            </div>
                        </div>

                        <!-- Rating -->
                        <div
                            class="sm:border-l border-slate-200 w-full sm:w-[156px] md:w-[184px] flex flex-row-reverse sm:flex-col justify-center sm:justify-start items-center gap-2">
                            <div class="flex gap-1">
                                <div class="text-slate-800 text-base font-bold leading-normal">
                                    {{ shop?.rating?.toFixed(1) }}
                                </div>
                                <div class="text-slate-500 text-base font-normal leading-normal">
                                    ({{ shop?.total_reviews }})
                                </div>
                            </div>
                            <div class="flex">
                                <StarIcon v-for="i in 5" :key="i" class="w-4 h-4"
                                    :class="i <= shop?.rating ? 'text-amber-500' : 'text-gray-300'" />
                            </div>
                        </div>
                    </div>

                    <!-- Buttons and search -->
                    <div class="flex justify-between items-center w-full">
                        <div>
<<<<<<< HEAD
                            <Button class="px-4 py-3 rounded-[10px] text-base font-normal leading-normal"
                                :class="productTab ? 'text-white bg-primary' : 'text-slate-600'"
                                @click="productTab = true; reviewTab = false; categoryTab = false">
                                All Products
                            </Button>

                            <Button class="px-4 py-3 rounded-[10px] text-base font-normal leading-normal"
                                :class="categoryTab ? 'text-white bg-primary' : 'text-slate-600'"
                                @click="showCategoryTab()">
                                Categories
                            </Button>

                            <Button class="px-4 py-3 rounded-[10px] text-base font-normal leading-normal"
                                :class="reviewTab ? 'text-white bg-primary' : 'text-slate-600'" @click="showReviewTab">
                                Reviews
                            </Button>
                        </div>
                        <!-- Search input -->
                        <div class="lg:w-[448px] relative hidden sm:block">
                            <input type="text" placeholder="Search in store"
                                class="p-3 pr-10 bg-slate-100 rounded-lg border border-slate-200 w-full outline-none focus:border-primary transition duration-300"
                                v-model="search" />
=======
                            <button class="px-4 py-3 rounded-[10px] text-base font-normal leading-normal"
                                :class="productTab ? 'text-white bg-primary' : 'text-slate-600'"
                                @click="productTab = true; reviewTab = false;">
                                {{ $t('All Products') }}
                            </button>

                            <button class="px-4 py-3 rounded-[10px] text-base font-normal leading-normal"
                                :class="reviewTab ? 'text-white bg-primary' : 'text-slate-600'" @click="showReviewTab">
                                {{ $t('Reviews') }}
                            </button>
                        </div>
                        <!-- Search input -->
                        <div class="lg:w-[448px] relative hidden sm:block">
                            <input type="text" :placeholder="$t('Search product')"
                                class="p-3 pr-10 bg-slate-100 rounded-lg border border-slate-200 w-full outline-none focus:border-primary transition duration-300"
                                v-model="search" @input="searchProducts()" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            <MagnifyingGlassIcon
                                class="w-6 h-6 absolute top-1/2 right-3 -translate-y-1/2 text-slate-400" />
                        </div>

                    </div>
                </div>
<<<<<<< HEAD
            </div>

            <!-- banners -->
            <div class="pt-10">
                <swiper :breakpoints="breakpoints" :spaceBetween="30" :freeMode="true" :modules="modules">
                    <swiper-slide v-for="banner in shop?.banners" :key="banner.id">
                        <img :src="banner.thumbnail" alt="banner" loading="lazy" class="aspect-[6/2] rounded-xl">
                    </swiper-slide>
                </swiper>
            </div>

            <!-- Products , Categories and Reviews -->
=======

                <!-- loading -->
                <SkeletonLoader v-else class="w-full h-48 p-6 rounded-2xl" />
            </div>

            <!-- banners -->
            <div class="pt-10 ">
                <swiper :breakpoints="breakpoints" :spaceBetween="30" :freeMode="true" :modules="modules">
                    <swiper-slide v-if="!isLoading" v-for="banner in shop?.banners" :key="banner.id">
                        <img :src="banner.thumbnail" alt="banner" loading="lazy" class="aspect-[6/2] rounded-xl object-cover">
                    </swiper-slide>

                    <!-- loading -->
                    <swiper-slide v-else v-for="i in 3" :key="i">
                        <SkeletonLoader class="w-full h-32 rounded-xl" />
                    </swiper-slide>
                </swiper>
            </div>
        </div>

        <div class="main-container py-10 pt-24">

            <!-- Products and Reviews -->
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            <div class="mt-12">

                <!-- Products -->
                <div v-if="productTab" class="w-full">
<<<<<<< HEAD
                    <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-3 md:gap-6 items-start">
                        <div v-for="product in products" :key="product.id" class="w-full">
                            <ProductCard :product="product" />
                        </div>
                        <div v-if="products.length == 0" class="text-slate-950 text-xl font-medium leading-7">
                            No Products Found
                        </div>
                    </div>

                    <div class="flex justify-between items-center w-full mt-8  gap-4 flex-wrap">
                        <div class="text-slate-800 text-base font-normal leading-normal">
                            Showing {{ (perPage * (currentPage - 1) + 1) }} to {{ (perPage * (currentPage - 1) + products.length) }} of {{ totalProducts }} results
                        </div>
                        <div>
                            <vue-awesome-paginate :total-items="totalProducts" :items-per-page="perPage" type="button"
                                :max-pages-shown="5" v-model="currentPage" :on-click="onClickHandler" />
=======
                    <div
                        class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-3 md:gap-6 items-start">
                        <div v-if="!isLoadingProducts" v-for="product in products" :key="product.id" class="w-full">
                            <ProductCard :product="product" />
                        </div>

                        <div v-else v-for="i in 12" :key="i" class="w-full">
                            <SkeletonLoader class="w-full h-[220px] sm:h-[330px] rounded-lg" />
                        </div>
                    </div>

                    <div v-if="products.length == 0 && !isLoadingProducts"
                        class="text-slate-950 text-xl font-medium leading-7">
                        {{ $t('No Products Found') }}
                    </div>

                    <div v-if="products.length > 0 && !isLoadingProducts"
                        class="flex justify-between items-center w-full mt-8  gap-4 flex-wrap">
                        <div class="text-slate-800 text-base font-normal leading-normal">
                            {{ $t('Showing') }} {{ (perPage * (currentPage - 1) + 1) }} {{ $t('to') }} {{ (perPage *
                                (currentPage - 1) +
                                products.length) }} {{ $t('of') }} {{ totalProducts }} {{ $t('results') }}
                        </div>
                        <div>
                            <vue-awesome-paginate :total-items="totalProducts" :items-per-page="perPage" type="button"
                                :max-pages-shown="5" v-model="currentPage" :hide-prev-next-when-ends="true"
                                @click="onClickHandler" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </div>
                    </div>

                </div>

<<<<<<< HEAD
                <!-- Categories -->
                <div v-if="categoryTab" class="w-full">
                    <div
                        class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 xl:grid-cols-6 2xl:grid-cols-7 gap-6 items-start">

                        <div v-for="category in categories" :key="category.id" class="w-full">
                            <router-link :to="`/shops/${shop.id}/categories/${category.slug}`" class="w-full">
                                <CategoryCard :category="category" />
                            </router-link>
                        </div>

                    </div>
                </div>

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                <!-- Reviews -->
                <div v-if="reviewTab" class="w-full">
                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-8 items-start">
                        <!-- Rating and Review -->
                        <div>
                            <div class="text-slate-950 text-xl font-medium leading-7">
<<<<<<< HEAD
                                Rating and Review
                            </div>
                            <ReviewRatings :reviewRatings="avarageRatings?.percentages"
                                :avarageRating="avarageRatings?.rating" :totalReview="totalReviews" />
=======
                                {{ $t('Rating and Review') }}
                            </div>
                            <ReviewRatings :reviewRatings="averageRatings?.percentages"
                                :averageRating="averageRatings?.rating" :totalReview="totalReviews" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </div>

                        <!-- Reviews -->
                        <div>
<<<<<<< HEAD
                            <div class="text-slate-950 text-xl font-medium leading-7">Reviews</div>

                            <div class="mt-4">

                                <div v-for="review in reviews" :key="review.id" class="mb-4">
                                    <Review :review="review" />
                                </div>

                                <!-- paginations -->
                                <div class="flex justify-between items-center w-full mt-8  gap-4 flex-wrap">
                                    <div class="text-slate-800 text-base font-normal leading-normal">
                                        Showing {{ (reviewPerPage * (reviewPage - 1) + 1) }} to {{ (reviewPerPage *
                (reviewPage - 1) + reviews.length) }} of {{ totalReviews }} results
=======
                            <div class="text-slate-950 text-xl font-medium leading-7">
                                {{ $t('Reviews') }}
                            </div>

                            <div class="mt-4">

                                <div v-if="!isLoadingReviews" v-for="review in reviews" :key="review.id" class="mb-4">
                                    <Review :review="review" />
                                </div>

                                <!-- loading -->
                                <div v-else v-for="i in 6" :key="i" class="mb-4">
                                    <div class="w-full flex gap-3 items-center">
                                        <SkeletonLoader class="w-16 h-16 rounded-full shrink-0" />
                                        <div class="w-full space-y-2">
                                            <SkeletonLoader class="w-full h-2.5 rounded-lg" />
                                            <SkeletonLoader class="w-11/12 h-2.5 rounded-lg" />
                                            <SkeletonLoader class="w-10/12 h-2.5 rounded-lg" />
                                        </div>
                                    </div>
                                </div>

                                <!-- pagination's -->
                                <div v-if="!isLoadingReviews && reviews.length > 0"
                                    class="flex justify-between items-center w-full mt-8  gap-4 flex-wrap">
                                    <div class="text-slate-800 text-base font-normal leading-normal">
                                        {{ $t('Showing') }} {{ (reviewPerPage * (reviewPage - 1) + 1) }} {{ $t('to') }}
                                        {{ (reviewPerPage *
                                            (reviewPage - 1) + reviews.length) }} {{ $t('of') }} {{ totalReviews }} {{
                                            $t('results') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </div>
                                    <div>
                                        <vue-awesome-paginate :total-items="totalReviews"
                                            :items-per-page="reviewPerPage" type="button" :max-pages-shown="3"
<<<<<<< HEAD
                                            v-model="reviewPage" :on-click="reviewPagination" />
=======
                                            v-model="reviewPage" :hide-prev-next-when-ends="true"
                                            @click="reviewPagination" />
                                    </div>
                                </div>
                                <div v-if="reviews.length == 0 && !isLoadingReviews">
                                    <div class="text-slate-700 text-xl font-medium leading-7 italic">
                                        {{ $t('No Reviews Found') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </div>
                                </div>

                            </div>
<<<<<<< HEAD

                        </div>

=======
                        </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
<<<<<<< HEAD
import { useRoute } from 'vue-router';
=======
import { useRoute, useRouter } from 'vue-router';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
import { StarIcon, MagnifyingGlassIcon } from '@heroicons/vue/24/solid';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { FreeMode } from 'swiper/modules';
import ProductCard from '../components/ProductCard.vue';
<<<<<<< HEAD
import CategoryCard from '../components/CategoryCard.vue';
import ReviewRatings from '../components/ReviewRatings.vue';
import Review from '../components/Review.vue';
=======
import ReviewRatings from '../components/ReviewRatings.vue';
import Review from '../components/Review.vue';
import SkeletonLoader from '../components/SkeletonLoader.vue';

import { useMaster } from '../stores/MasterStore';
import { useAuth } from '../stores/AuthStore';

const authStore = useAuth();
const masterStore = useMaster();

const router = new useRouter();
const route = useRoute();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

import 'swiper/css';
import 'swiper/css/free-mode';

<<<<<<< HEAD
const route = useRoute();

const modules = [FreeMode];

const productTab = ref(true);
const categoryTab = ref(false);
=======
const modules = [FreeMode];

const isLoading = ref(true);
const isLoadingProducts = ref(true);
const isLoadingReviews = ref(false);

const productTab = ref(true);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
const reviewTab = ref(false);

const currentPage = ref(1);
const perPage = ref(12);

const onClickHandler = (page) => {
    currentPage.value = page;
    fetchProducts();
};

const reviewPerPage = ref(5);
const reviewPage = ref(1);

const reviewPagination = (page) => {
    reviewPage.value = page;
    fetchReviews();
};

const shop = ref({});

<<<<<<< HEAD
const categories = ref([]);

const products = ref([]);
const totalProducts = ref(0);

const avarageRatings = ref({});
=======
const products = ref([]);
const totalProducts = ref(0);

const averageRatings = ref({});
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
const totalReviews = ref(0);
const reviews = ref([]);

const search = ref('');
<<<<<<< HEAD
const searchProducts = () => {
    currentPage.value = 1;
    productTab.value = true;
    categoryTab.value = false;
    reviewTab.value = false;
    fetchProducts();
};

watch(search, () => {
    searchProducts();
});

onMounted(() => {
=======

let searchTimer = null;
const searchProducts = () => {
    clearTimeout(searchTimer);
    searchTimer = setTimeout(() => {
        currentPage.value = 1;
        productTab.value = true;
        reviewTab.value = false;
        fetchProducts();
    }, 1000);
};

onMounted(() => {
    if (!masterStore.multiVendor) {
        router.push('/');
        return;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    fetchDetails();
    window.scrollTo(0, 0);
    fetchProducts();
});

<<<<<<< HEAD
const showCategoryTab = () => {
    productTab.value = false;
    categoryTab.value = true;
    reviewTab.value = false;
    fetchCategories();
};

const showReviewTab = () => {
    productTab.value = false;
    categoryTab.value = false;
=======
const showReviewTab = () => {
    productTab.value = false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    reviewTab.value = true;
    fetchReviews();
};

const fetchDetails = async () => {
<<<<<<< HEAD
    axios.get('/shops/' + route.params.id).then((response) => {
        shop.value = response.data.data.shop;
=======
    isLoading.value = true;
    axios.get('/shops/' + route.params.id).then((response) => {
        shop.value = response.data.data.shop;
        setTimeout(() => {
            isLoading.value = false;
        }, 200);
    }).catch((error) => {
        isLoading.value = false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    })
};

const fetchProducts = async () => {
<<<<<<< HEAD
    axios.get('/products', { params: { shop_id: route.params.id, page: currentPage.value, per_page: perPage.value, search: search.value } }).then((response) => {
        totalProducts.value = response.data.data.total;
        products.value = response.data.data.products;
    })
};

const fetchCategories = async () => {
    if (categories.value.length === 0) {
        axios.get('/shop-categories', { params: { shop_id: route.params.id } }).then((response) => {
            categories.value = response.data.data.categories;
        });
    }
};

const fetchReviews = async () => {
    axios.get('/reviews', { params: { shop_id: route.params.id, page: reviewPage.value, per_page: reviewPerPage.value } }).then((response) => {
        totalReviews.value = response.data.data.total;
        reviews.value = response.data.data.reviews;
        avarageRatings.value = response.data.data.average_rating_percentage;
=======
    isLoadingProducts.value = true;
    axios.get('/products', {
        params: {
            shop_id: route.params.id,
            page: currentPage.value,
            per_page: perPage.value,
            search: search.value
        },
        headers: {
            'Accept-Language': masterStore.locale || 'en',
            Authorization: authStore.token
        }
    }).then((response) => {
        totalProducts.value = response.data.data.total;
        products.value = response.data.data.products;
        isLoadingProducts.value = false;
    }).catch((error) => {
        isLoadingProducts.value = false;
    })
};

const fetchReviews = async () => {
    isLoadingReviews.value = true;
    axios.get('/reviews', {
        params: {
            shop_id: route.params.id,
            page: reviewPage.value,
            per_page: reviewPerPage.value
        }
    }).then((response) => {
        totalReviews.value = response.data.data.total;
        reviews.value = response.data.data.reviews;
        averageRatings.value = response.data.data.average_rating_percentage;
        isLoadingReviews.value = false;
    }).catch((error) => {
        isLoadingReviews.value = false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    })
};

const breakpoints = {
    320: {
        slidesPerView: 1,
        spaceBetween: 10
    },
    768: {
        slidesPerView: 2,
        spaceBetween: 10
    },
    1024: {
        slidesPerView: 2,
        spaceBetween: 30
    },

    1280: {
        slidesPerView: 3,
        spaceBetween: 30
    }
};

</script>
