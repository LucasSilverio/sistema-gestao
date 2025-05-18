<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('customers.update', $customer) }}" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nome -->
                            <div>
                                <x-input-label for="name" :value="__('Nome')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $customer->name)" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $customer->email)" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Telefone -->
                            <div>
                                <x-input-label for="phone" :value="__('Telefone')" />
                                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone', $customer->phone)" />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>

                            <!-- CPF/CNPJ -->
                            <div>
                                <x-input-label for="cpf_cnpj" :value="__('CPF/CNPJ')" />
                                <x-text-input id="cpf_cnpj" class="block mt-1 w-full" type="text" name="cpf_cnpj" :value="old('cpf_cnpj', $customer->cpf_cnpj)" required />
                                <x-input-error :messages="$errors->get('cpf_cnpj')" class="mt-2" />
                            </div>

                            <!-- Endereço -->
                            <div>
                                <x-input-label for="address" :value="__('Endereço')" />
                                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address', $customer->address)" required />
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>

                            <!-- Cidade -->
                            <div>
                                <x-input-label for="city" :value="__('Cidade')" />
                                <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city', $customer->city)" required />
                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                            </div>

                            <!-- Estado -->
                            <div>
                                <x-input-label for="state" :value="__('Estado')" />
                                <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state', $customer->state)" required />
                                <x-input-error :messages="$errors->get('state')" class="mt-2" />
                            </div>

                            <!-- CEP -->
                            <div>
                                <x-input-label for="zip_code" :value="__('CEP')" />
                                <x-text-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code" :value="old('zip_code', $customer->zip_code)" required />
                                <x-input-error :messages="$errors->get('zip_code')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('customers.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">
                                Cancelar
                            </a>
                            <x-primary-button>
                                {{ __('Atualizar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 