import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "home",
    component: Home
  },
  {
    path: "/about",
    name: "about",
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/About.vue")
  },
  {
    path: "/Testare",
    name: "testare",
    component: () =>
        import(/* webpackChunkName: "testare" */ "../views/Testare.vue")
  },
  {
    path: "/PgMeniu1",
    name: "PgMeniu1",
    component: () =>
        import(/* webpackChunkName: "PgMeniu1" */ "../views/PgMeniu1.vue")
  }
];

const router = new VueRouter({
  routes
});

export default router;
