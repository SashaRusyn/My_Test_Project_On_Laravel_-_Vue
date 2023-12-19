<template>
    <div>
        <table class="table m-auto w-50">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="good in goods">
                    <td scope="row">{{ good.id }}</td>
                    <td><a href="#" @click.prevent="getLink(good.id)">{{ good.name }}</a></td>
                    <td>{{ good.image }}</td>
                    <td>{{ good.price }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: {
        goods: {
            type: Array,
            require: true,
        }
    },
    methods: {
        getLink(id) {
            window.location.href = `/goods/${id}`;
        }
    },
}
</script>

<style>
a {
    color: blue;
}
</style>