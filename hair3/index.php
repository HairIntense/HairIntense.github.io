


<!DOCTYPE html>
<html lang="ru">
<?php
// Сохраняем Facebook Pixel в Cookie
setcookie("fb_pixel", $_GET['fb_pixel'], time()+600); // срок действия 10 минут
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=480">
    <title>Hair Intense</title>


    <link rel="stylesheet" href="fonts/montserrat.css">
    <link rel="stylesheet" href="css/main.min.css">

    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/landing_valid_form.js"></script>
    <script type="text/javascript" src="js/landing_script.js"></script>
    <script type="text/javascript">
        $jsonData = {"1":{"currency":" euro","productsum":"39.00","oldproductsum":"78.00","delivery":0,"totalsum":"39.00"},"2":{"currency":" zloty","productsum":"89.00","oldproductsum":"178.00","delivery":0,"totalsum":"89.00"}}
    </script>

    <style>
        .ajax_loader {
            display: none;

        }
    </style>


<!-- LT code insertion -->

<!-- /LT code insertion -->

</head>

<body>
    <main>
        <section class="s1">
            <div class="s1-title">
                <h1>Hair Intense per il rafforzamento e la crescita dei capelli</h1>
            </div>
            <div class="s1-subtitle">
                <span>MIGLIOR RIMEDIO PER LA CRESCITA DEI CAPELLI</span>
            </div>
            <img src="img/s1-bg.jpg" alt="">
            <div class="container">
                <div class="s1-list">
                    <div class="s1-list-item">
                        <img src="img/s1-1.png" alt="">
                        <p>
                        Previene la caduta
                        </p>
                    </div>
                    <div class="s1-list-item">
                        <img src="img/s1-2.png" alt="">
                        <p>
                        Li rende più forti
                        </p>
                    </div>
                    <div class="s1-list-item">
                        <img src="img/s1-3.png" alt="">
                        <p>
                        Attiva la crescita di nuovi capelli
                        </p>
                    </div>
                </div>
            </div>
            <div class="form-wrapper">
                <div class="timer">
                    <div class="timer-title">Offerta speciale valida per:</div>
                    <div class="countbox"></div>
                    <div class="timer-body">
                        <div class="timer-item">
                            <div class="timer-val">
                                <div class="timer-num">
                                    0
                                </div>
                                <div class="timer-num">
                                    0
                                </div>
                            </div>
                            <div class="timer-name">
                                ore
                            </div>
                        </div>
                        <div class="timer-separate">

                        </div>
                        <div class="timer-item">
                            <div class="timer-val">
                                <div class="timer-num">
                                    0
                                </div>
                                <div class="timer-num">
                                    0
                                </div>
                            </div>
                            <div class="timer-name">
                                minuti
                            </div>
                        </div>
                        <div class="timer-separate">

                        </div>
                        <div class="timer-item">
                            <div class="timer-val">
                                <div class="timer-num">
                                    0
                                </div>
                                <div class="timer-num">
                                    0
                                </div>
                            </div>
                            <div class="timer-name">
                                secondi
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="price">
                        <div class="price-old">
                            <div>Prezzo normale:</div>
                            <div class="price-old-val oldproductsum"></div>
                        </div>
                        <div class="price-new">
                            <div>Prezzo per oggi:</div>
                            <span class="price-new-val productsum"></span>
                        </div>
                    </div>
                    <form action="/success/" method="post" class="lt-form orderformcdn">
                        <div class="form-item">
                            <select name="aim" class="countryselect form-control location"><option value='1'>Italy</option></select>
                        </div>
                        <div class="form-item">
                            <input type="text" name="name" class="field form-control userneme" placeholder="Inserisci il tuo nome" value="">

                        </div>
                        <div class="form-item">
                            <input type="text" name="phone" class="field form-control phone" placeholder="Inserisci il tuo numero di telefono" value="">
                        </div>
                        <input type="hidden" name="productsum" class="productsum" value="1 руб." />
                        <input type="hidden" name="delivery" value="0 руб." />
                        <input type="hidden" name="totalsum" class="productsum" value="1 руб." />
                        <input type="hidden" name="user" value="1" />
                        <input type="hidden" name="address" value="Уточнить у покупателя" /> 

                        <div class="reolader form-item">
                            <button type="submit" class="form-btn mm_button" >PER ORDINARE</button>
                            <div class="ajax_loader_block"><img class="ajax_loader" src="/img/ajax-loader.gif" alt="Loading"> <span class="ajax_loader">Loading</span></div>
                        </div>
                        <div class="form-count">
                            Ci sono
                            <span>5</span>
                            prodotti in sconto rimanenti
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="s2">
            
            <img src="img/s2-img.jpg" alt="">
            <div class="container">
                <h2>
                CAUSE
                    <br>
                    <span class="orange-bg">DELLA PERDITA DI CAPELLI </span>
                </h2>
                <div class="s2-list">
                    <div class="s2-list-item">
                        <img src="img/s2-1.png" alt="">
                        <p>
                        Genetica
                        </p>
                    </div>
                    <div class="s2-list-item">
                        <img src="img/s2-2.png" alt="">
                        <p>
                        Problemi ormonali
                        </p>
                    </div>
                    <div class="s2-list-item">
                        <img src="img/s2-3.png" alt="">
                        <p>
                        Ambiente
                        </p>
                    </div>
                    <div class="s2-list-item">
                        <img src="img/s2-4.png" alt="">
                        <p>
                        Stress
                        </p>
                    </div>
                    <div class="s2-list-item">
                        <img src="img/s2-5.png" alt="">
                        <p>
                        Infiammazione dei follicoli
                        </p>
                    </div>
                    <div class="s2-list-item">
                        <img src="img/s2-6.png" alt="">

                    </div>
                </div>
            </div>
        </section>
        <section class="s3">
            <img src="img/s3-img.jpg" alt="">
            <div class="container">
                <h2>
                BASTA SOGNARE <br>
                    <span class="bg-green">UNA TESTA PIENA DI BEI CAPELLI</span>
                </h2>
            </div>
            <img src="img/s3-img-2.png" alt="" class="s3-img2">
            <div class="container">
                <p class="">
                    <b> Il segreto di Hair Intense</b> è una formula unica con un ingrediente unico: estratto di microalghe verdi. Questo ingrediente ha un forte effetto idratante e protettivo, lega l’acqua, rivitalizza, nutre anche i capelli più danneggiati. Stimola la loro crescita e dona ai capelli un aspetto sano.
                </p>
                <img src="img/s3-img-3.jpg" alt="" class="s3-img3">
                <ul class="true-list">
                    <li>Aiuta anche nei più gravi casi di calvizie</li>
                    <li>Completamente sicuro</li>
                    <li>100% ingredienti naturali</li>
                    <li>Facile da applicare</li>
                    <li>Risultati veloci e duraturi</li>
                </ul>
            </div>
            <div class="s3-info">
                <p>
                Hair Intense è il rimedio più efficace per prevenire la caduta di capelli negli uomini e nelle donne
                </p>
            </div>
            <div class="s3-list">
                <div class="s3-list-item">
                    <img src="img/s3-1.jpg" alt="">
                    <p>
                    Attiva la Micro-circolazione nel cuoio capelluto
                    </p>
                </div>
                <div class="s3-list-item">
                    <img src="img/s3-2.jpg" alt="">
                    <p>
                    Ristabilisce il nutrimento naturale del follicolo
                    </p>
                </div>
                <div class="s3-list-item">
                    <img src="img/s3-3.jpg" alt="">
                    <p>
                    Riporta i capelli alla fase di crescita
                    </p>
                </div>
            </div>
            <div class="s3-button-wrapper">
                <a href="#form-sec" class="form-btn scroll-to">ORDINA ADESSO</a>
            </div>
        </section>
        <section class="s4">
            <img src="1.gif" alt="">
            <div class="container">
                <h2>
                    GLI INGREDIENTI NELLE CAPSULE
                    <span class="bg-green">DI HAIR INTENSE SONO IL PIÙ</span>
                    <span class="bg-green">EFFICACI POSSIBILE</span>
                </h2>
                <div class="s4-list">
                    <div class="s4-list-item">
                        <img src="img/s4-1.jpg" alt="">
                        <div class="s4-item-title">
                            Estratto di microalghe verdi
                        </div>
                        <p>
                            Rivitalizza, nutre anche i capelli più danneggiati. Stimola la loro crescita e dona ai capelli un aspetto sano
                        </p>
                    </div>
                    <div class="s4-list-item">
                        <img src="img/s4-2.jpg" alt="">
                        <div class="s4-item-title">
                            Radice di curcuma in polvere
                        </div>
                        <p>
                            Ha proprietà disinfettanti e antimicotiche, quindi impedisce la formazione della forfora e dell’alopecia. Inibisce efficacemente il processo di perdita e rottura dei capelli
                        </p>
                    </div>
                    <div class="s4-list-item">
                        <img src="img/s4-3.jpg" alt="">
                        <div class="s4-item-title">
                            Zinco
                        </div>
                        <p>
                            Controlla il metabolismo degli amminoacidi, che influenza la formazione di cheratina e l'assorbimento della vitamina A. È grazie agli amminoacidi che tutti i capelli persi vengono sostituiti con nuovi
                        </p>
                    </div>
                    <div class="s4-list-item">
                        <img src="img/s4-4.jpg" alt="">
                        <div class="s4-item-title">
                            Biotina
                        </div>
                        <p>
                            Migliora l’infrastruttura cheratinica dell’organismo, inibisce la secrezione di sebo, colpisce le ghiandole sebacee del cuoio capelluto, previene la caduta dei capelli
                        </p>
                    </div>

                    <div class="s4-list-item">
                        <img src="img/s4-7.jpg" alt="">
                        <div class="s4-item-title">
                            Vitamina C
                        </div>
                        <p>
                            Nutre i bulbi con microelementi utili
                        </p>
                    </div>
                    <div class="s4-list-item">
                        <img src="img/s4-8.jpg" alt="">
                        <div class="s4-item-title">
                            Vitamina E
                        </div>
                        <p>
                            Aumenta densità e spessore del capello
                        </p>
                    </div>
                </div>
            </div>
            <img src="img/s4-img1.jpg" alt="">
            <div class="container">
                <img src="img/s4-img.jpg" alt="" class="s4-img2">
            </div>
        </section>
        <section class="s5">
            <div class="container">
                <h2>
                COME  <br>
                    <span class="bg-green">FUNZIONA</span>
                </h2>

                <div class="s5-list">
                    <div class="s5-list-item">
                        <div class="s5-item-img" style="width: 140px;height: 171px;">
                            <img src="img/s5-1.jpg" alt="" style="width: 140px;height: 171px;">
                        </div>
                        <p>
                        I componenti attivi di Hair Intense stimolano i canali del potassio portando all’iperpolarizzazione della membrana cellulare.
                        </p>
                    </div>

                    <div class="s5-list-item">
                        <div class="s5-item-img" style="width: 140px;height: 290px;">
                            <img src="img/s5-2.jpg" alt="" style="width: 140px;height: 290px;">
                        </div>
                        <p>
                        I capillari si espandono permettendo un maggiore afflusso di ossigeno, sangue e nutrienti ai follicoli. Questo permette anche ai follicoli deboli di far ricrescere i capelli e renderli più forti per il resto della tua vita.
                        </p>
                    </div>

                    <div class="s5-list-item">
                        <div class="s5-item-img" style="width: 140px;
    height: 313px;">
                            <img src="img/s5-3.jpg" alt="" style="width: 140px;
    height: 313px;">
                        </div>
                        <p>
                        Con l’incremento dei follicoli, la fase di crescita del capello dura di più permettendo al capello di crescere più forte e spesso. I follicoli vanno nella fase anagen (crescita attiva). Perché ci sia un significativo numero di capelli in crescita, bisogna usare Hair Intense per almeno 28 giorni.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <h2>
            GUARDA
