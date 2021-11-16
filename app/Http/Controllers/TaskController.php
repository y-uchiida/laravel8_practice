<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $tasks = Task::where('user_id', $user_id)->where('finished', false)->get();
        $finished_tasks = Task::where('user_id', $user_id)->where('finished', true)->get();
        return (view('task_list', ['tasks' => $tasks, 'finished_tasks' => $finished_tasks]));
    }

    public function create()
    {
        return (view('add_task'));
    }

    public function edit($id = null)
    {
        $user_id = Auth::user()->id;
        $task = Task::where('user_id', $user_id)->where('id', $id)->first();

        /* 指定のidに一致するレコードがなければ、404を返す */
        if ($task == null)
        {
            return (\App::abort(404));
        }

        return (view('edit_task', ['task' => $task]));
    }

    public function store(Request $request)
    {
        /* バリデーション(入力内容が適切な内容になっているか確認)
         * 正しくない場合、元の画面に戻る
         */
        $request->validate([
            'title' => ['required', 'max:255'],
            'detail' => ['max:255'],
        ]);

        /* バリデーション成功の場合、データの保存処理を実行 */
        $user_id = Auth::user()->id;
        $new_task = new Task();
        $new_task->title = $request->title;
        $new_task->detail = $request->detail;
        $new_task->user_id = $user_id;
        $new_task->save();

        return (redirect()->route('Task List'));
    }
    public function update(Request $request)
    {
        /* バリデーション前に、finished の値をbooleanにする */
        $request->merge([
            'finished' => $request->boolean('finished') ? 1 : 0
        ]);

        /* バリデーション(入力内容が適切な内容になっているか確認)
         * 正しくない場合、元の画面に戻る
         */
        $request->validate([
            'id' => ['required'],
            'title' => ['required', 'max:255'],
            'detail' => ['max:255'],
            'finished' => ['boolean']
        ]);

        /* バリデーション成功の場合、データの保存処理を実行 */
        $user_id = Auth::user()->id;
        $task = Task::where('id', $request->id)->where('user_id', $user_id)->first();

        /* 更新する対象のデータが存在しなければ、最初の画面に戻す */
        if ($task == null)
        {
            return (redirect()->route('Task List'));
        }

        $task->title = $request->title;
        $task->detail = $request->detail;
        $task->save();

        return (redirect()->route('Task List'));
    }

    public function delete($id = null)
    {
        $user_id = Auth::user()->id;
        $task = Task::where('user_id', $user_id)->where('id', $id)->first();

        /* 指定のidに一致するレコードがなければ、404を返す */
        if ($task == null)
        {
            return (\App::abort(404));
        }

        $task->delete();

        return (redirect()->route('Task List'));
    }

    /* 完了・未完了の切り替え */
    public function toggle_finished($id)
    {
        $user_id = Auth::user()->id;
        $task = Task::where('user_id', $user_id)->where('id', $id)->first();

        /* 指定のidに一致するレコードがなければ、404を返す */
        if ($task == null)
        {
            return (\App::abort(404));
        }

        $task->finished = !($task->finished);
        $task->save();

        return (redirect()->route('Task List'));
    }
}
