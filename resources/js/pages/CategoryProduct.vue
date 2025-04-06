<template>
    <div>
        <div class="main-container py-4 bg-slate-100">

            <!-- Flash Sale Banner -->
            <!-- <div class="p-3 xl:p-6 flex-col sm:flex-row justify-center items-center gap-1 sm:gap-8 flex rounded-xl mb-3"
                style="background: linear-gradient(90deg, #8B5CF6 0%, #C622FF 36.81%, #5C87F6 75.35%, #8B5CF6 100%);">

                <div class="text-center text-white sm:text-3xl font-bold sm:leading-9">
                    Deal of the Day
                </div>

                <div class="flex justify-center items-center gap-2 xl:gap-4">
                    <div class="text-center text-white text-lg font-normal leading-7 tracking-tight">Ending in</div>

                    Time counter
                    <div class="flex justify-center items-center gap-2 text-white">
                        <div class="w-8 h-8 sm:w-11 sm:h-11 bg-white rounded-full justify-center items-center flex">
                            <span class="text-primary text-lg font-medium">06</span>
                        </div>:
                        <div class="w-8 h-8 sm:w-11 sm:h-11 bg-white rounded-full justify-center items-center flex">
                            <span class="text-primary text-lg font-medium">42</span>
                        </div>:
                        <div class="w-8 h-8 sm:w-11 sm:h-11 bg-white rounded-full justify-center items-center flex">
                            <span class="text-primary text-lg font-medium">19</span>
                        </div>
                    </div>
                </div>
            </div> -->

<<<<<<< HEAD
            <div
                class="w-full p-2 sm:p-4 bg-white rounded-lg sm:rounded-xl md:rounded-2xl flex gap-3 md:gap-6 items-center justify-between">
                <!-- Back -->
                <router-link to="/" class="py-2 flex gap-1 sm:gap-2 items-center justify-center">
                    <ArrowLeftIcon class="w-4 h-4 sm:w-6 sm:h-6 text-slate-600" />
                    <div class="text-slate-600 text-sm sm:text-base font-normal leading-normal">Back</div>
                </router-link>

                <!-- Categorories slider -->
=======
            <div v-if="!isLoading" class="w-full p-2 sm:p-4 bg-white rounded-lg sm:rounded-xl md:rounded-2xl flex gap-3 md:gap-6 items-center justify-between">
                <!-- Back -->
                <router-link to="/" class="py-2 flex gap-1 sm:gap-2 items-center justify-center">
                    <ArrowLeftIcon class="w-4 h-4 sm:w-6 sm:h-6 text-slate-600" />
                    <div class="text-slate-600 text-sm sm:text-base font-normal leading-normal">
                        {{ $t("Back") }}
                    </div>
                </router-link>

                <!-- Categories slider -->
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                <div class="grow overflow-x-auto">
                    <swiper :slidesPerView="'auto'" :spaceBetween="16" class="categorySwiper">

                        <swiper-slide>
                            <div class="p-2 sm:px-4 sm:py-3 rounded-md sm:rounded-[10px] border text-base font-normal leading-normal hover:text-primary cursor-pointer transition duration-300"
                                :class="!route.query.subcategory ? 'text-primary border-primary' : 'border-slate-200 text-slate-600'"
                                @click="$router.push(`/categories/${route.params.slug}`)">
<<<<<<< HEAD
                                All
