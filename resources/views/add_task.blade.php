<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>タスクの追加</h3>
                    <hr class="mb-5">
                    <form method="POST">
                        @csrf

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-24">
                                <label class="
                                        block text-gray-500 font-bold md:text-left
                                        mb-1 md:mb-0 pr-4"
                                    for="task-title">
                                    タスク名
                                </label>
                            </div>
                            <div class="md:w-3/5">
                                <input class="
                                        bg-gray-200 appearance-none border-2 border-gray-200 rounded
                                        w-full py-2 px-4 text-gray-700 leading-tight
                                        focus:outline-none focus:bg-white focus:border-purple-200"
                                    id="task-title"
                                    type="text"
                                    name="title"
                                    value="{{old('title')}}">
                                @error('title')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="md:flex md:items-start mb-6">
                            <div class="md:w-24">
                                <label class="
                                        block text-gray-500 font-bold md:text-left
                                        mb-1 md:mb-0 pr-4"
                                    for="task-detail">
                                    詳細
                                </label>
                            </div>
                            <div class="md:w-3/5">
                                <textarea class="
                                        bg-gray-200 appearance-none border-2 border-gray-200 rounded
                                        w-full py-2 px-4 text-gray-700 leading-tight
                                        focus:outline-none focus:bg-white focus:border-purple-200"
                                    rows="5"
                                    id="task-detail"
                                    name="detail">{{old('detail')}}</textarea>
                                @error('detail')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="md:flex md:items-start mb-6">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                追加する
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
