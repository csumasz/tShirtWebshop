1. feladat
Készítsen programot az alábbi feladatra az Ön által tanult programozási nyelven!
Az elkészítendő program feladata, egy sportklub rajongói weboldalára egy hétvége alatt 
beérkezett megrendelések feldolgozása.
A webshop által árult termékek listáját és a pillanatnyi készletet a raktar.csv állomány 
tartalmazza. A megrendelések a rendeles.csv állományban találhatók.
A raktar.csv állomány UTF-8-as kódolással, pontosvesszővel elválasztva tartalmazza a 
készleten lévő termékeket: 
Az első érték a termék kódja, amit a neve és az ára követ. A sor végén az aktuális készlet 
mennyisége található.
Pl.: A P001;Poló L-es;1899;10 sor jelentése: az L-es póló termékkódja: P001, ára 1899 Ft, 
és jelenleg 10 darab van belőle raktáron.
A rendeles.csv állomány kódolása szintén UTF-8-as. Minta:
A fájlban két típusú sor van: a megrendeléssel kapcsolatos adatok, ezeket a sor elején 
található „M” betű jelzi, a másik a rendeléshez tartozó tételek, amit a sor eleji „T” betű 
jelez.

A rendeles.csv állományban a megrendelések sorban vannak, azaz a megrendelés után 
mindig az ahhoz tartozó tételek találhatók. 
A rendelés feldolgozás folyamata: 
• A megrendelések feldolgozása a fájlból soronként történik. 
• Minden rendelésnél le kell ellenőrizni, hogy a megrendelt termékek a megrendelt 
mennyiségben raktáron vannak-e. 
• Ha igen, akkor a megrendelés teljesíthető, és a raktár készletet csökkenteni kell. 
• Ha egy rendelés bármelyik tétele nem teljesíthető, akkor a teljes megrendelés 
„várakozó” státuszba kerül, egyik tétel esetében sincs készlet csökkentés.

Feladatok: 
    1. Tárolja el a fájlok tartalmát olyan adatszerkezetben, amivel a további feladatok 
megoldhatók.
    2. Készítse el a rendelések feldolgozását a leírt folyamatnak megfelelően
    3. Készítse el a levelek.csv fájlt, amiben minden megrendelő e-mail címe szerepel, 
valamint attól függően, hogy lehet-e teljesíteni a rendelését, vagy nem az alábbi 
üzenetek valamelyike: 
 A rendelését két napon belül szállítjuk. A rendelés értéke: x Ft
 A rendelése függő állapotba került. Hamarosan értesítjük a szállítás 
időpontjáról.
A teljesíthető megrendeléseknél az x Ft helyére a teljes rendelés értékét kell beírni.

    4. Készítse el a beszerzes.csv állományt, ami beszerzést végző csapat számára készül, és azt tartalmazza, hogy egy-egy termékből legalább mekkora a mennyiséget kell 
beszerezni ahhoz, hogy a „várakozó” státuszba került rendeléseket teljesíteni 
lehessen. Az állomány tartalmazza a termék kódját, és a szükséges mennyiséget.

2. feladat
Készítse el az első feladatban szerepelő weblaphoz kapcsolódóan egy rendelés 
részleteit tartalmazó oldalt.
Az oldal elkészítése során törekedjen arra, hogy a formázások ne a HTML fájlba 
kerüljenek, hanem egy stílus állományba.
Az oldal elkészítéséhez a baseball.png, a bogre.png és a polo.png állományokra lesz 
szüksége.

Információk az oldal elkészítéséhez:
 Befoglaló keret: középre igazított, háttérszíne sötét szürke, szélessége: 800 pixel.
 A „Megrendelés részletek” szöveg: 1-es szintű címsor, középre igazított, 18 pontos
 A rendelés száma: 2-es színtű címsor, középre igazított, dőlt stílus.
 Tábálázat oszlopainak szélessége:
o kép: 120 pixel,
o termék neve: 200 pixel,
o mennyiség: 100 pixel,
o nettó ár: 100 pixel,
o ÁFA százalék: 50 pixel,
o bruttó ár: 100 pixel
 Képek magassága: 75 pixel
