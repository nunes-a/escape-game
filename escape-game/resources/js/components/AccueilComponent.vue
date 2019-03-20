<template>
	<div class="container-fluid">
		<div class="row shadow p-3 mb-5 bg-white rounded" id="topo">
			<div class="col-12 col-sm-5 border">
				logo
			</div>
			<div class="col-12 col-sm-7" id="eqcouleur">
				<p>
					Nom de l'équipe : <b>TÉLÉCOM</b>
				</p>
				<p>
					Couleur : <span class="badge badge-danger">Rouge</span>
				</p>
				<p>
					<a href="#" class="text-primary">Déconnexion</a>
				</p>
			</div>
		</div>
		
		<p>
			Parcours, énigmes validées :
		</p>
		
		<div class="container">
		  <div class="row border">
		    <div class="col-12 col-sm-2 align-self-center text-center p-2">
		    	Énigme ?
		    </div>
		    <div class="col-12 col-sm-8 align-self-center p-2">
		      	<div class="progress">
				  <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
				</div>
		    </div>
		    <div class="col-12 col-sm-2 align-self-center text-center p-2">
		    	<a type="button" class="text-primary" data-toggle="modal" href="#exampleModal">
				  Aller
				</a>
		    </div>
		  </div>
		</div>
		
		
		<h1 class="border border-primary rounded-pill shadow" id="chrono">00 : 00 : 00 s</h1>
		
		
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
	
	#topo {
		width: 60%;
		margin: 0 auto
	}
	
	p {
		text-align: center;
		padding: 3px
	}
	
	#eqcouleur > p > span {
		width: 100px;
	}
	
	#chrono {
		width: 300px;
		text-align: center;
		margin: 50px auto
	}
</style>
