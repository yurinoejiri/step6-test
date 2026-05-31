// 入力チェック  ----------------------------------
document.getElementById("formDate").addEventListener("submit", (e) => {
    const name = document.getElementById("name").value;
    const companyName = document.getElementById("companyName").value;
    const email = document.getElementById("email").value;
    const age = document.getElementById("age").value;
    const message = document.getElementById("message").value;

    if (name.trim() === "" || companyName.trim() === "" || email.trim() === "" || age.trim() === "" || message.trim() === "") {
        alert("必須項目が未入力です。入力内容をご確認ください。");
        e.preventDefault();
        return;
    }
    const confirmMessage = `下記の内容を本当に送信しますか？\n\nお名前→${name}\n会社名→${companyName}\nメールアドレス→${email}\n年齢→${age}\nお問い合わせ内容→${message}`;
    const result = confirm(confirmMessage);
    if (!result) {
        e.preventDefault();
    }
})



//フッターのカラー変更  -----------------------------
const colors = ["red", "yellow", "gray", "blue"];
let colorIndex = 0;
document.querySelector("#button-color").addEventListener("click", () => {

    const footer = document.querySelector("footer");

    footer.style.backgroundColor = colors[colorIndex];
    colorIndex++;

    if(colorIndex >= 4){
        colorIndex = 0;
    }
}); 