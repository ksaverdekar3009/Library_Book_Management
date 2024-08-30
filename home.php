<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Apache eCharts</title>
    <meta
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
        name="viewport" />
    <link
        rel="icon"
        href="assets/img/kaiadmin/favicon.ico"
        type="image/x-icon" />

    <!-- Apache eCharts -->
    <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body>
    <div class="container">
        <div class="page-inner">
            <h3 class="fw-bold mb-3">Apache eCharts</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-container" id="lineChart">
                                <!-- <canvas id="lineChart" ></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-container" id="barChart">
                                <!-- <canvas id="barChart" style="width: 100%;height:100%"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-container" id="pieChart">
                                <!-- <canvas
                                    id="pieChart"
                                    style="width: 50%; height: 50%"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-container" id="doughnutChart">
                                <!-- <canvas
                                    id="doughnutChart"
                                    style="width: 50%; height: 50%"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-container" id="radarChart">
                                <!-- <canvas id="radarChart"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-container" id="bubbleChart">
                                <!-- <canvas id="bubbleChart"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-container" id="multipleLineChart">
                                <!-- <canvas id="multipleLineChart"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-container" id="multipleBarChart">
                                <!-- <canvas id="multipleBarChart"></canvas> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="lineChart" style="width: 600px; height: 400px;"></div>
    <div id="barChart" style="width: 600px; height: 400px;"></div>
    <div id="pieChart" style="width: 600px; height: 400px;"></div>
    <div id="doughnutChart" style="width: 600px; height: 400px;"></div>
    <div id="radarChart" style="width: 600px; height: 400px;"></div>
    <div id="bubbleChart" style="width: 600px; height: 400px;"></div>
    <div id="multipleLineChart" style="width: 600px; height: 400px;"></div>
    <div id="multipleBarChart" style="width: 600px; height: 400px;"></div> -->
    
    <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
            <nav class="">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.themekita.com">
                            Github
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Linkdin </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Licenses </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright">
                2024, made with <i class="fa fa-heart heart text-danger"></i> by
                <a href="">ThemeKita</a>
            </div>
            <div>
                Distributed by
                <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
            </div>
        </div>
    </footer>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    <script>
        // Line Chart
        var lineChart = echarts.init(document.getElementById('lineChart'));
        lineChart.setOption({
            title: {
                text: 'Line Chart'
            },
            xAxis: {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900],
                type: 'line'
            }]
        });

        // Bar Chart
        var barChart = echarts.init(document.getElementById('barChart'));
        barChart.setOption({
            title: {
                text: 'Bar Chart'
            },
            xAxis: {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
                type: 'bar'
            }]
        });

        // Pie Chart
        var pieChart = echarts.init(document.getElementById('pieChart'));
        pieChart.setOption({
            title: {
                text: 'Pie Chart'
            },
            series: [{
                name: 'Visitors',
                type: 'pie',
                radius: '50%',
                data: [{
                        value: 50,
                        name: 'New Visitors'
                    },
                    {
                        value: 35,
                        name: 'Subscribers'
                    },
                    {
                        value: 15,
                        name: 'Active Users'
                    }
                ]
            }]
        });

        // Doughnut Chart
        var doughnutChart = echarts.init(document.getElementById('doughnutChart'));
        doughnutChart.setOption({
            title: {
                text: 'Doughnut Chart'
            },
            series: [{
                name: 'Colors',
                type: 'pie',
                radius: ['40%', '70%'],
                data: [{
                        value: 10,
                        name: 'Red'
                    },
                    {
                        value: 20,
                        name: 'Yellow'
                    },
                    {
                        value: 30,
                        name: 'Blue'
                    }
                ]
            }]
        });

        // Radar Chart
        var radarChart = echarts.init(document.getElementById('radarChart'));
        radarChart.setOption({
            title: {
                text: 'Radar Chart'
            },
            radar: {
                indicator: [{
                    name: 'Running',
                    max: 100
                }, {
                    name: 'Swimming',
                    max: 100
                }, {
                    name: 'Eating',
                    max: 100
                }, {
                    name: 'Cycling',
                    max: 100
                }, {
                    name: 'Jumping',
                    max: 100
                }]
            },
            series: [{
                name: 'Team Stats',
                type: 'radar',
                data: [{
                    value: [20, 10, 30, 2, 30],
                    name: 'Team 1'
                }, {
                    value: [10, 20, 15, 30, 22],
                    name: 'Team 2'
                }]
            }]
        });

        // Bubble Chart
        var bubbleChart = echarts.init(document.getElementById('bubbleChart'));
        bubbleChart.setOption({
            title: {
                text: 'Bubble Chart'
            },
            xAxis: {
                type: 'value'
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                name: 'Cars',
                type: 'scatter',
                symbolSize: function(data) {
                    return data[2];
                },
                data: [
                    [25, 17, 25],
                    [30, 25, 28],
                    [35, 30, 8]
                ]
            }, {
                name: 'Motorcycles',
                type: 'scatter',
                symbolSize: function(data) {
                    return data[2];
                },
                data: [
                    [10, 17, 20],
                    [30, 10, 7],
                    [35, 20, 10]
                ]
            }]
        });

        // Multiple Line Chart
        var multipleLineChart = echarts.init(document.getElementById('multipleLineChart'));
        multipleLineChart.setOption({
            title: {
                text: 'Multiple Line Chart'
            },
            xAxis: {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                    name: 'Python',
                    data: [30, 45, 45, 68, 69, 90, 100, 158, 177, 200, 245, 256],
                    type: 'line'
                },
                {
                    name: 'PHP',
                    data: [10, 20, 55, 75, 80, 48, 59, 55, 23, 107, 60, 87],
                    type: 'line'
                },
                {
                    name: 'Ruby',
                    data: [10, 30, 58, 79, 90, 105, 117, 160, 185, 210, 185, 194],
                    type: 'line'
                }
            ]
        });

        // Multiple Bar Chart
        var multipleBarChart = echarts.init(document.getElementById('multipleBarChart'));
        multipleBarChart.setOption({
            title: {
                text: 'Multiple Bar Chart'
            },
            xAxis: {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                    name: 'First time visitors',
                    data: [95, 100, 112, 101, 144, 159, 178, 156, 188, 190, 210, 245],
                    type: 'bar'
                },
                {
                    name: 'Visitors',
                    data: [145, 256, 244, 233, 210, 279, 287, 253, 287, 299, 312, 356],
                    type: 'bar'
                },
                {
                    name: 'Pageview',
                    data: [185, 279, 273, 287, 234, 312, 322, 286, 301, 320, 346, 399],
                    type: 'bar'
                }
            ]
        });
    </script>
    <!-- <script>
        var lineChart = document.getElementById("lineChart").getContext("2d"),
            barChart = document.getElementById("barChart").getContext("2d"),
            pieChart = document.getElementById("pieChart").getContext("2d"),
            doughnutChart = document
            .getElementById("doughnutChart")
            .getContext("2d"),
            radarChart = document.getElementById("radarChart").getContext("2d"),
            bubbleChart = document.getElementById("bubbleChart").getContext("2d"),
            multipleLineChart = document
            .getElementById("multipleLineChart")
            .getContext("2d"),
            multipleBarChart = document
            .getElementById("multipleBarChart")
            .getContext("2d"),
            htmlLegendsChart = document
            .getElementById("htmlLegendsChart")
            .getContext("2d");

        var myLineChart = new Chart(lineChart, {
            type: "line",
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                datasets: [{
                    label: "Active Users",
                    borderColor: "#1d7af3",
                    pointBorderColor: "#FFF",
                    pointBackgroundColor: "#1d7af3",
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 1,
                    pointRadius: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    borderWidth: 2,
                    data: [
                        542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900,
                    ],
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: "bottom",
                    labels: {
                        padding: 10,
                        fontColor: "#1d7af3",
                    },
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10,
                },
                layout: {
                    padding: {
                        left: 15,
                        right: 15,
                        top: 15,
                        bottom: 15
                    },
                },
            },
        });

        var myBarChart = new Chart(barChart, {
            type: "bar",
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                datasets: [{
                    label: "Sales",
                    backgroundColor: "rgb(23, 125, 255)",
                    borderColor: "rgb(23, 125, 255)",
                    data: [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        },
                    }, ],
                },
            },
        });

        var myPieChart = new Chart(pieChart, {
            type: "pie",
            data: {
                datasets: [{
                    data: [50, 35, 15],
                    backgroundColor: ["#1d7af3", "#f3545d", "#fdaf4b"],
                    borderWidth: 0,
                }, ],
                labels: ["New Visitors", "Subscribers", "Active Users"],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: "bottom",
                    labels: {
                        fontColor: "rgb(154, 154, 154)",
                        fontSize: 11,
                        usePointStyle: true,
                        padding: 20,
                    },
                },
                pieceLabel: {
                    render: "percentage",
                    fontColor: "white",
                    fontSize: 14,
                },
                tooltips: false,
                layout: {
                    padding: {
                        left: 20,
                        right: 20,
                        top: 20,
                        bottom: 20,
                    },
                },
            },
        });

        var myDoughnutChart = new Chart(doughnutChart, {
            type: "doughnut",
            data: {
                datasets: [{
                    data: [10, 20, 30],
                    backgroundColor: ["#f3545d", "#fdaf4b", "#1d7af3"],
                }, ],

                labels: ["Red", "Yellow", "Blue"],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: "bottom",
                },
                layout: {
                    padding: {
                        left: 20,
                        right: 20,
                        top: 20,
                        bottom: 20,
                    },
                },
            },
        });

        var myRadarChart = new Chart(radarChart, {
            type: "radar",
            data: {
                labels: ["Running", "Swimming", "Eating", "Cycling", "Jumping"],
                datasets: [{
                        data: [20, 10, 30, 2, 30],
                        borderColor: "#1d7af3",
                        backgroundColor: "rgba(29, 122, 243, 0.25)",
                        pointBackgroundColor: "#1d7af3",
                        pointHoverRadius: 4,
                        pointRadius: 3,
                        label: "Team 1",
                    },
                    {
                        data: [10, 20, 15, 30, 22],
                        borderColor: "#716aca",
                        backgroundColor: "rgba(113, 106, 202, 0.25)",
                        pointBackgroundColor: "#716aca",
                        pointHoverRadius: 4,
                        pointRadius: 3,
                        label: "Team 2",
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: "bottom",
                },
            },
        });

        var myBubbleChart = new Chart(bubbleChart, {
            type: "bubble",
            data: {
                datasets: [{
                        label: "Car",
                        data: [{
                                x: 25,
                                y: 17,
                                r: 25
                            },
                            {
                                x: 30,
                                y: 25,
                                r: 28
                            },
                            {
                                x: 35,
                                y: 30,
                                r: 8
                            },
                        ],
                        backgroundColor: "#716aca",
                    },
                    {
                        label: "Motorcycles",
                        data: [{
                                x: 10,
                                y: 17,
                                r: 20
                            },
                            {
                                x: 30,
                                y: 10,
                                r: 7
                            },
                            {
                                x: 35,
                                y: 20,
                                r: 10
                            },
                        ],
                        backgroundColor: "#1d7af3",
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: "bottom",
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        },
                    }, ],
                    xAxes: [{
                        ticks: {
                            beginAtZero: true,
                        },
                    }, ],
                },
            },
        });

        var myMultipleLineChart = new Chart(multipleLineChart, {
            type: "line",
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                datasets: [{
                        label: "Python",
                        borderColor: "#1d7af3",
                        pointBorderColor: "#FFF",
                        pointBackgroundColor: "#1d7af3",
                        pointBorderWidth: 2,
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 1,
                        pointRadius: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        borderWidth: 2,
                        data: [30, 45, 45, 68, 69, 90, 100, 158, 177, 200, 245, 256],
                    },
                    {
                        label: "PHP",
                        borderColor: "#59d05d",
                        pointBorderColor: "#FFF",
                        pointBackgroundColor: "#59d05d",
                        pointBorderWidth: 2,
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 1,
                        pointRadius: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        borderWidth: 2,
                        data: [10, 20, 55, 75, 80, 48, 59, 55, 23, 107, 60, 87],
                    },
                    {
                        label: "Ruby",
                        borderColor: "#f3545d",
                        pointBorderColor: "#FFF",
                        pointBackgroundColor: "#f3545d",
                        pointBorderWidth: 2,
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 1,
                        pointRadius: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        borderWidth: 2,
                        data: [10, 30, 58, 79, 90, 105, 117, 160, 185, 210, 185, 194],
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: "top",
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10,
                },
                layout: {
                    padding: {
                        left: 15,
                        right: 15,
                        top: 15,
                        bottom: 15
                    },
                },
            },
        });

        var myMultipleBarChart = new Chart(multipleBarChart, {
            type: "bar",
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                datasets: [{
                        label: "First time visitors",
                        backgroundColor: "#59d05d",
                        borderColor: "#59d05d",
                        data: [95, 100, 112, 101, 144, 159, 178, 156, 188, 190, 210, 245],
                    },
                    {
                        label: "Visitors",
                        backgroundColor: "#fdaf4b",
                        borderColor: "#fdaf4b",
                        data: [
                            145, 256, 244, 233, 210, 279, 287, 253, 287, 299, 312, 356,
                        ],
                    },
                    {
                        label: "Pageview",
                        backgroundColor: "#177dff",
                        borderColor: "#177dff",
                        data: [
                            185, 279, 273, 287, 234, 312, 322, 286, 301, 320, 346, 399,
                        ],
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: "bottom",
                },
                title: {
                    display: true,
                    text: "Traffic Stats",
                },
                tooltips: {
                    mode: "index",
                    intersect: false,
                },
                responsive: true,
                scales: {
                    xAxes: [{
                        stacked: true,
                    }, ],
                    yAxes: [{
                        stacked: true,
                    }, ],
                },
            },
        });

        // Chart with HTML Legends

        var gradientStroke = htmlLegendsChart.createLinearGradient(
            500,
            0,
            100,
            0
        );
        gradientStroke.addColorStop(0, "#177dff");
        gradientStroke.addColorStop(1, "#80b6f4");

        var gradientFill = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
        gradientFill.addColorStop(0, "rgba(23, 125, 255, 0.7)");
        gradientFill.addColorStop(1, "rgba(128, 182, 244, 0.3)");

        var gradientStroke2 = htmlLegendsChart.createLinearGradient(
            500,
            0,
            100,
            0
        );
        gradientStroke2.addColorStop(0, "#f3545d");
        gradientStroke2.addColorStop(1, "#ff8990");

        var gradientFill2 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
        gradientFill2.addColorStop(0, "rgba(243, 84, 93, 0.7)");
        gradientFill2.addColorStop(1, "rgba(255, 137, 144, 0.3)");

        var gradientStroke3 = htmlLegendsChart.createLinearGradient(
            500,
            0,
            100,
            0
        );
        gradientStroke3.addColorStop(0, "#fdaf4b");
        gradientStroke3.addColorStop(1, "#ffc478");

        var gradientFill3 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
        gradientFill3.addColorStop(0, "rgba(253, 175, 75, 0.7)");
        gradientFill3.addColorStop(1, "rgba(255, 196, 120, 0.3)");

        var myHtmlLegendsChart = new Chart(htmlLegendsChart, {
            type: "line",
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                datasets: [{
                        label: "Subscribers",
                        borderColor: gradientStroke2,
                        pointBackgroundColor: gradientStroke2,
                        pointRadius: 0,
                        backgroundColor: gradientFill2,
                        legendColor: "#f3545d",
                        fill: true,
                        borderWidth: 1,
                        data: [
                            154, 184, 175, 203, 210, 231, 240, 278, 252, 312, 320, 374,
                        ],
                    },
                    {
                        label: "New Visitors",
                        borderColor: gradientStroke3,
                        pointBackgroundColor: gradientStroke3,
                        pointRadius: 0,
                        backgroundColor: gradientFill3,
                        legendColor: "#fdaf4b",
                        fill: true,
                        borderWidth: 1,
                        data: [
                            256, 230, 245, 287, 240, 250, 230, 295, 331, 431, 456, 521,
                        ],
                    },
                    {
                        label: "Active Users",
                        borderColor: gradientStroke,
                        pointBackgroundColor: gradientStroke,
                        pointRadius: 0,
                        backgroundColor: gradientFill,
                        legendColor: "#177dff",
                        fill: true,
                        borderWidth: 1,
                        data: [
                            542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900,
                        ],
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10,
                },
                layout: {
                    padding: {
                        left: 15,
                        right: 15,
                        top: 15,
                        bottom: 15
                    },
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "500",
                            beginAtZero: false,
                            maxTicksLimit: 5,
                            padding: 20,
                        },
                        gridLines: {
                            drawTicks: false,
                            display: false,
                        },
                    }, ],
                    xAxes: [{
                        gridLines: {
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "500",
                        },
                    }, ],
                },
                legendCallback: function(chart) {
                    var text = [];
                    text.push('<ul class="' + chart.id + '-legend html-legend">');
                    for (var i = 0; i < chart.data.datasets.length; i++) {
                        text.push(
                            '<li><span style="background-color:' +
                            chart.data.datasets[i].legendColor +
                            '"></span>'
                        );
                        if (chart.data.datasets[i].label) {
                            text.push(chart.data.datasets[i].label);
                        }
                        text.push("</li>");
                    }
                    text.push("</ul>");
                    return text.join("");
                },
            },
        });

        var myLegendContainer = document.getElementById("myChartLegend");

        // generate HTML legend
        myLegendContainer.innerHTML = myHtmlLegendsChart.generateLegend();

        // bind onClick event to all LI-tags of the legend
        var legendItems = myLegendContainer.getElementsByTagName("li");
        for (var i = 0; i < legendItems.length; i += 1) {
            legendItems[i].addEventListener("click", legendClickCallback, false);
        }
    </script> -->

</body>

</html>