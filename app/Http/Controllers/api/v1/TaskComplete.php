<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;

class TaskComplete extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Task $task)
    {
        $task->is_completed = $request->is_completed;
        $task->save();

        // return response()->noContent();

        return response()->json([
            'message' => 'Task marked as complete',
            'task' => $task
        ], 200);
    }
}
