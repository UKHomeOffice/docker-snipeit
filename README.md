# Docker-snipeit

This snipeit cloned from snipe/snipe-it and customized to run with non-root user. Snipe-IT is Open Source Asset Management System.

Snipe-IT v5.1.5

# Usage

To use this snipeit, first clone this repo

```
git@github.com:UKHomeOffice/docker-snipeit.git
```

## Development with Docker
Once you've cloned the project, build the snipeit Docker container

```sh
docker build -t snipeit .
```

To run the resulting Docker container:

```sh
docker run -it snipeit
```
