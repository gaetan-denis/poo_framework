# Readme

## Guide d'installation

- Téléchargez le clone du projet en sélectionnant le CODE, puis en copiant le lien situé sous l'onglet HTTPS.


- Une fois dans le dossier racine de votre serveur local, sélectionnez l'emplacement de vos projets (par exemple, www pour Apache) et ouvrez votre invite de commande.


- Saisissez la commande git clone 'lien de votre dépôt' et validez.


- Rendez-vous ensuite dans le dossier "poo_framework" nouvellement créé en exécutant la commande cd poo_framework.


- Une fois dans le dossier du projet, exécutez la commande composer install. Une fois que la commande composer install est terminée, le répertoire vendor devrait être présent dans le répertoire de votre projet, et vous disposerez de toutes les dépendances nécessaires pour exécuter votre application Laravel localement.


- ouvrez le fichier env-example., renommez le en env. Et définissez les constantes de connexion.

- Exécutez ensuite la commande "php artisan key:generate". Cette commande génère une clé d'application utilisée pour sécuriser votre application.

.Excuter ensuite la commande "php artisan migrate"


