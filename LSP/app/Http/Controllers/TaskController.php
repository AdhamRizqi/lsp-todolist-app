<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    // Menampilkan semua tugas
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }

    // Menyimpan tugas baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'date' => ['nullable', 'date'],
        ]);

        Task::create([
            'title' => $request->title,
            'date' => $request->date ?? Carbon::today()->toDateString(), // hanya tanggal, tanpa jam
            'completed' => false,
            'status' => 'Belum',
        ]);

        return redirect('/todolist');
    }

    // Mengubah status completed
    public function toggle(Request $request)
    {
        $task = Task::find($request->id);
        if ($task) {
            $task->completed = !$task->completed;
            $task->status = $task->completed ? 'Selesai' : 'Belum';
            $task->save();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Task not found'], 404);
        }
    }

    public function delete(Request $request)
    {
        $task = Task::find($request->id);
        if ($task) {
            $task->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
