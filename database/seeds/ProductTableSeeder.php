<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/90e25508-b5c1-4bab-bc1f-4968907313ba/Colombiana300mL.png',
            'title' => 'Colombiana 300mL',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Colombiana ist ein alkoholfreies, kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Champagne Geschmack.', 
            'teaseres' => '&#x1F4D5;&nbsp; Colombiana es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/champán.',
            'weight' => 250,
            'price' => 1.75,
            'offer' => 8,
            'slug' => 'Colombiana300mL',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/844fd483-fc77-4de8-b35c-6d21cb9ea97d/Manzana300mL.png',
            'title' => 'Manzana Postobón 300mL',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Manzana Postobón ist ein alkoholfreies, kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Apfel Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Manzana Postobón es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/manzana.',
            'price' => 1.50,
            'weight' => 250,
            'offer' => 15,
            'slug' => 'Manzana300mL',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/a14a186e-8d65-446b-9e07-fb196c887b43/Uva300mL.png',
            'title' => 'Uva Postobón 300mL',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Uva Postobón ist ein alkoholfreies, kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Traube Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Uva Postobón es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/uva.',
            'weight' => 250,
            'price' => 12,
            'offer' => 9,
            'slug' => 'Uva300mL',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/53eb2aa4-33fd-4fd2-8cec-d72242768b37/SelloRojo.png',
            'title' => 'Cafe Sello Rojo',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Dein Tag beginnt mit einem guten kolumbianischen Kaffee.',
            'teaseres' => '&#x1F4D5;&nbsp; Tu día empieza después de un buen café colombiano.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CafeSelloRojo',
        ]);
        $product->save();     
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/d4c7024d-eb2b-46dd-b403-cd82656e428c/AguilaRoja.png',
            'title' => 'Cafe Aguila Roja',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Dein Tag beginnt mit einem guten kolumbianischen Kaffee.',
            'teaseres' => '&#x1F4D5;&nbsp; Tu día empieza después de un buen café colombiano.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CafeAguilaRoja',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/939924eb-9525-4007-8b50-1df990fe9afc/Guarana.png',
            'title' => 'Guarana Antártica',
            'country' => 'Brasil Brasilien',
            'teaserde' => '&#x1F4D9;&nbsp; Guarana Antártica ist ein koffeinhaltiges Erfrischungsgetränk aus Brasilien.',
            'teaseres' => '&#x1F4D5;&nbsp; Guarana Antártica es una bebida refrescante de Brasil, rica en cafeína.',
            'price' => 35,
            'weight' => 250,
            'offer' => 25,
            'slug' => 'Guarana',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/afe70c69-d345-4a27-8e66-79b9187b85f5/HitLulo.png',
            'title' => 'Jugo Hit Lulo',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Jugo Hit Lulo ist ein kolumbianischer Fruchtsaft mit Lulogeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jugo Hit Lulo es una bebida colombiana a base de extracto de lulo.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JugoHitLulo',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/59401bee-2542-4589-88c4-cb9be51a3f04/HitMango.png',
            'title' => 'Jugo Hit Mango',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Jugo Hit Mango ist ein kolumbianischer Fruchtsaft mit Mangogeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jugo Hit Mango es una bebida colombiana a base de extracto de Mango.',
            'price' => 6.99,
            'weight' => 125,
            'offer' => 27,
            'slug' => 'JugoHitMango'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/f4a7db66-0b64-42e2-96c1-b7ed1c07229f/HitMora.png',
            'title' => 'Jugo Hit Mora',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Jugo Hit Mora ist ein kolumbianischer Fruchtsaft mit Himbeergeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jugo Hit Mora es una bebida colombiana a base de extracto de frambuesa.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JugoHitMora',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/49fd88ab-ad49-4617-811a-28d338b9087d/Guayaba.png',
            'title' => 'Jarritos Guayaba',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Jarrito Guave ist ein alkoholfreies Erfrischungsgetränk mit einzigartigem Guavegeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jarrito Guave es una bebida refrescante sin alcohol con sabor único a guayaba.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JarritoGuayaba',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/eb6571fb-c1ae-4382-992f-4c2f344fd3ed/Grapefruit.png',
            'title' => 'Jarritos Grapefruit',
            'country' => 'Mexico Mexiko',
            'teaserde' => '&#x1F4D9;&nbsp; Jarrito Grapefruit ist ein alkoholfreies Erfrischungsgetränk mit einzigartigem Grapefruitgeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jarrito Grapefruit es una bebida refrescante sin alcohol con sabor único a toronja.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JarritoNaranja',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/37028554-da60-45e6-bc49-73f79ed2df8b/Mandarina.png',
            'title' => 'Jarritos Mandarina',
            'country' => 'Mexico Mexiko',
            'teaserde' => '&#x1F4D9;&nbsp; Jarrito Mandarin ist ein alkoholfreies Erfrischungsgetränk mit einzigartigem Mandaringeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jarrito Mandarin es una bebida refrescante sin alcohol con sabor único a mandarina.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JarritoMandarina',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/4b43a413-c424-428c-93a4-e816e028ca6a/Lima.png',
            'title' => 'Jarritos Lima',
            'country' => 'Mexico Mexiko',
            'teaserde' => '&#x1F4D9;&nbsp; Jarrito Lima ist ein alkoholfreies Erfrischungsgetränk mit einzigartigem Limettengeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Jarrito Lima es una bebida refrescante sin alcohol con sabor único a limón.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JarritoLima',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/b0cba829-900c-4f3f-b074-b4dfe8dd5dbe/Pajarito.png',
            'title' => 'Yerba Mate Pajarito',
            'country' => 'Paraguay',
            'teaserde' => '&#x1F4D9;&nbsp; Mate ist ein Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erhält.',
            'teaseres' => '&#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Pajarito',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/655e2afe-bff1-4acd-b3a0-776963133b95/CampesinoClasico.png',
            'title' => 'Yerba Mate Campesino Clasica',
            'country' => 'Paraguay',
            'teaserde' => '&#x1F4D9;&nbsp; Mate ist ein Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erhält.',
            'teaseres' => '&#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CampesinoClasica',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/ce8c09f3-1733-4118-8874-dc730e43a1ef/CampesinoTradicional.png',
            'title' => 'Yerba Mate Campesino Tradicional',
            'country' => 'Paraguay',
            'teaserde' => '&#x1F4D9;&nbsp; Mate ist ein Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erhält. Der Kräutertee verbessert die Leber- und Nierenfunktionszustände.',
            'teaseres' => '&#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable. Actúa excelentemente para mejorar los estados funcionales de los riñones y del hígado.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CampesinoTradicional',
        ]);
        $product->save();           
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/ddc33c00-2bb1-4925-85bb-a3c37d47471d/CampesinoAnis.png',
            'title' => 'Yerba Mate Campesino Anis',
            'country' => 'Paraguay',
            'teaserde' => '&#x1F4D9;&nbsp; Mate ist ein Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erhält. Dieser Kräutertee bekämpft Verdauungsstörungen.',
            'teaseres' => '&#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable. Estas hierbas ayudan contra malestares digestivos.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CampesinoAnis',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/0296b3e4-f31c-4aee-a6d5-c7ea8f51d4f8/Fitness.png',
            'title' => 'Kurupi Fitness',
            'country' => 'Paraguay',
            'teaserde' => '&#x1F4D9;&nbsp; Mate ist ein Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erhält. Diese Yerba Mate ist besonders für Sport und Diäten, reduziert den Appetit und verbessert die Darmtätigkeit.', 
            'teaseres' => '&#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable. Esta Yerba Mate es especializada para deporte y dietas, reduce el apetito y mejora el tránsito intestinal.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'KurupiFitness',
        ]);
        $product->save();                
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/0d6280f8-f651-49b4-be3f-265bf5762335/KurupiMenta.png',
            'title' => 'Kurupi Menta y Boldo',
            'country' => 'Paraguay',
            'teaserde' => '&#x1F4D9;&nbsp; Mate ist ein Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erhält. Diese Yerba Mate ist besonders für Sport und Diäten. Geeignet gegen Verdauungsstörungen wie Gastritis.',
            'teaseres' => '&#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable. Esta Yerba Mate es especializada para deporte y dietas. Posee propiedades digestivas, pues ofrecen una acción antiácida.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'KurupiClasica',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/20a3e73c-a7ca-4b08-90d2-46b44dc523e3/PonyMalta.png',
            'title' => 'Pony Malta',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Pony Malta ist ein alkoholfreies, kohlensäurehaltiges Erfrischungsgetränk aus Malzextrakt.',
            'teaseres' => '&#x1F4D5;&nbsp; Pony Malta es una bebida gaseosa refrescante no alcohólica a base de malta.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'PonyMalta',
        ]);
        $product->save();                             
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/f6067461-eeb0-42cf-90be-cc7d4ae7509f/PAN.png',
            'title' => 'Harina P.A.N',
            'country' => 'Venezuela',
            'teaserde' => '&#x1F4D9;&nbsp; Glutenfreies Produkt aus reiner Maisstärke. Es hat keine Konservierungsmittel noch Farbstoffe. Es entsteht eine Masse dank der Wandlungsfähigkeit durch Wasserzugabe.',
            'teaseres' => '&#x1F4D5;&nbsp; Producto único de maíz puro libre de glutén. No tiene conservantes ni colorantes. Se produce una masa al instante con sólo agregar agua, gracias a su versatilidad.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'HarinaPanAmarilla',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/79d3604f-df08-478e-af5a-4d7b5b773f68/Tamal.png',
            'title' => 'Harina para Tamal',
            'country' => 'Peru',
            'teaserde' => '&#x1F4D9;&nbsp; Tamal ist ein mesoamerikanisches Gericht bestehend aus einem Maisteig und gefüllt mit Fleisch, Käse und/oder andere Zutaten. Es wird in Pflanzen- oder in Bananenblätter eingehüllt gedämpft. Tamal wurde von den Mayas und Azteken zubereitet.',
            'teaseres' => '&#x1F4D5;&nbsp; Tamal es un plato mesoamericano que consiste de una masa de maíz con carne, queso y/o otros ingredientes y envuelto en hojas de plantas de maíz o plátano, donde se cocinado y preparado para su consumo. Tamal fue preparado por los Mayas y los Aztecas.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'HarinaTamal',
        ]);
        $product->save();      
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/6ab2384d-99b5-4aad-9a6e-9745f7f4aa32/MermeladaGuayaba.png',
            'title' => 'Mermelada Guayaba',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Probiere die Marmelade mit einzigartigem Guavegeschmack. Die Viskosität liegt zwischen Gelee und Konfitüre.',
            'teaseres' => '&#x1F4D5;&nbsp; Prueba la mermelada con sabor único a guayaba. Su viscosidad se sitúa entre jalea y confitura.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'MermeladaPaclan',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/3a6a2ec6-cff5-41f1-bb67-35c575dcfb99/Corona.png',
            'title' => 'Chocolate Corona',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Die Schokolade Corona hat einen leckeren Aroma und Geschmack, sie ist schaumig, Null Cholesterin und hat antioxidative Eigenschaften.',
            'teaseres' => '&#x1F4D5;&nbsp; El chocolate Corona tiene un delicioso aroma y sabor, es espumoso, cero colesterol y fuente de antioxidantes.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'ChocolateCorona',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/6ea63b88-16c8-49f2-b35b-788d55b2a440/Panela.png',
            'title' => 'Panela',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Zucker beinhaltet hauptsächlich Sacharose. Panela hat Sacharose, Glukose, Fruktose, Mineralien und Vitaminen wie Askorbinsäure und Vitamine der Gruppe B.',
            'teaseres' => '&#x1F4D5;&nbsp; La panela se considera un alimento que, a diferencia del azúcar, que es básicamente sacarosa, presenta además, significativos contenidos de glucosa, fructosa, proteinas, minerales y vitaminas como el ácido ascórbico y complejo B.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Panela',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/e3629a4f-39e9-414c-ab6e-c8b492368e89/ElRey.png',
            'title' => 'Aji Casero El Rey',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Chili beinhaltet Capsaicin, ein Stoff, der einen reizenden charakteristischen Geschmack den Gerichten ergänzt. El Rey wird normalerweise mit Empanadas, mit gekochten Kartoffeln oder mit einer anderen Art von Salzkosten verzehrt.', 
            'teaseres' => '&#x1F4D5;&nbsp; El ají contiene capsaicina, sustancia irritante picante o acre que le da su sabor característico. El Rey se suele acompañar con empanadas, papas cocidas o cualquier otro tipo de bocado de sal.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'AjiElRey',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/27c54c30-57e1-4948-810a-a4e1b7dbf51c/SalsaTomate.png',
            'title' => 'Salsa de Tomate Fruco',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Die Tomatensauce wird aus 100% Tomaten hergestellt. Sie hat einen milden Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; La salsa de tomate es hecha con tomates 100% naturales. Tiene un sabor muy suave.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'SalsaTomateFruco',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/8a5bae80-f781-4571-a1ba-d419a4429bd2/FestivalDiferentes.png',
            'title' => 'Galletas Festival',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Schokoladen-, Vanille-, Erdbeer- und Zitronencremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Chocolate, Vainilla, Fresa y Limón.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalSurtido',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/9e99167a-ee1b-4571-a6ce-435f935ab99a/FestivalFresa.png',
            'title' => 'Galletas Festival Fresa',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Erdbeercremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Fresa.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalFresa',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/a5c3357f-3c2e-4497-b57c-70cd51331bd1/FestivalChocolate.png',
            'title' => 'Galletas Festival Chocolate',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Schokoladencremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Schokolade.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalChocolate',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/2fdb1e8b-0349-4d38-a7d6-2ba4bf8aee99/Vainilla.png',
            'title' => 'Galletas Festival Vainilla',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Vanillecremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Vainilla.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalVainilla',
        ]);
        $product->save();         
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/2dea7b5e-b4f0-401d-a45f-9134fc366ea5/Limon.png',
            'title' => 'Galletas Festival Limon',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Zitronencremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Limón.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalLimon',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/4b88a583-5e06-420a-8be8-8d5e840e4b68/GoyaMango.png',
            'title' => 'Mango Wafer',
            'country' => 'Brasil Brasilien',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Mangocremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Mango.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'MangoWaffer',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/b3feb043-fd76-4b5f-8f3e-8c0a3d37bccc/GoyaGuayaba.png',
            'title' => 'Guayaba Wafer',
            'country' => 'Brasil Brasilien',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Guavecremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Guayaba.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'GuayabaWaffer',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/de3ce559-508a-449f-8c2e-9365bc0aec8d/GoyaVainilla.png',
            'title' => 'Vanilla Wafer',
            'country' => 'Brasil Brasilien',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Vanillecremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Vainilla.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'VanillaWaffer',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/954f5ac6-a527-4554-8c0e-621067a4d258/GoyaCoco.png',
            'title' => 'Coco Wafer',
            'country' => 'Brasil Brasilien',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit Kokosnusscremefüllung.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Coco.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CocoWaffer',
        ]);
        $product->save();                
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/acd5707d-2912-46b1-a982-0289bb7260d5/Ducales.png',
            'title' => 'Galletas Ducales',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Keksen mit einem magischen unbeschreibbaren Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Galletas con un sabor mágico indescriptible.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Ducales',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/51242902-a4db-4530-ad07-90ddf002cee6/Trocitos.png',
            'title' => 'Trocitos Suavecitos',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Trocitos sind aus Mais hergestellt, nährstoffreichend und lecker. Glutenfrei.',
            'teaseres' => '&#x1F4D5;&nbsp; Los trocitos son hechos de maíz, son nutritivos y deliciosos. Sin Gluten.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Trocitos',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/d53b81b9-bf29-48ff-8ab0-aada004c3004/Choclitos.png',
            'title' => 'Choclitos',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Choclitos sind knusprig, aus Mais hergestellt und mit Zitronengeschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Los choclitos son crocantes, pasabocas de maíz con sabor a limón.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Choclitos',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/0a9783cc-8ddc-46f9-95b9-6697ebf799f0/Obleas.png',
            'title' => 'Obleas',
            'country' => 'Ecuador Äquator',
            'teaserde' => '&#x1F4D9;&nbsp; Oblaten werden mit Milchkonfitüre (dulce de leche), manchmal mit Büchsenmilch, Schokoladensplitter, Kokosraspeln, Brombeerenkonfitüre, Käse, Marmelade oder Butter mit Zucker gegessen.',
            'teaseres' => '&#x1F4D5;&nbsp; La oblea es un postre hecho con dos galletas dentro de las cuales hay dulce de leche o arequipe, a menudo acompañada de leche condensada, chispas de chocolate, coco rallado, dulce de mora, queso, mermelada o mantequilla con azúcar.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Obleas',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/8de192c6-c6fb-4d41-9172-9a037d91117d/BomBomBunFresaSingle.png',
            'title' => 'Bon Bon Bum Fresa',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Leckere Lollipops aus Kolumbien mit Erdbeergeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Fresa. En su interior tiene goma de mascar.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BomBomBumFresaSingle',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/1cfea41d-2975-4316-bd7c-9a0e6205a460/BomBomBum.png',
            'title' => 'Bon Bon Bum Fresa',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Leckere Lollipops aus Kolumbien mit Erdbeergeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Fresa. En su interior tiene goma de mascar.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BonBonBumFresa',
        ]);
        $product->save();      
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/b5014f31-1d21-438d-820e-3e3de154f0b6/BomBomBunMandarine.png',
            'title' => 'Bon Bon Bum Mandarine',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Leckere Lollipops aus Kolumbien mit Mandarinengeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Mandarina. En su interior tiene goma de mascar.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BonBonBumMandarine',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/f3268f14-2c4c-4017-b7ca-ca7df4caea9e/BomBomBunFresaIntensaSingle.png',
            'title' => 'Bon Bon Bum Fressa Intensa',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit intensivem Erdbeergeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Fressa Intensa. En su interior tiene goma de mascar.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BomBomBumFressaIntensa',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/7d800889-6046-4119-a1b5-3d72c5cd67cf/BomBomBunWildAppleSingle.png',
            'title' => 'Bon Bon Bum Wild Apple',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Wildapfelgeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Mango Biche. En su interior tiene goma de mascar.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BomBomBumApple',
        ]);
        $product->save();                 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/62ff3b6c-8a45-4aca-a803-f9d3563c6d16/BomBomBunSurtidoSingle.png',
            'title' => 'Bon Bon Bum Surtido',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Wildapfel-, Erdbeere-, intensive Erdbeer- und Mandarinengeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabores a Mango Biche, Fresa, Fressa intensa y Mandarina. En su interior tiene goma de mascar.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BonBonBumSurtidoSingle',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/e035ba5b-f65d-495a-8040-a608a22eda10/Surtido.png',
            'title' => 'Bon Bon Bum Surtido',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Wildapfel-, Erdbeer-, intensiven Erdbeer- und Mandarinengeschmack. Innerlich befindet sich ein Kaugummi.',
            'teaseres' => '&#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabores a Mango Biche, Fresa, Fressa intensa y Mandarina. En su interior tiene goma de mascar.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BonBonBumSurtido',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/41c9f1c4-fe40-44bf-a19d-c8648bc80c82/Delight.png',
            'title' => 'Coffe Delight',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Coffee Delight ist das Ergebnis des Gemisches vom kolumbianischen Kaffee, Milch, Zucker und andere Zutaten. Es ähnelt dem Geschmack nach Karamell, hat eine runde Form. Der Geschmack begeistert, inspiriert und erfreut. Empfohlen für Schüler/Studenten.',
            'teaseres' => '&#x1F4D5;&nbsp; El coffee delight es el resultado de la mezcla de ingredientes de café colombiano. Tiene sabor a caramelo, tiene forma redonda. Su sabor entusiasma, inspira y deleita. Recomendado para estudiantes.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CoffeDelight',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/f8901714-6679-419f-b080-bdc7f65280ee/SuperCocoSingle.png',
            'title' => 'Bombón Supercoco',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Supercoco ist ein Lollipop mit Kokosnuskaramell. Der Geschmack leitet sich vom Gemisch aus Zucker, Kokosnuss, Glukose, Wasser und Jodsalz ab.',
            'teaseres' => '&#x1F4D5;&nbsp; Supercoco es una chupeta de caramelo con coco. Su sabor se deriva de la mezcla de azúcar, coco, glucosa, agua y sal yoyada.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BombonSupercocoSingle',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/01a00388-25e0-4aa6-9eb8-2bd1cc1491ae/SuperCoco.png',
            'title' => 'Bombón Supercoco',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Supercoco ist ein Lollipop mit Kokosnuskaramell. Der Geschmack leitet sich vom Gemisch aus Zucker, Kokosnuss, Glukose, Wasser und Jodsalz ab.',
            'teaseres' => '&#x1F4D5;&nbsp; Supercoco es una chupeta de caramelo con coco. Su sabor se deriva de la mezcla de azúcar, coco, glucosa, agua y sal yoyada.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BombonSupercoco',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/9d8910db-a72b-42b2-ac3a-a36e49d85016/Frunas.png',
            'title' => 'Frunas',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Frunas sind kaubaren weichen Bonbons mit diversen Geschmachsrichtungen (Erdbeere, Zitrone, Orange, Fruits).',
            'teaseres' => '&#x1F4D5;&nbsp; Frunas son caramelos blandos masticables con diversos sabores (fresa, limón, naranja, Frutas).',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Frunas',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/b0c5dec1-3708-4326-a771-2f0f6f8d696a/DulcedeLeche.png',
            'title' => 'Dulce de Leche Mardel',
            'country' => 'Argentina Argentinien',
            'teaserde' => '&#x1F4D9;&nbsp; Dulce de Leche ist süss. Es wird gewöhnlich in Desserts wie alfajores, cuchufiles, panqueques, ortillas, Wafles, Eis, Oblaten und Gebäcke verwendet.',
            'teaseres' => '&#x1F4D5;&nbsp; Su sabor característico es el dulce. Suele utilizarse en postres como alfajores, cuchufiles, panqueques, tortillas, wafles, helados, obleas, tortas y pasteles.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'DulceDeLeche',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/df785635-e429-4eaa-91b7-f6e8cfe1be38/Nucita.png',
            'title' => 'Nucita',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Nucita ist eine Creme aus Milch, Schokolade und Haselnüssen.',
            'teaseres' => '&#x1F4D5;&nbsp; Nucita es una crema con sabor a leche, chocolate y nueces.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Nucita',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/7d860705-89a8-457f-808b-05017f198a93/Jet.png',
            'title' => 'Chocolatina Jet',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Die Chocolatina Jet hat einen leckeren Aroma und Geschmack, Null Cholesterin.',
            'teaseres' => '&#x1F4D5;&nbsp; La Chocolatina Jet tiene un delicioso aroma y sabor, cero colesterol.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'ChocolatinaJet',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/627fc386-cb74-4e58-b1f6-7fd6ec14bb51/Barrilete.png',
            'title' => 'Barrilete',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Barrilete ist eine lange Süssigkeit. Der Gemisch der Farben verschmelzen beim Kauen auf der Zunge und erzeugen einen Tuttifritti-Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Barrilete es dulce y alargado. Al mascar, la mezcla de los colores del barrilete se derriten en la lengua dando un sabor a tutifruti.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Barrilete',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/17bb790f-45c6-437c-9fdb-50f1a844f0da/Aguila.png',
            'title' => 'Cerveza Aguila',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Der Geschmack des Biers cerveza Águila ist einzigartig in Farbe und Aroma.',
            'teaseres' => '&#x1F4D5;&nbsp; El sabor de la cerveza Águila es única en color y aroma.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaAguila',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/b49f8fe4-0e1f-49bd-b47d-d03752dcb86b/Poker.png',
            'title' => 'Cerveza Poker',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Der Geschmack des Biers cerveza Poker ist einzigartig in Farbe und Aroma.',
            'teaseres' => '&#x1F4D5;&nbsp; El sabor de la cerveza Poker es única en color y aroma.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaPoker',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/626de10b-ba02-4ba3-84e8-c67f23d9aeb9/ColayPola.png',
            'title' => 'Rebajo Cola y Pola',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Der Geschmack der Refajo Cola y Pola hat denselben wie bei der Mischung aus Bier und Soda, der Geschmack ist unbeschreibbar.',
            'teaseres' => '&#x1F4D5;&nbsp; El sabor del Refajo Cola y Pola tiene el mismo de la mezcla entre la cerveza y soda, su sabor es indescriptible.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'ColayPola',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/c5faef1a-9602-4fbd-a6af-d9984390163a/Quilmes.png',
            'title' => 'Cerveza Quilmes',
            'country' => 'Argentina Argentinien',
            'teaserde' => '&#x1F4D9;&nbsp; Quilmes ist ein schaumiges Bier, mit einem unbeschreibbaren einzigartigen und unvergleichbaren Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Quilmes es una cerveza espumosa, de un sabor indescriptible. Tiene un sabor único e inigualable.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaQuilmes',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/975a19c4-9bb8-4422-b201-ceb4e731e506/Pacena.png',
            'title' => 'Cerveza Paceña',
            'country' => 'Bolivia Bolivien',
            'teaserde' => '&#x1F4D9;&nbsp; Paceña ist ein schaumiges Bier, mit einem unbeschreibbaren einzigartigen und unvergleichbaren Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Paceña es una cerveza espumosa, de un sabor indescriptible. Tiene un sabor único e inigualable.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaPaceña',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/923255f7-e55e-49f9-923d-87df4a5ec539/Cusquena.png',
            'title' => 'Cerveza Cusqueña Rubia',
            'country' => 'Peru',
            'teaserde' => '&#x1F4D9;&nbsp; Das Bier cerveza Cusqueña Premium Golden ist ein Pilsener Bier, erzeugt aus reine Braugerste und echter Hopfen.',
            'teaseres' => '&#x1F4D5;&nbsp; La Cerveza Cusqueña Premium Golden es una cerveza Pilsener, elaborada con cebada malteada pura y lúpulo saaz.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaCusqueñaRubia',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/36b1a813-61c3-4997-b411-a955c3582106/Uva2L.png',
            'title' => 'Uva 2L',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Uva Postobón ist ein alkoholfreies, kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Traube Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Uva Postobón es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/uva.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Uva2L',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/5b70502b-4ae5-4bfa-9dbb-d1da4a9cc25b/Manzana2L.png',
            'title' => 'Manzana 2L',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Manzana Postobón ist ein alkoholfreies, kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola-Apfel Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Manzana Postobón es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/manzana.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Manzana2L',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/aa6e42f6-3386-4685-a816-891534481f67/Colombiana2L.png',
            'title' => 'Colombiana 2L',
            'country' => 'Colombia Kolumbien',
            'teaserde' => '&#x1F4D9;&nbsp; Colombiana ist ein alkoholfreies, kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Champagne Geschmack.',
            'teaseres' => '&#x1F4D5;&nbsp; Colombiana es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/champán.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Colombiana2L',
        ]);
        $product->save();                                                          
    }
}
