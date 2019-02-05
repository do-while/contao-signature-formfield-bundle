# contao-signature-formfield-bundle
**Signature form field for Contao form generator**

## Installation
1. Ergänzen Sie als _letzten_ Eintrag im Bereich "require" diese Zeile
```
    "require": {
        "do-while/contao-signature-formfield-bundle": "dev-master"
    }
```
1. Dann rufen Sie den Composer mit `composer update` auf oder Sie rufen den **Contao Manager** auf.


## Formulargenerator
Nach der Installation steht Ihnen das neue Formularelement "Unterschrift" zur Verfügung. 
Das Element können Sie wie gewohnt im Formular einsetzen. Beim Absenden erhält die 
Formularvariable einen data-String mit den Bilddaten.

![Siganture parameters](https://github.com/do-while/contao-signature-formfield-bundle/raw/master/doc/signature-parameters.png)


**Verwendung im Notification-Center**

In dem HTML-Teil der Benachrichtigung kann die Unterschrift als Bild eingebaut werden. 
Dazu muss man allerdings den SimpleToken in der Quelltext-Ansicht in das HTML einsetzen.

![Unterschrift in der Mail ausgeben](https://github.com/do-while/contao-signature-formfield-bundle/raw/master/doc/html-mail.png)






## Version
* 0.1.0<br>Testversion: 2019-02-05<br>Version für Contao ab Version 4.4 LTS


**Problem melden | *Report Problem*:**<br>
https://github.com/do-while/contao-signature-formfield-bundle/issues

___
Softleister - 2019-02-05
