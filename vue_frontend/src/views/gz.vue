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
                <h1>Booked and ready</h1>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </v-col>
                <v-col
                cols="12"
                md="6"
                class="two-half"
                align="center"
                justify="center"
                >
                    <img src="@/assets/booking.jpeg" alt="">
                </v-col>
            </v-row>
            <v-row>
                <v-col
                 cols="12"
                 align="center"
                 justify="center"
                >
                    <h1>Congratsulations, you have booked your room!</h1>
                    <img src="@/assets/enjoy.jpeg" alt="" class="enjoy">
                </v-col>
            </v-row>
        </v-container>
    </v-app>
</template>

<script>
export default {
    name: 'gz',
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

.enjoy {
    height: 300px;
    width: 300px;
    margin: 20px;
    border-radius: 50%;
}

</style>