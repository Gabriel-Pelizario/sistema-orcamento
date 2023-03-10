@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Cadastro de Cliente') }}</h1>

    <form method="POST" action="{{ route('cliente.store') }}">
        @csrf
        {{-- inicio contato --}}
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Cadastro de Cliente</h6>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">Contato</h6>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Nome<span
                                            class="small text-danger">*</span></label>
                                    <input type="text" id="nome" class="form-control" name="nome">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="telefone">Telefone</label>
                                    <input type="text" id="telefone" class="form-control" name="telefone">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="celular">Celular</label>
                                    <input type="text" id="celular" class="form-control" name="celular">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="celular">Data Nascimento</label>
                                    <input type="date" id="dt_Nascimento" class="form-control" name="dt_Nascimento">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="cpf">CPF</label>
                                    <input type="text" id="cpf" class="form-control" name="cpf">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="cpf">RG</label>
                                    <input type="text" id="rg" class="form-control" name="rg">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label>Tipo Atendimento</label>
                                    <select id="tp_atendimento" name="tp_atendimento" class="form-control">
                                        <option selected disabled value="0"></option>
                                        <option value="1">Particular</option>
                                        <option value="2">Defensoria P??blica</option>
                                        <option value="3">Indica????o</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="email">Email</label>
                                    <input type="email" id="email" class="form-control" name="email">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- fim contato --}}

        {{-- inicio endere??o --}}
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 ">
                        <h6 class="m-0 font-weight-bold text-primary">Cadastro de Cliente</h6>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">Endere??o</h6>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">CEP</label>
                                    <input type="text" id="cep" class="form-control" name="cep" onblur="pesquisacep(this.value)">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="telefone">Rua</label>
                                    <input type="text" id="rua" class="form-control" name="rua">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="telefone">Bairro</label>
                                    <input type="text" id="bairro" class="form-control" name="bairro">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="cpf">IBGE</label>
                                    <input type="text" id="ibge" class="form-control" name="ibge">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="cpf">Cidade</label>
                                    <input type="text" id="cidade" class="form-control" name="cidade">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="cpf">Estado</label>
                                    <input type="text" id="uf" class="form-control" name="uf">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="cpf">N??mero</label>
                                    <input type="text" id="nr" class="form-control" name="nr">
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary" value="salvar"><i class="fas fal fa-save"></i>
                                    Salvar</button>
                                <a href="/home" class="btn btn-primary"><i class="fas fa-thin fa-arrow-left"></i>
                                    Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- fim endere??o --}}
    </form>
@endsection
