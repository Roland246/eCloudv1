@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Liste des commandes</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                              <table class="table table-hover text-nowrap">
                                <thead>
                                  <tr>
                                    <th>Core</th>
                                    <th>Memory</th>
                                    <th>Stokage</th>
                                    <th>Bandwidth</th>
                                    <th>price</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach ($commandes as $commande )
                                     <tr>
                                        <td> {{$commande->core}} </td>
                                        <td> {{$commande->memory}} </td>
                                        <td> {{$commande->storage}} </td>
                                        <td> {{$commande->bandwidth}} </td>
                                        <td> {{$commande->price}} </td>
                                      </tr>   
                                    @endforeach
                                  
                                  
                                </tbody>
                              </table>

                              {{-- {{$commandes->links()}} --}}
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
