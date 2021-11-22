<div>
{{-- With prepend slot, label and data-* config --}}
<x-adminlte-select-bs name="selBsVehicle" label="Vehicle" label-class="text-lightblue"
    igroup-size="lg" data-title="Select an option..." data-live-search
    data-live-search-placeholder="Search..." data-show-tick>
    <x-slot name="prependSlot">
        <div class="input-group-text bg-gradient-info">
            <i class="fas fa-car-side"></i>
        </div>
    </x-slot>
    <option data-icon="fa fa-fw fa-car">Car</option>
    <option data-icon="fa fa-fw fa-motorcycle">Motorcycle</option>
</x-adminlte-select-bs>
</div>
