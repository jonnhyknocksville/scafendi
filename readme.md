#####
##### Pour se connecter au serveur ovh ssh
##### 

ssh wayskim@ssh.cluster027.hosting.ovh.net

#####
##### Pour envoyer le code sur le serveur
##### 

rsync -av ./ wayskim@ssh.cluster027.hosting.ovh.net:~/scafendi 
