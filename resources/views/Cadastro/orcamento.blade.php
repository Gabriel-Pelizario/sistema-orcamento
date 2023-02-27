@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Cadastro de Orçamento') }}</h1>

    <form method="POST" action="{{ route('orcamento.store') }}">
        @csrf
        {{-- inicio honorarios --}}
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Novo Orçamento</h6>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">Proposta de Honorários</h6>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group focused">
                                    <label class="form-control-label">Cliente</label>
                                    <select class="form-control" name="cliente_id" id="cliente_id" required>
                                        <option selected disabled value="0">Selecione um cliente..</option>
                                        @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Tipo de orçamento<span
                                            class="small text-danger">*</span></label>
                                    <input type="text" id="tp_orcamento" class="form-control" name="tp_orcamento">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group focused">
                                    <label class="form-control-label">Tipo de Pagamento</label>
                                    <select class="form-control" name="tp_pagamento" id="tp_pagamento">
                                        <option selected disabled value="0"></option>
                                        <option value="1">Débito</option>
                                        <option value="2">Crédito</option>
                                        <option value="3">PIX</option>
                                        <option value="4">Cheque</option>
                                        <option value="5">Dinheiro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group focused">
                                    <label class="form-control-label">Qtde. Parcelas</label>
                                    <select class="form-control" name="qtde_parcela" id="qtde_parcela">
                                        <option selected disabled value="0"></option>
                                        <option value="1">1x</option>
                                        <option value="2">2x</option>
                                        <option value="3">3x</option>
                                        <option value="4">4x</option>
                                        <option value="5">5x</option>
                                        <option value="6">6x</option>
                                        <option value="7">7x</option>
                                        <option value="8">8x</option>
                                        <option value="9">9x</option>
                                        <option value="10">10x</option>
                                        <option value="11">11x</option>
                                        <option value="12">12x</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="valor">Valor</label>
                                    <input type="text" class="form-control" id="valor" name="valor">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="validade">Validade (dias)</label>
                                    <input type="text" class="form-control" id="validade" name="validade">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Observação p/ pagamento</label>
                                <textarea class="form-control" rows="3" id="obs_pagamento" name="obs_pagamento"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- fim honorarios --}}

        {{-- inicio histórico --}}
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Novo Orçamento</h6>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">Histórico de Atendimento</h6>
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea class="form-control" rows="5" id="historico" name="historico"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- fim historico --}}

        {{-- inicio orçamento --}}
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Novo Orçamento</h6>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">Orçamento</h6>
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea class="form-control" rows="5" id="orcamento" name="orcamento"></textarea>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="row mt-4">
                            <div class="col">
                                <button type="submit" class="btn btn-primary" value="salvar orcamento"><i
                                        class="fas fal fa-save"></i>
                                    Salvar</button>
                                <a href="{{ route('lista.orcamento') }}" class="btn btn-primary"><i
                                        class="fas fa-thin fa-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- fim orçamento --}}





    </form>
@endsection
