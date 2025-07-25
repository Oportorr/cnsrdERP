/*=========================================================================================
    File Name: dashboard-analytics.js
    Description: intialize advance cards
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 3.0
    Author: Pixinvent
    Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
(function(window, document, $) {
    'use strict';

    $('#audience-list-scroll, #goal-list-scroll').perfectScrollbar({
        wheelPropagation: true
    });

    $("#sp-bar-total-cost").sparkline([5,6,7,8,9,10,13,15,13,12,10,9,10,12,15,18,16,14,12,10,8,5], {
        type: 'bar',
        width: '100%',
        height: '30px',
        barWidth: 4,
        barSpacing: 6,
        barColor: '#FFA87D'
    });

    $("#sp-stacked-bar-total-sales").sparkline([5,6,7,8,9,10,13,15,13,12,10,9,10,12,15,18,16,14,12,10,8,5], {
        type: 'bar',
        width: '100%',
        height: '30px',
        barWidth: 4,
        barSpacing: 6,
        barColor: '#FF7588'
    });

    $("#sp-tristate-bar-total-revenue").sparkline([5,6,7,8,9,10,13,15,13,12,10,9,10,12,15,18,16,14,12,10,8,5], {
        type: 'bar',
        width: '100%',
        height: '30px',
        barWidth: 4,
        barSpacing: 6,
        barColor: '#16D39A'
    });
    
    /***********************************************************
    *               New User - Page Visist Stats               *
    ***********************************************************/
    //Get the context of the Chart canvas element we want to select
    var ctx2 = document.getElementById("line-stacked-area").getContext("2d");

    // Chart Options
    var userPageVisitOptions = {
        responsive: true,
        maintainAspectRatio: false,
        pointDotStrokeWidth : 4,
        legend: {
            display: false,
            labels: {
                fontColor: '#404e67',
                boxWidth: 10,
            },
            position: 'bottom',
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    color: "rgba(255,255,255, 0.3)",
                    drawTicks: true,
                    drawBorder: false,
                    zeroLineColor:'#FFF'
                },
                ticks: {
                    display: true,
                },
            }],
            yAxes: [{
                display: true,
                gridLines: {
                    color: "rgba(0,0,0, 0.07)",
                    drawTicks: false,
                    drawBorder: false,
                    drawOnChartArea: true
                },
                ticks: {
                    display: true,
                    maxTicksLimit: 5
                },
            }]
        },
        title: {
            display: false,
            text: 'Chart.js Line Chart - Legend'
        },
    };

    // Chart Data
    var userPageVisitData = {
        labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016","2017"],
        datasets: [{
            label: "Unique Visitor",
            data: [0, 5, 22, 14, 28, 12, 24, 0],
            backgroundColor: "rgba(255,117,136, 0.7)",
            borderColor: "transparent",
            pointBorderColor: "transparent",
            pointBackgroundColor: "transparent",
            pointRadius: 2,
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
        },{
            label: "Total Visits",
            data: [0, 8, 30, 15, 12, 21, 14, 0],
            backgroundColor: "rgba(255,168,125,0.9)",
            borderColor: "transparent",
            pointBorderColor: "transparent",
            pointBackgroundColor: "transparent",
            pointRadius: 2,
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
        }, {
            label: "Page Views",
            data: [0, 20, 10, 45, 20, 36, 21, 0],
            backgroundColor: "rgba(22,211,154,0.7)",
            borderColor: "transparent",
            pointBorderColor: "transparent",
            pointBackgroundColor: "transparent",
            pointRadius: 2,
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
        }]
    };

    var userPageVisitConfig = {
        type: 'line',
        // Chart Options
        options : userPageVisitOptions,
        // Chart Data
        data : userPageVisitData
    };

    // Create the chart
    var stackedAreaChart = new Chart(ctx2, userPageVisitConfig);

    
    
    /********************************************
    *               Vector Maps                 *
    ********************************************/
    // Sessions data
    // -----------------------------------
    $('#world-map-markers').vectorMap({
      map: 'world_mill',
      backgroundColor: '#fff',
      zoomOnScroll: false,
      series: {
        regions: [{
          values: visitorData,
          scale: ['#E0F6F6', '#00B5B8'],
          normalizeFunction: 'polynomial'
        }]
      },
      onRegionTipShow: function(e, el, code){
        el.html(el.html()+' (Visitor - '+visitorData[code]+')');
      }
    });

    /********************************************
    *           Sessions by Browser             *
    ********************************************/
    Morris.Donut({
        element: 'sessions-browser-donut-chart',
        data: [{
            label: "Chrome",
            value: 3500
        }, {
            label: "Firefox",
            value: 2500
        }, {
            label: "Safari",
            value: 2000
        }, {
            label: "Opera",
            value: 1000
        },{
            label: "Internet Explorer",
            value: 500
        } ],
        resize: true,
        colors: ['#40C7CA', '#FF7588', '#2DCEE3', '#FFA87D', '#16D39A']
    });
    

    /************************************************
    *                  Bounce Rate                   *
    ************************************************/
    
    Morris.Area({
        element: 'bounce-rate',
        data: [{Day: '2017-02-20', a: 28, }, {Day: '2017-02-21', a: 40 }, {Day: '2017-02-22', a: 36 }, {Day: '2017-02-23', a: 48 }, {Day: '2017-02-24', a: 32 }, {Day: '2017-02-25', a: 42 }, {Day: '2017-02-26', a: 30 }],
        xkey: 'Day',
        ykeys: ['a'],
        labels: ['Bounce Rate'],
        behaveLikeLine: true,
        ymax: 60,
        resize: true,
        pointSize: 0,
        smooth: true,
        gridTextColor: '#BFBFBF',
        gridLineColor: '#E4E7ED',
        numLines: 6,
        gridtextSize: 14,
        lineWidth: 0,
        fillOpacity: 0.8,
        lineColors: ['#00B5B8'],
        hideHover: 'auto',
    });

    /************************************************
    * AVG. SESSION DURATION & PAGES/SESSION         *
    ************************************************/

    Morris.Area({
        element: 'area-chart',
        data: [{
            year: '2016-12-01',
            AvgSessionDuration: 0,
            PagesSession: 0
        }, {
            year: '2016-12-02',
            AvgSessionDuration: 150,
            PagesSession: 90
        }, {
            year: '2016-12-03',
            AvgSessionDuration: 140,
            PagesSession: 120
        }, {
            year: '2016-12-04',
            AvgSessionDuration: 105,
            PagesSession: 240
        }, {
            year: '2016-12-05',
            AvgSessionDuration: 190,
            PagesSession: 140
        }, {
            year: '2016-12-06',
            AvgSessionDuration: 230,
            PagesSession: 250
        },{
            year: '2016-12-07',
            AvgSessionDuration: 270,
            PagesSession: 190
        }],
        xkey: 'year',
        ykeys: ['AvgSessionDuration', 'PagesSession'],
        labels: ['Avg. Session Duration', 'Pages/Session'],
        behaveLikeLine: true,
        ymax: 300,
        resize: true,
        pointSize: 0,
        pointStrokeColors:['#BABFC7', '#16D39A'],
        smooth: false,
        gridLineColor: '#e3e3e3',
        numLines: 6,
        gridtextSize: 14,
        lineWidth: 0,
        fillOpacity: 0.8,
        hideHover: 'auto',
        lineColors: ['#BABFC7', '#16D39A']
    });

})(window, document, jQuery);