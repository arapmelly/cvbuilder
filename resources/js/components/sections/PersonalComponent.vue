<template>
  <div>
    <div class="input-group mb-3 mt-3">
      <input
        type="text"
        class="form-control"
        placeholder="Name"
        v-model="resume.basics.name"
      />
    </div>
    <div class="input-group mb-3">
      <input
        type="text"
        class="form-control"
        placeholder="Designation"
        v-model="resume.basics.label"
      />
    </div>
    <div class="input-group mb-3">
      <input
        type="text"
        class="form-control"
        placeholder="Address"
        v-model="resume.basics.location.address"
      />
    </div>
    <div class="input-group mb-3">
      <input
        type="text"
        class="form-control"
        placeholder="Phone No."
        v-model="resume.basics.phone"
      />
    </div>
    <div class="input-group mb-3">
      <input
        type="text"
        class="form-control"
        placeholder="Email Id"
        v-model="resume.basics.email"
      />
    </div>

    <div class="form-group mb-3">

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
  data: function () {
      return {
        name: this.resume.basics.name,
      }
  },
  methods:{
      updateName: function(event){
         this.$emit("update-personal-name", 'Jacob Chumo') ;
      },

      saveResume: function(){
        localStorage.setItem('resumedata', JSON.stringify(this.resume));
        $('.active').removeClass('active'); 
         
      },
      closeEditor: function(event){

        //e.preventDefault()
        //$('.nav-personal a').tab('dispose')

        $('.active').removeClass('active');
      }
  }
};
</script>
