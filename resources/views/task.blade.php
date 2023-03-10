<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                width: 80%;
                margin: 0 auto;
            }

         

            .flex-center {
                align-items: center;
                justify-content: center;
            }

           

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .feladat{
                width: 100%;
                display: block;
            }
            .maked{
                text-decoration: line-through;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<p class="feladat">1. feladat
K??sz??tsen programot az al??bbi feladatra az ??n ??ltal tanult programoz??si nyelven!<br>
Az elk??sz??tend?? program feladata, egy sportklub rajong??i weboldal??ra egy h??tv??ge alatt 
be??rkezett megrendel??sek feldolgoz??sa.<br>
A webshop ??ltal ??rult term??kek list??j??t ??s a pillanatnyi k??szletet a raktar.csv ??llom??ny 
tartalmazza. A megrendel??sek a rendeles.csv ??llom??nyban tal??lhat??k.
A raktar.csv ??llom??ny UTF-8-as k??dol??ssal, pontosvessz??vel elv??lasztva tartalmazza a 
k??szleten l??v?? term??keket: <br>
Az els?? ??rt??k a term??k k??dja, amit a neve ??s az ??ra k??vet. A sor v??g??n az aktu??lis k??szlet 
mennyis??ge tal??lhat??.
Pl.: A P001;Pol?? L-es;1899;10 sor jelent??se: az L-es p??l?? term??kk??dja: P001, ??ra 1899 Ft, 
??s jelenleg 10 darab van bel??le rakt??ron.<br>
A rendeles.csv ??llom??ny k??dol??sa szint??n UTF-8-as. Minta:
A f??jlban k??t t??pus?? sor van: a megrendel??ssel kapcsolatos adatok, ezeket a sor elej??n 
tal??lhat?? ???M??? bet?? jelzi, a m??sik a rendel??shez tartoz?? t??telek, amit a sor eleji ???T??? bet?? 
jelez.<br>
??? A ???M???-el jel??lt sor fel??p??t??se: 
??? A ???T???-vel jel??lt sor fel??p??t??se
T 54 213 05/1/1
T 3/5
A rendeles.csv ??llom??nyban a megrendel??sek sorban vannak, azaz a megrendel??s ut??n 
mindig az ahhoz tartoz?? t??telek tal??lhat??k. <br>
A rendel??s feldolgoz??s folyamata: <br>
??? A megrendel??sek feldolgoz??sa a f??jlb??l soronk??nt t??rt??nik. <br>
??? Minden rendel??sn??l le kell ellen??rizni, hogy a megrendelt term??kek a megrendelt 
mennyis??gben rakt??ron vannak-e. <br>
??? Ha igen, akkor a megrendel??s teljes??thet??, ??s a rakt??r k??szletet cs??kkenteni kell. <br>
??? Ha egy rendel??s b??rmelyik t??tele nem teljes??thet??, akkor a teljes megrendel??s 
???v??rakoz????? st??tuszba ker??l, egyik t??tel eset??ben sincs k??szlet cs??kkent??s.<br>
Feladatok: <br></p>
<ol class="feladat">
<li class="maked"> T??rolja el a f??jlok tartalm??t olyan adatszerkezetben, amivel a tov??bbi feladatok 
megoldhat??k.</li><br>
<li class="maked"> K??sz??tse el a rendel??sek feldolgoz??s??t a le??rt folyamatnak megfelel??en</li><br>
<li class="maked">K??sz??tse el a levelek.csv f??jlt, amiben minden megrendel?? e-mail c??me szerepel, 
valamint att??l f??gg??en, hogy lehet-e teljes??teni a rendel??s??t, vagy nem az al??bbi 
??zenetek valamelyike:<br> 
??? A rendel??s??t k??t napon bel??l sz??ll??tjuk. A rendel??s ??rt??ke: x Ft
??? A rendel??se f??gg?? ??llapotba ker??lt. Hamarosan ??rtes??tj??k a sz??ll??t??s 
id??pontj??r??l.
A teljes??thet?? megrendel??sekn??l az x Ft hely??re a teljes rendel??s ??rt??k??t kell be??rni.
Minta: </li><br>
<li class="maked">K??sz??tse el a beszerzes.csv ??llom??nyt, ami beszerz??st v??gz?? csapat sz??m??ra k??sz??l, 
??s azt tartalmazza, hogy egy-egy term??kb??l legal??bb mekkora a mennyis??get kell 
beszerezni ahhoz, hogy a ???v??rakoz????? st??tuszba ker??lt rendel??seket teljes??teni 
lehessen. Az ??llom??ny tartalmazza a term??k k??dj??t, ??s a sz??ks??ges mennyis??get.
</li></ol>

            
        </div>
    </body>
</html>
