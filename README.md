# Globale Einstellungen AddOn für REDAXO 5

Mit diesem Addon kann man globale MetaInfos setzen die für die gesamte Website gültig sind. Admins können Felder anlegen und bearbeiten, Nicht-Admins können nur bearbeiten

## Features

* MetaInfos für die gesamte Website
* API für den Zugriff auf die Felder
* Nicht-Admins dürfen Felder nur bearbeiten
* Mehrsprachigkeit
* Neue Feldertypen: Tab, Colorpicker

## Tabs

Das AddOn kann Felder in Tabs gruppieren. Hier ein Beispiel für die Gruppierung in 3 Tabs:

* Allgemein (mit allgemeinen Feldern)
* Tracking Code (Textarea mit class="codemirror", wenn installiert)
* Übersetzungen (mit Text-Felder wie bei Sprog oder beim String Table Addon für R4).

## Colorpicker

* Der eingsetzte Colorpicker ist dieser hier: https://bgrins.github.io/spectrum/ 
* Alle Optionen lassen sich auch per data-Attribut festlegen (einzugeben in Globale Einstellungen > Felder > Feldattribute), siehe den Tip hier https://bgrins.github.io/spectrum/#options
* Beispiel: `data-preferred-format="rgb" data-show-alpha="true"` zeigt rgba Werte an inkl. Alpha-Transparenzen.

## API

```php
// ausgabe eines Feldes der aktuellen Sprache
echo rex_global_settings::getValue('my_field');

// ausgabe eines Feldes der Sprache mit der ID = 2
echo rex_global_settings::getValue('my_field', 2);

// ausgabe eines Feldes der Haupt-Sprache
echo rex_global_settings::getDefaultValue('my_field');

// ausgabe eines Feldes der aktuellen Sprache, wenn leer kommt Ausgabe {{ my_field }}
echo rex_global_settings::getString('my_field');

// ausgabe eines Feldes der Sprache mit der ID = 2, wenn leer kommt Ausgabe {{ my_field }}
echo rex_global_settings::getString('my_field', 2);

// ausgabe eines Feldes der Haupt-Sprache, wenn leer kommt Ausgabe {{ my_field }}
echo rex_global_settings::getDefaultString('my_field');
```

## REDAXO-Variable

Die REDAXO-Variable `REX_GLOBAL_VAR` kann in Modulen und Templates verwendet werden um Werte auszulesen. 
Sie entspricht der Ausgabe von: rex_global_settings::getValue('my_field'). 

Verwendung: 

```
REX_GLOBAL_VAR[var=my_field]
```

## Hinweise

* Getestet mit REDAXO 5.2, 5.3
* AddOn-Ordner lautet: `global_settings`
* Addon kann als String Table / Sprog Ersatz genutzt werden durch Einsatz der Tabs. Die Feldbezeichnung können auch leer gelassen werden, dann wird direkt der Feldname (Spaltenname) dem Enduser angezeigt.

## Changelog

siehe `CHANGELOG.md` des AddOns

## Lizenz

MIT-Lizenz, siehe `LICENSE.md` des AddOns

## Credits

* REXDude
* Spectrum Color Picker
* Global Settings ist ein Fork des Meta Info Addons
* Sysix
* polarpixel

