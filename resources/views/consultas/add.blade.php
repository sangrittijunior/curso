<style scoped>
    .titulo {
        text-align: center;
        margin-bottom: 30px;
        font-size: 40px !important;
    }

    .col-md-4 {
        width: 33.3% !important;
    }

    .row {
        display: flex;
        justify-content: center;
        margin-bottom: 10px;
        margin-top:10px;
    }

    .time {
        width: 100%;
        border: var(--bs-border-width) solid var(--bs-border-color) !important;
        border-radius: var(--bs-border-radius) !important;
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
            {{ __('Consulta - Agendamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="titulo font-semibold text-xl text-gray-800 leading-tigh">
                        <span>
                            Agendamento de Consulta
                        </span>
                    </div>

                    <form method="POST" action="{{ route('consulta.store') }}">
                        @csrf

                        <div class="row">
                            <div class="input-group col-md-4">
                                <label class="input-group-text" for="paciente">Pacientes</label>
                                <select class="form-select" id="paciente" name="paciente_id">
                                    <option value="">Selecione um Paciente... </option>
                                    @foreach($pacientes as $paciente)
                                        <option value="{{ $paciente->id }}"> {{ $paciente->nome }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group col-md-4">
                                <label class="input-group-text" for="medico">Medico</label>
                                <select class="form-select" id="medico" name="medico_id">
                                    <option value="">Selecione um Medico... </option>
                                    @foreach($medicos as $medico)
                                        <option value="{{ $medico->id }}"> {{ $medico->nome }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group col-md-4">
                                <label class="input-group-text" for="problema">Problema</label>
                                <select class="form-select" id="problema_id" name="problema_id">
                                    <option value="">Selecione um Problema... </option>
                                    @foreach($problemas as $problema)
                                        <option value="{{ $problema->id }}"> {{ $problema->nome }} </option>
                                    @endforeach
                                </select>
                            </div>                        
                        </div>

                        <div class="row">
                            <div class="input-group">
                                <input type="datetime-local" id="date" class="time" name="data_hora" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-text">Observação</span>
                                <textarea class="form-control" aria-label="With textarea" name="observacao"></textarea>
                            </div>
                        </div>

                        <button href="{{ route('consulta.create') }}" type="submit" class="btn btn-primary">
                            Cadastrar
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
