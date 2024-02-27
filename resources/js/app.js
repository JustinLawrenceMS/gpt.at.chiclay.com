import './bootstrap';
import { createApp } from "vue";
import App from "./App.vue";
import $ from "jquery";

window.$ = window.jQuery = $;

import breakpoints from "./breakpoints.min.js";
import "./util.js";
import "./main.js";

window.breakpoints = breakpoints;

import PerfectScrollbar from "vue3-perfect-scrollbar";

const app = createApp(App);
app.use(PerfectScrollbar);
app.mount("#app");
