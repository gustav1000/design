<!-- ---
views:
    redovisa:
        region: sidebar-right
        template: anax/v2/block/default
        data:
            meta:
                type: single
                route: block/test
--- -->


Rapport om laddningstider
=======================

Jag ska få fram tre olika hemsidors laddningstider, sedan skall jag analysera och jämföra resultatet.

Urval
-----------------------

Jag valde hemsidorna blocket.se, Tradera.se och Ebay.com. Jag valde dess tre eftersom de tillhör i samma kategori, nämligen försäljnings mellan privatpersoner. En till anledning är också att jag använde dessa hemsidor i min rapport i kursmoment04.

Metod
-----------------------

Berätta kort om din "metod", hur du gör för att utföra undersökningen. Berätta om du använder något speciellt verktyg.

För att sammanfatta och få ner alla resultat samlat använde jag mig av Google Kalkylark. för att se hemsidornas laddningstider i procent använde jag mig av PageSpeed Insights (https://developers.google.com/speed/pagespeed/insights/). Där kollade jag också efter hemsidornas förbättringspotential. jag använde också Google Devtools Network för att hitta information om sidans uppladdning. såsom antal resurser, totala datamängden och totala laddningstiden i sekunder.



Resultat
-----------------------

Dokumentera dina resultat från din studie. Berätta vad du kom fram till, vilka resultat du hittade och observerade.

[FIGURE class="blocket-bild" src="img/blocket-bild.PNG" alt="Blocket" width="600px" height="400px" caption="Blocket.se"]

[FIGURE class="tradera-bild" src="img/tradera-bild.PNG" alt="Tradera" width="600px" height="400px" caption="Tradera.se"]

[FIGURE class="ebay-bild" src="img/ebay-bild.PNG" alt="Ebay" width="600px" height="400px" caption="Ebay.com"]

[FIGURE class="tabell-bild" src="img/tabell.PNG" alt="tabell" width="600px" height="400px" caption="Uppladdningsresultat"]


Blockets förbättringspotential på mobil är bara att undvika upprepande omdirigeringar. Då sparar de 2,49s. Blocket på dator har väldigt många möjligheter att förbättras. De kan till exempel ta bort resurser som blockerar renderingen, då sparas 1,18s. De kan skicka bilder i modernare bildformat (sparar 0,64), eller så kan de använda bilder i rätt storlek och skjuta upp CSS som inte används.

Traderas förbättringsmöjligheter på mobil är att skjuta upp CSS som inte används (givit 0,64s förbättring), använda bilder med rätt storlek (givit 0,60s förbättring) och skjuta upp inläsningen av bilder som inte visas på skärmen (givit 0,15s förbättring). Det hade totalt givit en uppskattad tidsbesparing på 1,39s. På dator har tradera också några förbättringsmöjligheter. För att spara in 1,25s kan de läsa in viktiga resurser i förväg och för att spara in 0,14s kan de skicka bilder i modernare bildformat.

Ebay på mobil kan förbättra laddningstiden genom att ta bort resurser som blockerar renderingen (sparar 1,08s), skjuta upp inläsningen av bilder som inte visas på skärmen (sparar 1,05s). På dator kan de förbättra genom att använda bilder i rätt bildstorlek (sparar 1,2s). De kan också skicka bilderna i modernare format (sparar 0,6s), eller ta bort resurser som blockerar renderingen (0,31s).

Analys
-----------------------

Diskutera och analysera de resultaten du fann.

På mobil var dem vanligaste förbättringsmöjligheterna att skjuta upp inläsningen av bilder. Dock sparar man inte mest tid på detta för de. Skjuta upp inläsning av bilder rekommenderas bara för Tradera och Ebay och tillsammans sparar de endast 1,2s, vilket är mindre än hälften av tiden som Blocket sparar genom att undvika upprepande omdirigeringar. På dator är den vanligaste rekommendationen att använda sig av modernare bildformat. Alla tre hemsidor rekommenderas göra detta. Två av dessa tre hemsidor rekommenderas också använda sig utav rätt bildstorlekar för att spara in laddningstid.

Det man måste tänka på är att alla dessa hemsidor jag valt har applikationer till mobiler. Det betyder att ett längre resultat på mobiluppladdningshastighet inte behöver vara katastrofalt.

Det är väldigt jämnt mellan hemsidorna men om jag måste rangordna webbplatserna utifrån mina mätvärden skulle jag sätta Tradera som etta, eftersom de har överlägset minst förbättringspotential och det har även snabb inladdningstid på dator. Andra plats går till Ebay, med samma motivering som för Tradera och sista plats går till Blocket.

Personligen anser jag att alla webbplatserna håller måttet för hur snabb en hemsida skall vara. Jag skulle säga att det är mer upp till internethastigheten man har på sin enhet än hemsidans uppladdningshastighet. Därför anser jag att alla hemsidor håller måttet. Jag skulle säga att en bra hemsida skall hålla sig under 1 sekund i DOMContentLoaded.

Referenser
-----------------------

Ange de eventuella referenser du använder dig av, om några.

Övrigt
-----------------------

Gustav Sjöberg
