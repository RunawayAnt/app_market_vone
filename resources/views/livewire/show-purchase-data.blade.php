<div class="my-5">
    @if ($datapurchase)
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="px-4 py-4 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900"><i class="far fa-smile"></i>&nbsp;Informacion
                Personal</h3>
            <p class="mt-1 text-sm text-gray-600">
                Estos datos ser&aacute;n necesarios para realizar el proceso de alguna compra, para
                ello recomendamos encarecidamente siempre revisar bien sus datos registrados antes de realizar su
                compra.
            </p>
            @livewire('update-purchase-data', ['datapurchase' => $datapurchase], key($datapurchase->id))
        </div>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">

            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Nombres y Apellidos
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $datapurchase->names . ', ' . $datapurchase->lastnames }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Documento Nacional de Identidad
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $datapurchase->dni }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Numero telefonico
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $datapurchase->phone }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Direccion
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $datapurchase->address }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    @else
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    No ha registrado sus datos personales. <i class="far fa-surprise"></i>
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Por favor registra tus datos antes de realizar una compra.
                </p>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                @livewire('create-purchase-data')
            </div>
        </div>

    @endif
</div>
