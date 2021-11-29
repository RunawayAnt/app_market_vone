<div class="row">
    <div class="col-6">
        <div class="row">
            <x-adminlte-input type="text" name="iName" label="Metodo de Pago" placeholder="name"
                fgroup-class="col" disable-feedback wire:model.defer="name" />
        </div>
        @error('name')
            {{ $message }}
        @enderror
    </div>

    <div class="col-6">
        <div class="row">
            <x-adminlte-select name="Basic" label="Seccion" fgroup-class="col" wire:model.defer="sections">
                <option value="" selected disabled>Seleccione rol</option>
                <option value="PagosenLinea">Pagos en linea</option>
                <option value="DepositoBancario">Deposito bancario</option>
                <option value="AppMovil">App Movil</option>
            </x-adminlte-select>
        </div>
        @error('sections')
            {{ $message }}
        @enderror
    </div>


    <div class="col-6">
        <div class="row">
            <x-adminlte-textarea name="taBasic" label="Descripcion" placeholder="Insert description..."
                fgroup-class="col" wire:model.defer="description" />

        </div>
        @error('description')
            {{ $message }}
        @enderror
    </div>

    <div class="col-6">
        <div class="row">
            <x-adminlte-textarea name="taBasic" label="Informacion adicional" placeholder="Insert description..."
                fgroup-class="col" wire:model.defer="infoadditional" />

        </div>
        @error('infoadditional')
            {{ $message }}
        @enderror
    </div>

    <div class="col-6">
        <div class="row">
            <x-adminlte-input-file name="image" label="Seleccionar portada" placeholder="Choose a file..."
                fgroup-class="col" disable-feedback wire:model="image" />
        </div>
        @error('image')
            {{ $message }}
        @enderror
    </div>

    <div class="col-6">
        <div class="row">
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" alt="" width="70" fgroup-class="col"
                    class="mx-4">
            @endif
        </div>
    </div>


    <div class="col-12 mt-3 text-right">
        <x-adminlte-button label="Crear metodo de pago" theme="primary" icon="fas fa-check" wire:target="image"
            wire:click="savePayment" />
    </div>
</div>
