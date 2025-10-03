@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stand</title>
</head>

<body class="bg-gray-900 ">
    <x-navbar />

    <div class="space-y-6 m-6 mx-30">
        <p class="text-gray-700 dark:text-gray-200">
            <strong class="text-4xl">Add Stand</strong>
            <?php echo str_repeat("<br>", 4); ?>
            Fill in the details below to add a new stand.
        </p>
       
        <form method="POST" action="/stands" class="mt-6 space-y-8">
         @csrf
            <div class="space-y-12">
                <div class="border-b border-white/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="price" class="block text-sm/6 font-medium text-white">Price</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                    <input id="price" type="text" name="price" placeholder="Enter Price"
                                        class="block min-w-0 grow bg-transparent py-1.5 pr-1  text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="stand_type" class="block text-sm/6 font-medium text-white">Stand Type</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                    <input id="stand_type" type="text" name="stand_type" placeholder="Type of stand"
                                        class="block min-w-0 grow bg-transparent py-1.5 pr-1  text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="days" class="block text-sm/6 font-medium text-white">Number of Days</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                    <input id="days" type="text" name="days" placeholder="Number of days"
                                        class="block min-w-0 grow bg-transparent py-1.5 pr-1  text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add</button>
            </div>
        </form>

</body>

</html>