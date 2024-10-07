import AddToCart from './components/AddToCart.js';

const app = Vue.createApp({
    data() {
        return {
            message: 'Heckin Snackers v3.0',
        }
    }
});

// Register the component in the same Vue app instance
app.component('add-to-cart', AddToCart);

app.mount('#app');