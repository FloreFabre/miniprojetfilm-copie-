@extends('layouts.app')
@section('main')
<style>
    body {
        background: white !important;
    }

</style>

@if(session('success'))
<div class="alert alert-success">
    <h1>
   Vous avez bien été déconnecté</h1>
    </div>
</div>
@elseif (session('error'))
<div class="alert alert-deleted">
    <h1>
    Echec de la connection</h1>
    </div>
</div>
@endif
   
  
            <div class="mb-4">
                <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                    Login
                </h1>
            </div>
           
            <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                <form method="POST" action="" >
                    @csrf
                    <!-- Title -->
                    
                    <div>
                        
                        <label class="block text-sm font-bold text-gray-700" for="title">
                            Email
                        </label>

                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="email" placeholder="180" />
                    </div>
                    <label class="block text-sm font-bold text-gray-700" for="title">
                        Mot de passe </label>

                    <input
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        type="password" name="password" placeholder="180" />
                        <div class="flex items-center justify-start mt-4 gap-x-2">
                            <button type="submit"
                                class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                Save
                            </button>
                      
                            @endsection
                    <!-- Description -->
                    


