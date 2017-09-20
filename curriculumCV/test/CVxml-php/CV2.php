
<?php
// El fichero test.xml contiene un documento XML con un elemento raíz y, al
// menos, un elemento /[raiz]/titulo.


if (file_exists('CV2.xml')) {
    $xml = simplexml_load_file('CV2.xml');
 
    print_r($xml);
} else {
    exit('Error abriendo CV2.xml.');
}


/*
$xml=simplexml_load_file("CV2.xml") or die("Error: Cannot create object");
echo $xml;
*/

/*
// Instancio la clase DOM que nos permitira operar con el XML
$doc = new DOMDocument();

// Cargo el XML
$doc->load( 'CV2.xml' );
*/

/*
if (file_exists('CV2.xml')) {
    $xml = simplexml_load_file('CV2.xml');
    echo $xml->asXML()/* . "<br>";
} else {
    exit('Error abriendo CV2.xml.');
}
*/
?>
