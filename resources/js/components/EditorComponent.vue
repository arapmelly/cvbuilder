<template>
  <div>
 

    <div class="tab-content" id="nav-tabContent">
      <div
        class="tab-pane fade show active"
        id="nav-personal"
        role="tabpanel"
        aria-labelledby="nav-personal-tab"
      >
        <personal-component :resume="resume"></personal-component>
      </div>

      <div
        class="tab-pane fade"
        id="nav-objective"
        role="tabpanel"
        aria-labelledby="nav-objective-tab"
      >
         <objective-component :resume="resume"></objective-component>
      </div>

      <div
        class="tab-pane fade"
        id="nav-skills"
        role="tabpanel"
        aria-labelledby="nav-skills-tab"
      >
        
        <skill-component :resume="resume"></skill-component>
      </div>

      <div
        class="tab-pane fade"
        id="nav-educational"
        role="tabpanel"
        aria-labelledby="nav-educational-tab"
      >
        
        <education-component :resume="resume"></education-component>
      </div>

      <div
        class="tab-pane fade"
        id="nav-achievement"
        role="tabpanel"
        aria-labelledby="nav-achievement-tab"
      >
        
       
        
      </div>

      <div
        class="tab-pane fade"
        id="nav-experience"
        role="tabpanel"
        aria-labelledby="nav-experience-tab"
      >
        
       
        
       <work-component :resume="resume"></work-component>
        
        
      </div>

      <div
        class="tab-pane fade"
        id="nav-referee"
        role="tabpanel"
        aria-labelledby="nav-referee-tab"
      >
        
       
        
       <referee-component :resume="resume"></referee-component>
        
        
      </div>

    </div>
  </div>
</template>

<script>
export default {
  name: "EditorComponent",
  props: {
    resume: {
      type: Object,
      required: true,
    },
  },
};
</script>
