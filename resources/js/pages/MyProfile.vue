<template>
    <div>
        <!-- Header -->
<<<<<<< HEAD
        <AuthPageheader title="My Profile" />

        <div class="p-3 md:p-4 xl:p-6">

            <form @submit.prevent="sumitForm()">
                <div class="max-w-[920px] mx-auto bg-white rounded-xl md:rounded-2xl p-3 md:p-4 xl:p-6">
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">

                        <div class="text-primary text-sm font-medium">Profile Picture</div>
=======
        <AuthPageHeader :title="$t('My Profile')" />

        <div class="p-3 md:p-4 xl:p-6">

            <form @submit.prevent="submitForm()">
                <div class="max-w-[920px] mx-auto bg-white rounded-xl md:rounded-2xl p-3 md:p-4 xl:p-6">
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100 relative">

                        <div class="text-primary text-sm font-medium">{{ $t('Profile Picture') }}</div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        <div class="flex flex-col gap-2 justify-center items-center">
                            <img :src="profilePhoto" alt=""
                                class="w-24 h-24 md:w-36 md:h-36 bg-white rounded-full object-cover">

                            <div class="flex gap-2">
                                <label for="upload"
                                    class="text-white text-sm font-normal px-2 py-1 md:px-3 md:py-2 bg-slate-800 rounded-md cursor-pointer">
                                    <input type="file" id="upload" class="hidden" @change="ChangeProfilePhoto">
<<<<<<< HEAD
                                    Change Photo
