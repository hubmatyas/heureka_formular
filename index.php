<?php
 $message = '';
 $error = '';
 if(isset($_POST["submit"]))
 {
           if(file_exists('data.json'))
           {
                $current_data = file_get_contents('data.json');
                $array_data = json_decode($current_data, true);
                $extra = array(
                     'jmeno'               =>     $_POST['jmeno'],
                     'oddeleni'          =>     $_POST["oddeleni"],
                     'prijezd'     =>     $_POST["prijezd"],
                     'odjezd'     =>     $_POST["odjezd"],
                     'cas'     =>     $_POST["cas"],
                     'dopravni-prostredek'     =>     $_POST["dopravni-prostredek"],
                     'doba-rizeni'     =>     $_POST["doba-rizeni"],
                     'stravne'     =>     $_POST["stravne"],
                     'misto-vykonu-prace'     =>     $_POST["misto-vykonu-prace"],
                     'registracni-znacka'     =>     $_POST["registracni-znacka"],
                     'date'     =>     $_POST["date"],
                     'kam'     =>     $_POST["kam"],
                     'ucel-cesty'     =>     $_POST["ucel-cesty"],
                     'cas'     =>     $_POST["cas"],
                     'prijezd'     =>     $_POST["prijezd"]

                );
                $array_data[] = $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents('data.json', $final_data))
                {
                     $message = "<label class='text-success'>Uloženo</p>";
                }
           }
           else
           {
                $error = 'JSON soubor neexistuje';
           }
      }
 }
 ?>
 <!doctype html>
 <html lang="cs">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Vyplnění cestovního příkazu</title>
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
   <link rel="icon" type="image/png" sizes="32x32" href="">
 </head>
 <body>
   <h1>Vyplňte cestovní příkaz</h1>
   <form>
     <div class="column">
     <br>Jméno a Příjmení:</br>
     <select name="jmeno">
       <option>Franta Novák</option>
       <option>Františka Nováková</option>
       <option>Pepa Skočdopole</option>
       <option>Jarda Neskočim</option>
     </select>
     <br>Oddělení:</br>
     <select name="oddeleni">
       <option>Managment</option>
       <option>Finance</option>
       <option>IT Development</option>
       <option>IT support</option>
       <option>Operations</option>
       <option>Content</option>
       <option>Marketing</option>
       <option>Customer service</option>
       <option>Product</option>
       <option>Sales</option>
     </select>
     <br>Spotřeba l/km:</br>
     <input type="text" name="prijezd" value="6.5">
     <br>Odkud:<br>
     <input type="text" name="odjezd" value="Plzeň">
     <br>Od:</br>
     <input type="time" name="cas" value="" autocomplete="on">
     <br>Použitý dopravní prostředek:</br>
     <select name="dopravni-prostredek">
       <option>Auto vlastní</option>
       <option>Autobus</option>
       <option>Spolujízda</option>
       <option>Auto Zkušební</option>
       <option>Vlak</option>
       <option>MHD</option>
       <option>Letadlo</option>
     </select>
     <br>Doba řízení:</br>
     <input type="text" name="doba-rizeni" value="">
     <br>Stravné:</br>
     <input type="text" name="stravne" value="">
   </div>
   <div class="column">
     <br>Místo výkonu práce:</br>
     <input type="text" name="misto-vykonu-prace" value="Aš">
     <br>Registrační značka:</br>
     <input type="text" name="registracni-znacka" value="1A19876">
     <br>Datum:</br>
     <input type="text" name="date" value="" id="today">
     <br>Kam:</br>
     <input type="text" name="kam" value="Praha">
     <br>Účel cesty:</br>
     <select name="ucel-cesty">
       <option>Praha - kancelář</option>
       <option>Liberec - kancelář</option>
       <option>Jednání</option>
       <option>Firemní akce</option>
       <option>Konference</option>
       <option>Školení</option>
     </select>
     <br>Do:</br>
     <input type="time" name="cas" value="" autocomplete="on">
     <br>Vzdálenost (km):</br>
     <input type="text" name="vzdalenost" value="">
     <br>Vedlejší údaje a jízdné:</br>
     <input type="text" name="vedlejsi-udaje" value="">
     <br>Počet poskytnutých jídel:</br>
     <input type="text" name="pocet-poskytnutych-jidel" value="">
   </div>
   <button type="submit" action="" id="submit">Vyplnit</button>
   <a href="vyplneny-formular.html"><div class="vyplneny-formular">Moje údaje</div></a>
   </form>
 </body>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="js/main.js"></script>
 </html>
