<template>

<!-- CONTAINER GENERAL -->
	<div class="container-fluid pt-4">

	
		<div class="row shadow p-3 mb-5 bg-white rounded" id="topo">
			<div class="col-12 col-sm-5 text-center p-2">
				<img :src="'../../resources/js/components/images/logo.png'">
			</div>
			<div class="col-12 col-sm-7" id="eqcouleur">
				<p>
					Nom de l'équipe : <b>{{ nomequipe }}</b>
				</p>
				<p>
					Couleur : <span class="badge badge-danger">{{ colequipe }}</span>
				</p>
				<p>

					Membres de l'équipe et sa filiére:
				</p>
				<p>
					Alexandre (DTA)<br>
					Joel (DTA)<br>
					Rania (DTA)<br>
					Corinne (DTA)<br>
					Emmanuel (DTA)
				</ul>
				</p>
			</div>
		</div>

	
<!-- CHRONO -->		
		<div class="col-12 text-center">
			<h1 class="border border-primary rounded-pill shadow" id="chrono">{{ chronoequipe }}</h1>
		</div>
<!-- ------ -->		

	
<!-- PHRASE -->
		<div id="phrs">		
			<h4 class="text-center">
				Parcours, énigmes validées :
			</h4>
		</div>
<!-- ------ -->		

<!-- CONTAINER DES ENIGMES -->		
		<div class="container">
		
			<div class="row border mb-3">
			    <div class="col-12 col-sm-3" id="tabb">
			    	Amphitéâtre :
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
					<a href="#" class="text-primary">
						Jouer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<a href="#enigmeModal" class="text-primary" data-toggle="modal">
						Terminer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<div class="alert alert-success" role="alert">
						Terminé !
					</div>
			    </div>
			  </div>
			  
			  <div class="row border mb-3">
			    <div class="col-12 col-sm-3" id="tabb">
			    	Bibliotéque :
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
					<a href="#" class="text-primary">
						Jouer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<a href="#enigmeModal" class="text-primary" data-toggle="modal">
						Terminer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<div class="alert alert-success" role="alert">
						Terminé !
					</div>
			    </div>
			  </div>
			  
			  <div class="row border mb-3">
			    <div class="col-12 col-sm-3" id="tabb">
			    	Énigme 1 :
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
					<a href="#" class="text-primary">
						Jouer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<a href="#enigmeModal" class="text-primary" data-toggle="modal">
						Terminer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<div class="alert alert-light" role="alert">
						En attente !
					</div>
			    </div>
			  </div>
			  
			  <div class="row border mb-3">
			    <div class="col-12 col-sm-3" id="tabb">
			    	Énigme 2 :
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
					<a href="#" class="text-primary">
						Jouer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<a href="#enigmeModal" class="text-primary" data-toggle="modal">
						Terminer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<div class="alert alert-light" role="alert">
						En attente !
					</div>
			    </div>
			  </div>
			  
			  <div class="row border mb-3">
			    <div class="col-12 col-sm-3" id="tabb">
			    	Énigme 3 :
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
					<a href="#" class="text-primary">
						Jouer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<a href="#enigmeModal" class="text-primary" data-toggle="modal">
						Terminer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<div class="alert alert-light" role="alert">
						En attente !
					</div>
			    </div>
			  </div>
			  
			  <div class="row border mb-3">
			    <div class="col-12 col-sm-3" id="tabb">
			    	Énigme 4 :
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
					<a href="#" class="text-primary">
						Jouer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<a href="#enigmeModal" class="text-primary" data-toggle="modal">
						Terminer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<div class="alert alert-light" role="alert">
						En attente !
					</div>
			    </div>
			  </div>
			  
			  <div class="row border mb-3">
			    <div class="col-12 col-sm-3" id="tabb">
			    	Énigme 5 :
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
					<a href="#" class="text-primary">
						Jouer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<a href="#enigmeModal" class="text-primary" data-toggle="modal">
						Terminer
					</a>
			    </div>
			    <div class="col-4 col-sm-3" id="tabb">
			    	<div class="alert alert-light" role="alert">
						En attente !
					</div>
			    </div>
			  </div>
			  
		</div>
<!-- FIN CONTAINER DES ENIGMES -->
		



<!-- MODAL DEVERROUILAGE DES ENIGMES -->
		<div class="modal fade" id="enigmeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLborder border-primary rounded-pill shadowabel">Terminer l'énigme</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<p>Énigme :  nomenigme</p>
  				<input type="text" class="form-control" placeholder="Code de deverrouilage">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary">Valider</button>
		      </div>
		    </div>
		  </div>
		</div>
<!-- ---------------------------- -->
				
		<p class="mt-4">
			Besoin d'aide? Contactez un <a href="#exampleModal" class="text-primary" data-toggle="modal">Game Master</a> .
		</p>

<!-- MODAL DE CONTACT GAME MASTER -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLborder border-primary rounded-pill shadowabel">Contact avec un Game Master</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<p>Équipe {{ nomequipe }}</p>
		      	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
		      	<input class="form-control mt-3" type="text" placeholder="Game Master : reponse " readonly>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary">Envoyer</button>
		      </div>
		    </div>
		  </div>
		</div>
<!-- ---------------------------- -->
	
	</div>		
</template>

<script>
export default {
	props: ['nomequipe', 'nivequipe', 'courequipe'],
	data: function(){
		return {
			name : 'accueilComponent',
			colequipe : 'Rouge',
			chronoequipe : '00:00:00'
		}
	}
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
	
	ul {
		list-style-type: none
	}
	
	#eqcouleur > p > span {
		width: 100px;
	}
	
	#phrs {
		margin: 50px 0 25px 0
	}
	
	.alert {
		width : 100px;
		height : 25px;
		line-height: 25px;
		text-align: center;
		margin: 0 auto;		
		padding: 0
	}
	
	#tabb {
		text-align: center;
		padding: 10px 25px
	}
	
	#chrono {
		width: 350px;
		text-align: center;
		margin: 20px auto
	}
	
	#suiv{
		background-color: #00549c;
		color: #ffffff;
		width: 350px;
		text-decoration: none;
		padding: 10px;
		/*text-transform: uppercase;*/
		margin: 20px auto		
	}
	
	#suiv:hover{
		background-color: white;
	  	color: #00549c;
	 	border: 1px solid #00549c;
	 	text-decoration: none
	}
</style>