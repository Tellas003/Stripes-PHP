<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        canvas {
            max-width: 600px;
            width: 100%;
            height: auto;
            margin: 20px;
        }
    </style>
</head>
<body>
    <center>
    <h1>Visitor Statistics</h1>
    <div id="visitorList"></div>
    <canvas id="visitorChart"></canvas>

    <script>
        // Function to fetch visitor data from backend
        function fetchVisitorData() {
            fetch('get_visitor_data.php')
            .then(response => response.json())
            .then(data => {
                // Display visitor list date-wise
                const visitorList = document.getElementById('visitorList');
                visitorList.innerHTML = '<h2>Total Visitors</h2>';
                Object.entries(data).forEach(([date, count]) => {
                    visitorList.innerHTML += `<p>${date}: ${count} visitors</p>`;
                });

                // Extract dates and visitor counts from JSON
                const dates = Object.keys(data);
                const visitors = Object.values(data);

                // Create chart using Chart.js
                const ctx = document.getElementById('visitorChart').getContext('2d');
                const chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: dates,
                        datasets: [{
                            label: 'Visitors',
                            data: visitors,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            });
        }

        // Fetch visitor data when the page loads
        fetchVisitorData();
    </script>
    </center>
</body>
</html>
