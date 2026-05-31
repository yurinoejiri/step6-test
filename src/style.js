// 未入力アラート　----------------------------------------

function validate() {
    if (document.getElementById("name").value.trim() === "" ||
        document.getElementById("companyName").value.trim() === "" ||
        document.getElementById("age").value.trim() === "" ||
        document.getElementById("email").value.trim() === "" ||
        document.getElementById("message").value.trim() === ""
    ) {
        alert("必須項目が未入力です。入力内容をご確認ください。");
        return false;//フォームをキャンセルする
    }

// 送信内容確認アラート -----------------------------------

const name = document.getElementById("name").value;
const companyName = document.getElementById("companyName").value;
const age = document.getElementById("age").value;
const email = document.getElementById("email").value;
const message = document.getElementById("message").value;

const result = confirm(
    "下記の内容を本当に送信しますか？\nお名前:" + name +
    "\n会社名:" + companyName + "\n年齢:" + age +
    "\nメールアドレス:" + email +
    "\nお問い合わせ内容:" + message
);
        
if (!result) {
        return false;
}

return true;
}

// 背景色の変更　------------------------------------------

let colors = ["blue", "red", "yellow", "gray"];
let index = 0;

document.getElementById("footer-btn").addEventListener("click", () => {
    index = (index + 1) % colors.length;
    document.querySelector("#footer-colors").style.backgroundColor = colors[index];
});