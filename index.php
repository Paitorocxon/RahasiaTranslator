<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta charset="utf-8">
		<link rel="stylesheet" href="translator.higgi.css">
	</HEAD>
	<BODY><div class="head">
	<h1>Deutsch - Etharisch, Etharisch - Deutsch!</h1><h4>Der Rahanslator</h4></div>
	<form method="POST">
		<TABLE>
		<tr>
			<TH>Original Text</TH>
			<TH>Übersetzung <select id="type" name="type"><option value="DeEt">Deutsch zu Etharisch</option><option value="EtDe">Etharisch zu Deutsch</option></select></TH>
		</tr>
		
		<tr>
			<td>
				<textarea id="original" name="o" placeholder="Translate..."><?php
				if (isset($_REQUEST['o'])) {
					echo htmlspecialchars($_REQUEST['o']);
				}
				?></textarea>
			</td>
			
			<td>
				<?php
				if (isset($_REQUEST['o'])) {
					$words = explode (' ', htmlspecialchars($_REQUEST['o']));
					if (!isset($_POST['type'])) {
						die('Fehler');
					}
					if ($_POST['type'] == 'DeEt'){
						foreach($words as $word) {
							//if (DeEt(htmlspecialchars($word.' ')) != ' ') {
								echo str_replace('  ','',DeEt(htmlspecialchars($word.' ')));
							//}
						}
					} else {
						foreach($words as $word) {
							//if (EtDe(htmlspecialchars($word.' ')) != ' ') {
								echo str_replace('  ','',EtDe(htmlspecialchars($word.' ')));
							//}
						}

					}
					
				}
				?>
			</td>
			
		</tr>		
		</TABLE>
		<center><input type="submit" value="Übersetzen"/></center>
		</form>
	</BODY>
	
	
	
	
	
