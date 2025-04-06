<template>
  <div>
    <!-- ✅ زر المساعد العائم فقط لفتح WhatsApp -->
    <div
      @click="openWhatsApp"
      class="fixed bottom-4 right-4 w-14 h-14 bg-teal-100 rounded-full flex items-center justify-center shadow-lg cursor-pointer z-50"
    >
      <div class="relative">
        <!-- رابط WhatsApp -->
        <img :src="'/assets/icons/whatsapp-logo.svg'" class="w-11 h-11" loading="lazy" alt="icon"/>
      </div>
    </div>
  </div>
</template>

<script setup>
const openWhatsApp = () => {
  window.open("https://wa.me/966569785238", "_blank"); // فتح WhatsApp عند الضغط على الأيقونة
};
</script>

<style scoped>
/* يمكن تخصيص أي تصميم هنا */
</style>
