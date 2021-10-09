<template>
  <div>
    <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">
      Site Stats
    </h1>

    <input
      placeholder="Your API token"
      class="border p-2 rounded w-full mb-8"
      v-model="token"
      @keyup.enter='fetchStats'
    />

    <p class="text-red text-sm italic" v-if="message" v-text="message"></p>

    <ul>
      <li><strong>Total series: </strong>{{ series }}</li>
      <li><strong>Total lessons: </strong>{{ lessons }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      series: 0,
      lessons: 0,
      token: "",
      message:''
    };
  },

  methods: {
    fetchStats() {
        axios
        .get("http://localhost:5000/api/stats?api_token=" + this.token)
        .catch(error=>{
            this.message=error.response.data.message;
        })
        .then((response) => {
          let { data } = response;
          this.series = data.series;
          this.lessons = data.lessons;
          this.message='';
        });
    },
  },
};
</script>
