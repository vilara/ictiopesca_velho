@extends('layouts.app') 
@section('title','Espécies') 
@section('content')




<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-4">

			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-5">
							<h3 id="p1">{{ __('Espécie') }}</h3>
						</div>
						<div class="col-md-7 py-auto">
							<a href="{{ route('especies.edit',$especie->id) }}" class="btn btn-success">Editar</a> <a
								href="{{ route('especies.index') }}" class="btn btn-success float-right">Voltar</a>
						</div>
					</div>
				</div>

				<div class="card-body">
					<table class="table">
						<thead class="thead-soft">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Categoria</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">{{ $especie->id }}</th>
								<td>{{ $especie->cat }}</td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>

		</div>

	</div>
</div>


@endsection
