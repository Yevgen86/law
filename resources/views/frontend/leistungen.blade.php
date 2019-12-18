@extends('layouts.app')


@section('content')
    <div class="container" id="leistungen">
        <div class="row">
            <div class="col-12">
                <h1>Leistungen</h1>
                <section data-browse="datenschutz">
                    <h2>Datenschutz</h2>
                    <ul>
                        <li>
                            <a href="#gsgvo">EU-Datenschutz-Grundverordnung (DSGVO)</a>
                        </li>
                        <li>
                            <a href="#judikatur">Datenschutz - Zukunftsfragen und aktuelle Judikatur</a>
                        </li>
                        <li>
                            <a href="https://media.wko.at/epaper/Datenschutzgrundverordnung/Umsetzung/#0">Praxisleitfaden</a>
                        </li>
                    </ul>
                </section>

                <section>
                    <h2>Erbrecht</h2>
                    <ul>
                        <li>
                            <a href="#uebersicht">Übersicht</a>
                        </li>
                        <li>
                            <a href="#beratung">Beratung</a>
                        </li>
                    </ul>
                </section>
                <section>
                    <h2>Prozessvertretung</h2>
                    <ul>
                        <li><a href="#pvertretung">Vertretung</a></li>
                        <li><a href="#erbprozesse">Erbprozesse</a></li>
                        <li><a href="#pflichtteilsprozesse">Pflichtteilsprozesse</a></li>
                        <li><a href="#klagen">Klagen auf Erbauseinandersetzung</a></li>
                        <li><a href="#teilungsversteigerung">Teilungsversteigerung</a></li>
                    </ul>
                </section>
            </div>

            {{--     Datenschutz       --}}
            <section id="gsgvo" data-browse="datenschutz">
                <div>
                    <p>Am 4. Mai 2016 wurde die „Verordnung (EU) 2016/679 des Europäischen Parlaments und des Rates vom
                        27. April 2016 zum Schutz natürlicher Personen bei der Verarbeitung personenbezogener Daten, zum
                        freien Datenverkehr und zur Aufhebung der Richtlinie 95/46/EG (Datenschutz-Grundverordnung)“
                        kundgemacht.</p>

                    <p>Die <strong>Datenschutz-Grundverordnung ist am 25. Mai 2018 in Geltung getreten.</strong> Alle
                        Datenverarbeitungen
                        müssen dieser Rechtslage entsprechen.</p>

                    <p>Die Datenschutz-Grundverordnung ist zwar als EU-Verordnung in jedem EU-Mitgliedstaat unmittelbar
                        anwendbar, sie enthält jedoch zahlreiche Öffnungsklauseln und lässt dem nationalen Gesetzgeber
                        gewisse Spielräume. Zur Durchführung dieser Öffnungsklauseln und Spielräume wurden in Österreich
                        (neben Anpassungen in zahlreichen Materiengesetzen) zwei Novellen des Datenschutzgesetzes (das
                        „Datenschutz-Anpassungsgesetz 2018“ und das „Datenschutz-Deregulierungs-Gesetz 2018“)
                        beschlossen.[1]</p>

                    <h3>Welche wesentlichen Neuerungen für Unternehmen enthält die
                        Datenschutz-Grundverordnung(DSGVO)?</h3>

                    <ul>
                        <li>Es gibt keine Meldepflicht bei der Datenschutzbehörde (Datenverarbeitungsregister) mehr.
                        </li>
                        <li>Statt dessen stärkere Verantwortung für Verantwortliche (derzeit „Auftraggeber“) und
                            Auftragsverarbeiter (derzeit „Dienstleister“) und weitreichende Neuregelung der Pflichten
                            bei
                            der Datenverarbeitung:
                            <ul>
                                <li>Datenschutz durch Technikgestaltung und datenschutzfreundliche Voreinstellungen
                                    („privacy by
                                    design/privacy by default“): Es sind geeignete technische und organisatorische
                                    Maßnahmen und
                                    Verfahren (z.B. Pseudonymisierung) zu treffen, damit die Verarbeitung den
                                    Anforderungen der
                                    Verordnung genügt und die Rechte der betroffenen Personen geschützt werden.
                                    Datenschutzrechtliche Voreinstellungen sollen sicherstellen, dass grundsätzlich nur
                                    personenbezogene Daten, deren Verarbeitung für den jeweiligen bestimmten
                                    Verarbeitungszweck
                                    erforderlich ist, verarbeitet werden.
                                </li>
                                <li>Verantwortliche und Auftragsverarbeiter müssen ein „Verzeichnis von
                                    Verarbeitungstätigkeiten“
                                    führen: Der Inhalt ist ähnlich den früheren DVR-Meldungen und hat insbesondere die
                                    eigenen
                                    Kontaktdaten, die Zwecke der Verarbeitung, eine Beschreibung der Datenkategorien und
                                    der
                                    Kategorien von betroffenen Personen, die Empfängerkategorien, gegebenenfalls
                                    Übermittlungen
                                    von
                                    Daten in Drittländer, wenn möglich die vorgesehenen Löschungsfristen und eine
                                    allgemeine
                                    Beschreibung der technischen und organisatorischen Datensicherheits-maßnahmen zu
                                    enthalten.
                                    Die Pflicht zur Führung dieses Verzeichnisses gilt für Unternehmen mit weniger als
                                    250
                                    Mitarbeitern - nur - dann nicht, wenn die von ihnen vorgenommene Verarbeitung kein
                                    Risiko
                                    für
                                    die Rechte und Freiheiten der betroffenen Personen birgt, die Verarbeitung nur
                                    gelegentlich
                                    erfolgt und keine Verarbeitung besonderer Datenkategorien bzw keine Verarbeitung von
                                    Daten
                                    über
                                    strafrechtliche Verurteilungen und Straftaten umfasst.
                                </li>
                                <li>Verletzungen des Schutzes personenbezogener Daten sind sowohl den nationalen
                                    Aufsichtsbehörden
                                    (ohne unangemessene Verzögerung – möglichst binnen höchstens 72 Stunden nach dem
                                    Entdecken;
                                    außer die Verletzung führt voraussichtlich nicht zu einem Risiko für die
                                    persönlichen Rechte
                                    und
                                    Freiheiten) als auch der betroffenen Person (ohne unangemessene Verzögerung, wenn
                                    die
                                    Wahrscheinlichkeit besteht, dass die Verletzung des Schutzes personenbezogener Daten
                                    ein
                                    hohes
                                    Risiko für die persönlichen Rechte und Freiheiten bewirkt) zu melden.
                                </li>
                                <li>Pflicht zur Datenschutz-Folgenabschätzung bei Verarbeitungsvorgängen, die
                                    (insbesondere bei
                                    Verwendung neuer Technologien) aufgrund der Art, des Umfangs, der Umstände und der
                                    Zwecke
                                    voraussichtlich ein hohes Risiko für die Rechte und Freiheiten natürlicher Personen
                                    zur
                                    Folge
                                    haben.
                                </li>
                                <li>Vorherige Konsultation der Aufsichtsbehörde, wenn aus einer
                                    Datenschutz-Folgenabschätzung
                                    hervorgeht, dass die Verarbeitung ein hohes Risiko zur Folge hätte, sofern der für
                                    die
                                    Verarbeitung Verantwortliche keine Maßnahmen zur Eindämmung des Risikos trifft.
                                </li>

                                <li>(Verpflichtender) Datenschutzbeauftragter: Eine Verpflichtung zur Bestellung
                                    eines
                                    Datenschutzbeauftragten besteht für Unternehmen (Verantwortliche und
                                    Auftragsverarbeiter),
                                    wenn
                                    <ul>
                                        <li>die Kerntätigkeit in der Durchführung von Verarbeitungsvorgängen besteht,
                                            die aufgrund ihrer
                                            Art,
                                            ihres Umfanges und/oder ihrer Zwecke eine umfangreiche regelmäßige und
                                            systematische
                                            Beobachtung
                                            von betroffenen Personen erforderlich machen, oder
                                        </li>
                                        <li>die Kerntätigkeit in der umfangreichen Verarbeitung besonderer Kategorien
                                            von Daten oder von
                                            Daten über strafrechtliche Verurteilungen oder Straftaten besteht.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>(Neue) Informationspflichten und Betroffenenrechte
                            <ul>
                                <li>Informationen können in Kombination mit standardisierten Bildsymbolen bereitgestellt
                                    werden
                                </li>
                                <li>Informationen und Betroffenenrechte sind ohne unangemessene Verzögerung, spätestens
                                    aber
                                    innerhalb eines Monats zu erledigen (diese Frist kann um höchstens weitere 2 Monate
                                    verlängert
                                    werden)
                                </li>
                                <li>Auskunftsrecht (ua auch über geplante Speicherdauer)</li>
                                <li>Recht auf Berichtigung</li>
                                <li>Recht auf Löschung und auf „Vergessenwerden“</li>
                                <li>Recht auf Einschränkung der Verarbeitung</li>
                                <li>Mitteilungspflicht bei Berichtigung, Löschung oder Einschränkung an alle Empfänger
                                </li>
                                <li>Recht auf Datenübertragbarkeit</li>
                                <li>Widerspruchsrecht</li>
                                <li>Regelungen betreffend automatisierte Generierung von Einzelentscheidungen
                                    einschließlich
                                    profiling
                                </li>
                            </ul>
                        </li>
                        <li>Befugnisse und Aufgaben der Aufsichtsbehörden werden erweitert
                            <ul>
                                <li>Insbesondere auch Verhängung von „Geldbußen“</li>
                            </ul>
                        </li>
                        <li>Hohe Strafen
                            <ul>
                                <li>Geldbußen von bis zu 20 Mio Euro oder im Fall eines Unternehmens von bis zu 4 %
                                    seines
                                    weltweiten
                                    Jahresumsatzes des vorangegangenen Geschäftsjahres.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <hr>
                <aside>
                    [1] Der vierte Abschnitt des zweiten Hauptstücks (§§ 31-34) sowie das dritte Hauptstück (§§ 36-59)
                    des Datenschutzgesetzes dienen der Umsetzung der Richtlinie (EU) 2016/680 zum Schutz natürlicher
                    Personen bei der Verarbeitung personenbezogener Daten durch die zuständigen Behörden zum Zwecke der
                    Verhütung, Ermittlung, Aufdeckung oder Verfolgung von Straftaten oder der Strafvollstreckung sowie
                    zum freien Datenverkehr und zur Aufhebung des Rahmenbeschlusses 2008/977/JI des Rates, ABl. Nr.
                    L119 vom 4.5.2016 S. 89.

                </aside>
            </section>
            <section id="judikatur">
                <h3>Zukunftsfragen und aktuelle Judikatur</h3>
                <p>Der rasche technologische Fortschritt erleichtert in vielerlei Hinsicht das tägliche Ar­beiten.
                    Gleichzeitig stellen sich dabei rechtsdogmatische und rechtspolitische Fragen: Wo und wie können
                    neue technologische Entwicklungen sinnvoll und rechtskonform eingesetzt werden? Wie wirken sie sich
                    auf das Unternehmen, die Mitarbeiter und die Kunden aus? Welche neuen rechtlichen Herausforderungen
                    stellen sich, wie lassen sie sich lösen und was ist dabei zu beachten?

                <p> Das Thema Datenschutz nimmt dabei stets eine zentrale Rolle ein. Neben dem Schutz der Privatsphäre
                    stellen sich aber auch immer öfter eigentumsrechtliche Fragen, z.B. iZm Big Data und Machine
                    Learning. Wem „gehören“ die Informationen?
                </p>
                <p> Die Veranstaltung schafft einen Raum, sich über diese - schon sehr realen - „Zukunfts­fragen“ mit
                    speziellem Fokus auf das Datenschutzrecht zu informieren und mit inter­national anerkannten Experten
                    zu diskutieren.
                </p>
                <p> Zusätzlich werden Informationen und Tipps zur Erfüllung der datenschutzrechtlichen Betroffenenrechte
                    geboten und erhalten Sie einen fundierten Überblick über die ak­tuelle Judikatur der
                    Datenschutzbehörde und des Bundesverwaltungsgerichts sowie über wesentliche Entscheidungen anderer
                    Gerichte und Aufsichtsbehörden zu Daten­schutzfragen.
                </p>
            </section>
            {{--      Erbrecht      --}}
            <section>
                <h3>Erbrecht</h3>
                <article id="uebersicht">
                    <p>Übersicht</p>
                    <p>Rechtsanwalt Dr. Antonia Berger ist seit mehr als 10 Jahren in Wien als auf Erbrecht,
                        Pflichtteilsrecht und Immobilienrecht spezialisierter Anwalt tätig. Durch ihr Fachwissen,
                        ihr Netzwerk und die Unterstützung ihrer juristischen Mitarbeiter in der Fachkanzlei ist
                        die optimale Betreuung in komplexen Erbrechtsfällen gewährleistet.
                    </p>
                    <ul>
                        <li>
                            <a href="https://erbrechtsanwalt.at/images/broschueren/Alles-was_-Recht-ist.pdf">
                                Bundesministerium für Justiz, Broschüre: Alles was Recht ist</a>
                        </li>
                        <li>
                            <a href="https://erbrechtsanwalt.at/images/broschueren/Das_Verlassenschaftsverfahren.pdf">
                                Zeitschrift für Familien und Erbrecht</a>
                        </li>
                    </ul>
                </article>

                <article id="beratung">
                    <h3>Beratung</h3>
                    <div>
                        <p>Ich berate Sie gerne bei erbrechtlichen Fragestellungen, insbesondere zu folgenden
                            Themenbereichen:</p>
                        <ul>
                            <li>Abklärung erbrechtlicher Ansprüche aufgrund des Gesetzes oder letztwilliger
                                Verfügungen
                            </li>
                            <li> Durchsetzung von Pflichtteilsansprüchen</li>
                            <li>Vertretung im Verlassenschaftsverfahren</li>
                            <li>Gerichtliche Durchsetzung von erbrechtlichen Ansprüchen in Erbschaftsprozessen</li>
                            <li>Nachlass- und Vermögensübergabeplanung</li>
                            <li>Errichtung von Testamenten, Erbverträgen, Schenkungen auf den Todesfall und Legate</li>
                            <li>Verwahrung und Registrierung von Testamenten</li>
                            <li>Gutachterliche Stellungnahmen zum Themenbereich Erbrecht</li>
                            <li>Koordination und rechtliche Vertretung komplexer internationaler
                            <li>Verlassenschaftsverfahren</li>
                            <li>Koodinierung genealogischer Recherchen zur Feststellung erbrechtlicher Ansprüche</li>
                        </ul>
                    </div>
                    <p>Aufgrund meiner langjährigen Erfahrung im Bereich Erbrecht, meinen persönlichen Kontakten und
                        meinem Netzwerk biete ich Ihnen Unterstüzung auf höchstem Niveau.</p>
                </article>
            </section>

            <section id="pvertretung">
                <article>
                    <h3>Prozessvertretung</h3>
                    <ul>
                        <li id="erbprozesse">
                            <p><strong>Erbprozesse</strong></p>
                            <p>Unklare Testamente und Auslegungsschwierigkeiten führen dazu, dass die Frage, wer nach
                                dem Eintritt eines Erbfalls Erbe geworden ist, häufig Gegenstand von Erbprozessen ist.
                                Das Nachlassgericht ermittelt zwar im Erbscheinsverfahren den Erben und erteilt auch den
                                Erbschein. Dies bewirkt aber keine endgültige Feststellung des Erbrechts der im
                                Erbschein ausgewiesenen Personen. Bei Vorliegen einer ungewissen Rechtslage sollte daher
                                parallel zum Erbscheinsverfahren eine Feststellungsklage zur endgültigen Klärung der
                                Erbenstellung erhoben werden. Das rechtskräftige Feststellungsurteil ist auch für das
                                Nachlassgericht bindend. Ein abweichender Erbschein kann nicht mehr erteilt werden.</p>
                        </li>
                        <li id="pflichtteilsprozesse">
                            <p><strong>Pflichtteilsprozesse</strong></p>
                            <p>Die Abkömmlinge des Erblassers, sein Ehepartner oder Partner einer eingetragenen
                                Lebenspartnerschaft sind pflichtteilsberechtigt. Ihnen steht ein Pflichtteilsrecht zu,
                                wenn sie durch Testament oder Erbvertrag von der Erbfolge ausgeschlossen, sprich enterbt
                                wurden. Auch die Eltern des Erblassers sind pflichtteilsberechtigt. Sie können den
                                Pflichtteil geltend machen, wenn sie einerseits enterbt und andererseits zum Zeitpunkt
                                des Erbfalls keine Abkömmlinge vorhanden sind. Probleme bereitet im Rahmen von
                                Pflichtteilsstreitigkeiten insbesondestrong>re die kurze Verjährungsfrist von drei
                                Jahren sowie
                                die Tatsache, dass der Pflichtteilsberechtigte auf die Information durch den Erben
                                angewiesen ist.</p>
                        </li>
                        <li id="klagen">
                            <p><strong>Klagen auf Erbauseinandersetzung</strong></p>
                            <p>Können sich die Erben nicht einigen, wie der Nachlass unter ihnen zu teilen ist, muss die
                                Erbteilung streitig vollzogen werden. Hiefür kann einer der Erben gegen seine die mit
                                seinem Teilungsvorschlag nicht einverstandenen Erben Klage auf Zustimmung zu einem
                                bestimmten Teilungsplan erheben. Voraussetzung für eine solche Klage ist, dass bereits
                                im Vorfeld ein Teilungsplan erstellt wurde, dem die anderen Erben nicht zugestimmt
                                haben.</p>
                        </li>
                        <li id="teilungsversteigerung">
                            <p><strong>Teilungsversteigerung</strong></p>
                            <p>Voraussetzung für eine erfolgreiche Erbauseinandersetzungsklage ist, dass der Nachlass
                                teilungsreif ist. Teilungsreife liegt vor, wenn der Nachlass entsprechend der jeweiligen
                                Erbquoten der einzelnen Miterben in Natur teilbar ist. Zur Vorbereitung der Klage müssen
                                daher die Gegenstände, die nicht teilbar sind, versilbert werden, sofern sie nicht durch
                                Testament oder Erbvertrag bereits einem der Miterben zugeordnet wurden. </p>
                        </li>
                    </ul>
                </article>
            </section>
        </div>
    </div>
@endsection
