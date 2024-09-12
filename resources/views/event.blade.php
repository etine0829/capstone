{{-- 

<x-app-layout>
    <!-- DASHBOARD FOR THE ADMIN -->
    
    
        <div class="flex h-screen">
            <!-- Sidebar -->
            <div id="sidebar" class="bg-red-dark text-yellow-dark w-64 space-y-6 px-2 py-7 absolute inset-y-0 left-0 transform -translate-x-full transition-transform duration-200 ease-in-out md:relative md:translate-x-0">
                <!-- Back Button (Visible on mobile) -->
                <button id="back-btn" class="md:hidden text-white focus:outline-none p-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <!-- Logo -->
                <div class="flex items-center justify-center h-40">
                   
                    <img src="{{asset('/img/tres (2).png')}}" alt="LOGO OF THE TEAM">
                </div>
                <!-- Navigation -->
                <nav class="bg-red-dark font-bold text-yellow-dark">
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-red-900 hover:text-yellow-200">
                        Home
                    </a>
                    <a href="#" class="block px-4 rounded transition duration-200 hover:bg-red-900 hover:text-yellow-200">
                        <button type="button" class="flex items-center text-base transition duration-75 rounded-lg group  hover:bg-red-900 hover:text-yellow-200" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" id="dropdownButton">
                            <span class="flex-1 text-left rtl:text-right text-yellow-dark hover:text-yellow-200 py-2 whitespace-nowrap">Event</span>
                            <div class=" ml-[110px] px-8 py-3">
                                <svg class="w-3 h-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </div>
                        </button>
                                       
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-red-900 hover:text-yellow-200">
                        Results
                    </a>
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-red-900 hover:text-yellow-200">
                        Users
                    </a>
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-red-900 hover:text-yellow-200">
                    Logout
                    </a>
                </nav>
            </div>
    
    
            <!-- Hamburger Button -->
            <div class="flex-1 md:hidden">
                <button id="menu-btn" class="text-gray-600 focus:outline-none p-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
    
    
            <!-- Main Content -->
            <div class="flex-1 p-10">
                <h2 class="text-2xl font-bold mb-6">Welcome to MyApp</h2>
                <p>Your content goes here.</p>
                @foreach ($events as $event)
                    <div>{{$event->event_name}}</div>
                @endforeach
                {{-- <div class="flex-1 p-10">
                  <form action="{{route('add_event')}}" method="POST" >
                      @csrf
                      <label for="event_name"></label>
                      <input type="text" name="event_name" id="event_name">
      
                      <label for="event_date"></label>
                      <input type="datetime-local" name="event_date" id="event_date">
      
                      <label for="venue"></label>
                      <input type="text" name="venue" id="venue">
      
                      <label for="type_of_scoring"></label>
                      <input type="text" name="type_of_scoring" id="type_of_scoring">
                      
                      <input type="submit" value="Submit">
                  </form>
              </div> --}}
         {{-- </div>
            </div>
        </div>
    
    
        <!-- JavaScript to toggle the sidebar and back button -->
        <script>
            const menuBtn = document.getElementById('menu-btn');
            const sidebar = document.getElementById('sidebar');
            const backBtn = document.getElementById('back-btn');
    
    
            // Toggle the sidebar when the hamburger menu is clicked
            menuBtn.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
            });
    
    
            // Hide the sidebar when the back button is clicked
            backBtn.addEventListener('click', () => {
                sidebar.classList.add('-translate-x-full');
            });
    
    
            //Dropdown the event
            document.getElementById('dropdownButton').addEventListener('click', function() {
            var dropdown = document.getElementById('dropdown-example');
            dropdown.classList.toggle('hidden');
        });
        </script>
    
    
    
    
    </x-app-layout>
    
    
     --}}

        <!-- Dashboard for the Admin -->    
       
            <!-- Sidebar -->
            {{-- <div id="sidebar" class=" bg-red-dark text-yellow-dark w-64 space-y-6 px-6 py-7 absolute inset-y-0 left-0 transform -translate-x-full transition-transform duration-200 ease-in-out md:relative md:translate-x-0 z-50">
                <!-- Back Button (Visible on mobile) -->
                <button id="back-btn" class="md:hidden text-white focus:outline-none p-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <!-- Logo -->
                <div class="flex items-center justify-center h-40">
                    <img src="{{ asset('/img/tres (2).png') }}" alt="LOGO OF THE TEAM" class="w-32">
                </div>
                <!-- Navigation -->
                <nav class="font-bold text-yellow-dark">
                    <a href="#" class="block py-2.5 px-4 rounded hover:bg-red-800 hover:text-yellow-200">Event</a>
                    <a href="#" class="block py-2.5 px-4 rounded hover:bg-red-800 hover:text-yellow-200">Category & Criteria</a>
                    <a href="#" class="block py-2.5 px-4 rounded hover:bg-red-800 hover:text-yellow-200">Participant</a>
                    <a href="#" class="block py-2.5 px-4 rounded hover:bg-red-800 hover:text-yellow-200">Judge</a>
                    <a href="#" class="block py-2.5 px-4 rounded hover:bg-red-800 hover:text-yellow-200">Result</a>
                </nav>
            </div> --}}
    
            <!-- Main Content -->
            @extends('layouts.dashboard-layout')

            <x-app-layout>  

            @section('content')
            <div class="flex-1 p-6 bg-gray-100">
                
    
                <!-- Event Section -->
                <div class="mt-[50px]">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-800">EVENT</h2>
                        <div class="flex items-center space-x-2">
                            <button id="addEventButton" class="bg-green-500 text-white py-1 px-4 rounded-lg hover:bg-green-600 mt-[]">+ Add</button>
                            <div class="relative ">
                                <input type="text" placeholder="Search" class="border rounded-lg py-2 px-3 focus:outline-none">
                                <button class="absolute right-2 top-2 text-yellow-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1118 3.75a7.5 7.5 0 010 15z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    @foreach ($events as $event)
                    
               
                    <!-- Event Card -->
                    <div class="mt-[50px] grid grid-cols-2 gap-6 sm:grid-cols-2">
                        <div class="bg-gray-200 p-4 rounded-lg shadow-lg flex items-center space-x-4 ">
                            <div class="bg-gray-300 w-16 h-16 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold">{{$event->event_name}}</h3>
                                <p class="text-gray-600">Venue: <span class="text-gray-800">{{$event->venue}}</span></p>
                            </div>
                            <div class=>
                                <button class="hover:bg-slate-400 ml-[150px]">
                                    MANAGE
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
           
      
        
        <!-- Add Button (Trigger the Modal) -->


            <!-- Modal Background (Hidden by default) -->
            <div id="modalBackground" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden z-50">
                <!-- Modal Box -->
                <div class="bg-white rounded-lg shadow-lg w-96 p-6 space-y-4">
                    <h2 class="text-lg font-bold text-gray-800">Event Information</h2>

                    <!-- Event Information Form -->
                    <form action="{{ route('add_event') }}" method="POST">
                        @csrf
                        <div class="space-y-4">
                            <!-- Event Title -->
                            <div>
                                <label for="eventTitle" class="block text-sm font-medium text-gray-700">Event Title</label>
                                <input type="text" id="eventTitle" name="event_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                            </div>

                            <!-- Date -->
                            <div>
                                <label for="eventDate" class="block text-sm font-medium text-gray-700">Date</label>
                                <input type="datetime-local" id="eventDate" name="event_date" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                            </div>

                            <!-- Venue -->
                            <div>
                                <label for="eventVenue" class="block text-sm font-medium text-gray-700">Venue</label>
                                <input type="text" id="eventVenue" name="venue" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                            </div>

                            <!-- Scoring System -->
                            <div>
                                <label for="scoringSystem" class="block text-sm font-medium text-gray-700">Scoring System</label>
                                <input type="text" id="scoringSystem" name="type_of_scoring" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                            </div>
                            
                            <!-- Upload Poster -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Upload Event Poster</label>
                                <div class="mt-1 flex items-center space-x-4">
                                    <label class="block">
                                        <span class="sr-only">Choose File</span>
                                        <input type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-yellow-500 file:text-white hover:file:bg-yellow-600">
                                    </label>
                                    <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center">
                                        <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Actions -->
                        <div class="mt-6 flex justify-end space-x-4">
                            <button type="button" id="cancelButton" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Cancel</button>
                            <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            

            <!-- JavaScript for Modal Functionality -->
            <script>
                const addEventButton = document.getElementById('addEventButton');
                const modalBackground = document.getElementById('modalBackground');
                const cancelButton = document.getElementById('cancelButton');

                // Show the modal when Add button is clicked
                addEventButton.addEventListener('click', () => {
                    modalBackground.classList.remove('hidden');
                });

                // Hide the modal when Cancel button is clicked
                cancelButton.addEventListener('click', () => {
                    modalBackground.classList.add('hidden');
                });
            </script>

                
                    <!-- JavaScript to toggle the sidebar and back button -->
                    <script>
                        const menuBtn = document.getElementById('menu-btn');
                        const sidebar = document.getElementById('sidebar');
                        const backBtn = document.getElementById('back-btn');
                
                        // Toggle the sidebar when the hamburger menu is clicked
                        menuBtn?.addEventListener('click', () => {
                            sidebar.classList.toggle('-translate-x-full');
                        });
                
                        // Hide the sidebar when the back button is clicked
                        backBtn?.addEventListener('click', () => {
                            sidebar.classList.add('-translate-x-full');
                        });
                    </script>
                    @endsection
                </x-app-layout>

                
                
                
               