function showArticle(article, miniArticle) {
    var x = document.getElementById(article);
    var y = document.getElementById(miniArticle);
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
    } else {
        x.style.display = "none";
        y.style.display = "block";
    }
}