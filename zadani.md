# Aplikace Cestovní příkaz


## Motivace

Každá firma, která vysílá zaměstnance na služební cesty, musí ze zákona evidovat cestovní příkazy. Ve většině firem (včetně Heureky) se to řeší vyplňováním Excelovských tabulek, což je činnost nadmíru otravná. Dále, vzhledem k fragmentaci koncových zařízení (Windows, OS X, Linux, iOS, Android) a používání různých kancelářských aplikací (Microsoft Office, Libre Office, Apple iWork, Google Docs), je prakticky nemožné vytvořit jednotný vzor, který bude fungovat všude a udržet výslednou podobu dokumentu stejnou.


## Cíl

Řešením je vytvořit webovou aplikaci Cestovní příkaz ("Cesťák"), která umožní vyplňovat tyto dokumenty pohodlně ve webovém prohlížeči. A to bude váš úkol. :)


### Minimální varianta

Webová aplikace zobrazující vyplněný dokument cesťáku ve formátu pro tisk na základě předem připravených dat ve formátu JSON.

**Tento bod je splněn pokud:**

- Dokument je kompletní = obsahuje všechny položky dle vzorové tabulky. Duplicitní položky však lze vypustit a uspořádání lze libovolně měnit dle vašeho uvážení.
- Všechna proměnná data (např.: jména, datumy, místa) jsou uložena v JSON souboru a webová aplikace si je načítá. JSON soubory jsou staticky připravené předem. Je jedno, jestli načítání bude fungovat přes backend nebo Javascript.
- Dokument lze vytisknout přímo z prohlížeče (na jednu A4 stránku).

**Kritéria hodnocení:**

- přehlednost výsledného dokumentu v tisku
- dobrá struktura JSON dat


### Formulář pro vyplňování dat

Doplňte možnost vyplňovat dokument pomocí webového rozhraní.

**Tento bod je splněn pokud:**

- Existuje rozhraní, které umožní vyplnit celý dokument a výsledek uloží do JSONu tak, aby se dal zobrazit pro tisk (pomocí předem vytvořeného kódu).
- Formulář pro vyplnění správně validuje data (nedovolí vepsat text na místo čísla apod.).

**Kritéria hodnocení:**

- přehlednost a uživatelská přívětivost formuláře, responzivita
- správné validace


### Výpočet vzorců

**Tento bod je splněn pokud:**

- Všechny hodnoty, které lze vypočítat (různé součty sloupců a řádků – viz vzorce ve vzorové tabulce), se budou vypočítávat automaticky a uživatel je nemusí vyplňovat. Je jedno, jestli budete hodnoty dopočítávat přes Javascript nebo backend.


### Předvyplňování hodnot

Přidejte funkci předvyplňování hodnot (např. jména zaměstnanců + SPZ) na základě předpřipravených datových sad.

**Tento bod je splněn pokud:**

- Do aplikace půjde vložit různé předvyplněné datové sady (viz listy "zamestnanci" + "moznosti" ve vzorové tabulce) v JSON formátu. Vkládání nemusí být řešeno přes uživatelské rozhraní – nepočítá se s tím, že by se tato data měnila příliš často.
- Formulář bude nabízet v příslušných polích výběr z více možností dle těchto datových sad. Zároveň musí zůstat zachována možnost vepsat vlastní hodnotu (= combo box).
- Pro výběr zaměstnance je pak nutno vyplnit více různých polí při zvolení jednoho zaměstnance (jméno, místo výkonu práce, SPZ, ...)

**Kritéria hodnocení:**

- uživatelská přívětivost použití
- dobrá struktura JSON dat


### Opakované cesty + další vylepšení formuláře

Zaměstnanci často cestují opakovaně mezi několika místy - mají třeba dvě "oblíbené" cesty a ty stále opakují. Zkuste jim co nejvíc zpříjemnit opakované vyplňování podobných formulářů.

**Nápady:**

- Některá pole (třeba jméno nebo bankovní účet) lze ukládat pro příště např. pomocí Javascriptu do Local storage.
- Vyplněné formuláře lze nabízet kromě tisku i ke stažení ve formátu JSON + následné obnovení formuláře z tohoto souboru (nebo opět Local storage).
- Tlačítko pro předvyplnění všech datumů na dnešek.
- Tlačítko pro vygenerování cesty "zpět" – duplikování již vyplněných položek cesty v opačném pořadí (vyplním cestu tam, kliknu na tlačítko a mám zrcadlově otočenou cestu zpět, kde akorát změním čas)


## Může se hodit

- Zkuste použít [Heureka UI](https://heureka.cz/ui), speciálně tím můžete zrychlit [stylování formulářů](https://heureka.cz/ui/#elements:input).
- Zvolíte-li dobrou datovou strukturu pro JSON soubory, lze k nim napsat [JSON Schema](https://www.zdrojak.cz/clanky/json-schema-praxi/). Podle něj lze pak za použití nějaké šikovné knihovny validovat vstupní data.
