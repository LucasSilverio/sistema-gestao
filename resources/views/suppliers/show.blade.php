<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Fornecedor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end space-x-3 mb-6">
                        <a href="{{ route('suppliers.edit', $supplier) }}" class="inline-flex items-center px-4 py-2 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-500">
                            Editar
                        </a>
                        <a href="{{ route('suppliers.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400">
                            Voltar
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Nome</h3>
                                <p class="mt-1 text-sm text-gray-900">{{ $supplier->name }}</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Email</h3>
                                <p class="mt-1 text-sm text-gray-900">{{ $supplier->email }}</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Telefone</h3>
                                <p class="mt-1 text-sm text-gray-900">{{ $supplier->phone ?? 'Não informado' }}</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">CNPJ</h3>
                                <p class="mt-1 text-sm text-gray-900">{{ $supplier->cnpj }}</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Endereço</h3>
                                <p class="mt-1 text-sm text-gray-900">{{ $supplier->address }}</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Cidade</h3>
                                <p class="mt-1 text-sm text-gray-900">{{ $supplier->city }}</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Estado</h3>
                                <p class="mt-1 text-sm text-gray-900">{{ $supplier->state }}</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">CEP</h3>
                                <p class="mt-1 text-sm text-gray-900">{{ $supplier->zip_code }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 