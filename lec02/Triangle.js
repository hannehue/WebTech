function triangle(x, provSign) {
    let sign = "#";
    if (provSign) {
        sign = provSign
    }

    for (let i = 0; i < x; i++) {
        let j = 0;
        let s = "";
        while (j <= i) {
            s += sign;
            j++;
        }
        console.log(s + "\n")
    }
}