# API + Website 

![Root Server logo](../README.png)

For use with [Root Server](https://rootserver.kezzi.co/). Also compatible with any Linux VCS.

This Root Server dev template combines *HTML*, *Express*, *MySQL*, and *PHP*. It contains deployment scripts as well as visual studio build tasks.

This template is built to host both a content website and a backend API on the same domain. For rapid development, it includes a sign-up page and a boilerplate Express application.

## USAGE

Open the project file with Visual Studio Code to get started.

Publish dynamic web pages, build a deeply integrated backend, craft your database. Compatible with any Linux VCS.

The *Root Server Template* is designed to be a full-stack boilerplate for Web development, AI integrations, and Web APIs.

**Email**

To setup email functionality, install mailutils on your server. Do this by running the following command:

```bash
sudo apt-get install mailutils
```


Set the value of `NO_REPLY_EMAIL_ADDRESS` in prod.env and sandbox.env to match the domain name of your server.

*Optional* Add an spf record to the domain name pointing at the VPS's IP address.

**JWT**

JWT authentication is used by the API. To generate a JWT secret, run the following command:

```bash
openssl rand -base64 32
```

This will generate a random 32-byte secret that can be used by the application. Set the JWT_SECRET value in prod.env and sandbox.env for production and sandbox environments, respectively.

**MySQL**

To connect with MySQL console, set the value for HOST and KEYPATH in scripts.env. For security sake, the template assumes user connections to MySQL are made via SSH tunnel.

<!-- Check out the [Root Server Documentation](https://rootserver.kezzi.co/docs) for more information. -->

## BUILD TASKS

The following build tasks are available in Visual Studio Code:

- **deploy html+php to web server**  
  Deploys the HTML and PHP website files to the web server by running `./www/deploy-www.sh`.

- **deploy express application to production**  
  Deploys the Express backend application to the production environment using `./express/deploy-prod.sh`.

- **debug express application in sandbox**  
  Starts the Express application in sandbox mode for debugging with `./express/debug-sandbox.sh`.

- **deploy express code to sandbox environment**  
  Deploys the Express backend application to the sandbox (test) environment using `./express/deploy-sandbox.sh`.

- **Connect to sandbox MySQL database**  
  Connects to the sandbox MySQL database using the sandbox environment configuration via `./express/connect-to-database.sh sandbox.env`.

- **Connect to production MySQL database**  
  Connects to the production MySQL database using the production environment configuration via `./express/connect-to-database.sh prod.env`.


