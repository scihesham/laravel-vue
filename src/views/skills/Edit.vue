<script setup>
import { ref } from 'vue';
import { onMounted } from 'vue';
import useSkills from '../../composables/skills';
const { skill, showSkill, updateSkill } = useSkills();
const props = defineProps({
   id: {
    required: true,
    type: String
   } 
});
onMounted(() => showSkill(props.id));
</script>
<template>
    <div class="container">
        <div style="margin-top:20px">
            <form @submit.prevent="updateSkill(skill.id)">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" v-model="skill.name" class="form-control" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" v-model="skill.slug" class="form-control" id="slug" placeholder="Enter Slug">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</template>