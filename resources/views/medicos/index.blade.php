<style scoped>
    .table{

    }
    
    .btn {
        float: right;
        background-color: #0d6efd !important;
        margin-bottom: 10px;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Medico') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <a href="{{ route('medico.create') }}" type="button" class="btn btn-primary">
                        <i class="bi bi-calendar2-plus-fill"></i> Novo Medico
                    </a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Medico</th>                        
                            </tr>
                        </thead>
                        <tbody>
                                @if (count($medicos) > 0)
                                    @foreach($medicos as $medico)
                                        <tr>
                                            <td>
                                                {{ $medico->id}}
                                            </td>
                                            <td>
                                                {{ $medico->nome }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else 
                                    <tr>
                                        <td colspan="2" style="text-align: center;">
                                            <b>Nenhum Medico cadastrado</b>
                                        </td>
                                    </tr>
                                @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
