<template>
<div>
    <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-6">
        Your Achievements
    </h1>

    <ul>
        <li
            v-for="achievement in achievements"
            v-text="achievement.name"
            ></li>
    </ul>
</div>

</template>

<script>
export default {
    data() {
        return {
            achievements:[]
        };
    },

    created() {
        axios.get('http://localhost:5000/api/achievements?remember_token=jfhIk87%fklp-67&wWwWegt')
            .then(console.log);
    }

};
</script>


