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
          <h1>Book A Room</h1>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </v-col>
        <v-col
          cols="12"
          md="6"
          class="two-half"
          align="center"
          justify="center"
        >
            <img src="@/assets/hotel.jpg" alt="">
        </v-col>
      </v-row>
      <v-row>
          <v-col
            cols="12"
            align="center"
            justify="center"
          >
              <h1>Rooms</h1>
          </v-col>
      </v-row>
      <v-row>
        <v-col
        v-for="(room, index) in rooms" :key="index"
          cols="4"
          class="p-4"

        >
          <v-card
            class="mx-auto"
            max-width="400"
          >
            <v-img
              class="white--text align-end"
              height="200px"
              :src="urlOfImg(room.img)"
            >
            </v-img>

            <v-card-subtitle class="pb-0">{{ room.title }}</v-card-subtitle>

            <v-card-text class="text--primary">
              <div>{{ room.price }}&euro;</div>

              <div>{{ room.description }}</div>
            </v-card-text>
            <v-card-actions>
                <v-btn
                  color="orange"
                  text
                  @click="bookARoom"
                >
                  Book a room
                </v-btn>
            </v-card-actions>
          </v-card>
        </v-col>
      </v-row>

    
    </v-container>
  </v-app>
</template>

<script>
import axios from 'axios';


export default {
  name: 'Book',
  data() {
    return {
      imgPath: 'http://localhost:8888/public/img/',
      rooms: []
    }
  },
  methods: {
    urlOfImg(img){
      var url = this.imgPath + img;
      console.log(url)
      return (url)
    },
    bookARoom(){
      this.$router.push({path: '/gz'})
    }
  },
  beforeMount() {
    axios.get('http://localhost:8888/api/rooms')
    .then(response=>{
      this.rooms = response.data
    })
  }
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
    color: white!important;
    display: inline-block;
    padding: 5px;
    margin: 10px;
    text-transform: uppercase;
    border-radius: 10px;
  }
}
.two-half {
  img {
    width: 400px;
    height: 300px;
    border-radius: 10px;
  }
}

button {
    margin: 5px;
}

</style>
