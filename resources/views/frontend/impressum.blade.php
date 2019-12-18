@extends('layouts.app')

@section('style')
    <style>
        body {
            height: 100vh;
            width: 100%;
        }
        main.py-4 {
            background-size: cover;
            background: url("{{ asset('/images/icra.jpg') }}") no-repeat fixed 40% 62%;
            padding-top: 0!important;
            padding-bottom: 0!important;
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection
@section('content')
    <div class="container" id="impressum-page">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="impressum-card">
                    <h1>Impressum</h1>
                    <div>
                        <ul>
                            <li>Dr. Antonia Berger</li>
                            <li>Beispielstrasse 22/2</li>
                            <li>A-1010 Wien</li>
                            <li>Telefon: <a href="tel:+43-1-1456582">+43-1-1456582</a></li>
                            <li>Fax: +43-1-145658289</li>
                            <li>E-Mail: <a href="mailto:office@berger-anwalt.com">office@berger-anwalt.com</a></li>
                            <li>RA-Code: R-123456</li>
                            <li>UID: ATU89986556</li>
                        </ul>
                        <p>
                            Dr. Antonia Berger ist in Österreich zugelassene Rechtsanwältin und
                            in die Liste der Rechtsanwälte der Rechtsanwaltskammer Wien eingetragen.
                            Die Berufsausübung unterliegt der Rechtsanwaltsordnung,
                            dem Standesrecht der österreichischen Rechtsanwälte (RAO, RL-BA, DSt;
                            abrufbar unter www.oerak.at) und der Aufsicht der Rechtsanwaltskammer Wien.
                        </p>
                        <p>
                            Information zu „Cookies“
                            Diese Websites verwendet „Cookies“. „Cookies“ sind kleine Textdateien,
                            die vom Webbrowser auf der Festplatte des Computers gespeichert werden.
                            Wenn Sie diese Website ohne Cookies betrachten möchten,
                            wählen Sie bitte in den Einstellungen Ihres Browsers die Funktion „Keine Cookies
                            akzeptieren“
                            o.ä. aus. Es besteht dort auch die Möglichkeit, bereits gesetzte Cookies wieder zu löschen.
                            Wie das funktioniert, entnehmen Sie bitte der Beschreibung bzw.
                            via Hilfe-Funktion Ihres Browser-Anbieters.
                            Diese Website benutzt konkret den Webanalysedienst Google Analytics der Google Inc.
                            („Google“). Google Analytics verwendet „Cookies“ um eine Analyse der Benutzung
                            der Website durch Sie zu ermöglichen. Die durch das Cookie erzeugten Informationen
                            über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google
                            in den USA übertragen und dort gespeichert. Im Falle der Aktivierung der IP-Anonymisierung
                            auf dieser Website, wird Ihre IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten
                            der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen
                            Wirtschaftsraum zuvor gekürzt. Nur in Ausnahmefällen wird die volle IP-Adresse an einen
                            Server von Google in den USA übertragen und dort gekürzt. Im Auftrag des Betreibers dieser
                            Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten,
                            um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der
                            Websitenutzung
                            und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu
                            erbringen.
                            Die im Rahmen von Google Analytics von Ihrem Browser übermittelte IP-Adresse wird nicht mit
                            anderen Daten von Google zusammengeführt. Sie können die Speicherung der Cookies durch eine
                            entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf
                            hin,
                            dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website
                            vollumfänglich
                            werden nutzen können. Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten
                            und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google
                            sowie die Verarbeitung dieser Daten durch Google verhindern, indem Sie das unter
                            dem folgenden Link (http://tools.google.com/dlpage/gaoptout?hl=de) verfügbare Browser-Plugin
                            herunterladen und installieren.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


