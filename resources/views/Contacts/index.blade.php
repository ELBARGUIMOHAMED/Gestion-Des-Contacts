<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Contacts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff; /* Light blue background */
        }
        .container {
            max-width: 70%; /* Set max-width to 70% */
            margin: 50px auto;
            padding: 20px;
            background-color: #fff; /* White container background */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #00008b; /* Dark blue heading color */
        }

        .search-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px; /* Marge en bas pour l'écart */
        }

        .search-input {
            padding: 10px; /* Remplissage intérieur */
            border: 1px solid #ccc; /* Bordure */
            border-radius: 5px; /* Coins arrondis */
            width: 300px; /* Largeur du champ de recherche */
            margin-right: 10px; /* Marge à droite pour l'écart */
        }

        .search-button {
            background-color: #4CAF50; /* Couleur de fond */
            color: white; /* Couleur du texte */
            padding: 10px 20px; /* Remplissage intérieur */
            border: none; /* Supprimer les bordures */
            border-radius: 5px; /* Coins arrondis */
            cursor: pointer; /* Curseur au survol */
        }

        .search-button:hover {
            background-color: #45a049; /* Changement de couleur au survol */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #4682b4; /* Steel blue table header */
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }
        td:nth-child(even) {
            background-color: #f0f8ff; /* Light blue alternate row color */
        }
        .btn {
            background-color: #4682b4; /* Steel blue button background */
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 8px 16px; /* Reduced padding for buttons */
            cursor: pointer;
            font-size: 14px; /* Reduced font size for buttons */
            text-decoration: none;
            text-transform: uppercase;
            margin-right: 5px; /* Added margin for spacing between buttons */
            transition: background-color 0.3s ease; /* Smooth transition */
        }
        .btn:hover {
            background-color: #4169e1; /* Royal blue hover color */
        }
        .btn:hover {
            transform: translateY(-2px); /* Move button up slightly on hover */
        }
        .top-right-image {
            position: absolute;
            top: 70px;
            right: 400px;
            width: 210px;
        }
    </style>
</head>
<body>
    <div class="container">
        <th>
            <img src="{{ asset('images/accueil.jpg.jpeg') }}" alt="Accueil" class="top-right-image">
        </th>
        <th>
            <h1>Liste des Contacts</h1>
            <a href="{{ route('contacts.create') }}" class="btn">Ajouter un nouveau contact</a>
            <br><br>
            <form action="{{ route('contacts.index') }}" method="GET" class="search-container">
                <input type="text" name="searchTerm" id="searchInput" class="search-input" placeholder="Rechercher...">
                <button type="submit" class="search-button">Rechercher</button>
            </form>
        </th>
        @if($contacts->isEmpty())
            <p>Aucun contact trouvé.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Téléphone 2</th> <!-- Ajoutez cette colonne -->
                        <th>Société</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->Nom }}</td>
                            <td>{{ $contact->Email }}</td>
                            <td>{{ $contact->Telephone }}</td>
                            <td>{{ $contact->telephone_2 }}</td> <!-- Ajoutez cette ligne -->
                            <td>{{ $contact->Societe }}</td>
                            <td>
                                <a href="{{ route('contacts.show', $contact->id) }}" class="btn">Voir</a>
                                <br><br>
                                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn">Modifier</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