=======
                                {{ $t("All") }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </div>
                        </swiper-slide>

                        <swiper-slide v-for="subcategory in subcategories" :key="subcategory.id">
                            <div class="p-2 sm:px-4 sm:py-3 rounded-md sm:rounded-[10px] border text-base font-normal leading-normal hover:text-primary cursor-pointer transition duration-300"
                                :class="(subcategory.id == route.query.subcategory) ? 'text-primary border-primary' : 'border-slate-200 text-slate-600'"
                                @click="$router.push(`/categories/${route.params.slug}?subcategory=${subcategory.id}`)">
                                {{ subcategory.name }}
                            </div>
                        </swiper-slide>

                    </swiper>
                </div>

                <!-- Filter button -->
                <div>
                    <button
                        class="p-2 sm:px-4 sm:py-3 rounded-md sm:rounded-[10px] justify-center items-center gap-2 inline-flex text-sm sm:text-base font-normal leading-normal border-0 outline-none hover:text-primary transition duration-300"
                        :class="hasFilter ? ' bg-primary-200 text-primary' : 'text-slate-600 bg-slate-200'"
<<<<<<< HEAD
                        @click="showfilterCanvas = true">
                        <FunnelIcon class="w-4 h-4 sm:w-6 sm:h-6" />
                        <div class="grow shrink basis-0">
                            Filter
=======
                        @click="showFilterCanvas = true">
                        <FunnelIcon class="w-4 h-4 sm:w-6 sm:h-6" />
                        <div class="grow shrink basis-0">
                            {{ $t('Filter') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </div>
                    </button>
                </div>

            </div>
<<<<<<< HEAD
=======

            <!-- loading -->
            <div v-else class="w-full p-2 md:p-4 bg-white rounded-lg sm:rounded-xl md:rounded-2xl flex gap-3 md:gap-6 items-center justify-between">
                 <SkeletonLoader v-for="i in 2" class="w-24 sm:w-32 md:w-72 lg:w-96 h-12 rounded" />
             </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        </div>

        <div class="main-container py-12">
            <div
                class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-6 items-start">

<<<<<<< HEAD
                <div v-for="product in products" :key="product.id" class="w-full">
                    <ProductCard :product="product" />
                </div>

            </div>
            <div v-if="products.length == 0" class="flex justify-center items-center w-full mt-8">
                <div class="text-slate-800 text-base font-normal leading-normal">
                    No products found
                </div>

            </div>

            <!-- Pagination -->
            <div class="flex justify-between items-center w-full mt-8  gap-4 flex-wrap">
                <div class="text-slate-800 text-base font-normal leading-normal">
                    Showing {{ perPage * (currentPage - 1) + 1 }} to {{ perPage * (currentPage - 1) + products.length }}
                    of {{ totalProducts }} results
                </div>
                <div>
                    <vue-awesome-paginate :total-items="totalProducts" :items-per-page="perPage" type="button"
                        :max-pages-shown="5" v-model="currentPage" :on-click="onClickHandler" />
=======
                <div v-if="!isLoading" v-for="product in products" :key="product.id" class="w-full">
                    <ProductCard :product="product" />
                </div>

                <!-- loading -->
                <div v-else v-for="i in 12" :key="i">
                    <SkeletonLoader class="w-full h-[220px] sm:h-[330px] rounded-lg" />
                </div>
            </div>
            <div v-if="products.length == 0 && !isLoading" class="flex justify-center items-center w-full mt-8">
                <div class="text-slate-800 text-base font-normal leading-normal">
                    {{ $t('No products found') }}
                </div>
            </div>

            <!-- Pagination -->
            <div v-if="products.length > 0 && !isLoading" class="flex justify-between items-center w-full mt-8  gap-4 flex-wrap">
                <div class="text-slate-800 text-base font-normal leading-normal">
                    {{ $t('Showing') }} {{ perPage * (currentPage - 1) + 1 }} to {{ perPage * (currentPage - 1) + products.length }}
                    {{ $t('of') }} {{ totalProducts }} {{ $t('results') }}
                </div>
                <div>
                    <vue-awesome-paginate :total-items="totalProducts" :items-per-page="perPage" type="button"
                        :max-pages-shown="5" v-model="currentPage"
                        :hide-prev-next-when-ends="true"
                        @click="onClickHandler" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                </div>
            </div>
        </div>

        <!-- Filter Canvas Drawer -->
<<<<<<< HEAD
        <TransitionRoot as="template" :show="showfilterCanvas">
            <Dialog as="div" class="relative z-10" @close="showfilterCanvas = false">
=======
        <TransitionRoot as="template" :show="showFilterCanvas">
            <Dialog as="div" class="relative z-10" @close="showFilterCanvas = false">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                <TransitionChild as="template" enter="ease-in-out duration-500" enter-from="opacity-0"
                    enter-to="opacity-100" leave="ease-in-out duration-500" leave-from="opacity-100"
                    leave-to="opacity-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-30 transition-opacity" />
                </TransitionChild>

                <div class="fixed inset-0 overflow-hidden">
                    <div class="absolute inset-0 overflow-hidden">
<<<<<<< HEAD
                        <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                            <TransitionChild as="template"
                                enter="transform transition ease-in-out duration-500 sm:duration-700"
                                enter-from="translate-x-full" enter-to="translate-x-0"
                                leave="transform transition ease-in-out duration-500 sm:duration-700"
                                leave-from="translate-x-0" leave-to="translate-x-full">
=======
                        <div class="pointer-events-none fixed inset-y-0 flex max-w-full" :class="master.langDirection == 'rtl' ? 'left-0 sm:pr-10' : 'right-0 sm:pl-10'">
                            <TransitionChild as="template"
                                enter="transform transition ease-in-out duration-500 sm:duration-700"
                                :enter-from="master.langDirection == 'rtl' ? '-translate-x-full' : 'translate-x-full'" enter-to="translate-x-0"
                                leave="transform transition ease-in-out duration-500 sm:duration-700"
                                leave-from="translate-x-0" :leave-to="master.langDirection == 'rtl' ? '-translate-x-full' : 'translate-x-full'">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                <DialogPanel class="pointer-events-auto relative w-screen max-w-md">
                                    <TransitionChild as="template" enter="ease-in-out duration-500"
                                        enter-from="opacity-0" enter-to="opacity-100" leave="ease-in-out duration-500"
                                        leave-from="opacity-100" leave-to="opacity-0">
                                        <div class="absolute left-0 top-0 -ml-8 flex pr-2 pt-4 sm:-ml-10 sm:pr-4"></div>
                                    </TransitionChild>
                                    <div
                                        class="flex h-full flex-col justify-between overflow-y-scroll bg-white shadow-xl">
                                        <div class="p-4 flex flex-col gap-7">
                                            <div class="flex justify-between items-center">
<<<<<<< HEAD
                                                <div class="text-slate-950 text-xl font-bold leading-loose">Filter</div>
                                                <button
                                                    class="w-8 h-8 flex justify-center items-center bg-slate-100 rounded-full"
                                                    @click="showfilterCanvas = false">
=======
                                                <div class="text-slate-950 text-xl font-bold leading-loose">
                                                    {{ $t("Filter") }}
                                                </div>
                                                <button
                                                    class="w-8 h-8 flex justify-center items-center bg-slate-100 rounded-full"
                                                    @click="showFilterCanvas = false">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                                    <XMarkIcon class="w-5 h-5 text-slate-700" />
                                                </button>
                                            </div>

                                            <!-- Customer Review -->
                                            <div>
                                                <div class="text-slate-950 text-base font-medium leading-normal">
<<<<<<< HEAD
                                                    Customer Review
=======
                                                    {{ $t("Customer Review") }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                                </div>
                                                <!-- Rating -->
                                                <div class="flex flex-col gap-2 mt-3">
                                                    <div v-for="rating in ratings" :key="rating" class="grow">
                                                        <label :for="`rating${rating}`"
                                                            class="cursor-pointer has-[:checked]:border-primary text-slate-800 flex items-center justify-between px-2 py-1.5 bg-white rounded-lg border border-slate-100 gap-1.5">
                                                            <div class="flex items-center gap-1">
                                                                <div class="flex items-center">
<<<<<<< HEAD
                                                                    <StarIcon v-for="i in 5" :key="i" class="w-5 h-5"
                                                                        :class="i <= rating ? 'text-amber-500' : 'text-gray-200'" />
=======
                                                                    <StarIcon v-for="i in 5" :key="i" class="w-5 h-5" :class="i <= rating ? 'text-amber-500': 'text-gray-200'"/>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                                                </div>
                                                                <div class="text-base font-medium leading-normal">
                                                                    {{ rating }}.0
                                                                </div>
                                                            </div>
<<<<<<< HEAD
                                                            <input type="radio" v-model="filterFormData.review"
                                                                :id="`rating${rating}`" name="review" :value="rating"
=======
                                                            <input type="radio" v-model="filterFormData.rating" :id="`rating${rating}`" name="review" :value="rating"
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                                                class="w-5 h-5 appearance-none checked:bg-primary rounded-full border-2 border-slate-300 shrink-0 transition duration-300" />
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Sort by -->
                                            <div>
                                                <div class="text-slate-950 text-base font-medium leading-normal">
<<<<<<< HEAD
                                                    Sort by
                                                </div>

                                                <select v-model="filterFormData.shortBy"
                                                    class="w-full mt-1 p-3 rounded bg-transparent border border-gray-100 outline-none">
                                                    <option v-for="shortBy in filterSortBy" :key="shortBy"
                                                        :value="shortBy.value">{{ shortBy.name }}</option>
=======
                                                    {{ $t('Sort by') }}
                                                </div>

                                                <select v-model="filterFormData.sort_type"
                                                    class="w-full mt-1 p-3 rounded bg-transparent border border-gray-100 outline-none">
                                                    <option v-for="shortBy in filterSortBy" :key="shortBy"
                                                        :value="shortBy.value">
                                                        {{ shortBy.name }}
                                                    </option>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                                </select>
                                            </div>

                                            <div>
                                                <div class="flex justify-between items-center gap-2">
                                                    <div class="text-slate-950 text-base font-medium leading-normal">
<<<<<<< HEAD
                                                        Product
                                                        Price</div>
                                                    <div class="text-primary text-base font-normal leading-normal">
                                                        $300 - $4200
                                                    </div>
                                                </div>
                                                <div class="flex mt-2">
                                                    <input type="range" min="00" max="9200"
                                                        v-model="filterFormData.minPrice"
                                                        class="w-full rotate-180 appearance-none  bg-slate-300 accent-primary-600 focus:accent-primary h-2 rounded-r-full" />
                                                    <input type="range" min="00" max="10000"
                                                        v-model="filterFormData.maxPrice"
                                                        class="w-full appearance-none bg-slate-300 accent-primary-600  focus:accent-primary h-2 rounded-r-full -ml-0.5" />
=======
                                                        {{
                                                            $t("Product Price")
                                                        }}
                                                    </div>
                                                    <div class="text-primary text-base font-normal leading-normal">
                                                        {{
                                                            master.showCurrency(
                                                                priceRange[0]
                                                            )
                                                        }}
                                                        -
                                                        {{
                                                            master.showCurrency(
                                                                priceRange[1]
                                                            )
                                                        }}
                                                    </div>
                                                </div>
                                                <div class="w-[98%]">
                                                    <vue-slider v-model="priceRange" :min="filter.min_price"
                                                        :max="filter.max_price"></vue-slider>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                                </div>
                                                <div
                                                    class="text-slate-400 text-xs font-normal leading-none flex justify-between mt-2">
                                                    <span>
<<<<<<< HEAD
                                                        ${{ filterFormData.minPrice }}
                                                    </span>
                                                    <span>
                                                        ${{ filterFormData.maxPrice }}
=======
                                                        ${{ filter.min_price }}
                                                    </span>
                                                    <span>
                                                        ${{ filter.max_price }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                                    </span>
                                                </div>
                                            </div>

                                            <!-- Brand -->
<<<<<<< HEAD
                                            <!-- <div>
                                                <div class="text-slate-950 text-base font-medium leading-normal">Brand
                                                </div>
                                                <select v-model="filterFormData.brand"
                                                    class="w-full mt-1 p-3 rounded bg-transparent border border-gray-100 outline-none">
                                                    <option value="" selected disabled>Select Brand</option>
                                                    <option value="brand">Brand Name</option>
                                                    <option value="brand1">Brand Name1</option>
                                                    <option value="brand2">Brand Name2</option>
                                                    <option value="brand3">Brand Name3</option>
                                                </select>
                                            </div> -->
=======
                                            <div>
                                                <div class="text-slate-950 text-base font-medium leading-normal">
                                                    {{ $t("Category") }}
                                                </div>

                                                <select v-model="filterFormData.category_id"
                                                    class="w-full mt-1 p-3 rounded bg-transparent border border-gray-100 outline-none">
                                                    <option value="" selected>
                                                        {{ $t("Select Category") }}
                                                    </option>
                                                    <option v-for="category in master.categories" :key="category.id"
                                                        :value="category.id">
                                                        {{ $t(category.name) }}
                                                    </option>
                                                </select>
                                            </div>

                                            <!-- Brand -->
                                            <div>
                                                <div class="text-slate-950 text-base font-medium leading-normal">
                                                    {{ $t("Brand") }}
                                                </div>

                                                <select v-model="filterFormData.brand_id"
                                                    class="w-full mt-1 p-3 rounded bg-transparent border border-gray-100 outline-none">
                                                    <option value="" selected>
                                                        {{ $t("Select Brand") }}
                                                    </option>
                                                    <option v-for="brand in filter.brands" :key="brand.id"
                                                        :value="brand.id">
                                                        {{ $t(brand.name) }}
                                                    </option>
                                                </select>
                                            </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

                                            <!-- color -->
                                            <div>
                                                <div class="text-slate-950 text-base font-medium leading-normal">
<<<<<<< HEAD
                                                    Color
=======
                                                    {{ $t("Color") }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                                </div>

                                                <div
                                                    class="flex flex-wrap gap-4 p-3 rounded-xl border border-slate-200 mt-1">
<<<<<<< HEAD

                                                    <label
                                                        class="cursor-pointer has-[:checked]:text-primary text-slate-800 flex items-center p-2 bg-white gap-2">
                                                        <input type="radio" v-model="filterFormData.color" value="red"
                                                            id="red" name="color"
                                                            class="w-5 h-5 appearance-none checked:bg-primary rounded-full border-2 border-slate-300 shrink-0 transition duration-300" />
                                                        <span>Red</span>
                                                    </label>

                                                    <label for="Black"
                                                        class="cursor-pointer has-[:checked]:text-primary text-slate-800 flex items-center p-2 bg-white gap-2">
                                                        <input type="radio" v-model="filterFormData.color" value="black"
                                                            id="Black" name="color"
                                                            class="w-5 h-5 appearance-none checked:bg-primary rounded-full border-2 border-slate-300 shrink-0 transition duration-300" />
                                                        <span>Black</span>
                                                    </label>

                                                    <label for="Blue"
                                                        class="cursor-pointer has-[:checked]:text-primary text-slate-800 flex items-center p-2 bg-white gap-2">
                                                        <input type="radio" v-model="filterFormData.color" value="Blue"
                                                            id="Blue" name="color"
                                                            class="w-5 h-5 appearance-none checked:bg-primary rounded-full border-2 border-slate-300 shrink-0 transition duration-300" />
                                                        <span>Blue</span>
                                                    </label>

                                                    <label for="Orange"
                                                        class="cursor-pointer has-[:checked]:text-primary text-slate-800 flex items-center p-2 bg-white gap-2">
                                                        <input type="radio" v-model="filterFormData.color"
                                                            value="Orange" id="Orange" name="color"
                                                            class="w-5 h-5 appearance-none checked:bg-primary rounded-full border-2 border-slate-300 shrink-0 transition duration-300" />
                                                        <span>Orange</span>
                                                    </label>

                                                    <label for="White"
                                                        class="cursor-pointer has-[:checked]:text-primary text-slate-800 flex items-center p-2 bg-white gap-2">
                                                        <input type="radio" v-model="filterFormData.color" value="White"
                                                            id="White" name="color"
                                                            class="w-5 h-5 appearance-none checked:bg-primary rounded-full border-2 border-slate-300 shrink-0 transition duration-300" />
                                                        <span>White</span>
                                                    </label>

                                                    <label for="Multicolour"
                                                        class="cursor-pointer has-[:checked]:text-primary text-slate-800 flex items-center p-2 bg-white gap-2">
                                                        <input type="radio" v-model="filterFormData.color"
                                                            value="Multicolour" id="Multicolour" name="color"
                                                            class="w-5 h-5 appearance-none checked:bg-primary rounded-full border-2 border-slate-300 shrink-0 transition duration-300" />
                                                        <span>Multicolour</span>
                                                    </label>

                                                </div>
                                            </div>

=======
                                                    <label v-for="color in filter.colors" :key="color.id"
                                                        class="cursor-pointer has-[:checked]:text-primary text-slate-800 flex items-center p-2 bg-white gap-2">
                                                        <input type="radio" v-model="filterFormData.color_id
                                                            " :value="color.id" :id="'color-' +
                                                                color.id
                                                                " name="color"
                                                            class="w-5 h-5 appearance-none checked:bg-primary rounded-full border-2 border-slate-300 shrink-0 transition duration-300" />
                                                        <span>{{
                                                            $t(color.name)
                                                        }}</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- size -->
                                            <div>
                                                <div class="text-slate-950 text-base font-medium leading-normal">
                                                    {{ $t("Size") }}
                                                </div>

                                                <div
                                                    class="flex flex-wrap gap-4 p-3 rounded-xl border border-slate-200 mt-1">
                                                    <label v-for="size in filter.sizes" :key="size.id"
                                                        class="cursor-pointer has-[:checked]:text-primary text-slate-800 flex items-center p-2 bg-white gap-2">
                                                        <input type="radio" v-model="filterFormData.size_id
                                                            " :value="size.id" :id="'size-' +
                                                                size.id
                                                                " name="size"
                                                            class="w-5 h-5 appearance-none checked:bg-primary rounded-full border-2 border-slate-300 shrink-0 transition duration-300" />
                                                        <span>{{
                                                            $t(size.name)
                                                        }}</span>
                                                    </label>
                                                </div>
                                            </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                        </div>

                                        <!-- button Clear and Apply -->
                                        <div class="flex gap-6 p-6 border-t border-slate-200">
                                            <button
                                                class="grow px-4 py-3 rounded-[10px] border border-primary text-primary text-base font-medium leading-normal"
                                                @click="clearFilter">
<<<<<<< HEAD
                                                Clear
                                            </button>
                                            <button
                                                class="grow px-4 py-3 bg-primary rounded-[10px] border border-primary text-white text-base font-medium leading-normal"
                                                @click="fetchProducts">
                                                Apply
=======
                                                {{ $t("Clear") }}
                                            </button>
                                            <button
                                                class="grow px-4 py-3 bg-primary rounded-[10px] border border-primary text-white text-base font-medium leading-normal"
                                                @click="applyFilter">
                                                {{ $t("Apply") }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                            </button>
                                        </div>
                                    </div>
                                </DialogPanel>
                            </TransitionChild>
                        </div>
                    </div>
                </div>
            </Dialog>
        </TransitionRoot>

    </div>
</template>

<script setup>
<<<<<<< HEAD
import { onMounted, ref, watch } from 'vue'
import { useRoute } from 'vue-router';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { FunnelIcon, XMarkIcon, ArrowLeftIcon } from '@heroicons/vue/24/outline';
import { StarIcon } from '@heroicons/vue/24/solid';
import ProductCard from '../components/ProductCard.vue';
// Import Swiper styles
import 'swiper/css';

const route = useRoute();

=======
import { Dialog, DialogPanel, TransitionChild, TransitionRoot } from '@headlessui/vue';
import { ArrowLeftIcon, FunnelIcon, XMarkIcon } from '@heroicons/vue/24/outline';
import { StarIcon } from '@heroicons/vue/24/solid';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { onMounted, ref, watch } from 'vue';
import { useRoute } from 'vue-router';
import ProductCard from '../components/ProductCard.vue';
// Import Swiper styles
import 'swiper/css';
import SkeletonLoader from '../components/SkeletonLoader.vue';

import { useMaster } from '../stores/MasterStore';

import VueSlider from "vue-slider-component";
import "vue-slider-component/theme/default.css";
import { useAuth } from '../stores/AuthStore';

const authStore = useAuth();

const isLoading = ref(true);
const master = useMaster();
const route = useRoute();

const priceRange = ref([0, 1000]);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
onMounted(() => {
    fetchProducts();
    fetchSubCategories();
    window.scrollTo(0, 0);
});

watch(() => route.params.slug, () => {
<<<<<<< HEAD
=======
    currentPage.value = 1;
    filterFormData.value.category_id = route.params.slug;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    fetchProducts();
    fetchSubCategories();
});

watch(() => route.query.subcategory, () => {
<<<<<<< HEAD
=======
    currentPage.value = 1;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    fetchProducts();
});

const currentPage = ref(1);
const perPage = 12;

const onClickHandler = (page) => {
    currentPage.value = page;
    fetchProducts();
};

<<<<<<< HEAD
const showfilterCanvas = ref(false);

const filterFormData = ref({
    review: null,
    shortBy: null,
    brand: null,
    color: null,
    size: null,
    minPrice: null,
    maxPrice: null
});

const hasFilter = ref(false);

watch(filterFormData.value, () => {
    console.log('fdhgdf');
    if (filterFormData.value.review || filterFormData.value.shortBy || filterFormData.value.brand || filterFormData.value.color || filterFormData.value.size || filterFormData.value.minPrice || filterFormData.value.maxPrice) {
=======
const showFilterCanvas = ref(false);

const filterFormData = ref({
    rating: null,
    sort_type: "default",
    brand_id: "",
    color_id: null,
    size_id: null,
    min_price: null,
    max_price: null,
    category_id: route.params.slug,
});

const filter = ref({
    sizes: [],
    brands: [],
    colors: [],
    min_price: 0,
    max_price: 1000,
});

const ratings = [5, 4, 3, 2, 1];

const categories = master.categories;

const products = ref([]);
const totalProducts = ref(0);
const setRangeValue = ref(true);

const hasFilter = ref(false);

watch(filterFormData.value, () => {
    if (filterFormData.value.rating || filterFormData.value.shortBy || filterFormData.value.brand || filterFormData.value.color || filterFormData.value.size) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        hasFilter.value = true;
    } else {
        hasFilter.value = false;
    }
}, { deep: true });

const clearFilter = () => {
<<<<<<< HEAD
    filterFormData.value.review = null;
    filterFormData.value.shortBy = null;
    filterFormData.value.brand = null;
    filterFormData.value.color = null;
    filterFormData.value.size = null;
    filterFormData.value.minPrice = null;
    filterFormData.value.maxPrice = null;
    fetchProducts();
}

const ratings = [5, 4, 3, 2, 1];

const subcategories = ref([]);

const products = ref([]);
const totalProducts = ref(0);


const fetchProducts = async () => {
    axios.get('/products', {
        params: {
            category_id: route.params.slug,
            page: currentPage.value,
            per_page: perPage,
            rating: filterFormData.value.review,
            sort_type: filterFormData.value.shortBy,
            min_price: filterFormData.value.minPrice,
            max_price: filterFormData.value.maxPrice,
            color: filterFormData.value.color,
            sub_category_id: route.query.subcategory
        }
    }).then((response) => {
        totalProducts.value = response.data.data.total;
        products.value = response.data.data.products;
    });
};

const fetchSubCategories = async () => {
    axios.get('/sub-categories?category_id=' + route.params.slug).then((response) => {
        subcategories.value = response.data.data.sub_categories;
    });

=======
    filterFormData.value = {
        rating: null,
        short_by: "default",
        brand_id: "",
        color_id: null,
        size_id: null,
        min_price: filter.value.min_price,
        max_price: filter.value.max_price,
        category_id: route.params.slug,
    };
    priceRange.value = [
        Math.floor(filter.value.min_price),
        Math.floor(filter.value.max_price),
    ];
    setRangeValue.value = true;
};

const subcategories = ref([]);

const fetchProducts = async () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
    isLoading.value = true;
    axios.get('/products', {
        params: {
            page: currentPage.value,
            per_page: perPage,
            sub_category_id: route.query.subcategory,
            ...filterFormData.value,
        },
        headers: {
            "Accept-Language": master.locale || "en",
            Authorization: authStore.token
        },
    }).then((response) => {
        totalProducts.value = response.data.data.total;
        products.value = response.data.data.products;

        filter.value = response.data.data.filters;

        if (setRangeValue.value) {
            priceRange.value = [
                Math.floor(filter.value.min_price),
                Math.floor(filter.value.max_price),
            ];
        }

        setTimeout(() => {
            isLoading.value = false;
        }, 200);
    });
};

const applyFilter = () => {
    filterFormData.value.min_price = priceRange.value[0];
    filterFormData.value.max_price = priceRange.value[1];

    setRangeValue.value = false;
    master.search = null;
    currentPage.value = 1;
    showFilterCanvas.value = false;
    fetchProducts();
};

const fetchSubCategories = async () => {
    axios.get('/sub-categories?category_id=' + route.params.slug,{
        headers: {
            'Accept-Language': master.locale || 'en',
        }
    }).then((response) => {
        subcategories.value = response.data.data.sub_categories;
    });
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
};

const filterSortBy = [
    {
<<<<<<< HEAD
        name: 'High to Low',
        value: 'high_to_low'
    },
    {
        name: 'Low to High',
        value: 'low_to_high'
    },
    {
        name: 'Most Selling',
        value: 'most_selling'
    },
    {
        name: 'Top Seller',
        value: 'top_seller'
    },
    {
        name: 'New Product',
        value: 'new_product'
    }
=======
        name: "Default Sorting",
        value: "default",
    },
    {
        name: "High to Low",
        value: "high_to_low",
    },
    {
        name: "Low to High",
        value: "low_to_high",
    },
    {
        name: "Most Selling",
        value: "top_selling",
    },
    {
        name: "New Product",
        value: "newest",
    },
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
];

</script>

<style>
.categorySwiper .swiper-slide {
    width: auto !important;
}

input[type=range]::-webkit-slider-runnable-track,
input[type=range]::-ms-track,
input[type=range]::-moz-range-track {
    background: #000;
}

input[type=range]::-moz-range-thumb,
input[type=range]::-ms-thumb,
input[type=range]::-webkit-slider-thumb {
    background: #000;
}
</style>
