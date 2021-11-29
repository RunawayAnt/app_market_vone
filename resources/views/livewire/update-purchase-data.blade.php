<div class=" text-right">
    <x-jet-danger-button class="ml-4" wire:click="$set('opentwo', true)">
        <i class="fas fa-edit fa-1x"></i> Editar Datos
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="opentwo">
        <x-slot name="title">
            <div class=" text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Actualizar
                    Informacion
                    Personal</h3>
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="px-6 py-2 bg-white sm:p-6 text-left">
                <div class="grid grid-cols-6 gap-4">


                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Nombres <span
                                class="text-red-500">*</span> </label>
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            wire:model.defer="names">
                        <x-jet-input-error for="names" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Apellidos <span
                                class="text-red-500">*</span> </label>
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            wire:model.defer="lastnames">
                        <x-jet-input-error for="lastnames" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="country" class="block text-sm font-medium text-gray-700">Documento Nacional de
                            Identidad
                            <span class="text-red-500">*</span> </label>
                        <input type="text" name="email-address" id="email-address" autocomplete="email"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            wire:model.defer="dni">
                        <x-jet-input-error for="dni" />
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                        <label for="email-address" class="block text-sm font-medium text-gray-700">Celular
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="email-address" id="email-address" autocomplete="email"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            wire:model.defer="phone">
                        <x-jet-input-error for="phone" />
                    </div>
                </div>
                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-4">
                        <div class="border-b border-gray-200">Datos de direccion de envio</div>
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-4">
                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                        <label for="region" class="block text-sm font-medium text-gray-700">Distrito
                            <span class="text-red-500">*</span>
                        </label>
                        <select
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            wire:model.defer="district">
                            <option value="" selected disabled>Select Option</option>
                            @foreach ($districtselect as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                        <x-jet-input-error for="district" />
                    </div>
                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                        <label for="region" class="block text-sm font-medium text-gray-700">Direcci&oacute;n
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="mt-1">
                            <textarea id="about" name="about" rows="3"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                placeholder="..." wire:model.defer="shippingaddress"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                            La direccion debe ser precisa.
                        </p>
                        <x-jet-input-error for="shippingaddress" />
                    </div>
                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                        <label for="region" class="block text-sm font-medium text-gray-700">Otros detalles de direccion
                            <span class="text-red-500">*</span>
                        </label>
                        <div class="mt-1">
                            <textarea id="about" name="about" rows="3"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                placeholder="..." wire:model.defer="billingaddress"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                            Los detalles de direccion nos ayudan a ubicarte mas rapido.
                        </p>
                        <x-jet-input-error for="billingaddress" />
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('opentwo',false)">
                Cancel
            </x-jet-secondary-button>
            <x-jet-button wire:click="updateData">
                Guardar
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