<?php



	function DeEt($string) {
		$string = strtolower($string);
		$string = str_replace("ab ","kad ",$string);
		$string = str_replace("abend ","namar ",$string);
		$string = str_replace("aber ","ka ",$string);
		$string = str_replace("acht ","dailima ",$string);
		$string = str_replace("allein ","nah ",$string);
		$string = str_replace("als ","ai ",$string);
		$string = str_replace("also ","ai'je ",$string);
		$string = str_replace("alt ","frey ",$string);
		$string = str_replace("am ","la ",$string);
		$string = str_replace("an ","la ",$string);
		$string = str_replace("um ","la ",$string);
		$string = str_replace("aus ","la ",$string);
		$string = str_replace("andere ","adnan ",$string);
		$string = str_replace("anders ","adnan ",$string);
		$string = str_replace("anfang ","yewra ",$string);
		$string = str_replace("anfangen ","yewra ",$string);
		$string = str_replace("angst ","bah ",$string);
		$string = str_replace("antwort ","tul ",$string);
		$string = str_replace("arbeit ","ij ",$string);
		$string = str_replace("auch ","ta'am ",$string);
		$string = str_replace("auf ","kt'aye ",$string);
		$string = str_replace("bald ","ru'gh ",$string);
		$string = str_replace("bauen ","da'me ",$string);
		$string = str_replace("baum ","magne ",$string);
		$string = str_replace("bei ","at ",$string);
		$string = str_replace("beim ","at ",$string);
		$string = str_replace("bekommen ","wyr'a'e ",$string);
		$string = str_replace("berg ","bonoka'am ",$string);
		$string = str_replace("bild ","tag ",$string);
		$string = str_replace("bin ","at ",$string);
		$string = str_replace("bis ","at ",$string);
		$string = str_replace("böse ","da'e ",$string);
		$string = str_replace("brauchen ","wyr ",$string);
		$string = str_replace("bringen ","bra ",$string);
		$string = str_replace("da ","eh ",$string);
		$string = str_replace("daran ","eh'a ",$string);
		$string = str_replace("darauf ","eh'a ",$string);
		$string = str_replace("darin ","eh'a ",$string);
		$string = str_replace("davon ","eh'a ",$string);
		$string = str_replace("dabei ","eh'a ",$string);
		$string = str_replace("damit ","eh'a ",$string);
		$string = str_replace("dunkel ","fiw'ry ",$string);
		$string = str_replace("ein ","we'w ",$string);
		$string = str_replace("eine ","we'w ",$string);
		$string = str_replace("einer ","we'w ",$string);
		$string = str_replace("einfach ","mewre ",$string);
		$string = str_replace("ende ","and ",$string);
		$string = str_replace("erde ","dad'a'ney ",$string);
		$string = str_replace("familie ","wy'ru'ru'ne ",$string);
		$string = str_replace("fehlen ","ne'ne ",$string);
		$string = str_replace("fliegen ","ru'ne'ne ",$string);
		$string = str_replace("frau ","da'am'ke ",$string);
		$string = str_replace("frei ","i'ne'ru ",$string);
		$string = str_replace("fragen ","da'wy'ne ",$string);
		$string = str_replace("fressen ","ne'da'ne ",$string);
		$string = str_replace("freund ","na'ni ",$string);
		$string = str_replace("ganz ","ha'wyr ",$string);
		$string = str_replace("geben ","de'de ",$string);
		$string = str_replace("gefahr ","ahhhh ",$string);
		$string = str_replace("gehen ","tu'uje ",$string);
		$string = str_replace("geschenk ","des'ru ",$string);
		$string = str_replace("geschichte ","le'da ",$string);
		$string = str_replace("gesicht ","wyr'wyr'ke ",$string);
		$string = str_replace("gesund ","nay'i ",$string);
		$string = str_replace("gewinnen ","da'da'eh ",$string);
		$string = str_replace("glück ","da'eh'ru ",$string);
		$string = str_replace("gott ","etharem ",$string);
		$string = str_replace("groß ","raha'ru'ru ",$string);
		$string = str_replace("gruß ","ha'ru ",$string);
		$string = str_replace("gut ","ta'ta'a ",$string);
		$string = str_replace("haben ","hat'ru ",$string);
		$string = str_replace("halten ","ke'ru'wyr ",$string);
		$string = str_replace("hat ","dov'a ",$string);
		$string = str_replace("haus ","kot ",$string);
		$string = str_replace("heiß ","ha'jie ",$string);
		$string = str_replace("helfen ","ver'ki'in ",$string);
		$string = str_replace("herz ","damdam ",$string);
		$string = str_replace("heute ","sh'e ",$string);
		$string = str_replace("himmel ","got'wyr ",$string);
		$string = str_replace("hunger ","ver'wyr ",$string);
		$string = str_replace("kalt ","ka'ka'dean'eh ",$string);
		$string = str_replace("kein ","an'ay'ru ",$string);
		$string = str_replace("klein ","smo'ol ",$string);
		$string = str_replace("kopf ","do'ke ",$string);
		$string = str_replace("krank","do'ma'ke ",$string);
		$string = str_replace("kaputt","do'ma'ke ",$string);
		$string = str_replace("land ","so'me ",$string);
		$string = str_replace("laufen ","da'dal ",$string);
		$string = str_replace("leben ","ru'wyr'ki'in ",$string);
		$string = str_replace("lehrer ","ne'ne'mah'ah ",$string);
		$string = str_replace("lernen ","geh'wyrt ",$string);
		$string = str_replace("licht ","na'ru'wyr ",$string);
		$string = str_replace("liebe ","ru'na'me ",$string);
		$string = str_replace("loch ","wu ",$string);
		$string = str_replace("luft ","de'ene'ene ",$string);
		$string = str_replace("mädchen ","kiki ",$string);
		$string = str_replace("mann ","da'am'ru ",$string);
		$string = str_replace("maus ","na'na'ki'in ",$string);
		$string = str_replace("meer ","ma'ru ",$string);
		$string = str_replace("mensch ","do'do'sa'ne ",$string);
		$string = str_replace("mutter ","ma'ma ",$string);
		$string = str_replace("nacht ","ku'da ",$string);
		$string = str_replace("name ","na'ru'me ",$string);
		$string = str_replace("natur ","tak'ru ",$string);
		$string = str_replace("nein ","ye'eh ",$string);
		$string = str_replace("nichts ","an'ye'ru ",$string);
		$string = str_replace("nur ","an ",$string);
		$string = str_replace("oben ","ki'ke'da ",$string);
		$string = str_replace("oder ","ke'ki'in ",$string);
		$string = str_replace("offen ","oh ",$string);
		$string = str_replace("reich ","ma'ru'ru'ma ",$string);
		$string = str_replace("ruhig ","an'an ",$string);
		$string = str_replace("sache ","eh'wyr ",$string);
		$string = str_replace("sagen ","oh'ru ",$string);
		$string = str_replace("schlecht ","ru'ki'ru'wyr'ru ",$string);
		$string = str_replace("schnee ","ah'ki'in ",$string);
		$string = str_replace("schreiben/schrift ","he'wyr'da'me ",$string);
		$string = str_replace("schlafen ","kad'kad ",$string);
		$string = str_replace("schler ","no'ob ",$string);
		$string = str_replace("schwester ","ney'ran ",$string);
		$string = str_replace("sehen ","ru'un ",$string);
		$string = str_replace("selbst ","tak ",$string);
		$string = str_replace("singen ","la'la ",$string);
		$string = str_replace("sohn ","ira ",$string);
		$string = str_replace("sonne ","sol ",$string);
		$string = str_replace("sprechen ","ver'ki'in ",$string);
		$string = str_replace("stark ","ah'ru'i'in ",$string);
		$string = str_replace("stein ","tur'uk ",$string);
		$string = str_replace("stelle ","a'man ",$string);
		$string = str_replace("suchen ","ru'k'tar ",$string);
		$string = str_replace("tag ","da'nery ",$string);
		$string = str_replace("tier ","unum ",$string);
		$string = str_replace("tot ","akta ",$string);
		$string = str_replace("über ","a'ye ",$string);
		$string = str_replace("überall ","a'ye'ney ",$string);
		$string = str_replace("und ","a ",$string);
		$string = str_replace("vater ","fa'wre ",$string);
		$string = str_replace("vergessen ","no'am'ru'ki'in ",$string);
		$string = str_replace("verstehen ","nay'u ",$string);
		$string = str_replace("viel ","atama ",$string);
		$string = str_replace("vielleicht ","ke'ru ",$string);
		$string = str_replace("vogel ","br'hru ",$string);
		$string = str_replace("wahr ","tor'im ",$string);
		$string = str_replace("wald ","etha'ru ",$string);
		$string = str_replace("warten ","ra'ye ",$string);
		$string = str_replace("wasser ","ether'ye ",$string);
		$string = str_replace("weg ","teye'wyr ",$string);
		$string = str_replace("weinen ","crei ",$string);
		$string = str_replace("weiter ","no'ki'in ",$string);
		$string = str_replace("welt ","ethar'wyr ",$string);
		$string = str_replace("wenn ","oruk ",$string);
		$string = str_replace("werden ","itam ",$string);
		$string = str_replace("wie ","ave ",$string);
		$string = str_replace("wiese ","gru ",$string);
		$string = str_replace("wenig ","zu'wyr ",$string);
		$string = str_replace("wissen ","ru'ke'etha ",$string);
		$string = str_replace("wirklich ","da'ki'in ",$string);
		$string = str_replace("zahl ","man ",$string);
		$string = str_replace("zeit ","taru'ki'in ",$string);
		$string = str_replace("zurück ","nayum ",$string);
		$string = str_replace("zusammen ","ura'ki'in ",$string);
		$string = str_replace("zwischen ","darudame ",$string);
		$string = str_replace("ich ","ye ",$string);
		$string = str_replace("du ","ye'ye ",$string);
		$string = str_replace("er ","ye'da ",$string);
		$string = str_replace("sie ","ye'ih ",$string);
		$string = str_replace("es ","ye'de ",$string);
		$string = str_replace("wir ","ye'yr ",$string);
		$string = str_replace("ihr ","ye'ye ",$string);
		$string = str_replace("sie ","ye'im ",$string);
		$string = str_replace("vergangenheit ","tem'ki ",$string);
		$string = str_replace("zukunft ","tem'ru ",$string);		
		return $string;
	}
	
	function EtDe($string) {
		$string = strtolower($string);
		$string = str_replace("Kad ","Ab ",$string);
		$string = str_replace("Namar ","Abend ",$string);
		$string = str_replace("ka ","aber ",$string);
		$string = str_replace("dailima ","acht ",$string);
		$string = str_replace("nah ","allein ",$string);
		$string = str_replace("ai ","als ",$string);
		$string = str_replace("ai'je ","also ",$string);
		$string = str_replace("frey ","alt ",$string);
		$string = str_replace("la ","am ",$string);
		$string = str_replace("la ","an ",$string);
		$string = str_replace("la ","um ",$string);
		$string = str_replace("la ","aus ",$string);
		$string = str_replace("adnan ","andere ",$string);
		$string = str_replace("adnan ","anders ",$string);
		$string = str_replace("yewra ","anfang ",$string);
		$string = str_replace("yewra ","anfangen ",$string);
		$string = str_replace("bah ","Angst ",$string);
		$string = str_replace("tul ","antwort ",$string);
		$string = str_replace("ij ","arbeit ",$string);
		$string = str_replace("ta'am ","auch ",$string);
		$string = str_replace("kt'aye ","auf ",$string);
		$string = str_replace("ru'gh ","bald ",$string);
		$string = str_replace("da'me ","bauen ",$string);
		$string = str_replace("magne ","baum ",$string);
		$string = str_replace("at ","bei ",$string);
		$string = str_replace("at ","beim ",$string);
		$string = str_replace("wyr'a'e ","bekommen ",$string);
		$string = str_replace("bonoka'am ","berg ",$string);
		$string = str_replace("tag ","bild ",$string);
		$string = str_replace("at ","bin ",$string);
		$string = str_replace("at ","bis ",$string);
		$string = str_replace("da'e ","Böse ",$string);
		$string = str_replace("wyr ","brauchen ",$string);
		$string = str_replace("bra ","bringen ",$string);
		$string = str_replace("eh ","da ",$string);
		$string = str_replace("eh'a ","daran ",$string);
		$string = str_replace("eh'a ","darauf ",$string);
		$string = str_replace("eh'a ","darin ",$string);
		$string = str_replace("eh'a ","davon ",$string);
		$string = str_replace("eh'a ","dabei ",$string);
		$string = str_replace("eh'a ","damit ",$string);
		$string = str_replace("Fiw'ry ","dunkel ",$string);
		$string = str_replace("we'w ","ein ",$string);
		$string = str_replace("we'w ","eine ",$string);
		$string = str_replace("we'w ","einer ",$string);
		$string = str_replace("mewre ","einfach ",$string);
		$string = str_replace("and ","ende ",$string);
		$string = str_replace("dad'a'ney ","erde ",$string);
		$string = str_replace("wy'ru'ru'ne ","Familie ",$string);
		$string = str_replace("ne'ne ","fehlen ",$string);
		$string = str_replace("ru'ne'ne ","fliegen ",$string);
		$string = str_replace("da'am'ke ","Frau ",$string);
		$string = str_replace("i'ne'ru ","Frei ",$string);
		$string = str_replace("da'wy'ne ","fragen ",$string);
		$string = str_replace("ne'da'ne ","fressen ",$string);
		$string = str_replace("na'ni ","Freund ",$string);
		$string = str_replace("ha'wyr ","ganz ",$string);
		$string = str_replace("de'de ","geben ",$string);
		$string = str_replace("ahhhh ","gefahr ",$string);
		$string = str_replace("tu'uje ","gehen ",$string);
		$string = str_replace("des'ru ","geschenk ",$string);
		$string = str_replace("le'da ","geschichte ",$string);
		$string = str_replace("wyr'wyr'ke ","gesicht ",$string);
		$string = str_replace("nay'i ","gesund ",$string);
		$string = str_replace("da'da'eh ","gewinnen ",$string);
		$string = str_replace("da'eh'ru ","glück ",$string);
		$string = str_replace("etharem ","gott ",$string);
		$string = str_replace("raha'ru'ru ","groß ",$string);
		$string = str_replace("ha'ru ","gruß ",$string);
		$string = str_replace("ta'ta'a ","gut ",$string);
		$string = str_replace("hat'ru ","haben ",$string);
		$string = str_replace("ke'ru'wyr ","halten ",$string);
		$string = str_replace("Dov'a ","hat ",$string);
		$string = str_replace("kot ","Haus ",$string);
		$string = str_replace("ha'jie ","heiß ",$string);
		$string = str_replace("ver'ki'in ","helfen ",$string);
		$string = str_replace("damdam ","Herz ",$string);
		$string = str_replace("sh'e ","heute ",$string);
		$string = str_replace("got'wyr ","himmel ",$string);
		$string = str_replace("ver'wyr ","hunger ",$string);
		$string = str_replace("ka'ka'dean'eh ","kalt ",$string);
		$string = str_replace("an'ay'ru ","kein ",$string);
		$string = str_replace("smo'ol ","klein ",$string);
		$string = str_replace("do'ke ","kopf ",$string);
		$string = str_replace("do'ma'ke ","krank/kaputt ",$string);
		$string = str_replace("so'me ","Land ",$string);
		$string = str_replace("da'dal ","laufen ",$string);
		$string = str_replace("ru'wyr'ki'in ","leben ",$string);
		$string = str_replace("ne'ne'mah'ah ","lehrer ",$string);
		$string = str_replace("geh'wyrt ","lernen ",$string);
		$string = str_replace("na'ru'wyr ","licht ",$string);
		$string = str_replace("ru'na'me ","liebe ",$string);
		$string = str_replace("wu ","loch ",$string);
		$string = str_replace("de'ene'ene ","luft ",$string);
		$string = str_replace("kiki ","mädchen ",$string);
		$string = str_replace("da'am'ru ","Mann ",$string);
		$string = str_replace("na'na'ki'in ","Maus ",$string);
		$string = str_replace("ma'ru ","Meer ",$string);
		$string = str_replace("do'do'sa'ne ","Mensch ",$string);
		$string = str_replace("ma'ma ","mutter ",$string);
		$string = str_replace("ku'da ","Nacht ",$string);
		$string = str_replace("na'ru'me ","Name ",$string);
		$string = str_replace("tak'ru ","natur ",$string);
		$string = str_replace("ye'eh ","nein ",$string);
		$string = str_replace("an'ye'ru ","nichts ",$string);
		$string = str_replace("an ","nur ",$string);
		$string = str_replace("ki'ke'da ","oben ",$string);
		$string = str_replace("ke'ki'in ","oder ",$string);
		$string = str_replace("oh ","offen ",$string);
		$string = str_replace("ma'ru'ru'ma ","reich ",$string);
		$string = str_replace("an'an ","ruhig ",$string);
		$string = str_replace("eh'wyr ","Sache ",$string);
		$string = str_replace("oh'ru ","sagen ",$string);
		$string = str_replace("ru'ki'ru'wyr'ru ","schlecht ",$string);
		$string = str_replace("ah'ki'in ","schnee ",$string);
		$string = str_replace("he'wyr'da'me ","schreiben/Schrift ",$string);
		$string = str_replace("kad'kad ","schlafen ",$string);
		$string = str_replace("no'ob ","Schüler ",$string);
		$string = str_replace("ney'ran ","schwester ",$string);
		$string = str_replace("ru'un ","sehen ",$string);
		$string = str_replace("tak ","selbst ",$string);
		$string = str_replace("la'la ","singen ",$string);
		$string = str_replace("ira ","sohn ",$string);
		$string = str_replace("sol ","sonne ",$string);
		$string = str_replace("ver'ki'in ","sprechen ",$string);
		$string = str_replace("ah'ru'i'in ","stark ",$string);
		$string = str_replace("tur'uk ","stein ",$string);
		$string = str_replace("a'man ","stelle ",$string);
		$string = str_replace("ru'k'tar ","suchen ",$string);
		$string = str_replace("da'nery ","Tag ",$string);
		$string = str_replace("unum ","tier ",$string);
		$string = str_replace("akta ","tot ",$string);
		$string = str_replace("a'ye ","ber ",$string);
		$string = str_replace("a'ye'ney ","überall ",$string);
		$string = str_replace("a ","und ",$string);
		$string = str_replace("fa'wre ","Vater ",$string);
		$string = str_replace("no'am'ru'ki'in ","vergessen ",$string);
		$string = str_replace("nay'u ","verstehen ",$string);
		$string = str_replace("atama ","viel ",$string);
		$string = str_replace("ke'ru ","vielleicht ",$string);
		$string = str_replace("br'hru ","vogel ",$string);
		$string = str_replace("tor'im ","Wahr ",$string);
		$string = str_replace("etha'ru ","wald ",$string);
		$string = str_replace("ra'ye ","warten ",$string);
		$string = str_replace("ether'ye ","wasser ",$string);
		$string = str_replace("teye'wyr ","weg ",$string);
		$string = str_replace("crei ","weinen ",$string);
		$string = str_replace("no'ki'in ","weiter ",$string);
		$string = str_replace("ethar'wyr ","welt ",$string);
		$string = str_replace("oruk ","wenn ",$string);
		$string = str_replace("itam ","werden ",$string);
		$string = str_replace("ave ","wie ",$string);
		$string = str_replace("gru ","wiese ",$string);
		$string = str_replace("zu'wyr ","wenig ",$string);
		$string = str_replace("ru'ke'etha ","wissen ",$string);
		$string = str_replace("da'ki'in ","wirklich ",$string);
		$string = str_replace("man ","Zahl ",$string);
		$string = str_replace("taru'ki'in ","zeit ",$string);
		$string = str_replace("nayum ","zurück ",$string);
		$string = str_replace("ura'ki'in ","zusammen ",$string);
		$string = str_replace("darudame ","zwischen ",$string);
		$string = str_replace("ye ","ich ",$string);
		$string = str_replace("ye'ye ","du ",$string);
		$string = str_replace("ye'da ","er ",$string);
		$string = str_replace("ye'ih ","sie ",$string);
		$string = str_replace("ye'de ","es ",$string);
		$string = str_replace("ye'yr ","wir ",$string);
		$string = str_replace("ye'ye ","ihr ",$string);
		$string = str_replace("ye'im ","sie ",$string);
		$string = str_replace("tem'ki ","vergangenheit ",$string);
		$string = str_replace("tem'ru ","zukunft ",$string);
		return $string;
	}