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

**JWT**

JWT authentication is used by the API. To generate a JWT secret, run the following command:

```bash
openssl rand -base64 32
```

This will generate a random 32-byte secret that can be used by the application. Set the JWT_SECRET value in prod.env and sandbox.env for production and sandbox environments, respectively.

**MySQL**

To set up the MySQL database, you need to create a database and user. You can do this by running the following commands in your MySQL shell:



```bash

<!-- Check out the [Root Server Documentation](https://rootserver.kezzi.co/docs) for more information. -->

## BUILD TASKS

The following VS Code tasks are available for building and deploying your application (see .vscode/tasks.json):

- **deploy --www**: Deploys static HTML to the web server using `./www/deploy-www.sh`.
- **deploy --prod**: Deploys the Express backend in production mode using `./express/deploy-prod.sh`.
- **debug --sandbox**: Runs the Express backend in sandbox debug mode using `./express/debug-sandbox.sh`.
- **deploy --sandbox**: Deploys the Express backend in sandbox mode using `./express/deploy-sandbox.sh`.
- **Connect to MySQL --sandbox**: Connects to the MySQL database using the sandbox environment via `./express/connect-to-database.sh sandbox.env`.
- **Connect to MySQL --prod**: Connects to the MySQL database using the production environment via `./express/connect-to-database.sh prod.env`.

