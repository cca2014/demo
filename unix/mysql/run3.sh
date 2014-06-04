:
for file in src/*.csv
do
    echo $file
    cat $file | filterline > $file.out
done

# echo Orders.csv.out | cut -d"." -f1,2
cd src
for file in *.out
do
    newfile=`echo $file | cut -d"." -f1,2`
    echo "$file -> ../sql/$newfile"
    mv $file ../sql/$newfile
done