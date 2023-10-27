let num1 = '';
let num2 = '';
let operator = '';

function addNumber(num) {
    if (operator === '') {
        num1 += num;
        document.getElementById('display').value = num1;
    } else {
        num2 += num;
        document.getElementById('display').value = num2;
    }
}

function addOperator(op) {
    operator = op;
}

function clearDisplay() {
    num1 = '';
    num2 = '';
    operator = '';
    document.getElementById('display').value = '';
}

function calculate() {
    let result;
    switch (operator) {
        case '+':
            result = parseInt(num1) + parseInt(num2);
            break;
        case '-':
            result = parseInt(num1) - parseInt(num2);
            break;
        case '*':
            result = parseInt(num1) * parseInt(num2);
            break;
        case '/':
            result = parseInt(num1) / parseInt(num2);
            break;
        default:
            result = '';
    }
    document.getElementById('display').value = result;
}