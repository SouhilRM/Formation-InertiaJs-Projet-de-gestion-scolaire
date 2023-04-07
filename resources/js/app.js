import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

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
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})