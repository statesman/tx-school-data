import csv

### Process preliminary 2016 data
# The initial data release for 2016, [available here as an Excel file]
# (http://tea.texas.gov/WorkArea/linkit.aspx?LinkIdentifier=id&ItemID=51539609928),
# had the four top-level index scores and the "met standard" ratings,
# so that defineed our fields. The file was saved as `data/2016-raw-data.csv`,
# headers chopped and notes lines at bottom were deleted. The processing
# script was similar to**Running this code block creates the file
# `/data/2016-processed-data.txt`**
##################################

with open('data/2016-raw-data.csv', 'r') as file_in, \
         open('data/2016-processed-data.txt', 'w') as file_out:
    reader = csv.reader(file_in, delimiter=',')


    fieldnames = ['campus_id', 'campus_name', 'district_name', 'rating', 'i1_target', 'i1_score',
                  'i2_target', 'i2_score', 'i3_target', 'i3_score', 'i4_target', 'i4_score', 'year']
    
    writer = csv.DictWriter(file_out, fieldnames=fieldnames, delimiter="|")
    # writer.writeheader()
    
    for row in reader:
        if row[1] != "":
            d = {}
            # left pad to nine digits or your results will be wack
            d['campus_id'] = row[3].zfill(9)
            d['campus_name'] = row[1]
            d['district_name'] = row[0]
            d['rating'] = row[5]
            d['i1_target'] = row[7]
            d['i1_score'] = row[6]
            d['i2_target'] = row[10]
            d['i2_score'] = row[9]
            d['i3_target'] = row[13]
            d['i3_score'] = row[12]
            d['i4_target'] = row[16]
            d['i4_score'] = row[15]
            d['year'] = '2016'
            writer.writerow(d)

print("~ processed 2016 raw data ~")