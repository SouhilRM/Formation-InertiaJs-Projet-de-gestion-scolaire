import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { ZiggyVue } from 'ziggy'
import Layout from './Pages/Back-end/Layouts/MainLayout.vue'

import "../assets/plugins/jquery/jquery-3.5.1.min.js"
import "../assets/plugins/bootstrap/js/bootstrap.min.js"
import "../assets/plugins/pace/pace.min.js"
import "../assets/plugins/apexcharts/apexcharts.min.js"

import "../assets/js/main.min.js"
import "../assets/js/custom.js"
//import "../assets/js/pages/dashboard.js"

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = page.default.layout || Layout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .mount(el)
  },
})