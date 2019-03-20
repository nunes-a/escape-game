<template>
	<div class="container-fluid">
		<div class="bg-light" id="eqcouleur">
			<p>
				Nom de l'équipe : <b>TÉLÉCOM</b>
			</p>
			<p>
				Couleur : <span class="badge badge-danger">Rouge</span>
			</p>
		</div>
		
		<p>
			Parcours, énigmes validées :
		</p>
		
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="basic-addon1">Énigme ?</span>
		  </div>
		  <input type="text" class="form-control" placeholder="Entrez le code" aria-label="Username" aria-describedby="basic-addon1">
			<div class="input-group-append">
				<button class="btn btn-outline-secondary" type="button">Ok</button>
			</div>
		</div>
		
	

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
		text-align: center;
		padding: 3px
	}
	
	input {
		width: 300px
	}
	
	button{
		background-color: #00549c;
		color: #ffffff;
		/*width: 280px;
		height: 50px;*/
		/*border: 2px solid #00549c;*/
		borde-radius: 0;
		text-transform: uppercase;
		font-weight: bold;
	}

	button:hover{
		background-color: white;
	  	color: #00549c;
	 	border: 1px solid #00549c;
	}
	
	#eqcouleur > p > span {
		width: 100px;
	}
</style>
