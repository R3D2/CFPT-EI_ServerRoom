#!/bin/bash

#
# KEVIN AMADO
# Script créant un fichier avec les données
# de température de la sonde
#
# SAMUEL CARDOSO
# Optimisation du script
# Ajout de l'envoi du fichier vers un FTP
#
# CFPT-EI - 2016
#

#/SC/ Initialisation
HOST="10.134.96.205" 	# FTP HOST
USER="camera"			# FTP USERNAME
PASSWD="camera"			# FTP PASSWORD
FILE="temperature.txt"  # FILE TO CREATE AND SEND
PATH="/tmp/"			# FTP PATH

#/KA/ Suppresion du fichier
#/SC/ Suppression du fichier si celui-ci existe
if [ -e $FILE ]
then
	rm $FILE
fi

#/KA/ Récupération des données de température de la sonde
# et création d'un fichier contenant celle-ci
sudo ./AdafruitDHT.py 22 22 > $FILE

#/SC/ Envoie le fichier définit dans la variable FILE, à l'hôte définit
# dans la variable HOST, dans le répertoire définit dans la variable PATH 
scp $FILE $USER@$HOST:$PATH

