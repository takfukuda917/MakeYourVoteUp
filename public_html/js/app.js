$(document).foundation()

$(document).ready(function () {
    $('.flexslider').flexslider({
        animation: "slide",
        randomize: "Boolean"
    });

    /////////////////
    /// Chart.js ///
    /////////////////
    import Chart from '../modules/chart/chart.js/src/chart.js';
    let myChart = new Chart({...});
});
