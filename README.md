# Instalacción de LAMP Ubuntu

Los pasos a seguir para instalar LAMP en Ubuntu 18.04. 

## Antes de iniciar:
Vamos actualizar los paquetes del sistema con los siguientes comandos:

```
sudo apt update
```

Then execute: 

```
sudo apt upgrade
```

##

### Instalación LAMP

### Instalación de Apache:

 Instala el paquete apache2 usando el comando apt.


~~~~
sudo apt install apache2
~~~~


Una vez instalado lo podrá probar dirigiéndose a la siguiente ruta: `http://localhost`

##

### Instalando MySQL:

Para la instalación de mysql se ejecuta el comando:

```
sudo apt install mysql-server
```

y despues de instalar MySQL puede entrar a las consola con el siguiente comando:

```
mysql -uroot -p password
```

##

### Instalando PHP:

Instalamos PHP con el comando:

```
sudo apt-get install php -y
```
y listo quedaría LAMP instalado, reiniciamos los servicios de apache con el siguiente comando:
```
sudo service apache2 restart
```

##

## Verificación de Apache

Verificamos que apache este corriendo:
```
sudo service apache2 status
```
Debría mostrar los siguiente:

![Alt](https://i.imgur.com/FbGLpYV.png) 