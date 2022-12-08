<table>
    <thead>
        <tr>
            <th colspan="3" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $a)
            <tr>
                <td>{{ $a->name }}</td>
                <td>{{ $a->email }}</td>
                <td>{{ $a->role }}</td>
            </tr>
        @endforeach
    </tbody>
</table>