<x-app-layout>
    <x-slot name="header">
		<x-slot name="pretitle">
			<div class="page-pretitle">
				{{ __('Roles') }}
			</div>
		</x-slot>
		<x-slot name="title">
			<h2 class="page-title">
				{{ __('Panel') }}
			</h2>
		</x-slot>
		<x-slot name="buttons">
			<x-a :href="route('roles.create')" class="btn btn-primary">
				{{ __('Crear Rol') }}
			</x-a>
		</x-slot>
	</x-slot>
    <div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Octopus Creados</h3>
			</div>
			<div class="table-responsive">
				<table class="table card-table table-vcenter text-nowrap datatable">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Descripción</th>	
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($roles as $role)
							<tr>
								<td>{{ $role->name }}</td>
								<td>{{ $role->description }}</td>
								<td class="text-end">
									@if($role->id != 1)
										<form action="{{ route('roles.destroy', $role->id) }}" method="POST">
											<x-a :href="route('roles.edit', $role->id)" class="btn btn-outline-primary">
												{{ __('Editar') }}
											</x-a>
											@csrf
											@method('DELETE')
											<x-button type="submit" class="btn btn-outline-danger btn-delete">
												{{ __('Eliminar') }}
											</x-button>
										</form>
									@endif
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="card-footer d-flex align-items-center">
                {!! $roles->links() !!}
			</div>
		</div>
	</div>
</x-app-layout>