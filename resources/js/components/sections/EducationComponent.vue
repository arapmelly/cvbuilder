<template>
  <div>

      <div id="accordion">

          <div class="card mt-3 mb-3">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Add Education
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
            placeholder="institution"
            v-model="fields.institution"
            
          />
        </div>

        
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="website"
            v-model="fields.url"
            
          />
        </div>

        
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="study area"
            v-model="fields.area"
            
          />
        </div>

         <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="study type"
            v-model="fields.studyType"
            
          />
        </div>

      
        <div class="row input-group mb-3">
          <input
            type="date"
            class="form-control"
            id="sdate"
            placeholder="Start Date"
            v-model="fields.startDate"
          />
        </div>

       
        <div class="row input-group mb-3">
          <input
            type="date"
            class="form-control"
            id="sdate"
            placeholder="End Date"
            v-model="fields.endDate"
          />
        </div>

        <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="score"
            v-model="fields.score"
            
          />
        </div>

         

        <div class="row input-group mb-3">
          <button type="submit" class="btn btn-primary btn-md">add education</button>
        </div>

        </form>

      </div>
    </div>
  </div>

  <div class="card" v-for="education in resume.education" :key="education.institution">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {{education.institution}}
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body mx-3">
          
          
         
        
           <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="institution"
            v-model="education.institution"
            
          />
        </div>

        
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="website"
            v-model="education.url"
            
          />
        </div>

        
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="study area"
            v-model="education.area"
            
          />
        </div>

         <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="study type"
            v-model="education.studyType"
            
          />
        </div>

      
        <div class="row input-group mb-3">
          <input
            type="date"
            class="form-control"
            id="sdate"
            placeholder="Start Date"
            v-model="education.startDate"
          />
        </div>

       
        <div class="row input-group mb-3">
          <input
            type="date"
            class="form-control"
            id="sdate"
            placeholder="End Date"
            v-model="education.endDate"
          />
        </div>

        <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="score"
            v-model="education.score"
            
          />
        </div>


        <div class="row input-group mb-3">
          <button class="btn btn-primary btn-sm" v-on:click="remove(education)">remove </button>
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

        this.resume.education.push(
            { 
                institution: this.fields.institution, 
                url: this.fields.url, 
                area: this.fields.area, 
                studyType: this.fields.studyType,
                startDate: this.fields.startDate,
                endDate: this.fields.endDate,
                score: this.fields.score
            } 
        )
    },
    remove(education){

      
        this.resume.education.splice(this.resume.education.indexOf(education), 1);
       
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