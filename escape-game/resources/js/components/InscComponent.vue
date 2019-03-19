<template>
	<div class="container-fluid">
		<p>
			Avant de commencer, entrer ces infos :
		</p>

		<div class="input-group mb-3">
		  <input type="text" class="form-control" placeholder="Nom de l'équipe" aria-label="Username" aria-describedby="basic-addon1">
		</div>
		
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <label class="input-group-text" for="inputGroupSelect01">Couleur de l'équipe</label>
		  </div>
		  <select class="custom-select" id="inputGroupSelect01">
		    <option selected>Choisir...</option>
		    <option value="1">Bleu</option>
		    <option value="2">Rouge</option>
		    <option value="3">Vert</option>
		  </select>
		</div>
	
		
		<button type="button" class="btn btn-primary mx-auto d-block">Prêt</button>
	</div>
</template>

<script>
export default {
	name : 'inscComponent'
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
