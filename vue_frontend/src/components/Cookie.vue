<template>
  <div v-if="display">
    <v-card id="cookieBanner"> 
      <div class="d-flex justify-center  align-center black pt-5 pb-5">
        <span class="mr-5 white--text">Our site uses cookies.</span>
        <v-btn
        class="white black--text mr-5"
        @click="toggleCookiePrompt"
        >
          OK
        </v-btn>
      </div>
    </v-card>
  </div>
</template>
<script>
export default {
  name:'Cookie',
  data(){
    return {
      display:true,
      cookieObj:'',
      acceptCookies:''
    }
  },
  methods: {
    toggleCookiePrompt(){
      if(this.display == true){
        this.cookieObj.create('acceptedCookies','true',10)
        this.checkCookie()
      }
    },

    checkCookie(){
      this.acceptCookies = this.cookieObj.read('acceptedCookies')
      if(!this.acceptCookies){
        this.display = true;
      } else {
        this.display = false;
      }
    }
  },
  beforeMount() {
    this.cookieObj = new this.$cookie;
    this.checkCookie()
  }
}
</script>
<style scoped lang="scss">
  #cookieBanner {
    margin:0;
    padding:0 ;
    position:fixed;
    top:90vh;
    right: 10px;
    width:300px;
    z-index: 1000;
  }
</style>