const data = {
    Utilisateurs: [
      {
        Login: 'Thierry09',
        Activites: {
          Connexions: [
            {
              Date: '01/25/52',
              Heure: '12h32',
              Duree: 120
            },
            {
              Date: '01/25/52',
              Heure: '12h32',
              Duree: 212
            }
          ],
          Messages_Lu: [
            {
              ID_Message: '01/25/52',
              Date: '12h32',
              Heure: 56
            },
            {
              ID_Message: '01/25/52',
              Date: '12h32',
              Heure: 56
            }
          ],
          Messages_Postes: [
            {
              ID_Message: 4,
              Id_Forum: 2,
              Date: '12h32',
              Heure: '125'
            },
            {
              ID_Message: 4,
              Id_Forum: 2,
              Date: '01/25/52',
              Heure: '12h32'
            }
          ],
          Visites_Hyperlien: [
            {
              ID_Message: 12,
              Date: '01/25/52',
              Heure: '12h32'
            },
            {
              ID_Message: 12,
              Date: '01/25/52',
              Heure: '12h32'
            }
          ],
          Reponses_Message: [
            {
              ID_Parent: 1,
              ID_Message: 12,
              Date: '01/25/52',
              Heure: '12h32'
            },
            {
              ID_Parent: 1,
              ID_Message: 12,
              Date: '01/25/52',
              Heure: '12h32'
            }
          ],
          Documents_Deposes: [
            {
              ID_Fichier: 1,
              Date: '12/12/2512',
              Heure: '12h32',
              ID_Message: 37,
              ID_Forum: 58,
              Nb_Telechargements: 3
            },
            {
              ID_Fichier: 1,
              Date: '12/12/2512',
              Heure: '12h32',
              ID_Message: 37,
              ID_Forum: 58,
              Nb_Telechargements: 3
            }
          ],
          Documents_Telecharges: [
            {
              ID_Fichier: 1,
              ID_Forum: 3,
              ID_Message: 4,
              Date: '12/12/2021',
              Heure: '12h31'
            },
            {
              ID_Fichier: 1,
              ID_Forum: 3,
              ID_Message: 4,
              Date: '12/12/2021',
              Heure: '12h31'
            }
          ]
        }
      },
      {
        Login: 'Thierry0wxw9',
        Activites: {
          Connexions: [
            {
              Date: '01/25/52',
              Heure: '12h32',
              Duree: 120
            },
            {
              Date: '01/25/52',
              Heure: '12h32',
              Duree: 212
            }
          ],
          Messages_Lu: [
            {
              ID_Message: '01/25/52',
              Date: '12h32',
              Heure: 56
            },
            {
              ID_Message: '01/25/52',
              Date: '12h32',
              Heure: 56
            }
          ],
          Messages_Postes: [
            {
              ID_Message: 4,
              Id_Forum: 2,
              Date: '12h32',
              Heure: '125'
            },
            {
              ID_Message: 4,
              Id_Forum: 2,
              Date: '01/25/52',
              Heure: '12h32'
            }
          ],
          Visites_Hyperlien: [
            {
              ID_Message: 12,
              Date: '01/25/52',
              Heure: '12h32'
            },
            {
              ID_Message: 12,
              Date: '01/25/52',
              Heure: '12h32'
            }
          ],
          Reponses_Message: [
            {
              ID_Parent: 1,
              ID_Message: 12,
              Date: '01/25/52',
              Heure: '12h32'
            },
            {
              ID_Parent: 1,
              ID_Message: 12,
              Date: '01/25/52',
              Heure: '12h32'
            }
          ],
          Documents_Deposes: [
            {
              ID_Fichier: 1,
              Date: '12/12/2512',
              Heure: '12h32',
              ID_Message: 37,
              ID_Forum: 58,
              Nb_Telechargements: 3
            },
            {
              ID_Fichier: 1,
              Date: '12/12/2512',
              Heure: '12h32',
              ID_Message: 37,
              ID_Forum: 58,
              Nb_Telechargements: 3
            }
          ],
          Documents_Telecharges: [
            {
              ID_Fichier: 1,
              ID_Forum: 3,
              ID_Message: 4,
              Date: '12/12/2021',
              Heure: '12h31'
            },
            {
              ID_Fichier: 1,
              ID_Forum: 3,
              ID_Message: 4,
              Date: '12/12/2021',
              Heure: '12h31'
            }
          ]
        }
      }
    ]
  }

var colors = Highcharts.getOptions().colors;

