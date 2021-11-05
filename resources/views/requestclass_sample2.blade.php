<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>request_sample2 (.blade.php)</h1>

            <form class="w-full max-w-lg" method="GET">
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                      First Name
                    </label>
                    <input name="first_name" value="{{ $req->input('first_name') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Tom">
                  </div>
                  <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                      Last Name
                    </label>
                    <input name="last_name" value="{{ $req->input('last_name') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Willson">
                  </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                      Password
                    </label>
                    <input name="password" value="{{ $req->input('password') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
                    <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                  </div>
                </div>
                <div class="md:flex md:items-center">
                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Send
                    </button>
                </div>
              </form>
        </div>
    </div>


    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <hr />
    </div>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2>send result</h2>
        <p>First name: {{$req->input('first_name')}}</p>
        <p>Last name: {{$req->input('last_name')}}</p>
        <p>Password: {{$req->input('password')}}</p>
    </div>


</x-guest-layout>
