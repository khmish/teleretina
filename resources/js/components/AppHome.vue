<template>
  <div>
    <v-container grid-list-md>
      <v-layout text-xs-center wrap row justify-center>
        <v-flex xs12 mb-5>
          <v-container class="pa-0 py-5 my-5">
            <v-img src="/res/logo.png" class="my-3" contain height="96"></v-img>
            <h1 class="display-2 font-weight-bold mb-3">Welcome to TeleRetina</h1>
            <p class="subheading font-weight-regular">{{ headline }}</p>
          </v-container>
        </v-flex>

        <v-flex xs12 md4>
          <v-container class="grey lighten-4 round" fill-height>
            <v-layout row wrap text-xs-center>
              <v-flex xs12>
                <div class="headline pb-3 primary--text font-weight-bold">About Us</div>
              </v-flex>
              <v-flex
                xs12
              >Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti fuga, sunt, laborum nobis, sequi iusto cumque ea debitis mollitia quos inventore a unde. Quod quam laudantium natus nisi culpa consequatur!</v-flex>
            </v-layout>
          </v-container>
        </v-flex>

        <v-flex xs12 md4>
          <v-container class="grey lighten-4 round" fill-height>
            <v-layout row wrap text-xs-center>
              <v-flex xs12>
                <div class="headline pb-3 primary--text font-weight-bold">Vision</div>
              </v-flex>
              <v-flex
                xs12
              >Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus harum ut ipsum error autem eum!</v-flex>
            </v-layout>
          </v-container>
        </v-flex>

        <v-flex xs12 md4>
          <v-container class="grey lighten-4 round" fill-height>
            <v-layout row wrap text-xs-center>
              <v-flex xs12>
                <div class="headline pb-3 primary--text font-weight-bold">Message</div>
              </v-flex>
              <v-flex
                xs12
              >Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ab odit quisquam obcaecati adipisci pariatur, unde maiores, placeat dolor eveniet rem architecto laudantium facere exercitationem non dicta? Veritatis, totam vero!</v-flex>
            </v-layout>
          </v-container>
        </v-flex>

        <v-flex xs12 md4>
          <v-container class="grey lighten-4 round" fill-height>
            <v-layout row wrap text-xs-center>
              <v-flex xs12>
                <div class="headline pb-3 primary--text font-weight-bold">Goals</div>
              </v-flex>
              <v-flex
                xs12
              >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident quibusdam delectus assumenda minus quisquam quod architecto reprehenderit. Recusandae, eius minima.</v-flex>
            </v-layout>
          </v-container>
        </v-flex>

        <v-flex xs12 md4>
          <v-container class="grey lighten-4 round" fill-height>
            <v-layout row wrap text-xs-center>
              <v-flex xs12>
                <div class="headline pb-3 primary--text font-weight-bold">Our Target</div>
              </v-flex>
              <v-flex
                xs12
              >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque vero corporis fugit!</v-flex>
            </v-layout>
          </v-container>
        </v-flex>

        <v-flex xs12 mt-2>
          <v-container class="pa-0 py-5 my-5" style="border: 1px dashed grey">
            <div class="headline font-weight-bold">Advertisement Panel</div>
          </v-container>
        </v-flex>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
export default {
  data: () => ({
    headline:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque atque error porro repellat numquam ex sed. Tempora repellendus soluta sequi officiis, dignissimos aliquam sint distinctio sapiente suscipit aut laborum natus!."
  }),
  mounted() {
    // this.$vuetify.rtl = true;
  }
};
</script>

<style>
.round {
  border-radius: 5px;
}

.primary--text .v-label{
  color: inherit;
}
</style>