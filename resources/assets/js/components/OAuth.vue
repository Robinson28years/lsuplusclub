<template lang="html">
	<div>
		<!-- <passport-clients></passport-clients>
		<passport-authorized-clients></passport-authorized-clients>
		<passport-personal-access-tokens></passport-personal-access-tokens> -->
		<AuthorizedClients></AuthorizedClients>
		<Clients></Clients>
		<PersonalAccessTokens><PersonalAccessTokens>
	</div>
</template>

<script>
import AuthorizedClients from './passport/AuthorizedClients.vue'
import Clients from './passport/Clients.vue'
import PersonalAccessTokens from './passport/PersonalAccessTokens.vue'
export default {
	components: {
		AuthorizedClients,
		Clients,
		PersonalAccessTokens
	}
}
</script>

<style lang="css">
</style>
