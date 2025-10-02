<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/jobs" class="mt-6 space-y-8">
       <div class="space-y-12">
          <div class="border-b border-white/10 pb-12">
             <h2 class="text-base/7 font-semibold text-white">Reserveer een stand</h2>
             <p class="mt-1 text-sm/6 text-gray-400">Vul hieronder de gegevens in om een stand te reserveren.</p>

             <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm/6 font-medium text-white">Naam</label>
                    <div class="mt-2">
                       <div
                          class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                          <div class="shrink-0 text-base text-gray-400 select-none sm:text-sm/6">
                          </div>
                          <input id="title" type="text" name="title" placeholder="Vul je naam in"
                             class="block min-w-0 grow bg-transparent py-1.5 pr-1  text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                       </div>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="stand_type" class="block text-sm/6 font-medium text-white">Soort Stand</label>
                    <div class="mt-2">
                       <div
                          class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                          <div class="shrink-0 text-base text-gray-400 select-none sm:text-sm/6">
                          </div>
                          <input id="stand_type" type="text" name="stand_type" placeholder="Type stand"
                             class="block min-w-0 grow bg-transparent py-1.5 pr-1  text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                       </div>
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="days" class="block text-sm/6 font-medium text-white">Dagen</label>
                    <div class="mt-2">
                       <div
                          class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                          <div class="shrink-0 text-base text-gray-400 select-none sm:text-sm/6">
                          </div>
                          <input id="days" type="text" name="days" placeholder="Aantal dagen"
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
                class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>

</body>
</html>