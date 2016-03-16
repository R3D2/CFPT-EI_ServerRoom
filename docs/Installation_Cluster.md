Mise en place d'un cluster sur Proxmox
================================

###Liste des serveurs
Nom du serveur     | IP
------------------ | ----------------
PVE01              | 10.134.96.201
PVE02              | 10.134.96.202
OPF01              | 10.134.96.203

### Création du cluster
Pour commencer, connectez vous en ssh au proxmox sur lequel vous souhaitez créer le cluster (dans notre cas, PVE01). Vous pouvez également utiliser le pvecm (Proxmox Virtual Environment cluster manager) du proxmox en utilisant l'interface web. Il vous suffit maintenant simplement d'écrire **"pvecm create node-1"**.
Lorsque cela est finis, connectez vous en ssh sur un des serveurs que vous souhaitez rajouter au cluster et écrivez **"pvecm add IpDeLaPremièreMachine"** (Ex. : pvecm add 10.134.96.201), effectuer cela pour tout les serveurs que vous souhaitez rajouter.
Pour verifer que votre cluster ce soit bien créer, connectez vous en ssh sur votre premiere machine et écrivez **"pvecm nodes"**, cela vous affichera toute les machines qui sont dans votre cluster.
Si vous avez fait une erreur et que vous souhaitez effacer une machine du cluster connectez vous sur la machine sur laquel vous avez créer le cluster et écrivez **"pvecm delnode node-NumDuNode"** (Ex. : pvecm delnode node-2), vous trouverez le numéro du node en effectuer la commande **"pvecm nodes"**.

### Configuration de OpenFiler
Pour commencer, rendez vous sur la page web de votre OpenFiler en https (le port de connexion est : **446**). Lorsque vous êtes sur votre OpenFiler, la première chose a faire est d'activer les services que nous allons utiliser. Dans notre cas nous avons seulement utiliser 
**NFS**.

#### Activation des services
Rendez vous dans l'onglet "Services" et activé "NFS Server", s'il ne démarre pas faite le manuellement en cliquant sur le bouton de gauche.

#### Limiter l'accès à l'OpenFiler
Maintenant vous pouvez, si vous le souhaitez, limiter l'accès a votre OpenFiler. Pour cela, rendez-vous dans l'onglet "System" 