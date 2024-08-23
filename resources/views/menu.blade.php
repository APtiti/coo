@extends('welcome')

@section('encabezado')
<div class="text-center">
    <h1>Gráficos</h1>
</div>
@endsection

@section('content')
<div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
    <div style="flex: 1 1 300px;">
        <canvas id="barChart"></canvas>
    </div>
    <div style="flex: 1 1 300px;">
        <canvas id="pieChart"></canvas>
    </div>
    <div style="flex: 1 1 300px;">
        <canvas id="lineChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns"></script>
<script>
    var bar_ctx = document.getElementById('barChart').getContext('2d');
    var pie_ctx = document.getElementById('pieChart').getContext('2d');
    var line_ctx = document.getElementById('lineChart').getContext('2d');

    // Datos para gráfico de pedidos por mes
    var meses = @json($meses);
    var cantidadPedidos = @json($cantidadPedidos);

    // Datos para gráfico de usuarios por rol
    var roles = @json($roles);
    var cantidadUsuarios = @json($cantidadUsuarios);

    // Datos para gráfico de productos por categoría
    var categorias = @json($categorias);
    var cantidadProductos = @json($cantidadProductos);

    // Gráfico de pedidos por mes
    var barChart = new Chart(bar_ctx, {
        type: 'bar',
        data: {
            labels: meses,
            datasets: [{
                label: 'Número de pedidos',
                data: cantidadPedidos,
                backgroundColor: 'rgba(255, 105, 180, 0.2)', // Rosa claro
                borderColor: 'rgba(255, 105, 180, 1)', // Rosa oscuro
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: '#333' // Color de las etiquetas
                    }
                },
                x: {
                    ticks: {
                        color: '#333' // Color de las etiquetas
                    }
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: '#333' // Color de las etiquetas de la leyenda
                    }
                }
            }
        }
    });

    // Gráfico de usuarios por rol
    var pieChart = new Chart(pie_ctx, {
        type: 'pie',
        data: {
            labels: roles,
            datasets: [{
                label: 'Número de usuarios por rol',
                data: cantidadUsuarios,
                backgroundColor: [
                    'rgba(255, 105, 180, 0.7)', // Rosa claro
                    'rgba(255, 182, 193, 0.7)', // Rosa pálido
                    'rgba(255, 20, 147, 0.7)', // Rosa oscuro
                    'rgba(255, 192, 203, 0.7)', // Rosa suave
                    'rgba(219, 112, 147, 0.7)', // Rosa coral
                    'rgba(255, 240, 245, 0.7)'  // Rosa muy claro
                ],
                borderColor: [
                    'rgba(255, 105, 180, 1)',
                    'rgba(255, 182, 193, 1)',
                    'rgba(255, 20, 147, 1)',
                    'rgba(255, 192, 203, 1)',
                    'rgba(219, 112, 147, 1)',
                    'rgba(255, 240, 245, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    labels: {
                        color: '#333' // Color de las etiquetas de la leyenda
                    }
                }
            }
        }
    });

    // Gráfico de productos por categoría
    var lineChart = new Chart(line_ctx, {
        type: 'bar',
        data: {
            labels: categorias,
            datasets: [{
                label: 'Número de productos',
                data: cantidadProductos,
                backgroundColor: 'rgba(255, 105, 180, 0.5)', // Rosa claro
                borderColor: 'rgba(255, 105, 180, 1)', // Rosa oscuro
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: '#333' // Color de las etiquetas
                    }
                },
                x: {
                    ticks: {
                        color: '#333' // Color de las etiquetas
                    }
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: '#333' // Color de las etiquetas de la leyenda
                    }
                }
            }
        }
    });
</script>
@endsection
