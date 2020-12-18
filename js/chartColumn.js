renderChart("containerColumnMessage", "MessagePeriode", "Nombre de messages postés", "message(s) posté(s)");
renderChart("containerColumnLecture", "LecturePeriode", "Nombre de messages lu", "message(s) lu(s)");
renderChart("containerColumnDocument", "DocumentPeriode", "Nombre de document uploadés ou téléchargés", "document(s) traité(s)");
renderChart("containerColumnConnexion", "ConnexionPeriode", "Nombre de connexion", "connexion(s)");
renderChart("containerColumnMotivation", "MotivationPeriode", "Score de motivation", "score de motivation");
function renderChart(idChart, data, title, msg){
    Highcharts.chart(idChart, {
        chart: {
            type: 'column'
        },
        title: {
            text: title
        },
        xAxis: {
            categories: [
                '01/02/2009 - 15/02/2009',
                '15/02/2009 - 29/02/2009',
                '01/03/2009 - 15/03/2009',
                '15/03/2009 - 31/03/2009',
                '01/04/2009 - 15/04/2009',
                '15/04/2009 - 31/04/2009',
                '01/05/2009 - 15/05/2009',
                '15/05/2009 - 31/05/2009',
            ],
            crosshair: true,
            labels: {
                rotation: 90
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Nombres'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.0f}'+msg+'</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: ''+user,
            data: JSONResult[user][data].map(Number)
        }]
    });
}
