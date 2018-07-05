### The Proxy Pattern

#### Related Questions
##### Wat is het verschil tussen het Decorator - en Proxy pattern
De Decorator Pattern wordt gebruikt om - dynamisch - extra functionaliteit aan een Object toe te voegen.
De Proxy Pattern beheert de toegang tot een bepaald Object en controleert dus welke methods de Client mag bereiken.

##### Wat is het doel van het Proxy pattern?
Het doel van de Proxy Pattern is om de toegang tot een  Object en de Client te controleren/beheren.
Zo kun je met de Proxy Pattern gevoelige informatie afschermen als je bijvoorbeeld niet over bepaalde rechten bezit, maar
ook weigeren dat bepaalde setters ooit aangeroepen mogen worden door de Client, etc..

##### Van het Proxy pattern wordt vaak gezegd dat het een onzichtbare Boundary is, wat wordt daarmee bedoeld?
Hiermee wordt bedoelt dat een Client niet weet of hij een Proxy aanspreekt of dat hij met een echt Object bezig is,
aangezien deze zich beiden aan hetzelfde interface vasthouden.

##### Omschrijf hoe het Proxy pattern lazy initialisation kan toepassen en wat het voordeel is
De Proxy pattern zou d.m.v. een Virtual Proxy een Object pas daadwerkelijk inladen wanneer deze nodig is (load on demand).
Zo zou je een RealImage klasse kunnen hebben en een ImageProxy klasse, waarbij de RealImage een file/image inleest in een methode.
Vervolgens kun je in de ImageProxy de RealImage toewijden aan een property (bijv.: RealImage image) zodat je deze resource maar één
keer hoeft in te laden.

##### Noem 3 varianten op het Proxy pattern en de toepassing van elke variant

- Remote Proxy
De remote proxy wordt gebruikt om remote method invocation (externe communicatie) te realiseren, eigenlijk roep je
dus een method aan bij een lokaal Object en deze roept een extern object (api) aan om data op te halen en
deze terug aan de Client te geven.

- Virtual Proxy
De virtual proxy wordt in de vraag hierboven uitgelegd; Je kunt resources on-demand inladen zodat je niet steeds
heavy resources opnieuw in hoeft te laden.

- Protection Proxy
De protection proxy beheert toegang tot bepaalde objecten, je kunt setters bijvoorbeeld ontoegankelijk maken
of bepaalde informatie afschermen als de Client niet de juiste authoriteit bezit.

##### Omschrijf de werking en het belang van copy-on-write -proxies
De werking van copy-on-write is om zware handelingen uit te stellen totdat deze daadwerkelijk nodig zijn.
Zo voer je pas berekeningen of het laden van een Resource uit wanneer de Client deze nodig heeft.

Dit voorkomt onnodig zware resources en houdt je server resource gebruik zo laag mogelijk = snelheid.

##### Geef een voorbeeld van een SPL class waarbij een proxy gebruikt kan worden en geef aan wat het voordeel daarvan is
Het voordeel is dat je gemakkelijk condities kunt toevoegen waaraan een Client moet voldoen
voordat je een bepaalde (gevoelige) actie uit laat voeren.

```php
<?php

interface Product {
    public function setPrice (float $price) : void;
}

class CurrentUser {
    public static function isAdmin()
    {
        return false;
    }
}

class ProductResource implements Product
{
    protected $price;

    public function setPrice (float $price) : void
    {
        $this->price = $price;
    }
}

class ProductProxy implements Product
{
    protected $product; // is a Product.

    public function setPrice (float $price) : void
    {
        if (!CurrentUser::isAdmin()) {
            throw new \Exception("You have insufficient rights to edit a Product its price.");
        }

        $this->product->setPrice($price);
    }
}
```
