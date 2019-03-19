<template>
	<div>
		<p v-html="copyright"></p>
	</div>
</template>

<script>
export default {
	name : 'footerComponent',
	data : function(){
		return {
			copyright : '&copy; 2019 Tous droits réservés - Télécom Saint-Étienne'
		}
	}
}
</script>

<style scoped>
	div {
		background-color:#00549c;
		text-align: center;
		height: 50px;
		line-height: 50px;
		margin: 0;
		padding: 0
	}
	p {
		color:#ffffff
	}
</style>
