<template>
  <div>

      <div id="accordion">

          <div class="card mt-3 mb-3">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Add Work
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
            placeholder="company"
            v-model="fields.name"
            
          />
        </div>

        
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="position"
            v-model="fields.position"
            
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
        <textarea
      class="form-control"
      rows="4"
      placeholder="Summary"
      v-model="fields.summary"
      aria-label="With textarea"
    ></textarea>
  </div>

        
         

        <div class="row input-group mb-3">
          <button type="submit" class="btn btn-primary btn-md">add work</button>
        </div>

        </form>

      </div>
    </div>
  </div>

  <div class="card" v-for="work in resume.work" :key="work.name">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {{work.name}}
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body mx-3">
          
          
         
        
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="company"
            v-model="work.name"
            
          />
        </div>

        
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="position"
            v-model="work.position"
            
          />
        </div>

        
          <div class="row input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="website"
            v-model="work.url"
            
          />
        </div>

        
      
        <div class="row input-group mb-3">
          <input
            type="date"
            class="form-control"
            id="sdate"
            placeholder="Start Date"
            v-model="work.startDate"
          />
        </div>

       
        <div class="row input-group mb-3">
          <input
            type="date"
            class="form-control"
            id="sdate"
            placeholder="End Date"
            v-model="work.endDate"
          />
        </div>

   <div class="row input-group mb-3">
        <textarea
      class="form-control"
      rows="4"
      placeholder="Summary"
      v-model="work.summary"
      aria-label="With textarea"
    ></textarea>
  </div>


        <div class="row input-group mb-3">
          <button class="btn btn-primary btn-sm" v-on:click="remove(work)">remove </button>
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

        this.resume.work.push(
            { 
                name: this.fields.name, 
                url: this.fields.url, 
                position: this.fields.position, 
                startDate: this.fields.startDate,
                endDate: this.fields.endDate,
                summary: this.fields.summary
            } 
        )
    },
    remove(work){

      
        this.resume.work.splice(this.resume.work.indexOf(work), 1);
       
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