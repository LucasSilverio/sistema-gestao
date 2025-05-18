<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detalhes do Cliente') }}
            </h2>
            <div>
                <a href="{{ route('customers.edit', $customer) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Editar
                </a>
                <a href="{{ route('customers.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Voltar
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Informações Pessoais</h3>
                            <div class="mt-4 space-y-4">
                                <div>
                                    <span class="text-gray-500">Nome:</span>
                                    <p class="mt-1">{{ $customer->name }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-500">Email:</span>
                                    <p class="mt-1">{{ $customer->email }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-500">Telefone:</span>
                                    <p class="mt-1">{{ $customer->phone ?? 'Não informado' }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-500">CPF/CNPJ:</span>
                                    <p class="mt-1">{{ $customer->cpf_cnpj }}</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Endereço</h3>
                            <div class="mt-4 space-y-4">
                                <div>
                                    <span class="text-gray-500">Logradouro:</span>
                                    <p class="mt-1">{{ $customer->address }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-500">Cidade:</span>
                                    <p class="mt-1">{{ $customer->city }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-500">Estado:</span>
                                    <p class="mt-1">{{ $customer->state }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-500">CEP:</span>
                                    <p class="mt-1">{{ $customer->zip_code }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 border-t border-gray-200 pt-6">
                        <h3 class="text-lg font-medium text-gray-900">Informações Adicionais</h3>
                        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <span class="text-gray-500">Data de Cadastro:</span>
                                <p class="mt-1">{{ $customer->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                            <div>
                                <span class="text-gray-500">Última Atualização:</span>
                                <p class="mt-1">{{ $customer->updated_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 