$(document).ready(function () {
    $.ajax({
        url: "grafico_psicometrico.php",
        type: "GET",
        success: function (data) {
            var data = JSON.parse(data);
            var descripcion = [];
            var realizado = [];
            var norealizado = [];
            for (var i in data) {
                descripcion.push("" + data[i].descripcion);
                realizado.push(data[i].realizado);
                norealizado.push(data[i].norealizado);
            }

            var chartdata = {
                labels: descripcion,
                datasets: [
                    {
                        label: " # Realizado",
                        fill: false,
                        lineTension: 0.3,
                        backgroundColor: chartColors.green,
                        borderColor: chartColors.green,
                        pointHoverBackgroundColor: chartColors.green,
                        pointHoverBorderColor: chartColors.green,
                        hoverBackgroundColor: chartColors.green,
                        data: realizado,
                        yAxisID: "y-axis-1"
                    },
                    {
                        label: " # No realizado",
                        fill: false,
                        lineTension: 0.3,
                        backgroundColor: chartColors.red,
                        borderColor: chartColors.red,
                        pointHoverBackgroundColor: chartColors.red,
                        pointHoverBorderColor: chartColors.red,
                        hoverBackgroundColor: chartColors.red,
                        data: norealizado,
                        yAxisID: "y-axis-2"
                    }
                ]
            };

            var ctx = $("#psicometrico");
            ctx.height = 300;
            ctx.width = 300;

            var LineGraph = new Chart(ctx, {
                type: 'bar',
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
                                display: false,
                                beginAtZero: true
                            },
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                            }
                        },{
                            type: "linear",
                            display: true,
                            position: "left",
                            id: "y-axis-2",
                            scaleLabel: {
                                display: false,
                                labelString: 'value'
                            },ticks: {
                                display: false,
                                beginAtZero: true
                            },
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                            }
                        }]
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