<div class="card mb-2 border-0 bg rounded-xl">
    <div class="card-body">
        <x-adminlte-select name="optionsTest1" label="Calificacion" label-class="text-primary"
            wire:model.defer="calification">
            <x-adminlte-options
                :options="['1' => '1 estrella', '2' => '2 estrellas', '3' => '3 estrellas','4' => '4 estrellas','5' => '5 estrellas',]"
                empty-option="Seleccione una puntuacion" />
        </x-adminlte-select>
         @error('calification')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <x-adminlte-textarea name="taMsg" rows=5 igroup-size="sm" label="Comentario" label-class="text-primary"
            wire:model.defer="comment" placeholder="Escribir comentario sobre el producto..." disable-feedback>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-lg fa-comment-dots text-primary"></i>
                </div>
            </x-slot>
        </x-adminlte-textarea>
        @error('comment')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
         <x-adminlte-button label="Enviar" theme="primary" icon="null" wire:click="sendComment" />
    </div>
</div>

