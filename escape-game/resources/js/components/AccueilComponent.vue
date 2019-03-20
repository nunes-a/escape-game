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
				
		


		

		
		<div class="container">
		  <div class="row border m-3">
		    <div class="col-12 col-sm-2 align-self-center text-center">
		    	Énigme ?
		    </div>
		    <div class="col-12 col-sm-8 align-self-center">
		      	<div class="progress">
				  <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
				</div>
		    </div>
		    <div class="col-12 col-sm-2 align-self-center text-center">
		    
		    
		    	<a type="button" class="text-primary" data-toggle="modal" href="#exampleModal">
				  Aller
				</a>

		    </div>
		  </div>
		</div>
		
		
		
		
		
		
		
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Énigme ?</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<input type="text" class="form-control" placeholder="Code de déverrouillage" aria-label="Username" aria-describedby="basic-addon1">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
		        <button type="button" class="btn btn-primary">Aller</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		
		
		
		<p>
			Besoin d'aide? Appelez un Game Master <a href="#" class="text-primary">ici</a> .
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
		height: 35px;*/
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
