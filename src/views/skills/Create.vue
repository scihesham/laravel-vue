<script setup>
import { ref } from 'vue';
import useSkills from '../../composables/skills';
const { createSkill } = useSkills();
const form = ref({
    name: '',
    slug: '',
});
</script>
<template>
    <div class="container">
        <div style="margin-top:20px">
            <form @submit.prevent="createSkill(form)">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" v-model="form.name" class="form-control" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="name">Slug</label>
                    <input type="text" v-model="form.slug" class="form-control" id="slug" placeholder="Enter Slug">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</template>