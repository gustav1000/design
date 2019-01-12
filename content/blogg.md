---
views:
    redovisa:
        region: sidebar-right
        template: anax/v2/block/default
        data:
            meta:
                type: single
                route: block/blogg
---
TjaTja bloggen!
=========================

Detta innehåll är skrivet i markdown och du hittar innehållet i filen `content/test.md`.

Blogg bild 1 Äventyr i Göteborg!
-----------------
<p class='bloggP'>Först och främst vill jag säga varmt välkommen till min blogg! Detta blogginlägget skall handla om tre olika berättelser som utspelade sig under sommaren 2017.</p>
<br>
<p class='bloggP'>Som sagt i redovisningstexten fungerar det inte för mig att hämta mallen för bloggen.(Misstänker att mina ssh-nycklar har buggat eller att jag har mixat ihop dem jag har.) Det lämnar mig i en lite jobbig position, men som du som rättar kan se så har jag försökt lösa det själv. Målet med uppgiften som jag förstått det är att förstå sig på och använda Cimage och figure. Jag känner ändå att jag gör det i dessa blogginlägg.</p><br>

[FIGURE class="center" src=image/blogguppgift-bilder/apa.PNG?width=700&height=466.7&crop-to-fit caption="Hittade en apa i centrala Göteborg!!! #OMG. Spänner över hela 'article'."]
<p class='bloggP'>Första bilden valde jag att använda mig av en enkel beskärning där man ser allt nödvändigt. Bilden spänner över hela 'article'. Bilden har inget filter.</p>
<br>

[FIGURE class="right" src=image/blogguppgift-bilder/apa.PNG?width=200&height=500&crop-to-fit&area=15,20,15,0&f=grayscale caption="En bild på en apa i centrala Göteborg."]
<p class='bloggP'>Denna bilden är en beskärning(crop) på bara apan. Inställningarna i cImage är 'crop-to-fit&area=10,35,40,20'. Jag valde det för att jag vill kunna bevisa att jag kan använda CSS klassen 'right' och låta den flyta åt höger.</p> <br> <p class='bloggP'>Jag använder också ett filter som heter grayscale som gör bilden grå helt enkelt. Storleken är ändrad till 200*500px. Yes... Denna del 1 av blogg inläggen handlar då om att jag och en kompis hälsar på en annan kompis i Göteborg. Vi gick ut och klubbade lite sen på vägen hem såg vi apan.</p>
<br><br><br><br>

[FIGURE class="left" src=image/blogguppgift-bilder/apa.PNG?width=400&height=400&crop-to-fit&area=10,35,40,20&f=mean_removal caption="Samma läskiga apa. Annat filter."]
<p class='bloggP'>Denna bilden valde jag att göra till en kvadrat(400*400px), eftersom jag ville beskära så jag skulle få närbild på apans ansikte. Masker är ju trots allt alltid lite läskiga. Jag använde mig av Cimage inställningarna: 'crop-to-fit&area=10,35,40,20 &f=mean_removal'.</p><br><p class='bloggP'>Filtret använde jag mig av för att det skulle bli lite läskigare helt enkelt. Nu tänker jag fortsätta skriva lite till för att texten ska flyta till vänstersidan av 'article' så att vi får se att det fungerar som det ska. (y)</p>
<br>

[FIGURE class="center" src=image/blogguppgift-bilder/apa.PNG?width=600&height=270&crop-to-fit&area=73,0,0,0&f=edgedetect caption="Centrala Göteborg Alltså."]
<p class='bloggP'>Som avslutande bild valde jag en plattare bild, då blev det perfekt att använda ett av 'Snapchats-Göteborg-geofilter'. 600*270px blev bildens storlek. Inställningarna för CImage är: 'crop-to-fit&area=73,0,0,0&f=edgedetect'</p>
<br>

<p class='bloggP'>Jag använde mig utav Iphone 6s 'Front camera' Information om den är: (5 MP, burst mode, f/2.2 aperture, exposure control, face detection, auto-HDR, 1080p HD video recording, Retina flash) Jag använde kameran genom applikationen Snapchat när bilden togs, vilket betyder att jag inte hade tillgång till 'burst mode' eller 'exposure control'. Något att ta i akt är att bilden togs i ett berusat tillstånd och den togs eftersom jag tyckte det var kul och annorlunda att se en apa ute på gatan klockan 03:19.</p><br>




Blogg bild 2 Ithaka resan!
-----------------

[FIGURE class="center" src=image/blogguppgift-bilder/grekland.jpg?width=700&height=500&crop-to-fit caption="En bild på mig i Grekland på ön Ithaka!!! #OMG"]
<p class='bloggP'>Första bilden valde jag att använda mig av en enkel beskärning där man ser allt nödvändigt. Bilden spänner över hela ‘article’. Bilden har inget filter och är storleken 700*500px.</p>
<br>

[FIGURE class="left" src=image/blogguppgift-bilder/grekland.jpg?width=250&height=600&crop-to-fit&area=15,10,15,0 caption="En bild på bara mig med minimal bakgrund."]
<p class='bloggP'>Andra bilden valde jag att klippa med inställningarna: '&crop-to-fit&area=15,10,15,0' och göra en ändring på bildstorleken till '250*600px'. jag använder mig av klassen 'left' för att få den att flyta åt vänster</p><br>
<p class='bloggP'> Eftersom jag har så mycket plats över här tänker jag skriva lite om bildens historia. Det utspelar sig på ön Ithaka utanför Greklands västkust. Vi seglade dit från ett ställe i korinter-havet som heter Kiato, jag, min familj och mina kusiner. </p><br>
<p class='bloggP'>Just den här bilden är tagen på en vandring som jag, min syrra och hennes pojkvän var på. Vi skulle upp i bergen och helt enkelt se hur högt upp vi kunde gå. Det slutade på ungefär 360 meter över havet. Vilken utsikt det var...</p><br><br>

