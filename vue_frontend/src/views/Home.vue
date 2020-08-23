<template>
  <v-app>
    <v-container
      fluid
    >
      <v-row
          align="center"
          justify="center"
          class="hero"
      >
        <v-col
          cols="12"
          md="6"
          class="one-half"
          align="center"
          justify="center"
        >
          <h1>Hotel booking</h1>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <v-btn small color="teal"><router-link to="/book">Book A Room</router-link></v-btn>

        </v-col>
        <v-col
          cols="12"
          md="6"
          class="two-half"
          align="center"
          justify="center"
        >
            <img src="@/assets/hero.jpg" alt="">
        </v-col>
      </v-row>
      <v-row
        align="center"
        justify="center"
        class="content"
      >
        <v-col
          cols="12"
          md="4"
          align="center"
          justify="center"
          class="one-third"
        >
          <h2><span><v-icon color="teal" large>mdi-bag-checked</v-icon></span> Room Menagment</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa odit sequi voluptatibus fugit magnam quaerat esse beatae impedit iste vero.</p>
          <router-link to="/about">Learn More</router-link>
        </v-col>
        <v-col
          cols="12"
          md="4"
          align="center"
          justify="center"
          class="two-third"
        >
          <h2><span><v-icon color="teal" large>mdi-airplane</v-icon></span> Customer Menagment</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa odit sequi voluptatibus fugit magnam quaerat esse beatae impedit iste vero.</p>
          <router-link to="/about">Learn More</router-link>
        </v-col>
        <v-col
          cols="12"
          md="4"
          align="center"
          justify="center"
          class="three-third"
        >
          <h2><span><v-icon color="teal" large>mdi-leaf</v-icon></span> Booking Menagment</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa odit sequi voluptatibus fugit magnam quaerat esse beatae impedit iste vero.</p>
          <router-link to="/about">Learn More</router-link>
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>

<script>


export default {
  name: 'Home',

}
</script>

<style lang="scss" scoped>
.hero {
  margin-bottom: 70px;
  background-color: rgb(250, 250, 250);
}

.one-half {
  h1 {
    background: #009688;
    color: white;
    display: inline-block;
    padding: 5px;
    margin: 10px;
    text-transform: uppercase;
    border-radius: 10px;
  }
  a {
    text-decoration: none;
    color: white!important;
    text-transform: uppercase;
  }
}
.two-half {
  img {
    width: 400px;
    height: 300px;
    border-radius: 10px;
  }
}

.content{
  h2 {
    margin-bottom: 10px;
  }
  p {
    color: rgb(163, 158, 158);
  }
  a {
    text-decoration: none;
    color: #009688!important;
  }
}
</style>
