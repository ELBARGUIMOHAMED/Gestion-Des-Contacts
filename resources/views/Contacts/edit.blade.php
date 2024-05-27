<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Contact</title>
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
            color: #00008b; /* Dark blue heading color */
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555; /* Gray label color */
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
</head>
<body>
    <div class="container">
        <h1>Modifier le Contact</h1>
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nom">Nom :</label>
            <input type="text" name="Nom" value="{{ $contact->Nom }}" required>

            <label for="email">Email :</label>
            <input type="email" name="Email" value="{{ $contact->Email }}" required>

            <label for="telephone">Téléphone :</label>
            <input type="text" name="Telephone" value="{{ $contact->Telephone }}" required>
            <div class="form-group">
    <label for="telephone_2">Téléphone 2</label>
    <input type="text" class="form-control" id="telephone_2" name="telephone_2" value="{{ $contact->telephone_2 }}">
</div>


            <label for="societe">Société :</label>
            <input type="text" name="Societe" value="{{ $contact->Societe }}">

            <label for="adresse_personnelle">Adresse Personnelle :</label>
            <input type="text" name="Adresse_Personnelle" value="{{ $contact->Adresse_Personnelle }}">

            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>
</html>
