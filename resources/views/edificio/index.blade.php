@extends('layouts.app')


@section('content')

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Edificios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @can('crear-rol')     
                                <div class="float-right">
                                    <a href="{{ route('plantas.create') }}" class="btn btn-warning">
                                    {{ __('Create New') }}
                                    </a>
                                </div>
                                @endcan
                              @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                        
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mt-2">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre Edificio</th>
										<th>No.Teléfono</th>
										<th>Email</th>
										<th>Ubicación</th>
										<th>Encargado de Edificio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($edificios as $edificio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $edificio->name }}</td>
											<td>{{ $edificio->number }}</td>
											<td>{{ $edificio->email }}</td>
											<td>{{ $edificio->ubicacion }}</td>
											<td>
                                                {{ $edificio->user->name}}
                                            </td>

                                            
                                            <td>
                                                    @can('editar-edificio')
                                                        <a class="btn btn-sm btn-success mt-2" href="{{ route('edificios.edit',$edificio->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @endcan

                                                    @can('borrar-edificio')
                                                    <form action="{{ route('edificios.destroy',$edificio->id) }}" method="POST"style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm mt-2" onclick="
                                                    return confirm('Are you sure that you want to delete this item?')" ><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                                    @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    {!! $edificios->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


