import axios from "axios";
window.axios = axios;

require("./bootstrap");

window.Vue = require("vue").default;

import Vue from "vue";

// Tambahan Code
import VueRouter from "vue-router";
// Menggunakan router pada vue nya
Vue.use(VueRouter);

// Import router yang sudah dibuat
import routes from "./router";

Vue.component("navigation", require("./components/Navigation.vue").default);

const app = new Vue({
    el: "#app",
    router: new VueRouter(routes),
});
