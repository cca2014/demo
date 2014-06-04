:
for file in src/*.csv
do
    echo $file
    cat $file | filterline > $file.out
done