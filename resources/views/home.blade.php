@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informations détaillées</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('auth.You are logged in!') }}

                    <a class="btn btn-primary float-right" href="{{ url('modify') }}">Modifier le profil</a>

                    <table class="table table-striped">
                          

                           <tbody>
                                  <tr>
                                      <th>Nom</th>
                                      <td>{{ Auth::user()->name }}</td>                                      
                                  </tr>  

                                  <tr>
                                      <th>email</th>
                                      <td>{{ Auth::user()->email }}</td>
                                
                                  </tr>  

                                  <tr>
                                      <th>ville</th>
                                      <td>{{ Auth::user()->city }}</td>

                                  </tr>  

                                  <tr>
                                      <th>Téléphone</th>
                                      <td>{{ Auth::user()->phone }}</td>
                                    
                                  </tr>   

                                  <tr>
                                      <th>Etat de l'adhésion</th>
                                      <td>{{ Auth::user()->adhesion_state }}</td>                                      
                                  </tr>   

                           </tbody>    
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
