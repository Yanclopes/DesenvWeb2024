let currentNumber = '';
let previousNumber = '';
let operation = null;

function appendNumber(number) {
    currentNumber += number;
    document.getElementById('display').value = currentNumber;
}

function setOperation(op) {
    if (currentNumber === '') return;
    if (previousNumber !== '') {
        calculate();
    }
    operation = op;
    previousNumber = currentNumber;
    currentNumber = '';
}

function clearDisplay() {
    currentNumber = '';
    previousNumber = '';
    operation = null;
    document.getElementById('display').value = '';
    document.getElementById('result').innerText = '';
    document.getElementById('result').style.backgroundColor = '';
}

function calculate() {
    let result;
    const prev = parseFloat(previousNumber);
    const curr = parseFloat(currentNumber);

    if (isNaN(prev) || isNaN(curr)) return;

    switch (operation) {
        case '+':
            result = prev + curr;
            break;
        case '-':
            result = prev - curr;
            break;
        case '*':
            result = prev * curr;
            break;
        case '/':
            result = prev / curr;
            break;
        default:
            return;
    }

    currentNumber = result;
    operation = undefined;
    previousNumber = '';

    displayResult(result);
}

function displayResult(result) {
    const resultElement = document.getElementById('result');
    resultElement.innerText = `Resultado: ${result}`;

    if (result < 0) {
        resultElement.style.backgroundColor = 'red';
    } else if (result > 0) {
        resultElement.style.backgroundColor = 'green';
    } else {
        resultElement.style.backgroundColor = 'gray';
    }
}
