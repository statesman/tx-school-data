# Texas school accountability data

This repo includes:
* Texas school accountability rating data for 2013-2016. Soon to update with 2017.
* A [Jupyter notebook](processing/2016-texas-school-accountability-data.ipynb) with scripts to transform and analyze this data.
* A web page based on our [single-page project template](https://github.com/statesman/single-page-project) to present the data.

Clone this repo to run/edit the notebook or to hack on the interactive.

## Run the notebook

### 2017 preparation notes
In the `update2017` branch, Christian has:
- Updated the script to so add the 2017 data, **IF** it is formatted exactly like 2016. I was able to replicate what Cody did with 2016:
    + Open the given XLSX file
    + Delete the header rows
    + Delete any footer rows
    + SaveAs as csv
- It's possible some changes will need to be made to the 2017 processing block.
- The 2006 processing bit is saved out `processing/2016-process-saved.py`, though it should not be needed anymore.
- I (Christian) don't know how `processing/col_index.py` was used.

```shell
$ cd tx-school-data/processing
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

## Deployment
This uses [s3-parallel-put](https://github.com/mishudark/s3-parallel-put) to upload json files and [node-s3-client](https://github.com/andrewrk/node-s3-client) in a grunt task to publish the other HTML assets.
- store AWS credentials as the environmental variables AWS_SECRET_ACCESS_KEY and AWS_ACCESS_KEY_ID
- `grunt stage` or `grunt prod` publish the `public/` directory WITHOUT data
-  `bash tasks/push_data.sh stage` or `bash tasks/push_data.sh prod` upload the json files
- This is reconfigured to embed in Methode. There is a file `src/methode_embed.html` which has example code for the Methode flatpage.

## staging examples
- Methode staging flatpage https://staging-swing.coxmediagroup.com/swing/app/#editor/41$1.0.1532295620
- published staging page: https://staging.mystatesman.com/news/local-education/school-pym-test/1YmVJKXxZamhCwKdgoS6jO/

