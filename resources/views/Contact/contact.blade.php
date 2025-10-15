<x-layouts.app title="Contact" heading="Contact Us">
    <form action="/contact" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
            <input type="text" name="name" id="name"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
            <input type="email" name="email" id="email"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
        </div>
        <div>
            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Message</label>
            <textarea name="message" id="message" rows="4"
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white"></textarea>
        </div>
        <button type="submit"
                class="rounded-md bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700">
            Send
        </button>
    </form>
</x-layouts.app>

