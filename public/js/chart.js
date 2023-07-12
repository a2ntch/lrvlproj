google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ["Date", "Amount"],
        ["2023-04-01", 0],
        ["2023-05-31", 200],
    ]);

    var options = {
        title: "Donation Statistics",
        curveType: "function",
        legend: { position: "bottom" },
    };

    var chart = new google.visualization.LineChart(
        document.getElementById("curve_chart")
    );

    chart.draw(data, options);
}
