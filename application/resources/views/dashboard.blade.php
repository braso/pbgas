@section('css')
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
@endsection
@extends('adminlte::page')

@section('title', 'Dashboard - PB-Gás')

@section('content_header')
    <h1 class="m-0 text-dark">Painel Administrativo - PB-Gás</h1>
@endsection

@section('content')
<div class="row">
    <!-- Consumo Total do Mês -->
    <div class="col-lg-3 col-6">
        <x-adminlte-small-box title="12.500m³" text="Consumo Total do Mês" icon="icons-fa fas fa-tachometer-alt text-white"
            theme="primary" url="#" url-text="Ver detalhes" />
    </div>

    <!-- Clientes Ativos -->
    <div class="col-lg-3 col-6">
        <x-adminlte-small-box title="8.450" text="Clientes Ativos" icon="icons-fa fas fa-users text-white"
            theme="success" url="#" url-text="Ver lista" />
    </div>

    <!-- Faturas Pendentes -->
    <div class="col-lg-3 col-6">
        <x-adminlte-small-box title="320" text="Faturas Pendentes" icon="icons-fa fas fa-file-invoice-dollar text-white"
            theme="warning" url="#" url-text="Ver faturas" />
    </div>

    <!-- Alertas de Segurança -->
    <div class="col-lg-3 col-6">
        <x-adminlte-small-box title="5" text="Alertas de Segurança" icon="icons-fa fas fa-exclamation-triangle text-white"
            theme="danger" url="#" url-text="Ver alertas" />
    </div>
</div>

<div class="row">
    <!-- Gráfico de Consumo Mensal -->
    <div class="col-lg-6">
        <x-adminlte-card title="Consumo Mensal" theme="info" icon="fas fa-chart-line">
            <canvas id="monthlyConsumptionChart"></canvas>
        </x-adminlte-card>
    </div>

    <!-- Últimas Faturas Emitidas -->
    <div class="col-lg-6">
        <x-adminlte-card title="Últimas Faturas Emitidas" theme="secondary" icon="fas fa-file-invoice">
            <table class="table">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Data</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>João Silva</td>
                        <td>01/03/2025</td>
                        <td>R$ 250,00</td>
                    </tr>
                    <tr>
                        <td>Maria Santos</td>
                        <td>02/03/2025</td>
                        <td>R$ 180,00</td>
                    </tr>
                    <tr>
                        <td>Carlos Oliveira</td>
                        <td>03/03/2025</td>
                        <td>R$ 320,00</td>
                    </tr>
                </tbody>
            </table>
        </x-adminlte-card>
    </div>
</div>

<div class="row">
    <!-- Área de Relatórios -->
    <div class="col-lg-6">
        <x-adminlte-card title="Relatórios" theme="lightblue" icon="fas fa-file-alt">
            <p>Gere relatórios detalhados sobre consumo, faturamento e auditorias.</p>
            <a href="#" class="btn btn-primary"><i class="fas fa-download"></i> Baixar Relatórios</a>
        </x-adminlte-card>
    </div>

    <!-- Gestão de Imóveis -->
    <div class="col-lg-6">
        <x-adminlte-card title="Gestão de Imóveis" theme="gray" icon="fas fa-building">
            <p>Gerencie os imóveis cadastrados e suas respectivas conexões de gás.</p>
            <a href="#" class="btn btn-dark"><i class="fas fa-home"></i> Ver Imóveis</a>
        </x-adminlte-card>
    </div>
</div>

@endsection

@section('js')
<script>
    var ctx = document.getElementById('monthlyConsumptionChart').getContext('2d');
    var monthlyConsumptionChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
            datasets: [{
                label: 'Consumo (m³)',
                data: [12000, 13500, 12500, 14000, 13000, 14500],
                backgroundColor: ['#3498db', '#2ecc71', '#e74c3c', '#f1c40f', '#9b59b6', '#1abc9c']
            }]
        }
    });
</script>
@endsection

