<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>未完了のタスク</h3>
                    <hr class="mb-5">
                    <table class="w-full mb-10">
                        <tr class="border">
                            <th>タスク名</th>
                            <th>詳細</th>
                            <th>登録日</th>
                            <th></th>
                        </tr>
                    @foreach ($tasks as $task)
                        <tr class="border">
                            <td class="py-4 px-1">{{ $task->title }}</td>
                            <td class="py-4 px-1">{{ $task->detail }}</td>
                            <td class="py-4 px-1">{{ $task->created_at }}</td>
                            <td class="py-4 px-1">
                                <a  href="task/{{$task->id}}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                    編集
                                </a>
                            </td>
                            <td class="py-4 px-1">
                                <a  href="task/toggle_finished/{{$task->id}}"
                                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 border border-gray-700 rounded">
                                    完了にする
                                </a>
                            </td>
                            <td class="py-4 px-1">
                                <a  href="task/delete/{{$task->id}}"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                                    削除
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </table>

                    <h3>完了済みのタスク</h3>
                    <hr class="mb-5">
                    <table class="w-full mb-5">
                        <tr class="border">
                            <th>タスク名</th>
                            <th>詳細</th>
                            <th>登録日</th>
                            <th></th>
                        </tr>
                    @foreach ($finished_tasks as $task)
                        <tr class="border">
                            <td class="py-4 px-1">{{ $task->title }}</td>
                            <td class="py-4 px-1">{{ $task->detail }}</td>
                            <td class="py-4 px-1">{{ $task->created_at }}</td>
                            <td class="py-4 px-1">
                                <a  href="task/toggle_finished/{{$task->id}}"
                                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 border border-gray-700 rounded">
                                    未完了に戻す
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
