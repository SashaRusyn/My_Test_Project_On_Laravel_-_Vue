<template>
    <div class="m-auto w-50 d-flex flex-column">
        <input type="text" v-model="name" class="form-control mb-2" placeholder="Name">
        <input type="number" v-model="min_price" class="form-control mb-2" placeholder="Min_Price">
        <input type="number" v-model="max_price" class="form-control mb-2" placeholder="Max_Price">
        <good-table :goods="filGoods"></good-table>
    </div>
</template>

<script>
import GoodTable from './GoodTable.vue';
import axios from 'axios';

export default {
    name: 'FilterListPage',
    data() {
        return {
            name: '',
            min_price: 0,
            max_price: 99999999999,
            goods: null,
            filGoods: this.goods,
        }
    },
    methods: {
        getGoods() {
            axios.get('/api/goods').then(res => {
                this.goods = res.data;
                this.filGoods = this.goods;
            }).catch(req => console.log(req));
        },
        filteredGoods() {
            this.filGoods = [...this.goods].filter(good => good.name.includes(this.name)).filter(good => good.price > this.min_price).filter(good => good.price < this.max_price);
        }
    },
    mounted() {
        this.getGoods();
    },
    components: {
        GoodTable,
    },
    watch: {
        name() {
            this.filteredGoods()
        },
        min_price() {
            this.filteredGoods();
        },
        max_price() {
            this.filteredGoods();
        }
    }
}
</script>

<style></style>