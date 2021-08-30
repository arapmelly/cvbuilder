<template>
  <div>

      <div id="accordion">

          <div class="card mt-3 mb-3">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Add reference
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
      
  
      
      <div class="card-body mx-3">

              <form @submit.prevent="submit">
       
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="reference name"
            v-model="fields.name"
            
          />
        </div>

        
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="reference email"
            v-model="fields.email"
            
          />
        </div>

        
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="reference company"
            v-model="fields.company"
            
          />
        </div>

        <div class="row input-group mb-3">
          <button type="submit" class="btn btn-primary btn-md">add reference</button>
        </div>

        </form>

      </div>
    </div>
  </div>

  <div class="card" v-for="reference in resume.references" :key="reference.name">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {{reference.name}}
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body mx-3">
          
          
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="reference name"
            v-model="reference.name"
            
          />
        </div>

        
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="reference email"
            v-model="reference.email"
            
          />
        </div>

        
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="reference company"
            v-model="reference.company"
            
          />
        </div>

        <div class="row input-group mb-3">
          <button class="btn btn-primary btn-sm" v-on:click="remove(reference)">remove </button>
        </div>

      </div>
    </div>
  </div>

    <div class="form-group mt-3 mb-3">

      <button class="btn btn-danger float-left" v-on:click="closeEditor()">close </button> 

      <button class="btn btn-primary float-right" v-on:click="saveResume()">save </button> 

      
    </div>


 
  
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
        fields: {},
        errors: {}
      }
  },
  methods: {
    submit(){

        this.resume.references.push({ name: this.fields.name, email: this.fields.email, company: this.fields.company } )
    },
    remove(reference){

      
        this.resume.references.splice(this.resume.references.indexOf(reference), 1);
       
    },

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