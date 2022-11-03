
<form action="affichage.php" method="GET">
        <h1>
        welcome to my first php created landing page <br>
         please subscribe with your informations and email
        </h1>
        <div class="container">
            <div class="input-nom">
                <label for="nom">NAME : </label><br>
            
                <input type="text" name="nom"  class="nom" id="nom" placeholder="please enter your name"/>   
            </div>
            <div class="input-prenom">
                <label for="prenom">FIRST NAME : </label><br>
                <input type="text" name="prenom"  class="prenom" id="prenom" placeholder="please enter your first name"/>   
            </div>
            <div class="input-age">
                <label for="age">AGE : </label><br>
                <input type="number" name="age" class="age"  id="age" placeholder="please enter your age"/>   
            </div>
            <div class="input-email">
                <label for="email">Email : </label><br>
                <input type="email" name="email" class="email"  id="email" placeholder="please enter your Email"/>   
            </div>
            <div class="btn">
                <input type="submit" value="Subscribe" />
            </div>
        </div>

       
    </form>   