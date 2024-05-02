@include('layouts.main')

<body>
    <h1>La situation des Stages de chaque Filière</h1>
    <table id="container"class="charts-css column data-spacing-10"></table>

    <style>
        
        #container {
            width: 100%;
        }
       
    </style>

    <script>
        // Données du diagramme
        var data = {!! json_encode($data) !!};

        // Convertir les données en un format approprié pour Highcharts
        var seriesData = [];
        for (var filiere in data) {
            var groupeData = [];
            for (var groupe in data[filiere]) {
                // Assurez-vous que les valeurs 'y' représentent la durée en jours
                var dureeEnJours = data[filiere][groupe];
                groupeData.push({
                    name: groupe,
                    y: dureeEnJours
                });
            }
            seriesData.push({
                name: filiere,
                data: groupeData
            });
        }

        // Créer le diagramme à colonnes avec Highcharts
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Votre diagramme'
            },
            xAxis: {
                type: 'category',
                title: {
                    text: 'Filière'
                },
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '12px',
                        fontFamily: 'Arial, sans-serif'
                    }
                }
            },
            yAxis: {
                title: {
                    text: 'Durée de Stage (en jours)'
                }
            },
            legend: {
                enabled: true
            },
            series: seriesData
        });
    </script>
</body>

</html>
