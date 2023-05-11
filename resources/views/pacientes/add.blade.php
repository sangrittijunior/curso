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
            {{ __('Paciente - Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="titulo font-semibold text-xl text-gray-800 leading-tigh">
                        <span>
                            Cadastro de paciente
                        </span>
                    </div>

                    <form method="POST" action="{{ route('paciente.store') }}">
                        @csrf

                        <div class="row">

                            <div class="input-group col-md-4">
                                <span class="input-group-text">Nome</span>
                                <input type="textarea" class="form-control" name="nome" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            
                            <div class="input-group col-md-4">
                                <span class="input-group-text">CPF</span>
                                <input type="textarea" class="form-control" name="cpf" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            
                            <div class="input-group col-md-4">
                                <label class="input-group-text" for="problema">Sexo</label>
                                <select class="form-select" id="sexo" name="sexo">
                                    <option value="">Selecione o sexo</option>
                                    <option value="Masculino"> Masculino </option>
                                    <option value="Feminino"> Feminino </option>
                                </select>
                            </div> 
                            
                        </div>

                        <div class="row">
                            <div class="input-group col-md-4">
                                <span class="input-group-text">Telefone</span>
                                <input type="textarea" class="form-control" name="telefone" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group col-md-4">
                                <span class="input-group-text">Peso</span>
                                <input type="textarea" class="form-control" name="peso" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group col-md-4">
                                <span class="input-group-text">Altura</span>
                                <input type="textarea" class="form-control" name="altura" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group col-md-4">
                                <input type="date" id="date" class="time" name="nascimento"/>
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
