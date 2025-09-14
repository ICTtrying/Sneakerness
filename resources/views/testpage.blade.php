<x-layout>
    <x-slot:heading>Test Page</x-slot:heading>
    <div class="page">
        <p>doe wat je wil hier. <strong>NO RULES HEHEHE</strong></p>
        <br>
        <h1>Job Listings</h1>
        <table border="1" cellpadding="8" cellspacing="0" class="table-jobs">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Comany</th>
                    <th>Title</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $job->id }}</td>
                        <td>{{ $job->employer->name }}</td>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->salary }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p class="text-4xl font-bold">add a job</p>

        <form method="POST" action="/testpage" class="Addjobform">
            @csrf

            <label for="employer">Employer:</label>
            <select name="employer" id="employer" required>
                @foreach (\App\Models\Employer::all() as $employer)
                    <option value="{{ $employer->id }}">{{ $employer->name }}</option>
                @endforeach
            </select>

            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>

            <label for="salary">Salary:</label>
            <input type="number" step="0.01" name="salary" id="salary" required>

            <button type="submit">Add Job</button>
        </form>
    </div>
</x-layout>
