function OurService() {


    const slidingCards = document.querySelectorAll(".sliding-card");
    const nextButton = document.querySelector(".fa-chevron-right");
    const prevButton = document.querySelector(".fa-chevron-left");
    const loopTiming = 4000;
    const isRunning = false;
    let slideInterval;
    const nextCard = () => {
        const currentCard = document.querySelector(".current");
        const beforeCurrentCard = document.querySelector(".before-current");
        const afterCurrentCard = document.querySelector(".after-current");
        const firstCard = document.querySelector(".first-card");
        const lastCard = document.querySelector(".last-card");
        currentCard.classList.remove("current");
        beforeCurrentCard.classList.remove("before-current");
        afterCurrentCard.classList.remove("after-current");
        firstCard.classList.remove("first-card");
        lastCard.classList.remove("last-card");
        currentCard.classList.add("after-current");
        afterCurrentCard.classList.add("last-card");
        lastCard.classList.add("first-card");
        firstCard.classList.add("before-current");
        beforeCurrentCard.classList.add("current");

        return;
    };

    const prevCard = () => {
        const currentCard = document.querySelector(".current");
        const beforeCurrentCard = document.querySelector(".before-current");
        const afterCurrentCard = document.querySelector(".after-current");
        const firstCard = document.querySelector(".first-card");
        const lastCard = document.querySelector(".last-card");
        currentCard.classList.remove("current");
        beforeCurrentCard.classList.remove("before-current");
        afterCurrentCard.classList.remove("after-current");
        firstCard.classList.remove("first-card");
        lastCard.classList.remove("last-card");
        currentCard.classList.add("before-current");
        afterCurrentCard.classList.add("current");
        lastCard.classList.add("after-current");
        firstCard.classList.add("last-card");
        beforeCurrentCard.classList.add("first-card");
    };
    nextButton.addEventListener("click", () => {
        nextCard();
        if (isRunning) {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextCard, loopTiming);
        }
        nextButton.disabled = true;
        setTimeout(() => {
            nextButton.disabled = false;
        }, 400);
    });

    prevButton.addEventListener("click", () => {
        prevCard();
        if (isRunning) {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextCard, loopTiming);
        }
        prevButton.disabled = true;
        setTimeout(() => {
            prevButton.disabled = false;
        }, 400);
    });

    if (isRunning) {
        slideInterval = setInterval(nextCard, loopTiming);
    }
}
OurService();



//phoneGallery()
function phoneGallery() {
    var images = document.querySelectorAll('.image');
    var i = 1;
    showImage(i);
    $('.box .fa-chevron-left').click(
        function () {
            addShow(-1);
        }
    )
    $('.box .fa-chevron-right').click(
        function () {
            addShow(1);
        }
    )

    function addShow(n) {
        showImage(i += n);
    }

    function showImage(n) {
        let j;
        if (n > images.length) {
            i = 1
        }
        if (n < 1) {
            i = images.length
        }
        for (let i = 0; i < images.length; i++) {
            $(images[i]).hide();
        }
        images[i - 1].style.display = "block";
    }
}
phoneGallery();

function WriteWords() {
    document.addEventListener('DOMContentLoaded', function (event) {
        //manual input 
        var dataText = ["Frisur", "style", "Rasur", "skincare"];

        function typeWriter(text, i, fnCallback) {
            if (i < (text.length)) {
                document.querySelector("#changing").innerHTML = text.substring(0, i + 1) +
                    '<span aria-hidden="true"> </span>';
                setTimeout(function () {
                    typeWriter(text, i + 1, fnCallback)
                }, 100);
            } else if (typeof fnCallback == 'function') {
                setTimeout(fnCallback, 700);
            }
        }

        function StartTextAnimation(i) {
            if (typeof dataText[i] == 'undefined') {
                setTimeout(function () {
                    StartTextAnimation(0);
                }, 10000);
            }
            if (i < dataText[i].length) {
                typeWriter(dataText[i], 0, function () {
                    StartTextAnimation(i + 1);
                });
            }
        }
        StartTextAnimation(0);
    });
}
WriteWords();

function showImage() {

    $('#gallery .img').click(function () {
        $('#gallery .first').before(
            '<div class="showImg D-F"><i class="fa-solid fa-xmark D-F"></i></div>');
        var img = $(this);
        var imgSrc = img.find(">:first-child").attr('src');
        $('.showImg').append('<img>');
        $('.showImg img').attr('src', imgSrc)
        $('#gallery .img').addClass('active');
        $('#gallery .img .overlays').css('background', 'rgba(0, 0, 0, 0.80)');
        xmark();
    });

    function xmark() {
        $('#gallery .fa-xmark').click(function () {
            $('#gallery .img .overlays').css('background', 'rgba(0, 0, 0, 0.40)');
            $('#gallery .img').removeClass('active');
            $(this).hide();
            $('.showImg').remove();
        });
    }
}
showImage();
