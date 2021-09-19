function triangle(x) {

    for (let i = 0; i < x; i++) {
        let j = 0;
        let s = "";
        while (j <= i) {
            s += "#";
            j++;
        }
        console.log(s + "\n")
    }
}