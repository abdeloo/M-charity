@extends('layouts.admin')

@section('content1')
<div class="container">
        <div class="row d-flex justify-content-center">
         <div class="d-flex justify-content-end">       
            <div class="col-md-12">
                 <button class="btn btn-light" style="float:right" ><a href="{{ url('projects/create') }}">Ajouter un projet</a></button>
              
                <table class="table table-striped">
                      <thead>
                          <tr>
                                 <th>Nom Projet</th> 
                                 <th>Description Projet</th>
                                 <th>action date</th>
                                 <th>état de projet</th>
                                 <th>Les actions</th>
                                
                          </tr>        
                      </thead>
                      <tbody>
                      @foreach ($projects as $project)        

                          <tr>      

                                <td>{{ $project->title }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->action_date }}</td> 
                                <td>{{ $project->project_state }}</td>

                                <td>
                                                                   
                                <form action ="{{ url('projects/'. $project->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-success"><a href="{{ url('projects/' . $project->id .'/edit' ) }}">Editer</a></button>
                                    <button type="submit" class="btn btn-danger">Supprimer</button>                                   
                                </form>                     
                                </td>
                        </tr>    
                      @endforeach       
                </tbody>        

                </table>
                </div>
        
@endsection