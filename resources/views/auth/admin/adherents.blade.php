@extends('layouts.admin')

@section('content1')
<div class="container">
        <div class="row d-flex justify-content-center">
         <div class="d-flex justify-content-end">       
            <div class="col-md-12">
                 <button class="btn btn-light" style="float:right" ><a href="{{ url('adherents/create') }}">Ajouter un adherent</a></button>
              
                <table class="table table-striped">
                      <thead>
                          <tr>
                                 <th>Nom adhérent </th> 
                                 <th>Email adhérent</th>
                                 <th>Ville adhérent</th>
                                 <th>Téléphone adhérent</th>
                                 <th>etat d'adhésion</th>
                                 <th>hello</th>
                          </tr>        
                      </thead>
                      <tbody>

                      @foreach ($adherents as $adherent)        
                          <tr>      
                        
                                <td>{{ $adherent->name }}</td>
                                <td>{{ $adherent->email }}</td>
                                <td>{{ $adherent->city }}</td> 
                                <td>{{ $adherent->phone }}</td>
                                <td>{{ $adherent->adhesion_state }}</td> 

                                
                                <td>
                                                                   
                                <form action ="{{ url('adherents/'. $adherent->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-success"><a href="{{ url('adherents/' . $adherent->id .'/edit' ) }}">Editer</a></button>
                                    <button type="submit" class="btn btn-danger">Supprimer</button>                                   
                                </form>
                                
                                </td>
                        </tr>    
                      @endforeach       
                </tbody>
                      

                </table>
                </div>
@endsection