<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Models\Post([
            'title' => 'Colombiana 300mL',
            'weight' => 521,
            'price' => 2.75,
            'slug' => 'Colombiana300mL',
            'teaserde' => '&#x1F4D9;&nbsp; Colombiana ist ein alkoholfreies, kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Champagne Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Colombiana es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/champán.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte: 
In 1904, Gabriel Posada und Valerio Tobón stellten Getränke in Medellín/Kolumbien her. Das erste Produkt war die "Cola/Champagne". Das Getränk war berühmt in Bars, Geschäften, Clubs und Wohnstätten. Das Produkt wurde durch Eselskarren verteilt &#x1F434; &#x1F602; . Posada und Tobón eröffneten Fabriken in Manizales und Cali. Das Getränk ist Sponsor der kolumbianischen Fussballliga &#x026BD; , der Tour de France &#x1F6B2;&nbsp; und des Rollschuhfahrens.

### &#x1F4D9;&nbsp; Geschmack: 
Es hat den Geschmack nach &#x1F379;&nbsp; Cola/Champagne.

### &#x1F4D9;&nbsp; Rezept Refajo: 
1 Liter Colombiana, 2 Liter Bier, 4 Eiswürfel. Zum Bier das Colombiana Soda und die Eiswürfel hinzufügen. Umrühren. Empfehlung: Begleiten mit guter &#x1F60E;&nbsp; kolumbianischen Musik.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totale Lipiden: 0g, Salzen: 0.029g, Kohlenhydrate: 11.5g, Zucker: 10.5g, Proteine: 0g, Energie: 196kj/46kcal. 

---

### &#x1F4D5;&nbsp; Historia:
En 1904, Gabriel Posada y Valerio Tobón produjeron refrescos en Medellín/Colombia. Su primer producto fue la "Cola-champaña". Este refresco se hizo famoso en bares, tiendas, clubes sociales y hogares. El producto se distribuyó en una carreta tirada por un burro &#x1F434; &#x1F602; . Posada y Tobón abrieron dos fábricas, una en Manizales y la otra en Cali. La bebida ha sido patrocinio del fútbol colombiano &#x026BD; , del Tour de Francia &#x1F6B2;&nbsp; y del patinaje.

### &#x1F4D5;&nbsp; Sabor: 
Se caracteriza por tener un sabor a &#x1F379;&nbsp; cola/champán.

### &#x1F4D5;&nbsp; Receta Refajo: 
1 litro de soda Colombiana, 2 litros de cerveza, 4 cubos de hielo. A la cerveza se le agrega la soda colombiana y los cubos de hielo. Umrü. Recomendación: Acompañar de buena &#x1F60E;&nbsp; música colombiana. 

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.029g, Carbohidratos: 11.5g, Azucares: 10.5g, Proteinas: 0g. Energia: 196kj/46kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.postobon.com

---

',
            'image' => 'https://ucarecdn.com/90e25508-b5c1-4bab-bc1f-4968907313ba/Colombiana300mL.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Manzana Postobón 300mL',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Manzana300mL',
            'teaserde' => '&#x1F4D9;&nbsp; Manzana Postobón ist ein alkoholfreies, kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Apfel Geschmack.', 
            'teaseres' => '&#x1F4D5;&nbsp; Manzana Postobón es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/manzana.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
In 1904, Gabriel Posada und Valerio Tobón stellten Getränke in Medellín/Kolumbien her. Das erste Produkt war die "Cola/Champagne". Das Getränk war berühmt in Bars, Geschäften, Clubs und Wohnstätten. Das Produkt wurde durch Eselskarren verteilt &#x1F434; &#x1F602; . Posada und Tobón eröffneten Fabriken in Manizales und Cali. Das Getränk ist Sponsor der kolumbianischen Fussballliga &#x026BD; , der Tour de France &#x1F6B2;&nbsp; und des Rollschuhfahrens.

### &#x1F4D9;&nbsp; Geschmack: 
Der Geschmack und die Farbe der Manzana Postobón sind Ikone der Kolumbianern. Der Geschmack nach Cola/Apfel &#x1F34E;&nbsp; ist einzigartig.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0.047g, Kohlenhydrate: 10.8g, Zucker: 10.8g, Proteine: 0g, Energie: 183kj/43kcal. 

---

### &#x1F4D5;&nbsp; Historia:
En 1904, Gabriel Posada y Valerio Tobón produjeron refrescos en Medellín/Colombia. Su primer producto fue la "Cola/champaña". Este refresco se hizo famoso en bares, tiendas, clubes sociales y hogares. El producto se distribuyó en una carro tirado por un burro &#x1F434; &#x1F602; . Posada y Tobón abrieron dos fábricas, una en Manizales y la otra en Cali. La bebida ha sido patrocinio del fútbol colombiano &#x026BD; , del Tour de Francia &#x1F6B2;&nbsp; y del patinaje.

### &#x1F4D5;&nbsp; Sabor: 
El sabor y el color de la Manzana Postobón se convirtieron en icónos para los colombianos. Su sabor a cola/manzana &#x1F34E;&nbsp; es único.

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.047g, Carbohidratos: 10.8g, Azucares: 10.8g, Proteinas: 0g. Energia: 183kj/43kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.postobon.com

---
',
            'image' => 'https://ucarecdn.com/844fd483-fc77-4de8-b35c-6d21cb9ea97d/Manzana300mL.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Uva Postobón 300mL',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Uva300mL',
            'teaserde' => '&#x1F4D9;&nbsp; Uva Postobón ist ein alkoholfreies, kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Traube Geschmack.',  
            'teaseres' => '&#x1F4D5;&nbsp; Uva Postobón es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/uva.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
In 1904, Gabriel Posada und Valerio Tobón stellten Getränke in Medellín/Kolumbien her. Das erste Produkt war die "Cola/Champagne". Das Getränk war berühmt in Bars, Geschäften, Clubs und Wohnstätten. Das Produkt wurde durch Eselskarren verteilt &#x1F434; &#x1F602; . Posada und Tobón eröffneten Fabriken in Manizales und Cali. Das Getränk ist Sponsor der kolumbianischen Fussballliga &#x026BD; , der Tour de France &#x1F6B2;&nbsp; und des Rollschuhfahrens.

### &#x1F4D9;&nbsp; Geschmack: 
Uva Postobón kennzeichnet sich durch einen magischen Geschmack nach Cola/Traube &#x1F347; , der Geschmack zaubert Gefühle &#x1F60D; . 

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0.047g, Kohlenhydrate: 11.3g, Zucker: 11.3g, Proteine: 0g, Energie: 191kj/45kcal. 

---

### &#x1F4D5;&nbsp; Historia: 
En 1904, Gabriel Posada y Valerio Tobón produjeron refrescos en Medellín-Colombia. Su primer producto fue la "Cola/champaña". Este refresco se hizo famoso en bares, tiendas, clubes sociales y hogares. El producto se distribuyó en una carreta tirada por un burro &#x1F434; &#x1F602; . Posada y Tobón abrieron dos fábricas, una en Manizales y la otra en Cali. La bebida ha sido patrocinio del fútbol colombiano &#x026BD; , del Tour de Francia &#x1F6B2;&nbsp; y del patinaje.

### &#x1F4D5;&nbsp; Sabor: 
Uva Postobón se caracteriza por tener un sabor mágico e irresistible a cola/uva &#x1F347; , su sabor evoca sentimientos &#x1F60D; .

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.047g, Carbohidratos: 11.3g, Azucares: 11.3g, Proteinas: 0g. Energia: 191kj/45kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.postobon.com

---
',
            'image' => 'https://ucarecdn.com/a14a186e-8d65-446b-9e07-fb196c887b43/Uva300mL.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
               $post = new \App\Models\Post([
            'title' => 'Cafe Sello Rojo',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CafeSelloRojo',
            'teaserde' => '&#x1F4D9;&nbsp; Dein Tag beginnt mit einem guten kolumbianischen Kaffee.',  
            'teaseres' => '&#x1F4D5;&nbsp; Tu día empieza después de un buen café colombiano.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Café Sello Rojo &#x02615;&nbsp; entsteht aus der grünen Kaffeebohnen unter hohen Temperaturen &#x1F525;&nbsp; , um diese im nächsten Schritt zu zermahlen. Aus den gerösteten Kafeebohnen &#x1F330;&nbsp; kann man die vielfältigen Geschmacksrichtungen der Café Sello Rojo extrahieren und geniessen. In 1931 eine Gruppe von Unternehmern aus Cali begann mit der Herstellung vom gerösteten und zermahlten Kaffee. In 1933 zieht die Produktion nach Barranquilla um, dort registriert sich die Marke Café Sello Rojo. In 1950 etablierte sich die Gründung der kolumbianischen Industrie Café S.A.S Colcafé. Die Innovation des Unternehmens erlaubte den Aufbau neuer Anlagen in verschiedene Städten Kolumbiens. Der Slogan "Ponle tu sello a la vida" wurde in 2011 eingeführt.

### &#x1F4D9;&nbsp; Zubereitung Kaffee:
Wasser aufwärmen bis zum Siedepunkt. Verhältnis für eine Tasse: 5-7 Gramm Kaffee &#x02615;&nbsp; für 150mL Wasser &#x1F4A7; . Nach dem Giessen des Kaffees muss das Feuer sofort abgeschaltet werden. Der Kaffee darf niemals kochen, ansonsten erreicht er einen schlechten Geschmack. Nach einer Weile den Kaffee stehen lassen und diesen warm oder kalt trinken.  

### &#x1F4D9;&nbsp; Zubereitung Cappuccino:
Verhältnis für eine Tasse: 1.5 Suppenlöffel Kaffee &#x02615;&nbsp; für 150mL Wasser &#x1F4A7; . 2 Suppenlöffel Milchpulver. In einem Mixer den bereits gemachten Kaffee und das Milchpulver giessen und für 30 Sekunden mixen. Mit Zucker, Schokopulver, Vanille oder Schnaps schmecken. 

### &#x1F4D9;&nbsp; Zubereitung Frappuccino:
Verhältnis für eine Tasse: 1.5 Suppenlöffel Kaffee &#x02615;&nbsp; für 150mL Wasser &#x1F4A7; . 1 Milchtasse (150mL). In einem Mixer den bereits gemachten Kaffee &#x02615; , die Milch, Zucker und Eis mixen bis das Eis komplett zersetzt ist. Servieren und Büchsenmilch oder geriebene Schokolade dazugeben um zu dekorieren.  

### &#x1F4D9;&nbsp; Zubereitung mit Fruchteis:
Verhältnis für eine Tasse: 1.5 Suppenlöffel Kaffee &#x02615;&nbsp; für 150mL Wasser &#x1F4A7; . 1 Eisball. Karamellsauce. Den bereits gemachten Kaffee &#x02615;&nbsp; in einem Glas giessen, darauf den Eisball stellen und darauf 1 Löffel Amaretto. Dekorieren mit der Karamellsauce. 

### &#x1F4D9;&nbsp; Zubereitung Moka Kaffee 2 Personen:
Verhältnis: 3 Suppenlöffel Kaffe &#x02615;&nbsp; für 150mL Wasser &#x1F4A7; . 1 Teelöffel Schokoladenpulver. 2 Milchtassen. 1 Teelöffel Milchpulver. 0.5 Tasse Schlagsahne. Den bereits gemachten Kaffee &#x02615;&nbsp; in einer Tasse giessen. In der Mixer lauwarme Milch mit der Schokoladen und das Milchpulver mixen. Dieses Gemisch dem Kaffee hinzugeben. Dekorieren mit Schokoladentröpfchen.   

### &#x1F4D9;&nbsp; Labor:
Aus dem Kaffeeanbaugebiet Kolumbiens werden manuell die Kaffeebohnen, die vom Unternehmen verarbeitet werden, gesammelt. In Abhängigkeit der Laborresultaten von 100 Gramm Muster wird das beste Rohmaterial ausgewählt, um diese in die Röstmaschine zu deponieren. Gemessen wird die Dichte durch freien Fall und die Feuchtigkeit durch spezielle Geräte durch das physikalische und chemische Verfahren der Leitfähigkeit. Der gerösteten Kaffeebohne wird die Farbe oder Röstungsgrad durch ein Gerät mittels Infrarotstrahl gemessen, um die Bohnen im nächsten Schritt zu zermahlen. Zu jeder Tasse mit Wasser bei 98°C werden 14 Gramm hinzugefügt, um Parametern wie Aroma und Frischezustand zu erhalten.   

### &#x1F4D9;&nbsp; Prozess Phase 1: 
Aus den Laborresultaten, wird das gleiche Vorgehen für eine grössere Menge von grünen Bohnen fortgesetzt. Der Auswahlprozess wird durch europäische technologische Geräte wie Absaugungsnetze für den Auswahl von perfekten und ausgezeichnete Qualität von Kafeebohnen durchgeführt. Der Reinigungsprozess besteht aus der Beseitigung von fremden Gegenständen durch ein Absaugungs- und Vibrationssystem. In Silos werden die saubere grünen Bohnen für koffeinfreien Kaffee, für traditionellen Kaffee und für Kaffee Gourmet oder Exportationskaffee gelagert.

### &#x1F4D9;&nbsp; Prozess Phase 2: 
Der Röstungsprozess beginnt mit dem Transport von 136 Kilogramm grünen Kaffeebohnen durch eine Schraube (Schnecke) auf einem speziellen Aufzug. Die Röstungsmaschine hat amerikanische Technologie und benutzt die Wirbelschichtsmethode, um die grünen Kaffeebohnen für 3 Minuten durch Gasverbrennung bei 240°C zu rösten. Die Feuchtigkeit und Temperatur sind die wichtigsten Parametern des Verfahrens. Danach werden die gerösteten Kaffeebohnen mit 10 Liter Wasser gesprüht, um die thermische Reaktionen zu unterbrechen und dann diesen die Temperatur auf 35°C in einem Kühler durch Ventilatoren zu senken. 

### &#x1F4D9;&nbsp; Prozess Phase 3:
Der Mahlenprozess wird durch Hammern in Silos aus Edelstahl mit europäischer Technologie durchgeführt. Dort wird die Grösse der gerösteten Kaffebohnen nach Wunsch angepasst. Die gemahlene geröstete Kaffeebohne ist an Silos weitergegeben, um diese dort für 8 Stunden (CO2 Extraktion) zu entgasen. Der Verpackungsprozess beginnt durch den Transport der gemahlenen Kaffee durch eine Schraube (Schnecke) aus Edelstahl gemacht. Die Verpackung besteht aus einer beschichteten Metallpapier, dessen Zweck die Konservierung der Kaffee ist. Die Verpackungen werden überprüft, den Kaffee verpackt und letzte Qualitätsprüfungen durchgeführt.   

### &#x1F4D9;&nbsp; Geschmack: 
Café Sello Rojo unterscheidet man Aroma, Farbe und Geschmack von anderen Kaffeearten. Dein Tag beginnt mit einem guten kolumbianischen Kaffee. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 12g, Salzen: 50mg, Kohlenhydrate: 63g, Zucker: 4g, Proteine: 0g, Energie: 1810kj/432kcal. 

---

### &#x1F4D5;&nbsp; Historia:
El Café Sello Rojo &#x02615;&nbsp; resulta del sometimiento de los granos verdes de café a altas temperaturas &#x1F525;&nbsp; para luego ser molidos. Del café tostado &#x1F330;&nbsp; se pueden extraer y disfrutar de los diversos sabores y aromas característicos del Café Sello Rojo. Hacia 1931 en Cali, un grupo de empresarios empieza la producción de café tostado y molido. En 1933 la producción se translada a Barranquilla donde se registra la marca Café Sello Rojo. En 1950 se establece la creación de industria colombiana de Café S.A.S Colcafé. La innovación de la empresa permite la creación de más plantas en varias ciudades de Colombia. El eslogan "Ponle tu sello a la vida" fué introducido en 2011.   

### &#x1F4D5;&nbsp; Receta Café:
Calentar el agua hasta el punto de ebullición. Proporción para una taza: 5 a 7 gramos de café &#x02615;&nbsp; (una cucharada sopera) para 150mL de agua &#x1F4A7; . Luego de vertir el café, apagar inmediatamente el fuego. El café nunca debe hervir porque adquiere un mal sabor. Tómelo caliente luego de dejar reposar unos minutos, o simplemente disfrútelo frío. 

### &#x1F4D5;&nbsp; Receta Cappuccino:
Proporción para una taza: 1.5 cucharadas soperas de café &#x02615;&nbsp; para 150mL de agua &#x1F4A7; . 2 cucharadas de leche en polvo. En una licuadora verter el café y la leche en polvo, batir por 30 segundos. Saborizar con azúcar, cocoa, vainilla o licor.

### &#x1F4D5;&nbsp; Receta Frappuccino:
Proporción para una taza: 1.5 cucharadas soperas de café &#x02615;&nbsp; para 150mL de agua &#x1F4A7; . 1 taza de leche (150mL). En una licuadora verter el café &#x02615; , la leche, azúcar e hielo al gusto y licuar hasta que el hielo se desintegre. Servir y adicionar leche condensada o chocolate rallado para decorar.  

### &#x1F4D5;&nbsp; Receta con Helado:
Proporción para una taza: 1.5 cucharadas soperas de café &#x02615;&nbsp; para 150mL de agua &#x1F4A7; . 1 bola de helado. Salsa de caramelo. Verter el café &#x02615;&nbsp; recién preparado en una copa, encima poner la bola de hielo. Agregar encima de la bola de helado 1 cucharada de amaretto. Decorar con salsa de caramelo.

### &#x1F4D5;&nbsp; Receta café Moka 2 personas:
Proporción: 3 cucharadas de café &#x02615;&nbsp; para 150mL de agua &#x1F4A7; . 1 cucharadita de chocolate instantáneo. 2 tazas de leche. 1 cucharadita de leche en polvo. 0.5 taza de crema batida. Colocar el café &#x02615;&nbsp; recién preparado en una taza. Licuar la leche tibia con el chocolate y la leche en polvo; adicionar esta mezcla al café. Decorar con gotas de chocolate.

### &#x1F4D5;&nbsp; Laboratorio:
De la zona cafetera de Colombia se recolectan manualmente los frutos que son procesados por la compañia. Dependiendo de los resultados de laboratorio de 100 gramos de muestra de los granos verdes se seleccionan la mejor materia prima para ser depositados en el tostador, midiendo la densidad del grano por caida libre y humedad por medio de equipos eléctricos por el método físico-químico de la conductividad. A los granos tostados se les mide el color o grado de tostión por medio de un equipo especial que emite un rayo infrarrojo, transfiriendo la información necesaria para luego ser llevado a moler. A cada taza con agua de 98°C se le adicionan 14 gramos para obtener así parámetros como aroma y frescura.

### &#x1F4D5;&nbsp; Proceso fase 1: 
A partír de estos resultados de laboratorio, se continúa con el mismo proceso para una cantidad mayor de sacos de grano verde de café con procesos de almacenamiento. El proceso de selección se realiza por medio de tecnología europea, un equipo de mallas o zarandas de aspiración, la cual selecciona granos perfectos y de excelente calidad. El proceso de limpieza, consiste en la eliminación de objetos ajenos al grano puro, por medio de un sistema de aspiración y vibratorio. En proceso de almacenamiento en silo se divide los granos limpios para objetivos como café descafeinado, café tradicional y café especial tipo gourmet o de exportación. 

### &#x1F4D5;&nbsp; Proceso fase 2: 
El proceso de tostión comienza con el transporte del café por medio de un tornillo sinfín, entregando a un elevador de cangliones y a su vez se pesan 136 kilos de grano verde limpio. La máquina de tostar es de tecnología americana, utiliza el principio de lecho fluidizado tostando por medio de combustión a gas (aire caliente llevado desde el fuego por medio de ventilador) por 3 minutos a una temperatura de 240°C. La humedad y temperatura son los principales parámetros. Luego de esto el grano es rociado con 10 litros de agua para suspender reacciones térmicas, entregado a un enfriador para bajar la temperatura a 35°C por medio de ventilación.   

### &#x1F4D5;&nbsp; Proceso fase 3:
El proceso de molienda se realiza en silos de acero inoxidable y de martillos con tecnología europea, donde se le da el tamaño deseado a las partículas del grano tostado. El café molido es entregado a silos de desgasificación por 8 horas (extracción de CO2). El proceso de empaque se realiza transportando el café molido por medio de un tornillo sinfín en acero inoxidable. El empaque consiste en papel laminado metalizado cuyo objetivo es el de conservar el café tostado y molido. Los empaques son revisados, embalados y ultimos controles de calidad. 

### &#x1F4D5;&nbsp; Sabor: 
El sabor de Café Sello Rojo se destaca por su aroma, color y sabor. Tu día empieza después de un buen café colombiano.    

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 12g, Sales: 50mg, Carbohidratos: 63g, Azucares: 4g, Proteinas: 0g. Energia: 1810kj/432kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.ponletuselloalavida.com 

---
',
            'image' => 'https://ucarecdn.com/53eb2aa4-33fd-4fd2-8cec-d72242768b37/SelloRojo.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Cafe Aguila Roja',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CafeAguilaRoja',
            'teaserde' => '&#x1F4D9;&nbsp; Dein Tag beginnt mit einem guten kolumbianischen Kaffee.',
            'teaseres' => '&#x1F4D5;&nbsp; Tu día empieza después de un buen café colombiano.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte: 
Alles begann gegen 1930 in Cali/Kolumbien mit der Neueröffnung eines Geschäfts. Im Laufe der Zeit und dank technologischem Durchbruch, schafft das Unternehmen eine Anlage für die Produktion von Kaffee &#x02615;&nbsp; auf grösseren Mengen. Heutzutage Café Aguila Roja ist eine der grössten anerkannten Unternehmen für die Distribution aller kolumbianischen Ladengeschäften.  

### &#x1F4D9;&nbsp; Zubereitung Kaffee:
Wasser aufwärmen bis zum Siedepunkt. Verhältnis für eine Tasse: 5-7 Gramm Kaffee &#x02615;&nbsp; (Suppenlöffel) für 150mL Wasser &#x1F4A7; . Nach dem Giessen des Kaffees muss das Feuer sofort abgeschaltet werden. Der Kaffee darf niemals kochen, ansonsten erreicht er einen schlechten Geschmack. Nach einer Weile den Kaffee stehen lassen und diesen warm oder kalt trinken.  

### &#x1F4D9;&nbsp; Zubereitung Cappuccino:
Verhältnis für eine Tasse: 1.5 Suppenlöffel Kaffee &#x02615;&nbsp; für 150mL Wasser &#x1F4A7; . 2 Suppenlöffel Milchpulver. In einem Mixer den bereits gemachten Kaffee und das Milchpulver giessen und für 30 Sekunden mixen. Mit Zucker, Schokopulver, Vanille oder Schnaps schmecken. 

### &#x1F4D9;&nbsp; Zubereitung Frappuccino:
Verhältnis für eine Tasse: 1.5 Suppenlöffel Kaffee &#x02615;&nbsp; für 150mL Wasser &#x1F4A7; . 1 Milchtasse (150mL). In einem Mixer den bereits gemachten Kaffee &#x02615; , die Milch, Zucker und Eis mixen bis das Eis komplett zersetzt ist. Servieren und Büchsenmilch oder geriebene Schokolade dazugeben um zu dekorieren.  

### &#x1F4D9;&nbsp; Zubereitung mit Fruchteis:
Verhältnis für eine Tasse: 1.5 Suppenlöffel Kaffee &#x02615;&nbsp; für 150mL Wasser &#x1F4A7; . 1 Eisball. Karamellsauce. Den bereits gemachten Kaffee &#x02615;&nbsp; in einem Glas giessen, darauf den Eisball stellen und darauf 1 Löffel Amaretto. Dekorieren mit der Karamellsauce. 

### &#x1F4D9;&nbsp; Zubereitung Moka Kaffee 2 Personen:
Verhältnis: 3 Suppenlöffel Kaffe &#x02615;&nbsp; für 150mL Wasser &#x1F4A7; . 1 Teelöffel Schokoladenpulver. 2 Milchtassen. 1 Teelöffel Milchpulver. 0.5 Tasse Schlagsahne. Den bereits gemachten Kaffee &#x02615;&nbsp; in einer Tasse giessen. In der Mixer lauwarme Milch mit der Schokoladen und das Milchpulver mixen. Dieses Gemisch dem Kaffee hinzugeben. Dekorieren mit Schokoladentropfchen.   

### &#x1F4D9;&nbsp; Labor:
Aus dem Kaffeeanbaugebiet Kolumbiens werden manuell die Kaffeebohnen, die vom Unternehmen verarbeitet werden, gesammelt. In Abhängigkeit der Laborresultaten von 100 Gramm Muster wird das beste Rohmaterial ausgewählt, um diese in die Röstmaschine zu deponieren. Gemessen wird die Dichte durch freien Fall und die Feuchtigkeit durch spezielle Geräte durch das physikalische und chemische Verfahren der Leitfähigkeit. Der gerösteten Kaffeebohne wird die Farbe oder Röstungsgrad durch ein Gerät mittels Infrarotstrahl gemessen, um die Bohnen im nächsten Schritt zermahlt zu werden. Zu jeder Tasse mit  Wasser bei 98°C werden 14 Gramm hinzugefügt, um Parametern wie Aroma und Frischezustand zu erhalten.   

### &#x1F4D9;&nbsp; Prozess Phase 1: 
Aus den Laborresultaten, wird das gleiche Vorgehen für eine grössere Menge von grünen Bohnen fortgesetzt. Der Auswahlprozess wird durch europäische Technologie, Geräte wie Absaugungsnetze für den Auswahl von perfekten und ausgezeichnete Qualität von Kafeebohnen, durchgeführt. Der Reinigungsprozess besteht aus der Beseitigung von fremden Gegenstände durch ein Absaugungs- und Vibrationssystem. In Silos werden die saubere grünen Bohnen für koffeinfreien Kaffee, für traditionellen Kaffee und für Kaffee Gourmet oder Exportationskaffee gelagert.

### &#x1F4D9;&nbsp; Prozess Phase 2: 
Der Röstungsprozess beginnt mit dem Kaffeetransport durch eine Schraube (Schnecke) auf einem speziellen Aufzug und gleichzeitig 136 Kilogramm grünen Kaffeebohnen gewichtet. Die Röstungsmaschine hat amerikanische Technologie und benutzt die Wirbelschichtsmethode, um die grünen Kaffeebohnen für 3 Minuten durch Gasverbrennung bei 240°C zu rösten. Die Feuchtigkeit und Temperatur sind die messbaren wichtigsten Parametern des Verfahrens. Danach werden die gerösteten Kaffeebohnen mit 10 Liter Wasser gesprüht, um die thermische Reaktionen zu unterbrechen und dann diesen die Temperatur auf 35°C in einem Kühler durch Ventilatoren zu senken. 

### &#x1F4D9;&nbsp; Prozess Phase 3:
Der Mahlenprozess wird durch Hammern in Silos aus Edelstahl mit europäischer Technologie durchgeführt. Dort wird die Grösse der geröstete Kaffebohne nach Wunsch angepasst. Die gemahlene geröstete Kaffeebohne ist an Silos weitergegeben, um diese dort für 8 Stunden (CO2 Extraktion) zu entgasen. Der Verpackungsprozess beginnt durch den Transport der gemahlenen Kaffee durch eine Schraube (Schnecke) aus Edelstahl gemacht. Die Verpackung besteht aus einer beschichteten Metallpapier, dessen Zweck die Konservierung der Kaffee ist. Die Verpackungen werden überprüft, den Kaffee verpackt und letzte Qualitätsprüfungen durchgeführt.      

### &#x1F4D9;&nbsp; Geschmack: 
Café Aguila Roja unterscheidet man die Aroma, Farbe und Geschmack von anderen Kaffeearten. Dein Tag beginnt nach einem guten kolumbianischen Kaffee. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 10g, Kohlenhydrate: 30g, Zucker: 0g, Proteine: 1g, Energie: 1810kj/432kcal. 

---

### &#x1F4D5;&nbsp; Historia: 
Todo comenzó hacia 1930 en Cali/Colombia con la apertura de un local. Con el paso del tiempo y gracias al avance de la tecnología, la empresa crea una planta para producciones de café &#x02615;&nbsp; a mayores cantidades. Hoy en dia es una de las empresas mayor conocidas por su distribución a todas las tiendas colombianas.  

### &#x1F4D5;&nbsp; Receta Café:
Calentar el agua hasta el punto de ebullición. Proporción para una taza: 5 a 7 gramos de café &#x02615;&nbsp; (una cucharada sopera) para 150mL de agua &#x1F4A7; . Luego de vertir el café, apagar inmediatamente el fuego. El café nunca debe hervir porque adquiere un mal sabor. Tómelo caliente luego de dejar reposar unos minutos, o simplemente disfrútelo frío. 

### &#x1F4D5;&nbsp; Receta Cappuccino:
Proporción para una taza: 1.5 cucharadas soperas de café &#x02615;&nbsp; para 150mL de agua &#x1F4A7; . 2 cucharadas de leche en polvo. En una licuadora verter el café y la leche en polvo, batir por 30 segundos. Saborizar con azúcar, cocoa, vainilla o licor.

### &#x1F4D5;&nbsp; Receta Frappuccino:
Proporción para una taza: 1.5 cucharadas soperas de café &#x02615;&nbsp; para 150mL de agua &#x1F4A7; . 1 taza de leche (150mL). En una licuadora verter el café &#x02615; , la leche, azúcar e hielo al gusto y licuar hasta que el hielo se desintegre. Servir y adicionar leche condensada o chocolate rallado para decorar.  

### &#x1F4D5;&nbsp; Receta con Helado:
Proporción para una taza: 1.5 cucharadas soperas de café &#x02615;&nbsp; para 150mL de agua &#x1F4A7; . 1 bola de helado. Salsa de caramelo. Verter el café &#x02615;&nbsp; recién preparado en una copa, encima poner la bola de hielo. Agregar encima de la bola de helado 1 cucharada de amaretto. Decorar con salsa de caramelo.

### &#x1F4D5;&nbsp; Receta café Moka 2 personas: 
Proporción: 3 cucharadas de café &#x02615;&nbsp; para 150mL de agua &#x1F4A7; . 1 cucharadita de chocolate instantáneo. 2 tazas de leche. 1 cucharadita de leche en polvo. 0.5 taza de crema batida. Colocar el café &#x02615;&nbsp; recién preparado en una taza. Licuar la leche tibia con el chocolate y la leche en polvo; adicionar esta mezcla al café. Decorar con gotas de chocolate.

### &#x1F4D5;&nbsp; Laboratorio:
De la zona cafetera de Colombia se recolectan manualmente los frutos que son procesados por la compañia. Dependiendo de los resultados de laboratorio de 100 gramos de muestra de los granos verdes se seleccionan la mejor materia prima para ser depositados en el tostador, midiendo la densidad del grano por caida libre y humedad por medio de equipos eléctricos por el método físico-químico de la conductividad. A los granos tostados se les mide el color o grado de tostión por medio de un equipo especial que emite un rayo infrarrojo, transfiriendo la información necesaria para luego ser llevado a moler. A cada taza con agua de 98°C se le adicionan 14 gramos para obtener así parámetros como aroma y frescura.

### &#x1F4D5;&nbsp; Proceso fase 1: 
A partír de estos resultados de laboratorio, se continúa con el mismo proceso para una cantidad mayor de sacos de grano verde de café con procesos de almacenamiento. El proceso de selección se realiza por medio de tecnología europea, un equipo de mallas o zarandas de aspiración, la cual selecciona granos perfectos y de excelente calidad. El proceso de limpieza, consiste en la eliminación de objetos ajenos al grano puro, por medio de un sistema de aspiración y vibratorio. En proceso de almacenamiento en silo se divide los granos limpios para objetivos como café descafeinado, café tradicional y café especial tipo gourmet o de exportación. 

### &#x1F4D5;&nbsp; Proceso fase 2: 
El proceso de tostión comienza con el transporte del café por medio de un tornillo sinfín, entregando a un elevador de cangliones y a su vez se pesan 136 kilos de grano verde limpio. La máquina de tostar es de tecnología americana, utiliza el principio de lecho fluidizado tostando por medio de combustión a gas (aire caliente llevado desde el fuego por medio de ventilador) por 3 minutos a una temperatura de 240°C. La humedad y temperatura son los principales parámetros. Luego de esto el grano es rociado con 10 litros de agua para suspender reacciones térmicas, entregado a un enfriador para bajar la temperatura a 35°C por medio de ventilación.   

### &#x1F4D5;&nbsp; Proceso fase 3:
El proceso de molienda se realiza en silos de acero inoxidable y de martillos con tecnología europea, donde se le da el tamaño deseado a las partículas del grano tostado. El café molido es entregado a silos de desgasificación por 8 horas (extracción de CO2). El proceso de empaque se realiza transportando el café molido por medio de un tornillo sinfín en acero inoxidable. El empaque consiste en papel laminado metalizado cuyo objetivo es el de conservar el café tostado y molido. Los empaques son revisados, embalados y ultimos controles de calidad.   

### &#x1F4D5;&nbsp; Sabor: 
El sabor de Café Aguila Roja se destaca por su aroma, color y sabor. Tu día empieza después de un buen café colombiano.    

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 10g, Carbohidratos: 30g, Azucares: 0g, Proteinas: 1g. Energia: 1810kj/432kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://cafeaguilaroja.com

---
',
            'image' => 'https://ucarecdn.com/d4c7024d-eb2b-46dd-b403-cd82656e428c/AguilaRoja.png',
            'imga' => 'https://ucarecdn.com/074e2ce3-9d9f-4182-a29c-53742e7a01ab/1.png',
            'descra' => 'Café Aguila Roja',
            'imgb' => 'https://ucarecdn.com/17c990cd-5f31-456a-bfb2-e08e313f5e60/2.png',
            'descrb' => 'Café Aguila Roja',
            'imgc' => 'https://ucarecdn.com/074e2ce3-9d9f-4182-a29c-53742e7a01ab/1.png',
            'descrc' => 'Café Aguila Roja',
            'imgd' => 'https://ucarecdn.com/17c990cd-5f31-456a-bfb2-e08e313f5e60/2.png',
            'descrd' => 'Café Aguila Roja',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Guarana Antártica',
            'weight' => 300,
            'price' => 1.50,
            'slug' => 'Guarana',
            'teaserde' => '&#x1F4D9;&nbsp; Guarana Antártica ist ein koffeinhaltiges Erfrischungsgetränk aus Brasilien.',  
            'teaseres' => '&#x1F4D5;&nbsp; Guarana Antártica es una bebida refrescante de Brasil, rica en cafeína.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Guaraná Antártica ist ein aufmunterndes Erfrischungsgetränk haupsächlich aus dem Extrakt von Guaranasamen. Guaraná wird grösstenteils in Brasilien und in Paraguay konsumiert. Die Einheimische im Amazonasgebiet zerquetschten die Guaranasamen &#x1F330;&nbsp; und mischten sie mit Wasser &#x1F4A7; . Die Einheimische verwendeten die medizinische Wertigkeit des Getränks, um Erschöpfung zu bekämpfen. Das Unternehmen Companhia Antártica Paulista war anfangs in São Paulo ein Schweinezucht &#x1F437; . Das Unternehmen hatte auch eine Fabrik, um Eis &#x026C4;&nbsp; zu produzieren. Der Deutsche Bierbrauer Louis Bücher war für die Eisfabrik interessiert. Beide Unternehmen vereinigten sich und schafften eine Bierfabrik &#x1F37A;&nbsp; mit Technologie in niedrige Gärungsprozesse. Das erste Bier wurde in 1889 veröffentlicht. In 2000 vereinigte sich Antártica mit Brahma und schuffen AmBev. Heutzutage nimmt AmBev mit dem Brahma Bier im Biermarkt auf. Guaraná Antártica ist Sponsor der Seleção Brasileira de Futebol &#x026BD; .

### &#x1F4D9;&nbsp; Geschmack: 
Der Geschmack der Guaraná Antártica leitet sich aus der Mischung von 1% Extrakt, Wasser, Süssstofe, Säuerungsmitteln und Aromen.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0.02g, Kohlenhydrate: 10g, Zucker: 31g, Proteine: 0g, Energie: 170kj/40kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Guaraná Antártica es una bebida refrescante estimulante hecha a base del extracto de la semilla de guaraná. Guaraná se consume mayormente en Brasil y Paraguay. Los nativos de la región del Amazonas machacaban las semillas &#x1F330;&nbsp; y las mezclaban con agua &#x1F4A7; . Los nativos utilizaban el valor medicinal de esta bebida para combatir el cansancio. La empresa Companhia Antártica Paulista, fundada en 1885, inicialmente era en São Paulo una crianza de cerdos &#x1F437; . La empresa también tuvo una fábrica de hielo &#x026C4; , que despertó el interés del cervecero alemán Louis Bücher, dueño de una fábrica de cerveza &#x1F37A;&nbsp; desde 1868. Ambas empresas se unieron creándo una fábrica de cerveza con tecnología de baja fermentación. La primera cerveza fue publicada en 1889. En 2000 Antártica se fusionó con Brahma, creando AmBev. Hoy dia esta empresa hace parte de la gran competitividad en el mercado con la cerveza Brahma. Guaraná Antártica es patrocinador oficial de la Seleção Brasileira de Futebol &#x026BD; .

### &#x1F4D5;&nbsp; Sabor: 
El sabor de Guaraná Antártica se deriva de la mezcla de 1% de extracto, agua, edulcorantes, acidulantes y aromas. 

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.02g, Carbohidratos: 10g, Azucares: 31g, Proteinas: 0g. Energia: 170kj/40kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.ambev.com.br

---
',
            'image' => 'https://ucarecdn.com/939924eb-9525-4007-8b50-1df990fe9afc/Guarana.png',
            'imga' => 'https://ucarecdn.com/ed928294-b9ba-4b04-8247-f228cb213cdb/1.png',
            'descra' => 'Guaraná Antártica',
            'imgb' => 'https://ucarecdn.com/dc5b250d-281d-47ff-8eb4-97634c85ea10/2.png',
            'descrb' => 'Guaraná Antártica',
            'imgc' => 'https://ucarecdn.com/ed928294-b9ba-4b04-8247-f228cb213cdb/1.png',
            'descrc' => 'Guaraná Antártica',
            'imgd' => 'https://ucarecdn.com/dc5b250d-281d-47ff-8eb4-97634c85ea10/2.png',
            'descrd' => 'Guaraná Antártica',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Jugo Hit Lulo',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JugoHitLulo',
            'teaserde' => '&#x1F4D9;&nbsp; Jugo Hit Lulo ist ein kolumbianischer Fruchtsaft mit Lulogeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jugo Hit Lulo es una bebida colombiana a base de extracto de lulo.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
In 1904, Gabriel Posada und Valerio Tobón stellten Getränke in Medellín/Kolumbien her. Sein erstes Produkt war die "Cola/Champagne". Im Laufe der Innovation fertigte das Unternehmen die Jugo Hit &#x1F379;&nbsp; in Geschmacksrichtungen wie Himbeere, Mango, Guave, Tropenfrüchte, Orange-Ananas, Lulo und Pfirsich. Postobón veröffentlichte das Produkt Hit in 1997. 

### &#x1F4D9;&nbsp; Geschmack: 
Jugo Hit Lulo ist Getränk auf der Grundlage des Luloextrakts mit Säuerungsmitteln und Süssstoffen.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0.012g, Kohlenhydrate: 11.3g, Zucker: 9.2g, Proteine: 0g, Energie: 199kj/47kcal. 

---

### &#x1F4D5;&nbsp; Historia:
En 1904, Gabriel Posada y Valerio Tobón produjeron refrescos en Medellín/Colombia. Su primer producto fue la "Cola/champaña". Con el paso de la innovación, la empresa fabricó los Jugos Hit &#x1F379;&nbsp; de sabores como mora, mango, guayaba, frutas tropicales, naranja-piña, lulo y durazno. Postobón publica el producto Hit en 1997.

### &#x1F4D5;&nbsp; Sabor: 
Jugo Hit Lulo es una bebida a base de extracto de lulo con acidulantes y edulcorantes.   

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.012g, Carbohidratos: 11.3g, Azucares: 9.2g, Proteinas: 0g. Energia: 199kj/47kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.postobon.com

---
',
            'image' => 'https://ucarecdn.com/afe70c69-d345-4a27-8e66-79b9187b85f5/HitLulo.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();         
        $post = new \App\Models\Post([
            'title' => 'Jugo Hit Mango',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JugoHitMango',
            'teaserde' => '&#x1F4D9;&nbsp; Jugo Hit Mango ist ein kolumbianischer Fruchtsaft mit Mangogeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jugo Hit Mango es una bebida colombiana a base de extracto de Mango.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
In 1904, Gabriel Posada und Valerio Tobón stellten Getränke in Medellín/Kolumbien her. Sein erstes Produkt war die "Cola/Champagne". Im Laufe der Innovation fertigte das Unternehmen die Jugo Hit &#x1F379;&nbsp; in Geschmacksrichtungen wie Himbeere, Mango, Guave, Tropenfrüchte, Orange-Ananas, Lulo und Pfirsich. Postobón veröffentlichte das Produkt Hit in 1997. 

### &#x1F4D9;&nbsp; Geschmack: 
Jugo Hit Mango ist Getränk auf der Grundlage des Mangoextrakts mit Säuerungsmitteln und Süssstoffen.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0.012g, Kohlenhydrate: 11.3g, Zucker: 9.2g, Proteine: 0g, Energie: 199kj/47kcal. 

---

### &#x1F4D5;&nbsp; Historia:
En 1904, Gabriel Posada y Valerio Tobón produjeron refrescos en Medellín/Colombia. Su primer producto fue la "Cola/champaña". Con el paso de la innovación, la empresa fabricó los Jugos Hit &#x1F379;&nbsp; de sabores como mora, mango, guayaba, frutas tropicales, naranja-piña, lulo y durazno. Postobón publica el producto Hit en 1997.

### &#x1F4D5;&nbsp; Sabor: 
Jugo Hit Mango es una bebida a base de extracto de mango con acidulantes y edulcorantes.   

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.012g, Carbohidratos: 11.3g, Azucares: 9.2g, Proteinas: 0g. Energia: 199kj/47kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.postobon.com

---

',
            'image' => 'https://ucarecdn.com/59401bee-2542-4589-88c4-cb9be51a3f04/HitMango.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Jugo Hit Mora',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JugoHitMora',
            'teaserde' => '&#x1F4D9;&nbsp; Jugo Hit Mora ist ein kolumbianischer Fruchtsaft mit Himbeergeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jugo Hit Mora es una bebida colombiana a base de extracto de frambuesa.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
In 1904, Gabriel Posada und Valerio Tobón stellten Getränke in Medellín/Kolumbien her. Sein erstes Produkt war die "Cola/Champagne". Im Laufe der Innovation fertigte das Unternehmen die Jugo Hit &#x1F379;&nbsp; in Geschmacksrichtungen wie Himbeere, Mango, Guave, Tropenfrüchte, Orange-Ananas, Lulo und Pfirsich. Postobón veröffentlichte das Produkt Hit in 1997. 

### &#x1F4D9;&nbsp; Geschmack: 
Jugo Hit Mora ist Getränk auf der Grundlage des Himbeerextrakts mit Säuerungsmitteln und Süssstoffen.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0.012g, Kohlenhydrate: 11.3g, Zucker: 9.2g, Proteine: 0g, Energie: 199kj/47kcal. 

---

### &#x1F4D5;&nbsp; Historia:
En 1904, Gabriel Posada y Valerio Tobón produjeron refrescos en Medellín/Colombia. Su primer producto fue la "Cola/champaña". Con el paso de la innovación, la empresa fabricó los Jugos Hit &#x1F379;&nbsp; de sabores como mora, mango, guayaba, frutas tropicales, naranja-piña, lulo y durazno. Postobón publica el producto Hit en 1997.

### &#x1F4D5;&nbsp; Sabor: 
Jugo Hit Mora es una bebida a base de extracto de frambuesa con acidulantes y edulcorantes.   

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.012g, Carbohidratos: 11.3g, Azucares: 9.2g, Proteinas: 0g. Energia: 199kj/47kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.postobon.com

---
',
            'image' => 'https://ucarecdn.com/f4a7db66-0b64-42e2-96c1-b7ed1c07229f/HitMora.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();                
        $post = new \App\Models\Post([
            'title' => 'Jarritos Guave',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JarritoGuayaba',
            'teaserde' => '&#x1F4D9;&nbsp; Jarrito Guave ist ein alkoholfreies Erfrischungsgetränk mit einem einzigartigen Guavegeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jarrito Guave es una bebida refrescante sin alcohol con sabor único a guayaba.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Jarritos ist ein Unternehmen von Erfrischungsgetränke mit Haupsitz in Guadalajara/México und wurde in 1950 von Francisco Hill "El Güero" &#x1F471; &#x1F602; , ein begabter Chemiker und Bastler, gegründet. Der Name Jarritos kommt aus der mexikanischer Tradition, Wasser aus Lehmkrüge zu trinken. Jarritos hat Erfrischungsgetränke &#x1F379;&nbsp; in Geschmacksrichtungen wie Tutti-Frutti, Guave, Jamaica, Limette, Mandarin, Ananas, Erdbeere, Wassermelone, Mango, Grapefruit, Mineralwasser, Lima-Limette, Apfel, Pfirsich, Traube und Tamarinde.

### &#x1F4D9;&nbsp; Geschmack: 
Jarritos Guave ist alkoholfreies Erfrischungsgetränk auf der Grundlage des Guavenextrakts mit Säuerungsmitteln und Süssstoffen.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0.05g, Kohlenhydrate: 11.7g, Zucker: 11.7g, Proteine: 0g, Energie: 199kj/47kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Jarritos es una empresa de bebidas refrescantes con sede central en Guadalajara/México fundada en 1950 por Francisco Hill "El Güero" &#x1F471; &#x1F602; , un dotado químico y distribuidor. El nombre Jarritos proviene de la tradición mexicana de beber agua en jarros de arcilla. Jarritos ha publicado sus bebidas &#x1F379;&nbsp; con sabores a Tutifruti, Guayaba, Jamaica, Limón, Mandarina, Piña, Fresa, Sandía, Mango, Cola, Grapefruit, Agua mineral, Lima-Limón, Manzana, Durazno, Uva y Tamarindo.

### &#x1F4D5;&nbsp; Sabor: 
Jarritos Guave es una bebida refrescante sin alcohol a base de extracto de guayaba con acidulantes y edulcorantes.   

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.05g, Carbohidratos: 11.7g, Azucares: 11.7g, Proteinas: 0g. Energia: 199kj/47kcal.

---

### &#x1F4D6;&nbsp; Fuente/Quelle: 
http://www.jarritos.mx

---
',
            'image' => 'https://ucarecdn.com/49fd88ab-ad49-4617-811a-28d338b9087d/Guayaba.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();       
        $post = new \App\Models\Post([
            'title' => 'Jarritos Grapefruit',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JarritoNaranja',
            'teaserde' => '&#x1F4D9;&nbsp; Jarrito Grapefruit ist ein alkoholfreies Erfrischungsgetränk mit einem einzigartigen Grapefruitgeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jarrito Grapefruit es una bebida refrescante sin alcohol con sabor único a toronja',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Jarritos ist ein Unternehmen von Erfrischungsgetränke mit Haupsitz in Guadalajara/México und wurde in 1950 von Francisco Hill "El Güero" &#x1F471; &#x1F602; , ein begabter Chemiker und Bastler, gegründet. Der Name Jarritos kommt aus der mexikanischer Tradition, Wasser aus Lehmkrüge zu trinken. Jarritos hat Erfrischungsgetränke &#x1F379;&nbsp; in Geschmacksrichtungen wie Tutti-Frutti, Guave, Jamaica, Limette, Mandarin, Ananas, Erdbeere, Wassermelone, Mango, Grapefruit, Mineralwasser, Lima-Limette, Apfel, Pfirsich, Traube und Tamarinde.

### &#x1F4D9;&nbsp; Geschmack: 
Jarritos Grapefruit ist alkoholfreies Erfrischungsgetränk auf der Grundlage des Grapefruitextrakts mit Säuerungsmitteln und Süssstoffen.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0.05g, Kohlenhydrate: 11.7g, Zucker: 11.7g, Proteine: 0g, Energie: 199kj/47kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Jarritos es una empresa de bebidas refrescantes con sede central en Guadalajara/México fundada en 1950 por Francisco Hill "El Güero" &#x1F471; &#x1F602; , un dotado químico y distribuidor. El nombre Jarritos proviene de la tradición mexicana de beber agua en jarros de arcilla. Jarritos ha publicado sus bebidas &#x1F379;&nbsp; con sabores a Tutifruti, Guayaba, Jamaica, Limón, Mandarina, Piña, Fresa, Sandía, Mango, Cola, Grapefruit, Agua mineral, Lima-Limón, Manzana, Durazno, Uva y Tamarindo.

### &#x1F4D5;&nbsp; Sabor: 
Jarritos Grapefruit es una bebida refrescante sin alcohol a base de extracto de toronja con acidulantes y edulcorantes.   

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.05g, Carbohidratos: 11.7g, Azucares: 11.7g, Proteinas: 0g. Energia: 199kj/47kcal.

---

### &#x1F4D6;&nbsp; Fuente/Quelle: 
http://www.jarritos.mx

---
',
            'image' => 'https://ucarecdn.com/eb6571fb-c1ae-4382-992f-4c2f344fd3ed/Grapefruit.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Jarritos Mandarin',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JarritoMandarina',
            'teaserde' => '&#x1F4D9;&nbsp; Jarrito Mandarin ist ein alkoholfreies Erfrischungsgetränk mit einem einzigartigen Mandaringeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jarrito Mandarin es una bebida refrescante sin alcohol con sabor único a mandarina.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Jarritos ist ein Unternehmen von Erfrischungsgetränke mit Haupsitz in Guadalajara/México und wurde in 1950 von Francisco Hill "El Güero" &#x1F471; &#x1F602; , ein begabter Chemiker und Bastler, gegründet. Der Name Jarritos kommt aus der mexikanischer Tradition, Wasser aus Lehmkrüge zu trinken. Jarritos hat Erfrischungsgetränke &#x1F379;&nbsp; in Geschmacksrichtungen wie Tutti-Frutti, Guave, Jamaica, Limette, Mandarin, Ananas, Erdbeere, Wassermelone, Mango, Grapefruit, Mineralwasser, Lima-Limette, Apfel, Pfirsich, Traube und Tamarinde.

### &#x1F4D9;&nbsp; Geschmack: 
Jarritos Mandarin ist alkoholfreies Erfrischungsgetränk auf der Grundlage des Mandarinextrakts mit Säuerungsmitteln und Süssstoffen.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0.05g, Kohlenhydrate: 11.7g, Zucker: 11.7g, Proteine: 0g, Energie: 199kj/47kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Jarritos es una empresa de bebidas refrescantes con sede central en Guadalajara/México fundada en 1950 por Francisco Hill "El Güero" &#x1F471; &#x1F602; , un dotado químico y distribuidor. El nombre Jarritos proviene de la tradición mexicana de beber agua en jarros de arcilla. Jarritos ha publicado sus bebidas &#x1F379;&nbsp; con sabores a Tutifruti, Guayaba, Jamaica, Limón, Mandarina, Piña, Fresa, Sandía, Mango, Cola, Grapefruit, Agua mineral, Lima-Limón, Manzana, Durazno, Uva y Tamarindo.

### &#x1F4D5;&nbsp; Sabor: 
Jarritos Mandarin es una bebida refrescante sin alcohol a base de extracto de mandarina con acidulantes y edulcorantes.   

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.05g, Carbohidratos: 11.7g, Azucares: 11.7g, Proteinas: 0g. Energia: 199kj/47kcal.

---

### &#x1F4D6;&nbsp; Fuente/Quelle: 
http://www.jarritos.mx

---
',
            'image' => 'https://ucarecdn.com/37028554-da60-45e6-bc49-73f79ed2df8b/Mandarina.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();       
        $post = new \App\Models\Post([
            'title' => 'Jarritos Lime',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JarritoLima',
            'teaserde' => '&#x1F4D9;&nbsp; Jarrito Lima ist ein alkoholfreies Erfrischungsgetränk mit einzigartigem Zitronengeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jarrito Lima es una bebida refrescante sin alcohol con sabor único a limón.     
             ',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Jarritos ist ein Unternehmen von Erfrischungsgetränke mit Haupsitz in Guadalajara/México und wurde in 1950 von Francisco Hill "El Güero" &#x1F471; &#x1F602; , ein begabter Chemiker und Bastler, gegründet. Der Name Jarritos kommt aus der mexikanischer Tradition, Wasser aus Lehmkrüge zu trinken. Jarritos hat Erfrischungsgetränke &#x1F379;&nbsp; in Geschmacksrichtungen wie Tutti-Frutti, Guave, Jamaica, Limette, Mandarin, Ananas, Erdbeere, Wassermelone, Mango, Grapefruit, Mineralwasser, Lima-Limette, Apfel, Pfirsich, Traube und Tamarinde.

### &#x1F4D9;&nbsp; Geschmack: 
Jarritos Lime ist alkoholfreies Erfrischungsgetränk auf der Grundlage des Zitronenextrakts mit Säuerungsmitteln und Süssstoffen.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0.05g, Kohlenhydrate: 11.7g, Zucker: 11.7g, Proteine: 0g, Energie: 199kj/47kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Jarritos es una empresa de bebidas refrescantes con sede central en Guadalajara/México fundada en 1950 por Francisco Hill "El Güero" &#x1F471; &#x1F602; , un dotado químico y distribuidor. El nombre Jarritos proviene de la tradición mexicana de beber agua en jarros de arcilla. Jarritos ha publicado sus bebidas &#x1F379;&nbsp; con sabores a Tutifruti, Guayaba, Jamaica, Limón, Mandarina, Piña, Fresa, Sandía, Mango, Cola, Grapefruit, Agua mineral, Lima-Limón, Manzana, Durazno, Uva y Tamarindo.

### &#x1F4D5;&nbsp; Sabor: 
Jarritos Lime es una bebida refrescante sin alcohol a base de extracto de limón con acidulantes y edulcorantes.   

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.05g, Carbohidratos: 11.7g, Azucares: 11.7g, Proteinas: 0g. Energia: 199kj/47kcal.

---

### &#x1F4D6;&nbsp; Fuente/Quelle: 
http://www.jarritos.mx

---
',
            'image' => 'https://ucarecdn.com/4b43a413-c424-428c-93a4-e816e028ca6a/Lima.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Yerba Mate Pajarito',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Pajarito',
            'teaserde' => '&#x1F4D9;&nbsp; Mate ist eine Art Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erhält.',
            'teaseres' => '&#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Gegen 1950, Herr Lauro Raatz und seine Frau Sara etablierten mit grössten Mühen, Mässigkeit und Glaube, eine Industrie, dessen Produkt, Yerba Mate Pajarito, den nationalen Stolz der paraguayanische Republik beiträgt. Diese Industrie bietet die Yerba &#x1F331;&nbsp; , um typische paraguayanische Erfrischungsgetränke wie der Tararé und Mate zu machen. 

### &#x1F4D9;&nbsp; Herstellung: 
Yerba Mate ist ein Baum &#x1F333;&nbsp; mit einer Höhe zwischen 10 und 15 Metern. Die Ernte der Baumblättern wird zwischen Mai und September &#x1F304;&nbsp; gesammelt. Die Herstellung besteht aus der Gärtnerei (Auswahl der Pflanze, Transplantation, Ernte), die Barbacua (Gärung, Trocknung, Zerkleinerung, Aroma, Labor) und die Vermahlung (Qualitätssicherung, Verpackung).

### &#x1F4D9;&nbsp; Tereré: 
Tereré &#x1F376;&nbsp; wird folgendermassen gemacht: Der Guampa (Vase mit besonderer Form) mit Yerba bis etwa drei Vierteln füllen, danach die Guampa &#x1F376;&nbsp; mit der Hand verdecken und schütteln, um die Yerba &#x1F331;&nbsp; gut zu sortieren und diese in einer geneigten Form zu bilden. Auf der geneigten Form muss etwas kaltes Wasser &#x1F4A7;&nbsp; gegossen werden (oberer Teil der Yerba nicht befeuchten). Danach wird die Bombilla vorsichtig eingesetzt und somit weiteres kaltes Wasser &#x1F4A7;&nbsp; hinzugegeben. Geheimnis: Nicht die Bombilla aus der Anfangsposition bewegen. 

### &#x1F4D9;&nbsp; Mate: 
Mate &#x1F375;&nbsp; wird folgendermassen gemacht: Die Yerba in der Vase der Mate bis etwa drei Vierteln füllen, danach die Vase mit der Hand verdecken und schütteln, um die Yerba gut zu sortieren und diese in einer geneigten Form in der Vase zu bilden. Auf der geneigten Form muss etwas warmes Wasser (70°C) gegossen werden (oberer Teil der Yerba nicht befeuchten). Danach wird die Bombilla vorsichtig eingesetzt und somit weiteres warmes Wasser &#x1F4A7;&nbsp; hinzugeben. Möglichst die Temperatur des Wassers konstant halten (benutzen der Thermoskanne). Geheimnis: Nicht die Bombilla aus der Anfangsposition bewegen.  

### &#x1F4D9;&nbsp; Geschmack: 
Der Geschmack ist bitter, aber er kann mit Zucker, Honig oder ein anderes Süssmittel angepasst werden. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 50g:
Totalen Lipiden: 0g, Salzen: 0.02g, Kohlenhydrate: 10g, Zucker: 0g, Proteine: 1g, Energie: 184kj/44kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Hacia 1950, el Señor Lauro Raatz y su Señora Sara establecieron con grandes esfuerzos, templanza y fe, una industria, cuyo producto, la yerba mate pajarito, exalta el orgullo nacional de la República de Paraguay. Esta industria ofrece la yerba &#x1F331;&nbsp; para hacer bebidas refrescantes típicas paraguayas como el Tararé y el Mate. 

### &#x1F4D5;&nbsp; Elaboración: 
Yerba mate es un árbol &#x1F333;&nbsp; con una altura entre 10 a 15 metros. La cosecha de las hojas del árbol se realiza de forma manual entre mayo y septiembre &#x1F304; . La elaboración consiste en el vivero (selección de plantas de yerba, transplante, cosecha), la barbacúa (fermentación, secado, canchado, aroma, laboratorio) y la molienda (control de calidad, envasado). 

### &#x1F4D5;&nbsp; Tereré: 
El Tereré &#x1F376;&nbsp; se hace de la siguiente manera: Llenar con yerba sólo las tres cuartas partes de la guampa (un vaso de forma peculiar), luego se tapa con la mano y se agita el mate &#x1F331;&nbsp; para que se asiente e incline la yerba hacia un costado dejando un espacio libre. En ese costado vacío vertir un poco de agua fria &#x1F4A7;&nbsp; para comenzar a cebar sin mojar la parte de arriba y dejar que esta absorba el agua &#x1F4A7;&nbsp; . Colocar la bombilla tapando el bocal con el dedo pulgar, introduciéndola bien a fondo, sobre el costado de la yerba &#x1F331;&nbsp; hasta que quede firme. Seguir cebando, agregando agua bien helada. Secreto: no mover la bombilla.

### &#x1F4D5;&nbsp; Mate: 
El Mate &#x1F375;&nbsp; se hace de la siguiente manera: Vertir la yerba &#x1F331;&nbsp; dentro del mate hasta alcanzar aproximadamente las tres cuartas partes del mismo. Tapar con la mano y agitar el mate para que se asiente e incline la yerba hacia un costado dejando un espacio libre. Calentar el agua y cuando ya esté tibia se comienza a cebar en el espacio libre sin humedecer la totalidad de la yerba y dejar reposar. Cuando el agua alcanzó su temperatura óptima ya se puede comenzar a cebar, vertiendo el agua &#x1F4A7;&nbsp; suavemente manteniendo la inclinación de la yerba mate hacia un costado. Mantener el agua a temperatura constante (uso del termo). Secreto: no mover la bombilla. 

### &#x1F4D5;&nbsp; Sabor: 
El sabor suele ser amargo, pero puede ajustarse con azúcar, miel u otro endulzante.  

### &#x1F4D5;&nbsp; Contenido nutricional 50g:
Grasas totales: 0g, Sales: 0.02g, Carbohidratos: 10g, Azucares: 0g, Proteinas: 1g. Energia: 184kj/44kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.pajarito.com.py

---
',
            'image' => 'https://ucarecdn.com/b0cba829-900c-4f3f-b074-b4dfe8dd5dbe/Pajarito.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();                                                                     
        $post = new \App\Models\Post([
            'title' => 'Yerba Mate Campesino Clásica',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CampesinoClasica',
            'teaserde' => '&#x1F4D9;&nbsp; Mate ist eine Art Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erhält.',
            'teaseres' => '&#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Yerba Mate &#x1F333;&nbsp; war ein Geschenk vom Gott "Tupa" &#x1F64F;&nbsp; für das Volk des Guaraní. Die Kräuter wurde den Spaniern während des Kolonialherrschafts offeriert. Die Jesuiten engagierten sich für den Schutz der Guaraní vor Sklavenjägern und der Ausbeutung durch die weiße Oberschicht. Die Jesuiten waren anfangs gegen die Kräuter, da sie dachten, die Yerba seie Kräuter des Teufels &#x1F479; &#x1F602;&nbsp; , da das Getränk aufmunternde Effekte auslöste &#x1F61C; &#x1F4AA;&nbsp; und es aus einem fremden Gott herstammt. Die Kirche &#x026EA;&nbsp; akzeptierte mit der Zeit die Fähigkeiten der Infusion, da das Getränk gegen die Erschöpfung &#x1F634;&nbsp; war, den Körper vitalisierte &#x1F61C;&nbsp; und Krankheiten bekämpfte &#x1F600; . Die Jesuiten waren die ersten, die Techniken für die Ernte der Yerba entwickelten. Die Yerba Mate hat grösstenteils einen höheren Anteil an Vitamin C &#x1F34A;&nbsp; (Askorbinsäure). Die Marke Yerba Mate Campesino wurde von Carlos Mizraji in 1988 gegründet und in der Region Itapúa und Alto Paraná kultiviert. Die Marke hat höheren Prestige in Paraguay. Die Fabrikinstallationen heben die Reinheit und die premium Qualität der ausgewählten Yerba des Guarani Landes hervor.   

### &#x1F4D9;&nbsp; Herstellung: 
Yerba Mate &#x1F333;&nbsp; ist ein Baum mit einer Höhe zwischen 10 und 15 Metern. Die Ernte der Baumblättern wird zwischen Mai und September &#x1F304;&nbsp; gesammelt. Die Herstellung besteht aus der Gärtnerei (Auswahl der Yerba, Transplantation, Ernte), die Barbacua (Gärung, Trocknung, Zerkleinerung, Aroma, Labor) und die Vermahlung (Qualitätssicherung, Verpackung).

### &#x1F4D9;&nbsp; Tereré: 
Tereré &#x1F376;&nbsp; wird folgendermassen gemacht: Der Guampa (Vase mit besonderer Form) mit Yerba bis etwa drei Vierteln füllen, danach die Guampa &#x1F376;&nbsp; mit der Hand verdecken und schütteln, um die Yerba &#x1F331;&nbsp; gut zu sortieren und diese in einer geneigten Form zu bilden. Auf der geneigten Form muss etwas kaltes Wasser &#x1F4A7;&nbsp; gegossen werden (oberer Teil der Yerba nicht befeuchten). Danach wird die Bombilla vorsichtig eingesetzt und somit weiteres kaltes Wasser &#x1F4A7;&nbsp; hinzugegeben. Geheimnis: Nicht die Bombilla aus der Anfangsposition bewegen. 

### &#x1F4D9;&nbsp; Mate: 
Mate &#x1F375;&nbsp; wird folgendermassen gemacht: Die Yerba in der Vase der Mate bis etwa drei Vierteln füllen, danach die Vase mit der Hand verdecken und schütteln, um die Yerba gut zu sortieren und diese in einer geneigten Form bilden. Auf der geneigten Form muss etwas warmes Wasser (70°C) gegossen werden (oberer Teil der Yerba nicht befeuchten). Danach wird die Bombilla vorsichtig eingesetzt und somit weiteres warmes Wasser &#x1F4A7;&nbsp; hinzugeben. Möglichst die Temperatur des Wassers konstant halten (benutzen der Thermoskanne). Geheimnis: Nicht die Bombilla aus der Anfangsposition bewegen.

### &#x1F4D9;&nbsp; Geschmack/Gebrauch: 
Der Geschmack ist bitter, aber er kann mit Zucker, Honig oder ein anderes Süssmittel angepasst werden. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0g, Salzen: 0g, Kohlenhydrate: 9.7g, Zucker: 2.5g, Proteine: 1g, Energie: 197kj/47kcal. 

---

### &#x1F4D5;&nbsp; Historia: 
La Yerba Mate &#x1F333;&nbsp; fue un regalo a los guaraníes del dios "tupa" &#x1F64F; , una bebida que le fue ofrecida a los españoles duránte el descubrimiento de América. Los jesuitas al llegar a América para evangelizar, combatieron la planta considerándola una yerba del demonio &#x1F479; &#x1F602;&nbsp; ya que la bebida era estimulante &#x1F61C; &#x1F4AA;&nbsp; y tenía origen de un falso dios. La iglesia &#x026EA;&nbsp; aceptó con el tiempo las virtudes de la infusión, ya que espantaba el cansancio &#x1F634;&nbsp; , alimentaba el cuerpo &#x1F61C;&nbsp; y tenía la habilidad de curar enfermedades &#x1F600; . Los mismos jesuitas fueron los primeros en desarrollar técnicas de cultivo de la planta. La Yerba Mate tiene una gran fuente de Vitamina C &#x1F34A;&nbsp; (ácido ascorbico). La marca Yerba Mate Campesino fue fundada por Carlos Mizraji en 1988, cultivada la Yerba en la región Itapúa y Alto Paraná. La marca tiene gran prestigio en todo el Paraguay. Las instalaciones de la empresa destacan la pureza y la calidad premium de la más seleccionada yerba del país guaraní.       

### &#x1F4D5;&nbsp; Elaboración: 
La yerba mate &#x1F333;&nbsp; es un árbol con una altura entre 10 a 15 metros. La cosecha de las hojas del árbol se realiza de forma manual entre mayo y septiembre &#x1F304;&nbsp; . La elaboración consiste en el vivero (selección de plantas de yerba, transplante, cosecha), la barbacúa (fermentación, secado, canchado, aroma, laboratorio) y la molienda (control de calidad, envasado). 

### &#x1F4D5;&nbsp; Tereré: 
El Tereré &#x1F376;&nbsp; se hace de la siguiente manera: Llenar con yerba sólo las tres cuartas partes de la guampa (un vaso de forma peculiar), luego se tapa con la mano y se agita el mate &#x1F331;&nbsp; para que se asiente e incline la yerba hacia un costado dejando un espacio libre. En ese costado vacío vertir un poco de agua fria &#x1F4A7;&nbsp; para comenzar a cebar sin mojar la parte de arriba y dejar que esta absorba el agua &#x1F4A7;&nbsp; . Colocar la bombilla tapando el bocal con el dedo pulgar, introduciéndola bien a fondo, sobre el costado de la yerba &#x1F331;&nbsp; hasta que quede firme. Seguir cebando, agregando agua bien helada. Secreto: no mover la bombilla.

### &#x1F4D5;&nbsp; Mate: 
El Mate &#x1F375;&nbsp; se hace de la siguiente manera: Vertir la yerba &#x1F331;&nbsp; dentro del mate hasta alcanzar aproximadamente las tres cuartas partes del mismo. Tapar con la mano y agitar el mate para que se asiente e incline la yerba hacia un costado dejando un espacio libre. Calentar el agua y cuando ya esté tibia se comienza a cebar en el espacio libre sin humedecer la totalidad de la yerba y dejar reposar. Cuando el agua alcanzó su temperatura óptima ya se puede comenzar a cebar, vertiendo el agua &#x1F4A7;&nbsp; suavemente manteniendo la inclinación de la yerba mate hacia un costado. Mantener el agua a temperatura constante (uso del termo). Secreto: no mover la bombilla. 

### &#x1F4D5;&nbsp; Sabor/Uso: 
El sabor suele ser amargo, pero puede ajustarse con azúcar, miel u otro endulzante.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 0g, Sales: 0g, Carbohidratos: 9.7g, Azucares: 2.5g, Proteinas: 1g. Energia: 197kj/47kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.yerbacampesino.com.py

---
',
            'image' => 'https://ucarecdn.com/655e2afe-bff1-4acd-b3a0-776963133b95/CampesinoClasico.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();               
        $post = new \App\Models\Post([
            'title' => 'Yerba Mate Campesino Tradicional',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CampesinoTradicional',
            'teaserde' => '&#x1F4D9;&nbsp; Mate ist eine Art Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erhält. Diese Kräuter verbessern den Leber- und Nierenfunktionszustände.',
            'teaseres' => '&#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable. Actúa excelentemente para mejorar los estados funcionales de los riñones y del hígado.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Yerba Mate &#x1F333;&nbsp; war ein Geschenk vom Gott "Tupa" &#x1F64F;&nbsp; für das Volk des Guaraní. Die Kräuter wurde den Spaniern während des Kolonialherrschafts offeriert. Die Jesuiten engagierten sich für den Schutz der Guaraní vor Sklavenjägern und der Ausbeutung durch die weiße Oberschicht. Die Jesuiten waren anfangs gegen die Kräuter, da sie dachten, die Yerba seie Kräuter des Teufels &#x1F479; &#x1F602;&nbsp; , da das Getränk aufmunternde Effekte auslöste &#x1F61C; &#x1F4AA;&nbsp; und es aus einem fremden Gott herstammt. Die Kirche &#x026EA;&nbsp; akzeptierte mit der Zeit die Fähigkeiten der Infusion, da das Getränk gegen die Erschöpfung &#x1F634;&nbsp; war, den Körper vitalisierte &#x1F61C;&nbsp; und Krankheiten bekämpfte &#x1F600; . Die Jesuiten waren die ersten, die Techniken für die Ernte der Yerba entwickelten. Die Yerba Mate hat grösstenteils einen höheren Anteil an Vitamin C &#x1F34A;&nbsp; (Askorbinsäure). Die Marke Yerba Mate Campesino wurde von Carlos Mizraji in 1988 gegründet und in der Region Itapúa und Alto Paraná kultiviert. Die Marke hat höheren Prestige in Paraguay. Die Fabrikinstallationen heben die Reinheit und die premium Qualität der ausgewählten Yerba des Guarani Landes hervor.   

### &#x1F4D9;&nbsp; Herstellung: 
Die Yerba Mate ist ein Baum mit einer Höhe zwischen 10 und 15 Metern. Die Ernte der Baumblättern wird zwischen Mai und September &#x1F304;&nbsp; gesammelt. Die Herstellung besteht aus der Gärtnerei (Auswahl der Yerba, Transplantation, Ernte), die Barbacua (Gärung, Trocknung, Zerkleinerung, Aroma, Labor) und die Vermahlung (Qualitätssicherung, Verpackung).

### &#x1F4D9;&nbsp; Tereré: 
Tereré &#x1F376;&nbsp; wird folgendermassen gemacht: Der Guampa (Vase mit besonderer Form) mit Yerba bis etwa drei Vierteln füllen, danach die Guampa &#x1F376;&nbsp; mit der Hand verdecken und schütteln, um die Yerba &#x1F331;&nbsp; gut zu sortieren und diese in einer geneigten Form zu bilden. Auf der geneigten Form muss etwas kaltes Wasser &#x1F4A7;&nbsp; gegossen werden (oberer Teil der Yerba nicht befeuchten). Danach wird die Bombilla vorsichtig eingesetzt und somit weiteres kaltes Wasser &#x1F4A7;&nbsp; hinzugegeben. Geheimnis: Nicht die Bombilla aus der Anfangsposition bewegen. 

### &#x1F4D9;&nbsp; Mate: 
Mate &#x1F375;&nbsp; wird folgendermassen gemacht: Die Yerba in der Vase der Mate bis etwa drei Vierteln füllen, danach die Vase mit der Hand verdecken und schütteln, um die Yerba gut zu sortieren und diese in einer geneigten Form in der Vase zu bilden. Auf der geneigten Form muss etwas warmes Wasser (70°C) gegossen werden (oberer Teil der Yerba nicht befeuchten). Danach wird die Bombilla vorsichtig eingesetzt und somit weiteres warmes Wasser &#x1F4A7;&nbsp; hinzugeben. Möglichst die Temperatur des Wassers konstant halten (benutzen der Thermoskanne). Geheimnis: Nicht die Bombilla aus der Anfangsposition bewegen. 

### &#x1F4D9;&nbsp; Geschmack/Gebrauch: 
Minzgeschmack, kann mit Zucker, Honig oder ein anderes Süssmittel angepasst werden. Diese Kräuter verbessern den Leber- und Nierenfunktionszustände.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0g, Salzen: 0g, Kohlenhydrate: 9.7g, Zucker: 2.5g, Proteine: 1g, Energie: 197kj/47kcal. 

---

### &#x1F4D5;&nbsp; Historia: 
La Yerba Mate &#x1F333;&nbsp; fue un regalo a los guaraníes del dios "tupa" &#x1F64F; , una bebida que le fue ofrecida a los españoles duránte el descubrimiento de América. Los jesuitas al llegar a América para evangelizar, combatieron la planta considerándola una yerba del demonio &#x1F479; &#x1F602;&nbsp; ya que la bebida era estimulante &#x1F61C; &#x1F4AA;&nbsp; y tenía origen de un falso dios. La iglesia &#x026EA;&nbsp; aceptó con el tiempo las virtudes de la infusión, ya que espantaba el cansancio &#x1F634;&nbsp; , alimentaba el cuerpo &#x1F61C;&nbsp; y tenía la habilidad de curar enfermedades &#x1F600; . Los mismos jesuitas fueron los primeros en desarrollar técnicas de cultivo de la planta. La Yerba Mate tiene una gran fuente de Vitamina C &#x1F34A;&nbsp; (ácido ascorbico). La marca Yerba Mate Campesino fue fundada por Carlos Mizraji en 1988, cultivada la Yerba en la región Itapúa y Alto Paraná. La marca tiene gran prestigio en todo el Paraguay. Las instalaciones de la empresa destacan la pureza y la calidad premium de la más seleccionada yerba del país guaraní.       

### &#x1F4D5;&nbsp; Elaboración: 
La yerba mate &#x1F333;&nbsp; es un árbol con una altura entre 10 a 15 metros. La cosecha de las hojas del árbol se realiza de forma manual entre mayo y septiembre &#x1F304;&nbsp; . La elaboración consiste en el vivero (selección de plantas de yerba, transplante, cosecha), la barbacúa (fermentación, secado, canchado, aroma, laboratorio) y la molienda (control de calidad, envasado). 

### &#x1F4D5;&nbsp; Tereré: 
El Tereré &#x1F376;&nbsp; se hace de la siguiente manera: Llenar con yerba sólo las tres cuartas partes de la guampa (un vaso de forma peculiar), luego se tapa con la mano y se agita el mate &#x1F331;&nbsp; para que se asiente e incline la yerba hacia un costado dejando un espacio libre. En ese costado vacío vertir un poco de agua fria &#x1F4A7;&nbsp; para comenzar a cebar sin mojar la parte de arriba y dejar que esta absorba el agua &#x1F4A7;&nbsp; . Colocar la bombilla tapando el bocal con el dedo pulgar, introduciéndola bien a fondo, sobre el costado de la yerba &#x1F331;&nbsp; hasta que quede firme. Seguir cebando, agregando agua bien helada. Secreto: no mover la bombilla.

### &#x1F4D5;&nbsp; Mate: 
El Mate &#x1F375;&nbsp; se hace de la siguiente manera: Vertir la yerba &#x1F331;&nbsp; dentro del mate hasta alcanzar aproximadamente las tres cuartas partes del mismo. Tapar con la mano y agitar el mate para que se asiente e incline la yerba hacia un costado dejando un espacio libre. Calentar el agua y cuando ya esté tibia se comienza a cebar en el espacio libre sin humedecer la totalidad de la yerba y dejar reposar. Cuando el agua alcanzó su temperatura óptima ya se puede comenzar a cebar, vertiendo el agua &#x1F4A7;&nbsp; suavemente manteniendo la inclinación de la yerba mate hacia un costado. Mantener el agua a temperatura constante (uso del termo). Secreto: no mover la bombilla. 

### &#x1F4D5;&nbsp; Sabor/Uso: 
Su sabor es a menta, pero puede ajustarse con azúcar, miel u otro endulzante. Actúa excelentemente para mejorar los estados funcionales de los riñones y del hígado.   

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 0g, Sales: 0g, Carbohidratos: 9.7g, Azucares: 2.5g, Proteinas: 1g. Energia: 197kj/47kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.yerbacampesino.com.py

---
',
            'image' => 'https://ucarecdn.com/ce8c09f3-1733-4118-8874-dc730e43a1ef/CampesinoTradicional.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Yerba Mate Campesino Anis',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CampesinoAnis',
            'teaserde' => '&#x1F4D9;&nbsp; Mate ist eine Art Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erhält. Diese Kräuter helfen gegen Verdauungsstörungen.',
            'teaseres' => '&#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable. Estas hierbas ayudan contra malestares digestivos.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Yerba Mate &#x1F333;&nbsp; war ein Geschenk vom Gott "Tupa" &#x1F64F;&nbsp; für das Volk des Guaraní. Die Kräuter wurde den Spaniern während des Kolonialherrschafts offeriert. Die Jesuiten engagierten sich für den Schutz der Guaraní vor Sklavenjägern und der Ausbeutung durch die weiße Oberschicht. Die Jesuiten waren anfangs gegen die Kräuter, da sie dachten, die Yerba seie Kräuter des Teufels &#x1F479; &#x1F602;&nbsp; , da das Getränk aufmunternde Effekte auslöste &#x1F61C; &#x1F4AA;&nbsp; und es aus einem fremden Gott herstammt. Die Kirche &#x026EA;&nbsp; akzeptierte mit der Zeit die Fähigkeiten der Infusion, da das Getränk gegen die Erschöpfung &#x1F634;&nbsp; war, den Körper vitalisierte &#x1F61C;&nbsp; und Krankheiten bekämpfte &#x1F600; . Die Jesuiten waren die ersten, die Techniken für die Ernte der Yerba entwickelten. Die Yerba Mate hat gröstenteils einen höheren Anteil an Vitamin C &#x1F34A;&nbsp; (Askorbinsäure). Die Marke Yerba Mate Campesino wurde von Carlos Mizraji in 1988 gegründet und in der Region Itapúa und Alto Paraná kultiviert. Die Marke hat höheren Prestige in Paraguay. Die Fabrikinstallationen heben die Reinheit und die premium Qualität der ausgewählten Yerba des Guarani Landes hervor.

### &#x1F4D9;&nbsp; Herstellung: 
Die Yerba Mate ist ein Baum mit einer Höhe zwischen 10 und 15 Metern. Die Ernte der Baumblättern wird zwischen Mai und September &#x1F304;&nbsp; gesammelt. Die Herstellung besteht aus der Gärtnerei (Auswahl der Yerba, Transplantation, Ernte), die Barbacua (Gärung, Trocknung, Zerkleinerung, Aroma, Labor) und die Vermahlung (Qualitätssicherung, Verpackung).

### &#x1F4D9;&nbsp; Tereré: 
Tereré &#x1F376;&nbsp; wird folgendermassen gemacht: Der Guampa (Vase mit besonderer Form) mit Yerba bis etwa drei Vierteln füllen, danach die Guampa &#x1F376;&nbsp; mit der Hand verdecken und schütteln, um die Yerba &#x1F331;&nbsp; gut zu sortieren und diese in einer geneigten Form zu bilden. Auf der geneigten Form muss etwas kaltes Wasser &#x1F4A7;&nbsp; gegossen werden (oberer Teil der Yerba nicht befeuchten). Danach wird die Bombilla vorsichtig eingesetzt und somit weiteres kaltes Wasser &#x1F4A7;&nbsp; hinzugegeben. Geheimnis: Nicht die Bombilla aus der Anfangsposition bewegen. 

### &#x1F4D9;&nbsp; Mate: 
Mate &#x1F375;&nbsp; wird folgendermassen gemacht: Die Yerba in der Vase der Mate bis etwa drei Vierteln füllen, danach die Vase mit der Hand verdecken und schütteln, um die Yerba gut zu sortieren und diese in einer geneigten Form in der Vase zu bilden. Auf der geneigten Form muss etwas warmes Wasser (70°C) gegossen werden (oberer Teil der Yerba nicht befeuchten). Danach wird die Bombilla vorsichtig eingesetzt und somit weiteres warmes Wasser &#x1F4A7;&nbsp; hinzugeben. Möglichst die Temperatur des Wassers konstant halten (benutzen der Thermoskanne). Geheimnis: Nicht die Bombilla aus der Anfangsposition bewegen. 

### &#x1F4D9;&nbsp; Geschmack/Gebrauch: 
Diese Art von Kräter hat einen Anisgeschmack, kann mit Zucker, Honig oder ein anderes Süssmittel angepasst werden. Diese Kräuter helfen gegen Verdauungsstörungen.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0g, Salzen: 0g, Kohlenhydrate: 9.7g, Zucker: 2.5g, Proteine: 1g, Energie: 197kj/47kcal. 

---

### &#x1F4D5;&nbsp; Historia: 
La Yerba Mate &#x1F333;&nbsp; fue un regalo a los guaraníes del dios "tupa" &#x1F64F; , una bebida que le fue ofrecida a los españoles duránte el descubrimiento de América. Los jesuitas al llegar a América para evangelizar, combatieron la planta considerándola una yerba del demonio &#x1F479; &#x1F602;&nbsp; ya que la bebida era estimulante &#x1F61C; &#x1F4AA;&nbsp; y tenía origen de un falso dios. La iglesia &#x026EA;&nbsp; aceptó con el tiempo las virtudes de la infusión, ya que espantaba el cansancio &#x1F634;&nbsp; , alimentaba el cuerpo &#x1F61C;&nbsp; y tenía la habilidad de curar enfermedades &#x1F600; . Los mismos jesuitas fueron los primeros en desarrollar técnicas de cultivo de la planta. La Yerba Mate tiene una gran fuente de Vitamina C &#x1F34A;&nbsp; (ácido ascorbico). La marca Yerba Mate Campesino fue fundada por Carlos Mizraji en 1988, cultivada la Yerba en la región Itapúa y Alto Paraná. La marca tiene gran prestigio en todo el Paraguay. Las instalaciones de la empresa destacan la pureza y la calidad premium de la más seleccionada yerba del país guaraní.       

### &#x1F4D5;&nbsp; Elaboración: 
La yerba mate &#x1F333;&nbsp; es un árbol con una altura entre 10 a 15 metros. La cosecha de las hojas del árbol se realiza de forma manual entre mayo y septiembre &#x1F304;&nbsp; . La elaboración consiste en el vivero (selección de plantas de yerba, transplante, cosecha), la barbacúa (fermentación, secado, canchado, aroma, laboratorio) y la molienda (control de calidad, envasado). 

### &#x1F4D5;&nbsp; Tereré: 
El Tereré &#x1F376;&nbsp; se hace de la siguiente manera: Llenar con yerba sólo las tres cuartas partes de la guampa (un vaso de forma peculiar), luego se tapa con la mano y se agita el mate &#x1F331;&nbsp; para que se asiente e incline la yerba hacia un costado dejando un espacio libre. En ese costado vacío vertir un poco de agua fria &#x1F4A7;&nbsp; para comenzar a cebar sin mojar la parte de arriba y dejar que esta absorba el agua &#x1F4A7;&nbsp; . Colocar la bombilla tapando el bocal con el dedo pulgar, introduciéndola bien a fondo, sobre el costado de la yerba &#x1F331;&nbsp; hasta que quede firme. Seguir cebando, agregando agua bien helada. Secreto: no mover la bombilla.

### &#x1F4D5;&nbsp; Mate: 
El Mate &#x1F375;&nbsp; se hace de la siguiente manera: Vertir la yerba &#x1F331;&nbsp; dentro del mate hasta alcanzar aproximadamente las tres cuartas partes del mismo. Tapar con la mano y agitar el mate para que se asiente e incline la yerba hacia un costado dejando un espacio libre. Calentar el agua y cuando ya esté tibia se comienza a cebar en el espacio libre sin humedecer la totalidad de la yerba y dejar reposar. Cuando el agua alcanzó su temperatura óptima ya se puede comenzar a cebar, vertiendo el agua &#x1F4A7;&nbsp; suavemente manteniendo la inclinación de la yerba mate hacia un costado. Mantener el agua a temperatura constante (uso del termo). Secreto: no mover la bombilla. 

### &#x1F4D5;&nbsp; Sabor/Uso: 
Este tipo de Mate tiene un sabor a Anis, puede ajustarse con azúcar, miel u otro endulzante. Estas hierbas ayudan contra malestares digestivos.

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 0g, Sales: 0g, Carbohidratos: 9.7g, Azucares: 2.5g, Proteinas: 1g. Energia: 197kj/47kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.yerbacampesino.com.py

---
',
            'image' => 'https://ucarecdn.com/ddc33c00-2bb1-4925-85bb-a3c37d47471d/CampesinoAnis.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();   
        $post = new \App\Models\Post([
            'title' => 'Kurupi Fitness',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'KurupiFitness',
            'teaserde' => '&#x1F4D9;&nbsp; Mate ist eine Art Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erhält. Diese Yerba Mate ist besonders für Sport und Diäten, reduziert den Appetit und verbessert die Darmtätigkeit.',
            'teaseres' => '&#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable. Esta Yerba Mate es especializada para deporte y dietas, reduce el apetito y mejora el tránsito intestinal.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Yerba Mate &#x1F333;&nbsp; war ein Geschenk vom Gott "Tupa" &#x1F64F;&nbsp; für das Volk des Guaraní. Die Kräuter wurde den Spaniern während des Kolonialherrschafts offeriert. Die Jesuiten engagierten sich für den Schutz der Guaraní vor Sklavenjägern und der Ausbeutung durch die weiße Oberschicht. Die Jesuiten waren anfangs gegen die Kräuter, da sie dachten, die Yerba seie Kräuter des Teufels &#x1F479; &#x1F602;&nbsp; , da das Getränk aufmunternde Effekte auslöste &#x1F61C; &#x1F4AA;&nbsp; und es aus einem fremden Gott herstammt. Die Kirche &#x026EA;&nbsp; akzeptierte mit der Zeit die Fähigkeiten der Infusion, da das Getränk gegen die Erschöpfung &#x1F634;&nbsp; war, den Körper vitalisierte &#x1F61C;&nbsp; und Krankheiten bekämpfte &#x1F600; . Die Jesuiten waren die ersten, die Techniken für die Ernte der Yerba entwickelten. Die Yerba Mate hat gröstenteils einen höheren Anteil an Vitamin C &#x1F34A;&nbsp; (Askorbinsäure). Die Marke Yerba Mate Campesino wurde von Carlos Mizraji in 1988 gegründet und in der Region Itapúa und Alto Paraná kultiviert. Die Marke hat höheren Prestige in Paraguay. Die Fabrikinstallationen heben die Reinheit und die premium Qualität der ausgewählten Yerba des Guarani Landes hervor.  

### &#x1F4D9;&nbsp; Herstellung: 
Die Yerba Mate ist ein Baum mit einer Höhe zwischen 10 und 15 Metern. Die Ernte der Baumblättern wird zwischen Mai und September &#x1F304;&nbsp; gesammelt. Die Herstellung besteht aus der Gärtnerei (Auswahl der Yerba, Transplantation, Ernte), die Barbacua (Gärung, Trocknung, Zerkleinerung, Aroma, Labor) und die Vermahlung (Qualitätssicherung, Verpackung).

### &#x1F4D9;&nbsp; Tereré: 
Tereré &#x1F376;&nbsp; wird folgendermassen gemacht: Der Guampa (Vase mit besonderer Form) mit Yerba bis etwa drei Vierteln füllen, danach die Guampa &#x1F376;&nbsp; mit der Hand verdecken und schütteln, um die Yerba &#x1F331;&nbsp; gut zu sortieren und diese in einer geneigten Form zu bilden. Auf der geneigten Form muss etwas kaltes Wasser &#x1F4A7;&nbsp; gegossen werden (oberer Teil der Yerba nicht befeuchten). Danach wird die Bombilla vorsichtig eingesetzt und somit weiteres kaltes Wasser &#x1F4A7;&nbsp; hinzugegeben. Geheimnis: Nicht die Bombilla aus der Anfangsposition bewegen. 

### &#x1F4D9;&nbsp; Mate: 
Mate &#x1F375;&nbsp; wird folgendermassen gemacht: Die Yerba in der Vase der Mate bis etwa drei Vierteln füllen, danach die Vase mit der Hand verdecken und schütteln, um die Yerba gut zu sortieren und diese in einer geneigten Form in der Vase zu bilden. Auf der geneigten Form muss etwas warmes Wasser (70°C) gegossen werden (oberer Teil der Yerba nicht befeuchten). Danach wird die Bombilla vorsichtig eingesetzt und somit weiteres warmes Wasser &#x1F4A7;&nbsp; hinzugeben. Möglichst die Temperatur des Wassers konstant halten (benutzen der Thermoskanne). Geheimnis: Nicht die Bombilla aus der Anfangsposition bewegen. 

### &#x1F4D9;&nbsp; Geschmack/Gebrauch: 
Orangegeschmack, kann mit Zucker, Honig oder ein anderes Süssmittel angepasst werden. Diese Yerba Mate ist besonders für Sport &#x026F5;&nbsp; und Diäten &#x1F37C; , reduziert den Appetit und verbessert die Darmtätigkeit. Sehr gut gegen Verstopfung.  

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0.025g, Salzen: 4.78mg, Kohlenhydrate: 0.7g, Zucker: 0g, Proteine: 0.2g, Ballaststoffe: 1.6g, Energie: 17kj/4kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La Yerba Mate &#x1F333;&nbsp; fue un regalo a los guaraníes del dios "tupa" &#x1F64F; , una bebida que le fue ofrecida a los españoles duránte el descubrimiento de América. Los jesuitas al llegar a América para evangelizar, combatieron la planta considerándola una yerba del demonio &#x1F479; &#x1F602;&nbsp; ya que la bebida era estimulante &#x1F61C; &#x1F4AA;&nbsp; y tenía origen de un falso dios. La iglesia &#x026EA;&nbsp; aceptó con el tiempo las virtudes de la infusión, ya que espantaba el cansancio &#x1F634;&nbsp; , alimentaba el cuerpo &#x1F61C;&nbsp; y tenía la habilidad de curar enfermedades &#x1F601; . Los mismos jesuitas fueron los primeros en desarrollar técnicas de cultivo de la planta. La Yerba Mate tiene una gran fuente de Vitamina C &#x1F34A;&nbsp; (ácido ascorbico). La marca Yerba Mate Campesino fue fundada por Carlos Mizraji en 1988, cultivada la Yerba en la región Itapúa y Alto Paraná. La marca tiene gran prestigio en todo el Paraguay. Las instalaciones de la empresa destacan la pureza y la calidad premium de la más seleccionada yerba del país guaraní.       

### &#x1F4D5;&nbsp; Elaboración: 
La yerba mate &#x1F333;&nbsp; es un árbol con una altura entre 10 a 15 metros. La cosecha de las hojas del árbol se realiza de forma manual entre mayo y septiembre &#x1F304;&nbsp; . La elaboración consiste en el vivero (selección de plantas de yerba, transplante, cosecha), la barbacúa (fermentación, secado, canchado, aroma, laboratorio) y la molienda (control de calidad, envasado).  

### &#x1F4D5;&nbsp; Tereré: 
El Tereré &#x1F376;&nbsp; se hace de la siguiente manera: Llenar con yerba sólo las tres cuartas partes de la guampa (un vaso de forma peculiar), luego se tapa con la mano y se agita el mate &#x1F331;&nbsp; para que se asiente e incline la yerba hacia un costado dejando un espacio libre. En ese costado vacío vertir un poco de agua fria &#x1F4A7;&nbsp; para comenzar a cebar sin mojar la parte de arriba y dejar que esta absorba el agua &#x1F4A7;&nbsp; . Colocar la bombilla tapando el bocal con el dedo pulgar, introduciéndola bien a fondo, sobre el costado de la yerba &#x1F331;&nbsp; hasta que quede firme. Seguir cebando, agregando agua bien helada. Secreto: no mover la bombilla.

### &#x1F4D5;&nbsp; Mate: 
El Mate &#x1F375;&nbsp; se hace de la siguiente manera: Vertir la yerba &#x1F331;&nbsp; dentro del mate hasta alcanzar aproximadamente las tres cuartas partes del mismo. Tapar con la mano y agitar el mate para que se asiente e incline la yerba hacia un costado dejando un espacio libre. Calentar el agua y cuando ya esté tibia se comienza a cebar en el espacio libre sin humedecer la totalidad de la yerba y dejar reposar. Cuando el agua alcanzó su temperatura óptima ya se puede comenzar a cebar, vertiendo el agua &#x1F4A7;&nbsp; suavemente manteniendo la inclinación de la yerba mate hacia un costado. Mantener el agua a temperatura constante (uso del termo). Secreto: no mover la bombilla. 

### &#x1F4D9;&nbsp; Sabor/Uso: 
El sabor suele ser amargo, pero puede ajustarse con azúcar, miel u otro endulzante. Esta Yerba Mate es especializada para deporte &#x026F5;&nbsp; y dietas &#x1F37C; , reduce el apetito y mejora el tránsito intestinal. Muy bueno contra el estreñimiento.

### Contenido nutricional 100g:
&#x1F4D5;&nbsp; Grasas totales: 0.025g, Sales: 4.78mg, Carbohidratos: 0.7g, Azucares: 0g, Proteinas: 0.2g, Fibra: 1.6g, Energia: 17kj/4kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.santamargarita.com.py

---
',
            'image' => 'https://ucarecdn.com/0296b3e4-f31c-4aee-a6d5-c7ea8f51d4f8/Fitness.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Kurupi Menta y Boldo',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'KurupiClasica',
            'teaserde' => '&#x1F4D9;&nbsp; Mate ist eine Art Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erreicht. Diese Yerba Mate ist besonders für Sport und Diäten. Geeignet gegen Verdauungsstörungen wie Gastritis.',
            'teaseres' => '&#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable. Esta Yerba Mate es especializada para deporte y dietas. Posee propiedades digestivas, pues ofrecen una acción antiácida.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Yerba Mate &#x1F333;&nbsp; war ein Geschenk vom Gott "Tupa" &#x1F64F;&nbsp; für das Volk des Guaraní. Die Kräuter wurde den Spaniern während des Kolonialherrschafts offeriert. Die Jesuiten engagierten sich für den Schutz der Guaraní vor Sklavenjägern und der Ausbeutung durch die weiße Oberschicht. Die Jesuiten waren anfangs gegen die Kräuter, da sie dachten, die Yerba seie Kräuter des Teufels &#x1F479; &#x1F602;&nbsp; , da das Getränk aufmunternde Effekte auslöste &#x1F61C; &#x1F4AA;&nbsp; und es aus einem fremden Gott herstammt. Die Kirche &#x026EA;&nbsp; akzeptierte mit der Zeit die Fähigkeiten der Infusion, da das Getränk gegen die Erschöpfung &#x1F634;&nbsp; war, den Körper vitalisierte &#x1F61C;&nbsp; und Krankheiten bekämpfte &#x1F600; . Die Jesuiten waren die ersten, die Techniken für die Ernte der Yerba entwickelten. Die Yerba Mate hat gröstenteils einen höheren Anteil an Vitamin C &#x1F34A;&nbsp; (Askorbinsäure). Die Marke Yerba Mate Campesino wurde von Carlos Mizraji in 1988 gegründet und in der Region Itapúa und Alto Paraná kultiviert. Die Marke hat höheren Prestige in Paraguay. Die Fabrikinstallationen heben die Reinheit und die premium Qualität der ausgewählten Yerba des Guarani Landes hervor.  

### &#x1F4D9;&nbsp; Herstellung: 
Die Yerba Mate ist ein Baum mit einer Höhe zwischen 10 und 15 Metern. Die Ernte der Baumblättern wird zwischen Mai und September &#x1F304;&nbsp; gesammelt. Die Herstellung besteht aus der Gärtnerei (Auswahl der Yerba, Transplantation, Ernte), die Barbacua (Gärung, Trocknung, Zerkleinerung, Aroma, Labor) und die Vermahlung (Qualitätssicherung, Verpackung).

### &#x1F4D9;&nbsp; Tereré: 
Tereré &#x1F376;&nbsp; wird folgendermassen gemacht: Der Guampa (Vase mit besonderer Form) mit Yerba bis etwa drei Vierteln füllen, danach die Guampa &#x1F376;&nbsp; mit der Hand verdecken und schütteln, um die Yerba &#x1F331;&nbsp; gut zu sortieren und diese in einer geneigten Form zu bilden. Auf der geneigten Form muss etwas kaltes Wasser &#x1F4A7;&nbsp; gegossen werden (oberer Teil der Yerba nicht befeuchten). Danach wird die Bombilla vorsichtig eingesetzt und somit weiteres kaltes Wasser &#x1F4A7;&nbsp; hinzugegeben. Geheimnis: Nicht die Bombilla aus der Anfangsposition bewegen. 

### &#x1F4D9;&nbsp; Mate: 
Mate &#x1F375;&nbsp; wird folgendermassen gemacht: Die Yerba in der Vase der Mate bis etwa drei Vierteln füllen, danach die Vase mit der Hand verdecken und schütteln, um die Yerba gut zu sortieren und diese in einer geneigten Form in der Vase zu bilden. Auf der geneigten Form muss etwas warmes Wasser (70°C) gegossen werden (oberer Teil der Yerba nicht befeuchten). Danach wird die Bombilla vorsichtig eingesetzt und somit weiteres warmes Wasser &#x1F4A7;&nbsp; hinzugeben. Möglichst die Temperatur des Wassers konstant halten (benutzen der Thermoskanne). Geheimnis: Nicht die Bombilla aus der Anfangsposition bewegen.

### &#x1F4D9;&nbsp; Geschmack/Gebrauch: 
Der Geschmack ist bitter, aber er kann mit Zucker, Honig oder ein anderes Süssmittel angepasst werden. Diese Yerba Mate ist besonders für Sport &#x026F5;&nbsp; und Diäten &#x1F37C; . Geeignet gegen Verdauungsstörungen wie Gastritis.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0.025g, Salzen: 4.78mg, Kohlenhydrate: 0.7g, Zucker: 0g, Proteine: 0.2g, Ballaststoffe: 1.6g, Energie: 17kj/4kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La Yerba Mate &#x1F333;&nbsp; fue un regalo a los guaraníes del dios "tupa" &#x1F64F; , una bebida que le fue ofrecida a los españoles duránte el descubrimiento de América. Los jesuitas al llegar a América para evangelizar, combatieron la planta considerándola una yerba del demonio &#x1F479; &#x1F602;&nbsp; ya que la bebida era estimulante &#x1F61C; &#x1F4AA;&nbsp; y tenía origen de un falso dios. La iglesia &#x026EA;&nbsp; aceptó con el tiempo las virtudes de la infusión, ya que espantaba el cansancio &#x1F634;&nbsp; , alimentaba el cuerpo &#x1F61C;&nbsp; y tenía la habilidad de curar enfermedades &#x1F601; . Los mismos jesuitas fueron los primeros en desarrollar técnicas de cultivo de la planta. La Yerba Mate tiene una gran fuente de Vitamina C &#x1F34A;&nbsp; (ácido ascorbico). La marca Yerba Mate Campesino fue fundada por Carlos Mizraji en 1988, cultivada la Yerba en la región Itapúa y Alto Paraná. La marca tiene gran prestigio en todo el Paraguay. Las instalaciones de la empresa destacan la pureza y la calidad premium de la más seleccionada yerba del país guaraní.       

### &#x1F4D5;&nbsp; Elaboración: 
La yerba mate &#x1F333;&nbsp; es un árbol con una altura entre 10 a 15 metros. La cosecha de las hojas del árbol se realiza de forma manual entre mayo y septiembre &#x1F304;&nbsp; . La elaboración consiste en el vivero (selección de plantas de yerba, transplante, cosecha), la barbacúa (fermentación, secado, canchado, aroma, laboratorio) y la molienda (control de calidad, envasado). 

### &#x1F4D5;&nbsp; Tereré: 
El Tereré &#x1F376;&nbsp; se hace de la siguiente manera: Llenar con yerba sólo las tres cuartas partes de la guampa (un vaso de forma peculiar), luego se tapa con la mano y se agita el mate &#x1F331;&nbsp; para que se asiente e incline la yerba hacia un costado dejando un espacio libre. En ese costado vacío vertir un poco de agua fria &#x1F4A7;&nbsp; para comenzar a cebar sin mojar la parte de arriba y dejar que esta absorba el agua &#x1F4A7;&nbsp; . Colocar la bombilla tapando el bocal con el dedo pulgar, introduciéndola bien a fondo, sobre el costado de la yerba &#x1F331;&nbsp; hasta que quede firme. Seguir cebando, agregando agua bien helada. Secreto: no mover la bombilla.

### &#x1F4D5;&nbsp; Mate: 
El Mate &#x1F375;&nbsp; se hace de la siguiente manera: Vertir la yerba &#x1F331;&nbsp; dentro del mate hasta alcanzar aproximadamente las tres cuartas partes del mismo. Tapar con la mano y agitar el mate para que se asiente e incline la yerba hacia un costado dejando un espacio libre. Calentar el agua y cuando ya esté tibia se comienza a cebar en el espacio libre sin humedecer la totalidad de la yerba y dejar reposar. Cuando el agua alcanzó su temperatura óptima ya se puede comenzar a cebar, vertiendo el agua &#x1F4A7;&nbsp; suavemente manteniendo la inclinación de la yerba mate hacia un costado. Mantener el agua a temperatura constante (uso del termo). Secreto: no mover la bombilla. 


### &#x1F4D9;&nbsp; Sabor/Uso: 
El sabor suele ser amargo, pero puede ajustarse con azúcar, miel u otro endulzante. Esta Yerba Mate es especializada para deporte &#x026F5;&nbsp; y dietas &#x1F37C; . Posee propiedades digestivas, pues ofrecen una acción antiácida.


### Contenido nutricional 100g:
&#x1F4D5;&nbsp; Grasas totales: 0.025g, Sales: 4.78mg, Carbohidratos: 0.7g, Azucares: 0g, Proteinas: 0.2g, Fibra: 1.6g, Energia: 17kj/4kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.santamargarita.com.py

---
',
            'image' => 'https://ucarecdn.com/0d6280f8-f651-49b4-be3f-265bf5762335/KurupiMenta.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Pony Malta',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'PonyMalta',
            'teaserde' => '&#x1F4D9;&nbsp; Pony Malta ist ein alkoholfreies, kohlensäurehaltiges Erfrischungsgetränk aus Malzextrakt.',
            'teaseres' => '&#x1F4D5;&nbsp; Pony Malta es una bebida gaseosa refrescante no alcohólica a base de malta.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Die Brauerei Bavaria erschaffte Pony Malta &#x1F434; &#x1F602;&nbsp; in 1953. Die Brauerei wollte ein nährstoffreiches Getränk zum hohem Energiezufuhr wie die bereits erschaffte Maltin Polar aus Venezuela. In 1956 entsteht den Slogan "Pony Malta, das Meistergetränk". Sei 1985 beginnt die Pony-Fussball &#x026BD; , ein Kinderprojekt zur pädagogischen und erzieherischen Zwecken. Pony Malta &#x1F434; &#x1F602;&nbsp; verknüpft das Sponsoring aller kolumbianischen Sportarten wie Radfahren &#x1F6B2; , Tennis &#x1F3BE; , Fussball &#x026BD; , Motorsport &#x1F697; , und vieles mehr.

### &#x1F4D9;&nbsp; Geschmack: 
Pony Malta &#x1F434;&nbsp; ist aus Wasser, Zuckern, Gerstenmalz, Vitaminen, Farbstoffen, Säuerungsmitteln, Aromastoffen und Emulsionsmitteln. Es hat keine Konservierungsmitteln und sichert seine Konservierung durch die Pasteurisierung.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0.1g, Salzen: 0.01g, Kohlenhydrate: 10g, Zucker: 9.2g, Proteine: 0.4g, Energie: 180kj/42kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La cervecería Bavaria creó Pony Malta &#x1F434; &#x1F602;&nbsp; en 1953. La cervecería quiso establecer una bebida nutritiva de alto aporte energético como la ya creada Maltin Polar de Venezuela. En 1956 nace el eslogan "Pony Malta, bebida de campeones". En 1985 comienza la Pony fútbol &#x026BD; , el evento de fútbol infantil, reconocido por sus eventos educativos a través del deporte. Pony Malta &#x1F434; &#x1F602;&nbsp; ha sido asociada como patrocinador a todos los deportes colombianos como el ciclismo &#x1F6B2; , el tenis &#x1F3BE; , el fútbol &#x026BD;, el automovilismo &#x1F697; , y entre otros más. 

### &#x1F4D5;&nbsp; Sabor: 
Pony Malta &#x1F434;&nbsp; se elabora a base de agua, azúcar, malta de cebada, vitaminas, colorante caramelo, acidulantes, aromatizantes y emulsificantes. No contiene conservantes químicos y se asegura su conservación mediánte la pasteurización.

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0.1g, Sales: 0.01g, Carbohidratos: 10g, Azucares: 9.2g, Proteinas: 0.4g. Energia: 180kj/42kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.ponymalta.com.co

---
',
            'image' => 'https://ucarecdn.com/20a3e73c-a7ca-4b08-90d2-46b44dc523e3/PonyMalta.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Harina P.A.N',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'HarinaPanAmarilla',
            'teaserde' => '&#x1F4D9;&nbsp; Glutenfreies Produkt aus reiner Maisstärke. Es hat keine Konservierungsmitteln noch Farbstoffe. Es entsteht eine Masse dank der Wandlungsfähigkeit durch Wasserzugabe.',
            'teaseres' => '&#x1F4D5;&nbsp; Producto único de maíz puro libre de glutén. No tiene conservantes ni colorantes. Se produce una masa al instante con sólo agregar agua, gracias a su versatilidad.',
            'body' => '---

### &#x1F4D9;&nbsp; Gebrauch:
Die Harina P.A.N (productos alimenticios nacionales) ist eine Marke der venezolanische Kapitalgesellschaft Empresas Polar für die Identifizierung der vorgekochten Maismehl &#x1F33D;&nbsp; zwecks der Zubereitung von Arepas, Hallacas, Hallaquitas und andere traditionellen Gerichten Venezuelas.

### &#x1F4D9;&nbsp; Geschichte:
Luis Caballero Mejías erhielt das Patent in 1954 von der damaligen genannten Republik Venezuela aufgrund seiner durchgeführten Experimenten für die Industrialisierung der Produktion der Maismehl &#x1F33D; . Der gewünschte Teig für die Zubereitung traditioneller Gerichten aus Mais &#x1F33D;&nbsp; wurde früher durch Zerkleinerung der Maiskörner in einem Mörser (pilón) gemacht. Caballero aufgrund ökonomischen und politischen Gründe verkauft das Patent an Brauerei Polar &#x1F37B;&nbsp; und Remavenca. Die Polar Unternehmen breiteten die Produktion durch neuen Maschinen für die Fertigung der vorgekochten Maismehl aus. Gegen 1960 wurde das Produkt als Harina P.A.N vermarktet, auf dessen Verpackung das Bild der portugiesischen Sängerin Carmen Miranda &#x1F469;&nbsp; zu sehen ist. Die Polar Unternehmen formalisierten in 1996 eine Allianz mit dem kolumbianischen Unternehmen Promasa. Die Verpackung besteht aus biaxialorientiertem Polypropylen. 

### &#x1F4D9;&nbsp; Varianten: 
Harina P.A.N: Maismehl Gelb. Harina P.A.N: Gemisch extra-mild Weissmehl (Weissmehl und Reis). Harina P.A.N: Gemisch zum Braten. Harina P.A.N: Vollkornes Gemisch. Harina P.A.N: Maismehl Gelb. Harina P.A.N: Cachapas. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 1.94g, Salzen: 0.01g, Kohlenhydrate: 79.96g, Zucker: 0g, Ballaststoffe: 5.35g, Proteine: 7.98g, Energie: 1545kj/369kcal. 

---

### &#x1F4D5;&nbsp; Uso:
La Harina P.A.N (productos alimenticios nacionales) es una marca de la corporación venezolana Empresas Polar para identificar harina de maíz &#x1F33D;&nbsp; precocida para fín de preparar arepas, hallacas, hallaquitas y otros platos típicos de Venezuela.

### &#x1F4D5;&nbsp; Historia:
Luis Caballero Mejías obtuvo la patente en 1954 de la entonces llamada República de Venezuela, por los experimentos realizados para industrializar la producción de la masa de maíz &#x1F33D; . Hasta entonces esta masa era producida mediánte el machacado de granos de maíz &#x1F33D;&nbsp; en un pilón, una especie de mortero y mazo. Caballero por motivos económicos y políticos vende la patente a las empresas Cervecería Polar &#x1F37B;&nbsp; y Remavenca. Las empresas Polar expandieron la produción mediánte la instalación de máquinas para la fabricación de harina de maíz precocida. En 1960 fue presentado el producto como Harina P.A.N, de cuya imágen de empaque aparece la cantante portuguesa Carmen Miranda &#x1F469; . En 1996 Empresas Polar formalizó una alianza en Colombia con la empresa de productos de maíz (Promasa). El empaque de papel es polipropileno biorientado. 

### &#x1F4D5;&nbsp; Variantes: 
Harina P.A.N: Maíz blanco. Harina P.A.N: Mezcla extra-suave blanca (maíz blanco y arroz). Harina P.A.N: Mezcla para freír. Harina P.A.N: Mezcla integral. Harina P.A.N: Maíz amarillo. Harina P.A.N: Cachapas.

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 1.94g, Sales: 0.01g, Carbohidratos: 79.96g, Azucares: 0g, Fibra: 5.35g, Proteinas: 7.98g. Energia: 1545kj/369kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.wikipedia.org

---
',
            'image' => 'https://ucarecdn.com/f6067461-eeb0-42cf-90be-cc7d4ae7509f/PAN.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Harina para Tamal',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'HarinaTamal',
            'teaserde' => '&#x1F4D9;&nbsp; Tamal ist ein mesoamerikanisches Gericht bestehend aus einem Maisteig und gefüllt mit Fleisch, Käse und/oder andere Zutaten. Es wird in Pflanzen- oder Bananenblätter eingehüllt gedämpft. Tamal wurde von den Mayas und Azteken zubereitet.',
            'teaseres' => '&#x1F4D5;&nbsp; Tamal es un plato mesoamericano que consiste de una masa de maíz con carne, queso y/o otros ingredientes y envuelto en hojas de plantas de maíz o plátano, donde se cocinado y preparado para su consumo. Tamal fue preparado por los Mayas y los Aztecas.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Es gibt Evidenz im Mesoamerikanischen Gebiet über die präkolumbianischen Kulturen, die der Mais, Gerichte und Kocharten mit anderen Kulturen Lateinamerikas teilten. Gemäss der Wissenschaftlern, datieren die Tamales das Jahr 100 vor Christus aus Referenzen wie die Wandmalereien von San Bertolo, in Petén, Guatemala. Die Tamales waren Teil der alltäglichen Aktivitäten einiger prähispanischen Kulturen Mexikos wie religiösen Ritualen, Opfergaben und Grabstätten &#x1F64F; . Für den Fall der Maya Hochkultur sind Skulpturen und Wandmalereien zwischen der klassischen und frühpostklassischen Zeitspanne zu finden.   

### &#x1F4D9;&nbsp; Tamales:
Der Name "Tamales" kommt ursprünglich aus der Sprache der Indernvölkern Nahuatl "tamalli". Die Zubereitung von Tamales ist relativ arbeitsintensiv. Der Maisteig &#x1F33D; , der oft mit Schmalz versetzt ist, auf ein Pflanzenblatt (meist Mais- oder Bananenblätter) gestrichen. Die Füllung wird entlang der Länge nach in der Mitte des Blattes platziert; Fleisch ist Bestandteil der Füllung und soll vorgekocht sein. Die Seiten des Blattes werden zur Mitte hingefaltet und für eine Stunde gedämpft bis der Teig eine kuchenähnliche Konsistenz aufweist. Einmal zubereitet, können die Tamales tiefgefroren werden und nach Bedarf aufgewärmt werden. Die Zubereitung ist oft ein Ereignis, bei dem sich Freunde und Familie treffen.  

### &#x1F4D9;&nbsp; Neugierde: 
"Tamal" in Mexiko, Argentinien, Costa Rica, El Salvador, USA, Guatemala, Panama und Kolumbien. "Hallaca" in Venezuela, Ecuador y Cuba. "Bollo" en Belice. "Tamal" wenn salzig oder "Huminta" wenn süss in Peru und Bolivien. "Tamal" wenn diese mit Bananenblätter und "humitas" wenn mit Maisblätter gestrichen sind. "Nacatamal" in Nicaragua. "Humita" in Chile. "Blattkuchen" in der Dominikanischen Republik. "Montucas" in Honduras. In Mexiko gibt es viele Namen wie "tzotobilchay", "Eselpföte", "chak chak wah", "uchepos" und andere. 

### &#x1F4D9;&nbsp; Nährstoffgehalt:
Totalen Lipiden: 6.5g, Salzen: 0g, Kohlenhydrate: 71g, Zucker: 0g, Proteine: 9g, Energie: 1595kj/381kcal. 

---

### &#x1F4D5;&nbsp; Historia: 
Hay evidencia de culturas predominantes en la región de Mesoamérica que llevaron además del maíz &#x1F33D; , platos y formas de cocinar a otras culturas. Es muy probable que el tamal haya sido llevado desde México a América Central y del Sur. Según los científicos, los tamales datan del año 100 a.C. tomándo referencia de los Murales de San Bertolo, en Petén, Guatemala. El tamal hizo parte de la vida cotidiana de algunas culturas prehispánicas de México, usándosen en rituales religiosos, ofrendas y tumbas &#x1F64F; . En el caso de los mayas existen esculturas y pinturas de los periodos mayas clásico y postclásico temprano. 

### &#x1F4D5;&nbsp; Tamal:
El tamal (del Nahuatl Tamalli), nombre dado a platos genéricos americanos de orígen indígena preparados con masa de maíz &#x1F33D;&nbsp; cocida normalmente al vapor, envuelto en hojas de la mazorca de la misma planta del maíz, banano, maguey, aguacate e incluso aluminio. El tamal puede o no llevar relleno, cuyo contenido es carne, vegetales, chile, frutas, etc. El tamal puede ser dulce o salado. El tamal es de orígen centroamericano. La preparación de los tamales suele ser un evento de amigos y familiares. 

### &#x1F4D5;&nbsp; Curiosidades: 
"Tamal" en México, Argentina, Costa Rica, El Salvador, Estados Unidos, Guatemala, Panamá y Colombia. "Hallaca" en Venezuela, Ecuador y Cuba. "Bollo" en Bélice. "Tamal" si es salado o "Huminta" si es dulce en Perú y Bolivia. "Tamal" si están envueltas en hojas de plátano y "humitas" si están envueltas en hojas de maíz. "Nacatamal" en Nicaragua. "Humita" en Chile. "Pasteles de Hoja" en la República Dominicana. "Montucas" en Honduras. En México hay demasiados nombres, entre ellos "tzotobilchay", "pata de burro", "chak chak wah", "uchepos", entre otros.  

### &#x1F4D5;&nbsp; Contenido nutricional:
Totalen Lipiden: 6.5g, Salzen: 0g, Kohlenhydrate: 71g, Zucker: 0g, Proteine: 9g, Energie: 1595kj/381kcal. 

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.wikipedia.org

---
',
            'image' => 'https://ucarecdn.com/79d3604f-df08-478e-af5a-4d7b5b773f68/Tamal.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();       
        $post = new \App\Models\Post([
            'title' => 'Mermelada Guayaba',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'MermeladaPaclan',
            'teaserde' => '&#x1F4D9;&nbsp; Probiere die Marmelade mit einzigartigem Guavegeschmack. Die Zusammensetzung liegt zwischen Gelee und Konfitüre.',
            'teaseres' => '&#x1F4D5;&nbsp; Prueba la mermelada con sabor único a guayaba. Su composición se sutúa entre jalea y confitura.',
            'body' => '---

### &#x1F4D9;&nbsp; Gebrauch:
Marmelade entsteht aus dem Kochen einer Fruchtkonservierung &#x1F34D;&nbsp; mit Zucker. Die Zusammensetzung und Zubereitung unterscheidet sich vom Gelee und Konfitüre.

### &#x1F4D9;&nbsp; Geschichte:
Marmelade geht auf portugiesisch "marmelada" (Quittenmus) zurück, einer Ableitung von port. "marmelo" (Honigapfel). Die erste marmeladeähnliche Substanz ist bis ins alte Rom zurückzuverfolgen. Es wurden Rückstände in Tongefässen von Zwetschgenmus mit Zuckerrohr nachgewiesen. Nachgewiesen lässt sich eine kommerzielle Herstellung von Bitterorangenmarmelade erstmals in Dundee, Schottland und wurde von der Kaufmannsfrau Janet Keiller "erfunden". Ihr Sohn, James Keiller, ein Lebensmittelhändler kaufte günstig grosse Mengen an Bitterorangen &#x1F34A;&nbsp; einem spanischen Handelsschiffen &#x02693;&nbsp; aus der Region Sevilla, das durch einen Sturm &#x026A1;&nbsp; den Hafen der Stadt anlaufen musste. Da die Früchte im Rohzustand nahezu ungeniessbar waren, kochte seine Mutter diese kleinstgehackt mit sehr viel Zucker ein, um sie letzlich in ein gut verkaufsfähiges Produkt zu verwandeln. Somit gründete die Familie Keiller in Dundee die erste Marmeladenmanufaktur &#x1F36F;&nbsp; in 1797.   

### &#x1F4D9;&nbsp; Herstellung:
Das Verhältnis zwischen Frucht und Zucker muss in Gewicht 1:1 sein. Wenn das Gemisch die Temperatur über die 104°C erreicht, reagieren die Säure und das Pektin mit dem Zucker; das Resultat ist eine feste Mischung beim Einfrieren. Einige Früchte, welche Pektin beinhalten, sind Äpfel, Zitrusfrüchten, und Waldfrüchte wie Erdbeeren und Bromberen. Gemäss der Gesetzgebung der Europäischen Union muss die Marmelade ein Minimum von 30% Frucht enthalten. Für die extra Qualität 45%. Die Marmeladen aus Zitrusfrüchten müssen 20% Frucht beinhalten. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0g, Salzen: 0g, Kohlenhydrate: 74g, Zucker: 74g, Proteine: 0g, Energie: 1321kj/316kcal. 

---

### &#x1F4D5;&nbsp; Uso:
La mermelada es una conserva de fruta &#x1F34D;&nbsp; cocida en azúcar. Su composición y preparación se diferencia de la jalea o confitura. 

### &#x1F4D5;&nbsp; Historia: 
La mermelada proviene del portugués "marmelada" (carne de membrillo), una derivación del portugés "marmelo" (membrillo). La primera sustáncia parecida a la mermelada data en tiempos del César en la antigua Roma. Restos de ésta fueron encontrados en jarras de tono de ciruelas mezcladas con caña de azúcar. Se pudo comprobar que la primera producción comercial se dió en Dundee, Escocia. La mermelada fue "creada" por la comerciante Janet Keiller. Su hijo, James Keiller, un comerciante de comestibles compró a un precio muy reducido grandes cantidades de naranjas amargas &#x1F34A;&nbsp; a un buque mercante &#x02693;&nbsp; que provenía de la región sevillana y debió hacer escala en el puerto de la misma ciudad, debido a una gran fuerte tormenta &#x026A1; . Como las naranjas compradas estaban en estado en bruto, Janet Keiller cocinó las naranjas cortadas en rodajas y las mezcló con gran cantidad de azúcar, creando así un buen producto aceptable para la venta. De esta manera la familia Keiller erigieron en Dundee la primera manufactura de mermelada &#x1F36F;&nbsp; en 1797.   

### &#x1F4D5;&nbsp; Fabricación:
La proporción de fruta y azúcar debe ser de 1:1 en peso. Cuando la mezcla alcanza los 104°C, el ácido y la pectina de la fruta reaccionan con el azúcar haciendo que al enfriarse quede sólida la mezcla. Algunas frutas que contienen pectina son las manzanas, los cítricos, y frutas de los bosques como las fresas y las zarzamoras. Según la legislación de la Unión Europea, la mermelada debe contener mínimo 30% de fruta. Para la calidad extra contiene 45%. Las mermeladas de cítricos deben contener 20% de fruta.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 0g, Sales: 0g, Carbohidratos: 74g, Azucares: 74g, Proteinas: 0g. Energia: 1321kj/316kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.wikipedia.org

---
',
            'image' => 'https://ucarecdn.com/6ab2384d-99b5-4aad-9a6e-9745f7f4aa32/MermeladaGuayaba.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Chocolate Corona',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'ChocolateCorona',
            'teaserde' => '&#x1F4D9;&nbsp; Die Schokolade Corona hat einen leckeren Aroma und Geschmack, sie ist schaumig, Null Cholesterin und hat antioxidative Eigenschaften.',
            'teaseres' => '&#x1F4D5;&nbsp; El chocolate corona tiene un delicioso aroma y sabor, es espumoso, cero colesterol y fuente de antioxidantes.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Der Kakaobaum &#x1F333;&nbsp; wurde vermutlich erstmal um 1500 v. Chr. von den Olmeken genutzt, die im Tiefland der mexikanischen Golfküste lebten. Um 600 wurde der Kakao &#x1F333;&nbsp; dann von den Maya angebaut. Die Azteken gaben dem mit kaltem Wasser vermischten Kakaogetränk &#x1F333;&nbsp; den Namen: "xocolati". Mit Hilfe eines Holzquirls, heute "Molinillo", schlug man die Flüssigkeit schaumig auf. Bevorzugt wurde das Getränk von Kriegern, Priestern oder zur Opfergaben getrunken. Hernán Cortés berichtete, dass der aztekische König Montezuma &#x1F64F;&nbsp; kakaohaltige Getränke in grosser Menge zu sich nahm. Die Kakaobohne &#x1F330;&nbsp; diente teilweise als Zahlungsmittel &#x1F4B0; . 1528 brachte Cortés den Kakao nach Europa. Erst nach Zugabe von Honig &#x1F36F;&nbsp; und Rohrzucker wurde das Getränk beliebt. 1657 öffnete sich das erste Schokoladencafé in London. Erst 18./19. Jahrhundert kommt die Erfindung der Pressung und Zermahlung, damit der Kakaobutter vom Kakao &#x1F333;&nbsp; abgespaltet wird, heute ein üblicher Vorgang zur Produktion von Kakaopulver. Im 1804 wurde die erste Schokoladenfabrik &#x1F36B;&nbsp; in Deutschland gegründet. 1819 wurde die erste Schweizer Schokoladenfabrik &#x1F36B;&nbsp; von François-Louis Cailler in Vevey gegründet. 1875 wurde die erste Schweizer Milchschokolade von Daniel Peter und Henri Nestlé auf den Markt gebracht. 1879 entwickelte Rodolphe Lindt ein Verfahren zum Conchieren der Schokolade (Schmelzen auf der Zunge). Die heutige Grupo Nutresa, früher Grupo Nacional de Chocolates &#x1F36B; , ist eines der grössten Unternehmen Kolumbiens. Es wurde in 1920 in Antioquia-Colombia wie die Compañia de Chocolates &#x1F36B;&nbsp; Cruz Roja gegründet aus der Integration lokalen Kleinunternehmern. Die herausragenden Marken sind Corona, Diana und Tesalia, ausserdem die Konsolidierung im Schokoladenmarkt mit der Akquisition von Chocolates &#x1F36B;&nbsp; Chaves und Equitativa, Santa Fe und Tequendama Unternehmen. Gegen die 60 Jahren wird die einzigartige Chocolatina Jet und Chocolisto eingeführt, später die Integration von Nüsse, Getreiden und Sammlung von Bilddrucken, deren Akzeptanz das Album Historia Natural am meisten erhielt. Gegen die 80 Jahren entstanden neue Produkte wie Wafer Jet, Combi Jet, Triki Jet, Coco Jet und Deli Jet. Gegen die 90 Jahren wurden diäthetische Lebensmitteln eingeführt. In 2000 gab es viele Vereinigungen von Unternehmen wie mit dem Compañia de Galletas Noel. In 2012 Chocolatina Jet feierte 50 Jahren. In 2013 Nutresa S.A ist anerkannt mit der Zertifizierung als gesundheitsfördernde Organisation durch die kolumbianische Stiftung des Herzens &#x1F60D; . Das Unternehmen bezeichnet sich durch die Diversifizierung aller Getränkarten aus Kaffee und Schokolade. Das Unternehmen ist stark bekannt in der Andina Region, in Zentralamerika und in der Karibik, sowie in der Hispanischen Gemeinschaft und in der Vereinigten Staaten Nordamerikas.            

### &#x1F4D9;&nbsp; Geschmack: 
Die Schokolade Corona hat einen leckeren Aroma und Geschmack, sie ist schaumig, Null Cholesterin und hat antioxidative Eigenschaften.

### &#x1F4D9;&nbsp; Nährstoffgehalt:
Kalorien: 100, Totalen Lipiden: 0g, Natrium: 15mg, Kohlenhydrate: 31g, Zucker: 31g, Proteine: 0g, Energie: 174kj/41kcal. 

---

### &#x1F4D5;&nbsp; Historia:
El árbol de cacao &#x1F333;&nbsp; se presume fue aprovechado en 1500 a.C por los Olmecas que habitaban en las llanuras de la costa del Golfo mexicano. Hacia el año 600 el cacao &#x1F333;&nbsp; fue cultivado por los Mayas. Los aztecas le dieron el nombre "xocolati" a la mezcla del cacao &#x1F333;&nbsp; con agua. Con la ayuda de un molinillo, se podia hacer la bebida de forma más espumosa. La bebida fue utilizada preferiblemente por los guerreros, sacerdotes y para ofrendas. Hernán Cortés informaba a cerca de las grandes cantidades de bebida con contenido de cacao &#x1F333;&nbsp; que el rey azteca Montezuma &#x1F64F;&nbsp; ingeria. La almendra de cacao &#x1F330;&nbsp; fue utilizada como medio de pago &#x1F4B0; . En 1528 Cortés llevó el cacao a Europa. Luego de la añadidura de miel &#x1F36F;&nbsp; y caña de azúcar se hizo la bebida más popular. En 1657 se funda la primera cafetería con la venta del Chocolate &#x1F36B;&nbsp; en Londres. Entre los siglos 18 y 19 el prensado y la molienda hace parte de innovaciones destacadas, ya que la manteca de cacao &#x1F333;&nbsp; se puede escindir del cacao &#x1F333; , hoy un proceso habitual para la producción de polvo de cacao&#x1F333; . En 1804 se funda la primera fábrica de chocolates &#x1F36B;&nbsp; en Alemania. En 1819 François-Louis Cailler funda la primera fábrica de chocolates suiza &#x1F36B;&nbsp; en Vevey. En 1875 el primer chocolate de leche es ofrecida al mercado suizo por Daniel Peter y Henri Nestlé. En 1879 Rodolphe Lindt innova el proceso de conche (derretimiento del chocolate &#x1F36B;&nbsp; en la lengua). El hoy dia llamado Grupo Nutresa, antes conocido como Grupo Nacional de Chocolates &#x1F36B; , es una de las empresas más grandes de Colombia. Se fundó el 1920 en Antioquia-Colombia como la Compañia de Chocolates &#x1F36B;&nbsp; Cruz Roja a partir de la integración de pequeños productores locales. Las marcas Corona, Diana y Tesalia son las más destacadas, además de la consolidación en el mercado con la adquisición de empresas de chocolates &#x1F36B;&nbsp; Chaves y Equitativa, Santa Fe y Tequendama. En la década de los 60 se ofrece la Chocolatina Jet y Chocolisto, posteriormente la inclusión de nueces, cereales y la colección de estampas, donde el Álbum de Historia Natural alcanzó más aceptación. En los años 80 surjieron nuevos productos como Wafer Jet, Combi Jet, Triki Jet, Coco Jet y Deli Jet. En los años 90 se introdujeron chocolate &#x1F36B;&nbsp; dietético sin azúcar. En 2000 hubo asociaciones con muchas compañias como con la Compañia de Galletas Noel. En el 2012 Chocolatina Jet cumplió 50 años. En el 2013 Nutresa S.A es reconocida como la primera empresa que recibe la certificación como Organización Saludable por parte de la Fundación Colombiana del Corazón &#x1F60D; . La empresa se destaca por la gran diversificación en bebidas de café y bebidas de chocolate &#x1F36B; . Esta empresa es muy conocida en la Región Andina, Centroamérica y el Caribe, y de la Comunidad hispana de los Estados Unidos. 
           
### &#x1F4D5;&nbsp; Sabor: 
El chocolate corona tiene un delicioso aroma y sabor, es espumoso, cero colesterol y fuente de antioxidantes.

### &#x1F4D5;&nbsp; Contenido nutricional:
Calorias: 100, Grasas totales: 0g, Sodio: 15mg, Carbohidratos: 31g, Azucares: 31g, Proteinas: 0g. Energia: 174kj/41kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://chocolates.com.co

---
',
            'image' => 'https://ucarecdn.com/3a6a2ec6-cff5-41f1-bb67-35c575dcfb99/Corona.png',
            'imga' => 'https://ucarecdn.com/01677505-12cd-46a6-b4dc-7c701d16b1ed/1.png',
            'descra' => 'Chocolate Corona',
            'imgb' => 'https://ucarecdn.com/0a1b7e42-63da-412b-aa86-3ec5dc05b311/2.png',
            'descrb' => 'Chocolate Corona',
            'imgc' => 'https://ucarecdn.com/01677505-12cd-46a6-b4dc-7c701d16b1ed/1.png',
            'descrc' => 'Chocolate Corona',
            'imgd' => 'https://ucarecdn.com/0a1b7e42-63da-412b-aa86-3ec5dc05b311/2.png',
            'descrd' => 'Chocolate Corona',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Panela',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Panela',
            'teaserde' => '&#x1F4D9;&nbsp; Zucker beinhaltet hauptsächlich Sacharose. Panela hat Sacharose, Glukose, Fruktose, Mineralien und Vitaminen wie Askorbinsäure und Vitamine der Gruppe B.',
            'teaseres' => '&#x1F4D5;&nbsp; La panela se considera un alimento que, a diferencia del azúcar, que es básicamente sacarosa, presenta además, significativos contenidos de glucosa, fructosa, proteinas, minerales y vitaminas como el ácido ascórbico y complejo B.    
            ',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Der Rohrzucker und die Mühle kamen in die Amerikas während der Kolonialherrschaft. Diese wurden für die Herstellung von Panela, die hauptsächliche Süssquelle für die Bauergemeinschaft und die ländliche Umgebung der damaligen Zeit. 

### &#x1F4D9;&nbsp; Herstellung:
Die Herstellung von Panela entsteht durch einen gewonnenen Saft aus einem reifen Rohrzucker mit einem hohen prozentualen Anteil an Sacharose und frei von fremden Substanzen. Der Saft kocht auf hohen Temperaturen &#x1F525; , um eine sehr dichte Melasse &#x1F36F;&nbsp; zu bilden; danach wird diese in verschiedenen Gussformen gegossen zur Erstarrung. Dieser Prozess wird in Mühlen ausgeführt. Besonders in Kolumbien schätzt man mit 20.000 Mühlen, welche auf direkter oder indirekter Weise 30.000 Personen in Aktivitäten des Rohranbaus, Verarbeitung und Kommerzialisierung der Panela verknüpfen. Indien ist der Haupterzeuger von Panela mit 80% des weltweiten Marktes. Kolumbien ist das zweite Land mit 13.9%. Dennoch hat Kolumbien den grössten Konsum an Panela als Indien mit 32kg pro Einwohner im Jahr. Panela ist in Kolumbien von sozio-ökonomischer Bedeutung, um Steuern und Arbeitsplätze zu erzeugen. San Luis Pososí, Veracruz, Nayarit und Colima sind die grössten Produzenten von Panela in Mexiko. Ein schlagkräftiger Werkzeug &#x1F528;&nbsp; ist benötigt, um die Panela in Stücke zu zerreissen.

### &#x1F4D9;&nbsp; Gebrauch:
Panela ist wichtig in der Gastronomie von Mesoamerika, Lateinamerika und besonders in La Palma in der Kanarischen Inseln. Panela wird für die Erarbeitung von Karamell gebraucht. Die "aguapanela" (verschmolzene Panela in warmes Wasser) mit Zitrone &#x1F34B;&nbsp; ist ein traditionelles Getränk von Kolumbien und Venezuela. Dieses Getränk kann warm oder kalt getrunken werden. Ein anderes Getränk ist der "Guarapo", ein alkoholisches Getränk aus der Gärungsprozessen der "aguapanela". Die Panela wird auch als Süssmittel benutzt. Das warme Getränk "aguapanela" mit Zitrone werden gute medizinische Effekte gegen Erkältung &#x1F601;&nbsp; zugeschrieben. Die Sportler konsumieren "aguapanela" auf kalter Weise als Hydratation, da diese dem Körper auffrischt, Kalorien, Mineralien, Ausdauer und bessere sportliche Performance garantiert. Heilungsseigenschaften für die Behandlung von Geschwüre und Nasennebenhöhlenentzündung sind registriert worden. 

### &#x1F4D9;&nbsp; Neugierde:
In Peru, Bolivien und Chile wird sie "chancaca" genannt und wird nicht nur aus Rohrzucker, sondern auch aus Honig &#x1F36F;&nbsp; gemacht; dazu kann man auch Zimt, Zitrone &#x1F34B; , Orange &#x1F34A; und Gewürze, deren Konsistenz wie die von einer Sauce aussieht und auf Tortillas gegossen und konsumiert wird. In Costa Rica erkennt man sie mit der Namen "tapa de dulce" (Süssdeckel) und die Giessformen sind abschneidende Kegelchen, sie werden mit der Pflanze des Rohrzuckers eingepackt und verkauft; das Getränk wird als "agua dulce" (süsses Wasser), das man Milch dazugibt, gekennzeichnet. Im Norden Costa Ricas erkennt man das Getränk mit dem Namen "agua de sapo" (Froschwasser), da diese Ingwer hat und kalt getrunken wird. In Ecuador nennt man sie "raspadura", da die Panela gekratzt wird. In El Salvador wird sie "dulce de atado" (Festzucker) genannt und wird in einer handwerkliche Zuckermühle verarbeitet. In den Philippinen wird sie benutzt, um den tradidionellen latík und kalamay zu machen. In Guatemala wird sie "rapadura" genannt. In Mexiko kennt man sie durch den Namen "piloncillo" und im Süden durch den Namen "panela". Mexiko benutzt die Panela, um Alote, camotes enmielados, calabazas und ponche zu machen. Im Norden Argentinien wird die Panela wie ein festes rechteckiges Bonbon geformt und man nennt sie "chancaca" und wird meistens in der Region Misiones verzehrt. In Peru wird sie "chancaca" genannt und wird gebraucht, um den champús zu versüssen, um arroz zambito, ranfañote, sanguito und mazamorras zuzubereiten. In Venezuela wird sie als Süssmittel für Dessert und Getränke verwendet. "Papelón" ist  kegelförmig und etwas dunkler als die Panela, sie wird für Reis mit Kokosnuss, majarete und golfeados gebraucht.    

### &#x1F4D9;&nbsp; Geschmack: 
Zucker beinhaltet hauptsächlich Sacharose. Panela hat Sacharose, Glukose, Fruktose, Mineralien und Vitaminen wie Askorbinsäure und Vitamine der Gruppe B. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 5.6g:
Panela besitzt Vitamine A, B1, B2, B3, B12 und C; Mineralien wie Natrium, Kalzium, Eisen, Magnesium, Phosphor und Kalium. Totalen Lipiden: 0g, Salzen: 0mg, Kohlenhydrate: 4g, Zucker: 5%g, Proteine: 0g, Energie: 62.76kj/15kcal. 

--- 

### &#x1F4D5;&nbsp; Historia:
La caña de azúcar, los trapiches o molinos llegaron a las Américas durante la época colonial. Fueron usadas para la producción de panela, principal fuente endulzante para los campesinos y gente del medio rural de aquella época.

### &#x1F4D5;&nbsp; Fabricación:
La producción de panela se lleva a cabo mediante un jugo obtenido de una caña de azúcar madura, con alto contenido de sacarosa libre de sustancias extrañas. El jugo se cuece a altas temperaturas &#x1F525;&nbsp; hasta formar una melaza &#x1F36F;&nbsp; bastante densa; luego este pasa a unos moldes de diveras formas con el fin de dejar solidificar o cuajar. Este proceso se lleva a cabo en molinos o trapiches. Especialmente en Colombia se estiman 20.000 molinos o trapiches que vinculan de forma directa o indirecta a cerca de 350.000 personas en las actividades de cultivo de la caña, elaboración de la panela y de su comercialización en las áreas rurales y centros urbanos. La India es el principal productor de panela con 86% del mercado mundial. Colombia es el segundo con alrededor del 13.9%, que a su vez es el país con el mayor consumo anual de 32kg por habitante. La panela tiene una gran importáncia socioeconómica en la generación de impuestos y empleo. San Luis Pososí, Veracruz, Nayarit y Colima son los mayores estados productores de México. Se requiere de una potente herramienta &#x1F528;&nbsp; para partir la panela.

### &#x1F4D5;&nbsp; Uso:
La panela es importante en la gastronomía de Mesoamérica, Latinoamérica y en especial la isla de Palma. Se utiliza para la elaboración del melado (caramelo). Se utiliza para hacer la "aguapanela" con limón &#x1F34B; , bebida tradicional de Colombia y Venezuela. La "aguapanela" se prepara dejando disolver un bloque de panela en agua hirviendo, al que luego se le agrega limón, para su posterior consumo ya sea frío o caliente. Otra bebida que se hace a base de la panela es el "guarapo", una bebida alcohólica producto de la fermentación alcohólica del agua de panela. La panela se usa también como edulcorante sucedáneo del azucar. Se le atribuyen efectos muy benéficos como el tratamiento de resfriados &#x1F601;&nbsp; , tomándola con limón. Los deportistas consumen el agua de panela fría como bebida hidratante, que refresca, aporta calorias y sales minerales para un mejor rendimiento corporal y una mayor resistencia física. Se han detectado propiedades cicatrizantes e hidratantes para el tratamiento de ulceras varicosas y sinusitis.   

### &#x1F4D5;&nbsp; Curiosidades:
En Perú, Bolivia y Chile se le llama "chancaca" se hace no solo de caña de azúcar, sino también de miel &#x1F36F; ; además de ser disuelta en agua caliente, se suele añadir canela, limón &#x1F34B; , naranja &#x1F34A;&nbsp; u otras especias, cuya consistencia se parece a una salsa y se suele consumir en sopalpillas (alimentos hechos a base de masa de trigo frita en aceite o manteca). En Costa Rica se le conoce como "tapa de dulce" y los moldes utilizados tienen forma de cono truncado, se venden también amarradas con la hoja seca de la planta de caña de azúcar y a la bebida en agua se le conoce como "agua dulce" a la cual se le suele agregar leche; en la costa norte se le conoce como "agua de sapo", pues suele combinarse con jengibre y se bebe fria. En Ecuador se le conoce como "raspadura" pues la panela es raspada y usada como edulcorante o para postres. En El Salvador se le conoce como "dulce de atado" y se elabora en trapiches de manera artesanal. En Filipinas se le usa para hacer el tradicional latík y kalamay. En Guatemala se le llama "rapadura". En México se le conoce en el Norte como "piloncillo" y en el sur "panela", cuyo fin son postres como el alote, los camotes enmielados, las calabazas y el ponche. En el Norte de Argentina se moldea la panela a modo de golosina rectángular y sólido; se le conoce como "chancaca" y es más consumido en la Región de Misiones. En Perú se le conoce como "chancaca" y se usa para endulzar el champús, ingrediente básico de la miel que acompaña a los picarones y al Turrón de Doña Arepa; la chancaca se usa para preparar el arroz zambito, el ranfañote, el sanguito y mazamorras. En Venezuela se usa para endulzar postres y bebidas. El papelón es una forma cónica de la panela, un poco más oscura que la panela y usaba para hacer arroz con coco, majarete y golfeados. 
   
### &#x1F4D5;&nbsp; Sabor: 
La panela se considera un alimento que, a diferencia del azúcar, que es básicamente sacarosa, presenta además, significativos contenidos de glucosa, fructosa, proteinas, minerales y vitaminas como el ácido ascórbico y complejo B.

### &#x1F4D5;&nbsp; Contenido nutricional 5.6g:
Panela posee vitaminas A, B1, B2, B3, B12 y C; Minerales como Sodio, Calciu, Hierro, Magnesiu, Fósforo y Potasio. Grasas totales: 0g, Sales: 0mg, Carbohidratos: 4g, Azucares: 5%g, Proteinas: 0g. Energia: 62.76kj/15kcal.

--- 

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.wikipedia.org

---
',
            'image' => 'https://ucarecdn.com/6ea63b88-16c8-49f2-b35b-788d55b2a440/Panela.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Aji Casero El Rey',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'AjiElRey',
            'teaserde' => '&#x1F4D9;&nbsp; Chili beinhaltet Capsaicin, ein Stoff, der einen reizenden charakteristischen Geschmack den Gerichten ergänzt. El Rey wird normalerweise mit Empanadas, mit gekochten Kartoffeln oder mit einer anderen Art von Salzkosten verzehrt.',
            'teaseres' => '&#x1F4D5;&nbsp; El ají contiene capsaicina, sustancia irritante picante o acre que le da su sabor característico. El Rey se suele acompañar con empanadas, papas cocidas o cualquier otro tipo de bocado de sal. ',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Der Chili &#x1F525;&nbsp; kommt ursprünglich aus der Andina Zone und der Wildnisgebiete des Hohen Perus (die heutigen Peru und Bolivien). Chili &#x1F525;&nbsp; gehört der Familie der Solanaceae-Pflanzen, dem Gattung Capsicum und besteht aus mehr als 25 Spezies. Von dort breitete sich der Chili &#x1F525;&nbsp; über das ganze Kontinent durch Vogelarten aus, welche die Chili &#x1F525;&nbsp; konsumierten und durch den Kot &#x1F602;&nbsp; die Samen propagierten. Die Entdeckung Amerikas förderte die Chiliausbreitung nach Europa und Asien. Er wird bekannt als Peperoni, Chili oder Chiltima. Es gibt scharfer Chili &#x1F525; , roter Chili &#x1F525;&nbsp; oder Paprikaschote, grüne Paprika, Chili poblano und Habanero. Die Pflanze &#x1F333;&nbsp; ist 2-4 Meter hoch und passt sich gut an vielen Bodeneigenschaften an. Der Vegetationszyklus der Pflanze hängt von der Temperatur aller Wachstumsphasen während des Tages und von der Intensität des Lichtes ab. Die Capsaicin ist ein natürlich vorkommendes Alkaloid, das bei Säugetieren durch Wirkung auf spezifische Rezeptoren eine Hitze- oder Schärfereiz &#x1F525;&nbsp; und Freisetzung von Neuropeptiden hervorruft (Doping - siehe Fälle Olympia Spielen 2008). 

### &#x1F4D9;&nbsp; Der König:
Das Unternehmen El Rey begann in 1940 wie eine familiäre Industrie auf einer handfertigten Weise zu betreiben. In 1962 aufgrund einer grossen Würzennachfrage in Bogotá, wurden Verpackungsmaschinen eingefügt. In 1964 Produkten El Rey treten im Markt durch Kisten und kleine Kuverts mit 2 Gramm Packungen auf. In 1974 kommt erstmal die Glasflasche mit rotem Deckel, Hauptmerkmal des Produktes. In 1978 das Produkt wird "color" genannt und in Mengen wie 500 Gramm aufgetreten. In 1985 kommt die Bouillon Caldo de Gallina &#x1F414;&nbsp; El Rey und in 1987 Caldo Marinero El Rey. In 1992 die Innovation geht weiter mit neuen Produkten wie Würzen in 250 und 130 Gramm Glasflaschen in diversen Geschmacksrichtungen wie Knoblauch, Lorbeer, Thymian, Paprika und Chili. In 2001 treten im Markt Würzgemische Mezclas Listas El Rey auf, um typische traditionelle kolumbianische Gerichte zuzubereiten.      

### &#x1F4D9;&nbsp; Geschmack: 
Chili beinhaltet Capsaicin, ein Stoff, der einen reizenden charakteristischen Geschmack den Gerichten gibt.  

### &#x1F4D9;&nbsp; Gebrauch: 
Ají &#x1F525;&nbsp; El Rey wird normalerweise mit Empanadas, mit gekochten Kartoffeln oder mit einer anderen Art von Salzkosten verzehrt. Ají &#x1F525;&nbsp; El Rey wird auch fürs Würzen von Mahlzeiten gebraucht. Der Geschmack regt den Geschmackssinn an. Ají &#x1F525;&nbsp; El Rey kann roh, dehydriert, trocken, geräuchert, gehackt, zermahlt, gefroren und in Saucen verwendet werden. Die scharfen Würzen und Chilis sind Teil der ethnischen und gewürzartigen Gerichten wie in der Thailändische Küche. Die Blätter der Chili werden auch für die philippinische, koreanische und japanische Küche verwendet. Gerösteter Chili hilft beim rheumatischen Schmerzen und wirkt bei Spinnen-, Bienen- und Wespenbisse &#x1F41D;&nbsp; effizient. Chili wirkt bei Husten und Darmflora optimal. Chili kämpft gegen muskuläre Krämpfe und Wundheilung. Chili lindert Zahnschmerzen, Gastritis und Verstopfung. Capsaicin ist für die Herstellung von Medikamenten.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Der Chili besitzt Kupfer, Kalzium, Phosphor, Eisen, Askorbinsäure, Vitamin B1 und B2. Die Farbe der Chili beeinflusst nicht im Nährstoffgehalt. Totalen Lipiden: 2.5g, Salzen: 0.6g, Kohlenhydrate: 2g, Zucker: 0.5g, Proteine: 0.8g, Energie: 138kj/33kcal.

---

### &#x1F4D5;&nbsp; Historia:
El Ají &#x1F525;&nbsp; tiene sus orígenes en la zona Andina y selvática del Alto Perú (hoy Perú y Bolivia). El Ají &#x1F525;&nbsp; pertenece a la familia de solanáceas, al género Capsicum, conformado por más de 25 especies. De allí se dispersó al resto del continente por medio de las aves, que al consumir las frutas dispersaban las semillas, propagándolas por sus heces &#x1F602; . El descubrimiento de América propició la salida del ají a Europa y Asia. Se le conoce como pimiento, chile o chiltima. Hay muchas denominaciones, entre ellas picantes, colorados o morrones, pimiento verde, poblano y habanero. La planta &#x1F333;&nbsp; mide 2 y 4 metros de alto, se adapta a diferentes tipos de suelo. El ciclo vegetativo depende de las variedades, la temperatura en sus diferentes etapas de crecimiento, duración del día y la intensidad de la luz. La capsaicina es el mecanismo de defensa de la planta contra otros seres vivos. Capsaicin es un alcaloide que en los mamíferos produce receptores específicos como estímulo de calor y picante &#x1F525; , además de la liberación de péptidos neuronales (Dopaje - ver Juegos olímpicos 2008).    

### &#x1F4D5;&nbsp; El Rey:
La compañia El Rey inició en 1940 como una industria familiar operada y manejada de manera artesanal por sus fundadores. En 1962 debido a la gran demanda de condimentos en la ciudad de Bogotá, se incluyeron máquinas empacadoras, iniciando la tecnificación y modernización de la empresa. En 1964 los productos El Rey se presentan al mercado por medio de cajas y sobres de 2 gramos de producto condimentario. En 1974 entra al mercado el frasco de vidrio con tapa roja representando la característica propia de la marca. En 1978 el producto "color" es introducido en paquetes de 500 gramos. En 1985 nace el mercado del Caldo de Gallina &#x1F414;&nbsp; El Rey. En 1987 se introduce al mercado el Caldo Marinero El Rey. En 1992 la innovación continúa con nuevos productos como condimentos en Pasta El Rey en frascos de vidrio de 250 y 130 gramos en variedades como Ajo, Laurel, Tomillo, Pimentón y Ají &#x1F525; . En 2001 se introduce al mercado Mezclas Listas El Rey para la preparación de platos típicos colombianos. 

### &#x1F4D5;&nbsp; Sabor: 
El ají contiene capsaicina, sustancia irritante picante o acre que le da su sabor característico. 

### &#x1F4D5;&nbsp; Uso: 
El Ají &#x1F525;&nbsp; El Rey se suele acompañar con empanadas, papas cocidas o cualquier otro tipo de bocado de sal. Se suele utilizar para sazonar comidas. Su sabor despierta el sentido del gusto. Se utiliza crudo, deshidratado, seco, ahumado, picado, molido, congelado y en salsas. La demanda por condimentos picantes y ajíes en polvo hacen parte de las comidas étnicas y espaciadas como la comida Thai. Las hojas de la planta se suelen utilizar como en la comida filipina, coreana y japonesa. El ají tostado alivia dolores reumáticos, eficaz en las picaduras de arañas, abejas y avispas &#x1F41D; . Se utiliza para calmar la toz y dolores intestinales. Combate dolores musculares y en cicatrización de heridas. Alivia el dolor de dientes, la gastritis y el estreñimiento. La capsaicina es usada en la elaboración de medicamentos. 

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
El ají contiene cobre, calcio, fósforo, hierro, ácido ascórbico, vitamina B1 y B2. El color no influye en el valor nutricional. Grasas totales: 2.5g, Sales: 0.6g, Carbohidratos: 2g, Azucares: 0.5g, Proteinas: 0.8g. Energia: 138kj/33kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.elrey.com.co

---
',
            'image' => 'https://ucarecdn.com/e3629a4f-39e9-414c-ab6e-c8b492368e89/ElRey.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Salsa de Tomate Fruco',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'SalsaTomateFruco',
            'teaserde' => '&#x1F4D9;&nbsp; Die Tomatensauce wird aus 100% Tomaten hergestellt. Es hat einen milden Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; La salsa de tomate es hecha con tomates 100% naturales. Tiene un sabor muy suave.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Das Unternehmen Fruco &#x1F345;&nbsp; feiert 68 Jahren in Saucenproduktion für kolumbianischen typischen Gerichten. Das Unternehmen entsteht 1948 in Cali/Kolumbien. Leo Feldsberg setzt den Namen Frutera Colombiana (kolumbianische Fruchtunternehmen) seinen Marmeladen und Essigen. Zwei Jahre später in Verband mit Felix Zweig, ergänzt Feldsberg sein Portfolio mit Mayonnaise und Tomatensauce &#x1F345;&nbsp; mittels "Fruquita", eine Werbungsstrategie. In den 60 Jahren wird Fruco an Best Foods und in 2000 an Unilever verkauft. Seit zwei Jahrzehnten entschied sich die Marke Fruco &#x1F345;&nbsp; von Glasflaschen zu Sachets zu wechseln. Die Marke war im WM 2014 präsent.

### &#x1F4D9;&nbsp; Geschmack:
Die Tomatensauce &#x1F345;&nbsp; wird aus 100% Tomaten hergestellt.

### &#x1F4D9;&nbsp; Nährstoffgehalt 15g:
Kalorien: 15, Totalen Lipiden: 0g, Salzen: 180mg, Kohlenhydrate: 4g, Zucker: 4g, Proteine: 0g.

---

### &#x1F4D5;&nbsp; Historia:
La empresa Fruco &#x1F345;&nbsp; lleva 68 años de producción de salsas para acompañar los platos típicos de los colombianos. La empresa surje en 1948 en Cali-Colombia. Leo Feldsberg pone nombre a sus vinagres y mermeladas: Frutera Colombiana. Dos años más tarde en asociación con Felix Zweig, Feldsberg complementa su portafolio con mayonesa y salta de tomate &#x1F345;&nbsp; y lo comunica por medio de personaje "Fruquita". En los años 60 la empresa es adquirida por Best Foods y en el 2000 por Unilever. Hace más de dos décadas la marca decidió cambiar la categoría de salsas de tomate &#x1F345;&nbsp; en frascos de vidrio a sachets. La marca estuvo presente en el Mundial de Fútbol 2014. 

### &#x1F4D5;&nbsp; Sabor:
La salsa de tomate &#x1F345;&nbsp; es hecha con tomates 100% naturales. 

### &#x1F4D5;&nbsp; Contenido nutricional 15g:
Calorias: 15, Grasas totales: 0g, Sales: 180mg, Carbohidratos: 4g, Azucares: 4g, Proteinas: 0g.

---

### &#x1F4D6;&nbsp; Quelle/Fuente:
http://www.fruco.com.co

---
',
            'image' => 'https://ucarecdn.com/27c54c30-57e1-4948-810a-a4e1b7dbf51c/SalsaTomate.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();    
        $post = new \App\Models\Post([
            'title' => 'Galletas Festival',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'FestivalSurtido',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Schokoladen-, Vanille-, Erdbeer- und Zitronencremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Chocolate, Vainilla, Fresa y Limón.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Die Noel &#x1F385;&nbsp; Marke begann in Kolumbien in 1916 mit dem Namen Fábrica Nacional de Galletas &#x1F36A;&nbsp; y Confites und bot seinen Kunden Keksen "Maria" und Keksen "estrella Papagayo" an. Als Weihnachten &#x1F384;&nbsp; näherte, profitierte das Unternehmen von diesen Festtagen, um seine Produkten seiner Kunden besser zu offerieren. Das Unternehmen erhielt hohe Anerkennung und Erfolg, daraus folgten neue Filialen in Medellín, Bogotá, Manizales, Barranquilla und Cali. In 1932 kommen neue zwei Marken auf dem Markt: Noel &#x1F385;&nbsp; und Sultana y Saltín Noel &#x1F385; . In 1955 Noel &#x1F385;&nbsp; war ein der meist wichtigsten Unternehmen Kolumbiens konsolidiert. In 1973 erhielt die Keksfabrik Genehmigung vom staatlichen Gesundheitsministerium für Warenexport. In 1981 begann den Vertrieb der Keksen "Ducales". In 1990 kommen die Marken "Recreo" und "Mini Chips" hinzu. Gegenwärtig hat Noel &#x1F385;&nbsp; Teilnahme in mehr als 52 Ländern mit Produkten mit Marken: Festival, Ducales, Dux, Saltín Noel &#x1F385;&nbsp; und Navidad Noel.      

### &#x1F4D9;&nbsp; Beschreibung: 
Keksen &#x1F36A;&nbsp; mit Schokoladen-, Vanille-, Erdbeer- und Zitronencremefüllung.

### &#x1F4D9;&nbsp; Nährstoffgehalt:
Totalen Lipiden: 6g, Salzen: 0.16g, Kohlenhydrate: 24g, Zucker: 13g, Proteine: 1g, Energie: 627.6kj/150kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La marca Noel &#x1F385;&nbsp; empezó en Colombia en 1916 bajo el nombre de Fábrica Nacional de Galletas &#x1F36A;&nbsp; y Confites, ofreciendo galletas Maria y la marca estrella Papagayo. Acercándose la Navidad &#x1F384; , se vió la gran oportunidad de ofrecer al público este tipo de productos. Obtuvo gran reconocimiento y éxito, lo cual generó el crecimiento de las sucursales en Medellín (cede central), Bogotá, Manizales, Barranquilla y Cali. En 1932 nacen dos marcas insignia Noel &#x1F385; , Sultana y Saltín Noel &#x1F385; . En 1955 Noel &#x1F385;&nbsp; fue consolidada como una de las 15 empresas más importántes de Colombia. En 1973 la galleteria fue aprobada por el Ministerio de Salud Pública para exportar. En 1981 se empiezan a comercializar las galletas Ducales. En 1990 nace la marca Recreo y las mini Chips. Actualmente Noel &#x1F385;&nbsp; tiene participación en 52 países con principales marcas: Festival, Ducales, Dux, Saltín Noel &#x1F385;&nbsp; y Navidad Noel &#x1F385; .    

### &#x1F4D5;&nbsp; Descripción: 
Galletas &#x1F36A;&nbsp; rellenas con crema sabor a Chocolate, Vainilla, Fresa y Limón. 

### &#x1F4D5;&nbsp; Contenido nutricional:
Grasas totales: 6g, Sales: 0.16g, Carbohidratos: 24g, Azucares: 13g, Proteinas: 1g. Energia: 627.6kj/150kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.noel.com.co

---
',
            'image' => 'https://ucarecdn.com/8a5bae80-f781-4571-a1ba-d419a4429bd2/FestivalDiferentes.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Galletas Festival Fresa',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'FestivalFresa',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Erdbeercremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Fresa.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Die Noel &#x1F385;&nbsp; Marke begann in Kolumbien in 1916 mit dem Namen Fábrica Nacional de Galletas &#x1F36A;&nbsp; y Confites und bot seinen Kunden Keksen "Maria" und Keksen "estrella Papagayo". Als Weihnachten &#x1F384;&nbsp; näherte, profitierte das Unternehmen von diesen Festtagen, um seine Produkten seiner Kunden besser zu offerieren. Das Unternehmen erhielt hohe Anerkennung und Erfolg, daraus folgten neue Filialen in Medellín, Bogotá, Manizales, Barranquilla und Cali. In 1932 kommen neue zwei Marken auf dem Markt: Noel &#x1F385;&nbsp; und Sultana y Saltín Noel &#x1F385; . In 1955 Noel &#x1F385;&nbsp; war ein der meist wichtigsten Unternehmen Kolumbiens konsolidiert. In 1973 erhielt die Keksfabrik Genehmigung vom staatlichen Gesundheitsministerium für Warenexport. In 1981 begann den Vertrieb der Keksen "Ducales". In 1990 kommen die Marken "Recreo" und "Mini Chips" hinzu. Gegenwärtig hat Noel &#x1F385;&nbsp; Teilnahme in mehr als 52 Ländern mit Produkten mit Marken: Festival, Ducales, Dux, Saltín Noel &#x1F385;&nbsp; und Navidad Noel.      

### &#x1F4D9;&nbsp; Beschreibung: 
Keksen &#x1F36A;&nbsp; mit Erdbeercremefüllung.

### &#x1F4D9;&nbsp; Nährstoffgehalt:
Totalen Lipiden: 6g, Salzen: 0.16g, Kohlenhydrate: 24g, Zucker: 13g, Proteine: 1g, Energie: 627.6kj/150kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La marca Noel &#x1F385;&nbsp; empezó en Colombia en 1916 bajo el nombre de Fábrica Nacional de Galletas &#x1F36A;&nbsp; y Confites, ofreciendo galletas Maria y la marca estrella Papagayo. Acercándose la Navidad &#x1F384; , se vió la gran oportunidad de ofrecer al público este tipo de productos. Obtuvo gran reconocimiento y éxito, lo cual generó el crecimiento de las sucursales en Medellín (cede central), Bogotá, Manizales, Barranquilla y Cali. En 1932 nacen dos marcas insignia Noel &#x1F385; , Sultana y Saltín Noel &#x1F385; . En 1955 Noel &#x1F385;&nbsp; fue consolidada como una de las 15 empresas más importántes de Colombia. En 1973 la galleteria fue aprobada por el Ministerio de Salud Pública para exportar. En 1981 se empiezan a comercializar las galletas Ducales. En 1990 nace la marca Recreo y las mini Chips. Actualmente Noel &#x1F385;&nbsp; tiene participación en 52 países con principales marcas: Festival, Ducales, Dux, Saltín Noel &#x1F385;&nbsp; y Navidad Noel &#x1F385; .    

### &#x1F4D5;&nbsp; Descripción: 
Galletas &#x1F36A;&nbsp; rellenas con crema sabor a Fresa.  

### &#x1F4D5;&nbsp; Contenido nutricional:
Grasas totales: 6g, Sales: 0.16g, Carbohidratos: 24g, Azucares: 13g, Proteinas: 1g. Energia: 627.6kj/150kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.noel.com.co

---
',
            'image' => 'https://ucarecdn.com/9e99167a-ee1b-4571-a6ce-435f935ab99a/FestivalFresa.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Galletas Festival Chocolate',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'FestivalChocolate',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Schokoladencremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Schokolade.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Die Noel &#x1F385;&nbsp; Marke begann in Kolumbien in 1916 mit dem Namen Fábrica Nacional de Galletas &#x1F36A;&nbsp; y Confites und bot seinen Kunden Keksen "Maria" und Keksen "estrella Papagayo". Als Weihnachten &#x1F384;&nbsp; näherte, profitierte das Unternehmen von diesen Festtagen, um seine Produkten seiner Kunden besser zu offerieren. Das Unternehmen erhielt hohe Anerkennung und Erfolg, daraus folgten neue Filialen in Medellín, Bogotá, Manizales, Barranquilla und Cali. In 1932 kommen neue zwei Marken auf dem Markt: Noel &#x1F385;&nbsp; und Sultana y Saltín Noel &#x1F385; . In 1955 Noel &#x1F385;&nbsp; war ein der meist wichtigsten Unternehmen Kolumbiens konsolidiert. In 1973 erhielt die Keksfabrik Genehmigung vom staatlichen Gesundheitsministerium für Warenexport. In 1981 begann den Vertrieb der Keksen "Ducales". In 1990 kommen die Marken "Recreo" und "Mini Chips" hinzu. Gegenwärtig hat Noel &#x1F385;&nbsp; Teilnahme in mehr als 52 Ländern mit Produkten mit Marken: Festival, Ducales, Dux, Saltín Noel &#x1F385;&nbsp; und Navidad Noel.        

### &#x1F4D9;&nbsp; Beschreibung: 
Keksen &#x1F36A;&nbsp; mit Schokoladencremefüllung.

### &#x1F4D9;&nbsp; Nährstoffgehalt:
Totalen Lipiden: 6g, Salzen: 0.16g, Kohlenhydrate: 24g, Zucker: 13g, Proteine: 1g, Energie: 627.6kj/150kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La marca Noel &#x1F385;&nbsp; empezó en Colombia en 1916 bajo el nombre de Fábrica Nacional de Galletas &#x1F36A;&nbsp; y Confites, ofreciendo galletas Maria y la marca estrella Papagayo. Acercándose la Navidad &#x1F384; , se vió la gran oportunidad de ofrecer al público este tipo de productos. Obtuvo gran reconocimiento y éxito, lo cual generó el crecimiento de las sucursales en Medellín (cede central), Bogotá, Manizales, Barranquilla y Cali. En 1932 nacen dos marcas insignia Noel &#x1F385; , Sultana y Saltín Noel &#x1F385; . En 1955 Noel &#x1F385;&nbsp; fue consolidada como una de las 15 empresas más importántes de Colombia. En 1973 la galleteria fue aprobada por el Ministerio de Salud Pública para exportar. En 1981 se empiezan a comercializar las galletas Ducales. En 1990 nace la marca Recreo y las mini Chips. Actualmente Noel &#x1F385;&nbsp; tiene participación en 52 países con principales marcas: Festival, Ducales, Dux, Saltín Noel &#x1F385;&nbsp; y Navidad Noel &#x1F385; .      

### &#x1F4D5;&nbsp; Descripción: 
Galletas &#x1F36A;&nbsp; rellenas con crema sabor a Schokolade.  

### &#x1F4D5;&nbsp; Contenido nutricional:
Grasas totales: 6g, Sales: 0.16g, Carbohidratos: 24g, Azucares: 13g, Proteinas: 1g. Energia: 627.6kj/150kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.noel.com.co

---
',
            'image' => 'https://ucarecdn.com/a5c3357f-3c2e-4497-b57c-70cd51331bd1/FestivalChocolate.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();    
        $post = new \App\Models\Post([
            'title' => 'Galletas Festival Vainilla',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'FestivalVainilla',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Vanillecremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Vainilla.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Die Noel &#x1F385;&nbsp; Marke begann in Kolumbien in 1916 mit dem Namen Fábrica Nacional de Galletas &#x1F36A;&nbsp; y Confites und bot seinen Kunden Keksen "Maria" und Keksen "estrella Papagayo". Als Weihnachten &#x1F384;&nbsp; näherte, profitierte das Unternehmen von diesen Festtagen, um seine Produkten seiner Kunden besser zu offerieren. Das Unternehmen erhielt hohe Anerkennung und Erfolg, daraus folgten neue Filialen in Medellín, Bogotá, Manizales, Barranquilla und Cali. In 1932 kommen neue zwei Marken auf dem Markt: Noel &#x1F385;&nbsp; und Sultana y Saltín Noel &#x1F385; . In 1955 Noel &#x1F385;&nbsp; war ein der meist wichtigsten Unternehmen Kolumbiens konsolidiert. In 1973 erhielt die Keksfabrik Genehmigung vom staatlichen Gesundheitsministerium für Warenexport. In 1981 begann den Vertrieb der Keksen "Ducales". In 1990 kommen die Marken "Recreo" und "Mini Chips" hinzu. Gegenwärtig hat Noel &#x1F385;&nbsp; Teilnahme in mehr als 52 Ländern mit Produkten mit Marken: Festival, Ducales, Dux, Saltín Noel &#x1F385;&nbsp; und Navidad Noel.        

### &#x1F4D9;&nbsp; Beschreibung: 
Keksen &#x1F36A;&nbsp; mit Vanillecremefüllung.

### &#x1F4D9;&nbsp; Nährstoffgehalt:
Totalen Lipiden: 6g, Salzen: 0.16g, Kohlenhydrate: 24g, Zucker: 13g, Proteine: 1g, Energie: 627.6kj/150kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La marca Noel &#x1F385;&nbsp; empezó en Colombia en 1916 bajo el nombre de Fábrica Nacional de Galletas &#x1F36A;&nbsp; y Confites, ofreciendo galletas Maria y la marca estrella Papagayo. Acercándose la Navidad &#x1F384; , se vió la gran oportunidad de ofrecer al público este tipo de productos. Obtuvo gran reconocimiento y éxito, lo cual generó el crecimiento de las sucursales en Medellín (cede central), Bogotá, Manizales, Barranquilla y Cali. En 1932 nacen dos marcas insignia Noel &#x1F385; , Sultana y Saltín Noel &#x1F385; . En 1955 Noel &#x1F385;&nbsp; fue consolidada como una de las 15 empresas más importántes de Colombia. En 1973 la galleteria fue aprobada por el Ministerio de Salud Pública para exportar. En 1981 se empiezan a comercializar las galletas Ducales. En 1990 nace la marca Recreo y las mini Chips. Actualmente Noel &#x1F385;&nbsp; tiene participación en 52 países con principales marcas: Festival, Ducales, Dux, Saltín Noel &#x1F385;&nbsp; y Navidad Noel &#x1F385; . 
    
### &#x1F4D5;&nbsp; Descripción: 
Galletas &#x1F36A;&nbsp; rellenas con crema sabor a Vainilla.  

### &#x1F4D5;&nbsp; Contenido nutricional:
Grasas totales: 6g, Sales: 0.16g, Carbohidratos: 24g, Azucares: 13g, Proteinas: 1g. Energia: 627.6kj/150kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.noel.com.co

---
',
            'image' => 'https://ucarecdn.com/2fdb1e8b-0349-4d38-a7d6-2ba4bf8aee99/Vainilla.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();   
        $post = new \App\Models\Post([
            'title' => 'Galletas Festival Limon',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'FestivalLimon',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Zitronencremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Limón.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Die Noel &#x1F385;&nbsp; Marke begann in Kolumbien in 1916 mit dem Namen Fábrica Nacional de Galletas &#x1F36A;&nbsp; y Confites und bot seinen Kunden Keksen "Maria" und Keksen "estrella Papagayo". Als Weihnachten &#x1F384;&nbsp; näherte, profitierte das Unternehmen von diesen Festtagen, um seine Produkten seiner Kunden besser zu offerieren. Das Unternehmen erhielt hohe Anerkennung und Erfolg, daraus folgten neue Filialen in Medellín, Bogotá, Manizales, Barranquilla und Cali. In 1932 kommen neue zwei Marken auf dem Markt: Noel &#x1F385;&nbsp; und Sultana y Saltín Noel &#x1F385; . In 1955 Noel &#x1F385;&nbsp; war ein der meist wichtigsten Unternehmen Kolumbiens konsolidiert. In 1973 erhielt die Keksfabrik Genehmigung vom staatlichen Gesundheitsministerium für Warenexport. In 1981 begann den Vertrieb der Keksen "Ducales". In 1990 kommen die Marken "Recreo" und "Mini Chips" hinzu. Gegenwärtig hat Noel &#x1F385;&nbsp; Teilnahme in mehr als 52 Ländern mit Produkten mit Marken: Festival, Ducales, Dux, Saltín Noel &#x1F385;&nbsp; und Navidad Noel.       

### &#x1F4D9;&nbsp; Beschreibung: 
Keksen &#x1F36A;&nbsp; mit Zitronencremefüllung.

### &#x1F4D9;&nbsp; Nährstoffgehalt:
Totalen Lipiden: 6g, Salzen: 0.16g, Kohlenhydrate: 24g, Zucker: 13g, Proteine: 1g, Energie: 627.6kj/150kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La marca Noel &#x1F385;&nbsp; empezó en Colombia en 1916 bajo el nombre de Fábrica Nacional de Galletas &#x1F36A;&nbsp; y Confites, ofreciendo galletas Maria y la marca estrella Papagayo. Acercándose la Navidad &#x1F384; , se vió la gran oportunidad de ofrecer al público este tipo de productos. Obtuvo gran reconocimiento y éxito, lo cual generó el crecimiento de las sucursales en Medellín (cede central), Bogotá, Manizales, Barranquilla y Cali. En 1932 nacen dos marcas insignia Noel &#x1F385; , Sultana y Saltín Noel &#x1F385; . En 1955 Noel &#x1F385;&nbsp; fue consolidada como una de las 15 empresas más importántes de Colombia. En 1973 la galleteria fue aprobada por el Ministerio de Salud Pública para exportar. En 1981 se empiezan a comercializar las galletas Ducales. En 1990 nace la marca Recreo y las mini Chips. Actualmente Noel &#x1F385;&nbsp; tiene participación en 52 países con principales marcas: Festival, Ducales, Dux, Saltín Noel &#x1F385;&nbsp; y Navidad Noel &#x1F385; . 
     
### &#x1F4D5;&nbsp; Descripción: 
Galletas &#x1F36A;&nbsp; rellenas con crema sabor a Limón.  

### &#x1F4D5;&nbsp; Contenido nutricional:
Grasas totales: 6g, Sales: 0.16g, Carbohidratos: 24g, Azucares: 13g, Proteinas: 1g. Energia: 627.6kj/150kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.noel.com.co

---
',
            'image' => 'https://ucarecdn.com/2dea7b5e-b4f0-401d-a45f-9134fc366ea5/Limon.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();   
        $post = new \App\Models\Post([
            'title' => 'Mango Wafer',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'MangoWaffer',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Mangocremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Mango.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Goya Foods ist eine anerkannte Marke für Nahrungsmittel mit Hauptsitz in Jersey City und Filialen in Hispanoamerika und in den Vereinigten Staatan Nordamerikas. Goya ist heute ein grosses Unternehmen, deren Besitzer die Familie Unanue und im Bereich von Lebensmittel stark geprägt ist. Goya wurde in 1936 bei Prudencio Unanue, ein Junge aus Burgos und Carolina Casal, eine Galicierin gegründet. Beide wanderten nach Puerto Rico aus, wo sie sich kennenlernten und dort heirateten. Beide gründeten Goya Foods und importierten anfangs Oliven und Öle aus Spanien. Goya zählt heute mit vielen Fabriken und Manufakturen in diversen Ländern. Wafer &#x1F36A;&nbsp; oder Oblaten sind knusprige, süsse, dünnschichtige und trockene Keksen. Manchmal werden sie mit Eis &#x1F366;&nbsp; dekoriert. Wafer haben Cremefüllung in Sandwichform.

### &#x1F4D9;&nbsp; Geschmack: 
Keksen &#x1F36A;&nbsp; mit Mangocremefüllung.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 26g, Salzen: 0.16g, Kohlenhydrate: 69g, Zucker: 48g, Proteine: 2g, Energie: 2209kj/526kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Goya Foods es una conocida marca de alimentos que opera en hispanoamérica y en los Estados Unidos, con sede central en Jersey City. Se ha convertido en la empresa alimentaria más grande de Estados Unidos, en manos hispanas y sus dueños, la familia Unanue. Goya fue fundada en 1936 por Prudencio Unanue un joven de Burgos y Carolina Casal una gallega. Ambos emigraron a Puerto Rico donde se conocieron y casaron. Fundaron Goya Foods importando aceitunas y aceites de oliva de España. Goya hoy cuenta con muchas fábricas en diversos paises del planeta. La galleta Wafer &#x1F36A;&nbsp; es una galleta crujiente, dulce, delgada y seca. A veces es decorada con helado &#x1F366; . Son hechas con forma de sandwich con relleno de crema.

### &#x1F4D5;&nbsp; Sabor: 
Galletas &#x1F36A;&nbsp; rellenas con crema sabor a Mango.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 26g, Sales: 0.16g, Carbohidratos: 69g, Azucares: 48g, Proteinas: 2g. Energia: 2209kj/526kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.goyanativo.com

---
',
            'image' => 'https://ucarecdn.com/4b88a583-5e06-420a-8be8-8d5e840e4b68/GoyaMango.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Guayaba Wafer',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'GuayabaWaffer',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Guavecremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Guayaba.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Goya Foods ist eine anerkannte Marke für Nahrungsmittel mit Hauptsitz in Jersey City und Filialen in Hispanoamerika und in den Vereinigten Staatan Nordamerikas. Goya ist heute ein grosses Unternehmen, deren Besitzer die Familie Unanue und im Bereich von Lebensmittel stark geprägt ist. Goya wurde in 1936 bei Prudencio Unanue, ein Junge aus Burgos und Carolina Casal, eine Galicierin gegründet. Beide wanderten nach Puerto Rico aus, wo sie sich kennenlernten und dort heirateten. Beide gründeten Goya Foods und importierten anfangs Oliven und Öle aus Spanien. Goya zählt heute mit vielen Fabriken und Manufakturen in diversen Ländern. Wafer &#x1F36A;&nbsp; oder Oblaten sind knusprige, süsse, dünnschichtige und trockene Keksen. Manchmal werden sie mit Eis &#x1F366;&nbsp; dekoriert. Wafer haben Cremefüllung in Sandwichform.

### &#x1F4D9;&nbsp; Geschmack: 
Keksen &#x1F36A;&nbsp; mit Guavecremefüllung.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 26g, Salzen: 0.16g, Kohlenhydrate: 69g, Zucker: 48g, Proteine: 2g, Energie: 2209kj/526kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Goya Foods es una conocida marca de alimentos que opera en hispanoamérica y en los Estados Unidos, con sede central en Jersey City. Se ha convertido en la empresa alimentaria más grande de Estados Unidos, en manos hispanas y sus dueños, la familia Unanue. Goya fue fundada en 1936 por Prudencio Unanue un joven de Burgos y Carolina Casal una gallega. Ambos emigraron a Puerto Rico donde se conocieron y casaron. Fundaron Goya Foods importando aceitunas y aceites de oliva de España. Goya hoy cuenta con muchas fábricas en diversos paises del planeta. La galleta Wafer &#x1F36A;&nbsp; es una galleta crujiente, dulce, delgada y seca. A veces es decorada con helado &#x1F366; . Son hechas con forma de sandwich con relleno de crema.

### &#x1F4D5;&nbsp; Sabor: 
Galletas &#x1F36A;&nbsp; rellenas con crema sabor a Guayaba.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 26g, Sales: 0.16g, Carbohidratos: 69g, Azucares: 48g, Proteinas: 2g. Energia: 2209kj/526kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.goyanativo.com

---
',
            'image' => 'https://ucarecdn.com/b3feb043-fd76-4b5f-8f3e-8c0a3d37bccc/GoyaGuayaba.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Vanilla Wafers',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'VanillaWaffer',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Vanillacremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Vainilla.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Goya Foods ist eine anerkannte Marke für Nahrungsmittel mit Hauptsitz in Jersey City und Filialen in Hispanoamerika und in den Vereinigten Staatan Nordamerikas. Goya ist heute ein grosses Unternehmen, deren Besitzer die Familie Unanue und im Bereich von Lebensmittel stark geprägt ist. Goya wurde in 1936 bei Prudencio Unanue, ein Junge aus Burgos und Carolina Casal, eine Galicierin gegründet. Beide wanderten nach Puerto Rico aus, wo sie sich kennenlernten und dort heirateten. Beide gründeten Goya Foods und importierten anfangs Oliven und Öle aus Spanien. Goya zählt heute mit vielen Fabriken und Manufakturen in diversen Ländern. Wafer &#x1F36A;&nbsp; oder Oblaten sind knusprige, süsse, dünnschichtige und trockene Keksen. Manchmal werden sie mit Eis &#x1F366;&nbsp; dekoriert. Wafer haben Cremefüllung in Sandwichform.

### &#x1F4D9;&nbsp; Geschmack: 
Keksen &#x1F36A;&nbsp; mit Vanillecremefüllung.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 26g, Salzen: 0.16g, Kohlenhydrate: 69g, Zucker: 48g, Proteine: 2g, Energie: 2209kj/526kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Goya Foods es una conocida marca de alimentos que opera en hispanoamérica y en los Estados Unidos, con sede central en Jersey City. Se ha convertido en la empresa alimentaria más grande de Estados Unidos, en manos hispanas y sus dueños, la familia Unanue. Goya fue fundada en 1936 por Prudencio Unanue un joven de Burgos y Carolina Casal una gallega. Ambos emigraron a Puerto Rico donde se conocieron y casaron. Fundaron Goya Foods importando aceitunas y aceites de oliva de España. Goya hoy cuenta con muchas fábricas en diversos paises del planeta. La galleta Wafer &#x1F36A;&nbsp; es una galleta crujiente, dulce, delgada y seca. A veces es decorada con helado &#x1F366; . Son hechas con forma de sandwich con relleno de crema.

### &#x1F4D5;&nbsp; Sabor: 
Galletas &#x1F36A;&nbsp; rellenas con crema sabor a Vainilla.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 26g, Sales: 0.16g, Carbohidratos: 69g, Azucares: 48g, Proteinas: 2g. Energia: 2209kj/526kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.goyanativo.com

---
',
            'image' => 'https://ucarecdn.com/de3ce559-508a-449f-8c2e-9365bc0aec8d/GoyaVainilla.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Coco Wafers',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CocoWaffer',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Kokosnusscremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Coco.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Goya Foods ist eine anerkannte Marke für Nahrungsmittel mit Hauptsitz in Jersey City und Filialen in Hispanoamerika und in den Vereinigten Staatan Nordamerikas. Goya ist heute ein grosses Unternehmen, deren Besitzer die Familie Unanue und im Bereich von Lebensmittel stark geprägt ist. Goya wurde in 1936 bei Prudencio Unanue, ein Junge aus Burgos und Carolina Casal, eine Galicierin gegründet. Beide wanderten nach Puerto Rico aus, wo sie sich kennenlernten und dort heirateten. Beide gründeten Goya Foods und importierten anfangs Oliven und Öle aus Spanien. Goya zählt heute mit vielen Fabriken und Manufakturen in diversen Ländern. Wafer &#x1F36A;&nbsp; oder Oblaten sind knusprige, süsse, dünnschichtige und trockene Keksen. Manchmal werden sie mit Eis &#x1F366;&nbsp; dekoriert. Wafer haben Cremefüllung in Sandwichform.

### &#x1F4D9;&nbsp; Geschmack: 
Keksen &#x1F36A;&nbsp; mit Kokosnusscremefüllung.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 26g, Salzen: 0.16g, Kohlenhydrate: 69g, Zucker: 48g, Proteine: 2g, Energie: 2209kj/526kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Goya Foods es una conocida marca de alimentos que opera en hispanoamérica y en los Estados Unidos, con sede central en Jersey City. Se ha convertido en la empresa alimentaria más grande de Estados Unidos, en manos hispanas y sus dueños, la familia Unanue. Goya fue fundada en 1936 por Prudencio Unanue un joven de Burgos y Carolina Casal una gallega. Ambos emigraron a Puerto Rico donde se conocieron y casaron. Fundaron Goya Foods importando aceitunas y aceites de oliva de España. Goya hoy cuenta con muchas fábricas en diversos paises del planeta. La galleta Wafer &#x1F36A;&nbsp; es una galleta crujiente, dulce, delgada y seca. A veces es decorada con helado &#x1F366; . Son hechas con forma de sandwich con relleno de crema.

### &#x1F4D5;&nbsp; Sabor: 
Galletas &#x1F36A;&nbsp; rellenas con crema sabor a Coco.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 26g, Sales: 0.16g, Carbohidratos: 69g, Azucares: 48g, Proteinas: 2g. Energia: 2209kj/526kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.goyanativo.com

---
',
            'image' => 'https://ucarecdn.com/954f5ac6-a527-4554-8c0e-621067a4d258/GoyaCoco.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Galletas Ducales',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Ducales',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit einem magischen unbeschreibbaren Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas con un sabor mágico indescriptible.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Die Noel &#x1F385;&nbsp; Marke begann in Kolumbien in 1916 mit dem Namen Fábrica Nacional de Galletas &#x1F36A;&nbsp; y Confites und bot seinen Kunden Keksen "Maria" und Keksen "estrella Papagayo". Als Weihnachten &#x1F384;&nbsp; näherte, profitierte das Unternehmen von diesen Festtagen, um seine Produkten seiner Kunden besser zu offerieren. Das Unternehmen erhielt hohe Anerkennung und Erfolg, daraus folgten neue Filialen in Medellín, Bogotá, Manizales, Barranquilla und Cali. In 1932 kommen neue zwei Marken auf dem Markt: Noel &#x1F385;&nbsp; und Sultana y Saltín Noel &#x1F385; . In 1955 Noel &#x1F385;&nbsp; war als ein der meist wichtigsten Firmen Kolumbiens konsolidiert. In 1973 erhielt die Keksfabrik Genehmigung vom staatlichen Gesundheitsministerium für Warenexport. In 1981 begann den Vertrieb der Keksen "Ducales". In 1990 kommen die Marken "Recreo" und "Mini Chips" hinzu. Gegenwärtig hat Noel &#x1F385;&nbsp; Teilnahme in mehr als 52 Ländern mit Produkten mit Marken: Festival, Ducales, Dux, Saltín Noel &#x1F385;&nbsp; und Navidad Noel.        

### &#x1F4D9;&nbsp; Beschreibung: 
Keksen &#x1F36A;&nbsp; mit einem magischen unbeschreibbaren Geschmack. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 18.6g, Salzen: 1.63g, Kohlenhydrate: 70.6g, Zucker: 12.2g, Ballaststoffe: 2.6g, Proteine: 5.8g, Energie: 1990kj/474kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La marca Noel &#x1F385;&nbsp; empezó en Colombia en 1916 bajo el nombre de Fábrica Nacional de Galletas &#x1F36A;&nbsp; y Confites, ofreciendo galletas Maria y la marca estrella Papagayo. Acercándose la Navidad &#x1F384; , se vió la gran oportunidad de ofrecer al público este tipo de productos. Obtuvo gran reconocimiento y éxito, lo cual generó el crecimiento de las sucursales en Medellín (cede central), Bogotá, Manizales, Barranquilla y Cali. En 1932 nacen dos marcas insignia Noel &#x1F385; , Sultana y Saltín Noel &#x1F385; . En 1955 Noel &#x1F385;&nbsp; fue consolidada como una de las 15 empresas más importántes de Colombia. En 1973 la galleteria fue aprobada por el Ministerio de Salud Pública para exportar. En 1981 se empiezan a comercializar las galletas Ducales. En 1990 nace la marca Recreo y las mini Chips. Actualmente Noel &#x1F385;&nbsp; tiene participación en 52 países con principales marcas: Festival, Ducales, Dux, Saltín Noel &#x1F385;&nbsp; y Navidad Noel &#x1F385; . 

### &#x1F4D5;&nbsp; Descripción: 
Galletas &#x1F36A;&nbsp; con un sabor mágico indescriptible.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 18.6g, Sales: 1.63g, Carbohidratos: 70.6g, Azucares: 12.2g, Fibra: 2.6g, Proteinas: 5.8g. Energia: 1990kj/474kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.noel.com.co

---

',
            'image' => 'https://ucarecdn.com/acd5707d-2912-46b1-a982-0289bb7260d5/Ducales.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Trocitos Suavecitos',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Trocitos',
            'teaserde' => '&#x1F4D9;&nbsp; Trocitos sind aus Mais hergestellt, nährstoffreichend und lecker. Glutenfrei.',
            'teaseres' => '&#x1F4D5;&nbsp; Los trocitos son hechos de maíz, son nutritivos y deliciosos. Sin Gluten.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
La Niña Unternehmen wurde in 1984 gegründet. Das Unternehmen beschäftigt sich mit der Produktion von kleine pikante Vorspeisen.

### &#x1F4D9;&nbsp; Geschmack: 
Trocitos sind aus Mais &#x1F33D;&nbsp; hergestellt, nährstoffreichend und lecker. Glutenfrei.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 24g, Salzen: 0g, Kohlenhydrate: 60g, Zucker: 0g, Ballaststoffe: 2.6g, Proteine: 9g, Energie: 2374kj/568kcal. 

---

### &#x1F4D5;&nbsp; Historia/Geschichte:
La Niña es una empresa fundada en 1984, dedicada a la producción de pasabocas.

### &#x1F4D5;&nbsp; Sabor: 
Los trocitos son hechos de maíz &#x1F33D; , son nutritivos y deliciosos. Sin Gluten.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 24g, Sales: 0g, Carbohidratos: 60g, Azucares: 0g, Fibra: 2.6g, Proteinas: 9g. Energia: 2374kj/568kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.laniña.com.co

---
',
            'image' => 'https://ucarecdn.com/51242902-a4db-4530-ad07-90ddf002cee6/Trocitos.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();     
        $post = new \App\Models\Post([
            'title' => 'Choclitos',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Choclitos',
            'teaserde' => '&#x1F4D9; Choclitos sind knusprig, aus Mais hergestellt und mit Zitronengeschmack.',
            'teaseres' => '&#x1F4D5; Los choclitos son crocantes, pasabocas de maíz con sabor a limón.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Frito Lay ist das Resultat der Vereinigung in 1945 von Frito Sales Company und The Lay Comany. Das Wort "Frito" (gebraten) kommt aus den Fabriken, deren Produktarten "Chips" sind. Einige Beispiele der Produkte sind Doritos, Cheetos, Platanitos, Choclitos und andere. Die Produktnamen sind kurz und bündig. Die Beutelchen sind aus Aluminiumpolypropylen mit verschiedenen Farben gemäss des Inhaltes. Allgemein beinhaltet das Produkt Preisen, Gutscheinen, Wettbewerben und Verlosungen (gilt nicht für Super Fiesta). Das Unternehmen hat Filialen in 42 Länder. Der Haupsitz von Frito Lay befindet sich in Dallas.

### &#x1F4D9;&nbsp; Geschmack: 
Choclitos sind knusprig, aus Mais &#x1F33D;&nbsp; hergestellt und mit Zitronengeschmack.

### &#x1F4D9;&nbsp; Nährstoffgehalt 27g:
Totalen Lipiden: 8g, Salzen: 150mg, Kohlenhydrate: 17g, Zucker: 2g, Ballaststoffe: 1g, Proteine: 2g, Kalorien: 140. 

---

### &#x1F4D5;&nbsp; Historia:
Frito Lay es el resultado de la fusión en 1945 de Frito Sales Company y The Lay Company. La palabra frito se debe a que este tipo de productos que comercializan o fabrican son frituras "Papas, tosinetas, chicharrón". Algunos ejemplos de productos son los Doritos, los Cheetos, los platanitos, los choclitos, etc. Los nombres de los productos tienen nombres cortos. Las bolsas son elaboradas a base de polipropileno de aluminio, de diferentes colores según su contenido. Generalmente el producto contiene premios, cupones, concursos y sorteos (no valen en Super Fiesta). La empresa tiene presencia en más de 42 países. Su sede principal se encuentra en Dallas. 

### &#x1F4D5;&nbsp; Sabor: 
Los choclitos son crocantes, pasabocas de maíz &#x1F33D;&nbsp; con sabor a limón.  

### &#x1F4D5;&nbsp; Contenido nutricional 27g:
Grasas totales: 8g, Sales: 150mg, Carbohidratos: 17g, Azucares: 2g, Fibra: 1g, Proteinas: 2g. Calorias: 140.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.fritolay.com

---
',
            'image' => 'https://ucarecdn.com/d53b81b9-bf29-48ff-8ab0-aada004c3004/Choclitos.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Obleas',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Obleas',
            'teaserde' => '&#x1F4D9;&nbsp; Oblaten werden mit Milchkonfitüre (dulce de leche), manchmal mit Büchsenmilch, Schokoladensplitter, Kokosraspeln, Brombeerenkonfitüre, Käse, Marmelade oder Butter mit Zucker gegessen.',
            'teaseres' => '&#x1F4D5;&nbsp; La oblea es un postre hecho con dos galletas dentro de las cuales hay dulce de leche o arequipe, a menudo acompañada de leche condensada, chispas de chocolate, coco rallado, dulce de mora, queso, mermelada o mantequilla con azúcar.',
            'body' => '---

### &#x1F4D9;&nbsp; Beschreibung:
Oblate ist ein dünnes Gebäck &#x1F36A;&nbsp; aus einer flüssigen Masse hergestellt, die ausschliesslich Wasser &#x1F4A7; , Mehl und Stärke enthält, wie Waffeln gebackt und in runde oder rechteckige Stücke geschnitten. Obleas werden mit Milchkonfitüre (dulce de leche), manchmal mit Büchsenmilch, Schokoladensplitter, Kokosraspeln, Brombeerenkonfitüre, Käse, Marmelade oder Butter mit Zucker gegessen. Oblate sind meist in lateinamerikanische Ländern sehr beliebt.

### &#x1F4D9;&nbsp; Herstellung: 
Die Oblaten sind aus Mehl, Stärke und Wasser &#x1F4A7;&nbsp; hergestellt. Durch schnelles Aufheizung zwischen zweier Tafelchen oder Giessformen. Oblaten sind dünnschichtig und können Zeichnungen auf der Oberfläche in Relief haben. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 9g:
Totalen Lipiden: 0.5g, Salzen: 0.72mg, Kohlenhydrate: 7.35g, Zucker: 1.43g, Ballaststoffe: 0.4g, Proteine: 0.9g, Energie: 146kJ/35kcal. 

---

### &#x1F4D5;&nbsp; Descripción:
La oblea es un postre hecho con dos galletas &#x1F36A;&nbsp; dentro de las cuales hay dulce de leche o arequipe, a menudo acompañada de leche condensada, chispas de chocolate, coco rallado, dulce de mora, queso, mermelada o mantequilla con azúcar. Las obleas están hechas de harina de trigo, midiendo 20 centímetros de diámetro y 1 milímetro de espesor. Son muy populares en latinoamérica por su bajo costo.  

### &#x1F4D5;&nbsp; Fabricación: 
Las Obleas son hechas a base de harina, almidones y agua &#x1F4A7; . Se obtiene mediánte el calentamiento rápido entre dos láminas o moldes apropiados. Las obleas son muy delgadas, puede contener dibujos intrincadose en su superficie con mucho relieve.  

### &#x1F4D5;&nbsp; Contenido nutricional 9g:
Grasas totales: 0.5g, Sales: 0.72mg, Carbohidratos: 7.35g, Azucares: 1.43g, Fibra: 0.4g, Proteinas: 0.9g. Energía: 146kj/35kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.wikipedia.org

---
',
            'image' => 'https://ucarecdn.com/0a9783cc-8ddc-46f9-95b9-6697ebf799f0/Obleas.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Bon Bon Bum Fresa',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'BomBomBumFresaSingle',
            'teaserde' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Erdbeergeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Fresa. En su interior tiene goma de mascar.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Das kolumbianische Unternehmen Colombina wurde in 1927 bei Hernando Caicedo gegründet. Er profitierte von den natürlichen Agrarressourcen, von den warmen Umgebungstemperaturen, und von der Qualität der Bodenfruchtbarkeit von Valle del Cauca-Kolumbien, um Süsswaren mit tropischen Geschmacksrichtungen aller Arten herzustellen. Gegen 1960 wurden europäischen Techniken eingeführt, um Füllungen und Marmeladen mit natürlichen Geschmäcker herzustellen. Erst 1965 exportiert das Unternehmen in die USA. Das Unternehmen Colombina stellt Süsswaren &#x1F36D; , Keksen &#x1F36A; , Eis &#x1F366; , Kompotte und vieles her. Das Unternehmen bezeichnet sich durch die Erstellung von Produkte mit der Marke Bon Bon Bum. Bon Bon Bum Erdbeere und Traube kamen im Markt in 1970. In 1992 in Brombeere. In 1999 in Lulo. In 2000 in intensive Erdbeere. In 2001 in Mandarine und Jo Jo Jo. In 2002 in Zitrone 3X, Cool und especial. In 2003 in Mango X2. In 2004 in Cool X3, Spinner und Fussion. In 2005 in Traube/Erdbeere. In 2006 in Mandarine und Clear. In 2007 der Atomic und Ying Yang. In 2008 der Transfer und Blue Razz. In 2013 in Orange/Ananas. In 2015 in Kokosnus/Zitronensaft.

### &#x1F4D9;&nbsp; Beschreibung:
Jedes Bon Bon Bum &#x1F36D;&nbsp; hat seine eigene Verpackung, die den Inhalt der Süssigkeit schützt. Das Produkt hat ein Stäbchen, dessen Zweck als Stütze dient. Bon Bon Bum beinhaltet ein Kaugummmi.  

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0g, Salzen: 0g, Kohlenhydrate: 94g, Zucker: 76g, Proteine: 9g, Energie: 1579kj/376kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La empresa colombiana Colombina fue fundada en 1927 por Hernando Caicedo que aprovechó la riqueza natural y agrícola del Valle del Cauca-Colombia, sus cálidas temperaturas, la calidad y fertilidad de sus suelos, para la producción de toda clase de dulces y confites con sabores a frutas tropicales. Hacia 1960 se introdujeron técnicas europeas para la fabricación de rellenos y mermeladas con sabores naturales. En 1965 la empresa exporta a los Estados Unidos. La empresa Colombina fabrica confitería &#x1F36D; , galleteria &#x1F36A; , helados &#x1F366; , compotas, etc. Se destaca por haber creado productos con marca Bon Bon Bum. El Bon Bon Bum de fresa y uva nació en 1970. En 1992 el de Mora. En 1999 el de lulo. En 2000 el de fresa intensa. En 2001 el de Mandarina y el Jo Jo Jo. En 2002 el Limon 3X, el cool y el especial. En 2003 el de Mango X3. En 2004 el Cool X3, el Spinner y el Fussion. En 2005 el de Uva/Fresa. En 2006 el Marandina y el clear. En 2007 el atomic y el Ying Yang. En 2008 el Transfer y Yetra. En 2009 el de Kola y el Planet. En 2010 el Eco Planet y el Magnetic. En 2011 el de Sandia. En 2012 de Maracuyá y Lulo Sour y Blue Razz. En 2013 el Naranja Piña. En 2015 el de Limonada de Coco.       

### &#x1F4D5;&nbsp; Descripción: 
Cada Bon Bon Bum &#x1F36D;&nbsp; cuenta con una envoltura de plástico que protege el contenido del mismo. Cuenta con un palo de plástico que sirve de sustento para el dulce. El Bon Bun Bum cuenta con una goma de mascar.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 0g, Sales: 0g, Carbohidratos: 94g, Azucares: 76g, Proteinas: 9g. Energia: 1579kj/376kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
www.colombina.com.co

---
',
            'image' => 'https://ucarecdn.com/8de192c6-c6fb-4d41-9172-9a037d91117d/BomBomBunFresaSingle.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Bon Bon Bum Fresa',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'BonBonBumFresa',
            'teaserde' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Erdbeeregeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Fresa. En su interior tiene goma de mascar.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Das kolumbianische Unternehmen Colombina wurde in 1927 bei Hernando Caicedo gegründet. Er profitierte von den natürlichen Agrarressourcen, von den warmen Umgebungstemperaturen, und von der Qualität der Bodenfruchtbarkeit von Valle del Cauca-Kolumbien, um Süsswaren mit tropischen Geschmacksrichtungen aller Arten herzustellen. Gegen 1960 wurden europäischen Techniken eingeführt, um Füllungen und Marmeladen mit natürlichen Geschmäcker herzustellen. Erst 1965 exportiert das Unternehmen in die USA. Das Unternehmen Colombina stellt Süsswaren &#x1F36D; , Keksen &#x1F36A; , Eis &#x1F366; , Kompotte und vieles her. Das Unternehmen bezeichnet sich durch die Erstellung von Produkte mit der Marke Bon Bon Bum. Bon Bon Bum Erdbeere und Traube kamen im Markt in 1970. In 1992 in Brombeere. In 1999 in Lulo. In 2000 in intensive Erdbeere. In 2001 in Mandarine und Jo Jo Jo. In 2002 in Zitrone 3X, Cool und especial. In 2003 in Mango X2. In 2004 in Cool X3, Spinner und Fussion. In 2005 in Traube/Erdbeere. In 2006 in Mandarine und Clear. In 2007 der Atomic und Ying Yang. In 2008 der Transfer und Blue Razz. In 2013 in Orange/Ananas. In 2015 in Kokosnus/Zitronensaft.

### &#x1F4D9;&nbsp; Beschreibung:
Jedes Bon Bon Bum &#x1F36D;&nbsp; hat seine eigene Verpackung, die den Inhalt der Süssigkeit schützt. Das Produkt hat ein Stäbchen, dessen Zweck als Stütze dient. Bon Bon Bum beinhaltet ein Kaugummmi.  

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0g, Salzen: 0g, Kohlenhydrate: 94g, Zucker: 76g, Proteine: 9g, Energie: 1579kj/376kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La empresa colombiana Colombina fue fundada en 1927 por Hernando Caicedo que aprovechó la riqueza natural y agrícola del Valle del Cauca-Colombia, sus cálidas temperaturas, la calidad y fertilidad de sus suelos, para la producción de toda clase de dulces y confites con sabores a frutas tropicales. Hacia 1960 se introdujeron técnicas europeas para la fabricación de rellenos y mermeladas con sabores naturales. En 1965 la empresa exporta a los Estados Unidos. La empresa Colombina fabrica confitería &#x1F36D; , galleteria &#x1F36A; , helados &#x1F366; , compotas, etc. Se destaca por haber creado productos con marca Bon Bon Bum. El Bon Bon Bum de fresa y uva nació en 1970. En 1992 el de Mora. En 1999 el de lulo. En 2000 el de fresa intensa. En 2001 el de Mandarina y el Jo Jo Jo. En 2002 el Limon 3X, el cool y el especial. En 2003 el de Mango X3. En 2004 el Cool X3, el Spinner y el Fussion. En 2005 el de Uva/Fresa. En 2006 el Marandina y el clear. En 2007 el atomic y el Ying Yang. En 2008 el Transfer y Yetra. En 2009 el de Kola y el Planet. En 2010 el Eco Planet y el Magnetic. En 2011 el de Sandia. En 2012 de Maracuyá y Lulo Sour y Blue Razz. En 2013 el Naranja Piña. En 2015 el de Limonada de Coco.       

### &#x1F4D5;&nbsp; Descripción: 
Cada Bon Bon Bum &#x1F36D;&nbsp; cuenta con una envoltura de plástico que protege el contenido del mismo. Cuenta con un palo de plástico que sirve de sustento para el dulce. El Bon Bon Bum cuenta con una goma de mascar.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 0g, Sales: 0g, Carbohidratos: 94g, Azucares: 76g, Proteinas: 9g. Energia: 1579kj/376kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
www.colombina.com.co

---
',
            'image' => 'https://ucarecdn.com/1cfea41d-2975-4316-bd7c-9a0e6205a460/BomBomBum.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Bon Bon Bum Mandarine',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'BonBonBumMandarine',
            'teaserde' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Mandarinegeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Mandarina. En su interior tiene goma de mascar.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Das kolumbianische Unternehmen Colombina wurde in 1927 bei Hernando Caicedo gegründet. Er profitierte von den natürlichen Agrarressourcen, von den warmen Umgebungstemperaturen, und von der Qualität der Bodenfruchtbarkeit von Valle del Cauca-Kolumbien, um Süsswaren mit tropischen Geschmacksrichtungen aller Arten herzustellen. Gegen 1960 wurden europäischen Techniken eingeführt, um Füllungen und Marmeladen mit natürlichen Geschmäcker herzustellen. Erst 1965 exportiert das Unternehmen in die USA. Das Unternehmen Colombina stellt Süsswaren &#x1F36D; , Keksen &#x1F36A; , Eis &#x1F366; , Kompotte und vieles her. Das Unternehmen bezeichnet sich durch die Erstellung von Produkte mit der Marke Bon Bon Bum. Bon Bon Bum Erdbeere und Traube kamen im Markt in 1970. In 1992 in Brombeere. In 1999 in Lulo. In 2000 in intensive Erdbeere. In 2001 in Mandarine und Jo Jo Jo. In 2002 in Zitrone 3X, Cool und especial. In 2003 in Mango X2. In 2004 in Cool X3, Spinner und Fussion. In 2005 in Traube/Erdbeere. In 2006 in Mandarine und Clear. In 2007 der Atomic und Ying Yang. In 2008 der Transfer und Blue Razz. In 2013 in Orange/Ananas. In 2015 in Kokosnus/Zitronensaft.

### &#x1F4D9;&nbsp; Beschreibung:
Jedes Bon Bon Bum &#x1F36D;&nbsp; hat seine eigene Verpackung, die den Inhalt der Süssigkeit schützt. Das Produkt hat ein Stäbchen, dessen Zweck als Stütze dient. Bon Bon Bum beinhaltet ein Kaugummmi.  

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0g, Salzen: 0g, Kohlenhydrate: 94g, Zucker: 76g, Proteine: 9g, Energie: 1579kj/376kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La empresa colombiana Colombina fue fundada en 1927 por Hernando Caicedo que aprovechó la riqueza natural y agrícola del Valle del Cauca-Colombia, sus cálidas temperaturas, la calidad y fertilidad de sus suelos, para la producción de toda clase de dulces y confites con sabores a frutas tropicales. Hacia 1960 se introdujeron técnicas europeas para la fabricación de rellenos y mermeladas con sabores naturales. En 1965 la empresa exporta a los Estados Unidos. La empresa Colombina fabrica confitería &#x1F36D; , galleteria &#x1F36A; , helados &#x1F366; , compotas, etc. Se destaca por haber creado productos con marca Bon Bon Bum. El Bon Bon Bum de fresa y uva nació en 1970. En 1992 el de Mora. En 1999 el de lulo. En 2000 el de fresa intensa. En 2001 el de Mandarina y el Jo Jo Jo. En 2002 el Limon 3X, el cool y el especial. En 2003 el de Mango X3. En 2004 el Cool X3, el Spinner y el Fussion. En 2005 el de Uva/Fresa. En 2006 el Marandina y el clear. En 2007 el atomic y el Ying Yang. En 2008 el Transfer y Yetra. En 2009 el de Kola y el Planet. En 2010 el Eco Planet y el Magnetic. En 2011 el de Sandia. En 2012 de Maracuyá y Lulo Sour y Blue Razz. En 2013 el Naranja Piña. En 2015 el de Limonada de Coco.       

### &#x1F4D5;&nbsp; Descripción: 
Cada Bon Bon Bum &#x1F36D;&nbsp; cuenta con una envoltura de plástico que protege el contenido del mismo. Cuenta con un palo de plástico que sirve de sustento para el dulce. El Bon Bon Bum cuenta con una goma de mascar.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 0g, Sales: 0g, Carbohidratos: 94g, Azucares: 76g, Proteinas: 9g. Energia: 1579kj/376kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
www.colombina.com.co

---
',
            'image' => 'https://ucarecdn.com/b5014f31-1d21-438d-820e-3e3de154f0b6/BomBomBunMandarine.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Bon Bon Bum Fressa Intensa',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'BomBomBumFressaIntensa',
            'teaserde' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit intensivem Erdbeeregeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Fressa Intensa. En su interior tiene goma de mascar.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Das kolumbianische Unternehmen Colombina wurde in 1927 bei Hernando Caicedo gegründet. Er profitierte von den natürlichen Agrarressourcen, von den warmen Umgebungstemperaturen, und von der Qualität der Bodenfruchtbarkeit von Valle del Cauca-Kolumbien, um Süsswaren mit tropischen Geschmacksrichtungen aller Arten herzustellen. Gegen 1960 wurden europäischen Techniken eingeführt, um Füllungen und Marmeladen mit natürlichen Geschmäcker herzustellen. Erst 1965 exportiert das Unternehmen in die USA. Das Unternehmen Colombina stellt Süsswaren &#x1F36D; , Keksen &#x1F36A; , Eis &#x1F366; , Kompotte und vieles her. Das Unternehmen bezeichnet sich durch die Erstellung von Produkte mit der Marke Bon Bon Bum. Bon Bon Bum Erdbeere und Traube kamen im Markt in 1970. In 1992 in Brombeere. In 1999 in Lulo. In 2000 in intensive Erdbeere. In 2001 in Mandarine und Jo Jo Jo. In 2002 in Zitrone 3X, Cool und especial. In 2003 in Mango X2. In 2004 in Cool X3, Spinner und Fussion. In 2005 in Traube/Erdbeere. In 2006 in Mandarine und Clear. In 2007 der Atomic und Ying Yang. In 2008 der Transfer und Blue Razz. In 2013 in Orange/Ananas. In 2015 in Kokosnus/Zitronensaft.

### &#x1F4D9;&nbsp; Beschreibung:
Jedes Bon Bon Bum &#x1F36D;&nbsp; hat seine eigene Verpackung, die den Inhalt der Süssigkeit schützt. Das Produkt hat ein Stäbchen, dessen Zweck als Stütze dient. Bon Bon Bum beinhaltet ein Kaugummmi.  

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0g, Salzen: 0g, Kohlenhydrate: 94g, Zucker: 76g, Proteine: 9g, Energie: 1579kj/376kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La empresa colombiana Colombina fue fundada en 1927 por Hernando Caicedo que aprovechó la riqueza natural y agrícola del Valle del Cauca-Colombia, sus cálidas temperaturas, la calidad y fertilidad de sus suelos, para la producción de toda clase de dulces y confites con sabores a frutas tropicales. Hacia 1960 se introdujeron técnicas europeas para la fabricación de rellenos y mermeladas con sabores naturales. En 1965 la empresa exporta a los Estados Unidos. La empresa Colombina fabrica confitería &#x1F36D; , galleteria &#x1F36A; , helados &#x1F366; , compotas, etc. Se destaca por haber creado productos con marca Bon Bon Bum. El Bon Bon Bum de fresa y uva nació en 1970. En 1992 el de Mora. En 1999 el de lulo. En 2000 el de fresa intensa. En 2001 el de Mandarina y el Jo Jo Jo. En 2002 el Limon 3X, el cool y el especial. En 2003 el de Mango X3. En 2004 el Cool X3, el Spinner y el Fussion. En 2005 el de Uva/Fresa. En 2006 el Marandina y el clear. En 2007 el atomic y el Ying Yang. En 2008 el Transfer y Yetra. En 2009 el de Kola y el Planet. En 2010 el Eco Planet y el Magnetic. En 2011 el de Sandia. En 2012 de Maracuyá y Lulo Sour y Blue Razz. En 2013 el Naranja Piña. En 2015 el de Limonada de Coco.       

### &#x1F4D5;&nbsp; Descripción: 
Cada Bon Bon Bum &#x1F36D;&nbsp; cuenta con una envoltura de plástico que protege el contenido del mismo. Cuenta con un palo de plástico que sirve de sustento para el dulce. El Bon Bon Bum cuenta con una goma de mascar.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 0g, Sales: 0g, Carbohidratos: 94g, Azucares: 76g, Proteinas: 9g. Energia: 1579kj/376kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
www.colombina.com.co

---
',
            'image' => 'https://ucarecdn.com/f3268f14-2c4c-4017-b7ca-ca7df4caea9e/BomBomBunFresaIntensaSingle.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Bon Bon Bum Wild Apple',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'BomBomBumApple',
            'teaserde' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Wildapfelgeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Mango Biche. En su interior tiene goma de mascar.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Das kolumbianische Unternehmen Colombina wurde in 1927 bei Hernando Caicedo gegründet. Er profitierte von den natürlichen Agrarressourcen, von den warmen Umgebungstemperaturen, und von der Qualität der Bodenfruchtbarkeit von Valle del Cauca-Kolumbien, um Süsswaren mit tropischen Geschmacksrichtungen aller Arten herzustellen. Gegen 1960 wurden europäischen Techniken eingeführt, um Füllungen und Marmeladen mit natürlichen Geschmäcker herzustellen. Erst 1965 exportiert das Unternehmen in die USA. Das Unternehmen Colombina stellt Süsswaren &#x1F36D; , Keksen &#x1F36A; , Eis &#x1F366; , Kompotte und vieles her. Das Unternehmen bezeichnet sich durch die Erstellung von Produkte mit der Marke Bon Bon Bum. Bon Bon Bum Erdbeere und Traube kamen im Markt in 1970. In 1992 in Brombeere. In 1999 in Lulo. In 2000 in intensive Erdbeere. In 2001 in Mandarine und Jo Jo Jo. In 2002 in Zitrone 3X, Cool und especial. In 2003 in Mango X2. In 2004 in Cool X3, Spinner und Fussion. In 2005 in Traube/Erdbeere. In 2006 in Mandarine und Clear. In 2007 der Atomic und Ying Yang. In 2008 der Transfer und Blue Razz. In 2013 in Orange/Ananas. In 2015 in Kokosnus/Zitronensaft.

### &#x1F4D9;&nbsp; Beschreibung:
Jedes Bon Bon Bum &#x1F36D;&nbsp; hat seine eigene Verpackung, die den Inhalt der Süssigkeit schützt. Das Produkt hat ein Stäbchen, dessen Zweck als Stütze dient. Bon Bon Bum beinhaltet ein Kaugummmi.  

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0g, Salzen: 0g, Kohlenhydrate: 94g, Zucker: 76g, Proteine: 9g, Energie: 1579kj/376kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La empresa colombiana Colombina fue fundada en 1927 por Hernando Caicedo que aprovechó la riqueza natural y agrícola del Valle del Cauca-Colombia, sus cálidas temperaturas, la calidad y fertilidad de sus suelos, para la producción de toda clase de dulces y confites con sabores a frutas tropicales. Hacia 1960 se introdujeron técnicas europeas para la fabricación de rellenos y mermeladas con sabores naturales. En 1965 la empresa exporta a los Estados Unidos. La empresa Colombina fabrica confitería &#x1F36D; , galleteria &#x1F36A; , helados &#x1F366; , compotas, etc. Se destaca por haber creado productos con marca Bon Bon Bum. El Bon Bon Bum de fresa y uva nació en 1970. En 1992 el de Mora. En 1999 el de lulo. En 2000 el de fresa intensa. En 2001 el de Mandarina y el Jo Jo Jo. En 2002 el Limon 3X, el cool y el especial. En 2003 el de Mango X3. En 2004 el Cool X3, el Spinner y el Fussion. En 2005 el de Uva/Fresa. En 2006 el Marandina y el clear. En 2007 el atomic y el Ying Yang. En 2008 el Transfer y Yetra. En 2009 el de Kola y el Planet. En 2010 el Eco Planet y el Magnetic. En 2011 el de Sandia. En 2012 de Maracuyá y Lulo Sour y Blue Razz. En 2013 el Naranja Piña. En 2015 el de Limonada de Coco.       

### &#x1F4D5;&nbsp; Descripción: 
Cada Bun Bon Bum &#x1F36D;&nbsp; cuenta con una envoltura de plástico que protege el contenido del mismo. Cuenta con un palo de plástico que sirve de sustento para el dulce. El Bon Bon Bum cuenta con una goma de mascar.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 0g, Sales: 0g, Carbohidratos: 94g, Azucares: 76g, Proteinas: 9g. Energia: 1579kj/376kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
www.colombina.com.co

---
',
            'image' => 'https://ucarecdn.com/7d800889-6046-4119-a1b5-3d72c5cd67cf/BomBomBunWildAppleSingle.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();                          
        $post = new \App\Models\Post([
            'title' => 'Bon Bon Bum Surtido',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'BonBonBumSurtidoSingle',
            'teaserde' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit intensive Erdbeer-, Erdbeer-, Mandarinen- und Wildapfelgeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabores a Fressa intensa, Fresa, Mandarina y Mango Biche. En su interior tiene goma de mascar.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Das kolumbianische Unternehmen Colombina wurde in 1927 bei Hernando Caicedo gegründet. Er profitierte von den natürlichen Agrarressourcen, von den warmen Umgebungstemperaturen, und von der Qualität der Bodenfruchtbarkeit von Valle del Cauca-Kolumbien, um Süsswaren mit tropischen Geschmacksrichtungen aller Arten herzustellen. Gegen 1960 wurden europäischen Techniken eingeführt, um Füllungen und Marmeladen mit natürlichen Geschmäcker herzustellen. Erst 1965 exportiert das Unternehmen in die USA. Das Unternehmen Colombina stellt Süsswaren &#x1F36D; , Keksen &#x1F36A; , Eis &#x1F366; , Kompotte und vieles her. Das Unternehmen bezeichnet sich durch die Erstellung von Produkte mit der Marke Bon Bon Bum. Bon Bon Bum Erdbeere und Traube kamen im Markt in 1970. In 1992 in Brombeere. In 1999 in Lulo. In 2000 in intensive Erdbeere. In 2001 in Mandarine und Jo Jo Jo. In 2002 in Zitrone 3X, Cool und especial. In 2003 in Mango X2. In 2004 in Cool X3, Spinner und Fussion. In 2005 in Traube/Erdbeere. In 2006 in Mandarine und Clear. In 2007 der Atomic und Ying Yang. In 2008 der Transfer und Blue Razz. In 2013 in Orange/Ananas. In 2015 in Kokosnus/Zitronensaft.

### &#x1F4D9;&nbsp; Beschreibung:
Jedes Bon Bon Bum &#x1F36D;&nbsp; hat seine eigene Verpackung, die den Inhalt der Süssigkeit schützt. Das Produkt hat ein Stäbchen, dessen Zweck als Stütze dient. Bon Bon Bum beinhaltet ein Kaugummmi.  

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0g, Salzen: 0g, Kohlenhydrate: 94g, Zucker: 76g, Proteine: 9g, Energie: 1579kj/376kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La empresa colombiana Colombina fue fundada en 1927 por Hernando Caicedo que aprovechó la riqueza natural y agrícola del Valle del Cauca-Colombia, sus cálidas temperaturas, la calidad y fertilidad de sus suelos, para la producción de toda clase de dulces y confites con sabores a frutas tropicales. Hacia 1960 se introdujeron técnicas europeas para la fabricación de rellenos y mermeladas con sabores naturales. En 1965 la empresa exporta a los Estados Unidos. La empresa Colombina fabrica confitería &#x1F36D; , galleteria &#x1F36A; , helados &#x1F366; , compotas, etc. Se destaca por haber creado productos con marca Bon Bon Bum. El Bon Bon Bum de fresa y uva nació en 1970. En 1992 el de Mora. En 1999 el de lulo. En 2000 el de fresa intensa. En 2001 el de Mandarina y el Jo Jo Jo. En 2002 el Limon 3X, el cool y el especial. En 2003 el de Mango X3. En 2004 el Cool X3, el Spinner y el Fussion. En 2005 el de Uva/Fresa. En 2006 el Marandina y el clear. En 2007 el atomic y el Ying Yang. En 2008 el Transfer y Yetra. En 2009 el de Kola y el Planet. En 2010 el Eco Planet y el Magnetic. En 2011 el de Sandia. En 2012 de Maracuyá y Lulo Sour y Blue Razz. En 2013 el Naranja Piña. En 2015 el de Limonada de Coco.       

### &#x1F4D5;&nbsp; Descripción: 
Cada Bon Bon Bum &#x1F36D;&nbsp; cuenta con una envoltura de plástico que protege el contenido del mismo. Cuenta con un palo de plástico que sirve de sustento para el dulce. El Bon Bon Bum cuenta con una goma de mascar.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 0g, Sales: 0g, Carbohidratos: 94g, Azucares: 76g, Proteinas: 9g. Energia: 1579kj/376kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
www.colombina.com.co

---
',
            'image' => 'https://ucarecdn.com/e5f01393-f35c-436d-b696-2356c8604869/BomBomBunSurtidoSingle.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Bon Bon Bum Surtido',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'BonBonBumSurtido',
            'teaserde' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Wildapfel-, Erdbeere-, intensive Erdbeer- und Mandarinegeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabores a Mango Biche, Fresa, Fressa intensa y Mandarina. En su interior tiene goma de mascar.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Das kolumbianische Unternehmen Colombina wurde in 1927 bei Hernando Caicedo gegründet. Er profitierte von den natürlichen Agrarressourcen, von den warmen Umgebungstemperaturen, und von der Qualität der Bodenfruchtbarkeit von Valle del Cauca-Kolumbien, um Süsswaren mit tropischen Geschmacksrichtungen aller Arten herzustellen. Gegen 1960 wurden europäischen Techniken eingeführt, um Füllungen und Marmeladen mit natürlichen Geschmäcker herzustellen. Erst 1965 exportiert das Unternehmen in die USA. Das Unternehmen Colombina stellt Süsswaren &#x1F36D; , Keksen &#x1F36A; , Eis &#x1F366; , Kompotte und vieles her. Das Unternehmen bezeichnet sich durch die Erstellung von Produkte mit der Marke Bon Bon Bum. Bon Bon Bum Erdbeere und Traube kamen im Markt in 1970. In 1992 in Brombeere. In 1999 in Lulo. In 2000 in intensive Erdbeere. In 2001 in Mandarine und Jo Jo Jo. In 2002 in Zitrone 3X, Cool und especial. In 2003 in Mango X2. In 2004 in Cool X3, Spinner und Fussion. In 2005 in Traube/Erdbeere. In 2006 in Mandarine und Clear. In 2007 der Atomic und Ying Yang. In 2008 der Transfer und Blue Razz. In 2013 in Orange/Ananas. In 2015 in Kokosnus/Zitronensaft.

### &#x1F4D9;&nbsp; Beschreibung:
Jedes Bon Bon Bum &#x1F36D;&nbsp; hat seine eigene Verpackung, die den Inhalt der Süssigkeit schützt. Das Produkt hat ein Stäbchen, dessen Zweck als Stütze dient. Bon Bon Bum beinhaltet ein Kaugummmi.  

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 0g, Salzen: 0g, Kohlenhydrate: 94g, Zucker: 76g, Proteine: 9g, Energie: 1579kj/376kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La empresa colombiana Colombina fue fundada en 1927 por Hernando Caicedo que aprovechó la riqueza natural y agrícola del Valle del Cauca-Colombia, sus cálidas temperaturas, la calidad y fertilidad de sus suelos, para la producción de toda clase de dulces y confites con sabores a frutas tropicales. Hacia 1960 se introdujeron técnicas europeas para la fabricación de rellenos y mermeladas con sabores naturales. En 1965 la empresa exporta a los Estados Unidos. La empresa Colombina fabrica confitería &#x1F36D; , galleteria &#x1F36A; , helados &#x1F366; , compotas, etc. Se destaca por haber creado productos con marca Bon Bon Bum. El Bon Bon Bum de fresa y uva nació en 1970. En 1992 el de Mora. En 1999 el de lulo. En 2000 el de fresa intensa. En 2001 el de Mandarina y el Jo Jo Jo. En 2002 el Limon 3X, el cool y el especial. En 2003 el de Mango X3. En 2004 el Cool X3, el Spinner y el Fussion. En 2005 el de Uva/Fresa. En 2006 el Marandina y el clear. En 2007 el atomic y el Ying Yang. En 2008 el Transfer y Yetra. En 2009 el de Kola y el Planet. En 2010 el Eco Planet y el Magnetic. En 2011 el de Sandia. En 2012 de Maracuyá y Lulo Sour y Blue Razz. En 2013 el Naranja Piña. En 2015 el de Limonada de Coco.       

### &#x1F4D5;&nbsp; Descripción: 
Cada Bon Bon Bum &#x1F36D;&nbsp; cuenta con una envoltura de plástico que protege el contenido del mismo. Cuenta con un palo de plástico que sirve de sustento para el dulce. El Bon Bon Bum cuenta con una goma de mascar.  

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 0g, Sales: 0g, Carbohidratos: 94g, Azucares: 76g, Proteinas: 9g. Energia: 1579kj/376kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
www.colombina.com.co

---
',
            'image' => 'https://ucarecdn.com/e035ba5b-f65d-495a-8040-a608a22eda10/Surtido.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();      
        $post = new \App\Models\Post([
            'title' => 'Coffe Delight',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CoffeDelight',
            'teaserde' => '&#x1F4D9;&nbsp; Coffee Delight ist das Ergebnis des Gemisches von kolumbianischem Kaffee, Milch, Zucker und andere Zutaten. Es ähnelt dem Geschmack nach Karamell. Es hat eine runde Form. Der Geschmack begeistert, inspiriert und erfreut. Empfohlen für Schüler/Studenten.',
            'teaseres' => '&#x1F4D5;&nbsp; El coffee delight es el resultado de la mezcla de ingredientes de café colombiano. Tiene sabor a caramelo, tiene forma redonda. Su sabor entusiasma, inspira y deleita. Recomendado para estudiantes.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Das kolumbianische Unternehmen Colombina wurde in 1927 bei Hernando Caicedo gegründet. Er profitierte von den natürlichen Agrarressourcen, von den warmen Umgebungstemperaturen, und von der Qualität der Bodenfruchtbarkeit von Valle del Cauca-Kolumbien, um Süsswaren mit tropischen Geschmacksrichtungen aller Arten herzustellen. Gegen 1960 wurden europäischen Techniken eingeführt, um Füllungen und Marmeladen mit natürlichen Geschmäcker herzustellen. Erst 1965 exportiert das Unternehmen in die USA. Das Unternehmen Colombina stellt Süsswaren &#x1F36D; , Keksen &#x1F36A; , Eis &#x1F366; , Kompotte, und anderes her. In 1975 wurde Coffee Delight &#x02615;&nbsp; dem Markt veröffentlicht, eine leckere Süssigkeit, die in Kolumbien bekannt ist. 

### &#x1F4D9;&nbsp; Geschmacke:
Coffee Delight &#x1F36C;&nbsp; ist das Ergebnis des Gemisches von kolumbianischem Kaffee, Milch, Zucker und andere Zutaten. Es ähnelt dem Geschmack nach Karamell, hat eine runde Form. Der Geschmack begeistert, inspiriert und erfreut. Empfohlen für Schüler/Studenten. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 15g:
Totalen Lipiden: 1g, Salzen: 75mg, Kohlenhydrate: 12g, Zucker: 9g, Proteine: 0g, Energie: 250kj/60kcal. 

---

### &#x1F4D5;&nbsp; Historia: 
La empresa colombiana Colombina fue fundada en 1927 por Hernando Caicedo que aprovechó la riqueza natural y agrícola del Valle del Cauca-Colombia, sus cálidas temperaturas, la calidad y fertilidad de sus suelos, para la producción de toda clase de dulces y confites con sabores a frutas tropicales. Hacia 1960 se introdujeron técnicas europeas para la fabricación de rellenos y mermeladas con sabores naturales. En 1965 la empresa exporta a los Estados Unidos. La empresa Colombina fabrica de confitería &#x1F36D; , galleteria &#x1F36A; , helados &#x1F366; , compotas, etc. En 1975 se lanzó Coffe Delight, un dulce de café &#x02615;&nbsp; delicioso que se posicionó rápidamente com ícono colombiano.   

### &#x1F4D5;&nbsp; Sabor:
El coffee delight &#x1F36C;&nbsp; es el resultado de la mezcla de ingredientes de café colombiano. Tiene sabor a caramelo, tiene forma redonda. Su sabor entusiasma, inspira y deleita. Recomendado para estudiantes.

### &#x1F4D5;&nbsp; Contenido nutricional 15g:
Grasas totales: 1g, Sales: 75mg, Carbohidratos: 12g, Azucares: 9g, Proteinas: 0g. Energia: 250kj/60kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.colombina.com.co

---
',
            'image' => 'https://ucarecdn.com/41c9f1c4-fe40-44bf-a19d-c8648bc80c82/Delight.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Bombón Supercoco',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'BombonSupercocoSingle',
            'teaserde' => '&#x1F4D9;&nbsp; Supercoco ist ein Lollipop mit Kokosnuskaramell. Der Geschmack leitet sich vom Gemisch aus Zucker, Kokosnuss, Glukose, Wasser und Jodsalz ab.',
            'teaseres' => '&#x1F4D5;&nbsp; Supercoco es una chupeta de caramelo con coco. Su sabor se deriva de la mezcla de azúcar, coco, glucosa, agua y sal yoyada.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Super ist ein kolumbianisches Unternehmen für die Produktion von Bonbons &#x1F36C; . Federico Peters, ein Araber-Amerikaner begann in 1948 in Manizales die Herstellung von Kaugummi, Turrón (Süssware aus Mandeln, Honig Zucker und Eiweiss) und Bombons. Die Kreativität steht primär in die Stärken von Super.

### &#x1F4D9;&nbsp; Geschmack: 
Supercoco ist ein Lollipop &#x1F36D;&nbsp; mit Kokosnuskaramell. Der Geschmack leitet sich vom Gemisch aus Zucker, Kokosnuss, Glukose, Wasser und Jodsalz ab. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 15g:
Totalen Lipiden: 2g, Salzen: 15mg, Kohlenhydrate: 12g, Zucker: 9g, Proteine: 0g, Energie: 84kj/20kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Super, es una empresa colombiana dedicada a la producción de golosinas &#x1F36C; . Federico Peters, un Árabe-Americano, inició en 1948 en Manizales la elaboración de chicles, turrones y bombones. Sus fortalezas son la creatividad. 

### &#x1F4D5;&nbsp; Sabor: 
Supercoco es una chupeta &#x1F36D;&nbsp; de caramelo con coco. Su sabor se deriva de la mezcla de azúcar, coco, glucosa, agua y sal yoyada.    

### &#x1F4D5;&nbsp; Contenido nutricional 15g:
Grasas totales: 2g, Sales: 15mg, Carbohidratos: 12g, Azucares: 9g, Proteinas: 0g. Energia: 84kj/20kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.super.com.co

---
',
            'image' => 'https://ucarecdn.com/f8901714-6679-419f-b080-bdc7f65280ee/SuperCocoSingle.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Bombón Supercoco',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'BombonSupercoco',
            'teaserde' => '&#x1F4D9;&nbsp; Supercoco ist ein Lollipop mit Kokosnuskaramell. Der Geschmack leitet sich vom Gemisch aus Zucker, Kokosnuss, Glukose, Wasser und Jodsalz ab.',
            'teaseres' => '&#x1F4D5;&nbsp; Supercoco es una chupeta de caramelo con coco. Su sabor se deriva de la mezcla de azúcar, coco, glucosa, agua y sal yoyada.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Super ist ein kolumbianisches Unternehmen für die Produktion von Bonbons &#x1F36C; . Federico Peters, ein Araber-Amerikaner begann in 1948 in Manizales die Herstellung von Kaugummi, Turrón (Süssware aus Mandeln, Honig Zucker und Eiweiss) und Bombons. Die Kreativität steht primär in die Stärken von Super.

### &#x1F4D9;&nbsp; Geschmack: 
Supercoco ist ein Lollipop &#x1F36D;&nbsp; mit Kokosnuskaramell. Der Geschmack leitet sich vom Gemisch aus Zucker, Kokosnuss, Glukose, Wasser und Jodsalz ab. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 15g:
Totalen Lipiden: 2g, Salzen: 15mg, Kohlenhydrate: 12g, Zucker: 9g, Proteine: 0g, Energie: 84kj/20kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Super, es una empresa colombiana dedicada a la producción de golosinas &#x1F36C; . Federico Peters, un Árabe-Americano, inició en 1948 en Manizales la elaboración de chicles, turrones y bombones. Sus fortalezas son la creatividad. 

### &#x1F4D5;&nbsp; Sabor: 
Supercoco es una chupeta &#x1F36D;&nbsp; de caramelo con coco. Su sabor se deriva de la mezcla de azúcar, coco, glucosa, agua y sal yoyada.    

### &#x1F4D5;&nbsp; Contenido nutricional 15g:
Grasas totales: 2g, Sales: 15mg, Carbohidratos: 12g, Azucares: 9g, Proteinas: 0g. Energia: 84kj/20kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.super.com.co

---
',
            'image' => 'https://ucarecdn.com/01a00388-25e0-4aa6-9eb8-2bd1cc1491ae/SuperCoco.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();         
        $post = new \App\Models\Post([
            'title' => 'Frunas',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Frunas',
            'teaserde' => '&#x1F4D9;&nbsp; Frunas sind kaubaren weichen Bonbons mit diversen Geschmachsrichtungen (Erdbeere, Zitrone, Orange, Fruits).',
            'teaseres' => '&#x1F4D5;&nbsp; Frunas son caramelos blandos masticables con diversos sabores (fresa, limón, naranja, Frutas).',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Aldor wurde in Cali-Kolumbien von der Familie Aljure-Dorronsoro gegründet und begann die Produktion der Lollipops &#x1F36D;&nbsp; und Karamele &#x1F36C;&nbsp; in 1991. In 1997 ist der Yogurtgeschmack integriert in der Herstellung neue Produktarten und so ergibt sich das Lollipop &#x1F36D;&nbsp; Helachup. Eine Innovation in 2001 ergab die höchstbekannte Yogueta. In 2003 der Pin Pop kommt in den Markt. Aldor begann seit 2006 mit der Fertigung für Cadburry-Adams und Nestlé. Aldor gewinnt in 2011 die Marke Frunas. 

### &#x1F4D9;&nbsp; Geschmack: 
Frunas sind kaubaren weichen Bonbons &#x1F36C;&nbsp; mit diversen Geschmachsrichtungen (Erdbeere, Zitrone, Orange, Fruits).

### &#x1F4D9;&nbsp; Nährstoffgehalt 14g:
Totalen Lipiden: 0.5g, Salzen: 0mg, Kohlenhydrate: 12g, Zucker: 8g, Proteine: 0g, Energie: 209kj/50kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Aldor es una empresa fundada en 1991 en Cali-Colombia por la familia Aljure-Dorronsoro e inicia la producción de chupetes &#x1F36D;&nbsp; y caramelos &#x1F36C; . En 1997 el sabor a yogurt es incorporado al chupete &#x1F36D;&nbsp; Helachup y en 2001 se lanza la Yogueta. En 2003 se lanza el Pin Pop. Aldor empezó desde 2006 a manufacturar para Cadburry-Adams y Nestlé. Aldor gana en 2011 la marca de Frunas.

### &#x1F4D5;&nbsp; Sabor: 
Frunas son caramelos &#x1F36C;&nbsp; blandos masticables con diversos sabores (fresa, limón, naranja, Frutas).

### &#x1F4D5;&nbsp; Contenido nutricional 14g:
Grasas totales: 0.5g, Sales: 0mg, Carbohidratos: 12g, Azucares: 8g, Proteinas: 0g. Energia: 209kj/50kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.aldoronline.com

---
',
            'image' => 'https://ucarecdn.com/9d8910db-a72b-42b2-ac3a-a36e49d85016/Frunas.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();     
        $post = new \App\Models\Post([
            'title' => 'Dulce de Leche Mardel',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'DulceDeLeche',
            'teaserde' => '&#x1F4D9;&nbsp; Dulce de Leche ist süss. Es wird gewöhnlich in Dessert wie alfajores, cuchufiles, panqueques, Tortillas, Wafles, Eis, Oblaten, Kuchen und Gebäcke gebraucht.',
            'teaseres' => '&#x1F4D5;&nbsp; Su sabor característico es el dulce. Suele utilizarse en postres como alfajores, cuchufiles, panqueques, tortillas, wafles, helados, obleas, tortas y pasteles.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Dulce de Leche &#x1F36F;&nbsp; hat keine spezifische Herkunft. Man glaubt, Indonesien sei der Ursprung der &#x1F36F;&nbsp; Dulce de Leche. Im VI Jahrhundert wurde in die Philippinen gebracht, wo Jahrhunderte später während der Kolonialisierungszeit durch die spanische Krone nach Lateinamerika mitgebracht wurde. Andere Quellen geben Chile als Ursprung der &#x1F36F;&nbsp; Dulce de Leche, die mit der Zeit nach Cuyo, Tucumán und schliesslich nach Buenos Aires gebracht wurde. Andere Quellen zeigen, Paraguay seie der Ursprungsort, wo man diese aus Milch und Zuckersaft herstellte. 

### &#x1F4D9;&nbsp; Herstellung: 
Dulce de Leche &#x1F36F;&nbsp; wird aus Milch, Zucker, und Vanillenessenz gemacht. Es ist gewöhnlich Natriumbikarbonat oder Rahm hinzufügen. Sie kann auch mit Ziegenmilch &#x1F410;&nbsp; hergestellt werden. In Kolumbien nennt man sie &#x1F36F;&nbsp; Arequipe und entsteht, wenn der Zucker karamellisiert und die Milch siedet. Mexikanische Cajeta entsteht aus der Kombination von Kuh- und Ziegenmilch. 

### &#x1F4D9;&nbsp; Neugierde: 
"Dulce de Leche" wird in Argentinien, Bolivien, Spanien, Paraguay, Dominikanische Republik, Uruguay und Ecuador genannt. "Arequipe" wird in Kolumbien, Venezuela und Guatemala genannt. "Bollo de Leche" in Nicaragua. "Cajete" in Mexiko. "Fanguito" in Kuba. "Manjar" in Chile. "Confiture de lait" in Frankreich. "Doce de leite" in Brasilien und Portugal und "Milk caramel" in Englisch gesprochene Länder. 

### &#x1F4D9;&nbsp; Geschmack: 
Dulce de Leche ist süss. Es wird gewöhnlich in Dessert wie alfajores, cuchufiles, panqueques, Tortillas, Wafles, Eis, Oblaten, Kuchen und Gebäcke gebraucht.  

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 6g, Salzen: 0.4g, Kohlenhydrate: 57g, Zucker: 57g, Proteine: 7g, Energie: 1310kj/310kcal. 

---

### &#x1F4D5;&nbsp; Historia:
El dulce de leche &#x1F36F;&nbsp; no tiene un orígen específico. Se cree que el origen del dulce de leche &#x1F36F;&nbsp; estaría en Indonesia y que en el siglo VI fue llevado a las Filipinas, donde siglos más tarde debido a tiempos de colonización sería llevado por la corona española a latinoamérica. Otros orígenes se dan en Chile que más tarde llegaría a Cuyo, a Tucumán y a Buenos Aires-Argentina. Otros fuentes indican que el orígen se dió en Paraguay hecho a base de leche y almíbar de azúcar. 

### &#x1F4D5;&nbsp; Fabricación: 
El dulce de leche &#x1F36F;&nbsp; se elabora con leche, azúcar y escencia de vainilla. Se le suele agregar bicarbonato de sodio o crema de leche. Se puede elaborar con leche de cabra &#x1F410; . En Colombia se le conoce con el nombre de "arequipe" &#x1F36F;&nbsp; y se elabora hasta caramelizar el azúcar y evaporar la leche. La cajeta mexicana está hecha de una combinación de leche de vaca y leche de cabra.

### &#x1F4D5;&nbsp; Curiosidades: 
Se le conoce como "Dulce de leche" en Argentina, Bolivia, España, Paraguay, República Dominicana, Uruguay y Ecuador. Se le conoce como "Arequipe" en Colombia, Venezuela y Guatemala. Como "Bollo de leche" en Nicaragua. "Cajeta" en México. "Fanguito" en Cuba. "Manjar" en Chile. "Confiture de lait" en Francia. "Doce de leite" en Brasil y Portugal. "Milk caramel" en paises de habla inglesa. 

### &#x1F4D5;&nbsp; Sabor: 
Su sabor característico es el dulce. Suele utilizarse en postres como alfajores, cuchufiles, panqueques, tortillas, wafles, helados, obleas, tortas y pasteles.

---

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 6g, Sales: 0.4g, Carbohidratos: 57g, Azucares: 57g, Proteinas: 7g. Energia: 1310kj/310kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.dulcedelechemardel.com

---
',
            'image' => 'https://ucarecdn.com/b0c5dec1-3708-4326-a771-2f0f6f8d696a/DulcedeLeche.png',
            'imga' => 'https://ucarecdn.com/d2cdde84-877e-4c31-b55b-dbc233f46246/1.png',
            'descra' => 'Dulce de Leche Mardel',
            'imgb' => 'https://ucarecdn.com/c3ecca17-8366-404c-b904-faa49063ccbe/2.png',
            'descrb' => 'Dulce de Leche Mardel',
            'imgc' => 'https://ucarecdn.com/d2cdde84-877e-4c31-b55b-dbc233f46246/1.png',
            'descrc' => 'Dulce de Leche Mardel',
            'imgd' => 'https://ucarecdn.com/c3ecca17-8366-404c-b904-faa49063ccbe/2.png',
            'descrd' => 'Dulce de Leche Mardel',
            'live' => 1,
        ]);
        $post->save();       
        $post = new \App\Models\Post([
            'title' => 'Nucita',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Nucita',
            'teaserde' => '&#x1F4D9;&nbsp; Nucita ist eine Creme aus Milch, Schokoladen und Haselnüsse.',
            'teaseres' => '&#x1F4D5;&nbsp; Nucita es una crema con sabor a leche, chocolate y nueces.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Das kolumbianische Unternehmen Colombina wurde in 1927 bei Hernando Caicedo gegründet. Er profitierte von den natürlichen Agrarressourcen, von den warmen Umgebungstemperaturen und von der Qualität der Bodenfruchtbarkeit von Valle del Cauca-Kolumbien, um Süsswaren mit tropischen Geschmacksrichtungen aller Arten herzustellen. Gegen 1960 wurden europäischen Techniken eingeführt, um Füllungen und Marmeladen mit natürlichen Geschmäcker herzustellen. Erst 1965 exportiert das Unternehmen in die USA. In 1970 entsteht Bon Bon Bum. In 1979 wurde &#x1F439;&nbsp; Nucita im Markt bekannt. Die Idee des &#x1F439; &#x1F602;&nbsp; Eichhörnchen in aller Werbungen und auf Verpackungen kommt aus den Nüssen &#x1F330;&nbsp; und Haselnüssen &#x1F330; , welche in Nucita zu finden sind. Die Marke Nucita breitete sich in allen Märkten aus. In 2004 waren neue Produkte zu sehen wie Nucitaeis und in 2006 die Nucita Keksen. Nucita &#x1F439;&nbsp; bezeichnet sich durch einen zärtlichen kindlichen Charakter.       

### &#x1F4D9;&nbsp; Beschreibung: 
Nucita ist eine Creme mit Milch- &#x1F37C; , Schokoladen- &#x1F36B;&nbsp; und &#x1F439;&nbsp; Haselnüssgeschmack.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Totalen Lipiden: 36g, Salzen: 0.3g, Kohlenhydrate: 84g, Zucker: 57g, Proteine: 0g, Energie: 2389kj/571kcal. 

---

### &#x1F4D5;&nbsp; Historia:
La empresa colombiana Colombina fue fundada en 1927 por Hernando Caicedo que aprovechó la riqueza natural y agrícola del Valle del Cauca-Colombia, sus cálidas temperaturas, la calidad y fertilidad de sus suelos, para la producción de toda clase de dulces y confites con sabores a frutas tropicales. Hacia 1960 se introdujeron técnicas europeas para la fabricación de rellenos y mermeladas con sabores naturales. En 1965 la empresa exporta a los Estados Unidos. En 1970 nace el Bon Bon Bum. En 1979 llegó al mercado la &#x1F439;&nbsp; Nucita. La idea de la &#x1F439; &#x1F602;&nbsp; ardilla en las propagandas y empaque de nucita nace del ingrediente de &#x1F330;&nbsp; nueces y &#x1F330;&nbsp; avellanas. La marca Nucita &#x1F439;&nbsp; ha extendido sus mercados en 2004 con productos como Helado Nucita y en 2006 con Galletas Nucita. Nucita &#x1F439;&nbsp; se caracteriza por personalidad tierna e infantil. 

### &#x1F4D5;&nbsp; Descripción: 
Nucita es una crema con sabor a leche &#x1F37C; , chocolate &#x1F36B;&nbsp; y &#x1F439;&nbsp; nueces.

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Grasas totales: 36g, Sales: 0.3g, Carbohidratos: 84g, Azucares: 57g, Proteinas: 0g. Energia: 2389kj/571kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
www.colombina.com.co

---            

',
            'image' => 'https://ucarecdn.com/df785635-e429-4eaa-91b7-f6e8cfe1be38/Nucita.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();   
        $post = new \App\Models\Post([
            'title' => 'Chocolatina Jet',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'ChocolatinaJet',
            'teaserde' => '&#x1F4D9;&nbsp; Die Chocolatina Jet hat einen leckeren Aroma und Geschmack, Null Cholesterin.',
            'teaseres' => '&#x1F4D5;&nbsp; La Chocolatina Jet tiene un delicioso aroma y sabor, cero colesterol.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Der Kakaobaum &#x1F333;&nbsp; wurde vermutlich erstmal um 1500 v. Chr. von den Olmeken genutzt, die im Tiefland der mexikanischen Golfküste lebten. Um 600 wurde der Kakao &#x1F333;&nbsp; dann von den Maya angebaut. Die Azteken gaben dem mit kaltem Wasser vermischten Kakaogetränk &#x1F333;&nbsp; den Namen: "xocolati". Mit Hilfe eines Holzquirls, heute "Molinillo", schlug man die Flüssigkeit schaumig auf. Bevorzugt wurde das Getränk von Kriegern, Priestern oder zur Opfergaben getrunken. Hernán Cortés berichtete, dass der aztekische König Montezuma &#x1F64F;&nbsp; kakaohaltige Getränke in grosser Menge zu sich nahm. Die Kakaobohne &#x1F330;&nbsp; diente teilweise als Zahlungsmittel &#x1F4B0; . 1528 brachte Cortés den Kakao nach Europa. Erst nach Zugabe von Honig &#x1F36F;&nbsp; und Rohrzucker wurde das Getränk beliebt. 1657 öffnete sich das erste Schokoladencafé in London. Erst 18./19. Jahrhundert kommt die Erfindung der Pressung und Zermahlung, damit der Kakaobutter vom Kakao &#x1F333;&nbsp; abgespaltet wird, heute ein üblicher Vorgang zur Produktion von Kakaopulver. Im 1804 wurde die erste Schokoladenfabrik &#x1F36B;&nbsp; in Deutschland gegründet. 1819 wurde die erste Schweizer Schokoladenfabrik &#x1F36B;&nbsp; von François-Louis Cailler in Vevey gegründet. 1875 wurde die erste Schweizer Milchschokolade von Daniel Peter und Henri Nestlé auf den Markt gebracht. 1879 entwickelte Rodolphe Lindt ein Verfahren zum Conchieren der Schokolade (Schmelzen auf der Zunge). Die heutige Grupo Nutresa, früher Grupo Nacional de Chocolates &#x1F36B; , ist eines der grössten Unternehmen Kolumbiens. Es wurde in 1920 in Antioquia-Colombia wie die Compañia de Chocolates &#x1F36B;&nbsp; Cruz Roja gegründet aus der Integration lokalen Kleinunternehmern. Die herausragenden Marken sind Corona, Diana und Tesalia, ausserdem die Konsolidierung im Schokoladenmarkt mit der Akquisition von Chocolates &#x1F36B;&nbsp; Chaves und Equitativa, Santa Fe und Tequendama Unternehmen. Gegen die 60 jahren wird die einzigartige Chocolatina Jet und Chocolisto eingeführt, später die Integration von Nüsse, Getreiden und Sammlung von Bilddrucken, deren Akzeptanz das Album Historia Natural am meisten erhielt. Gegen die 80 Jahren entstanden neue Produkte wie Wafer Jet, Combi Jet, Triki Jet, Coco Jet und Deli Jet. Gegen die 90 Jahren wurden diäthetische Lebensmitteln eingeführt. In 2000 gab es viele Vereinigungen von Unternehmen wie mit dem Compañia de Galletas Noel. In 2012 Chocolatina Jet feierte 50 Jahren. In 2013 Nutresa S.A ist anerkannt mit der Zertifizierung als gesundheitsfördernde Organisation durch die kolumbianische Stiftung des Herzens &#x1F60D; . Das Unternehmen bezeichnet sich durch die Diversifizierung aller Getränkarten aus Kaffee und Schokolade. Das Unternehmen ist stark bekannt in der Andina Region, Zentralamerika und der Karibik, sowie die Hispanische Gemeinschaft und die Vereinigten Staaten Nordamerikas.             

### &#x1F4D9;&nbsp; Geschmack: 
La Chocolatina Jet &#x1F36B;&nbsp; hat einen leckeren Aroma und Geschmack, Null Cholesterin.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Kalorien: 100, Totalen Lipiden: 36.1g, Salzen: 0.17g, Kohlenhydrate: 55.5g, Zucker: 50g, Proteine: 5.5g, Energie: 2325.3kj/555.5kcal. 

---

### &#x1F4D5;&nbsp; Historia:
El árbol de cacao &#x1F333;&nbsp; se presume fue aprovechado en 1500 a.C por los Olmecas que habitaban en las llanuras de la costa del Golfo mexicano. Hacia el año 600 el cacao &#x1F333;&nbsp; fue cultivado por los Mayas. Los aztecas le dieron el nombre "xocolati" a la mezcla del cacao &#x1F333;&nbsp; con agua. Con la ayuda de un molinillo, se podia hacer la bebida de forma más espumosa. La bebida fue utilizada preferiblemente por los guerreros, sacerdotes y para ofrendas. Hernán Cortés informaba a cerca de las grandes cantidades de bebida con contenido de cacao &#x1F333;&nbsp; que el rey azteca Montezuma &#x1F64F;&nbsp; ingeria. La almendra de cacao &#x1F330;&nbsp; fue utilizada como medio de pago &#x1F4B0; . En 1528 Cortés llevó el cacao a Europa. Luego de la añadidura de miel &#x1F36F;&nbsp; y caña de azúcar se hizo la bebida más popular. En 1657 se funda la primera cafetería con la venta del Chocolate &#x1F36B;&nbsp; en Londres. Entre los siglos 18 y 19 el prensado y la molienda hace parte de innovaciones destacadas, ya que la manteca de cacao &#x1F333;&nbsp; se puede escindir del cacao &#x1F333; , hoy un proceso habitual para la producción de polvo de cacao&#x1F333; . En 1804 se funda la primera fábrica de chocolates &#x1F36B;&nbsp; en Alemania. En 1819 François-Louis Cailler funda la primera fábrica de chocolates suiza &#x1F36B;&nbsp; en Vevey. En 1875 el primer chocolate de leche es ofrecida al mercado suizo por Daniel Peter y Henri Nestlé. En 1879 Rodolphe Lindt innova el proceso de conche (derretimiento del chocolate &#x1F36B;&nbsp; en la lengua). El hoy dia llamado Grupo Nutresa, antes conocido como Grupo Nacional de Chocolates &#x1F36B; , es una de las empresas más grandes de Colombia. Se fundó el 1920 en Antioquia-Colombia como la Compañia de Chocolates &#x1F36B;&nbsp; Cruz Roja a partir de la integración de pequeños productores locales. Las marcas Corona, Diana y Tesalia son las más destacadas, además de la consolidación en el mercado con la adquisición de empresas de chocolates &#x1F36B;&nbsp; Chaves y Equitativa, Santa Fe y Tequendama. En la década de los 60 se ofrece la Chocolatina Jet y Chocolisto, posteriormente la inclusión de nueces, cereales y la colección de estampas, donde el Álbum de Historia Natural alcanzó más aceptación. En los años 80 surjieron nuevos productos como Wafer Jet, Combi Jet, Triki Jet, Coco Jet y Deli Jet. En los años 90 se introdujeron chocolate &#x1F36B;&nbsp; dietético sin azúcar. En 2000 hubo asociaciones con muchas compañias como con la Compañia de Galletas Noel. En el 2012 Chocolatina Jet cumplió 50 años. En el 2013 Nutresa S.A es reconocida como la primera empresa que recibe la certificación como Organización Saludable por parte de la Fundación Colombiana del Corazón &#x1F60D; . La empresa se destaca por la gran diversificación en bebidas de café y bebidas de chocolate &#x1F36B; . Esta empresa es muy conocida en la Región Andina, Centroamérica y el Caribe, y de la Comunidad hispana de los Estados Unidos. 
          
### &#x1F4D5;&nbsp; Sabor: 
La Chocolatina Jet &#x1F36B;&nbsp; tiene un delicioso aroma y sabor, cero colesterol.

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Calorias: 100, Grasas totales: 36.1g, Sales: 0.17g, Carbohidratos: 55.5g, Azucares: 50g, Proteinas: 5.5g. Energia: 2325.3kj/555.5kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://chocolates.com.co

---
',
            'image' => 'https://ucarecdn.com/7d860705-89a8-457f-808b-05017f198a93/Jet.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Barrilete',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Barrilete',
            'teaserde' => '&#x1F4D9;&nbsp; Barrilete ist eine lange Süssigkeit. Der Gemisch der Farben verschmelzen beim Kauen auf der Zunge und erzeugen einen Tuttifritti Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Barrilete es dulce y alargado. Al mascar, la mezcla de los colores del barrilete se derriten en la lengua dando un sabor a tutifruti.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Super ist ein kolumbianisches Unternehmen für die Produktion von Bonbons &#x1F36C; . Federico Peters, ein Araber-Amerikaner begann in 1948 in Manizales die Herstellung von Kaugummi, Turrón (Süssware aus Mandeln, Honig Zucker und Eiweiss) und Bombons &#x1F36C; . Die Kreativität steht primär in die Stärken von Super.

### &#x1F4D9;&nbsp; Geschmack: 
Barrilete ist eine lange &#x1F36C;&nbsp; Süssigkeit. Der Gemisch der Farben verschmelzen beim Kauen auf der Zunge &#x1F61C;&nbsp; und erzeugen einen Tuttifritti Geschmack. 

### &#x1F4D9;&nbsp; Nährstoffgehalt 16g:
Totalen Lipiden: 1.5g, Salzen: 10mg, Kohlenhydrate: 14g, Zucker: 8g, Proteine: 0g, Energie: 292kj/70kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Super, es una empresa colombiana dedicada a la producción de golosinas &#x1F36C; . Federico Peters, un Árabe-Americano, inició en 1948 en Manizales la elaboración de chicles, turrones y bombones &#x1F36C; . Sus fortalezas son la creatividad. 

### &#x1F4D5;&nbsp; Sabor: 
Barrilete es dulce &#x1F36C;&nbsp; y alargado. Al mascar, la mezcla de los colores del barrilete se derriten en la lengua &#x1F61C;&nbsp; dando un sabor a tutifruti.     

### &#x1F4D5;&nbsp; Contenido nutricional 16g:
Grasas totales: 1.5g, Sales: 10mg, Carbohidratos: 14g, Azucares: 8g, Proteinas: 0g. Energia: 292kj/70kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.super.com.co

---
',
            'image' => 'https://ucarecdn.com/627fc386-cb74-4e58-b1f6-7fd6ec14bb51/Barrilete.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Cerveza Aguila',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CervezaAguila',
            'teaserde' => '&#x1F4D9;&nbsp; Der Geschmack des Biers cerveza Águila ist einzigartig in Farbe und Aroma.',
            'teaseres' => '&#x1F4D5;&nbsp; El sabor de la cerveza Águila es única en color y aroma.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Bavaria S.A. ist die grösste Bierbrauerei &#x1F37B;&nbsp; Kolumbiens, sie ist eine der meist bekannten Amerikas und die zehnte im Ranking auf der Welt. Sie wurde in 1889 bei Leopold Siegfried Kopp, ein deutscher Einwanderer, gegründet. Bavaria und die Aguila Brauerei &#x1F37B;&nbsp; vereinten in 1967 und später kauften die Unión Bier in 1972. Bavaria &#x1F37B;&nbsp; besitzt 99% des kolumbianischen, 99% des peruanischen, 93% des ecuadorianischen und 70% des panamaischen Biermarktes. Das Bier cerveza Aguila &#x1F37A;&nbsp; feiert 100 Jahren. In 1900 das Bier konkurrierte mit der Chicha und Guarapo (alkoholische Getränke aus Fermentation von Mais und Rohrzucker) in vielen Städten des Landes. Die Elite der Küstengemeinschaften trank importiertes Bier. Ernesto Cortissoz gründete die Brauerei Barranquilla &#x1F37B;&nbsp; mit dem Bier cerveza Águila. In 1933 das Bier cerveza Águila Águila &#x1F37A;&nbsp; war stark im ganzen Land, aufgrund von guten Marktstrategien, anerkannt. In 1968 Águila &#x1F37B;&nbsp; vereinte mit Bavaria und zusammen schafften neue Strategien. Águila sponsorte in 1995 das kolumbianische Fussball. Águila &#x1F37B;&nbsp; wurde an SABMiller verkauft. Nach Bier cerveza Poker ist das Bier cerveza Águila das meist konsumiert in Kolumbien.   

### &#x1F4D9;&nbsp; Bonus: 
Gegen 10000 v.C: Man glaubt, das Bier existierte bereits in Mesopotamien und Sumer. Gegen 4000 v.C: Auf Tafeln aus Lehm wurde von den Sumern Schriften über Zutaten für die Bierherstellung festgehalten. In 500: Die Ägypter nutzten die sumerische Methoden und erzeugten Bier und ergänzten es mit Gewürzen, um die Aroma und Farbe zu verbessern. Sie gaben es dem Namen Zythium. In 1542: Die erste Bierfabrik Amerikas, als Kaiser Carlos V die heutige Mexiko City gründete. In 1700: etablierte sich den Freihandel in den Amerikas. In 1850: In Lateinamerika entstehen die ersten Bierfabriken &#x1F37B;&nbsp; aus Vereine mit Deutschen und Nordamerikanern.

### &#x1F4D9;&nbsp; Geschmack: 
Der Geschmack des Biers cerveza Águila ist einzigartig in Farbe und Aroma. 

### &#x1F4D9;&nbsp; Rezept Refajo: 
1 Liter Soda Colombiana, 2 Litern Bier, 4 Eiswürfel. Dem Bier die Soda Colombiana und die Eiswürfel hinzufügen. Empfehlung: Begleiten mit gutem kolumbianischen Musik.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Kalorien: 43, Totalen Lipiden: 0g, Salzen: 4mg, Kohlenhydrate: 31g, Alkohol Vol.: 4%, Proteine: 1g. 

---

### &#x1F4D5;&nbsp; Historia:
Bavaria S.A. es la mayor cervecería &#x1F37B;&nbsp; de Colombia, una de las más conocidas de América y la décima del mundo. Fué fundada en 1889 por Leopold Siegfried Kopp, un inmigrante alemán. Luego se fusionó con Cervecería Aguila &#x1F37B;&nbsp; de Barranquilla en 1967 y posteriormente compraría la &#x1F37A;&nbsp; Cerveza Unión de Medellín en 1972. Bavaria &#x1F37B;&nbsp; tiene el 99% del mercado colombiano, el 99% del mercado del Perú, el 93% del mercado de Ecuador y el 79% del mercado de Panamá. La Cerveza Águila &#x1F37A;&nbsp; está cumpliendo 100 años. Para 1900 la cerveza competía con la chicha y el guarapo en varias ciudades del interior del país, donde ya la producían, pero la élite costeña, la tomaba importada. Ernesto Cortissoz fundó la Cervecería Barranquilla &#x1F37B;&nbsp; con la cerveza Águila &#x1F37A; . En 1933 la cerveza Águila &#x1F37A;&nbsp; fue muy reconocida en todo el país debido a sus grandes estrategias de mercadeo. En 1968 Águila &#x1F37B;&nbsp; se fusiona con Bavaria, creando nuevas innovaciones. Águila &#x1F37B;&nbsp; en 1995 empezó a patrocinar el fútbol colombiano. Águila &#x1F37B;&nbsp; fue vendida a SABMiller. Después de Poker, Cerveza Águila &#x1F37A;&nbsp; es la más consumida en Colombia.      

### &#x1F4D5;&nbsp; Bonus: 
Hacia 10.000 A.C: Se cree que la cerveza ya existía en Mesopotamia y Sumeria. Hacia 4.000 A.C: La mención más antigua de la cerveza se hace en tablas de arcilla escritas en lenguaje sumerio. En 500: Los egipcios recogieron métodos sumerios para realizar una cerveza añadiendo especias para mejorar el aroma y color bautizándola Zythium. En 1542: La primera fábrica en América, cuando el emperador Carlos V fundó lo que hoy es la llamada ciudad de México. En 1700: se establece el libre comercio en América. En 1850: En latinoamérica surgen las primeras fábricas de cerveza &#x1F37B;&nbsp; desde asociaciones con alemanes y norteamericanos. 

### &#x1F4D5;&nbsp; Sabor: 
El sabor de la cerveza Águila es única en color y aroma.

### &#x1F4D5;&nbsp; Receta Refajo: 
1 litro de soda Colombiana, 2 litros de cerveza, 4 cubos de hielo. A la cerveza, agregar la soda colombiana y los cubos de hielo. Recomendación: Acompañar de buena música colombiana.   

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Calorias: 43, Grasas totales: 0g, Sales: 4mg, Carbohidratos: 31g, Vol. Alcohol: 4%, Proteinas: 1g.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.cervezaaguila.com

---
',
            'image' => 'https://ucarecdn.com/17bb790f-45c6-437c-9fdb-50f1a844f0da/Aguila.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Cerveza Poker',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CervezaPoker',
            'teaserde' => '&#x1F4D9;&nbsp; Der Geschmack des Biers cerveza Poker ist einzigartig in Farbe und Aroma.',
            'teaseres' => '&#x1F4D5;&nbsp; El sabor de la cerveza Poker es única en color y aroma.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Bavaria S.A. ist die grösste Bierbrauerei &#x1F37B;&nbsp; Kolumbiens, sie ist eine der meist bekannten Amerikas und die zehnte im Ranking auf der Welt. Sie wurde in 1889 bei Leopold Siegfried Kopp, ein deutscher Einwanderer, gegründet. Bavaria und die Aguila Brauerei &#x1F37B;&nbsp; vereinten in 1967 und später kauften die Unión Bier in 1972. Bavaria &#x1F37B;&nbsp; besitzt 99% des kolumbianischen, 99% des peruanischen, 93% des ecuadorianischen und 70% des panamaischen Biermarktes. Das Bier cerveza Aguila &#x1F37A;&nbsp; feiert 100 Jahren. In 1900 das Bier konkurrierte mit der Chicha und Guarapo (alkoholische Getränke aus Fermentation von Mais und Rohrzucker) in vielen Städten des Landes. Die Elite der Küstengemeinschaften trank importiertes Bier. Ernesto Cortissoz gründete die Brauerei Barranquilla &#x1F37B;&nbsp; mit dem Bier cerveza Águila. In 1933 das Bier cerveza Águila Águila &#x1F37A;&nbsp; war stark im ganzen Land, aufgrund guten Marktstrategien, anerkannt. In 1968 Águila &#x1F37B;&nbsp; vereinte mit Bavaria und zusammen schaffen neue Strategien. Águila sponsorte in 1995 das kolumbianische Fussball. Águila &#x1F37B;&nbsp; wurde an SABMiller verkauft. Nach Bier cerveza Poker ist das Bier cerveza Águila das meist konsumiert in Kolumbien.   

### &#x1F4D9;&nbsp; Bonus: 
Gegen 10000 v.C: Man glaubt, das Bier existierte bereits in Mesopotamien und Sumer. Gegen 4000 v.C: Auf Tafeln aus Lehm wurde von den Sumern Schriften über Zutaten für die Bierherstellung festgehalten. In 500: Die Ägypter nutzten die sumerische Methoden und erzeugten Bier und ergänzten es mit Gewürzen, um die Aroma und Farbe zu verbessern. Sie gaben es dem Namen Zythium. In 1542: Die erste Bierfabrik Amerikas, als Kaiser Carlos V die heutige Mexiko City gründete. In 1700: etablierte sich den Freihandel in den Amerikas. In 1850: In Lateinamerika entstehen die ersten Bierfabriken &#x1F37B;&nbsp; aus Vereine mit Deutschen und Nordamerikanern.

### &#x1F4D9;&nbsp; Geschmack: 
Der Geschmack des Biers cerveza Poker ist einzigartig in Farbe und Aroma. 

### &#x1F4D9;&nbsp; Rezept Refajo: 
1 Liter Soda Colombiana, 2 Litern Bier, 4 Eiswürfel. Dem Bier die Soda Colombiana und die Eiswürfel hinzufügen. Empfehlung: Begleiten mit gutem kolumbianischen Musik.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Kalorien: 150, Totalen Lipiden: 0g, Salzen: 0mg, Kohlenhydrate: 13g, Alkohol Vol.: 4%, Proteine: 2g. 

---

### &#x1F4D5;&nbsp; Historia:
Bavaria S.A. es la mayor cervecería &#x1F37B;&nbsp; de Colombia, una de las más conocidas de América y la décima del mundo. Fué fundada en 1889 por Leopold Siegfried Kopp, un inmigrante alemán. Luego se fusionó con Cervecería Aguila &#x1F37B;&nbsp; de Barranquilla en 1967 y posteriormente compraría la &#x1F37A;&nbsp; Cerveza Unión de Medellín en 1972. Bavaria &#x1F37B;&nbsp; tiene el 99% del mercado colombiano, el 99% del mercado del Perú, el 93% del mercado de Ecuador y el 79% del mercado de Panamá. La Cerveza Águila &#x1F37A;&nbsp; está cumpliendo 100 años. Para 1900 la cerveza competía con la chicha y el guarapo en varias ciudades del interior del país, donde ya la producían, pero la élite costeña, la tomaba importada. Ernesto Cortissoz fundó la Cervecería Barranquilla &#x1F37B;&nbsp; con la cerveza Águila &#x1F37A; . En 1933 la cerveza Águila &#x1F37A;&nbsp; fue muy reconocida en todo el país debido a sus grandes estrategias de mercadeo. En 1968 Águila &#x1F37B;&nbsp; se fusiona con Bavaria, creando nuevas innovaciones. Águila &#x1F37B;&nbsp; en 1995 empezó a patrocinar el fútbol colombiano. Águila &#x1F37B;&nbsp; fue vendida a SABMiller. Después de Poker, Cerveza Águila &#x1F37A;&nbsp; es la más consumida en Colombia.      

### &#x1F4D5;&nbsp; Bonus: 
Hacia 10.000 A.C: Se cree que la cerveza ya existía en Mesopotamia y Sumeria. Hacia 4.000 A.C: La mención más antigua de la cerveza se hace en tablas de arcilla escritas en lenguaje sumerio. En 500: Los egipcios recogieron métodos sumerios para realizar una cerveza añadiendo especias para mejorar el aroma y color bautizándola Zythium. En 1542: La primera fábrica en América, cuando el emperador Carlos V fundó lo que hoy es la llamada ciudad de México. En 1700: se establece el libre comercio en América. En 1850: En latinoamérica surgen las primeras fábricas de cerveza &#x1F37B;&nbsp; desde asociaciones con alemanes y norteamericanos. 

### &#x1F4D5;&nbsp; Sabor: 
El sabor de la cerveza Poker es única en color y aroma.

### &#x1F4D5;&nbsp; Receta Refajo: 
1 litro de soda Colombiana, 2 litros de cerveza, 4 cubos de hielo. A la cerveza, agregar la soda colombiana y los cubos de hielo. Recomendación: Acompañar de buena música colombiana.   

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Calorias: 150, Grasas totales: 0g, Sales: 0mg, Carbohidratos: 13g, Vol. Alcohol: 4%, Proteinas: 2g.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.cervezapoker.com

---
',
            'image' => 'https://ucarecdn.com/b49f8fe4-0e1f-49bd-b47d-d03752dcb86b/Poker.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();      
        $post = new \App\Models\Post([
            'title' => 'Refajo Cola y Pola',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'ColayPola',
            'teaserde' => '&#x1F4D9;&nbsp; Der Geschmack der Refajo Cola y Pola hat denselben wie bei der Mischung aus Bier und Cola Soda, der Geschmack ist unbeschreibbar.',
            'teaseres' => '&#x1F4D5;&nbsp; El sabor del Refajo Cola y Pola tiene el mismo de la mezcla entre la cerveza y bebida de cola, su sabor es indescriptible.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Bavaria S.A. ist die grösste Bierbrauerei &#x1F37B;&nbsp; Kolumbiens, sie ist eine der meist bekannten Amerikas und die zehnte im Ranking auf der Welt. Sie wurde in 1889 bei Leopold Siegfried Kopp, ein deutscher Einwanderer, gegründet. Bavaria und die Aguila Brauerei &#x1F37B;&nbsp; vereinten in 1967 und später kauften die Unión Bier in 1972. Bavaria &#x1F37B;&nbsp; besitzt 99% des kolumbianischen, 99% des peruanischen, 93% des ecuadorianischen und 70% des panamaischen Biermarktes. Das Bier cerveza Aguila &#x1F37A;&nbsp; feiert 100 Jahren. In 1900 das Bier konkurrierte mit der Chicha und Guarapo (alkoholische Getränke aus Fermentation von Mais und Rohrzucker) in vielen Städten des Landes. Die Elite der Küstengemeinschaften trank importiertes Bier. Ernesto Cortissoz gründete die Brauerei Barranquilla &#x1F37B;&nbsp; mit dem Bier cerveza Águila. In 1933 das Bier cerveza Águila Águila &#x1F37A;&nbsp; war stark im ganzen Land, aufgrund guten Marktstrategien, anerkannt. In 1968 Águila &#x1F37B;&nbsp; vereinte mit Bavaria und zusammen schaffen neue Strategien. Águila sponsorte in 1995 das kolumbianische Fussball. Águila &#x1F37B;&nbsp; wurde an SABMiller verkauft. Nach Bier cerveza Poker ist das Bier cerveza Águila das meist konsumiert in Kolumbien.   

### &#x1F4D9;&nbsp; Bonus: 
Gegen 10000 v.C: Man glaubt, das Bier existierte bereits in Mesopotamien und Sumer. Gegen 4000 v.C: Auf Tafeln aus Lehm wurde von den Sumern Schriften über Zutaten für die Bierherstellung festgehalten. In 500: Die Ägypter nutzten die sumerische Methoden und erzeugten Bier und ergänzten es mit Gewürzen, um die Aroma und Farbe zu verbessern. Sie gaben es dem Namen Zythium. In 1542: Die erste Bierfabrik Amerikas, als Kaiser Carlos V die heutige Mexiko City gründete. In 1700: etablierte sich den Freihandel in den Amerikas. In 1850: In Lateinamerika entstehen die ersten Bierfabriken &#x1F37B;&nbsp; aus Vereine mit Deutschen und Nordamerikanern.

### &#x1F4D9;&nbsp; Geschmack: 
Der Geschmack der Refajo Cola y Pola hat denselben wie bei der Mischung aus Bier und Cola Soda, der Geschmack ist unbeschreibbar. 

### &#x1F4D9;&nbsp; Rezept Refajo: 
1 Liter Soda Colombiana, 2 Litern Bier, 4 Eiswürfel. Dem Bier die Soda Colombiana und die Eiswürfel hinzufügen. Empfehlung: Begleiten mit gutem kolumbianischen Musik.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100g:
Kalorien: 250, Totalen Lipiden: 0g, Salzen: 0mg, Kohlenhydrate: 0g, Alkohol Vol.: 4%, Proteine: 0g. 

---

### &#x1F4D5;&nbsp; Historia:  
Bavaria S.A. es la mayor cervecería &#x1F37B;&nbsp; de Colombia, una de las más conocidas de América y la décima del mundo. Fué fundada en 1889 por Leopold Siegfried Kopp, un inmigrante alemán. Luego se fusionó con Cervecería Aguila &#x1F37B;&nbsp; de Barranquilla en 1967 y posteriormente compraría la &#x1F37A;&nbsp; Cerveza Unión de Medellín en 1972. Bavaria &#x1F37B;&nbsp; tiene el 99% del mercado colombiano, el 99% del mercado del Perú, el 93% del mercado de Ecuador y el 79% del mercado de Panamá. La Cerveza Águila &#x1F37A;&nbsp; está cumpliendo 100 años. Para 1900 la cerveza competía con la chicha y el guarapo en varias ciudades del interior del país, donde ya la producían, pero la élite costeña, la tomaba importada. Ernesto Cortissoz fundó la Cervecería Barranquilla &#x1F37B;&nbsp; con la cerveza Águila &#x1F37A; . En 1933 la cerveza Águila &#x1F37A;&nbsp; fue muy reconocida en todo el país debido a sus grandes estrategias de mercadeo. En 1968 Águila &#x1F37B;&nbsp; se fusiona con Bavaria, creando nuevas innovaciones. Águila &#x1F37B;&nbsp; en 1995 empezó a patrocinar el fútbol colombiano. Águila &#x1F37B;&nbsp; fue vendida a SABMiller. Después de Poker, Cerveza Águila &#x1F37A;&nbsp; es la más consumida en Colombia.       

### &#x1F4D5;&nbsp; Bonus: 
Hacia 10.000 A.C: Se cree que la cerveza ya existía en Mesopotamia y Sumeria. Hacia 4.000 A.C: La mención más antigua de la cerveza se hace en tablas de arcilla escritas en lenguaje sumerio. En 500: Los egipcios recogieron métodos sumerios para realizar una cerveza añadiendo especias para mejorar el aroma y color bautizándola Zythium. En 1542: La primera fábrica en América, cuando el emperador Carlos V fundó lo que hoy es la llamada ciudad de México. En 1700: se establece el libre comercio en América. En 1850: En latinoamérica surgen las primeras fábricas de cerveza &#x1F37B;&nbsp; desde asociaciones con alemanes y norteamericanos. 

### &#x1F4D5;&nbsp; Sabor: 
El sabor del Refajo Cola y Pola tiene el mismo de la mezcla entre la cerveza y bebida de cola, su sabor es indescriptible.  

### &#x1F4D5;&nbsp; Receta Refajo: 
1 litro de soda Colombiana, 2 litros de cerveza, 4 cubos de hielo. A la cerveza, agregar la soda colombiana y los cubos de hielo. Recomendación: Acompañar de buena música colombiana.   

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
&#x1F4D5;&nbsp; Calorias: 250, Grasas totales: 0g, Sales: 0mg, Carbohidratos: 0g, Vol. Alcohol: 4%, Proteinas: 0g. 

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.colaypola.com.co

---
',
            'image' => 'https://ucarecdn.com/626de10b-ba02-4ba3-84e8-c67f23d9aeb9/ColayPola.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();          
        $post = new \App\Models\Post([
            'title' => 'Cerveza Quilmes',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CervezaQuilmes',
            'teaserde' => '&#x1F4D9;&nbsp; Quilmes ist ein schaumiges Bier, mit einem unbeschreibbaren einzigartigen und unvergleichbaren Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Quilmes es una cerveza espumosa, de un sabor indescriptible. Tiene un sabor único e inigualable.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Die Einheimischen der Valle Calchaquí in Tucumán-Argentinien wurden als Quilmes bezeichnet. Sie bauten Städte mit einer hohen Bevölkerungsdichte. Ihre Existenz wird gegen X Jahrzehnten datiert. Sie erreichten eine gute Handhabung in Viehhüter, in Ackerbau und in Bewässerung. Etwa 400 Spanier belagerten mehr als 6000 Einheimische mit der Abhaltung zu seinen eigenen Ackerländern und mit der Vergiftung des Wassers, das aus den Bergenquellen stammen. Die Spanier zählten mit Ritterrüstungen und Feuerwaffen. Die Quilmes zählten mit Bogen und Pfeilen, Schleudern, Speere und Äxte mit Spitzen aus Stein. In 1667 die Quilmes mussten ins Exil, da sie den Kampf gegen die Spanier verloren. Die eigenartige Sprache der Quilmes war der Cacán. Zu den religiösen Gewohnheiten zählt heute die Verehrung der Pacha Mama (Mutter Erde) in Kombination mit der katholischen Religion, eingeführt von den Spaniern. Otto Bemberg, ein deutscher Einwanderer, der sehr fürs Bier &#x1F37A;&nbsp; begeistert war, gründete gegen 1888 die &#x1F37B;&nbsp; Bierbrauerei Argentina. In 1890 veröffentlichte er das Bier cerveza Quilmes, dessen Namen an die ehemalige Quilmesgemeinschaft erinnert. Quilmes dominiert heutzutage 80% des Biermarktes in Argentinien. Das Logo leitet sich aus den Farben des argentinischen Fahnen ab. Quilmes sponsort die Argentinische Fussballmannschaft. Das Unternehmen hat in Quilmes, in Nueva Pompeya, in Zárate, in Córdoba, in Tres Arroyos, in Corrientes, in Trelew, in Tucumán und in Mendoza diverse Filialen. In 2002 das Unternehmen AmBEv kauft 37% von Quilmes S.A. In 2004 AmBEv und Interbew vereinen und erzeugen InBev. In 2006 AmBev steigerte die Aktienanteile bis 91% und übernamm somit die totale Kontrolle über Quilmes. 

### &#x1F4D9;&nbsp; Bonus: 
Gegen 10000 v.C: Man glaubt, das Bier existierte bereits in Mesopotamien und Sumer. Gegen 4000 v.C: Auf Tafeln aus Lehm wurde von den Sumern Schriften über Zutaten für die Bierherstellung festgehalten. In 500: Die Ägypter nutzten die sumerische Methoden und erzeugten Bier und ergänzten es mit Gewürzen, um die Aroma und Farbe zu verbessern. Sie gaben es dem Namen Zythium. In 1542: Die erste Bierfabrik Amerikas, als Kaiser Carlos V die heutige Mexiko City gründete. In 1700: etablierte sich den Freihandel in den Amerikas. In 1850: In Lateinamerika entstehen die ersten Bierfabriken &#x1F37B;&nbsp; aus Vereine mit Deutschen und Nordamerikanern.

### &#x1F4D9;&nbsp; Geschmack: 
Quilmes ist ein schaumiges Bier, mit einem unbeschreibbaren einzigartigen und unvergleichbaren Geschmack. 

### &#x1F4D9;&nbsp; Nährstoffgehalt:
Kalorien: 163, Totalen Lipiden: 0g, Salzen: 11mg, Kohlenhydrate: 17g, Alkohol Vol.: 4.9%, Proteine: 1g.  

---

### &#x1F4D5;&nbsp; Historia: 
Los indígenas conocidos como Quilmes, ocuparon el Valle Calchaquí en Tucumán, Argentina, donde se formaron ciudades de alto índice de densidad de población. Su existencia se dió en el siglo X, alcanzando un buen manejo de sistemas agropastoriales y de cultivo e irrigación. Unos 400 españoles sitiaron a un pueblo de más de 6000 originarios impidiéndoles acceder a sus cultivos sobre la planicie fértil y luego envenenaron la fuente de provisión de agua que llegaba desde las montañas. Los españoles contaban con armaduras y armas de fuego. Los Quilmes contaban con arcos y flechas, hondas, lanzas y hachas con puntas de piedra. En 1667 se vieron obligados al exilio por sufrir una derrota militar a manos de los españoles. El idioma original de los quilmes, era el cacán. Dentro de las costumbres religiosas, se practica aún la adoración a la Pacha Mama (Madre Tierra), combinada con la religión católica introducida por los españoles. Otto Bemberg, un inmigrante alemán, que trajo consigo su pasión por la cerveza &#x1F37A; , fundó en 1888 la &#x1F37B;&nbsp; Cervecería Argentina. En 1890 comenzó a venderse la cerveza &#x1F37A;&nbsp; con la marca Quilmes, nombre que rescata el antiguo nombre indígena de la localidad. Quilmes domina actualmente el 80% del mercado argentino de cerveza. Su logotipo se deriva de los colores de la bandera argentina y es patrocinador oficial de la Selección Argentina de Fútbol. La empresa tiene plantas en Quilmes, Nueva Pompeya, Zárate, Córdoba, Tres Arroyos, Corrientes, Trelew, Tucumán y Mendoza. En 2002 la compañia brasileña AmBEv compra 37% de Quilmes S.A, en un acuerdo que dio a AmBev el control de la marca Quilmes en Argentina. En 2004 AmBew e Interbrew se fusionaron creando InBev, integrando a Quilmes. En 2006 AmBev incrementó su porción de acciones a 91%, tomando efectivamente el control total de Quilmes.

### &#x1F4D5;&nbsp; Bonus: 
Hacia 10.000 A.C: Se cree que la cerveza ya existía en Mesopotamia y Sumeria. Hacia 4.000 A.C: La mención más antigua de la cerveza se hace en tablas de arcilla escritas en lenguaje sumerio. En 500: Los egipcios recogieron métodos sumerios para realizar una cerveza añadiendo especias para mejorar el aroma y color bautizándola Zythium. En 1542: La primera fábrica en América, cuando el emperador Carlos V fundó lo que hoy es la llamada ciudad de México. En 1700: se establece el libre comercio en América. En 1850: En latinoamérica surgen las primeras fábricas de cerveza &#x1F37B;&nbsp; desde asociaciones con alemanes y norteamericanos. 

### &#x1F4D5;&nbsp; Sabor: 
Quilmes es una cerveza espumosa, de un sabor indescriptible. Tiene un sabor único e inigualable. 

### &#x1F4D5;&nbsp; Contenido nutricional 100g:
Calorias: 163, Grasas totales: 0g, Sales: 11mg, Carbohidratos: 17g, Vol. Alcohol: 4.9%, Proteinas: 1g. 

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.quilmes.com.ar

---
',
            'image' => 'https://ucarecdn.com/c5faef1a-9602-4fbd-a6af-d9984390163a/Quilmes.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Cerveza Paceña',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CervezaPacena',
            'teaserde' => '&#x1F4D9;&nbsp; Paceña ist ein schaumiges Bier, mit einem unbeschreibbaren einzigartigen und unvergleichbaren Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Paceña es una cerveza espumosa, de un sabor indescriptible. Tiene un sabor único e inigualable.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
In 1877 entsteht die Bierbrauerei Cervecería Nacional unter Besitz von Alejandro Wolf in 1877 in La Paz. In 1886 vereinen die Cervecería Nacional mit der Amerikanischen Bierbrauerei und erzeugen zusammen die heutige &#x1F37B;&nbsp; Bierbrauerei Cervecería Boliviana Nacional (CBN), Das Bier Cerveza Paceña &#x1F37A;&nbsp; ist ein Ergebnis der CBN. Paceña wird auf mehr als 3600 Meter über dem Meer mit gereinigtem Wasser aus der Anden Bergketten hergestellt. Die Höhe von La Paz-Bolivien ist wesentlich für den Entwicklungsprozess des Biers, da den Siedepunkt des Wassers dort &#x1F4A7;&nbsp; 87°C ist, somit ist das Kochen in Abhängigkeit des Druckes. Daher die Höhe von La Paz hilft grösstenteils beim Bierschaum und trägt einen natürlichen mikrobiologischen Schutz im Bier bei.   

### &#x1F4D9;&nbsp; Bonus: 
Gegen 10000 v.C: Man glaubt, das Bier existierte bereits in Mesopotamien und Sumer. Gegen 4000 v.C: Auf Tafeln aus Lehm wurde von den Sumern Schriften über Zutaten für die Bierherstellung festgehalten. In 500: Die Ägypter nutzten die sumerische Methoden und erzeugten Bier und ergänzten es mit Gewürzen, um die Aroma und Farbe zu verbessern. Sie gaben es dem Namen Zythium. In 1542: Die erste Bierfabrik Amerikas, als Kaiser Carlos V die heutige Mexiko City gründete. In 1700: etablierte sich den Freihandel in den Amerikas. In 1850: In Lateinamerika entstehen die ersten Bierfabriken &#x1F37B;&nbsp; aus Vereine mit Deutschen und Nordamerikanern.

### &#x1F4D9;&nbsp; Geschmack: 
Paceña ist ein schaumiges Bier, mit einem unbeschreibbaren einzigartigen und unvergleichbaren Geschmack. 

### &#x1F4D9;&nbsp; Nährstoffgehalt:
Kalorien: 100, Totalen Lipiden: 0g, Natrium: 15mg, Kohlenhydrate: 31g, Alkohol Vol.: 4.8%, Proteine: 0g, Energie: 174kj/41kcal. 

---

### &#x1F4D5;&nbsp; Historia:
En 1877 surgió la cervecería, propiedad de Alejandro Wolf con el nombre de Cervecería Nacional. En 1886 se fusiona con la Cervecería Americana y forman la hoy &#x1F37B;&nbsp; Cervecería Boliviana Nacional (CBN). Paceña es una &#x1F37A;&nbsp; cerveza boliviana, elaborada por la CBN. Paceña se elabora a más de 3600 metros sobre el nivel del mar, con agua purificada de la coordillera de los Andes. La altura de la Paz-Bolivia es escencial para el desarrollo de la cerveza, pues allí el punto de ebullición del agua &#x1F4A7;&nbsp; es de 87°C, lo que indica que la cocción es a presión. Por lo tanto la altura de la Paz ayuda en mayor parte a la formación de la espuma y a un aporte de protección microbiológica natural en la cerveza. 

### &#x1F4D5;&nbsp; Bonus: 
Hacia 10.000 A.C: Se cree que la cerveza ya existía en Mesopotamia y Sumeria. Hacia 4.000 A.C: La mención más antigua de la cerveza se hace en tablas de arcilla escritas en lenguaje sumerio. En 500: Los egipcios recogieron métodos sumerios para realizar una cerveza añadiendo especias para mejorar el aroma y color bautizándola Zythium. En 1542: La primera fábrica en América, cuando el emperador Carlos V fundó lo que hoy es la llamada ciudad de México. En 1700: se establece el libre comercio en América. En 1850: En latinoamérica surgen las primeras fábricas de cerveza &#x1F37B;&nbsp; desde asociaciones con alemanes y norteamericanos. 

### &#x1F4D5;&nbsp; Sabor: 
Paceña es una cerveza espumosa, de un sabor indescriptible. Tiene un sabor único e inigualable. 

### &#x1F4D5;&nbsp; Contenido nutricional:
Calorias: 100, Grasas totales: 0g, Sodio: 15mg, Carbohidratos: 31g, Vol. Alcohol: 4.8%, Proteinas: 0g. Energia: 174kj/41kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.cbn.bo

---
',
            'image' => 'https://ucarecdn.com/975a19c4-9bb8-4422-b201-ceb4e731e506/Pacena.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();   
        $post = new \App\Models\Post([
            'title' => 'Cerveza Cusqueña Premium Golden',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CervezaCusquenaRubia',
            'teaserde' => '&#x1F4D9;&nbsp; Das Bier cerveza Cusqueña Premium Golden ist ein Pilsener Bier, erzeugt aus reine Braugerste und echter Hopfen.',
            'teaseres' => '&#x1F4D5;&nbsp; La Cerveza Cusqueña Premium Golden es una cerveza Pilsener, elaborada con cebada malteada pura y lúpulo saaz.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
Ernesto Günther und zukunftsorientierte Entreprenuere gründeten in der Stadt Cusco-Peru in 1908 eine Filiale der &#x1F37B;&nbsp; Bierbrauerei Cervecería Alemana Günther & Tidow S.A Ltda, welche bereits vor 10 Jahren in Arequipa-Peru mit den Biere Pilsener Cuzco und Malzextrakt Cuzco betrieben. In 1950 wird das Bier cerveza Cuzqueña &#x1F37A;&nbsp; (mit "z") und in 1970 wechselt die Name auf Cerveza Cusqueña y Malta Cusqueña. Das Bier &#x1F37A;&nbsp; wurde von den Konsumenten erfolgreich akzeptiert. Die Incas verzehrten eine Art von Bier auf der Grundlage des &#x1F33D;&nbsp; Mais, die sogenannte "Chicha". Chicha gehörte der Gastronomie und der Religion der Inkaregion (Kolumbien, Peru, Bolivien, Chile). Chicha war für die Inkas das Getränk für alle Tageszeiten während der Zeit der Tawantisuyo (XV und XVI Jahrhundert).    

### &#x1F4D9;&nbsp; Bonus: 
Gegen 10000 v.C: Man glaubt, das Bier existierte bereits in Mesopotamien und Sumer. Gegen 4000 v.C: Auf Tafeln aus Lehm wurde von den Sumern Schriften über Zutaten für die Bierherstellung festgehalten. In 500: Die Ägypter nutzten die sumerische Methoden und erzeugten Bier und ergänzten es mit Gewürzen, um die Aroma und Farbe zu verbessern. Sie gaben es dem Namen Zythium. In 1542: Die erste Bierfabrik Amerikas, als Kaiser Carlos V die heutige Mexiko City gründete. In 1700: etablierte sich den Freihandel in den Amerikas. In 1850: In Lateinamerika entstehen die ersten Bierfabriken &#x1F37B;&nbsp; aus Vereine mit Deutschen und Nordamerikanern.

### &#x1F4D9;&nbsp; Geschmack: 
Das cerveza Cusqueña Premium ist ein Pilsener Bier, erzeugt aus reine Braugerste und echter Hopfen. Für die Herstellung werden 3 Arten von Malz gebraucht: Meltcafe, Scarlett und Karamellmalz. Die Herstellung setzt niedrige Gärung und niedrige Temperaturen, mit einem Reifeprozess auf -1.5°C, voraus. Das Bier hat einen prozentualen alkoholischen Anteil an 5% Volumen.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0mg, Kohlenhydrate: 4g, Alkohol Vol.: 4.8%, Proteine: 0g, Energie: 209kj/50kcal. 

---

### &#x1F4D5;&nbsp; Historia:
Ernesto Günther y un grupo de emprendedores fundó en la ciudad de Cusco en 1908 una sucursal de la &#x1F37B;&nbsp; Cervecería Alemana Günther & Tidow S.A Ltda, la cual ya operaba en Arequipa 10 años atrás con &#x1F37A;&nbsp; cervezas como Pilsener Bier Cuzco y Extracto de Malta Cuzco. En 1950 sale la cerveza Cuzqueña &#x1F37A;&nbsp; (con "z") y en 1970 pasa a llamarse Cerveza Cusqueña y Malta Cusqueña respectivamente. La cerveza &#x1F37A;&nbsp; fue aceptaba por los consumidores. Los Incas consumían ya una especie de cerveza a base de maíz &#x1F33D;&nbsp; (chicha), que hacía parte de la actividad gastronómica y religiosa de la población. La chicha era la única bebida para toda ocasión de los millones de habitantes del Tawantinsuyo (imperio incaico - siglos XV y XVI).   

### &#x1F4D5;&nbsp; Bonus: 
Hacia 10.000 A.C: Se cree que la cerveza ya existía en Mesopotamia y Sumeria. Hacia 4.000 A.C: La mención más antigua de la cerveza se hace en tablas de arcilla escritas en lenguaje sumerio. En 500: Los egipcios recogieron métodos sumerios para realizar una cerveza añadiendo especias para mejorar el aroma y color bautizándola Zythium. En 1542: La primera fábrica en América, cuando el emperador Carlos V fundó lo que hoy es la llamada ciudad de México. En 1700: se establece el libre comercio en América. En 1850: En latinoamérica surgen las primeras fábricas de cerveza &#x1F37B;&nbsp; desde asociaciones con alemanes y norteamericanos. 

### &#x1F4D5;&nbsp; Sabor: 
La Cerveza Cusqueña Premium es una cerveza Pilsener, elaborada con cebada malteada pura y lúpulo saaz. Se emplean en su preparación 3 variedades de malta: meltcafe, scarlett y malta caramelo. Es sometida a baja fermentación y baja temperatura, con un proceso de maduración a -1.5°C. Posee un contenido alcohólico de 5% Vol.

### &#x1F4D5;&nbsp; Contenido nutricional/Nährstoffgehalt 100mL:
Grasas totales: 0g, Sales: 0mg, Carbohidratos: 4g, Vol. Alcohol: 4.8%, Proteinas: 0g. Energia: 209kj/50kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
https://www.cusquena.com

---
',
            'image' => 'https://ucarecdn.com/923255f7-e55e-49f9-923d-87df4a5ec539/Cusquena.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();     
        $post = new \App\Models\Post([
            'title' => 'Uva 2L',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Uva2L',
            'teaserde' => '&#x1F4D9;&nbsp; Uva Postobón ist ein alkoholfreies kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Traube Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Uva Postobón es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/uva.',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
In 1904, Gabriel Posada und Valerio Tobón stellten Getränke in Medellín/Kolumbien her. Das erste Produkt war die "Cola/Champagne". Das Getränk war berühmt in Bars, Geschäften, Clubs und Wohnstätten. Das Produkt wurde durch Eselskarren verteilt &#x1F434; &#x1F602; . Posada und Tobón eröffneten Fabriken in Manizales und Cali. Das Getränk ist Sponsor der kolumbianischen Fussballliga &#x026BD; , der Tour de France &#x1F6B2;&nbsp; und des Rollschuhfahrens.

### &#x1F4D9;&nbsp; Geschmack: 
Uva Postobón kennzeichnet sich durch einen magischen Geschmack nach Cola/Traube &#x1F347; , der Geschmack zaubert Gefühle &#x1F60D; . 

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0.047g, Kohlenhydrate: 11.3g, Zucker: 11.3g, Proteine: 0g, Energie: 191kj/45kcal. 

---

### &#x1F4D5;&nbsp; Historia: 
En 1904, Gabriel Posada y Valerio Tobón produjeron refrescos en Medellín-Colombia. Su primer producto fue la "Cola/champaña" (hoy Colombiana). Este refresco se hizo famoso en bares, tiendas, clubes sociales y hogares. El producto se distribuyó en una carro tirado por un burro &#x1F434; &#x1F602; . Posada y Tobón abrieron dos fábricas, una en Manizales y la otra en Cali. La bebida ha sido patrocinio del fútbol colombiano &#x026BD; , del Tour de Francia &#x1F6B2;&nbsp; y del patinaje.

### &#x1F4D5;&nbsp; Sabor: 
Uva Postobón se caracteriza por tener un sabor mágico e irresistible a cola/uva &#x1F347; , su sabor evoca sentimientos &#x1F60D; .

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.047g, Carbohidratos: 11.3g, Azucares: 11.3g, Proteinas: 0g. Energia: 191kj/45kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.postobon.com

---
',
            'image' => 'https://ucarecdn.com/36b1a813-61c3-4997-b411-a955c3582106/Uva2L.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Manzana 2L',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Manzana2L',
            'teaserde' => '&#x1F4D9;&nbsp; Manzana Postobón ist ein alkoholfreies kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola-Apfel Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Manzana Postobón es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/manzana. ',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte:
In 1904, Gabriel Posada und Valerio Tobón stellten Getränke in Medellín/Kolumbien her. Das erste Produkt war die "Cola/Champagne". Das Getränk war berühmt in Bars, Geschäften, Clubs und Wohnstätten. Das Produkt wurde durch Eselskarren verteilt &#x1F434; &#x1F602; . Posada und Tobón eröffneten Fabriken in Manizales und Cali. Das Getränk ist Sponsor der kolumbianischen Fussballliga &#x026BD; , der Tour de France &#x1F6B2;&nbsp; und des Rollschuhfahrens.

### &#x1F4D9;&nbsp; Geschmack: 
Der Geschmack und die Farbe der Manzana Postobón sind Ikone der Kolumbianern. Der Geschmack nach Cola/Apfel &#x1F34E;&nbsp; ist einzigartig.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totalen Lipiden: 0g, Salzen: 0.047g, Kohlenhydrate: 10.8g, Zucker: 10.8g, Proteine: 0g, Energie: 183kj/43kcal. 

---

### &#x1F4D5;&nbsp; Historia:
En 1904, Gabriel Posada y Valerio Tobón produjeron refrescos en Medellín/Colombia. Su primer producto fue la "Cola/champaña" (hoy Colombiana). Este refresco se hizo famoso en bares, tiendas, clubes sociales y hogares. El producto se distribuyó en una carro tirado por un burro &#x1F434; &#x1F602; . Posada y Tobón abrieron dos fábricas, una en Manizales y la otra en Cali. La bebida ha sido patrocinio del fútbol colombiano &#x026BD; , del Tour de Francia &#x1F6B2;&nbsp; y del patinaje.

### &#x1F4D5;&nbsp; Sabor: 
El sabor y el color de la Manzana Postobón se convirtieron en icónos para los colombianos. Su sabor a cola/manzana &#x1F34E;&nbsp; es único.

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.047g, Carbohidratos: 10.8g, Azucares: 10.8g, Proteinas: 0g. Energia: 183kj/43kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.postobon.com

---
',
            'image' => 'https://ucarecdn.com/5b70502b-4ae5-4bfa-9dbb-d1da4a9cc25b/Manzana2L.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();     
        $post = new \App\Models\Post([
            'title' => 'Colombiana 2L',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Colombiana2L',
            'teaserde' => '&#x1F4D9;&nbsp; Colombiana ist ein alkoholfreies kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Champagne Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Colombiana es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/champán. ',
            'body' => '---

### &#x1F4D9;&nbsp; Geschichte: 
In 1904, Gabriel Posada und Valerio Tobón stellten Getränke in Medellín/Kolumbien her. Das erste Produkt war die "Cola/Champagne". Das Getränk war berühmt in Bars, Geschäften, Clubs und Wohnstätten. Das Produkt wurde durch Eselskarren verteilt &#x1F434; &#x1F602; . Posada und Tobón eröffneten Fabriken in Manizales und Cali. Das Getränk ist Sponsor der kolumbianischen Fussballliga &#x026BD; , der Tour de France &#x1F6B2;&nbsp; und des Rollschuhfahrens.

### &#x1F4D9;&nbsp; Geschmack: 
Es hat den Geschmack nach &#x1F379;&nbsp; Cola/Champagne.

### &#x1F4D9;&nbsp; Rezept Refajo: 
1 Liter Colombiana, 2 Liter Bier, 4 Eiswürfel. Zum Bier das Colombiana Soda und die Eiswürfel hinzufügen. Umrühren. Empfehlung: Begleiten mit guter &#x1F60E;&nbsp; kolumbianischen Musik.

### &#x1F4D9;&nbsp; Nährstoffgehalt 100mL:
Totale Lipiden: 0g, Salzen: 0.029g, Kohlenhydrate: 11.5g, Zucker: 10.5g, Proteine: 0g, Energie: 196kj/46kcal. 

---

### &#x1F4D5;&nbsp; Historia:
En 1904, Gabriel Posada y Valerio Tobón produjeron refrescos en Medellín/Colombia. Su primer producto fue la "Cola-champaña" (hoy Colombiana). Este refresco se hizo famoso en bares, tiendas, clubes sociales y hogares. El producto se distribuyó en una carro tirado por un burro &#x1F434; &#x1F602; . Posada y Tobón abrieron dos fábricas, una en Manizales y la otra en Cali. La bebida ha sido patrocinio del fútbol colombiano &#x026BD; , del Tour de Francia &#x1F6B2;&nbsp; y del patinaje.

### &#x1F4D5;&nbsp; Sabor: 
Se caracteriza por tener un sabor a &#x1F379;&nbsp; cola/champán.

### &#x1F4D5;&nbsp; Receta Refajo: 
1 litro de soda Colombiana, 2 litros de cerveza, 4 cubos de hielo. A la cerveza se le agrega la soda colombiana y los cubos de hielo. Umrü. Recomendación: Acompañar de buena &#x1F60E;&nbsp; música colombiana. 

### &#x1F4D5;&nbsp; Contenido nutricional 100mL:
Grasas totales: 0g, Sales: 0.029g, Carbohidratos: 11.5g, Azucares: 10.5g, Proteinas: 0g. Energia: 196kj/46kcal.

---

### &#x1F4D6;&nbsp; Quelle/Fuente: 
http://www.postobon.com

---
',
            'image' => 'https://ucarecdn.com/aa6e42f6-3386-4685-a816-891534481f67/Colombiana2L.png',
            'imga' => 'http://www.mrwallpaper.com/wallpapers/Blue-Planet-Earth-1280x720.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.mrwallpaper.com/wallpapers/mickey-mouse-1280x720.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'https://wallpaperscraft.com/image/pink_floyd_triangle_space_planet_colors_3723_1280x720.jpg',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'http://www.mrwallpaper.com/wallpapers/Fire-Ice-Fist-1280x720.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();                                                                                                                                                                                            
        
    }
}
