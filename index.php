<?php
$pharagraph='The ring-necked dove (Streptopelia capicola), also known as the Cape turtle dove or half-collared dove, is a widespread and often abundant dove species in East and southern Africa. It is a mostly sedentary bird, found in a variety of open habitats. Within range, its penetrating and rhythmic, three-syllabled crooning is a familiar sound at any time of the year. Its name is derived from the semi-collar of black feathers on the lower nape, a feature shared with a number of Streptopelia species. Like all doves, they depend on surface water. They congregate in large flocks at waterholes in dry regions to drink and bathe.';
$pharagraph_lenght= strlen($pharagraph);
$bad_word=$_GET['parola'];
$frase_censurata= str_replace($bad_word,'***',$pharagraph_censored);
$pharagraph_censored=$pharagraph;
$censored_lenght=strlen($pharagraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <h1>The ring-necked dove</h1>
    <span style='display:block'> Il seguente paragrafo contiene: <?php echo $pharagraph_lenght;?> parole</span>
    <p><?php echo $pharagraph; ?> </p>

    <h1>The ring-necked dove censured</h1>
    <span style='display:block'> Il seguente paragrafo contiene: <?php echo $censored_lenght;?> parole</span>
    <p><?php echo $pharagraph_censored; ?> </p>
</body>
</html>