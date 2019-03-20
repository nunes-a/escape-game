<template>
	<div class="container-fluid">
		<p>
			Nom de l'équipe
		</p>
		<p>
			Couleur de l'équipe
		</p>
		<p>
			Parcours, énigmes validées :
		</p>
		
		

	</div>
</template>

<script>
export default {
	name : 'accueilComponent'
}
</script>

<style scoped>
	.container-fluid {
		background-color:#ffffff;
		margin: 0 auto;
		padding: 10px;
	}
	
	p {
		text-align: center
	}
	
	input {
		width: 300px
	}
	
	button{
		background-color: #00549c;
		color: #ffffff;
		width: 280px;
		height: 50px;
		border: 2px solid #00549c;
		borde-radius: 0;
		text-transform: uppercase;
		font-weight: bold;
	}

	button:hover{
		background-color: white;
	  	color: #00549c;
	 	border: 2px solid #00549c;
	}
</style>
