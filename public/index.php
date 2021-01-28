<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaghetti</title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
    <h1>Spaghetti Code!!!</h1>
    <?php

    require '../vendor/autoload.php';
    use Lib\Breadcrumbs;
    use Carbon\Carbon;
    use Lib\Dates;
    $date = Carbon::now();
    echo '<br>'.$date->format('d/m/Y');

    Carbon::setLocale('es');
    $today = Carbon::now();
    $tomorrow = $today->addDays(1);
    echo '<br>'.$tomorrow->isoFormat('dddd DD [de] MMMM');

    $crumbs = new Breadcrumbs();
    $crumbs->add('/link', 'Sección');
    $crumbs->show();
?>
    <p>
    Con PHP es fácil hacer Spaghetti Code y mezclar la presentación, el HTML con código 
    </p>
    <p>
    Pero el 
    <?= Dates::longDate(Dates::tomorrow()) ?>
    lo vamos a solucionar.
    </p>
</body>
</html>