let chart = Highcharts.chart('container', {
    chart: {
        type: 'streamgraph',
        marginBottom: 30,
        zoomType: 'x'
    },

    // Make sure connected countries have similar colors
    colors: [
        colors[0],
        colors[1],
        colors[2],
        colors[3],
        colors[4],
        // East Germany, West Germany and Germany
        Highcharts.color(colors[5]).brighten(0.2).get(),
        Highcharts.color(colors[5]).brighten(0.1).get(),

        colors[5],
        colors[6],
        colors[7],
        colors[8],
        colors[9],
        colors[0],
        colors[1],
        colors[3],
        // Soviet Union, Russia
        Highcharts.color(colors[2]).brighten(-0.1).get(),
        Highcharts.color(colors[2]).brighten(-0.2).get(),
        Highcharts.color(colors[2]).brighten(-0.3).get()
    ],

    title: {
        floating: true,
        align: 'center',
        text: 'Motivation Trace CMC'
    },


    xAxis: {
        maxPadding: 0,
        type: 'category',
        crosshair: true,
        categories: [
            't',
            '01/02/2009 - 15/02/2009',
            '15/02/2009 - 29/02/2009',
            '01/03/2009 - 15/03/2009',
            '15/03/2009 - 31/03/2009',
            '01/04/2009 - 15/04/2009',
            '15/04/2009 - 31/04/2009',
            '01/05/2009 - 15/05/2009',
            '15/05/2009 - 31/05/2009',
        ],
        labels: {
            align: 'left',
            reserveSpace: false,
            rotation: 270
        },
        lineWidth: 0,
        margin: 20,
        tickWidth: 0
    },

    yAxis: {
        visible: false,
        startOnTick: false,
        endOnTick: false
    },

    legend: {
        enabled: false
    },

    annotations: [{
        labels: [{
            point: {
                x: 5.5,
                xAxis: 0,
                y: 30,
                yAxis: 0
            },
            text: 'Cancelled<br>during<br>World War II'
        }, {
            point: {
                x: 18,
                xAxis: 0,
                y: 90,
                yAxis: 0
            },
            text: 'Soviet Union fell,<br>Germany united'
        }],
        labelOptions: {
            backgroundColor: 'rgba(255,255,255,0.5)',
            borderColor: 'silver'
        }
    }],

    plotOptions: {
        series: {
            label: {
                minFontSize: 5,
                maxFontSize: 15,
                style: {
                    color: 'rgba(255,255,255,0.75)'
                }
            }
        }
    },

    // Data parsed with olympic-medals.node.js
    series: [{
        name: "Maxime Bizeray",
        data: [
            0, 20, 4, 2, 6, 0, 0, 6, 9
        ]
    }, {
        name: "Manuel Jehanno",
        data: [
            2, 25, 35, 2, 4, 5, 25, 8, 8
        ]
    }, {
        name: "Bastien Bouvet",
        data: [
            0, 2, 5, 3, 7, 0, 0, 10, 4
        ]
    }, {
        name: "Hugo Valentin",
        data: [
            1, 17, 15, 10, 15, 0, 0, 10, 25
        ]
    }],

    exporting: {
        sourceWidth: 800,
        sourceHeight: 600
    }

});


chart.series[1].update({
    data : [1, 17, 15, 10, 15, 0, 0, 10, 25]
}, false);

console.log(chart.series[1].data)
chart.redraw(true);



//entrée -> JSON data
/*sortie :
[{
        name: "Maxime Bizeray",
        data: [
            0, 20, 4, 2, 6, 0, 0, 6, 9
        ]
    }, {
        name: "Manuel Jehanno",
        data: [
            2, 25, 35, 2, 4, 5, 25, 8, 8
        ]
    }, {
        name: "Bastien Bouvet",
        data: [
            0, 2, 5, 3, 7, 0, 0, 10, 4
        ]
    }, {
        name: "Hugo Valentin",
        data: [
            1, 17, 15, 10, 15, 0, 0, 10, 25
        ]
    }]
*/

let sortie = [];
/*sortie[0] = {
    name : 'test',
    data : [1,23,4,47,45]
};

sortie["name"] = "test";*/

//console.log(sortie);

function moulinette_motivation(){
    let i = 0;
    let sortie = [];
    //Pour chaque utilisateur
    data.Utilisateurs.forEach(utilisateur =>{
        let nb_Connexion = utilisateur.Activites.Connexions.length;
        let temps_Connexion = utilisateur.Activites.Connexions[0].Duree;
        console.log(temps_Connexion)


        sortie[i] = {
            name : utilisateur.Login,
            data : [
                1,1,1
            ]
        }
        i++;
    });
    console.log(sortie);
}


function comptePeriode(array){
    let nbPeriode = [];
    array.forEach(entry => {
        let date = new Date(entry.Date);

        if(date < new Date("02/01/2009")){
            nbPeriode[0]++; 
            console.log("0");
        }else if (date < new Date("02/15/2009")){
            console.log("1");
        }else if (date < new Date("02/29/2009")){
            console.log("2");
        }else if (date < new Date("03/15/2009")){
            console.log("3");
        }else if (date < new Date("03/31/2009")){
            console.log("4");
        }else if (date < new Date("04/15/2009")){
            console.log("5");
        }else if (date < new Date("04/31/2009")){
            console.log("6");
        }else if (date < new Date("05/15/2009")){
            console.log("7");
        }else{
            console.log("8");
        }        
    })
    console.log()
}

//moulinette_motivation();


comptePeriode([
    {
      "ID_Message": "01/25/52",
      "Date": "01/25/2009",
      "Heure": 56
    },
    {
      "ID_Message": "01/25/52",
      "Date": "02/26/2009",
      "Heure": 56
    }
  ]);