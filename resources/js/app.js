import './bootstrap';
import { createApp } from "vue";
import App from "./App.vue";
import $ from "jquery";

window.$ = window.jQuery = $;

import breakpoints from "./breakpoints.min.js";
import "./util.js";
import "./main.js";

window.breakpoints = breakpoints;

import { PerfectScrollbarPlugin } from 'vue3-perfect-scrollbar';
import 'vue3-perfect-scrollbar/style.css';

const app = createApp(App);
app.use(PerfectScrollbarPlugin);
app.mount("#app");
