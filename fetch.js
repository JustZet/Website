let Request = new Request("Api/read.php");

fetch(Request)
.then((resp) => {
    return resp.json();
})
.then((data) => {
    console.log(data);
})
.catch((err) => {
    console.log(err);
});