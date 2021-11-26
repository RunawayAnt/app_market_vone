<div class="position-relative ">
    {{-- <input type="text" class="form-input" placeholder="Buscar producto..." wire.model="query"> --}}
    <div class="input-group input-group-lg">
        <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" placeholder="Buscar producto..." wire:model="query"
            wire:keydown.escape="{{ $this->reset('products') }}" wire:keydown.tap="{{ $this->reset('products') }}"
            wire:keydown="{{ $this->reset('products') }}" wire:>
        <div class="bg-primary rounded-right d-flex justify-content-center align-items-center p-2"
            id="inputGroup-sizing-default">
            <p class="h5 text-white">Go!&nbsp;<i class="fas fa-shopping-basket fa-1x white"></i></p>
        </div>
    </div>

    <div wire:loading
        class="position-absolute top-50 start-50 translate-middle bg-white list-group list-group-flush ml-2 shadow-lg">
        <div class="list-group-item list-group-item-action">
            <p class="mb-1">...Cargando</p>
        </div>
    </div>

    <div class="position-absolute top-50 start-50 translate-middle bg-white list-group list-group-flush ml-2 shadow-lg">
        @if (!empty($query))
            @if ($products != '[]')
                @foreach ($products as $product)
                    <a href="{{ route('product', $product->slug) }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="icontext mb-1 mr-4">
                                <img class="icon icon-xs rounded-circle" src="{{ $product->image }}">
                                <h5 class="mb-1">{{ $product->name }}</h5>
                            </div>
                            <small class="text-muted">{{ $product->sku }}</small>
                        </div>
                        <p class="mb-1">Precio: s/{{ $product->price }}</p>
                        <small class="text-muted">{{ $product->name }}</small>
                    </a>
                @endforeach
            @else
                <a href="#" class="list-group-item list-group-item-action">
                    <p class="mb-1">Sin resultados</p>
                    <small class="text-muted">No se encontraron resultados.</small>
                </a>
            @endif
        @endif
    </div>
</div>
