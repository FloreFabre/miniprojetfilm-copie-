
@extends('layouts.app')
<style>
body {
    background: white !important;
}

</style>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div>
<div class="flex flex-col items-center min-h-screen pt-6  sm:justify-center sm:pt-0">
    <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
        <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                Modifier un film
            </h1>
        </div>
       
        <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            <form method="POST" action="{{ route('updateFilms',$id)}}" enctype="multipart/form-data">
                
                @csrf
                <!-- Title -->

                <div>
                    <label class="block text-sm font-bold text-gray-700" for="title">
                        Title
                    </label>

                    <input value="{{$update->titre}}"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="text" name="titre" placeholder="180" />
            </div>
            <select name = "réalisateurs" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                @foreach ($réalisateur as $réalisateur)
              <option value="{{$réalisateur['id']}}"> 
                  {{ $réalisateur['nom'] }} {{ $réalisateur['prenom'] }}
            </option>
              @endforeach
            </select>
            <select name = "salles" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($salle as $salle)
                  <option value="{{$salle['id']}}"> 
                      {{ $salle['numéro'] }} 
                </option>
                  @endforeach
                </select>
                </div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                    Casting </label>

                    <input value="{{$update->casting}}"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="text" name="réalisateur" placeholder="180" />
           
                <!-- Description -->
                <div class="mt-4">
                    <label class="block text-sm font-bold text-gray-700" for="password">
                        Description
                    </label>
                    <textarea name="extrait" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        rows="4" placeholder="400">{{$update->extrait}}</textarea>
                </div>
                
                <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />

<!-- This is an example component -->
<div class="max-w-2xl mx-auto">

<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload file</label>
<input name = "affiche" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">


<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>
              
                <div class="flex items-center justify-start mt-4 gap-x-2">
                    <button type="submit"
                        class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                        Save
                    </button>
                   
                </div>
            </form>
        </div>
    </div>
</div>
