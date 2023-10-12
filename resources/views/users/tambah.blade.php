<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Data User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div  class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="width:500px; margin: 0 auto;">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="width:500px">
                    <form action="{{ route ('user.tambah') }}">
                        <div class="form-group" style="wi">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="name" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                            <small id="name" class="form-text text-muted"></small>
                        </div><br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div><br>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                        </div><br>
                        <button type="submit" class="btn btn-primary">Submit</button><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>