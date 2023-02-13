<script setup>
import useSkills from '../../composables/skills';
import { onMounted } from 'vue';
const { skills, getSkills } = useSkills();
onMounted(() => getSkills());
</script>
<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <RouterLink :to="{ name: 'skillCreate' }" class="btn btn-primary text-white"
                        style="margin-top:30px">
                        New Skill</RouterLink>
                </div>
                <div style="margin-top:30px">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="skill in skills" :key="skill.id">
                                <td>{{ skill.id }}</td>
                                <td>{{ skill.name }}</td>
                                <td>{{ skill.slug }}</td>
                                <td>
                                    <div>
                                        <RouterLink :to="{ name: 'skillEdit', params: {id: skill.id} }" class="btn btn-success text-white"
                                            style="">Edit</RouterLink>
                                        <!-- <RouterLink :to="{ name: 'skillDelete' }" class="btn btn-danger text-white"
                                            style="margin-top:30px">Delete</RouterLink> -->
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</template>