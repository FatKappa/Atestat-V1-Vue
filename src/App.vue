<template>
  <div id="app">
    <nav
      class="text-white text-2xl fixed top-0 flex justify-between bg-black w-full">
      <div class="p-2">
        <a href="#" class="mr-2 hover:rounded-sm rounded-sm p-2 hover:text-blue-600"><router-link to="/">Acasa</router-link></a>
<!-- dropdown -->
          <div class="inline-block relative">
        <button @click="isOpen=!isOpen" class=" mr-2 hover:rounded-sm p-2 rounded-sm hover:text-blue-600">Documentatie</button>
    <div :class="isOpen ? 'block' : 'hidden'" class="absolute bg-black mr-10 mt-2 top-6">
      <a href="#" class="block px-2 text-white font-semibold rounded hover:bg-black pt-2 mr-20 hover:bg-blue-600 hover:text-white ">LINK1</a>
      <a href="#" class="block px-2 text-white font-semibold rounded hover:bg-black pt-2 mr-20 hover:bg-blue-600 hover:text-white ">LINK1</a>
      <a href="#" class="block px-2 text-white font-semibold rounded hover:bg-black pt-2 mr-20 hover:bg-blue-600 hover:text-white ">LINK1</a>
    </div>
          </div>

        <a href="#" class="mr-2 hover:rounded-sm p-2 rounded-sm hover:text-blue-600 inline-block">Testare</a>

      </div>

      <div class="p-2">
        <a href="#" class="hover:rounded-sm rounded-sm p-2 hover:text-blue-600"><router-link to="/About"><i class="fa fa-address-book pr-2"></i>Contact</router-link></a>
      </div>
    </nav>
    <router-view />
    <a v-if="showTopBtn" id="btn-top" href="#" class="gotop rounded-lg"><i class="fa fa-home"></i></a>
  </div>
</template>

<style lang="scss">
@import '~font-awesome/css/font-awesome.css';
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
html {
  scroll-behavior: smooth;
}
.purple-gradient {
  background: linear-gradient(269deg, #d23aff, #48b7f5, #484cf5);
  background-size: 599% 600%;

  -webkit-animation: AnimationName 9s ease infinite;
  -moz-animation: AnimationName 9s ease infinite;
  animation: AnimationName 9s ease infinite;
}
@-webkit-keyframes gradientAnimation {
  -1% {
    background-position: 0% 50%;
  }
  49% {
    background-position: 100% 50%;
  }
  99% {
    background-position: 0% 50%;
  }
}
@-moz-keyframes gradientAnimation {
  -1% {
    background-position: 0% 50%;
  }
  49% {
    background-position: 100% 50%;
  }
  99% {
    background-position: 0% 50%;
  }
}
@keyframes gradientAnimation {
  -1% {
    background-position: 0% 50%;
  }
  49% {
    background-position: 100% 50%;
  }
  99% {
    background-position: 0% 50%;
  }
}
.gotop {
  justify-content: end;
  position: fixed;
  width: 3rem;
  height: 3rem;
  background: #27ae60;
  bottom: 3rem;
  right: 3rem;
  text-decoration: none;
  text-align: center;
  line-height: 3rem;
  display:hidden;
}
</style>
<script>
  export default {
    data: function() {
      return {
        showTopBtn: false,
          isOpen: false,

      }
    },
    mounted(){
      window.addEventListener('scroll', this.showTop);
    },
    methods: {
      showTop() {
        if(window.scrollY!==0)
        {
          this.showTopBtn=true;
        } else {
          this.hideTop();
        }

      },
      hideTop() {
        this.showTopBtn=false;
      }
    }
  }
</script>
