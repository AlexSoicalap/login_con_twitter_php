# Inicio de sesión con Twitter en una aplicación PHP
Simple ejemplo de como trabajar con el API de Twitter en una aplicacion PHP para iniciar sesion con una cuenta de Twitter.

Este codigo es resultado del video-tutorial en Youtube:
https://youtu.be/m9SlwxlefvI


Si quieres probar el codigo en tu servidor estos son los cambios que necesitas hacer:

1. Crea una App en https://apps.twitter.com/app/new y registra tu app.
2. En el archivo "TwitterOAuthHelper.php", Cambia el "CONSUMER_KEY", "CONSUMER_SECRET" y "OAUTH_CALLBACK" por los que se generaron en la aplicacion que registraste en la pagina de developers de twitter:
https://apps.twitter.com/app 

Nota: En la informacion de tu App de twitter, el tab "Details" encuentras la URL del callback que pusiste al crear la aplicacion, y en el tab "Keys and Access Tokens" encuentras el Consumer Key y Consumer Secret.

La libreria que se esa usando es "TwitterOAuth" que puedes encontrar en este enlace:
https://github.com/abraham/twitteroauth
