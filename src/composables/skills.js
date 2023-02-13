import {ref} from "vue";
import axios from "axios";
import { useRouter } from "vue-router";

axios.defaults.baseURL = 'http://localhost/vue/public/api/';

export default function useSkills(){
    const skills = ref([]);
    const skill = ref([]);
    const router = useRouter();

    const getSkills = async () => {
        const res = await axios.get('skills');
        skills.value = res.data.skills;
        console.log('////////////////sss')
        console.log(skills)
    }

    const showSkill = async (id) => {
        const res = await axios.get('skills/' + id);
        skill.value = res.data.skill;
    }

    const createSkill = async (data) => {
        // console.log(data);
        // alert(777);
        try{
            const res = await axios.post('skills', data);
            router.push({name: "skillIndex"})
        }
        catch(e){
        }
    }

    const updateSkill = async (id) => {
        const res = await axios.patch('skills/' + id, skill.value);
        router.push({name: "skillIndex"})
    }

    const destroySkill = async (id) => {
        if(! window.confirm('Are You Sure ?')){
            return;
        }
        const res = await axios.put('skills/' + id);
        router.push({name: "skillIndex"})
    }

    return {
        skill,
        skills,
        getSkills,
        showSkill,
        createSkill,
        updateSkill,
        destroySkill
    }
}