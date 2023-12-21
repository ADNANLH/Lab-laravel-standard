<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    protected $tasksRepository;
    protected $projectRepository;
    public function __construct(TasksRepository $tasksRepository, ProjectRepository $projectRepository){
        $this->tasksRepository = $tasksRepository;
        $this->projectRepository = $projectRepository;
    }
    public function show(Request $request, $id){
        $task = $this->tasksRepository->show($id);
        $projectData = $this->projectRepository->getData();
    }
   


}
