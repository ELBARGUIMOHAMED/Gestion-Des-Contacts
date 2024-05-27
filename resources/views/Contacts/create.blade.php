<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Nouveau Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff; /* Light blue background */
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff; /* White container background */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease; /* Animation on container */
        }
        .container:hover {
            transform: translateY(-5px); /* Move container up slightly on hover */
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333; /* Dark gray heading color */
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555; /* Dark gray label color */
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #007bff; /* Blue submit button */
            color: #fff; /* White text color */
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease; /* Smooth transition */
        }
        button[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue hover color */
        }
    </style>
    <style>
    .centered-image {
            display: block;
            margin: 0 auto;
            width: 400px; /* Définissez la largeur souhaitée, par exemple 50% de la largeur de la page */
            height: auto; /* Laissez la hauteur automatique pour maintenir les proportions de l'image */
}
</style>

</head>
<body>
    <div class="container">
        <h1>Ajouter un Nouveau Contact</h1>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <label for="nom">Nom :</label>
            <input type="text" name="Nom" required>

            <label for="email">Email :</label>
            <input type="email" name="Email" required>

            <label for="telephone">Téléphone :</label>
            <input type="text" name="Telephone" required>
            <div class="form-group">
    <label for="telephone_2">Téléphone 2</label>
    <input type="text" class="form-control" id="telephone_2" name="telephone_2" value="{{ old('telephone_2') }}">
</div>


            <label for="societe">Société :</label>
            <input type="text" name="Societe">

            <label for="adresse_personnelle">Adresse Personnelle :</label>
            <input type="text" name="Adresse_Personnelle">

            <button type="submit">Enregistrer</button>
        </form>
    </div>
    <!-- Ajoutez cette balise img où vous souhaitez afficher votre photo -->
<img src="{{ asset('images/accueil.jpg.jpeg') }}" alt="Accueil" class="centered-image">
</body>
</html>
