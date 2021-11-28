<div class="d-inline">
    {{-- With label, invalid feedback disabled and form group class --}}
    <div class="row">
        <div class="col-6">
            <div class="row">
                <x-adminlte-input type="text" name="iName" label="Nombres y Apellidos" placeholder="name example"
                    fgroup-class="col" disable-feedback wire:model.defer="name" />
            </div>
            {{-- <input type="text" wire:model.defer="name"  placeholder="text"/> --}}
            @error('name')
                {{ $message }}
            @enderror
        </div>

        <div class="col-6">
            <div class="row">
                <x-adminlte-input type="email" name="iEmail" label="Correo Electronico" placeholder="example@gmail.com"
                    fgroup-class="col" disable-feedback wire:model.defer="email" />
            </div>
            {{-- <input type="email" wire:model.defer="email" placeholder="email" /> --}}
            @error('email')
                {{ $message }}
            @enderror
        </div>

        <div class="col-6">
            <div class="row">
                <x-adminlte-input type="password" name="iPass" label="Contraseña" placeholder="*******"
                    fgroup-class="col" disable-feedback wire:model.defer="password" />
            </div>
            {{-- <input type="password" wire:model.defer="password"  placeholder="password"/> --}}
            @error('password')
                {{ $message }}
            @enderror
        </div>

        <div class="col-6">
            <div class="row">
                <x-adminlte-select name="selBasic" label="Rol" fgroup-class="col" wire:model.defer="rol">
                    <option value="" selected disabled>Seleccione rol</option>
                    <option value="Admin">Administrador</option>
                    {{-- <option disabled>Cliente</option> --}}
                    <option value="Businessman">Vendedor</option>
                </x-adminlte-select>
            </div>
            {{-- <input type="password" wire:model.defer="password"  placeholder="password"/> --}}
            @error('password')
                {{ $message }}
            @enderror
        </div>

        <div class="col-6">
            <div class="row">
                <x-adminlte-input type="password" name="iPassConfirm" label="Confirmar contraseña" placeholder="*******"
                    fgroup-class="col" disable-feedback wire:model.defer="password_confirm" />
            </div>
            {{-- <input type="password" wire:model.defer="password_confirm" placeholder="password" /> --}}
            @error('password_confirm')
                {{ $message }}
            @enderror
        </div>
        <div class="col-12 mt-3 text-right">
            <x-adminlte-button label="Crear usuario" theme="primary" icon="fas fa-check" wire:click="saveUser" />
        </div>

    </div>
</div>
