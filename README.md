# Kirby Agency Template

> A nice [Kirby](https://getkirby.com/) based piece of web software.

## Technical setup

### Locale installation

1. Clone repo, access folder
    ```sh
    git clone git@github.com:jan-heise/agency.git && cd agency
    ```
2. Copy, rename and edit `.env` file
    ```sh
    cp .env.example .env
    ```
3. Copy .env file into the .ddev folder to give DDEV access to the variables
    ```
    cp .env .ddev
    ```
4. Start the DDEV container _(Keys from your `~/.ssh` directory are automatically added via the post-start hook)_
    ```sh
    ddev start
    ```
5. Run DDEV setup _(Composer, npm, build process)_
    ```sh
    ddev setup
    ```
6. Update stage variables and domain info in the DDEV `update-content` command located in `.ddev/commands/web`.
7. Download `content` folder from stage
    ```sh
    ddev update-content
    ```

### Build process

-   `ddev build` to run the build process
-   `ddev watch` to run the watcher

### Utilities

-   `ddev update-composer` to update and bump composer packages
-   `ddev update-npm` to update NPM packages

## DDEV Links

| Service    | URL                       |
| :--------- |:--------------------------|
| web        | https://agency.local      |
| Mailhog    | https://agency.local:8026 |
