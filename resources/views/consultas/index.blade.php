<style scoped>
    .btn{
        float: right;
        background-color: #0d6efd !important;
        margin-bottom: 10px;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Consulta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <a href="{{ route('consulta.create') }}" type="button" class="btn btn-primary">
                        <i class="bi bi-calendar2-plus-fill"></i> Novo Agendamento
                    </a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Paciente</th>
                                <th scope="col">Medico</th>
                                <th scope="col">Problema</th>
                                <th scope="col">Agendamento</th>
                            </tr>
                        </thead>
                        <tbody>
                                @if (count($consultas) > 0)
                                    @foreach($consultas as $consulta)
                                        <tr>
                                            <td>
                                                {{ $consulta->id}}
                                            </td>
                                            <td>
                                                {{ $consulta->paciente_id }}
                                            </td>
                                            <td>
                                                {{ $consulta->medico_id }}
                                            </td>
                                            <td>
                                                {{ $consulta->problema_id }}
                                            </td>
                                            <td>
                                                {{ date('d/m/Y', strtotime($consulta->data_hora)) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else 
                                    <tr>
                                        <td colspan="5" style="text-align: center;">
                                            <b>Nenhuma consulta agendada !</b>
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