=======
                                    {{ $t('Change Photo') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </label>
                                <button v-if="ChangeProfile"
                                    class="px-2 py-1 md:px-3 md:py-2 bg-red-500 text-white rounded-md"
                                    @click="removePhoto">
                                    <TrashIcon class="w-5 h-5" />
                                </button>
                            </div>
                        </div>
<<<<<<< HEAD
                    </div>

                    <div class="p-3 bg-white rounded-xl border border-slate-100 mt-3">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="form-label"> Name</label>
                                <input type="text" id="name" v-model="formData.name" placeholder="Enter name"
=======
                        <div v-if="!authStore.user?.account_verified"
                            class="flex items-center gap-1 absolute top-3 right-3 border py-0.5 px-2 rounded-3xl bg-red-200 text-red-600" @click="verifyAccount()">
                            <ExclamationTriangleIcon class="w-5 h-5" />
                            {{ $t('Unverified') }}
                        </div>
                        <div v-else class="flex items-center gap-1 absolute top-3 right-3 border py-0.5 px-2 rounded-3xl bg-green-200 text-green-600">
                            <CheckCircleIcon class="w-5 h-5" />
                            {{ $t('Verified') }}
                        </div>
                    </div>

                    <div class="p-3 bg-white rounded-xl border border-slate-100 mt-3">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-5 gap-x-6">
                            <div>
                                <label for="name" class="form-label"> {{ $t('Name') }}</label>
                                <input type="text" id="name" v-model="formData.name" :placeholder="$t('Enter name')"
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    class="form-input"
                                    :class="(errors && errors?.name) ? 'border-red-500' : 'border-slate-200'">
                                <span v-if="errors && errors?.name" class="text-red-500 text-sm">
                                    {{ errors?.name[0] }}
                                </span>
                            </div>

                            <div>
<<<<<<< HEAD
                                <label for="phone" class="form-label">Mobile Number</label>
                                <input type="text" id="phone" v-model="formData.phone" placeholder="Enter phone"
                                    readonly class="form-input"
                                    :class="(errors && errors?.phone) ? 'border-red-500' : 'border-slate-200'">
=======
                                <label for="name" class="form-label mb-2">{{ $t('Country') }}</label>
                                <v-select :options="countries" label="name" :reduce="country => country.name"
                                    v-model="formData.country" :placeholder="$t('Select Country')"
                                    :dir="masterStore.langDirection || 'ltr'" />
                                <span v-if="errors && errors?.country" class="text-red-500 text-sm">
                                    {{ errors?.country[0] }}
                                </span>
                            </div>

                            <div>
                                <label for="phone" class="form-label justify-between">
                                    {{ $t('Mobile Number') }}

                                    <div v-if="masterStore.register_otp_type == 'phone'"
                                        class="flex items-center gap-1">
                                        <span v-if="!authStore.user?.email_verified"
                                            class="text-red-400 text-sm flex items-center gap-0.5 cursor-pointer"
                                            @click="verifyAccount()">
                                            <ExclamationTriangleIcon class="w-4 h-4" />
                                            {{ $t('Unverified') }}
                                        </span>
                                        <span v-else class="text-green-500 text-sm flex items-center gap-0.5">
                                            <CheckCircleIcon class="w-4 h-4" />
                                            {{ $t('Verified') }}
                                        </span>
                                    </div>
                                </label>
                                <div class="flex">
                                    <span
                                        class="text-slate-700 text-base font-normal leading-normal bg-slate-100 p-2 border-y flex items-center"
                                        :class="masterStore.langDirection == 'rtl' ? 'border-r rounded-tr-lg rounded-br-lg' : 'border-l rounded-tl-lg rounded-bl-lg'">
                                        +{{ formData.phone_code || '00' }}
                                    </span>
                                    <input type="text" v-model="formData.phone" :placeholder="$t('Enter phone number')"
                                        class="text-base font-normal w-full p-3 placeholder:text-slate-400 border focus:border-primary outline-none"
                                        :class="[errors?.phone ? 'border-red-500' : 'border-slate-200', masterStore.langDirection == 'rtl' ? 'rounded-tl-lg rounded-bl-lg' : 'rounded-tr-lg rounded-br-lg']"
                                        :maxlength="masterStore.phoneMaxLength"
                                        @input="formData.phone = formData.phone.replace(/[^\d]/g, '')">
                                </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                <span v-if="errors && errors?.phone" class="text-red-500 text-sm">
                                    {{ errors?.phone[0] }}
                                </span>
                            </div>
<<<<<<< HEAD
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-4">
                            <div>
                                <label for="gender" class="form-label bg-transparent">Gender</label>
                                <select name="gender" id="gender" v-model="formData.gender" class="form-input bg-transparent h-[52px]"
                                    :class="(errors && errors?.gender) ? 'border-red-500' : 'border-slate-200'">
                                    <option value="" disabled selected>Select a gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
=======

                            <div>
                                <label for="gender" class="form-label bg-transparent">{{ $t('Gender') }}</label>
                                <select name="gender" id="gender" v-model="formData.gender"
                                    class="form-input bg-transparent h-[52px]"
                                    :class="(errors && errors?.gender) ? 'border-red-500' : 'border-slate-200'">
                                    <option value="" disabled selected>{{ $t('Select a gender') }}</option>
                                    <option value="male">{{ $t('Male') }}</option>
                                    <option value="female">{{ $t('Female') }}</option>
                                    <option value="other">{{ $t('Other') }}</option>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </select>
                                <span v-if="errors && errors?.gender" class="text-red-500 text-sm">
                                    {{ errors?.gender[0] }}
                                </span>
                            </div>

                            <div>
<<<<<<< HEAD
                                <label for="date" class="form-label">Date of Birth</label>
=======
                                <label for="date" class="form-label">{{ $t('Date of Birth') }}</label>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                <input type="date" id="date" v-model="formData.date_of_birth" class="form-input"
                                    :class="(errors && errors?.date_of_birth) ? 'border-red-500' : 'border-slate-200'">
                                <span v-if="errors && errors?.date_of_birth" class="text-red-500 text-sm">
                                    {{ errors?.date_of_birth[0] }}
                                </span>
                            </div>
<<<<<<< HEAD
                        </div>

                        <div class="mt-4">
                            <label for="email" class="form-label">Email (Optional)</label>
                            <input type="email" id="email" v-model="formData.email" class="form-input" placeholder="Enter email"
                                :class="(errors && errors?.email) ? 'border-red-500' : 'border-slate-200'" readonly>
                            <span v-if="errors && errors?.email" class="text-red-500 text-sm">
                                {{ errors?.email[0] }}
                            </span>
                        </div>

                        <button type="submit"
                            class="bg-primary px-4 md:px-6 py-2 md:py-4 rounded-lg :md:rounded-[10px] text-white mt-6">
                            Update Profile
=======

                            <div>
                                <label for="email" class="form-label justify-between">
                                    {{ $t('Email Address') }}
                                    <div v-if="masterStore.register_otp_type == 'email'"
                                        class="flex items-center gap-1">
                                        <span v-if="!authStore.user?.email_verified"
                                            class="text-red-400 text-sm flex items-center gap-0.5 cursor-pointer" @click="verifyAccount()">
                                            <ExclamationTriangleIcon class="w-4 h-4" />
                                            {{ $t('Unverified') }}
                                        </span>
                                        <span v-else class="text-green-500 text-sm flex items-center gap-0.5">
                                            <CheckCircleIcon class="w-4 h-4" />
                                            {{ $t('Verified') }}
                                        </span>
                                    </div>
                                </label>
                                <input type="email" id="email" v-model="formData.email" class="form-input"
                                    placeholder="Enter email"
                                    :class="(errors && errors?.email) ? 'border-red-500' : 'border-slate-200'">
                                <span v-if="errors && errors?.email" class="text-red-500 text-sm">
                                    {{ errors?.email[0] }}
                                </span>
                            </div>
                        </div>

                        <button v-if="!isLoading" type="submit"
                            class="bg-primary px-4 md:px-6 py-2 md:py-4 rounded-lg :md:rounded-[10px] text-white mt-6">
                            {{ $t('Update Profile') }}
                        </button>
                        <button v-else type="button"
                            class="bg-primary-200 px-4 md:px-6 py-2 md:py-4 rounded-lg :md:rounded-[10px] text-primary mt-6 flex items-center justify-center cursor-not-allowed gap-2"
                            disabled>
                            {{ $t('Processing') }}
                            <LoadingSpin />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </button>

                    </div>
                </div>
            </form>
<<<<<<< HEAD

        </div>

=======
        </div>

        <VerifyOtpModal :showModal="showVerifyOtpModal" @hideModal="showVerifyOtpModal = false" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    </div>
</template>

<script setup>
import { TrashIcon } from '@heroicons/vue/24/solid';
<<<<<<< HEAD
import { onMounted, ref } from "vue";
import { useToast } from "vue-toastification";
import AuthPageheader from "../components/AuthPageheader.vue";
import ToastSuccessMessage from "../components/ToastSuccessMessage.vue";
import { useAuth } from "../stores/AuthStore";

const toast = useToast();
=======
import { onMounted, ref, watch } from "vue";
import { useToast } from "vue-toastification";
import AuthPageHeader from "../components/AuthPageHeader.vue";
import { useAuth } from "../stores/AuthStore";
import { useMaster } from "../stores/MasterStore";
import { useRouter } from 'vue-router';

import ToastSuccessMessage from "../components/ToastSuccessMessage.vue";
import LoadingSpin from '../components/LoadingSpin.vue';

import { ExclamationTriangleIcon } from '@heroicons/vue/24/outline';
import { CheckCircleIcon } from '@heroicons/vue/24/solid';
import VerifyOtpModal from '../components/VerifyOtpModal.vue';

const router = useRouter();

const toast = useToast();
const masterStore = useMaster();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
const authStore = useAuth();

const errors = ref(null);

<<<<<<< HEAD
const profilePhoto = ref(null);
const ChangeProfile = ref(false);

=======
const isLoading = ref(false);
const profilePhoto = ref(null);
const ChangeProfile = ref(false);

const showVerifyOtpModal = ref(false);

const verifyAccount = () => {
    showVerifyOtpModal.value = true;
}

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
const removePhoto = () => {
    profilePhoto.value = authStore.user?.profile_photo;
    ChangeProfile.value = false;
}

const ChangeProfilePhoto = (event) => {
    profilePhoto.value = URL.createObjectURL(event.target.files[0]);
    formData.value.profile_photo = event.target.files[0];
    ChangeProfile.value = true;
}

const formData = ref({
    name: authStore.user?.name,
    phone: authStore.user?.phone,
    gender: authStore.user?.gender ? authStore.user?.gender : '',
    date_of_birth: authStore.user?.date_of_birth,
    email: authStore.user?.email,
    profile_photo: null,
<<<<<<< HEAD
});

const demouser = ref(false);
=======
    phone_code: authStore.user?.phone_code,
    country: authStore.user?.country
});

