# Inicio de sesión con Twitter en una aplicación PHP
Simple ejemplo de como trabajar con el API de Twitter en una aplicación PHP para iniciar sesión con una cuenta de Twitter.

Este código es resultado del video-tutorial en Youtube:
https://youtu.be/AXpaUm_-dFQ


Si quieres probar el código en tu servidor estos son los cambios que necesitas hacer:

1. Crea una App en https://apps.twitter.com/app/new y registra tu app.
2. En el archivo "TwitterOAuthHelper.php", Cambia el "CONSUMER_KEY", "CONSUMER_SECRET" y "OAUTH_CALLBACK" por los que se generaron en la aplicación que registraste en la página de developers de twitter:
https://apps.twitter.com/app 

Nota: En la información de tu App de twitter, el tab "Details" encuentras la URL del callback que pusiste al crear la aplicación, y en el tab "Keys and Access Tokens" encuentras el Consumer Key y Consumer Secret.

La libreria "TwitterOAuth":
https://github.com/abraham/twitteroauth
