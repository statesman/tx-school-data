# Texas school accountability data
This repo includes:
* Texas school accountability rating data for 2016.
* A [Jupyter notebook](2016-texas-school-accountability-data.ipynb) with scripts to transform and analyze this data.
* A web page based on our [single-page project template](https://github.com/statesman/single-page-project) to present the data.

Clone this repo to run/edit the notebook or to hack on the interactive.

## Run the notebook
```shell
$ cd tx-school-data
$ mkvirtualenv school-data
$ pip install -r requirements.txt
$ jupyter notebook
```

## Hack on the interactive
```shell
$ cd tx-school-data
$ npm install
$ grunt
```

Run `grunt watch` to relint/transpile/uglify your css and js files on change.
