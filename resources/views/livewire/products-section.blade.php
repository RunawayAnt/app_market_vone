<div>
    <x-product-list :products='$newproducts'>
        <x-slot name="title">
            Agregados Recientemente
        </x-slot>
    </x-product-list>
</div>

<div>
    <x-product-list :products='$offproducts'>
        <x-slot name="title">
            Productos desde 30 soles
        </x-slot>
    </x-product-list>
</div>
