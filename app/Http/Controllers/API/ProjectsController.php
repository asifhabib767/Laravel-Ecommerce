<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public $projectRepository;

    public function __construct(ProjectRepository $projectRepository) 
    {
        $this->projectRepository = $projectRepository;
    }

    public function index()
    {
        $projects = $this->projectRepository->getAll();

        return response()->json([
            'success' => true,
            'message' => 'Project List',
            'data'    =>  $projects
        ]);
    }

    public function show($id)
    {
        $project = $this->projectRepository->findById($id);
        if(is_null($project)){
            return response()->json([
                'success' => false,
                'message' => 'Project List',
                'data'    =>  null
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Project List',
            'data'    =>  $project
        ]);
    }


    public function store(Request $request)
    {
        $formData = $request->all();
        
        $validator = \Validator::make($formData, [
            'name' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ],[
             'name.required' => 'Please give project namne',
             'description.required' => 'Please give project description',
        ]);

        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->getMessageBag(),
            ]);
        }

        $project = $this->projectRepository->create($request);
        return response()->json([
            'success' => true,
            'message' => 'Project Stored',
            'data'    =>  $project
        ]);

    }

    public function update(Request $request, $id)
    {   
        $project = $this->projectRepository->findById($id);
        if(is_null($project))
        {
            return response()->json([
                'success' => false,
                'message' => 'Project Not Found',
                'data' => null,
            ]);
        }
        $formData = $request->all();
        $validator = \Validator::make($formData, [
            'name' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ],[
             'name.required' => 'Please give project namne',
             'description.required' => 'Please give project description',
        ]);
        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->getMessgaeBag()->first(),
            ]);
        }

        $project = $this->projectRepository->edit($request, $id);
        return response()->json([
            'success' => true,
            'message' => 'Project Updated',
            'data'    =>  $project
        ]);

    }

    public function destroy($id)
    {   
        $project = $this->projectRepository->findById($id);
        if(is_null($project))
        {
            return response()->json([
                'success' => false,
                'message' => 'Project Not Found',
                'data' => null,
            ]);
        }

        $project = $this->projectRepository->delete($id);
        return response()->json([
            'success' => true,
            'message' => 'Project Deleted',
            'data'    =>  $project
        ]);

    }
}
