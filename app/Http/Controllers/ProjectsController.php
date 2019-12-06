<?php
/**
 * Created by PhpStorm.
 * User: stani
 * Date: 03.12.2019
 * Time: 11:58
 */
namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
     public function index(Project $project)
     {
         $projects = Project::all();

         return view('projects.index', compact('project', 'projects'));
     }

     public function create(Project $project)
     {
         $projects = Project::all();
         return view('projects.create', compact('project', 'projects'));
     }
     public function show(Project $project)
     {
         $projects = Project::all();


         return view('projects.show', compact('project' , 'projects'));

     }
     public function edit(Project $project)

     {
         $projects = Project::all();
         return view('projects.edit', compact('project', 'projects'));
     }
     public function update(Project $project)
     {
         $project->update(request(['title','description']));

         return redirect('/projects');

     }
     public function destroy(Project $project)
     {
         $project->delete();
         return redirect('/projects');
     }
     public function store()
     {
         request()->validate([
             'title' => ['required', 'min:3', 'max:255'],
             'description' => ['required', 'min:3', 'max:255']
         ]);
         Project::create(request(['title','description']));
         return redirect('/projects');
     }

}
