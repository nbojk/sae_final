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
          <h1>About Us</h1>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <v-btn small color="teal" class="white--text"><router-link to="/book">Book A Room</router-link></v-btn>

        </v-col>
        <v-col
          cols="12"
          md="6"
          class="two-half"
          align="center"
          justify="center"
        >
            <img src="@/assets/about.jpg" alt="">
        </v-col>
      </v-row>
      <v-row
        align="center"
        justify="center"
        class="story"
      >
        <v-col
          cols="12"
          align="center"
          justify="center"
        >
          <h1>Our Story</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione officiis consequatur quo optio consequuntur minima tenetur tempora modi perspiciatis commodi incidunt numquam est reiciendis doloremque laboriosam ad quas, delectus ipsum. Perspiciatis consequuntur velit alias, sunt optio cum accusamus quisquam aperiam esse eveniet veniam consequatur earum ea obcaecati nihil aliquid nesciunt quas illum! Ab soluta asperiores molestiae tempora ea praesentium corrupti fugit et eius dolorum exercitationem recusandae, numquam quasi minima quas nihil vitae iure doloremque. Ratione sed expedita voluptatibus, cumque cupiditate vel beatae! Consectetur obcaecati delectus consequatur qui alias. Aut reiciendis officiis voluptates, error omnis, quo exercitationem eum, ex natus eos magni perspiciatis possimus. Ratione hic officia nulla obcaecati eaque officiis!</p>
        </v-col>
      </v-row>
      <v-row
        align="center"
        justify="center"
        class="rooms"
      >
        <v-col
          cols="12"
          align="center"
          justify="center"
        >
          <img src="@/assets/room1.jpg" alt="">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </v-col>
        <v-col
          cols="12"
          align="center"
          justify="center"
        >
          <img src="@/assets/room2.jpg" alt="">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </v-col>
        <v-col
          cols="12"
          align="center"
          justify="center"
        >
          <img src="@/assets/room3.jpg" alt="">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>

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

.story {
  h1 {
    margin-bottom: 20px;
  }
  p {
    color: rgb(163, 158, 158);
  }
}

.rooms {
  a {
    color: white!important;
  }
  p {
    color: rgb(163, 158, 158);
    font-size: 12px;
  }
}

img {
  width: 400px;
  height: 300px;
  border-radius: 10px;
  margin: 10px 10px 15px 10px;
  display: block
}
</style>
