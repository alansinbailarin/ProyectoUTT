@extends('layouts.app')

@section('content')
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Plantas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                <div class="float-right">
                                <a href="{{ route('plantas.create') }}" class="btn btn-warning">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                           
                                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mt-2">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre planta</th>
										<th>Nombre Edificio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plantas as $planta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $planta->name }}</td>
											<td>{{ $planta->edificio->name }}</td>

                                            <td>
                                            @can('editar-planta')
                                                        <a class="btn btn-sm btn-success mt-2" href="{{ route('plantas.edit',$planta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @endcan

                                                    @can('borrar-planta')
                                                    <form action="{{ route('plantas.destroy',$planta->id) }}" method="POST"style="display:inline">
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
                </div>
                {!! $plantas->links() !!}
            </div>
        </div>
    </div>
@endsection
