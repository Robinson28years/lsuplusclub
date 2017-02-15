import VueRouter from 'vue-router';

let routes =[
	{
		path: '/',
		component: require('./components/top-card.vue')
	},
	{
		path: '/2',
		component: require('./components/Example.vue')
	},
	{
		path: '/3',
		component: require('./components/login-form.vue')
	},
	{
		path: '/4',
		component: require('./components/OAuth.vue')
	},
];


export default new VueRouter({
	routes
})
