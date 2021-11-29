<div class="text-right">
    <x-jet-button class="ml-1" wire:click="$set('opentwo', true)">
        <i class="fas fa-eye"></i> Ver mi pedido
    </x-jet-button>

    <x-jet-dialog-modal wire:model="opentwo">
        <x-slot name="title">
            <div class=" text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Actualizar
                    Informacion
                    Personal</h3>
            </div>
        </x-slot>

        <x-slot name="content">
             <div class="card card-body">
                <div class="row">
                    @foreach ($products as $item)
                        <div class="col-6">
                            <figure class="itemside mb-2">
                                <div class="aside"><img src="{{$item->image}}" class="border img-sm">
                                </div>
                                <figcaption class="info align-self-center">
                                    <a href="#" class="title">{{$item->name}}</a>
                                    <strong class="price">s/ {{$item->price}}.00</strong>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                    @endforeach
                </div> <!-- row.// -->
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('opentwo',false)">
                Cancel
            </x-jet-secondary-button>
             
        </x-slot>
    </x-jet-dialog-modal>
</div>
