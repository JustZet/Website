function fetchData() {
    let request = new Request("Api/read.php");
    fetch(request) 
    .then((resp) => {
        return resp.json();
    })
    .then((data) => {
        console.log(data);
        const html = data.data.map(users => {
            return `<p> Adress: ${users.First_Name} </p>`;
        })
        .join("");
        document.querySelector("#users")
        .insertAdjacentHTML('afterbegin', html)
    })
    .catch((err) => {
        console.log(err);
    });
}

fetchData();