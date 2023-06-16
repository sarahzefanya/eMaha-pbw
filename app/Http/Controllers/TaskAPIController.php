<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskAPIController extends Controller
{
    public function create(Request $request){
        $task = Task::create([
        'nama' => $request->nama,
        'judul_task' => $request->judul_task,
        'deskripsi_task' => $request->gender,
        ]);

        if($task) {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Ditambahkan :)'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Penyimpanan Data Gagal'
            ], 400);
        }
    }

    public function read(){
        $task = Task::all();   
        return response()->json([
            'success' => true,
            'message' => "Data berhasil ditampilkan",
            'data' => $task], 200);
    }

    public function update($id, Request $request)
    {
        $task = Task::find($id)->update([
            'nama' => $request->nama,
            'judul_task' => $request->judul_task,
            'deskripsi_task' => $request->gender,
        ]);

        if($task){
            return response()->json([
                'success'=>true,
                'message'=>'Data berhasil diubah'
            ], 200);
        } else {
            return response()->json([
                'success'=>false,
                'message'=>'Data gagal diubah'
            ], 400);
        }
    }

    public function delete($id)
    {
        $task = Task::whereId($id)->delete();

        if($task){
            return response()->json([
                'success'=>true,
                'message'=>'Data berhasil dihapus'
            ], 200);
        } else {
            return response()->json([
                'success'=>false,
                'message'=>'Data gagal dihapus'
            ], 401);
        }
    }
}
