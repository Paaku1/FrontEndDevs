function calc() {
    var x =parseInt(document.getElementById("num1").value);
    var y =parseInt(document.getElementById("num2").value);
    const op=document.getElementById("op").value;
    var c;
    switch (op) {
        case '+':
            c = x+y;
            break;
        case '-':
            c=x-y;
            break;
        case '*':
            c=x*y;
            break;
        case '/':
            c=(x/y);
            break;
        default:
    }
    (document.getElementById("result").value) = c;
}