[FIGURE class="right" src=image/blogguppgift-bilder/grekland.jpg?width=400&height=400&crop-to-fit&area=10,35,40,20&convolve=sharpen-alt&f=colorize,100,60,0,0 caption="Jag brände mig en del på denna resan."]
<p class='bloggP'>Tredje bilden valde jag att klippa med inställningarna: 'crop-to-fit&area=10,35,40,20'. Jag valde också att använda mig av ett filter som gör att jag ser mer bränd ut. Inställningarna för det var: 'convolve=sharpen-alt&f=colorize,100,60,0,0'. Jag gjorde en ändring på bildstorleken till '400*400px'. jag använder mig av klassen 'right' för att få den att flyta åt höger</p>
<br><br>

[FIGURE class="center" src=image/blogguppgift-bilder/grekland.jpg?width=600&height=270&crop-to-fit&area=65,10,10,10 caption="Mina fötter fick också ta en smäll den resan."]
<p class='bloggP'>På fjärde bilden använder jag mig av klassen 'center' för att få bilden att hålla sig i mitten.(Den totala klassen blir '.figure .center'). Jag valde att fokusera beskärningen på fötterna. CImage's inställningar blev 'crop-to-fit&area=65,10,10,10' och bildstorleken är 600*270px.</p>
<br>
<p class='bloggP'>Jag använde mig utav Iphone 6s ‘Front camera’ Information om den är: (5 MP, burst mode, f/2.2 aperture, exposure control, face detection, auto-HDR, 1080p HD video recording, Retina flash). Något att notera med denna bilden är att det var min syster som tog den och inte jag. Jag misstänker att det är helt okej. Det är trots allt den ända bilden jag inte har tagit helt själv. En stor del av vår vandring upp i bergen grundades med tanken att vi skulle ta lite kort på oss med den fantastiska utsikten.</p>





Blogg bild 3: Min gamla moped!
-----------------

[FIGURE class="center" src=image/blogguppgift-bilder/moped.JPG?width=600&height=600&crop-to-fit caption="Helbild på mopeden och allt som ingick."]
<p class='bloggP'>På första bilden valde att inte använda beskärning, eftersom att man ser allt nödvändigt när jag har den storleken som jag har. Den spänner över hela ‘article’ och bilden har inget filter. Storleken 600*600px och jag använder 'crop-to-fit' utan argument.</p>
<br>

[FIGURE class="right" src=image/blogguppgift-bilder/moped.JPG?width=300&height=700&crop-to-fit&area=40,60,0,10 caption="Ett helt set vita kåpor ingick!!!."]
<p class='bloggP'>Här vill jag visa dem vita kåporna som ingick på närmare håll. Jag gjorde bildens storlek 300*700px och 'crop-to-fit&area=40,60,0,10'. Jag använder klassen 'right' för att få den flyta längst till höger.</p><br>
<p class='bloggP'>Historien bakom den här bilden är när jag skulle sälja min moped. Jag köpte den för cirka 8000:- ungefär ett år innan bilden togs. Jag lade nu ut mopeden på Blocket.se för 12000:- och den såldes efter en dag. </p>
<br>
<p class='bloggP'>Det blev en lyckad affär, men låt dig inte luras av det. Den budgetera sanningen ligger djupare än bara inköpspris plus försäljningspriset. Jag spenderade nämligen runt 5000:- totalt på den under året, så jag gick inte direkt plus på affären även om man vill se det på det sättet. </p>
<br>

[FIGURE class="center" src=image/blogguppgift-bilder/moped.JPG?width=600&height=400&crop-to-fit&area=45,0,0,0&convolve=sharpen-alt caption="Alla tillbehör som ingick."]
<p class='bloggP'>Här kommer en bild på bara tillbehören. Den har en storlek på 600*400px och är beskärd med: 'crop-to-fit&area=45,0,0,0'. Den här bilden har även ett filter som heter: 'convolve=sharpen-alt'. Jag har filtret för att den skall sticka ut lite, eftersom att den är så lite beskärd utifrån första bilden. Jag använder klassen 'center' för att få den hålla bilden i mitten av 'article'.</p>
<br>

[FIGURE class="center" src=image/blogguppgift-bilder/moped.JPG?width=600&height=400&crop-to-fit&area=5,0,50,0&f=negate caption="En bild på bara mopeden. Använder mig av 'negate'-filter."]
<p class='bloggP'>Jag avslutar med en bild på bara mopeden, bilden har ett starkt filter som heter: 'f=negate'. Bildens storlek är 600*400px och den har 'crop-to-fit&area=5,0,50,0' som beskärningsinställningar. Den har också klassen 'center' för att få den hålla bilden i mitten av 'article'.</p>
<br>

<p class='bloggP'>Jag använde mig utav Iphone 6s ‘Front camera’ Information om den är: (5 MP, burst mode, f/2.2 aperture, exposure control, face detection, auto-HDR, 1080p HD video recording, Retina flash). Omständigheterna för att ta denna bilden att ställa upp den mot väggen och se till se att ljuset var bra, så man ser allt utmärkt. motiveringen till att ta bilden var för att mopeden skulle upp på Blocket.se för försäljning och jag behövde en bild som visade vad jag skulle sälja.</p>
<br>





<p class='centerFootBlogg'>Copyright (c) 2018 Gustav Sjöberg, gustavsjoberg1999@gmail.com</p>
