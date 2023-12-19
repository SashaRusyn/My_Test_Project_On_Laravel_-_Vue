<template>
    <div>
        <div class="form-group mb-3">
            <label for="exampleInputName">Name</label>
            <input type="text" v-model="updateName" class="form-control" name="name" id="exampleInputName"
                aria-describedby="nameHelp" placeholder="Enter name">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputDescription">Description</label>
            <textarea type="text" v-model="updateDescription" class="form-control" name="description"
                id="exampleInputDescription" placeholder="Enter description"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputImage">Image</label>
            <input type="text" v-model="updateImage" class="form-control" name="image" id="exampleInputImage"
                placeholder="Enter image">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputPrice">Price</label>
            <input type="number" v-model="updatePrice" class="form-control" name="price" id="exampleInputPrice"
                placeholder="Enter price">
        </div>
        <button type="submit" @click.prevent="updateGood" class="btn btn-primary">Update</button>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'EditComponent',
    props: {
        id: {
            required: true,
            type: String,
        },
        name: {
            required: true,
            type: String,
        },
        description: {
            required: true,
            type: String,
        },
        image: {
            required: true,
            type: String,
        },
        price: {
            required: true,
            type: String,
        },
    },
    data() {
        return {
            updateId: Number(this.id),
            updateName: this.name,
            updateDescription: this.description,
            updateImage: this.image,
            updatePrice: Number(this.price),
        }
    },
    methods: {
        updateGood() {
            axios.patch(`/api/goods/${this.updateId}`, { id: this.updateId, name: this.updateName, description: this.updateDescription, image: this.updateImage, price: Number(this.updatePrice) }).then(() => {
                window.location.href = `/goods/${this.updateId}`;
            }
            ).catch(req => { console.log(req); alert('Invalid data') });
        }
    }
}
</script>

<style></style>