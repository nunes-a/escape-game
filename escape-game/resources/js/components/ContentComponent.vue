<template>
<div class="container-fluid">

	<div class="media">
	  <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/3/30/Logo_Telecom_Saint-Etienne.png/118px-Logo_Telecom_Saint-Etienne.png" class=" mx-auto d-block m-3" alt="logo">
	</div>

	<p>
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#connexion-gamemaster" aria-expanded="false" aria-controls="collapseExample">
			Game Master
		</button>
	</p>

	<div class="collapse bg-light" id="connexion-gamemaster">
		<div class="card card-body mb-3">
			ici les inputs et button de connexion
		</div>
	</div>

	<p>
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#connexion-joueur" aria-expanded="false" aria-controls="collapseExample">
			Joueur
		</button>
	</p>

	<div class="collapse bg-light" id="connexion-joueur">
		<div class="card card-body">
			ici les inputs et button de connexion
		</div>
	</div>
</div>
</template>

<script>
export default {
	name : 'contentComponent'
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
