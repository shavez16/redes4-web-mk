// Inicialización del gráfico de tráfico de red
const ctx = document.getElementById('bandwidthChart').getContext('2d');
const bandwidthChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['12:00', '12:30', '13:00', '13:30', '14:00', '14:30'],
        datasets: [{
            label: 'Ancho de Banda (Mbps)',
            data: [10, 20, 30, 25, 40, 50],
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Cambiar estado de conexión a MikroTik
const connectionStatus = document.getElementById('connectionStatus');
// Aquí puedes agregar una función para verificar el estado de la conexión a MikroTik
// por ejemplo, mediante AJAX o llamadas a un backend
setInterval(() => {
    // Simulación de cambio de estado
    const status = Math.random() > 0.5 ? 'Conectado' : 'Desconectado';
    connectionStatus.innerText = status;
}, 5000);
