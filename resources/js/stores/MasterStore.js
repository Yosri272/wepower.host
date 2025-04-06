import { defineStore } from "pinia";

export const useMaster = defineStore("masterStore", {
    state: () => ({
<<<<<<< HEAD
        logo: null,
        currency: "$",
        position: "prefix",
=======
        locale: "en",
        langDirection: "ltr",
        defaultLocale: "en",
        logo: null,
        currency: {
            symbol: "$",
            position: "prefix",
            name: "USD",
        },
        defaultCurrency: "USD",
        selectedCurrency: null,
        currencies: [],
        cashOnDelivery: false,
        onlinePayment: false,
        appName: "",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        showDownloadApp: false,
        playStoreLink: null,
        appStoreLink: null,
        multiVendor: true,
        paymentGateways: [],
        mobile: null,
<<<<<<< HEAD
        email: null,
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        showFooter: true,
        address: null,
        footerText: null,
        footerDescription: null,
        footerLogo: null,
        footerQr: null,
        socialLinks: [],
        basketCanvas: false,
        search: null,
        categories: [],
        themeColors: {
            primary: null,
            primary50: null,
            primary100: null,
            primary200: null,
            primary300: null,
            primary400: null,
            primary500: null,
            primary600: null,
            primary700: null,
            primary800: null,
            primary900: null,
            primary950: null,
        },
        pusher_app_key: null,
        pusher_app_cluster: null,
<<<<<<< HEAD
        app_environment: 'local',
=======
        app_environment: "local",
        register_otp_verify: false,
        register_otp_type: null,
        forgot_otp_type: null,
        languages: [],
        socialAuths: [],
        phoneRequired: true,
        phoneMinLength: 9,
        phoneMaxLength: 16,
        orderPlaceAccountVerify: false,
        menus: [],
        footers: [],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }),

    getters: {
        getPosition: (state) => {
            return state.position;
        },

        getPlayStoreLink: (state) => {
            return state.playStoreLink;
        },

        getAppStoreLink: (state) => {
            return state.appStoreLink;
        },
        getMultiVendor: (state) => {
            return state.multiVendor;
        },
    },

    actions: {
        fetchData() {
            axios.get("/master").then((response) => {
<<<<<<< HEAD
                this.currency = response.data.data.currency.symbol;
                this.position = response.data.data.currency.position;
                this.playStoreLink = response.data.data.google_playstore_link;
                this.appStoreLink = response.data.data.app_store_link;
                this.multiVendor = response.data.data.multi_vendor;
                this.mobile = response.data.data.mobile;
                this.email = response.data.data.email;
                this.showFooter = response.data.data.web_show_footer;
                this.address = response.data.data.address;
                this.paymentGateways = response.data.data.payment_gateways;
                this.footerText = response.data.data.web_footer_text;
                this.footerDescription = response.data.data.web_footer_description;
                this.footerLogo = response.data.data.web_footer_logo;
                this.footerQr = response.data.data.footer_qr;
                this.logo = response.data.data.web_logo;
                this.socialLinks = response.data.data.social_links;
                this.themeColors = response.data.data.theme_colors;
                this.pusher_app_key = response.data.data.pusher_app_key;
                this.pusher_app_cluster = response.data.data.pusher_app_cluster;
                this.app_environment = response.data.data.app_environment;
                this.showDownloadApp = response.data.data.show_download_app;
            });
        },
        showCurrency(amount) {
            if (this.position == "prefix") {
                return this.currency + amount;
            }
            return amount + this.currency;
=======
                const data = response.data.data;
                this.currency = data.currency;
                this.currencies = data.currencies;
                this.position = data.currency.position;
                this.cashOnDelivery = data.cash_on_delivery;
                this.onlinePayment = data.online_payment;
                this.appName = data.app_name;
                this.playStoreLink = data.google_playstore_link;
                this.appStoreLink = data.app_store_link;
                this.multiVendor = data.multi_vendor;
                this.mobile = data.mobile;
                this.showFooter = data.web_show_footer;
                this.address = data.address;
                this.paymentGateways = data.payment_gateways;
                this.footerText = data.web_footer_text;
                this.footerDescription = data.web_footer_description;
                this.footerLogo = data.web_footer_logo;
                this.footerQr = data.footer_qr;
                this.logo = data.web_logo;
                this.socialLinks = data.social_links;
                this.themeColors = data.theme_colors;
                this.pusher_app_key = data.pusher_app_key;
                this.pusher_app_cluster = data.pusher_app_cluster;
                this.app_environment = data.app_environment;
                this.showDownloadApp = data.show_download_app;
                this.register_otp_verify = data.register_otp_verify;
                this.register_otp_type = data.register_otp_type;
                this.forgot_otp_type = data.forgot_otp_type;
                this.languages = data.languages;
                this.socialAuths = data.social_auths;
                this.phoneRequired = data.phone_required;
                this.phoneMinLength = data.phone_min_length;
                this.phoneMaxLength = data.phone_max_length;
                this.orderPlaceAccountVerify = data.order_place_account_verify;
                this.menus = data.menus;
                this.footers = data.footers;

                if (this.defaultLocale != data.app_locale) {
                    this.locale = data.app_locale;
                    this.defaultLocale = data.app_locale;
                    const defaultLanguage = this.languages.find(
                        (language) => language.name == this.locale
                    );
                    if (defaultLanguage) {
                        this.langDirection = defaultLanguage.direction ?? "ltr";
                    }
                    window.location.reload();
                }

                const defaultCurrency = this.currencies.find(
                    (currency) => currency.is_default == true
                );
                if (this.defaultCurrency != this.currency.name) {
                    this.defaultCurrency = this.currency.name;
                    this.setSelectedCurrency(defaultCurrency);
                } else if (!this.selectedCurrency) {
                    this.setSelectedCurrency(defaultCurrency ?? null);
                }
            });
        },
        setSelectedCurrency(defaultCurrency = null) {
            if (defaultCurrency) {
                this.selectedCurrency = defaultCurrency;
            } else {
                this.selectedCurrency.name = this.currency?.name ?? "USD";
                this.selectedCurrency.symbol = this.currency?.symbol ?? "$";
                this.selectedCurrency.rate = this.currency?.rate ?? 1;
            }
        },

        showCurrency(amount) {
            const currentRateFromDefault =
                this.selectedCurrency?.rate_from_default ?? 1;

            amount = parseFloat(amount * currentRateFromDefault).toFixed(2);

            if (this.currency.position == "prefix") {
                return (this.selectedCurrency?.symbol ?? "$") + amount;
            }
            return amount + (this.selectedCurrency?.symbol ?? "$");
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        },
    },

    persist: true,
});
