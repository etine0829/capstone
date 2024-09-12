<x-layout>
    <div class="max-w-md mx-auto mt-8 p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-xl font-semibold mb-4">CATEGORY</h2>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700" for="eventCategory">Event Category</label>
            <input type="text" id="eventCategory" placeholder="Enter Category" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"/>
        </div>

        <div class="flex justify-end space-x-4">
            <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md shadow-sm hover:bg-gray-400">Cancel</button>
            <button class="bg-yellow-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-yellow-600">Done</button>
        </div>
    </div>
</x-layout>
