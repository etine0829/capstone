<x-layout>

    <!-- Success or Error Messages -->
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-md mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-500 text-white p-4 rounded-md mb-4">
            {{ session('error') }}
        </div>
    @endif

    <!-- Add Category and Criteria Form -->
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg mx-auto">
        <h2 class="text-xl font-semibold mb-4">Add Category and Criteria</h2>

        <!-- Category and Criteria Input Form -->
        <form action="{{ route('category.storeWithCriteria') }}" method="POST">
            @csrf

            <!-- Category Name Input -->
            <div class="mb-4">
                <label for="category_name" class="block text-sm font-medium text-gray-700">Category Name</label>
                <input type="text" id="category_name" name="category_name" placeholder="Enter Category Name"
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required/>
            </div>

            <!-- Dynamic Criteria Fields -->
            <div id="criteria-fields">
                <div class="criteria-item mb-4 flex space-x-4 items-center">
                    <div class="flex-grow">
                        <label for="criteria_name_1" class="block text-sm font-medium text-gray-700">Criteria Name</label>
                        <input type="text" id="criteria_name_1" name="criteria_names[]" placeholder="Enter Criteria Name"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required/>

                        <label for="criteria_score_1" class="block text-sm font-medium text-gray-700 mt-2">Criteria Score</label>
                        <input type="number" id="criteria_score_1" name="criteria_score[]" placeholder="Enter Score"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required/>
                    </div>
                    <!-- Remove Button -->
                    <button type="button" class="remove-criteria bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Remove</button>
                </div>
            </div>

            <!-- Add More Criteria Button -->
            <button type="button" id="addMoreCriteria" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400">
                Add More Criteria
            </button>

            <!-- Submit Button -->
            <div class="flex justify-end space-x-4 mt-4">
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <!-- JavaScript to Handle Dynamic Fields and Remove Functionality -->
    <script>
        let criteriaIndex = 1;
        const criteriaFields = document.getElementById('criteria-fields');
        const addMoreCriteria = document.getElementById('addMoreCriteria');

        // Function to add new criteria fields dynamically
        addMoreCriteria.addEventListener('click', function() {
            criteriaIndex++;
            const newCriteria = `
                <div class="criteria-item mb-4 flex space-x-4 items-center">
                    <div class="flex-grow">
                        <label for="criteria_name_${criteriaIndex}" class="block text-sm font-medium text-gray-700">Criteria Name</label>
                        <input type="text" id="criteria_name_${criteriaIndex}" name="criteria_names[]" placeholder="Enter Criteria Name"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required/>

                        <label for="score_${criteriaIndex}" class="block text-sm font-medium text-gray-700 mt-2">Score</label>
                        <input type="number" id="score_${criteriaIndex}" name="scores[]" placeholder="Enter Score"
                               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required/>
                    </div>
                    <!-- Remove Button -->
                    <button type="button" class="remove-criteria bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Remove</button>
                </div>
            `;
            criteriaFields.insertAdjacentHTML('beforeend', newCriteria);
            attachRemoveHandlers();
        });

        // Function to attach remove handlers to remove buttons
        function attachRemoveHandlers() {
            const removeButtons = document.querySelectorAll('.remove-criteria');
            removeButtons.forEach((button) => {
                button.addEventListener('click', function() {
                    button.closest('.criteria-item').remove();
                });
            });
        }

        // Attach remove functionality to existing fields on page load
        attachRemoveHandlers();
    </script>
</x-layout>
