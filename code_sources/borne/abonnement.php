<?php
    date_default_timezone_set('Europe/Brussels');

    $noAbonnement = trim(strip_tags($_POST['abonnement']));

    if ($_POST) {
        if ($noAbonnement !== "") {
            header('Location: ticketsAbonnement.php');
            exit();        
       }        
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'head.php';  ?>       
    </head>
    <body id="abonnement">

        <header>
            <p class="numb"><?php echo date("H:i"); ?></p>
            <p class="numb"><?php echo date("d/m/Y"); ?></p>
        </header>

        <main>
            <img class="logo" src="_ressources/logo.svg" alt="logo de treasy">
            
            <form id="noAbonnement" method="POST">                
                <label for="abonnement">Insérez votre numéro d'abonement:</label>
                <input type="text" name="abonnement" id="abonnement" value=""></input>
                <h3>Ou pointez votre carte Mobib sous l'écran.</h3> 
            
                <svg viewBox="-114.555 -244.007 741.11 706.008">

                    <path fill="#FFFFFF" d="M464,249.495l136.26,0c14.523,0,26.295-11.773,26.295-26.295v-440.912
                        c0-14.523-11.773-26.295-26.295-26.295H-88.26c-14.521,0-26.295,11.772-26.295,26.295v440.913
                        c0,14.523,11.774,26.295,26.295,26.295l126.26,0v-26.295H-79.494c-4.841,0-8.766-3.924-8.766-8.765V-204.94
                        c0-4.841,3.925-8.765,8.766-8.765h670.989c4.841,0,8.765,3.924,8.765,8.765h0l-0.001,419.376c0,4.841-3.924,8.765-8.765,8.765H464
                        V249.495z"/>

                    <path id="hand" fill="#FFFFFF" d="M383.967,174.021v16.653h-52.298v-16.653H383.967z M128.071,190.675h66.175
                        c0.71-5.553,1.414-11.085,2.122-16.653h-68.297V190.675z M128.071,223.543h61.948c0.73-5.655,1.445-11.191,2.147-16.653H128.07
                        L128.071,223.543L128.071,223.543z M436.555,76.295v170.912c0,14.522-11.772,26.295-26.295,26.295h-57.009
                        c-0.537,7.378-1.807,15.548-3.799,25.011c-7.753,36.812-28.109,87.93-14.252,144.517c-39.709,6.121-62.686,8.985-102.877,18.971
                        c-4.687-69.737-38.88-84.857-30.958-145.397c9.301-71.012,14.484-110.922,20.533-158.876c1.904-15.094,12.558-22.435,22.957-22.434
                        c10.832,0.002,21.388,7.971,21.483,23.445c0.362,56.709,1.857,113.187,5.57,126.918c2.507,9.263,18.656,10.949,18.656-8.785
                        c0-2.213-0.027-29.664-0.027-29.664h110.957c4.841,0,8.765-3.924,8.765-8.765v-87.794H288.977
                        c-3.646-23.404-22.368-38.631-44.118-38.637c-0.002,0-0.006,0-0.007,0c-21.249,0-40.558,14.7-45.364,38.637H101.74v87.794
                        c0,4.841,3.925,8.765,8.766,8.765h76.445c-1.086,8.356-2.223,17.079-3.427,26.295H101.74c-14.521,0-26.295-11.772-26.295-26.295
                        V76.295C75.445,61.772,87.219,50,101.74,50h308.52C424.782,50,436.555,61.772,436.555,76.295z M410.26,85.06
                        c0-4.841-3.924-8.765-8.765-8.765H110.506c-4.841,0-8.766,3.924-8.766,8.765v18.552h308.52L410.26,85.06L410.26,85.06z
                         M143.361,350.054c14.6-3.649,29.105-8.134,33.388-9.481c-0.229-7.993,0.21-16.883,1.533-26.993
                        c0.798-6.09,1.565-11.954,2.31-17.637l-55.773,19.82c-10.609,3.848-14.104,11.066-11.27,19.66
                        C116.958,345.756,128.402,353.794,143.361,350.054z M178.287,357.022l-34.795,11.274c-7.906,2.868-10.512,8.249-8.399,14.652
                        c2.541,7.701,11.07,13.692,22.218,10.904c10.411-2.602,24.174-6.803,29.194-8.357C183.031,376.816,180.027,367.729,178.287,357.022z
                        "/>
                </svg>
                                       
            </form>

            <div class="bottom">
                <a class="precedant" href="start.php">
                    <img src="_ressources/arrowBack.svg">
                    <h3>Retour</h3>
                </a>
                <div class="valider">
                    <input type="submit" form="noAbonnement" id="submit" value="">
                    <p>Valider</p>
                    <img src="_ressources/arrowNext.svg">
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>