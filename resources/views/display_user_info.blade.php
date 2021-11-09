<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Login only') }}
        </h2>
    </x-slot>
    @if (session('message'))
        <div class="max-w-6xl my-8 mx-auto sm:px-6 lg:px-8 bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('message') }}</span>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- ログイン中のユーザー情報を表示(コントローラ側で、Auth::user() を取得しておく) --}}
                    @if($user !== null )
                        {{-- ログイン中なら、$userにオブジェクトが入っている --}}
                        <p>user name: {{ $user->name }}</p>
                        <p>email: {{ $user->email }}</p>
                        <a href="{{ asset('my_logout_sample') }}">
                            <button class="p-2 pl-5 pr-5 bg-gray-500 text-gray-100 text-lg rounded-lg focus:border-4 border-gray-300">
                                got to Log out
                            </button>
                        </a>
                    @else
                        <p>not login</p>
                        <a href="{{ asset('login') }}">
                            <button class="p-2 pl-5 pr-5 bg-gray-500 text-gray-100 text-lg rounded-lg focus:border-4 border-gray-300">
                                got to Log in
                            </button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
