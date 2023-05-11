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

    .btn {
        float: right;
        background-color: #0d6efd !important;
        margin-bottom: 10px;
    }

</style>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Medico - Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="titulo font-semibold text-xl text-gray-800 leading-tigh">
                        <span>
                            Cadastro
                        </span>
                    </div>

                    <form method="POST" action="{{ route('medico.store') }}">
                        @csrf

                        <div class="row">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Nome</span>
                                <input type="textarea" class="form-control" name="nome" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <button href="{{ route('medico.create') }}" type="submit" class="btn btn-primary">
                            Cadastrar
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
