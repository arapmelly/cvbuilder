<template>
<div>
    <div class="input-group mt-3">
    <textarea
        class="form-control"
        rows="4"
        placeholder="Short description of yourself"
        v-model="resume.basics.summary"
        aria-label="With textarea"
    ></textarea>
    </div>


    <div class="form-group mt-3 mb-3">

      <button class="btn btn-danger float-left" v-on:click="closeEditor()">close </button> 

      <button class="btn btn-primary float-right" v-on:click="saveResume()">save </button> 

      
    </div>


    </div>

</template>
<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
    props: {
        resume: {
            type: Object,
            required: true,
        },
    },
    methods:{
      
      saveResume: function(){
        localStorage.setItem('resumedata', JSON.stringify(this.resume));
        $('.active').removeClass('active'); 
         
      },
      closeEditor: function(event){

        $('.active').removeClass('active');
      }
  }

};
</script>
