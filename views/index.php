<div id="root">
  <router-view></router-view>
  <my-checkbox></my-checkbox>
</div>
<script>
Vue.component('my-checkbox', {
  data() {
    return { checked: false, title: 'Check me' }
  },
  methods: {
    check() { this.checked = !this.checked; }
  },
  render(createElement) {
    return createElement(
      'div',
        {
          attrs: {
            'class': 'checkbox-wrapper'
          },
          on: {
            click: this.check
          }
        },
        [
          createElement(
            'div',
	    {
              'class': {
                checkbox: true,
                checked: this.checked
              }
	    }
          ),
          createElement(
            'div',
            {
              attrs: {
                'class': 'title'
              }
	    },
	    [ this.title ]
          )
        ]
      );
    }
  }
);
var Container = {
  template: '<div class="container">컨테이너</div>'
}
var Index = {
  template: '<div>index</div>'
};
var About = {
  template: '<div>about</div>'
};
var routes = [
  { 
    path: '/index', 
    component:Index,
  },
  { 
    path: '/about', 
    component:About,
  }
];
var router = new VueRouter({
  routes
});
var app = new Vue({
  router
}).$mount('#root');
</script>
