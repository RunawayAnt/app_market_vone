<div class="row">
    {{-- Minimal example / fill data using the component slot --}}
    <div class="col-12 col-lg-5">
        {{-- Minimal without header / body only --}}
        <x-adminlte-card theme="primary" title="Registrar nuevo usuario" theme="primary" icon="fas fa-md fa-user-plus">
            @livewire('admin.user-create')
        </x-adminlte-card>

    </div>

    <div class="col-12 col-lg-7">
        <x-adminlte-card title="Lista de vendedores" theme="primary" icon="fas fa-md fa-list-ul">

            <x-adminlte-datatable id="table1" :heads="$heads">
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            {{-- @livewire('admin.user-rol', ['user' => $user], key($user->id)) --}}

                        </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </x-adminlte-card>

    </div>
</div>
