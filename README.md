# Winnie's desk - E-boutique_symfony


## Brief

Vous devez gérer la commande en ligne sur un catalogue existant.
L'utilisateur final pourra naviguer entre différents catégories de produits et choisir un produit pour le mettre dans son panier.

Lors de la mise en panier du produit ou lors de la commande finale, il pourra ajuster le nombre d'exemplaires du(des) produit(s) choisi(s).

À la visualisation de la commande, le montant de chaque ligne sera affiché, ainsi que le montant total et le prix du transport.
Pour payer, l'acheteur devra se connecter, s'il se connecte pour la première fois, il devra s'enregistrer en fournissant son nom,  son e-mail un password et une adresse de livraison.
Le back-office de la boutique permettra de gérer le catalogue
De plus, l'utilisateur aura accès à son profil pour le mettre à jour.


## Liste des fonctionnalités développées
- Affichage des produits et des catégories 
- Affichage des produits par catégorie (cliquez sur le menu Catégorie et cliquez sur la catégorie qui vous intéresse, vous aurez les produits de cette catégorie)
- Page profil : Affichage des informations de l'utilisateur 
- Possibilité de mettre à jour son profil 
- Possibilité de supprimer un produit (avec l'image qui va avec), une catégorie 
- Possibilité d'ajouter un produit, un média ainsi qu'une catégorie 
- Possibilité d'éditer les informations d'un produit et d'une catégorie
- Mise en place de la session 
- Connexion à son compte et création d'un compte possible (avec mot de passe crypté)
- Panier : possibilité de mettre des produits dans son panier et de les retrouver
- Possibilité de définir les quantités des produits avant de passer la commande 
- Affichage d'un récapitulatif de la commande passée 
- Implémentation du fileUploader pour les images des produits 


## Demo

### Environnement

- PHP 7.2.5 ou supérieur 
- Composer (version 2.3.7)
- Symfony 5.4.6 (https://symfony.com/releases/5.0)
- Symfony CLI installé (v4.27.5)

### Lancer le projet 
#### Étape 1 : Mettre en place une base de donnée 
Après avoir créer votre base de données pour ce projet, veuillez modifier la ligne 27 du fichier .env afin de pouvoir lier le projet à cette base de données. 

#### Étape 2 : Faire tourner le serveur 
Afin de pouvoir visualiser le rendu du projet, vous devez lancer la commande suivante : 

```
symfony server:start
```

Assurez-vous de lancer cette commande depuis un terminal et en vous mettant le dossier du projet pour que cela marche. 
Puis consultez le lien proposé dans le terminal une fois que vous executez la commande (http://localhost:8001/ par défaut)



