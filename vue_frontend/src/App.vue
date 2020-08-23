<template>
  <v-app>
    <v-navigation-drawer
      v-model="drawer"
      app
    >
      <v-list dense>
        <v-list-item link>
          <v-list-item-action>
            <v-icon>mdi-home</v-icon>
          </v-list-item-action>
          <v-list-item-content>
          <router-link to="/">Home</router-link>
          </v-list-item-content>
        </v-list-item>
        <v-list-item link>
          <v-list-item-action>
            <v-icon>mdi-information</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <router-link to="about">About</router-link>
          </v-list-item-content>
        </v-list-item>
        <v-list-item link>
          <v-list-item-action>
            <v-icon>mdi-bed</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <router-link to="book">Book A Room</router-link>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar
      app
      color="teal"
      dark
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title class="white--text">Hotel</v-toolbar-title>
    </v-app-bar>

    <v-main>
          <router-view/>
          <Cookie/>
    </v-main>
    <v-footer
      color="teal"
      app
    >
      <v-row
        align="center"
        justify="center"
      >
        <v-col 
          class="text-center footer_nav"
          cols="12"
        >
          <router-link to="/">Home | </router-link>
          <router-link to="/about">About | </router-link>
          <router-link to="/book">Book A Room</router-link>
        </v-col>
        <v-col
          class="text-center"
          cols="12"
        >
          <span class="white--text">&copy; {{ new Date().getFullYear() }}</span>
        </v-col>
      </v-row>
    </v-footer>
  </v-app>
</template>

<script>
import Cookie from './components/Cookie'
  export default {
    props: {
      source: String,
    },
    components: {
      Cookie
    },
    data: () => ({
      drawer: null,
    }),
    mounted() {
      console.log(this.$store.state.number)
    }
  }
</script>

<style lang="scss">
.v-application{
      a {
      color: black!important;
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
    }
}

.footer_nav {
  a {
    color: white!important;
    text-decoration: none;
  }
}
</style>