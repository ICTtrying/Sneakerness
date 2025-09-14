<x-layout>
    <x-slot:heading>Jobs page</x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $jobs)
            <a>
                <a href="/jobs/{{ $jobs['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div class="font-bold text-blue-500 text-sm">
                        {{ $jobs->employer->name }}
                    </div>
                    <div>
                        <strong>{{ $jobs['title'] }}</strong>, pays: {{ $jobs['salary'] }} per year.
                    </div>
                </a>
            </a>
        @endforeach
    </div>
</x-layout>
