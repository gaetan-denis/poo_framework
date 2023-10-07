<x-layout>
    <div>
        <h1>Liste des cours</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Code</th>
            </tr>
            </thead>
            <tbody>
            <tbody>
            @foreach($cursus as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->code }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
