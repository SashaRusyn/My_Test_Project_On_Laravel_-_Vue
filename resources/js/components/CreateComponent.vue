<template>
    <div>
        <div class="form-group mb-3">
            <label for="exampleInputName">Name</label>
            <input type="text" v-model="name" class="form-control" name="name" id="exampleInputName"
                aria-describedby="nameHelp" placeholder="Enter name">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputDescription">Description</label>
            <textarea type="text" v-model="description" class="form-control" name="description" id="exampleInputDescription"
                placeholder="Enter description"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputImage">Image</label>
            <input v-model="image" class="form-control" name="image" id="exampleInputImage" placeholder="Enter image">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputPrice">Price</label>
            <input type="number" v-model="price" class="form-control" name="price" id="exampleInputPrice"
                placeholder="Enter price">
        </div>
        <button type="submit" @click.prevent="addGood" class="btn btn-primary">Create</button>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'CreateComponent',
    data() {
        return {
            name: null,
            description: null,
            image: null,
            price: null,
        }
    },
    methods: {
        addGood() {
            axios.post('/api/goods', { name: this.name, description: this.description, image: this.image, price: this.price }).then(() => {
                this.name = null;
                this.description = null;
                this.image = null;
                this.price = null;
                window.location.href = '/goods';
            }
            ).catch(req => { console.log(req); alert('Invalid data') });
        }
    }
}
</script>

<style></style>