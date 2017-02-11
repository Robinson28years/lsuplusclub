import VueRouter from 'vue-router';

let routes =[
	{
		path: '/',
		component: require('./components/top-card.vue')
	},
	{
		path: '/2',
		component: require('./components/Example.vue')
	}
];


export default new VueRouter({
	routes
})
