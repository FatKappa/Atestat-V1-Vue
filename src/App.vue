<template>
  <div id="app" class="scrolling" >
    <nav class="fixed flex justify-between bg-black py-5 md:py-8 px-4 w-full">
      <p class="inline md:hidden text-white text-xl font-bold">Atestat</p>
      <!-- mobile responsive -->
      <div @click="menuNavOpen=!menuNavOpen" class="flex cursor-pointer md:hidden hover:bg-blue-700 px-3 items-center rounded"><i class="fa fa-bars text-white text-xl"></i></div>
      <div :class="{'hidden':!menuNavOpen}" class="bg-black mt-16 md:mt-0 md:flex text-white text-2xl fixed top-0 left-0 flex-col md:flex-row justify-between w-full md:items-center">
        <div class="py-2 px-4 flex flex-col md:flex-row">
          <a @click="isOpen=false" class="mr-2 p-2 hover:text-blue-600 text-xl md:text-2xl"><router-link to="/">Home</router-link></a>
          <!-- dropdown -->
          <div class="inline-block relative">
            <button @click="isOpen=!isOpen"  class=" mr-2 p-2 hover:text-blue-600 text-xl md:text-2xl focus:hidden"><router-link to="/PgMeniu1">Introducere</router-link></button>
            <div :class="isOpen ? 'block' : 'hidden'" class="absolute mt-2 top-6 w-full">
              <a href="#inceputuri" @click="isOpen=false" class="w-full overflow-auto block px-2 text-white bg-black pt-2 text-lg hover:bg-blue-700 hover:text-white">1. Inceputuri</a>
              <a href="#" @click="isOpen=false" class="w-full overflow-auto block px-2 text-white bg-black pt-2 text-lg hover:bg-blue-700 hover:text-white">2. Fin. sec. XX</a>
              <a href="#" @click="isOpen=false" class="w-full overflow-auto block px-2 text-white bg-black pt-2 text-lg hover:bg-blue-700 hover:text-white">3. Inc. sec. XXI</a>
              <a href="#" @click="isOpen=false" class="w-full overflow-auto block p-2 text-white bg-black text-lg hover:bg-blue-700 hover:text-white rounded-b-lg">4. Astazi</a>
            </div>
          </div>
          <!-- dropdown  terminat -->
          <a href="#" @click="isOpen=false" class="mr-2 hover:rounded-sm p-2 rounded-sm hover:text-blue-600 inline-block text-xl md:text-2xl"><router-link to="/PgMeniu2">Evolutia pe piata</router-link></a>
          <!-- mobile responsive terminat-->
          <div>
              <a href="" @click="isOpen=false" class="mr-2 hover:rounded-sm p-2 rounded-sm hover:text-blue-600 inline-block text-xl md:text-2xl"><router-link to="/Testare">Testare</router-link></a>
          </div>
        </div >

        <div class="py-2 px-4 md:border-0">
          <a href="#" @click="isOpen=false" class="hover:rounded-sm rounded-sm p-2 hover:text-blue-600  text-xl md:text-2xl"><router-link to="/About"><i class="fa fa-address-book pr-2 hidden md:inline"></i>Contact</router-link></a>
        </div>
      </div>
    </nav>

    <router-view />
    <a @click="isOpen=false" v-if="showTopBtn" id="btn-top" href="#" class="gotop rounded-lg"><i class="fa fa-home"></i></a>
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
::-webkit-scrollbar {
  display: none;
}
</style>
<script>
  export default {
    data: function() {
      return {
        showTopBtn: false,
        isOpen: false,
        menuNavOpen: false
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
