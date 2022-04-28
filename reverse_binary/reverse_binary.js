const int = 13;

function convertToBinary(number) {
    let num = number;
    
    return number.toString(2);
}

console.log(convertToBinary(int));


const binary = '1011';

function convertToDecimal(number) {
    let num = number;
    
    return parseInt(num, 2)
}

console.log(convertToDecimal(binary));
