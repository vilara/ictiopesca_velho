@extends('layouts.app') @section('title','Espécies') @section('content')

<div class="container">

	<div class="row justify-content-center">




		<div class="col-md-8">

			@if (count($errors) > 0) @foreach ($errors->all() as $error)
			<p class="alert alert-danger">{{ $error }}</p>
			@endforeach @endif

			<div class="card">



				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							<h3>{{ __('Edição') }}</h3>
						</div>
						<div class="col-md-2 py-auto">
							<a href="/especies" class="btn btn-success">Voltar</a>
						</div>
					</div>
				</div>

				<div class="card-body">


					<form class="form-horizontal" method="post" action="{{ route('especies.update',$especie->id) }} ">

						@method('PATCH') 
						@csrf

						<div class="form-row">
							<div class="form-group col-md-8">
								<label for="cat">Categoria Nome</label> <input type="text"
									class="form-control" name="cat" id="cat" placeholder=""
									value="{{$especie->cat}}"> <small id="catHelp"
									class="form-text text-muted">Sem abreviaturas!</small>
							</div>
						</div>


						<button type="submit" class="btn btn-success">{{ __('Editar') }}</button>

					</form>
				</div>





			</div>
		</div>





	</div>
</div>


@endsection
