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
Készítsen programot az alábbi feladatra az Ön által tanult programozási nyelven!<br>
Az elkészítendő program feladata, egy sportklub rajongói weboldalára egy hétvége alatt 
beérkezett megrendelések feldolgozása.<br>
A webshop által árult termékek listáját és a pillanatnyi készletet a raktar.csv állomány 
tartalmazza. A megrendelések a rendeles.csv állományban találhatók.
A raktar.csv állomány UTF-8-as kódolással, pontosvesszővel elválasztva tartalmazza a 
készleten lévő termékeket: <br>
Az első érték a termék kódja, amit a neve és az ára követ. A sor végén az aktuális készlet 
mennyisége található.
Pl.: A P001;Poló L-es;1899;10 sor jelentése: az L-es póló termékkódja: P001, ára 1899 Ft, 
és jelenleg 10 darab van belőle raktáron.<br>
A rendeles.csv állomány kódolása szintén UTF-8-as. Minta:
A fájlban két típusú sor van: a megrendeléssel kapcsolatos adatok, ezeket a sor elején 
található „M” betű jelzi, a másik a rendeléshez tartozó tételek, amit a sor eleji „T” betű 
jelez.<br>
 A „M”-el jelölt sor felépítése: 
 A „T”-vel jelölt sor felépítése
T 54 213 05/1/1
T 3/5
A rendeles.csv állományban a megrendelések sorban vannak, azaz a megrendelés után 
mindig az ahhoz tartozó tételek találhatók. <br>
A rendelés feldolgozás folyamata: <br>
• A megrendelések feldolgozása a fájlból soronként történik. <br>
• Minden rendelésnél le kell ellenőrizni, hogy a megrendelt termékek a megrendelt 
mennyiségben raktáron vannak-e. <br>
• Ha igen, akkor a megrendelés teljesíthető, és a raktár készletet csökkenteni kell. <br>
• Ha egy rendelés bármelyik tétele nem teljesíthető, akkor a teljes megrendelés 
„várakozó” státuszba kerül, egyik tétel esetében sincs készlet csökkentés.<br>
Feladatok: <br></p>
<ol class="feladat">
<li class="maked"> Tárolja el a fájlok tartalmát olyan adatszerkezetben, amivel a további feladatok 
megoldhatók.</li><br>
<li class="maked"> Készítse el a rendelések feldolgozását a leírt folyamatnak megfelelően</li><br>
<li class="maked">Készítse el a levelek.csv fájlt, amiben minden megrendelő e-mail címe szerepel, 
valamint attól függően, hogy lehet-e teljesíteni a rendelését, vagy nem az alábbi 
üzenetek valamelyike:<br> 
 A rendelését két napon belül szállítjuk. A rendelés értéke: x Ft
 A rendelése függő állapotba került. Hamarosan értesítjük a szállítás 
időpontjáról.
A teljesíthető megrendeléseknél az x Ft helyére a teljes rendelés értékét kell beírni.
Minta: </li><br>
<li class="maked">Készítse el a beszerzes.csv állományt, ami beszerzést végző csapat számára készül, 
és azt tartalmazza, hogy egy-egy termékből legalább mekkora a mennyiséget kell 
beszerezni ahhoz, hogy a „várakozó” státuszba került rendeléseket teljesíteni 
lehessen. Az állomány tartalmazza a termék kódját, és a szükséges mennyiséget.
</li></ol>

            
        </div>
    </body>
</html>
