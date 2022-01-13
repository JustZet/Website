let request = new Request("Api/read.php");

fetch(request)
.then((resp) => {
    return resp.json();
})
.then((data) => {
    console.log(data);
})
.catch((err) => {
    console.log(err);
});
