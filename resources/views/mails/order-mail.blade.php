<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>confirmation de commande</title>
</head>
<body>
    <p> salut {{ $partenaires->nom}} </p>
    <p> est ce  que produit est disponible !</p>
    <br>
    <table style="width: 600px; text-align: right">
        <thead>
            <tr>
                <th>Code de produit</th>
                <th>Nom</th>
                <th>quantite</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detail_commande->produits as $prod)
            <tr>{{$prod->code_produit}}</tr>
            <tr>{{ $prod->nom_produit}}</tr>
            <tr>{{ $prod->qty }}</tr>    
            @endforeach
            
        </tbody>
    </table>
</body>
</html>