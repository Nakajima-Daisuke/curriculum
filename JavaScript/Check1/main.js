// 問1:isEven関数を実行して、以下の配列から偶数だけが出力されるように実装してください。

let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
console.log(numbers);
for(let num = 0;num < numbers.length;num++) {
    if(numbers[num] % 2 === 0) {
            isEven(numbers[num]);
            }
    }

    function isEven(num) {
        console.log(num + "は偶数です。");
    }


// 問2:以下の要件を満たすように実装してください。 【要件】 ・インスタンス化した時にガソリンとナンバーがセットされるようなCarクラスを作成する ・「ガソリンは〇〇です。ナンバーは△△です」と出力される「getNumGas」という関数を作成する
class Car {
    constructor(gass,num) {
        this.gass = "〇〇";
        this.num = "△△";
    }

    getNumGas() {
        console.log(`ガソリンは${this.gass}です。ナンバーは${this.num}です。`);
    }
}
let gass = new Car
gass.getNumGas();