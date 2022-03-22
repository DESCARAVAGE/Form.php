<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>
    
        <form  action="thank.php"  method="POST">
        <div>
    
          <label  for="nom">Nom :</label>

          <input  type="text"  id="nom"  name="lasteName">

        </div>

        <div>
    
          <label  for="prenom">Prénom :</label>
    
          <input  type="text"  id="prenom"  name="firstName">
    
        </div>
    
        <div>
    
          <label  for="courriel">Courriel :</label>
    
            <input  type="email"  id="courriel"  name="user_email">
    
        </div>
        <div>
    
          <label  for="telephone">Téléphone :</label>
    
          <input  type="tel"  id="telephone"  name="user_phone">
    
        </div>
        <div>
    
          <select name="liste">
            <option value="1"> --Choix 1--</option>
            <option value="2"> --Choix 2--</option>
            <option value="3"> --Choix 3--</option>
          </select>    
    
        </div>
    
        <div>
    
          <label  for="message">Message :</label>
    
          <textarea  id="message"  name="user_message"></textarea>
    
        </div>
    
        <div  class="button">
    
          <button  type="submit">Envoyer votre message</button>
    
        </div>
    
      </form>
      <?php var_dump($_POST) ?>;

    
</body>
</html>