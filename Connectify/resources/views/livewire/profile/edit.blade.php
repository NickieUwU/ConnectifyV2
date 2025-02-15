<div>
    @php
        if($username !== $_SESSION['username']) return redirect('/profile/'.$_SESSION['username'].'/edit');
    @endphp
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <style>
    * {
    font-family: 'Source Sans Pro';
    }
    </style>

<div class="mx-4 min-h-screen max-w-screen-xl sm:mx-8 xl:mx-auto">
  <h1 class="border-b py-6 text-4xl font-semibold">Settings</h1>
  <div class="grid grid-cols-8 pt-3 sm:grid-cols-10">
    <div class="relative my-4 w-56 sm:hidden">
      <input class="peer hidden" type="checkbox" name="select-1" id="select-1" />
      <label for="select-1" class="flex w-full cursor-pointer select-none rounded-lg border p-2 px-3 text-sm text-gray-700 ring-blue-700 peer-checked:ring">Accounts </label>
      <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute right-0 top-3 ml-auto mr-5 h-4 text-slate-700 transition peer-checked:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
      </svg>
    </div>

    <div class="col-span-2 hidden sm:block">
      <ul>
        <li class="mt-5 cursor-pointer border-l-2 border-l-blue-700 px-2 py-2 font-semibold text-blue-700 transition hover:border-l-blue-700 hover:text-blue-700">Profile</li>
        <li class="mt-5 cursor-pointer border-l-2 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Appearance</li>
        <li class="mt-5 cursor-pointer border-l-2 border-transparent px-2 py-2 font-semibold transition hover:border-l-blue-700 hover:text-blue-700">Privacy and safety</li>
      </ul>
    </div>

    <div class="col-span-8 overflow-hidden rounded-xl sm:bg-gray-50 sm:px-8 sm:shadow">
      <div class="pt-4">
        <h1 class="py-2 text-2xl font-semibold">Profile settings</h1>
      </div>
      <hr class="mt-4 mb-8" />
      {{--username--}}
      <p class="py-2 text-xl font-semibold">Username</p>
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
        <form action="/edit" method="post" id="usernameForm" class="flex items-center gap-2">
            @csrf
            <input type="hidden" name="type" value="username">
            <input type="text" name="username" placeholder="{{$_SESSION['username']}}" autocomplete="off" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none">
            <button type="submit" class="inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
        </form>
      </div>
      <hr class="mt-4 mb-8" />
      {{--bio--}}
      <form action="/edit" method="post" id="bioForm">
        @csrf
        <input type="hidden" name="type" value="bio">
        <p class="py-2 text-xl font-semibold">Bio</p>
        <div class="flex items-center">
            <div class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-3">
            <label for="new">
                <span class="text-sm text-gray-500">Bio</span>
                <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
                <input type="text" name="bio" autocomplete="off" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" maxlength="40"/>
                </div>
            </label>
            </div>
        </div>
        <button type="submit" class="mt-4 rounded-lg bg-blue-600 px-4 py-2 text-white">Update bio</button>
      </form>
      <hr class="mt-4 mb-8">
      {{--password--}}
      <form action="/edit" method="post" id="passForm">
        @csrf
        <input type="hidden" name="type" value="password">
        <p class="py-2 text-xl font-semibold">Password</p>
        <div class="flex items-center">
            <div class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-3">
            <label for="old">
                <span class="text-sm text-gray-500">Current Password</span>
                <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
                <input type="password" id="old" name="oldPass" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="***********" />
                </div>
            </label>
            <label for="new">
                <span class="text-sm text-gray-500">New Password</span>
                <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
                <input type="password" id="new" name="newPass" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="***********" />
                </div>
            </label>
            </div>
        </div>
        <button type="submit" class="mt-4 rounded-lg bg-blue-600 px-4 py-2 text-white">Save Password</button>
      </form>
      <hr class="mt-4 mb-8" />
    
      <div class="mb-10">
        <p class="py-2 text-xl font-semibold">Sign out</p>
        <a href="{{url('logout')}}" class="mt-4 rounded-lg bg-red-600 px-4 py-2 text-white">Sign out</a>
      </div>
      <hr class="mt-4 mb-8"/>
      <div class="mb-10">
        <p class="py-2 text-xl font-semibold">Delete Account</p>
        <p class="inline-flex items-center rounded-full bg-rose-100 px-4 py-1 text-rose-600">
          <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
          </svg>
          Proceed with caution
        </p>
        <p class="mt-2">Your account will be deleted. Once you delete your account there is no coming back</p>
        <a href="{{url('destroy/'.$_SESSION['username'])}}" class="ml-auto text-sm font-semibold text-rose-600 underline decoration-2">Continue with deletion</a>
      </div>
    </div>
  </div>
</div>

  <script type="text/javascript">
    $(document).ready(function() {
        $('#usernameForm').submit(function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            const data = $(e.target).closest('form').serialize();
            $.ajax({
                type: "POST",
                url: "{{url('edit')}}",
                data: data,
                success: function (resp) {
                    location.reload();
                },
                error: (xhr, status, error)=>{
                    console.log(xhr.responseText);
                }
            });
        });
        $('#bioForm').submit(function(e){
          e.preventDefault();
          e.stopImmediatePropagation();
          const data = $(e.target).closest('form').serialize();
          $.ajax({
            type: "POST",
            url: "{{url('edit')}}",
            data: data,
            success: function (resp) {
                location.reload();
            },
            error: (xhr, status, error)=>{
              console.log(xhr.responseText);
            }
          });
        })
        $('#passForm').submit(function(e){
            e.preventDefault();
            e.stopImmediatePropagation();
            const data = $(e.target).closest('form').serialize();
            $.ajax({
                type: "POST",
                url: "{{url('edit')}}",
                data: data,
                success: function (resp) {
                    location.reload();
                },
                error: (xhr, status, error)=>{
                    console.log(xhr.responseText);
                }
            });
        });
    });
  </script>
</div>
