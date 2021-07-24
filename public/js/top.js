

//   Go to top button
$('#myBtn').on('click', function (e) {

    // Define variable of the clicked »a« element (»this«) and get its href value.
    var href = $(this).attr('href')

    // Run a scroll animation to the position of the element which has the same id like the href value.
    $('html, body').animate({
        scrollTop: $(href).offset().top
    }, '800')

    // Prevent the browser from showing the attribute name of the clicked link in the address bar
    e.preventDefault()

})

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}



const scrollFunc = () => {
    let y = window.scrollY;

    if (y > 300) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
};

window.addEventListener("scroll", scrollFunc);

const scrollToTop = () => {
    const c = document.documentElement.scrollTop || document.body.scrollTop;
    window.requestAnimationFrame(scrollToTop);
    window.scrollTo(0, c-c/300);
};


//   Go to top button
$('#myBtn1').on('click', function (e) {

    // Define variable of the clicked »a« element (»this«) and get its href value.
    var href = $(this).attr('href')

    // Run a scroll animation to the position of the element which has the same id like the href value.
    $('html, body').animate({
        scrollTop: $(href).offset().top
    }, '800')

    // Prevent the browser from showing the attribute name of the clicked link in the address bar
    e.preventDefault()

})

//   Go to top button
$('#myBtn2').on('click', function (e) {

    // Define variable of the clicked »a« element (»this«) and get its href value.
    var href = $(this).attr('href')

    // Run a scroll animation to the position of the element which has the same id like the href value.
    $('html, body').animate({
        scrollTop: $(href).offset().top
    }, '800')

    // Prevent the browser from showing the attribute name of the clicked link in the address bar
    e.preventDefault()

})
