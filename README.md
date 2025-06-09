# ROOT SERVER DEV TEMPLATE -- FOR API DROPLETS

This Root Server dev template combines *HTML*, *Express*, *MySQL*, and *PHP*. It contains deployment scripts as well as visual studio build tasks.

Open the project file with Visual Studio Code to get started.

Publish dynamic web pages, build a deeply integrated backend, craft your database. Compatible with any Linux VCS.

The *Root Server Template* is designed to be a full-stack boilerplate for Web development, AI integrations, and Web APIs.

Check out the [Root Server Documentation](https://rootserver.kezzi.co/docs) for more information.


## BUILD TASKS

The following VS Code tasks are available for building and deploying your application (see .vscode/tasks.json):

- **deploy www**: Deploys static HTML to the web server using `./www/deploy-www.sh`.
- **deploy express**: Deploys the Express backend using `./express/deploy-prod.sh`.
- **debug express in sandbox**: Runs the Express backend in sandbox debug mode using `./express/debug-sandbox.sh`.

