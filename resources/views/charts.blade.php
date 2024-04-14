@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>data representation</h4>
    </div>
    <div class="card-body">
    <div id="bar-container" class="bar-container"></div>
    <div id="container" class="container"></div>
    <div>
    <canvas id="myChart"></canvas>
    </div>
    </div>

</div>
<script>
    
const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['ITB', 'ITS', 'BBA', 'DCS'],
    datasets: [{
      label: 'number of students in academic year',
      data: [72, 59, 43, 52, ],
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
@stop
