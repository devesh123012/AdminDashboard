
<script src="js/vendor/modernizr-3.7.1.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>


<!--======================= jVector Script====================== -->
<script>
$('#world-map').vectorMap({
    map: 'world_mill'
}); 
</script>



<script>
  // chart colors
var colors = ['#5069D1','#323D55'];

/* 3 donut charts */
var donutOptions = {
  cutoutPercentage: 85, 
  legend: {position:'bottom', padding:5, labels: {pointStyle:'circle', usePointStyle:true}}
};
var chDonutData2 = {
    labels: [],
    datasets: [
      {
        backgroundColor: colors.slice(0,3),
        borderWidth: 0,
        data: [45.5,54.5]
      }
    ]
};
var chDonut2 = document.getElementById("chDonut2");
if (chDonut2) {
  new Chart(chDonut2, {
      type: 'pie',
      data: chDonutData2,
      options: donutOptions
  });
}
// var colors = ['#31428D','#323D55'];
// donut 3
var chDonutData3 = {
    labels: [],
    datasets: [
      {
        backgroundColor: colors.slice(0,3),
        borderWidth: 0,
        data: [45.5,54.5]
      }
    ]
};
var chDonut3 = document.getElementById("chDonut3");
if (chDonut3) {
  new Chart(chDonut3, {
      type: 'pie',
      data: chDonutData3,
      options: donutOptions
  });
}

</script>

<script>
  // chart colors
var colors = ['#31418E','#313C54','#4B62C1'];

/* 3 donut charts */
var donutOptions = {
  cutoutPercentage: 55, 
  legend: {position:'bottom', padding:5, labels: {pointStyle:'circle', usePointStyle:true}}
};
var chDonutData1 = {
    labels: [],
    datasets: [
      {
        backgroundColor: colors.slice(0,3),
        borderWidth: 0,
        data: [62.3,30.2,7.5]
      }
    ]
};
var chDonut1 = document.getElementById("chDonut1");
if (chDonut1) {
  new Chart(chDonut1, {
      type: 'pie',
      data: chDonutData1,
      options: donutOptions
  });
}

</script>

<!-- <script type="text/javascript"> 
  
var ctx = document.getElementById("piechart"); 
var piechart = new Chart(ctx, { 
  type: 'pie', 
  data: { 
    labels: [5,10,40], 
    datasets: [ 
      { label: 'Toda', 
        data: [21,45,55,33], 
        backgroundColor :['#323149'
], 
  
borderColor: [ 
                '#4D5BA1'
            ], 
borderWidth : 1 
      } 
    ] 
  }, 
  options: { 
        scales: { 
            yAxes: [{ 
                ticks: { 
                    beginAtZero:true
                } 
            }] 
        } 
    } 
}); 
  
    </script>  -->

<script type="text/javascript"> 
  
var ctx = document.getElementById("myChart"); 
var myChart = new Chart(ctx,
{ 
  type: 'line', 
  data: 
  { 
    labels: ["","10:00 PM", "12:00 PM" , "14:00 PM" , "16:00 PM", "18:00 PM",""], 
    datasets: 
    [ 
      { 
      	label: 'Today', 
      	ylabel:[78,89],
        data: [0,5,40,8,43,15,25], 
        backgroundColor :['#282F48'], 
  
        borderColor: [ '#6C8DFF'], 
        borderDash:[1],
        borderWidth : 1 
      },
      { 
      	label: 'Yesterday', 
        data: [0,30,10,50,7,25,0], 
        backgroundColor :['#312E43'], 
  
        borderColor: [ '#F25365'], 
        borderDash:[5],
        borderWidth : 1 
      } 
    ] 
  }, 
  
  options:
    { 
        scales:
        { 
            yAxes: 
            [
            { 
                ticks: 
                { 
                    beginAtZero:true
                } 
            }
            ] 
        } 
    } 
},

); 
</script> 

<script type="text/javascript"> 
  
var ctx = document.getElementById("myChart1"); 
var myChart1 = new Chart(ctx, { 
  type: 'line', 
  data: { 
    labels: ["","10:00 PM", "12:00 PM" , "14:00 PM" , "16:00 PM", "18:00 PM",""], 
    datasets: [ 
      { label: 'Today', 
        data: [0,25,5,40,8,43,15,25], 
        backgroundColor :[ '#2D365A'
], 

borderDash:[5],  
borderColor: [ 
               
                '#4B62C1'            ], 
borderWidth : 1 
      } 
    ] 
  }, 
  options: { 
        scales: { 
            yAxes: [{ 
                ticks: { 
                    beginAtZero:true
                } 
            }] 
        } 
    } 
}); 
</script>

<script type="text/javascript"> 
  
var ctx = document.getElementById("myChart2"); 
var myChart2 = new Chart(ctx, { 
  type: 'line', 
  data: { 
    labels: ["","10:00 PM", "12:00 PM" , "14:00 PM" , "16:00 PM", "18:00 PM",""], 
    datasets: [ 
      { label: 'Today', 
        data: [0,25,5,40,8,43,15,25], 
        backgroundColor :[
                '#1E4C51'
                ], 
                
  
borderColor: [ 
               
                '#00CE93'
            ], 
borderDash:[5],
borderWidth : 1 
      } 
    ] 
  }, 
  options: { 
        scales: { 
            yAxes: [{ 
                ticks: { 
                    beginAtZero:true
                } 
            }] 
        } 
    } 
}); 
</script>

<script type="text/javascript"> 
  
var ctx = document.getElementById("myChart3"); 
var myChart3 = new Chart(ctx, { 
  type: 'line', 
  data: { 
    labels: ["","10:00 PM", "12:00 PM" , "14:00 PM" , "16:00 PM", "18:00 PM",""], 
    datasets: [ 
      { label: 'Today', 
        data: [0,25,5,40,8,43,15,25], 
        backgroundColor :[
                '#514033' 
], 
  
borderColor: [ 
                '#FF9600'
            ], 
borderDash:[5],
borderWidth : 1 
      } 
    ] 
  }, 
  options: { 
        scales: { 
            yAxes: [{ 
                ticks: { 
                    beginAtZero:true
                } 
            }] 
        } 
    } 
}); 
  
</script>


<script type="text/javascript"> 
  
var ctx = document.getElementById("myChart4"); 
var myChart4 = new Chart(ctx, { 
  type: 'line', 
  data: { 
  	
    labels: ["","10:00 PM", "12:00 PM" , "14:00 PM" , "16:00 PM", "18:00 PM",""], 
    datasets: [ 
      { label: 'Today', 
        data: [0,25,5,40,8,43,15,25], 
        backgroundColor :['#503246'
             
], 
  
borderColor: [ 
                '#FA4F5C'
            ], 
borderDash:[5],
borderWidth : 1 
      } 
    ] 
  }, 
  options: { 
        scales: { 
            yAxes: [{ 
                ticks: { 
                    beginAtZero:true
                } 
            }] 
        } 
    } 
}); 
  
</script>


</body>

</html>