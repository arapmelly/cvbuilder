<template>
  <div>
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a
          class="nav-item nav-link "
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
