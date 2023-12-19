import Vue from 'vue';
import CreateComponent from './components/CreateComponent';
import EditComponent from './components/EditComponent';
import FilterListPage from './components/FilterListPage';
import GoodListPage from './components/GoodListPage';
import GoodTable from './components/GoodTable';

require('./bootstrap');

const app = new Vue({
    el: '#app',
    components: {
        CreateComponent,
        EditComponent,
        FilterListPage,
        GoodListPage,
        GoodTable,
    }
});
