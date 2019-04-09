@extends('layouts.app') @section('title','Espécies') @section('content')





<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-10">

			<div class="card">

				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							<h3>{{ __('Espécies') }}</h3>
						</div>
						<div class="col-md-2 py-auto">
							<a href="/especies/create" class="btn btn-success">Novo</a>
						</div>
					</div>
				</div>

				<div class="card-body">

					@if(session()->get('success'))
					<div class="alert alert-success">{{ session()->get('success') }}</div>
					<br /> @endif

					<table class="table">
						<thead class="thead-soft">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nome</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($especies as $especie)
							<tr>
								<th scope="row">{{ $especie->id }}</th>
								<td><a href="{{ route('especies.show',$especie->id) }}"
									style="color: inherit;">{{ $especie->cat }}</a></td>



								<td>
									<div class="row">
										<div class="col-md-6 mt-1">
											<a href="{{ route('especies.edit',$especie->id) }}" style="color: inherit;"><i class="far fa-edit"></i></a>
										</div>

										<div class="col-md-6  text-lg-left pl-1">
											<form class="form-group" action="{{ route('especies.destroy',$especie->id) }}"	method="post">
												@csrf
												 @method('DELETE')
												<button class="btn form-control" type="submit"><i class="far fa-trash-alt"></i></button>
											</form>
										</div>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>

		</div>

	</div>
</div>



@endsection