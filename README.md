# Texas school accountability data

This repo includes:
* Texas school accountability rating data for 2013-2017.
* A [Jupyter notebook](processing/2016-texas-school-accountability-data.ipynb) with scripts to transform and analyze this data.
* A web page based on our [single-page project template](https://github.com/statesman/single-page-project) to present the data.

Clone this repo to run/edit the notebook or to hack on the interactive.

### Run the notebook

Notebooks in `processings/` use base python3 conda packages, but can also be run with virtual environments. 

```shell
$ cd tx-school-data/processing
$ mkvirtualenv school-data
$ pip install -r requirements.txt
$ jupyter notebook
```

### Hack on the interactive
```shell
$ cd tx-school-data
$ npm install
$ grunt
```

Run `grunt watch` to relint/transpile/uglify your css and js files on change.

### Deployment
This uses [s3-parallel-put](https://github.com/mishudark/s3-parallel-put) to upload json files and [node-s3-client](https://github.com/andrewrk/node-s3-client) in a grunt task to publish the other HTML assets.
- store AWS credentials as the environmental variables AWS_SECRET_ACCESS_KEY and AWS_ACCESS_KEY_ID
- `grunt stage` or `grunt prod` publish the `public/` directory WITHOUT data
-  `bash tasks/push_data.sh stage` or `bash tasks/push_data.sh prod` upload the json files
- This is reconfigured to embed in Methode. There is a file `src/methode_embed.html` which has example code for the Methode flatpage.

### Metrics

This project sends a custom Google event action `searched` to the Interactive Projects account under the category `20170815-school-ratings-flat-page` when a user types in the search boxes.

The event fires at most once per session.
