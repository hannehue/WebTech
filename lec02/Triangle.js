function triangle(x, provSign) {
    let sign = provSign ? provSign : "#"
    let toPrint = sign;
    for (let i = 0; i < x; i++) {
        console.log(toPrint);
        toPrint += sign;
    }
}