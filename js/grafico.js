
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

              var data = google.visualization.arrayToDataTable([
               ['Custos', 'Custo', {role: 'style'}],
                ['Custo em Horas', 8175000, 'green'],
                ['Cotas e Diárias', 3792000, '#b87333'],
                ['Despesas extras', 2695000, 'gold'],
                ['Custo do projeto', 2099000, 'blue'],
                ['Valor do projeto', 1526000, 'red'],
                ['Valor do parceiro/Rede', 1526000, 'pink']
              ]);

              var options = {
                title: 'Custos e valores do projeto',
                'backgroundColor': {'fill': '#175175175','opacity': 100},
             //   'backgroundColor': {'fill': '#222222','opacity': 100},
             //   'legend.textStyle': {position: 'top', textStyle: {color: 'blue', fontSize: 16}},
               // 'textStyle': { 'color': 'white' } ,
              //  'titleTextStyle': {color: 'white'},
                is3D: true,
              //  width: 600,
              //  height: 400,
                chartArea: {width: '50%'},
                 legend: { position: "none" },
                 bar: {groupWidth: "95%"},
               hAxis: {
                 title: 'Custo total',
                 minValue: 800
               },
                vAxis: {
                title: 'Classificação dos custos'
              }
              };

              var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

              chart.draw(data, options);
            }