<script>
    function getUnineAfterMerge(arr1, arr2){
        arr1.sort()
        arr2.sort()
        let arr = arr1.concat(arr2)
        for(let i of arr){
            if(uniqueArr.indexOf(i) == -1){
                uniqueArr.push(i);
            }
        }
        console.log(uniqueArr);
    }
const array1 = [1,2,3,4,5];
const array2 = [100, 2, 1, 10];
getUnineAfterMerge(array1, array2);
</script>