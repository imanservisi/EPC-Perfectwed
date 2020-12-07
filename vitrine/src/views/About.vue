<template>
  <div class="about">
    <div>
      <div class="containerPerso mb-5">
        <div class="cardPerso my-3">
          <div v-if='note'>
            <p class="font-weight-bold text-capitalize">Hello World</p>
            <div class="font-italic">
              <hr>
              {{onecontent}}
              <hr>
            </div>
            <div class="mt-2">
              <b-button class="btn btn-success mr-1">Edit</b-button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h1></h1>
  </div>
</template>
