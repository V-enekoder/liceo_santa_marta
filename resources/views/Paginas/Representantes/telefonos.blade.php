<x-app-layout>
    <div>
        <h1>Telefonos</h1>
        <table>
            <thead>
                <tr>
                    <th>Representante</th>
                    <th>Número</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($telefonos as $telefono)
                    <tr>
                        <td>{{ $telefono->representante_id }}</td>
                        <td>{{ $telefono->numero }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
