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
			copyright : '&copy; 2019 Tous droits réservés'
		}
	}
}
</script>

<style scoped>
	div {
		background-color:#00549c;
		text-align: center;
		justify-content: middle;
		height: 50px;
		margin: 0;
		padding: 0
	}
	p {
		color:#ffffff;
		line-height: 50px;
		padding-bottom: 0;
		margin-bottom: 0
	}
</style>
