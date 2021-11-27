<div>
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
            <div class="px-3 py-1 bg-white sm:p-6 text-left">
                <div class="grid grid-cols-6 gap-6">
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
                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="region" class="block text-sm font-medium text-gray-700">Dirrecci&otilde;n
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="region" id="region" autocomplete="address-level1"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            wire:model.defer="address">

                        <x-jet-input-error for="address" />

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