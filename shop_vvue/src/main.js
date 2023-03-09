import { createApp } from 'vue'
import App from './App.vue'
import Product from './views/product/Index.vue'
import Main from './views/main/Index.vue'
import router from './router'


const app = createApp(App)
const main = createApp(Main)
const product = createApp(Product)

app.use(router)
main.use(router)
product.use(router)

app.mount('#app')
main.mount('#main')
product.mount('#product')
