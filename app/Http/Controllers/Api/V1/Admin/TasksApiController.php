<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Resources\Admin\TaskResource;
use App\Task;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TasksApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TaskResource(Task::all());

    }

    public function store(StoreTaskRequest $request)
    {
        $task = Task::create($request->all());

        return (new TaskResource($task))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);

    }

    public function show(Task $task)
    {
       

    }

    public function update(UpdateTaskRequest $request, Stock $stock)
    {
       

    }

    public function destroy(Stock $stock)
    {
        

    }
}