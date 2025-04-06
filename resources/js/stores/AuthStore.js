<<<<<<< HEAD
import { defineStore } from "pinia";
import axios from "axios";
import { useBaskerStore } from "./BasketStore";
=======
import axios from "axios";
import { defineStore } from "pinia";
import { useBasketStore } from "./BasketStore";
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

export const useAuth = defineStore("authStore", {
    state: () => ({
        user: null,
        addresses: [],
        token: null,
        favoriteProducts: 0,
        loginModal: false,
        registerModal: false,
        showAddressModal: false,
        showChangeAddressModal: false,
        orderCancel: false,
        favoriteRemove: false,
    }),

    getters: {
        getAddressById: (state) => (id) => {
            return state.addresses.find((address) => address.id == id);
        },
    },

    actions: {
        setToken(token) {
            this.token = `Bearer ${token}`;
        },
        setUser(user) {
            this.user = user;
        },

        showLoginModal() {
            this.loginModal = true;
        },

        hideLoginModal() {
            this.loginModal = false;
        },

        fetchAddresses() {
            axios.get("/addresses", {
                headers: {
                    Authorization: this.token,
                },
            }).then((response) => {
                this.addresses = response.data.data.addresses;
<<<<<<< HEAD
                const basketStore = useBaskerStore();
=======
                const basketStore = useBasketStore();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                this.addresses.forEach((address) => {
                    if (address.is_default) {
                        basketStore.address = address;
                        return true;
                    }else{
                        basketStore.address = this.addresses[0];
                    }
                });
            })
            .catch((error) => {
<<<<<<< HEAD
                console.log(error);
=======
                if (error.response.status === 401) {
                    this.token = null;
                    this.user = null;
                    this.addresses = [];
                    this.favoriteProducts = 0;
                }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            });
        },
        fetchFavoriteProducts() {
            if (this.token) {
                axios.get("/favorite-products", {
                    headers: {
                        Authorization: this.token,
                    },
                }).then((response) => {
                    this.favoriteProducts = response.data.data.products?.length ?? 0;
<<<<<<< HEAD
=======
                }).catch((error) => {
                    if (error.response.status === 401) {
                        this.token = null;
                        this.user = null;
                        this.addresses = [];
                    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                });
            } else {
                this.favoriteProducts = 0;
            }
        },

        logout() {
            axios.get("/logout", {
                headers: {
                    Authorization: this.token,
                },
<<<<<<< HEAD
            })
            .then((response) => {
                this.user = null;
                this.addresses = [];
                this.token = null;
            })
            .catch((error) => {
                this.user = null;
                this.addresses = [];
                this.token = null;
=======
            }).then((response) => {
                this.user = null;
                this.addresses = [];
                this.token = null;
                this.favoriteProducts = 0;
            }).catch((error) => {
                this.user = null;
                this.addresses = [];
                this.token = null;
                this.favoriteProducts = 0;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            });
        },
    },

    persist: true,
});
