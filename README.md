# Lab crud standard
## Travail à faire
- Améliorez le projet de lab crud basic de Laravel en appliquant le design pattern Repository. Intégrez une fonction de recherche, implémentez la pagination et incluez la gestion de la table des projets.
## Critères de validation 
- compléter le travail de **lab crud basic**
- Opérations CRUd pour les taches
- Pagination
- Recherche avec AJAX
- Design Pattern Repositry
- Affichage des projets
- filtrer par projet
- données des exemple (jeux de test)
## Proccess d'instalation
1. cloner lab crud basic avec la commande
```bash
git clone https://github.com/Jalil-Betroji/lab-crud.git

```
2. créer le fichier .env avec la commande
```bash
cp .env.example .env

```
3. Ajouter le nom de la base de donnée sur le fichier .env

4. Migration de la base de donnée
```bash
php artisan migrate

```
5. Envoyer les donnée vers la base de donnée avec les seeders
```bash
php artisan db:seed

```
6. Executer le projet 
```bash
php artisan serve

```
## Référence
- [lab-crud-standard](https://github.com/labs-web/lab-crud-laravel-standard)