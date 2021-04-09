@extends('layouts.admin')

@section('content1')
<div class="container">
        <div class="row d-flex justify-content-center">
         <div class="d-flex justify-content-end">       
            <div class="col-md-12">

                <table class="table table-striped">
                      <thead>
                          <tr>
                                 <th>Name</th> 
                                 <th>Email</th>
                                 <th>Message</th>
                                 <th>créer le </th>
                                 <th>Actions</th>
                                 
                          </tr>        
                      </thead>
                      <tbody>

                      @foreach ($contacts as $contact)        
                                <tr>      
                        
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->message }}</td> 
                                    <td>{{ $contact->created_at }}</td>

                                <td>
                                                                   
                               <form action ="{{ url('contacts/'. $contact->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')                                   
                                    <button type="submit" class="btn btn-danger">Supprimer</button>                                   
                                </form>
                                
                                </td>
                        </tr>    
                      @endforeach       
                </tbody>
                      

                </table>
                </div>
@endsection