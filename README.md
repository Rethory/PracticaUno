# Despliegue de Aplicación Web con Ansible

Este playbook de Ansible automatiza el despliegue de una aplicación web en servidores remotos. Realiza las siguientes acciones en los hosts de Ansible:

## Funcionalidades

1. **Instalación de Paquetes Necesarios:**
   - Instala los paquetes necesarios para que su aplicación web funcione, incluyendo Apache2, MySQL y módulos PHP.

2. **Creación de Página Web Personal:**
   - Establece la página web desarrollada.
   - La página web se puede acceder a través de:
     - El dominio www.jnajera.com
     - El dominio app.jnajera.com
     - La dirección IP del servidor.

3. **Configuración del VirtualHost:**
   - Crea un nuevo VirtualHost dentro del servidor web con un root de documentos específico para la aplicación.
   - La aplicación web se despliega en el dominio app.jnajera.com.

4. **Habilitación del VirtualHost:**
   - Habilita el nuevo VirtualHost en el servidor web.

5. **Configuración de la Contraseña del Usuario Administrador de la Base de Datos:**
   - Establece la contraseña para el usuario administrador de la base de datos MySQL.

6. **Carga de Esquema de Bases de Datos:**
   - Carga su esquema de bases de datos en el servidor MySQL.

7. **Eliminación de Cuentas Anónimas y Base de Datos de Prueba:**
   - Elimina las cuentas anónimas y la base de datos de prueba en el servidor MySQL.

8. **Configuración del Firewall:**
   - Configura el firewall para permitir el tráfico HTTP en el puerto configurado (por defecto, el 80).

9. **Establecimiento de la Aplicación Web:**
   - Establece la aplicación web desarrollada.

## Uso

1. Configuro el inventario de hosts en `inventory.ini`.

2. Ejecuto el playbook de Ansible.
