# Building the package

```sh
java -jar swagger-codegen-cli.jar generate -i memsource.yml -l php -o ./ -c config.json
```
## memsource.yml

1. Get file from memsource: https://cloud.memsource.com/web/api/docs/yaml
2. Remove all `conversations` related endpoints


## config.json

```json
{
  "variableNamingConvention": "camelCase",
  "invokerPackage": "Memsource",
  "packagePath": "php-memsource-client",
  "srcBasePath": "src",
  "composerProjectName": "php-memsource",
  "gitUserId": "theodoreb",
  "gitRepoId": "php-memsource"
}
```
