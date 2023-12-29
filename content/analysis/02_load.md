---
Title: Analys av prestanda
Description: Detta är index-sidan
---

Prestanda analys
=======================

I följande rapport kommer jag analysera tre hemsidors prestanda i form av laddtider. 

Urval
-----------------------

Urvalet består av tre av sveriges största nyhetssidor: Aftonbladet.se, Expressen.se och DN.se. 

### Aftonbladet
![snapshot från aftonbladets hemsida](%base_url%/image/aftonbladet_se.png)
### Expressen
![snapshot från expressens hemsida](%base_url%/image/expressen_se.png)
### Dagens nyheter
![snapshot från dagens nyheters hemsida](%base_url%/image/dn_se.png)

Metod
-----------------------

För att mäta prestandan används verktyget [PageSpeed Insights](https://pagespeed.web.dev) och de mätpunkter som används är:

* Largest Contentful Paint (LCP)
* First Input Delay (FID)
* Cumulative Layout Shift (CLS) 
* First Contentful Paint (FCP)
* Interaction to Next Paint (INP)
* Time to First Byte (TTFB)
* Prestanda (index)
* Speed Index

Mätningarna görs för mobil (m) och för dator.

Resultat
-----------------------

Mätningen utfördes Fredagen den 29:e december 2023 kl 12:30

|           |LCP(m)|FID(m)|CLS(m)|FCP(m)|INP(m)|TTFB(m)|Prestanda(m)|Speed Index(m)|LCP |FID|CLS |FCP |INP  |TTFB|Prestanda|Speed Index|
|-----------|------|------|------|------|------|-------|------------|--------------|----|---|----|----|-----|----|---------|-----------|
|Aftonbladet|3,3s  |17ms  |0,28  |0,7s  |305ms |0,2s   |32          |10,1s         |2,3s|2ms|0,14|0,5s|155ms|0,2s|62       |2,8s       |
|Expressen  |1,8s  |19ms  |0,13  |0,7s  |108ms |0,2s   |51          |5,9s          |1,4s|4ms|0,09|0,6s|38ms |0,2s|74       |1,3s       |
|DN         |2s    |19ms  |0,08  |0,8s  |136ms |0,4s   |63          |2,8s          |1,7s|3ms|0,16|0,7s|41ms |0,4s|76       |2,1s       |
|           |      |      |      |      |      |       |            |              |    |   |    |    |     |    |         |           |

Tabellen är sorterad efter hemsidan som mättes först. För samtliga mått som mäter sekunder (s) och millisekunder (ms) är lägre resultat bättre. För måttet Prestanda är högre resultat bättre. Högsta möjliga 
prestanda resultat är 100. 

Av resultatet för PC framkommer det att Expressen är hemsidan som är snabbast och bär likvärdig prestanda (-2) jämfört med DN. Aftonbladet är noterbart sämre i prestanda och hastighet med en prestanda skillnad på 12 enheter jämfört med nästbäst presterande och ett hastighetsindex som är 0,7s sämre än den nästbäst presterande. Resultatet för mobila enheter är däremot drastiskt annorlunda där Aftonbladet är 71% sämre i hastighets jämförelsen med Expressen som i sin tur är 110% sämre än Dagens Nyheter. Även i den övergripande prestanda analysen är resultaten drastiskt annorlunda där DN når högst resultat och Aftonbladets resultat är nästan hälften så bra som DN:s.

|           |Prestanda(m)|
|-----------|------------|
|DN         |63          |
|Expressen  |51          |
|Aftonbladet|32          |
|           |            |
*Resultat för prestanda för mobila enheter rangordnat från bäst till sämst*


Analys
-----------------------
Om man kollar på hemsidorna kan man se en tydlig anledning till varför aftonbladets resultat sticker ut. Aftonbladet tillskillnad från Expressen och Dagens Nyheter körde under mättillfället en större annons i bakgrunden. Både Dagens Nyheter och Expressen föredrar istället mindre intrusiva annonser. Detta stämmer även för mobila enheter där den första annonsen som dyker upp för Aftonbladet innehar animationer och täcker hela skärmen, detta är jämfört med Dagens Nyheter väldigt avancerad. Dagens Nyheters förstasidesannons är liten och bör inte vara mer intrusiv än en enkel bild. Expressen har denna dag inte ens någon förstasides annons.

Eftersom att nyhetssidor egentligen är relativt enkla hemsidor med enbart bilder och text och den stora intäktskällan för hemsidor är annonsering och/eller prenumeration är det kanske inte förvånande att annonserna skulle vara det som påverkar sidorna mest, men det bör tas i åtanke att denna analys inte granskat bildernas upplösning, eller källkodens brister. PageSpeed Insights kan ge några insikter i den javascript, css och HTML som skickas till användaren och en närmare granskning där rekommenderas innan några definitiva slutsatser dras. 

En annan sak att bejaka är att Expressen och DN båda ägs av bonniergruppen och erbjuder prenumerationstjänster som ger tillgång till båda nyhetssidorna (och fler). Denna packetering kan visa på ett potentiellt tydligare abboneringsfokus jämfört med Aftonbladet som enbart har sin plustjänst. Detta skulle ge finansiella incitament till att ha mindre intrusiva annonser medan Aftonbladet tvärtom har incitament att ge dyrare, men mer intrusiva, annonser. 



Övrigt
-----------------------

Skriven av Sebastian Brodd