<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Contact</title>
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
        p {
            margin-bottom: 10px;
            color: #555; /* Dark gray text color */
        }
        strong {
            font-weight: bold;
            color: #007bff; /* Blue strong text color */
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff; /* Blue link color */
            transition: color 0.3s ease; /* Smooth transition */
        }
        a:hover {
            color: #0056b3; /* Darker blue hover color */
            text-decoration: underline; /* Underline on hover */
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .container p {
            margin: 10px 0;
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
            width: 100%;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background: linear-gradient(135deg, #6a82fb, #fc5c7d);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
        }
        button:hover {
            background: linear-gradient(135deg, #fc5c7d, #6a82fb);
            transform: translateY(-2px);
        }
        button:active {
            transform: translateY(0);
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Détails du Contact</h1>
        <p><strong>Nom:</strong> {{ $contact->Nom }}</p>
        <p><strong>Email:</strong> {{ $contact->Email }}</p>
        <p><strong>Téléphone:</strong> {{ $contact->Telephone }}</p>
        <p><strong>Téléphone 2:</strong> {{ $contact->telephone_2 }}</p> <!-- Ajoutez cette ligne -->
        <p><strong>Société:</strong> {{ $contact->Societe }}</p>
        <p><strong>Adresse Personnelle:</strong> {{ $contact->Adresse_Personnelle }}</p>
        <a href="{{ route('contacts.index') }}">Retour à la liste des contacts</a>
        <div class="button-container">
            <button id="copier-btn" onclick="copierInformations()">Copier</button>
        </div>
        <script>
        function copierTexte() {
            var nom = document.getElementById("nom").innerText;
            var email = document.getElementById("email").innerText;
            var telephone = document.getElementById("telephone").innerText;
            var telephone 2 = document.getElementById("telephone 2").innerText; //
            var societe = document.getElementById("societe").innerText;
            var adresse = document.getElementById("adresse").innerText;
            var texte = document.getElementById("texte-a-copier").innerText;
            var texteComplet = nom + "\n" + email + "\n" + telephone + "\n" + societe + "\n" + adresse;
            // Crée un élément temporaire pour copier le texte
            var textarea = document.createElement("textarea");
            textarea.value = texte;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand("copy");
            document.body.removeChild(textarea);
            var btn = document.getElementById("copier-btn");
            btn.innerText = "Copié !";
            setTimeout(function() {
                btn.innerText = "Copier";
            }, 2000);

            // Optionnel: Indiquer à l'utilisateur que le texte a été copié
            alert("Texte copié !");
        }
    </script>
    </div>
</body>
</html>
