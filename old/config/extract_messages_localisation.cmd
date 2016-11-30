rem : pour extraire les messages dans le fichier de localisation yii.php 

cd ..
call yii message/extract @app/config/i18n.php

Rem : Recopier le fichier yii.php dans le répertoire

copy messages\fr\yii.php vendor\yiisoft\yii2\messages\fr\yii.php

del messages\fr\yii.php

pause