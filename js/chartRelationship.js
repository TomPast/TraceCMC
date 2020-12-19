
function newChartRelation(periode){
  var dataP1 = [];
  for(var nomEnvoyeur in JSONRelation) {
    //dataP1.push(nomEnvoyeur);
     //console.log(k, JSONRelation[k]);
    for(var nomReceveur in JSONRelation[nomEnvoyeur]){
        //console.log(nomReceveur, JSONRelation[nomEnvoyeur][nomReceveur].relation[0]);
        if(JSONRelation[nomEnvoyeur][nomReceveur].relation[periode] != 0){
          dataP1.push([nomEnvoyeur, nomReceveur, JSONRelation[nomEnvoyeur][nomReceveur].relation[periode]]);
        }

     }
  }


  Highcharts.chart('container', {

    title: {
      text: ''
    },

    accessibility: {
      point: {
        valueDescriptionFormat: '{index}. From {point.from} to {point.to}: {point.weight}.'
      }
    },

    series: [{
      keys: ['from', 'to', 'weight'],
      data: dataP1,
      type: 'dependencywheel',
      name: 'Dependency wheel series',
      dataLabels: {
        color: '#333',
        textPath: {
          enabled: true,
          attributes: {
            dy: 5
          }
        },
        distance: 10
      },
      size: '95%'
    }]

  });
}
newChartRelation(0);
