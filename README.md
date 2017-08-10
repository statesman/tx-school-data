# Texas school accountability data
This repo includes:
* Texas school accountability rating data for 2013-2016. Soon to update with 2017.
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

### Christian note on env
I was able to run this in Conda using my `data` environment. It doesn't appear to use any modules outside of base python3.

## Hack on the interactive
```shell
$ cd tx-school-data
$ npm install
$ grunt
```

Run `grunt watch` to relint/transpile/uglify your css and js files on change.

## 2017 preparation notes
In the `update2017` branch, Christian has:
- Updated the script to so add the 2017 data, **IF** it is formatted exactly like 2016. I was able to replicate what Cody did with 2016:
    + Open the given XLSX file
    + Delete the header rows
    + Delete any footer rows
    + SaveAs as csv
- It's possible some changes will need to be made to the 2017 processing block.
