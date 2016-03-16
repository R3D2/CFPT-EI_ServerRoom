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
* Impression de la documentation de la solution

### KA
* Installation et branchement du rasbperry PI 2
* Recherche internet sur la conversion analogique à numérique

### DW
* Test d'une caméra IP preter par le prof en attendant la mienne
* Réussite de détection de mouvement

### LDB
* Installation d'Ubuntu sur tout les serveurs (CD intitulé 'Ubuntu' contiennent un soft pour tester la RAM)
* Déplacement des serveurs le temps de leur installation (Fedora)

## 20.01.2016

### Groupe
* Mise en commun
* Visite de Monsieur Maréchal

### SC
* Rédaction du PV de la réunion
* Entrevue avec le client
* Mises à jours de la date prévu de la pose du sol
* Mises à jours de la date prévu des fibres
* Démantelement du serveur HS, récupération du matériel
RAM, Carte SAS, Disque SCSI
* Supervision Installation des serveurs

### KA
* Programmation de la sonde de température (pas fini)
* Recherche sur comment programmer le raspberry PI

### DW
* Caméra reçu, découverte de la caméra
* Installation et compréhension de la configuration
* Problème de serveur smtp

### LDB
* Installation oVirt sur un serveur en raid 5 (Impossible - Fedora 23)
* Passage du serveur raid 5 en raid 1 (Prévu)
* Installation de oVirt node sur les hosts (Impossible tant que hyperviseur pas fait)

## 27.01.2016

### SC
* Supervision de la mise en place des RAID

### KA
* Absent

### DW
* Absent

### LDB
* création de raid 5 sur l'hyperviseur
* création de raid 0 sur tous les serveurs 2 baies
* installation de proxmox

## 03.02.2016

### SC
* Ré-installation de tous les serveurs en se basant sur le 
plan d'adressage IP.
* Création du cluster HPVIRT

### KA
* Documentation + planification page web

### DW
* Création de la documentation de la caméra
* Toujours le problème du smtp

### LDB
* Ré-installation de tous les serveurs en se basant sur le 
plan d'adressage IP.
* Recherche de cable pour le SAS : HP External SAS Cable - 2m 389668-B21 (image SAS_Cable.png présente sur github)

## 10.02.2016

### SC
* Supervision de la réinstallation des serveurs

### KA
* Installation de MYSQL et Apache
* Création de la base de donnée de température

### DW
* Recherche de solution pour faire de la detection de mouvement

### LDB
* Ré-installation de tous les serveurs car plan d'addressage était faux

## 17.02.2016

* Vacances

## 24.02.2016

### SC
* Déménagement des serveurs présent dans la salle de classe au sous-sol
* Installation des serveurs dans le rack
* Installation de l'onduleur
* Installation du switch
* Installation du SAS
* Cablâge des serveurs à l'alimentation
* Cablâge des serveurs au switch
* Cablâge du SAS au serveur
* Supervision et analyse du travail de dashboard de Monsieur Amacker
* Aide ajout du projet de Monsieur Amacker au github du projet principale
* Rédaction et envoi d'un Mail à Monsieur Marechal concernant la prise murale non alimentée dans la salle serveur
* Check et test du pourquoi la prise murale est down avec Monsieur Marechal
* Rédaction et envoi d'un Mail à Monsieur Marechal avec les références du switch et numéro de la prise posant problème
* Suite à d'autre test => Le switch cisco pose problème...
* Installation d'un switch gigabit 8port et branchement des serveurs dessus.

### LDB
* Déménagement des serveurs présent dans la salle de classe au sous-sol
* Installation des serveurs dans le rack
* Installation de l'onduleur
* Installation du switch
* Installation du SAS
* Cablâge des serveurs à l'alimentation
* Cablâge des serveurs au switch
* Rédaction de la documentation concernant l'équipement mis en place

### DW
* Solution pour detection de mouvement trouver. Faire un ftp, enregistrer les images de detection et video dessus.Vérifier les fichiers de celui ci en php et afficher la dernière detection

### KA
* Absent

## 09.03.2016

### SC
* Installation d'openfiler sur le serveur
* Ré-installation des deux proxmox
* Mises à jours de la documentation
* Supervision du travail restant
* DO IT : http://www.pihomeserver.fr/2013/10/29/raspberry-pi-home-server-utiliser-sonde-temperature-etanche-ds18b20/

### LDB
* [Temporaire]
* Création d'un cluster dans proxmox
* Création d'un node et ajout des serveur sur le même node
* Création d'un volume NFS sur openfiler
* Partage du volume avec les autres serveurs
* Mise en place des droits sur le volume
* Ajout du volume openfiler sur les proxmox
* (https://unixserveradmin.wordpress.com/2014/02/10/how-to-add-cluster-or-node-in-proxmox-ve/)
* (http://www.vmwarebits.com/content/install-and-configure-openfiler-esxi-shared-storage-nfs-and-iscsi)
* (https://pve.proxmox.com/wiki/Storage_Model)

### DW
* A remplir !

### KA
* Changement de sonde de température
* élaboration du schéma électronique
