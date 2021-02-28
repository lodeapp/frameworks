# Lode testing frameworks

This is a set of frameworks for developing and testing of drivers for the [Lode application](https://github.com/lodeapp/lode).

Lode is an open source [Electron](https://electronjs.org/)-based universal test runner graphical user interface. It is written in [TypeScript](http://www.typescriptlang.org) and [Vue](https://vuejs.org/).

## Development

Each framework could require a different setup process, and different run command and a different working environment, so be sure to check individual `package.json` files or the like for specific commands.

For those frameworks that support Docker compose, a `lode` shell script should be present. Running `sh lode setup` will prepare the environment, if needed, and running `sh lode` should execute the tests. Running `sh lode` from within Lode itself should yield output that can be parsed by Lode correctly (if not, the framework [might not yet be supported](https://lode.run/documentation/frameworks.html#adding-frameworks-to-lode)).

## License

The setup of each framework is licensed under the [MIT license](LICENSE), although the frameworks themselves might not.
