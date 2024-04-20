<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
        .card-title {
            font-size: 1.5rem;
            margin-bottom: 0;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-back {
            background-color: #6c757d;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
        .btn-back:hover {
            background-color: #495057;
        }
        .btn-save {
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
        .btn-save:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Event</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('events.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="datetime-local" class="form-control" id="start_date" name="start_date" required>
                            </div>
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="datetime-local" class="form-control" id="end_date" name="end_date" required>
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
                            <div class="d-flex justify-content-between">
                                <a href="{{ url()->previous() }}" class="btn btn-back">Back</a>
                                <button type="submit" class="btn btn-save">Save Event</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
