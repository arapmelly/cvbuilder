<template>
  <div>
    <nav>
      <div class="row nav nav-tabs" id="nav-tab" role="tablist">
        <a
          class="nav-item nav-link active"
          id="nav-personal-tab"
          data-toggle="tab"
          href="#nav-personal"
          role="tab"
          aria-controls="nav-personal"
          aria-selected="true"
          >Personal</a
        >
        <a
          class="nav-item nav-link"
          id="nav-objective-tab"
          data-toggle="tab"
          href="#nav-objective"
          role="tab"
          aria-controls="nav-objective"
          aria-selected="false"
          >Objective</a
        >
        <a
          class="nav-item nav-link"
          id="nav-skills-tab"
          data-toggle="tab"
          href="#nav-skills"
          role="tab"
          aria-controls="nav-skills"
          aria-selected="false"
          >Skills</a
        >
        <a
          class="nav-item nav-link"
          id="nav-educational-tab"
          data-toggle="tab"
          href="#nav-educational"
          role="tab"
          aria-controls="nav-educational"
          aria-selected="false"
          >Education</a
        >
        <!-- <a
          class="nav-item nav-link"
          id="nav-achievement-tab"
          data-toggle="tab"
          href="#nav-achievement"
          role="tab"
          aria-controls="nav-achievement"
          aria-selected="false"
          >Achievements</a
        > -->
        <a
          class="nav-item nav-link"
          id="nav-experience-tab"
          data-toggle="tab"
          href="#nav-experience"
          role="tab"
          aria-controls="nav-experience"
          aria-selected="false"
          >Work Experience</a
        >
        <a
          class="nav-item nav-link"
          id="nav-referee-tab"
          data-toggle="tab"
          href="#nav-referee"
          role="tab"
          aria-controls="nav-referee"
          aria-selected="false"
          >Referees</a
        >
      </div>
    </nav>

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
