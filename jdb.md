# Journal de bord

## 02.12.2015

### Groupe
* Visite de la salle serveur et inventaire du matériel sur place
* Définition des contraintes et des besoins
* Attribution des tâches : c.f Github du projet

### DW/KA/LDB
* Etat des lieux de l'équipement de la salle serveur

### SC 
* Conception et Ajout de l'inventaire à liste des documents du projet par rapport à l'état des lieux fait par le reste de l'équipe.

## 09.12.2015

### Groupe
* Définition du travail à faire

### SC
* Archipel - HP Proliant 
	* Installation de Ubuntu 14.04 LTS
	* Disk 0/2 Defect => WIP

* KVM001 - DELL
	* Homogéinisation de la taille des disques dans la baie
	* Clear du RAID
	* Configuration et initialisation d'un RAID 5

### LDB
* Création d'un shéma pour l'architecture des racks et serveur

### KA
* Choix de la sonde de température sur distrelec
* Recherche des caractéristiques technique du Raspberry PI 2

### DW
* Test Webcam du prof(iZiggi HD).
* Recherche de caméra de Surveillance et création d'un document de comparaison.

## 16.12.2015

### Groupe
* Discussion autour de l'état du projet
* Clarification de chaque point et mises en commun du statut et des décisions prises dans chaque pôle
* Voir PV-161215.md pour détail

### SC
* Coach de l'installation de l'utilitaire Hewlett-Packard pour la gestion des baies du serveur
* Conception du procés-verbal de la réunion de ce matin
* Impossible de démarrer sur un USB sur les serveurs DELL 2850 => recherche de solution
* Refactorisation de la solution de virtualisation à oVirt plutôt que l'installation d'un élément supplémentaire tel que Archipel...

### LDB
* Installation de hp array utility
* Accès au serveur en ssh
* Conception d'un document d'adressage ip
* Recherche de solution pour réparé le raid 5
* Raid 5 quasiment réparé (ajout en spare => ctrl slot=0 array A add spares=allunassigned)

### KA
* Envoie du mail à M. Garchery pour commander la sonde de température

### DW
* Envoie du mail à Garchery pour commander la caméra

## 23.12.2015

### LDB
* Recherche de serveur de versioning disponible sous ubuntu
* Tutoriel d'installation de serveur de versioning :
  * git : https://www.linux.com/learn/tutorials/824358-how-to-run-your-own-git-server
  * svn : http://www.krizna.com/ubuntu/setup-svn-server-on-ubuntu-14-04/

### DW
* Recherche de comment configurer un serveur ubuntu: https://doc.ubuntu-fr.org/ubuntu_server
* Confirmation: La commande de la caméra a été faites, il ne reste plus qu'à l'attendre

## 13.01.2016

### SC
* Mises à jours des contraintes du projets et planification
* Refactorisation du projet par rapport au contrainte et au temps restant => Passage de la solution sous oVirt
* Prévoir l'installation des serveurs sous Fedora
* Rédaction de la checklist de l'installation des serveurs
* Mises à jours du README du projet