<br>
                <span class="orange-bg">IL VIDEO </span>
            </h2>
        </div>
        <video width="480" height="320" controls>
            <source src="1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <section class="s6">
            <img src="img/s6-img1.jpg" alt="">
            <div class="container">
                <h2>
                SEMPLICE E FACILE 
                DA USARE,
                    <span class="bg-green">RISULTATI VELOCI</span>
                    <span class="bg-green">E DURATURI!</span>
                </h2>
            </div>
            <div class="s6-list">
                <div class="s6-list-item">
                    <div class="s6-item-img"><img src="img/s6-1.png" alt=""></div>
                    <div class="s6-item-text">
                        <p>
                        CAPELLI MORBIDI E SETOSI
                        </p>
                    </div>
                </div>
                <div class="s6-list-item">
                    <div class="s6-item-img"><img src="img/s6-2.png" alt=""></div>
                    <div class="s6-item-text">
                        <p>
                        RIDURRE AL MINIMO LA PERDITA NATURALE
                        </p>
                    </div>
                </div>
                <div class="s6-list-item">
                    <div class="s6-item-img"><img src="img/s6-3.png" alt=""></div>
                    <div class="s6-item-text">
                        <p>
                        RIDURRE LA CALVIZIE A 99%
                        </p>
                    </div>
                </div>
                <div class="s6-list-item">
                    <div class="s6-item-img"><img src="img/s6-4.png" alt=""></div>
                    <div class="s6-item-text">
                        <p>
                        RISULTATI STABILI PER MOLTI ANNI
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">


                <div class="s6-serts">
                    <div class="s6-sert-item">
                        <img src="img/s6-sert1.jpg" alt="">
                        <p>
                        Certificato di conformità
                        </p>
                        <p>
                            Qualità assicurata
                        </p>
                    </div>

                </div>

                <div class="s3-button-wrapper">
                    <a href="#form-sec" class="form-btn scroll-to">PER ORDINARE</a>
                </div>
            </div>
        </section>
        <section class="s7">
            <div class="container">
                <h2>
                METODI CONVENZIONALI <br>
                PER ACCELERARE LA RICRESCITA
                    <span class="orange-bg">SONO INEFFICACI!</span>
                </h2>
            </div>
            <div class="s7-info">
                <div class="s7-title">
                OLI
                </div>
                <div class="s7-item s7-item-1">
                FINASTERIDE
                </div>
                <div class="s7-item s7-item-2">
                SOSTITUZIONE DEI CAPELLI
                </div>
                <div class="s7-item s7-item-3">
                SPRAY E <br>CREME REGOLARI
                </div>
                <div class="s7-item s7-item-4">
                TRAPIANTO
                </div>
            </div>
            <div class="container">
                <ul class="s7-list false-list">
                    <li>Nessuna garanzia sulla durata</li>
                    <li>Reazioni allergiche</li>
                    <li>Effetti collaterali</li>
                    <li>Nessun risultato visibile</li>
                </ul>
            </div>
        </section>
        <section class="s8">
            <div class="container">
                <h2>
                    CAPSULE UNICHE <br>
                    PER IL RAFFORZAMENTO E LA CRESCITA DEI CAPELLI
                </h2>
                <div class="s8-img-wrapper">
                    <img src="img/s7-1.jpg" alt="">
                    <img src="img/pack.png" alt="" class="s8-pack">
                </div>
                <div class="s8-list-wrapper">
                    <ul class="true-list">
                        <li>Risultati garantiti</li>
                        <li>Per uomini e donne</li>
                        <li>Capelli forti e spessi</li>
                        <li>Risultati veloci e visibili</li>
                        <li>Praticità</li>
                        <li>Ipoallergenico</li>
                        <li>Ingredienti naturali</li>
                        <li>Adatto a tutti i tipi di capelli</li>
                    </ul>
                </div>
            </div>
            <div class="s8-warning">
                <div class="s8-warn-title">
                    <span>ATTENZIONE!</span>
                    DIFFIDA DI PRODOTTI FALSI!
                </div>
                <div class="s8-warn-box">
                Puoi ordinare Hair Intense direttamente dal produttore solo dal nostro sito
                </div>
            </div>
        </section>
        <section class="s9">
            <div class="container">
                <div class="s9-text">
                SFORTUNATAMENTE, <u>A CAUSA DELLE MOLTE RICHIESTE</u> CI SONO RESTRIZIONI SUGLI ORDINI :                </div>
                <div class="s9-limit">
                    <img src="img/pack2.png" alt="">
                    MASSIMO 10 CONFEZIONI DI HAIR INTENSE A PERSONA
                </div>
            </div>
            <div class="form-wrapper">
                <div class="timer">
                    <div class="timer-title">L’offerta è valida per:</div>
                    <div class="countbox"></div>
                    <div class="timer-body">
                        <div class="timer-item">
                            <div class="timer-val">
                                <div class="timer-num">
                                    0
                                </div>
                                <div class="timer-num">
                                    0
                                </div>
                            </div>
                            <div class="timer-name">
                                ore
                            </div>
                        </div>
                        <div class="timer-separate">

                        </div>
                        <div class="timer-item">
                            <div class="timer-val">
                                <div class="timer-num">
                                    0
                                </div>
                                <div class="timer-num">
                                    0
                                </div>
                            </div>
                            <div class="timer-name">
                                minuti
                            </div>
                        </div>
                        <div class="timer-separate">

                        </div>
                        <div class="timer-item">
                            <div class="timer-val">
                                <div class="timer-num">
                                    0
                                </div>
                                <div class="timer-num">
                                    0
                                </div>
                            </div>
                            <div class="timer-name">
                                secondi
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="price">
                        <div class="price-old">
                            <div>Prezzo normale:</div>
                            <div class="price-old-val oldproductsum"></div>
                        </div>
                        <div class="price-new">
                            <div>Prezzo per oggi:</div>
                            <span class="price-new-val productsum"></span>
                        </div>
                    </div>
                    <div class="form-item">
                        <a href="#form-sec" class="form-btn scroll-to">PER ORDINARE</a>
                    </div>
                    <div class="form-count">
                        Ci sono
                        <span>5</span>
                        prodotti in sconto rimanenti
                    </div>
                </div>
            </div>
        </section>
        <section class="s10">
            <div class="container">
                <h2>
                COME USARE <br>
                    <span class="bg-green">LE CAPSULE HAIR INTENSE</span>
                </h2>
                <div class="s10-list">
                    <div class="s10-list-item">
                        <img src="img/s10-1.png" alt="">
                        <div class="s10-item-text">
                            <div class="s10-item-title">
                                Step  1
                            </div>
                            Prendere una capsula dopo il pasto, con una piccola quantità di acqua
                        </div>
                    </div>
                    <div class="s10-list-item">
                        <img src="img/s10-2.png" alt="">
                        <div class="s10-item-text">
                            <div class="s10-item-title">
                                Step  2
                            </div>
                            Dose giornaliera raccomandata: 2 capsule (mattina e sera)
                        </div>
                    </div>
                    <div class="s10-list-item">
                        <img src="img/s10-3.png" alt="">
                        <div class="s10-item-text">
                            <div class="s10-item-title">
                                Step  3
                            </div>
                            Il primo effetto evidente è quello di eliminare la forfora e nutrire il cuoio capelluto. Le ghiandole sebacee riducono il loro volume, in modo che i capelli non si ungano. Poi inizia il processo di auto-rigenerazione e di attivazione dei bulbi "dormienti", che rafforzano la struttura dei capelli in modo permanente
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="s11">
            <div class="container">
                <h2>
                PARERE<br>DELL’ESPERTO
                </h2>
                <div class="s11-block white-block">
                    <img src="img/s11-doc.jpg" alt="">
                    <p>
                    Chiunque può soffrire di calvizie a prescindere dal genere. Problemi con l’ambiente, lo stress del lavoro e carenza di nutrienti peggiorano la salute di cuoio e capelli.

                        <br><br>
                        Come risultato i capelli si indeboliscono perdendo forza e volume, diventano fini e cadono. Come tricologo ho testato diversi metodi per rafforzare i capelli negli anni, cosicché i pazienti potessero mantenere i capelli forti e sani a casa.
                        <br><br>
                        <b>Hair Intense è stata </b> - una vera scoperta! Gli ingredienti naturali ristabiliscono la funzionalità dei capillari, flusso sanguigno e follicoli. I test clinici hanno dimostrato l’efficacia contro la perdita di capelli e la calvizie.

                        <span class="sep"><img src="img/sep.png" alt=""></span>
                        <span class="block-name">
                        Daniele Bianchi
                        </span> <br>
                        Professore, tricologo, 35 anni di esperienza
                    </p>
                </div>
            </div>
        </section>
        <section class="s12">
            <div class="container">
                <h2>
                PERSONE REALI  - <br>
                    <span class="bg-green">FEEDBACK REALI</span>
                </h2>
                <div class="s12-block white-block">
                    <img src="img/s12-1.jpg" alt="">
                    <p>
                    Ho avuto i primi problemi di calvizie subito dopo i miei 30 anni quando i miei capelli cominciarono a cadere. Mi è stato accidentalmente dato un pacchetto di capsule di Hair Intense e ho deciso di mantenere i capelli rimanenti. All’inizio non ci credevo ma quando ho cominciato ad usarlo regolarmente ho notato la ricrescita. Dopo 2 settimane alcuni capelli sottili. Poi l’ho preso seriamente e l’ho applicato tutti i giorni e dopo un mese i capelli erano più doppi e sani. Ne sono anche cresciuti di nuovi dove ero quasi pelato

                        <span class="sep"><img src="img/chat.png" alt=""></span>
                        <span class="block-name">
                        Antonio Biaselli
                        </span> | 37 anni 
                    </p>
                </div>
                <div class="s12-block white-block">
                    <img src="img/s12-2.jpg" alt="">
                    <p>
                    Per molti uomini la calvizie è normale ma io non voglio sembrare un nonnino alla mia età, grazie alla genetica… la prima cosa che ho notato di Hair Intense è che sono ricomparsi i capelli anche sulla stempiatura ed erano più spessi. Seconda cosa, la caduta di capelli si è arrestata. Terzo, i capelli sono più forti ed in un mese ho ritrovato la fiducia in me stesso! Non ho avuto effetti collaterali se non un leggero prurito, immagino dovuto alla ricrescita, che è passato subito comunque. Grazie per questo rimedio miracoloso!

                        <span class="sep"><img src="img/chat.png" alt=""></span>
                        <span class="block-name">
                        Andrea D’Aguanno
                        </span> | 28 anni 
                    </p>
                </div>
                <div class="s12-block white-block">
                    <img src="img/s12-3.jpg" alt="">
                    <p>
                    Salve! Vi scrivo per ringraziarvi. Ho ordinato una confezione di Hair Intense. Anche se la uso da poco più di un mese, la mia parrucchiera non smette di farmi complimenti! Posso notare la crescita dove i capelli erano più radi. Sono così felice che non so come esprimerlo! Ho già provato così tanti prodotti, centinaia di shampoo differenti e così via. Ma solo questo prodotto mi ha dato un effetto del genere!
                        <span class="sep"><img src="img/chat.png" alt=""></span>
                        <span class="block-name">
                        Veronica Bernardi  
                        </span> | 52 anni 
                    </p>
                </div>
            </div>
        </section>
        <section class="s13">
            <div class="container">
                <h2>
                PAGAMENTO <br>
                    <span class="bg-green">E SPEDIZIONE </span>
                </h2>
                <div class="s13-list">
                    <div class="s13-list-item">
                        <img src="img/s13-1.png" alt="">
                        <p>
                        Spedizione con corriere in 1-10 giorni lavorativi
                        </p>
                    </div>
                    <div class="s13-list-item">
                        <img src="img/s13-2.png" alt="">
                        <p>
                        Paghi il tuo ordine alla consegna
                        </p>
                    </div>
                    <div class="s13-list-item">
                        <img src="img/s13-3.png" alt="">
                        <p>
                        Controlliamo tutti i prodotti prima della spedizione e garantiamo la qualità al 100%

                        </p>
                    </div>
                </div>
            </div>
            <img src="img/s13-img.png" alt="" class="s13-img">
        </section>
        <section class="s14 s1" id="form-sec">
            <div class="s1-title">
                <h1>Hair Intense per il rafforzamento e la crescita dei capelli</h1>
            </div>
            <div class="s1-subtitle">
                <span>MIGLIOR RIMEDIO PER LA CRESCITA DEI CAPELLI</span>
            </div>
            <img src="img/s1-bg.jpg" alt="">
            <div class="container">
                <div class="s1-list">
                    <div class="s1-list-item">
                        <img src="img/s1-1.png" alt="">
                        <p>
                        Previene la caduta
                        </p>
                    </div>
                    <div class="s1-list-item">
                        <img src="img/s1-2.png" alt="">
                        <p>
                        Li rende più forti
                        </p>
                    </div>
                    <div class="s1-list-item">
                        <img src="img/s1-3.png" alt="">
                        <p>
                        Attiva la crescita di nuovi capelli
                        </p>
                    </div>
                </div>
            </div>
            <div class="form-wrapper">
                <div class="timer">
                    <div class="timer-title">L’offerta è valida per:</div>
                    <div class="countbox"></div>
                    <div class="timer-body">
                        <div class="timer-item">
                            <div class="timer-val">
                                <div class="timer-num">
                                    0
                                </div>
                                <div class="timer-num">
                                    0
                                </div>
                            </div>
                            <div class="timer-name">
                                ore
                            </div>
                        </div>
                        <div class="timer-separate">

                        </div>
                        <div class="timer-item">
                            <div class="timer-val">
                                <div class="timer-num">
                                    0
                                </div>
                                <div class="timer-num">
                                    0
                                </div>
                            </div>
                            <div class="timer-name">
                                minuti
                            </div>
                        </div>
                        <div class="timer-separate">

                        </div>
                        <div class="timer-item">
                            <div class="timer-val">
                                <div class="timer-num">
                                    0
                                </div>
                                <div class="timer-num">
                                    0
                                </div>
                            </div>
                            <div class="timer-name">
                                secondi
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="price">
                        <div class="price-old">
                            <div>Prezzo normale:</div>
                            <div class="price-old-val oldproductsum"></div>
                        </div>
                        <div class="price-new">
                            <div>Prezzo per oggi:</div>
                            <span class="price-new-val productsum"></span>
                        </div>
                    </div>
                    <form action="/success/" method="post" class="lt-form orderformcdn">
                        <div class="form-item">
                            <select name="aim" class="countryselect form-control location"><option value='1'>Italy</option></select>
                        </div>
                        <div class="form-item">
                            <input type="text" name="name" class="field form-control userneme" placeholder="Inserisci il tuo nome" value="">

                        </div>
                        <div class="form-item">
                            <input type="text" name="phone" class="field form-control phone" placeholder="Inserisci il tuo numero di telefono" value="">
                        </div>
                        <input type="hidden" name="productsum" class="productsum" value="1 руб." />
                        <input type="hidden" name="delivery" value="0 руб." />
                        <input type="hidden" name="totalsum" class="productsum" value="1 руб." />
                        <input type="hidden" name="user" value="1" />
                        <input type="hidden" name="address" value="Уточнить у покупателя" /> 

                        <div class="reolader form-item">
                            <button type="submit" class="form-btn mm_button" >PER ORDINARE</button>
                            <div class="ajax_loader_block"><img class="ajax_loader" src="/img/ajax-loader.gif" alt="Loading"> <span class="ajax_loader">Loading</span></div>
                        </div>
                        <div class="form-count">
                            Ci sono
                            <span>5</span>
                            prodotti in sconto rimanenti
                        </div>
                    </form>
                </div>
            </div>
            <div class="" style="text-align: center; color: #222222; padding: 20px 0;">
                <!-- <p>ООО "А-Торг" ИНН 7733871308 / ОГРН 1147746160132 г. Москва, Илимская улица, дом 2, э 1 пом XIII к 1 оф 2</p> -->
                <a href="politika.html" target="_blank">Informativa sulla privacy</a>
            </div>
        </section>
    </main>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="js/count.js"></script>
    <script>

        $(function () {
            CountBox();
            $('.slider-arrows').html('');

            $('.scroll-to').click(function () {
                var scrollElem = $(this).attr('href');
                scrollTo(scrollElem);
                return false;
            });

            function scrollTo(scrollElem) {
                var offset = 20;
                if ($(scrollElem).length != 0) {
                    $('html, body').animate({
                        scrollTop: $(scrollElem).offset().top - offset
                    }, 500);
                }
            }

        });
    </script>


    <script type="text/javascript">
        var hash = "73j5A";
        var lt_landing_id = 7891;
        var success_page = "success/success.html";
        var failure_page = "success/failure.html";
        var lt_html_version = true;
    </script>
    <script type="text/javascript" src="js/send.min.js" charset='UTF-8'></script>
    </body>

</html>