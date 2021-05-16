<?php

// Modelo de objetos que se corresponde con la tabla de MySQL
class TVSeries extends \Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;
}

/* Obtención de la lista de series de televisión */

$app->get('/tvseries', function ($req, $res, $args) {

    // Creamos un objeto collection + json con la lista de series

    // Obtenemos la lista de series de la base de datos y la convertimos del formato Json (el devuelto por Eloquent) a un array PHP
    $series = json_decode(\TVSeries::all());

    // Mostramos la vista
    return $this->view->render($res, 'tvserieslist_template.php', [
        'items' => $series
    ]);
})->setName('tvseries');


/*  Obtención de una serie en concreto  */
$app->get('/tvseries/{name}', function ($req, $res, $args) {

    // Creamos un objeto collection + json con la serie pasada como parámetro

    // Obtenemos la serie de la base de datos a partir de su id y la convertimos del formato Json (el devuelto por Eloquent) a un array PHP
    $p = \TVSeries::find($args['name']);  
    $serie = json_decode($p);

    // Mostramos la vista
    return $this->view->render($res, 'tvseries_template.php', [
        'item' => $serie
    ]);

});

//Borrar serie
$app->delete('/tvseries/{name}', function ($req, $res, $args) {
    //Le pasamos la variable para que la encuentre
    $serie = \TVSeries::find($args['name']);
    //Borramos la serie encontrada
    $serie->delete();
});

//Guardar nueva serie
$app->post('/tvseries', function ($req, $res, $args)  {
    $template = $req->getParsedBody();

    $datos = $template['template']['data'];
    //longitud del vector
    $longitud = count($datos);
    //bucle que recorre vector
    for ($i = 0; $i < $longitud; $i++)
    {
        switch($datos[$i]['name'])
        {
        case "name":
            $name = $datos[$i]['value'];
            break;
        case "numberOfSeasons":
            $seasons = $datos[$i]['value'];
            break;
        case "director":
            $director = $datos[$i]['value'];
            break;
        case "startDate":
            $data = $datos[$i]['value'];
            break;
        }
    }
    $nueva_serie = new TVSeries;

    $nueva_serie['name'] = $name;
    $nueva_serie['numberOfSeasons'] = $seasons;
    $nueva_serie['director'] = $director;
    $nueva_serie['startDate'] = $data;
 
    $nueva_serie->save();
});
//Actualizar pelicula
$app->put('/tvseries/{id}', function ($req, $res, $args) {
    $template = $req->getParsedBody();
    $datos = $template['template']['data'];
    //longitud del vector
    $longitud = count($datos);
    //bucle que recorre vector
    for ($i = 0; $i < $longitud; $i++)
    {
        switch($datos[$i]['name'])
        {
        case "name":
            $name = $datos[$i]['value'];
            break;
        case "numberOfSeasons":
            $seasons = intval($datos[$i]['value']);
            break;
        case "director":
            $director = $datos[$i]['value'];
            break;
        case "startDate":
            $date = $datos[$i]['value'];
            break;
        }
    }
  
    $nueva_serie = \TVSeries::find($args['id']);
    $nueva_serie['name'] = $name;
    $nueva_serie['numberOfSeasons'] = $seasons;
    $nueva_serie['director'] = $director;
    $nueva_serie['startDate'] = $date;
    
  
    $nueva_serie->save();

});

?>
