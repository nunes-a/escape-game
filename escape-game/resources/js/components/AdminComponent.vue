<template>
	<div class="container-fluid pt-4">
		<div class="row shadow p-3 mb-5 bg-white rounded" id="topo">
			<div class="col-12 col-sm-5 text-center p-2">
				<img :src="'../resources/js/components/images/logo.png'">
			</div>
			<div class="col-12 col-sm-7" id="eqcouleur">
			
				<div class="input-group mb-3">
				  
				  <select class="custom-select" id="inputGroupSelect01">
				    <option selected>Choisir...</option>
				    <option value="1">Équipe 1</option>
				    <option value="2">Équipe 2</option>
				    <option value="3">Équipe 3</option>
				    <option value="4">Équipe 4</option>
				    <option value="5">Équipe 5</option>
				  </select>
				</div>
			
				<p>
					Équipe : <b>{{ nomequipe }}</b> <span class="badge badge-light">{{ colequipe }}</span>
				</p>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="border border-primary rounded-pill shadow" id="chrono">{{ chronoequipe }}</h1>
				</div>
			</div>
		</div>
		

		
		
		<p class="mt-4">
			Parcours, énigmes validées :
		</p>
		
		<div class="container">
		  <div class="row border mb-3">
		    <div class="col-6" id="tabb">
		    	Énigme 1
		    </div>
		    <div class="col-6" id="tabb">

				    <div v-if="nivequipe >= 1" class="alert alert-success" role="alert">
					  Terminé !
					</div>

				    <div v-else class="alert alert-light" role="alert">
					  En attente !
					</div>

		    </div>
		  </div>
		  
		  <div class="row border mb-3">
		    <div class="col-6" id="tabb">
		    	Énigme 2
		    </div>
		    <div class="col-6" id="tabb">

				    <div v-if="nivequipe >= 2" class="alert alert-success" role="alert">
					  Terminé !
					</div>

				    <div v-else class="alert alert-light" role="alert">
					  En attente !
					</div>

		    </div>
		  </div>
		  
		  <div class="row border mb-3">
		    <div class="col-6" id="tabb">
		    	Énigme 3
		    </div>
		    <div class="col-6" id="tabb">

				    <div v-if="nivequipe >= 3" class="alert alert-success" role="alert">
					  Terminé !
					</div>

				    <div v-else class="alert alert-light" role="alert">
					  En attente !
					</div>

		    </div>
		  </div>
		  
		  <div class="row border mb-3">
		    <div class="col-6" id="tabb">
		    	Énigme 4
		    </div>
		    <div class="col-6" id="tabb">

				    <div v-if="nivequipe >= 4" class="alert alert-success" role="alert">
					  Terminé !
					</div>

				    <div v-else class="alert alert-light" role="alert">
					  En attente !
					</div>

		    </div>
		  </div>
		  
		  <div class="row border">
		    <div class="col-6" id="tabb">
		    	Énigme 5
		    </div>
		    <div class="col-6" id="tabb">

				    <div v-if="nivequipe >= 5" class="alert alert-success" role="alert">
					  Terminé !
					</div>

				    <div v-else class="alert alert-light" role="alert">
					  En attente !
					</div>

		    </div>
		  </div>
		</div>
				
		<p class="mt-4">
			<h5 class="text-center">
				<a href="#exampleModal" class="text-primary text-decoration-none  border border-primary rounded-pill p-2" data-toggle="modal">
					Message d'équipe {{ nomequipe }}  
					<span class="badge badge-success">Nouveau</span>
				</a>
			</h5>
		</p>
		
		
		
		
<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLborder border-primary rounded-pill shadowabel">Message d'équipe {{ nomequipe }}</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<input class="form-control mb-3" type="text" placeholder="Bonjour, j'ai besoin d'aide !" readonly>
		      	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary">Répondre</button>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</template>

<script>
export default {
	data: function(){
		return {
			name : 'adminComponent',
			nomequipe : '2',
			nivequipe : '1',
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
	
	#eqcouleur > p > span {
		width: 100px;
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
		width: 300px;
		text-align: center;
		margin: 20px auto
	}
</style>