$(document).ready(function () {
    $.ajax({
        url: "grafico_accidentes_deconomico.php",
        type: "GET",
        success: function (data) {
            var data = JSON.parse(data);
            var mes = [];
            var cantidad = [];
            for (var i in data) {
                mes.push("" + data[i].mes);
                cantidad.push(data[i].cantidad);
            }

            var chartdata = {
                labels: mes,
                datasets: [
                    {
                        label: " # accidentes",
                        fill: false,
                        lineTension: 0.3,
                        data: cantidad,
                        yAxisID: "y-axis-1"
                    }
                ]
            };

            var ctx = $("#accidentes");
            ctx.height = 300;
            ctx.width = 300;

            var myLineChart   = new Chart(ctx, {
                type: 'line',
                data: chartdata,
                options: {
                    title: {
                        display: true,
                        text: '',
                        maintainAspectRatio: false,
                        fontColor: chartColors.green
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: ''
                            },
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                            }
                        }],
                        yAxes: [{
                            type: "linear",
                            display: true,
                            position: "left",
                            id: "y-axis-1",
                            scaleLabel: {
                                display: false,
                                labelString: 'value'
                            },ticks: {
                                beginAtZero: true
                            },
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                            }
                        }
                    ]
                    }
                }
            });
        },
        error: function (data) {

        }
    });
});
window.chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    gold: 'rgb(248,193,28)',
    grey: 'rgb(201, 203, 207)'
};