<div class="row">
    {{-- Minimal example / fill data using the component slot --}}
    <div class="col-7">
        {{-- Minimal without header / body only --}}
        <x-adminlte-card title="Registrar nuevo metodo de pago" class="mx-3" theme="dark"
            icon="fas fa-md fa-money-bill-alt">
            @livewire('admin.payment-create')
        </x-adminlte-card>

    </div>

    <div class="col-12">
        <x-adminlte-card title="Lista de metodos de pagos" theme="primary" icon="fas fa-md fa-list-ul"
            class="mx-3">
            <x-adminlte-datatable id="table1" :heads="$heads">
                @foreach ($payment as $item)
                    <tr>
                        {{-- <td><img src="{{ Storage::url( $item -> image) }}" alt=""></td> --}}
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->sections }}</td>
                        <td>{{ $item->description }}</td>
                        <td class="">
                            <button class="btn btn-primary ">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>

                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </x-adminlte-card>

    </div>
</div>
