$(document).ready(function () {
    $.ajax({
        url: "grafico_conductor.php",
        type: "GET",
        success: function (data) {
            var data = JSON.parse(data);
            var descripcion = [];
            var buenos = [];
            var medios = [];
            var malos = [];
            for (var i in data) {
                descripcion.push("" + data[i].descripcion);
                buenos.push(data[i].buenos);
                medios.push(data[i].medios);
                malos.push(data[i].malos);
            }

            var chartdata = {
                labels: descripcion,
                datasets: [
                    {
                        label: " # Buenos",
                        fill: false,
                        lineTension: 0.3,
                        backgroundColor: chartColors.green,
                        borderColor: chartColors.green,
                        pointHoverBackgroundColor: chartColors.green,
                        pointHoverBorderColor: chartColors.green,
                        hoverBackgroundColor: chartColors.green,
                        data: buenos,
                        yAxisID: "y-axis-1"
                    },
                    {
                        label: " # Medios",
                        fill: false,
                        lineTension: 0.3,
                        backgroundColor: chartColors.yellow,
                        borderColor: chartColors.yellow,
                        pointHoverBackgroundColor: chartColors.yellow,
                        pointHoverBorderColor: chartColors.yellow,
                        hoverBackgroundColor: chartColors.yellow,
                        data: medios,
                        yAxisID: "y-axis-2"
                    },
                    {
                        label: " # Malos",
                        fill: false,
                        lineTension: 0.3,
                        backgroundColor: chartColors.red,
                        borderColor: chartColors.red,
                        pointHoverBackgroundColor: chartColors.red,
                        pointHoverBorderColor: chartColors.red,
                        hoverBackgroundColor: chartColors.red,
                        data: malos,
                        yAxisID: "y-axis-3"
                    }
                ]
            };

            var ctx = $("#tipo_conductores");
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
                        },{
                            type: "linear",
                            display: true,
                            position: "left",
                            id: "y-axis-3",
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