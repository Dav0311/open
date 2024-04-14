<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>UICT Open Library System</title>

    <style>
        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 200px;
            background-color: #f1f1f1;
            overflow-y: auto;
            padding-top: 3rem;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 0.5rem 1rem;
            text-decoration: none;
        }

        .sidebar a.active, .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        /* Content */
        .content {
            margin-left: 200px;
            padding: 1rem;
            height: 100vh;
        }

        /* Navbar */
        header {
            background-color: #5ec6f7;
            padding: 0.5rem 1rem;
            margin-bottom: 1rem;
        }

        header h3 {
            margin-bottom: 0;
            color: white;
        }
        img{
          padding:0px 0px 0px 10px;
          margin:0px 0px 0px 10px;
        }
    </style>
</head>
<body>

<div class="body">
    <header>
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="30" height="30">
            </a>
            <h3>Openlibrary Admin Dashboard</h3>
        </nav>
    </header>

<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        Dashboard
    </x-nav-link>
</div>

    <div class="row">
      
        <div class="col-md-3">
            <!-- Sidebar -->
            <div class="sidebar">
            
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" width="100" height="100">
            </a>
            <br>
            <a href="{{ url('/display-charts') }}">Charts</a>
                <a class="active" href="{{ url('/') }}">Home</a>
                <a href="{{ url('/student') }}">Students</a>
                <a href="{{ url('/course') }}">Courses</a>
                <a href="{{ url('/document') }}">Documents</a>
                
                <a href="#about">About</a>
            </div>
        </div>

        <!-- Page content -->
        
            <div class="container">
                <div class="content">
                
                    <br>
                    @yield('content')
                </div>
            </div>
        
    </div>
</div>


<script>

    // Data retrieved from https://worldpopulationreview.com/country-rankings/countries-by-density
Highcharts.chart('bar-container', {
    chart: {
        type: 'variablepie'
    },
    title: {
        text: 'Countries compared by population density and total area, 2022.',
        align: 'left'
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
            'Area (square km): <b>{point.y}</b><br/>' +
            'Population density (people per square km): <b>{point.z}</b><br/>'
    },
    series: [{
        minPointSize: 10,
        innerSize: '20%',
        zMin: 0,
        name: 'countries',
        borderRadius: 5,
        data: [{
            name: 'Spain',
            y: 505992,
            z: 92
        }, {
            name: 'France',
            y: 551695,
            z: 119
        }, {
            name: 'Poland',
            y: 312679,
            z: 121
        }, ],
        colors: [
            '#4caefe',
            '#3dc3e8',
            
            '#00e887',
           
        ]
    }]
});

Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Historic World Population by Region',
        align: 'left'
    },
    subtitle: {
        text: 'Source: <a ' +
            'href="https://en.wikipedia.org/wiki/List_of_continents_and_continental_subregions_by_population"' +
            'target="_blank">Wikipedia.org</a>',
        align: 'left'
    },
    xAxis: {
        categories: ['Africa', 'America', 'Asia', 'Europe'],
        title: {
            text: null
        },
        gridLineWidth: 1,
        lineWidth: 0
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (millions)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        },
        gridLineWidth: 0
    },
    tooltip: {
        valueSuffix: ' millions'
    },
    plotOptions: {
        bar: {
            borderRadius: '50%',
            dataLabels: {
                enabled: true
            },
            groupPadding: 0.1
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Year 1990',
        data: [631, 727, 3202, 721]
    }, {
        name: 'Year 2000',
        data: [814, 841, 3714, 726]
    }, {
        name: 'Year 2018',
        data: [1276, 1007, 4561, 746]
    }]
});

const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['ITB', 'ITS', 'BBA', 'DCS'],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 15, ],
      borderWidth: 1
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

</script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
