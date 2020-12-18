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


  function moulinette_relation(){
      let i = 0;
      let sortie = [];
      //Pour chaque utilisateur
      data.Utilisateurs.forEach(utilisateur =>{
          let nb_Connexion = utilisateur.Activites.Connexions.length;
          let temps_Connexion = utilisateur.Activites.Connexions[0].Duree;
          console.log(temps_Connexion);
          let nbMessagelu = 0;
          utilisateur.Activites.Messages_Lu.forEach(messageLu => {
            nbMessagelu++;
          });
          console.log(nbMessagelu);
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








Highcharts.chart('container', {

  title: {
    text: 'Roue des relations'
  },

  accessibility: {
    point: {
      valueDescriptionFormat: '{index}. From {point.from} to {point.to}: {point.weight}.'
    }
  },

  series: [{
    keys: ['from', 'to', 'weight'],
    data: [
      ['Juliane', 'Manuel', 1],
      ['Juliane', 'Maxime', 2],
      ['Juliane', 'Tom', 3],
      ['Tom', 'Manuel', 3],
      ['Tom', 'Juliane', 2],
      ['Tom', 'Maxime', 1],
      ['Maxime', 'Manuel', 2],
      ['Maxime', 'Juliane', 1],
      ['Maxime', 'Tom', 3],
      ['Manuel', 'Maxime', 5],
      ['Manuel', 'Juliane', 2],
      ['Manuel', 'Tom', 1]
    ],
    type: 'dependencywheel',
    name: 'Poids de la relation',
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

$('#btn').bind('click', function() {
  var chart1 = $('#container').highcharts();
  //var juTom = document.getElementById('JuTom');
  //var juMax = document.getElementById('JuMax');
  var juManu = document.getElementById('JuManu');

  var test = Number(juManu.value);
  console.log("VALEUR "+test);

  chart1.series[0].update({
    data: [
      ['Juliane', 'Manuel', test],
      ['Juliane', 'Maxime', 8],
      ['Juliane', 'Tom', 9],
      ['Tom', 'Manuel', 5],
      ['Tom', 'Juliane', 5],
      ['Tom', 'Maxime', 5],
      ['Maxime', 'Manuel', 5],
      ['Maxime', 'Juliane', 5],
      ['Maxime', 'Tom', 5],
      ['Manuel', 'Maxime', 5],
      ['Manuel', 'Juliane', 5],
      ['Manuel', 'Tom', 5]
    ]
  }, false);

  chart1.redraw();

});

moulinette_relation();
