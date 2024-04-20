<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'événement</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            border-radius: 10px 10px 0 0;
        }

        .card-title {
            margin-bottom: 0;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">Modifier l'événement</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('events.update', $event->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Date de début</label>
                                <input type="datetime-local" class="form-control" id="start_date" name="start_date" value="{{ $event->start_date }}" required>
                            </div>
                            <div class="form-group">
                                <label for="end_date">Date de fin</label>
                                <input type="datetime-local" class="form-control" id="end_date" name="end_date" value="{{ $event->end_date }}" required>
                            </div>
                            <div class="form-group">
                                <label for="formateur">Formateur</label>
                                <select class="form-control" id="formateur" name="formateur_id" required>
                                    <option value="">Select a Formateur</option>
                                    @foreach($formateurs as $formateur)
                                        <option value="{{ $formateur->id_formateur }}">{{ $formateur->nom }} {{ $formateur->prenom }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="filiere">Filière</label>
                                <select class="form-control" id="filiere" name="filiere_id" required>
                                    <option value="">Select a Filière</option>
                                    <!-- Filières options will be dynamically populated here -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="groupe">Groupe</label>
                                <select class="form-control" id="groupe" name="id_groupe" required>
                                    <option value="">Sélectionnez un Groupe</option>
                                    <!-- Options des groupes seront ajoutées dynamiquement ici -->
                                </select>
                            </div>
                            
                            <div class="text-right">
                                <a href="{{ url()->previous() }}" class="btn btn-secondary mr-2">Retour</a>
                                <button type="submit" class="btn btn-success">Modifier l'événement</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    const formateurSelect = document.getElementById('formateur');
    const filiereSelect = document.getElementById('filiere');
    const groupeSelect = document.getElementById('groupe');
    
    formateurSelect.addEventListener('change', function() {
        const selectedFormateurId = formateurSelect.value;
        filiereSelect.innerHTML = '<option value="">Select a Filière</option>';
        groupeSelect.innerHTML = '<option value="">Select a Groupe</option>'; // Clear groupe options
        
        fetch(`/api/filieres/${selectedFormateurId}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(filiere => {
                    const option = document.createElement('option');
                    option.value = filiere.id_filiere;
                    option.text = filiere.nom;
                    filiereSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching filières:', error));
    });

    filiereSelect.addEventListener('change', function() {
        const selectedFiliereId = filiereSelect.value;
        groupeSelect.innerHTML = '<option value="">Select a Groupe</option>'; // Clear groupe options
        
        fetch(`/api/groupes/${selectedFiliereId}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(groupe => {
                    const option = document.createElement('option');
                    option.value = groupe.id_groupe;
                    option.text = groupe.nom;
                    groupeSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching groupes:', error));
    });
});

</script>
</body>
</html>
