<template>
<div class="container-fluid">
	<p>
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			Game Master
		</button>
	</p>

	<div class="collapse bg-light" id="collapseExample">
		<div class="card card-body">
			ici les inputs et button de connexion
		</div>
	</div>

	<p>
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			Joueur
		</button>
	</p>

	<div class="collapse bg-light" id="collapseExample">
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
</style>
