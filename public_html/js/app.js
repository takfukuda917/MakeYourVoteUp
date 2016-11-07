$(document).foundation()

$(document).ready(function () {
    $('.flexslider').flexslider({
        animation: "slide",
        randomize: "Boolean"
    });

    //////////////////////////
    /// Chart.js by Andrew ///
    //////////////////////////
    console.log(Chart);
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
    	type: 'pie', /// type of chart 
    	data: {
    		labels: ["Liberal", "Democratic", "Conservative", "Green"], /// chart label array
    		datasets: [
    			{
		            label: '# of Votes',
		            data: [60, 20, 10, 10], /// Data, # of votes
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',	
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            hoverBackgroundColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(255, 159, 64, 1)'
		            ]
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
});
