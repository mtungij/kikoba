 <form class="max-w-md mx-auto mt-10">
        <label for="select2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
        <select id="select2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose a country</option>
            <option value="USA">United States</option>
            <option value="CAN">Canada</option>
            <option value="MEX">Mexico</option>
        </select>
    </form>

    <script>
        $(document).ready(function () {
            $('#select2').select2({
                placeholder: 'Select an option', // Optional: Placeholder text
                allowClear: true // Optional: Allow clearing the selection
            });
        });
    </script>