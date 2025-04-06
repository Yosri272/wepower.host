<template>
  <div class="space-y-4 mt-3 transition duration-300">
<<<<<<< HEAD
    <div class="px-4 py-3 bg-slate-50 rounded-xl border border-slate-100"
    >
      <!-- Shop Name -->
      <div class="text-slate-950 text-base font-medium leading-normal">
        {{ basketStore.buyNowProduct?.shop?.name }}
=======
    <div class="px-4 py-3 bg-slate-50 rounded-xl border border-slate-100">
      <!-- Shop Name -->
      <div v-if="master.multiVendor" class="text-slate-950 text-base font-medium leading-normal">
        {{ basketStore.buyNowProduct?.shop_name }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
      </div>

      <div class="space-y-2 divide-y divide-slate-200">
        <!-- item 1-->
<<<<<<< HEAD
        <div class="flex gap-4 justify-start w-full items-center pt-1"
        >
          <div class="w-[72px] h-[95px]">
            <img
              :src="basketStore.buyNowProduct?.thumbnail ? basketStore.buyNowProduct?.thumbnail : basketStore.buyNowProduct?.thumbnails[0]?.thumbnail"
=======
        <div v-for="product in basketStore.buyNowProduct?.products" :key="product.id" class="flex gap-4 justify-start w-full items-center pt-1"
        >
          <div class="w-[72px] h-[95px]">
            <img
              :src="product.thumbnail"
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
              class="w-full h-full object-contain"
            />
          </div>
          <div class="flex flex-col gap-1 w-full">
            <!-- Brand -->
            <div class="text-primary text-xs font-normal leading-none">
<<<<<<< HEAD
              {{ basketStore.buyNowProduct?.brand }}
            </div>
            <!-- basketStore.buyNowProduct? Name -->
            <div class="text-slate-950 text-base font-normal leading-normal">
              {{ basketStore.buyNowProduct?.name }}
=======
              {{ product?.brand }}
            </div>
            <!-- basketStore.buyNowProduct? Name -->
            <div class="text-slate-950 text-base font-normal leading-normal">
              {{ product?.name }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </div>
            <div class="flex flex-wrap justify-between items-center gap-3">
              <!-- Size and color -->
              <div class="flex items-center gap-1">
                <div
                  class="min-w-8 text-center px-2 py-1 bg-slate-100 rounded text-slate-800 text-xs font-normal"
                >
<<<<<<< HEAD
                  {{ basketStore.buyNowProduct?.size }}
=======
                  {{ product?.size?.name }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                </div>
                <div
                  class="px-2 py-1 bg-slate-100 rounded text-slate-800 text-xs font-normal"
                >
<<<<<<< HEAD
                  {{ basketStore.buyNowProduct?.color }}
=======
                  {{ product?.color?.name }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                </div>
              </div>
              <!-- quantity and price -->
              <div class="text-slate-800 text-base font-normal leading-normal">
<<<<<<< HEAD
                1 X {{
                  master.showCurrency(
                    basketStore.buyNowProduct?.discount_price > 0
                      ? basketStore.buyNowProduct?.discount_price
                      : basketStore.buyNowProduct?.price
                  )
                }}
=======
                1 X {{ master.showCurrency((product?.discount_price > 0) ? product?.discount_price : product?.price) }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { useAuth } from "../stores/AuthStore";
<<<<<<< HEAD
import { useMaster } from "../stores/MasterStore";
import { useBaskerStore } from "../stores/BasketStore";

const AuthStore = useAuth();
const master = useMaster();
const basketStore = useBaskerStore();
=======
import { useBasketStore } from "../stores/BasketStore";
import { useMaster } from "../stores/MasterStore";

const AuthStore = useAuth();
const master = useMaster();
const basketStore = useBasketStore();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
</script>

<style lang="scss" scoped></style>
