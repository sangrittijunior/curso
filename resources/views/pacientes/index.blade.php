<style scoped>
    
    .btn {
        float: right;
        background-color: #0d6efd !important;
        margin-bottom: 10px;
    }

    .btn-danger {
        float: left !important;
        background-color: red !important;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <a href="{{ route('paciente.create') }}" type="button" class="btn btn-primary">
                        <i class="bi bi-calendar2-plus-fill"></i> Novo Paciente
                    </a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>                        
                                <th scope="col">CPF</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Peso</th>
                                <th scope="col">Altura</th>
                                <th scope="col">Nascimento</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                                @if (count($pacientes) > 0)
                                    @foreach($pacientes as $paciente)
                                        <tr>
                                            <td>
                                                {{ $paciente->id }}
                                            </td>
                                            <td>
                                                {{ $paciente->nome }}
                                            </td>
                                            <td>
                                                {{ $paciente->cpf }}
                                            </td>
                                            <td>
                                                {{ $paciente->telefone }}
                                            </td>
                                            <td>
                                                {{ $paciente->sexo }}
                                            </td>
                                            <td>
                                                {{ $paciente->peso }}
                                            </td>
                                            <td>
                                                {{ $paciente->altura }}
                                            </td>
                                            <td>
                                                {{ date('d/m/Y', strtotime($paciente->nascimento)) }}
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ route('paciente.destroy', $paciente->id) }}" accept-charset="UTF-8">
                                                    {!! csrf_field() !!}
                                                    {!! method_field('DELETE') !!}
                                                    <button type="submit" onclick="return confirm('Tem certeza que quer deletar?')"
                                                        class="btn btn-danger bi bi-trash"></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else 
                                    <tr>
                                        <td colspan="9" style="text-align: center;">
                                            <b>Nenhum Paciente cadastrado !</b>
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
