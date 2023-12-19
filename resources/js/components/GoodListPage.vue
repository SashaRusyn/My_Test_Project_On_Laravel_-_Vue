<template>
    <div class="m-auto w-50 d-flex flex-column">
        <good-table :goods="this.pageGoods"></good-table>
        <div class="page__wrapper">
            <div v-for="page in this.totalPages  " :key="page" class="page"
                :class="{ 'current-page': page === currentPage }" @click="changePage(page)">{{ page }}</div>
        </div>
    </div>
</template>

<script>
import GoodTable from './GoodTable.vue';
import axios from 'axios';

export default {
    name: 'GoodListPage',
    data() {
        return {
            goods: null,
            currentPage: 1,
            limit: 10,
            pageGoods: null,
            totalPages: 1,
        }
    },
    methods: {
        getGoods() {
            axios.get('/api/goods').then(res => {
                this.goods = res.data;
                this.pageGoods = this.goods.slice(0, 10);
                this.totalPages = Math.ceil(this.goods.length / this.limit);
            }).catch(req => console.log(req));
        },
        changePage(page) {
            this.currentPage = page;
            this.pageGoods = this.goods.slice(10 * (page - 1), (10 * (page - 1)) + 10);
        }
    },
    mounted() {
        this.getGoods();
    },
    components: {
        GoodTable,
    },
}
</script>

<style>
.page__wrapper {
    display: flex;
    flex-direction: row;
    gap: 1rem;
}

.page {
    border-radius: 15%;
    padding: 1rem;
    border: 1px solid lightgray;
}

.current-page {
    background-color: lightgray;
}
</style>