const countries = ref([]);

const demoUser = ref(false);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

onMounted(() => {
    if (authStore.user) {
        profilePhoto.value = authStore.user?.profile_photo;
    }
    window.scrollTo(0, 0);

<<<<<<< HEAD
    if(authStore.user?.email === 'user@readyecommerce.com') {
        demouser.value = true;
    }
});

=======
    if (authStore.user?.email === 'user@readyecommerce.com') {
        demoUser.value = true;
    }

    fetchCountries();
});

watch(() => formData.value.country, (value) => {
    const country = countries.value.find((item) => item.name == value);
    formData.value.phone_code = country?.phone_code
})

const fetchCountries = () => {
    axios.get('/countries').then((response) => {
        countries.value = response.data.data.countries
    })
}

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
const content = {
    component: ToastSuccessMessage,
    props: {
        title: 'Profile Updated',
        message: 'Your profile updated successfully',
    },
};

<<<<<<< HEAD
const sumitForm = () => {
=======
const submitForm = () => {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    const processData = new FormData();
    processData.append('name', formData.value.name);
    processData.append('phone', formData.value.phone);
    processData.append('gender', formData.value.gender ? formData.value.gender : '');
    processData.append('date_of_birth', formData.value.date_of_birth ? formData.value.date_of_birth : '');
    processData.append('email', formData.value.email ? formData.value.email : '');
<<<<<<< HEAD
=======
    processData.append('country', formData.value.country ? formData.value.country : '');
    processData.append('phone_code', formData.value.phone_code ? formData.value.phone_code : '');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    if (formData.value.profile_photo) {
        processData.append('profile_photo', formData.value.profile_photo);
    }

<<<<<<< HEAD
=======
    isLoading.value = true;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    axios.post('/update-profile', processData, {
        headers: {
            'Authorization': authStore.token
        }
    }).then((response) => {
        authStore.user = response.data.data.user;
        ChangeProfile.value = false;
<<<<<<< HEAD
=======
        isLoading.value = false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        toast(content, {
            type: "default",
            hideProgressBar: true,
            icon: false,
<<<<<<< HEAD
            position: "bottom-left",
=======
            position: masterStore.langDirection === 'rtl' ? "bottom-right" : "bottom-left",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            toastClassName: "vue-toastification-alert",
            timeout: 2000,
        });
        errors.value = {}
    }).catch((error) => {
<<<<<<< HEAD
        errors.value = error.response.data.errors
        if (errors.value?.profile_photo) {
            toast.error(errors.value?.profile_photo[0], {
                position: "bottom-left",
=======
        isLoading.value = false
        if (error.response.status === 401) {
            authStore.logout();
            router.push('/');
            return
        }

        toast.error(error.response?.data?.message, {
            position: masterStore.langDirection === 'rtl' ? "bottom-right" : "bottom-left",
        });

        errors.value = error.response.data.errors
        if (errors.value?.profile_photo) {
            toast.error(errors.value?.profile_photo[0], {
                position: masterStore.langDirection === 'rtl' ? "bottom-right" : "bottom-left",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            });
        }
    })
}

</script>

<style scoped>
.form-label {
<<<<<<< HEAD
    @apply text-slate-700 text-base font-normal block mb-1;
=======
    @apply text-slate-700 text-base font-normal flex mb-1;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}

.form-input {
    @apply p-3 rounded-lg border focus:border-primary w-full outline-none text-base font-normal leading-normal placeholder:text-slate-400;
}
</style>
