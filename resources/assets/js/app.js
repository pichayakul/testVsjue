
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
// const app2 = new Vue({
//     el: '#nav-app',
//     data: {
//       nav_home:'',
//       nav_profile:''
//     },
//     methods:{
//       activeHomePage:function(){
//
//         nav_home='active';
//         nav_profile:'';
//       },
//       activeProfilePage:function(){
//
//           nav_profile='active';
//         nav_home="";
//       }
//     }
//   });
const app = new Vue({
    el: '#vue-app',
    data: {
      number:0,
      text:'Hello',
      seconds:3*60+20,
      isShowTimeButton:true,
      todos:[],
      item:'',

    },
    computed: {
      hourText: function(){
        return Math.floor(this.seconds/3600)
      },
      minuteText:function(){
        return Math.floor(this.seconds%3600 / 60)
      },
      secondText: function(){
        return Math.floor(this.seconds%60)
      }
    },
    methods: {
      increaseNumber: function(){
        this.number+=10;
      },
      increaseTime : function(){
        this.seconds= parseInt(this.seconds)+1;
      },
      decreaseTime : function(){

        this.seconds-=1;
        if (this.seconds<0){
          this.seconds=0;
        }
      },
      toggleTimeButton: function(){
        this.isShowTimeButton = !this.isShowTimeButton;
      },
      appendItem:function(){
        if (this.item!=''){
          this.todos.push(this.item);
          this.item='';
        }
      }
    }
});
