// Call data from the rest api
let request = new Request("Api/users.php");
async function fetchData() {
    await fetch(request) 
    .then((resp) => {
        return resp.json();
    })
    .then((data) => {
        console.log(data);
        const html = data.data.map(users => {
            return `<div>
            <p>User: ${users.First_Name} </p>
            <p>LastName: ${users.Last_Name} </p>
            </div>`;
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