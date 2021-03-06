<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project; 

class ProjectsController extends Controller
{
    // Afficher les projets non rélisées    
    function show1()
    {
         $data =  Project::where('project_state' , 'non-réalisé')->get();  
         return view('projects1' , ['projects' => $data]);
    }

    // Afficher les projets réalisées
    
    function show2()
    {
        $data = Project::where('project_state' , 'réalisé')->orderBy('action_date' , 'DESC')->take(12)->get();
        return view('projects2' , ['projects'=> $data]);
    }

    // Afficher tous les projets

    function showAll()
    {
        $data = Project::all();      
        return view("auth.admin.projects" , ['projects' => $data]); 
    }

    //Afficher La formulaire de création
    function create(){
        return view("auth.admin.create");
    }
 
    // Enregistrer un Projet 
    function store(Request $request){
        
        $validated = $request->validate([
            'title' => 'required|min:8',               
        ]);
    
        $project = new Project();
        $project->title = $request->input("title");
        $project->description = $request->input("description");
        $project->project_state = $request->input("project_state");
        $project->location = $request->input("location");
        $project->action_date = $request->input("action_date");
        $destination_path = '/public/images/projects/';         
        if($request->hasFile('project_image'))
        { 

        $image = $request->file("project_image");
        
        $image_name = $image->getClientOriginalName();
        
        $image = $request->file("project_image");
    
        $project->image = $destination_path . $image_name;    
        
        $path = $request->file("project_image")->storeAs($destination_path);  
        
        $input['project_image'] = $image_name;
        
        }

        $project->save();

        return redirect('admin/projects');

    }
    
    // Récupéerer  un Projet puis le mettre dans formulaire 
    function edit($id){
        
            $project = Project::find($id);
            
            return view("auth.admin.edit" , ['project' => $project] ); 
    }

    //Modifier un Projet 
    function update(Request $request, $id){

         $project = Project::find($id);
         
         $project->title = $request->input("title");
         
         $project->description = $request->input("description");
         
         $project->project_state = $request->input("project_state");
         
         $project->location = $request->input("location");
         
         $project->action_date = $request->input("action_date");  
         
         $destination_path = 'public/images/projets';         
         
         if($request->hasFile('project_image'))
         {  
         $image = $request->file("project_image");
         
         $image_name = $image->getClientOriginalName();
         
         $project->image = $image_name;
         
         $path = $request->file("project_image")->storeAs($destination_path , $image_name);  

         $input['project_image'] = $image_name;
        } 
         $project->save();

            
         return redirect('admin/projects');
    } 

    // Supprimer un projet
    function destroy(Request $request,$id) {
        
        $project = Project::find($id);

        $project->delete();

        return redirect('admin/projects');
    }
}
